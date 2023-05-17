<?php

use Illuminate\Support\Facades\Route;

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


	Route::get('/', "HomeController@index");
	Route::get('/about', "HomeController@about");
	Route::get('/articles', "HomeController@articles");
	Route::get('/Q&A', "HomeController@ques");
	Route::get('/dictionary', "HomeController@dictionary");
	Route::get('register', 'Auth\RegisterController@showRegister');
	Route::post('register', 'Auth\RegisterController@register')->name('register');


 //login
	Route::get('login', 'Auth\LoginController@showLoginForm');
	Route::post('login', 'Auth\LoginController@login')->name('login'); 




	Route::match(['get','post'],'/change-password', 'Admin\AdminController@changePassword')->name('changepassword');
 
	Route::group(['prefix'=>'admin','as'=>'admin','middleware'=>['auth','checkadmin'],'as'=>'admin.'],function() {
		
		Route::match(['get','post'],'/logout','Auth\LoginController@logout')->name('logout');
		Route::match(['get','post'],'/dashboard', 'Admin\DashboardController@index');
 
		Route::group(['prefix'=>'alldefinitions'],function() {

			Route::group(['prefix'=>'definition'],function() {

				Route::match(['get','post'],'add', 'Admin\DefinitionController@add_def');
				Route::get('list', 'Admin\DefinitionController@list_def');
				// Route::get('update/{id}','Admin\CategoryController@updateCategory');
				// Route::get('delete/{id}','Admin\CategoryController@deleteCategory');
				// Route::post('change-status','Admin\CategoryController@changeStatus')->name('category.changestatus');
				// Route::post('select-topcategory','Admin\CategoryController@selectTopCategory')->name('category.selectyopcategory');
			});

			Route::group(['prefix'=>'questions'],function() {
					
				Route::match(['get','post'],'add', 'Admin\DefinitionController@add_question');
				Route::get('/list', 'Admin\DefinitionController@list_question');
				// Route::get('brand-update/{id}','Admin\BrandController@updateBrand');
				// Route::get('brand-delete/{id}','Admin\BrandController@deleteBrand');
				// Route::post('change-status','Admin\BrandController@changeStatus')->name('brand.changestatus');
				// Route::post('change-order','Admin\BrandController@changeOrder')->name('brand.change-order');
			});


				
			// Route::group(['prefix'=>'product'],function() {
			// 	Route::match(['get','post'],'add', 'Admin\ProductController@add')->name('product.addproduct');
			// 	Route::match(['get','post'],'list', 'Admin\ProductController@productList')->name('product.filter');
			// 	Route::get('update/{id}','Admin\ProductController@updateProduct');
			// 	Route::get('delete/{id}','Admin\ProductController@deleteProduct');
			// 	Route::post('change-status','Admin\ProductController@changeStatus')->name('product.changestatus');
			// 	Route::post('topselling-status','Admin\ProductController@topSellingStatus')->name('product.topsellingstatus');
			// 	Route::post('dealsoftheday','Admin\ProductController@dealsofTheDay')->name('product.dealsoftheday');
			// 	Route::post('dealsoftheweek','Admin\ProductController@dealsofTheWeek')->name('product.dealsoftheweek');
			// 	Route::post('newarrival','Admin\ProductController@newArrival')->name('product.newarrival');
				
			// 	Route::match(['get','post'],'add-variant-product/{any}', 'Admin\ProductController@addVariantProduct')->name('product.addvariant');
			// 	Route::get('variant-productlist/{id}', 'Admin\ProductController@variantProductList');
			// 	Route::get('update-variant-product/{pparent_id}/{variant_id}', 'Admin\ProductController@updateVariantProduct');
			// 	Route::get('delete-variantproduct/{id}','Admin\ProductController@deleteVariantProduct');
			// 	Route::post('variantproduct-change-status','Admin\ProductController@changeVariantProductStatus')->name('product.variantproduct.changestatus');
			// });
			
			Route::group(['prefix'=>'articles'],function() {
				Route::match(['get','post'],'add', 'Admin\DefinitionController@add_articles');
				Route::get('list', 'Admin\DefinitionController@list_articles');
				// Route::get('update-variant-attribute/{id}','Admin\ProductController@updateVariantAttribute');
			});
			
			Route::group(['prefix'=>'category'],function() {
				Route::group(['prefix'=>'categorybyalphabet'],function() {
					Route::match(['get','post'],'add', 'Admin\DefinitionController@add_cat_by_alpha');
					Route::get('list', 'Admin\DefinitionController@list_cat_by_alpha');
					// Route::get('update/{id}','Admin\ProductController@updateVariant');
					// Route::post('status','Admin\ProductController@statusVariant')->name('status.variant');
				});
				Route::group(['prefix'=>'categorybybranch'],function() {
					Route::match(['get','post'],'add', 'Admin\DefinitionController@add_cat_by_branch');
					Route::get('list', 'Admin\DefinitionController@list_cat_by_branch');
					// Route::get('update/{id}','Admin\ProductController@updateVariant');
					// Route::post('status','Admin\ProductController@statusVariant')->name('status.variant');
				});
			});
			
		});
		
		Route::group(['prefix'=>'information'],function() {
			Route::match(['get','post'],'add', 'Admin\InformationController@add');
			Route::get('list', 'Admin\InformationController@list');
			// Route::get('update-variant-attribute/{id}','Admin\ProductController@updateVariantAttribute');
		});
		Route::group(['prefix'=>'subscribers'],function() {
			Route::get('list', 'Admin\SubscriberController@list');
			// Route::get('update-variant-attribute/{id}','Admin\ProductController@updateVariantAttribute');
		});
	});


	Route::match(['get','post'],'/logout','Auth\LoginController@logout')->name('logout');
