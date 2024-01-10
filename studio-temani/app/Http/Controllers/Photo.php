<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PhotoSave;

class Photo extends Controller
{
    public function photo() {
        $postphoto = [
            'photos' => PhotoSave::all()
        ];

        return view('admin.layouts.adPhoto', $postphoto);
    }

    public function createPost (Request $request, PhotoSave $photosave) {
        $request->validate([
            'desc' => 'required',
            'title' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg',
        ]);

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = $file->getClientOriginalName();
            $folder = uniqid() . '-' . now()->timestamp;
            $file->storeAs('public/post-image/' . $folder, $filename);
            $save = $folder . '/' . $filename;

            $data = [
                'desc' => $request->input('desc'),
                'title' => $request->input('title'),
                'photo' => $save
            ];
            
            $photosave->create($data);
            return redirect('/photo')->with('success', 'Data Berhasil Diubah');
        }

        return redirect('/photo');
    }

    public function deletePost (PhotoSave $photosave) {
        $photosave->delete();
        return redirect('/photo')->with('success', 'Data Berhasil Dihapus');
    }
}
