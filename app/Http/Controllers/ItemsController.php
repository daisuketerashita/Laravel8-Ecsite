<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemsController extends Controller
{
    //一覧画面
    public function showItems(Request $request){
        $items = Item::orderByRaw("FIELD(state, '" . Item::STATE_SELLING . "', '" . Item::STATE_BOUGHT . "')" )
        ->orderBy('id','DESC')
        ->simplePaginate(8);

        return view('items.items')->with('items',$items);
    }

    //詳細画面
    public function showItemDetail(Item $item){
        return view('items.item_detail')->with('item',$item);
    }
}
