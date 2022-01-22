<?php

namespace App\Http\Controllers;
use App\Area;
use App\Asset;
use App\Rcfa;
use App\Pic;
use Illuminate\Http\Request;

class dashboardPicController extends Controller
{
    public function dashboardPic()
    {
        $area = Area::get();
        $aset = Asset::get();
        $rcfa = Rcfa::get(); 
        $pic = Pic::get();
        return view('halamanPic.dashboard.index', compact('area','aset','rcfa','pic'));
    }
}
