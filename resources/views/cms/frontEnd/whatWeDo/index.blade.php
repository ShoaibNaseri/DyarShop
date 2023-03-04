@extends('cms.app2')
@section('title')
What We Do|Show
@endsection
@section('content')
<div class="app-content">
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-description">
                        <h1 class="d-inline">Services</h1>
                        <a href="{{route('service.create')}}" class="btn btn-primary float-end">Add Service</a>
                    </div>
                </div>
            </div>
            <div class="row">

                @foreach($services as $service)
                <div class="col-xl-4">
                    <div class="card">
                        <img src="{{url('storage/cms/images')}}/service/{{$service->image}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$service->title}}</h5>
                            <p class="card-text text-muted">{{$service->description}}</p>
                        </div>
                        <div class="widget-connection-request-actions p-4 d-flex">
                            <a href="{{route('service.edit',$service->id)}}" class="btn btn-primary btn-style-light flex-grow-1 m-r-xxs"><i class="material-icons">edit</i>Edit</a>
                            <form action="{{route('service.destroy',$service->id)}}" method="post">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger btn-style-light flex-grow-1 m-r-xxs"><i class="material-icons">delete</i>Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</div>




@endsection