<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Project</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body style="font-size: 16px">
    <div class="page d-flex flex-column min-vh-100" style="background-color: #dfdff0">
        <header class="header mb-5">
            <nav class="navbar navbar-expand-lg navbar-light justify-content-end" style="background-color: #FFF164;">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse d-lg-flex justify-content-lg-between text-center"
                    id="navbarNavAltMarkup">
                <ul class="navbar-nav">
                    <li><a class="navbar-brand m-0 mr-lg-3" href="#">Navbar</a></li>
                    <li><a class="nav-item nav-link" href="#">Home</a></li>
                    <li><a class="nav-item nav-link" href="#">Features</a></li>
                </ul>
                <ul class="navbar-nav">
                    <li><a class="nav-item nav-link" href="#">Home</a></li>
                    <li><a class="nav-item nav-link" href="#">Features</a></li>
                    <li><a class="nav-item nav-link" href="#">Pricing</a></li>
                    <li><a class="nav-item nav-link" href="#">Disabled</a></li>
                </ul>
                </div>
            </nav>

        </header>
        <main class="container col-lg-10 bg-white flex-grow-1 p-4 mt-5">
            @yield('work-area')
        </main>

                <!-- Footer -->
        <footer class="footer page-footer font-small text-center" style="background-color: #FFF164">
            <!-- Footer Elements -->
            <div class="container">
            <!-- Grid row-->
            <div class="row">
                <!-- Grid column -->
                <div class="col-md-12 py-2 mt-md-3 mt-2">
                <div class="flex-center">

                    <!-- Facebook -->
                    <a href="/"  class="fb-ic">
                        <i class="fa fa-google fa-lg text-dark mr-md-5 mr-3 fa-2x social"> </i>
                    </a>
                    <!-- Twitter -->
                    <a href="/"  class="tw-ic">
                        <i class="fa fa-twitter fa-lg text-dark mr-md-5 mr-3 fa-2x social"> </i>
                    </a>
                    <!-- Google +-->
                    <a href="/"  class="gplus-ic">
                        <i class="fa fa-telegram fa-lg text-dark mr-md-5 mr-3 fa-2x social"> </i>
                    </a>
                    <!--Linkedin -->
                    <a href="/"  class="li-ic">
                        <i class="fa fa-linkedin fa-lg text-dark mr-md-5 mr-3 fa-2x social"> </i>
                    </a>
                    <!--Instagram-->
                    <a href="/"  class="ins-ic">
                        <i class="fa fa-instagram fa-lg text-dark mr-md-5 mr-3 fa-2x social"> </i>
                    </a>
                    <!--Pinterest-->
                    <a href="/" class="pin-ic">
                        <i class="fa fa-github fa-lg text-dark fa-2x social"> </i>
                    </a>
                </div>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row-->
            </div>
            <!-- Footer Elements -->
            <!-- Copyright -->
            <div class="footer-copyright text-center py-2 ">© 2020 Copyright:
            <a class="text-black-50" href="/"> N.Sazhnev</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>