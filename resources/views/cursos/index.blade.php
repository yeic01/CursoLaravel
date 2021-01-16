@extends('layaouts.platilla')

@section('title', 'home')


@section('content')
    <h1>Wellcome to Courses</h1>
    <h1>New content created with blade</h1>

    <a href="{{route('cursos.create')}}">Create Courses / </a>

    <ul>
        @foreach ($cursos as $curso)
            <li>{{$curso->id}}: <a href="{{route('cursos.show', $curso)}}">{{$curso->name}}</a> <br>Categoria: {{$curso->category}} </li>    
            <br>
        @endforeach
    </ul>

    {{$cursos->links()}}
@endsection