@extends('frontend.layouts.lavaro')
@section('title')
    Trang chủ
@endsection
@section('content')
<div class="slider-area an-1 hm-1">
    <!-- slider -->
    <div class="bend niceties preview-2">
        <div id="ensign-nivoslider" class="slides">
            <img src="{{ asset('frontend_assets/img/img_product/fullwidth1.jpg')}}" width="100%" height="280px" alt="" title="#slider-direction-1"  />
            <img src="{{ asset('frontend_assets/img/img_product/fullwidth2.jpg')}}"  width="100%" height="280px" alt="" title="#slider-direction-2"  />
            <img src="{{ asset('frontend_assets/img/img_product/fullwidth3.jpg')}}" width="100%" height="280px" alt="" title="#slider-direction-3"  />
            <img src="{{ asset('frontend_assets/img/img_product/fullwidth4.jpg')}}" width="100%" height="280px" alt="" title="#slider-direction-3"  />
            <img src="{{ asset('frontend_assets/img/img_product/fullwidth5.jpg')}}" width="100%" height="280px" alt="" title="#slider-direction-3"  />
        </div>

    </div>
    <!-- slider end-->
</div>
<!-- end home slider -->
<!-- product section start -->
<div class="our-product-area">
    <div class="container">
        <!-- area title start -->
        <div class="area-title">
            <h2>Điện Thoại Nổi bật</h2>
        </div>
        <!-- area title end -->
        <!-- our-product area start -->
        <div class="row">
            <div class="col-md-12">
                <div class="features-tab">
                    <!-- Nav tabs -->

                    <!-- Tab pans -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="home">
                            <div class="row">
                                <div class="features-curosel">
                                    <div class="col-lg-12 col-md-12">
                                        <!-- single-product start -->
                                        <div class="single-product first-sale">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-image" src="{{ asset('frontend_assets/img/img_product/vivo-s1-pro.jpg')}}" alt="" />
                                                    <img class="secondary-image" src="{{ asset('frontend_assets/img/img_product/vivo-v17-pro-blue-noo-600x600.jpg')}}" alt="" />
                                                </a>

                                                <div class="actions">
                                                    <div class="action-buttons">
                                                        <div class="add-to-links">
                                                            <div class="add-to-wishlist">
                                                                <a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                            </div>
                                                            <div class="compare-button">
                                                                <a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="quickviewbtn">
                                                            <a href="#" title="Add to "><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="product-content">
                                                <h2 class="product-name"><a href="#">Vivo V17 Pro</a></h2>
                                                <p style="color: red;font-weight: 600">9.490.000 Đ</p>
                                            </div>
                                        </div>
                                        <!-- single-product end -->
                                        <!-- single-product start -->
                                        <div class="single-product">
                                            <span class="sale-text">Sale</span>
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-image" src="{{ asset('frontend_assets/img/img_product/iphone-11-pro-max-256gb-green-600x600.jpg')}}" alt="" />
                                                    <img class="secondary-image" src="{{ asset('frontend_assets/img/img_product/iphone-11-pro-256gb-black-600x600.jpg')}}" alt="" />
                                                </a>

                                                <div class="actions">
                                                    <div class="action-buttons">
                                                        <div class="add-to-links">
                                                            <div class="add-to-wishlist">
                                                                <a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                            </div>
                                                            <div class="compare-button">
                                                                <a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="quickviewbtn">
                                                            <a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="product-content">
                                                <h2 class="product-name"><a href="#">Iphone 11 Pro Max 256G</a></h2>
                                                <p style="color: red;font-weight: 600">43.990.000 Đ</p>
                                            </div>
                                        </div>
                                        <!-- single-product end -->
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <!-- single-product start -->
                                        <div class="single-product first-sale">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-image" src="{{asset('frontend_assets/img/img_product/vivo-s1-pro.jpg')}}" alt="" />
                                                    <img class="secondary-image" src="{{asset('frontend_assets/img/img_product/vivo-v17-pro-blue-noo-600x600.jpg')}}" alt="" />
                                                </a>

                                                <div class="actions">
                                                    <div class="action-buttons">
                                                        <div class="add-to-links">
                                                            <div class="add-to-wishlist">
                                                                <a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                            </div>
                                                            <div class="compare-button">
                                                                <a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="quickviewbtn">
                                                            <a href="#" title="Add to "><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="product-content">
                                                <h2 class="product-name"><a href="#">Vivo V17 Pro</a></h2>
                                                <p style="color: red;font-weight: 600">9.490.000 Đ</p>
                                            </div>
                                        </div>
                                        <!-- single-product end -->
                                        <!-- single-product start -->
                                        <div class="single-product">
                                            <span class="sale-text">Sale</span>
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-image" src="{{asset('frontend_assets/img/img_product/iphone-11-pro-max-256gb-green-600x600.jpg')}}" alt="" />
                                                    <img class="secondary-image" src="{{asset('frontend_assets/img/img_product/iphone-11-pro-256gb-black-600x600.jpg')}}" alt="" />
                                                </a>

                                                <div class="actions">
                                                    <div class="action-buttons">
                                                        <div class="add-to-links">
                                                            <div class="add-to-wishlist">
                                                                <a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                            </div>
                                                            <div class="compare-button">
                                                                <a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="quickviewbtn">
                                                            <a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="product-content">
                                                <h2 class="product-name"><a href="#">Iphone 11 Pro Max 256G</a></h2>
                                                <p style="color: red;font-weight: 600">43.990.000 Đ</p>
                                            </div>
                                        </div>
                                        <!-- single-product end -->
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <!-- single-product start -->
                                        <div class="single-product first-sale">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-image" src="{{ asset('frontend_assets/img/img_product/vivo-s1-pro.jpg')}}" alt="" />
                                                    <img class="secondary-image" src="{{ asset('frontend_assets/img/img_product/vivo-v17-pro-blue-noo-600x600.jpg')}}" alt="" />
                                                </a>

                                                <div class="actions">
                                                    <div class="action-buttons">
                                                        <div class="add-to-links">
                                                            <div class="add-to-wishlist">
                                                                <a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                            </div>
                                                            <div class="compare-button">
                                                                <a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="quickviewbtn">
                                                            <a href="#" title="Add to "><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="product-content">
                                                <h2 class="product-name"><a href="#">Vivo V17 Pro</a></h2>
                                                <p style="color: red;font-weight: 600">9.490.000 Đ</p>
                                            </div>
                                        </div>
                                        <!-- single-product end -->
                                        <!-- single-product start -->
                                        <div class="single-product">
                                            <span class="sale-text">Sale</span>
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-image" src="{{asset('frontend_assets/img/img_product/iphone-11-pro-max-256gb-green-600x600.jpg')}}" alt="" />
                                                    <img class="secondary-image" src="{{asset('frontend_assets/img/img_product/iphone-11-pro-256gb-black-600x600.jpg')}}" alt="" />
                                                </a>

                                                <div class="actions">
                                                    <div class="action-buttons">
                                                        <div class="add-to-links">
                                                            <div class="add-to-wishlist">
                                                                <a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                            </div>
                                                            <div class="compare-button">
                                                                <a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="quickviewbtn">
                                                            <a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="product-content">
                                                <h2 class="product-name"><a href="#">Iphone 11 Pro Max 256G</a></h2>
                                                <p style="color: red;font-weight: 600">43.990.000 Đ</p>
                                            </div>
                                        </div>
                                        <!-- single-product end -->
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <!-- single-product start -->
                                        <div class="single-product first-sale">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-image" src="{{asset('frontend_assets/img/img_product/vivo-s1-pro.jpg')}}" alt="" />
                                                    <img class="secondary-image" src="{{asset('frontend_assets/img/img_product/vivo-v17-pro-blue-noo-600x600.jpg')}}" alt="" />
                                                </a>

                                                <div class="actions">
                                                    <div class="action-buttons">
                                                        <div class="add-to-links">
                                                            <div class="add-to-wishlist">
                                                                <a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                            </div>
                                                            <div class="compare-button">
                                                                <a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="quickviewbtn">
                                                            <a href="#" title="Add to "><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="product-content">
                                                <h2 class="product-name"><a href="#">Vivo V17 Pro</a></h2>
                                                <p style="color: red;font-weight: 600">9.490.000 Đ</p>
                                            </div>
                                        </div>
                                        <!-- single-product end -->
                                        <!-- single-product start -->
                                        <div class="single-product">
                                            <span class="sale-text">Sale</span>
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-image" src="{{asset('frontend_assets/img/img_product/iphone-11-pro-max-256gb-green-600x600.jpg')}}" alt="" />
                                                    <img class="secondary-image" src="{{asset('frontend_assets/img/img_product/iphone-11-pro-256gb-black-600x600.jpg')}}" alt="" />
                                                </a>

                                                <div class="actions">
                                                    <div class="action-buttons">
                                                        <div class="add-to-links">
                                                            <div class="add-to-wishlist">
                                                                <a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                            </div>
                                                            <div class="compare-button">
                                                                <a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="quickviewbtn">
                                                            <a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="product-content">
                                                <h2 class="product-name"><a href="#">Iphone 11 Pro Max 256G</a></h2>
                                                <p style="color: red;font-weight: 600">43.990.000 Đ</p>
                                            </div>
                                        </div>
                                        <!-- single-product end -->
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <!-- single-product start -->
                                        <div class="single-product first-sale">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-image" src="{{ asset('frontend_assets/img/img_product/vivo-s1-pro.jpg')}}" alt="" />
                                                    <img class="secondary-image" src="{{ asset('frontend_assets/img/img_product/vivo-v17-pro-blue-noo-600x600.jpg')}}" alt="" />
                                                </a>

                                                <div class="actions">
                                                    <div class="action-buttons">
                                                        <div class="add-to-links">
                                                            <div class="add-to-wishlist">
                                                                <a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                            </div>
                                                            <div class="compare-button">
                                                                <a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="quickviewbtn">
                                                            <a href="#" title="Add to "><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="product-content">
                                                <h2 class="product-name"><a href="#">Vivo V17 Pro</a></h2>
                                                <p style="color: red;font-weight: 600">9.490.000 Đ</p>
                                            </div>
                                        </div>
                                        <!-- single-product end -->
                                        <!-- single-product start -->
                                        <div class="single-product">
                                            <span class="sale-text">Sale</span>
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-image" src="{{ asset('frontend_assets/img/img_product/iphone-11-pro-max-256gb-green-600x600.jpg')}}" alt="" />
                                                    <img class="secondary-image" src="{{ asset('frontend_assets/img/img_product/iphone-11-pro-256gb-black-600x600.jpg')}}" alt="" />
                                                </a>

                                                <div class="actions">
                                                    <div class="action-buttons">
                                                        <div class="add-to-links">
                                                            <div class="add-to-wishlist">
                                                                <a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                            </div>
                                                            <div class="compare-button">
                                                                <a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="quickviewbtn">
                                                            <a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="product-content">
                                                <h2 class="product-name"><a href="#">Iphone 11 Pro Max 256G</a></h2>
                                                <p style="color: red;font-weight: 600">43.990.000 Đ</p>
                                            </div>
                                        </div>
                                        <!-- single-product end -->
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <!-- single-product start -->
                                        <div class="single-product first-sale">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-image" src="{{ asset('frontend_assets/img/img_product/vivo-s1-pro.jpg')}}" alt="" />
                                                    <img class="secondary-image" src="{{ asset('frontend_assets/img/img_product/vivo-v17-pro-blue-noo-600x600.jpg')}}" alt="" />
                                                </a>

                                                <div class="actions">
                                                    <div class="action-buttons">
                                                        <div class="add-to-links">
                                                            <div class="add-to-wishlist">
                                                                <a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                            </div>
                                                            <div class="compare-button">
                                                                <a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="quickviewbtn">
                                                            <a href="#" title="Add to "><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="product-content">
                                                <h2 class="product-name"><a href="#">Vivo V17 Pro</a></h2>
                                                <p style="color: red;font-weight: 600">9.490.000 Đ</p>
                                            </div>
                                        </div>
                                        <!-- single-product end -->
                                        <!-- single-product start -->
                                        <div class="single-product">
                                            <span class="sale-text">Sale</span>
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-image" src="{{ asset('frontend_assets/img/img_product/iphone-11-pro-max-256gb-green-600x600.jpg')}}" alt="" />
                                                    <img class="secondary-image" src="{{ asset('frontend_assets/img/img_product/iphone-11-pro-256gb-black-600x600.jpg')}}" alt="" />
                                                </a>

                                                <div class="actions">
                                                    <div class="action-buttons">
                                                        <div class="add-to-links">
                                                            <div class="add-to-wishlist">
                                                                <a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                            </div>
                                                            <div class="compare-button">
                                                                <a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="quickviewbtn">
                                                            <a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="product-content">
                                                <h2 class="product-name"><a href="#">Iphone 11 Pro Max 256G</a></h2>
                                                <p style="color: red;font-weight: 600">43.990.000 Đ</p>
                                            </div>
                                        </div>
                                        <!-- single-product end -->
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <!-- single-product start -->
                                        <div class="single-product first-sale">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-image" src="{{ asset('frontend_assets/img/img_product/vivo-s1-pro.jpg')}}" alt="" />
                                                    <img class="secondary-image" src="{{ asset('frontend_assets/img/img_product/vivo-v17-pro-blue-noo-600x600.jpg')}}" alt="" />
                                                </a>

                                                <div class="actions">
                                                    <div class="action-buttons">
                                                        <div class="add-to-links">
                                                            <div class="add-to-wishlist">
                                                                <a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                            </div>
                                                            <div class="compare-button">
                                                                <a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="quickviewbtn">
                                                            <a href="#" title="Add to "><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="product-content">
                                                <h2 class="product-name"><a href="#">Vivo V17 Pro</a></h2>
                                                <p style="color: red;font-weight: 600">9.490.000 Đ</p>
                                            </div>
                                        </div>
                                        <!-- single-product end -->
                                        <!-- single-product start -->
                                        <div class="single-product">
                                            <span class="sale-text">Sale</span>
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-image" src="{{ asset('frontend_assets/img/img_product/iphone-11-pro-max-256gb-green-600x600.jpg')}}" alt="" />
                                                    <img class="secondary-image" src="{{ asset('frontend_assets/img/img_product/iphone-11-pro-256gb-black-600x600.jpg')}}" alt="" />
                                                </a>

                                                <div class="actions">
                                                    <div class="action-buttons">
                                                        <div class="add-to-links">
                                                            <div class="add-to-wishlist">
                                                                <a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                            </div>
                                                            <div class="compare-button">
                                                                <a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="quickviewbtn">
                                                            <a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="product-content">
                                                <h2 class="product-name"><a href="#">Iphone 11 Pro Max 256G</a></h2>
                                                <p style="color: red;font-weight: 600">43.990.000 Đ</p>
                                            </div>
                                        </div>
                                        <!-- single-product end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- our-product area end -->
    </div>
