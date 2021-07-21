
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Seed of Hope | {{\Illuminate\Support\Facades\Route::currentRouteName()}} </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset('css/animate.css')}}">

    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>

<div class="container pt-3 pb-3">


    <div class="row justify-content-between">
        <div class="col-md-8 order-md-last">
            <div class="row">
                <div class="col-md-6 text-center">
                    <img
                        src="{{asset('/images/logo.jpeg')}}"
                        width="80px"
                        height="80px"
                    />

                </div>
                <div class="col-md-6 d-md-flex justify-content-end mb-md-0 mb-3">
                    <form action="{{route('search')}}" class="searchform order-lg-last">
                        <div class="form-group d-flex">
                            <input name="q" required type="text" class="form-control pl-3" placeholder="Search">
                            <button type="submit" placeholder="" class="form-control search"><span class="fa fa-search"></span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4 d-flex ">
            <div class="social-media d-none d-md-block">
                <p class="mb-0 d-flex">
                    <a href="https://web.facebook.com/Seed-of-Hope-Foundation-SoH-F-103752105239755"  class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                    <a href="https://www.linkedin.com/company/seed-of-hope-foundation-soh-f" class="d-flex align-items-center justify-content-center"><span class="icon-linkedin"><i class="sr-only">LinkedIn</i></span></a>
                </p>
            </div>
        </div>
    </div>


</div>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container-fluid">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav m-auto">
                <li class="nav-item {{\Illuminate\Support\Facades\Route::currentRouteName() === 'about' ? 'active' : ''}}"><a href="{{route('about')}}" class="nav-link">About us</a></li>
                <li class="nav-item {{\Illuminate\Support\Facades\Route::currentRouteName() === 'home' ? 'active' : ''}}"><a href="/" class="nav-link">Home</a></li>
                <li class="nav-item "><a href="https://forms.gle/hPbqLy8QdMV6tZLNA" class="nav-link">Become A volunteer</a></li>
                <li class="nav-item"><a href="index.html" class="nav-link">Donate</a></li>
                <li class="nav-item {{\Illuminate\Support\Facades\Route::currentRouteName() === 'blog' ? 'active' : ''}}"><a href="{{route('blog')}}" class="nav-link">Blog</a></li>
                <li class="nav-item {{\Illuminate\Support\Facades\Route::currentRouteName() === 'contact' ? 'active' : ''}}"><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->


@yield('content')

@if(\Illuminate\Support\Facades\Route::currentRouteName() !== 'blog' && \Illuminate\Support\Facades\Route::currentRouteName() != 'viewblog')
<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Our Blog</span>
                <h2>Recent Blog</h2>
            </div>
        </div>
        <div class="row d-flex">
            <?php
            $recent_blogs = App\Models\Blog::orderBy('id','desc')->limit(3)->get();

            ?>
            @foreach($recent_blogs as $blog)
                <?php
                $user = \App\Models\User::find($blog->user_id);
                ?>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="{{route('viewblog',$blog->slug)}}" class="block-20" style="background-image: url('{{$blog->featured_image_url}}');">
                        </a>
                        <div class="text p-4 float-right d-block">
                            <div class="topper d-flex align-items-center">
                                <div class="one py-2 pl-3 pr-1 align-self-stretch">
                                    <span class="day">{{$blog->created_at->day}}</span>
                                </div>
                                <div class="two pl-0 pr-3 py-2 align-self-stretch">
                                    <span class="yr">{{$blog->created_at->year}}</span>
                                    <span class="mos">{{$blog->created_at->monthName}}</span>
                                </div>
                            </div>
                            <h3 class="heading mb-0"><a href="{{route('viewblog',$blog->slug)}}">{{$blog->title}}</a></h3>
                            <p><a href="{{route('viewblog',$blog->slug)}}" class="btn btn-primary">Read more</a></p>
                            <small>by {{$user->name}}</small>
                        </div>
                    </div>
                </div>

            @endforeach

        </div>
    </div>
</section>
@endif


<section class="ftco-intro bg-primary py-5">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-6">
                <h2>Contact us</h2>
                <p>Do you have any comments or questions about our activities.</p>
            </div>
            <div class="col-md-5 text-md-right">
                <span class="contact-number">+233543155416, +233509772005</span>
            </div>
        </div>
    </div>
</section>



