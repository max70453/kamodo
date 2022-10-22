<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return view('admin.category.index', compact('category'));
    }

    // public function add()
    // {
    //     return view('admin.category.add');
    // }

    public function insert(Request $request)
    {
        $token = $request->session()->token();

        $token = csrf_token();
        $category = new Category();
        //проверка на загрузку пользователем файла

        if ($request->hasFile('image'))
        {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();//вернет расширение файла
            $filename = time().'.'.$ext;//формирование уникального имени для файла
            $file->move('assets/upload/category/', $filename);
            $category->image = $filename;
        }
        $category->name = $request->input('name');
        $category->slug = $request->input('slug');
        // $category->description = $request->input('description');
        $category->status = $request->input('status') == TRUE ? '1' : '0';
        $category->popular = $request->input('popular') == TRUE ? '1' : '0';
        $category->meta_title = $request->input('meta_title');
        $category->meta_keywords = $request->input('meta_keywords');
        $category->meta_description = $request->input('meta_description');
        $category->save();
        return redirect('categories')->with('status', 'Категория успешно добавлена')->with('type', 'success');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        if ($request->hasFile('image'))
        {

            $path = 'assets/upload/category/'.$category->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();//вернет расширение файла
            $filename = time().'.'.$ext;//формирование уникального имени для файла
            $file->move('assets/upload/category/', $filename);
            $category->image = $filename;
        }
        $category->name = $request->input('name');
        $category->slug = $request->input('slug');
        // $category->description = $request->input('description');
        $category->status = $request->input('status') == TRUE ? '1' : '0';
        $category->popular = $request->input('popular') == TRUE ? '1' : '0';
        $category->meta_title = $request->input('meta_title');
        $category->meta_keywords = $request->input('meta_keywords');
        $category->meta_description = $request->input('meta_description');
        $category->update();
        return redirect('categories')->with('status', 'Категория успешно обновлена')->with('type', 'success');
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $path = 'assets/upload/category/'.$category->image;
        if (File::exists($path))
        {
            File::delete($path);
        }
        $category->delete();
        return redirect('categories')->with('status', 'Категория успешно удалена')->with('type', 'success');
    }
}
