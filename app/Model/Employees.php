<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Employees extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $table = 'employees';
    protected $fillable = [
        'id',
        'surname',
        'name',
        'patronymic',
        'gender',
        'date_of_birth',
        'place_of_residence',
        'job',
        'subdivision',
        'photo',
    ];
    public function photo($img)
    {
        $photo = time().$img['name'] ;
        $this->photo = $photo;
        //var_dump($_SERVER['DOCUMENT_ROOT']. '/pop-it-mvc/public/img/' . $photo); die();
        move_uploaded_file($img['tmp_name'], $_SERVER['DOCUMENT_ROOT']. '/PHP_Practice-main/public/img/' . $photo);
    }

}