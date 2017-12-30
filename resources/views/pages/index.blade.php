@extends('layouts.master')
@section('css')
    <link href='{{ asset("css/owl.carousel.min.css") }}' rel='stylesheet'>
    @stop
@section('slider')
    <div class="container-fluid-slider">
        <!--Carousel -->
        <div class="container-fluid">
            <section class="content">
                <div id="carousel-partner-generic" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        @foreach($sliders as $key => $slider)
                            <div class="item {{ $key == 0 ? 'active' : '' }}">
                                <a href="{{ $slider->link }}">
                                    <img src="{{ asset($slider->images) }}" alt="{{ $slider->name }}"  class = "img-responsive-common">
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <a class="left carousel-control" href="#carousel-partner-generic" role="button" data-slide="prev">
                    </a>
                    <a class="right carousel-control" href="#carousel-partner-generic" role="button" data-slide="next">
                    </a>
                </div>
            </section>
        </div>
        <!--Carousel -->
        <!--Slider Mobile -->
    </div>
    <div class="slider-mobile">
        <div class="container-fluid">
            <section class="content">
                <div class="container-fluid">
                    <section class="content">
                        <div id="carousel-partner-generic1" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                @foreach($sliders as $key => $slider)
                                    <div class="item {{ $key == 0 ? 'active' : '' }}">
                                        <a href="{{ $slider->link }}">
                                            <img src="{{ asset($slider->images) }}" alt="{{ $slider->name }}"  class = "img-responsive-common">
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                            <a class="left carousel-control" href="#carousel-partner-generic1" role="button" data-slide="prev">
                            </a>
                            <a class="right carousel-control" href="#carousel-partner-generic1" role="button" data-slide="next">
                            </a>
                        </div>
                    </section>
                </div>
                <div class="hotline-social">
                    <div class="row">
                        <div class="col-sm-6 col-xs-6 col-md-4 col-lg-4 back_yellow_1">
                            <a href="tel:1900555555" title="Call">
                                <img align="center" src="{{ asset("assets/images/1-1.png")}} " alt="Call">
                            </a>
                        </div>
                        <div class="col-sm-3 col-xs-3 col-md-4 col-lg-4 back_yellow_2">
                            <a href="https://www.facebook.com/VienThamMyDr.HaiLe/?fref=ts" title="Call">
                                <img src="{{ asset("assets/images/social_mobile_01.png")}} " alt="Call" class="" alt="Facebook Social"  align = "right" >
                            </a>
                        </div>
                        <div class="col-sm-3 col-xs-3 col-md-4 col-lg-4 back_yellow_2">
                            <a href="https://www.facebook.com/VienThamMyDr.HaiLe/?fref=ts" title="Call">
                                <img align = "left" src="{{ asset("assets/images/social_mobile_02.png")}} " alt="Call"  alt="Zalo Social">
                            </a>
                        </div>
                    </div>
                </div>

            </section>
        </div>
    </div>
    <!--Slider Mobile -->
