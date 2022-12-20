@extends('layout')
@section('content')
    <div class="row container" id="wrapper">
        <div class="halim-panel-filter">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="yoast_breadcrumb hidden-xs"><span><span><a href="">Phim theo tag</a> »
                            <span class="breadcrumb_last" aria-current="page">{{$tag}}</span></span></span>
                        </div>
                    </div>
                </div>
            </div>
            <div id="ajax-filter" class="panel-collapse collapse" aria-expanded="true" role="menu">
                <div class="ajax"></div>
            </div>
        </div>
        <main id="main-contents" class="col-xs-12 col-sm-12 col-md-8">
            <section>
                <div class="section-bar clearfix">
                    <h1 class="section-title"><span>Tag: {{$tag}}</span></h1>
                </div>
                <div class="halim_box">
                    @foreach($movies as $item)
                        <article class="col-md-3 col-sm-3 col-xs-6 thumb grid-item post-27021">
                            <div class="halim-item">
                                <a class="halim-thumb" href="{{route('movie',['slug'=>$item->slug,'id'=>$item->id])}}"
                                   title="{{$item->title}}">
                                    <figure><img class="lazy img-responsive" src="{{asset($item->image_path)}}"
                                                 alt="{{$item->title}}" title="{{$item->title}}"></figure>
                                    <span class="status">{{$item->resolution}}</span>
                                    <span class="episode">
                                        @if($item->season != 0)
                                            <span>Mùa: {{$item->season}}</span>
                                        @endif
                                        <i class="fa fa-play" aria-hidden="true"></i>
                                         @if($item->vietsub == 0)
                                            Phụ đề - Tập 1/{{$item->total_movie}}
                                        @elseif($item->vietsub == 1)
                                            Thuyết Minh - Tập 1/{{$item->total_movie}}
                                        @endif
                                    </span>
                                    <div class="icon_overlay"></div>
                                    <div class="halim-post-title-box">
                                        <div class="halim-post-title ">
                                            <p class="entry-title">{{$item->name_eng}}</p>
                                            <p class="original_title">{{$item->description}}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </article>
                    @endforeach
                </div>
                <div class="clearfix"></div>
                <div class="text-center">
                    {{--                    <ul class='page-numbers'>--}}
                    {{--                        <li><span aria-current="page" class="page-numbers current">1</span></li>--}}
                    {{--                        <li><a class="page-numbers" href="">2</a></li>--}}
                    {{--                        <li><a class="page-numbers" href="">3</a></li>--}}
                    {{--                        <li><span class="page-numbers dots">&hellip;</span></li>--}}
                    {{--                        <li><a class="page-numbers" href="">55</a></li>--}}
                    {{--                        <li><a class="next page-numbers" href=""><i class="hl-down-open rotate-right"></i></a></li>--}}
                    {{--                    </ul>--}}
                    {!! $movies->links() !!}
                </div>
            </section>
        </main>
        <!--sidebar-->
        @include('pages.include.sidebar')
    </div>
@endsection
