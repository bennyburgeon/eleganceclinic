<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
    use HasFactory;
    protected $connection = 'mysql2';

    protected $table = 'customers';

    protected $primaryKey = 'customer_id';

    public function visitDetails()
    {
      return $this->hasMany(CustomerOffer::class,'customer_id','customer_id');
    }
}
