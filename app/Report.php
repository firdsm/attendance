<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $table = 'report';

    protected $fillable = [
        'employee_id',
        'report_date',
        'workdays_total',
        'workhours_total',
        'late_total',
        'early_total',
        'remote_total',
        'permit_total',
        'sick_total',
        'alpha_total'
    ];

    public $timestamps = false;

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
