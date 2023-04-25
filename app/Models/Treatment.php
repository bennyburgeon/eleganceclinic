<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    public $table='treatments'; 
    protected $primaryKey = 'treatment_id';
    protected $fillabe = ['image','headline','treatment','description','benefit','faq','treatment_journey','pre_post_treatment','treatable_area','disPacks','bkngLink','aftercare_description','aftercare_note'];


}
