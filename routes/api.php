<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/
Route::group(['prefix' => 'getForCatalogGlasses'], function() {
    Route::get('products', 'SiteApiController@getProducts');
    Route::get('genders', 'SiteApiController@getGenders');
    Route::get('manufacturers', 'SiteApiController@getManufacturers');
    Route::get('shapes', 'SiteApiController@getShapes');
    Route::get('tags', 'SiteApiController@getTags');
    Route::get('uvFilters', 'SiteApiController@getUvFilters');
    Route::get('lensColors', 'SiteApiController@getLensColors');
    Route::get('frameColors', 'SiteApiController@getFrameColors');
    Route::get('gradients', 'SiteApiController@getGradients');
    Route::get('frameMaterials', 'SiteApiController@getFrameMaterials');
    Route::get('features', 'SiteApiController@getFeatures');
});

Route::get('getMaxValPrice', 'SiteApiController@getMaxValPrice');


Route::group(['prefix' => 'statistics'], function() {
    Route::post('getStatistics', [
        'uses' => 'ApiController@getStatistics',
        'as' => 'api.getStatistics'
    ]);
});

Route::group(['prefix' => 'attributes'], function() {
    Route::post('attr', [
        'uses' => 'ApiController@attributes',
        'as' => 'api.attr'
    ]);

    Route::post('group', [
        'uses' => 'ApiController@group',
        'as' => 'api.group'
    ]);


});

Route::group(['prefix' => 'product'], function() {
    Route::post('getViewed', [
        'uses' => 'ApiController@getViewed',
        'as' => 'api.getViewed'
    ]);

    Route::post('group', [
        'uses' => 'ApiController@group',
        'as' => 'api.group'
    ]);


});

Route::group(['prefix' => 'contact'], function() {
    Route::post('createRequest', [
        'uses' => 'ApiController@createRequest',
        'as' => 'api.createRequest'
    ]);
});

Route::group(['prefix' => 'blog'], function() {
    Route::post('createBlogCategory', [
        'uses' => 'ApiController@createBlogCategory',
        'as' => 'api.createBlogCategory'
    ]);
    Route::post('createBlogArticle', [
        'uses' => 'ApiController@createBlogArticle',
        'as' => 'api.createBlogArticle'
    ]);
    Route::post('deleteCategory', [
        'uses' => 'ApiController@deleteCategory',
        'as' => 'api.deleteCategory'
    ]);
    Route::post('deleteArticle', [
        'uses' => 'ApiController@deleteArticle',
        'as' => 'api.deleteArticle'
    ]);
});

Route::group(['prefix' => 'order'], function() {
    Route::post('selectCities', [
        'uses' => 'ApiController@selectCities',
        'as' => 'api.selectCities'
    ]);
    Route::post('selectWarehouses', [
        'uses' => 'ApiController@selectWarehouses',
        'as' => 'api.selectWarehouses'
    ]);
    Route::post('createOrder', [
        'uses' => 'ApiController@createOrder',
        'as' => 'api.createOrder'
    ]);
    Route::post('updateOrder', [
        'uses' => 'ApiController@updateOrder',
        'as' => 'api.updateOrder'
    ]);
    Route::post('updateAdminOrder', [
        'uses' => 'ApiController@updateAdminOrder',
        'as' => 'api.updateAdminOrder'
    ]);
    Route::post('searchOrderProduct', [
        'uses' => 'ApiController@searchOrderProduct',
        'as' => 'api.searchOrderProduct'
    ]);
    Route::post('getProduct', [
        'uses' => 'ApiController@getProduct',
        'as' => 'api.getProduct'
    ]);

    Route::post('getLang', [
        'uses' => 'ApiController@getLang',
        'as' => 'api.getLang'
    ]);
});

Route::group(['prefix' => 'filter'], function() {
    Route::post('searchProduct', [
        'uses' => 'ApiController@searchProduct',
        'as' => 'api.searchProduct'
    ]);
    Route::post('searchTableProduct', [
        'uses' => 'ApiController@searchTableProduct',
        'as' => 'api.searchTableProduct'
    ]);
    Route::post('getAllProducts', [
        'uses' => 'ApiController@getAllProducts',
        'as' => 'api.getAllProducts'
    ]);
    Route::post('categoryGroupAttributes', [
        'uses' => 'ApiController@categoryGroupAttributes',
        'as' => 'api.categoryGroupAttributes'
    ]);
});

Route::group(['prefix' => 'fastEdit'], function() {
    Route::post('getAttributes', [
        'uses' => 'ApiController@getAttributes',
        'as' => 'api.getAttributes'
    ]);
    Route::post('saveAttr', [
        'uses' => 'ApiController@saveAttr',
        'as' => 'api.saveAttr'
    ]);
    Route::post('getOption', [
        'uses' => 'ApiController@getOption',
        'as' => 'api.getOption'
    ]);
    Route::post('getSelectedOption', [
        'uses' => 'ApiController@getSelectedOption',
        'as' => 'api.getSelectedOption'
    ]);
    Route::post('addOptionImage', [
        'uses' => 'ApiController@addOptionImage',
        'as' => 'api.addOptionImage'
    ]);
    Route::post('deleteOptionImage', [
        'uses' => 'ApiController@deleteOptionImage',
        'as' => 'api.deleteOptionImage'
    ]);
    Route::post('saveValueOption', [
        'uses' => 'ApiController@saveValueOption',
        'as' => 'api.saveValueOption'
    ]);
    Route::post('getData', [
        'uses' => 'ApiController@getData',
        'as' => 'api.getData'
    ]);
    Route::post('getGroupData', [
        'uses' => 'ApiController@getGroupData',
        'as' => 'api.getGroupData'
    ]);
    Route::post('getRelation', [
        'uses' => 'ApiController@getRelation',
        'as' => 'api.getRelation'
    ]);
    Route::post('saveRelation', [
        'uses' => 'ApiController@saveRelation',
        'as' => 'api.saveRelation'
    ]);
    Route::post('getImage', [
        'uses' => 'ApiController@getImage',
        'as' => 'api.getImage'
    ]);
    Route::post('saveImage', [
        'uses' => 'ApiController@saveImage',
        'as' => 'api.saveImage'
    ]);
    Route::post('saveData', [
        'uses' => 'ApiController@saveData',
        'as' => 'api.saveData'
    ]);
    Route::post('addMainImage', [
        'uses' => 'ApiController@addMainImage',
        'as' => 'api.addMainImage'
    ]);
    Route::post('addGalleryImage', [
        'uses' => 'ApiController@addGalleryImage',
        'as' => 'api.addGalleryImage'
    ]);
    Route::post('deleteImage', [
        'uses' => 'ApiController@deleteImage',
        'as' => 'api.deleteImage'
    ]);
    Route::post('replicateProduct', [
        'uses' => 'ApiController@replicateProduct',
        'as' => 'api.replicateProduct'
    ]);
    Route::post('deleteProduct', [
        'uses' => 'ApiController@deleteProduct',
        'as' => 'api.deleteProduct'
    ]);
    Route::post('groupPrice', [
        'uses' => 'ApiController@groupPrice',
        'as' => 'api.groupPrice'
    ]);
});