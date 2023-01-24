<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $articles = Article::where('user_id', Auth::user()->id)->latest()->get();
        $last_article = Article::where('user_id', Auth::user()->id)->where('status', 'published')->latest()->first();
        // dd($last_article);

        return view('auth.user.index', compact('articles', 'last_article'));
    }
}
