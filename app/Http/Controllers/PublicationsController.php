<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicationsController extends Controller
{
    public function vue()
    {
        return view('publication.vue');
    }
}
