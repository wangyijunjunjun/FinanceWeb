<?php

namespace App\Http\Controllers\Admin;

use App\Entity\Contactus;
use App\Entity\HomeFirst;
use App\Entity\MainBusiness;
use App\Http\Controllers\Controller;
use App\Models\M3Result;
use Illuminate\Http\Request;

class MainBusinessController extends Controller
{

    public function toMainBusiness()
    {
        $Main_business = MainBusiness::all();

        return view('admin/mainbusiness')->with('Main_business', $Main_business);
    }

    public function mainBusinessAdd(Request $request)
    {
        $content = $request->input('content', '');
        $desc = $request->input('desc', '');
        $title = $request->input('title', '');
        $img = $request->input('img', '');

        $MainBusiness = new MainBusiness();
        $MainBusiness->business_page = $content;
        $MainBusiness->business_desc = $desc;
        $MainBusiness->business_name = $title;
        $MainBusiness->business_img = $img;
        $MainBusiness->save();

        $m3_result = new M3Result();
        $m3_result->status = 0;
        $m3_result->message = '添加成功';

        return $m3_result->toJson();
    }

    public function toMainBusinessAdd(Request $request)
    {
        return view('admin/mainbusiness_add');
    }

    public function toMainBusinessPage(Request $request, $id)
    {

        $Page = MainBusiness::find($id);

        return view('admin/mainbusiness_page')->with('Page', $Page);
    }

    public function mainbusinessDel(Request $request)
    {

        $id = $request->input('id', '');
        MainBusiness::find($id)->delete();

        $m3_result = new M3Result;
        $m3_result->status = 0;
        $m3_result->message = '删除成功';

        return $m3_result->toJson();
    }

}
