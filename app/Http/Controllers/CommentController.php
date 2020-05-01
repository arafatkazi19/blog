<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
    //
    public function newComment(Request $request){
    	$comment = new Comment();
    	$comment->visitor_id = $request->visitor_id;
    	$comment->blog_id = $request->blog_id;
    	$comment->comment = $request->comment;
    	$comment->save();

    	return redirect('/blog-details/'.$request->blog_id)->with('message','Comment added successfully');
    }

    public function unpublishedComment($id){
    	$comment=Comment::find($id);
        $comment->publication_status = 0;
        $comment->save();

        return redirect('/manage-comments');
    }

    public function publishedComment($id){
    	$comment=Comment::find($id);
        $comment->publication_status = 1;
        $comment->save();

        return redirect('/manage-comments');
    }
}
