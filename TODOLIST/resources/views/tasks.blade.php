<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Create Task</title>
</head>
<style>
    .inputGroup {
    background-color: #fff;
    display: block;
    margin: 10px 0;
    position: relative;
    }
    .inputGroup label {
    padding: 12px 30px;
    width: 100%;
    display: block;
    text-align: left;
    color: #3C454C;
    cursor: pointer;
    position: relative;
    z-index: 2;
    transition: color 200ms ease-in;
    overflow: hidden;
    }
    .inputGroup label:before {
    width: 10px;
    height: 10px;
    border-radius: 50%;
    content: "";
    background-color: #5562eb;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%) scale3d(1, 1, 1);
    transition: all 300ms cubic-bezier(0.4, 0, 0.2, 1);
    opacity: 0;
    z-index: -1;
    }
    .inputGroup label:after {
    width: 32px;
    height: 32px;
    content: "";
    border: 2px solid #D1D7DC;
    background-color: #fff;
    background-image: url("data:image/svg+xml,%3Csvg width='32' height='32' viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M5.414 11L4 12.414l5.414 5.414L20.828 6.414 19.414 5l-10 10z' fill='%23fff' fill-rule='nonzero'/%3E%3C/svg%3E ");
    background-repeat: no-repeat;
    background-position: 2px 3px;
    border-radius: 50%;
    z-index: 2;
    position: absolute;
    right: 30px;
    top: 50%;
    transform: translateY(-50%);
    cursor: pointer;
    transition: all 200ms ease-in;
    }
    .inputGroup input:checked ~ label {
    color: #fff;
    }
    .inputGroup input:checked ~ label:before {
    transform: translate(-50%, -50%) scale3d(56, 56, 1);
    opacity: 1;
    }
    .inputGroup input:checked ~ label:after {
    background-color: #54E0C7;
    border-color: #54E0C7;
    }
    .inputGroup input {
    width: 32px;
    height: 32px;
    order: 1;
    z-index: 2;
    position: absolute;
    right: 30px;
    top: 50%;
    transform: translateY(-50%);
    cursor: pointer;
    visibility: hidden;
    }

    #formTask {
    padding: 0 16px;
    max-width: 550px;
    margin: 50px auto;
    font-size: 18px;
    font-weight: 600;
    line-height: 36px;
    }

    body {
    background-color: #D1D7DC;
    font-family: "Fira Sans", sans-serif;
    }

    *,
    *::before,
    *::after {
    box-sizing: inherit;
    }

    html {
    box-sizing: border-box;
    }

    code {
    background-color: #9AA3AC;
    padding: 0 8px;
    }
</style>

<body>


<form action="{{ route("post.task") }}" method="post">
    @csrf
    <input type="text" name="task" id="">
    <button type="submit">Criar Task</button>
</form>

<form id="formTask" method="POST">
    @csrf
    @method('PATCH')
  <h2>Checkboxes</h2>
    @foreach ($tasks as $task)
        <div class="inputGroup">
            <input id={{$task->id}} name="{{$task->id}}" type="checkbox" @checked($task->completed)/>
            <label for={{$task->id}}> {{ $task->task }} </label>
        </div>
    @endforeach

  

</form>

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

