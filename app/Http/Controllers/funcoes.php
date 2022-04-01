<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bd;

class funcoes extends Controller
{
    public function index()
    {
          return view('welcome');
    }

    public function cadastrar()
    {

       return view('cadastrar',
           [
            
            ]);
    }
    public function enviarparaobanco(request $request)
    {
        $bd=new bd;
           $bd->name=$request->nome;
            $bd->cidade=$request->cidade;
  
             $bd->save();

         return redirect('/')->with('msg','cadastrado com susseso');
   
        }  
           public function listar()
    {
        $alunos = bd::all();
        return view('listar',
         [
              'alunos'=> $alunos
          ]);
      
    }


    }


  