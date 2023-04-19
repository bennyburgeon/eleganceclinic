<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    public $table='offers'; 
    protected $primaryKey = 'offer_id';
    public function offer()
    {
      return $this->belongsTo(Salon::class,'salon_id','salon_id');
    }
}
