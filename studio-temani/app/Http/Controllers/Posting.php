<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\About;
use App\Models\Studio;
use App\Models\Pricelist;
use App\Models\PricelistHome;
use App\Models\Package;
use App\Models\SelfPhoto;
use App\Models\CreativeSpace;
use App\Models\Quote;
use App\Models\HomeStudio;
use App\Models\StudioEquip;
use App\Models\Family;
use App\Models\Inquiry;
use App\Models\Contact;

class Posting extends Controller
{
    public function posting() {
        // $home = Home::find(1);
        $post = [
            'homes' => Home::find(1),
        ];
        return view('admin.layouts.adHome', $post);
    }

    public function aboutPosting() {
        $postabout = [
            'abouts' => About::all(),
        ];
        return view('admin.layouts.adAbout', $postabout);
    }

    public function studioPosting() {
        $poststudio = [
            'studios' => Studio::all(),
        ];
        return view('admin.layouts.adStudio', $poststudio);
    }

    public function pricePosting() {
        $postpriceposting = [
            'pricelists' => Pricelist::all(),
        ];
        return view('admin.layouts.adPrice', $postpriceposting);
    }

    public function contactPosting() {
        $postcontact = [
            'contacts' => Contact::all()
        ];
        return view('admin.layouts.adContact', $postcontact);
    }

    public function pricelist() {
        $postprice = [
            'pricelisthomes' => PricelistHome::find(1),
            'creativespaces' => CreativeSpace::find(1),
        ];

        return view('admin.layouts.adminprice', $postprice);
    }

    public function studio() {
        $poststudio = [
            'homestudios' => HomeStudio::find(1),
        ];

        return view('admin.layouts.adminstudio', $poststudio);
    }

    public function equipStudio() {
        $postequip = [
            'studioequips' => StudioEquip::all()
        ];

        return view('admin.layouts.adList', $postequip);
    }

    public function quotesPosting() {
        $postquote = [
            'quotes' => Quote::all()
        ];

        return view('admin.layouts.adQuotes', $postquote);
    }

    public function packagePosting() {
        $postpackage = [
            'packages' => Package::all()
        ];

        return view('admin.layouts.adPackage', $postpackage);
    }

    public function inquiryPosting() {
        $postinquiry = [
            'inquirys' => Inquiry::all()
        ];

        return view('admin.layouts.adInquiry', $postinquiry);
    }

    public function pricefamilyPosting() {
        $postfamily = [
            'familys' => Family::all()
        ];

        return view('admin.layouts.adPriceFamily', $postfamily);
    }

    public function selfphotoPosting() {
        $postselfphoto = [
            'selfphotos' => SelfPhoto::all()
        ];

        return view('admin.layouts.adPriceSelf', $postselfphoto);
    }

    // Update Home
    public function editHome(Request $request, Home $home) {
        $request->validate([
            'title' => 'required',
            'tagline' => 'required',
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
                'tagline' => $request->input('tagline'),
                'photo' => $save
            ];
            
            $home->update($data);
            return redirect('/adminhome')->with('success', 'Data Berhasil Diubah');
        }

        return redirect('/adminhome');
    }

    public function editAbout(Request $request, About $about) {
        $request->validate([
            'title' => 'required',
            'desc' => 'required',
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
                'desc' => $request->input('desc'),
                'photo' => $save
            ];
            
            $about->update($data);
            return redirect('/adminabout')->with('success', 'Data Berhasil Diubah');
        }

        return redirect('/adminabout');
    }

    public function editStudio(Request $request, Studio $studio) {
        $request->validate([
            'title' => 'required',
            'desc' => 'required',
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
                'desc' => $request->input('desc'),
                'photo' => $save
            ];
            
            $studio->update($data);
            return redirect('/adminstudiopost')->with('success', 'Data Berhasil Diubah');
        }

        return redirect('/adminstudiopost');
    }

    public function editPricelist(Request $request, Pricelist $pricelist) {
        $request->validate([
            'title' => 'required',
            'desc' => 'required',
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
                'desc' => $request->input('desc'),
                'photo' => $save
            ];
            
            $pricelist->update($data);
            return redirect('/adminpricepost')->with('success', 'Data Berhasil Diubah');
        }

        return redirect('/adminpricepost');
    }

    public function editContact(Request $request, Contact $contact) {
        $data = [
            'desc' => $request->input('desc')
        ];

        $contact->update($data);
        return redirect('/admincontact')->with('success', 'Data Berhasil Diubah');
    }

    // Update Pricelist
    public function editPricelistHome(Request $request, PricelistHome $pricelisthome) {
        $request->validate([
            'title' => 'required',
            'desc' => 'required',
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
                'desc' => $request->input('desc'),
                'photo' => $save
            ];
            
            $pricelisthome->update($data);
            return redirect('/adminprice')->with('success', 'Data Berhasil Diubah');
        }

        return redirect('/adminprice');
    }

    public function editInquiry(Request $request, Inquiry $inquiry) {
        $request->validate([
            'title' => 'required',
            'desc' => 'required',
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
                'desc' => $request->input('desc'),
                'photo' => $save
            ];
            
            $inquiry->update($data);
            return redirect('/admininquiry')->with('success', 'Data Berhasil Diubah');
        }

        return redirect('/admininquiry');
    }

