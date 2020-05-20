<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\WorkUser;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class WorkUserController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new WorkUser(), function (Grid $grid) {
            $grid->id->sortable();

            $grid->name;
            $grid->tel;
            $grid->text;
            $grid->ctime;
        
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
        return Show::make($id, new WorkUser(), function (Show $show) {
            $show->id;
            $show->ctime;
            $show->name;
            $show->tel;
            $show->text;
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new WorkUser(), function (Form $form) {
            $form->display('id');

            $form->text('name');
            $form->text('tel');
            $form->text('text');
            $form->date('ctime');
        });
    }
}
