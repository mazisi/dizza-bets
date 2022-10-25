<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FixtureController extends Controller
{
    public function fixtures()
    {
       
        return view('all_fixture');
    }
}
