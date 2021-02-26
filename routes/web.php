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

if(env('APP_DEBUG'))
{
	Artisan::call('view:clear');
}


/*страницы*/
Route::get('/', 'PageController@home')->name('home');

Route::get('/about', 'PageController@about')->name('about')->middleware('pagePublic');

Route::resource('contact-form', 'ContactController');
Route::get('/contact', 'ContactController@index')
    ->name('contact')->middleware('pagePublic');

Route::get('/product/{slug?}', 'ProductController@show')
    ->name('product')->middleware('pagePublic');

Route::get('/category/{slug?}', 'CategoryController@index')
    ->name('category')->middleware('pagePublic');

Route::get('/manufacturer/{slug?}', 'ManufacturerController@index')
    ->name('manufacturer')->middleware('pagePublic');

/*Route::get( '/sitemaps', 'CategoryController@SiteMapsIndex' )
     ->name( 'categories' )->middleware('pagePublic');*/
Route::get('/tag/{slug?}', 'TagController@index')->name('tag')->middleware('pagePublic');

Route::get('/service', 'PageController@service')
    ->name('service')->middleware('pagePublic');

Route::get('/search', 'SearchController@index')->name('search')->middleware('pagePublic');
Route::post('/comment-product/{id}', 'ProductController@postProductComment')
    ->name('comment-product');
Route::get('/blog/{id}', 'BlogController@index')
    ->name('blog-index');
Route::get('/blog-category/{id}', 'BlogCategoryController@show')
    ->name('blog-category');


Route::group(['middleware' => ['auth', 'blocked']], function () {

    Route::get('/user/profile', 'UserController@index')
        ->name('profile')->middleware('pagePublic');

});

Route::group(['prefix' => 'design'], function () {

    Route::get('/', 'DesignController@index')
        ->name('design-index');

    Route::get('/main', 'DesignController@main')
        ->name('design-main');
    Route::get('/product', 'DesignController@product')
        ->name('design-product');
    Route::get('/filter', 'DesignController@filter')
        ->name('design-filter');
    Route::get('/info', 'DesignController@info')
        ->name('design-info');
    Route::get('/search', 'DesignController@search')
        ->name('design-search');
    Route::get('/order', 'DesignController@order')
        ->name('design-order');
    Route::get('/blog', 'DesignController@blog')
        ->name('design-blog');

});



Route::group(['prefix' => 'api'], function () {
    Route::post('/searching', [
        'uses' => 'ApiController@searching'
    ]);


});
Route::group(['prefix' => 'cron'], function () {
    Route::any('/updateRegions', [
        'uses' => 'CronController@updateRegions'
    ]);

    Route::any('/updateCities', [
        'uses' => 'CronController@updateCities'
    ]);

    Route::any('/updateWarehouses', [
        'uses' => 'CronController@updateWarehouses'
    ]);


});

/*vue api*/


Route::get('cron-novaposhta-city', 'CityController@cronNovaPoshtaCity')
    ->name('cron-novaposhta-city');


