@extends('admin.admin_master')
@section('main_content')
<div class="container">
<h1 class="text-center mb-3" style="border-bottom: 0.5px solid white;">About</h1>
    <div class="row">
        <div class="col-md-12">
          @foreach ($abouts as $about)
            
        
    <div class="card" style="width: 16rem;">
  <img src="{{asset($about->img)}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$about->fname}}</h5>
    <p class="card-text">{{$about->desp_1}}</p>
    <a href="{{route('about.edit',$about->id)}}" class="btn btn-warning">Edit</a>
  </div>
</div>
  @endforeach
        </div>
        
    </div>
</div>
@endsection