@extends('layouts.adminmaster')
@section('css')
    <link href="{{asset('admin/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css')}}" rel="stylesheet" type="text/css" />
@stop
@section('content')
    <div class="page-content">
        <!-- BEGIN PAGE HEAD-->

        <!-- END PAGE HEAD-->
        <!-- BEGIN PAGE BREADCRUMB -->
        <h3 class="page-title"> Sửa danh mục 
        </h3>
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="index.html">Trang chủ</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">Danh mục</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <span>Sửa danh mục </span>
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
                            <i class="fa fa-gift"></i>Sửa danh mục </div>
                    </div>
                    <div class="portlet-body form">
                        <!-- BEGIN FORM-->
                        <form action="{{route('backend.category.update',$category->id)}}" method="post" class="form-horizontal form-bordered" enctype="multipart/form-data">
                            {!! csrf_field() !!}
                            <div class="form-body">
                                <div class="form-group">
                                    <label class="control-label col-md-3">Tiêu đề</label>
                                    <div class="col-md-6 col-xs-12">
                                        <input type="text" class="form-control"  name="title" value="{{old('title',$category->name)}}" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Danh mục cha</label>
                                    <div class="col-md-4 col-xs-12">
                                        <select class="bs-select form-control" name="parent_id">
                                            <option value="0">--- Chỉ chọn khi tạo danh mục con ---</option>
                                            @forelse($categories as $item)
                                                @if($item->parent_id == 0 )
                                                    <option value="{{$item->id}}" {{ $item->id }} >{{ $item->name }}</option>
                                                @endif
                                            @empty

                                            @endforelse
                                        </select>
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">URL</label>
                                    <div class="col-md-6 col-xs-12">
                                        <input type="text" class="form-control"  name="slug" value="{{old('title',$category->slug)}}" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3">SEO title</label>
                                    <div class="col-md-6 col-xs-12">
                                        <input type="text" class="form-control" value="{{old('seotitle',$category->seo_title)}}"  name="seotitle" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">SEO keywords</label>
                                    <div class="col-md-6 col-xs-12">
                                        <input type="text" class="form-control" value="{{old('keywords',$category->seo_keyword)}}"  name="keywords" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">SEO decription</label>
                                    <div class="col-md-6 col-xs-12">
                                        <textarea class=" form-control" name="seodecription" rows="6">{{ $category->seo_description }}</textarea>
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
@stop