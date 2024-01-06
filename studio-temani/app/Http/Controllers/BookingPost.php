<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bookpost;
use App\Models\Packagebook;

class BookingPost extends Controller
{
    public function bookpost() {
        $postbook = [
            'bookposts' => Bookpost::find(1),
        ];

        return view('admin.layouts.adBook', $postbook);
    }

    public function packagebook() {
        $postpackagebook = [
            'packagebooks' => Packagebook::find(1),
        ];

        return view('admin.layouts.adPackagebook', $postpackagebook);
    }

    // Update Booking

    public function editBookPost (Request $request, Bookpost $bookpost) {
        $request->validate([
            'tagline' => 'required',
            'photo' => 'required'
        ]);

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = $file->getClientOriginalName();
            $folder = uniqid() . '-' . now()->timestamp;
            $file->storeAs('public/book-image/' . $folder, $filename);
            $save = $folder . '/' . $filename;

            $data = [
                'tagline' => $request->input('tagline'),
                'photo' => $save
            ];

            $bookpost->update($data);
            return redirect ('/bookpost')->with('success', 'Data Berhasil Diubah');
        }

        return redirect('/bookpost');
    }
}
