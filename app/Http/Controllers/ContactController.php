<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail; // Importer la classe de courrier électronique pour le contact

class ContactController extends Controller
{
    /**
     * Méthode pour envoyer un e-mail à partir des données du formulaire de contact.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function sendEmail(Request $request)
    {
        // Valider les données du formulaire
        $data = $request->validate([
            'name' => 'required', // Le nom est requis
            'email' => 'required|email', // L'adresse e-mail est requise et doit être au format valide
            'message' => 'required', // Le message est requis
        ]);

        // Envoyer un e-mail à l'adresse e-mail de l'administrateur avec les données du formulaire
        Mail::to('COPREFSARL@gmail.com')->send(new ContactMail($data));

        // Rediriger l'utilisateur vers la page précédente avec un message de succès
        return back()->with('success', 'Votre message a été envoyé avec succès ! Nous vous répondrons dès que possible.');
    }
}
