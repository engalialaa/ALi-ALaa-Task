<?php

namespace Modules\TaskModule\Repository;


use Modules\TaskModule\Entities\Task;

class TaskRepository
{

    function findById($id)
    {
        return Task::find($id);
    }

    function findAllTasks()
    {
        return Task::all();
    }
    function saveTask($data)
    {
        return Task::create($data);
    }

    function updateTaskData($Task,$data)
    {
      return $Task->update($data);
    }


    function deleteTask($id)
    {
      $Task=Task::find($id);
        if($Task)
        return $Task->delete();
    }

}
