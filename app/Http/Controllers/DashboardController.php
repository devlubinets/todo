<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function GuzzleHttp\Promise\all;

class DashboardController extends Controller
{
    public function showPrivateItems()
    {
        $user = Auth::user()->name;
        return  view('dashboard',['items' => Item::where('executor','=',$user)->get(), 'assigned_items' => Item::where('leader','!=',$user)->get()]);
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
        return redirect()->route('dashboard');
    }

    public function deleleTask($id)
    {
        Item::all()->find($id)->delete();
      //TODO сделать чтобы работало информирование with
        return redirect()->route('dashboard')->with('success','Task has been deleted');
    }


    public function editTask($id)
    {
       $model = Item::all()->find($id);

        return view('components.edit-task',['item' => $model]);

    }

    public function updateTask($id, Request $req)
    {
        $model = Item::all()->find($id);

        $model->desc = $req->input('desc');
        $model->executor = $req->input('executor');
        $model->visibility = $req->input('visibility');
        $model->leader = $req->input('leader');

        $model->save();

        return redirect()->route('dashboard')->with('success','Task has been update');
    }

}
