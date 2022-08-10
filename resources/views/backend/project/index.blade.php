@extends('admin.admin_master')
@section('main_content')
<div class="container">
<h1 class="text-center mb-3" style="border-bottom: 0.5px solid white;">About</h1>
    <div class="row">
        <div class="col-md-12">
          {{-- @foreach ($abouts as $about) --}}
            
        {{-- {{asset($project->img)}} --}}
    <div class="card" style="width: 16rem;">
  <img src="" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"></h5>
    <p class="card-text"></p>
    {{-- <a href="{{route('project.edit',$about->id)}}" class="btn btn-warning">Edit</a> --}}
  </div>
</div>
  {{-- @endforeach --}}
        </div>
        
    </div>
</div>
@endsection