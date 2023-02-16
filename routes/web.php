<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function (Request $request) {
    // logger()->channel('telegram')->info($request->header('User-Agent'));

    return view('welcome');
});
