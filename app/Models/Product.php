<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    private static $product, $image, $extension, $imageName, $directory, $imageUrl;

    private static function getImageUrl($image)
    {
        self::$extension    = $image->getClientOriginalExtension();
        self::$imageName    = time().'.'.self::$extension;
        self::$directory    = 'upload/product-images/';
        $image->move(self::$directory, self::$imageName);
        self::$imageUrl     = self::$directory.self::$imageName;
        return self::$imageUrl;
    }

    public static function newProduct($request)
    {
        return self::saveBasicInfo(new Product(), $request, self::getImageUrl($request->file('image')));
    }

    public static function updateProduct($request, $id)
    {
        self::$product = Product::find($id);
        if (self::$image = $request->file('image'))
        {
            self::deleteImageFormFolder(self::$product->image);
            self::$imageUrl = self::getImageUrl($request->file('image'));
        }
        else
        {
            self::$imageUrl = self::$product->image;
        }
        self::saveBasicInfo(self::$product, $request, self::$imageUrl);
    }

    public static function deleteProduct($id)
    {
        self::$product = Product::find($id);
        self::deleteImageFormFolder(self::$product->image);
        self::$product->delete();
    }

    private static function saveBasicInfo($product, $request, $imageUrl)
    {
        $product->category_id       = $request->category_id;
        $product->sub_category_id   = $request->sub_category_id;
        $product->brand_id          = $request->brand_id;
        $product->unit_id           = $request->unit_id;
        $product->name              = $request->name;
        $product->code              = $request->code;
        $product->short_description = $request->short_description;
        $product->long_description  = $request->long_description;
        $product->meta_title        = $request->meta_title;
        $product->meta_description  = $request->meta_description;
        $product->regular_price     = $request->regular_price;
        $product->selling_price     = $request->selling_price;
        $product->stock_amount      = $request->stock_amount;
        $product->image             = $imageUrl;
        $product->status            = $request->status;
        $product->save();
        return $product;
    }

    private static function deleteImageFormFolder($imageUrl)
    {
        if (file_exists($imageUrl))
        {
            unlink($imageUrl);
        }
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }

    public function otherImages()
    {
        return $this->hasMany(ProductImage::class);
    }
}
