<?php

use Illuminate\Http\Request;

/*
 * Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
 */

Route::resource('signatures', 'Api\SignatureController')
    ->only(['index', 'store', 'show']);

Route::put('signatures/{signature}/report', 'Api\ReportSignature@update');
