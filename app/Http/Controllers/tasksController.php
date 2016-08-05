<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Tasks;
use App\Http\Requests\TasksRequest;
use Carbon\Carbon;

class tasksController extends Controller
{
	// Show all tasks
	public function index() 
	{
		$tasks = tasks::latest()->published()->get();
		return view(tasks.index , compact(tasks));
	}

	//Show tasks by ID
    public function show($id) 
    {
      $tasks = tasks::findOrFail($id); 
      Return view('articles.show' , compact('tasks'));
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
		return redirect('/home');
    }  

}
