<?php

namespace App\Http\Controllers;

use App\Credit;
use Illuminate\Http\Request;

class CreditController extends Controller
{
    public function create()
    {
        // Validation des données du formulaire credit_add
        request()->validate([
            'date-credit' => 'required',
            'libelle-credit' => 'required',
            'montant-credit' => 'required',
            // 'doc-credit' => '',
        ]);

        @dd(request()->all());
        Credit::create([
            'date' => request('date-credit'),
            'libelle' => request('libelle-credit'),
            'montant' => request('montant-credit'),
            'doc' => request('doc-credit'),
        ]);
    }
}
