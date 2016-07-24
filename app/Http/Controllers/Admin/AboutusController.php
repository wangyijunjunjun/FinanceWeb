<?php

namespace App\Http\Controllers\Admin;

use App\Entity\Aboutus;
use App\Entity\Contactus;
use App\Entity\HomeFirst;
use App\Http\Controllers\Controller;
use App\Models\M3Result;
use Illuminate\Http\Request;

class AboutusController extends Controller
{

    public function toAboutus()
    {
        $About_us = Aboutus::find('1');
        return view('admin/aboutus')->with('About_us', $About_us);
    }

    public function aboutusEdit(Request $request)
    {
        $company_desc = $request->input('company_desc', '');
        $industry_background = $request->input('industry_background', '');
        $core_competence = $request->input('core_competence', '');
        $license_img = $request->input('license_img', '');

        $Aboutus = Aboutus::find('1');
        $Aboutus->company_desc = $company_desc;
        $Aboutus->industry_background = $industry_background;
        $Aboutus->core_competence = $core_competence;
        $Aboutus->license_img = $license_img;
        $Aboutus->save();

        $m3_result = new M3Result();
        $m3_result->status = 0;
        $m3_result->message = '添加成功';

        return $m3_result->toJson();
    }

    public function toAboutusEdit(Request $request)
    {
        $About_us = Aboutus::find('1');
        return view('admin/aboutus_edit')->with('About_us', $About_us);
    }
}
