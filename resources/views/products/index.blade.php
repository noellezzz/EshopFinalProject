@extends('layouts.base')

@section('body')
    <div class="container">
        <h1 class="text-center mt-5 mb-4">Product List</h1>

        <div class="product-list">
            @foreach ($products as $product)
                <div class="product-item">
                    <div class="product-info">
                        <h2>{{$product->ProductName}}</h2>
                        <p>{{$product->ProductDescription}}</p>
                        <p>Price: {{$product->ProductPrice}}</p>
                    </div>
                    <div class="product-image">
                        <img src="{{ asset($product->ProductImage) }}" alt="Product Image">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection



{{--             <div class="jumbotron">
                <div class="container text-center">
                    <h1>My Portfolio</h1>
                    <p>Some text that represents "Me"...</p>
                </div>
            </div>

            <div class="container-fluid bg-3 text-center">
                <h3>Some of my Work</h3><br>
                @foreach ($products as $product)
                    <div class="row">
                        <div class="col-sm-3">
                            <p>Some text..</p>
                            <img src="{{ asset($product->ProductImage) }}" class="img-responsive"
                                style="width:300px; height:300px" alt="Image">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif --}}
