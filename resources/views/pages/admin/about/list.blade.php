@extends('layouts.adminmaster')
@section('css')
    <link href="{{asset('css-admin/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css')}}" rel="stylesheet" type="text/css" />
    @stop
@section('content')
    <div class="page-content">
        <!-- BEGIN PAGE HEAD-->

        <!-- END PAGE HEAD-->
        <!-- BEGIN PAGE BREADCRUMB -->
        <h3 class="page-title"> Quản lý giới thiệu
        </h3>
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="index.html">Trang chủ</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">Giới thiệu</a>
                    <i class="fa fa-angle-right"></i>
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
                            <i class="fa fa-gift"></i>Chỉnh sửa giới thiệu</div>
                    </div>
                    <div class="portlet-body form">
                        <!-- BEGIN FORM-->
                        <form action="{{ route('backend.about.update',$about->id) }}" method="post" class="form-horizontal form-bordered">
                            {{ csrf_field() }}
                            <div class="form-body">
                                <div class="form-group">
                                    <label class="control-label col-md-3">mô tả</label>
                                    <div class="col-md-9 col-xs-12">
                                        <textarea class="ckeditor form-control" name="description" rows="6">{{ $about->description }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Chi tiết</label>
                                    <div class="col-md-9 col-xs-12">
                                        <textarea class="ckeditor form-control" name="details" rows="6">{{ $about->content }}</textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3">SEO title</label>
                                    <div class="col-md-6 col-xs-12">
                                        <input type="text" class="form-control"  name="seotitle" value="{{old('seotitle',$about->seo_title)}}" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">SEO keywords</label>
                                    <div class="col-md-6 col-xs-12">
                                        <input type="text" class="form-control"  name="keywords" value="{{old('keywords',$about->seo_keyword)}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">SEO decription</label>
                                    <div class="col-md-6 col-xs-12">
                                        <textarea class=" form-control" name="seodecription" rows="6">{{old('seodecription',$about->seo_description)}}</textarea>
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
    <script src="{{asset('css-admin/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js')}}" type="text/javascript"></script>
    <script src="{{asset('css-admin/assets/global/plugins/ckeditor/ckeditor.js')}}" type="text/javascript"></script>
    <script src="{{asset('css-admin/assets/global/plugins//ckfinder/ckfinder.js')}}" type="text/javascript"></script>
    <script>
        $(document).ready(function () {
            CKFinder.setupCKEditor();
            var delay = (function () {
                var timer = 0;
                return function (callback, ms) {
                    clearTimeout(timer);
                    timer = setTimeout(callback, ms);
                };
            })();
            $('#convert-slug').keyup(function () {
                delay(function(){
                    $.ajax({
                        url: base_url + 'admin/slug-convert/' + $('#convert-slug').val(),
                        method: 'get',
                        success: function (data) {
                            $('#result-slug').val(data);
                        }

                    });
                }, 800 );
            });
        });
    </script>
@stop
