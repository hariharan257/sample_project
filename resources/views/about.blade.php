@extends('layouts.app')

@section('title') About @endsection

@section('content')

<div id="main-hero" class="hero-body">
    <div class="container has-text-centered">
        <div class="columns is-vcentered">
            <div class="column is-6 is-offset-3 has-text-centered is-subheader-caption">
                <h1 class="title is-2">
                    About Us
                </h1>
                <h2 class="subtitle">Lorem ipsum dolor sit amet consectetur elit.</h2>
            </div>
        </div>
    </div>
</div>
</div>

<div class="section is-medium">
    <div class="container">

        <div class="columns is-vcentered">
            <div class="column is-6 is-relative is-centered-portrait">
                <!-- Square video -->
                <div class="bulkit-player-container is-square reversed-play">
                    <video id="hero-player" class="bulkit-player" playsinline controls data-poster="https://via.placeholder.com/860x788" data-demo-poster="assets/img/demo/video/poster-1b.jpg">
                        <source src="assets/img/video/hands.mp4" type="video/mp4" />
                        <source src="assets/img/video/hands.webm" type="video/webm" />
                    </video>
                </div>
            </div>

            <div class="column is-6">
                <div class="side-title mb-10">
                    <h3 class="title">Our Story</h3>
                </div>
                <p class="side-paragraph is-size-6 mb-10">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eodem modo is enim tibi nemo dabit, quod,
                    expetendum sit, id esse laudabile. Quis suae urbis conservatorem Codrum, quis Erechthei filias non
                    maxime laudat? Sed eum qui audiebant, quoad poterant.
                </p>
                <p class="side-paragraph is-size-6 mb-20">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eodem modo is enim tibi nemo dabit, quod,
                    expetendum sit, id esse laudabile. Quis suae urbis conservatorem Codrum, quis Erechthei filias non
                    maxime laudat? Sed eum qui audiebant.
                </p>
                <div class="buttons">
                    <a href="#" class="button button-cta is-bold btn-align primary-btn raised">
                        Get Started
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Process section -->
<div class="section is-app-grey is-medium">
    <div class="container">

        <!-- Title -->
        <div class="centered-title">
            <h2>Our Process</h2>
        </div>

        <!-- Process steps -->
        <div class="content-wrapper">
            <div class="columns is-vcentered">
                <!-- Process step -->
                <div class="column is-4">
                    <div class="process-block has-line">
                        <div class="process-icon is-icon-reveal">
                            <div class="icon-wrapper">
                                <i class="im im-icon-Arrow-Over"></i>
                                <div class="process-number">1</div>
                            </div>
                        </div>
                        <div class="process-info">
                            <div class="step-number">1</div>
                            <div class="details">
                                <div class="motto">Think</div>
                                <p class="description">Lorem ipsum dolor sit amet, eam ex probo tation tractatos. Ut vel hinc solet tincidunt, nec et iisque placerat pertinax. Ei minim probatus mea.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Process step -->
                <div class="column is-4">
                    <div class="process-block has-line">
                        <div class="process-icon is-icon-reveal">
                            <div class="icon-wrapper">
                                <i class="im im-icon-Arrow-Around"></i>
                                <div class="process-number">2</div>
                            </div>
                        </div>
                        <div class="process-info">
                            <div class="step-number">2</div>
                            <div class="details">
                                <div class="motto">Iterate</div>
                                <p class="description">Lorem ipsum dolor sit amet, eam ex probo tation tractatos. Ut vel hinc solet tincidunt, nec et iisque placerat pertinax. Ei minim probatus mea.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Process step -->
                <div class="column is-4">
                    <div class="process-block">
                        <div class="process-icon is-icon-reveal">
                            <div class="icon-wrapper">
                                <i class="im im-icon-Arrow-Refresh"></i>
                                <div class="process-number">3</div>
                            </div>
                        </div>
                        <div class="process-info">
                            <div class="step-number">3</div>
                            <div class="details">
                                <div class="motto">Create</div>
                                <p class="description">Lorem ipsum dolor sit amet, eam ex probo tation tractatos. Ut vel hinc solet tincidunt, nec et iisque placerat pertinax. Ei minim probatus mea.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Counters section -->
