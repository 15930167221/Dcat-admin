<a href="/user/create">添加</a>
<div class="table-responsive table-wrapper">
    <table class="table custom-data-table dataTable dt-checkboxes-select

                 " id="grid-table">
        <thead>
        <tr>

            <th>id<span class="grid-column-header">&nbsp;<a href="http://laraveladmin.com/admin/workuser?_pjax=%23pjax-container&amp;_sort%5Bcolumn%5D=id&amp;_sort%5Btype%5D=desc" class="feather icon-arrow-up "></a></span></th>
            <th>名称</th>
            <th>地点</th>
            <th>时间</th>
            <th>人员</th>
        </tr>
        </thead>


        <tbody>
        @foreach($res as $vo)
            <tr>

                <td>
                    {{$vo->id}}
                </td>
                <td>
                    {{$vo->name}}
                </td>
                <td>
                    {{$vo->area}}
                </td>
                <td>
                    {{$vo->workdate}}
                </td>
                <td>
                    {{$vo->uid}}
                </td>
                <td>
                    <div class="grid-dropdown-actions dropdown">
                        <a href="#" style="padding:0 10px;" data-toggle="dropdown">
                            <i class="feather icon-more-vertical"></i>
                        </a>
                        <ul class="dropdown-menu" style="left: -65px;">

                            <li class="dropdown-item"><a style="cursor: pointer" class="grid-row-action-5ec74891d8f03" href="http://laraveladmin.com/admin/workuser/1"><i class="feather icon-eye"></i> Show</a></li>
                            <li class="dropdown-item"><a style="cursor: pointer" class="grid-row-action-5ec74891d9281" href="{{ route('user.edit',['user'=>$vo->id]) }}"><i class="feather icon-edit-1"></i> Edit</a></li>
                            <li class="dropdown-item">
                                <form action="{{ route('user.destroy', $vo->id) }}" method="post" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" style="color: #F08080;background-color: transparent;border: none;">Delete</button>
                                </form>
                            </li>

                        </ul>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>



<div class="box-footer clearfix " style="padding-bottom:5px;">
    {{$res->links()}}
</div>