<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    public $table='treatments'; 
    protected $primaryKey = 'treatment_id';
    protected $fillabe = ['image','category_id','headline','treatment','description','benefit','faq'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'category_id');
    }
}
