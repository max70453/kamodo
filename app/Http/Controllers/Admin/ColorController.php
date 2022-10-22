<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ColorProduct;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    public function index()
    {
        $colors = ColorProduct::all();
        return view('admin.color.index', compact('colors'));
    }

    public function insert(Request $request)
    {
        $newColor = new ColorProduct();
        $newColor->name = $request->input('colorName');
        $newColor->color = $request->input('colorCode');
        $newColor->save();
        return redirect('colors')->with('status', 'Цвет успешно добавлен')->with('type', 'success');
    }

    public function edit($id)
    {
        $colors = ColorProduct::find($id);
        return $colors;
    }

    public function update(Request $request, $id)
    {
        $colors = ColorProduct::find($id);
        $colors->name = $request->input('colorName');
        $colors->color = $request->input('colorCode');
        $colors->save();
        return redirect('colors')->with('status', 'Цвет успешно изменен')->with('type', 'success');
    }

    public function destroy($id)
    {
        $colors = ColorProduct::find($id);
        $colors->delete();
        return redirect('colors')->with('status', 'Цвет успешно удален')->with('type', 'success');
    }
}
