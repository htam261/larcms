@extends('layouts.adminmaster')
@section('content')
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->
        <h3 class="page-title">Quản lý mail
        </h3>
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="index.html">Trang chủ</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">mail</a>
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
                                        {{--<a href="{{route('backend.foodscategory.create')}}"><button id="sample_editable_1_new" class="btn sbold green"> Thêm Danh mục--}}
                                                {{--<i class="fa fa-plus"></i>--}}
                                            {{--</button></a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                            <thead>
                            <tr>
                                <th width="20%"> Mail</th>
                                <th width="20%">Công cụ</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($mail as $item)
                                <tr class="odd gradeX">
                                    <td>{{ $item->mail }}</td>
                                    <td>
                                        <a onclick="return xacnhanxoa('Are you sure Delete')" href="{{route('backend.mail.delete',$item->id)}}" name="_method" class="btn btn-sm red"><i class="fa fa-times"></i> Xóa </a>
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
