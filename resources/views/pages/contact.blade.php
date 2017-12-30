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
						<a target = "_blank" href= "#/don-cho-suc-hut.html"><img  width = "300"  src = "#//uploads/images/cuongpv/d8d6a-banner-mau-trang-TIN-TUC.jpg" /></a>					</div>
				</div>
						
						  </div>
		  <div class="main">     	
		        <h1 class = "detail-item-tab">
		              <span> Liên hệ</span>
		         </h1>

		         <form action="#/lien-he/#contact-form" method="post" name="contactform">
					<div class="contact-form" id="contact-form">

						<div class="contact-form-info">
							<div class="contact-logo"><img src="#/themes/dhl/images/logo-contact.png" alt="" title="" /></div>
							<h2>Thẩm Mỹ Quốc Tế VIP</h2>
							<p>Dịa chỉ: 287A Nguyễn Trãi, Phường Nguyễn Cư Trinh, Q1,
                                Thành phố Hồ Chí Minh</p>
							<p>Hotline : 08.66.762.888</p>
            <p>Hãy liên hệ chúng tôi theo địa chỉ có trên bản đồ hoặc gửi email cho chúng tôi theo mẫu form dưới đây, chúng tôi sẽ trả lời sớm nhất ngay khi nhận được email của quý khách.</p>
						</div>


						<div class="contact-formfx">
							<div class="contact-formfx-l">
								<p>
									<input type="text" value="" name="fullname" class="text" placeholder="Họ và tên" />
																	<p>	
								<p>
									<input type="text" value="" name="phone" class="text" placeholder="Số điện thoại" />
																	<p>
								<p>
									<input type="text" value="" name="email" class="text" placeholder="Email" />
																	<p>

								<p>
									<input type="text" value="" name="job" class="text" placeholder="Nghề nghiệp" />
								<p>

							</div>	

							<div class="contact-formfx-r">
								<textarea cols="100" rows="5" name="msg" placeholder="Nội dung ..."></textarea>
																<p>
									<input type="submit" value=" Gửi " name="submit" class="submit" />
								</p>	
							</div>

							<div class="clearfix"></div>
						</div>
							
					</div>	
				</form>

		  </div>
	</section>
</div>
@stop