@extends('master')




@section('content')

    <!-- banner -->
    <section class="banner1">
        <!-- header -->
        <!--<header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <a class="navbar-brand" href="index.html">Exertion</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="index.html">Home

                                </a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="about.html">About</a>
                                <span class="sr-only">(current)</span>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false">
                                    Pages
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item text-center" href="projects.html">Projects</a>
                                    <a class="dropdown-item text-center" href="typography.html">Typography</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">Contact</a>
                            </li>
                        </ul>
                        <form action="#" method="post" class="form-inline my-2 my-lg-0 search mx-lg-auto">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search here..." name="Search" required="">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>

        </header>-->
        <!-- //header -->
    </section>
    <!-- //banner -->
    <!-- about -->
    <section class="welcome py-md-5">
        <div class="container py-4 mt-2">
            <h3 class="tittle text-center mb-3">About Us</h3>
            <p class="tit text-center mx-auto">Integrity Power Solutions is a company tailored to serve</p>
            <div class="row about-tp pt-4 mt-md-4">
                <div class="col-lg-6 welcome-left">
                    <h3>Welcome</h3>
                    <h4>We are committed to offering electrical services of the highest quality, combining our energy and enthusiasm, with our years
                        of experience. Our greatest satisfaction comes in serving large numbers of satisfied clients who have experienced the
                        joys and inspiration of passionate working.</h4>
                    <p>With our highly trained and qualified personel, we will have the job done with outmost diligence and professionalism.</p>
                </div>
                <div class="col-lg-6 welcome-right">
                    <div class="welcome-right-top">
                        <img src="{{asset('asset/images/g1.jpg')}}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //about -->
    <!-- /newsletter-->
    <section class="newsletter py-md-5">
        <div class="container py-4 mt-2">
            <h3 class="tittle text-center mb-3 text-white">Newsletter</h3>
            <p class="tit text-center mx-auto text-white">Let us keep you updated on the latest electrical trends and to keep you our customer always on the front!</p>

            <div class="row news-top pt-4 mt-md-4">
                <div class="col-lg-6 newsleft">
                    <h3>Let’s Stay in Touch!</h3>
                </div>
                <div class="col-lg-6 newsright">
                    <form action="#" method="post">
                        <input type="email" placeholder="Enter your email..." name="email" required="">
                        <input type="submit" value="Subscribe">
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- //newsletter-->

    <!-- about-team -->
    <section class="team py-md-5">
        <div class="container py-4 mt-2">
            <h3 class="tittle text-center mb-3">Our Team</h3>
            <p class="tit text-center mx-auto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius eum inventore consectetur dolorum, voluptatum possimus temporibus vel ab, nesciunt quod!</p>
            <div class="row team-row-agileinfo pt-4 mt-md-4">
                <div class="col-md-3 col-sm-3 col-xs-6 team-grids">
                    <div class="thumbnail team-agileits">
                        <img src="{{asset('asset/images/y.jpeg')}}" class="img-fluid" alt="" />
                        <div class="effectd-caption">
                            <h4 class="mb-3">Vaura Tegsner</h4>
                            <div class="social-lsicon">
                                <a href="#" class="social-button twitter">
                                    <span class="fab fa-twitter"></span>
                                </a>
                                <a href="#" class="social-button facebook">
                                    <span class="fab fa-facebook-f"></span>
                                </a>
                                <a href="#" class="social-button google">
                                    <span class="fab fa-google-plus-g"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6 team-grids">
                    <div class="thumbnail team-agileits">
                        <img src="{{asset('asset/images/y.jpeg')}}" class="img-fluid" alt="" />
                        <div class="effectd-caption">
                            <h4 class="mb-3">Jark Kohnson</h4>
                            <div class="social-lsicon">
                                <a href="#" class="social-button twitter">
                                    <span class="fab fa-twitter"></span>
                                </a>
                                <a href="#" class="social-button facebook">
                                    <span class="fab fa-facebook-f"></span>
                                </a>
                                <a href="#" class="social-button google">
                                    <span class="fab fa-google-plus-g"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6 team-grids">
                    <div class="thumbnail team-agileits">
                        <img src="{{asset('asset/images/y.jpeg')}}" class="img-fluid" alt="" />
                        <div class="effectd-caption">
                            <h4 class="mb-3">Chunk Erson</h4>
                            <div class="social-lsicon">
                                <a href="#" class="social-button twitter">
                                    <span class="fab fa-twitter"></span>
                                </a>
                                <a href="#" class="social-button facebook">
                                    <span class="fab fa-facebook-f"></span>
                                </a>
                                <a href="#" class="social-button google">
                                    <span class="fab fa-google-plus-g"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6 team-grids">
                    <div class="thumbnail team-agileits">
                        <img src="{{asset('asset/images/y.jpeg')}}" class="img-fluid" alt="" />
                        <div class="effectd-caption">
                            <h4 class="mb-3">Goes Mehak</h4>
                            <div class="social-lsicon">
                                <a href="#" class="social-button twitter">
                                    <span class="fab fa-twitter"></span>
                                </a>
                                <a href="#" class="social-button facebook">
                                    <span class="fab fa-facebook-f"></span>
                                </a>
                                <a href="#" class="social-button google">
                                    <span class="fab fa-google-plus-g"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //about-team -->

    @endsection
