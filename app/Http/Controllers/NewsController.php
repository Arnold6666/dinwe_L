<?php

namespace App\Http\Controllers;
use App\Models\News;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class NewsController extends Controller
{
    //

    protected $news;
    
    public function __construct()
    {
        $this->news = new News;
    }

    public function uploadNews(Request $request){
        $result = $this->news->uploadNews($request);
        if($result === "success"){
            Session::flash('message', '建立成功');
            return Redirect::to('/uploadNews');
        }
    }
}


