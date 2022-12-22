<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport"/>
    <meta name="theme-color" content="#234556">
    <meta http-equiv="Content-Language" content="vi"/>
    <meta content="VN" name="geo.region"/>
    <meta name="DC.language" scheme="utf-8" content="vi"/>
    <meta name="language" content="Việt Nam">


    <link rel="shortcut icon"
          href="https://www.pngkey.com/png/detail/360-3601772_your-logo-here-your-company-logo-here-png.png"
          type="image/x-icon"/>
    <meta name="revisit-after" content="1 days"/>
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1'/>
    <title>Phim hay 2021 - Xem phim hay nhất</title>
    <meta name="description"
          content="Phim hay 2021 - Xem phim hay nhất, xem phim online miễn phí, phim hot , phim nhanh"/>
    <link rel="canonical" href="">
    <link rel="next" href=""/>
    <meta property="og:locale" content="vi_VN"/>
    <meta property="og:title" content="Phim hay 2020 - Xem phim hay nhất"/>
    <meta property="og:description"
          content="Phim hay 2020 - Xem phim hay nhất, phim hay trung quốc, hàn quốc, việt nam, mỹ, hong kong , chiếu rạp"/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content="Phim hay 2021- Xem phim hay nhất"/>
    <meta property="og:image" content=""/>
    <meta property="og:image:width" content="300"/>
    <meta property="og:image:height" content="55"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://themify.me/themify-icons">
    <link rel='dns-prefetch' href='//s.w.org'/>

    <link rel='stylesheet' id='bootstrap-css' href='{{asset('css/bootstrap.min.css?ver=5.7.2')}}' media='all'/>
    <link rel='stylesheet' id='style-css' href='{{asset('css/style.css?ver=5.7.2')}}' media='all'/>
    <link rel='stylesheet' id='wp-block-library-css' href='{{asset('css/style.min.css?ver=5.7.2')}}' media='all'/>
    <script type='text/javascript' src='{{asset('js/jquery.min.js')}}' id='halim-jquery-js'></script>
    <!--cắt ra Link ccs của theme-->
    <link rel="stylesheet" href="{{asset('frontend/layout/style.css')}}">
    <style>
        ul#result-search {
            position: absolute;
            z-index: 999;
            background: #1b2d3c;
            width: 94%;
            padding: 10px;
            margin: 1px;
        }
    </style>
</head>
<body class="home blog halimthemes halimmovies" data-masonry="">
<header id="header">
    <div class="container">
        <div class="row" id="headwrap">
            <div class="col-md-3 col-sm-6 slogan">
                <p class="site-title"><a class="logo" href="" title="phim hay"></a></p>
            </div>
            <div class="col-md-5 col-sm-6 halim-search-form hidden-xs">
                <div class="header-nav">
                    <div class="col-xs-12">
                       <div class="form-group">
                           <form action="{{route('search_movie')}}" method="get">
                               <input type="text" name="search" id="movie-search" class="form-control" placeholder="Nhập từ tìm kiếm..."
                                      autocomplete="off">
                               <button type="submit" name="search-title-movie" class="btn btn-primary">Tìm kiếm</button>
                           </form>

                       </div>
                        <ul style="max-height: 700px;overflow-y: auto;display: none" id="result-search" class="list-group"></ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 hidden-xs">
                <div id="get-bookmark" class="box-shadow"><i class="hl-bookmark"></i><span> Bookmarks</span><span
                        class="count">0</span></div>
                <div id="bookmark-list" class="hidden bookmark-list-on-pc">
                    <ul style="margin: 0;"></ul>
                </div>
            </div>
        </div>
    </div>
</header>


