<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clinic extends Model
{
    use HasFactory;
    public $table='clinics'; 
    protected $primaryKey = 'clinic_id';
    protected $fillabe = ['name','image','google','facebook','about','opening_hours',
    'facilities','payment','packages','pricelist','gift','map','booking_button'];

}
