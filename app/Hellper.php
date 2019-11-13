<?php
/**
 * Created by PhpStorm.
 * User: Meliyana
 * Date: 13/11/2019
 * Time: 16:03
 */

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class Hellper
{
    public function insertProject(Request $request) {
        $created_id = DB::table('users')->insert(['email' =>  $request->name,'email' => $request->email,'password' => $request->pass]);
        dd($created_id);

        return $created_id;
    }
}