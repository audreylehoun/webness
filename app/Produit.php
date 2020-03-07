<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{

    protected $guarded = [];

    public function cathegorie()
    {
        return $this->belongsTo('App\Cathegorie');

    }
}
