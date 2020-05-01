@extends('admin.master')

@section('title')
      Manage Blog
@endsection

@section('body')
<div class="panel">
    <div class="panel-body">
        <h3 class="text-center text-danger">Manage Blogs</h3>
        <h4 class="text-center text-success">{{Session::get('message')}}</h4>
        <table class="table table-bordered">

            <tr>
                <th>Sl No.</th>
                <th>Category Name</th>
                <th>Blog Title</th>
                <th>Image</th>
                <th>Publication Status</th>
                <th>Action</th>
            </tr>
            
            <tr>
                @php($i=1)
                @foreach($blogs as $blog)
                <td>{{$i++}}</td>
                <td>{{$blog->category_name}}</td>
                <td>{{$blog->blog_title}}</td>
                <td><img src="{{asset($blog->blog_image)}}" height="100" width="120"></td>
                <td>{{$blog->publication_status==1 ? 'Published' : 'Unpublished'}}</td>
                <td>
                    @if($blog->publication_status==1)
                       <a href="{{route('unpublished-blog',['id'=>$blog->id])}}" class="btn btn-info">
                       <span class="glyphicon glyphicon-arrow-up"></span></a>
                    @else
                       <a href="{{route('published-blog',['id'=>$blog->id])}}" class="btn btn-warning">
                       <span class="glyphicon glyphicon-arrow-down"></span></a>
                    @endif


                        <a href="{{route('edit-blog',['id'=>$blog->id])}}" class="btn btn-success">
                        <span class="glyphicon glyphicon-edit"></span></a>


                        <a href="#" id="{{$blog->id}}" class="btn btn-danger delete-btn-blog">
                        <span class="glyphicon glyphicon-trash"></span></a>

                        <form id="deleteBlogForm{{$blog->id}}" action="{{route('delete-blog',['id'=>$blog->id])}}" method="POST">
                            @csrf
                            <input type="hidden" value="{{$blog->id}}" name="id">
                        </form>

                    </td>
                      
                </tr>
@endforeach 
               </table>
           </div>
       </div>
@endsection

