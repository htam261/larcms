@extends('layouts.adminmaster')
@section('content')
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->
        <h3 class="page-title">Quản lý liên hệ
        </h3>
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="index.html">Trang chủ</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">Liên hệ</a>
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
                        {{--<div class="table-toolbar">--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-md-6">--}}
                                    {{--<div class="btn-group">--}}
                                        {{--<a href="{{route('backend.Category.create')}}"><button id="sample_editable_1_new" class="btn sbold green"> Thêm Danh mục--}}
                                                {{--<i class="fa fa-plus"></i>--}}
                                            {{--</button></a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                            <thead>
                            <tr>
                                <th width="20%"> Họ tên </th>
                                <th width="20%"> Số điện thoại </th>
                                <th width="20%">Công cụ</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($mail as $item)
                                <tr class="odd gradeX">
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td>
                                        <a class="btn btn-danger" href="{{route('backend.contact.show',$item->id)}}"> xem </a>
                                        <a onclick="return xacnhanxoa('Are you sure Delete')" href="{{route('backend.contact.delete',$item->id)}}" name="_method" class="btn btn-sm red"><i class="fa fa-times"></i> Xóa </a>
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
