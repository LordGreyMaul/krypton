<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Tasks;
use App\Http\Requests\TasksRequest;
use Carbon\Carbon;

class tasksController extends Controller
{
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
