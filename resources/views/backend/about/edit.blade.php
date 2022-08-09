@extends('admin.admin_master')
@section('main_content')
<div class="container">
<h1 class="text-center mb-3" style="border-bottom: 0.5px solid white;">Edit About</h1>
    <div class="row">
        <div class="col-md-12">
          <div class="container">
            <form action="{{ route('about.update',$abouts->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                    <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Full Name</label>
                  <input type="text" class="form-control" name="fname" value="{{$abouts->fname}}">
                  @error('fname')
                  <span class="text-danger">{{$message}}</span>
                  @enderror
                </div>
                    </div>
                    <div class="col-md-6">
                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Position</label>
                    <input type="text" class="form-control" name="position" value="{{$abouts->position}}">
                    @error('position')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                   
                  </div>
                    </div>
                    <div class="col-md-6">
                         <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Home Description</label>
                    <input type="text" class="form-control" name="desp_1" value="{{$abouts->desp_1}}">
                    @error('desp_1')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                   
                  </div>
                    </div>
                    
                    <div class="col-md-6">
                         <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">About Description</label>
                    <input type="text" class="form-control" name="desp_2" value="{{$abouts->desp_2}}">
                    @error('desp_2')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                   
                  </div>
                    </div>
                    <div class="col-md-6">
                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Twitter </label>
                    <input type="text" class="form-control" name="twt" value="{{$abouts->twt}}">
                    @error('twt')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                   
                  </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Instagram </label>
                    <input type="text" class="form-control" name="insta" value="{{$abouts->insta}}">
                    @error('insta')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                   
                  </div>
                    </div>
                    <div class="col-md-6">
                         <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Facebook </label>
                    <input type="text" class="form-control" name="fb" value="{{$abouts->fb}}">
                    @error('fb')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                   
                  </div>
                    </div>
                    <div class="col-md-6">
                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Youtube </label>
                    <input type="text" class="form-control" name="youtube" value="{{$abouts->youtube}}">
                    @error('youtube')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                   
                  </div>
                    </div>
                    <div class="col-md-6"> 
                        <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Personal Email </label>
                    <input type="email" class="form-control" name="p_email" value="{{$abouts->p_email}}">
                    @error('p_email')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                   
                  </div>
                </div>
                    <div class="col-md-6">
                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Official Email </label>
                    <input type="email" class="form-control" name="off_email" value="{{$abouts->off_email}}">
                    @error('off_email')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                   
                  </div>
                    </div>
                    <div class="col-md-6">
                         <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Phone </label>
                    <input type="text" class="form-control" name="phone" value="{{$abouts->phone}}">
                    @error('phone')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                   
                  </div>
                    </div>
                    <input type="hidden" name="old_img" value="{{$abouts->img}}">
                    <div class="col-md-6">
                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Profile Photo </label>
                    <input type="file" class="form-control" name="img" value="{{$abouts->img}}">
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