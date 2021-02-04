<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Blue Corner | Contact</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">

    <!--Aos Library-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

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
<!-- Start Main Top -->
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
                    <li class="nav-item"><a class="nav-link" href="index">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="products">Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="blog">Blog</a></li>
                    <li class="nav-item active"><a class="nav-link" href="contact">Contact Us</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>
    <!-- End Navigation -->
</header>

<!-- Start Contact Us  -->
<div class="contact-box-main">
    <div class="container">
        @foreach($aboutus as $about)
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <div class="contact-form-right">
                        <h2 data-aos="fade-right" data-aos-delay="400" data-aos-duration="3000">Contact Details</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed odio justo, ultrices ac nisl
                            sed,
                            lobortis porta elit.
                        </p>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="contact__widget__item">
                                <div class="contact__widget__item__icon">
                                    <img src="img/contact/ci-1.png" alt="">
                                </div>
                                <div class="contact__widget__item__text">
                                    <h5>Phone Number</h5>
                                    <span>{{$about->phone}}</span>
                                </div>
                            </div>
                        </div>
                        {{--                    <div class="col-lg-4 col-md-6 col-sm-6">--}}
                        {{--                        <div class="contact__widget__item">--}}
                        {{--                            <div class="contact__widget__item__icon">--}}
                        {{--                                <img src="img/contact/ci-2.png" alt="">--}}
                        {{--                            </div>--}}
                        {{--                            <div class="contact__widget__item__text">--}}
                        {{--                                <h5>Email Address</h5>--}}
                        {{--                                <span>{{$about->email}}</span>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        {{--                    </div>--}}
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="contact__widget__item last__item">
                                <div class="contact__widget__item__icon">
                                    <img src="img/contact/ci-3.png" alt="">
                                </div>
                                <div class="contact__widget__item__text">
                                    <h5>Office Location</h5>
                                    <span>{{$about->address}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        <div class="row">
            <div class="col-lg-8 col-sm-12">
                <div class="contact-form-right">
                    <h2>Get in Touch</h2>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (session()->has('Add'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ session()->get('Add') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <form action="{{ route('requests.store') }}" method="post" role="form">
                        {{ csrf_field() }}

                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                       data-rule="minlen:4" data-msg="Please enter at least 4 chars"/>
                                <div class="validate"></div>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="email" class="form-control" name="email" id="email"
                                       placeholder="Your Email" data-rule="email"
                                       data-msg="Please enter a valid email"/>
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                   data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject"/>
                            <div class="validate"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required"
                                      data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validate"></div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </div>


                    </form>
                </div>

            </div>

        </div>

    </div>
</div>
<!-- End Cart -->


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
