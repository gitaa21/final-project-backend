<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brand::all();
        return response()->json($brands);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $validateData = $request->validate([
        'name' => 'required',
      ],
      [
        'name.required' => 'Nama brand wajib diisi',
      ]);

      Brand::create($validateData);
      return response()->json(['message' => 'Brand berhasil ditambahkan']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $brands = Brand::findOrFail($id);
        return response()->json($brands);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validateData = $request->validate([
            'name' => 'required',
          ],
          [
            'name.required' => 'Nama brand wajib diisi',
          ]);

          $brand = Brand::findOrFail($id);
          $brand ->update($validateData);
          return response()->json(['message' => 'Brand berhasil diupdate']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $brand = Brand::findOrFail($id);
        $brand->delete();
        return response()->json(['message' => 'Brand berhasil dihapus']);
    }
}
