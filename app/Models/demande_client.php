<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class demande_client extends Model
{
    use HasFactory;
    public function doctor(){
        return $this->belongsTo(Doctor::class);
    }
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
    
    protected $fillable = [
        'nom', 'prenom', 'email', 'jour', 'heure', 'phone', 'address', 'doctor_id'
    ];
}
