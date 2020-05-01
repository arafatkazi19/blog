<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Category;
use DB;

class ProjectController extends Controller
{
    //
    public function index(){
    	$blogs=Blog::where('publication_status',1)->orderBy('id','asc')->get();
    	$latestBlogs=Blog::where('publication_status',1)->orderBy('id','desc')->take(2)->get();
    	return view('front.home.home',[
    		'blogs'=>$blogs,
    		
    		'latestBlogs'=>$latestBlogs,

            'populerBlogs'=>Blog::OrderBy('hit_count','desc')->where('publication_status',1)->take(3)->get()


    	]);
    }


    public function categoryBlog($id,$name){
    	return view('front.category.category-blog',[
    		'blogs'=>Blog::where('category_id',$id)->where('publication_status',1)->get(),


    ]);
    }

    public function blogDetails($id){

        $blog = Blog::find($id);
        $blog->hit_count = $blog->hit_count+1;
        $blog->save();

    	return view('front.blog.blog-details',[
    		
    		'blog'=>Blog::find($id),
            'comments'=>DB::table('comments')
                     ->join('visitors','comments.visitor_id','=','visitors.id')
                     ->select('comments.*','visitors.first_name','visitors.last_name')
                     ->where('comments.blog_id',$id)
                     ->where('comments.publication_status',1)
                     ->orderBy('comments.id','desc')
                     ->get(),


    	]);
    }
}
