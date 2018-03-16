<?php
Route::get('/', function () {
    return view('dashboard');
});

Route::get('/homes', function(){
  return view('homes');
});
