<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Shop extends Model
{
    use HasFactory;

    protected $fillable = [
        'categoty_id',
        'name',
        'information',
        'price',
        'is_selling',
        'sort_order',
    ];

    //「商品(shop)はカテゴリ(category)に属する」というリレーション関係を定義する
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
