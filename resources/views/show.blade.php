@extends('layout')

@section('title','Alumno | ' . $alumno->nombre)

@section('content')
<tr>
    <td colspan="4"><strong>Nombre:</strong> {{ $alumno->nombre }}</td>
</tr>
<tr>
    <td colspan="4"><strong>Curso:</strong> {{ $alumno->curso }}</td>
</tr>
<tr>
    <td colspan="4"><strong>Nota 1:</strong> {{ $alumno->nota_1 }}</td>
</tr>
<tr>
    <td colspan="4"><strong>Nota 2:</strong> {{ $alumno->nota_2 }}</td>
</tr>
<tr>
    <td colspan="4"><strong>Promedio:</strong> {{ $alumno->promedio }}</td>
</tr>
<tr>
    <td colspan="4"><strong>Condición:</strong> {{ $alumno->condicion }}</td>
</tr>
<tr>
    <td colspan="4"><strong>Registrado:</strong> {{ $alumno->created_at->diffForHumans() }}</td>
</tr>
@endsection
