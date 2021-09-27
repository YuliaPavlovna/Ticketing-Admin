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

/* Route::get('/', function () {
    return view('welcome');
}); */


Route::get('/', 'App\Http\Controllers\TaraadminController@dashboard_1');
Route::get('/index', 'App\Http\Controllers\TaraadminController@dashboard_1');
Route::post('/latest-sales', 'App\Http\Controllers\TaraadminController@latest_sales');
Route::get('/event', 'App\Http\Controllers\TaraadminController@event');
Route::get('/event-detail', 'App\Http\Controllers\TaraadminController@event_detail');
Route::get('/customers', 'App\Http\Controllers\TaraadminController@customers');
Route::get('/analytics', 'App\Http\Controllers\TaraadminController@analytics');
Route::get('/reviews', 'App\Http\Controllers\TaraadminController@reviews');
Route::get('/app-calender', 'App\Http\Controllers\TaraadminController@app_calender');
Route::get('/app-profile', 'App\Http\Controllers\TaraadminController@app_profile');
Route::get('/post-details', 'App\Http\Controllers\TaraadminController@post_details');
Route::get('/chart-chartist', 'App\Http\Controllers\TaraadminController@chart_chartist');
Route::get('/chart-chartjs', 'App\Http\Controllers\TaraadminController@chart_chartjs');
Route::get('/chart-flot', 'App\Http\Controllers\TaraadminController@chart_flot');
Route::get('/chart-morris', 'App\Http\Controllers\TaraadminController@chart_morris');
Route::get('/chart-peity', 'App\Http\Controllers\TaraadminController@chart_peity');
Route::get('/chart-sparkline', 'App\Http\Controllers\TaraadminController@chart_sparkline');
Route::get('/ecom-checkout', 'App\Http\Controllers\TaraadminController@ecom_checkout');
Route::get('/ecom-customers', 'App\Http\Controllers\TaraadminController@ecom_customers');
Route::get('/ecom-invoice', 'App\Http\Controllers\TaraadminController@ecom_invoice');
Route::get('/ecom-product-detail', 'App\Http\Controllers\TaraadminController@ecom_product_detail');
Route::get('/ecom-product-grid', 'App\Http\Controllers\TaraadminController@ecom_product_grid');
Route::get('/ecom-product-list', 'App\Http\Controllers\TaraadminController@ecom_product_list');
Route::get('/ecom-product-order', 'App\Http\Controllers\TaraadminController@ecom_product_order');
Route::get('/email-compose', 'App\Http\Controllers\TaraadminController@email_compose');
Route::get('/email-inbox', 'App\Http\Controllers\TaraadminController@email_inbox');
Route::get('/email-read', 'App\Http\Controllers\TaraadminController@email_read');
Route::get('/form-editor-summernote', 'App\Http\Controllers\TaraadminController@form_editor_summernote');
Route::get('/form-element', 'App\Http\Controllers\TaraadminController@form_element');
Route::get('/form-pickers', 'App\Http\Controllers\TaraadminController@form_pickers');
Route::get('/form-validation-jquery', 'App\Http\Controllers\TaraadminController@form_validation_jquery');
Route::get('/form-wizard', 'App\Http\Controllers\TaraadminController@form_wizard');
Route::get('/map-jqvmap', 'App\Http\Controllers\TaraadminController@map_jqvmap');
Route::get('/page-error-400', 'App\Http\Controllers\TaraadminController@page_error_400');
Route::get('/page-error-403', 'App\Http\Controllers\TaraadminController@page_error_403');
Route::get('/page-error-404', 'App\Http\Controllers\TaraadminController@page_error_404');
Route::get('/page-error-500', 'App\Http\Controllers\TaraadminController@page_error_500');
Route::get('/page-error-503', 'App\Http\Controllers\TaraadminController@page_error_503');
Route::get('/page-forgot-password', 'App\Http\Controllers\TaraadminController@page_forgot_password');
Route::get('/page-lock-screen', 'App\Http\Controllers\TaraadminController@page_lock_screen');
Route::get('/page-login', 'App\Http\Controllers\TaraadminController@page_login');
Route::get('/page-register', 'App\Http\Controllers\TaraadminController@page_register');
Route::get('/table-bootstrap-basic', 'App\Http\Controllers\TaraadminController@table_bootstrap_basic');
Route::get('/table-datatable-basic', 'App\Http\Controllers\TaraadminController@table_datatable_basic');
Route::get('/uc-lightgallery', 'App\Http\Controllers\TaraadminController@uc_lightgallery');
Route::get('/uc-nestable', 'App\Http\Controllers\TaraadminController@uc_nestable');
Route::get('/uc-noui-slider', 'App\Http\Controllers\TaraadminController@uc_noui_slider');
Route::get('/uc-select2', 'App\Http\Controllers\TaraadminController@uc_select2');
Route::get('/uc-sweetalert', 'App\Http\Controllers\TaraadminController@uc_sweetalert');
Route::get('/uc-toastr', 'App\Http\Controllers\TaraadminController@uc_toastr');
Route::get('/ui-accordion', 'App\Http\Controllers\TaraadminController@ui_accordion');
Route::get('/ui-alert', 'App\Http\Controllers\TaraadminController@ui_alert');
Route::get('/ui-badge', 'App\Http\Controllers\TaraadminController@ui_badge');
Route::get('/ui-button', 'App\Http\Controllers\TaraadminController@ui_button');
Route::get('/ui-button-group', 'App\Http\Controllers\TaraadminController@ui_button_group');
Route::get('/ui-card', 'App\Http\Controllers\TaraadminController@ui_card');
Route::get('/ui-carousel', 'App\Http\Controllers\TaraadminController@ui_carousel');
Route::get('/ui-dropdown', 'App\Http\Controllers\TaraadminController@ui_dropdown');
Route::get('/ui-grid', 'App\Http\Controllers\TaraadminController@ui_grid');
Route::get('/ui-list-group', 'App\Http\Controllers\TaraadminController@ui_list_group');
Route::get('/ui-media-object', 'App\Http\Controllers\TaraadminController@ui_media_object');
Route::get('/ui-modal', 'App\Http\Controllers\TaraadminController@ui_modal');
Route::get('/ui-pagination', 'App\Http\Controllers\TaraadminController@ui_pagination');
Route::get('/ui-popover', 'App\Http\Controllers\TaraadminController@ui_popover');
Route::get('/ui-progressbar', 'App\Http\Controllers\TaraadminController@ui_progressbar');
Route::get('/ui-tab', 'App\Http\Controllers\TaraadminController@ui_tab');
Route::get('/ui-typography', 'App\Http\Controllers\TaraadminController@ui_typography');
Route::get('/widget-basic', 'App\Http\Controllers\TaraadminController@widget_basic');



