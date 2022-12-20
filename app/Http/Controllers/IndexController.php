<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Country;
use App\Models\Genre;
use App\Models\Movie;
use App\Models\Episode;
use DB;

class IndexController extends Controller
{
    public function home()
    {
        $categories = Category::orderBy('position', 'ASC')->where('status', 1)->get();
        $countries = Country::orderBy('id', 'desc')->get();
        $genres = Genre::orderBy('id', 'desc')->get();
        $movie_host = Movie::where('status', 1)->where('movie_host', 1)->orderBy('updated_at', 'DESC')->get();
        $movie_host_trailer = Movie::where('resolution', 'Trailer')->where('status', 1)->orderBy('updated_at', 'DESC')->take(10)->get();

        $movie_host_sidebar = Movie::where('status', 1)->where('movie_host', 1)->orderBy('updated_at', 'DESC')->take(10)->get();
        $year_movie = Movie::select(DB::raw('count(*), year_movie'))
            ->where('year_movie', '<>', null)
            ->groupBy('year_movie')->orderBy('year_movie', 'DESC')
            ->get();
        return view('pages.home', compact('categories', 'countries',
            'genres', 'movie_host', 'year_movie', 'movie_host_sidebar', 'movie_host_trailer'));
    }


    public function category($slug)
    {
        $categories = Category::orderBy('position', 'ASC')->where('status', 1)->get();
        $countries = Country::orderBy('id', 'desc')->get();
        $genres = Genre::orderBy('id', 'desc')->get();
        $movie_host_sidebar = Movie::where('status', 1)->where('movie_host', 1)->orderBy('updated_at', 'DESC')->take(10)->get();
        $movie_host_trailer = Movie::where('resolution', 'Trailer')->where('status', 1)->orderBy('updated_at', 'DESC')->take(10)->get();
        $year_movie = Movie::select(DB::raw('count(*), year_movie'))
            ->where('year_movie', '<>', null)
            ->groupBy('year_movie')->orderBy('year_movie', 'DESC')
            ->get();
        $cate_slug = Category::where('slug', $slug)->first();
        $movies = Movie::where('category_id', $cate_slug->id)->where('status', 1)->orderBy('updated_at', 'DESC')->paginate(12);
        return view('pages.category', compact('categories', 'countries', 'movie_host_trailer',
            'genres', 'cate_slug', 'movies', 'year_movie', 'movie_host_sidebar'));
    }

    public function genre($slug)
    {
        $categories = Category::orderBy('position', 'ASC')->where('status', 1)->get();
        $countries = Country::orderBy('id', 'desc')->get();
        $genres = Genre::orderBy('id', 'desc')->get();
        $movie_host_sidebar = Movie::where('status', 1)->where('movie_host', 1)->orderBy('updated_at', 'DESC')->take(10)->get();
        $movie_host_trailer = Movie::where('resolution', 'Trailer')->where('status', 1)->orderBy('updated_at', 'DESC')->take(10)->get();
        $year_movie = Movie::select(DB::raw('count(*), year_movie'))
            ->where('year_movie', '<>', null)
            ->groupBy('year_movie')->orderBy('year_movie', 'DESC')
            ->get();
        $genre_slug = Genre::where('slug', $slug)->first();
        $movies = $genre_slug->movieGenre()->where('status', 1)->orderBy('updated_at', 'DESC')->paginate(12);
        return view('pages.genre', compact('categories', 'countries',
            'genres', 'year_movie', 'genre_slug', 'movies', 'movie_host_sidebar', 'movie_host_trailer'));
    }

    public function country($slug)
    {
        $categories = Category::orderBy('position', 'ASC')->where('status', 1)->get();
        $countries = Country::orderBy('id', 'desc')->get();
        $genres = Genre::orderBy('id', 'desc')->get();
        $movie_host_sidebar = Movie::where('status', 1)->where('movie_host', 1)->orderBy('updated_at', 'DESC')->take(10)->get();
        $movie_host_trailer = Movie::where('resolution', 'Trailer')->where('status', 1)->orderBy('updated_at', 'DESC')->take(10)->get();
        $year_movie = Movie::select(DB::raw('count(*), year_movie'))
            ->where('year_movie', '<>', null)
            ->groupBy('year_movie')->orderBy('year_movie', 'DESC')
            ->get();
        $country_slug = Country::where('slug', $slug)->first();
        $movies = Movie::where('country_id', $country_slug->id)->where('status', 1)->orderBy('updated_at', 'DESC')->paginate(12);
        return view('pages.country', compact('categories', 'countries', 'genres',
            'year_movie', 'country_slug', 'movies', 'movie_host_sidebar', 'movie_host_trailer'));
    }

