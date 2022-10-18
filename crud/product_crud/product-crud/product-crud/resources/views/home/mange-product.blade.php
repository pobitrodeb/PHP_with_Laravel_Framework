@extends('maseter')
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <div class="card">
                        <div class="card-header">All Product</div>
                        <div class="card-body">
                            <h4 class="text-center">{{Session::get('message')}}</h4>
                            <table class="table table-bordered table-hover">
                                <thead class="text-center">
                                <tr>
                                    <th>SL NO </th>
                                    <th>Product Name </th>
                                    <th>Product Category</th>
                                    <th>Brand</th>
                                    <th>Price</th>
                                    <th>Description </th>
                                    <th>Image </th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$product['name']}}</td>
                                        <td>{{$product['category']}}</td>
                                        <td>{{$product['brand']}}</td>
                                        <td>{{$product['price']}}</td>
                                        <td>{{$product['description']}}</td>
                                        <td>
                                            <img src="{{asset($product->image)}}" alt="" height="50" width="100">
                                        </td>
                                        <td>
                                            <a href="{{route('edit-product', ['id' => $product->id])}}" class="btn btn-primary btn-sm" onclick="return confirm('Are you sure to update this.')">Edit</a>
                                            <a href="{{route('delete-product', ['id' => $product->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this.')">Delete</a>
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
