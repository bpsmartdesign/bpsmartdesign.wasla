<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Title;
use App\Models\Tools;
use App\Models\VoiceType;
use App\Models\VoiceTypeUser;
use App\Models\UserInstrument;
use App\Models\UserDetail;
use App\Models\UserTitle;
use Illuminate\Database\QueryException;

class RegisterController extends Controller
{
  /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
      */

  use RegistersUsers;

  /**
   * Where to redirect users after registration.
   *
   * @var string
   */
  protected $redirectTo = RouteServiceProvider::HOME;

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware('guest');
  }

  /**
   * Show the application registration form.
   *
   * @return \Illuminate\View\View
   */
  public function showRegistrationForm()
  {
    $titles = Title::all();
    $tools = Tools::all();
    $voices = VoiceType::all();

    return view('auth.register', compact(['titles', 'tools', 'voices']));
  }

  /**
   * Get a validator for an incoming registration request.
   *
   * @param  array  $data
   * @return \Illuminate\Contracts\Validation\Validator
   */
  protected function validator(array $data)
  {
    return Validator::make($data, [
      'nom_complet' => ['required', 'string', 'max:255'],
      'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
      'password' => ['required', 'string', 'min:8', 'confirmed'],
    ]);
  }

  public function register(Request $request)
  {

    $this->validator($request->all())->validate();

    // User first
    $user = $request->except('_token', 'sexe', 'address1', 'address2', 'phone1', 'phone2', 'tools', 'titles', 'voices');
    $user['status'] = 'inactive';
    $user['role'] = 'member';
    $user['created_by_user_id'] = '0';
    if ($user['password'] != $user["password_confirmation"])
      return redirect()->back()->with('error', 'Les mots de passes ne conrrespondent pas');
    else
      $user['password'] = Hash::make($user['password']);

    // User details
    $userDetails = $request->except('_token', 'nom_complet', 'email', 'password', 'password_confirmation', 'tools', 'titles', 'voices');
    $userDetails['photo'] = '';
    $userDetails['created_by_user_id'] = '0';

    // Instruments, Voices, Titles
    $userInstrument = $request['tools'];
    $userVoice = $request['voices'];
    $userTitle = $request['titles'];

    DB::beginTransaction();
    try {
      // Save User First
      $_user = new User($user);
      $users = User::all();

      foreach ($users as $elt) {
        if (strtolower($_user->email) == $elt->email)
          return redirect()->back()->with('error', 'Addresse email non disponbile');
      } // check email double values

      $_user->save();
      $nextUserId = $_user->id;

      // User detail
      $userDetails['user_id'] = $nextUserId;
      $_uDetail = new UserDetail($userDetails);
      $_uDetail->save();

      // Others
      foreach ($userInstrument as $ui) {
        $_ui = [
          'user_id' => $nextUserId,
          'instrument_id' => $ui,
          'created_by_user_id' => 1
        ];

        $uiToSave = new UserInstrument($_ui);
        $uiToSave->save();
      } // Instrument

      foreach ($userVoice as $uv) {
        $_uv = [
          'user_id' => $nextUserId,
          'voice_type_id' => $uv,
          'created_by_user_id' => 1
        ];

        $uiToSave = new VoiceTypeUser($_uv);
        $uiToSave->save();
      } // Voices

      foreach ($userTitle as $ut) {
        $_ut = [
          'user_id' => $nextUserId,
          'title_id' => $ut,
          'created_by_user_id' => 1
        ];

        $uiToSave = new UserTitle($_ut);
        $uiToSave->save();
      } // Titles

      DB::commit();
      return redirect()->back()->with('success', 'Enrégistrement réussi, Attente de confirmation');
    } catch (QueryException | \Exception $exception) {
      DB::rollBack();
      return redirect()->back()->with('error', $exception->getMessage());
    }
  }

  /**
   * Create a new user instance after a valid registration.
   *
   * @param  array  $data
   * @return \App\User
   */
  protected function create(array $data)
  {
    return User::create([
      'nom_complet' => $data['nom_complet'],
      'email' => $data['email'],
      'password' => Hash::make($data['password']),
    ]);
  }
}
