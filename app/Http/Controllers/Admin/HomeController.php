<?php

namespace App\Http\Controllers\Admin;

use App\Entity\HomeFirst;
use App\Entity\MainBusiness;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function toHomeInfo()
    {
        //首页信息展示
        $Home_first = HomeFirst::find('1');
        $Main_business = MainBusiness::all();
        return view('admin/home')->with('Home_first', $Home_first)
            ->with('Main_business', $Main_business);
    }

    public function homeEdit(Request $request)
    {
    }

    public function toHomeEdit(Request $request)
    {

    }

    public function toSecondPage()
    {
        $Home_first = HomeFirst::find('1');
        return view('admin/home_secondpage')->with('Home_first', $Home_first);
    }

    public function toThirdPage()
    { $Home_first = HomeFirst::find('1');
        return view('admin/home_thirdpage')->with('Home_first', $Home_first);

    }
}
