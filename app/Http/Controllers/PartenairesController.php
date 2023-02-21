<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartenairesController extends Controller
{
    public function partenaires()
    {
        return view('partenaires');
    }

}
