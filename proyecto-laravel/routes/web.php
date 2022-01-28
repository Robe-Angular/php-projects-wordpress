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
//use App\Image;

Route::get('/', function () {
    /*
    $images = Image::all();
    foreach($images as $image){
        echo $image->image_path.'<br>';
        echo $image->description.'<br>';
        echo ($image->user->name.' '.$image->user->surname).'<br>';
        
        if(count($image->comments) >= 1){
            echo '<h4>Comentarios</h4>';
            foreach($image->comments as $comment){
                echo ($comment->user->name.' '.$comment->user->surname).': ';
                echo $comment->content.'</br>';
                
            }
        }
        echo 'LIKES: '.count($image->likes);
        echo '<hr>';
        
    }
    die();
     * 
     */
    return view('welcome');
});

//Generales
Auth::routes();
Route::get('/', 'HomeController@index')->name('home');

//Usuario
Route::get('/configuracion','UserController@config')->name('config');
Route::post('/user/update','UserController@update')->name('user.update');
Route::post('/user/passwordUpdate','UserController@passwordUpdate')->name('user.passwordUpdate');
Route::get('/user/avatar/{filename}','UserController@getImage')->name('user.avatar');
Route::get('/perfil/{id}','UserController@profile')->name('profile');
Route::get('/gente/{search?}','UserController@index')->name('user.index');

//Imagen
Route::get('/subir-imagen','ImageController@create')->name('image.create');
Route::post('/image/save','ImageController@save')->name('image.save');
Route::get('/image/file/{filename}','ImageController@getImage')->name('image.file');
Route::get('/imagen/{filename}','ImageController@detail')->name('image.detail');

//Comentario
Route::post('/comment/save','CommentController@save')->name('comment.save');
Route::get('/comment/delete/{id}','CommentController@delete')->name('comment.delete');
Route::get('/image/delete/{id}','ImageController@delete')->name('image.delete');
Route::get('/image/editar/{id}','ImageController@edit')->name('image.edit');
Route::post('/image/update','ImageController@update')->name('image.update');

//Like
Route::get('/like/{image_id}','LikeController@like')->name('like.save');
Route::get('/dislike/{image_id}','LikeController@dislike')->name('like.dislike');
Route::get('/likes','LikeController@index')->name('likes');

