@extends('master')

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-9 mx-auto">
                    <div class="card">
                        <div class="card-header bg-primary text-white">Add Product</div>

                        <div class="card-body">
                            <h4 class="text-center">{{Session::get('message')}}</h4>
                            <form action="{{route('product.new')}}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Product Name </label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="productname">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Product Category </label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="categoryname">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Product Brand </label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="brandname">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Product Price </label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="productprice">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Product Description </label>
                                    <div class="col-md-9">
                                        <textarea name="productdescription" id="" cols="30" rows="6" class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Product Image </label>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control" name="productimage">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-3"> </label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-success w-100" name="productsubmit">
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
