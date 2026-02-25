<?php

namespace App\Http\Controllers\Admin\News;

use App\Http\Controllers\Controller;
use App\Models\News\NewsType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class NewsTypeController extends Controller
{
    public function list()
    {
        // get：全部資料
        // first：取第一筆資料
        $typeList = NewsType::get();
        return view("admin.news.newsType.list", compact("typeList"));
    }

    public function add()
    {
        return view("admin.news.newsType.add");
    }

    public function insert(Request $req)
    {
        $news = new NewsType();
        $news->typeName = $req->typeName;
        $news->save();

        Session::flash("message", "已新增");
        return redirect("admin/news/type/list");

    }
}
