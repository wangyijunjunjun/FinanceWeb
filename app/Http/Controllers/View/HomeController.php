<?php

namespace App\Http\Controllers\View;

use App\Entity\HomeFirst;
use App\Entity\HomeSecond;
use App\Entity\MainBusiness;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function toHome($value = '')
    {
        //现在处理数据库

        $Home_first = HomeFirst::find('1');
        $Home_second = HomeSecond::all();
        $Main_business = MainBusiness::all();

        return view('home')->with('Home_first', $Home_first)
            ->with('Home_second', $Home_second)
            ->with('Main_business', $Main_business);
    }
}
