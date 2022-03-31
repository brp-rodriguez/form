<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registro;
use App\Http\Requests\RegistroRequest;

class RegistroController extends Controller
{
    public function index(){
        return "";
    }
    public function create(){
        return view('create');
    }
    public function store(RegistroRequest $request){        
        
        /*$validated = $request->validate([
            'nombre' => 'required',
            'apellidos' => 'required',
            'email' => 'required',
            'pais' => 'required',
            'telefono' => 'required',
            'empresa'=> 'required',
            'cargo'=> 'required',
        ]); */
        
        $registro = new Registro();
        $registro->nombre = $request->nombre;
        $registro->apellidos =  $request->apellidos;
        $registro->correo =  $request->email;
        $registro->pais =  $request->pais;
        $registro->telefono =  $request->telefono;
        $registro->empresa =  $request->empresa;
        $registro->cargo =  $request->cargo;
        $registro->valid_dat_per=  $request->checkbox;   

        $registro->save();
        return view('mainweb');

    }
}
