<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>

    <!-- navbar start-->
   @include('frontend.body.navbar')
    <!-- navbar end-->
   @yield('main-content')
    <hr class="mt-4">
    <section class="footer mt-3">
        <div class="container justify-content-center">
            <div class="row">
                <footer class="text-center">
                    <p class=""> <span class="text-secondary">Developed by</span> <a href="https://jogindrakumar.com" style="text-decoration: none;">Jogindra kumar</a> <span class="text-secondary">with</span> <i class="fas fa-heart text-danger"></i>                        and <i class="fas fa-code"></i></p>
                </footer>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>