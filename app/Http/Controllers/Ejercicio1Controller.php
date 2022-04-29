<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ejercicio1Controller extends Controller
{
    public function Ejercicio1(){
        //Carpeta.NombreArchivo
        return view('Ejercicio1.Ejercicio1');
    }

    public function resultado_ejercicio1(Request $request){
        //$numero1 le asigno con request lo que viene del formjulario
        $numero1 = $request->nombre;
        for ($i=1; $i < $numero1 ; $i++) { 
            echo $i;
        }

        return view('Ejercicio1.resultado_eje1', compact('i'));

    }
}
