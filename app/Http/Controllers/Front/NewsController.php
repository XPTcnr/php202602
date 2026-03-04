<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\News\News;
use App\Models\News\NewsType;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function list()
    {
        $types = NewsType::get();
        
        return view("front.news.list", compact("types"));
    }

    // 前台利用ajax取得
    public function getList(Request $req)
    {
        $list = (new News())->frontList($req->typeId);
        return view("front.news.getList", compact("list"));
    }

    public function detail(Request $req)
    {
        $news = News::find($req->id);
        return view("front.news.detail", compact("news"));
    }
}
