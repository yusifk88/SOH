@extends('layouts.site')

@section('content')


    <div class="hero-wrap js-fullheight" style="background-image: url('images/home_bg.jpeg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
                <div class="col-md-6 ftco-animate">
                    <h2 class="subheading">Welcome to Seed of hope</h2>
                    <h1>Everyone Is A Potential. </h1>
                    <p><a href="{{route('about')}}" class="btn btn-primary mr-md-4 py-2 px-4">Learn more <span class="ion-ios-arrow-forward"></span></a></p>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section ftco-no-pt">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 py-5 order-md-last">
                    <div class="heading-section ftco-animate">
                        <span class="subheading"> About us</span>
                        <h2 class="mb-4">Who we are</h2>
                        <p>SoH-F is an organization built on determination and commitment to provide educational supplies to rural children
                            in the Upper West Region of Ghana and as well expose rural children to modern-day technology in learning.</p>
                        <p><a href="{{route('about')}}" class="btn btn-primary py-3 px-4">Learn More <span class="ion-ios-arrow-forward"></span></a></p>
                    </div>
                </div>
                <div class="col-lg-9 services-wrap px-4 pt-5">
                    <div class="row pt-md-3">
                        <div class="col-md-4 d-flex align-items-stretch">
                            <div class="services text-center">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="flaticon-fence"></span>
                                </div>
                                <div class="text">
                                    <h3>Our Vision</h3>
                                    <p>To become a hub of excellent children education support program..</p>
                                </div>
                                <a href="{{route('about')}}#vision" class="btn-custom d-flex align-items-center justify-content-center"><span class="ion-ios-arrow-round-forward"></span></a>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex align-items-stretch">
                            <div class="services text-center">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="flaticon-lawn-mower"></span>
                                </div>
                                <div class="text">
                                    <h3>Our Mission</h3>
                                    <p>To provide Educational supplies to rural children and exposed them to modern technology in their learning environment.</p>
                                </div>
                                <a href="{{route('about')}}#mission" class="btn-custom d-flex align-items-center justify-content-center"><span class="ion-ios-arrow-round-forward"></span></a>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex align-items-stretch">
                            <div class="services text-center">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="flaticon-natural-resources"></span>
                                </div>
                                <div class="text">
                                    <h3>What we do</h3>
                                    <p><strong>1)</strong>​Providing children with learning materials and needed school supplies to support effective learning in school</p>
                                    <p><strong>2)</strong>​Assist school children with financial assistance that will otherwise hinder their retention in school</p>
                                    <p><strong>3)</strong> Assist rural children to learn through modern technology from my point of view</p>

                                </div>
                                <a href="{{route('about')}}#what_we_do" class="btn-custom d-flex align-items-center justify-content-center"><span class="ion-ios-arrow-round-forward"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb bg-light">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-6 d-flex">
                    <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-end" style="background-image:url(images/home_bg_two.jpeg);">

                    </div>
                </div>
                <div class="col-md-6 pl-md-5">
                    <div class="row justify-content-start py-5">
                        <div class="col-md-12 heading-section ftco-animate">
                            <span class="subheading">At Seed of Hope</span>
                            <h2 class="mb-4">Our Core values - ExTRIME</h2>
                            <div class="services-wrap">
                                <a href="#" class="services-list">Ex-cellence
                                    <div class="btn-custom d-flex align-items-center justify-content-center"><span class="ion-ios-arrow-round-forward"></span></div>
                                </a>
                                <a href="#" class="services-list">T-eamwork
                                    <div class="btn-custom d-flex align-items-center justify-content-center"><span class="ion-ios-arrow-round-forward"></span></div>
                                </a>
                                <a href="#" class="services-list">R-espect
                                    <div class="btn-custom d-flex align-items-center justify-content-center"><span class="ion-ios-arrow-round-forward"></span></div>
                                </a>
                                <a href="#" class="services-list">I-ntegrity
                                    <div class="btn-custom d-flex align-items-center justify-content-center"><span class="ion-ios-arrow-round-forward"></span></div>
                                </a>
                                <a href="#" class="services-list">M-entorship
                                    <div class="btn-custom d-flex align-items-center justify-content-center"><span class="ion-ios-arrow-round-forward"></span></div>
                                </a>
                                <a href="#" class="services-list">E-mpowerment
                                    <div class="btn-custom d-flex align-items-center justify-content-center"><span class="ion-ios-arrow-round-forward"></span></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>







@endsection
