<?php

use Illuminate\Http\Request;

Route::resource('signatures', 'Api\SignatureController')
    ->only(['index', 'store', 'show']);

Route::put('signatures/{signature}/report', 'Api\ReportSignature@update');
