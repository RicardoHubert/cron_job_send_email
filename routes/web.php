    <?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\MessageController;

    // use Http\Controller\MessageController;  

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
        return view('welcome');
    });
    Route::get('/get_users', [MessageController::class, 'getUsers']);
    Route::get('/get_messages', [MessageController::class, 'getMessages']);
    // Route::post('notifications', 'MessageController@sendMail');
    Route::post('/notifications', [MessageController::class, 'sendMail']);