<div class="section is-medium parallax is-cover is-relative" data-background="https://via.placeholder.com/1920x1080" data-color="#000" data-color-opacity="0.7" data-demo-background="assets/img/demo/hero-8.jpg">
    <div class="container">
        <div class="centered-title is-inverted">
            <h2>Work with us !</h2>
            <div class="subheading">
                We do everything to satisfy our clients. Let's start a new story together.
            </div>
        </div>

        <div class="content-wrapper">
            <!-- Counters -->
            <div class="columns is-vcentered has-text-centered mt-40">
                <div class="column is-4">
                    <div class="parallax-counter is-primary">
                        <div class="counter-icon">
                            <i class="im im-icon-Address-Book2"></i>
                        </div>
                        <div class="counter counter-number text-bold">126</div>
                        <div class="counter-text">Completed projects</div>
                    </div>
                </div>
                <div class="column is-4">
                    <div class="parallax-counter is-primary">
                        <div class="counter-icon">
                            <i class="im im-icon-Code-Window"></i>
                        </div>
                        <div class="counter counter-number text-bold">978</div>
                        <div class="counter-text">Commits pushed</div>
                    </div>
                </div>
                <div class="column is-4">
                    <div class="parallax-counter is-primary">
                        <div class="counter-icon">
                            <i class="im im-icon-Laughing"></i>
                        </div>
                        <div class="counter counter-number text-bold">95</div>
                        <div class="counter-text">Satisfied clients</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section is-medium is-app-grey">
    <div class="container">

        <!-- Title -->
        <div class="centered-title">
            <h2>Meet the Team</h2>
        </div>

        <!-- Wrapper -->
        <div class="content-wrapper">
            <div class="columns is-multiline">

                <!--User-->
                <div class="column is-3">
                    <div class="rounded-team-member">
                        <div class="avatar-wrap">
                            <img class="avatar" src="https://via.placeholder.com/250x250" alt="" data-demo-src="assets/img/avatars/helen.jpg">
                            <img class="badge" src="assets/img/logos/stacks/vuejs.svg" alt="">
                        </div>
                        <h3>Helen Miller</h3>
                        <p>Web Developer, Los Angeles</p>
                        <div class="social-profiles">
                            <a><i class="fa fa-facebook-f"></i></a>
                            <a><i class="fa fa-linkedin-in"></i></a>
                            <a><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                </div>

                <!--User-->
                <div class="column is-3">
                    <div class="rounded-team-member">
                        <div class="avatar-wrap">
                            <img class="avatar" src="https://via.placeholder.com/250x250" alt="" data-demo-src="assets/img/avatars/nick.jpg">
                            <img class="badge" src="assets/img/logos/stacks/js.svg" alt="">
                        </div>
                        <h3>Nick Motta</h3>
                        <p>Frontend Developer, Seattle</p>
                        <div class="social-profiles">
                            <a><i class="fa fa-facebook-f"></i></a>
                            <a><i class="fa fa-linkedin-in"></i></a>
                            <a><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                </div>

                <!--User-->
                <div class="column is-3">
                    <div class="rounded-team-member">
                        <div class="avatar-wrap">
                            <img class="avatar" src="https://via.placeholder.com/250x250" alt="" data-demo-src="assets/img/avatars/lakisha.jpg">
                            <img class="badge" src="assets/img/logos/stacks/csharp.svg" alt="">
                        </div>
                        <h3>Lakisha Williams</h3>
                        <p>Backend Developer, Houston</p>
                        <div class="social-profiles">
                            <a><i class="fa fa-facebook-f"></i></a>
                            <a><i class="fa fa-linkedin-in"></i></a>
                            <a><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                </div>

                <!--User-->
                <div class="column is-3">
                    <div class="rounded-team-member">
                        <div class="avatar-wrap">
                            <img class="avatar" src="https://via.placeholder.com/250x250" alt="" data-demo-src="assets/img/avatars/alex.jpg">
                            <img class="badge" src="assets/img/logos/stacks/reactjs.svg" alt="">
                        </div>
                        <h3>Alex Walsh</h3>
                        <p>Fullstack Developer, DC</p>
                        <div class="social-profiles">
                            <a><i class="fa fa-facebook-f"></i></a>
                            <a><i class="fa fa-linkedin-in"></i></a>
                            <a><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                </div>

                <!--User-->
                <div class="column is-3">
                    <div class="rounded-team-member">
                        <div class="avatar-wrap">
                            <img class="avatar" src="https://via.placeholder.com/250x250" alt="" data-demo-src="assets/img/avatars/carolin.png">
                            <img class="badge" src="assets/img/logos/stacks/html5.svg" alt="">
                        </div>
                        <h3>Marjory Cambell</h3>
                        <p>UI/UX Designer, Miami</p>
                        <div class="social-profiles">
                            <a><i class="fa fa-facebook-f"></i></a>
                            <a><i class="fa fa-linkedin-in"></i></a>
                            <a><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                </div>

                <!--User-->
                <div class="column is-3">
                    <div class="rounded-team-member">
                        <div class="avatar-wrap">
                            <img class="avatar" src="https://via.placeholder.com/250x250" alt="" data-demo-src="assets/img/avatars/elie.jpg">
                            <img class="badge" src="assets/img/logos/stacks/css3.svg" alt="">
                        </div>
                        <h3>Elie Daniels</h3>
                        <p>UI/UX Designer, San Diego</p>
                        <div class="social-profiles">
                            <a><i class="fa fa-facebook-f"></i></a>
                            <a><i class="fa fa-linkedin-in"></i></a>
                            <a><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                </div>

                <!--User-->
                <div class="column is-3">
                    <div class="rounded-team-member">
                        <div class="avatar-wrap">
                            <img class="avatar" src="https://via.placeholder.com/250x250" alt="" data-demo-src="assets/img/avatars/ben.jpg">
                            <img class="badge" src="assets/img/logos/stacks/angular.svg" alt="">
                        </div>
                        <h3>Ben Smith</h3>
                        <p>Frontend Developer, San Diego</p>
                        <div class="social-profiles">
                            <a><i class="fa fa-facebook-f"></i></a>
                            <a><i class="fa fa-linkedin-in"></i></a>
                            <a><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                </div>

                <!--User-->
                <div class="column is-3">
                    <div class="rounded-team-member">
                        <div class="avatar-wrap">
                            <img class="avatar" src="https://via.placeholder.com/250x250" alt="" data-demo-src="assets/img/avatars/anthony.jpg">
                            <img class="badge" src="assets/img/logos/stacks/laravel.svg" alt="">
                        </div>
                        <h3>Anthony Briggs</h3>
                        <p>Backend Developer, New York</p>
                        <div class="social-profiles">
                            <a><i class="fa fa-facebook-f"></i></a>
                            <a><i class="fa fa-linkedin-in"></i></a>
                            <a><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

