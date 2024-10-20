<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class WebController extends Controller
{


    public function send(Request $request)
    {
        // Valider les données
        $request->validate([
            'name' => 'required|string',
            'surname' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ], [
            'name.required' => 'Le champ nom est obligatoire.',
            'surname.required' => 'Le champ prénoms est obligatoire.',
            'phone.required' => 'Le champ téléphone est obligatoire.',
            'email.required' => 'Le champ email est obligatoire.',
            'email.email' => 'L\'adresse email doit être valide.',
            'subject.required' => 'Le champ objet est obligatoire.',
            'message.required' => 'Le champ message est obligatoire.',
        ]);

        // Envoyer l'email
        Mail::to(env('APP_MAIL'))->send(new ContactMail($request->all()));

        // Retourner une réponse ou redirection
        return back()->with('success', 'Votre message a été envoyé avec succès !');
    }
}
