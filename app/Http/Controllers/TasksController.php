<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
		public function index() {
				$tasks = Task::all();

				return view('tasks.index', compact('tasks'));
		}

		public function new()
		{
			return view('tasks.new');
		}

		public function store()
		{
			$task = new Task;

			$task->body = request('body');

			$task->save();

			return redirect ('/tasks');
		}

		public function show(Task $task)
		{
				return view('tasks.show', compact('task'));
		}

}
