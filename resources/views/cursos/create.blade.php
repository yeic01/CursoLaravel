@extends('layaouts.platilla')

@section('title', 'home')


@section('content')
    <h1>En esta pagina podras crear un curso</h1>  
    {{-- {{ route('cursos.store') }} --}}
    <form action="{{ route('cursos.store') }}" method="POST">
        @csrf
        <label for="">
            Nombre:<br> 
            <input type="text" name="name" id="" value="{{old('name')}}">
        </label>
        @error('name')
            <br><br>
            <small>* {{$message}}</small>
        @enderror
        <br>
        <label for="">
            Descripción:<br> 
            <textarea type="text" name="description" row="5">{{old('description')}}</textarea>
        </label>
        @error('description')
            <br><br>
            <small>* {{$message}}</small>
        @enderror
        <br>
        <label for="">
            Categoría:<br>
            <input type="text" name="category" value="{{old('category')}}">
        </label>
        @error('category')
            <br><br>
            <small>* {{$message}}</small>
        @enderror
        <br>
        <button type="submit">Enviar Formulario</button>
    </form>

@endsection