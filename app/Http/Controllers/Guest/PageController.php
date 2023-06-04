<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {

        $comics = Comic::orderByDesc('id')->get();
        return view('home', compact('comics'));
    }


    public function show($id)
    {

        $comics = Comic::all();
        $comic = Comic::find($id);
        return view('viewComic', compact('comics', 'comic'));
    }


    // public function show($id) {
    //     $data = [
    //         "comic" => Comic::where('id', $id)->get(),
    //         "dcComicsLinks" => DcComicsLink::all(),
    //         "dcLinks" => DcLink::all(),
    //         "pages" => Page::all(),
    //         "shopLinks" => ShopLink::all(),
    //         "siteBanners" => SiteBanner::all(),
    //         "siteLinks" => SiteLink::all(),
    //     ];
    //     return view("singleComic", compact("data"));

}
