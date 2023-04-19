<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salon extends Model
{
    use HasFactory;
    public $table='salons'; 
    protected $primaryKey = 'salon_id';
    protected $fillabe = ['name','image','google','facebook','about','opening_hours',
    'facilities','payment','packages','pricelist','gift','map','booking_button'];
    public function offerDetails()
    {
      return $this->hasMany(Offer::class,'salon_id','salon_id');
    }
}
