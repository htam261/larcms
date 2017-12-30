@extends('layouts.adminmaster')
@section('css')
    <link href="{{asset('css-admin/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css')}}" rel="stylesheet" type="text/css" />
@stop
@section('content')
    <div class="page-content">
        <!-- BEGIN PAGE HEAD-->

        <!-- END PAGE HEAD-->
        <!-- BEGIN PAGE BREADCRUMB -->
        <h3 class="page-title"> Thêm hình slider vào thư viện
        </h3>
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="index.html">Trang chủ</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">thư viện</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <span>Thêm Banner</span>
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
                            <i class="fa fa-gift"></i>Thêm hình slider</div>
                    </div>
                    <div class="portlet-body form">
                        <!-- BEGIN FORM-->
                        <form action="{{route('backend.gallery-image.store')}}" class="form-horizontal form-bordered" enctype="multipart/form-data" method="post">
                            {!! csrf_field() !!}
                            <div class="form-body">
                                <div class="form-group">
                                    <label class="control-label col-md-3">Chọn thư viện</label>
                                    <div class="col-md-6 col-xs-12">
                                        <select class="bs-select form-control" name="category_id" required>
                                            <option>---Chọn thư viện---</option>
                                            @forelse($galleries as $gallery)
                                                <option value="{{$gallery->id}}">{!! $gallery->name !!}</option>
                                                @empty

                                            @endforelse
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Banner</label>
                                    <div class="col-md-6 col-xs-12">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" /> </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                            <div>
                                                                    <span class="btn default btn-file">
                                                                        <span class="fileinput-new"> Select image </span>
                                                                        <span class="fileinput-exists"> Change </span>
                                                                        <input type="file" name="image[]" required> </span>
                                                <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-md-12 col-xs-12" style="margin: 0 auto; text-align: center">
                                        <div class="append" id="ckeditor1"></div>
                                        <a onclick="appendText()" id="clickMe1" >Thêm ảnh</a>

                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" href="javascript:;" class="btn green">
                                            <i class="fa fa-check"></i> Hoàn tất</button>
                                        <button type="reset" href="javascript:;" class="btn btn-outline grey-salsa">Hủy</button>
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
    <script src="{{asset('css-admin/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js')}}" type="text/javascript"></script>
    <script src="{{asset('css-admin/assets/global/plugins/ckeditor/ckeditor.js')}}" type="text/javascript"></script>
    <script type="text/javascript">
        var  x = 0;
        function appendText() {
            x++;
            var txt1 = '<div class="form-group"><label class="control-label col-md-3">Banner '+x+'</label><div class="col-md-6 col-xs-12"><div class="fileinput fileinput-new" data-provides="fileinput" style="float: left"><div class="fileinput-new thumbnail" style="width: 200px; height: 150px;"><img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" /></div><div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div><div><span class="btn default btn-file"><span class="fileinput-new"> Select image </span><span class="fileinput-exists"> Change </span><input type="file" name="image[]" required> </span><a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> Remove </a></div></div></div></div>';// Create text with HTML
            $(".append").append(txt1);     // Append new elements
        }
    </script>
    @stop