<!-- Clients grid -->
<div id="trust" class="section is-medium">
    <div class="container">
        <!-- Title -->
        <div class="section-title-wrapper">
            <div class="bg-number"><i class="material-icons">domain</i></div>
            <h2 class="section-title-landing has-text-centered dark-text"> We build Trust.</h2>
            <h4 class="has-text-centered">More than <b>900 Teams</b> use our product.</h4>
        </div>
        <!-- Grid -->
        <div class="content-wrapper">
            <div class="grid-clients five-grid">
                <div class="columns is-vcentered">
                    <div class="column is-hidden-mobile"></div>
                    <!-- Client -->
                    <div class="column">
                        <a><img class="client" src="assets/img/logos/custom/gutwork.svg" alt=""></a>
                    </div>
                    <!-- Client -->
                    <div class="column">
                        <a><img class="client" src="assets/img/logos/custom/phasekit.svg" alt=""></a>
                    </div>
                    <!-- Client -->
                    <div class="column">
                        <a><img class="client" src="assets/img/logos/custom/grubspot.svg" alt=""></a>
                    </div>
                    <!-- Client -->
                    <div class="column">
                        <a><img class="client" src="assets/img/logos/custom/taskbot.svg" alt=""></a>
                    </div>
                    <!-- Client -->
                    <div class="column">
                        <a><img class="client" src="assets/img/logos/custom/systek.svg" alt=""></a>
                    </div>
                    <div class="column is-hidden-mobile"></div>
                </div>
                <div class="columns is-vcentered is-separator">
                    <div class="column is-hidden-mobile"></div>
                    <!-- Client -->
                    <div class="column">
                        <a><img class="client" src="assets/img/logos/custom/infinite.svg" alt=""></a>
                    </div>
                    <!-- Client -->
                    <div class="column">
                        <a><img class="client" src="assets/img/logos/custom/tribe.svg" alt=""></a>
                    </div>
                    <!-- Client -->
                    <div class="column">
                        <a><img class="client" src="assets/img/logos/custom/powerball.svg" alt=""></a>
                    </div>
                    <!-- Client -->
                    <div class="column">
                        <a><img class="client" src="assets/img/logos/custom/kromo.svg" alt=""></a>
                    </div>
                    <!-- Client -->
                    <div class="column">
                        <a><img class="client" src="assets/img/logos/custom/covenant.svg" alt=""></a>
                    </div>
                    <div class="column is-hidden-mobile"></div>
                </div>
                <div class="columns is-vcentered is-separator">
                    <div class="column is-hidden-mobile"></div>
                    <!-- Client -->
                    <div class="column">
                        <a><img class="client" src="assets/img/logos/custom/bitbreaker.svg" alt=""></a>
                    </div>
                    <!-- Client -->
                    <div class="column">
                        <a><img class="client" src="assets/img/logos/custom/evently.svg" alt=""></a>
                    </div>
                    <!-- Client -->
                    <div class="column">
                        <a><img class="client" src="assets/img/logos/custom/proactive.svg" alt=""></a>
                    </div>
                    <!-- Client -->
                    <div class="column">
                        <a><img class="client" src="assets/img/logos/custom/transfuseio.svg" alt=""></a>
                    </div>
                    <!-- Client -->
                    <div class="column">
                        <a><img class="client" src="assets/img/logos/custom/livetalk.svg" alt=""></a>
                    </div>
                    <div class="column is-hidden-mobile"></div>
                </div>
            </div>
            <!-- CTA -->
            <div class="has-text-centered is-title-reveal pt-40 pb-40">
                <a href="#" class="button button-cta btn-align primary-btn is-bold raised">Get
                    started Now</a>
            </div>
        </div>
    </div>
</div>

 @endsection