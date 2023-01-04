<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use Illuminate\Console\View\Components\Warn;
use Illuminate\Http\Request;

class WargaController extends Controller
{
    // public function __construct()
    // {
        
    // }

    public static function index() {
        $warga = Warga::all();
        // @dd($warga);
        return view('home', [
            "warga" => $warga,
            "title" => "Home Page"
        ]);
    }

    public function add(Request $request) {
        // dd($request->except('_token', 'id'));
        Warga::create($request->except(['_token', 'id']));
        return redirect()->to('/');
        // return "info";
    }

    public static function updateView($id) {
        $warga = Warga::all(); //bisa pake ini atau pake all habisitu di filter di view
        return view('update', [
            "item" => $warga->firstWhere('id', $id),
            "title" => "Update Item"
        ]);
        // dd($id);
    }

    public static function updateData($id, Request $request) {
        $warga = Warga::find($id);
        $warga->update($request->except(['_token', 'id']));
        return redirect()->to('/');
    }

    public static function deleteData($id) {
        Warga::find($id)->delete();
        return redirect()->to('/');
    }

    public static function detailView($nama) {
        $warga =  Warga::find($nama);
        return view('detail', [
            "item" => $warga,
            "title" => $warga['nama'] . " Details"
        ]);
    }
}
