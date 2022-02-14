<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    public $table = "cart";
    public $fillable = [
        'product_id',
        'user_id',
        'prod_qty'
    ];

    // public function products(){
    //     return $this->belongsTo(Advertisement::class,'product_id','id');
    // }
}
