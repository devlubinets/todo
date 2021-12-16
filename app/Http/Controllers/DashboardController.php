<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function showPrivateItems()
    {
        return  view('dashboard',['items' => Item::where('executor','=',2)->get(), 'assigned_items' => Item::where('leader','=',2)->get()]);
    }

    public function addTask(Request $req)
    {
        $model = new Item;

        $model->desc = $req->input('desc');
        $model->executor = $req->input('executor');
        $model->visibility = $req->input('visibility');
        $model->leader = $req->input('leader');

        $model->save();

        #Вместо перезагрузки страницы
        //TODO потом лучше это заменить на js код авто обновления
        return redirect()->route('/');
    }

    public function deleleTask($id)
    {
        Item::all()->find($id)->delete();
      //TODO сделать чтобы работало информирование with
        return redirect()->route('dashboard')->with('success','Task has been deleted');
    }



    //TODO отметка что задача выполненна

}
