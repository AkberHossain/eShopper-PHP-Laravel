<!-- <?php

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

//Website 

Route::get('/', 'Website\WebsiteController@index')->name('website.index');

//Admin panel

Route::group(
    [
        //'prefix' => 'admin' , 
        'namespace' => 'Admin',
    ],
    
    function(){

        Route::get('/admin' , 'AdminController@index')->name('admin.index');

        //Product Control
        Route::get('/admin-product' , 'ProductController@showProducts')->name('admin.product');
        Route::get('/admin-productdetails/{id}' , 'ProductController@productDetails')->name('admin.product-details');
        Route::get('/product-create' , 'ProductController@create')->name('product.create');
        Route::post('/product-store' , 'ProductController@store')->name('product.store');

        //Category Control
        Route::get('/admin-category' , 'CategoryController@showCategories')->name('admin.category');
        Route::get('/category-create' , 'CategoryController@create')->name('category.create');
        Route::post('/category-store' , 'CategoryController@store')->name('category.store');

        //Tag Control
        Route::get('/tag-find' , 'TagController@tagFind')->name('tag.find');
        Route::get('/admin-tag' , 'TagController@showTags')->name('admin.tag');

        //User Control
        Route::get('/admin-user' , 'UserController@showUsers')->name('admin.user');
        

        //ContactInfo Control
        Route::get('/admin-contact' , 'AdminController@showContactInfo')->name('admin.conatct');


        //OrderList Control
        Route::get('/admin-orderlist' , 'OrderlistController@showOrderList')->name('admin.orderlist');
        Route::post('/admin-orderbyid' , 'OrderlistController@showOrderListByID')->name('admin.orderbyid');
        Route::get('/admin-orderbystatus/{status}' , 'OrderlistController@showOrderListByStatus')->name('admin.orderbystatus');
        Route::get('/admin-ordermodify/{id}' , 'OrderlistController@showOrderModify')->name('admin.ordermodify');

    }
    

);



Route::group(
    [
        'prefix' => 'product' ,
        'namespace' => 'Website',
    ],

    function(){

        //Product Cart
        Route::get('details/{id}' , 'WebsiteController@productDetails')->name('product.details');
        Route::get('add-cart/{id}' , 'WebsiteController@addToCart' )->name('product.addcart');
        Route::get('get-cart' , 'WebsiteController@getCart' )->name('product.getcart');
        Route::get('remove-cart' , 'WebsiteController@removeCart' )->name('product.removecart');

        //Product Checkout
        Route::get('checkout' , 'WebsiteController@checkout' )->name('product.checkout');
        Route::post('checkout/confirm' , 'WebsiteController@checkoutConfirm' )->name('product.confirm');
    }
);




//User panel

Route::group(
    [
        'prefix' => 'user' ,
        'namespace' => 'Website',
    ],

    function(){

        //User
        Route::get('/signup-form','UserController@showSignUpForm')->name('user.showsignup');
        Route::get('/signin-form','UserController@showSignInForm')->name('user.showsignin');
        Route::post('/login','UserController@login')->name('user.login');
        Route::post('/store','UserController@store')->name('user.store');
        Route::get('/profile' , 'UserController@showProfile')->name('user.profile');
        Route::get('/logout' , 'UserController@logOut')->name('user.logout');


        
    }
);

