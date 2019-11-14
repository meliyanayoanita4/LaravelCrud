<?php
/**
 * Created by PhpStorm.
 * User: Meliyana
 * Date: 14/11/2019
 * Time: 7:32
 */

namespace App\Helper;
use Madcoda\Youtube;


class APIYoutube{
    public function Youtube($WordYoutube){
        $youtube = new Youtube(array('key' => 'AIzaSyBPI4Dod8Z5Snc4PKg3u2CYB7AyERaxUXY'));
        $results = $youtube->search($WordYoutube);
        return $results;
    }

}