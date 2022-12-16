<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class taskController extends Controller
{



     public function getTasks()
    {
    $task = new Task();
    if(isset(Auth::user()->id)) {
        return  view("tasks",["tasks" => $task->where('id_user', Auth::user()->id)->get()]);
    }
     return redirect()->route("login.page");
    }

    public function createTask(Request $request)
    {
    $task = new Task();

    if (strlen($request->task)>1) {
        $task->task = $request->task;
        $task->id_user = Auth::user()->id;
        $task->save();
    }
    return redirect()->route("tasks.user");
    }

    public function editTask(Request $request, $taskId)
    {
        $task = Task::find($taskId);
        $task->completed = $request->checked === 'true' ? 1 : 0;
        $task->update();
        return response('Tarefa alterada', 200)->header('Content-Type', 'text/plain');
    }

    public function deleteTask(Request $request, $taskId)
    {
        $task = Task::find($taskId);
        $task->delete();
        return redirect()->route("tasks.user");
    }
}
