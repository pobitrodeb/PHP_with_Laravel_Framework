<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    private $blog, $blogs;
    public function index()
    {
        return view('blog.index');
    }
    public function add()
    {
        return view('blog.add-blog');
    }
    public function manage()
    {
       $this->blogs = Blog::all();
      //return $this->blogs;
       return view('blog.mange-blog', ['blogs' => $this->blogs]);
    }
    public function create(Request $request)
    {
      //  return $request->all();
      //  return $request->image->getClientOriginalName();
        Blog::newBlog($request);
        return redirect('/add-blog')->with('message', 'Blog Create Successfuly.');
    }

    public function edit($id)
    {
        $this->blog = Blog::find($id);
        return view('blog.edit', ['blog' => $this->blog]);
    }

    public function update(Request $request, $id)
    {
        Blog::updateBlog($request, $id);
        return redirect('/manage-blog')->with('message', 'Blog Update Successfuly.');
    }

    public function delete($id)
    {
        Blog::deleteBlog($id);
        return redirect('/manage-blog')->with('message', 'Blog Delete Successfuly.');
    }

}
