<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Award extends Model
{
    public $table = 'awards'; 
    protected $primaryKey = 'award_id';
    protected $fillabe = ['image','name','awarded_by','year'];
}
