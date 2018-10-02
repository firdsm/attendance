<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (Auth::user()->role_id == 1){
            return view('admin.index');
        } else {
            return view('employee.index');
        }
    }
    
    public function countNumber($number1, $number2){
        $sum = $number1 + $number2;
        
        return $sum;
    }
}
