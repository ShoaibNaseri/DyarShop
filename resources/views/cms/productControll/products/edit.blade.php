@extends('cms.app2')
@section('title')
Product|Edit
@endsection
@section('javacode')
<script src="{{ url('cms/assets')}}/js/pages/select2.js"></script>
@endsection
@section('content')

<div class="app-content">
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-description">
                        <h1 class="d-inline">Edit Product</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">{{$product->name}} Deatails</h5>
                        </div>
                        <div class="card-body">
                            <div class="example-container">
                                <div class="example-content">
                                    <form action="{{route('product.update', $product)}}" class="row g-3" method="post" enctype="multipart/form-data">
                                        @method('PATCH')
                                        @include('cms.productControll.products.form')
                                        <div class="col-12">
                                            <button type="submit" name="submit" class="btn btn-primary">Add</button>
                                            <button type="reset" class="btn btn-warning"> Reset</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>








@endsection