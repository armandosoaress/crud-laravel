<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bd;

class funcoes extends Controller
{
   

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
    public function editar($id)
    {
        $id=$id;
      
        $alunos = bd::findOrFail($id);
        return view('editar',
         [
              'alunos'=> $alunos,
             
          ]);
      
    }

    public function update(Request $request){
        $data=$request->all();
        bd::findOrFail( $request->id)->update($data);
        return redirect('/')->with('msg','evento editado com susseso');
         

    

    }  

    public function destroy($id){

        bd::findOrFail($id)->delete();
    
        return redirect('/')->with('msg','evento deletado com susseso');
    }
}


  