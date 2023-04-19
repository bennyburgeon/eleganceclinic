<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerReview extends Model
{
    public $table='customer_reviews'; 
    protected $primaryKey = 'customer_review_id';
    protected $fillabe = ['image','name','date','textarea'];

}
