<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\CategoryOfProduct;
use App\Models\Commit;
use App\Models\Image;
use App\Models\Team;
use Illuminate\Http\Request;

class AboutAllController extends Controller
{
    public function about()
    {
        $abouts = About::latest()->take(1)->get();
        $category_of_product = CategoryOfProduct::orderBy('created_at', 'desc')->take(1)->get(['title_uz', 'title_ru', 'title_en', 'short_content_uz', 'short_content_ru', 'short_content_en']);
        $photos = CategoryOfProduct::orderBy('created_at', 'desc')->take(3)->get(['name_uz', 'name_ru', 'name_en', 'photo']);
        $clients = Image::latest()->take(8)->get();
        $teams = Team::latest()->take(2)->get();
        $our_teams = Team::latest()->skip(2)->take(4)->get();
        $commits = Commit::latest()->take(3)->get();

        return view('about', compact(
            'abouts',
            'category_of_product',
            'clients',
            'teams',
            'our_teams',
            'commits',
            'photos',
        ));
    }
}
