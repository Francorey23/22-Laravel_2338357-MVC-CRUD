@extends('Template.Template')
@section('plantillaweb')
    

    <h2>Tabla de multiplicar</h2>  

    <form action="{{route('resultadoej1')}}" method="POST">
        <!--csrf_field es un metodo autenticacion token -->
        {{ csrf_field() }}
        <label>Digite el numero de la tabla </label>
        <input type="number" name="numero1">
        <input type="submit" name="" value="Presionar">
    </form>

    @endsection