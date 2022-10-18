@extends('master')
@section('title')
    Blog | manage
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <div class="card">
                        <div class="card-header">All Blog</div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead class="text-center">
                                <tr>
                                    <th>SL NO </th>
                                    <th>Blog Title </th>
                                    <th>Author Name</th>
                                    <th>Blog Description</th>
                                    <th>Blog Image </th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($blogs as $blog)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$blog->blog_title}}</td>
                                    <td>{{$blog->blog_author}}</td>
                                    <td>{{$blog->blog_description}}</td>
                                    <td>
                                        <img src="{{asset($blog->image)}}" alt="" height="50" width="100">
                                    </td>
                                    <td>
                                        <a href="{{route('blog.edit', ['id' => $blog->id])}}" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="{{route('blog.delete', ['id' => $blog->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this.')">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
