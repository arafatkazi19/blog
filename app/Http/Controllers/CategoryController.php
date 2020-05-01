<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use DB;
class CategoryController extends Controller
{
	public function addCategory(){
		return view('admin.category.add-category');
	}

    protected function checkCategoryData($request){
                $this->validate($request,[
            'category_name'=>'required|regex:/(^([a-zA-Z ]+)(\d+)?$)/u|max:8|min:3',
            'category_description'=>'required|max:100'

        ]);

    }

	public function newCategory(Request $request){

        $this->checkCategoryData($request);

		Category::saveCategoryInfo($request);
		return redirect('/category/add-category')->with('message','Category added successfully');
	}

	public function manageCategory(){
		$categories = Category::all();
		return view('admin.category.manage-category',[
			'categories'=>$categories
		]);
	}

	    public function editCategory($id){
        $category = Category::find($id);
        return view('admin.category.edit-category',['category'=>$category]);
    }

        public function unpublishedCategory($id){
        $category = Category::find($id);
        $category->publication_status = 0;
        $category->save();

        return redirect('/category/manage-category');
    }

    public function publishedCategory($id){
    	$category = Category::find($id);
    	$category->publication_status=1;
    	$category->save();

    	return redirect('/category/manage-category');
    }


    public function updateCategory(Request $request){
    	Category::updateCategoryInfo($request);

    	return redirect('/category/manage-category')->with('message','Category Info updated successfully');
    }


    public function deleteCategory($id){
    	$category = Category::find($id);
    	$category->delete();

    	return redirect('/category/manage-category')->with('message','Category info deleted successfully');
    }





}
