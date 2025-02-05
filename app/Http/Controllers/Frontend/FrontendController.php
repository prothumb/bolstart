<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use Modules\Category\Models\Category; 
use Modules\Article\Models\Post; 
use Modules\Tag\Models\Tag; 
use Illuminate\Support\Facades\Log; // Import the Log facade

use Illuminate\Support\Facades\DB;

use App\Models\FAQ;
use App\Models\HomePageContent;
use App\Models\InvestorsPageContent;
use App\Models\StartupsPageContent;
use App\Models\AboutPageContent;
use App\Models\ContactPageContent;
use App\Models\HeaderAndFooterContent;


class FrontendController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $events = Post::where('type', 'Feature')
                        ->latest()
                        ->take(3)
                        ->get();       

        $faqs = FAQ::where('show_on_home_page', 1)                        
                        ->get();      
                        
        $homePageContents = HomePageContent::all()->pluck('content_value', 'content_name')->toArray();
        $headerAndFooterContents = HeaderAndFooterContent::all()->pluck('content_value', 'content_name')->toArray();

        return view('frontend.index', compact('events', 'faqs', 'homePageContents', 'headerAndFooterContents'));
    }

    public function cta(){

        $events = Post::where('type', 'Feature')
                        ->latest()
                        ->take(3)
                        ->get();       

        $faqs = FAQ::where('show_on_home_page', 1)                        
                        ->get();      
                        
        $homePageContents = HomePageContent::all()->pluck('content_value', 'content_name')->toArray();
        $headerAndFooterContents = HeaderAndFooterContent::all()->pluck('content_value', 'content_name')->toArray();

        return view('frontend.cta', compact('events', 'faqs', 'homePageContents', 'headerAndFooterContents'));
    }

    public function aboutInvestors(){

        $faqs = FAQ::where('show_on_investors_page', 1)                        
                        ->get();       

        $events = Post::where('type', 'Feature')
                        ->latest()
                        ->take(3)
                        ->get();  

        $investorsPageContents = InvestorsPageContent::all()->pluck('content_value', 'content_name')->toArray();
        $headerAndFooterContents = HeaderAndFooterContent::all()->pluck('content_value', 'content_name')->toArray();

        return view('frontend.about-investors', compact('faqs', 'events', 'investorsPageContents', 'headerAndFooterContents'));
    }

    public function aboutStartups(){

        $faqs = FAQ::where('show_on_startups_page', 1)                        
                        ->get();   
                        
        $events = Post::where('type', 'Feature')
                        ->latest()
                        ->take(3)
                        ->get();  

        $startupsPageContents = StartupsPageContent::all()->pluck('content_value', 'content_name')->toArray();
        $headerAndFooterContents = HeaderAndFooterContent::all()->pluck('content_value', 'content_name')->toArray();

        return view('frontend.about-startups', compact('faqs', 'events', 'startupsPageContents', 'headerAndFooterContents'));
    }

    public function aboutUs(){

        $aboutPageContents = AboutPageContent::all()->pluck('content_value', 'content_name')->toArray();

        $headerAndFooterContents = HeaderAndFooterContent::all()->pluck('content_value', 'content_name')->toArray();
        
        return view('frontend.about-us', compact('aboutPageContents', 'headerAndFooterContents'));
    }

    public function contactUs(){

        $contactPageContents = ContactPageContent::all()->pluck('content_value', 'content_name')->toArray();

        $headerAndFooterContents = HeaderAndFooterContent::all()->pluck('content_value', 'content_name')->toArray();

        return view('frontend.contact-us', compact('contactPageContents', 'headerAndFooterContents'));
    }

    public function faq(){

        $faqs = FAQ::where('show_on_faq_page', 1)->get();   

        $headerAndFooterContents = HeaderAndFooterContent::all()->pluck('content_value', 'content_name')->toArray();

        return view('frontend.faq', compact('faqs', 'headerAndFooterContents'));
    }

    public function news(){

        $blogCategories = Category::whereHas('posts', function ($query) {
            $query->where('type', 'News');
        })->get();
        
        $latestFeaturedPost = Post::where('is_featured', 1)->where('type', 'News')
                ->latest()
                ->first();
            
        $latestArticles = Post::where('type', 'News')
                ->latest()
                ->take(10)
                ->get();           
    
        $headerAndFooterContents = HeaderAndFooterContent::all()->pluck('content_value', 'content_name')->toArray();

        return view('frontend.news', compact('blogCategories', 'latestFeaturedPost', 'latestArticles', 'headerAndFooterContents'));
    }

    public function blog(){

        $blogCategories = Category::whereHas('posts', function ($query) {
            $query->where('type', 'Article');
        })->get();
        
        $latestFeaturedPost = Post::where('is_featured', 1)->where('type', 'Article')
                ->latest()
                ->first();
            
        $latestArticles = Post::where('type', 'Article')
                ->latest()
                ->take(10)
                ->get();           
    
        $headerAndFooterContents = HeaderAndFooterContent::all()->pluck('content_value', 'content_name')->toArray();

        return view('frontend.blog', compact('blogCategories', 'latestFeaturedPost', 'latestArticles', 'headerAndFooterContents'));
    }

    public function events(){
    
        $events = Post::where('type', 'Feature')
                ->latest()                
                ->get();  
                
        $headerAndFooterContents = HeaderAndFooterContent::all()->pluck('content_value', 'content_name')->toArray();

        return view('frontend.events', compact('events', 'headerAndFooterContents'));
    }


    public function singleEvent($slug) {

        $event = Post::where('slug',  $slug)->where('type', 'Feature')
                ->first(); 

        $headerAndFooterContents = HeaderAndFooterContent::all()->pluck('content_value', 'content_name')->toArray();

        return view('frontend.event', compact('event', 'headerAndFooterContents'));
    }
    
    public function singleNews($slug) {

        $article = Post::where('slug', $slug)->first();


        $taggables = DB::table('taggables')
            ->where('taggable_id', $article->id)
            ->where('taggable_type', 'Modules\Article\Models\Post')
            ->pluck('tag_id')
            ->toArray();


        $tags = DB::table('tags')
            ->whereIn('id', $taggables)
            ->get();     
            
        $headerAndFooterContents = HeaderAndFooterContent::all()->pluck('content_value', 'content_name')->toArray();
        
        
        return view('frontend.newsArticle', compact('article', 'tags', 'headerAndFooterContents'));
    }
    
    public function singleBlog($slug) {

        $article = Post::where('slug', $slug)->first();


        $taggables = DB::table('taggables')
            ->where('taggable_id', $article->id)
            ->where('taggable_type', 'Modules\Article\Models\Post')
            ->pluck('tag_id')
            ->toArray();


        $tags = DB::table('tags')
            ->whereIn('id', $taggables)
            ->get();        
        
        $headerAndFooterContents = HeaderAndFooterContent::all()->pluck('content_value', 'content_name')->toArray();
        
        return view('frontend.blogArticle', compact('article', 'tags', 'headerAndFooterContents'));
    }

    public function blogCategory($slug) {

        $category = Category::where('slug', $slug)->first();

        $articles = Post::where('type', 'Article')->where('category_id', $category->id)
                ->latest()                
                ->get();     

        $headerAndFooterContents = HeaderAndFooterContent::all()->pluck('content_value', 'content_name')->toArray();
        
        return view('frontend.blogCategory', compact('category', 'articles', 'headerAndFooterContents'));
    }

    public function newsCategory($slug) {

        $category = Category::where('slug', $slug)->first();

        $articles = Post::where('type', 'News')->where('category_id', $category->id)
                ->latest()                
                ->get();     

        $headerAndFooterContents = HeaderAndFooterContent::all()->pluck('content_value', 'content_name')->toArray();
        
        return view('frontend.newsCategory', compact('category', 'articles', 'headerAndFooterContents'));
    }

    /**
     * Privacy Policy Page.
     *
     * @return \Illuminate\Http\Response
     */
    public function privacy(){

        $headerAndFooterContents = HeaderAndFooterContent::all()->pluck('content_value', 'content_name')->toArray();

        return view('frontend.privacy', compact('headerAndFooterContents'));
    }

    /**
     * Terms & Conditions Page.
     *
     * @return \Illuminate\Http\Response
     */
    public function terms(){

        $headerAndFooterContents = HeaderAndFooterContent::all()->pluck('content_value', 'content_name')->toArray();

        return view('frontend.terms', compact('headerAndFooterContents'));
    }
}
