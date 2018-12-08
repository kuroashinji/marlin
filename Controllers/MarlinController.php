<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarlinController extends Controller
{
    public function show(){
        return view ('marlinview');
    }
}
