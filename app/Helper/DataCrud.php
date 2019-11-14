<?php
/**
 * Created by PhpStorm.
 * User: Meliyana
 * Date: 14/11/2019
 * Time: 6:52
 */

namespace App\Helper;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class DataCrud
{
    public function addData(Request $request)  {
            $DataInput = DB::table('data_pengguna')->insert([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->pass
            ]);
            return $DataInput;
    }

    public function GetData(){
            $GetData = DB::table('data_pengguna')->select('*')->get();
            return $GetData;
    }

    public function EditData($id){
            $EditData = DB::table('data_pengguna')->where('id', $id)->first();

            return $EditData;
    }

    public function updateData(Request $request) {
            $DataUpdate = DB::table('data_pengguna')->where('id', $request->id_edit)->update([
                'name' => $request->name, 'email' => $request->email, 'password' => $request->pass]);
            return $DataUpdate;
    }

    public function DeleteData(Request $request){
            $DataDelete = DB::table('data_pengguna')->where('id', $request->id_hapus)->delete();
            return $DataDelete;
    }

    public function SearchData(Request $request){
            $SearchData = DB::table('data_pengguna')->where('id', $request->id)->first();
            return $SearchData;
    }
}