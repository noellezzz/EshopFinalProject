@extends('layouts.base')
@section('body')
    <div class = "container">
    <form action="{{url('/product/'.$products->id.'/update')}}" method="POST" class="h-100 p-4" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="ProductName">Product Name</label>
            <input type="text" class="form-control" id="inputProductName" placeholder="Product Name" name="ProductName" value="{{$products->ProductName}}">

        </div>
        <div class="form-group">
            <label for="ProductDescription">Product Description</label>
            <input type="text" class="form-control" id="inputProductDescription" placeholder="Product Description" name="ProductDescription" value="{{$products->ProductDescription}}">
        </div>
        <div class="form-group">
            <label for="ProductPrice">Product Price</label>
            <input type="text" class="form-control" id="inputProductPrice" placeholder="Product Price" name="ProductPrice" value="{{$products->ProductPrice}}">
        </div>
        <div class="form-group">
            <label for="ProductImage">Product Image</label>
            <input type="file" class="form-control-file" id="inputProductImage" placeholder="Product Image" name="ProductImage" value="{{$products->ProductImage}}">
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
@endsection
