<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departmente extends Model
{
    protected $table="departements";
    protected $fillable=[
      'id',
    'libelle'
    ];
    public function doctors(){
      return $this->hasMany(Doctor::class,'doctor_id');
  }
     use HasFactory;
   
}
