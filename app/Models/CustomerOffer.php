<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class CustomerOffer extends Model
{
    use  HasFactory;
    protected $table = 'customer_offers';

    protected $primaryKey = 'customer_offer_id';
  
    protected $fillable = [
      'customer_id',
      'amount',
      'redeem_amount',
      'paid_amount',
      'type',
      'discount',
      'rewarded_amount',
      'date_of_payment',
      'created_by',
      'status'
    ];
}
