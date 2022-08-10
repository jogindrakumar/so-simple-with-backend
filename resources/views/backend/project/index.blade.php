@extends('admin.admin_master')
@section('main_content')
<div class="container">
<h1 class="text-center mb-3" style="border-bottom: 0.5px solid white;">Project Collection</h1>
    <div class="row">
        <div class="col-md-12">
          @foreach ($projects as $project)
            
       
    <div class="card" style="width: 16rem;">
  <img src=" {{asset($project->img)}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$project->project_name}}</h5>
    {{-- <p class="card-text" maxlength="50">{{$project->descp}}</p> --}}
    <a href="{{route('project.edit',$project->id)}}" class="btn btn-warning">Edit</a>
    <a href="{{route('project.delete',$project->id)}}" class="btn btn-danger">Delete</a>
  </div>
</div>
  @endforeach
        </div>
        
    </div>
</div>
@endsection