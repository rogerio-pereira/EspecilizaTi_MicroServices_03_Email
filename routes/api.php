<?php

use App\Jobs\CompanyCreatedJob;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return response()->json(['message' => 'success']);
});


Route::get('/test', function() {
    CompanyCreatedJob::dispatch('teste2@email.com');

    return response()->json(['message' => 'success']);
});