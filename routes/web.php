<?php

use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages/home');
})->name('home');

Route::get('/about', function () {
    return view('pages/about');
})->name('about');


Route::get('/services', function () {
    return view('pages/service');
})->name('services');


Route::get('/contact', function () {
    return view('pages/contact');
})->name('contact');


Route::get('/produit', function () {
    return view('pages/produit');
})->name('produit');


Route::get('/actualite', function () {
    return view('pages/actualite');
})->name('actualite');



Route::get('/activite', function () {
    $activite = [
        (object)[
            "id" => 1,
            "name" => "Mvolais service",
            "description" => "Mvolais Service propose des solutions efficaces et adaptées pour soutenir le développement des entreprises, avec un focus sur la qualité et la satisfaction client.",
        ],
        (object)[
            "id" => 2,
            "name" => "O'Vation Communications",
            "description" => "O'Vation Communications est spécialisée dans les stratégies de communication innovantes, visant à renforcer votre image de marque et à optimiser vos relations avec vos clients.",

        ],
        (object)[
            "id" => 3,
            "name" => "Mvolais Formations",
            "description" => "Mvolais Formations propose des formations sur mesure pour améliorer les compétences de vos équipes et booster la performance de votre entreprise.",
        ]
    ];
    return view('pages/activite', ['activite' => $activite]);
})->name('activite');



Route::get('/activite/{id}', function ($id) {
    $service = [
        1 => (object)[
            "division" => "Mvolais service ",
            "service" => [
                (object)[
                    "id" => 1,
                    "name" => "Pièce détachées",
                    "description" => "Pièce de chariots élévateur, machine de mine, carrière, Roulement, courroie...",
                ],
                (object)[
                    "id" => 2,
                    "name" => "Equipement de Protection Individuelle",
                    "description" => "Protection des pieds, des mains, du crane, du corps, antichute, respiratoire, auditive, visuelle...",

                ],
                (object)[
                    "id" => 3,
                    "name" => "Informatique",
                    "description" => "Ordinateurs, Unité centrale, disque dures, moniteur, imprimante, scaneurs souris, casques, usb, divers pièces...",
                ],
                (object)[
                    "id" => 4,
                    "name" => "Maintenance",
                    "description" => "Depanage des chariots élévateur, Depanage des engin de TP, Intervention industriels...",
                ],
            ],
        ],
        2 => (object)[
            "division" => "O'Vation Communications",
            "service" => [
                (object)[
                    "id" => 1,
                    "name" => "Vente d'espaces publicitaires",
                    "description" => "Vente d'espaces publicitaires
                    Sur supports affichage,  presse, audiovisuel et événementiel.",
                ],
                (object)[
                    "id" => 21,
                    "name" => "relations publiques ",
                    "description" => "lorem ipsum dolor sit amet lorem lorem2 lorem ipsum lorem ipsum dolor sit amet lorem lorem2 lorem ipsum",

                ],
                (object)[
                    "id" => 21,
                    "name" => "études et conseils sectoriels.",
                    "description" => "lorem ipsum dolor sit amet lorem lorem2 lorem ipsum lorem ipsum dolor sit amet lorem lorem2 lorem ipsum",
                ]
            ],
        ],
        3 => (object)[
            "division" => "Mvolais Formations",
            "service" => [
                (object)[
                    "id" => 1,
                    "name" => "Mvolais service",
                    "description" => "lorem ipsum dolor sit amet lorem lorem2 lorem ipsum lorem ipsum dolor sit amet lorem lorem2 lorem ipsum",
                ],
                (object)[
                    "id" => 21,
                    "name" => "O'Vation Communications",
                    "description" => "lorem ipsum dolor sit amet lorem lorem2 lorem ipsum lorem ipsum dolor sit amet lorem lorem2 lorem ipsum",

                ],
                (object)[
                    "id" => 21,
                    "name" => "Mvolais Formations",
                    "description" => "lorem ipsum dolor sit amet lorem lorem2 lorem ipsum lorem ipsum dolor sit amet lorem lorem2 lorem ipsum",
                ]
            ],
        ],

    ];

    if (!isset($service[$id])) {
        abort(404); // Retourne une erreur 404 si l'ID n'existe pas
    }
    return view('pages/service', ['service' => $service[$id]]);
})->name('activite.service');


Route::post('/contact/send', [WebController::class, 'send'])->name('contact.send');
