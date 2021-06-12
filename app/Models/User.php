<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
  use SoftDeletes;
  use Notifiable;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'chorale_id',
    'status',
    'role',
    'nom_complet',
    'email',
    'email_verified_at',
    'password',
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
    'password', 'remember_token',
  ];

  /**
   * The attributes that should be cast to native types.
   *
   * @var array
   */
  protected $casts = [
    'chorale_id' => 'integer',
    'status' => 'string',
    'role' => 'string',
    'nom_complet' => 'string',
    'email' => 'string',
    'password' => 'string',
    'email_verified_at' => 'datetime',
  ];
}
