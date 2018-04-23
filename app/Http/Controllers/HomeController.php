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
            return $this->admin();
        } else {
            return $this->employee();
        }
    }

    private function admin()
    {
        return view('admin.dashboard');
    }

    private function employee()
    {
        return view('employee.dashboard');
    }
}
