<?php

namespace App\Models;

use http\Env\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    private static $course, $courses, $image, $imageName, $directory, $imageUrl;

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'img/course-images/';
        self::$image->move(self::$directory,self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function createCourse($request)
    {
        self::$course = new Course();
        self::$course->title                =$request->ctitle;
        self::$course->techername           =$request->cteachername;
        self::$course->fee                  =$request->cfee;
        self::$course->duration             =$request->cduration;
        self::$course->startingDate         =$request->cstartdate;
        self::$course->objective            =$request->cobjective;
        self::$course->details              =$request->cdetails;
        self::$course->image                =self::getImageUrl($request);
        self::$course->save();
    }

    public static function updateCourse($request, $id)
    {
        self::$course = Course::find($id);
        if($request->file('image'))
        {
            if (file_exists(self::$course->image))
            {
                unlink(self::$course->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        } else {
            self::$imageUrl = self::$course->image;
        }
        self::$course->title                =$request->ctitle;
        self::$course->techername           =$request->cteachername;
        self::$course->fee                  =$request->cfee;
        self::$course->duration             =$request->cduration;
        self::$course->startingDate         =$request->cstartdate;
        self::$course->objective            =$request->cobjective;
        self::$course->details              =$request->cdetails;
        self::$course->image                = self::$imageUrl;
        self::$course->save();
    }
    public static function  deleteCourse($id)
    {
        self::$course = Course::find($id);
        if(file_exists(self::$course->image))
        {
            unlink(self::$course->image);
        }
        self::$course->delete();
    }
}
