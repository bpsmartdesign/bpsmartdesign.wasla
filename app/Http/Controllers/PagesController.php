<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Tools;

class PagesController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index()
  {
    $page_title = 'Dashboard';
    $page_description = 'Some description for the page';
    $user = Auth::user();
    $abb = '';

    foreach (explode(' ', $user->nom_complet) as $name) {
      $abb .= $name[0];
    }

    return view('pages.dashboard', compact('page_title', 'page_description', 'user', 'abb'));
  }

  public function chorale()
  {
    $page_title = 'chorale';
    $user = Auth::user();
    $abb = '';

    foreach (explode(' ', $user->nom_complet) as $name) {
      $abb .= $name[0];
    }
    return view('pages.chorale', compact('page_title', 'user', 'user', 'abb'));
  }

  public function profil()
  {
    $page_title = 'profil';
    $user = Auth::user();
    $abb = '';

    foreach (explode(' ', $user->nom_complet) as $name) {
      $abb .= $name[0];
    }
    return view('pages.profil', compact('page_title', 'user', 'user', 'abb'));
  }

  public function user()
  {
    $page_title = 'user';
    $user = Auth::user();
    $abb = '';

    foreach (explode(' ', $user->nom_complet) as $name) {
      $abb .= $name[0];
    }
    return view('pages.user', compact('page_title', 'user', 'user', 'abb'));
  }

  public function waiting()
  {
    $page_title = 'waiting';
    $user = Auth::user();
    $abb = '';

    foreach (explode(' ', $user->nom_complet) as $name) {
      $abb .= $name[0];
    }
    return view('pages.waiting', compact('page_title', 'user', 'user', 'abb'));
  }

  public function title()
  {
    $page_title = 'Rôles';
    $user = Auth::user();
    $abb = '';

    foreach (explode(' ', $user->nom_complet) as $name) {
      $abb .= $name[0];
    }
    return view('pages.title', compact('page_title', 'user', 'user', 'abb'));
  }

  public function media()
  {
    $page_title = 'media';
    $user = Auth::user();
    $abb = '';

    foreach (explode(' ', $user->nom_complet) as $name) {
      $abb .= $name[0];
    }
    return view('pages.media', compact('page_title', 'user', 'user', 'abb'));
  }

  public function contributions()
  {
    $page_title = 'contributions';
    $user = Auth::user();
    $abb = '';

    foreach (explode(' ', $user->nom_complet) as $name) {
      $abb .= $name[0];
    }
    return view('pages.contributions', compact('page_title', 'user', 'user', 'abb'));
  }

  public function events()
  {
    $page_title = 'events';
    $user = Auth::user();
    $abb = '';

    foreach (explode(' ', $user->nom_complet) as $name) {
      $abb .= $name[0];
    }
    return view('pages.events', compact('page_title', 'user', 'user', 'abb'));
  }

  public function repetition()
  {
    $page_title = 'repetition';
    $user = Auth::user();
    $abb = '';

    foreach (explode(' ', $user->nom_complet) as $name) {
      $abb .= $name[0];
    }
    return view('pages.repetition', compact('page_title', 'user', 'user', 'abb'));
  }

  public function event_type()
  {
    $page_title = 'event_type';
    $user = Auth::user();
    $abb = '';

    foreach (explode(' ', $user->nom_complet) as $name) {
      $abb .= $name[0];
    }
    return view('pages.event_type', compact('page_title', 'user', 'user', 'abb'));
  }

  public function actuality()
  {
    $page_title = 'actuality';
    $user = Auth::user();
    $abb = '';

    foreach (explode(' ', $user->nom_complet) as $name) {
      $abb .= $name[0];
    }
    return view('pages.actuality', compact('page_title', 'user', 'user', 'abb'));
  }

  public function actuality_cat()
  {
    $page_title = 'actuality_cat';
    $user = Auth::user();
    $abb = '';

    foreach (explode(' ', $user->nom_complet) as $name) {
      $abb .= $name[0];
    }
    return view('pages.actuality_cat', compact('page_title', 'user', 'user', 'abb'));
  }

  /**
   * Demo methods below
   */

  // Datatables
  public function datatables()
  {
    $page_title = 'Datatables';
    $page_description = 'This is datatables test page';

    $user = Auth::user();
    $abb = '';

    foreach (explode(' ', $user->nom_complet) as $name) {
      $abb .= $name[0];
    }
    return view('pages.datatables', compact('page_title', 'page_description', 'user', 'abb'));
  }

  // KTDatatables
  public function ktDatatables()
  {
    $page_title = 'KTDatatables';
    $page_description = 'This is KTdatatables test page';

    $user = Auth::user();
    $abb = '';

    foreach (explode(' ', $user->nom_complet) as $name) {
      $abb .= $name[0];
    }
    return view('pages.ktdatatables', compact('page_title', 'page_description', 'user', 'abb'));
  }

  // Select2
  public function select2()
  {
    $page_title = 'Select 2';
    $page_description = 'This is Select2 test page';

    $user = Auth::user();
    $abb = '';

    foreach (explode(' ', $user->nom_complet) as $name) {
      $abb .= $name[0];
    }
    return view('pages.select2', compact('page_title', 'page_description', 'user', 'abb'));
  }

  // custom-icons
  public function customIcons()
  {
    $page_title = 'customIcons';
    $page_description = 'This is customIcons test page';

    $user = Auth::user();
    $abb = '';

    foreach (explode(' ', $user->nom_complet) as $name) {
      $abb .= $name[0];
    }
    return view('pages.icons.custom-icons', compact('page_title', 'page_description', 'user', 'abb'));
  }

  // flaticon
  public function flaticon()
  {
    $page_title = 'flaticon';
    $page_description = 'This is flaticon test page';

    $user = Auth::user();
    $abb = '';

    foreach (explode(' ', $user->nom_complet) as $name) {
      $abb .= $name[0];
    }
    return view('pages.icons.flaticon', compact('page_title', 'page_description', 'user', 'abb'));
  }

  // fontawesome
  public function fontawesome()
  {
    $page_title = 'fontawesome';
    $page_description = 'This is fontawesome test page';

    $user = Auth::user();
    $abb = '';

    foreach (explode(' ', $user->nom_complet) as $name) {
      $abb .= $name[0];
    }
    return view('pages.icons.fontawesome', compact('page_title', 'page_description', 'user', 'abb'));
  }

  // lineawesome
  public function lineawesome()
  {
    $page_title = 'lineawesome';
    $page_description = 'This is lineawesome test page';

    $user = Auth::user();
    $abb = '';

    foreach (explode(' ', $user->nom_complet) as $name) {
      $abb .= $name[0];
    }
    return view('pages.icons.lineawesome', compact('page_title', 'page_description', 'user', 'abb'));
  }

  // socicons
  public function socicons()
  {
    $page_title = 'socicons';
    $page_description = 'This is socicons test page';

    $user = Auth::user();
    $abb = '';

    foreach (explode(' ', $user->nom_complet) as $name) {
      $abb .= $name[0];
    }
    return view('pages.icons.socicons', compact('page_title', 'page_description', 'user', 'abb'));
  }

  // svg
  public function svg()
  {
    $page_title = 'svg';
    $page_description = 'This is svg test page';

    $user = Auth::user();
    $abb = '';

    foreach (explode(' ', $user->nom_complet) as $name) {
      $abb .= $name[0];
    }
    return view('pages.icons.svg', compact('page_title', 'page_description', 'user', 'abb'));
  }

  // Quicksearch Result
  public function quickSearch()
  {
    $user = Auth::user();
    $abb = '';

    foreach (explode(' ', $user->nom_complet) as $name) {
      $abb .= $name[0];
    }
    return view('layout.partials.extras._quick_search_result', compact('user', 'abb'));
  }
}
