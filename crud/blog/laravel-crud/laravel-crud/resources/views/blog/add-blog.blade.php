@extends('master')

@section('title')
    Blog | add
@endsection


@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-9 mx-auto">
                    <div class="card">
                        <div class="card-header bg-primary text-white">Add Blog</div>

                        <div class="card-body">
                                    <h4 class="text-center">{{Session::get('message')}}</h4>
                            <form action="{{route('blog.new')}}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row mb-3">
                                    <label for="" class="col-md-3"> Blog Title</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="title">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-3"> Author Name </label>
                                    <div class="col-md-9">
                                        <input type="text" name="author" class="form-control">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-3"> Blog Content</label>
                                    <div class="col-md-9">
                                <textarea name="description" id="" cols="30" rows="6" class="form-control">
                                </textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-3"> Blog Image</label>
                                    <div class="col-md-9">
                                        <input type="file" name="image" class="form-control">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-3"> </label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-primary w-100" name="submit" value="Create New Blog">
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
