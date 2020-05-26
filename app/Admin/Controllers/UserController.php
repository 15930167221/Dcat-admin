<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\User;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class UserController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new User(), function (Grid $grid) {
            $grid->id->sortable();
            $grid->name;
            $grid->email;
            $grid->email_verified_at;
            $grid->password;
            $grid->remember_token;
            $grid->created_at;
            $grid->updated_at->sortable();
        
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
        return Show::make($id, new User(), function (Show $show) {
            $show->id;
            $show->name;
            $show->email;
            $show->email_verified_at;
            $show->password;
            $show->remember_token;
            $show->created_at;
            $show->updated_at;
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new User(), function (Form $form) {
            $form->display('id');
            $form->text('名称');
            $form->text('地点');
            $form->date('时间');
            $form->checkbox("人员")
    ->options([1 => 'foo', 2 => 'bar', 'val' => 'Option name'])
                ->saving(function ($value) {
                    // 转化成json字符串保存到数据库
                    return json_encode($value);
                });


        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