Route::group(['middleware' => 'AdminPanel'], function () {

    Route::get('/admin', 'AdminHomeController@index')
        ->name('admin-home-index');

    Route::get('/profile', 'ProfileController@Blocked')
        ->name('admin-profiles-index');

    Route::resource('admin-pages', 'PageController');
    Route::get('/admin/pages', 'PageController@indexAdmin')
        ->name('admin-pages-index');

    Route::resource('admin-stocks', 'StockController');
    Route::get('/admin/stocks', 'StockController@indexAdmin')
        ->name('admin-stocks-index');

    Route::post('/admin/products/st', 'ProductController@test')
        ->name('admin-products-st');

    Route::resource('admin-products', 'ProductController');
    Route::get('/admin/products', 'ProductController@indexAdmin')
        ->name('admin-products-index');

    Route::resource('admin-categories', 'CategoryController');
    Route::get('/admin/categories', 'CategoryController@indexAdmin')
        ->name('admin-categories-index');

    Route::resource('admin-brands', 'BrandController');
    Route::get('/admin/brands', 'BrandController@indexAdmin')
        ->name('admin-brands-index');

    Route::resource('admin-manufacturers', 'ManufacturerController');
    Route::get('/admin/manufacturers', 'ManufacturerController@indexAdmin')
        ->name('admin-manufacturers-index');

    Route::resource('admin-suppliers', 'SupplierController');
    Route::get('/admin/suppliers', 'SupplierController@indexAdmin')
        ->name('admin-suppliers-index');

    Route::resource('admin-options', 'OptionController');
    Route::get('/admin/options', 'OptionController@indexAdmin')
        ->name('admin-options-index');

    Route::resource('admin-tags', 'TagController');
    Route::get('/admin/tags', 'TagController@indexAdmin')
        ->name('admin-tags-index');

    Route::post('/admin/settings-update/{id}', [
        'as' => 'admin-settings-update',
        'uses' => 'SettingController@update'
    ]);
    Route::get('/admin/settings-edit', [
        'as' => 'admin-settings-edit',
        'uses' => 'SettingController@edit'
    ]);

    Route::get('/admin/settings', 'SettingController@index')
        ->name('admin-settings-index');

    Route::resource('admin-orders', 'OrderController');
    Route::get('/admin/orders', 'OrderController@indexAdmin')
        ->name('admin-orders-index');
    Route::get('/admin/orders/abandoned', 'OrderController@abandonedCart')
        ->name('admin-orders-abandoned');

    Route::resource('admin-users', 'UserController');
    Route::get('/admin/users', 'UserController@indexAdmin')
        ->name('admin-users-index');

    Route::resource('admin-mailing', 'MailingController');
    Route::get('/admin/mailing', 'MailingController@indexAdmin')
        ->name('admin-mailing-index');


    Route::resource('admin-contacts', 'ContactController');
    Route::get('/admin/contacts', 'ContactController@indexAdmin')
        ->name('admin-contacts-index');

    Route::resource('admin-status', 'StatusController');
    Route::get('/admin/status', 'StatusController@indexAdmin')
        ->name('admin-status-index');

    Route::resource('admin-slider', 'SliderController');
    Route::get('/admin/slider', 'SliderController@indexAdmin')
        ->name('admin-slider-index');

    Route::resource('admin-blog', 'BlogController');
    Route::get('/admin/blog', 'BlogController@indexAdmin')
        ->name('admin-blog-index');

    Route::resource('admin-blog-category', 'BlogCategoryController');
    Route::get('/admin/blog-category', 'BlogCategoryController@indexAdmin')
        ->name('admin-blog-category-index');

    Route::resource('contact-form', 'ContactController');

    Route::get('/admin/loggers', [
        'as' => 'admin-loggers',
        'uses' => 'LoggerController@index',
    ]);

    Route::resource('admin-group-attribute', 'GroupAttributeController');
    Route::get('/admin/group-attributes', 'GroupAttributeController@indexAdmin')
        ->name('admin-group-attribute-index');

    Route::resource('admin-attribute', 'AttributeController');
    Route::get('/admin/attributes', 'AttributeController@indexAdmin')
        ->name('admin-attribute-index');

    Route::resource('admin-languages', 'LanguageController');
    Route::get('/admin/languages', 'LanguageController@indexAdmin')
        ->name('admin-languages-index');

    Route::resource('admin-currency', 'CurrencyController');
    Route::get('/admin/currency', 'CurrencyController@indexAdmin')
        ->name('admin-currency-index');

});


