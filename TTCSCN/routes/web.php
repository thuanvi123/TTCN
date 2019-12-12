<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('frontend.homepages.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/**
 * Route cho administrator
 */
Route::prefix('admin')->group(function() {
    // Gom nhóm các route cho phần admin

    /**
     * ----------------- Route admin authentication --------------------
     * ---------------------------------------------------------
     * ---------------------------------------------------------
     */

    /**
     *
     * Route mặc định của admin
     */
    Route::get('/', 'AdminController@index')->name('admin.dashboard');

    /**
     *.dashboard
     * Route đăng nhập thành công
     */
    Route::get('/dashboard', 'AdminController@index')->name('admin.dashboard');

    /**
     *.register
     * Route trả về view dùng để đăng ký tài khoản admin
     */
    Route::get('register', 'AdminController@create')->name('admin.register');

    /**
     *.register
     * Phương thức là POST
     * Route dùng để đăng ký 1 admin từ form POST
     */
    Route::post('register', 'AdminController@store')->name('admin.register.store');


    /**
     *.login
     * METHOD : GET
     * Route trả về view đăng nhập admin
     */
    Route::get('login', 'Auth\Admin\LoginController@login')->name('admin.auth.login');

    /**
     *.login
     * METHOD : POST
     * Route xử lý quá trình đăng nhập admin
     */
    Route::post('login', 'Auth\Admin\LoginController@loginAdmin')->name('admin.auth.loginAdmin');

    /**
     *.logout
     * METHOD : POST
     * Route dùng để đăng xuất
     */
    Route::post('logout', 'Auth\Admin\LoginController@logout')->name('admin.auth.logout');

    Route::prefix('seller')->group(function() {

        // Gom nhóm các route cho phần seller

        /**
         * .
         * Route mặc định của seller
         */
        Route::get('/', 'SellerController@index')->name('seller.dashboard');

        /**
         * .dashboard
         * Route đăng nhập thành công
         */
        Route::get('/dashboard', 'SellerController@index')->name('seller.dashboard');

        /**
         * .register
         * Route trả về view dùng để đăng ký tài khoản seller
         */
        Route::get('register', 'SellerController@create')->name('seller.register');

        /**
         * .register
         * Phương thức là POST
         * Route dùng để đăng ký 1 seller từ form POST
         */
        Route::post('register', 'SellerController@store')->name('seller.register.store');

        /**
         * .login
         * METHOD : GET
         * Route trả về view đăng nhập seller
         */
        Route::get('login', 'Auth\Seller\LoginController@login')->name('seller.auth.login');

        /**
         * .login
         * METHOD : POST
         * Route xử lý quá trình đăng nhập seller
         */
        Route::post('login', 'Auth\Seller\LoginController@loginSeller')->name('seller.auth.loginSeller');

        /**
         * .logout
         * METHOD : POST
         * Route dùng để đăng xuất
         */
        Route::post('logout', 'Auth\Seller\LoginController@logout')->name('seller.auth.logout');


    });
    Route::prefix('shipper')->group(function() {
        // Gom nhóm các route cho phần shipper

        /**
         *
         * Route mặc định của shipper
         */
        Route::get('/', 'ShipperController@index')->name('shipper.dashboard');

        /**
         * dashboard
         * Route đăng nhập thành công
         */
        Route::get('/dashboard', 'ShipperController@index')->name('shipper.dashboard');

        /**
         * register
         * Route trả về view dùng để đăng ký tài khoản shipper
         */
        Route::get('register', 'ShipperController@create')->name('shipper.register');

        /**
         * register
         * Phương thức là POST
         * Route dùng để đăng ký 1 shipper từ form POST
         */
        Route::post('register', 'ShipperController@store')->name('shipper.register.store');

        /**
         * login
         * METHOD : GET
         * Route trả về view đăng nhập shipper
         */
        Route::get('login', 'Auth\Shipper\LoginController@login')->name('shipper.auth.login');

        /**
         * login
         * METHOD : POST
         * Route xử lý quá trình đăng nhập shipper
         */
        Route::post('login', 'Auth\Shipper\LoginController@loginShipper')->name('shipper.auth.loginShipper');

        /**
         * logout
         * METHOD : POST
         * Route dùng để đăng xuất
         */
        Route::post('logout', 'Auth\Shipper\LoginController@logout')->name('shipper.auth.logout');

    });
    /**
     * ----------------- Route admin shopping --------------------
     * ---------------------------------------------------------
     * ---------------------------------------------------------
     */
    Route::get('shop/category', 'Admin\ShopCategoryController@index');
    Route::get('shop/category/create', 'Admin\ShopCategoryController@create');
    Route::get('shop/category/{id}/edit', 'Admin\ShopCategoryController@edit');
    Route::get('shop/category/{id}/delete', 'Admin\ShopCategoryController@delete');

    Route::post('shop/category', 'Admin\ShopCategoryController@store');
    Route::post('shop/category/{id}', 'Admin\ShopCategoryController@update');
    Route::post('shop/category/{id}/delete', 'Admin\ShopCategoryController@destroy');


});

