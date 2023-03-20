<?php


namespace Modules\TaskModule\DataTables;

use Illuminate\Support\Facades\App;
use Modules\TaskModule\Entities\Task;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;


class TaskDatatable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)

            ->editColumn('id', function ($item){
                    return $item->id.'#';
            })

            ->addColumn('status', function ($item){
                return view('actions.status',['item'=>$item]);
            })->addColumn('actions', function ($item){
                return view('actions.actions',[
                    'item'=>$item,
                    'url'=>'tasks',
                    'edit'=>true,
                    'delete'=>'true',
                    'show'=>'false',
                ]);
            })

            ->rawColumns(['status','actions']);
    }


    public function query(Task $model)
    {

        return $model->newQuery();
    }
    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {

        return $this->builder()
            ->columns($this->getColumns())
            ->dom('Bfrtip')
            ->orderBy(1,'desc')
            ->parameters([
                'dom' => 'Blfrtip',
                'lengthMenu' => [[10, 25, 50, 100], [10, 25, 50, 'All Record']],
                'buttons' => [],
                'language' => $this->DataTableLanguage()
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make('id')->title('Id'),
            Column::make('title')->title('Title'),
            Column::make('desc')->title('Desc'),
            Column::computed('status')->title('Status'),
            Column::computed('actions')->title('Actions')
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Admins_' . date('Y-m-d');
    }

    protected function DataTableButtons()
    {
    }

    protected function DataTableLanguage()
    {
        if(App::getLocale()=='ar')
           return ['url' => url('datatable/ar/datatables.json')];
       return ['url' => url('datatable/en/datatables.json')];
    }
}

