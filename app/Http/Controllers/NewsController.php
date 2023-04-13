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
            // return Redirect::to('/uploadNews'); //php用
            return $result;
        }
    }

    public function getNews(){
        $result = $this->news->getNews();
        echo $result;
    }

    public function getToken()
    {
        $token = Session::token();
        return response()->json(['csrf_token' => $token]);
    }

    public function updateNew(Request $request){
        $result = $this->news->updateNew($request);
        if($result === "success"){
            return redirect('http://localhost:3000/admin');
        }else{
            return "更新失敗";
        }
        
    }
}


