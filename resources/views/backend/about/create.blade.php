@extends('admin.admin_master')
@section('main_content')
<div class="container">
<h1 class="text-center mb-3" style="border-bottom: 0.5px solid white;">Create About</h1>
    <div class="row">
        <div class="col-md-12">
          <div class="container">
            <form action="{{ route('about.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                    <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Full Name</label>
                  <input type="text" class="form-control" name="fname">
                  @error('fname')
                  <span class="text-danger">{{$message}}</span>
                  @enderror
                </div>
                    </div>
                    <div class="col-md-6">
                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Position</label>
                    <input type="text" class="form-control" name="position">
                    @error('position')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                   
                  </div>
                    </div>
                    <div class="col-md-6">
                         <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Home Description</label>
                    <input type="text" class="form-control" name="desp_1">
                    @error('desp_1')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                   
                  </div>
                    </div>
                    
                    <div class="col-md-6">
                         <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">About Description</label>
                    <input type="text" class="form-control" name="desp_2">
                    @error('desp_2')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                   
                  </div>
                    </div>
                    <div class="col-md-6">
                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Twitter </label>
                    <input type="text" class="form-control" name="twt">
                    @error('twt')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                   
                  </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Instagram </label>
                    <input type="text" class="form-control" name="insta">
                    @error('insta')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                   
                  </div>
                    </div>
                    <div class="col-md-6">
                         <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Facebook </label>
                    <input type="text" class="form-control" name="fb">
                    @error('fb')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                   
                  </div>
                    </div>
                    <div class="col-md-6">
                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Youtube </label>
                    <input type="text" class="form-control" name="youtube">
                    @error('youtube')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                   
                  </div>
                    </div>
                    <div class="col-md-6"> 
                        <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Personal Email </label>
                    <input type="email" class="form-control" name="p_email">
                    @error('p_email')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                   
                  </div>
                </div>
                    <div class="col-md-6">
                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Official Email </label>
                    <input type="email" class="form-control" name="off_email">
                    @error('off_email')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                   
                  </div>
                    </div>
                    <div class="col-md-6">
                         <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Phone </label>
                    <input type="text" class="form-control" name="phone">
                    @error('phone')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                   
                  </div>
                    </div>
                    <div class="col-md-6">
                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Profile Photo </label>
                    <input type="file" class="form-control" name="img">
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