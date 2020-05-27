<?php

use Illuminate\Contracts\Support\Renderable;
use Dcat\Admin\Admin;

class MyPage implements Renderable
{



    public function render()
    {
        // 在这里可以引入你的js或css文件
        Admin::js(static::$js);
        Admin::css(static::$css);

        // 需要在页面执行的JS代码
        // 通过 Admin::script 设置的JS代码会自动在所有JS脚本都加载完毕后执行
        Admin::script($this->script());

        return view('admin.pages.my-page')->render();
    }
}
