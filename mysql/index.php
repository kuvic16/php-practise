<?php

require 'functions.php';

/**
 * Task Class
 */
class Task
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var boolean
     */
    public $completed = false;

    /**
     * Initialize the class
     * 
     * @param $description | string
     * @param $completed | boolean
     */
    public function __construct($description)
    {
        $this->description = $description;
    }

    /**
     * Complete the task
     * 
     * @return void
     */
    public function complete()
    {
        $this->completed = true;
    }

    /**
     * Return if task is completed or not
     * 
     * @return boolean
     */
    public function isComplete()
    {
        return $this->completed;
    }
}

$task = new Task('Go to the store');
$task->complete();
//dd($task->isComplete());

$tasks = [
    new Task('Go to the store'),
    new Task('Reading bangla book')
];
$tasks[0]->complete();

require 'index.view.php';
