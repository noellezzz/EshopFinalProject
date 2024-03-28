@extends('layouts.base')
@section('body')

<div class="container p-4" style="height: 100vh;">
    <form action="{{url('/product/store')}}" method="POST" class="h-100 p-4" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="inputProductName">Product Name</label>
            <input type="text" class="form-control" id="inputProductName" placeholder="Product Name" name="ProductName">

        </div>
        <div class="form-group">

            <label for="inputProductDescription">Product Description</label>
            <input type="text" class="form-control" id="inputProductDescription" placeholder="Product Description" name="ProductDescription">
        </div>
        <div class="form-group">
            <label for="inputProductPrice">Product Price</label>
            <input type="text" class="form-control" id="inputProductPrice" placeholder="Product Price" name="ProductPrice">
        </div>
        <div class="form-group">
            <label for="ProductImage">Product Image</label>
            <input type="file" class="form-control-file" id="inputProductImage" placeholder="Product Image" name="ProductImage">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
