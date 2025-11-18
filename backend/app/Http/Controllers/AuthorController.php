<?php
namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        return response()->json(Author::all(), 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        
        $author = Author::create($request->all());
        return response()->json([
            'message' => 'Data berhasil ditambahkan',
            'data' => $author
        ], 201);
    }

    public function show($id)
    {
        $author = Author::findOrFail($id);
        if (!$author) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }
        return response()->json($author, 200);
    }

    public function update(Request $request, $id)
    {
        $author = Author::findOrFail($id);
        if (!$author) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }
        $author->update($request->all());
        return response()->json([
            'message' => 'Data berhasil diupdate',
            'data' => $author
        ], 200);
    }

    public function destroy($id)
    {
        $author = Author::findOrFail($id);
        if (!$author) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }
        $author->delete();
        return response()->json([
            'message' => 'Data berhasil dihapus',
        ], 200);
    }
}