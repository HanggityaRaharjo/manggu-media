<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $articles = Article::where('status', '!=', 'published')->get();
        return view('auth.admin.index', compact('articles'));
    }

    public function store(Request $request)
    {
        for ($i = 1; $i <= count($request->all()); $i++) {
            if ($i == 1) {
                $token = $request->_token;
            } else {
                if (count($request['checkbox' . $i]) <= 1) return back();
                $id = $request['checkbox' . $i][0];
                $value = $request['checkbox' . $i][1];
                Article::where('id', $id)->update(["status" => $value]);
            }
        }

        return redirect('/dashboard/admin/articles');
    }
}
