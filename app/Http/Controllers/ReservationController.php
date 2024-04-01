<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\demande_client;
use App\Models\Client;
use App\Models\Doctor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
    
    $doctor = Doctor::find(auth()->user()->id);

    $id=auth()->user()->id;
    if ($doctor) {     
        $reservations = demande_client::where('doctor_id', $id)
    ->whereIn('status', ['encours', 'programmé'])
    ->get();
        
        
        return view('Doctors.DoctorArea.reservation', compact('reservations','id'));
    } else {
        // Gérer le cas où le médecin n'est pas trouvé
        return redirect()->back()->with('error', 'Médecin introuvable.');
    }
}


    /**
     * Display a listing of the resource filtered by date.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function filtrer(Request $request)
    {
        $id=auth()->user()->id;
        $date = $request->input('date');

        $reservations = demande_client::where('doctor_id', $id)
        ->where('demande_clients.jour', '=', $date)
        ->where('status', ['encours', 'programmé'])
        ->get();

        if ($reservations->isEmpty()) {
            return redirect()->route('reservation.index')->with('message', 'Aucun rendez-vous trouvé pour la date sélectionnée.');
        }

        return view('Doctors.DoctorArea.reservation', compact('reservations'));
    }

    public function touReservation()
    {
        
        $doctor = Doctor::find(auth()->user()->id);
        $id=auth()->user()->id;
        $reservations = demande_client::where('doctor_id', $id)
        ->where('demande_clients.status', '=','Terminé')
        ->get();

        return view('Doctors.DoctorArea.historique', compact('reservations'));
    }

    public function edit(demande_client $reservation)
    {
        $id=$reservation->id;
        $client=demande_client::find($id);
        return view('Doctors.DoctorArea.Modefreservation', compact('reservation','client'));
    }

    public function update(Request $request, demande_client $reservation)
    {
        $reservationUpdate=DB::table("demande_clients")->where('id',$request->input('idChangerStatus'))->update([
            'status'=>$request->input('status')
        ]);
        if($reservationUpdate){

            return redirect()->route('reservation.index')->with('message', 'Rendez-vous mis à jour avec succès!');
        }
        else{
            dd('error');
        }
    }
   

public function patient(demande_client $reservation)
{
    $doctor = Doctor::find(auth()->user()->id);
        $id=auth()->user()->id;
        $reservations = demande_client::where('demande_clients.doctor_id','=' ,$id)
            ->select('demande_clients.*')
            ->get();

    return view('Doctors.DoctorArea.patients', compact('reservations'));
}

}
