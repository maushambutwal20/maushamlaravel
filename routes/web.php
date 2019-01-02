<?php


Route::get('userview', function () {
    return view('front.userview');
});


Route::get('home','RegisterController@Home')->name('home');




Route::get('/', function () {
    return view('back.pages.index');
});



// manage students 
Route::get('registernew','RegisterController@addNew')->name('registernew');
Route::post('addstudent','RegisterController@store')->name('addstudent');
Route::get('viewregister','RegisterController@manageStudent')->name('viewregister');
Route::get('deletestudent/{id}','RegisterController@deleteStudent')->name('deletestudent');
Route::get('edit-student/{id}','RegisterController@test')->name('edit-student');


// manage results
Route::get('addresult','RegisterController@addresult')->name('addresult');
Route::get('viewresult','RegisterController@viewResults')->name('viewresult');
Route::get('addnewresult','RegisterController@addresult');
Route::post('addnewresult','RegisterController@newresult')->name('addnewresult');
Route::post('updatemark/{id}','RegisterController@update')->name('updatemark');


//get students by grade
Route::get('day','RegisterController@Day11')->name('day');
Route::get('morning','RegisterController@Morning11')->name('morning');
Route::get('dayd','RegisterController@Day12')->name('dayd');
Route::get('morningm','RegisterController@Morning12')->name('morningm');


// rank the student
Route::get('topfrom11','RegisterController@topFive11')->name('topfrom11');
Route::get('poorfrom11','RegisterController@poorFrom11')->name('poorfrom11');
Route::get('topfrom12','RegisterController@topFive12')->name('topfrom12');
Route::get('poorfrom12','RegisterController@poorFrom12')->name('poorfrom12');


Route::get('totalstd','RegisterController@totalstudents')->name('totalstd');
Route::get('totalresult','RegisterController@Resultpublished')->name('totalresult');
Route::get('viewdetail/{id}','RegisterController@viewDetails')->name('viewdetail');


          //users view


Route::get('checkresult','RegisterController@checkResults')->name('checkresult');
Route::get('topfromgrade11','RegisterController@topFrom11')->name('topfromgrade11');
Route::get('poorfromgrade11','RegisterController@poorStudent11')->name('poorfromgrade11');
Route::get('topfrom12','RegisterController@topFives12')->name('topfrom12');
Route::get('poorfromfrade12','RegisterController@poorStudent12')->name('poorfromfrade12');


Route::get('sendMail','SendMailController@sendMail');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
