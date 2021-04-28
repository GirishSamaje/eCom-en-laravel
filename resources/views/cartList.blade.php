@extends('master')
@section("content")
<div class="custom-product">
    <div class="col-sm-10">
    <div class="trending-wrapper">
<h4>Result of Products</h4>
@foreach($products as $item)

<div class="row searched-item cart-list-divider">
<div class="col-sm-3">
<a href="detail/{{$item->id}}">
    <img class='trnding-image' src="{{$item->gallery}}">
    </a>
</div>
<div class="col-sm-4">
<a href="detail/{{$item->id}}">
    <div class="">
      <h3>{{$item->name}}</h3>
      <h5>{{$item->description}}</h5>
    </div>
</div>
<div class="col-sm-3">
<button class="btn btn-warning">Remove from Cart</button>
</div>
  </div>

@endforeach
</div>
</div>
</div>
@endsection