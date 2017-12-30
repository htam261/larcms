@extends('layouts.adminmaster')
@section('css')
    <link href="{{asset('admin/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css')}}" rel="stylesheet" type="text/css" />
@stop
@section('content')
    <div class="page-content">
        <!-- BEGIN PAGE HEAD-->

        <!-- END PAGE HEAD-->
        <!-- BEGIN PAGE BREADCRUMB -->
        <h3 class="page-title"> Thêm thể loại món ăn
        </h3>
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="index.html">Trang chủ</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">Món ăn</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <span>Thêm thể loại món ăn</span>
                </li>
            </ul>
        </div>
        <!-- END PAGE BREADCRUMB -->
        <!-- BEGIN PAGE BASE CONTENT -->
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN EXTRAS PORTLET-->
                <div class="portlet light portlet-fit portlet-form ">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-gift"></i>Thêm thể loại món ăn</div>
                    </div>
                    <div class="portlet-body form">
                        <!-- BEGIN FORM-->
                        <form action="{{route('backend.foodscatesearch.store')}}" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered">
                            {!! csrf_field() !!}
                            <div class="form-body">
                                <div class="form-group">
                                    <label class="control-label col-md-3">Tên</label>
                                    <div class="col-md-6 col-xs-12">
                                        <input type="text" class="form-control"  name="title" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" class="btn green">
                                            <i class="fa fa-check"></i> Hoàn tất</button>
                                        <button type="reset" class="btn btn-outline grey-salsa">Hủy</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END EXTRAS PORTLET-->
            </div>
        </div>
        <!-- END PAGE BASE CONTENT -->
    </div>
@stop
@section('javascript')
    <script src="{{asset('admin/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin/assets/global/plugins/ckeditor/ckeditor.js')}}" type="text/javascript"></script>
@stop
