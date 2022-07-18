 <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 fixed-top shadow">
        <div class="container"><a href="#" class="navbar-brand">JK</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="{{route('home')}}" class="nav-link text-primary">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('about')}}" class="nav-link text-primary">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('project')}}" class="nav-link text-primary">Projects</a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('contact')}}" class="nav-link text-primary">Contact</a>
                    </li>
                </ul>
            </div>
        </div>

    </nav>