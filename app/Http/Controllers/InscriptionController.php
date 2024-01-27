<?php

namespace App\Http\Controllers;

use App\Models\Inscription;
use Illuminate\Http\Request;
use App\Notifications\EnvoiMailParent;
use App\Http\Requests\StoreInscriptionRequest;
use App\Notifications\RappelPaiementNotification;

class InscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('welcome');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInscriptionRequest $request)
    {
        try {
            $validateData = $request->validated();
            $inscription = Inscription::create($validateData);
            // dd($validateData);
            if($inscription){
                $nom = $inscription->nom;
                $class = $inscription->classe;
                $inscription->notify(new EnvoiMailParent($nom, $class));
                return redirect()->back()->with('success', 'Votre inscription a été prise en compte');
            }
        } catch (\Exception $e) {
            dd($e);
        }

    }
    // public function sendEmails()
    // {
    //     // Récupérez les adresses e-mail depuis la table Inscription
    //     $emails = Inscription::pluck('email')->toArray();
    
    //     $montant = 100; // Montant de la scolarité à payer
    //     $devise = 'FCFA'; // Devise (par exemple, EUR, USD, etc.)
    //     $lienPaiement = 'https://jonasdev.pteam-transfert.com';
    
    //     // Envoyez la notification à chaque e-mail en utilisant la file d'attente
    //     foreach ($emails as $email) {
    //         // Assurez-vous de vérifier si l'e-mail est valide avant de l'envoyer
    //         if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //             $user = Inscription::where('email', $email)->first();
    //             $user->notify((new RappelPaiementNotification($montant, $devise, $lienPaiement))->delay(now()->addSeconds(10)));
    //         }
    //     }
    
    //     return redirect()->back()->with('success', 'E-mails en cours d\'envoi.');
    // }

    /**
     * Display the specified resource.
     */
    public function show(Inscription $inscription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inscription $inscription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Inscription $inscription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inscription $inscription)
    {
        //
    }
}