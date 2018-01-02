<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="google-site-verification" content="M_R5H4ViXWzl5517WhYrKn4rTPnp73TPFUPri4keMT8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
    <meta property="fb:app_id" content="512913062232266" />
    <title>Thẩm Mỹ Quốc Tế VIP</title>

    <meta name='description' content='Viện Thẩm Mỹ Quốc Tế VIP tự hào là Trung tâm Thẩm mỹ hàng đầu, Áp dụng công nghệ tiên tiến của Hàn Quốc và tiêu chuẩn chất lượng Quốc Tế mang lại cho bạn vẻ đẹp hoàn hảo.'>
    <meta name='keywords' content='nâng mũi, nâng mũi hàn quốc, nâng mũi sline, nâng mũi sụn tự thân, nâng mũi không phẫu thuât, sửa mũi, sửa mũi hàn quốc, sửa mũi không phẫu thuật'>
    {{--<link href="https://plus.google.com/105172208433394627495" rel="publisher"/>--}}
    <link href='{{ asset("assets/dist/app.min.css") }}' rel='stylesheet' media='screen'>
    <link href='{{ asset("assets/css/frontend.css") }}' rel='stylesheet' media='screen'>
    <link href='{{ asset("assets/css/airview.min.html")}}' rel='stylesheet' media='screen'>
    <link href='{{ asset("assets/js/datepicker/css/datepicker.css") }}' rel='stylesheet' media='screen'>
    <link href='{{ asset("assets/js/jquery-ui/jquery-ui.min.css") }}' rel='stylesheet' media='screen'>
@yield('css')
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<div class="top-header">
    <div class="menu-header">
        <div class="container-fluid">
            <div class="header-link">
                <a href="{{ route('frontend.gioi-thieu.index') }}" title="Giới thiệu"><span>Giới thiệu</span></a>
                {{--<a href="khuyen-mai/index.html" title="Khuyến mại"><span>Khuyến mãi</span></a>--}}
                <a href="#" title="Tin tức"><span>Tin tức</span></a>
                <a href="#" title="Video & Ảnh"><span>Video & Ảnh</span></a>
                <a href="lien-he" title="Liên hệ"><span>Liên hệ</span></a>
                <form name="frm_search"  id="frm_search" class="frm_search" method="post">
                    <input type="text" class="input_keyword" autocomplete="off" name="searchInput"  id="Inputsearch"></input>
                    <a href="javascript:void(0)" class="button-search"></a>
                </form>
            </div>
            <div  class="logo" >
                <a href="index.html"><img src="http://thammyvip.com/static/assets/images/logo.png" alt="Dr.Hải Lê"></a>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
@include('patials.menu')


@yield('slider')


@yield('content')


<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-xs-12 col-md-6 col-lg-6">
                <p><label class="title-footer-logo">Thẩm Mỹ Quốc Tế VIP</label></p>
                <div>
                    <p>Địa chỉ: 287A Nguyễn Trãi, Phường Nguyễn Cư Trinh, Q1, TP. Hồ Chí Minh</p>
                    <p>Email: <a href="thammyvienvip@gmail.com">thammyvienvip@gmail.com</a></p>
                    <p>Hotline: 08 6676 2888</p>
                    <p>Điện thoại: 08 6676 2888</p>
                </div>				<div class =  "hr-footer"></div>
            </div>


            <div class="col-sm-6 col-xs-6 col-md-3 col-lg-3">
                <p class="title-footer">THÔNG TIN HỖ TRỢ</p>
                <p><a href = "dieu-khoan-su-dung.html" title="Điều khoản sử dụng">Điều khoản sử dụng</a></p>
                <p><a href = "phuong-thuc-thanh-toan.html" title="Phương thức thanh toán">Phương thức thanh toán</a></p>
                <p><a href = "huong-dan-su-dung.html" title="Hướng dẫn sử dụng">Hướng dẫn sử dụng</a></p>
                <p><a href = "chinh-sach-bao-mat-thong-tin-khach-hang-2.html" title="Chính sách bảo mật">Chính sách bảo mật</a></p>
                <div class="social">
                    <a href="https://www.facebook.com/tmvvip"  title="Facebook">
                        <img src="{{ asset("assets/images/social_03.png")}} " alt="Facebook">
                    </a>
                    <a href="http://page.zaloapp.com/thammydrhaile"  title="Zalo">
                        <img src="{{ asset("assets/images/social_05.png")}} " alt="Zalo">
                    </a>
                    <a href="https://www.youtube.com/user/videodrhaile/featured"  title="Youtube">
                        <img src="{{ asset("assets/images/social_07.png")}} " alt="Youtube">
                    </a>
                    <a href="https://www.instagram.com/thammy_drhaile/"  title="Instagram">
                        <img src="{{ asset("assets/images/social_08.png")}} " alt="Instagram">
                    </a>

                </div>
                <a href="http://online.gov.vn/CustomWebsiteDisplay.aspx?DocId=32077" rel = "nofollow" target = "_blank" title="Đăng ký Bộ công thương">
                    <img src="{{ asset("assets/images/bct.png")}} " alt="Đăng ký Bộ công thương" class = "bct">
                </a>
            </div>
            <div class="col-sm-6 col-xs-6 col-md-3 col-lg-3">
                <img src="http://thammyvip.com/static/assets/images/logo.png " alt="Logo Footer" class="logo-footer">
            </div>
        </div>
    </div>
