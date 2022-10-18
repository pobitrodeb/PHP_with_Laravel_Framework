<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    private  $product, $image, $directory, $imageName, $imageUrl;

    public function newProduct($request)
    {
        $this->image = $request->file('image');
        $this->imageName   = $this->image->getClientOriginalName();
        $this->directory   = 'img/product-images/';
        $this->image->move($this->directory, $this->imageName);
        $this->imageUrl   =$this->directory.$this->imageName;

        $this->product = new Product();
        $this->producst->title          = $request->productname;
        $this->producst->category       = $request->categoryname;
        $this->producst->brand          = $request->brandname;
        $this->producst->price          = $request->productprice;
        $this->producst->description    = $request->productdescription;
        $this->producst->image          = $this->imageUrl;
        $this->product->save();

    }

}
