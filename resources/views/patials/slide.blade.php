<div class="row">
    <div id="carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            @foreach($banners as $key => $banner)
                <li data-target="#carousel1" data-slide-to="{{$key++}}" class="{{$key==1 ? 'active' : ''}}"></li>
            @endforeach

        </ol>
        <div class="carousel-inner" role="listbox">
            @foreach($banners as $key => $banner)
                <div class="item {{$key==0 ? 'active' : ''}}"><img src="{{$banner->banner}}" alt="{{$banner->title}}"
                                                                   class="center-block img-responsive">
                </div>
            @endforeach
        </div>

        <a class="left carousel-control" href="#carousel1" role="button" data-slide="prev"><span
                    class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span
                    class="sr-only">Previous</span></a>
        <a class="right carousel-control" href="#carousel1" role="button"
           data-slide="next"><span
                    class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span
                    class="sr-only">Next</span></a></div>
</div>