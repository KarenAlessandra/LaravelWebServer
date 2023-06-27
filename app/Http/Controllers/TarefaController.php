<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;

class TarefaController extends Controller
{
    public function index()
    {
        $tarefas = Tarefa::getAll();

        return view('tarefas', ['tarefas' => $tarefas]);
    }

    public function show($id)
    {
        $tarefa = Tarefa::getTarefa($id);
        return view('tarefa', ['tarefa' => $tarefa]);
    }
}