<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use function Symfony\Component\Mime\Header\all;

class HomController extends Controller
{
    private $product;
    public function index()
    {
        return view('home.index');
    }

    public function create()
    {

       return view('home.create-product');
    }
    public function manage()
    {
        $this->product = Product::all();
        return view('home.mange-product', ['products'=>  $this->product]);
    }

    public function newProduct(Request $request)
    {
        Product::newProduct($request);
        //return $request->all();
        return redirect('/create-product')->with('message', 'Blog Create Successfuly.');
    }
    public function edit($id)
    {
        $this->product = Product::find($id);
        return view('home.edit-product', ['product' => $this->product]);
    }

    public function update(Request $request, $id)
    {
        Product::updateProduct($request, $id);
        return redirect('/manage-product')->with('message', 'Product Update Successfully');
    }
    public function delete($id)
    {
        Product::deleteproduct($id);
        return redirect('/manage-product')->with('message', 'Product Delete Successfully');
    }
}
