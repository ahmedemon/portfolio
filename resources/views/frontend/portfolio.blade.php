<section class="my-lg-5 p-lg-5" id="section-portfolio">

    <div class="row pt-lg-5">
        <div class="col-lg-12">
            <p class="lead mb-0 wow animate__animated animate__fadeInUp" data-wow-duration="0.8s" style="letter-spacing: 6px !important;"><small>MY&nbsp;WORK</small></p>
            <div class="d-flex justify-content-center">
                <p class="display-4 text-center wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"><small>Recent Work</small> <b class="text-danger">!</b></p>
                <div class="cbp-search cbp-l-filters-right pt-3 wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                    <div class="form-group">
                        <input id="js-search-blog-posts" class="form-control rounded-0" type="text" placeholder="Search..." autocomplete="off" data-search=".cbp-l-grid-blog-title" class="cbp-search-input bg-transparent text-white">
                        <div class="cbp-search-icon text-white h-100"></div>
                        <div class="cbp-search-nothing">No results match for <i></i> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container w-75">

        <div class="row my-lg-3 justify-content-center">
            <div class="clearfix">
                <div id="js-filters-blog-posts" class="cbp-l-filters-list cbp-l-filters-left menu-menu">
                    <div data-filter="*" class="cbp-filter-item-active cbp-filter-item border-0 rounded-0 text-dark wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">All (<div class="cbp-filter-counter"></div>)</div>

                    <div data-filter=".graphic_design" class="cbp-filter-item border-0 rounded-0 text-dark wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">Graphic Design (<div class="cbp-filter-counter"></div>)</div>

                    <div data-filter=".web_design" class="cbp-filter-item border-0 rounded-0 text-dark wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">Web Design (<div class="cbp-filter-counter"></div>)</div>

                    <div data-filter=".apps_development" class="cbp-filter-item border-0 rounded-0 text-dark wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">Apps Development (<div class="cbp-filter-counter"></div>)</div>

                    <div data-filter=".web_application" class="cbp-filter-item border-right border-0 rounded-0 text-dark wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">Web Application (<div class="cbp-filter-counter"></div>)</div>
                </div>

            </div>
            <!-- body -->
            <div class="col-md-12 px-0">
                <div id="js-grid-blog-posts" class="cbp wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s">
                    <div id="myTable">
                        <div class="cbp-item graphic_design px-lg-0">
                            <div class="item-inner border inner-image">
                                <img src="{{ asset('frontend/images/profile.jpg') }}" alt="" class="image">
                                <div class="overlay" class="btn btn-primary" data-toggle="modal" data-target="#graphic">
                                    <p class="cbp-l-grid-blog-title m-0 text-center">Banner Design</p>
                                </div>
                            </div>
                        </div>
                        <div class="cbp-item web_design px-lg-0">
                            <div class="item-inner border inner-image">
                                <img src="{{ asset('frontend/images/profile.jpg') }}" alt="" class="image">
                                <div class="overlay" class="btn btn-primary" data-toggle="modal" data-target="#web_des">
                                    <p class="cbp-l-grid-blog-title m-0 text-center">Web Design</p>
                                </div>
                            </div>
                        </div>
                        <div class="cbp-item apps_development px-lg-0">
                            <div class="item-inner border inner-image">
                                <img src="{{ asset('frontend/images/profile.jpg') }}" alt="" class="image">
                                <div class="overlay" class="btn btn-primary" data-toggle="modal" data-target="#web_dev">
                                    <p class="cbp-l-grid-blog-title m-0 text-center">Apps Development</p>
                                </div>
                            </div>
                        </div>
                        <div class="cbp-item web_application px-lg-0">
                            <div class="item-inner border inner-image">
                                <img src="{{ asset('frontend/images/profile.jpg') }}" alt="" class="image">
                                <div class="overlay" class="btn btn-primary" data-toggle="modal" data-target="#web_app">
                                    <p class="cbp-l-grid-blog-title m-0 text-center">Web Application</p>
                                </div>
                            </div>
                        </div>
                        <div class="cbp-item web_application px-lg-0">
                            <div class="item-inner border inner-image">
                                <img src="{{ asset('frontend/images/profile.jpg') }}" alt="" class="image">
                                <div class="overlay" class="btn btn-primary" data-toggle="modal" data-target="#web_app">
                                    <p class="cbp-l-grid-blog-title m-0 text-center">POS System</p>
                                </div>
                            </div>
                        </div>
                        <div class="cbp-item graphic_design px-lg-0">
                            <div class="item-inner border inner-image">
                                <img src="{{ asset('frontend/images/profile.jpg') }}" alt="" class="image">
                                <div class="overlay" class="btn btn-primary" data-toggle="modal" data-target="#graphic">
                                    <p class="cbp-l-grid-blog-title m-0 text-center">Logo Design</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- body -->
        </div>

    </div>

</section>
@include('frontend.modal')
