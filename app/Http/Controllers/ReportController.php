<?php

namespace App\Http\Controllers;

use App\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($params = null)
    {
        if (Auth::user()->role_id == 1){
            if (isset($params)){
                $dates = Report::all()->groupBy('report_date');
                $attendances = Report::where('report_date', $params)->get();
                return view('admin.report.index', array('dates' => $dates, 'attendances' => $attendances));
            } else {
                $dates = Report::all()->groupBy('report_date');
                return view('admin.report.index', compact('dates'));
            }
        } else {
            echo 'Forbidden Access';
        }
    }

    public function employeeDetail($id)
    {
        $employee = Report::find($id);
        return view('admin.report.detail', compact('employee'));
    }
}
