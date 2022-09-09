<?php

namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Repositories\TaskRepository;

class TaskController extends Controller
{
    protected $tasks;

    public function __construct(TaskRepository $tasks)
    {
        $this->middleware('auth');

        $this->tasks = $tasks;
    }

   public function index(Request $request)
   {
       return view('tasks', [
           'tasks' => $this->tasks->forUser($request->user()),
       ]);

   }


  public function store(Request $request)
   {
       $validator = Validator::make($request->all(), [
           'name' => 'required|max:255',
       ]);

       $request->user()->tasks()->create([
           'name' => $request->name,
       ]);
       return redirect('tasks');
   }



   public function destroy(Request $request, Task $task)
   {
       $this->authorize('destroy', $task);

       $task->delete();

       return redirect('tasks');


   }
}
