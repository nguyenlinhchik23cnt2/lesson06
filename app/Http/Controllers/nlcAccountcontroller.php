<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class nlcAccountcontroller extends Controller
{
    //form dang nhap
    public function nlc_login()
    {
        return view ('nlc_login');
    }
    //#form login -post (khi danh nhap)
    /*
    kiem tra email ,mat khau khong de trong 
    neu email = nlc@gmail.com va pass=123456 thi luu thonh tin vap session voi ten nhu vi du
    */
    public function nlcloginsubmit(request $request)
    {
        //validation
        //checklogin->storesession->redirect
        $username = $request->username;
        $password = $request->password;
        if ($username == "Nguyenlinhchi" && $password == "123456") {
            return redirect()->route('nlc_home');
        } else {
            return redirect()->route('nlc_login');
        }
    }
}
