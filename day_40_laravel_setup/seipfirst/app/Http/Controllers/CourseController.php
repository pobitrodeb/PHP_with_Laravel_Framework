<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function create(Request $request)
    {
        Course::createCourse($request);
        //return Course::all();
        return redirect('/course-add')->with('message', 'New Course Create Sccussfully');
    }
    public function manage()
    {
        $this->courses = Course::all();
        return view('front.course-manage', ['course'=>$this->courses ]);
    }

    public function edit($id)
    {
        $this->course = Course::find($id);
        return view('front.course-edit', ['course' => $this->course]);
    }

    public function update(Request $request, $id)
    {
        Course::updateCourse($request, $id);
        return redirect('/course-manage')->with('message', 'Course Update Sccussfully');
    }

    public function delete($id)
    {
        Course::deleteCourse($id);
        return redirect('/course-manage')->with('message', 'Course Delete Successfully');
    }

}
