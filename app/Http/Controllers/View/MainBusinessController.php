<?php

namespace App\Http\Controllers\View;

use App\Entity\HomeFirst;
use App\Entity\MainBusiness;
use App\Http\Controllers\Controller;

class MainBusinessController extends Controller
{

    public function toMainBusiness()
    {
        $Main_business = MainBusiness::all();
        $Home_first = HomeFirst::find('1');

        return view('main_business')->with('Main_business', $Main_business)
            ->with('Home_first', $Home_first);
    }
}
