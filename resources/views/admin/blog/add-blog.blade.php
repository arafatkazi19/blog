@extends('admin.master')

@section('title')
Add Blog
@endsection

@section('body')
<div class="row">
    <div class="col-md-offset-2 col-md-8">
        <br>
        <!--   <h5 class="text-center text-primary">{{Session::get('message')}}</h5> -->
        <h4 class="text-center text-success">{{Session::get('message')}}</h4>
        <div class="well">
            <h3 class="text-center text-success">Add Blog</h3>
            <hr>

            <form action="{{route('new-blog')}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="control-label col-md-3">Category Name</label>
                    <div class="col-md-9">
                    <select name="category_id" class="form-control">
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->category_name}}</option>
                        @endforeach
                    </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Blog Title</label>
                    <div class="col-md-9">
                        <input type="text" name="blog_title" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Blog Short Description</label>
                    <div class="col-md-9">
                        <textarea type="text" name="blog_short_description" class="form-control" rows="5" cols="30"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Blog Long Description</label>
                    <div class="col-md-9">
                        <textarea type="text" id="editor" name="blog_long_description" class="form-control" rows="5" cols="30"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Blog Image</label>
                    <div class="col-md-9">
                        <input type="file" name="blog_image" accept="image/*">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Publication Status</label>
                    <div class="col-md-9 radio">
                        <label><input type="radio" name="publication_status" value="1" >Published</label>
                        <label><input type="radio" name="publication_status" value="0" >Unpublished</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-9 col-md-offset-3">
                        <input type="submit" name="btn" class="btn btn-success btn-block">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection
