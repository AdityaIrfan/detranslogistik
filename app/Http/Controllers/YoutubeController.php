<?php

namespace App\Http\Controllers;

use App\Models\Youtube;
use Illuminate\Http\Request;

class YoutubeController extends Controller
{

    public function index()
    {
        $youtube = Youtube::all();
        return view('admin.youtube', compact('youtube'));
    }

    public function create(Request $request) {

        $validasi = $request->validate([
            'youtube_link' => 'required'
        ]);

        Youtube::create($validasi);

        return back();
        // if ($youtube) {
        //     return "<p>Berhasil</p>";
        // } else {
        //     return "<p>gagal</p>";
        // }
    }

    public function getUpdate(Youtube $youtube, $id)
    {
        $data = $youtube->findOrFail($id);

        return view('admin.updateYoutube', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $validasi = $request->validate([
            'youtube_link' => 'required'
        ]);

        Youtube::whereId($id)->update($validasi);

        return redirect()->route('getYoutube');
    }

    public function delete($id)
    {
        $youtube = Youtube::findOrFail($id);
        $youtube->delete();

        return redirect()->back();
    }
}
