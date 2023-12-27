<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TemporaryFile;

class UploadController extends Controller
{
    public function store(Request $request) {
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = $file->getClientOriginalName();
            $folder = uniqid() . '-' . now()->timestamp;
            $file->storeAs('public/photos/' . $folder, $filename);

            TemporaryFile::create([
                'folder' => $folder,
                'filename' => $filename
            ]);

            return $folder;
        }

        return '';
    }

    public function patch(Request $request) {
        $temporaryFile = TemporaryFile::where('folder', $request->folder)->first();
        if ($temporaryFile) {
            $temporaryFile->update([
                'folder' => $request->folder,
                'filename' => $request->filename
            ]);

            return $temporaryFile->folder;

        }

        return '';
    }
}
