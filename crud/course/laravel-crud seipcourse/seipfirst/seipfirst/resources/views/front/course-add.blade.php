@extends('master')

@section('title')
    Add Course
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header bg-primary text-white"><h4>Add Course </h4></div>
                        <div class="card-body">
                            <h4 class="text-center">{{Session::get('message')}}</h4>
                            <form action="{{route('course.create')}}" method="POST" enctype="multipart/form-data">                                @csrf
                                @csrf
                                <div class="row mb-3">
                                    <label class="col-md-3">Course Title</label>
                                    <div class="col-md-9">
                                        <input type="text" name="ctitle" class="form-control"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3">Teacher Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="cteachername" class="form-control"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3">Course Fee</label>
                                    <div class="col-md-9">
                                        <input type="number" name="cfee" class="form-control"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3">Course Duration</label>
                                    <div class="col-md-9">
                                        <input type="text" name="cduration" class="form-control"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3">Starting Date</label>
                                    <div class="col-md-9">
                                        <input type="date" name="cstartdate" class="form-control"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3">Course Objective</label>
                                    <div class="col-md-9">
                                        <input type="text" name="cobjective" class="form-control"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3">Course Details</label>
                                    <div class="col-md-9">
                                        <textarea type="text" name="cdetails" class="form-control"/></textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3"> Image</label>
                                    <div class="col-md-9">
                                        <input type="file" name="image" class="form-control"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" name="btn" class="btn btn-primary w-100" value="Create New Course "/>
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
