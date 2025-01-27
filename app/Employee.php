<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'employee_name', 'employee_email', 'employee_phone', 'employee_address',
    ];
}