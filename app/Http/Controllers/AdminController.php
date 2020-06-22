<?php

namespace App\Http\Controllers;

use App\User;
use App\Suivi;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home()
    {
        if(auth()->guest()){
            return redirect()->route('back.login');
        }

        return view('back.backoffice');
    }
    public function details1()
    {

    	return view('front.servicedetails');
    }
    public function list()
    {
        $clients = Suivi::all();

        return view('back.suivis.list', compact('clients'));

    }

    public function editSuivi($id)
    {
    	$suivis = Suivi::findOrFail($id);
    
    	return view('back.suivis.followInfoEdit', compact('suivis'));
    }

    public function updateSuivi(Request $request, $id)
    {
        $suivis = Suivi::findOrFail($id);

        request()->validate([
            'origine'=> ['required', 'string', 'max:255'],
            'destination'=> ['required', 'string', 'max:255'],
            'numero'=> ['required', 'string', 'max:255'],
            'lieuCurrent'=> ['required', 'string', 'max:255'],
            'heure'=> ['required', 'string', 'max:255'],
            'piece'=> ['required', 'string', 'max:255'],
            'poste'=> ['required', 'string', 'max:255'],
        ]);
        
        $suivis->origine = $request['origine'];
        $suivis->destination = $request['destination'];
        $suivis->numero = $request['numero'];
        $suivis->lieuCurrent = $request['lieuCurrent'];
        $suivis->heure = $request['heure'];
        $suivis->piece = $request['piece']; 
        $suivis->poste = $request['poste'];  

        $suivis->save();
    
    	return redirect()->route('back.clients.index', $suivis);
    }

    public function deleteSuivi($id)
    {
    	$suivis = Suivi::findOrFail($id);
    	$suivis->destroy($id);

    	return redirect()->route('back.clients.index');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);

    	return view('back.suivis.edit', compact('user'));
    }

    public function editPost($id)
    {
    	$user = User::findOrFail($id);
    	$user->nom = request('nom');
        $user->prenom = request('prenom');
        $user->telephone = request('telephone');
        $user->email = request('email');
        $user->date_naissance = request('date_naissance');
        $user->adresse = request('adresse');
        $user->pays = request('pays');
        $user->codePostal = request('codePostal');
    	$user->save();

    	return redirect()->route('back.clients.index');
    }

    public function delete($id)
    {
    	$user = User::findOrFail($id);
    	$user->destroy();

    	return redirect()->route('back.clients.index');
    }

    public function logoutFront()
    {
        auth()->logout();

        return redirect()->route('front.home');
    }

    public function registerBack()
    {
    	return view('back.auth.register');
    }

    public function registerBackPost()
    {
    	request()->validate([
    		'nom' => 'required',
    		'email' => 'required|email',
    		'password' => 'required|confirmed',
    	]);

    	User::create([
    		'nom' => request('nom'),
            'email' => request('email'),
    		'isAdmin' => 1,
    		'password' => bcrypt(request('password_confirmation')),
    	]);

        $res = auth()->attempt([
            'email' => request('email'),
            'password' => request('password'),
        ]);

            return redirect()->route('back.login');
    }

    public function logoutBack()
    {
        auth()->logout();

        return redirect()->route('back.login');
    }

    public function loginBack()
    {
        return view('back.auth.login');
    }

    public function loginBackPost()
    {
        $res = auth()->attempt([
            'email' => request('email'),
            'password' => request('password'),
        ]);

        if($res){
            return redirect()->route('back.home')->withInput()->withErrors([
                'error' => ''
            ]);
        }

        return back()->withInput();
    }

    public function registerFront()
    {
        return view ('front.auth.register');
    }

    public function registerFrontPost(Request $request)
    {

        request()->validate([
            'nom' => 'required|max:50',
            'prenom' => 'required|max:50',
            'telephone' => 'required|max:50',
            'email' => 'required|email|unique:users',
            'date_naissance' => 'required',
            'adresse' => 'required',
            'pays' => 'required',
            'codePostal' => 'required',
            'password' => 'confirmed|required|min:8',
        ]);

        $users = new User;
        $users->nom = $request->nom;
        $users->prenom = $request->prenom;
        $users->telephone = $request->telephone;
        $users->email = $request->email;
        $users->date_naissance = $request->date_naissance;
        $users->adresse = $request->adresse;
        $users->pays = $request->pays;
        $users->codePostal = $request->codePostal;
        $users->password = bcrypt($request->password);
        $users->isAdmin = 0;
        $users->save();


    //    Mail::to('contact@esocialmoneda.com')->send(new CreationDeCompte($request));




        return redirect()->route('front.followInfo');
    }

    public function loginFront()
    {
        return view ('front.auth.login');
    }

    public function loginFrontPost()
    {
        request()->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $res = auth()->attempt([
            'email' => request('email'),
            'password' => request('password'),
        ]);

        if($res){
            return redirect()->route('front.followInfo');
        }

        return back()->withInput()->withErrors([
            'email' => '']);
    }

    public function listsuivis(){
        $suivis = Suivi::all();

        foreach($suivis as $suivi) {
            $suivi->user = User::find($suivi->user_id);
        }
    return view('back.suivis.list', compact('suivis'));
    }
}
