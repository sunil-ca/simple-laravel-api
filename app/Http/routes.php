<?php

Route::resource('users', 'UsersController');

Route::get('search/{q}', [
    'uses' => 'UsersController@search'
]);