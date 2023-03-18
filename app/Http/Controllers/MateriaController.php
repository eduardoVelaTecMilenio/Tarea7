<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos['materias'] = Materia::paginate(5);

        return view('materia.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('materia.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datosMateria = request()->except('_token');

        Materia::insert($datosMateria);
        $datos['materias'] = Materia::paginate(5);

        return view('materia.index', $datos);
    }

    /**
     * Display the specified resource.
     */
    public function show(Materia $materia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $materia = Materia::findOrFail($id);

        return view('materia.edit', compact('materia'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $datosMateria = request()->except('_token', '_method');

        Materia::where('id','=',$id)->update($datosMateria);
        $materia = Materia::findOrFail($id);


        $datos['materias'] = Materia::paginate(5);
        return view('materia.index', $datos);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $materia = Materia::findOrFail($id);

        Materia::destroy($id);

        return redirect('materia');
    }
}
