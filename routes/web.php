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
            "name" => "M'VOLAIS service",
            "description" => "M'VOLAIS Service propose des solutions efficaces et adaptées pour soutenir le développement des entreprises, avec un focus sur la qualité et la satisfaction client.",
            "img" => "assets/images/ova.jpg"

        ],
        (object)[
            "id" => 2,
            "name" => "O'Vation Communications",
            "description" => "O'Vation Communications est spécialisée dans les stratégies de communication innovantes, visant à renforcer votre image de marque et à optimiser vos relations avec vos clients.",
            "img" => "assets/images/ova.jpg"


        ],
        (object)[
            "id" => 3,
            "name" => "M'VOLAIS Formations",
            "description" => "M'VOLAIS Formations propose des formations sur mesure pour améliorer les compétences de vos équipes et booster la performance de votre entreprise.",
            "img" => "assets/images/form.jpg"
        ]
    ];
    return view('pages/activite', ['activite' => $activite]);
})->name('activite');



Route::get('/activite/{id}', function ($id) {
    $service = [
        1 => (object)[
            "division" => "M'volais service ",
            "desc" => "Chez M'VOLAIS Service, nous offrons des solutions sur mesure, conçues pour accompagner et accélérer le développement des entreprises. Notre engagement envers la qualité et la satisfaction de nos clients nous permet de proposer des services adaptés aux besoins spécifiques de chaque entreprise, tout en maintenant un haut niveau d'efficacité.",
            "service" => [
                (object)[
                    "id" => 1,
                    "name" => "Pièce détachées",
                    "description" => "Pièce de chariots élévateur, machine de mine, carrière, Roulement, courroie...",
                    "img" => "assets/images/ser.jpg"

                ],
                (object)[
                    "id" => 2,
                    "name" => "Equipement de Protection Individuelle",
                    "description" => "Protection des pieds, des mains, du crane, du corps, antichute, respiratoire, auditive, visuelle...",
                    "img" => "assets/images/ser2.jpg"

                ],
                (object)[
                    "id" => 3,
                    "name" => "Informatique",
                    "description" => "Ordinateurs, Unité centrale, disque dures, moniteur, imprimante, scaneurs souris, casques, usb, divers pièces...",
                    "img" => "assets/images/ser3.jpg"

                ],
                (object)[
                    "id" => 4,
                    "name" => "Maintenance",
                    "description" => "Depanage des chariots élévateur, Depanage des engin de TP, Intervention industriels...",
                    "img" => "assets/images/ser4.jpg"
                ],
            ],
        ],
        2 => (object)[
            "division" => "O'Vation Communications",
            "desc" => "Chez O'Vation Communications, nous nous spécialisons dans la conception et la mise en œuvre de stratégies de communication créatives et novatrices, destinées à renforcer l’image de marque de nos clients et à améliorer leur relation avec leur audience. Notre objectif est d’aider les entreprises à se démarquer, à capter l’attention de leur public et à établir des relations solides et durables avec leurs clients.",
            "service" => [
                (object)[
                    "id" => 1,
                    "name" => "Vente d'espaces publicitaires",
                    "description" => "Vente d'espaces publicitaires
                    Sur supports affichage,  presse, audiovisuel et événementiel.",
                    "img" => "assets/images/ova.jpg"
                ],
                (object)[
                    "id" => 21,
                    "name" => "relations publiques ",
                    "description" => "lorem ipsum dolor sit amet lorem lorem2 lorem ipsum lorem ipsum dolor sit amet lorem lorem2 lorem ipsum",
                    "img" => "assets/images/ova3.jpg"

                ],
                (object)[
                    "id" => 21,
                    "name" => "études et conseils sectoriels.",
                    "description" => "lorem ipsum dolor sit amet lorem lorem2 lorem ipsum lorem ipsum dolor sit amet lorem lorem2 lorem ipsum",
                    "img" => "assets/images/ova4.jpg"
                ]
            ],
        ],
        3 => (object)[
            "division" => "M'VOLAIS Formations",
            "desc" => "Chez M'VOLAIS Formations, nous proposons des programmes de formation sur mesure, conçus pour répondre aux besoins spécifiques de votre entreprise. Notre objectif est d’améliorer les compétences de vos équipes, afin de maximiser leur performance et ainsi contribuer au succès de votre organisation.",
            "service" => [
                (object)[
                    "id" => 1,
                    "name" => "M'VOLAIS service",
                    "description" => "lorem ipsum dolor sit amet lorem lorem2 lorem ipsum lorem ipsum dolor sit amet lorem lorem2 lorem ipsum",
                    "img" => ""

                ],
                (object)[
                    "id" => 21,
                    "name" => "O'Vation Communications",
                    "description" => "lorem ipsum dolor sit amet lorem lorem2 lorem ipsum lorem ipsum dolor sit amet lorem lorem2 lorem ipsum",
                    "img" => ""


                ],
                (object)[
                    "id" => 21,
                    "name" => "M'VOLAIS Formations",
                    "description" => "lorem ipsum dolor sit amet lorem lorem2 lorem ipsum lorem ipsum dolor sit amet lorem lorem2 lorem ipsum",
                    "img" => ""
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
