@extends('cms.app2')
@section('title')
Products
@endsection
@section('content')
<div class="app-content">
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-description">

                        <div class="text-center">
                            <h1 class="p-3">Products List</h1>
                            <a href="{{route('product.create')}}" class="btn btn-primary"><i class="material-icons-two-tone">add</i>Add Products</a>

                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Product Lists</h5>
                        </div>
                        <div class="card-body">
                            <table id="datatable1" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Category</th>
                                        <th>Price</th>
                                        <th>Action</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($products as $product)
                                    <tr>

                                        <td><a href="{{route('product.show', $product->id)}}}">{{$product->name}}</a></td>
                                        <td>{{$product->category->name}}</td>
                                        <td>{{$product->price}}</td>
                                        <td>
                                            <div class="d-flex">
                                                <div class="p-2">
                                                    <a href="{{route('product.edit', $product->id)}}" class="btn btn-success"><i class="material-icons-two-tone">edit</i></a>
                                                </div>
                                                <div class="p-2">
                                                    <form action="{{route('product.destroy' , $product)}}" method="POST" enctype="multipart/form-data"">
                                            @csrf
                                            @method('DELETE')
                                            <button type=" submit" class=" btn btn-warning"><i class="material-icons-two-tone">delete</i></button>
                                                    </form>
                                                </div>

                                            </div>

                                        </td>

                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Country</th>
                                        <th>Rank</th>
                                        <th>Action</th>

                                </tfoot>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>












        @endsection