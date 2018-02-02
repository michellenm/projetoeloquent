<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Editora;

class EditoraController extends Controller
{
  public function index(){

     $editoras = Editora::all();

      return view('editora.index', compact('editoras'));

    }
    public function show(Editora $editora){

         return view('editora.show', compact('editora'));

    }
  //  public function create()){ - para novo editora  e e cria a pasta create na views
//         return view('editora.create');

//  public function store()){ - salva os dados escritos no formulario
        //$curso = new curso();
        //$cruso -> nome = request ('nome'); NOME DOS CAMPOS
        //$curso->turma = request ('turma'); NOME DOS CAMPOS
        //$curso->save();
        //return redirect ('/cursos');

}
