<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\User;    


class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = User::all();
        //dd($usuarios);
        return Inertia::render('Usuarios/Index',['usuarios' => $usuarios]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Usuarios/Registro');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $campos = [
            'name' => 'required|string|max:100',
            'email' => 'required|email'
        ];

        $mensaje = [
            'name.required' => 'El nombre es requerido.',
            'email.required' => 'El correo electronico es requerido.'

        ];
        $this->validate($request, $campos, $mensaje);
        $usuario = User::create($request->validate([
            'name' => ['required'],
            'email' => ['required','email'],
        ]));
        return redirect()->route('usuarios.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $usuario = User::find($id);
        return Inertia::render('Usuarios/Editar',['usuario' => $usuario]);   
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $usuario = User::find($id);
        $usuario->fill($request->all());
        $usuario->save();
        return redirect()->route('usuarios.index');
        //dd($id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $usuario = User::find($id);
        $usuario->delete();
        return redirect()->route('usuarios.index');
    }
}
