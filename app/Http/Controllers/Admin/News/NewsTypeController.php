<?php

namespace App\Http\Controllers\Admin\News;

use App\Http\Controllers\Controller;
use App\Models\News\NewsType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;

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

    public function edit(Request $req)
    {
        $xxx = $req->id;
        // NewsType::find = SELECT * FROM news_type WHERE id = 傳入的id
        $types = NewsType::find($xxx);

        return view("admin.news.newsType.edit", compact("types"));
    }

    public function update(Request $req)
    {
        try{
            $types = NewsType::find($req->id);
            $types->typeName = $req->typeName;
            $types->update();
            /// 也可用 $types->save()
        }catch(ModelNotFoundException $e){
            echo ("找不到 NewsType Model");
        }catch(QueryException){
            echo("寫入資料庫錯誤");
        }catch(Exception $e){
            //throw $e;
            echo $e->getMessage();
        }finally{
            // 無論程式是否有錯誤，這裡都會執行
            // 通常是關閉資料庫連線等
        }

        Session::flash("message", "已修改");
        return redirect("admin/news/type/list");
    }
}
