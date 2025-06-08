<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Http\Request;

Route::get('/', function () {
    return Inertia::render('index');
});

Route::post('/room', function(Request $request) {
    return Inertia::render('room', [
        'title' => $request->name,
    ]);
});

Route::post('/message', function (Request $request) {
    event(new \App\Events\MessageEvent($request->message));
    return Inertia::render('Chat', [
        'status' => 'Message sent',
        'message' => $request->message
    ]);
});



//Route::get('/about', function () {
//    return view('about');
//});

//Route::get('/contacts/{id}', function ($id) {
//    $contacts = [
//        [
//            'id' => 1,
//            'name' => 'Chris',
//            'phone' => '412-612-1672'
//        ],
//        [
//            'id' => 2,
//            'name' => 'Your Mother',
//            'phone' => '421-412-4123'
//        ]
//        ];
//
//    $contact = Arr::first($contacts, fn($contact) => $contact["id"] == $id);
//
//    return view('contact', [
//        'contact' => $contact
//    ]);
//});
