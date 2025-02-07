<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

Route::post('/index', function (Illuminate\Http\Request $request) {
    $tasks = $request->session()->get('tasks', []);
    $tasks[] = $request->input('task');
    $request->session()->put('tasks', $tasks);
    return redirect()->back();
})->name('task.store');

Route::delete('/index/{task_id}', function (Illuminate\Http\Request $request, $task_id) {
    $tasks = $request->session()->get('tasks', []);
    if (isset($tasks[$task_id])) {
        unset($tasks[$task_id]);
        $request->session()->put('tasks', $tasks);
    }
    return redirect()->back();
})->name('task.delete');

Route::delete('/index', function (Illuminate\Http\Request $request) {
    $request->session()->forget('tasks');
    return redirect()->back();
})->name('task.clear');