<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class KategoriController extends Controller
{
    public function index()
    {
        $kategoris = Kategori::all();
        return view('auth.kategori.index', compact('kategoris'));
    }

    public function store(Request $request)
    {
        if (Auth::user()->role != 'admin') return abort(403);
        $validated = $request->validate([
            'nama_kategori' => 'required|unique:Kategoris|min:4'
        ]);
        $slug = Str::slug($request->nama_kategori, '-');
        Kategori::create([
            "nama_kategori" => $request->nama_kategori,
            "slug_kategori" => $slug
        ]);
        return back();
    }
}
