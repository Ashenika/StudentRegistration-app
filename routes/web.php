<?php


//to first page
Route::get('/', function () {
    return view('welcome');
});


Route::get('stu/view', 'FormController@view');//to call the view method in controller class

Route::get('stu/welcome', array('uses' => 'FormController@welcome'));//get the values from welcome.blade.php using GET method

Route::post('stu/update/{index}', 'FormController@update');

Route::post('stu/view', array('uses' => 'FormController@view'));//view the values Posted by POST method and displays them

Route::get('stu/welcome', array('uses' => 'FormController@add', 'as' => 'users.add'));//add button action URL is 'stu/welcome'

Route::get('stu/view', array('uses' => 'FormController@show', 'as' => 'users.show'));//view details button actions and redirect pages.
//Route::post('stu/update&{index}', 'FormController@update');
Route::get('stu/edit/{index}', array('uses' => 'FormController@editStu', 'as' => 'users.edit'));//edit method. as 'users.edit' it is used in view.blade.php->Edit button action
        // here gets the $index of the controller class as {index} so URL is like this => 'stu/edit/2015337'
Route::post('stu/update', array('uses' => 'FormController@update', 'as' => 'users.update'));//update function
//Route::post('stu/update','FormController@update');

Route::get('stu/delete/{index}', ['uses' => 'FormController@delete', 'as' => 'users.delete']);//delete method calling similar to edit method.
//Route::post('stu/store','FormController@store'); //to call the store method in Controller class