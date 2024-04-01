<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendrier extends Model
{
    use HasFactory;
    protected $fillable = [
        'jour',
        'decalage',
        'hdepart',
        'hfin',
        'delaiConsultation',
        'doctor_id',
    ];
    public function doctor(){
        return $this->belongsTo(Doctor::class);
    }
}

