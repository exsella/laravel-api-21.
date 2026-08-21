<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = Kategori::with('products')->latest()->get();

        return response()->json([
            'status' => true,
            'message' => 'Data kategori berhasil diambil',
            'data' => $kategori
        ], Response::HTTP_OK);
    }

   public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string'
    ]);

    $kategori = Kategori::create([
        'name' => $request->name,
        'description' => $request->description
    ]);

    return response()->json([
        'status' => true,
        'message' => 'Data kategori berhasil disimpan',
        'data' => $kategori
    ], Response::HTTP_CREATED);
}

    public function show(Kategori $kategori)
    {
        $kategori->load('products');

        return response()->json([
            'status' => true,
            'message' => 'Data kategori berhasil diambil',
            'data' => $kategori
        ], Response::HTTP_OK);
    }

   public function update(Request $request, Kategori $kategori)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string'
    ]);

    $kategori->update([
        'name' => $request->name,
        'description' => $request->description
    ]);

    return response()->json([
        'status' => true,
        'message' => 'Data kategori berhasil diperbarui',
        'data' => $kategori
    ], Response::HTTP_OK);
}

    public function destroy(Kategori $kategori)
    {
        $kategori->delete();

        return response()->json([
            'status' => true,
            'message' => 'Data kategori berhasil dihapus'
        ], Response::HTTP_OK);
    }
}