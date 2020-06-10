<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Suivi;
use App\Request\Suivi\StoreSuiviRequest;
use App\Request\Suivi\UpdateSuiviRequest;
use Illuminate\Support\Facades\Auth;

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
        if(!Auth::user()) {
            return redirect()->route('front.login');
        }
        return view('front.modecodesuivis');
    }
    public function verifyCode($code){
        if(!Auth::user()) {
            return redirect()->route('front.login');
        }
        $code=$request('numero');
        $allsuivi=Suivi::all()->where('numero',$code);
        if($code) {
            return view("front.tablesuivis", compact("allsuivi"));
        }

}
}