<section class="ftco-section testimony-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading">Community</span>
                <h2 class="mb-4">Our volunteers</h2>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel ftco-owl">
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <p class="mb-4">Portia is passionate about women’s economic empowerment, gender norms, gender-based violence prevention and, women and children’s development, in low-resourced settings.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(/images/volunteers/volunteer1.jpeg)"></div>
                                    <div class="pl-3">
                                        <p class="name">Portia Buernarkie</p>
                                        <span class="position">Volunteer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <p class="mb-4">Portia is passionate about women’s economic empowerment, gender norms, gender-based violence prevention and, women and children’s development, in low-resourced settings.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(/images/volunteers/volunteer2.jpeg)"></div>
                                    <div class="pl-3">
                                        <p class="name">Portia Buernarkie</p>
                                        <span class="position">Volunteer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <p class="mb-4">Michael Zusain has over 18 years’ experience in providing professional services across a broad range of finance areas including compliance, business process, accounting, and more</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(/images/volunteers/Person.png)"></div>
                                    <div class="pl-3">
                                        <p class="name">Michael Zusain</p>
                                        <span class="position">Volunteer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb bg-primary">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12 py-4">
                <div class="row">
                    <div class="col-md-12 mx-auto ftco-animate d-flex align-items-center text-center">
                        <h2 class="mb-0" style="color:white; font-size: 24px;">Everyone is a Potential</h2>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>


        <footer class="ftco-footer ftco-bg-dark ftco-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-6 col-lg">
                        <div class="ftco-footer-widget mb-4">
                            <img
                                src="{{asset('/images/logo.jpeg')}}"
                                width="80px"
                                height="80px"
                            />
                            <p>SoH-F is an organization built on determination and commitment to provide educational
                                supplies to rural children in the Upper West Region of Ghana and as well expose rural children to modern-day technology in learning.</p>
                            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                                <li class="ftco-animate"><a href="https://web.facebook.com/Seed-of-Hope-Foundation-SoH-F-103752105239755" ><span class="icon-facebook"></span></a></li>
                                <li class="ftco-animate"><a href="https://www.linkedin.com/company/seed-of-hope-foundation-soh-f"><span class="icon-linkedin"></span></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg">
                        <div class="ftco-footer-widget mb-4 ml-md-5">
                            <h2 class="ftco-heading-2">Quick Menu</h2>
                            <ul class="list-unstyled">
                                <li><a href="{{route('about')}}" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>About Us</a></li>
                                <li><a href="{{route('home')}}" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Home</a></li>
                                <li><a href="{{route('contact')}}" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Contact</a></li>
                                <li><a href="{{route('blog')}}" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>blog</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg">
                        <div class="ftco-footer-widget mb-4">
                            <h2 class="ftco-heading-2">Contact information</h2>
                            <div class="block-23 mb-3">
                                <ul>
                                    <li><span class="icon icon-map-marker"></span><span class="text">Tumu, Upper-West Region, Ghana, West Africa</span></li>
                                    <li><a href="tel://+233543155416"><span class="icon icon-phone"></span><span class="text">+233543155416, +233509772005</span></a></li>
                                    <li><a href="mailto:info@sohgh.org"><span class="icon icon-envelope"></span><span class="text">info@sohgh.org</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg">
                        <div class="ftco-footer-widget mb-4">
                            <h2 class="ftco-heading-2">Business Hours</h2>
                            <div class="opening-hours">
                                <h4>Opening Days:</h4>
                                <p class="pl-3">
                                    <span>Monday – Friday : 9am to 20 pm</span>
                                    <span>Saturday : 9am to 17 pm</span>
                                </p>
                                <h4>Vacations:</h4>
                                <p class="pl-3">
                                    <span>All Sunday Days</span>
                                    <span>All Official Holidays</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">

                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Designed with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://twitter.com/@OrYusif" target="_blank">Yusif Katulie</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </footer>



        <!-- loader -->
        <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/jquery-migrate-3.0.1.min.js')}}"></script>
        <script src="{{asset('js/popper.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
        <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('js/jquery.stellar.min.js')}}"></script>
        <script src="{{asset('js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('js/scrollax.min.js')}}"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
        <script src="{{asset('js/google-map.js')}}"></script>
        <script src="{{asset('js/main.js')}}"></script>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-23581568-13');
        </script>

</body>
</html>

