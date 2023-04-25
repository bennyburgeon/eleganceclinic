<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $table='categories'; 
    protected $primaryKey = 'category_id';
    protected $fillabe = ['name'];


}
