<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Product::with('images:id,product_id,image_url,image_type')
            ->with('category:id,name')->paginate('8');
        return view('admin.product.list-product')->with([
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::get();
        return view('admin.product.add-product')->with([
            'cate' => $category
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        $data = [
            'name' => $req->name,
            'price' => $req->price,
            'description' => $req->description,
            'category_id' => $req->category,
        ];
        $product = Product::create($data);

        if ($req->hasFile('image')) {
            $images = $req->file('image');
            foreach ($images as $key => $image) {
                $newName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('image/admin/product/'), $newName);

                ProductImage::create([
                    'product_id' => $product->id,
                    'image_url' => 'image/admin/product/' . $newName,
                    'image_type' => $key == 0 ? 'main' : 'secondary'
                ]);
            }
        }

        return redirect()->route('products.index')->with([
            'mess' => 'Thêm sản phẩm thành công',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::with('images:product_id,image_url,image_type')->find($id);
        $category = Category::get();

        return view('admin.product.update-product')->with([
            'product' => $product,
            'category' => $category,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req, string $id)
    {
        $data = [
            'name' => $req->name,
            'price' => $req->price,
            'description' => $req->description,
            'category_id' => $req->category,
        ];
        Product::find($id)->update($data);

        if ($req->hasFile('image')) {
            $images = $req->file('image');

            $productImg = ProductImage::where('product_id', $id)->select('image_url');
            foreach ($productImg->get() as $value) {
                File::delete(public_path($value->image_url));
            }
            $productImg->delete();

            foreach ($images as $key => $image) {
                $newName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('image/admin/product/'), $newName);

                ProductImage::create([
                    'product_id' => $id,
                    'image_url' => 'image/admin/product/' . $newName,
                    'image_type' => $key == 0 ? 'main' : 'secondary'
                ]);
            }
        }

        return redirect()->route('products.index')->with([
            'mess' => 'Cập nhật sản phẩm thành công',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $imageProduct = ProductImage::where('product_id', $id)->select('image_url')->get();
        foreach ($imageProduct as $value) {
            File::delete(public_path($value->image_url));
        }
        $product = Product::find($id);
        $product ->delete();
        return redirect()->route('products.index')->with([
            'mess' => 'Xoá sản phẩm thành công',
        ]);
    }
}
