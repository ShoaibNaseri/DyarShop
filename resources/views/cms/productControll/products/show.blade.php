@extends('cms.app2')
@section('title')
Dashboard
@endsection
@section('content')
<div class="app-content">
    <div class="content-wrapper">
        <div class="container">
            <div class="row text-center border-bottom p-2 mb-3">
                <h3>{{$product->name}} Details</h3>
            </div>
            <div class="row">
                <div class="col-xl-4">
                    <div class="card">
                        <img src="{{url('storage/cms/images/products')}}/{{$product->image}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$product->name}}</h5>
                            <p class="card-text">{{$product->description}}</p>
                            <p class="text-muted">{{$product->price}} $</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection