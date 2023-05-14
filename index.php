<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centi - UI/UX & Web Development</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/general.css">
    <link rel="stylesheet" href="assets/css/loader.css">
    <link rel="stylesheet" href="assets/css/typewriter.css">
    <link rel="icon" type="image/x-icon" href="assets/img/translogo.ico">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg fixed-top headerauto" id="navbar">
            <div class="container">
                <a class="nav-logos" href="" class="d-flex">
                
                <img class="nav-logo" src="assets/img/logoalt2.svg" alt="">
                <div class="nav-text">centi<span class="blue typewriter"></span></div>
            </a>
                <button class="navbar-toggler" onclick="changeBg()" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="iconify text-white" data-icon="material-symbols:menu"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#hero">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#portfolio">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#pricing">Pricing</a>
                        </li>
                        <li class="nav-item quotebtn">
                            <a class="btn btn-secondary" href="#">Get a Quote</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="hero">
            <div class="container hero-padding">
                <div class="row">
                    <div class="col-xl-8">
                        <h1 class="hero-title">Custom websites, designs, and ads.</h1>
                        <h2 class="hero-description">Tailored for your business. </h2>
                        
                        <div class="hero-btns mt-5">
                            <a href="" class="btn btn-primary btn-lg">Get a Quote <span class="iconify" data-icon="material-symbols:keyboard-arrow-down" data-rotate="270deg"></span></a> <a href="" class="btn btn-secondary btn-lg">Services <span class="iconify" data-icon="material-symbols:keyboard-arrow-down"></span></a>
                        </div>
                    </div>
                    <div class="col-xl-4" style="height: 500px;">
                        
                        <div class="wrapper">
                            <div id="scene">
                            <img data-depth="2.0" src="assets/img/atimg.png" class="hero-img atimg" width="20%" alt="">
                            <img data-depth="3.0" src="assets/img/compimg.png" class="hero-img compimg" width="100%" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <footer>
        <div class="loader-wrapper">
            <span class="loader"><span class="loader-inner"></span></span>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js" integrity="sha512-/6TZODGjYL7M8qb7P6SflJB/nTGE79ed1RfJk3dfm/Ib6JwCT4+tOfrrseEHhxkIhwG8jCl+io6eaiWLS/UX1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            var scene = document.getElementById('scene');
            var parallax = new Parallax(scene);
        </script>
        <script>
            window.addEventListener("scroll", function() {
                var header = document.querySelector("nav");
                header.classList.toggle("stickyauto", window.scrollY > 0);
            })
        </script>
        <script>
            $(window).on("load", function() {
                $(".loader-wrapper").fadeOut("slow");
                $(".navbar").fadeIn("fast");
            });
        </script>
        <script>
            const observer = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    console.log(entry);
                    if (entry.isIntersecting) {
                        entry.target.classList.add('show');
                    } else {
                        entry.target.classList.remove('show');
                    }
                });
            });


            const hiddenElements = document.querySelectorAll('.hidden');
            hiddenElements.forEach((el) => observer.observe(el));
        </script>
        <script>
            function changeBg() {
                var header = document.querySelector("nav");
                header.classList.toggle("stickyauto");
            }
        </script>
    </footer>
</body>

</html>