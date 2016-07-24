<?php

namespace App\Http\Controllers\View;

use App\Entity\Aboutus;
use App\Entity\HomeFirst;
use App\Entity\Milestone;
use App\Entity\Staff;
use App\Http\Controllers\Controller;

class AboutusController extends Controller
{
    public function toAboutus($value = '')
    {

        $Home_first = HomeFirst::find('1');
        $Aboutus = Aboutus::find('1');
        $MileStone = Milestone::all();
        $Staff = Staff::all();

//        return $MileStone;
        return view('aboutus')->with('Home_first', $Home_first)
            ->with('Aboutus', $Aboutus)
            ->with('Staff',$Staff)
            ->with('MileStone', $MileStone);
    }

}
