 @extends('frontend.master_home')
 @section('main_content')
 
 <section class="hero" id="home">
        <div class="container p-5">
            <div class="row justify-content-center">
                <div class="card shadow border border-primary" style="width: 30rem;">
                    <div class="position-relative">
                        <img src="{{ asset('frontend/img/me.jfif') }}" class="card-img-top position-absolute top-0 start-50 translate-middle border border-primary" alt="...">
                    </div>
                    <div class="card-body mt-4">
                        <h5 class="card-title"><b>Jogindra Kumar</b> </h5>
                        <h6 class="card-subtitle mb-2 text-muted">web Developer</h6>
                        <p class="card-text">Creative developer & designer crafting unique web experiences</p>

                        <a href="{{route('about')}}" class="card-link btn btn-outline-primary mt-2">About Me</a>
                        <a href="contact.html" class="card-link btn btn-outline-primary mt-2">Hire</a>
                        <div class="social-media mt-5">
                            <i class="fab fa-twitter pe-3 text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Not Available"></i>
                            <i class="fab fa-instagram pe-3 text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Not Available"></i>
                            <i class="fab fa-facebook-f pe-3 text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Not Available"></i>
                            <i class="fab fa-youtube text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Not Available"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    