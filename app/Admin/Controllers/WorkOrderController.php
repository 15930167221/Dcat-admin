<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\WorkUser;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class WorkOrderController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
//        $res =  DB::select('select * from work_order');
        $res =  DB::table('work_order')->paginate(2);
        return view('adminWorkOrder')->with('res',$res);
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
        $res =  DB::table('work_user')->get();
        return view('adminWorkadd')->with('res',$res);
    }
    public function add(){
        echo 123;die;
        $data = $request->input();

        // 人员信息转换为json格式
//        $data['uid'] = json_encode($data['uid']);
//        $data['uid'] = '11';
        dd($data);
//        DB::table('work_order')->insert($data);

    }

}
