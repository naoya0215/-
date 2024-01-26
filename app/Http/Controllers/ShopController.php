<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreShopRequest;
use App\Http\Requests\UpdateShopRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Shop;
use App\Models\Category;

class ShopController extends Controller
{
    public function index(Request $request) {
        $keyword = $request->input('keyword');
        $query = Shop::query();

        if(!empty($keyword)) {
            $query->where('name', 'LIKE', "%{$keyword}%");
        }
        $shops = $query->get();

        return view('shop.index' ,compact('shops', 'keyword'));
    }

    public function create() {
        $categories = Category::get();
        return view('shop.create', compact('categories'));
    }

    public function store(Request $request) {
        $shop = new Shop;
        $shop->name = $request->input('name');
        $shop->information = $request->input('information');
        $shop->price = $request->input('price');
        $shop->sort_order = $request->input('sort_order');
        $shop->is_selling = $request->input('is_selling'); 
        $shop->category_id = $request->input('category_id');
        $shop->save();

        return redirect()->route('shop.index');
    }
}
