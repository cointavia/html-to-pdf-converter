<?php

Route::get('composer', function(){
    echo 'Hello from the calculator package!';
});


Route::get('add/{a}/{b}', 'Cointavia\Composer\ComposerTestController@add');
Route::get('subtract/{a}/{b}', 'Cointavia\Composer\ComposerTestController@subtract');
