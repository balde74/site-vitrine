<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class DiversController extends Controller
{
    public function formChangementMDP()
    {
    	return view('backend/divers/form_changement_mot_de_passe');
    }

    public function validationChangementMDP(Request $request)
    {
		   $request->validate([
		   'ancien_password'=>'required',
		   'password' => 'required|min:6|confirmed'
        ]);
		$user = Auth::user();

		if(Hash::check($request->ancien_password, $user->password)) 
		{
			$user->update(['password'=>Hash::make($request->password)]);
			return redirect()->back()->with('success', 'Le mot de passe est changé avec succès.');
		}
		else
		{
			return redirect()->back()->with('erreur', 'Attention l\'ancien mot de passe n\'est pas correct.');
		}
	
    }
}
