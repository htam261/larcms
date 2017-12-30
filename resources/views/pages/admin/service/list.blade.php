@extends('layouts.adminmaster')
@section('content')
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->
        <h3 class="page-title">Quản lý {{ $title }}
        </h3>
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="index.html">Trang chủ</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">Tin tức</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <span>Quản lý {{ $title }}</span>
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
                                        <a href="{{route('backend.news.create')}}"><button id="sample_editable_1_new" class="btn sbold green"> Thêm {{ $title }}
                                                <i class="fa fa-plus"></i>
                                            </button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                            <thead>
                            <tr>
                                <th width="5%"> Hình ảnh </th>
                                <th width="20%"> {{ $title }} </th>
                                <th width="20%"> Ngày tạo </th>
                                <th width="20%">Công cụ</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($services as $item)
                            <tr class="odd gradeX">
                                <td><img src="{{ asset($item->image)}}" class="img-responsive" alt=""></td>
                                <td>{{$item->title}}</td>
                                <td>{{$item->created_at}}</td>
                                <td>
                                    <a href="{{route('backend.news.edit',$item->id)}}" class="btn grey-cascade"><i class="fa fa-edit"></i> Chỉnh sửa</a>
                                    <a onclick="return xacnhanxoa('Are you sure Delete')" href="{{route('backend.news.delete',$item->id)}}" name="_method" class="btn btn-sm red"><i class="fa fa-times"></i> Xóa </a>
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
                <!-- END EXAMPLE TABLE PORTLET-->
            </div>
        </div>

    </div>
@stop
