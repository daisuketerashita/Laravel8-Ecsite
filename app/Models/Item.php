<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    //出品中
    const STATE_SELLING = 'selling';
    //購入済み
    const STATE_BOUGHT = 'bought';

    public function secondaryCategory()
    {
         return $this->belongsTo('App\Models\SecondaryCategory');
    }

    public function getIsStateSellingAttribute()
    {
         return $this->state === self::STATE_SELLING;
    }

    public function seller()
    {
        return $this->belongsTo('App\Models\User','seller_id');
    }

    public function condition()
    {
        return $this->belongsTo('App\Models\ItemCondition','item_condition_id');
    }

    public function getIsStateBoughtAttribute()
    {
        return $this->state === self::STATE_BOUGHT;
    }
}
