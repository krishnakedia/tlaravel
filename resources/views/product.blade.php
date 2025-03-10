@extends('user_layout.main')
@section('main-section')
    <div class="ltn__breadcrumb-area ltn__breadcrumb-area-2 ltn__breadcrumb-color-white bg-overlay-theme-black-90 bg-image"
        data-bg="{{ url('/') }}/user_asset/img/bg/9.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
                        <div class="section-title-area ltn__section-title-2">
                            <h6 class="section-subtitle ltn__secondary-color">// Welcome to our company</h6>
                            <h1 class="section-title white-color">Product</h1>
                        </div>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li>Product Details</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="ltn__blog-area pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2 text-center">
                        <h1 class="section-title white-color---">Potato</h1>
                    </div>
                </div>
            </div>
            <div class="row  ltn__blog-slider-one-active slick-arrow-1 ltn__blog-item-3-normal">
                <!-- Blog Item -->
                <div class="col-lg-12">
                    <div class="ltn__blog-item ltn__blog-item-3">
                        <div class="ltn__blog-img">
                            <a href="{{ url('/details') }}"><img src="{{ url('/') }}/user_asset/img/potato.webp"
                                    width="100%" alt="#"></a>
                        </div>
                        <div class="ltn__blog-brief">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <!-- <li class="ltn__blog-author">
                                                                                                  <a href="#"><i class="far fa-user"></i>by: Admin</a>
                                                                                              </li>
                                                                                              <li class="ltn__blog-tags">
                                                                                                  <a href="#"><i class="fas fa-tags"></i>Services</a>
                                                                                              </li> -->
                                </ul>
                            </div>
                            <h3 class="ltn__blog-title"><a href="{{ url('/details') }}">Fresh Fruits</a></h3>
                            <div class="ltn__blog-meta-btn">
                                <!-- <div class="ltn__blog-meta">
                                                                                              <ul>
                                                                                                  <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>June 24, 2020</li>
                                                                                              </ul>
                                                                                          </div> -->
                                <div class="ltn__blog-btn">
                                    <a href="{{ url('/details') }}">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Blog Item -->
                <div class="col-lg-12">
                    <div class="ltn__blog-item ltn__blog-item-3">
                        <div class="ltn__blog-img">
                            <a href="{{ url('/details') }}"><img src="{{ url('/') }}/user_asset/img/potato12.png"
                                    width="100%" alt="#"></a>
                        </div>
                        <div class="ltn__blog-brief">
                            <!-- <div class="ltn__blog-meta">
                                                                                          <ul>
                                                                                              <li class="ltn__blog-author">
                                                                                                  <a href="#"><i class="far fa-user"></i>by: Admin</a>
                                                                                              </li>
                                                                                              <li class="ltn__blog-tags">
                                                                                                  <a href="#"><i class="fas fa-tags"></i>Services</a>
                                                                                              </li>
                                                                                          </ul>
                                                                                      </div> -->
                            <h3 class="ltn__blog-title"><a href="{{ url('/details') }}">Herbs & Seasonings</a></h3>
                            <div class="ltn__blog-meta-btn">
                                <!-- <div class="ltn__blog-meta">
                                                                                              <ul>
                                                                                                  <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>July 23, 2020</li>
                                                                                              </ul>
                                                                                          </div> -->
                                <div class="ltn__blog-btn">
                                    <a href="{{ url('/details') }}">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Blog Item -->
                <div class="col-lg-12">
                    <div class="ltn__blog-item ltn__blog-item-3">
                        <div class="ltn__blog-img">
                            <a href="{{ url('/details') }}"><img src="{{ url('/') }}/user_asset/img/potato13.jpg"
                                    width="100%" alt="#"></a>
                        </div>
                        <div class="ltn__blog-brief">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <!-- <li class="ltn__blog-author">
                                                                                                  <a href="#"><i class="far fa-user"></i>by: Admin</a>
                                                                                              </li>
                                                                                              <li class="ltn__blog-tags">
                                                                                                  <a href="#"><i class="fas fa-tags"></i>Services</a>
                                                                                              </li> -->
                                </ul>
                            </div>
                            <h3 class="ltn__blog-title"><a href="{{ url('/details') }}">Organic Fruits & Vegetables</a>
                            </h3>
                            <div class="ltn__blog-meta-btn">
                                <!-- <div class="ltn__blog-meta">
                                                                                              <ul>
                                                                                                  <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>June 24, 2020</li>
                                                                                              </ul>
                                                                                          </div> -->
                                <div class="ltn__blog-btn">
                                    <a href="{{ url('/details') }}">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Blog Item -->
                <div class="col-lg-12">
                    <div class="ltn__blog-item ltn__blog-item-3">
                        <div class="ltn__blog-img">
                            <a href="{{ url('/details') }}"><img src="{{ url('/') }}/user_asset/img/potato.webp"
                                    alt="#"></a>
                        </div>
                        <div class="ltn__blog-brief">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <!-- <li class="ltn__blog-author">
                                                                                                  <a href="#"><i class="far fa-user"></i>by: Admin</a>
                                                                                              </li>
                                                                                              <li class="ltn__blog-tags">
                                                                                                  <a href="#"><i class="fas fa-tags"></i>Services</a>
                                                                                              </li> -->
                                </ul>
                            </div>
                            <h3 class="ltn__blog-title"><a href="{{ url('/details') }}">Exotic Fruits & Veggies</a></h3>
                            <div class="ltn__blog-meta-btn">
                                <!-- <div class="ltn__blog-meta">
                                                                                              <ul>
                                                                                                  <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>June 24, 2020</li>
                                                                                              </ul>
                                                                                          </div> -->
                                <div class="ltn__blog-btn">
                                    <a href="{{ url('/details') }}">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Blog Item -->
                <div class="col-lg-12">
                    <div class="ltn__blog-item ltn__blog-item-3">
                        <div class="ltn__blog-img">
                            <a href="{{ url('/details') }}"><img src="{{ url('/') }}/user_asset/img/potato.webp"
                                    alt="#"></a>
                        </div>
                        <div class="ltn__blog-brief">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <!-- <li class="ltn__blog-author">
                                                                                                  <a href="#"><i class="far fa-user"></i>by: Admin</a>
                                                                                              </li>
                                                                                              <li class="ltn__blog-tags">
                                                                                                  <a href="#"><i class="fas fa-tags"></i>Services</a>
                                                                                              </li> -->
                                </ul>
                            </div>
                            <h3 class="ltn__blog-title"><a href="{{ url('/details') }}">Flower Bouquets, Bunches</a></h3>
                            <div class="ltn__blog-meta-btn">
                                <!-- <div class="ltn__blog-meta">
                                                                                              <ul>
                                                                                                  <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>June 24, 2020</li>
                                                                                              </ul>
                                                                                          </div> -->
                                <div class="ltn__blog-btn">
                                    <a href="{{ url('/details') }}">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
            </div>
        </div>
    </div>
    <!-- Category -->
@endsection
