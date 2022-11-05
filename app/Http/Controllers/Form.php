<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Form extends Controller
{
    public function home() {
        return view('welcome');
    }

    public function landing(){
        return view('landingpage');
    }

    public function formu($code=null){
        if($code=='1234'){
            $nombre='Marco Almanza Ibarra';
            $correo= "marco@gmail.com";
            $comentario="Hola, cómo estás?";
        }else{
            $nombre='';
            $email= '';
            $comentario='';
        }
    
        return view('form',compact('code','nombre', 'correo', 'comentario'));
    }

    public function recibirForm(request $request){
        $request->validate([
            'nombre' => 'required|max:50|min:10',
            'correo'=> 'required|email',
            'comentario' => 'required|max:255|min:3',
        ]);//validar que han ingresado

        // DB::table('contactos')->insert([
        //     'nombre' => $request->nombre,
        //     'correo' => $request->correo,
        //     'comentario' => $request->comentario,
        // ]);

        // DB::table('contactos')->insert($request->except('_token'));
        // $usuarios = new Usuarios();
        // $usuarios->nombre = $request->nombre;
        // $usuarios->correo = $request->correo;
        // $usuarios->comentario = $request->comentario;
        // $usuarios->save();

        // Usuarios::create([
        //     'nombre'=> $request->nombre,
        //     'correo' = $request->correo,
        //     'comentario' = $request->comentario,
        // ]);

        Usuarios::create($request->all());

        return redirect('/form');
    }


}

