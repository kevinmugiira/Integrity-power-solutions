

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Integrity Power Solutions</title>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Exertion Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta Tags -->
    <!-- Style-sheets -->
    <link href="asset/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="asset/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="asset/css/fontawesome-all.css" rel="stylesheet">
    <!--// Style-sheets -->
    <link rel="stylesheet" type="text/css" href="asset/css/easy-responsive-tabs.css " />
    <!--web-fonts-->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Raleway:400,500,600,700,800" rel="stylesheet">
    <!--//web-fonts-->
</head>

<body>
<!-- banner -->
<section class="banner">
    <!-- header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="{{url('index')}}">Integrity Power Solutions</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{url('index')}}">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('about')}}">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false">
                                Pages
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item text-center" href="{{url('projects')}}">Projects</a>
                                <a class="dropdown-item text-center" href="{{url('typography')}}">Typography</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('contact')}}">Contact</a>
                        </li>
                    </ul>
                    <!--<form action="#" method="post" class="form-inline my-2 my-lg-0 search mx-lg-auto">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search here..." name="Search" required="">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>-->
                </div>
            </div>
        </nav>

    </header>
    <!-- //header -->

    @yield('content')


<!-- Footer -->
<footer class="footer-section py-5">
    <div class="container">
        <div class="row">

            <div class="col-lg-4 footer-grids">
                <h3>Get in touch</h3>
                <p>0926k 4th block building,king Avenue, </p>
                <p class="my-2"> New York City,USA</p>
                <p class="phone">phone: +0444 555 6789</p>
                <p class="phone my-2">Fax: +0444 555 6789</p>
                <p class="phone">Mail:
                    <a href="mailto:info@example.com">info@example.com</a>
                </p>
            </div>
            <div class="col-lg-4 footer-grids">
                <h2>Latest Works</h2>
                <div class="d-flex justify-content-around">
                    <a href="#" class="col-4">
                        <img src="{{asset('asset/images/g3.jpg')}}" class="img-fluid" alt="Responsive image">
                    </a>
                    <a href="#" class="col-4">
                        <img src="{{asset('asset/images/g2.jpg')}}" class="img-fluid" alt="Responsive image">
                    </a>
                    <a href="#" class="col-4">
                        <img src="{{asset('asset/images/g1.jpg')}}" class="img-fluid" alt="Responsive image">
                    </a>
                </div>
                <div class="d-flex justify-content-around">
                    <a href="#" class="col-4">
                        <img src="{{asset('asset/images/g2.jpg')}}" class="img-fluid" alt="Responsive image">
                    </a>
                    <a href="#" class="col-4">
                        <img src="{{asset('asset/images/g1.jpg')}}" class="img-fluid" alt="Responsive image">
                    </a>
                    <a href="#" class="col-4">
                        <img src="{{asset('asset/images/g3.jpg')}}" class="img-fluid" alt="Responsive image">
                    </a>
                </div>
            </div>
            <div class="col-lg-4 footer-grids">
                <h3>Twitter feed</h3>
                <ul class="w3agile_footer_grid_list">
                    <li>Ut aut reiciendis voluptatibus adipiscing
                        <a href="#">example.com</a> alias, ut aut.
                        <span>
								<i class="fab fa-twitter"></i> 02 days ago</span>
                    </li>
                    <li>Itaque earum rerum hic tenetur a sapiente
                        <a href="#">example.com</a> ut aut.
                        <span>
								<i class="fab fa-twitter"></i> 03 days ago</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- //Footer -->
<!-- copyright -->
<section class="copyright-w3layouts">
    <div class="container">
        <p class="py-xl-4 py-3">© 2018 Integrity Power Solution . All Rights Reserved | Design by
            <a href="kevinm@air-bi.com"> Veksohn Technologies </a>
        </p>
    </div>
</section>
<!-- //copyright -->

<!-- Required common Js -->
<script src="{{asset('asset/js/jquery.min.js')}}"></script>
<!-- //Required common Js -->
<!-- Responsiveslides -->
<script src="{{asset('asset/js/responsiveslides.min.js')}}"></script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {
        // Slideshow 4
        $("#slider3").responsiveSlides({
            auto: true,
            pager: true,
            nav: false,
            speed: 500,
            namespace: "callbacks",
            before: function () {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                $('.events').append("<li>after event fired.</li>");
            }
        });

    });
</script>
<!-- // Responsiveslides -->
<script src="{{asset('asset/js/easyResponsiveTabs.js')}}"></script>
<!--Plug-in Initialisation-->
<script type="text/javascript">
    $(document).ready(function () {

        //Vertical Tab
        $('#parentVerticalTab').easyResponsiveTabs({
            type: 'vertical', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true, // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            tabidentify: 'hor_1', // The tab groups identifier
            activate: function (event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#nested-tabInfo2');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });
    });
</script>

<!-- start-smoth-scrolling -->
<script type="text/javascript" src="asset/js/move-top.js"></script>
<script type="text/javascript" src="asset/js/easing.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });
    });
</script>
<!-- start-smoth-scrolling -->
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function () {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */

        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>
<!-- //here ends scrolling icon -->
<!-- Js for bootstrap working-->
<script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
<!-- //Js for bootstrap working -->
</section>
</body>


</html>
