@extends('layout')

@section('title','Crear Alumno')

@section('content')
<table cellpadding="3" cellspacing="5">
    <tr>
        <th colspan="4">Crear nuevo Alumno</th>
    </tr>
    <form action="{{ route('alumnos.store') }}" method="post">
        @csrf
        <tr>
            <th>Nombre</th>
            <td><input type="text" name="nombre"><br>{{ $errors->first('nombre') }}</td>
        </tr>
        <tr>
            <th>Curso</th>
            <td><input type="text" name="curso"><br>{{ $errors->first('curso') }}</td>
        </tr>
        <tr>
            <th>Nota 1</th>
            <td><input type="number" step="0.01" name="nota_1"><br>{{ $errors->first('nota_1') }}</td>
        </tr>
        <tr>
            <th>Nota 2</th>
            <td><input type="number" step="0.01" name="nota_2"><br>{{ $errors->first('nota_2') }}</td>
        </tr>
        <tr>
            <th>Fecha de Registro</th>
            <td><input type="date" name="fecha_reg"><br>{{ $errors->first('fecha_reg') }}</td>
        </tr>
        <tr>
            <td colspan="2" align="center"><button>Guardar</button></td>
        </tr>
    </form>
</table>
@endsection
