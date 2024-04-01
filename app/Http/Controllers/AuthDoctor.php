<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Departement;
use App\Models\Doctor;
use App\Models\User;
use App\Models\Ville;
use Illuminate\Http\Request;
// use Illuminate\Support\Carbon;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AuthDoctor extends Controller
{
    public function showRegister()
    {
        $villes = Ville::all();
        $departements = Departement::all();
        return view('Doctors.register', compact('villes', 'departements'));
    }

    public function register(Request $request)
    {
        $request->validate([
            'firstname' => 'string|required|max:40|min:4|regex:/^[a-zA-Z]+$/',
            'lastname' => 'required|string|max:40|min:4|regex:/^[a-zA-Z]+$/',
            'email' => 'required|email|unique:doctors,email',
            'phonenumber' => 'required',
            'city' => 'required',
            'profileimage'=>'required',
            'speciality' => 'required',
            'description' => 'required|max:155',
            'password' => 'required|min:8|max:20|confirmed',
            'password_confirmation' => 'required|min:8|max:20',
        ], [
            'profileimage.required '=> 'L\'image de profile est requis',
            'firstname.required' => 'Le prénom est requis.',
            'firstname.string' => 'Le prénom doit être une chaîne de caractères.',
            'firstname.max' => 'Le prénom ne peut pas dépasser :max caractères.',
            'firstname.min' => 'Le prénom doit comporter au moins :min caractères.',
            'firstname.regex' => 'Le prénom ne peut contenir que des lettres.',
        
            'lastname.required' => 'Le nom est requis.',
            'lastname.string' => 'Le nom doit être une chaîne de caractères.',
            'lastname.max' => 'Le nom ne peut pas dépasser :max caractères.',
            'lastname.min' => 'Le nom doit comporter au moins :min caractères.',
            'lastname.regex' => 'Le nom ne peut contenir que des lettres.',
        
            'email.required' => 'L\'adresse email est requise.',
            'email.email' => 'Veuillez entrer une adresse email valide.',
            'email.unique' => 'Cette adresse email est déjà utilisée.',
        
            'phonenumber.required' => 'Le numéro de téléphone est requis.',
        
            'city.required' => 'La ville est requise.',
        
            'speciality.required' => 'La spécialité est requise.',
        
            'description.required' => 'La description est requise.',
            'description.max' => 'La description ne peut pas dépasser :max caractères.',
        
            'password.required' => 'Le mot de passe est requis.',
            'password.min' => 'Le mot de passe doit comporter au moins :min caractères.',
            'password.max' => 'Le mot de passe ne peut pas dépasser :max caractères.',
            'password.confirmed' => 'La confirmation du mot de passe ne correspond pas.',
            
            'password_confirmation.required' => 'La confirmation du mot de passe est requise.',
            'password_confirmation.min' => 'La confirmation du mot de passe doit comporter au moins :min caractères.',
            'password_confirmation.max' => 'La confirmation du mot de passe ne peut pas dépasser :max caractères.',
        ], [
            'password.confirmed' => 'Les mots de passe ne correspondent pas.', // Message personnalisé pour la confirmation du mot de passe
        ]);
        
        $allowedExtensions = ['jpeg', 'png', 'jpg', 'gif']; 
        $filename = ''; 
                
        if ($request->hasFile('profileimage')) {
            $extension = $request->profileimage->extension(); 
            
            if (in_array($extension, $allowedExtensions)) {
                $filename = $request->getSchemeAndHttpHost() . '/assets/img/doctors/profiles/' . time() . '.' . $extension;
                $request->profileimage->move(public_path('//assets/img/doctors/profiles/'), $filename);
            } else {
                return redirect('register')->withErrors(['Seuls les fichiers JPEG, PNG, JPG et GIF sont autorisés. Veuillez télécharger un fichier valide.']);
            }
        }
        $doctor = Doctor::create([
            'matricule' => '',
            'nom' => $request->firstname,
            'prenom' => $request->lastname,
            'adresse' => $request->adresse,
            'genre' => $request->genre,
            'profileimage' => $filename,
            'phonenumber' => $request->phonenumber,
            'description' => $request->description,
            'email' => $request->email,
            'departement_id' => $request->speciality,
            'ville_id' => $request->city,
            'password' => Hash::make($request->password),
        ]);      
        Session::flash('success', 'Inscription réussie ! Connectez-vous maintenant.');

        return redirect('login');  
    }

    public function showLogin(){
        return view('Doctors.login');
    }

    public function login(Request $request)
    {
        
        $login=$request->email;
        $password=$request->password;
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'email', 'regex:/^[\w.-]+@\w+\.\w+$/'],
            'password' => ['required', 'min:8'],
        ]);

        
        $credentials=[
            'email'=>$login,
            'password'=>$password
        ];
        if ($validator->fails()) {
            // rje3login route
            return back()->withErrors([
                'email' => 'Le format de votre email est incorrect ',
                'ou',
                'password' => 'La taille de votre mot de passe est inférieure à 8',
            ])->onlyInput('email');
        }
        $remember = $request->has('remember');
        if(Auth::attempt($credentials, $remember) ){
                $request->session()->regenerate();
                return to_route('doctors.index');
            }
            return back()->withErrors('Ces identifiants ne correspondent pas à nos enregistrements')->onlyInput('email');
        }
        
        public function logout(Request $request){
            Session::flush();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            Auth::logout();
            return redirect('login')->with('success','  Vous êtes déconnecté avec succès');
        }
 
          
}