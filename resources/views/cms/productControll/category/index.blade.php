@extends('cms.app2')
@section('title')
Categories
@endsection
@section('content')
<div class="app-content">
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-description">

                        <div class="text-center">
                            <h1 class="p-3">Category List</h1>

                            <a href="{{route('category.create')}}" class="btn btn-primary"><i class="material-icons-two-tone">add</i>Add new Category</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Product Category Lists</h5>
                        </div>
                        <div class="card-body">
                            <table id="datatable1" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>NUM</th>
                                        <th>Category Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($categories as $category)
                                    <tr>
                                        <td>{{$num++}}</td>
                                        <td>{{$category->name}}</td>

                                        <td class="">
                                            <div class="d-inline">
                                                <form action="{{route('category.destroy', $category)}}" enctype="multipart/form-data"">
                                            @csrf
                                            @method('DELETE')
                                                 <button type=" submit" data-toggle="Delete" class="btn btn-warning"><i class="material-icons-two-tone">delete</i></button>
                                                </form>
                                            </div>

                                        </td>

                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>NUM</th>
                                        <th>Category Name</th>
                                        <th>Action</th>


                                </tfoot>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>












        @endsection