@extends('layouts.base-template')
@section('content')
<div role="main" class="main">
    <x-slider-section />
    <div class="container container-xl-custom py-5 my-5">
        <div class="row justify-content-center">
            <div class="col-xl-9 text-center">
                <h2 class="font-weight-bold text-11 appear-animation" data-appear-animation="fadeInUpShorter">Welcome to Career's with Kemi</h2>
                <p class="line-height-9 text-4 opacity-9 appear-animation" data-appear-animation="fadeInUpShorter"
                    data-appear-animation-delay="200">
                Hi there! I am ‘Kemi Onadiran (careerswithkemi). I’m a multi-sector Human Resource Professional, Career Blogger and an
                Author with over a decade of strategic, managerial and operational experience in HR, Talent Acquisition and Management,
                Business Transformation and Project Management. I am the visionnaire behind careerswithkemi, a career platform that has
                helped numerous Nigerian graduates and professionals get their desired jobs and achieve clarity in their careers to
                unleash and optimize their full potentials.</p>
                <p class="line-height-9 text-4 opacity-9 appear-animation" data-appear-animation="fadeInUpShorter"
                    data-appear-animation-delay="220">as part of my professionlism, I offers the following services</p>
            </div>
        </div>
        <div class="row featured-boxes featured-boxes-style-4">
            <div class="col-sm-6 col-lg-3 appear-animation" data-appear-animation="fadeInLeftShorter"
                data-appear-animation-delay="400">
                <div class="featured-box mb-lg-0">
                    <div class="box-content px-lg-1 px-xl-5">
                        <i class="icon-layers icons text-color-primary text-11"></i>
                        <h4 class="font-weight-bold text-5 mb-3">Resume / CV Builder</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 appear-animation" data-appear-animation="fadeInLeftShorter"
                data-appear-animation-delay="200">
                <div class="featured-box mb-lg-0">
                    <div class="box-content px-lg-1 px-xl-5">
                        <i class="fa-solid fa-handshake text-color-primary text-11"></i>
                        <h4 class="font-weight-bold text-5 mb-3">Consultation</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 appear-animation" data-appear-animation="fadeInRightShorter"
                data-appear-animation-delay="200">
                <div class="featured-box mb-sm-0">
                    <div class="box-content px-lg-1 px-xl-5">
                        <i class="icon-featured icons icon-briefcase text-color-primary text-11"></i>
                        <h4 class="font-weight-bold text-5 mb-3">Employer’s Recruitment</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 appear-animation" data-appear-animation="fadeInRightShorter"
                data-appear-animation-delay="400">
                <div class="featured-box mb-0">
                    <div class="box-content px-lg-1 px-xl-5">
                        <i class="fa fa-solid fa-book-open text-color-primary text-11"></i>
                        {{-- <i class="icon-featured icons icon-heart text-color-primary text-11"></i> --}}
                        <h4 class="font-weight-bold text-5 mb-3">Quality E-Books</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section section-parallax bg-color-grey-scale-1 border-0 m-0 appear-animation"
        data-appear-animation="fadeIn" data-plugin-parallax
        data-plugin-options="{'speed': 1.5, 'parallaxHeight': '116%'}"
        data-image-src="images/parallax/parallax-corporate-14-1.jpg">
        <div class="container container-xl-custom">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-7 order-2 order-md-1 appear-animation" data-appear-animation="fadeInRightShorter"
                    data-appear-animation-delay="200">
                    <span class="font-weight-bold text-color-dark opacity-8 text-4">COOL STYLES</span>
                    <h2 class="font-weight-bold text-9 mb-4">Layouts Styles & Variants</h2>
                    <ul class="list list-icons pb-2 mb-4">
                        <li><i class="fas fa-caret-right top-6"></i> <span class="text-4">Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit.</span></li>
                        <li><i class="fas fa-caret-right top-6"></i> <span class="text-4">Ipsum dolor sit amet,
                                consectetur adipiscing elit.</span></li>
                        <li><i class="fas fa-caret-right top-6"></i> <span class="text-4">Dolor sit amet, lorem ipsum
                                consectetur adipiscing elit.</span></li>
                    </ul>
                    <a href="#" class="btn btn-primary font-weight-semibold rounded-0 btn-px-5 py-3 text-2">LEARN
                        MORE</a>
                </div>
                <div class="col-md-4 text-center text-md-start order-1 order-md-2 mb-5 mb-md-0 appear-animation"
                    data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                    <img src="images/smartphone-corporate-14-1.png" class="img-fluid" alt="" />
                </div>
            </div>
        </div>
    </section>

    <section class="section section-height-3 section-parallax bg-color-light border-0 m-0" data-plugin-parallax
        data-plugin-options="{'speed': 1.5, 'parallaxHeight': '100%', 'offset': 70}"
        data-image-src="images/parallax/parallax-corporate-14-2.jpg">
        <div class="container container-xl-custom">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-5 col-xl-6 text-center pe-5 mb-5 mb-md-0 appear-animation"
                    data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400">
                    <img src="images/smartphone-corporate-14-2.png" class="img-fluid" alt="" />
                </div>
                <div class="col-md-6 col-lg-7 col-xl-6 appear-animation" data-appear-animation="fadeInLeftShorter"
                    data-appear-animation-delay="200">
                    <span class="font-weight-bold text-color-dark opacity-8 text-4">EXCLUSIVE</span>
                    <h2 class="font-weight-bold text-9 mb-4">Customizable Style Switcher</h2>
                    <ul class="list list-icons pb-2 mb-4">
                        <li><i class="fas fa-caret-right top-6"></i> <span class="text-4">Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit.</span></li>
                        <li><i class="fas fa-caret-right top-6"></i> <span class="text-4">Ipsum dolor sit amet,
                                consectetur adipiscing elit.</span></li>
                        <li><i class="fas fa-caret-right top-6"></i> <span class="text-4">Dolor sit amet, lorem ipsum
                                consectetur adipiscing elit.</span></li>
                    </ul>
                    <a href="#" class="btn btn-primary font-weight-semibold rounded-0 btn-px-5 py-3 text-2">LEARN
                        MORE</a>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-height-3 section-parallax bg-color-grey-scale-1 border-0 m-0 appear-animation"
        data-appear-animation="fadeIn" data-plugin-parallax
        data-plugin-options="{'speed': 1.5, 'parallaxHeight': '100%', 'offset': 70}"
        data-image-src="images/parallax/parallax-corporate-14-3.jpg">
        <div class="container container-xl-custom">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-7 order-2 order-md-1 appear-animation" data-appear-animation="fadeInRightShorter"
                    data-appear-animation-delay="200">
                    <span class="font-weight-bold text-color-dark opacity-8 text-4">MODERN</span>
                    <h2 class="font-weight-bold text-9 mb-4">Mobile Advanced Apps</h2>
                    <ul class="list list-icons pb-2 mb-4">
                        <li><i class="fas fa-caret-right top-6"></i> <span class="text-4">Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit.</span></li>
                        <li><i class="fas fa-caret-right top-6"></i> <span class="text-4">Ipsum dolor sit amet,
                                consectetur adipiscing elit.</span></li>
                        <li><i class="fas fa-caret-right top-6"></i> <span class="text-4">Dolor sit amet, lorem ipsum
                                consectetur adipiscing elit.</span></li>
                    </ul>
                    <a href="#" class="btn btn-primary font-weight-semibold rounded-0 btn-px-5 py-3 text-2">LEARN
                        MORE</a>
                </div>
                <div class="col-md-4 text-center text-md-start order-1 order-md-2 mb-5 mb-md-0 me-lg-5 appear-animation"
                    data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                    <img src="images/smartphone-corporate-14-3.png" class="img-fluid" alt="" />
                </div>
            </div>
        </div>
    </section>

    <section
        class="section section-height-5 section-background overlay overlay-show overlay-op-9 border-0 m-0 appear-animation"
        data-appear-animation="fadeIn"
        style="background-image: url(images/bg-corporate-14-1.jpg); background-size: cover; background-position: center;">
        <div class="container container-xl-custom my-5">
            <div class="row justify-content-center">
                <div class="col-md-10 col-xl-9 text-center">
                    <h2 class="font-weight-bold text-color-light text-11 mb-4 appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">Get in touch and learn
                        how we can help</h2>
                    <p class="font-weight-light text-color-light line-height-9 text-4 opacity-7 mb-5 appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">Lorem ipsum dolor sit
                        amet, consectetur adipiscing elit. Cras volutpat id sapien ac varius. Fusce hendrerit ligula a
                        consectetur ullamcorper. Vestibulum varius pharetra lorem.</p>
                    <a href="#"
                        class="d-inline-flex align-items-center btn btn-primary font-weight-semibold px-5 btn-py-3 text-3 rounded appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="550">GET STARTED NOW <i
                            class="fa fa-arrow-right ms-2 ps-1 text-5"></i></a>
                </div>
            </div>
        </div>
    </section>

    <div class="container container-xl-custom py-5 my-5">
        <div class="row mb-3">
            <div class="col text-center">
                <span class="font-weight-bold text-color-dark opacity-8 text-4">OUR BLOG</span>
                <h2 class="font-weight-semibold text-9 mb-3">What's happening</h2>
                <p class="text-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="card border-0">
                    <div class="card-body px-0 py-5">
                        <h4 class="font-weight-semibold text-5 line-height-3 ls-0 mb-3"><a href="#"
                                class="text-dark text-color-hover-primary text-decoration-none">Lorem ipsum dolor sit
                                amet, consectetur</a></h4>
                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta...
                        </p>
                        <div class="d-flex align-items-center">
                            <img src="images/team/team-1.jpg" class="img-fluid rounded-circle me-2" width="25" alt="" />
                            <strong class="text-color-dark text-2">by John Doe</strong>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card border-0">
                    <div class="card-body px-0 py-5">
                        <h4 class="font-weight-semibold text-5 line-height-3 ls-0 mb-3"><a href="#"
                                class="text-dark text-color-hover-primary text-decoration-none">Lorem ipsum dolor sit
                                amet, consectetur</a></h4>
                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta...
                        </p>
                        <div class="d-flex align-items-center">
                            <img src="images/team/team-2.jpg" class="img-fluid rounded-circle me-2" width="25" alt="" />
                            <strong class="text-color-dark text-2">by Jessica Doe</strong>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card border-0">
                    <div class="card-body px-0 py-5">
                        <h4 class="font-weight-semibold text-5 line-height-3 ls-0 mb-3"><a href="#"
                                class="text-dark text-color-hover-primary text-decoration-none">Lorem ipsum dolor sit
                                amet, consectetur</a></h4>
                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta...
                        </p>
                        <div class="d-flex align-items-center">
                            <img src="images/team/team-3.jpg" class="img-fluid rounded-circle me-2" width="25" alt="" />
                            <strong class="text-color-dark text-2">by John Doe</strong>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card border-0">
                    <div class="card-body px-0 py-5">
                        <h4 class="font-weight-semibold text-5 line-height-3 ls-0 mb-3"><a href="#"
                                class="text-dark text-color-hover-primary text-decoration-none">Lorem ipsum dolor sit
                                amet, consectetur</a></h4>
                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta...
                        </p>
                        <div class="d-flex align-items-center">
                            <img src="images/team/team-4.jpg" class="img-fluid rounded-circle me-2" width="25" alt="" />
                            <strong class="text-color-dark text-2">by Jennifer Doe</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection