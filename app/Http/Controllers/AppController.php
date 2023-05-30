<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index(){
        return view('pages.index');
    }
      public function Liste(){
        $events=Evenement::all();
        return view('pages.Liste', compact('events'));
    }

    public function Ajout(Request $request){
        $request->validate([
            'title' => 'required|min:5',
            'id'=>'required|min:5',
            'description'=>'required|min:5',
            'date_entree'=>'required|min:5',
            'date_sortie'=>'required|min:5',
            'price'=>'required|min:5',

        ]);

        //insert data in category
            $event =new Evenement();
            $event->title = $request->title;

            $event->save();
                return redirect()->route('Liste');

    }

}
