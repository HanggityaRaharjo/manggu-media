<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscribe;
use Illuminate\Support\Facades\Auth;

class SubscribeController extends Controller
{
    public function index()
    {
        if (Auth::user()->role !== 'admin') return abort(403);

        $subscribes = Subscribe::all();
        return view('auth.admin.subscribe', compact('subscribes'));
    }

    public function store(Request $request)
    {
        if (Auth::user()->role !== 'admin') return abort(403);
        $request->validate(['email' => 'required']);
        Subscribe::create(['email' => $request->email]);
        return back()->with(['success' => 'Data Tersimpan']);
    }

    public function destroy($id)
    {
        if (Auth::user()->role !== 'admin') return abort(403);
        Subscribe::where('id', $id)->delete();
        return back()->with(['success' => 'Email berhasil dihapus']);
    }
}
