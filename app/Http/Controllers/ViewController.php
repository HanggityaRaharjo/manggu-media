<?php

namespace App\Http\Controllers;

use App\Models\ComponentArticle;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function store(Request $request)
    {
        ComponentArticle::create([
            "component_id" => $request->component_id,
            "article_id" => $request->article_id,
        ]);
        return back()->with(['component_success' => "Artikel pada component sukses terpasang"]);
    }
    public function destroy($id)
    {
        ComponentArticle::where('id', $id)->delete();
        return back()->with(['DeleteNotif' => "Sukses melepas artikel yang terpasang"]);
    }
}
