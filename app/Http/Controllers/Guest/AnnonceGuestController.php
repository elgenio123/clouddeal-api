<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Annonce;
use Illuminate\Http\Request;

class AnnonceGuestController extends Controller
{
    public function listAnnonces(Request $request)
    {
        $limit = $request->get('limit', 3);
        $annonces = Annonce::paginate($limit);
        return response()->json($annonces, 200);
    }

    public function detailsAnnonce()
    {
    }
}
