<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Kategori;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        $trendings = Article::where('status', 'published')->latest()->take(3)->get();
        $fashion = Article::where('kategori_id', '4')->latest()->first();
        $ragam = Article::where('kategori_id', '9')->latest()->first();
        $kategoris = Kategori::take(5)->get();

        return view('guest.index', compact('trendings', 'fashion', 'ragam', 'kategoris'));
    }
    public function show($id)
    {
        $data = Article::where('id', $id)->first();
        return view('guest.detail_article', compact('data'));
    }
    public function by_category()
    {
        $kategoris = Kategori::all();
        return view('guest.kategori.index', compact('kategoris'));
    }
    public function show_by_category($id)
    {
        $datas = Article::where('kategori_id', $id)->get();
        return view('guest.kategori.show-by-category', compact('datas'));
    }
}
