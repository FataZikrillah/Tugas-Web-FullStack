<?php
namespace App\Http\Controllers;

use App\Models\Loan;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    public function index()
    {
        $loans = Loan::with(['member', 'book'])->get();
        return response()->json([
            'message' => 'Data peminjaman berhasil diambil',
            'data' => $loans
        ], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'member_id' => 'required|exists:members,id',
            'book_id' => 'required|exists:books,id',
            'loan_date' => 'required|date',
            'return_date' => 'nullable|date',
        ]);
        
        $loan = Loan::create($request->all());
        return response()->json([
            'message' => 'Data peminjaman berhasil ditambahkan',
            'data' => $loan
        ], 201);
    }

    public function show($id)
    {
        $loan = Loan::with(['member', 'book'])->findOrFail($id);
        if (!$loan) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }
        return response()->json([
            'message' => 'Data peminjaman berhasil diambil',
            'data' => $loan
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $loan = Loan::findOrFail($id);
        if (!$loan) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }
        $loan->update($request->all());
        $loan->load(['member', 'book']);
        return response()->json([
            'message' => 'Data peminjaman berhasil diupdate',
            'data' => $loan
        ], 200);
    }

    public function destroy($id)
    {
        $loan = Loan::findOrFail($id);
        if (!$loan) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }
        $loan->delete();
        return response()->json([
            'message' => 'Data berhasil dihapus',
        ], 200);
    }
}