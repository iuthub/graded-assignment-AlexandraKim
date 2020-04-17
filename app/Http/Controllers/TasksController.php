<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Rules\MinWordsValidation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class TasksController extends Controller
{
    public function getTasks() {
        $user = Auth::user();

        $tasks = [];
        if ($user != null){
            $tasks = $user->tasks;
        }
       
        return view('index', [
    		'tasks' => $tasks
    	]); 
    }

    public function editTaskView($id) {
        $task = Task::all()->find($id);

        if(Gate::denies('edit-tasks', $task)) {
            return redirect()->back()->with([
                'error' => "You don't have permissions to edit this task."
            ]);
        }
        
    	return view('editTaskView', [
    		'task' => $task
    	]);

    }

    public function postEditTask(Request $req) {
    	$task = Task::find($req->input('id'));
    	$taskTitle = $task->title;
    	$task->title = $req->input('title');
    	$task->save();

    	return redirect()->route('getTasks')->with([
    		'tasks' => Task::all()->toArray(),
    		'info' => '"' . $taskTitle . '" has been renamed to "' . $task->title . '"'
    	]);

    }

    public function getDeleteTask($id){
        $task = Task::find($id);

        if(Gate::denies('edit-tasks', $task)) {
            return redirect()->back()->with([
                'error' => "You don't have permissions to delete this task."
            ]);
        }

    	$taskTitle = $task['title'];
    	Task::find($id)->delete();

    	return redirect()->route('getTasks')->with([
    		'info' => '"' . $taskTitle . '" has been deleted'
    	]);

    }

    public function postAddTask(Request $req){
    	$validation = $this->validate($req, [
			'title' => ['required', new MinWordsValidation]
		]);

        $user = Auth::user();

    	$task = new Task([
            'title' => $req->input('title'),
            'ticked' => false
        ]);
    	
        $user->tasks()->save($task);

    	return redirect()->route('getTasks')->with([
    		'info' => 'New task has been added'
    	])->withErrors($validation, 'task');
    }

}
