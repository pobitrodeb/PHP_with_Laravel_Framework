@extends('master')

@section('title')
    Blog | Edit
@endsection


@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-9 mx-auto">
                    <div class="card">
                        <div class="card-header bg-primary text-white">Edit Blog</div>

                        <div class="card-body">
                            <h4 class="text-center">{{Session::get('message')}}</h4>
                            <form action="{{route('blog.update', ['id' => $blog->id])}}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row mb-3">
                                    <label for="" class="col-md-3"> Edit Blog Title</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="title" value="{{$blog->blog_title}}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Edit Author Name </label>
                                    <div class="col-md-9">
                                        <input type="text" name="author" class="form-control" value="{{$blog->blog_author}}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Edit Blog Content</label>
                                    <div class="col-md-9">
                                <textarea name="description" id="" cols="30" rows="6" class="form-control">
                                    {{$blog->blog_description}}
                                </textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-3"> Edit Image</label>
                                    <div class="col-md-9">
                                        <input type="file" name="image" class="form-control">
                                        <img src="{{asset($blog->image)}}" alt="" height="90" width="100">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-3"> </label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-primary w-100" name="submit" value="Update Blog">
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
