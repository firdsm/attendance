<?php

namespace App\Http\Controllers;

use App\Attendance;
use App\Employee;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AttendanceController extends Controller
{
    public function insertWorkhours($id, $hours)
    {
        Attendance::find($id)->update([
           'workhours' =>  $hours
        ]);
        return true;
    }
    public function attending(Request $request)
    {
        $today = Carbon::now(+7)->toDateString();
        $time = Carbon::now(+7)->toTimeString();
        $authEmpl = $this->authAttendance($request->reg);
        $empl = Employee::where('reg_number', $request->reg)->first();
        if ($authEmpl == 'notyet'){
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
        } elseif ($authEmpl == 'exist') {
            $att = Attendance::whereHas('employee', function ($e) use ($request){
                $e->where('reg_number', $request->reg);
            })->where('work_date', $today)->first();
            $att->update([
                'time_out' => $time
            ]);
            echo 'pulang';
        } elseif ($authEmpl == 'permit') {
            echo 'ijin';
        } elseif ($authEmpl == 'sick') {
            echo 'sakit';
        } else {
            echo 'remote';
        }
    }

    public function permit(Request $request)
    {
        $today = Carbon::now(+7)->toDateString();
        $auth = $this->authAttendance($request->reg);
        $empl = Employee::where('reg_number', $request->reg)->first();
        if ($auth == 'notyet'){
            Attendance::create([
                'employee_id' => $empl->id,
                'work_id' => 2,
                'work_date' => $today,
                'time_in' => '00:00:00',
                'time_out' => '00:00:00',
                'workhours' => 0,
                'description' => $request->desc
            ]);
            echo 'sukses';
        } elseif ($auth == 'exist'){
            echo 'masuk';
        } elseif ($auth == 'permit'){
            echo 'ijin';
        } elseif ($auth == 'sick'){
            echo 'sakit';
        } else {
            echo 'remote';
        }
    }

    public function sick(Request $request)
    {
        $today = Carbon::now(+7)->toDateString();
        $auth = $this->authAttendance($request->reg);
        $empl = Employee::where('reg_number', $request->reg)->first();
        if ($auth == 'notyet'){
            Attendance::create([
                'employee_id' => $empl->id,
                'work_id' => 3,
                'work_date' => $today,
                'time_in' => '00:00:00',
                'time_out' => '00:00:00',
                'workhours' => 0,
                'description' => null
            ]);
            echo 'sukses';
        } elseif ($auth == 'exist'){
            echo 'masuk';
        } elseif ($auth == 'sick'){
            echo 'sakit';
        } elseif ($auth == 'permit'){
            echo 'ijin';
        } else {
            echo 'remote';
        }
    }

    public function remote(Request $request)
    {
        $today = Carbon::now(+7)->toDateString();
        $now = '09:00:00';
        $later = '18:00:00';
        $auth = $this->authAttendance($request->reg);
        $empl = Employee::where('reg_number', $request->reg)->first();
        if ($auth == 'notyet'){
            Attendance::create([
                'employee_id' => $empl->id,
                'work_id' => 4,
                'work_date' => $today,
                'time_in' => $now,
                'time_out' => $later,
                'workhours' => 540,
                'description' => null
            ]);
            echo 'sukses';
        } elseif ($auth == 'exist'){
            echo 'masuk';
        } elseif ($auth == 'sick'){
            echo 'sakit';
        } elseif ($auth == 'permit'){
            echo 'ijin';
        } else {
            echo 'remote';
        }
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
        })->where('work_date', $date)->first();
        if (isset($attend)){
            if ($attend->work_id == 1){
                return 'exist';
            } else if ($attend->work_id == 2){
                return 'permit';
            } else if ($attend->work_id == 3){
                return 'sick';
            } else {
                return 'remote';
            }
        } else {
            return 'notyet';
        }
    }
}
