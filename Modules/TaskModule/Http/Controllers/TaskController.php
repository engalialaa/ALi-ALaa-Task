<?php

namespace Modules\TaskModule\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Modules\TaskModule\Datatables\TaskDatatable;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\TaskModule\Entities\Task;
use Modules\TaskModule\Repository\TaskRepository;
use Modules\TaskModule\Http\Requests\TaskRequest;
use PHPUnit\Exception;

class TaskController extends Controller
{
    public function __construct(TaskRepository $taskRepository)
  {
    $this->taskRepository =$taskRepository;
  }

    public function dashboard()
    {
        $tasks = Task::get()->count();
        return view('taskmodule::dashboard',compact('tasks'));
    }

    public function index(TaskDatatable $customerDatatable)
    {
        return $customerDatatable->render('taskmodule::task.index');
    }

    public function create()
    {
        return view('taskmodule::task.create');
    }

    public function store(TaskRequest $request)
    {
      $data = $request->except('_token');

        try {
            DB::beginTransaction();
            $this->taskRepository->saveTask($data);
            DB::commit();
            return redirect('tasks')->with('success', 'success');
        }catch (Exception $exception){
            DB::rollBack();
            return redirect('tasks')->with('success', 'success');
        }

    }
    public function edit($id)
    {
        $data =  $this->taskRepository->findById($id);
        return view('taskmodule::task.edit',compact('data'));
    }

    public function update(TaskRequest $request, $id)
    {
      $data=$request->except('_method','_token');

        $task =  $this->taskRepository->findById($id);

      $this->taskRepository->updateTaskData($task,$data);

      return redirect('tasks')->with('updated', 'updated');

        //
    }

    public function destroy($id)
    {
        $this->taskRepository->deleteTask($id);
        return redirect('tasks')->with('deleted', 'deleted');
    }
}
