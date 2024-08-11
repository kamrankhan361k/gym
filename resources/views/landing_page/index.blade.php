<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Flozor's Gym</title>
    <!-- =================== META =================== -->
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{asset("landing_page/assets/img/9.png")}}">

    <!-- =================== STYLE =================== -->
    <link rel="stylesheet" href="{{asset("landing_page/assets/css/slick.min.css")}}">
    <link rel="stylesheet" href="{{asset("landing_page/assets/css/bootstrap-grid.css")}}">
    <link rel="stylesheet" href="{{asset("landing_page/assets/css/font-awesome.min.css")}}">
    <link rel="stylesheet" href="{{asset("landing_page/assets/css/style.css")}}">
</head>

<body id="home">
    <!--================ PRELOADER ================-->
    <div class="preloader-cover">
        <div id="cube-loader">
            <div class="caption">
                <div class="cube-loader">
                    <div class="cube loader-1"></div>
                    <div class="cube loader-2"></div>
                    <div class="cube loader-4"></div>
                    <div class="cube loader-3"></div>
                </div>
            </div>
        </div>
    </div>
    <!--============== PRELOADER END ==============-->

    <!-- ================= HEADER ================= -->
    <header class="header">
        <div class="top-panel">
            <div class="container">
                <div class="header-left">
                    <ul class="header-cont">
                        <li><i class="fa fa-phone" aria-hidden="true"></i><a
                                href="https://wa.me/+628170706999">08170706999</a></li>
                        <li><i class="fa fa-clock-o" aria-hidden="true"></i>Mon to Fri : 6:00 AM to 8:00 PM | Sat 6:00
                            AM to 6:00 PM | Sun:
                            Closed </li>
                    </ul>
                </div>
                <div class="header-right">
                    <ul class="social-list">
                        <li><a target="_blank" href="https://wa.me/+628170706999"><i class="fa fa-whatsapp"
                                    aria-hidden="true"></i></a></li>
                        <li><a target="_blank" href="https://www.instagram.com/flozorsgym/"><i class="fa fa-instagram"
                                    aria-hidden="true"></i></a></li>
                        <li><a target="_blank" href="https://maps.app.goo.gl/r6iY1YkYoXq7tNkt6"><i
                                    class="fa fa-map-marker" aria-hidden="true"></i></a></li>
                        <li><a target="_blank" href="mailto:flozorsgym@gmail.com"><i class="fa fa-envelope-o"
                                    aria-hidden="true"></i></a></li>
                    </ul>
                    <a href="" class="btn-login">Login</a>
                </div>
            </div>
        </div>
        {{-- <div class="header-menu"> --}}
        <div class="container">
            <div class="header-logo">
                <a href="{{route("landing_page")}}" class="logo img-thumbnail">
                    <img src="{{asset("landing_page/assets/img/9.png")}}" class="card-img-top" alt="logo">
                </a>
                <p class="me-5">Flozor's Gym</p>
            </div>
        </div>
        {{-- </div> --}}
    </header>
    <!-- =============== HEADER END =============== -->

    <!-- ============ S-CROSSFIT-SLIDER ============ -->
    <section class="s-crossfit-slider">
        <div class="crossfit-slider">
            <div class="crossfit-slide">
                <div class="crossfit-slider-effect effect-1">
                    <div data-hover-only="true" class="scene">
                        <span class="scene-item" data-depth="0.2"
                            style="background-image: url(landing_page/assets/img/effect-1.svg);"></span>
                    </div>
                </div>
                <div class="crossfit-slider-effect effect-2">
                    <div data-hover-only="true" class="scene">
                        <span class="scene-item" data-depth="0.4"
                            style="background-image: url(landing_page/assets/img/effect-2.svg);"></span>
                    </div>
                </div>
                <div class="crossfit-slide-bg" style="background-image: url(landing_page/assets/img/hero1.jpg);"></div>
                <div class="container">
                    <div class="crossfit-slide-cover">
                        <h2 class="title"> <span>YOU</span> VS <span>YOU</span></h2>
                        <p>Every day is a chance to become a better version of yourself. Challenge yourself to push past limits and overcome weaknesses. Life is too short to be held back by unhealthy habits. Push yourself, stay committed, and let your determination drive you forward. In the end, it’s you against you. Keep striving, because you are worth it.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-navigation">
            <div class="container">
                <div class="slider-navigation-cover"></div>
            </div>
        </div>
    </section>
    <!-- ========== S-CROSSFIT-SLIDER END ========== -->

    <!-- ================ S-CROSSFIT ================ -->
    <section class="s-crossfit">
        <div class="container">
            <img src="{{asset("landing_page/assets/img/placeholder-all.png")}}"
                data-src="{{asset("landing_page/assets/img/group-circle-2.svg")}}" alt="img"
                class="crossfit-icon-1 rx-lazy">
            <img src="{{asset("landing_page/assets/img/placeholder-all.png")}}"
                data-src="{{asset("landing_page/assets/img/line-red-1.svg")}}" alt="img"
                class="crossfit-icon-2 rx-lazy">
            <img src="{{asset("landing_page/assets/img/placeholder-all.png")}}"
                data-src="{{asset("landing_page/assets/img/tringle-about-top.svg")}}" alt="img"
                class="crossfit-icon-3 rx-lazy">
            <h2 class="title-decor">Welcome To <span>Flozor's Gym</span></h2>
            <p class="slogan">Flozors Gym has a dynamic history rooted in dedication to fitness and community. Founded
                in 2002 by Frans Lee as Scorpion Gym on Kranggan Road, it quickly gained popularity over three years. We
                rebranded as Flozors Gym, reflecting our evolution, settling at its current location on Puspowarno
                Tengah No.6, Salamanmloyo, Semarang Barat, 50149. Throughout our journey, we've remained committed to
                providing the best service and delivering healthy results in a warm and inviting atmosphere that feels
                like home for all fitness enthusiasts.
            </p>
        </div>
    </section>
    <!-- ============== S-CROSSFIT END ============== -->

    <!-- ============== S-OUR-PROGRAMS ============== -->
    <section class="s-our-programs" style="background-image: url(landing_page/assets/img/bg-programs.jpg);">
        <div class="mask"></div>
        <div class="our-programs-effect" style="background-image: url(landing_page/assets/img/bg-programs.svg);"></div>
        <div class="container">
            <h2 class="title-decor">Our <span>Programs</span></h2>
            <p class="slogan">Transform your life with our program- designed to reduce cortisol, manage stress effectively, and enhance your sleep quality, leading to a more peaceful and rejuvenated you.</p>
            <div class="row">
                <div class="col-sm-6 col-md-3 program-col">
                    <div class="program-item">
                        <div class="program-item-front" style="background-image: url(landing_page/assets/img/programs-3.jpg);">
                            <div class="program-item-inner">
                                <h3>Monthly Membership</h3>
                            </div>
                        </div>
                        <div class="program-item-back" style="background-image: url(landing_page/assets/img/programs-3.jpg);">
                            <div class="program-item-inner">
                                <h3>Monthly Membership</h3>
                                <a href="{{route("program-monthly-membership")}}" class="btn">More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 program-col">
                    <div class="program-item">
                        <div class="program-item-front" style="background-image: url(landing_page/assets/img/programs-2.jpg);">
                            <div class="program-item-inner">
                                <h3>PBC/PBBC</h3>
                            </div>
                        </div>
                        <div class="program-item-back" style="background-image: url(landing_page/assets/img/programs-2.jpg);">
                            <div class="program-item-inner">
                                <h3>Personal Body Care/Personal Beauty Body Care BY Personal Trainer</h3>
                                <a href="{{route("personal-body-care-by-pt")}}" class="btn">More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 program-col">
                    <div class="program-item">
                        <div class="program-item-front" style="background-image: url(landing_page/assets/img/programs-1.jpg);">
                            <div class="program-item-inner">
                                <h3>PBC/PBBC Gold</h3>
                            </div>
                        </div>
                        <div class="program-item-back" style="background-image: url(landing_page/assets/img/programs-1.jpg);">
                            <div class="program-item-inner">
                                <h3>Personal Body Care/Personal Beauty Body Care BY Personal Owner</h3>
                                <a href="{{route("personal-body-care-by-owner")}}" class="btn">More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 program-col">
                    <div class="program-item">
                        <div class="program-item-front" style="background-image: url(landing_page/assets/img/programs-4.jpg);">
                            <div class="program-item-inner">
                                <h3>One Day Pass</h3>
                            </div>
                        </div>
                        <div class="program-item-back" style="background-image: url(landing_page/assets/img/programs-4.jpg);">
                            <div class="program-item-inner">
                                <h3>One Day Pass</h3>
                                <a href="{{route("one-day")}}" class="btn">More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============ S-OUR-PROGRAMS END ============ -->

    <!-- =============== S-OUT-TRAINER =============== -->
    <section class="s-out-trainer" style="background-image: url(assets/img/bg-contacts.svg);">
        <div class="container">
            <h2 class="title-decor">Our <span>Trainer</span></h2>
            <p class="slogan">Meet Our Expert Trainers: Your Path to Fitness Success.</p>
            <div class="row">
                <div class="col-md-6 out-trainer-col">
                    <div class="out-trainer-item">
                        <a href="trainer.html" class="out-trainer-img"><img class="rx-lazy"
                                src="{{asset("landing_page/assets/img/placeholder-all.png")}}"
                                data-src="assets/img/trainer-1.jpg" alt="img"></a>
                        <div class="out-trainer-info">
                            <h3><a href="trainer.html">Fadjar</a></h3>
                            <div class="prof">Weightlifting</div>
                            <p>Maecenas consequat ex id lobortis venenatis. Mauris id erat enim. Morbi dolor dolor,
                                auctor tincidunt lorem ut, venenatis dapibus miq.</p>
                            <ul class="social-list">
                                <li><a target="_blank" href="https://www.facebook.com/rovadex"><i class="fa fa-facebook"
                                            aria-hidden="true"></i></a></li>
                                <li><a target="_blank" href="https://twitter.com/RovadexStudio"><i class="fa fa-twitter"
                                            aria-hidden="true"></i></a></li>
                                <li><a target="_blank" href="https://www.youtube.com"><i class="fa fa-youtube"
                                            aria-hidden="true"></i></a></li>
                                <li><a target="_blank" href="https://www.instagram.com/rovadex"><i
                                            class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 out-trainer-col">
                    <div class="out-trainer-item">
                        <a href="trainer.html" class="out-trainer-img"><img class="rx-lazy"
                                src="{{asset("landing_page/assets/img/placeholder-all.png")}}"
                                data-src="assets/img/trainer-2.jpg" alt="img"></a>
                        <div class="out-trainer-info">
                            <h3><a href="trainer.html">Agus</a></h3>
                            <div class="prof">Weightlifting</div>
                            <p>Maecenas consequat ex id lobortis venenatis. Mauris id erat enim. Morbi dolor dolor,
                                auctor tincidunt lorem ut, venenatis dapibus miq.</p>
                            <ul class="social-list">
                                <li><a target="_blank" href="https://www.facebook.com/rovadex"><i class="fa fa-facebook"
                                            aria-hidden="true"></i></a></li>
                                <li><a target="_blank" href="https://twitter.com/RovadexStudio"><i class="fa fa-twitter"
                                            aria-hidden="true"></i></a></li>
                                <li><a target="_blank" href="https://www.youtube.com"><i class="fa fa-youtube"
                                            aria-hidden="true"></i></a></li>
                                <li><a target="_blank" href="https://www.instagram.com/rovadex"><i
                                            class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 out-trainer-col">
                    <div class="out-trainer-item">
                        <a href="trainer.html" class="out-trainer-img"><img class="rx-lazy"
                                src="{{asset("landing_page/assets/img/placeholder-all.png")}}"
                                data-src="assets/img/trainer-3.jpg" alt="img"></a>
                        <div class="out-trainer-info">
                            <h3><a href="trainer.html">Melky Clause</a></h3>
                            <div class="prof">Weightlifting</div>
                            <p>Maecenas consequat ex id lobortis venenatis. Mauris id erat enim. Morbi dolor dolor,
                                auctor tincidunt lorem ut, venenatis dapibus miq.</p>
                            <ul class="social-list">
                                <li><a target="_blank" href="https://www.facebook.com/rovadex"><i class="fa fa-facebook"
                                            aria-hidden="true"></i></a></li>
                                <li><a target="_blank" href="https://twitter.com/RovadexStudio"><i class="fa fa-twitter"
                                            aria-hidden="true"></i></a></li>
                                <li><a target="_blank" href="https://www.youtube.com"><i class="fa fa-youtube"
                                            aria-hidden="true"></i></a></li>
                                <li><a target="_blank" href="https://www.instagram.com/rovadex"><i
                                            class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 out-trainer-col">
                    <div class="out-trainer-item">
                        <a href="trainer.html" class="out-trainer-img"><img class="rx-lazy"
                                src="{{asset("landing_page/assets/img/placeholder-all.png")}}"
                                data-src="assets/img/trainer-4.jpg" alt="img"></a>
                        <div class="out-trainer-info">
                            <h3><a href="trainer.html">Anna</a></h3>
                            <div class="prof">Weightlifting</div>
                            <p>Maecenas consequat ex id lobortis venenatis. Mauris id erat enim. Morbi dolor dolor,
                                auctor tincidunt lorem ut, venenatis dapibus miq.</p>
                            <ul class="social-list">
                                <li><a target="_blank" href="https://www.facebook.com/rovadex"><i class="fa fa-facebook"
                                            aria-hidden="true"></i></a></li>
                                <li><a target="_blank" href="https://twitter.com/RovadexStudio"><i class="fa fa-twitter"
                                            aria-hidden="true"></i></a></li>
                                <li><a target="_blank" href="https://www.youtube.com"><i class="fa fa-youtube"
                                            aria-hidden="true"></i></a></li>
                                <li><a target="_blank" href="https://www.instagram.com/rovadex"><i
                                            class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============= S-OUT-TRAINER END ============= -->

    <!-- ============== S-TESTIMONIALS ============== -->
    <section class="s-testimonials" style="background-image: url(assets/img/bg-testimonials.jpg);">
        <div class="mask"></div>
        <img class="testimonials-effect" src="assets/img/bg-testimonials.svg" alt="effect">
        <div class="container">
            <div class="testimonials-slider">
                <div class="testimonial-slide">
                    <p>“Phasellus vestibulum nec dolor quis varius. Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit. Phasellus gravida magna sit amet euismod lacinia. Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit”</p>
                    <img src="assets/img/testimonials-1.png" alt="img">
                    <h3 class="name">Anna Piters</h3>
                    <div class="prof">our client</div>
                </div>
                <div class="testimonial-slide">
                    <p>“Phasellus vestibulum nec dolor quis varius. Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit. Phasellus gravida magna sit amet euismod lacinia. Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit”</p>
                    <img src="assets/img/testimonials-2.png" alt="img">
                    <h3 class="name">Mark Klark</h3>
                    <div class="prof">our client</div>
                </div>
                <div class="testimonial-slide">
                    <p>“Phasellus vestibulum nec dolor quis varius. Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit. Phasellus gravida magna sit amet euismod lacinia. Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit”</p>
                    <img src="assets/img/testimonials-3.png" alt="img">
                    <h3 class="name">Kat Smith</h3>
                    <div class="prof">our client</div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============ S-TESTIMONIALS END ============ -->

    <!--================ RELATED POSTS ================-->
    <section class="s-related-posts home-related-posts mb-5">
        <div class="container">
            <h2 class="title-decor">promo <span>news</span>  event</h2>
            <div class="row">
                <div class="col-md-6 related-post-col">
                    <div class="post-item-cover">
                        <div class="post-header">
                            <div class="related-post-categ">fitness</div>
                            <div class="post-thumbnail">
                                <a href="single-blog.html"><img class="rx-lazy"
                                        src="{{asset("landing_page/assets/img/placeholder-all.png")}}"
                                        data-src="assets/img/blog-4.jpg" alt="img"></a>
                            </div>
                        </div>
                        <div class="post-content">
                            <div class="meta">
                                <span class="post-date"><i class="fa fa-calendar" aria-hidden="true"></i>October 31,
                                    2019</span>
                            </div>
                            <h3 class="title"><a href="single-blog.html">Healthy Jus</a></h3>
                            <div class="text">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                    laudantium, totam rem...</p>
                            </div>
                        </div>
                        <div class="post-footer">
                            <div class="meta">
                                <span class="post-by"><i class="fa fa-user" aria-hidden="true"></i><a href="#">By
                                        Rovadex</a></span>
                                <span class="post-comment"><i class="fa fa-comment" aria-hidden="true"></i><a href="#">2
                                        Comments(s)</a></span>
                            </div>
                            <a href="single-blog.html" class="btn"><span>read more</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 related-post-col">
                    <div class="post-item-cover">
                        <div class="post-header">
                            <div class="related-post-categ">lifting</div>
                            <div class="post-thumbnail">
                                <a href="single-blog.html"><img class="rx-lazy"
                                        src="{{asset("landing_page/assets/img/placeholder-all.png")}}"
                                        data-src="assets/img/blog-1.jpg" alt="img"></a>
                            </div>
                        </div>
                        <div class="post-content">
                            <div class="meta">
                                <span class="post-date"><i class="fa fa-calendar" aria-hidden="true"></i>October 31,
                                    2019</span>
                            </div>
                            <h3 class="title"><a href="single-blog.html">Suplement</a></h3>
                            <div class="text">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                    laudantium, totam rem...</p>
                            </div>
                        </div>
                        <div class="post-footer">
                            <div class="meta">
                                <span class="post-by"><i class="fa fa-user" aria-hidden="true"></i><a href="#">By
                                        Rovadex</a></span>
                                <span class="post-comment"><i class="fa fa-comment" aria-hidden="true"></i><a href="#">2
                                        Comments(s)</a></span>
                            </div>
                            <a href="single-blog.html" class="btn"><span>read more</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 related-post-col">
                    <div class="post-item-cover">
                        <div class="post-header">
                            <div class="related-post-categ">fitness</div>
                            <div class="post-thumbnail">
                                <a href="single-blog.html"><img class="rx-lazy"
                                        src="{{asset("landing_page/assets/img/placeholder-all.png")}}"
                                        data-src="assets/img/blog-3.jpg" alt="img"></a>
                            </div>
                        </div>
                        <div class="post-content">
                            <div class="meta">
                                <span class="post-date"><i class="fa fa-calendar" aria-hidden="true"></i>October 31,
                                    2019</span>
                            </div>
                            <h3 class="title"><a href="single-blog.html"></a></h3>
                            <div class="text">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                    laudantium, totam rem...</p>
                            </div>
                        </div>
                        <div class="post-footer">
                            <div class="meta">
                                <span class="post-by"><i class="fa fa-user" aria-hidden="true"></i><a href="#">By
                                        Rovadex</a></span>
                                <span class="post-comment"><i class="fa fa-comment" aria-hidden="true"></i><a href="#">2
                                        Comments(s)</a></span>
                            </div>
                            <a href="single-blog.html" class="btn"><span>read more</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 related-post-col">
                    <div class="post-item-cover">
                        <div class="post-header">
                            <div class="related-post-categ">lifting</div>
                            <div class="post-thumbnail">
                                <a href="single-blog.html"><img class="rx-lazy"
                                        src="{{asset("landing_page/assets/img/placeholder-all.png")}}"
                                        data-src="assets/img/blog-2.jpg" alt="img"></a>
                            </div>
                        </div>
                        <div class="post-content">
                            <div class="meta">
                                <span class="post-date"><i class="fa fa-calendar" aria-hidden="true"></i>October 31,
                                    2019</span>
                            </div>
                            <h3 class="title"><a href="single-blog.html">Sed ut perspiciatis unde omnis</a></h3>
                            <div class="text">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                    laudantium, totam rem...</p>
                            </div>
                        </div>
                        <div class="post-footer">
                            <div class="meta">
                                <span class="post-by"><i class="fa fa-user" aria-hidden="true"></i><a href="#">By
                                        Rovadex</a></span>
                                <span class="post-comment"><i class="fa fa-comment" aria-hidden="true"></i><a href="#">2
                                        Comments(s)</a></span>
                            </div>
                            <a href="single-blog.html" class="btn"><span>read more</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================== FOOTER ================== -->
    <section class="s-counter" style="background-image: url(assets/img/bg-2.jpg);">
        <div class="mask"></div>
        <div class="container">
            <h2 class="title-decor">Flozor's <span>Certification</span></h2>
            <p class="slogan">To be a professional coach</p>
            <div id="clockdiv">
                <div class="clock-item">
                    <span class="days"></span>
                    <div class="smalltext">Days</div>
                </div>
                <div class="clock-item">
                    <span class="hours"></span>
                    <div class="smalltext">Hours</div>
                </div>
                <div class="clock-item">
                    <span class="minutes"></span>
                    <div class="smalltext">Minutes</div>
                </div>
                <div class="clock-item">
                    <span class="seconds"></span>
                    <div class="smalltext">Seconds</div>
                </div>
            </div>
            <form class="subscribe-form">
                <input class="inp-form" type="email" name="subscribe" placeholder="Your Phone-Number">
                <button type="submit" class="btn">Subscribe</button>
            </form>
        </div>
    </section>
    <!-- ================== FOOTER ================== -->

    <!-- ================== FOOTER ================== -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-4 footer-item-logo">
                    <a href="{{route("landing_page")}}" class="logo-footer"><img src="assets/img/footer-logo2.svg" alt="logo"></a>
                    <p>Flozors Gym, founded in 2002 by Frans Lee, offers top service and a welcoming atmosphere for fitness enthusiasts.</p>
                    <ul class="social-list">
                        <li><a target="_blank" href="https://www.facebook.com/rovadex"><i class="fa fa-facebook"
                                    aria-hidden="true"></i></a></li>
                        <li><a target="_blank" href="https://twitter.com/RovadexStudio"><i class="fa fa-twitter"
                                    aria-hidden="true"></i></a></li>
                        <li><a target="_blank" href="https://www.youtube.com"><i class="fa fa-youtube"
                                    aria-hidden="true"></i></a></li>
                        <li><a target="_blank" href="https://www.instagram.com/rovadex"><i class="fa fa-instagram"
                                    aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-4 footer-item">
                    <h3>Contact us</h3>
                    <ul class="footer-cont">
                        <li><i class="fa fa-whatsapp" aria-hidden="true"></i><a href="https://wa.me/+628170706999">08170706999</a>
                        </li>
                        <li><i class="fa fa-envelope" aria-hidden="true"></i><a
                                href="mailto:flozorsgym@gmail.com">flozorsgym@gmail.com</a></li>
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i><a href="https://maps.app.goo.gl/r6iY1YkYoXq7tNkt6">Jl. Puspowarno Tengah No.6, Salamanmloyo, Kec. Semarang Barat, Kota Semarang, Jawa Tengah 50149</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-4 footer-item">
                    <h3>Blog</h3>
                    <ul class="footer-blog">
                        <li>
                            <a href="blog.html" class="img-cover"><img src="assets/img/footer-icon-1.jpg" alt="img"></a>
                            <div class="footer-blog-info">
                                <div class="name"><a href="blog.html">Sed ut perspiciatis</a></div>
                                <p>Omnis iste natus error sit voluptatem…</p>
                            </div>
                        </li>
                        <li>
                            <a href="blog.html" class="img-cover"><img src="assets/img/footer-icon-2.jpg" alt="img"></a>
                            <div class="footer-blog-info">
                                <div class="name"><a href="blog.html">Sed ut perspiciatis</a></div>
                                <p>Omnis iste natus error sit voluptatem…</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- ================ FOOTER END ================ -->

    <!--=================== TO TOP ===================-->
    <a class="to-top" href="#home">
        <i class="fa fa-chevron-up" aria-hidden="true"></i>
    </a>
    <!--================= TO TOP END =================-->

    <!--=================== SCRIPT	===================-->
    <script src="{{asset("landing_page/assets/js/jquery-2.2.4.min.js")}}"></script>
    <script src="{{asset("landing_page/assets/js/slick.min.js")}}"></script>
    <script src="{{asset("landing_page/assets/js/rx-lazy.js")}}"></script>
    <script src="{{asset("landing_page/assets/js/parallax.min.js")}}"></script>
    <script src="{{asset("landing_page/assets/js/scripts.js")}}"></script>
</body>

</html>