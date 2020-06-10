<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Request\Suivi\StoreSuiviRequest;
use App\Request\Suivi\UpdateSuiviRequest;

class FrontendController extends Controller
{
    public function index()
    {

    	return view('front.home');
    }


    public function compte()
    {
        if(auth()->guest()){
            return redirect()->route('front.login');
        }

        $user = User::findOrFail(auth()->user()->id);
        $colis = Suivi::where('user_id', $user->id)->orderBy('created_at', 'desc')->limit(1)->get();

        if($colis->count() != 0) {
            $suivis = 0;
            $colis = $colis[0];
            return view('front.compteManager', compact(['user', 'colis', 'suivis']));
        }
        return view('front.compteManager', compact(['user', 'colis']));

    }

    public function apropos()
    {
        return view('front.apropos');
    }
    public function suivisform()
    {
        return view('front.modecodesuivis');
    }
public function sendCode(){

}
}