    public function movie($slug, $id)
    {
        $categories = Category::orderBy('position', 'ASC')->where('status', 1)->get();
        $countries = Country::orderBy('id', 'desc')->get();
        $genres = Genre::orderBy('id', 'desc')->get();
        $movie_host_sidebar = Movie::where('status', 1)->where('movie_host', 1)->orderBy('updated_at', 'DESC')->take(10)->get();
        $movie_host_trailer = Movie::where('resolution', 'Trailer')->where('status', 1)->orderBy('updated_at', 'DESC')->take(10)->get();
        $year_movie = Movie::select(DB::raw('count(*), year_movie'))
            ->where('year_movie', '<>', null)
            ->groupBy('year_movie')->orderBy('year_movie', 'DESC')
            ->get();
        $movie = Movie::with('category', 'country', 'genreMovie')->where('slug', $slug)->where('id', $id)->where('status', 1)->first();
        $movie_related = Movie::with('category', 'country', 'genreMovie')
            ->where('status', 1)
            ->where('category_id', $movie->category->id)
            ->where('movie_host', 1)
            ->orderBy(DB::raw('Rand()'))
            ->whereNotIn('slug', [$slug])
            ->get();
        return view('pages.movie', compact('categories', 'countries', 'genres',
            'year_movie', 'movie', 'movie_related', 'movie_host_sidebar', 'movie_host_trailer'));
    }
    public function year_movie($year)
    {
        $categories = Category::orderBy('position', 'ASC')->where('status', 1)->get();
        $countries = Country::orderBy('id', 'desc')->get();
        $genres = Genre::orderBy('id', 'desc')->get();
        $movie_host_sidebar = Movie::where('status', 1)->where('movie_host', 1)->orderBy('updated_at', 'DESC')->take(10)->get();
        $movie_host_trailer = Movie::where('resolution', 'Trailer')->where('status', 1)->orderBy('updated_at', 'DESC')->take(10)->get();
        $year_movie = Movie::select(DB::raw('count(*), year_movie'))
            ->where('year_movie', '<>', null)
            ->groupBy('year_movie')->orderBy('year_movie', 'DESC')
            ->get();
        $movies = Movie::where('year_movie', $year)->where('status', 1)->orderBy('updated_at', 'DESC')->paginate(24);
        return view('pages.year_movie', compact('categories', 'countries', 'genres',
            'year_movie', 'movies', 'year', 'movie_host_sidebar', 'movie_host_trailer'));
    }

    public function tag_movie($tag)
    {
        $categories = Category::orderBy('position', 'ASC')->where('status', 1)->get();

        $countries = Country::orderBy('id', 'desc')->get();
        $genres = Genre::orderBy('id', 'desc')->get();
        $movie_host_sidebar = Movie::where('status', 1)->where('movie_host', 1)->orderBy('updated_at', 'DESC')->take(10)->get();
        $movie_host_trailer = Movie::where('resolution', 'Trailer')->where('status', 1)->orderBy('updated_at', 'DESC')->take(10)->get();
        $year_movie = Movie::select(DB::raw('count(*), year_movie'))
            ->where('year_movie', '<>', null)
            ->groupBy('year_movie')->orderBy('year_movie', 'DESC')
            ->get();
        $movies = Movie::where('tag_movie', 'like', '%' . $tag . '%')->where('status', 1)->orderBy('updated_at', 'DESC')->paginate(24);
        return view('pages.tag_movie', compact('categories', 'countries', 'genres',
            'year_movie', 'movies', 'tag', 'movie_host_sidebar', 'movie_host_trailer'));
    }

