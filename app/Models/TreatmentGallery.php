<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TreatmentGallery extends Model
{
    use HasFactory;

    public $table='treatment_galleries'; 
    protected $primaryKey = 'gallery_id';
    protected $fillabe = ['image','treatment_id'];

}
