<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Subdivisions extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $table = 'divisions';
    protected $fillable = [
        'id',
        'name',
        'type_of_subdivision',
    ];


}