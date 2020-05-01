@extends('admin.master')

@section('title')
Manage Category
@endsection

@section('body')
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="text-danger">All Categories</h4>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <h4 class="text-center text-success">{{Session::get('message')}}</h4>
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                         <th>Sl No.</th>
                         <th>Category Name</th>
                         <th>Category Description</th>
                         <th>Publication Status</th>
                         <th>Action</th>
                     </tr>
                 </thead>
                 <tbody>
                    @php($i=1)
                    @foreach($categories as $category)
                    <tr class="odd gradeX">
                        <td>{{$i++}}</td>
                        <td>{{$category->category_name}}</td>
                        <td>{{$category->category_description}}</td>
                        <td>{{$category->publication_status==1 ? 'Published' : 'Unpublished'}}</td>
                        <td>
                            @if($category->publication_status==1)
                            <a href="{{route('unpublished-category',['id'=>$category->id])}}" class="btn btn-info">
                             <span class="glyphicon glyphicon-arrow-up"></span></a>
                             @else
                             <a href="{{route('published-category',['id'=>$category->id])}}" class="btn btn-warning">
                                 <span class="glyphicon glyphicon-arrow-down"></span></a>
                                 @endif
                                 <a href="{{route('edit-category' , ['id'=>$category->id])}}" class="btn btn-success">
                                     <span class="glyphicon glyphicon-edit"></span></a>


                                     <a href="#" id="{{$category->id}}" class="btn btn-danger delete-btn">
                                         <span class="glyphicon glyphicon-trash"></span></a>

                                         <form id="deleteCategoryForm{{$category->id}}" action="{{route('delete-category',['id'=>$category->id])}}" method="POST">
                                             @csrf
                                             <input type="hidden" value="{{$category->id}}" name="id">
                                         </form>

                                     </td>
                                 </tr>
                                 @endforeach

                             </tbody>
                         </table>
                         <!-- /.table-responsive -->
                         <div class="well">
                            <h4 class="text-center">Manage Categories</h4>


                        </div>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        @endsection
