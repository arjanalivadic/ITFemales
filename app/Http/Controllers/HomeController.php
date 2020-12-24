<?php

namespace App\Http\Controllers;

use App\Models\Subs;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function sendMessage(Request $request){
        dd($request->all());
    }

    public function kreirajSubs(Request $request){
        Subs::create([
            'ime_i_prezime' => 'NN',
            'email' => 'arjana.spahic@gmail.com',
            'created_at' => date('now')
        ]);
        dd('funkcija je prosla');
        }
}
