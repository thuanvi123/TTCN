@extends('frontend.layouts.lavaro)
@section('title')
    Danh mục
@endsection
@section('content')
<div class="col-md-9 col-sm-12 col-xs-12">
    <!-- shop toolbar start -->
    <div class="shop-content-area">
        <div class="shop-toolbar">
            <div class="col-md-4 col-sm-4 col-xs-12 nopadding-left text-left">
                <form class="tree-most" method="get">
                    <div class="orderby-wrapper">
                        <label>Sort By</label>
                        <select name="orderby" class="orderby">
                            <option value="menu_order" selected="selected">Default sorting</option>
                            <option value="popularity">Sort by popularity</option>
                            <option value="rating">Sort by average rating</option>
                            <option value="date">Sort by newness</option>
                            <option value="price">Sort by price: low to high</option>
                            <option value="price-desc">Sort by price: high to low</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="col-md-4 col-sm-4 none-xs text-center">
                <div class="limiter hidden-xs">
                    <label>Show</label>
                    <select>
                        <option selected="selected" value="">9</option>
                        <option value="">12</option>
                        <option value="">24</option>
                        <option value="">36</option>
                    </select>
                    per page
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 nopadding-right text-right">
                <div class="view-mode">
                    <label>View on</label>
                    <ul>
                        <li class="active"><a href="#shop-grid-tab" data-toggle="tab"><i class="fa fa-th"></i></a></li>
                        <li class=""><a href="#shop-list-tab" data-toggle="tab"><i class="fa fa-th-list"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- shop toolbar end -->
    <!-- product-row start -->
    <div class="tab-content">
        <div class="tab-pane fade in active" id="shop-grid-tab">
            <div class="row">
                <div class="shop-product-tab first-sale">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="two-product">
                            <!-- single-product start -->
                            <div class="single-product">
                                <span class="sale-text">Sale</span>
                                <div class="product-img">
                                    <a href="#">
                                        <img class="primary-image" src="img/products/product-7.jpg" alt="">
                                        <img class="secondary-image" src="img/products/product-2.jpg" alt="">
                                    </a>
                                    <div class="action-zoom">
                                        <div class="add-to-cart">
                                            <a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
                                        </div>
                                    </div>
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
                                                <a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price-box">
                                        <span class="new-price">$110.00</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h2 class="product-name"><a href="#">Pellentesque habitant</a></h2>
                                    <p>Nunc facilisis sagittis ullamcorper...</p>
                                </div>
                            </div>
                            <!-- single-product end -->
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="two-product">
                            <!-- single-product start -->
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="#">
                                        <img class="primary-image" src="img/products/product-8.jpg" alt="">
                                        <img class="secondary-image" src="img/products/product-12.jpg" alt="">
                                    </a>
                                    <div class="action-zoom">
                                        <div class="add-to-cart">
                                            <a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
                                        </div>
                                    </div>
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
                                                <a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price-box">
                                        <span class="new-price">$300.00</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h2 class="product-name"><a href="#">Donec non est</a></h2>
                                    <p>Nunc facilisis sagittis ullamcorper...</p>
                                </div>
                            </div>
                            <!-- single-product end -->
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="two-product">
                            <!-- single-product start -->
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="#">
                                        <img class="primary-image" src="img/products/product-6.jpg" alt="">
                                        <img class="secondary-image" src="img/products/product-12.jpg" alt="">
                                    </a>
                                    <div class="action-zoom">
                                        <div class="add-to-cart">
                                            <a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
                                        </div>
                                    </div>
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
                                                <a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price-box">
                                        <span class="new-price">$200.00</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h2 class="product-name"><a href="#">Nunc facilisis</a></h2>
                                    <p>Nunc facilisis sagittis ullamcorper...</p>
                                </div>
                            </div>
                            <!-- single-product end -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- product-row end -->
            <!-- product-row start -->
            <div class="row">
                <div class="shop-product-tab first-sale">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="two-product">
                            <!-- single-product start -->
                            <div class="single-product">
                                <span class="sale-text">Sale</span>
                                <div class="product-img">
                                    <a href="#">
                                        <img class="primary-image" src="img/products/product-4.jpg" alt="">
                                        <img class="secondary-image" src="img/products/product-2.jpg" alt="">
                                    </a>
                                    <div class="action-zoom">
                                        <div class="add-to-cart">
                                            <a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
                                        </div>
                                    </div>
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
                                                <a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price-box">
                                        <span class="new-price">$250.00</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h2 class="product-name"><a href="#">Fusce aliquam</a></h2>
                                    <p>Nunc facilisis sagittis ullamcorper...</p>
                                </div>
                            </div>
                            <!-- single-product end -->
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="two-product">
                            <!-- single-product start -->
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="#">
                                        <img class="primary-image" src="img/products/product-3.jpg" alt="">
                                        <img class="secondary-image" src="img/products/product-9.jpg" alt="">
                                    </a>
                                    <div class="action-zoom">
                                        <div class="add-to-cart">
                                            <a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
                                        </div>
                                    </div>
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
                                                <a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price-box">
                                        <span class="new-price">$370.00</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h2 class="product-name"><a href="#">Aliquam consequat</a></h2>
                                    <p>Nunc facilisis sagittis ullamcorper...</p>
                                </div>
                            </div>
                            <!-- single-product end -->
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="two-product">
                            <!-- single-product start -->
                            <div class="single-product">
                                <span class="sale-text">Sale</span>
                                <div class="product-img">
                                    <a href="#">
                                        <img class="primary-image" src="img/products/product-9.jpg" alt="">
                                        <img class="secondary-image" src="img/products/product-12.jpg" alt="">
                                    </a>
                                    <div class="action-zoom">
                                        <div class="add-to-cart">
                                            <a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
                                        </div>
                                    </div>
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
                                                <a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price-box">
                                        <span class="new-price">$170.00</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h2 class="product-name"><a href="#">Pleasure rationally</a></h2>
                                    <p>Nunc facilisis sagittis ullamcorper...</p>
                                </div>
                            </div>
                            <!-- single-product end -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- product-row end -->
            <!-- product-row start -->
            <div class="row">
                <div class="shop-product-tab first-sale">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="two-product">
                            <!-- single-product start -->
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="#">
                                        <img class="primary-image" src="img/products/product-1.jpg" alt="">
                                        <img class="secondary-image" src="img/products/product-1.jpg" alt="">
                                    </a>
                                    <div class="action-zoom">
                                        <div class="add-to-cart">
                                            <a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
                                        </div>
                                    </div>
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
                                                <a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price-box">
                                        <span class="new-price">$450.00</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h2 class="product-name"><a href="#">Proin lectus ipsum</a></h2>
                                    <p>Nunc facilisis sagittis ullamcorper...</p>
                                </div>
                            </div>
                            <!-- single-product end -->
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="two-product">
                            <!-- single-product start -->
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="#">
                                        <img class="primary-image" src="img/products/product-2.jpg" alt="">
                                        <img class="secondary-image" src="img/products/product-3.jpg" alt="">
                                    </a>
                                    <div class="action-zoom">
                                        <div class="add-to-cart">
                                            <a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
                                        </div>
                                    </div>
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
                                                <a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price-box">
                                        <span class="new-price">$300.00</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h2 class="product-name"><a href="#">Consequences</a></h2>
                                    <p>Nunc facilisis sagittis ullamcorper...</p>
                                </div>
                            </div>
                            <!-- single-product end -->
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="two-product">
                            <!-- single-product start -->
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="#">
                                        <img class="primary-image" src="img/products/product-4.jpg" alt="">
                                        <img class="secondary-image" src="img/products/product-5.jpg" alt="">
                                    </a>
                                    <div class="action-zoom">
                                        <div class="add-to-cart">
                                            <a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
                                        </div>
                                    </div>
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
                                                <a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price-box">
                                        <span class="new-price">$350.00</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h2 class="product-name"><a href="#">Quisque in arcu</a></h2>
                                    <p>Nunc facilisis sagittis ullamcorper...</p>
                                </div>
                            </div>
                            <!-- single-product end -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- product-row end -->
            <!-- product-row start -->
            <div class="row">
                <div class="shop-product-tab first-sale">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="two-product">
                            <!-- single-product start -->
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="#">
                                        <img class="primary-image" src="img/products/product-6.jpg" alt="">
                                        <img class="secondary-image" src="img/products/product-7.jpg" alt="">
                                    </a>
                                    <div class="action-zoom">
                                        <div class="add-to-cart">
                                            <a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
                                        </div>
                                    </div>
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
                                                <a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price-box">
                                        <span class="new-price">$250.00</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h2 class="product-name"><a href="#">Primis in faucibus</a></h2>
                                    <p>Nunc facilisis sagittis ullamcorper...</p>
                                </div>
                            </div>
                            <!-- single-product end -->
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="two-product">
                            <!-- single-product start -->
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="#">
                                        <img class="primary-image" src="img/products/product-9.jpg" alt="">
                                        <img class="secondary-image" src="img/products/product-10.jpg" alt="">
                                    </a>
                                    <div class="action-zoom">
                                        <div class="add-to-cart">
                                            <a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
                                        </div>
                                    </div>
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
                                                <a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price-box">
                                        <span class="new-price">$180.00</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h2 class="product-name"><a href="#">Voluptas nulla</a></h2>
                                    <p>Nunc facilisis sagittis ullamcorper...</p>
                                </div>
                            </div>
                            <!-- single-product end -->
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="two-product">
                            <!-- single-product start -->
                            <div class="single-product">
                                <span class="sale-text">Sale</span>
                                <div class="product-img">
                                    <a href="#">
                                        <img class="primary-image" src="img/products/product-11.jpg" alt="">
                                        <img class="secondary-image" src="img/products/product-12.jpg" alt="">
                                    </a>
                                    <div class="action-zoom">
                                        <div class="add-to-cart">
                                            <a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
                                        </div>
                                    </div>
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
                                                <a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price-box">
                                        <span class="new-price">$310.00</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h2 class="product-name"><a href="#">Cras neque metus</a></h2>
                                    <p>Nunc facilisis sagittis ullamcorper...</p>
                                </div>
                            </div>
                            <!-- single-product end -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- product-row end -->
        </div>
        <!-- list view -->
        <div class="tab-pane fade" id="shop-list-tab">
            <div class="list-view">
                <!-- single-product start -->
                <div class="product-list-wrapper">
                    <div class="single-product">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="product-img">
                                <a href="#">
                                    <img class="primary-image" src="img/products/product-7.jpg" alt="">
                                    <img class="secondary-image" src="img/products/product-2.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <div class="product-content">
                                <h2 class="product-name"><a href="#">Cras neque metus</a></h2>
                                <div class="rating-price">
                                    <div class="pro-rating">
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                    </div>
                                    <div class="price-boxes">
                                        <span class="new-price">$110.00</span>
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva</p>
                                </div>
                                <div class="actions-e">
                                    <div class="action-buttons">
                                        <div class="add-to-cart">
                                            <a href="#">Add to cart</a>
                                        </div>
                                        <div class="add-to-links">
                                            <div class="add-to-wishlist">
                                                <a href="#" data-toggle="tooltip" title="" data-original-title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                            </div>
                                            <div class="compare-button">
                                                <a href="#" data-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-refresh"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single-product end -->
                <!-- single-product start -->
                <div class="product-list-wrapper">
                    <div class="single-product">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="product-img">
                                <a href="#">
                                    <img class="primary-image" src="img/products/product-7.jpg" alt="">
                                    <img class="secondary-image" src="img/products/product-8.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <div class="product-content">
                                <h2 class="product-name"><a href="#">Donec non est</a></h2>
                                <div class="rating-price">
                                    <div class="pro-rating">
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                    </div>
                                    <div class="price-boxes">
                                        <span class="new-price">$450.00</span>
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva</p>
                                </div>
                                <div class="actions-e">
                                    <div class="action-buttons">
                                        <div class="add-to-cart">
                                            <a href="#">Add to cart</a>
                                        </div>
                                        <div class="add-to-links">
                                            <div class="add-to-wishlist">
                                                <a href="#" data-toggle="tooltip" title="" data-original-title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                            </div>
                                            <div class="compare-button">
                                                <a href="#" data-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-refresh"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single-product end -->
                <!-- single-product start -->
                <div class="product-list-wrapper">
                    <div class="single-product">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="product-img">
                                <a href="#">
                                    <img class="primary-image" src="img/products/product-5.jpg" alt="">
                                    <img class="secondary-image" src="img/products/product-6.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <div class="product-content">
                                <h2 class="product-name"><a href="#">Occaecati cupiditate</a></h2>
                                <div class="rating-price">
                                    <div class="pro-rating">
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                    </div>
                                    <div class="price-boxes">
                                        <span class="new-price">$380.00</span>
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva</p>
                                </div>
                                <div class="actions-e">
                                    <div class="action-buttons">
                                        <div class="add-to-cart">
                                            <a href="#">Add to cart</a>
                                        </div>
                                        <div class="add-to-links">
                                            <div class="add-to-wishlist">
                                                <a href="#" data-toggle="tooltip" title="" data-original-title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                            </div>
                                            <div class="compare-button">
                                                <a href="#" data-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-refresh"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single-product end -->
                <!-- single-product start -->
                <div class="product-list-wrapper">
                    <div class="single-product">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="product-img">
                                <a href="#">
                                    <img class="primary-image" src="img/products/product-11.jpg" alt="">
                                    <img class="secondary-image" src="img/products/product-12.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <div class="product-content">
                                <h2 class="product-name"><a href="#">Cras neque metus</a></h2>
                                <div class="rating-price">
                                    <div class="pro-rating">
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                    </div>
                                    <div class="price-boxes">
                                        <span class="new-price">$340.00</span>
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva</p>
                                </div>
                                <div class="actions-e">
                                    <div class="action-buttons">
                                        <div class="add-to-cart">
                                            <a href="#">Add to cart</a>
                                        </div>
                                        <div class="add-to-links">
                                            <div class="add-to-wishlist">
                                                <a href="#" data-toggle="tooltip" title="" data-original-title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                            </div>
                                            <div class="compare-button">
                                                <a href="#" data-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-refresh"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single-product end -->
                <!-- single-product start -->
                <div class="product-list-wrapper">
                    <div class="single-product">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="product-img">
                                <a href="#">
                                    <img class="primary-image" src="img/products/product-9.jpg" alt="">
                                    <img class="secondary-image" src="img/products/product-10.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <div class="product-content">
                                <h2 class="product-name"><a href="#">Voluptas nulla</a></h2>
                                <div class="rating-price">
                                    <div class="pro-rating">
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                    </div>
                                    <div class="price-boxes">
                                        <span class="new-price">$400.00</span>
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva</p>
                                </div>
                                <div class="actions-e">
                                    <div class="action-buttons">
                                        <div class="add-to-cart">
                                            <a href="#">Add to cart</a>
                                        </div>
                                        <div class="add-to-links">
                                            <div class="add-to-wishlist">
                                                <a href="#" data-toggle="tooltip" title="" data-original-title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                            </div>
                                            <div class="compare-button">
                                                <a href="#" data-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-refresh"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single-product end -->
                <!-- single-product start -->
                <div class="product-list-wrapper">
                    <div class="single-product">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="product-img">
                                <a href="#">
                                    <img class="primary-image" src="img/products/product-6.jpg" alt="">
                                    <img class="secondary-image" src="img/products/product-7.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <div class="product-content">
                                <h2 class="product-name"><a href="#">Primis in faucibus</a></h2>
                                <div class="rating-price">
                                    <div class="pro-rating">
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                    </div>
                                    <div class="price-boxes">
                                        <span class="new-price">$200.00</span>
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva</p>
                                </div>
                                <div class="actions-e">
                                    <div class="action-buttons">
                                        <div class="add-to-cart">
                                            <a href="#">Add to cart</a>
                                        </div>
                                        <div class="add-to-links">
                                            <div class="add-to-wishlist">
                                                <a href="#" data-toggle="tooltip" title="" data-original-title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                            </div>
                                            <div class="compare-button">
                                                <a href="#" data-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-refresh"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single-product end -->
                <!-- single-product start -->
                <div class="product-list-wrapper">
                    <div class="single-product">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="product-img">
                                <a href="#">
                                    <img class="primary-image" src="img/products/product-4.jpg" alt="">
                                    <img class="secondary-image" src="img/products/product-5.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <div class="product-content">
                                <h2 class="product-name"><a href="#">Quisque in arcu</a></h2>
                                <div class="rating-price">
                                    <div class="pro-rating">
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                    </div>
                                    <div class="price-boxes">
                                        <span class="new-price">$440.00</span>
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva</p>
                                </div>
                                <div class="actions-e">
                                    <div class="action-buttons">
                                        <div class="add-to-cart">
                                            <a href="#">Add to cart</a>
                                        </div>
                                        <div class="add-to-links">
                                            <div class="add-to-wishlist">
                                                <a href="#" data-toggle="tooltip" title="" data-original-title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                            </div>
                                            <div class="compare-button">
                                                <a href="#" data-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-refresh"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single-product end -->
                <!-- single-product start -->
                <div class="product-list-wrapper">
                    <div class="single-product">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="product-img">
                                <a href="#">
                                    <img class="primary-image" src="img/products/product-2.jpg" alt="">
                                    <img class="secondary-image" src="img/products/product-3.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <div class="product-content">
                                <h2 class="product-name"><a href="#">Imperial Consequences</a></h2>
                                <div class="rating-price">
                                    <div class="pro-rating">
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                    </div>
                                    <div class="price-boxes">
                                        <span class="new-price">$334.00</span>
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva</p>
                                </div>
                                <div class="actions-e">
                                    <div class="action-buttons">
                                        <div class="add-to-cart">
                                            <a href="#">Add to cart</a>
                                        </div>
                                        <div class="add-to-links">
                                            <div class="add-to-wishlist">
                                                <a href="#" data-toggle="tooltip" title="" data-original-title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                            </div>
                                            <div class="compare-button">
                                                <a href="#" data-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-refresh"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single-product end -->
                <!-- single-product start -->
                <div class="product-list-wrapper">
                    <div class="single-product">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="product-img">
                                <a href="#">
                                    <img class="primary-image" src="img/products/product-4.jpg" alt="">
                                    <img class="secondary-image" src="img/products/product-2.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <div class="product-content">
                                <h2 class="product-name"><a href="#">Consequences</a></h2>
                                <div class="rating-price">
                                    <div class="pro-rating">
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                    </div>
                                    <div class="price-boxes">
                                        <span class="new-price">$220.00</span>
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva</p>
                                </div>
                                <div class="actions-e">
                                    <div class="action-buttons">
                                        <div class="add-to-cart">
                                            <a href="#">Add to cart</a>
                                        </div>
                                        <div class="add-to-links">
                                            <div class="add-to-wishlist">
                                                <a href="#" data-toggle="tooltip" title="" data-original-title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                            </div>
                                            <div class="compare-button">
                                                <a href="#" data-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-refresh"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single-product end -->
                <!-- single-product start -->
                <div class="product-list-wrapper">
                    <div class="single-product">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="product-img">
                                <a href="#">
                                    <img class="primary-image" src="img/products/product-1.jpg" alt="">
                                    <img class="secondary-image" src="img/products/product-1.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <div class="product-content">
                                <h2 class="product-name"><a href="#">Proin lectus ipsum</a></h2>
                                <div class="rating-price">
                                    <div class="pro-rating">
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                    </div>
                                    <div class="price-boxes">
                                        <span class="new-price">$230.00</span>
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva</p>
                                </div>
                                <div class="actions-e">
                                    <div class="action-buttons">
                                        <div class="add-to-cart">
                                            <a href="#">Add to cart</a>
                                        </div>
                                        <div class="add-to-links">
                                            <div class="add-to-wishlist">
                                                <a href="#" data-toggle="tooltip" title="" data-original-title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                            </div>
                                            <div class="compare-button">
                                                <a href="#" data-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-refresh"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single-product end -->
            </div>
        </div>
        <!-- shop toolbar start -->
        <div class="shop-content-bottom">
            <div class="shop-toolbar btn-tlbr">
                <div class="col-md-4 col-sm-4 col-xs-12 hidden-xs nopadding-left text-left">
                    <form class="tree-most" method="get">
                        <div class="orderby-wrapper">
                            <label>Sort By</label>
                            <select name="orderby" class="orderby">
                                <option value="menu_order" selected="selected">Default sorting</option>
                                <option value="popularity">Sort by popularity</option>
                                <option value="rating">Sort by average rating</option>
                                <option value="date">Sort by newness</option>
                                <option value="price">Sort by price: low to high</option>
                                <option value="price-desc">Sort by price: high to low</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 text-center">
                    <div class="pages">
                        <label>Page:</label>
                        <ul>
                            <li class="current">1</li>
                            <li><a href="#">2</a></li>
                            <li><a href="#" class="next i-next" title="Next"><i class="fa fa-arrow-right"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 nopadding-right text-right">
                    <div class="view-mode">
                        <label>View on</label>
                        <ul>
                            <li class="active"><a href="#shop-grid-tab" data-toggle="tab"><i class="fa fa-th"></i></a></li>
                            <li class=""><a href="#shop-list-tab" data-toggle="tab"><i class="fa fa-th-list"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- shop toolbar end -->
    </div>
</div>
    @endsection

