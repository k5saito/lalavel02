<?php
use App\Book;
use Illuminate\Http\Request;

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
/**
* 本のダッシュボード表示(books.blade.php)
*/
Route::get('/', 'BooksController@index');

/**
* 新「本」を追加 
*/
Route::post('/books', 'BooksController@store');


/**
* 本を削除 
*/
// Bookはモデルに接続して、/book/{book}　に対応するデータを$bookに代入する
Route::delete('/book/{book}', 'BooksController@destroy');


/**
* 「本」を更新画面表示
*/
Route::post('/booksedit/{book}','BooksController@edit');

/**
* 「本」を更新処理　$requestの中にhiddenで飛ばした$book内のIDを受けてる
*/
Route::post('books/update','BooksController@update');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');