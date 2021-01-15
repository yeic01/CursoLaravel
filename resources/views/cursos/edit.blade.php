@extends('layaouts.platilla')

@section('title', 'Courses edit')


@section('content')
    <h1>En esta pagina podras editar un curso</h1>  
    <form action="{{ route('cursos.update' , $curso) }}" method="POST">
        @csrf
        @method('put')
        <label for="">
            Nombre:<br> 
            <input type="text" name="name" id="" value="{{old('name',$curso->name)}}">
        </label>
        @error('name')
            <br><br>
            <small>* {{$message}}</small>
        @enderror
        <br>
        <label for="">
            Descripción:<br> 
            <textarea type="text" name="description" row="5">{{old('description', $curso->description)}}"</textarea>
        </label>
        @error('description')
            <br><br>
            <small>* {{$message}}</small>
        @enderror
        <br>
        <label for="">
            Categoría:<br>
            <input type="text" name="category" value="{{old('category', $curso->category)}}">
        </label>
        @error('category')
            <br><br>
            <small>* {{$message}}</small>
        @enderror
        <br>
        <button type="submit">Actualizar Formulario</button>
    </form>

@endsection