<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cathegorie extends Model
{

  protected $guarded = [];


    public function produits()
    {
      return $this->hasMany('App\Produit');
    }
}
