<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Iklan;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Filesystem\Filesystem;


class IklanController extends Controller
{
    public function store(Request $request)
    {
        // Ini jelek banget codingan nya wkwkwkwkwkwkwkwkwkwkwkwkwkwkwk
        // Yang penting beres dulu wkwkwkwkwkwkwkwwkwkwkwkwk
        if (Auth::user()->role !== 'admin') return abort(403);;
        if (!empty(Iklan::first())) {
            $filepath1 = public_path('storage/adds-image/' . Iklan::first()->iklan_1);
            if (file_exists($filepath1)) {
                unlink(public_path('storage/adds-image/' . Iklan::first()->iklan_1));
            }
            $filepath2 = public_path('storage/adds-image/' . Iklan::first()->iklan_2);
            if (file_exists($filepath2)) {
                unlink(public_path('storage/adds-image/' . Iklan::first()->iklan_2));
            }
            $filepath3 = public_path('storage/adds-image/' . Iklan::first()->iklan_3);
            if (file_exists($filepath3)) {
                unlink(public_path('storage/adds-image/' . Iklan::first()->iklan_3));
            }
            $filepath4 = public_path('storage/adds-image/' . Iklan::first()->iklan_4);
            if (file_exists($filepath4)) {
                unlink(public_path('storage/adds-image/' . Iklan::first()->iklan_4));
            }
            $filepath5 = public_path('storage/adds-image/' . Iklan::first()->iklan_5);
            if (file_exists($filepath5)) {
                unlink(public_path('storage/adds-image/' . Iklan::first()->iklan_5));
            }
            $filepath6 = public_path('storage/adds-image/' . Iklan::first()->iklan_6);
            if (file_exists($filepath6)) {
                unlink(public_path('storage/adds-image/' . Iklan::first()->iklan_6));
            }
            $filepath7 = public_path('storage/adds-image/' . Iklan::first()->iklan_7);
            if (file_exists($filepath7)) {
                unlink(public_path('storage/adds-image/' . Iklan::first()->iklan_7));
            }
        }
        if (!empty(Iklan::first())) Iklan::first()->delete();


        $extension_iklan_1 = $request->file('iklan1')->getClientOriginalExtension();
        $filename_iklan_1 = date("Y-m-d") . '-'  .  Str::random(20) . '.' . $extension_iklan_1;

        $extension_iklan_2 = $request->file('iklan2')->getClientOriginalExtension();
        $filename_iklan_2 = date("Y-m-d") . '-'  .  Str::random(20) . '.' . $extension_iklan_2;

        $extension_iklan_3 = $request->file('iklan3')->getClientOriginalExtension();
        $filename_iklan_3 = date("Y-m-d") . '-'  .  Str::random(20) . '.' . $extension_iklan_3;

        $extension_iklan_4 = $request->file('iklan4')->getClientOriginalExtension();
        $filename_iklan_4 = date("Y-m-d") . '-'  .  Str::random(20) . '.' . $extension_iklan_4;

        $extension_iklan_5 = $request->file('iklan5')->getClientOriginalExtension();
        $filename_iklan_5 = date("Y-m-d") . '-'  .  Str::random(20) . '.' . $extension_iklan_5;

        $extension_iklan_6 = $request->file('iklan6')->getClientOriginalExtension();
        $filename_iklan_6 = date("Y-m-d") . '-'  .  Str::random(20) . '.' . $extension_iklan_6;

        $extension_iklan_7 = $request->file('iklan7')->getClientOriginalExtension();
        $filename_iklan_7 = date("Y-m-d") . '-'  .  Str::random(20) . '.' . $extension_iklan_7;

        // Store Image
        $request->file('iklan1')->storeAs(
            'adds-image',
            $filename_iklan_1
        );
        $request->file('iklan1')->storeAs(
            'adds-image',
            $filename_iklan_1
        );
        $request->file('iklan2')->storeAs(
            'adds-image',
            $filename_iklan_2
        );
        $request->file('iklan3')->storeAs(
            'adds-image',
            $filename_iklan_3
        );
        $request->file('iklan4')->storeAs(
            'adds-image',
            $filename_iklan_4
        );
        $request->file('iklan5')->storeAs(
            'adds-image',
            $filename_iklan_5
        );
        $request->file('iklan6')->storeAs(
            'adds-image',
            $filename_iklan_6
        );
        $request->file('iklan7')->storeAs(
            'adds-image',
            $filename_iklan_7
        );

        Iklan::create([
            "iklan_1" => $filename_iklan_1,
            "iklan_2" => $filename_iklan_2,
            "iklan_3" => $filename_iklan_3,
            "iklan_4" => $filename_iklan_4,
            "iklan_5" => $filename_iklan_5,
            "iklan_6" => $filename_iklan_6,
            "iklan_7" => $filename_iklan_7,
        ]);

        return back();
    }
}
