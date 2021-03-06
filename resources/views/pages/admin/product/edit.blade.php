@extends('layouts.adminmaster')
@section('css')
    <link href="{{asset('admin/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css')}}" rel="stylesheet" type="text/css" />
@stop
@section('content')
    <div class="page-content">
        <!-- BEGIN PAGE HEAD-->

        <!-- END PAGE HEAD-->
        <!-- BEGIN PAGE BREADCRUMB -->
        <h3 class="page-title"> Sửa sản phẩm
        </h3>
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="index.html">Trang chủ</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">sản phẩmn</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <span>Sửa sản phẩm</span>
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
                            <i class="fa fa-gift"></i>Sửa sản phẩm</div>
                    </div>
                    <div class="portlet-body form">
                        <!-- BEGIN FORM-->
                        <form action="{{route('backend.product.update',$food->id)}}" class="form-horizontal form-bordered" method="post" enctype="multipart/form-data">
                            {!! csrf_field() !!}
                            <div class="form-body">
                                <div class="form-group">
                                    <label class="control-label col-md-3">Tiêu đề</label>
                                    <div class="col-md-6 col-xs-12">
                                        <input type="text" class="form-control"  name="title" value="{{old('title',$food->name)}}" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Danh mục</label>
                                    <div class="col-md-6 col-xs-12">
                                        <select class="bs-select form-control" name="category_id" required>
                                            <option>---Chọn danh mục---</option>
                                            @forelse($categories as $category)
                                                <option {{$category->id == $food->product_category_id ? 'selected' : ''}}  value="{{$category->id}}">{!! str_replace('h3','hhh',str_replace('p','span',$category->name ))!!}</option>
                                            @empty

                                            @endforelse
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Ảnh đại diện</label>
                                    <div class="col-md-6 col-xs-12">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                <img src="{{asset($food->image)}}" alt="" /> </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                            <div>
                                                                    <span class="btn default btn-file">
                                                                        <span class="fileinput-new"> Select image </span>
                                                                        <span class="fileinput-exists"> Change </span>
                                                                        <input type="file" name="image" > </span>
                                                <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Ảnh chi tiết sản phẩm</label>
                                    <div class="col-md-6 col-xs-12">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                <img src="{{asset($food->imgslide)}}" alt="" /> </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                            <div>
                                                                    <span class="btn default btn-file">
                                                                        <span class="fileinput-new"> Select image </span>
                                                                        <span class="fileinput-exists"> Change </span>
                                                                        <input type="file" name="img_details" > </span>
                                                <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Banner slide sản phẩm</label>
                                    <div class="col-md-6 col-xs-12">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                <img src="{{asset($food->imgbanner)}}" alt="" /> </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                            <div>
                                                                    <span class="btn default btn-file">
                                                                        <span class="fileinput-new"> Select image </span>
                                                                        <span class="fileinput-exists"> Change </span>
                                                                        <input type="file" name="img_banner" > </span>
                                                <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Giá</label>
                                    <div class="col-md-6 col-xs-12">
                                        <table id="option-value" class="table table-striped table-bordered table-hover">
                                            <thead>
                                            <tr>
                                                <td class="text-left  bold">Quy cách</td>
                                                <td class="text-right bold">Mô tả giá</td>
                                                <td class="text-right bold">Giá tiền</td>
                                                <td></td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($food->customfielddescription as $key => $item)

                                                <tr id="option-value-row{{ $key }}">
                                                    <td class="text-left">
                                                        <input type="text" name="option_value[{{ $key }}][option_value_description]" value="{{ $item->packings }}"  class="form-control">
                                                    </td>
                                                    <td class="text-right">
                                                        <input type="text" name="option_value[{{ $key }}][des_price]" value="{{ $item->des }}" class="form-control" />
                                                    </td>
                                                    <td class="text-right">
                                                        <input type="text" name="option_value[{{ $key }}][price]" value="{{ $item->price }}"  class="form-control" />
                                                    </td>

                                                    <td class="text-left">
                                                        <button type="button" onclick="$('#option-value-row{{ $key }}').remove();" data-toggle="tooltip" title="Remove" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button>
                                                    </td>
                                                </tr>

                                            @endforeach
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <td colspan="3"></td>
                                                <td class="text-left"><button type="button" onclick="addOptionValue();" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Add Option Value"><i class="fa fa-plus-circle"></i></button></td>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3">Mô tả</label>
                                    <div class="col-md-6 col-xs-12">
                                        <textarea class="ckeditor form-control" name="description" rows="6">{{old('description',$food->description)}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Chi tiết</label>
                                    <div class="col-md-6 col-xs-12">
                                        <textarea class="ckeditor form-control" name="details" rows="6">{{old('details',$food->details)}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Số thứ tự</label>
                                    <div class="col-md-6 col-xs-12">
                                        <input type="text" class="form-control"  name="stt" value="{{old('details',$food->stt)}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">SEO url</label>
                                    <div class="col-md-6 col-xs-12">
                                        <input type="text" class="form-control"  name="url" value="{{old('url',$food->slug)}}" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">SEO title</label>
                                    <div class="col-md-6 col-xs-12">
                                        <input type="text" class="form-control"  name="seotitle" value="{{old('seotitle',$food->seo_title)}}" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">SEO keywords</label>
                                    <div class="col-md-6 col-xs-12">
                                        <input type="text" class="form-control"  name="keywords" value="{{old('keywords',$food->seo_keyword)}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">SEO decription</label>
                                    <div class="col-md-6 col-xs-12">
                                        <textarea class=" form-control" name="seodecription" rows="6">{{old('seodecription',$food->seo_description)}}</textarea>
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
    <script type="text/javascript"><!--

        var option_value_row = 0;

        function addOptionValue() {
            html  = '<tr id="option-value-row' + option_value_row + '">';
            html += '  <td><input type="text" name="option_value[' + option_value_row + '][option_value_description]" value="" placeholder="ví dụ : 250ml/chai x 12 chai/thùng" class="form-control" /></td>';
            html += '  <td class="text-right"><input type="text" name="option_value[' + option_value_row + '][des_price]" value="" placeholder="250k/chai..." class="form-control" /></td>';
            html += '  <td class="text-right"><input type="text" name="option_value[' + option_value_row + '][price]" value="" placeholder="Nhập giá tiền" class="form-control" /></td>';
            html += '  <td class="text-left"><button type="button" onclick="$(\'#option-value-row' + option_value_row + '\').remove();" data-toggle="tooltip" title="Remove" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';
            html += '</tr>';

            $('#option-value tbody').append(html);

            option_value_row++;
        }
        //--></script>
@stop
