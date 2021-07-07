<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\FAQ;
use App\Models\Product;
use App\Models\Category;
use App\Models\Message;
use App\Models\SendMails;
use Auth;
use App\Models\Review;
class HomeController extends Controller
{
    public function index(){
        $Slider = DB::table('sliders')->get(); 
        $Products = DB::table('products')->where('featured','1')->paginate(12);
        $Trending = DB::table('products')->where('trending','1')->paginate(12);
        $SiteSettings = DB::table('_site_settings')->get(); 
        return view('front.index',compact('SiteSettings','Products','Slider','Trending'));
    }

    public function about(){
        $Products = DB::table('products')->where('featured','1')->paginate(12);
        $Trending = DB::table('products')->where('trending','1')->paginate(12);
        $SiteSettings = DB::table('_site_settings')->get(); 
        $About = DB::table('abouts')->get();
        return view('front.about',compact('SiteSettings','Products','About','Trending'));
    }

    public function products(){
        $SiteSettings = DB::table('_site_settings')->get(); 
        $Products = DB::table('products')->paginate(12);
        $Categories = DB::table('categories')->inRandomOrder()->limit('4')->get();
        return view('front.products',compact('SiteSettings','Products','Categories'));
    }

    public function products_cat($slung){
        $ClickedCategory = DB::table('categories')->where('slung',$slung)->get();
        foreach ($ClickedCategory as $key => $value) {
            $SiteSettings = DB::table('_site_settings')->get(); 
            $Products = DB::table('products')->where('category',$value->id)->paginate(12);
            $Categories = DB::table('categories')->inRandomOrder()->limit('4')->get();
            $page_title = $value->title;
            return view('front.products-category',compact('SiteSettings','Products','Categories','page_title'));
        }
    }

    public function contact_post(Request $request){
        $Message = new Message;
        $Message->subject = $request->subject;
        $Message->name = $request->name;
        $Message->email = $request->email;
        $Message->content = $request->message;
        SendMails::contact_form($request->name,$request->email,$request->subject,$request->message);
        if($Message->save()){
            return "Success";
        }
       
    }

    public function faq(){
        $Faq = FAQ::all();
        $Category = Category::all();
        $SiteSettings = DB::table('_site_settings')->get(); 
        return view('front.faq',compact('SiteSettings','Category'));
    }

    

    public function quick_view($id){
        $Product = Product::find($id);
        $SiteSettings = DB::table('_site_settings')->get(); 
        return view('front.quick_view',compact('SiteSettings','Product'));
    }

    public function product($slung){
        $Product = DB::table('products')->where('slung',$slung)->get();
        $SiteSettings = DB::table('_site_settings')->get(); 
        return view('front.product',compact('SiteSettings','Product'));
    }

    public function contact(){
        $SiteSettings = DB::table('_site_settings')->get(); 
        return view('front.contact',compact('SiteSettings'));
    }

    public function terms(){
        $Terms = DB::table('terms')->get();
        $SiteSettings = DB::table('_site_settings')->get(); 
        return view('front.terms',compact('SiteSettings','Terms'));
    }

    public function privacy(){
        $Privacy = DB::table('privacies')->get();
        $SiteSettings = DB::table('_site_settings')->get(); 
        return view('front.privacy',compact('SiteSettings','Privacy'));
    }

    public function copyright(){
        $Copyright = DB::table('copyrights')->get();
        $SiteSettings = DB::table('_site_settings')->get(); 
        return view('front.copyright',compact('SiteSettings','Copyright'));
    }

    public function post_review(Request $request){
        $price = $request->vote_price;
        $value = $request->vote_value;
        $quality = $request->vote_quality;
        $average = ($price+$value+$quality)/3;
        // Round off
        $preparedAVG = ceil($average);
        $name = Auth::user()->name;
        $email = Auth::user()->email;
        $Review = new Review;
        $Review->name = $name;
        $Review->content = $request->content;
        $Review->email = $email;
        $Review->product_id = $request->product_id;
        $Review->rating = $preparedAVG;
        $Review->save();
        return "Success";
    }
}
