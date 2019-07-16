<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bkash extends Model
{
    protected $fillable = ['phone','amount','invoice','transaction_id','product_id','status','total_price'];
}
