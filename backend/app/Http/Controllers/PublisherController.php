<?php
namespace App\Http\Controllers;

use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    public function index()
    {
        return response()->json(Publisher::all(), 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        
        $publisher = Publisher::create($request->all());
        return response()->json([
            'message' => 'Data publisher berhasil ditambahkan',
            'data' => $publisher
        ], 201);
    }

    public function show($id)
    {
        $publisher = Publisher::findOrFail($id);
        if (!$publisher) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }
        return response()->json($publisher, 200);
    }

    public function update(Request $request, $id)
    {
        $publisher = Publisher::findOrFail($id);
        if (!$publisher) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }
        $publisher->update($request->all());
        return response()->json([
            'message' => 'Data publisher berhasil diupdate',
            'data' => $publisher
        ], 200);
    }

    public function destroy($id)
    {
        $publisher = Publisher::findOrFail($id);
        if (!$publisher) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }
        $publisher->delete();
        return response()->json([
            'message' => 'Data berhasil dihapus',
        ], 200);
    }
}