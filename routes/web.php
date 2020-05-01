<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
 
 ///////////////Error Page Visible////////////
Route::get('/404','ErrorHandleController@error404');

Route::get('/405','ErrorHandleController@error405');


////////home routes/////////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('/', [
	'uses'=>'ProjectController@index',
	'as'=> '/'
]);

Route::get('/category-blog/{id}/{name}', [
	'uses'=>'ProjectController@categoryBlog',
	'as'=> 'category-blog',
	
]);

Route::get('/blog-details/{id}', [
	'uses'=>'ProjectController@blogDetails',
	'as'=> 'blog-details'
]);

///////////////////////////User Login/Reg///////////////
Route::get('/sign-up', [
	'uses'=>'SignupController@index',
	'as'=> 'sign-up'
]);

Route::post('/new-sign-up', [
	'uses'=>'SignupController@newSignUp',
	'as'=> 'new-sign-up'
]);

Route::post('/visitor-logout', [
	'uses'=>'SignupController@visitorLogout',
	'as'=> 'visitor-logout'
]);

Route::get('/visitor-login', [
	'uses'=>'SignupController@visitorLogin',
	'as'=> 'visitor-login'
]);

Route::post('/visitor-sign-in', [
	'uses'=>'SignupController@visitorSignIn',
	'as'=> 'visitor-sign-in'
]);

Route::post('/new-comment', [
	'uses'=>'CommentController@newComment',
	'as'=> 'new-comment'
]);

Route::get('/email-check/{email}', [
	'uses'=>'SignupController@emailCheck',
	'as'=> 'email-check'
]);

Route::post('/visitor-sign-in', [
	'uses'=>'SignupController@visitorSignIn',
	'as'=> 'visitor-sign-in'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//////////////////////////////////////category routes//////////////////////////////////////////////////////////

Route::group(['middleware' => 'karim'] , function(){

Route::get('/category/add-category', [
	'uses'=>'CategoryController@addCategory',
	'as'=> 'add-category'
]);




Route::post('/category/new-category', [
	'uses'=>'CategoryController@newCategory',
	'as'=> 'new-category'
]);

Route::get('/category/manage-category', [
	'uses'=>'CategoryController@manageCategory',
	'as'=> 'manage-category'
]);

Route::get('/category/edit/{id}',[
	'uses'=>'CategoryController@editCategory',
	'as'=>'edit-category'
]);

Route::get('/category/unpublished/{id}',[
	'uses'=>'CategoryController@unpublishedCategory',
	'as'=>'unpublished-category'
]);

Route::get('/category/published/{id}',[
	'uses'=>'CategoryController@publishedCategory',
	'as'=>'published-category'

]);

Route::post('/category/update',[
		'uses'=>'CategoryController@updateCategory',
		'as'=>'update-category'
]);

Route::post('/category/delete/{id}',[
		'uses'=>'CategoryController@deleteCategory',
		'as'=>'delete-category'
]);

});


//////////////////Blog Routes//////////////////////////////////////////////////////////////////////////////////////////
Route::group(['middleware'=>'blogged'],function(){
	Route::get('/blog/add-blog',[
		'uses'=>'BlogController@addBlog',
		'as'=>'add-blog'
]);

Route::post('/blog/new-blog',[
		'uses'=>'BlogController@newBlog',
		'as'=>'new-blog'
]);


Route::get('/blog/manage-blog',[
		'uses'=>'BlogController@manageBlog',
		'as'=>'manage-blog'
]);


Route::post('/blog/delete-blog/{id}',[
        'uses'=>'BlogController@deleteBlog',
		'as'=>'delete-blog'

]);

Route::get('/blog/edit/{id}',[
	'uses'=>'BlogController@editBlog',
	'as'=>'edit-blog'
]);

Route::post('/blog/update-blog',[
		'uses'=>'BlogController@updateBlog',
		'as'=>'update-blog'
]);

Route::get('/blog/unpublished/{id}',[
	'uses'=>'BlogController@unpublishedBlog',
	'as'=>'unpublished-blog'
]);

Route::get('/blog/published/{id}',[
	'uses'=>'BlogController@publishedBlog',
	'as'=>'published-blog'
]);

Route::get('/manage-comments',[
	'uses'=>'BlogController@manageComments',
	'as'=>'manage-comments'
]);


Route::get('/unpublished_comment/{id}',[
		'uses'=>'CommentController@unpublishedComment',
		'as'=>'unpublished_comment'
]);

Route::get('/published_comment/{id}',[
		'uses'=>'CommentController@publishedComment',
		'as'=>'published_comment'
]);

});


