<section class="hero" id="home">
    <div class="container p-5">
        <div class="row justify-content-center">
            <div class="card shadow border border-primary" style="width: 30rem;">
                <div class="position-relative">
                    <img src="{{ asset('frontend/img/me.jfif') }}" class="card-img-top position-absolute top-0 start-50 translate-middle border border-primary" alt="...">
                </div>
                <div class="card-body mt-4">
                    <h5 class="card-title"><b>@yield('card-title')</b> </h5>
                    <h6 class="card-subtitle mb-2 text-muted">@yield('card-subtitle')</h6>
                    <p class="card-text">@yield('card-text')</p>

                    <a href="@yield('button-link-1')" class="card-link btn btn-outline-primary mt-2">@yield('button-text-1')</a>
                    <a href="@yield('button-link-2')" class="card-link btn btn-outline-primary mt-2">@yield('button-text-2')</a>
                    @include('frontend.body.social-media')
                </div>
            </div>
        </div>
    </div>
</section>