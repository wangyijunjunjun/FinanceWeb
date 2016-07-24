<?php

namespace App\Http\Controllers\View;

use App\Entity\Contactus;
use App\Entity\HomeFirst;
use App\Http\Controllers\Controller;

class ContactusController extends Controller
{
    public function toContactus($value = '')
    {

        $Home_first = HomeFirst::find('1');
        $Contact_us = Contactus::find('1');

        return view('contactus')->with('Home_first', $Home_first)
            ->with('Contact_us', $Contact_us);
    }
}
