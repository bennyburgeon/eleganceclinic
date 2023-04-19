<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;
    public $table='notifications';
    protected $primaryKey = 'notification_id';
    protected $fillabe = ['title','discription','link'];
}
