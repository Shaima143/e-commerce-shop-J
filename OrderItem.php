<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    public $table= 'order_items';

    public function Products():BelongsTo {
        return $this->belongsTo(product::class,'product_id','id');
    }
}
