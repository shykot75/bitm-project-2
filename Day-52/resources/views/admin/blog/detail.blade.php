@extends('master.admin.master')

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Blog Detail Info</h4>
                    <table  class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <tr>
                            <th>Blog ID</th>
                            <td>{{$blog->id}}</td>
                        </tr>
                        <tr>
                            <th>Blog Main Title</th>
                            <td>{{$blog->main_title}}</td>
                        </tr>
                        <tr>
                            <th>Blog Sub Title</th>
                            <td>{{$blog->sub_title}}</td>
                        </tr>

                        <tr>
                            <th>Blog Author</th>
                            <td>{{ \App\Models\User::find( $blog->author_id)->name}} (ID-{{$blog->author_id}})</td>
                        </tr>

                        <tr>
                            <th>Blog Short Description</th>
                            <td>{!!$blog->short_description!!} </td>
                        </tr>

                        <tr>
                            <th>Blog Long Description</th>
                            <td>{!!$blog->long_description!!}</td>
                        </tr>

                        <tr>
                            <th>Blog Image </th>
                            <td><img src="{{asset($blog->image)}}" alt="" height="150" width="150"></td>
                        </tr>



                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

@endsection

