<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $table = 'attendance';
    public $timestamps = false;

    protected $fillable =[
        'employee_id',
        'work_id',
        'work_date',
        'time_in',
        'time_out',
        'workhours',
        'description'
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
