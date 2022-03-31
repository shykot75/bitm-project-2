@extends('master.admin.master')

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Manage All Blogs</h4>
                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>SL NO</th>
                            <th>Category ID</th>
                            <th>Author ID</th>
                            <th>Sub Title</th>
                            <th>Main Title</th>
                            <th>Short Description</th>
                            <th>Long Description</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($blogs as $blog)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$blog->category_id}}</td>
                                <td>{{$blog->author_id}}</td>
                                <td>{{$blog->sub_title}}</td>
                                <td>{{$blog->main_title}}</td>
                                <td>{{$blog->short_description}}</td>
                                <td>{!! $blog->long_description !!}</td>
                                <td><img src="{{asset($blog->image)}}" alt="" height="50" width="50"/></td>
                                <td>{{$blog->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                <td>
                                    <a href="{{route('blog.edit', ['id' => $blog->id])}}" class="btn btn-success btn-sm">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{route('blog.delete', ['id' => $blog->id])}}" class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

@endsection

