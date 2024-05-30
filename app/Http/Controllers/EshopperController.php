<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
class EshopperController extends Controller
{
    private $products;
    public function index()
    {
        $this->products = Product::where('status', 1)->orderBy('id', 'desc')->take(8)->get();
        return view('front-end.home.home', [
            'products' => $this->products
        ]);
    }

    public function category($sub_category_id)
    {
        // Fetch products based on subcategory ID
        $products = Product::where('sub_category_id', $sub_category_id)->get();

        // Pass products and sub_category_id to the view
        return view('front-end.category.index', [
            'products' => $products,
            'sub_category_id' => $sub_category_id
        ]);
    }



    public function product($id)
    {
        return view('front-end.product.index', [
            'product' => Product::find($id)
        ]);
    }

}