<div class="navbar-container">
    <div class="container">
        <nav class="navbar halim-navbar main-navigation" role="navigation" data-dropdown-hover="1">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed pull-left" data-toggle="collapse"
                        data-target="#halim" aria-expanded="false">
                    <span class="sr-only">Menu</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <button type="button" class="navbar-toggle collapsed pull-right expand-search-form"
                        data-toggle="collapse" data-target="#search-form" aria-expanded="false">
                    <span class="hl-search" aria-hidden="true"></span>
                </button>
                <button type="button" class="navbar-toggle collapsed pull-right get-bookmark-on-mobile">
                    Bookmarks<i class="hl-bookmark" aria-hidden="true"></i>
                    <span class="count">0</span>
                </button>
                <button type="button" class="navbar-toggle collapsed pull-right get-locphim-on-mobile">
                    <a href="javascript:;" id="expand-ajax-filter" style="color: #ffed4d;">Lọc <i
                            class="fas fa-filter"></i></a>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="halim">
                <div class="menu-menu_1-container">
                    <ul id="menu-menu_1" class="nav navbar-nav navbar-left">
                        <li class="current-menu-item active">
                            <a title="Trang Chủ" href="{{route('home_pages')}}">Trang chủ</a>
                        </li>
                        <li class="mega dropdown">
                            <a title="Thể Loại" href="#" data-toggle="dropdown" class="dropdown-toggle"
                               aria-haspopup="true">Thể Loại <span class="caret"></span></a>
                            <ul role="menu" class=" dropdown-menu">
                                @foreach($genres as $key=>$item)
                                    <li><a title="{{$item->title}}"
                                           href="{{route('genre',['slug'=>$item->slug])}}">{{$item->title}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="mega dropdown">
                            <a title="Quốc Gia" href="#" data-toggle="dropdown" class="dropdown-toggle"
                               aria-haspopup="true">Quốc Gia <span class="caret"></span></a>
                            <ul role="menu" class=" dropdown-menu">
                                @foreach($countries as $key=>$item)
                                    <li><a title="{{$item->title}}"
                                           href="{{route('country',['slug'=>$item->slug])}}">{{$item->title}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="mega dropdown">
                            <a title="Năm phim" href="#" data-toggle="dropdown" class="dropdown-toggle"
                               aria-haspopup="true">Phim mới<span class="caret"></span></a>
                            <ul role="menu" class=" dropdown-menu">
                                @foreach($year_movie as $year)
                                    <li class="">
                                        <a href="{{route('year_movie',['year'=>$year->year_movie])}}"
                                           title="Phim năm {{$year->year_movie}}">{{$year->year_movie}}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        @foreach($categories as $key=>$item)
                            <li class="mega"><a title="{{$item->title}}"
                                                href="{{route('category',['slug'=>$item->slug])}}">{{$item->title}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <ul class="nav navbar-nav navbar-left" style="background:#000;">
                    <li><a href="#" onclick="locphim()" style="color: #ffed4d;">Lọc Phim</a></li>
                </ul>
            </div>
        </nav>
        <div class="collapse navbar-collapse" id="search-form">
            <div id="mobile-search-form" class="halim-search-form"></div>
        </div>
        <div class="collapse navbar-collapse" id="user-info">
            <div id="mobile-user-login"></div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row fullwith-slider"></div>
</div>

<div class="container">
    @yield('content')
</div>
<div class="clearfix"></div>
<footer id="footer" class="clearfix">
    <div class="container footer-columns">
        <div class="row container">
            <div class="widget about col-xs-12 col-sm-4 col-md-4">
                <div class="footer-logo">
                    <img class="img-responsive"
                         src="https://img.favpng.com/9/23/19/movie-logo-png-favpng-nRr1DmYq3SNYSLN8571CHQTEG.jpg"
                         alt=""/>
                </div>
                Liên hệ QC:
                <a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                   data-cfemail="e5958d8c888d849ccb868aa58288848c89cb868a88">[abc@gmail.com&#160;protected]
                </a>
            </div>
        </div>
    </div>
</footer>
<div id='easy-top'></div>

<script type='text/javascript' src='{{asset('js/bootstrap.min.js?ver=5.7.2')}}' id='bootstrap-js'></script>
<script type='text/javascript' src='{{asset('js/owl.carousel.min.js?ver=5.7.2')}}' id='carousel-js'></script>

<script type='text/javascript' src='{{asset('js/halimtheme-core.min.js?ver=1626273138')}}' id='halim-init-js'></script>
<!--comment fb-->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v15.0"
        nonce="ZbUk7CHp">
</script>

<!--cuộn xem trailer-->
<script type='text/javascript'>
    $('.watch-trailer').click(function (e) {
        e.preventDefault();
        var aid = $(this).attr('href');
        $('html,body').animate({scrollTop: $(aid).offset().top}, 'slow');

    })
</script>

<!--top view ngay tuan thang-->
<script type="text/javascript">
    $(document).ready(function () {
        $.ajax({
            url: '{{route('top_movie_default')}}',
            type: 'GET',
            success: function (res) {
                $('.show-data-default').html(res);
            }
        })

        $('.filter-sidebar').click(function () {
            var href = $(this).attr('href');
            if (href == '#ngay') {
                var value = 0;
            } else if (href == '#tuan') {
                var value = 1;
            } else {
                var value = 2;
            }
            $.ajax({
                url: '{{route('top_movie')}}',
                type: 'GET',
                data: {value: value},
                success: function (res) {

                    $('.show-data-view').html(res);
                    $('.show-data-default').html('');
                }
            })
        })
    })
</script>
<!--Tìm kiếm phim file json-->
<script type="text/javascript">
    $(document).ready(function (){
        let BASE_URL = 'http://127.0.0.1:8000/'
        let movie = 'phim/'
        $('#movie-search').on('keyup',function (){
            $('#result-search').html('');
            let search = $(this).val();
            if(search != ''){
                $('#result-search').css('display','inherit');
                let expression = new RegExp(search,"i");
                $.getJSON('/json_file/movies.json',function(data){
                    $.each(data,function (key,value){
                        if(value.title.search(expression) != -1
                           || value.description.search(expression) != -1
                        ){
                           let html ='<li class="list-group-item row" style="cursor:pointer;display: flex">'+
                               '<div style="width:40%" class="col-5">'+
                               '<img src="'+BASE_URL+''+value.image_path+'" width="100%" heigth="200px" alt="">'+
                               '</div>'+
                               '<div style="width:60%;padding-left:8px" class="col-7">'+
                               '<p>'+value.title+'</p>'+
                               '|'+
                               '<p>'+value.description+'</p>'+
                               '<a href="'+BASE_URL+'phim/'+value.slug+'/'+value.id+'">xem phim</a>'+
                               '</div>'+
                                '</li>'+
                                '<hr>';
                            $('#result-search').append(html);
                        }
                    })
                })
            }else{
                $('#result-search').css('display','none');
            }
        })

        $('#result-search').on('click','li',function (){
            let click_text = $(this).text().split('|');
            $('#movie-search').val($.trim(click_text[0]));
            $('#result-search').css('display','none');
        })
    })
</script>

<!--Đếm số lượt xem phim-->
{{--<script>--}}
{{--    $('#count-view-episode').click(function (){--}}
{{--        var episode_id = $(this).data('episode_id');--}}
{{--        alert(episode_id);--}}
{{--    })--}}
{{--</script>--}}
@yield('js')
</body>
</html>
