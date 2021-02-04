<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Blue Corner</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>
<body>
<header class="main-header">
    <!-- Start Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
        <div class="container">
            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu"
                        aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index">
                    <img src="./assets/img/logoblue.png" class="logo" alt="" style="width: 100px;">
                </a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item active"><a class="nav-link" href="index ">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="products">Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="blog">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact-us">Contact Us</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>
    <!-- End Navigation -->
</header>
<!-- Start About Page  -->
<div class="about-box-main">
    <div class="container">
        @foreach($aboutus as $about)
            @if( $loop->index == 0)
                <div class="">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="banner-frame">
                                <img class="img-fluid" src=" {{asset('images/'.$about->image)}}" alt=""/>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <h2 class="noo-sh-title-top" data-aos="fade-right" data-aos-delay="1100">
                                We are <span>Blue Corner</span>
                            </h2>
                            <p data-aos="fade-right" data-aos-delay="1100">  {{$about->description}}
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="services__item icon-box">

                                <img src="./assets/img/icons-mission.png" alt="">
                                <h4>Our Mission</h4>
                                <p> {{$about->mission}}</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="services__item icon-box">
                                <img src="./assets/img/icons-vision.png" alt="">

                                <h4>Our Vision</h4>
                                <p> {{$about->vision}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    <!--Services start-->
        <div class="row my-5">
            <div class="col-12">
                <h2 class="noo-sh-title" data-aos="fade-up">Our Services</h2>
            </div>

            @foreach($services as $service)
                @if( $loop->index == 0)
                    <div class="col-sm-6 col-lg-4">
                        <div class="icon-box" data-aos="fade-right" data-aos-delay="200">
                            <div class="icon"><i class="fas fa-fish"></i></div>
                            <h4 class="title"><a href="">{{$service->title}}</a></h4>
                            <p class="description"> {{$service->description}}</p>
                        </div>
                    </div>
                @endif
            @endforeach
            @foreach($services as $service)
                @if( $loop->index == 1)
                    <div class="col-sm-6 col-lg-4">
                        <div class="icon-box" data-aos="fade-right" data-aos-delay="400">
                            <div class="icon"><i class="fas fa-box-open"></i></div>
                            <h4 class="title"><a href="">{{$service->title}}</a></h4>
                            <p class="description"> {{$service->description}}</p>
                        </div>
                    </div>
                @endif
            @endforeach
            @foreach($services as $service)
                @if( $loop->index == 2)
                    <div class="col-sm-6 col-lg-4">
                        <div class="icon-box" data-aos="fade-right" data-aos-delay="600">
                            <div class="icon"><i class="fa fa-people-carry"></i></div>
                            <h4 class="title"><a href="">{{$service->title}}</a></h4>
                            <p class="description"> {{$service->description}}</p>
                        </div>
                    </div>
                @endif
            @endforeach

        </div>

        <!--Services end-->

        <div class="row my-4">
            <div class="col-12">
                <h2 class="noo-sh-title" data-aos="fade-up">Meet Our Team</h2>
            </div>
            @foreach($teams as $team)
            <div class="col-sm-6 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
                <div class="hover-team">
                    <div class="our-team">
                        <img src="{{asset('images/'.$team->image)}}" alt="">
                        <div class="team-content">
                            <h3 class="title"> {{$team->name}}</h3> <span class="post">{{$team->job}}</span>
                        </div>
                        <ul class="social">
                            <li>
                                <a href="#" class="fab fa-facebook"></a>
                            </li>
                            <li>
                                <a href="#" class="fab fa-twitter"></a>
                            </li>
                            <li>
                                <a href="#" class="fab fa-google-plus"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="team-description">
                        <p> {{$team->description}} </p>
                    </div>
                    <hr class="my-0">
                </div>
            </div>
            @endforeach
        </div>
    </div>

</div>
<!-- Start Instagram Feed  -->
<div class="instagram-box">
    <div class="main-instagram owl-carousel owl-theme">

        @foreach($images as $image)
            <div class="item">
                <div class="ins-inner-box">
                    <img src="{{asset('images/'.$image->image)}}" alt="">
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>
<!-- End Instagram Feed  -->


<!-- Start Footer  -->
<footer>
    <div class="footer-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="footer-top-box">
                        <h4 data-aos="fade-right">Ready to Contact Us</h4>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="footer-widget" data-aos="fade-up" data-aos-delay="200">
                        <h4>Blue Corner</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="footer-link" data-aos="fade-up" data-aos-delay="400">
                        <h4>Information</h4>
                        <ul>
                            <li><a href="./about.html">About Us</a></li>
                            <li><a href="./about.html">Customer Service</a></li>
                            <li><a href="./products.html">Our Products</a></li>
                            <!-- <li><a href="#">Delivery Information</a></li> -->
                            <li>
                                <ul class="social-links">
                                    <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="footer-link-contact" data-aos="fade-up" data-aos-delay="600">
                        <h4>Contact Us</h4>
                        <ul>
                            <li>
                                <p><i class="fas fa-map-marker-alt"></i>Address: Michael I. Days 3756 <br>Preston Street
                                    Wichita,<br> KS 67213 </p>
                            </li>
                            <li>
                                <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:+1-888705770">+1-888 705
                                        770</a></p>
                            </li>
                            <li>
                                <p><i class="fas fa-envelope"></i>Email: <a href="mailto:contactinfo@gmail.com">contactinfo@gmail.com</a>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer  -->

<!-- Start copyright  -->
<div class="footer-copyright">
    <p class="footer-company">All Rights Reserved. &copy; 2021 Design By :
        <a href="#">Devenza</a>
    </p>
</div>
<!-- End copyright  -->
<!-- End About Page -->
<!-- ALL JS FILES -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="{{asset('assets/./js/aos.js')}}"></script>
<script src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- ALL PLUGINS -->
<script src="{{asset('assets/js/jquery.superslides.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap-select.js')}}"></script>
<script src="{{asset('assets/js/inewsticker.js')}}"></script>
<script src="{{asset('assets/js/inewsticker.js')}}"></script>
<script src="{{asset('assets/js/images-loded.min.js')}}"></script>
<script src="{{asset('assets/js/isotope.min.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/baguetteBox.min.js')}}"></script>
<script src="{{asset('assets/js/form-validator.min.js')}}"></script>
<script src="{{asset('assets/js/contact-form-script.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
</body>

</html>
