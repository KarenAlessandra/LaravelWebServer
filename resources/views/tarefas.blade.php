<!DOCTYPE html>
<html lang=en>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tarefas</title>
</head>

<body>
    <h1>Tarefas</h1>
    
    @if (empty($tarefas)) 
    <li>Nenhuma tarefa encontrada</li>
    @else
    
    <ul>
        @foreach ($tarefas as $tarefa)

            <li>
                <a href="/tarefas/{{ $tarefa['id'] }}">
                    {{ $tarefa['titulo'] }}
                </a>
            </li>
            
        @endforeach
    </ul>
    @endif
</body>

</html>
