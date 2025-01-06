@extends('layouts.admin')

@section('content')
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="3000">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('storage/images/picture1.png') }}" class="d-block w-100" alt="Image 1">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('storage/images/picture2.png') }}" class="d-block w-100" alt="Image 2">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('storage/images/picture3.png') }}" class="d-block w-100" alt="Image 3">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
</div>


<div class="album py-5 bg-light mb-3">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @foreach($products as $product)
            <div class="col">
            <div class="card shadow-sm">
            <img src="{{asset('storage/images/picture1.png')}}" class="card-img-top" alt="...">

                <div class="card-body">
                <p class="card-text">{{$product->name}}</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <a href="{{route("products.show", $product->id)}}" class="btn btn-sm btn-outline-secondary">Chi tiết</a>
                    <a class="btn btn-sm btn-outline-secondary">Yêu thích</a>
                    </div>
                    <small class="text-muted">{{$product->price}} VND</small>
                </div>
                </div>
            </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

{{$products->links("pagination::bootstrap-5")}}

@endsection