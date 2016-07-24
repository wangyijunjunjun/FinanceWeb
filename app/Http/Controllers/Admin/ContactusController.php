<?php

namespace App\Http\Controllers\Admin;

use App\Entity\Contactus;
use App\Entity\HomeFirst;
use App\Http\Controllers\Controller;
use App\Models\M3Result;
use Illuminate\Http\Request;

class ContactusController extends Controller
{

    public function toContactus()
    {
        $Contact_us = Contactus::find('1');
        return view('admin/contactus')->with('Contact_us', $Contact_us);
//        return $Contact_us;
    }
    public function contactusEdit(Request $request)
    {
//        data: {
//        address_text: $('input[name=address_text]').val(),
//                        telephone: $('input[name=telephone]').val(),
//                        background_img: ($('#address_background').attr('src') != '/admin/images/icon-add.png' ? $('#preview_id').attr('src') : ''),
//                        _token: "{{csrf_token()}}"
//                    },
        $address_text = $request->input('address_text', '');
        $telephone = $request->input('telephone', '');
        $background_img = $request->input('background_img', '');

        $Contact_us = Contactus::find('1');
        $Contact_us->address_text = $address_text;
        $Contact_us->telephone = $telephone;
        $Contact_us->background_img = $background_img;
        $Contact_us->save();

        $m3_result = new M3Result();
        $m3_result->status = 0;
        $m3_result->message = '添加成功';

        return $m3_result->toJson();
    }

    public function toContactusEdit(Request $request)
    {
        $Contact_us = Contactus::find('1');
        return view('admin/contactus_edit')->with('Contact_us', $Contact_us);
    }
}
