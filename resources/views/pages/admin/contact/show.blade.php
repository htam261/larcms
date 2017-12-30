@extends('layouts.adminmaster')
@section('css')
    <link href="{{asset('css-admin/global/plugins/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css-admin/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css')}}"
          rel="stylesheet" type="text/css"/>
    <link href="{{asset('css-admin/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}" rel="stylesheet"
          type="text/css">
    <style>
        div#large.modal.fade.bs-modal-lg.in {
            background: rgba(9, 9, 9, 0.6);
        }
    </style>
    @stop

    @section('content')
            <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEAD-->
            <div class="page-head">
                <!-- BEGIN PAGE TITLE -->
                <div class="page-title">
                    <h1>Quản lý Liên hệ

                    </h1>
                </div>
                <!-- END PAGE TITLE -->
                <!-- BEGIN PAGE TOOLBAR -->

            </div>
            <!-- END PAGE HEAD-->
            <!-- BEGIN PAGE BREADCRUMB -->
            <ul class="page-breadcrumb breadcrumb">
                <li>
                    <a href="index.html">Home</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <a href="#">Liên hệ</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <span class="active">Quản lý Liên hệ</span>
                </li>
            </ul>
            <!-- END PAGE BREADCRUMB -->
            <!-- BEGIN PAGE BASE CONTENT -->
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                    <div class="portlet light bordered">

                        <div class="portlet-body">
                            <div class="table-toolbar">
                                <div class="row">
                                </div>
                            </div>
                            <table class="table table-striped table-bordered table-hover table-checkable order-column"
                                   id="sample_1">
                                <thead>
                                <tr>
                                    <th>
                                        <input type="checkbox" class="group-checkable"
                                               data-set="#sample_1 .checkboxes"/></th>
                                    <th> Họ tên</th>
                                    <th> email</th>
                                    <th> điện thoại</th>
                                    <th> ngày gởi</th>
                                    <th> Kích hoạt</th>
                                    <th>Công cụ</th>
                                </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE PORTLET-->
                </div>
            </div>
            <!-- END PAGE BASE CONTENT -->
        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->

    </div>
    <!-- END CONTAINER -->
    <!-- /.modal -->
    <div class="modal fade bs-modal-lg in" id="large" tabindex="-1" role="dialog" aria-hidden="true"
         style="display: block; padding-left: 0px;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" onclick="history.go(-1);" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Chi tiết liên hệ <span class="mailbox-read-time pull-right">Ngày liên hệ : {{$contact->created_at}}</span>
                    </h4>

                </div>
                <div class="modal-body no-padding">
                    <div class="mailbox-read-info">
                        <h4>Họ và tên: {{$contact->name}}</h4>
                        <p><b>Mail</b>: <a href="mailto:{{$contact->mail}}">{{$contact->mail}}</a></p>
                        <p><b>Số điện thoại</b>: {{$contact->phone}}</p>
                        <p><b>Địa chỉ</b>: {{ $contact->address }}</p>
                    </div>
                    <hr>
                    <div class="mailbox-read-message">
                        <p>{!! $contact->content !!}</p>
                    </div>

                </div>
                <div class="modal-footer">
                    <a onclick="history.go(-1);" type="button" class="btn dark btn-outline" data-dismiss="modal">Close</a>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
@stop
