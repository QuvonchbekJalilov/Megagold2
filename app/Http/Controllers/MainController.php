<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\ActiveClient;
use App\Models\banner;
use App\Models\Blog;
use App\Models\Category;
use App\Models\CategoryOfProduct;
use App\Models\Commit;
use App\Models\Contact;
use App\Models\Home;
use App\Models\Image;
use App\Models\Link;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    private function findNews($category_id)
    {
        return CategoryOfProduct::where('category_id', $category_id);
    }

    public function index()
    {

        $visitorCount = DB::table('website_visits')->count();
        $banners = banner::all();
        $homes = Home::latest()->take(1)->get();
        $abouts = About::latest()->take(1)->get();
        $photos = CategoryOfProduct::orderBy('created_at', 'desc')->take(6)->get(['id', 'name_uz', 'name_ru', 'name_en', 'photo', 'category_id']);
        $teams = Team::latest()->take(2)->get();
        $categories = Category::latest()->take(6)->get();
        $our_teams = Team::latest()->skip(2)->take(4)->get();
        $commits = Commit::latest()->take(4)->get();
        $contacts = Contact::latest()->take(1)->get();
        $actives = ActiveClient::latest()->take(1)->get();
        $links = Link::latest()->take(1)->get();
        $clients = Image::latest()->take(8)->get();
        $blogs = Blog::latest()->take(4)->get();
        $blog_text = Blog::latest()->take(1)->get(['title_uz', 'title_ru', 'title_en', 'short_content_uz', 'short_content_ru', 'short_content_en', 'content_uz', 'content_ru', 'content_en']);
        $popular_products = CategoryOfProduct::where('type_id', '=', 1)->paginate(1);

        return view('front.index', compact(
            'abouts',
            'homes',
            'contacts',
            'actives',
            'links',
            'blogs',
            'blog_text',
            'popular_products',
            'categories',
            'clients',
            'teams',
            'our_teams',
            'commits',
            'photos',
            'visitorCount',
            'banners'
        ));
    }

    public function about()
    {
        $abouts = About::latest()->take(1)->get();
        $category_of_product = CategoryOfProduct::orderBy('created_at', 'desc')->take(1)->get(['name_uz', 'name_ru', 'name_en']);
        $photos = CategoryOfProduct::orderBy('created_at', 'desc')->take(3)->get(['name_uz', 'name_ru', 'name_en', 'photo']);
        $clients = Image::latest()->get();
        $teams = Team::latest()->take(2)->get();
        $our_teams = Team::latest()->skip(2)->take(4)->get();
        $commits = Commit::latest()->take(3)->get();
        $links = Link::latest()->take(1)->get();
        $contacts = Contact::latest()->take(1)->get();
        $actives = ActiveClient::latest()->take(1)->get();

        return view('front.about', compact(
            'abouts',
            'category_of_product',
            'clients',
            'teams',
            'our_teams',
            'commits',
            'links',
            'photos',
            'contacts',
            'actives',
        ));
    }
    public function blog()
    {
        $blogs = Blog::latest()->paginate(8);
        $lastBlogs = Blog::take(4)->latest()->get();
        $links = Link::latest()->take(1)->get();
        $contacts = Contact::latest()->take(1)->get();

        $categories = Category::orderBy('created_at', 'desc')->take(6)->get(['name_uz', 'name_ru', 'name_en']);
        return view('front.blog', compact(
            'blogs',
            'categories',
            'links',
            'lastBlogs',
            'contacts'
        ));
    }

    public function single_blog($blog)
    {
        $blog = Blog::find($blog);
        $lastBlogs = Blog::take(3)->latest()->get();
        $links = Link::latest()->take(1)->get();
        $contacts = Contact::latest()->take(1)->get();

        $categories = Category::orderBy('created_at', 'desc')->take(6)->get(['id','name_uz', 'name_ru', 'name_en']);
        return view('front.singleBlog', compact('blog', 'categories', 'lastBlogs','links', 'contacts'));
    }
    public function product()
    {
        $links = Link::latest()->take(1)->get();
        $products = Category::withCount('products')->orderBy('created_at', 'desc')->paginate(20);
        $contacts = Contact::latest()->take(1)->get();
        $numbers = 1;

        return view('front.product', compact('links', 'contacts', 'numbers'))->with('products', $products);
    }
    public function contact()
    {
        $links = Link::latest()->take(1)->get();
        $contacts = Contact::latest()->take(1)->get();

        return view('front.contact', compact('links', 'contacts'));
    }
    public function category()
    {
        $categories = Category::paginate(5);
        $links = Link::latest()->take(1)->get();
        $contacts = Contact::latest()->take(1)->get();

        return view('front.category', compact(
            'categories',
            'links',
            'contacts',
        ));
    }

    public function products($product)
    {
        $links = Link::latest()->take(1)->get();

        $products = CategoryOfProduct::where('category_id', $product)
            ->orderBy('created_at', 'desc')
            ->get();


        $categories = Category::all();
        $contacts = Contact::latest()->take(1)->get();
        $category = Category::find($product);


        return view('front.singleProduct', compact('products', 'links', 'contacts','category', 'categories'));
    }
}
