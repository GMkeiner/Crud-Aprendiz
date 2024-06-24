<?php

namespace App\Http\Controllers;

use App\Models\Aprendiz;
use Illuminate\Http\Request;

class AprendizController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aprendiz=Aprendiz::all();
        return view('aprendiz.index',compact('aprendiz'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $aprendiz=new Aprendiz;
        $aprendiz->cedula=$request->input('cedula');
        $aprendiz->nombre=$request->input('nombre');
        $aprendiz->apellido=$request->input('apellido');
        $aprendiz->correo=$request->input('correo');
        $aprendiz->telefono=$request->input('telefono');
        $aprendiz->save();
        return redirect()->back();
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Aprendiz $aprendiz)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $aprendiz=Aprendiz::find($id);
        $aprendiz->cedula=$request->input('cedula');
        $aprendiz->nombre=$request->input('nombre');
        $aprendiz->apellido=$request->input('apellido');
        $aprendiz->correo=$request->input('correo');
        $aprendiz->telefono=$request->input('telefono');
        $aprendiz->update();
        return redirect()->back();
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $aprendiz=Aprendiz::find($id);
        $aprendiz->delete();
        return redirect()->back();
        //
    }
}
