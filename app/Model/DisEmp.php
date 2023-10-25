<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class DisEmp extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $table = 'employees-disciplines';
    protected $fillable = [
        'id',
        'employee_id',
        'discipline_id',
    ];
}