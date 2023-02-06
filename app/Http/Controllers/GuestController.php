<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Component;
use App\Models\ComponentArticle;
use App\Models\Iklan;
use App\Models\Kategori;
use App\Models\Komentar;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        $headlines = Component::with(['component_article'])->where('id', 1)->first();
        $news = Component::where('id', 2)->first();
        $sides = Component::where('id', 3)->first();
        $recomendations = Component::where('id', 4)->first();
        $slider = Component::where('id', 5)->first();
        $latest = [];
        if (empty($news->component_article[0])) {
            $latest = Article::latest()->where('status', 'published')->take(5)->get();
        }
        $iklan = Iklan::first();
        $slider_two = Component::where('id', 6)->first();
        $kategoris = Kategori::All();

        return view('guest.index', compact('kategoris', 'headlines', 'sides',  'news', 'recomendations', 'slider', 'slider_two', 'latest', 'iklan'));
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

    public function comment(Request $request, $id)
    {
        Komentar::create(['article_id' => $id, 'komentar' => $request->message]);
        return back();
    }
}
