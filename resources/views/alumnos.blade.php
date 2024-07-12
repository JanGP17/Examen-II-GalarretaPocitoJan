@extends('layout')

@section('content')
    <h2>Alumnos</h2>
    <tr>
        @if ($alumnos->count())
            @foreach ($alumnos as $alumno)
                <td>
                    <a href="{{ route('alumnos.show', $alumno->id) }}">{{ $alumno->nombre }}</a>
                </td>
            @endforeach
            <tr>
                <td colspan="4">{{ $alumnos->links('pagination::bootstrap-4') }}</td>
            </tr>
        @else
            <td>No existe ningún alumno que mostrar</td>
        @endif
    <tr>
@endsection
