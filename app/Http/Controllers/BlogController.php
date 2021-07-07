<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Blog;
use App\Models\Comment;

class BlogController extends Controller
{
    public function index(){
        $page_title = 'Latest News';
        $Blog = DB::table('blogs')->get(); 
        $Products = DB::table('products')->where('featured','1')->paginate(12);
        $Trending = DB::table('products')->where('trending','1')->paginate(12);
        $SiteSettings = DB::table('_site_settings')->get(); 
        return view('blog.index',compact('SiteSettings','Products','Blog','Trending','page_title'));
    }

    public function blog($slung){
        $Blog = DB::table('blogs')->where('slung',$slung)->get(); 
        $Products = DB::table('products')->where('featured','1')->paginate(12);
        $Trending = DB::table('products')->where('trending','1')->paginate(12);
        $SiteSettings = DB::table('_site_settings')->get(); 
        return view('blog.blog',compact('SiteSettings','Products','Blog','Trending'));
    }

    public function blog_cat($slung){
        
        $Category = DB::table('categories')->where('slung',$slung)->get();
            foreach ($Category as $key => $value) {
                $Blog = DB::table('blogs')->where('category',$value->id)->get(); 
                if($Blog->isEmpty()){
                    $SiteSettings = DB::table('_site_settings')->get(); 
                    return view('blog.empty',compact('SiteSettings'));
                }else{
                    $page_title = $value->title;
                        $Blog = DB::table('blogs')->where('category',$value->id)->get(); 
                        $Products = DB::table('products')->where('featured','1')->paginate(12);
                        $Trending = DB::table('products')->where('trending','1')->paginate(12);
                        $SiteSettings = DB::table('_site_settings')->get(); 
                        return view('blog.index',compact('SiteSettings','Products','Blog','Trending','page_title'));
                    
                }
            }
        
    }

    public function post_comment(Request $request){
        $name = $request->name;
        $email = $request->email;
        $content = $request->content;

        $Comment = new Comment;
        $Comment->name = $name;
        $Comment->post_id = $request->post_id;
        $Comment->email = $email;
        $Comment->content = $content;
        if($Comment->save()){
            $message = "Your Comment Has Been Posted, It will be published upon approval";
            return $message;
        }
       
    }

    
}
