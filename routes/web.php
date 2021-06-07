<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $pageItems = [
        [ 'src' => 'https://picsum.photos/601' ],
        [ 'src' => 'https://picsum.photos/602' ],
        [ 'src' => 'https://picsum.photos/603' ],
        [ 'src' => 'https://picsum.photos/604' ],
        [ 'src' => 'https://picsum.photos/605' ],
        [ 'src' => 'https://picsum.photos/606' ],
        [ 'src' => 'https://picsum.photos/607' ],
        [ 'src' => 'https://picsum.photos/608' ],
        [ 'src' => 'https://picsum.photos/609' ],
        [ 'src' => 'https://picsum.photos/610' ],
        [ 'src' => 'https://picsum.photos/611' ],
    ];

    $itemsPerPage = 3;
    $totalItems = count($pageItems);
    $totalPages = $totalItems / $itemsPerPage;

    for ($i = 0, $count = 0; $i < $totalItems; $i += $itemsPerPage, $count++) {
        for ($j = 0; $j < $itemsPerPage && $j + $i < $totalItems; $j++) {
            $pageItems[$i + $j]['pageNumber'] = $count;
        }
    }

    return view('welcome', [
        'pageItems' => $pageItems, 'totalPages' => $totalPages
    ] );
});