<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/tasks.css">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Create Task</title>
</head>


<body>

<div class="div-form">
<form action="{{ route("post.task") }}" method="post">
    @csrf
    <input type="text" name="task" id="">
    <button class="myButton" type="submit">Criar Task</button>
</form>

<div id="formTask" >
    @csrf
    @method('PATCH')
    @foreach ($tasks as $task)
        <div class="taskCard">
          <input id={{$task->id}} name="{{$task->id}}" type="checkbox" @checked($task->completed)/>
          <label for={{$task->id}}> {{ $task->task }} </label>
          <form id="deleteTask" action="{{ route("delete.task", ["taskId" => $task->id] ) }}" method="post">
            @method('DELETE')
            @csrf
            <a href="javascript:void(0)" onclick="$('#deleteTask').submit()">
            </a>
          </form>

        </div>
    @endforeach
</form>
</div>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        console.log("Dom carregado")
        $("#formTask").on("change", "input:checkbox", function(e){
            // $("#formTask").submit();
            const { id, checked } = e.target
            console.log('Checkado', checked)
            $.ajax({
                method: "patch",
                url: "{{ url('/editTask/') }}" + `/${id}`,
                data: {"_method": "PATCH", "_token": "{{ csrf_token() }}", checked}
            });

        });
    });
</script>
</body>
</html>

