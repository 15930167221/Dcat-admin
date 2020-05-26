<div class="content-body" id="app">




    <div class="row"><div class="col-md-12"><form id="form-iGEc9tHv" action="http://laraveladmin.com/admin/workorder/add" method="post" accept-charset="UTF-8" data-toggle="validator" class="form-horizontal" pjax-container="" novalidate="true"> <div class="row"><div class="col-md-12"><div class="card dcat-box"><div class="box-header with-border mb-1" style="padding: .65rem 1rem">
                                <h3 class="box-title" style="line-height:30px">Create</h3>
                                <div class="pull-right"><div class="btn-group pull-right" style="margin-right: 5px">
                                        <a href="http://laraveladmin.com/admin/workorder" class="btn btn-sm btn-white "><i class="feather icon-list"></i><span class="d-none d-sm-inline">&nbsp;List</span></a>
                                    </div></div>
                            </div>
                            <div class="box-body" style="margin-top: 10px">
                                <div class="fields-group">
                                    <div class="form-group row form-field ">

                                        <div for="form-field-名称-WVAl0" class="col-md-2  text-capitalize control-label">
                                            <span>名称</span>
                                        </div>

                                        <div class="col-md-8">

                                            <div class="help-block with-errors"></div>


                                            <div class="input-group">

                                                <span class="input-group-prepend"><span class="input-group-text bg-white"><i class="feather icon-edit-2"></i></span></span>
                                                <input type="text" id="form-field-名称-WVAl0" name="name" value="" class="form-control 名称" placeholder="Input 名称">

                                            </div>


                                        </div>
                                    </div>
                                    <div class="form-group row form-field ">

                                        <div for="form-field-地点-LFjcm" class="col-md-2  text-capitalize control-label">
                                            <span>地点</span>
                                        </div>

                                        <div class="col-md-8">

                                            <div class="help-block with-errors"></div>


                                            <div class="input-group">

                                                <span class="input-group-prepend"><span class="input-group-text bg-white"><i class="feather icon-edit-2"></i></span></span>
                                                <input type="text" id="form-field-地点-LFjcm" name="area" value="" class="form-control 地点" placeholder="Input 地点">

                                            </div>


                                        </div>
                                    </div>
                                    <div class="form-group row form-field ">

                                        <div for="form-field-时间-LKyXw" class="col-md-2  text-capitalize control-label">
                                            <span>时间</span>
                                        </div>

                                        <div class="col-md-8">

                                            <div class="help-block with-errors"></div>


                                            <div class="input-group">

                                                <span class="input-group-prepend"><span class="input-group-text bg-white"><i class="fa fa-calendar fa-fw"></i></span></span>
                                                <input style="width: 200px" type="text" id="form-field-时间-LKyXw" name="workdate" value="" class="form-control 时间" placeholder="Input 时间">

                                            </div>


                                        </div>
                                    </div>
                                    <div class="form-group row form-field 1">

                                        <label for="form-field-人员-7gblU" class="col-md-2  text-capitalize control-label">人员</label>

                                        <div class="col-md-8" id="form-field-人员-7gblU">

                                            <div class="help-block with-errors"></div>


                                            <div class="d-flex flex-wrap">
                                                @foreach($res as $vo)
                                                <div class="vs-checkbox-con vs-checkbox-primary" style="margin-right: 14px">
                                                    <input value="{{$vo->id}}" name="uid[]" type="checkbox">
                                                    <span class="vs-checkbox vs-checkbox-">
                                                      <span class="vs-checkbox--check">
                                                        <i class="vs-icon feather icon-check"></i>
                                                      </span>
                                                    </span>
                                                    <span>{{$vo->name}}</span>
                                                </div>
                                                @endforeach

                                            </div>


                                            <input type="hidden" >


                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="box-footer">

                                <input type="hidden" name="_token" value="Gz32CsKFm3vNndykEnUU11sMilhW67LkXOyAF82m">

                                <div class="col-md-2 d-md-block" style="display: none"></div>

                                <div class="col-md-8">

                                    <div class="btn-group pull-right">
                                        <button class="btn btn-primary submit"><i class="feather icon-save"></i> Submit</button>
                                    </div>

                                    <div class="pull-right d-md-flex" style="margin:10px 15px 0 0;display: none"><div class="d-flex flex-wrap">

                                            <div class="vs-checkbox-con vs-checkbox-primary" style="margin-right: 14px">
                                                <input value="1" name="after-save" circle="1" type="checkbox">
                                                <span class="vs-checkbox vs-checkbox-">
          <span class="vs-checkbox--check">
            <i class="vs-icon feather icon-check"></i>
          </span>
        </span>
                                                <span><span class="text-80 text-bold">Continue editing</span></span>
                                            </div>
                                            <div class="vs-checkbox-con vs-checkbox-primary" style="margin-right: 14px">
                                                <input value="2" name="after-save" circle="1" type="checkbox">
                                                <span class="vs-checkbox vs-checkbox-">
          <span class="vs-checkbox--check">
            <i class="vs-icon feather icon-check"></i>
          </span>
        </span>
                                                <span><span class="text-80 text-bold">Continue creating</span></span>
                                            </div>
                                            <div class="vs-checkbox-con vs-checkbox-primary" style="margin-right: 14px">
                                                <input value="3" name="after-save" circle="1" type="checkbox">
                                                <span class="vs-checkbox vs-checkbox-">
          <span class="vs-checkbox--check">
            <i class="vs-icon feather icon-check"></i>
          </span>
        </span>
                                                <span><span class="text-80 text-bold">View</span></span>
                                            </div>

                                        </div>
                                    </div>


                                    <div class="btn-group pull-left">
                                        <button type="reset" class="btn btn-white"><i class="feather icon-rotate-ccw"></i> Reset</button>
                                    </div>
                                </div>
                            </div>

                        </div></div></div> </form></div></div>




</div>