<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController; 

Route::get('/', function () {
    return view('welcome');
});

Route::get("/about", function () {
    return "<h1>Hello World</h1>
            <p>This is my first Laravel application</p>
            <ul>
                <li>PHP</li>
                <li>Laravel</li>
                <li>MySQL</li>
            </ul>";
});

Route::get("/user/{nom}", function ($nom) {
    return "Hello $nom";
});

Route::get("/users/{id}", function ($id) {
    return "Hello $id";
})->where("id", "[0-9]+");

Route::get("/sum/{a}/{b}", function ($a, $b) {
    $sum = $a + $b;
    return "La somme de $a et $b est : $sum";
});

Route::get("/age/{age}", function ($age) {
    if ($age >= 18) {
        return "Vous êtes majeur.";
    } else {
        return "Vous êtes mineur.";
    }
});

Route::get('/equipe/{membre?}', function ($membre = null) {

    $equipe = [
        "ali",
        "sara",
        "mohamed",
        "yasmine"
    ];

    if ($membre === null) {
        return "Toute l'équipe";
    }

    if (in_array($membre, $equipe)) {
        return "Membre de l'équipe : " . $membre;
    }

    return "Ce membre n'existe pas";
});

Route::get('/hello', function () {
    return "Bonjour Laravel";
});
// Redirige / vers la liste des tâches 
Route::get('/', fn() => redirect()->route('tasks.index'));


// Génère automatiquement les 7 routes CRUD 
Route::resource('tasks', TaskController::class); 

