<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return "Hello world!";
});

Route::get('/valami', function () {
    return view('valami');
});

// Route::get('/contact', function () {
//     return view('contact');
// });

Route::view('/contact', 'contact');

Route::get('/tomb-visszaad', function () {
    $tomb = ["kulcs" => "ertek"];
    return $tomb;
});

Route::get("/udvozles", function () {
    $name = "Attila";
    $age = 41;

    return view("udvozollek", [
        "nev" => $name,
        "kor" => $age
    ]);
});

Route::get("/bevasarlolista", function () {
    $lista = [
        "tejföl",
        "tej",
        "liszt",
        "csoki",
        "dinnye"
    ];

    return view("sajatbevasarlas", [
        "bevasarlolista" => $lista
    ]);
});

// felhasznaloiadat?felhasznalonev=attila&vezeteknev=Gludovátz&keresztnev=Attila
Route::get("/felhasznaloiadat", function () {
    return view("userinput", [
        "input" => request("felhasznalonev"),
        "vnev" => request("vezeteknev"),
        "knev" => request("keresztnev"),
    ]);
});

Route::get('/posts/{post}', function ( $post ) {

    // mi lenne ha itt az adatbázisból jönnének az adatok?
    // szimuláljuk az adatbázisunkat:
    $posts = [
        'first' => 'Első blogbejegyzés tartalma',
        'second' => 'Második blogbejegyzés tartalma',
    ];

    return view('postnezet', [
        'posttartalma' => $posts[$post] ?? "Nincs ilyen blogbejegyzés"
    ]);
});

Route::get("/vezerlo/{post}", [
    PostController::class,
    'show'
]);