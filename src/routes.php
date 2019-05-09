<?php
Route::group(['middleware' => ['web']], function () {
    Route::get("contactus", "Hosein\Contactus\Controllers\ContactusController@index");
    Route::get("panelContact", "Hosein\Contactus\Controllers\ContactusController@panelContact");
    Route::post("contactus", "Hosein\Contactus\Controllers\ContactusController@create");
    Route::get("showContact/{id}", "Hosein\Contactus\Controllers\ContactusController@showContact");
    Route::get("deleteContact/{id}", "Hosein\Contactus\Controllers\ContactusController@deleteContact");

});
