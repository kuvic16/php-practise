<?php

/**
 * Task controller class
 */
class TaskController
{
    /**
     * task index page
     * 
     * @return tasks view page
     */
    public function index()
    {
        $tasks = App::get('database')->selectAll('todos');
        return view('tasks', ['tasks' => $tasks]);
    }

    /**
     * store new task
     * 
     * @return redirect to task page 
     */
    public function store()
    {
        App::get('database')->insert('todos', [
            'description' => $_POST['name'],
            'completed'   => 0
        ]);
        return redirect('tasks');
    }
}
