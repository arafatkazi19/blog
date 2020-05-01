@extends('admin.master')

@section('title')
    Add Category
@endsection

@section('body')
    <div class="row">
        <div class="col-md-offset-2 col-md-8">
            <br>
            <!--   <h5 class="text-center text-primary">{{Session::get('message')}}</h5> -->
            <h4 class="text-center text-success">{{Session::get('message')}}</h4>
            <div class="well">
                <h3 class="text-center text-success">Add Category</h3>
                <hr>

                <form action="{{route('new-category')}}" method="POST" class="form-horizontal">
                @csrf
                    <div class="form-group">
                        <label class="control-label col-md-3">Category Name</label>
                        <div class="col-md-9">
                            <input type="text" name="category_name" class="form-control">
                            <span class="text-danger"><strong>{{$errors->has('category_name') ? $errors->first('category_name') : ' '}}</strong></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Category Description</label>
                        <div class="col-md-9">
                            <textarea type="text" name="category_description" class="form-control" rows="5" cols="30"></textarea>
                            <span class="text-danger"><strong>{{$errors->has('category_description') ? $errors->first('category_description') : ' '}}</strong></span>
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
