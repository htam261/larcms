@extends('layouts.master')
@section('content')
    <div class="container">
        <section class="content">
            <div class="sidebar" style="margin-top: 0px">
                <div class="panel panel-default nav-stacked"  data-spy="affix" data-offset-top="30">
                    <div class="panel-heading">
                        <h3 class="panel-title">Khuyến mãi hot</h3>
                    </div>
                    <div class="ad">
                        <a target = "_blank" href= "don-cho-suc-hut.html"><img  width = "300"  src = "uploads/images/cuongpv/d8d6a-banner-mau-trang-TIN-TUC.jpg" /></a>					</div>
                </div>

            </div>
            <div class="main">
                <h1 class = "detail-item-tab">
                    <span> Lời giới thiệu</span>
                </h1>
                <div class="block-content news-detail">
                  {!!  $about->description !!}

                    <p>{!! $about->content !!}</p>
                </div>
                <div class="facebook-comment">
                    <div class="title-other"> Bình luận </div>
                    <div class="fb-comments" data-href="http://www.drhaile.vn/loi-gioi-thieu/" data-width="100%" data-numposts="5"></div>
                </div>
            </div>
        </section>
    </div>

@stop