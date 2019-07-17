<?php

namespace App;


use Illuminate\Database\Eloquent\Model;


class Autor extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'genero', 'pais'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
}
