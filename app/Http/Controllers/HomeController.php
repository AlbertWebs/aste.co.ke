<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Rate;
use App\Models\FAQ;
use App\Models\Product;
use App\Models\Bank;
use App\Models\User;
use App\Models\Category;
use App\Models\Message;
use App\Models\SendMails;
use Dymantic\InstagramFeed\Profile;
use Illuminate\Support\Facades\Input;
use App\Models\ReplyMessage;
use Response;
use Newsletter;
use Hash;
use Auth;
use Session;
use App\Models\Review;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;
class HomeController extends Controller
{
    public function index(){
        $profile = \Dymantic\InstagramFeed\Profile::where('username', 'aste.co.ke')->first();
        $data = [
            'instagram_feed' => Profile::where('username', 'aste.co.ke')->first()->feed(9),
        ];
        $Slider = DB::table('sliders')->get(); 
        $Products = DB::table('products')->where('featured','1')->paginate(12);
        $Trending = DB::table('products')->where('trending','1')->orderBy('id','DESC')->paginate(8);
        $Lastest = DB::table('products')->orderBy('id','DESC')->paginate(20);
        $SiteSettings = DB::table('_site_settings')->get(); 
        return view('front.index',compact('SiteSettings','Products','Slider','Trending','data','Lastest'));
    }
    
    public function welcome(){
        $Products = DB::table('products')->where('featured','1')->paginate(12);
        $Trending = DB::table('products')->where('trending','1')->paginate(12);
        $SiteSettings = DB::table('_site_settings')->get(); 
        $About = DB::table('abouts')->get();
        return view('front.welcome',compact('SiteSettings','Products','About','Trending'));
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
        $Title = "All Products";
        return view('front.products',compact('SiteSettings','Products','Categories','Title'));
    }

    public function products_categories(){
        $Title = "Our Store";
        $SiteSettings = DB::table('_site_settings')->get(); 
        $Products = DB::table('products')->paginate(12);
        $Categories = DB::table('categories')->inRandomOrder()->limit('4')->get();
        return view('front.products_categories',compact('SiteSettings','Products','Categories','Title'));
    }

    public function products_cat($slung){
        $ClickedCategory = DB::table('categories')->where('slung',$slung)->get();
        foreach ($ClickedCategory as $key => $value) {
            $SiteSettings = DB::table('_site_settings')->get(); 
            $Products = DB::table('products')->where('category',$value->id)->paginate(12);
            $Categories = DB::table('categories')->inRandomOrder()->limit('4')->get();
            $Title = $value->title;
            return view('front.products_categories',compact('SiteSettings','Products','Categories','Title'));
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

    public function verify_bank_payment(){
        $SiteSettings = DB::table('_site_settings')->get(); 
        return view('front.verify_bank_payment',compact('SiteSettings'));
    }

    public function verify_bank_payment_post(Request $request){
        $user_id = $request->user_id;
        $transCode = $request->transCode;
        $Bank = new Bank;
        $Bank->user_id = $user_id;
        $Bank->content = $transCode;
        $Bank->save();
        return "Success";
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

    public function delivery_policy(){
        $Privacy = DB::table('privacies')->get();
        $SiteSettings = DB::table('_site_settings')->get(); 
        return view('front.delivery_policy',compact('SiteSettings','Privacy'));
    }

    public function return_policy(){
        $Privacy = DB::table('privacies')->get();
        $SiteSettings = DB::table('_site_settings')->get(); 
        return view('front.return_policy',compact('SiteSettings','Privacy'));
    }

    public function size_guide(){
        $Privacy = DB::table('privacies')->get();
        $SiteSettings = DB::table('_site_settings')->get(); 
        return view('front.size_guide',compact('SiteSettings','Privacy'));
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

    public function newsletter(Request $request){
        if($request->verify_contact == $request->verify_contacts){
            $email = $request->email;
            Newsletter::subscribe($email);
            $data = "Success";
            return Response::json($data);
        }else{
            $data = "Success";
            return Response::json($data);
        }

    }

    public function swap($currency){
        $Currency = Rate::where('currency',$currency)->get();
        foreach($Currency as $cur){
            Session::put('rates', $cur->rates);
        }

        return back();
    }

    // manual login
    public function handleLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            $status = 1;
            return $status;
        }
            
        // authentication failed...
        $status = 0;
        return $status;
    }

    public function handleSignUp(Request $request){
        $name = $request->input('register-name');
        $email = $request->input('register-email');
        $password_confirm = $request->input('register-password-confirm');
        $password = $request->input('register-password');

        $User = DB::table('users')->where('email',$email)->get();
        $Check = count($User);
        if($password == $password_confirm){
            if($Check == 0){
                // create user
                $password_inSecured = $password;
                //harshing password Here
                $password = Hash::make($password_inSecured);
                $User = new User;
                $User->name = $name;
                $User->email = $email;
                $User->password = $password;
                $User->save();

                // Notify Client
                ReplyMessage::messageClient($email,$request->name);
                $user = User::where('email','=',$email)->first();
                Auth::loginUsingId($user->id, TRUE);
                // Redirect
                $status = 1;
                return $status;
            }else{
                Session::flash('message_error', "That email is already in use by another person");
                $status = 0;
                return $status;
            }
        }else{
            Session::flash('message_error', "Password Did Not Match!");
            // Return with form Data
            $status = 1;
            return $status;
        }
    }

    public function tempUpdate(){
        $First = DB::table('products')->where('id','1')->get();
        foreach ($First as $key => $value) {
            $Description = $value->content;
            $Meta = $value->meta;

            $UpdateDetails = array(
                'content' =>$Description,
                'meta' =>$Meta,
            );
        }
        DB::table('products')->update($UpdateDetails);
        return "Done";
    }

    
    public function searchsite()
    {
        $search = $_GET['query'];
       

        $Products = DB::table('products')->where('name', 'like', '%' . $search . '%')->orWhere('sku', 'like', '%' . $search . '%')->paginate(200);
        $page_name = $search;
        $Title = $search;
        $search_results = $search;
        $search_results_category = 'All Categories';
        $SEOSettings = DB::table('_site_settings')->get();
        foreach ($SEOSettings as $Settings) {
            SEOMeta::setTitle('Our Products | ' . $Settings->sitename .'');
            SEOMeta::setDescription('Pioneer Car Speakers, Sony Car Speakers, Kenwood Car speakers, Kenwood speakers, Sony Speakers' . $Settings->welcome . '');
            SEOMeta::setCanonical('' . $Settings->url . '/search-results/');
            OpenGraph::setDescription('' . $Settings->welcome . '');
            OpenGraph::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            OpenGraph::setUrl('' . $Settings->url . '/search-results/');
            OpenGraph::addProperty('type', 'website');
      
            
            $SiteSettings = DB::table('_site_settings')->get(); 
            // Call Route
            // return redirect()->route('search-results', ['ProductsTag'=>$ProductsTag,'ProductsBrand'=>$ProductsBrand,'ProductsCategory'=>$ProductsCategory]);

            return view('front.search-results', compact('SiteSettings','Title', 'Products', 'page_name', 'search_results', 'search_results_category','search'));


        }




    }
}
