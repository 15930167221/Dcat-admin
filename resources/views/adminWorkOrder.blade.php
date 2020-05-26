<div class="content-body" id="app">




    <div class="row"><div class="col-md-12"><div class="dcat-box custom-data-table dt-bootstrap4">

        <div class="custom-data-table-header">
            <div class="table-responsive">
                <div class="top d-block" style="padding: 0">
                    <div class="btn-group dropdown  grid-select-all-btn" style="display:none;margin-right: 3px;">
                        <button type="button" class="btn btn-white dropdown-toggle btn-mini" data-toggle="dropdown">
                            <span class="d-none d-sm-inline selected"></span>
                            <span class="caret"></span>
                            <span class="sr-only"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li class="dropdown-item">
                                <a href="#" data-name="" data-action="batch-delete" data-url="http://laraveladmin.com/admin/workuser">Delete</a>
                            </li>
                        </ul>
                    </div>
                    <button data-action="refresh" class="btn btn-primary grid-refresh btn-mini" style="margin-right:3px">
                        <i class="feather icon-refresh-cw"></i><span class="d-none d-sm-inline">&nbsp; Refresh</span>
                    </button>



                    <div class="pull-right" data-responsive-table-toolbar="grid-table">
                        <div class="btn-group" style="margin-right:3px"><a href="http://laraveladmin.com/admin/workorder/create" class="btn btn-primary">
                            <i class="feather icon-plus"></i><span class="d-none d-sm-inline">&nbsp;&nbsp;New</span>
                        </a></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="hidden">
            <div class="right-side-filter-container" style="padding:0" id="filter-box">
                <form action="http://laraveladmin.com/admin/workuser?_pjax=%23pjax-container" class="form-horizontal" pjax-container="" method="get">
                    <div class="mb-1" style="height: 55px">
                        <div class="p-1 position-fixed d-flex justify-content-between header">
                            <div>
                                <button type="submit" class=" btn btn-sm btn-primary submit">
                                    <i class="feather icon-search"></i> &nbsp;Search
                                </button>&nbsp;
                                <a href="http://laraveladmin.com/admin/workuser?_pjax=%23pjax-container" class="reset btn btn-sm btn-white">
                                    <i class="feather icon-rotate-ccw"></i> &nbsp;Reset
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="filter-input col-sm-10 " style="">
                        <div class="form-group"><div class="input-group input-group-sm">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white text-capitalize"><b>id</b></span>
                            </div>
                            <input type="text" class="form-control filter_column__id" placeholder="id" name="id" value="">
                        </div></div>
                    </div>
                </form>
            </div>
        </div>




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
                                <li class="dropdown-item"><a style="cursor: pointer" class="grid-row-action-5ec74891d9281" href="http://laraveladmin.com/admin/workuser/1/edit"><i class="feather icon-edit-1"></i> Edit</a></li>
                                <li class="dropdown-item"><a data-url="http://laraveladmin.com/admin/workuser/1" data-message="ID - 1" data-action="delete" style="cursor: pointer" class="grid-row-action-5ec74891d94ae" href="javascript:void(0)"><i class="feather icon-trash"></i> Delete</a></li>

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

    </div>
    </div></div>




</div>