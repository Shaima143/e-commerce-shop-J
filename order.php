<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    public $table = '_orders';

    public function orderItems(){
        return $this->hasMany(OrderItem::class);
    }
}
