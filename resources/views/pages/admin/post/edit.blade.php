@extends('layouts.adminmaster')
@section('css')
    <link href="{{asset('css-admin/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css')}}" rel="stylesheet" type="text/css" />
@stop
@section('content')
    <div class="page-content">
        <!-- BEGIN PAGE HEAD-->

        <!-- END PAGE HEAD-->
        <!-- BEGIN PAGE BREADCRUMB -->
        <h3 class="page-title"> Sửa bài viết
        </h3>
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="index.html">Trang chủ</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">bài viết</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <span>Sửa bài viết</span>
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
                            <i class="fa fa-gift"></i>Sửa bài viết</div>
                    </div>
                    <div class="portlet-body form">
                        <!-- BEGIN FORM-->
                        <form action="{{route('backend.post.update',$post->id)}}" class="form-horizontal form-bordered" method="post" enctype="multipart/form-data">
                            {!! csrf_field() !!}
                            <div class="form-body">
                                <div class="form-group">
                                    <label class="control-label col-md-3">Danh mục</label>
                                    <div class="col-md-4 col-xs-12">
                                        <select class="bs-select form-control" name="parent_id">
                                            <option value="0">--- Chọn danh mục ---</option>
                                            <?php foreach ($categories as $category): ?>
                                            <?php if($category->id != 1){ ?>
                                            @if($category->parent_id == 0)
                                                <option  value="<?php echo $category->id; ?>" {{ $category->id == $post->category_id ? 'selected' : '' }}><?php echo $category->name ?></option>
                                                @foreach($categories as $subcategory)
                                                    @if($subcategory->parent_id == $category->id)
                                                        <option  value="<?php echo $subcategory->id; ?>" {{ $subcategory->id == $post->category_id ? 'selected' : '' }} >---<?php echo $subcategory->name ?></option>
                                                    @endif
                                                @endforeach

                                            @endif
                                            <?php }  ?>
                                            <?php endforeach ;?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Tiêu đề</label>
                                    <div class="col-md-6 col-xs-12">
                                        <input type="text" class="form-control"  name="title" value="{{old('title',$post->title)}}" required>
                                    </div>
                                </div>
                               
                                <div class="form-group">
                                    <label class="control-label col-md-3">Ảnh đại diện</label>
                                    <div class="col-md-6 col-xs-12">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                <img src="{{asset($post->image)}}" alt="" /> </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                            <div>
                                                                    <span class="btn default btn-file">
                                                                        <span class="fileinput-new"> Select image </span>
                                                                        <span class="fileinput-exists"> Change </span>
                                                                        <input type="file" name="image" > </span>
                                                <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                            </div>
                                            <small> Ngang 222px x 150px</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Ảnh banner </label>
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                            <img src="{{asset($post->banner)}}" alt="" /> </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                        <div>
                                                                    <span class="btn default btn-file">
                                                                        <span class="fileinput-new"> Select image </span>
                                                                        <span class="fileinput-exists"> Change </span>
                                                                        <input type="file" name="banner" > </span>
                                            <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                        </div>
                                        <small>Kích thước 1520px x 500px</small>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="control-label col-md-3">Mô tả</label>
                                    <div class="col-md-6 col-xs-12">
                                        <textarea class="ckeditor form-control" name="description" rows="6">{{old('description',$post->description)}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Chi tiết</label>
                                    <div class="col-md-6 col-xs-12">
                                        <textarea class="ckeditor form-control" name="details" rows="6">{{old('details',$post->content)}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Hiển thị bài viết dịch vụ nổi bật</label>
                                    <div class="col-md-6 col-xs-12">
                                        <input type="radio" class="form-control"  name="show" value="0" {{ $post->hot == '0' ?  'checked' : ''}}> Không
                                        <input type="radio" class="form-control"  name="show" value="1" {{ $post->hot == '1' ?  'checked' : ''}}> Có
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">SEO url</label>
                                    <div class="col-md-6 col-xs-12">
                                        <input type="text" class="form-control"  name="url" value="{{old('url',$post->slug)}}" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">SEO title</label>
                                    <div class="col-md-6 col-xs-12">
                                        <input type="text" class="form-control"  name="seotitle" value="{{old('seotitle',$post->seo_title)}}" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">SEO keywords</label>
                                    <div class="col-md-6 col-xs-12">
                                        <input type="text" class="form-control"  name="keywords" value="{{old('keywords',$post->seo_keyword)}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">SEO decription</label>
                                    <div class="col-md-6 col-xs-12">
                                        <textarea class=" form-control" name="seodecription" rows="6">{{old('seodecription',$post->seo_description)}}</textarea>
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
