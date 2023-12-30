<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FamilyPhoto;
use App\Models\SelfSession;
use App\Models\CreaSpace;
use App\Models\TemporaryFile;
use Illuminate\Support\Facades\Storage;

class Katalog extends Controller
{
    public function selfphoto() {
        $post = [
            'selfsessions' => SelfSession::find(1),
        ];

        return view('admin.layouts.selfad', $post);
    }

    public function familyphoto() {
        $post = [
            'familyphotos' => FamilyPhoto::find(1),
        ];

        return view('admin.layouts.family', $post);
    }

    public function creativestudio() {
        $post = [
            'creaspaces' => CreaSpace::find(1),
        ];


        return view('admin.layouts.creastudio', $post);
    }

    // Function Family Photo
    public function editFamilyPhoto(Request $request, FamilyPhoto $familyphoto) {
        $request->validate([
            'title' => 'required',
            'descpack' => 'required',
            'photo' => 'required'
        ]);
    
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = $file->getClientOriginalName();
            $folder = uniqid() . '-' . now()->timestamp;
            $file->storeAs('public/post-image/' . $folder, $filename);
            $save = $folder . '/' . $filename;

            $data = [
                'title' => $request->input('title'),
                'descpack' => $request->input('descpack'),
                'photo' => $save
            ];
            
            $familyphoto->update($data);
            return redirect('/familyphoto')->with('success', 'Data Paket Family Berhasil Diubah');
        }
        return redirect('/familyphoto');
    }



    // Function Self Photo
    public function editSelfSession(Request $request, SelfSession $selfsession) {
        $request->validate([
            'title' => 'required',
            'descpack' => 'required',
            'photo' => 'required'
        ]);

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = $file->getClientOriginalName();
            $folder = uniqid() . '-' . now()->timestamp;
            $file->storeAs('public/post-image/' . $folder, $filename);
            $save = $folder . '/' . $filename;

            $data = [
                'title' => $request->input('title'),
                'descpack' => $request->input('descpack'),
                'photo' => $save
            ];
            
            $selfsession->update($data);
            return redirect('/selfphoto')->with('success', 'Data Paket Self Session Berhasil Diubah');
        }
        return redirect('/selfphoto');
    }

    // Function Creative Space
    public function editCreaSpace(Request $request, CreaSpace $creaspace) {
        $request->validate([
            'title' => 'required',
            'descpack' => 'required',
            'photo' => 'required'
        ]);

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = $file->getClientOriginalName();
            $folder = uniqid() . '-' . now()->timestamp;
            $file->storeAs('public/post-image/' . $folder, $filename);
            $save = $folder . '/' . $filename;

            $data = [
                'title' => $request->input('title'),
                'descpack' => $request->input('descpack'),
                'photo' => $save
            ];
            
            $creaspace->update($data);
            return redirect('/creativestudio')->with('success', 'Data Paket Creative Space Berhasil Diubah');
        }

        return redirect('/creativestudio');
    }
}