    public function top_movie(Request $request)
    {
        $data = $request->all();
        $topMovie = Movie::where('top_view', $data['value'])->where('status', 1)->orderBy('updated_at', 'DESC')->take(8)->get();
        $html = '';
        foreach ($topMovie as $item) {
            $html .= '<div class="item">
                <a href="'.url('phim/'.$item->slug.'/'. $item->id).'" title="'.$item->title.'">
                        <div class="item-link">
                        <img src="'.url($item->image_path).'"
                    class="lazy post-thumb" alt="'.$item->title.'"
                    title="'.$item->title.'"/>
                        <span class="is_trailer">'.$item->resolution.'</span>
                </div>
                    <p class="title">'.$item->title.'</p>
                </a>
                    <div class="viewsCount" style="color: #9d9d9d;">3.2K lượt xem</div>
                    <div style="float: left;">
                    <span class="user-rate-image post-large-rate stars-large-vang"
                          style="display: block;/* width: 100%; */">
                    <span style="width: 0%"></span></span>
                </div>';
        }
        echo $html;
    }

    public function top_movie_default(Request $request)
    {
        $data = $request->all();
        $topMovie = Movie::where('top_view', 0)->where('status', 1)->orderBy('updated_at', 'DESC')->take(8)->get();
        $html = '';
        foreach ($topMovie as $item) {
            $html .= ' <div class="item post-37176">
                <a href="' . url('phim/' . $item->slug . '/' . $item->id) . '" title="' . $item->title . '">
                        <div class="item-link">
                        <img src="' . url($item->image_path) . '"
                    class="lazy post-thumb" alt="' . $item->title . '"
                    title="' . $item->title . '"/>
                        <span class="is_trailer">' . $item->resolution . '</span>
                </div>
                    <p class="title">' . $item->title . '</p>
                </a>
                    <div class="viewsCount" style="color: #9d9d9d;">3.2K lượt xem</div>
                    <div style="float: left;">
                    <span class="user-rate-image post-large-rate stars-large-vang"
                          style="display: block;/* width: 100%; */">
                    <span style="width: 0%"></span></span>
                </div>';
        }
        echo $html;
    }

    public function search_movie()
    {
        if(isset($_GET['search-title-movie'])){
            if(!empty($_GET['search'])){
                $search = $_GET['search'];
                $categories = Category::orderBy('position', 'ASC')->where('status', 1)->get();

                $countries = Country::orderBy('id', 'desc')->get();
                $genres = Genre::orderBy('id', 'desc')->get();
                $movie_host_sidebar = Movie::where('status', 1)->where('movie_host', 1)->orderBy('updated_at', 'DESC')->take(10)->get();
                $movie_host_trailer = Movie::where('resolution', 'Trailer')->where('status', 1)->orderBy('updated_at', 'DESC')->take(10)->get();
                $year_movie = Movie::select(DB::raw('count(*), year_movie'))
                    ->where('year_movie', '<>', null)
                    ->groupBy('year_movie')->orderBy('year_movie', 'DESC')
                    ->get();
                $movies = Movie::where(function ($query) use ($search){
                    $query->orwhere('title','like','%'.$search.'%');
                    $query->orwhere('slug','like','%'.$search.'%');
                    $query->orwhere('description','like','%'.$search.'%');
                    $query->orwhere('name_eng','like','%'.$search.'%');
                    $query->orwhere('resolution','like','%'.$search.'%');
                })
                    ->where('status', 1)
                    ->orderBy('updated_at', 'DESC')->paginate(24);
                return view('pages.search_movie', compact('categories', 'countries', 'genres',
                    'year_movie', 'movies', 'search', 'movie_host_sidebar', 'movie_host_trailer'));
            }else{
                return back();
            }
        }

    }

    public function watch()
    {
        $categories = Category::orderBy('position', 'ASC')->where('status', 1)->get();
        $countries = Country::orderBy('id', 'desc')->get();
        $genres = Genre::orderBy('id', 'desc')->get();
        return view('pages.watch', compact('categories', 'countries', 'genres'));
    }

    public function episode()
    {
        return view('pages.episode');
    }



}
