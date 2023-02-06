<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Kategori;
use App\Models\Note;
use App\Models\StatusArticle;
use App\Models\Component;
use App\Models\ComponentArticle;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        if (Auth::user()->role != 'admin') return abort(403);
        $articles = Article::where('status', 'onproccess')->get();
        $note = Note::first();
        $kategoris = Kategori::all();
        return view('auth.admin.index', compact('articles', 'note', 'kategoris'));
    }

    public function update(Request $request, $id)
    {
        if (Auth::user()->role != 'admin') return abort(403);
        Article::where('id', $id)->update(['status' => 'published']);
        return back();
    }

    public function reject(Request $request, $id)
    {
        if (Auth::user()->role != 'admin') return abort(403);
        Article::where('id', $id)->update(['status' => 'rejected']);
        StatusArticle::create(["article_id" => $id, "message" => $request->message]);
        return back();
    }

    public function view_panel()
    {
        if (Auth::user()->role != 'admin') return abort(403);
        $datas = Article::where('status', 'published')->latest()->get();
        $components = Component::all();
        $components_article = ComponentArticle::all();
        return view('auth.admin.view-panel', compact('datas', 'components', 'components_article'));
    }
}
