<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    private static $image, $imageUrl, $blog, $imageName, $directory;

    public static function getImageUrl($request)
    {
        self::$image  =$request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'img/blog-images/';
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function newBlog($request)
    {
        self::$blog = new Blog();
        self::$blog->blog_title          = $request->title;
        self::$blog->blog_author         = $request->author;
        self::$blog->blog_description    = $request->description;
        self::$blog->image               = self::getImageUrl($request);
        self::$blog->save();
    }
    public static function updateBlog($request, $id)
    {
        self::$blog = Blog::find($id);
        if ($request->file('image'))
        {
            if(file_exists(self::$blog->image))
            {
                unlink(self::$blog->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else {
            self::$imageUrl = self::$blog->image;
        }
        self::$blog->blog_title          = $request->title;
        self::$blog->blog_author         = $request->author;
        self::$blog->blog_description    = $request->description;
        self::$blog->image               = self::$imageUrl;
        self::$blog->save();
    }

    public static function deleteBlog($id)
    {
        self::$blog = Blog::find($id);
        if (file_exists(self::$blog->image))
        {
            unlink(self::$blog->image);
        }
        self::$blog->delete();
    }
}
