<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>

    <!-- navbar start-->
    <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 fixed-top shadow">
        <div class="container"><a href="#" class="navbar-brand">JK</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="#home" class="nav-link text-primary">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="about.html" class="nav-link text-primary">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="project.html" class="nav-link text-primary">Projects</a>
                    </li>

                    <li class="nav-item">
                        <a href="contact.html" class="nav-link text-primary">Contact</a>
                    </li>
                </ul>
            </div>
        </div>

    </nav>
    <!-- navbar end-->
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

                        <a href="about.html" class="card-link btn btn-outline-primary mt-2">About Me</a>
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
    <hr class="mt-4">
    <section class="footer mt-3">
        <div class="container justify-content-center">
            <div class="row">
                <footer class="text-center">
                    <p class=""> <span class="text-secondary">Design and Developed by</span> <a href="https://jogindrakumar.github.io/so-simple/" style="text-decoration: none;">Jogindra kumar</a> <span class="text-secondary">with</span> <i class="fas fa-heart text-danger"></i>                        and <i class="fas fa-code"></i></p>
                </footer>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>