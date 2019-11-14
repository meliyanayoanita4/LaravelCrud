<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Helper\APIYoutube;

class APIYoutubeController extends Controller
{
    public function __construct(){
        $this->APIYoutube = new APIYoutube();
    }

    public function GetInfoVideo(Request $request){
        $channel = $this->APIYoutube->Youtube($request->searchKeyYoutube);
        return view('ApiYoutube')->with('channel',$channel);
    }
}
