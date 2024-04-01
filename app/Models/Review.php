<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $table='reviews';
    protected $fillable = [
        'commentaire',
        'email',
        'nom_complet'
    ];
    public function client(){
        return $this->belongsTo(Client::class);
    }
}
