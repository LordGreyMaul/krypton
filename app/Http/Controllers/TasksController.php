<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Tasks;
use App\Http\Requests\TasksRequest;
use Carbon\Carbon;

class TasksController extends Controller
{
	// list all tasks
	public function index() 
	{
		$tasks = tasks::latest()->published()->get()->sortBy('priority');
		return view('tasks.index' , compact('tasks'));
	}
	//show the task by id
	public function show($id)
	{
		$tasks = tasks::findOrFail($id);
		return view('tasks.show', compact('tasks'));
	}

	// Create a task controller
	public function create() 
	{
		return view('tasks.create');
	} 

	// Store all tasks from the form 
    public function store(TasksRequest $request) 
    {
        tasks::create($request->all());
		return redirect('/tasks');
    } 

     // Edit tasks
    public function edit($id) 
    {
        $tasks = tasks::findOrFail($id);
        return view('tasks.edit' , compact('tasks'));
    }
     //update tasks
    public function update($id, TasksRequest $request)
    {
       $tasks = tasks::findOrFail($id);
       $tasks->update($request->all()); 
       return redirect('/tasks');
    }
    // Delete tasks
    public function destroy($id){
	    tasks::destroy($id); 
	    return redirect('/tasks')->with('message', 'Successfully deleted!');   
	} 

}
