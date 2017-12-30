@extends('layouts.adminmaster')
@section('content')
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->
        <h3 class="page-title">Quản lý danh mục
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
            </ul>
        </div>
        <!-- END PAGE HEADER-->
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet light ">
                    <div class="portlet-body">
                        <div class="table-toolbar">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="btn-group">
                                        <a href="{{route('backend.category.create')}}"><button id="sample_editable_1_new" class="btn sbold green"> Thêm Danh mục
                                                <i class="fa fa-plus"></i>
                                            </button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                            <thead>
                            <tr>
                                <th width="20%"> Danh mục</th>
                                <th width="20%">Công cụ</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($categories as $category)
                                @if($category->parent_id == 0)
                                    <tr>
                                        <td class="title-cate">{!! $category->name !!}</td>
                                        <td>
                                            <a href="{{route('backend.category.edit',$category->id)}}" class="btn grey-cascade"><i class="fa fa-edit"></i> Chỉnh sửa</a>
                                            <a href="{{route('backend.category.delete',$category->id)}}" class="btn btn-sm red"><i class="fa fa-times"></i> Xóa </a>
                                        </td>
                                    </tr>
                                    @foreach($categories as $subcategory)
                                        @if($subcategory->parent_id == $category->id)
                                            <tr>
                                                <td style="text-align: left;padding-left: 50px">
                                                    &blacktriangleright; {{ $subcategory->name }}
                                                </td>
                                                <td>
                                                    <a href="{{route('backend.category.edit',$subcategory->id)}}" class="btn grey-cascade"><i class="fa fa-edit"></i> Chỉnh sửa</a>
                                                    <a href="{{route('backend.category.delete',$subcategory->id)}}" class="btn btn-sm red"><i class="fa fa-times"></i> Xóa </a>
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endif
                            @empty
                                <tr>
                                    <td colspan="7">NODATA</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@stop
