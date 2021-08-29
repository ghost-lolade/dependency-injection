<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Repositories\TaskRepository;

class TaskController extends Controller
{
    /**
     * The task repository instance
     * 
     * @var TaskRepository
     */

     protected $tasks;

     /**
      * Create a new controller instance.
      * @param TaskRepository $tasks
      * @return void
      */

    public function __construct(TaskRepository $tasks)
    {
        $this->middleware('auth');

        $this->tasks = $tasks;
    }

    /**
     * Display a list of all of the user's task
     * 
     * @param Request $request
     * @return Response
     */

    public function index(Request $request)
    {
        return $this->tasks->get_all_task_for_a_given_user($request->user());
    }
}
