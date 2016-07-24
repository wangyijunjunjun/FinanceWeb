<?php

namespace App\Http\Controllers\Admin;

use App\Entity\Contactus;
use App\Entity\HomeFirst;
use App\Entity\News;
use App\Http\Controllers\Controller;
use App\Models\M3Result;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function toNews()
    {
        $News = News::all();
        return view('admin/news')->with('News', $News);
    }

    public function toNewsContent(Request $request, $id)
    {
        $News_item = News::find($id);

        return view('admin/news_content')->with('News_item', $News_item);
    }

    public function newsEdit(Request $request)
    {

        $content = $request->input('content', '');
        $desc = $request->input('desc', '');
        $title = $request->input('title', '');
        $id = $request->input('id', '');
        $img = $request->input('img', '');

        $News_item = News::find($id);
        $News_item->content = $content;
        $News_item->desc = $desc;
        $News_item->title = $title;
        $News_item->img = $img;
        $News_item->save();

        $m3_result = new M3Result();
        $m3_result->status = 0;
        $m3_result->message = '添加成功';

        return $m3_result->toJson();
    }


    public function toNewsEdit(Request $request, $id)
    {
        $News_item = News::find($id);

        return view('admin/news_edit')->with('News_item', $News_item);
    }

    public function toNewsAdd()
    {
        return view('admin/news_add');

    }

    public function newsAdd(Request $request)
    {
        $content = $request->input('content', '');
        $desc = $request->input('desc', '');
        $title = $request->input('title', '');
        $img = $request->input('img', '');

        $News_item = new News;
        $News_item->content = $content;
        $News_item->desc = $desc;
        $News_item->title = $title;
        $News_item->img = $img;
        $News_item->save();

        $m3_result = new M3Result();
        $m3_result->status = 0;
        $m3_result->message = '添加成功';

        return $m3_result->toJson();

    }


    public function newsDel()
    {

    }
}
