<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    public function getTasks() {
    	return view('index', [
    		'tasks' => Task::all()->toArray()
    	]); 
    }

    public function editTaskView($id) {
    	return view('editTaskView', [
    		'task' => Task::find($id)
    	]);

    }

    public function postEditTask(Request $req) {
    	$task = Task::find($req->input('id'));
    	$task->title = $req->input('title');
    	$task->save();

    	return redirect()->route('getTasks')->with([
    		'tasks' => Task::all()->toArray(),
    		'info' => 'The task has been updated ' . $req->input('id')
    	]);

    }

    public function getDeleteTask($id){
    	Task::find($id)->delete();

    	return redirect()->route('getTasks')->with([
    		'tasks' => Task::all()->toArray(),
    		'info' => 'The task has been deleted ' . $id
    	]);

    }

    public function postAddTask(Request $req){
    	$task = new Task();
    	$task->title = $req->input('title');
    	$task->ticked = false;
    	$task->save();

    	return redirect()->route('getTasks')->with([
    		'tasks' => Task::all()->toArray(),
    		'info' => 'The task has been added'
    	]);
    }
    
}
