<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = [
        'matricule',
        'nom',
        'prenom',
        'phonenumber',
        'genre',
        'profileimage',
        'description',
        'age',
        'adresse',
        'speciality',
        'email',
        'password',
        'departement_id',
        'ville_id',
        'remember_token'
    ];
    public function departement(){
        return $this->belongsTo(Departement::class,'departement_id');
    }
    public function ville(){
        return $this->belongsTo(Ville::class);
    }
    public function reservations(){
        return $this->belongsToMany(Client::class,'reservations','doctor_id','client_id')->withPivot(['date','status']);
    }
    public function calendries(){
        return $this->hasMany(Calendrier::class,'doctor_id');
    }

    public function demandesClients()
    {
        return $this->hasMany(demande_client::class);
    }
}
