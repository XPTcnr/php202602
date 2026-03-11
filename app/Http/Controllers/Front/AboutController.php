<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\About\AboutEvent;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $event = (new AboutEvent())->getList();

        return view("front.about.index", compact("event"));
    }
}
