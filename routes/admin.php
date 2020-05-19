<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::group(['prefix' => 'admin'],function ()
{
    Route::get('login-----//------', 'LoginController@showLoginForm')->name('admin.login');
    Route::post('login-----//------', 'LoginController@login');
    Route::get('logout', 'LoginController@logout');
    Route::get('dash', 'DashboardController@index');
    Route::get('index','IndexController@index');
    Route::post('upload/images','ImageUploadController@ImagesUpload');
    Route::post('upload/articleimages','ImageUploadController@upload_image');
    Route::post('file-delete-batch','ImageUploadController@DeletePics');
    Route::get('category','CategoryController@Index');
    Route::get('category/create/{id?}','CategoryController@Create')->where('id', '[0-9]+');
    Route::get('category/edit/{id}','CategoryController@Edit')->where('id', '[0-9]+');
    Route::post('category/create','CategoryController@PostCreate')->name('category_create');
    Route::put('category/edit/{id}','CategoryController@PostEdit')->name('category_edit')->where('id', '[0-9]+');
    Route::post('category/delete/{id}','CategoryController@DeleteCategory')->where('id', '[0-9]+');
    Route::get('article','ArticleController@Index');
    Route::get('article/ownership','ArticleController@OwnerShip');
    Route::get('brandarticle/ownership','ArticleController@BrandArticleOwnerShip');
    Route::get('article/pendingaudit','ArticleController@PendingAudit');
    Route::get('brandarticle/pendingaudit','ArticleController@PendingAuditBrandarticle');
    Route::get('brandarticle/receive','ArticleController@BrandarticlesReceive');
    Route::Post('article/updatereceive/{id}','ArticleController@UpdateBrabdReceive')->where('id', '[0-9]+');
    Route::get('article/ownbrandarticlereceived','ArticleController@ownBrandarticleRecevied');
    Route::get('article/brandreceives','ArticleController@Brandreceives');
    Route::get('article/receivednomod','ArticleController@BrandReceivednoMod');
    Route::get('article/modednomake','ArticleController@BrandReceivedModedNomake');
    Route::get('article/pedingpublished','ArticleController@PedingPublished');
    Route::get('article/brands','ArticleController@Brands');
    Route::get('article/pedingbrands','ArticleController@PedingBrands');
    Route::any('brand_search','ArticleController@PostArticleBrandSearch')->name('brandarticle_search');
    Route::get('article/previewarticle/{id}','ArticleController@PreViewArticle')->where('id', '[0-9]+');
    Route::post('article/delete/{id}','ArticleController@DeleteArticle')->where('id', '[0-9]+');
    Route::post('article/deletearticles','ArticleController@DeleteArticles');
    Route::post('article/edit_articles_type','ArticleController@EditArticlesType');
    Route::post('article/branddelete/{id}','ArticleController@DeleteBrandArticle')->where('id', '[0-9]+');
    Route::post('article/deletebrandarticles/','ArticleController@DeleteBrandArticles');
    Route::post('article/edit_brandarticles_type/','ArticleController@EditBrandarticlesType');
    Route::post('article/uploads','ArticleController@UploadImages');
    Route::get('article/create','ArticleController@Create');
    Route::get('article/brandcreate','ArticleController@BrandCreate');
    Route::get('article/edit/{id}','ArticleController@Edit')->where('id', '[0-9]+');
    Route::post('article/titlecheck','ArticleController@ArticletitleCheck');
    Route::get('article/brandedit/{id}','ArticleController@BrandEdit')->where('id', '[0-9]+');
    Route::get('article/type/{id}','ArticleController@Type')->where('id', '[0-9]+')->where('id', '[0-9]+');
    Route::post('article/create','ArticleController@PostCreate')->name('article_create');
    Route::post('article/brand/create','ArticleController@PostBrandArticle')->name('article_brand_create');
    Route::any('article/search','ArticleController@PostArticleSearch')->name('article_search');
    Route::put('article/edit/{id}','ArticleController@PostEdit')->name('article_edit')->where('id', '[0-9]+');
    Route::put('brandarticle/edit/{id}','ArticleController@PostBrandArticleEditor')->name('brand_article_edit')->where('id', '[0-9]+');
    Route::get('flink','FlinkController@Index');
    Route::get('flink/create','FlinkController@CreateFlink');
    Route::get('flink/edit/{id}','FlinkController@EditFlink')->where('id', '[0-9]+');
    Route::get('flink/delete/{id}','FlinkController@DeleteFlink')->where('id', '[0-9]+');
    Route::put('flink/edit/{id}','FlinkController@PostEditFlink')->where('id', '[0-9]+');
    Route::post('flink/create','FlinkController@PostCreateFlink');
    Route::get('admin/list','AdminController@Index');
    Route::get('admin/regsiter','AdminController@Register');
    Route::post('admin/regsiter','AdminController@PostRegister');
    Route::get('admin/edit/{id}','AdminController@Edit')->where('id', '[0-9]+');
    Route::get('admin/delete/{id}','AdminController@delete')->where('id', '[0-9]+');
    Route::put('admin/edit/{id}','AdminController@PostEdit')->where('id', '[0-9]+');
    Route::get('admin/userauth','AdminController@Userauth');
    Route::get('admin/article/infos','AdminController@ArticleInfos')->name('admin_articles');
    Route::get('/clearnotification','AdminController@NotificationClear');
    Route::get('userlist','FrontUserController@Index');
    Route::get('useradd','FrontUserController@UserAdd');
    Route::get('user/edit/{id}','FrontUserController@UserEdit')->where('id', '[0-9]+');
    Route::get('user/charge','FrontUserController@UserCharge');
    Route::put('user/charge','FrontUserController@PostUserCharge');
    Route::get('user/charge-history','FrontUserController@UserChargeHistory');
    Route::put('user/edit/{id}','FrontUserController@PostUserEdit')->where('id', '[0-9]+');
    Route::get('user/delete/{id}','FrontUserController@UserDelete')->where('id', '[0-9]+');
    Route::get('ask','AskController@Index')->name('adminasklists');
    Route::get('ask/add','AskController@Add');
    Route::post('ask/add','AskController@PostAdd')->name('ask_create');
    Route::get('ask/edit/{id}','AskController@AskEdit')->where('id', '[0-9]+');
    Route::put('ask/edit/{id}','AskController@PostEdit')->where('id', '[0-9]+')->name('ask_edit');
    Route::get('ask/delete/{id}','AskController@Delete')->where('id', '[0-9]+');
    Route::get('ask/pending','AskController@PendingAsks');
    Route::get('answers','AnswerController@AnswerLists')->name('answerlists');
    Route::get('answer/edit/{id}','AnswerController@AnswerEdit')->where('id', '[0-9]+');
    Route::put('answer/edit/{id}','AnswerController@PostEdit')->where('id', '[0-9]+')->name('answer_edit');
    Route::get('answer/delete/{id}','AnswerController@AnswerDetete')->where('id', '[0-9]+');
    Route::get('answers/pending','AnswerController@AnswerPending');
    Route::get('comments','CommentsController@Index')->name('commentlists');
    Route::get('comments/pendingaudit','CommentsController@Pending');
    Route::get('comment/edit/{id}','CommentsController@CommentEdit')->where('id', '[0-9]+');
    Route::put('comment/edit/{id}','CommentsController@PostCommentEdit')->where('id', '[0-9]+');
    Route::get('comment/delete/{id}','CommentsController@DeleteComment')->where('id', '[0-9]+');
    Route::get('commentsreversion','CommentReversionController@Index')->name('reversionlists');
    Route::get('commentsreversion/pendingaudit','CommentReversionController@Pending');
    Route::get('reversion/edit/{id}','CommentReversionController@ReversionEdit')->where('id', '[0-9]+');
    Route::put('reversion/edit/{id}','CommentReversionController@PostReversionEdit')->where('id', '[0-9]+');
    Route::get('reversion/delete/{id}','CommentReversionController@ReversionDelete')->where('id', '[0-9]+');
    Route::get('makesitemap','SiteMapController@Index');
    Route::get('makemsitemap','SiteMapController@MobileSitemap');
    Route::get('phone','PhoneManageController@Index')->name('phone_filter');
    Route::get('phoneexport','PhoneManageController@PhoneExcelExport')->name('phone_export');
    Route::post('phone/create','PhoneManageController@CreatePhoneManage');
    Route::get('phone/edit/{id}','PhoneManageController@PhoneManageEdit')->where('id', '[0-9]+');
    Route::put('phone/edit/{id}','PhoneManageController@PhoneManageEditPost')->where('id', '[0-9]+');
    Route::get('phone/delete/{id}','PhoneManageController@DeletePhone')->where('id', '[0-9]+');
    Route::get('sysconfig','SysConfigController@Index');
    Route::get('sysinfo','SysConfigController@Info');
    Route::get('searchkey','SeoInfoController@SearchKey');
    Route::get('webinfo','SeoInfoController@Index');
    Route::get('brands','SeoInfoController@BrandsView');
    Route::get('worklinks','SeoInfoController@WorkLinks');
    Route::get('workcheck','SeoInfoController@WorkCheck');
    Route::get('querylisthtml','QuerylistHtmlController@getQueryListHtml');
    Route::get('brandimport','NaichaBrandController@importBrands');
    Route::get('brandlists','NaichaBrandController@brandListsView')->name('pbrandlists');
    Route::get('branddatas/del/{id}','NaichaBrandController@Delete')->where('id', '[0-9]+');
    Route::post('brandstatus/{id}', 'NaichaBrandController@Status')->name('status')->where('id', '[0-9]+');
    Route::get('brandtypelist','BrandTypeController@brandTypeLIst')->name('brandtypelist');
    Route::get('brandtypecreate','BrandTypeController@brandTypeCreate');
    Route::post('brandtypecreate','BrandTypeController@postBrandTypeCreate');
    Route::get('brandtype/edit/{id}','BrandTypeController@brandTypeEdit')->where('id', '[0-9]+');
    Route::post('brandtype/edit/{id}','BrandTypeController@postBrandTypeEreate')->where('id', '[0-9]+');
    Route::get('brandtype/delete/{id}','BrandTypeController@brandTypeDelete')->where('id', '[0-9]+');
    Route::get('importbrands','NaichaBrandController@brandsImport');
    Route::put('importbrands','NaichaBrandController@postBrandsImport')->name('importbrands');
    Route::get('investmentlist','InvestMentController@InvestMentList');
    Route::get('investmentcreate','InvestMentController@InvestMentCreate');
    Route::post('investmentcreate','InvestMentController@postInvestMentCreate');
    Route::get('investment/edit/{id}','InvestMentController@InvestMentEdit')->where('id', '[0-9]+');
    Route::post('investment/edit/{id}','InvestMentController@postInvestMentEdit')->where('id', '[0-9]+');
    Route::get('acreagelist','AcreageMentController@acreageMentList');
    Route::get('acreagecreate','AcreageMentController@acreageMentCreate');
    Route::post('acreagecreate','AcreageMentController@postAcreageMentCreate');
    Route::get('acreage/edit/{id}','AcreageMentController@acreageMentEdit')->where('id', '[0-9]+');
    Route::get('allurls','CheckToolsController@cheakUrls');
    Route::get('processtables','CheckToolsController@ProcessTables');
    Route::get('checktool/articletime','CheckToolsController@updateArticleTime');
    Route::get('checktool/brandnamecr','CheckToolsController@BrandnameCr');
    Route::get('guarded_keywoeds','GuardedKeywordsController@getGuardedKeywords');
    Route::get('guarded_edit_keywoeds','GuardedKeywordsController@editGuardedKeywords');
    Route::post('guarded_edit_keywoeds_post','GuardedKeywordsController@postEditGuardedKeywords')->name('edit_guarded_keywords');
    Route::post('acreage/edit/{id}','AcreageMentController@postAcreageMentEdit')->where('id', '[0-9]+');
    Route::get('linkresult','BaiduLinkSubmitController@LinkResults');
    Route::get('/captcha/{config?}','CaptchasController@Captchas');
});
