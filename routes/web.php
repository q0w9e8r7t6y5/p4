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

// main page
Route::get('/', 'FormController@index');

// form validation and store in database
Route::get('form', 'FormController@searchProcess');

// order page
Route::get('order', 'OrderController@index');

// order validation and store in database
Route::get('store', 'OrderController@store');

Route::get('orderlist', 'OrderListController@index');

Route::get('edit', 'EditController@index');
Route::get('/edit/{id}', 'EditController@show');


# Show the form to edit a specific user
Route::get('/edit/{id}/edit', 'EditController@edit');

# Process the form to edit a specific user
Route::put('/edit/{id}', 'EditController@update');

# DELETE
# Show the page to confirm deletion of a user
Route::get('/edit/{id}/delete', 'EditController@delete');
//

# NOT WORKING
# Process the deletion of a user
Route::delete('/edit/{id}', 'EditController@destroy');


Route::get('/debug', function () {

    $debug = [
        'Environment' => App::environment(),
        'Database defaultStringLength' => Illuminate\Database\Schema\Builder::$defaultStringLength,
    ];

    /*
    The following commented out line will print your MySQL credentials.
    Uncomment this line only if you're facing difficulties connecting to the
    database and you need to confirm your credentials. When you're done
    debugging, comment it back out so you don't accidentally leave it
    running on your production server, making your credentials public.
    */
    #$debug['MySQL connection config'] = config('database.connections.mysql');

    try {
        $databases = DB::select('SHOW DATABASES;');
        $debug['Database connection test'] = 'PASSED';
        $debug['Databases'] = array_column($databases, 'Database');
    } catch (Exception $e) {
        $debug['Database connection test'] = 'FAILED: '.$e->getMessage();
    }

    dump($debug);
});
