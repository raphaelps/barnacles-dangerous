<?php

namespace App\Models\Painel;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    protected $fillable = 
            ['name', 'number', 'active', 'category','description'];
    //protected $guarded = ['admin']; //quais colulas não serão preenchidas
}
