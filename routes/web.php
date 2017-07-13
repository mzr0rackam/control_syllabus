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
  return redirect('home');
});

Route::group(['middleware' => 'auth'], function () {
  //    Route::get('/link1', function ()    {
  //        // Uses Auth Middleware
  //    });

  //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
  #adminlte_routes
});


/*
 * Admin Routes
 *
 */
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function () {
  /*
   * Roles Routes
   *
   */
  Route::resource('roles', 'Admin\RoleController');

  /*
   * User Routes
   *
   */
  Route::resource('users', 'Admin\UserController');

});

// Route::group(['prefix'=>'docente'], function() {
//   /*
//    * Docentes Routes
//    *
//    */
// });
Route::resource('docentes', 'DocenteController');
