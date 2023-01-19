
@extends('master')
@section('content')


<div class=" custom-slider"> 



  <h2>Product Images</h2>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

    @foreach ($products as $item )
      <div class="item {{$item['id']==1?'active':''}}">

      <a href="detail/{{$item ['id']}}"> 
        <img src="{{$item['gallery']}}" class="img-slider" style="width:100%;">
        <div class="carousel-caption slider-text">
          <h2>{{$item['name']}}</h2>
          <h3>{{$item['description']}}</h3>
          
        </div>
        </a>
      </div>

      @endforeach
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


</div>

<div class="trending products">
    <h3> Trending products</h3>

    @foreach ($products as $item )
      <div class="item trending-products">
      <a href="detail/{{$item ['id']}}"> 
        <img src="{{$item['gallery']}}" class="trending-image" style="width:100%;">
        <div class=" trending-text">
        <h2>{{$item['name']}}</h2>
        
      
           
      </div>
      </a>
      </div>

      @endforeach
  
</div>

@endsection
