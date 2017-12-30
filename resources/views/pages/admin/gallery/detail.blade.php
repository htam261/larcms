@extends('layouts.adminmaster')
@section('css')
    <link href="{{asset('css-admin/assets/global/plugins/cubeportfolio/css/cubeportfolio.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css-admin/assets/pages/css/portfolio.min.css')}}" rel="stylesheet" type="text/css" />
    @stop
@section('content')
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->
        <h3 class="page-title"> Quản lý banner slider
        </h3>
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="index.html">Home</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">Thư viện</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <span>Thư viện</span>
                </li>
            </ul>
            <div class="page-toolbar">
                <div class="btn-group pull-right">
                    <button type="button" class="btn btn-fit-height grey-salt dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true"> Công cụ
                        <i class="fa fa-angle-down"></i>
                    </button>
                    <ul class="dropdown-menu pull-right" role="menu">
                        <li>
                            <a href="{{ route('backend.category-gallery.index') }}">
                                <i class="icon-bell"></i> Quản lý thư mục</a>
                        </li>
                        <li>
                            <a href="{{ route('backend.gallery-image.create') }}">
                                <i class="icon-shield"></i> Thêm hình vào thư viện</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- END PAGE HEADER-->
        <div class="portfolio-content portfolio-1">
            <div id="js-filters-juicy-projects" class="cbp-l-filters-button">
                <div data-filter="*" class="cbp-filter-item-active cbp-filter-item btn dark btn-outline uppercase"> All
                    <div class="cbp-filter-counter"></div>
                </div>
                @forelse($galleries as $category)
                <div data-filter=".{{ $category->id }}" class="cbp-filter-item btn dark btn-outline uppercase"> {{ $category->name }}
                    <div class="cbp-filter-counter"></div>
                </div>
                    @empty
                    @endforelse
            </div>
            <div id="js-grid-juicy-projects" class="cbp">
                @forelse($slider as $item)
                <div class="cbp-item {{ $item->galleries_id }}">
                    <div class="cbp-caption">
                        <div class="cbp-caption-defaultWrap">
                            <img src="{{ asset($item->image) }}" alt=""> </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <a onclick="return xacnhanxoa('Are you sure Delete')" href="{{route('backend.images.delete',$item->id)}}" name="_method" class="  btn red ">Xóa</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @empty
                @endforelse

            </div>
        </div>
    </div>
    @stop
@section('javascript')
    <script src="{{asset('css-admin/assets/global/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('css-admin/assets/pages/scripts/portfolio-1.min.js')}}" type="text/javascript"></script>
    <script>
        $(document).ready(function () {
            $('.delete-customer').click(function () {

                console.log(1111);
                var this_ = $(this);
                swal({
                    title: "Hãy chắc chắn?",
                    text: "Việc này không thể hoàn tác được!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Chắc chắn xóa!",
                    closeOnConfirm: false
                }).then(function (isConfirm) {
                    if (isConfirm === true) {
                        $.ajax({
                            url: base_url + 'admin/banners/' + this_.data('id'),
                            method: 'delete',
                            success: function (res) {
                                swal("Đã xóa!", "Banner đã được xóa.", "success");
                                this_.closest('tr').fadeOut('show');
                            }

                        });
                    } else if (isConfirm === false) {
                        swal(
                                'Không xóa!',
                                'Thao tác đã hủy',
                                'error'
                        );
                    }
                });

            });
        });
    </script>
@stop