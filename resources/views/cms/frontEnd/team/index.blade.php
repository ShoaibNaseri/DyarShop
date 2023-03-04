@extends('cms.app2')
@section('title')
Team|Show
@endsection
@section('content')
<div class="app-content">
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-description">
                        <h1 class="d-inline">Team Members</h1>
                        <a href="{{route('team.create')}}" class="btn btn-primary float-end">Add New Member</a>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($teams as $team)
                <div class="col-xl-4">
                    <div class="card widget widget-connection-request">

                        <div class="card-body">
                            <div class="widget-connection-request-container d-flex">
                                <div class="widget-connection-request-avatar">
                                    <div class="avatar avatar-xl m-r-xs">
                                        <img src="{{url('storage/cms/images')}}/team/{{$team->image}}" alt="">
                                    </div>
                                </div>
                                <div class="widget-connection-request-info flex-grow-1">
                                    <span class="widget-connection-request-info-name">
                                        {{$team->name}} <span class="text-muted">{{$team->position}}</span>
                                    </span>
                                    <span class="widget-connection-request-info-count">
                                        {{$team->email}}
                                    </span>
                                    <span class="widget-connection-request-info-about">
                                        {{$team->linkedin}}
                                    </span>
                                </div>
                            </div>
                            <div class="widget-connection-request-actions d-flex">
                                <a href="{{route('team.edit',$team->id)}}" class="btn btn-primary btn-style-light flex-grow-1 m-r-xxs"><i class="material-icons">edit</i>Edit</a>
                                <form action="{{route('team.destroy',$team->id)}}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-primary btn-style-light flex-grow-1 m-r-xxs"><i class="material-icons">delete</i>Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>








@endsection