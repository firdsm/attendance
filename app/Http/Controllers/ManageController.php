<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageController extends Controller
{
    private function __construct()
    {
        $this->middleware('auth');
    }
}
