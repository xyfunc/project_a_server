<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductRecord extends Model
{
    //

    public function product()
    {
        return $this->belongsTo('App\Models\Product', 'product_id');
    }

    public function producter()
    {
        return $this->belongsTo('App\Models\Producter', 'producter_id');
    }

    public function unit()
    {
        return $this->belongsTo('App\Models\Unit', 'unit_id');
    }

}
