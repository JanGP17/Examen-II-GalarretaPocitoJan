<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;
use App\Http\Requests\CreateAlumnoRequest;

class AlumnosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumnos = Alumno::oldest('id')->paginate(3);
        return view('alumnos', compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create',[
            'alumno'=>new Alumno
        ]);
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateAlumnoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return view('show',[
            'alumno'=>Alumno::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumno  $id)
    {

        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Alumno  $id, CreateServicioRequest $request)
    {

        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumno  $servicio)
    {
        //
    }
}
