@extends('frontend.master_home')
@section('main_content')
<!-- explore project section -->
    <section id="explore-project" class="hero">
        <div class="explore-project wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="text-content text-center">
                            <h2>Explore Project</h2>
                            <p>“I love what I do and I do what our clients love & work with great clients all over the world to create thoughtful and purposeful websites.”</p>

                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($projects as $project)
                        
                  
                    <div class="col-lg-4 col-md-6 mb-lg-0 mb-5">
                        <div class="card">
                            <img src="{{asset($project->img)}}" alt="" class="img-fluid">
                            <div class="pt-3">
                                <h4>{{$project->project_name}}</h4>
                                <p>{{$project->descp}}</p>

                                <a href="{{ $project->live_link }}" class="main-btn mt-4" title="Live"><i class="fas fa-globe"></i></a>
                                <a href="{{ $project->youtube_link }}" class="main-btn mt-4" title="Youtube"><i class="fas fa-play"></i></a>
                                <a href="#" class="main-btn mt-4" title="Buy"><i class="fas fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                   @endforeach
                    
                    
                </div>
                {{-- <div class="row mt-3">
                    <div class="col-lg-4 col-md-6 mb-lg-0 mb-5">
                        <div class="card">
                            <img src="{{asset('frontend/img/project/coronation.png')}}" alt="" class="img-fluid">
                            <div class="pt-3">
                                <h4>Coronation Industry</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum distinctio non deserunt corrupti provident, ullam minus cum ducimus quidem ratione. Vitae illo sit qui illum ipsam iste animi recusandae possimus!</p>

                                <a href="www.youtube.com" class="main-btn mt-4" title="Live"><i class="fas fa-globe"></i></a>
                                <a href="www.youtube.com" class="main-btn mt-4" title="Youtube"><i class="fas fa-play"></i></a>
                                <a href="#" class="main-btn mt-4" title="Buy"><i class="fas fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                  
                    
                    
                </div> --}}
            </div>
        </div>
    </section>