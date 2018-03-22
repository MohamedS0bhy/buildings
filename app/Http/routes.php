<?php
/*
start admin routes
*/
Route::group(['middleware'=>['web','admin']],function()
{
  #admin
    Route::get('/adminpanel','AdminController@index');
    Route::get('/adminpanel/buYear/statics','AdminController@showYearStatics');
    Route::post('/adminpanel/buYear/statics','AdminController@showThisYear');
    // Route::get('/adminpanel/users/data','UsersController@anyData');





#users


  Route::resource('/adminpanel/users','UsersController');

  Route::post('/adminpanel/users/changepassword','UsersController@UpdatePassword');
  Route::get('/adminpanel/users/{id}/delete','UsersController@destroy');

#sitesetting
  Route::get('/adminpanel/sitesetting','SiteSettingController@index');
  Route::post('/adminpanel/sitesetting','SiteSettingController@store');


#bus
Route::resource('/adminpanel/bu','BuController',['except'=>['index','show']]);

// get the buildings which the user added
Route::get('/adminpanel/bu/{id?}','BuController@index');
Route::get('/adminpanel/bu/{id}/{status}','BuController@changeStatus');








Route::post('/adminpanel/bu','BuController@store');
Route::get('/adminpanel/bu/{id}/delete','BuController@destroy');


// Contacts(but available for admin only)
Route::resource('/adminpanel/contact','ContactController');
Route::get('/adminpanel/contact/{id}/edit','ContactController@edit');

Route::get('/adminpanel/contact/{id}/delete','ContactController@destroy');

});



/*
end  admin routes
*/

/*
start user routes
*/

/*
end user routes
*/
Route::group(['middleware'=>'web'],function()
{

  Route::auth();

  Route::get('/', function () {
      return view('welcome');
  });
  Route::get('/home', 'HomeController@index');
  Route::get('showallBuildings','BuController@buallenable');
  Route::get('forRent','BuController@ForRent');
  Route::get('forBuy','BuController@ForBuy');
  Route::get('/type/{type}','BuController@showBytype');
  Route::get('/search','BuController@search');

  Route::get('/SingleBuilding/{id}','BuController@ShowSingle');
// Route::get('ajax/bu/information','BuController@getAjaxInformation');
 Route::get('/contact','HomeController@contact');

 // user can send messages and sggestions by this function
Route::post('/contact','ContactController@store');

// enabling users to add building
Route::get('user/create/building','BuController@userAddView');
Route::post('user/create/building','BuController@userstore');
Route::get('/user/buildingshow','BuController@usershowbuilding')->middleware('auth');
Route::get('/user/buildingshowwaiting','BuController@usershowbuildingwaitng')->middleware('auth');
Route::get('/user/buildingshowall/','BuController@usershowbuildingall')->middleware('auth');

Route::get('/user/editsetting/','UsersController@editinfo')->middleware('auth');
Route::patch('/user/editsetting/',['as'=>'users.editsetting','uses'=>'UsersController@userupdateprofile'])->middleware('auth');

Route::post('/user/changepassword','UsersController@changePassword')->middleware('auth');
Route::get('/user/building/edit/{id}','BuController@userEditBuilding')->middleware('auth');
Route::post('/user/update/building/','BuController@userUpdateBuilding')->middleware('auth');







});
