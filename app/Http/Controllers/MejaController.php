<?php

namespace App\Http\Controllers;

use App\Models\Meja;
use App\Http\Controllers\QrCode;
use Illuminate\Http\Request;

class MejaController extends Controller
{
    public function index()
    {
        $data = Meja::all();
        return view('layout.meja', ['mejas' => $data]);
    }

    public function store(Request $request)
    {
        $data = new Meja;
        $data->no_meja = $request->no_meja;
        $data->save();
        return back();
    }

    public function generate($id)
    {
        $data = Meja::findOrFail($id);
        $qrcode = QrCode::size(300)->generate($data->no_meja);
        return view('layout.qrcode', compact('qrcode'));
    }
}