@stop
@section('content')
    <div class="container-fluid">
        <section class="content">
            <!--Tin tuc -->
            <div class = "list-group block-news">
                <h4 class = "tab-services">
                    Dịch vụ nổi bật
                </h4>
                <div class="row">
                    @foreach($services as $service)
                    <div class="col-sm-6 col-xs-6 col-md-15 services" >
                        <div class="bor_img">
                            <a href="mediform.html" title = "Nâng mũi Medi-form">
                                <img src="{{ asset($service->image) }}" alt = "{{ $service->title }}" class = "img-responsive-common">
                            </a>
                            <h4 class = "service-item">
                                <a href="mediform.html" title = "{{ $service->seo_title }}">
                                    {{ $service->title }}
                                 </a>
                            </h4>
                        </div>
                        <div class="clear"></div>
                    </div>
            @endforeach


                    <div class="clear"></div>
                </div>
            </div>
        </section>
    </div>

    <!--Anh truoc sau -->
    <h4 class = "tab-services">
        Hình ảnh trước sau
    </h4>
    <div class="container-fluid backgound-prev-next hidden-mobile container-fluid-slider">
        <div id="carousel-example-nextprev-pc" class="carousel slide" data-ride="carousel">

            <div class="owl-carousel owl-theme">
                @foreach($galleries as $gallery)
                <img class="owl-lazy" data-src="{{ asset($gallery->image) }}"  alt="">
              @endforeach
            </div>
        </div>
    </div>
    <div class="container-fluid-nextprev hidden-pc">
        <div class="container">
            <section class="content">


                <div id="carousel-partner-nextprev" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-partner-nextprev" data-slide-to="0" class = 'active'></li>
                        <li data-target="#carousel-partner-nextprev" data-slide-to="1" class = ''></li>

                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <div class="border-vip">

                                <img src="{{ asset("uploads/images/17968596_406739669692814_790099294_o.jpg")}} " alt="Nâng mũi Medi - Form">

                            </div>
                            <div  align="center" style ="margin-top:5px">Nâng mũi Medi - Form</div>

                        </div>
                        <div class="item ">
                            <div class="border-vip">

                                <img src="{{ asset("uploads/images/0d44fa442410c94e9001.jpg")}} " alt="Trị tàn nhang Laser Spectra - Elos">

                            </div>
                            <div  align="center" style ="margin-top:5px">Trị tàn nhang Laser Spectra - Elos</div>

                        </div>
                    </div>
                    <a class="left-partner carousel-control" href="#carousel-partner-nextprev" role="button" data-slide="prev">
                    </a>
                    <a class="right-partner carousel-control" href="#carousel-partner-nextprev" role="button" data-slide="next">
                    </a>
                    <div style="margin:10px 0" align="center">Lưu ý (*) : Tác dụng có thể khác nhau tuỳ cơ địa của người dùng</div>

                </div>

            </section>
        </div>
        <!--Carousel -->
    </div>
    <!--Anh truoc sau -->
    <div class = "container-fluid">
        <!--Bac si va cong nghe -->
        <h4 class = "tab-services">
            Quy trình thẩm mỹ
        </h4>
        <div class="doctor-tech">
            <div class="col-md-12 col-sm-12"><!--col-md-12-->
                <div class="col-md-2  col-md-offset-1">
                    <img src="http://thammyvip.com/static/assets/images/qtr1.png" title="" class="img-responsive process-img">
                </div>
                <div class="col-md-2  ">
                    <img src="http://thammyvip.com/static/assets/images/qtr2.png" title="" class="img-responsive process-img">
                </div>
                <div class="col-md-2  ">
                    <img src="http://thammyvip.com/static/assets/images/qtr3.png" title="" class="img-responsive process-img">
                </div>
                <div class="col-md-2  ">
                    <img src="http://thammyvip.com/static/assets/images/qtr4.png" title="" class="img-responsive process-img">
                </div>
                <div class="col-md-2  ">
                    <img src="http://thammyvip.com/static/assets/images/qtr5.png" title="" class="img-responsive process-img">
                </div>
            </div>
        </div>
    </div>

    <h4 class = "tab-services hidden-mobile">
        Tin tức sự kiện
    </h4>
    <div class="container">
        <div class="row">

            <div class="col-sm-12 col-xs-12 col-md-4 col-lg-4">
                <h4 class = "video-tab-mobile">
                    Video của Thẩm mỹ VIP
                </h4>
                <label  class="sub-title">Khám phá hành trình làm đẹp của Khách hàng </label>
                <div class="video">
                    <div class="first-video">
                        <iframe width="360" height="250" src="https://www.youtube.com/embed/vXunqhiXtjg" frameborder="0" allowfullscreen></iframe>
                        <a class="play_video" id = "video_167371" title="Play video"></a>
                        <div class = "video-name">Nâng cung mày Hàn Quốc</div>
                    </div>

                    <ul class="media-list">
                        <li class="media padding16-13 border-bottom-dotted-1">
                            <div class="media-left">
                                <a href="http://thammyvip.com/video-tham-my/cat-mi-mat-nhanh-dep-an-toan.html">
                                    <img class="media-object" src="http://thammyvip.com/static/cache/115x76/1467800638_cat-mi-mat-nhanh-dep-an-toan-1..jpg" alt="Cắt mi mắt nhanh, đẹp, an toàn" title="Cắt mi mắt nhanh, đẹp, an toàn">
                                </a>
                            </div>
                            <div class="media-body">
                                <a href="http://thammyvip.com/video-tham-my/cat-mi-mat-nhanh-dep-an-toan.html" title="Cắt mi mắt nhanh, đẹp, an toàn" class="text-de-none-hover">
                                    <h4 class="media-heading font14px texthover-E6AC51">Cắt mi mắt nhanh, đẹp, an toàn</h4>
                                </a>
                                <p class="overflow-hidden height-38 font14px">
                                    Cắt mí mắt nhanh, đẹp, an toàn là một trong những dịch vụ thẩm mỹ…												</p>
                                <p class="margin-bottom-0">
                                    <a href="dua-sac-don-he-uu-dai-den-60.html" title="ĐUA SẮC ĐÓN HÈ - ƯU ĐÃI ĐẾN 60%" class="readmore">
                                        Xem thêm
                                    </a>
                                </p>
                            </div>
                        </li>
                        <li class="media padding16-13 border-bottom-dotted-1 bacg-f0f0f0 ">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="http://thammyvip.com/static/cache/115x76/1467194085_gia-nang-mui-boc-sun-han-quoc-tu-than-1..jpg" alt="Giá nâng mũi bọc sụn Hàn Quốc tự thân" title="Giá nâng mũi bọc sụn Hàn Quốc tự thân">
                                </a>
                            </div>
                            <div class="media-body">
                                <a href="http://thammyvip.com/video-tham-my/gia-nang-mui-boc-sun-han-quoc-tu-than.html" class="text-de-none-hover" title="Giá nâng mũi bọc sụn Hàn Quốc tự thân">
                                    <h4 class="media-heading font14px text-de-none-hover">Giá nâng mũi bọc sụn Hàn Quốc tự thân</h4>
                                </a>
                                <p class="overflow-hidden height-38 font14px">
                                    Giá nâng mũi bọc sụn Hàn Quốc tự thân là bao nhiêu là vấn đề...Một…												</p>
                                <p class="margin-bottom-0">
                                    <a href="dua-sac-don-he-uu-dai-den-60.html" title="ĐUA SẮC ĐÓN HÈ - ƯU ĐÃI ĐẾN 60%" class="readmore">
                                        Xem thêm
                                    </a>
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>


            <div class="col-sm-12 col-xs-12 col-md-4 col-lg-4">
                <h4 class = "video-tab-mobile mar-l-30">
                    Tin tức
                </h4>
                <label style="margin-left: 40px" class="sub-title">Những sự kiện đang diễn ra tại Thẩm mỹ VIP</label>


                <div class="list-item-news">
                    <div class="bor-image">
                        <a href="dua-sac-don-he-uu-dai-den-60.html" title = "">
                            <img src="uploads/images/400300.jpg")}} " alt = "" class = "img-responsive-common">
                        </a>
                    </div>

                    <h4 class = "news-item">
                        <a href="dua-sac-don-he-uu-dai-den-60.html" title = "ĐUA SẮC ĐÓN HÈ - ƯU ĐÃI ĐẾN 60%">
                            ĐUA SẮC ĐÓN HÈ - ƯU ĐÃI ĐẾN 60%							  </a>
                        <a href="dua-sac-don-he-uu-dai-den-60.html" title = "ĐUA SẮC ĐÓN HÈ - ƯU ĐÃI ĐẾN 60%" class = "readmore">
                            Xem thêm
                        </a>
                    </h4>

                    <p class = "news-item-summary">
                        ĐUA SẮC ĐÓN HÈ - Tháng 5 về lặng lẽ bất chợt giữa kỳ nghĩ lễ dài. Khởi động một mùa hè năng động với&#8230;
                    </p>

                    <div class="clear"></div>

                </div>




                <div class="list-item-news">
                    <div class="bor-image">
                        <a href="lich-lam-viec-304-15.html" title = "">
                            <img src="uploads/images/18118744_762010477303667_2691723352999417020_n.jpg")}} " alt = "" class = "img-responsive-common">
                        </a>
                    </div>

                    <h4 class = "news-item">
                        <a href="lich-lam-viec-304-15.html" title = "THÔNG BÁO LỊCH NGHỈ LỄ 30/4-1/5/2017">
                            THÔNG BÁO LỊCH NGHỈ LỄ 30/4-1/5/2017							  </a>
                        <a href="lich-lam-viec-304-15.html" title = "THÔNG BÁO LỊCH NGHỈ LỄ 30/4-1/5/2017" class = "readmore">
                            Xem thêm
                        </a>
                    </h4>

                    <p class = "news-item-summary">
                        Viện thẩm mỹ y khoa Thẩm mỹ VIP trân trọng thông báo, Thẩm mỹ VIP làm việc bình thường vào ngày nghỉ lễ 30/4, nghỉ 1 ngày&#8230;
                    </p>

                    <div class="clear"></div>

                </div>



            </div>

            <div class="col-sm-12 col-xs-12 col-md-4 col-lg-4">

                <h4 class = "video-tab-mobile mar-l-30">
                    CHUYÊN GIA TƯ VẤN THẨM MỸ
                </h4>
                <div class = "box-facebook">
                    <img src=" http://thammyvip.com/static/cache/358x453/1468912502_web3.png" class="img-responsive">
                </div>
            </div>

        </div>
    </div>
    </div>

    </div>
    <h4 class = "tab-services">
        Sao trải nghiệm dịch vụ
    </h4>
    <div class="clear"></div>
    <div class="container-fluid ">
        <section class="content block-star">

            <div id="carousel-example-generic" class="carousel slide block-star-desktop" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class = ''>
                    </li>
                    <li data-target="#carousel-example-generic" data-slide-to="4" class = ''>
                    </li>
                </ol>
                <div class="carousel-inner list-star" role="listbox">
                    <div class="item active row">
                        <div class="col-md-3 col-sm-3">
                            <div class="bor_img border-star">
                                <a href="a-hau-huyen-my-trai-nghiem-nang-mui-sline-2-lop-doubleS-biocell.html" title = "Á hậu Huyền My- Trải nghiệm công nghệ Nâng mũi S-line 2 lớp Double-s BioCell">
                                    <img src="{{ asset("uploads/images/nhan/1447822976-1447815964-13(2).jpg")}} " alt="Á hậu Huyền My- Trải nghiệm công nghệ Nâng mũi S-line 2 lớp Double-s BioCell">
                                </a>
                            </div>
                            <div class="title-star">Á hậu Huyền My- Trải&#8230;</div>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <div class="bor_img border-star">
                                <a href="tu-anh-dep-an-tuong-trai-nghiem-dich-vu-nhan-mi-deep-eyes.html" title = "Tú Anh đẹp ấn tượng trải nghiệm dịch vụ Nhấn mí Deep Eyes">
                                    <img src="{{ asset("uploads/images/cuongpv/tu-anh.png")}} " alt="Tú Anh đẹp ấn tượng trải nghiệm dịch vụ Nhấn mí Deep Eyes">
                                </a>
                            </div>
                            <div class="title-star">Tú Anh đẹp ấn tượng&#8230;</div>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <div class="bor_img border-star">
                                <a href="hot-girl-nga-tay-trai-nghiem-dich-vu-cat-mi-mani-mini-deep-va-nang-nguc-nano-chip.html" title = "Hot girl Nga Tây - Trải nghiệm dịch vụ cắt mí Mani Mini Deep và nâng ngực Nano chip">
                                    <img src="{{ asset("uploads/images/17918579_406391823060932_22592063_n.jpg")}} " alt="Hot girl Nga Tây - Trải nghiệm dịch vụ cắt mí Mani Mini Deep và nâng ngực Nano chip">
                                </a>
                            </div>
                            <div class="title-star">Hot girl Nga Tây -&#8230;</div>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <div class="bor_img border-star">
                                <a href="quynh-co-co-ve-dep-sau-tham-my-tao-nen-thuong-hieu-hot-girl-sexy.html" title = "Quỳnh Cô Cô - Vẻ đẹp sau thẩm mỹ tạo nên thương hiệu hot girl sexy">
                                    <img src="{{ asset("uploads/images/17965503_406391873060927_1358893020_n.jpg")}} " alt="Quỳnh Cô Cô - Vẻ đẹp sau thẩm mỹ tạo nên thương hiệu hot girl sexy">
                                </a>
                            </div>
                            <div class="title-star">Quỳnh Cô Cô - Vẻ&#8230;</div>
                        </div>
                    </div>
                    <div class="item  row">
                        <div class="col-md-3 col-sm-3">
                            <div class="bor_img border-star">
                                <a href="hotgirl-quynh-kool-tiem-filler-tao-cam-vline.html" title = "Hotgirl Quỳnh Kool Tiêm Filler Tạo Cằm V-Line">
                                    <img src="{{ asset("uploads/images/e26783bc22e8cfb696f9.jpg")}} " alt="Hotgirl Quỳnh Kool Tiêm Filler Tạo Cằm V-Line">
                                </a>
                            </div>
                            <div class="title-star">Hotgirl Quỳnh Kool Tiêm Filler&#8230;</div>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <div class="bor_img border-star">
                                <a href="linh-keo-dep-la-nho-so-huu-mui-lline-thoi-thuong.html" title = "Linh Kẹo đẹp lạ nhờ sở hữu chiếc mũi L-line thời thượng">
                                    <img src="{{ asset("uploads/images/cuongpv/linh-keo.jpg")}} " alt="Linh Kẹo đẹp lạ nhờ sở hữu chiếc mũi L-line thời thượng">
                                </a>
                            </div>
                            <div class="title-star">Linh Kẹo đẹp lạ nhờ&#8230;</div>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <div class="bor_img border-star">
                                <a href="ngoc-anh-co-gai-so-huu-chiec-mui-sline-2-lop-doubles-biocell.html" title = "Ngọc Anh cô gái sở hữu chiếc mũi S-line 2 lớp Double-S BioCell">
                                    <img src="{{ asset("uploads/images/nhan/10354585_1000756006680472_4612794631659027422_n.jpg")}} " alt="Ngọc Anh cô gái sở hữu chiếc mũi S-line 2 lớp Double-S BioCell">
                                </a>
                            </div>
                            <div class="title-star">Ngọc Anh cô gái sở&#8230;</div>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <div class="bor_img border-star">
                                <a href="thanh-tu-loi-nguoc-dong-tro-thanh-hotgirl-nho-don-cam-vline.html" title = "Thanh Tú &quot;lội ngược dòng&quot; trở thành Hotgirl nhờ độn cằm V-line">
                                    <img src="{{ asset("uploads/images/nhan/thanh-tu(2).jpg")}} " alt="Thanh Tú &quot;lội ngược dòng&quot; trở thành Hotgirl nhờ độn cằm V-line">
                                </a>
                            </div>
                            <div class="title-star">Thanh Tú &quot;lội ngược dòng&quot;&#8230;</div>
                        </div>
                    </div>

                </div>
                <a class="left-partner carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                </a>
                <a class="right-partner carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                </a>
            </div>

            <div id="carousel-mobile-generic" class="carousel slide block-star-mobile" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class = ''>
                    </li>
                    <li data-target="#carousel-example-generic" data-slide-to="2" class = ''>
                    </li>
                    <li data-target="#carousel-example-generic" data-slide-to="4" class = ''>
                    </li>
                    <li data-target="#carousel-example-generic" data-slide-to="6" class = ''>
                    </li>
                </ol>
                <div class="carousel-inner list-star" role="listbox">
                    <div class="item active row">
                        <div class="item-star-mobile">
                            <div class="bor_img border-star">
                                <a href="a-hau-huyen-my-trai-nghiem-nang-mui-sline-2-lop-doubleS-biocell.html" title = "Á hậu Huyền My- Trải nghiệm công nghệ Nâng mũi S-line 2 lớp Double-s BioCell">
                                    <img src="{{ asset("uploads/images/nhan/1447822976-1447815964-13(2).jpg")}} " alt="Á hậu Huyền My- Trải nghiệm công nghệ Nâng mũi S-line 2 lớp Double-s BioCell">
                                </a>
                            </div>
                            <div class="title-star">Á hậu Huyền&#8230;</div>
                        </div>
                        <div class="item-star-mobile">
                            <div class="bor_img border-star">
                                <a href="tu-anh-dep-an-tuong-trai-nghiem-dich-vu-nhan-mi-deep-eyes.html" title = "Tú Anh đẹp ấn tượng trải nghiệm dịch vụ Nhấn mí Deep Eyes">
                                    <img src="{{ asset("uploads/images/cuongpv/tu-anh.png")}} " alt="Tú Anh đẹp ấn tượng trải nghiệm dịch vụ Nhấn mí Deep Eyes">
                                </a>
                            </div>
                            <div class="title-star">Tú Anh đẹp&#8230;</div>
                        </div>
                    </div>
                    <div class="item  row">
                        <div class="item-star-mobile">
                            <div class="bor_img border-star">
                                <a href="hot-girl-nga-tay-trai-nghiem-dich-vu-cat-mi-mani-mini-deep-va-nang-nguc-nano-chip.html" title = "Hot girl Nga Tây - Trải nghiệm dịch vụ cắt mí Mani Mini Deep và nâng ngực Nano chip">
                                    <img src="{{ asset("uploads/images/17918579_406391823060932_22592063_n.jpg")}} " alt="Hot girl Nga Tây - Trải nghiệm dịch vụ cắt mí Mani Mini Deep và nâng ngực Nano chip">
                                </a>
                            </div>
                            <div class="title-star">Hot girl Nga&#8230;</div>
                        </div>
                        <div class="item-star-mobile">
                            <div class="bor_img border-star">
                                <a href="quynh-co-co-ve-dep-sau-tham-my-tao-nen-thuong-hieu-hot-girl-sexy.html" title = "Quỳnh Cô Cô - Vẻ đẹp sau thẩm mỹ tạo nên thương hiệu hot girl sexy">
                                    <img src="{{ asset("uploads/images/17965503_406391873060927_1358893020_n.jpg")}} " alt="Quỳnh Cô Cô - Vẻ đẹp sau thẩm mỹ tạo nên thương hiệu hot girl sexy">
                                </a>
                            </div>
                            <div class="title-star">Quỳnh Cô Cô&#8230;</div>
                        </div>
                    </div>
                    <div class="item  row">
                        <div class="item-star-mobile">
                            <div class="bor_img border-star">
                                <a href="hotgirl-quynh-kool-tiem-filler-tao-cam-vline.html" title = "Hotgirl Quỳnh Kool Tiêm Filler Tạo Cằm V-Line">
                                    <img src="{{ asset("uploads/images/e26783bc22e8cfb696f9.jpg")}} " alt="Hotgirl Quỳnh Kool Tiêm Filler Tạo Cằm V-Line">
                                </a>
                            </div>
                            <div class="title-star">Hotgirl Quỳnh Kool&#8230;</div>
                        </div>
                        <div class="item-star-mobile">
                            <div class="bor_img border-star">
                                <a href="linh-keo-dep-la-nho-so-huu-mui-lline-thoi-thuong.html" title = "Linh Kẹo đẹp lạ nhờ sở hữu chiếc mũi L-line thời thượng">
                                    <img src="{{ asset("uploads/images/cuongpv/linh-keo.jpg")}} " alt="Linh Kẹo đẹp lạ nhờ sở hữu chiếc mũi L-line thời thượng">
                                </a>
                            </div>
                            <div class="title-star">Linh Kẹo đẹp&#8230;</div>
                        </div>
                    </div>
                    <div class="item  row">
                        <div class="item-star-mobile">
                            <div class="bor_img border-star">
                                <a href="ngoc-anh-co-gai-so-huu-chiec-mui-sline-2-lop-doubles-biocell.html" title = "Ngọc Anh cô gái sở hữu chiếc mũi S-line 2 lớp Double-S BioCell">
                                    <img src="{{ asset("uploads/images/nhan/10354585_1000756006680472_4612794631659027422_n.jpg")}} " alt="Ngọc Anh cô gái sở hữu chiếc mũi S-line 2 lớp Double-S BioCell">
                                </a>
                            </div>
                            <div class="title-star">Ngọc Anh cô&#8230;</div>
                        </div>
                        <div class="item-star-mobile">
                            <div class="bor_img border-star">
                                <a href="thanh-tu-loi-nguoc-dong-tro-thanh-hotgirl-nho-don-cam-vline.html" title = "Thanh Tú &quot;lội ngược dòng&quot; trở thành Hotgirl nhờ độn cằm V-line">
                                    <img src="{{ asset("uploads/images/nhan/thanh-tu(2).jpg")}} " alt="Thanh Tú &quot;lội ngược dòng&quot; trở thành Hotgirl nhờ độn cằm V-line">
                                </a>
                            </div>
                            <div class="title-star">Thanh Tú &quot;lội&#8230;</div>
                        </div>
                    </div>

                </div>
                <a class="left-partner carousel-control" href="#carousel-mobile-generic" role="button" data-slide="prev">

                </a>
                <a class="right-partner carousel-control" href="#carousel-mobile-generic" role="button" data-slide="next">
                </a>
            </div>


        </section>
    </div>
@stop
@section('script')
    <script src='{{ asset("js/owl.carousel.min.js") }}'></script>
    <script>
        $('.owl-carousel').owlCarousel({
            items:4,
            lazyLoad:true,
            loop:true,
            margin:10
        });
    </script>
@stop