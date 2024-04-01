<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
namespace App\Http\Controllers;

use App\Models\Departmente;
use App\Models\Doctor;

use App\Models\Ville;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;




class RecherchController extends Controller
{
    public function rechercher(Request $request)
    {
        $doctor=Doctor::all();
        $deparetements=Departmente::all();
        $villes=Ville::all();
        $depart=$request -> departements;
        $ville=$request -> city;
        $doctordepart=$doctor->where('departement_id',$depart)->where('ville_id',$ville);
        
        return view('cardss',compact('doctordepart','deparetements','villes'));
        // dd($doctordepart);
    }
    public function afficher(){
        $deparetements=Departmente::all();
        $villes=Ville::all();
        return view('PAGEPRICIPALCLIENT',compact('deparetements','villes'));


    }
   
}

