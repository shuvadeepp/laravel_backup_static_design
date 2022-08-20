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
/* TESTING */
/* Route::get('/', function () {
    return view('application.viewTable');
}); */

/* ******************************<NAME>********************************** */
Route::match(['get', 'post'], '{controller}/{action?}/{params?}', function ($controller, $action = 'index', $params = '') {
    // echo 111;exit;
    $params = explode('/', $params);
    $app = app();
    $controller = $app->make("\App\Http\Controllers\\" . ucwords($controller) . 'Controller',['action' => $action]);
    return $controller->callAction($action, $params);
});

/* ******************************AJAX Controller********************************** */
Route::match(['get', 'post'], '/EntercontrollerName/{action}', function ($action) {
    $app = app();
    $controller = $app->make("\App\Http\Controllers\EntercontrollerName");
    return $controller->callAction($action, []);
});