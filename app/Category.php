<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
	protected $fillable = ['category_name','category_description','publication_status'];
      	// DB::table('categories')->insert([
    	// 	'category_name' => $request->category_name,
    	// 	'category_description' => $request->category_description,
    	// 	'publication_status' => $request->publication_status

    	// ]);
    	// return 'success';
	public static function saveCategoryInfo($request){
		Category::create($request->all()); 
	}

    public static function updateCategoryInfo($request){
        $category = Category::find($request->id);
        $category->category_name = $request->category_name;
        $category->category_description = $request->category_description;
        $category->publication_status = $request->publication_status;
        if ($category->publication_status==0) {
            $blogs = Blog::where('category_id',$category->id)->where('publication_status',1)->get();
            foreach ($blogs as $blog) {
                $blog->publication_status=0;
                $blog->save();
            }
        }

        else if ($category->publication_status==1) {
            $blogs = Blog::where('category_id',$request->id)->where('publication_status',0)->get();
            foreach ($blogs as $blog) {
                $blog->publication_status=0;
                $blog->save();
            }
        }
        $category->save();
    }
}
