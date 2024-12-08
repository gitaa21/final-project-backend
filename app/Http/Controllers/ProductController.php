<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\AssignOp\Pow;

use function Laravel\Prompts\select;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $keyword = $request->get('keyword');
        $category_name = $request->get('category_name');
        $brand_name = $request->get('brand_name');

        $query = Product::query();

        if($keyword){
            $query = $query -> where('name', 'like', "%{$keyword}%");
        }

        if($category_name){
            $query -> join('categories', 'products.category_id', '=', 'categories.id')
            ->select('products.*', 'categories.name as category_name')
            ->where('categories.name', 'like', "%{$category_name}%");
        }

        if($brand_name){
            $query -> join('brands', 'products.brand_id', '=', 'brands.id')
            ->select('products.*', 'brands.name as brand_name')
            ->where('brands.name', 'like', "%{$brand_name}%");
        }

        $products = $query->paginate(10);

        return response()->json([
            'products' => $products,
            'quesry' => $query->toSql(),
        ]);
        // $products = Product::all();
        // return response()->json($products);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:50',
            'imageLink' => 'required',
            'category_id' => 'required',
            'brand_id' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
          ],
          [
            'name.required' => 'Nama Produk wajib diisi',
            'name.max' => 'Nama Produk tidak boleh lebih dari 50 huruf',
            'imageLink.required' => 'Gambar produk wajib diisi',
            'category_id.required' => 'Category produk wajib diisi',
            'brand_id.required' => 'Brand produk wajib diisi',
            'price.required' => 'Harga produk wajib diisi',
            'price.numeric' => 'Harga produk wajib berupa angka',
            'stock.required' => 'Stock Produk wajib diisi',
            'stock.integer' => 'Stock produk wajib berupa angka',
          ]);
          Product::create($validateData);
          return response()->json(['message' => 'Product berhasil ditambah']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $products = Product::findOrFail($id);
        return response()->json($products);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validateData = $request->validate([
            'name' => 'required|max:50',
            'imageLink' => 'required',
            'category_id' => 'required',
            'brand_id' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
          ],
          [
            'name.required' => 'Nama Produk wajib diisi',
            'name.max' => 'Nama Produk tidak boleh lebih dari 50 huruf',
            'imageLink.required' => 'Gambar produk wajib diisi',
            'category_id.required' => 'Category produk wajib diisi',
            'brand_id.required' => 'Brand produk wajib diisi',
            'price.required' => 'Harga produk wajib diisi',
            'price.numeric' => 'Harga produk wajib berupa angka',
            'stock.required' => 'Stock Produk wajib diisi',
            'stock.integer' => 'Stock produk wajib berupa angka',
          ]);
          $products = Product::findOrFail($id);
          $products -> update($validateData);
          return response()->json(['message' => 'Product berhasil diedit']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $products = Product::findOrFail($id);
        $products -> delete();
        return response()->json(['message' => 'Product berhasil dihapus']);
    }
}
