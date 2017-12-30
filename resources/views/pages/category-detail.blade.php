@extends('layouts.master')
@section('slider')
    <div class="container-fluid-slider" style = "margin-bottom:10px">
        <div class="container-fluid">
            <section class="content">
                <div id="carousel-partner-generic" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-partner-generic" data-slide-to="0" class = 'active'></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <a href="#">
                                <img src="../img1.drhaile.vn/images/Ly/banner-dv/4c71e-nang-co-m-at-uttherapy.jpg" alt="" class ="img-responsive-common">
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <div class = "clear"></div>
    <!--Carousel -->
@stop
@section('content')
    <div class="container">
        <section class="content">
            <div class="sidebar" style="margin-top: 0px">
                <div class="nav-stacked "   data-spy="affix" data-offset-top="650">
                    <div class="panel panel-default ">
                        <div class="panel-heading">
                            <h3 class="panel-title">Đăng ký</h3>
                        </div>
                        <div class="panel-body">
                            <form action="http://drhaile.com.vn/nang-mui-s-line-2-lop-double-s.html" class="register_form" id="register_form" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                <div class="form-group"><input type="text" name="name" value="" id="name" placeholder="Họ và tên" class="form-control">
                                </div><div class="form-group"><input type="email" name="email" value="" id="email" placeholder="Email" class="form-control">
                                </div><div class="form-group"><input type="text" name="phone" value="" id="phone" placeholder="Số điện thoại" class="form-control">
                                </div><div class="form-group"><input type="text" name="date" value="" id="date" placeholder="Ngày hẹn" class="form-control">
                                </div><div class="form-group"><input type="hidden" name="item_id_register" id="item_id_register" value="6"></div><div class="form-group"><label for="message">Thông tin cuộc hẹn</label><textarea name="message" cols="40" rows="5" id="message" class="form-control"></textarea>
                                </div><button type="submit" class="btn btn-primary">Đặt hẹn</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main">
                <div id="breadcrumb">
                    <div itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                        <a href="index.html" itemprop="url"><span itemprop="title">Trang chủ</span></a>
                        ›<div itemprop="child" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                            <a href="cong-nghe-khong-phau-thuat/index.html" itemprop="url"><span itemprop="title">Công nghệ không phẫu thuật</span></a>
                            ›<div itemprop="child" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                                <a href="cong-nghe-khong-phau-thuat/nang-co-cang-da-mat/index.html" itemprop="url"><span itemprop="title">Nâng cơ, Căng da</span></a>
                                ›</div>
                        </div>
                    </div>
                </div>

                <h1 class = "detail-item-tab" id="tab-item-about">
                    <span> Nâng cơ Ultherapy</span>
                </h1>
                <div class="block-content">
                    <p style="text-align: justify;" dir="ltr"><span>Cùng với dòng chảy của thời gian, cơ thể con người dần bị già đi và xuất hiện những dấu hiệu của sự lão hóa, đó là các nếp nhăn, các đốm nám, tàn nhang và đặc biệt là sự chùng nhão các cơ trên khuôn mặt khiến bạn dần mất đi sự trẻ trung và già hơn nhiều so với tuổi.</span></p>
                    <ul style="text-align: justify;">
                        <li dir="ltr">
                            <p dir="ltr"><span>Nâng cơ mặt là </span><span>việc ứng dụng các phương pháp thẩm mỹ để khắc phục tình trạng da bị chùng nhão, chảy xệ và nhăn nheo trên khuôn mặt. Đồng thời loại bỏ các lớp mỡ thừa, làm căng các tổ chức cơ dưới da và tái cấu trúc da.</span></p>
                        </li>
                    </ul>
                    <ul style="text-align: justify;">
                        <li dir="ltr">
                            <p dir="ltr"><span>·</span><span>Công nghệ Ultherapy sử dụng sóng siêu âm hội tụ, sử dụng trong liệu pháp nâng cơ căng da thẩm mỹ không phẫu thuật mới nhất. Sự ra đời của Ultherapy là bước đột phá ngoạn mục trong công nghệ căng da mặt tầng sâu không phẫu thuật và giúp trẻ hóa khuôn mặt từ sâu bên trong.</span></p>
                        </li>
                    </ul>
                    <ul style="text-align: justify;">
                        <li dir="ltr">
                            <p dir="ltr"><span>Với hệ thống sóng siêu âm hội tụ Ultherapy sẽ tác động sâu qua da 4,5mm đến tận lớp cân cơ SMAS. Với một nhiệt độ cao lên đến 70 độ C, đủ để làm cho lớp cân cơ SMAS ngay lập tức co cuộn săn chắc, chấm dứt tình trạng chảy xệ. Mặt khác, năng lượng sóng siêu âm </span><span>tác động vào các tầng của da, kích thích collagen, elastin sản sinh mạnh mẽ từ đó giúp cho da săn chắc và sáng mịn, mang lại hiệu quả căng da cao nhất.</span></p>
                        </li>
                    </ul>
                </div>

                <div class="news-content-relation bor-right-none">
                    <div class="title-other"> Dịch vụ cùng danh mục</div>
                    <ul class="other-article">
                        <li>
                            <img src="../cache.drhaile.vn/60-54/1481966132/436x292_ava_op4.jpg">
                            <a href="nang-co-mat-perfect-vline.html" title = "Nâng cơ 4D Perfect V-Line">
                                Nâng cơ 4D Perfect V-Line
                            </a>
                            <div class="clear"></div>
                        </li>
                    </ul>
                </div>

                <div class="news-content-relation bor-right-none">
                    <div class="title-other">Dịch vụ liên quan</div>
                    <ul class="other-article">
                        <li>
                            <img src="../cache.drhaile.vn/60-54/1419866292/dfdfd.jpg">
                            <a href="nang-co-mat-endymed-rf-da-cuc.html" title = "Nâng cơ Endymed RF">
                                Nâng cơ Endymed RF
                            </a>
                            <div class="clear"></div>
                        </li>
                    </ul>
                </div>
                <div class="clear"></div>
                <div class = "detail-item-tab" id = "tab_comment_box">
                    <span> Ý kiến khách hàng</span>
                </div>
                <div class="block-content" id = "comment_block">
                    <div id="result_comment">


                    </div>
                </div>

                <div class="block-content" id="comment_frm">

                    <form  role="form" class="comment_form" id="comment_form" data-toggle="validator" enctype="multipart/form-data" method="post" accept-charset="utf-8" novalidate="true">
                        <div class="form-group"><input type="text" name="name_comment" value="" id="name_comment" placeholder="Họ và tên(*)" class="form-control">
                        </div><div class="form-group"><input type="email" name="email_comment" value="" id="email_comment" placeholder="Email" class="form-control">
                        </div><div class="form-group"><input type="text" name="phone_comment" value="" id="phone_comment" placeholder="Số điện thoại(*)" class="form-control">
                        </div><div class="form-group"><input type="hidden" name="item_id" id="item_id" value="112"></div><div class="form-group"><input type="hidden" name="category_id" id="category_id" value="0"></div><div class="form-group"><label for="message_comment">Nội dung</label><textarea name="message_comment" cols="40" rows="10" id="message_comment" class="form-control"></textarea>
                        </div><button type="submit" class="Send">Gửi</button>
                    </form>
                </div>

        </section>
    </div>
    <!-- Thanh fixbar-->
@stop