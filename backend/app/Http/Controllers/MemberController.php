<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members = Member::all();
        return response()->json([
            'message' => 'Data Berhasil diambil',
            'Member' => $members,
        ], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:members',
            'phone' => 'required',
        ]);
        $member = Member::create($request->all());
        return response()->json([
            'message' => 'Data member berhasil ditambahkan',
            'data' => $member
        ], 201);
    }

    public function show($id)
    {
        $member = Member::findOrFail($id);
        if (!$member) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }
        return response()->json($member, 200);
    }

    public function update(Request $request, $id)
    {
        $member = Member::findOrFail($id);
        if (!$member) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }
        $member->update($request->all());
        return response()->json([
            'message' => 'Data member berhasil diupdate',
            'data' => $member
        ], 200);
    }

    public function destroy($id)
    {
        $member = Member::findOrFail($id);
        if (!$member) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }
        $member->delete();
        return response()->json([
            'message' => 'Data berhasil dihapus',
        ], 200);
    }
}
