<?php

namespace App\Http\Controllers\Admin\About;

use App\Http\Controllers\Controller;
use App\Models\About\AboutEvent;
use Complex\Complex;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AboutEventController extends Controller
{
    public function list()
    {
        $list = AboutEvent::paginate(10);
        return view("admin.about.event.list", compact("list"));
    }

    public function add()
    {
        return view("admin.about.event.add");
    }

    public function insert(Request $req)
    {
        $event = new AboutEvent();
        $event->dates = $req->dates;
        $event->title = $req->title;
        $event->content = $req->content;
        $event->save();

        Session::flash("message", "已新增");
        return redirect("/admin/about/event/list");
    }

    public function edit(Request $req)
    {
        $event = AboutEvent::find($req->id);
        return view("admin.about.event.edit", compact("event"));
    }

    public function update(Request $req)
    {
        $event = AboutEvent::find($req->id);
        $event->dates = $req->dates;
        $event->title = $req->title;
        $event->content = $req->content;
        $event->update();

        Session::flash("message", "已修改");
        return redirect("/admin/about/event/list");
    }

    public function delete(Request $req)
    {
        AboutEvent::destroy($req->id);

        Session::flash("message", "已刪除");
        return redirect("/admin/about/event/list");
    }
}
