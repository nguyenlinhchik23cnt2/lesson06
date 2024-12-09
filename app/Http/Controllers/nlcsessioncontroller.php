<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class nlcsessioncontroller extends Controller
{
    //#doc du lieu tu session
    public function nlcgetseeiondata(request $request)
    {
        if($request->seeion()->has("k23cnt_linhchi"))
        {
            echo $est->seeion()->get("k23cnt_linhchi");
        }
        else
        {
            echo "<h2>khong co du lieu trong session</h2>";
        }
    }
    //# ghi du lieu vap session 
    public function nlcdeleteseeiondata(request $request)
    {
        //luu
        $request->session ()->put('k23cnt_linhchi','k23cnt2-linhchi-2310900014');
        echo "<h2>du lieu da duoc luu vao session</h2>";
    }
    // xoa dunlieu trg session
    
}
