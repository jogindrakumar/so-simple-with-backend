@extends('admin.admin_master')
@section('main_content')
<div class="container">
<h1 class="text-center mb-3" style="border-bottom: 0.5px solid white;">Edit About</h1>
    <div class="row">
        <div class="col-md-12">
          <div class="container">
            <form action="{{ route('project.update',$projects->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                    <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Project Name</label>
                  <input type="text" class="form-control" name="project_name" required value="{{$projects->project_name}}">
                  @error('project_name')
                  <span class="text-danger">{{$message}}</span>
                  @enderror
                </div>
                    </div>
                    <div class="col-md-6">
                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Description</label>
                    <input type="text" class="form-control" name="descp" required value="{{$projects->descp}}">
                    @error('descp')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                   
                  </div>
                    </div>
                    <div class="col-md-6">
                         <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Live</label>
                    <input type="text" class="form-control" name="live_link" required value="{{$projects->live_link}}">
                    @error('live_link')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                   
                  </div>
                    </div>
                    
                    <div class="col-md-6">
                         <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Youtube</label>
                    <input type="text" class="form-control" name="youtube_link" required value="{{$projects->youtube_link}}">
                    @error('youtube_link')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                   
                  </div>
                    </div>
                    <div class="col-md-6">
                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Buy </label>
                    <input type="text" class="form-control" name="buy_link" required value="{{$projects->buy_link}}">
                    @error('buy_link')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                   
                  </div>
                    </div>
                    <input type="hidden" value="{{$projects->img}}" name="old_img">
                    <div class="col-md-6">
                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Project Image </label>
                    <input type="file" class="form-control" name="img"  value="{{$projects->img}}">
                    @error('img')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                   
                  </div>

                    </div>
                   
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
          </div>
        </div>
        
    </div>
</div>
@endsection