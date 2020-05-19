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
});
*/
Route::get('/articles', 'ArticleSourcesController@FetchArticles');
Route::get('/brandarticles', 'ArticleSourcesController@FetchBrandArticles');
Route::get('/bnlist', 'ArticleSourcesController@getBnlist');
Route::get('/search', 'ArticleSourcesController@getSearchBnlist');
Route::get('/nlist', 'ArticleSourcesController@getNlist');
Route::get('/paihangbang', 'ArticleSourcesController@paiHangBang');
Route::get('/paihangbang/type', 'ArticleSourcesController@paiHangBangType');
Route::post('/phone/complate', 'PhoneController@phoneComplate');
Route::post('phone/mipcomplate', 'PhoneController@phoneMipComplate');
Route::post('phone/mipcomplate2', 'PhoneController@phoneMipComplate2');

Route::get('getarticle', 'BaiduAppletController@getArticle');
Route::get('/bdgetarticle', 'BaiduAppletController@bdgetArticle');
Route::get('getarticleinfo', 'BaiduAppletController@getArticleInfo');
Route::get('getbrandarticle', 'BaiduAppletController@getBrandarticle');
Route::get('getbrandarticleinfo', 'BaiduAppletController@getBrandarticleInfo');
Route::get('scrollbrandarticles', 'BaiduAppletController@getScrollBrandarticles');
Route::get('clickbrands', 'BaiduAppletController@getClickBrandarticles');
Route::get('latestbrands', 'BaiduAppletController@getLatestBrandarticles');
Route::get('brandnews', 'BaiduAppletController@getBrandNews');
Route::get('getjmnews', 'BaiduAppletController@getJmNews');
Route::get('touzinews', 'BaiduAppletController@gettouziNews');
Route::get('jingyingnews', 'BaiduAppletController@JingYingNews');
Route::get('getarticlebrandnews', 'BaiduAppletController@getArticleBrandNews');
Route::get('articlephbrands', 'BaiduAppletController@articlePhBrands');
Route::get('arctype', 'BaiduAppletController@getTypeinfo');
Route::get('getbrandarticlenews', 'BaiduAppletController@getBrandArticlenews');
Route::get('getbrandarticlebrands', 'BaiduAppletController@getBrandArticleBrands');
Route::get('bnlistarticles', 'BaiduAppletController@getBnlistArticles');
Route::get('nlistarticles', 'BaiduAppletController@getNlistArticles');

