<?php

namespace App\Http\Controllers\View;

use App\Entity\HomeFirst;
use App\Entity\News;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function toNews($value = '')
    {

        $News = News::all();
        $Home_first = HomeFirst::find('1');

        return view('news')->with('News', $News)->with('Home_first', $Home_first);
    }

    public function toDetail($id)
    {
        $Home_first = HomeFirst::find('1');
        $News_detail = News::find($id);

        return view('news_detail')->with('News_detail', $News_detail)->with('Home_first', $Home_first);
    }
}
