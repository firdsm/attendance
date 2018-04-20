<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    private function __construct()
    {
        $this->middleware('auth');
    }
}
