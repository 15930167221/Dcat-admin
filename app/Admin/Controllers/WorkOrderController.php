<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\WorkOrder;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;
use Illuminate\Support\Facades\DB;
class WorkOrderController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new WorkOrder(), function (Grid $grid) {
            $grid->id->sortable();
            $grid->name;
            $grid->area;
            $grid->workdate;
            $grid->uid;
            $grid->type;
            $grid->money;
        
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');
        
            });
        });
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, new WorkOrder(), function (Show $show) {
            $show->id;
            $show->name;
            $show->area;
            $show->workdate;
            $show->uid;
            $show->type;
            $show->money;
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new WorkOrder(), function (Form $form) {
            $res =  DB::table('work_user')->get();
            // 人员id 对应名称
            $user_res = array();
            foreach ($res as $k=>$v){
                $uid = $v->id;
                $user_res[$uid] =$v->name;
            }
//            dump($user_res);die;
            $form->display('id');
            $form->text('name');
            $form->text('area');
            $form->date('workdate');
            $form->checkbox("uid")
                ->options($user_res)
                ->saving(function ($value) {
                    // 转化成json字符串保存到数据库
                    return json_encode($value);
                });
            $form->text('type');
        });
    }
}
