<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
 use Illuminate\Foundation\Auth\User as Authenticatable;
 use Illuminate\Notifications\Notifiable; 
 use Laravel\Sanctum\HasApiTokens;
 use Illuminate\Contracts\Auth\MustVerifyEmail;

class Admin extends Authenticatable
{
   use HasApiTokens, Notifiable; 
   public $table = 'admins'; 
   protected $primaryKey = 'admin_id';
   protected $fillabe = ['username','password'];
}
