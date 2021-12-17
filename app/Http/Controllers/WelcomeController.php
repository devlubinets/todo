<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function showPublicItems()
    {
       return  view('welcome',['items' => Item::where('visibility','=','public')->get()]);
    }
}
