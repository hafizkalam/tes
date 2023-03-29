<?php

namespace App\Http\Controllers;

use App\Models\Meja;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Http\Request;

class MejaController extends Controller
{
    public function index()
    {
        // dd(User::all());
        // exit;
        $data = Meja::all();
        return view('layout.meja', ['meja' => $data]);
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
        $qrcode = QrCode::size(300)->generate("http://127.0.0.1:8000/menu/"."$data->no_meja");
        return view('layout.qrcode', compact('qrcode'));
    }
}
