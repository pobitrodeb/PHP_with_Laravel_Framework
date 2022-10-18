@extends('master')

@section('title')
    Edit Course
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header bg-primary text-white"><h4>Edit Course </h4></div>
                        <div class="card-body">

                            <form action="{{route('course.update', ['id' =>$course->id])}}" method="POST" enctype="multipart/form-data">                                @csrf
                                @csrf
                                <div class="row mb-3">
                                    <label class="col-md-3">Course Title</label>
                                    <div class="col-md-9">
                                        <input type="text" name="ctitle" class="form-control" value="{{$course->title}}"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3">Teacher Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="cteachername" class="form-control" value="{{$course->techername}}"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3">Course Fee</label>
                                    <div class="col-md-9">
                                        <input type="number" name="cfee" class="form-control" value="{{$course->fee}}"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3">Course Duration</label>
                                    <div class="col-md-9">
                                        <input type="text" name="cduration" class="form-control" value="{{$course->duration}}"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3">Starting Date</label>
                                    <div class="col-md-9">
                                        <input type="date" name="cstartdate" class="form-control" value="{{$course->startingDate}}"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3">Course Objective</label>
                                    <div class="col-md-9">
                                        <input type="text" name="cobjective" class="form-control" value="{{$course->objective}}"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3">Course Details</label>
                                    <div class="col-md-9">
                                        <textarea type="text" name="cdetails" class="form-control"/>
                                                {{$course->details}}
                                        </textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3"> Image</label>
                                    <div class="col-md-9">
                                        <input type="file" name="image" class="form-control"/>
                                        <img src="{{asset($course->image)}}" alt="" height="50" width="100">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" name="btn" class="btn btn-primary w-100" value="Update New Course "/>
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
