@extends('admin.admin_master')
@section('main_content')
<div class="container">
<h1 class="text-center mb-3" style="border-bottom: 0.5px solid white;">Project Collection</h1>
<div class="mb-2">
  <a href="{{route('project.create')}}" class="btn btn-success"><i data-feather="plus-circle"></i></a>
</div>
    <div class="row">
       @foreach ($projects as $project)
        <div class="col-md-3">
         
            
       
    <div class="card" style="width: 16rem;">
  <img src=" {{asset($project->img)}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$project->project_name}}</h5>
   
    <a href="{{route('project.edit',$project->id)}}" class="btn btn-warning">Edit</a>
    <a href="{{route('project.delete',$project->id)}}" class="btn btn-danger">Delete</a>
  </div>
</div>
  
        </div>
        @endforeach
        
    </div>
</div>
@endsection