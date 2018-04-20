<?php

namespace App\Http\Controllers;

use App\Attendance;
use App\Employee;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function attending(Request $request)
    {
        $today = Carbon::now(+7)->toDateString();
        $time = Carbon::now(+7)->toTimeString();
        $authEmpl = $this->authAttendance($request->reg);
        if ($authEmpl == 1){
            $empl = Employee::where('reg_number', $request->reg)->first();
            Attendance::create([
                'employee_id' => $empl->id,
                'work_id' => 1,
                'work_date' => $today,
                'time_in' => $time,
                'time_out' => null,
                'workhours' => null,
                'description' => null
            ]);
            echo 'masuk';
        } else {
            Attendance::whereHas('employee', function ($empl) use ($request){
                $empl->where('reg_number', $request->reg);
            })->where('work_date', $today)->first()->update([
                'time_out' => $time
            ]);
            echo 'pulang';
        }
    }

    public function permit(Request $request)
    {

    }

    public function sick(Request $request)
    {

    }

    public function remote(Request $request)
    {

    }

    public function authEmployee(Request $request)
    {
        $empl = Employee::where('reg_number', $request->reg)->get();
        if (count($empl) != 0){
            return 1;
        } else {
            return 2;
        }
    }

    public function authAttendance($reg)
    {
        $date = Carbon::now(+7)->toDateString();
        $attend = Attendance::whereHas('employee', function ($x) use ($reg) {
            $x->where('reg_number', $reg);
        })->where('work_date', $date)->get();
        if (count($attend) != 0){
            return 2;
        } else {
            return 1;
        }
    }
}
