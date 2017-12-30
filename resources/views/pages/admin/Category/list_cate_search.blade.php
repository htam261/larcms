@extends('layouts.adminmaster')
@section('content')
        <!-- BEGIN CONTENT BODY -->
<div class="page-content">
    <!-- BEGIN PAGE HEADER-->
    <h3 class="page-title">Quản lý thể loại món ăn
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
                <span>Thể loại món ăn</span>
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
                            <a href="{{route('backend.foodscatesearch.create')}}"><button id="sample_editable_1_new" class="btn sbold green"> Thêm thể loại
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
                @forelse($category as $item)
                <tr class="odd gradeX">
                    <td>{!! $item->name !!}</td>
                    <td>
                        <a href="{{route('backend.foodscatesearch.edit',$item->id)}}" class="btn grey-cascade"><i class="fa fa-edit"></i> Chỉnh sửa</a>
                        <a href="javascript:;" class="btn btn-sm red"><i class="fa fa-times"></i> Xóa </a>
                    </td>
                </tr>
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
