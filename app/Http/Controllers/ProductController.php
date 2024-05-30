<?php

namespace App\Http\Controllers;

use App\Models\ProductImage;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Brand;
use App\Models\Unit;

class ProductController extends Controller
{
    private $product;

    public function index()
    {
        return view('admin.product.index', ['products' => Product::all()]);
    }

    public function create()
    {
        return view('admin.product.add', [
            'categories'        => Category::all(),
            'sub_categories'    => SubCategory::all(),
            'brands'            => Brand::all(),
            'units'             => Unit::all(),
        ]);
    }
    public function store(Request $request)
    {
        $this->product = Product::newProduct($request);
        ProductImage::newProductImage($request->file('other_image'),$this->product->id);
        return back()->with('message', 'Product info save successfully.');
    }
    public function detail($id)
    {
        return view('admin.product.details', ['product' => Product::find($id)]);
    }
    public function edit($id)
    {
        return view('admin.product.edit', [
            'product'           => Product::find($id),
            'categories'        => Category::all(),
            'sub_categories'    => SubCategory::all(),
            'brands'            => Brand::all(),
            'units'             => Unit::all(),
        ]);
    }
    public function update(Request $request, $id)
    {
        Product::updateProduct($request, $id);
        if ($images = $request->file('other_image'))
        {
            ProductImage::updateProductImage($images,$id);
        }
        return redirect('/product/manage')->with('message', "Product info update successfully.");
    }

    public function delete($id)
    {
        Product::deleteProduct($id);
        ProductImage::deleteProductImage($id);
        return redirect('/product/manage')->with('message', "Product info delete successfully.");
    }

}
