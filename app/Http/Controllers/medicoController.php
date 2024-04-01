<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Client;
use App\Models\calendries;
use App\Models\Doctor;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Models\Calendrier; 
use App\Models\demande_client;
use App\Models\posts;
use Illuminate\Support\Facades\Hash;

class MedicoController extends Controller
{
    
  
   

public function show_domand(Request $request, $id=null, $jour = null)
{
 
    $currentTime = Carbon::now();

    $elapsedTimes = [];
    
    // return view('homepage', compact());

    $jour = $jour ?? now()->format('Y-m-d');
    $jourselected = $request->input('jour');
   
    $doctor = Doctor::find($id);
    if( $doctor){
        $departement = $doctor->Departement;
        $Calendrier = $doctor->calendries;
        $doctorId = 1;
        $online = Doctor::pluck('last_seen');
    
        $currentDate = Carbon::now()->toDateString();
        $jours = $doctor->calendries
            ->pluck('jour')
            ->unique()
            ->filter(function ($date) use ($currentDate) {
                return $date >= $currentDate;
            })
            ->toArray();
    
        $datesj = Calendrier::where('doctor_id', $doctorId)
            ->where('jour', $jour)
            ->first();
        $datedepart_oj = $datesj ? $datesj->hdepart : null;
        $datefin_oj = $datesj ? $datesj->hfin : null;
    
        $dates = Calendrier::where('doctor_id', $doctorId)
            ->where('jour', $jour)
            ->first();
    
        $delaiConsultations = $dates ? $dates->delaiConsultation : null;
        $delaiConsultation = substr($delaiConsultations, 0, 2);
        $datedepart = $dates ? $dates->hdepart : null;
        $datefin = $dates ? $dates->hfin : null;
    
        $startDate = new \DateTime($datedepart);
        $endDate = new \DateTime($datefin);
    
        $timeIntervals = [];
      
     try{
        while ($startDate <= $endDate) {
            $time = $startDate->format('H:i');
            $timeIntervals[] = $time;
            $startDate->add(new \DateInterval('PT' . $delaiConsultation . 'M'));
        }
     }
     catch(\Exception $e){
        
      
     }
        
        $jour = $jour ?? now()->format('Y-m-d');
        $jourselected = $request->input('jours', $jour); 
       
        return view('show_doctor')->with(compact('currentTime', 'elapsedTimes', 'doctor', 'departement', 'Calendrier', 'datedepart', 'datefin', 'jours', 'timeIntervals', 'jourselected', 'online'))
        
        ->with('homepage_data', compact('currentTime', 'elapsedTimes', 'doctor', 'departement', 'Calendrier', 'datedepart', 'datefin', 'jours', 'timeIntervals', 'jourselected', 'online'));    }
   
   
}
public function show_contact_page(Request $request, $id=null, $jour = null){
    $currentTime = Carbon::now();
    // if ($locale) {
    //     App::setLocale($locale);
    //     Session::put('locale', $locale);
    // }
    $elapsedTimes = [];
   
    // return view('homepage', compact());

    $jour = $jour ?? now()->format('Y-m-d');
    $jourselected = $request->input('jour');
   
    
    if( $doctor = Doctor::find($id)){
        $departement = $doctor->Departement;
        $Calendrier = $doctor->calendries;
        $doctorId = 1;
        $online = Doctor::pluck('last_seen');
    
        $currentDate = Carbon::now()->toDateString();
        $jours = $doctor->calendries
            ->pluck('jour')
            ->unique()
            ->filter(function ($date) use ($currentDate) {
                return $date >= $currentDate;
            })
            ->toArray();
    
        $datesj = Calendrier::where('doctor_id', $doctorId)
            ->where('jour', $jour)
            ->first();
        $datedepart_oj = $datesj ? $datesj->hdepart : null;
        $datefin_oj = $datesj ? $datesj->hfin : null;
    
        $dates = Calendrier::where('doctor_id', $doctorId)
            ->where('jour', $jour)
            ->first();
    
        $delaiConsultations = $dates ? $dates->delaiConsultation : null;
        $delaiConsultation = substr($delaiConsultations, 0, 2);
        $datedepart = $dates ? $dates->hdepart : null;
        $datefin = $dates ? $dates->hfin : null;
    
        $startDate = new \DateTime($datedepart);
        $endDate = new \DateTime($datefin);
    
        $timeIntervals = [];
      
     try{
        while ($startDate <= $endDate) {
            $time = $startDate->format('H:i');
            $timeIntervals[] = $time;
            $startDate->add(new \DateInterval('PT' . $delaiConsultation . 'M'));
        }
     }
     catch(\Exception $e){
        
     }
        
        $jour = $jour ?? now()->format('Y-m-d');
        $jourselected = $request->input('jours', $jour); 
        return view('contact_me', compact('currentTime', 'elapsedTimes','doctor', 'departement', 'Calendrier', 'datedepart', 'datefin', 'jours', 'timeIntervals', 'jourselected','online'));
    } 
    
}

public function demande_reservation(Request $request, $id) {
    $segments = explode('/', $request->input('jour'));
    $jour = end($segments);

    $request->validate([
        'nom' => 'required',
        'prenom' => 'required',
        'email' => 'required|email',
        'jour' => 'required',
        'heure' => 'required',
        'phone' => 'required',
        'address' => 'required',
    ]);
    // $jours =  substr($request->input('heure'),0,10);

    $demande = new demande_client();
    $demande->nom = $request->input('nom');
    $demande->prenom = $request->input('prenom');
    $demande->email = $request->input('email');
    $demande->jour =  $jour;
    $demande->heure = $request->input('heure');
    $demande->phone = $request->input('phone');
    $demande->address = $request->input('address');
    $demande->status='programmé';
    $demande->doctor_id = $id;

    $demande->save();
    return redirect()->back()->with('msg','votre demande de reservation a ete accepter avec succes');
}

public function changelang($locale){
    App::setLocale($locale);
    Session::put('locale',$locale);
    return redirect()->back();
}





public function searchPatients(Request $request)
{
    $query = $request->input('query');
    $users = Client::where('nom', 'like', "$query%")
                   ->orWhere('prenom', 'like', "$query%")
                   ->orWhere('telephone', 'like', "$query%")
                   ->orWhere('age', 'like', "$query%")
                //    ->orWhere('sexe', 'like', "$query%")
                   ->get();

    $data = [];

    foreach ($users as $user) {
        $data[] = $user->nom ;
    }

    return response()->json($data);
}
// public function searchPatients(Request $request){
//     if($request->ajax()){
 
//         $data = Client::where('nom', 'like', "$request->search%")
//     ->orWhere('prenom', 'like', "$request->search%")
//     ->orWhere('telephone', 'like', "$request->search%")
//     ->orWhere('age', 'like', "$request->search%")
//     // ->orWhere('sexe', 'like', "$request->search%")
//     ->get();

//         $output='';
//         if(count($data)>0){
//             $output ='
//                 <table class="table">
//                 <thead>
//                 <tr>
//                     <th scope="col">Nom</th>
//                     <th scope="col">Prenom</th>
//                     <th scope="col">Tel</th>
//                     <th scope="col">Age</th>
//                     <th scope="col">Action</th>
//                 </tr>
//                 </thead>
//                 <tbody>';
//                     foreach($data as $row){
//                         $output .='
//                         <tr>
//                         <th scope="row">'.$row->nom.'</th>
//                         <td>'.$row->prenom.'</td>
//                         <td>'.$row->telephone.'</td>
//                         <td>'.$row->telephone.'</td>
//                         <td>'.$row->age.'</td>
//                         </tr>
//                         ';
//                     }
//             $output .= '
//                 </tbody>
//                 </table>';
//         }
//         else{
//             $output .='No results';
//         }
//         return dd($output);
//     }
// }

}