</div>
<!-- product section end -->
<!-- banner-area start -->
<div class="banner-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="#"><img src="{{ asset('frontend_assets/img/img_product/online-6-1200-75-1200x75.png"')}}"alt=""/></a>
            </div>

        </div>
    </div>
</div>
<!-- banner-area end -->
<!-- product section start -->
<div class="our-product-area new-product">
    <div class="container">
        <div class="area-title">
            <h2>Laptop nổi bật</h2>
        </div>
        <!-- our-product area start -->
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="features-curosel">
                        <!-- single-product start -->
                        <div class="col-lg-12 col-md-12">
                            <!-- single-product start -->
                            <div class="single-product first-sale">
                                <div class="product-img">
                                    <a href="#">
                                        <img class="primary-image" src="{{ asset('frontend_assets/img/img_product/hp-14s-amd-ryzen-3-3200u-4gb-1tb-win10-7vh92pa-15-600x600.jpg')}}" alt="" />
                                        <img class="secondary-image" src="{{ asset('frontend_assets/img/img_product/hp-15-da0359tu-n4417-4gb-500gb-win10-6kd00pa-15-600x600.jpg')}}" alt="" />
                                    </a>

                                    <div class="actions">
                                        <div class="action-buttons">
                                            <div class="add-to-links">
                                                <div class="add-to-wishlist">
                                                    <a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                </div>
                                                <div class="compare-button">
                                                    <a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
                                                </div>
                                            </div>
                                            <div class="quickviewbtn">
                                                <a href="#" title="Add to "><i class="fa fa-search-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="product-content">
                                    <h2 class="product-name"><a href="#">Vivo V17 Pro</a></h2>
                                    <p style="color: red;font-weight: 600">9.490.000 Đ</p>
                                </div>
                            </div>
                            <!-- single-product end -->
                            <!-- single-product start -->
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <!-- single-product start -->
                            <div class="single-product first-sale">
                                <div class="product-img">
                                    <a href="#">
                                        <img class="primary-image" src="{{ asset('frontend_assets/img/img_product/hp-14s-amd-ryzen-3-3200u-4gb-1tb-win10-7vh92pa-15-600x600.jpg')}}" alt="" />
                                        <img class="secondary-image" src="{{ asset('frontend_assets/img/img_product/hp-15-da0359tu-n4417-4gb-500gb-win10-6kd00pa-15-600x600.jpg')}}" alt="" />
                                    </a>

                                    <div class="actions">
                                        <div class="action-buttons">
                                            <div class="add-to-links">
                                                <div class="add-to-wishlist">
                                                    <a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                </div>
                                                <div class="compare-button">
                                                    <a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
                                                </div>
                                            </div>
                                            <div class="quickviewbtn">
                                                <a href="#" title="Add to "><i class="fa fa-search-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="product-content">
                                    <h2 class="product-name"><a href="#">Vivo V17 Pro</a></h2>
                                    <p style="color: red;font-weight: 600">9.490.000 Đ</p>
                                </div>
                            </div>
                            <!-- single-product end -->
                            <!-- single-product start -->
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <!-- single-product start -->
                            <div class="single-product first-sale">
                                <div class="product-img">
                                    <a href="#">
                                        <img class="primary-image" src="{{ asset('frontend_assets/img/img_product/hp-14s-amd-ryzen-3-3200u-4gb-1tb-win10-7vh92pa-15-600x600.jpg')}}" alt="" />
                                        <img class="secondary-image" src="{{ asset('frontend_assets/img/img_product/hp-15-da0359tu-n4417-4gb-500gb-win10-6kd00pa-15-600x600.jpg')}}" alt="" />
                                    </a>

                                    <div class="actions">
                                        <div class="action-buttons">
                                            <div class="add-to-links">
                                                <div class="add-to-wishlist">
                                                    <a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                </div>
                                                <div class="compare-button">
                                                    <a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
                                                </div>
                                            </div>
                                            <div class="quickviewbtn">
                                                <a href="#" title="Add to "><i class="fa fa-search-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="product-content">
                                    <h2 class="product-name"><a href="#">Vivo V17 Pro</a></h2>
                                    <p style="color: red;font-weight: 600">9.490.000 Đ</p>
                                </div>
                            </div>
                            <!-- single-product end -->
                            <!-- single-product start -->
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <!-- single-product start -->
                            <div class="single-product first-sale">
                                <div class="product-img">
                                    <a href="#">
                                        <img class="primary-image" src="{{ asset('frontend_assets/img/img_product/hp-14s-amd-ryzen-3-3200u-4gb-1tb-win10-7vh92pa-15-600x600.jpg')}}" alt="" />
                                        <img class="secondary-image" src="{{ asset('frontend_assets/img/img_product/hp-15-da0359tu-n4417-4gb-500gb-win10-6kd00pa-15-600x600.jpg')}}" alt="" />
                                    </a>

                                    <div class="actions">
                                        <div class="action-buttons">
                                            <div class="add-to-links">
                                                <div class="add-to-wishlist">
                                                    <a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                </div>
                                                <div class="compare-button">
                                                    <a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
                                                </div>
                                            </div>
                                            <div class="quickviewbtn">
                                                <a href="#" title="Add to "><i class="fa fa-search-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="product-content">
                                    <h2 class="product-name"><a href="#">Vivo V17 Pro</a></h2>
                                    <p style="color: red;font-weight: 600">9.490.000 Đ</p>
                                </div>
                            </div>
                            <!-- single-product end -->
                            <!-- single-product start -->
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <!-- single-product start -->
                            <div class="single-product first-sale">
                                <div class="product-img">
                                    <a href="#">
                                        <img class="primary-image" src="{{ asset('frontend_assets/img/img_product/hp-14s-amd-ryzen-3-3200u-4gb-1tb-win10-7vh92pa-15-600x600.jpg')}}" alt="" />
                                        <img class="secondary-image" src="{{ asset('frontend_assets/img/img_product/hp-15-da0359tu-n4417-4gb-500gb-win10-6kd00pa-15-600x600.jpg')}}" alt="" />
                                    </a>

                                    <div class="actions">
                                        <div class="action-buttons">
                                            <div class="add-to-links">
                                                <div class="add-to-wishlist">
                                                    <a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                </div>
                                                <div class="compare-button">
                                                    <a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
                                                </div>
                                            </div>
                                            <div class="quickviewbtn">
                                                <a href="#" title="Add to "><i class="fa fa-search-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="product-content">
                                    <h2 class="product-name"><a href="#">Vivo V17 Pro</a></h2>
                                    <p style="color: red;font-weight: 600">9.490.000 Đ</p>
                                </div>
                            </div>
                            <!-- single-product end -->
                            <!-- single-product start -->
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <!-- single-product start -->
                            <div class="single-product first-sale">
                                <div class="product-img">
                                    <a href="#">
                                        <img class="primary-image" src="{{ asset('frontend_assets/img/img_product/hp-14s-amd-ryzen-3-3200u-4gb-1tb-win10-7vh92pa-15-600x600.jpg')}}" alt="" />
                                        <img class="secondary-image" src="{{ asset('frontend_assets/img/img_product/hp-15-da0359tu-n4417-4gb-500gb-win10-6kd00pa-15-600x600.jpg')}}" alt="" />
                                    </a>

                                    <div class="actions">
                                        <div class="action-buttons">
                                            <div class="add-to-links">
                                                <div class="add-to-wishlist">
                                                    <a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                </div>
                                                <div class="compare-button">
                                                    <a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
                                                </div>
                                            </div>
                                            <div class="quickviewbtn">
                                                <a href="#" title="Add to "><i class="fa fa-search-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="product-content">
                                    <h2 class="product-name"><a href="#">Vivo V17 Pro</a></h2>
                                    <p style="color: red;font-weight: 600">9.490.000 Đ</p>
                                </div>
                            </div>
                            <!-- single-product end -->
                            <!-- single-product start -->
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- our-product area end -->






    </div>
