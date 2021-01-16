@extends('layaouts.platilla')

@section('title', 'contacto')


@section('content')
    <h1>Dejanos un mensaje</h1>

    <form action="{{route('contacto.store')}}" method="post">
        @csrf
        <label>Nombre: <br><input type="text" name="nombre"></label>
        @error('nombre')
            <p><strong>{{$message}}</strong></p>
        @enderror
        <br>
        <label>Correo: <br><input type="text" name="correo"></label>
        @error('correo')
            <p><strong>{{$message}}</strong></p>
        @enderror
        <br>
        <label>Mensaje: <br><textarea name="mensaje" rows="5"></textarea></label>
        @error('mensaje')
            <p><strong>{{$message}}</strong></p>
        @enderror
        <br>
        <button type="submit">Enviar</button>
    </form>
    @if (session('info'))
        <script>
            alert("{{session('info')}}")
        </script>
    @endif

@endsection