<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function showPublicItems()
    {
        return  view('welcome',['items' => Item::where('visibility','=',1)->get()]);
    }

    public function showPrivateItems()
    {
        return  view('welcome',['items' => Item::where('visibility','=',2)->get()]);
    }

    public function showUserItems()
    {
        return  view('welcome',['items' => Item::where('visibility','=',2)->get()]);
    }
}
