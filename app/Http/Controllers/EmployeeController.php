<?php

namespace App\Http\Controllers;

use App\Employee;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class EmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (Auth::user()->role_id == 1){
            $employees = Employee::all();
            return view('admin.employee.index', compact('employees'));
        } else {
            echo 'Forbidden Access';
        }
    }

    public function form($id = 0)
    {
        if (Auth::user()->role_id == 1){
            $employee = Employee::find($id);
            return view('admin.employee.form', compact('employee'));
        } else {
            echo 'Forbidden Access';
        }
    }

    public function insert(Request $request)
    {
        if (Auth::user()->role_id == 1){
            $user = User::create([
                'username' => $request->username,
                'password' => bcrypt($request->password),
                'role_id' => 2
            ]);
            Employee::create([
                'user_id' => $user->id,
                'reg_number' => $request->regnumber,
                'name' => $request->name,
                'job' => $request->job,
                'since' => $request->since,
                'address' => $request->street.' - '.$request->city,
                'photo' => Storage::disk('store')->put('user', $request->file('photo'))
            ]);
            return $this->index();
        } else {
            echo 'Forbidden Access';
        }
    }

    public function update(Request $request, $id)
    {
        if (Auth::user()->role_id == 1){
            Employee::find($id)->update([
                'reg_number' => $request->regnumber,
                'name' => $request->name,
                'job' => $request->job,
                'since' => $request->since,
                'address' => $request->address
            ]);
            return $this->index();
        } else {
            echo 'Forbidden Access';
        }
    }

    public function delete($id)
    {
        if (Auth::user()->role_id == 1){
            $user = Employee::find($id);
            User::find($user->user_id)->delete();
            return $this->index();
        } else {
            echo 'Forbidden Access';
        }
    }
}
