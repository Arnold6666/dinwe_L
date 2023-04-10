<?php

namespace App\Http\Controllers;

use App\Models\Members;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class MemberController extends Controller
{
    //
    protected $member;

    public function __construct()
    {
        $this->member = new members();
    }

    public function register(Request $request){
        $result = $this->member->register($request);
        if($result === "account"){
            Session::flash('message', '帳號已存在，請輸入其他帳號');
            return Redirect::to('/');
        }elseif($result === "email"){
            Session::flash('message', '信箱已存在，請輸入其他信箱');
            return Redirect::to('/');
        }elseif($result === "success"){
            Session::flash('message', '註冊成功，請登入');
            return Redirect::to('/login');
        }
        
    }

    

}
