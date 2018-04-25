<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employee';
    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'reg_number',
        'name',
        'job',
        'since',
        'address',
        'photo',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function attendance()
    {
        return $this->hasMany(Attendance::class);
    }

    public function report()
    {
        return $this->hasMany(Report::class);
    }
}
