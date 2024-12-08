<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return response()->json($categories);
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
    
        Category::create($validateData);
        return response()->json(['message' => 'Category berhasil ditambah']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $categories = Category::findOrFail($id);
        return response()->json($categories);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validateData = $request->validate([
            'name' => 'required'
        ],[
            'name.required' => 'Nama category wajib diisi'
        ]);

        $categories = Category::findOrFail($id);
        $categories->update($validateData);
        return response()->json(['message' => 'Category berhasil di update']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categories = Category::findOrFail($id);
        $categories->delete();
        return response()->json(['message' => 'Category berhasil dihapus']);
    }
}
