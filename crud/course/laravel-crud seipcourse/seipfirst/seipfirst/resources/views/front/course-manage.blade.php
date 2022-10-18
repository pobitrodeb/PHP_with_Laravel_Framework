@extends('master')

@section('title')
    Manage Course
@endsection


@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <div class="card">
                        <div class="card-header bg-primary"><h4>Manage Your Course</h4></div>
                        <div class="card-body">
                            <h4 class="text-center">{{Session::get('message')}}</h4>
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Title</th>
                                    <th>Teacher Name</th>
                                    <th> Fee</th>
                                    <th>Course Duration</th>
                                    <th>Starting Time</th>
                                    <th>Starting objective</th>
                                    <th>Course Details</th>
                                    <th>Blog Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                        @foreach($course as $course)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$course['title']}}</td>
                                    <td>{{$course['techername']}}</td>
                                    <td>{{$course['fee']}}</td>
                                    <td>{{$course['duration']}}</td>
                                    <td>{{$course['startingDate']}}</td>
                                    <td>{{$course['objective']}}</td>
                                    <td>{{$course['details']}}</td>
                                    <td>
                                        <img src="{{asset($course->image)}}" alt="" height="50" width="100"/>
                                    </td>
                                    <td>
                                        <a href="{{route('course.edit',['id' => $course->id])}}" class="btn btn-warning" >Edit</a>
                                        <a href="{{route('course.delete', ['id' =>$course->id])}}" class="btn btn-danger" onclick="return confirm('Are you sure to delete this file.')">Delete</a>
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