Route::group(['prefix' => '/admin/dashboard', 'namespace' => 'Dashboard'], function () {
    Route::get('/charts', "ChartController@index")->name('admin-dashboard-charts');
    Route::get('/tables', "TableController@index")->name('admin-dashboard-tables');
    Route::get('/forms', "FormController@index")->name('admin-dashboard-forms');
    Route::get('/calendar', "CalendarController@index")->name('admin-dashboard-calendar');
    Route::get('/maps', "MapController@index")->name('admin-dashboard-maps');
    Route::get('/pages', "PageController@index")->name('admin-dashboard-pages');
    Route::get('/ui-elements', "UiElementController@index")->name('admin-dashboard-ui-elements');
});


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [
            'localeSessionRedirect',
            'localizationRedirect',
            'localeViewPath',
        ]
    ],
    function () {
        Auth::routes();

        Route::get('/profile/test', 'ProfileController@test')
            ->name('test-profile');
        /*продажа товара*/
        Route::get('/order', 'OrderController@index')
            ->name('order-index')->middleware('pagePublic');
        Route::get('/add-to-cart/{id}', 'OrderController@getAddToCart')
            ->name('productAddToCart');
        Route::get('/cart', 'OrderController@getCart')
            ->name('shopping-cart')->middleware('pagePublic');
        /*Route::get( '/checkout', 'OrderController@getCheckout' )
             ->name( 'checkout' )->middleware('pagePublic');
        Route::post( '/checkout', 'OrderController@postCheckout' )
             ->name( 'checkout' );*/
        Route::get('/reduce-one-product/{id}', 'OrderController@getReduceByOne')
            ->name('reduceByOne');
        Route::get('/add-one-product/{id}', 'OrderController@getAddByOne')
            ->name('addByOne');
        Route::get('/reduce-one-product-card/{id}', 'OrderController@getReduceByOneCardProduct')
            ->name('reduceByOneCardProduct');
        Route::get('/add-one-product-card/{id}', 'OrderController@getAddByOneCardProduct')
            ->name('addByOneCardProduct');
        Route::get('/remove/{id}', 'OrderController@getRemoveItem')
            ->name('remove');
        Route::post('/product/{id}', 'OrderController@orderQuick')
            ->name('orderQuick');
        Route::get('/favorite-add-del/{id?}', 'ProductController@favorite_add_del')
            ->name('favorite_add_del');
        Route::get('/favorites', 'PageController@favorites')
            ->name('favorites')->middleware('pagePublic');


        //Ajax
        Route::get('/select2-cities-ajax', 'CityController@citiesAjax')
            ->name('select2-cities-ajax');
        Route::post('/select2-np-delivery-points-ajax', 'CityController@NovaPoshtaPointDeliveryAjax')
            ->name('select2-np-delivery-points-ajax');




        /*админка*/
        /*Route::group( [ 'middleware' => 'AdminPanel' ], function () {

            Route::get( '/admin', 'AdminHomeController@index' )
                 ->name( 'admin-home-index' );

            Route::get( '/profile', 'ProfileController@Blocked' )
                 ->name( 'admin-profiles-index' );

            Route::resource( 'admin-pages', 'PageController' );
            Route::get( '/admin/pages', 'PageController@indexAdmin' )
                 ->name( 'admin-pages-index' );

            Route::resource( 'admin-products', 'ProductController' );
            Route::get( '/admin/products', 'ProductController@indexAdmin' )
                 ->name( 'admin-products-index' );

            Route::resource( 'admin-categories', 'CategoryController' );
            Route::get( '/admin/categories', 'CategoryController@indexAdmin' )
                 ->name( 'admin-categories-index' );

            Route::resource( 'admin-brands', 'BrandController' );
            Route::get( '/admin/brands', 'BrandController@indexAdmin' )
                ->name( 'admin-brands-index' );

            Route::resource( 'admin-manufacturers', 'ManufacturerController' );
            Route::get( '/admin/manufacturers', 'ManufacturerController@indexAdmin' )
                ->name( 'admin-manufacturers-index' );

            Route::resource( 'admin-suppliers', 'SupplierController' );
            Route::get( '/admin/suppliers', 'SupplierController@indexAdmin' )
                ->name( 'admin-suppliers-index' );

            Route::resource( 'admin-options', 'OptionController' );
            Route::get( '/admin/options', 'OptionController@indexAdmin' )
                ->name( 'admin-options-index' );

            Route::resource( 'admin-tags', 'TagController' );
            Route::get( '/admin/tags', 'TagController@indexAdmin' )
                 ->name( 'admin-tags-index' );

            Route::post( '/admin/settings-update/{id}', [
                'as'   => 'admin-settings-update',
                'uses' => 'SettingController@update'
            ] );
            Route::get( '/admin/settings-edit', [
                'as'   => 'admin-settings-edit',
                'uses' => 'SettingController@edit'
            ] );

            Route::get( '/admin/settings', 'SettingController@index' )
                 ->name( 'admin-settings-index' );

            Route::resource( 'admin-orders', 'OrderController' );
            Route::get( '/admin/orders', 'OrderController@indexAdmin' )
                 ->name( 'admin-orders-index' );
            Route::get( '/admin/orders/abandoned', 'OrderController@abandonedCart' )
                ->name( 'admin-orders-abandoned' );

            Route::resource( 'admin-users', 'UserController' );
            Route::get( '/admin/users', 'UserController@indexAdmin' )
                 ->name( 'admin-users-index' );

            Route::resource( 'admin-mailing', 'MailingController' );
            Route::get( '/admin/mailing', 'MailingController@indexAdmin' )
                ->name( 'admin-mailing-index' );



            Route::resource( 'admin-contacts', 'ContactController' );
            Route::get( '/admin/contacts', 'ContactController@indexAdmin' )
                ->name( 'admin-contacts-index' );

            Route::resource( 'admin-status', 'StatusController' );
            Route::get( '/admin/status', 'StatusController@indexAdmin' )
                ->name( 'admin-status-index' );

            Route::resource( 'admin-slider', 'SliderController' );
            Route::get( '/admin/slider', 'SliderController@indexAdmin' )
                ->name( 'admin-slider-index' );

            Route::resource( 'admin-blog', 'BlogController' );
            Route::get( '/admin/blog', 'BlogController@indexAdmin' )
                ->name( 'admin-blog-index' );

            Route::resource( 'admin-blog-category', 'BlogCategoryController' );
            Route::get( '/admin/blog-category', 'BlogCategoryController@indexAdmin' )
                ->name( 'admin-blog-category-index' );

            Route::resource( 'contact-form', 'ContactController' );

            Route::get( '/admin/loggers', [
                'as'   => 'admin-loggers',
                'uses' => 'LoggerController@index',
            ] );

            Route::resource( 'admin-group-attribute', 'GroupAttributeController' );
            Route::get( '/admin/group-attributes', 'GroupAttributeController@indexAdmin' )
                 ->name( 'admin-group-attribute-index' );

            Route::resource( 'admin-attribute', 'AttributeController' );
            Route::get( '/admin/attributes', 'AttributeController@indexAdmin' )
                 ->name( 'admin-attribute-index' );

            Route::resource( 'admin-languages', 'LanguageController' );
            Route::get( '/admin/languages', 'LanguageController@indexAdmin' )
                 ->name( 'admin-languages-index' );

            Route::resource( 'admin-currency', 'CurrencyController' );
            Route::get( '/admin/currency', 'CurrencyController@indexAdmin' )
                ->name( 'admin-currency-index' );

        } );*/
    });

