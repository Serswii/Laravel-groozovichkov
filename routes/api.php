<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RandomNumbersController;

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

/*
 * Получение списка рандомных чисел из таблицы random_numbers
 */
Route::get('/', [RandomNumbersController::class, "RandomNumbersAll"]);
Route::get('/{id}', [RandomNumbersController::class, "retrieve"]);
Route::post('/', [RandomNumbersController::class, "generate"]);
