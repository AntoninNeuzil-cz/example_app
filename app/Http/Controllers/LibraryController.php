<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Item;
use Illuminate\Http\Request;

class LibraryController extends Controller
{

    public function list(): \Illuminate\View\View
    {
        return view('list', [
            'items' => Item::all(),
            'filterText' => ''
        ]);
    }

    public function filter(Request $request): \Illuminate\View\View
    {
        $incomingFields = $request->validate([
            'filter' => 'required',
        ]);
        $pattern = $incomingFields['filter'];

        $items = Item::where('name', 'like', '%' . $pattern . '%')
            ->orWhere('description', 'like', '%' . $pattern . '%')
            ->orWhere('type', 'like', '%' . $pattern . '%')
            ->get();
        return view('list', [
            'items' => $items,
            'filterText' => $pattern,
        ]);
    }


    public function detail(Request $request): \Illuminate\View\View
    {
        $incomingFields = $request->validate([
            'type' => 'required',
            'id' => 'required',
        ]);

        $type = $incomingFields['type'];
        $id = $incomingFields['id'];
        $className = 'App\Models\\' . $type;

        $item = Item::where('id', $id)->first();
        $item = new $className($item->toArray());

        return view('detail', ['item' => $item, 'author' => $item->author()]);
    }
}
