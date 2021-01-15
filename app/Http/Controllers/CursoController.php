<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Http\Requests\StoreCurso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){

        $cursos = Curso::orderBy('id','desc')->paginate();

        return view("cursos.index", compact('cursos'));
    }

    public function create(){
        return view("cursos.create");
    }

    public function store(StoreCurso $request){

        // $curso = new Curso();

        // $curso->name = $request->name;
        // $curso->description = $request->description;
        // $curso->category = $request->category;
        // $curso->save();

        //return $request->all();

        $curso = Curso::create($request->all());

        
        return redirect()->route('cursos.show', $curso->id);
    }

    public function show($id){

        $curso = Curso::find($id);
        //return $curso;
        return view("cursos.show", compact('curso'));
    }

    public function edit(Curso $curso){
        //una forma
        // $curso = Curso::find($id);
        // return $curso;

        //otra forma
        //return $curso;

        return view("cursos.edit", compact('curso'));

    }

    public function update(StoreCurso $request, Curso $curso){

        //return $request->all();
        // $curso->name = $request->name;
        // $curso->description = $request->description;
        // $curso->category = $request->category;
        // $curso->save();

        $curso->update($request->all());

        return redirect()->route('cursos.show', $curso->id);
    }

    public function destroy(Curso $curso){
        $curso->delete();
    }
}
