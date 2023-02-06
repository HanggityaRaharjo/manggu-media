<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Kategori;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function create()
    {
        $kategoris = Kategori::all();
        return view('auth.article.create', compact('kategoris'));
    }
    public function store(Request $request)
    {
        // Validate
        if (!$request->file('gambar')) return back();
        if ($request->file('gambar')->getSize() >= 2000000) return back();

        // Generate String
        $random_string = Str::random(20);
        $extension = $request->file('gambar')->getClientOriginalExtension();
        $filename = date("Y-m-d") . '-'  .  $random_string . '.' . $extension;

        $slug = Str::slug($request->judul, '-');

        // Store Image
        $request->file('gambar')->storeAs(
            'article-images',
            $filename
        );

        Article::create([
            "gambar" => $filename,
            "user_id" => Auth::user()->id,
            "status" => 'onproccess',
            "tanggal" => date("Y-m-d"),
            "judul" => $request->judul,
            "slug" => $slug,
            "kategori_id" => $request->kategori_id,
            "body" => $request->body,
            "penulis" => Auth::user()->name,
        ]);
        return redirect('/create-article');
    }
}
