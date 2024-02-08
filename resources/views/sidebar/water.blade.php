<!DOCTYPE HTML>

<html>

<head>
    <title>Right Sidebar - Twenty by HTML5 UP</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.9.55/css/materialdesignicons.min.css"
        integrity="sha512-vIgFb4o1CL8iMGoIF7cYiEVFrel13k/BkTGvs0hGfVnlbV6XjAA0M0oEHdWqGdAVRTDID3vIZPOHmKdrMAUChA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Open+Sans">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">

    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript>
        <link rel="stylesheet" href="assets/sass/noscript.css" />

    </noscript>
    <link rel="stylesheet" href="assets/css/footer.css" />
    <link rel="stylesheet" href="assets/css/slider.css" />
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <style>
        .wrapper {
            overflow: hidden;
            /* Clear the float */
        }

        .content {
            float: left;
            /* Float the content to the left */
            width: 70%;
            /* Adjust the width as needed */
        }

        .img-thumbnail {
            display: block;
            /* Make the image a block element */
            margin: 10px auto;
            /* Adjust margin as needed */
        }

        #banner {
            background-image: url('storage/water.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            background-color: #f0f0f0;
        }

        #main {
            margin: 15px;
            background-color: #ffffff;
        }

        .mySlides {
            display: none;
            align-items: center;
        }
    </style>
    <script>
        $(document).ready(function() {
            $(".wish-icon i").click(function() {
                $(this).toggleClass("fa-heart fa-heart-o");
            });
        });
            $(function() {
            $(window).on('scroll', function() {
                if ($(window).scrollTop() > 10) {
                    $('.navbar').addClass('active');
                } else {
                    $('.navbar').removeClass('active');
                }
            });
        });
    </script>
</head>

<body class="index is-preload">
    <div id="page-wrapper">
        <!--header-->
        <div class="header-blue">
            <header class="header">
                <nav class="navbar navbar-expand-lg fixed-top py-3">
                    <div class="container"><a href="#" class="navbar-brand text-uppercase font-weight-bold">Wattra
                            Technology</a>
                        <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
                            class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>

                        <div id="navbarSupportedContent" class="collapse navbar-collapse">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active"><a href="#"
                                        class="nav-link text-uppercase font-weight-bold">Home <span
                                            class="sr-only">(current)</span></a></li>
                                <li class="nav-item"><a href="#"
                                        class="nav-link text-uppercase font-weight-bold">About</a></li>
                                <li class="nav-item"><a href="#"
                                        class="nav-link text-uppercase font-weight-bold">Products</a></li>
                                <li class="nav-item"><a href="#"
                                        class="nav-link text-uppercase font-weight-bold">Raw Materials</a>
                                </li>
                                <li class="nav-item"><a href="#"
                                        class="nav-link text-uppercase font-weight-bold">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>

            <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">

                <div class="collapse navbar-collapse" id="navcol-1">



                </div>

            </nav>
            <div class="container hero">
                <div class="log"><img src="storage\logo-removebg-preview (3).png" class="device">
                    <div class="screen"></div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-6 col-xl-5 offset-xl-1">
                        <h1>The revolution is here.</h1>
                        <p>Mauris egestas tellus non ex condimentum, ac ullamcorper sapien dictum. Nam consequat neque
                            quis sapien viverra convallis. In non tempus lorem. </p>
                    </div>
                    <div class="col-md-5 col-lg-5 offset-lg-1 offset-xl-0 d-none d-lg-block phone-holder">
                        <div class="iphone-mockup"><img src="storage\drops-of-water.webp" class="device">
                            <div class="screen"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <section id="banner">

                <!--.inner" is set up as an inline-block so it automatically expands
      in both directions to fit whatever's inside it. This means it won't
      automatically wrap lines, so be sure to use line breaks where
      appropriate (<br />).-->

                <div class="inner">

                    <header>
                        <h2>Raw Materials</h2>
                    </header>


                </div>

            </section>
            <!-- Main -->
            <article id="main">


                <!-- One -->
                <section class="wrapper style4 container">
                    <h2> </h2>
                    @foreach ($waters as $water)
                        <div class="row gtr-150">
                            <div class="col-8 col-12-narrower">
                                <!-- Content -->
                                <div class="content">
                                    <section>
                                        <header>
                                            <h3><u>{{ $water->name }}</u>

                                            </h3>

                                        </header>
                                        <a href="#" class="image featured"></a><img
                                            src="{{ 'storage/' . $water->image }} " height="400" width="700"></a>
                                    </section>
                                </div>
                            </div>
                            <div class="col-4 col-12-narrower">
                                <!-- Sidebar -->
                                <div class="sidebar">

                                </div>
                            </div>
                        </div>

                        <div class="container">
                            <header>

                            </header>
                            <h3> {{ $water->discription }}</h3>
                        </div>
                        <hr>
                    @endforeach



                </section>

            </article>


        </div>


        <!-- Two -->


        </article>

        <!-- Footer -->
        <footer>
            <footer class="container-fluid bg-grey py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6 ">
                                    <div class="logo-part">
                                        <h3>Wattra Technology Pvt.Ltd</h3>
                                        Ware House:- Ramkot-06, Nagarjun Municipality, Kathmandu, Nepal<br>

                                    </div>
                                </div>
                                <div class="col-md-6 px-4">
                                    <h6> About Company</h6>
                                    <p>A GLOBAL WATER TREATMENT SOLUTION COMPANY
                                        Head Office: - Bafal-13, Kathmandu, Nepal<br>
                                        Company Registrations No:- 132816/071/072<br>
                                        Pan No:- 602478892<br></p>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6 px-4">

                                    <div class="row ">
                                        <div class="col-md-6">
                                            <ul>
                                                <li> <a href="#"> Home</a> </li>
                                                <li> <a href="#"> About</a> </li>
                                                <li> <a href="#"> Contact</a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 ">
                                    <h6> Newsletter</h6>
                                    <div class="social">
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    </div>
                                    <form class="form-footer my-3">
                                        <input type="text" placeholder="search here...." name="search">
                                        <input type="button" value="Go">
                                    </form>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>


    </div>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>    
    
    <script src="assets/js/jquery.dropotron.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/jquery.scrollgress.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>
