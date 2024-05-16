<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products as Product;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
    public function updateProduct(Request $request)
    {
        $product = Product::findOrFail($request->input('id'));

        if ($request->hasFile('image')) {
            $this->deleteProductImage($product->image);
            $imagePath = $this->uploadImage($request->file('image'));
            $product->image = $imagePath;
        }

        $product->fill($this->getProductData($request));
        $product->save();

        return redirect()->back()->with('success', 'Ürün Güncellendi');
    }

    public function addProduct(Request $request)
    {
        $data = $this->getProductData($request);

        if ($request->hasFile('image')) {
            $imagePath = $this->uploadImage($request->file('image'));
            $data['image'] = $imagePath;
        }

        Product::create($data);

        return redirect()->back()->with('success', 'Ürün Eklendi');
    }

    public function deleteProduct($id)
    {
        $product = Product::findOrFail($id);
        $this->deleteProductImage($product->image);
        $product->delete();

        return redirect()->back()->with('success', 'Ürün başarıyla silindi');
    }

    private function uploadImage($image)
    {
        $imageName = time() . '.' . $image->extension();
        $image->storeAs('public/images', $imageName);
        return $imageName;
    }

    private function deleteProductImage($imageName)
    {
        Storage::delete('public/images/' . $imageName);
    }

    private function getProductData(Request $request)
    {
        return [
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'product_details' => $request->input('product_description'),
            'type_id' => $request->input('type_id'),
            'active' => $request->has('active') ? 1 : 0,
            'aciklama' => $request->input('aciklama'),
            'unit' => $request->input('unit'),
            'category_id' => $request->input('category_id') ?? 0,
            'code' => $request->input('code') ?? 0,
        ];
    }
}
