<div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
    @foreach($categoriesleft as $category)
        @if($category->parent_id == 0 && in_array('left',explode(',',$category->type)) && $category->status->status == 'active')
            <div class="row bgmenuleft">
                <div class="bgheader">
                    <a href="{{route('front::danh-muc.show',$category->slug)}}">{{$category->name}}</a>
                </div>
                <div class="navleft">
                    <ul>
                        @foreach($categoriesleft as $subcategory)
                            @if($category->id == $subcategory->parent_id && $subcategory->status->status == 'active')
                                <li><a href="{{route('front::danh-muc.show',$subcategory->slug)}}">{{$subcategory->name}}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif
    @endforeach
    {{--<div class="row bgmenuleft">
        <div class="bgheader">
        <a href="#">Trang trí tiệc cưới</a>
        </div>
        <div class="navleft">
        <ul>
            <li><a href="#">Trang trí tiệc cưới</a></li>
            <li><a href="#">Trang trí sân khấu</a></li>
            <li><a href="#">Trang trí cổng cưới</a></li>
            <li><a href="#">Trang trí đường dẫn sân khấu</a></li>
            <li><a href="#">Trang trí cô dâu chú rể</a></li>

        </ul>
        </div>
    </div>
    <div class="row bgmenuleft">
        <div class="bgheader">
        <a href="#">Bong Bóng Ngoại Nhập</a>
        </div>
        <div class="navleft">
        <ul>
            <li><a href="#">Bong bóng tạo hình</a></li>
            <li><a href="#">Bong bóng thường</a></li>
            <li><a href="#">Bong bóng nhũ</a></li>
            <li><a href="#">Bong bóng cao cấp</a></li>
            <li><a href="#">Bong bóng chấm bi</a></li>

        </ul>
        </div>
    </div>
    <div class="row bgmenuleft">
        <div class="bgheader">
        <a href="#">Dịch vụ sự kiện</a>
        </div>
        <div class="navleft">
        <ul>
            <li><a href="#">Cho thuê rối hơi</a></li>
            <li><a href="#">Cho thuê cổng hơi</a></li>
            <li><a href="#">Cho thuê lều bạt</a></li>
            <li><a href="#">Cho thuê bàn ghế</a></li>
            <li><a href="#">Cho thuê sân khấu</a></li>

        </ul>
        </div>
    </div>
    <div class="row bgmenuleft">
        <div class="bgheader">
        <a href="#">Chương trình thiếu nhi</a>
        </div>
        <div class="navleft">
        <ul>
            <li><a href="#">Tổ chức sinh nhật</a></li>
            <li><a href="#">Tổ chức thôi nôi</a></li>
            <li><a href="#">Vui tết thiếu nhi</a></li>
            <li><a href="#">Vui tết Trung Thu</a></li>
        </ul>
        </div>
    </div>--}}

    <div class="row">
        <div class="col-md-12 hidden-sm" style="padding: 0">
            <div class="fb-page"  data-href="https://www.facebook.com/azpartyvn/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/azpartyvn/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/azpartyvn/">AZparty - Dịch vụ trang trí bong bóng chuyên nghiệp</a></blockquote></div>
        </div>
		<div class="col-sm-12 hidden-lg hidden-md" style="padding: 0">
            <div class="fb-page"  data-href="https://www.facebook.com/azpartyvn/" data-tabs="timeline" data-small-header="false" data-width="285px" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/azpartyvn/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/azpartyvn/">AZparty - Dịch vụ trang trí bong bóng chuyên nghiệp</a></blockquote></div>
        </div>
    </div>
	
    <hr>
   {{-- <div class="row">
        <iframe width="100%" src="{{$config->clip_1}}" frameborder="0"
                allowfullscreen></iframe>
    </div>
    <div class="row">
        <iframe width="100%" src="{{$config->clip_2}}" frameborder="0"
                allowfullscreen></iframe>
    </div>--}}
</div>