</div>
<div class="bottom-footer-mobile">
    <div class="row">
        <div class="col-sm-6 col-xs-6 col-md-6 col-lg-6">
            <a href="tel:01692636999" title="Call">
                <img src="{{ asset("assets/images/button_03.png")}} " class="img-responsive-common" alt="Call">
            </a>
        </div>
        <div class="col-sm-6 col-xs-6 col-md-6 col-lg-6">

        </div>
    </div>
</div>
<!-- Thanh fixbar-->
<div class="fix-navbar">
    <a  data-toggle="modal" data-target="#myModal" class="button-register" title="Đăng ký"> Đăng ký</a>
    <a  data-toggle="modal" data-target="#myModalMap" class="button-map" title="Bản đồ">Bản đồ</a>
    <a  rel = "nofollow" href = "https://www.facebook.com/VienThamMyDr.HaiLe/?fref=ts" class="button-facebook" title="Facebook" target="_blank">Facebook</a>
    <a rel = "nofollow" href = "http://page.zaloapp.com/thammydrhaile" class="button-zalo" title="Zalo" target="_blank">Zalo</a>
</div>


<!-- Google map-->
<div class = "modal fade" id = "myModalMap" tabindex = "-1" role = "dialog"
     aria-labelledby = "myModalLabel" aria-hidden = "true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="boxform">
                <div id="carousel-partner-map" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7449.120779423432!2d105.79988209150999!3d21.01025199726972!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb58bb19571404e1b!2zVmnhu4duIFRo4bqpbSBt4bu5IHkga2hvYSBEci5I4bqjaSBMw6o!5e0!3m2!1svi!2s!4v1465873037039" width="876" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                        <div class="item">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.356848314971!2d105.83930631493243!3d21.018402986003927!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8b96c37faa88aeed!2zVmnhu4duIFRo4bqpbSBN4bu5IFkgS2hvYSBEci5I4bqjaSBMw6ogY8ahIHPhu58gMg!5e0!3m2!1svi!2s!4v1469979305812" width="876" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <a class="left-partner carousel-control" href="#carousel-partner-map" role="button" data-slide="prev">
                    </a>
                    <a class="right-partner carousel-control" href="#carousel-partner-map" role="button" data-slide="next">
                    </a>

                </div>
            </div>
        </div>
    </div>
</div>

<script src='{{ asset("assets/dist/app.min.js") }}'></script>
<script src='{{ asset("assets/js/validator.js") }}'></script>
<script src='{{ asset("assets/js/frontend.js") }}'></script>
<script src='{{ asset("assets/js/jquery.mobile.custom.min.js") }}'></script>
<script src='{{ asset("assets/js/datepicker/js/bootstrap-datepicker.js") }}'></script>
<script src='{{ asset("assets/js/jquery-ui/jquery-ui.min.js") }}'></script>
@yield('script')

<script type="text/javascript">
    $(function () {
        $('#date').datepicker();
    });
</script>
<!-- Form đăng ký-->
<div class = "modal fade" id = "myModal" tabindex = "-1" role = "dialog"
     aria-labelledby = "myModalLabel" aria-hidden = "true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="boxform">
                <script>
                    $(window).on('shown.bs.modal', function() {
                        $(".modal").append('<link style="stylesheet" src="{{ asset("assets/js/datepicker/css/datepicker.css")}}">');
                        $(".modal").append('<script type="text/javascript" src="{{ asset("assets/js/datepicker/js/bootstrap-datepicker.js")}}">');
                        $(".modal").append('<script type="text/javascript">$(function () { $("#date_register").datepicker()})');
                    });

                    function validateFormRegister() {
                        var name = document.forms["myForm"]["first_name"].value;
                        var email = document.forms["myForm"]["email"].value;
                        var phone = document.forms["myForm"]["telephone"].value;
                        var dichvu = document.forms["myForm"]["last_name"].value;
                        if (name == null || name == "" || email == null || email == "" || phone == null || phone == "" || dichvu == null || dichvu == "") {
                            alert("Name must be filled out");
                            return false;
                        }
                    }


                </script>
                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <form action="http://www.drhaile.vn/dat-lich" name="myForm" method="post" onsubmit="validateFormRegister()">

                            <div class="form-group">
                                <input type="text"   placeholder="Họ và tên (*)" class="form-control" id = "first_name" name="first_name" required>
                            </div>

                            <div class="form-group">
                                <input type="email"  placeholder="Địa chỉ Email (*)" class="form-control" id = "email"  name="email" required>
                            </div>

                            <div class="form-group">
                                <input type="text" placeholder="Số điện thoại (*)" class="form-control"  id = "phone"  name="telephone" required>
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Ngày đăng ký(*)" class="form-control hasDatepicker"  id = "date_register"  name="last_name" required>
                            </div>

                            <div class="form-group">
                                <label for="comments">Nội dung khác</label>
                                <textarea class="form-control" name="comments" rows="2"></textarea>
                            </div>
                            <input class="btn" type="submit" value="ĐĂNG KÝ NGAY">
                        </form>
                    </div>
                    <div class="col-xs-12 col-md-6 hidden_mobile" align="center">
                        <img src="{{ asset("assets/images/background-register.jpg")}} " alt="
	                	backgound">
                        <img alt="logo" src="{{ asset("themes/dhl/images/logo3.png")}} ") }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
