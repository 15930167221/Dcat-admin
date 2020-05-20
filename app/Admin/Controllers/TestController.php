<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Test;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class TestController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Test(), function (Grid $grid) {
            $grid->id->sortable();
            $grid->name;
            $grid->text;
            $grid->type;
            $grid->time;
        
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
        return Show::make($id, new Test(), function (Show $show) {
            $show->id;
            $show->name;
            $show->text;
            $show->type;
            $show->time;
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new Test(), function (Form $form) {
            $form->display('id');
            $form->text('name');
            $form->text('text');
            $form->text('type');
            $form->date('time');
        });
    }
}
