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
    <link rel="icon" type="image/x-icon" href="assets/img/translogo.ico">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg fixed-top headerauto">
            <div class="container">
                <a class="nav-logo" href=""><img class="nav-logo" src="assets/img/mainlogo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
            <div class="container text-center">
                <h1 class="hero-title">Custom websites, designs, and advertisements</h1>
                <h2 class="hero-description">Get professional services tailored for your business</h2>
                <div class="hero-btns mt-5">
                    <a href="" class="btn btn-primary btn-lg">Get a Quote <span class="iconify" data-icon="material-symbols:keyboard-arrow-down" data-rotate="270deg"></span></a> <a href="" class="btn btn-secondary btn-lg">Services <span class="iconify" data-icon="material-symbols:keyboard-arrow-down"></span></a>
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
        <script>
            window.addEventListener("scroll", function() {
                var header = document.querySelector("headerauto");
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
    </footer>
</body>

</html>