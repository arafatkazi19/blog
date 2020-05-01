<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Blog;
use DB;

class BlogController extends Controller
{
    //
	public function addBlog(){
		$categories = Category::where('publication_status',1)->get();

		return view('admin.blog.add-blog',[
			'categories'=>$categories
		]);
	}



	public function newBlog(Request $request){


		$blog = new Blog();
		$blog->category_id = $request->category_id;
		$blog->blog_title = $request->blog_title;
		$blog->blog_short_description = $request->blog_short_description;
		$blog->blog_long_description = $request->blog_long_description;
		$blog->blog_image = $this->imageUpload($request->file('blog_image'));
		$blog->publication_status = $request->publication_status;
		$blog->save();

		return redirect('/blog/add-blog')->with('message','Blog info added successfully');


	}

	public function manageBlog(){

		$blogs = DB::table('blogs')
		->join('categories',
			'blogs.category_id', '=' , 'categories.id')
		->select('blogs.*','categories.category_name')
		->orderBy('blogs.id','asc')
		->get();

		return view('admin.blog.manage-blog',[
			'blogs'=>$blogs
		]);

	}

	public function deleteBlog($id){
		$blog = Blog::find($id);
		unlink($blog->blog_image);
		$blog->delete();

		return redirect('/blog/manage-blog')->with('message','Blog deleted successfully');
	}


	public function editBlog($id){
		
		return view('admin.blog.edit-blog',[
			'categories'=> Category::where('publication_status',1)->get(),
			'blog'=>Blog::find($id)

		]);
	}

	private function imageUpload($blogImage){
		$imageName = $blogImage->getClientOriginalName();
		$directory = 'blog-images/';
		$blogImage->move($directory,$imageName);
		return $directory.$imageName;
	}

	public function updateBlog(Request $request){
		$blog=Blog::find($request->id);
		$blogImage = $request->file('blog_image'); 
		if ($blogImage) {
			
			
			unlink($blog->blog_image);
			$imagePath = $this->imageUpload($blogImage);
		}

		$blog->category_id = $request->category_id;
		$blog->blog_title = $request->blog_title;
		$blog->blog_short_description = $request->blog_short_description;
		$blog->blog_long_description = $request->blog_long_description;
		if (isset($imagePath)) {
			$blog->blog_image=$imagePath;
		}
		$blog->publication_status = $request->publication_status;
		$blog->save();


		return redirect('/blog/manage-blog')->with('message','Info updated successfully');



	}

	public function unpublishedBlog($id){
		$blogs = Blog::find($id);
		$blogs->publication_status = 0;
		$blogs->save();

		return redirect('/blog/manage-blog');
	}

	public function publishedBlog($id){
		$blogs = Blog::find($id);
		$blogs->publication_status = 1;
		$blogs->save();

		return redirect('/blog/manage-blog');
	}

	public function manageComments(){
		return view('admin.comment.manage-comments',[
			'comments'=>DB::table('comments')
			->join('visitors','comments.visitor_id','=','visitors.id')
			->join('blogs','comments.blog_id','=','blogs.id')

			->select('comments.*','visitors.first_name','visitors.last_name','blogs.blog_title')
			->orderBy('comments.id','desc')
			->get()


		]);
	}

}
