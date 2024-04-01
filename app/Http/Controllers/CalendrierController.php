<?php

namespace App\Http\Controllers;

use App\Models\Calendrier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CalendrierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $doctorConnecteCalendrier=Calendrier::where('doctor_id',auth()->user()->id)->get();
        return view('Doctors.DoctorArea.calendrier', compact('doctorConnecteCalendrier'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'jour' => 'required',
            'decalage' => 'required',
            'hdepart' => 'required',
            'hfin' => 'required',
            'delaiconsultation' => 'required',
        ]);
        if ($validator->fails()) {
                return back()->withErrors('Tous les champs sont obligatoires');
        }
        $jour=$request->jour;
        $jourcalendrier=count(Calendrier::where('jour',$jour)->get());
        if($jourcalendrier===2){
            return back()->withErrors('vous pouvez pas ajouter le même jour pour plus de 2 décalages');
        }
        $calendrier=new Calendrier;
        $calendrier->jour=$jour;
        $calendrier->decalage=$request->decalage;
        $calendrier->hdepart=$request->hdepart;
        $calendrier->hfin=$request->hfin;
        $calendrier->delaiconsultation=$request->delaiconsultation;
        $calendrier->doctor_id=auth()->user()->id;
        $calendrier->save();
        if($calendrier)
        return back()->with('success','Le calendrier est ajouté avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $calendriers=Calendrier::all();
        $calendrier=Calendrier::find($id);
        return view('Doctors.DoctorArea.editCalendrier',compact('calendrier','calendriers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $calendrier=Calendrier::find($id);
        $calendrier->update([
            $calendrier->jour=$request->jour,
    $calendrier->decalage=$request->decalage,
    $calendrier->hdepart=$request->hdepart,
    $calendrier->hfin=$request->hfin,
    $calendrier->delaiconsultation=$request->delaiconsultation,
        ]);
        if($calendrier){
            return to_route('calendries.create');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Calendrier::destroy($id);
        return back();
    }
    
}