    public function editFamily(Request $request, Family $family) {
        $request->validate([
            'title' => 'required',
            'tag1' => 'required',
            'desc1' => 'required',
            'tag2' => 'required',
            'desc2' => 'required',
            'unit1' => 'required',
            'price1' => 'required',
            'descprice1' => 'required',
            'unit2' => 'required',
            'price2' => 'required',
            'descprice2' => 'required',
            'photo' => 'required'
        ]);
        
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = $file->getClientOriginalName();
            $folder = uniqid() . '-' . now()->timestamp;
            $file->storeAs('public/family-image/' . $folder, $filename);
            $save = $folder . '/' . $filename;

            $data = [
                'title' => $request->input('title'),
                'tag1' => $request->input('tag1'),
                'desc1' => $request->input('desc1'),
                'tag2' => $request->input('tag2'),
                'desc2' => $request->input('desc2'),
                'unit1' => $request->input('unit1'),
                'price1' => $request->input('price1'),
                'descprice1' => $request->input('descprice1'),
                'unit2' => $request->input('unit2'),
                'price2' => $request->input('price2'),
                'descprice2' => $request->input('descprice2'),
                'photo' => $save
            ];

            $family->update($data);
            return redirect('/adminfamily')->with('success', 'Data Berhasil Diubah');
        }

        return redirect('/adminfamily');
    }

    public function editSelfPhoto(Request $request, SelfPhoto $selfphoto) {
        $request->validate([
            'title' => 'required',
            'tag1' => 'required',
            'desc1' => 'required',
            'tag2' => 'required',
            'desc2' => 'required',
            'unit1' => 'required',
            'price1' => 'required',
            'descprice1' => 'required',
            'unit2' => 'required',
            'price2' => 'required',
            'descprice2' => 'required',
        ]);

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = $file->getClientOriginalName();
            $folder = uniqid() . '-' . now()->timestamp;
            $file->storeAs('public/selfphoto-image/' . $folder, $filename);
            $save = $folder . '/' . $filename;

            $data = [
                'title' => $request->input('title'),
                'tag1' => $request->input('tag1'),
                'desc1' => $request->input('desc1'),
                'tag2' => $request->input('tag2'),
                'desc2' => $request->input('desc2'),
                'unit1' => $request->input('unit1'),
                'price1' => $request->input('price1'),
                'descprice1' => $request->input('descprice1'),
                'unit2' => $request->input('unit2'),
                'price2' => $request->input('price2'),
                'descprice2' => $request->input('descprice2'),
                'photo' => $save
            ];

            $selfphoto->update($data);
            return redirect('/adminselfphoto')->with('success', 'Data Berhasil Diubah');
        }

        return redirect('/adminselfphoto');
    }

    public function editCreativeSpace(Request $request, CreativeSpace $creativespace) {
        $data = [
            'title' => $request->input('title'),
            'tagone' => $request->input('tagone'),
            'descone' => $request->input('descone'),
            'tagtwo' => $request->input('tagtwo'),
            'desctwo' => $request->input('desctwo'),
            'tagthree' => $request->input('tagthree'),
            'descthree' => $request->input('descthree'),
            'tagfour' => $request->input('tagfour'),
            'tagfive' => $request->input('tagfive'),
            'unit' => $request->input('unit'),
            'price' => $request->input('price'),
            'unitprice' => $request->input('unitprice'),
            'pricetwo' => $request->input('pricetwo'),
            'descpricetwo' => $request->input('descpricetwo'),
        ];

        $creativespace->update($data);
        return redirect('/adminprice');
    }

    // Update Studio

    public function editHomeStudio(Request $request, HomeStudio $homestudio) {
        $request->validate([
            'title' => 'required',
            'tagline' => 'required',
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
                'tagline' => $request->input('tagline'),
                'photo' => $save
            ];
            
            $homestudio->update($data);
            return redirect('/adminstudio')->with('success', 'Data Berhasil Diubah');
        }

        return redirect('/adminstudio');
    }

    public function editStudioEquips(Request $request, StudioEquip $studioequip){
        $request->validate([
            'title' => 'required',
            'tagline' => 'required',
            'desc' => 'required',
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
                'tagline' => $request->input('tagline'),
                'list1' => $request->input('list1'),
                'list2' => $request->input('list2'),
                'list3' => $request->input('list3'),
                'list4' => $request->input('list4'),
                'list5' => $request->input('list5'),
                'list6' => $request->input('list6'),
                'desc' => $request->input('desc'),
                'photo' => $save
            ];
            
            $studioequip->update($data);
            return redirect('/adminequip')->with('success', 'Data Berhasil Diubah');
        }

        return redirect('/adminequip');
    }

    public function editQuote(Request $request, Quote $quote){
        $request->validate([
            'quote' => 'required',
            'author' => 'required',
            'photo' => 'required'
        ]);

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = $file->getClientOriginalName();
            $folder = uniqid() . '-' . now()->timestamp;
            $file->storeAs('public/post-image/' . $folder, $filename);
            $save = $folder . '/' . $filename;

            $data = [
                'quote' => $request->input('quote'),
                'author' => $request->input('author'),
                'photo' => $save
            ];
            
            $quote->update($data);
            return redirect('/adminquote')->with('success', 'Data Berhasil Diubah');
        }

        return redirect('/adminquote');
    }

    public function editPackage(Request $request, Package $package) {
        $request->validate([
            'title' => 'required',
            'descpack' => 'required'
        ]);

        $data = [
            'title' => $request->input('title'),
            'descpack' => $request->input('descpack')
        ];

        $package->update($data);
        return redirect('/adminpackage')->with('success', 'Data Berhasil Diubah');
    }
}