</div>



{{--//may tinh bang--}}

<div class="our-product-area new-product">
    <div class="container">
        <div class="area-title">
            <h2>Tablet nổi bật</h2>
        </div>
        <!-- our-product area start -->
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="features-curosel">
                        <!-- single-product start -->
                        <div class="col-lg-12 col-md-12">
                            <!-- single-product start -->
                            <div class="single-product first-sale">
                                <div class="product-img">
                                    <a href="#">
                                        <img class="primary-image" src="{{ asset('frontend_assets/img/img_product/ipad-10-2-inch-wifi-cellular-32gb-2019-gold-400x400.jpg')}}" alt="" />
                                        <img class="secondary-image" src="{{ asset('frontend_assets/img/img_product/ipad-10-2-inch-wifi-cellular-32gb-2019-gold-400x400.jpg')}}" alt="" />
                                    </a>

                                    <div class="actions">
                                        <div class="action-buttons">
                                            <div class="add-to-links">
                                                <div class="add-to-wishlist">
                                                    <a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                </div>
                                                <div class="compare-button">
                                                    <a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
                                                </div>
                                            </div>
                                            <div class="quickviewbtn">
                                                <a href="#" title="Add to "><i class="fa fa-search-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="product-content">
                                    <h2 class="product-name"><a href="#">Vivo V17 Pro</a></h2>
                                    <p style="color: red;font-weight: 600">9.490.000 Đ</p>
                                </div>
                            </div>
                            <!-- single-product end -->
                            <!-- single-product start -->
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <!-- single-product start -->
                            <div class="single-product first-sale">
                                <div class="product-img">
                                    <a href="#">
                                        <img class="primary-image" src="{{ asset('frontend_assets/img/img_product/ipad-10-2-inch-wifi-cellular-32gb-2019-gold-400x400.jpg')}}" alt="" />
                                        <img class="secondary-image" src="{{ asset('frontend_assets/img/img_product/ipad-10-2-inch-wifi-cellular-32gb-2019-gold-400x400.jpg')}}" alt="" />
                                    </a>

                                    <div class="actions">
                                        <div class="action-buttons">
                                            <div class="add-to-links">
                                                <div class="add-to-wishlist">
                                                    <a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                </div>
                                                <div class="compare-button">
                                                    <a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
                                                </div>
                                            </div>
                                            <div class="quickviewbtn">
                                                <a href="#" title="Add to "><i class="fa fa-search-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="product-content">
                                    <h2 class="product-name"><a href="#">Vivo V17 Pro</a></h2>
                                    <p style="color: red;font-weight: 600">9.490.000 Đ</p>
                                </div>
                            </div>
                            <!-- single-product end -->
                            <!-- single-product start -->
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <!-- single-product start -->
                            <div class="single-product first-sale">
                                <div class="product-img">
                                    <a href="#">
                                        <img class="primary-image" src="{{ asset('frontend_assets/img/img_product/ipad-10-2-inch-wifi-cellular-32gb-2019-gold-400x400.jpg')}}" alt="" />
                                        <img class="secondary-image" src="{{ asset('frontend_assets/img/img_product/ipad-10-2-inch-wifi-cellular-32gb-2019-gold-400x400.jpg')}}" alt="" />
                                    </a>

                                    <div class="actions">
                                        <div class="action-buttons">
                                            <div class="add-to-links">
                                                <div class="add-to-wishlist">
                                                    <a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                </div>
                                                <div class="compare-button">
                                                    <a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
                                                </div>
                                            </div>
                                            <div class="quickviewbtn">
                                                <a href="#" title="Add to "><i class="fa fa-search-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="product-content">
                                    <h2 class="product-name"><a href="#">Vivo V17 Pro</a></h2>
                                    <p style="color: red;font-weight: 600">9.490.000 Đ</p>
                                </div>
                            </div>
                            <!-- single-product end -->
                            <!-- single-product start -->
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <!-- single-product start -->
                            <div class="single-product first-sale">
                                <div class="product-img">
                                    <a href="#">
                                        <img class="primary-image" src="{{ asset('frontend_assets/img/img_product/ipad-10-2-inch-wifi-cellular-32gb-2019-gold-400x400.jpg')}}" alt="" />
                                        <img class="secondary-image" src="{{ asset('frontend_assets/img/img_product/ipad-10-2-inch-wifi-cellular-32gb-2019-gold-400x400.jpg')}}" alt="" />
                                    </a>

                                    <div class="actions">
                                        <div class="action-buttons">
                                            <div class="add-to-links">
                                                <div class="add-to-wishlist">
                                                    <a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                </div>
                                                <div class="compare-button">
                                                    <a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
                                                </div>
                                            </div>
                                            <div class="quickviewbtn">
                                                <a href="#" title="Add to "><i class="fa fa-search-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="product-content">
                                    <h2 class="product-name"><a href="#">Vivo V17 Pro</a></h2>
                                    <p style="color: red;font-weight: 600">9.490.000 Đ</p>
                                </div>
                            </div>
                            <!-- single-product end -->
                            <!-- single-product start -->
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <!-- single-product start -->
                            <div class="single-product first-sale">
                                <div class="product-img">
                                    <a href="#">
                                        <img class="primary-image" src="{{ asset('frontend_assets/img/img_product/ipad-10-2-inch-wifi-cellular-32gb-2019-gold-400x400.jpg')}}" alt="" />
                                        <img class="secondary-image" src="{{ asset('frontend_assets/img/img_product/ipad-10-2-inch-wifi-cellular-32gb-2019-gold-400x400.jpg')}}" alt="" />
                                    </a>

                                    <div class="actions">
                                        <div class="action-buttons">
                                            <div class="add-to-links">
                                                <div class="add-to-wishlist">
                                                    <a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                </div>
                                                <div class="compare-button">
                                                    <a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
                                                </div>
                                            </div>
                                            <div class="quickviewbtn">
                                                <a href="#" title="Add to "><i class="fa fa-search-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="product-content">
                                    <h2 class="product-name"><a href="#">Vivo V17 Pro</a></h2>
                                    <p style="color: red;font-weight: 600">9.490.000 Đ</p>
                                </div>
                            </div>
                            <!-- single-product end -->
                            <!-- single-product start -->
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <!-- single-product start -->
                            <div class="single-product first-sale">
                                <div class="product-img">
                                    <a href="#">
                                        <img class="primary-image" src="{{ asset('frontend_assets/img/img_product/ipad-10-2-inch-wifi-cellular-32gb-2019-gold-400x400.jpg')}}" alt="" />
                                        <img class="secondary-image" src="{{ asset('frontend_assets/img/img_product/ipad-10-2-inch-wifi-cellular-32gb-2019-gold-400x400.jpg')}}" alt="" />
                                    </a>

                                    <div class="actions">
                                        <div class="action-buttons">
                                            <div class="add-to-links">
                                                <div class="add-to-wishlist">
                                                    <a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                </div>
                                                <div class="compare-button">
                                                    <a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
                                                </div>
                                            </div>
                                            <div class="quickviewbtn">
                                                <a href="#" title="Add to "><i class="fa fa-search-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="product-content">
                                    <h2 class="product-name"><a href="#">Vivo V17 Pro</a></h2>
                                    <p style="color: red;font-weight: 600">9.490.000 Đ</p>
                                </div>
                            </div>
                            <!-- single-product end -->
                            <!-- single-product start -->
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- our-product area end -->






    </div>
</div>

{{--//dong ho--}}

<div class="our-product-area new-product">
    <div class="container">
        <div class="area-title">
            <h2>Đồng hồ nổi bật</h2>
        </div>
        <!-- our-product area start -->
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="features-curosel">
                        <!-- single-product start -->
                        <div class="col-lg-12 col-md-12">
                            <!-- single-product start -->
                            <div class="single-product first-sale">
                                <div class="product-img">
                                    <a href="#">
                                        <img class="primary-image" src="{{ asset('frontend_assets/img/img_product/samsung-galaxy-watch-active-2-44-mm-sillicon-ava-400x400.jpg')}}" alt="" />
                                        <img class="secondary-image" src="{{ asset('frontend_assets/img/img_product/samsung-galaxy-watch-active-2-44-mm-sillicon-ava-400x400.jpg')}}" alt="" />
                                    </a>

                                    <div class="actions">
                                        <div class="action-buttons">
                                            <div class="add-to-links">
                                                <div class="add-to-wishlist">
                                                    <a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                </div>
                                                <div class="compare-button">
                                                    <a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
                                                </div>
                                            </div>
                                            <div class="quickviewbtn">
                                                <a href="#" title="Add to "><i class="fa fa-search-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="product-content">
                                    <h2 class="product-name"><a href="#">Vivo V17 Pro</a></h2>
                                    <p style="color: red;font-weight: 600">9.490.000 Đ</p>
                                </div>
                            </div>
                            <!-- single-product end -->
                            <!-- single-product start -->
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <!-- single-product start -->
                            <div class="single-product first-sale">
                                <div class="product-img">
                                    <a href="#">
                                        <img class="primary-image" src="{{ asset('frontend_assets/img/img_product/samsung-galaxy-watch-active-2-44-mm-sillicon-ava-400x400.jpg')}}" alt="" />
                                        <img class="secondary-image" src="{{ asset('frontend_assets/img/img_product/samsung-galaxy-watch-active-2-44-mm-sillicon-ava-400x400.jpg')}}" alt="" />
                                    </a>

                                    <div class="actions">
                                        <div class="action-buttons">
                                            <div class="add-to-links">
                                                <div class="add-to-wishlist">
                                                    <a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                </div>
                                                <div class="compare-button">
                                                    <a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
                                                </div>
                                            </div>
                                            <div class="quickviewbtn">
                                                <a href="#" title="Add to "><i class="fa fa-search-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="product-content">
                                    <h2 class="product-name"><a href="#">Vivo V17 Pro</a></h2>
                                    <p style="color: red;font-weight: 600">9.490.000 Đ</p>
                                </div>
                            </div>
                            <!-- single-product end -->
                            <!-- single-product start -->
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <!-- single-product start -->
                            <div class="single-product first-sale">
                                <div class="product-img">
                                    <a href="#">
                                        <img class="primary-image" src="{{ asset('frontend_assets/img/img_product/samsung-galaxy-watch-active-2-44-mm-sillicon-ava-400x400.jpg')}}" alt="" />
                                        <img class="secondary-image" src="{{ asset('frontend_assets/img/img_product/samsung-galaxy-watch-active-2-44-mm-sillicon-ava-400x400.jpg')}}" alt="" />
                                    </a>

                                    <div class="actions">
                                        <div class="action-buttons">
                                            <div class="add-to-links">
                                                <div class="add-to-wishlist">
                                                    <a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                </div>
                                                <div class="compare-button">
                                                    <a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
                                                </div>
                                            </div>
                                            <div class="quickviewbtn">
                                                <a href="#" title="Add to "><i class="fa fa-search-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="product-content">
                                    <h2 class="product-name"><a href="#">Vivo V17 Pro</a></h2>
                                    <p style="color: red;font-weight: 600">9.490.000 Đ</p>
                                </div>
                            </div>
                            <!-- single-product end -->
                            <!-- single-product start -->
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <!-- single-product start -->
                            <div class="single-product first-sale">
                                <div class="product-img">
                                    <a href="#">
                                        <img class="primary-image" src="{{ asset('frontend_assets/img/img_product/samsung-galaxy-watch-active-2-44-mm-sillicon-ava-400x400.jpg')}}" alt="" />
                                        <img class="secondary-image" src="{{ asset('frontend_assets/img/img_product/samsung-galaxy-watch-active-2-44-mm-sillicon-ava-400x400.jpg')}}" alt="" />
                                    </a>

                                    <div class="actions">
                                        <div class="action-buttons">
                                            <div class="add-to-links">
                                                <div class="add-to-wishlist">
                                                    <a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                </div>
                                                <div class="compare-button">
                                                    <a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
                                                </div>
                                            </div>
                                            <div class="quickviewbtn">
                                                <a href="#" title="Add to "><i class="fa fa-search-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="product-content">
                                    <h2 class="product-name"><a href="#">Vivo V17 Pro</a></h2>
                                    <p style="color: red;font-weight: 600">9.490.000 Đ</p>
                                </div>
                            </div>
                            <!-- single-product end -->
                            <!-- single-product start -->
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <!-- single-product start -->
                            <div class="single-product first-sale">
                                <div class="product-img">
                                    <a href="#">
                                        <img class="primary-image" src="{{ asset('frontend_assets/img/img_product/samsung-galaxy-watch-active-2-44-mm-sillicon-ava-400x400.jpg')}}" alt="" />
                                        <img class="secondary-image" src="{{ asset('frontend_assets/img/img_product/samsung-galaxy-watch-active-2-44-mm-sillicon-ava-400x400.jpg')}}" alt="" />
                                    </a>

                                    <div class="actions">
                                        <div class="action-buttons">
                                            <div class="add-to-links">
                                                <div class="add-to-wishlist">
                                                    <a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                </div>
                                                <div class="compare-button">
                                                    <a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
                                                </div>
                                            </div>
                                            <div class="quickviewbtn">
                                                <a href="#" title="Add to "><i class="fa fa-search-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="product-content">
                                    <h2 class="product-name"><a href="#">Vivo V17 Pro</a></h2>
                                    <p style="color: red;font-weight: 600">9.490.000 Đ</p>
                                </div>
                            </div>
                            <!-- single-product end -->
                            <!-- single-product start -->
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <!-- single-product start -->
                            <div class="single-product first-sale">
                                <div class="product-img">
                                    <a href="#">
                                        <img class="primary-image" src="{{ asset('frontend_assets/img/img_product/samsung-galaxy-watch-active-2-44-mm-sillicon-ava-400x400.jpg')}}" alt="" />
                                        <img class="secondary-image" src="{{ asset('frontend_assets/img/img_product/samsung-galaxy-watch-active-2-44-mm-sillicon-ava-400x400.jpg')}}" alt="" />
                                    </a>

                                    <div class="actions">
                                        <div class="action-buttons">
                                            <div class="add-to-links">
                                                <div class="add-to-wishlist">
                                                    <a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                </div>
                                                <div class="compare-button">
                                                    <a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
                                                </div>
                                            </div>
                                            <div class="quickviewbtn">
                                                <a href="#" title="Add to "><i class="fa fa-search-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="product-content">
                                    <h2 class="product-name"><a href="#">Vivo V17 Pro</a></h2>
                                    <p style="color: red;font-weight: 600">9.490.000 Đ</p>
                                </div>
                            </div>
                            <!-- single-product end -->
                            <!-- single-product start -->
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- our-product area end -->






    </div>
</div>


<!-- product section end -->
<!-- latestpost area start -->
<div class="latest-post-area">
    <div class="container">
        <div class="area-title">
            <h2> Có thể bạn quan tâm</h2>
        </div>
        <div class="row">
            <div class="all-singlepost">
                <!-- single latestpost start -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="single-post">
                        <div class="post-thumb">
                            <a href="#">
                                <img src="{{ asset('frontend_assets/img/img_product/lienquan1of1_1280x720-600x400.jpg')}} " alt="" />
                            </a>
                        </div>
                        <div class="post-thumb-info">
                            <div class="post-time">
                                <h2><a href="#">Cách tạo hình nền, avatar, cover Liên Quân theo Tên bạn cực độc
                                    </a> </h2>
                            </div>
                            <div class="postexcerpt">
                                <p>Liên Quân có lẽ là trò chơi Mobile hot nhất hiện nay, chắc hẳn bạn nào chơi Liên Quân
                                    Mobile cũng có một hoặc một vài vị tướng tủ của mình. Hôm nay, mình sẽ
                                    hướng dẫn các bạn tạo hình nền, avatar hay hình cover Facebook bằng hình
                                    ảnh nhân vật kèm theo tên của các bạn cực độc đáo nhé.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single latestpost end -->
                <!-- single latestpost start -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="single-post">
                        <div class="post-thumb">
                            <a href="#">
                                <img src="{{ asset('frontend_assets/img/img_product/lienquan1of1_1280x720-600x400.jpg')}} " alt="" />
                            </a>
                        </div>
                        <div class="post-thumb-info">
                            <div class="post-time">
                                <h2><a href="#">Cách tạo hình nền, avatar, cover Liên Quân theo Tên bạn cực độc
                                    </a> </h2>
                            </div>
                            <div class="postexcerpt">
                                <p>Liên Quân có lẽ là trò chơi Mobile hot nhất hiện nay, chắc hẳn bạn nào chơi Liên Quân
                                    Mobile cũng có một hoặc một vài vị tướng tủ của mình. Hôm nay, mình sẽ
                                    hướng dẫn các bạn tạo hình nền, avatar hay hình cover Facebook bằng hình
                                    ảnh nhân vật kèm theo tên của các bạn cực độc đáo nhé.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single latestpost end -->
                <!-- single latestpost start -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="single-post">
                        <div class="post-thumb">
                            <a href="#">
                                <img src="{{ asset('frontend_assets/img/img_product/lienquan1of1_1280x720-600x400.jpg')}} " alt="" />
                            </a>
                        </div>
                        <div class="post-thumb-info">
                            <div class="post-time">
                                <h2><a href="#">Cách tạo hình nền, avatar, cover Liên Quân theo Tên bạn cực độc
                                    </a> </h2>
                            </div>
                            <div class="postexcerpt">
                                <p>Liên Quân có lẽ là trò chơi Mobile hot nhất hiện nay, chắc hẳn bạn nào chơi Liên Quân
                                    Mobile cũng có một hoặc một vài vị tướng tủ của mình. Hôm nay, mình sẽ
                                    hướng dẫn các bạn tạo hình nền, avatar hay hình cover Facebook bằng hình
                                    ảnh nhân vật kèm theo tên của các bạn cực độc đáo nhé.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single latestpost end -->
                <!-- single latestpost start -->
            </div>
        </div>
    </div>
</div>
@endsection