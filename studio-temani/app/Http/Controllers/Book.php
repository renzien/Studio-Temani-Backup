<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FamilyPhoto;
use App\Models\SelfSession;
use App\Models\CreaSpace;
use App\Models\Bookpost;
use App\Models\Packagebook;

class Book extends Controller
{
    public function book() {
        // return view('book', [
        //     "title" => "Booking"
        // ]);
        $post = [
            'familyphotos' => FamilyPhoto::find(1),
            'selfsessions' => SelfSession::find(1),
            'creaspaces' => CreaSpace::find(1),
            'bookposts' => Bookpost::find(1),
            'packagebooks' => Packagebook::find(1),
        ];

        return view('book', $post);
    }
}
