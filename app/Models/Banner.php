<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    public $table='banners'; 
    protected $primaryKey = 'banner_id';
    protected $fillabe = ['image','title_main','title_sub','title_para',
    'button_title','button_link','created_by','updated_by'];
}
