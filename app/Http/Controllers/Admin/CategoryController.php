<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function listCate()
    {
        $data = Category::select('id', 'name', 'created_at')->paginate(8);
        return view('admin.category.list-category')->with([
            'data' => $data
        ]);
    }

    public function create()
    {
        return view('admin.category.add-category');
    }

    public function addCategory(CategoryRequest $req)
    {
        // $req->validate([
        //     'name' => 'required',
        // ], [
        //     'name.required' => 'Không được để trống tên danh mục',
        // ]);

        $data = [
            'name' => $req->name,
        ];

        if (Category::create($data)) {
            return redirect()->route('categorys.listCate')->with([
                'mess' => 'Thêm danh mục thành công',
            ]);
        }
    }

    public function update($id)
    {
        $data = Category::find($id);
        return view('admin.category.update-category')->with([
            'data' => $data
        ]);
    }

    public function updatePost(CategoryRequest $req, $id)
    {
        $data = [
            'name' => $req->name,
        ];

        Category::find($id)->update($data);
        return redirect()->route('categorys.listCate')->with([
            'mess' => 'Thêm danh mục thành công',
        ]);
    }

    public function delete($id)
    {
        $data = Category::find($id);
        $data->delete();
        return redirect()->back()->with([
            'mess' => 'Xoá danh mục thành công',
        ]);
    }
}
