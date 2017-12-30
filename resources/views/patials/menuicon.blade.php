<div class="container" style="padding-top:20px;">
    <hr style="margin-top:5px;     border-top: 1px dotted #EE0003;">
    <div class="col-md-12 col-lg-12">
        <div class="row">
            @foreach($categories_head as $key => $category)
                @if($category->status->status == 'active')
                    <div class="col-lg-{{$key<=3 && $key%2==0 ? 4 : 2}} col-md-6 col-xs-6 c_item
                @if($key == 0)
                            c_video
                    @elseif($key==1)
                            c_album
                    @elseif($key==2)
                            c_invitation
                    @elseif($key==3)
                            c_decor
                    @elseif($key==4)
                            c_mascot
                    @elseif($key==5)
                            c_backdrop
                    @elseif($key==6)
                            c_icake
                    @elseif($key==7)
                            c_scenarios
                    @else
                            invisable
                    @endif

                            ">
                        <div class="row">
                            <a href="{{route('front::danh-muc.show',$category->slug)}}">
                                <img src="{{$category->image ? $category->avatar : 'http://dummyimage.com/100x100/000/fff'}}" alt="">
                                <br>
                                <p style="text-transform: uppercase; font-size:0.6em;padding-top:10px">{{$category->name}}</p>
                            </a>
                        </div>
                    </div>
                    @if($key==3)
        </div>
        <div class="row">
            @endif
            @endif
            @endforeach

            {{--<div class="col-lg-4 col-md-6 col-xs-6 c_item c_video">
                <div class="row">
                    <a href="#">
                        <img src="asset/img/ind-video.png" alt="">
                        <br>
                        VIDEO CLIP
                    </a>
                </div>
            </div>


            <div class="col-lg-2 col-md-6 col-xs-6 c_item c_album">
                <div class="row">
                    <a href="#">
                        <img src="asset/img/ind-album.png" alt="">
                        <br>
                        ALBUM
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-6 c_item c_invitation">
                <div class="row">
                    <a href="#">
                        <img src="asset/img/ind-invitation.png" alt="">
                        <br>
                        INVITATION
                    </a>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-xs-6 c_item c_decor">
                <div class="row">
                    <a href="#">
                        <img src="asset/img/ind-decor.png" alt="">
                        <br>
                        DECOR
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2 col-md-6 col-xs-6 c_item c_mascot">
                <div class="row">
                    <a href="#">
                        <img src="asset/img/ind-mascot.png" alt="">
                        <br>
                        MASCOT
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-6 c_item c_backdrop">
                <div class="row">
                    <a href="#">
                        <img src="asset/img/ind-backdrop.png" alt="">
                        <br>
                        BACKDROP
                    </a>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-xs-6 c_item c_icake">
                <div class="row">
                    <a href="#">
                        <img src="asset/img/ind-cake.png" alt="">
                        <br>
                        CAKE
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-6 c_item c_scenarios">
                <div class="row">
                    <a href="#">
                        <img src="asset/img/ind-birthday-shop.png" alt="">
                        <br>
                        BIRTHDAY SHOP
                    </a>
                </div>
            </div>
        </div>--}}
        </div>
    </div>
    <hr>
</div>