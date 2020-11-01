<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Adres;

class AdresController extends Controller
{
    /**
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // return view('adres.profile', ['adres' => Adres::findOrFail($id)]);
        $adres = Adres::all();

        foreach ($adres as $adresLine) {
            echo $adresLine->street;
        }
    }
}