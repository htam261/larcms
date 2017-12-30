/**
 * Scripts for Frontend Website
 */
 //reply comment

function reply_comment(id){
	 $('#category_id').val(id);
}

$(document).ready(function() {
	console.log();

//paging comment ajax


// Get the modal
var modal = document.getElementById('imgModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
$('.myImg').click(function() {
    modalImg.src = this.src;
    modalImg.alt = this.alt;
    captionText.innerHTML = this.alt;
})

$('.sub-menu').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });


$("#carousel-partner-generic").swiperight(function() {
	  $(this).carousel('prev');
		});
   $("#carousel-partner-generic").swipeleft(function() {
	  $(this).carousel('next');
});

$("#carousel-partner-mobile").swiperight(function() {
	  $(this).carousel('prev');
		});
   $("#carousel-partner-mobile").swipeleft(function() {
	  $(this).carousel('next');
});

$("#carousel-partner-nextprev").swiperight(function() {
	  $(this).carousel('prev');
		});
   $("#carousel-partner-nextprev").swipeleft(function() {
	  $(this).carousel('next');
});

$('.item_prev_next_class').click(function() {
	var src= $(this).attr('src');
	$('.first-itemprevnext img').attr('src',src);
	return false;
})

//Play video

$('.play_video,.play_video_list').click(function() {
		var mystr = $(this).attr('id');
		var res =  mystr.split("_");
		var id = res['1'];
		var url = '/video_controller/get_video/'+id;
		$.get( url, function( data ) {
			 	$('.first-video').html(data)
		});
		return false;
})

//Comment

		$('.btn-primary').click(function() {
			if( $('#name').val()== ''){
		    	alert("Vui lòng nhập họ và tên");
		    	$('#name').focus();
		    	return false;
		    }
		    if( $('#phone').val()== ''){
		    	alert("Vui lòng số điện thoại");
		    	$('#phone').focus();
		    	return false;
		    }
		    var form_data = {
		        name: $('#name').val(),
		        email: $('#email').val(),
		        phone: $('#phone').val(),
		        date: $('#date').val(),
		        id_reply: $('#item_id_register').val(),
		        message: $('#message').val()
		    };
		    $.ajax({
		        url: "/product_controller/reply/",
		        type: 'POST',
		        data: form_data,
		        success: function(msg) {
		        	if(msg == 'no')
		        		alert('Gửi không thành công');
		        	else
		            	alert('Gửi thành công');
		            location.href = "/dang-ky-thanh-cong";
		            document.getElementById("register_form").reset();

		        }
		    })
		    return false;
		});
		$('.Send').click(function() {
		    var form_data = {
		        name_comment: $('#name_comment').val(),
		        email_comment: $('#email_comment').val(),
		        phone_comment: $('#phone_comment').val(),
		        item_id: $('#item_id').val(),
		        category_id: $('#category_id').val(),
		        message_comment: $('#message_comment').val()
		    };
		    if( $('#name_comment').val()== ''){
		    	alert("Vui lòng nhập họ và tên");
		    	$('#name_comment').focus();
		    	return false;
		    }
		    if( $('#phone_comment').val()== ''){
		    	alert("Vui lòng số điện thoại");
		    	$('#phone_comment').focus();
		    	return false;
		    }
		    $.ajax({
		        url: "/product_controller/insert_comment/",
		        type: 'POST',
		        data: form_data,
		        success: function(msg) {
		        	if(msg == 'no')
		        		alert('Gửi không thành công');
		        	else
		            	alert('Gửi thành công');
		            document.getElementById("comment_form").reset();

		        }
		    })
		    return false;
		});


		$(window).scroll(function(){
		if ( $(this).scrollTop() > 120 ) {
			$( '.navbar' ).addClass("fix-menu");
		} else {
			$( '.navbar' ).removeClass("fix-menu");
		}
		});

		$('.button-search').click(function() {
			var Inputsearch = $('#Inputsearch').val();
			url = '/tim-kiem/?keyword='+ ChangeToSlug(Inputsearch);
			window.location = url;
		});

		$('#Inputsearch').keyup(function(e){
			    if(e.keyCode == 13)
			    {
			       $('.button-search').click();
			    }
		});


		function ChangeToSlug(title)
			{
			    var title, slug;
			    //Đổi chữ hoa thành chữ thường
			    slug = title.toLowerCase();

			    //Xóa các ký tự đặt biệt
			    slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
			    //Đổi khoảng trắng thành ký tự gạch ngang
			    slug = slug.replace(/ /gi, "+");
			    //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
			    //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
			    slug = slug.replace(/\-\-\-\-\-/gi, '+');
			    slug = slug.replace(/\-\-\-\-/gi, '+');
			    slug = slug.replace(/\-\-\-/gi, '+');
			    slug = slug.replace(/\-\-/gi, '+');
			    //Xóa các ký tự gạch ngang ở đầu và cuối
			    slug = '@' + slug + '@';
			    slug = slug.replace(/\@\-|\-\@|\@/gi, '');
			    //In slug ra textbox có id “slug”
			    return slug;
		}
});
