
@extends('master')
@section('content')


<div class="container"> 
    <div class="row">
        <div class="col-sm-6">
        <img src="{{$products['gallery']}}" class="trending-image">

        </div>

        <div class="col-sm-6">
            <a href="/">go back</a>
        <h2>{{$products['name']}} </h2>
        <h3>price : {{$products['price']}} </h3>
        <h4>description:  {{$products['description']}} </h4>
        <h4>category :{{$products['category']}} </h4>

        <br>
        <form action="/add_to_cart" method="POST">
            @csrf
            <input type="hidden" name="product_id" value="{{$products['id']}}">
            <button class="btn btn-primary">Add to cart</button>

        </form>
        <br>
        
        <button class="btn btn-success">Buy Now</button>

        </div>

    </div>

  
</div>

@endsection
