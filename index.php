<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centi - UI/UX & Web Development</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                    <div class="nav-text">centi<span class="blue">ui</span></div>
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
                        <li class="nav-item">
                            <a class="nav-link" href="#testimonials">Testimonials</a>
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
        <div class="snap">
            <section class="snap-section" id="hero">
                <div class="hero">
                    <div class="container hero-padding">
                        <div class="row">
                            <div class="col-xl-8">
                                <h4 class="hero-small"><span class="badge bg-primary fa-fade">LIVE <i class="fa-solid fa-location-dot"></i></span> <span class="Single">853712</span>+ visitors on our client's sites  </h4>
                                <h1 class="hero-title">Custom websites, designs, and ads.</h1>
                                <h2 class="hero-description">Tailored for your business. </h2>

                                <div class="hero-btns mt-5">
                                    <a href="" class="btn btn-primary btn-lg">Get a Quote <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" viewBox="0 0 24 24" data-icon="material-symbols:keyboard-arrow-down" data-rotate="270deg" class="iconify iconify--material-symbols">
                                            <g transform="rotate(-90 12 12)">
                                                <path fill="currentColor" d="m12 15.4l-6-6L7.4 8l4.6 4.6L16.6 8L18 9.4l-6 6Z"></path>
                                            </g>
                                        </svg></a>

                                    <a href="" class="btn btn-secondary btn-lg">Services <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" viewBox="0 0 24 24" data-icon="material-symbols:keyboard-arrow-down" class="iconify iconify--material-symbols">
                                            <path fill="currentColor" d="m12 15.4l-6-6L7.4 8l4.6 4.6L16.6 8L18 9.4l-6 6Z"></path>
                                        </svg></a>

                                </div>
                            </div>
                            <div class="col-xl-4 wrapper" style="height: 500px;">

                                <div class="">
                                    <div id="scene">
                                        <img data-depth="2.0" src="assets/img/atimg.png" class="hero-img atimg" width="20%" alt="">
                                        <img data-depth="3.0" src="assets/img/compimg.png" class="hero-img compimg" width="100%" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="snap-section" id="portfolio">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 d-flex justify-content-center">

                            <img data-depth="3.0" src="assets/img/phone.png" width="50%" class="hiddentilt img-fluid portfolio-img" alt="">

                        </div>
                        <div class="col-xl-7 ">
                            <div class="portfolio-padd">
                                <h1 class="portfolio-title hidden">Now for the important stuff.</h1>
                                <h2 class="portfolio-desc hidden">Dozens of project specially designed for our previous clients.</h2>
                                <a class="btn btn-secondary mt-3 btn-lg" href="">See Our Work <span class="iconify" data-icon="ic:round-skip-next"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="snap-section" id="services">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8">
                            <div class="portfolio-padd">
                                <div class="row">
                                    <div class="col-md-6 ">
                                        <div class="card mt-4 hidden">
                                            <div class="card-body">
                                                <div class="chead d-flex align-items-center">
                                                    <img src="assets/img/crown.png" width="35px">&ensp; Web Development
                                                </div>
                                                <ul>
                                                    <li class="list">Low pricing</li>
                                                    <li class="list">Quality work</li>
                                                    <li class="list">1 free UI sketch</li>
                                                    <li class="list">Mockups</li>
                                                    <li class="list">Portfolio available</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card mt-4 hiddenup">
                                            <div class="card-body">
                                                <div class="chead d-flex align-items-center">
                                                    <img src="assets/img/crown.png" width="35px">&ensp; UI/UX Design
                                                </div>
                                                <ul>
                                                    <li class="list">Low pricing</li>
                                                    <li class="list">Quality work</li>
                                                    <li class="list">1 free UI sketch</li>
                                                    <li class="list">Mockups</li>
                                                    <li class="list">Portfolio available</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-xl-4  align-items-center">
                            <div id="earth" class="hidden" style="margin-left: auto;"></div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="snap-section">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4  align-items-center">
                            <div id="earth" class="hidden" style="margin-right: auto;"></div>
                        </div>
                        <div class="col-xl-8">
                            <div class="portfolio-padd">
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="card mt-4 hidden">
                                            <div class="card-body">
                                                <div class="chead d-flex align-items-center">
                                                    <img src="assets/img/crown.png" width="35px">&ensp; Advertisements
                                                </div>
                                                <ul>
                                                    <li class="list">Low pricing</li>
                                                    <li class="list">Quality work</li>
                                                    <li class="list">1 free UI sketch</li>
                                                    <li class="list">Mockups</li>
                                                    <li class="list">Portfolio available</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card mt-4 hiddenup">
                                            <div class="card-body">
                                                <div class="chead d-flex align-items-center">
                                                    <img src="assets/img/crown.png" width="35px">&ensp; Discord Development
                                                </div>
                                                <ul>
                                                    <li class="list">Low pricing</li>
                                                    <li class="list">Quality work</li>
                                                    <li class="list">1 free UI sketch</li>
                                                    <li class="list">Mockups</li>
                                                    <li class="list">Portfolio available</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="snap-section" id="pricing">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 d-flex justify-content-center">

                            <img data-depth="3.0" src="assets/img/price.png" width="60%" class="hiddentilt img-fluid portfolio-img" alt="">

                        </div>
                        <div class="col-xl-7 ">
                            <div class="portfolio-padd">
                                <h1 class="portfolio-title hidden">Everything comes with a price.</h1>
                                <h2 class="portfolio-desc hidden">Centi offers very versatile and flexible pricing plans starting at:</h2>
                                <h4 class="pricing-desc hiddenup">$100+</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="snap-section" id="testimonials">
                <div class="container">
                    <div class="portfolio-padd">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card mt-4 hidden">
                                    <div class="card-body">
                                        <div class="chead d-flex align-items-center">
                                            <img src="assets/img/jumex.png" width="35px">&ensp; JUMEX
                                        </div>
                                        <div class="test-desc">Centi always gets digital work done on time. Been with them for two years and don’t plan on leaving. 11/10</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mt-4 hidden">
                                    <div class="card-body">
                                        <div class="chead d-flex align-items-center">
                                            <img src="assets/img/packeyes.png" width="35px">&ensp; Packeyes, Inc
                                        </div>
                                        <div class="test-desc">
                                            "Centi completely crushed it doing my site, went above and beyond what was expected."
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-4">
                                <div class="card mt-4 hidden">
                                    <div class="card-body">
                                        <div class="chead d-flex align-items-center">
                                            <img src="assets/img/heaven.png" width="35px">&ensp; Heaven
                                        </div>
                                        <div class="test-desc">
                                            "Centi is the developer of my website, ‘paste.army,’ quality was excellent and work was quick."
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>


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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tilt.js/1.0.3/tilt.jquery.min.js" integrity="sha512-14AZ/DxUrlF26z6v7egDkpJHKyJRn/7ue2BgpWZ/fmqrqVzf4PrQnToy99sHmKwzKev/VZ1tjPxusuTV/n8CcQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            var scene = document.getElementById('scene');
            var parallax = new Parallax(scene);
        </script>
        <script>
            document.querySelector('.snap').addEventListener("scroll", onScroll, function() {
                var header = document.querySelector("nav");
                header.classList.toggle("stickyauto", window.scrollY > 0);
            })
        </script>
        <script>
            $(window).on("load", function() {
                $(".loader-wrapper").fadeOut("slow");
                $(".navbar").fadeIn("fast");
            });


            $({
                Counter: 0
            }).animate({
                Counter: $('.Single').text()
            }, {
                duration: 1000,
                easing: 'swing',
                step: function() {
                    $('.Single').text(Math.ceil(this.Counter));
                }
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

            const observer2 = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    console.log(entry);
                    if (entry.isIntersecting) {
                        entry.target.classList.add('showtilt');
                    } else {
                        entry.target.classList.remove('showtilt');
                    }
                });
            });


            const hiddenElements2 = document.querySelectorAll('.hiddentilt');
            hiddenElements2.forEach((el) => observer2.observe(el));

            const observer3 = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    console.log(entry);
                    if (entry.isIntersecting) {
                        entry.target.classList.add('showup');
                    } else {
                        entry.target.classList.remove('showup');
                    }
                });
            });


            const hiddenElements3 = document.querySelectorAll('.hiddenup');
            hiddenElements3.forEach((el) => observer3.observe(el));
        </script>
        <script>
            function changeBg() {
                var header = document.querySelector("nav");
                header.classList.toggle("stickyauto");
            }
        </script>
        <script>
            $('.js-tilt').tilt({
                scale: 1.2,
                glare: true,
                maxGlare: .5
            })
        </script>
    </footer>
</body>

</html>