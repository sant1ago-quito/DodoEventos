<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ModelEventos;
use App\Models\ModelUsuarios;

class EventosController extends Controller
{
  public function index()
{
    return view('index');
}
    
    
    public function indexEventos()
    {
        $events = ModelEventos::with("Eventos")->get();
        return view('indexEventos', compact('events'));
    }

    public function crear()
    {
        $organizadores = ModelUsuarios::all();
        return view('crear',compact('organizadores'));
    }

    public function guardar(Request $request)
    {
        ModelEventos::create($request->all());
        return redirect()->route('ver')->with('success', 'Evento creado correctamente, un administrador se pondrá en contacto contigo para confirmar los detalles del evento.');
    }
    public function eliminar()
    {
        return view('eliminar');
    }
    public function editar($id)
    {
        $evento = ModelEventos::findOrFail($id);
        $organizadores = ModelUsuarios::all();
        return view('editar', compact('evento', 'organizadores'));
    }
    public function actualizar(Request $request, $id)
{
    $event = ModelEventos::findOrFail($id);

    $event->fk_usuario = $request->fk_usuario;
    $event->nombre_evento = $request->nombre_evento;
    $event->descripcion = $request->descripcion;
    $event->fecha_evento = $request->fecha_evento;
    $event->hora_evento = $request->hora_evento;
    $event->ubicacion = $request->ubicacion;
    $event->estado = $request->estado;
    $event->asistentes = $request->asistentes;

    $event->save();

    return redirect()->route('indexEventos')->with('success', 'Evento actualizado correctamente');
}
    public function borrar($id)
    {
        #$event = ModelEventos::findOrFail($id);
        #$event->delete();
        #return redirect()->route('index');
    }
}