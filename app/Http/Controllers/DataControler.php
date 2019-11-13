<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class DataControler extends Controller
{

    public function index(Request $request){
        return view('InputPengguna');
    }

    public function addData(Request $request)  {
        try {
            DB::table('data_pengguna')->insert([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->pass
            ]);
            return redirect('/');

        } catch (\Exception $e) {
            return view("Error");
            return $e;
    }
    }

    public function GetData(){
        try {
            $GetData = DB::table('data_pengguna')->select('*')->get();
            return view('DataPengguna')->with('GetData', $GetData);
        } catch (\Exception $e) {
            return view("Error");
            return $e;
        }
    }

    public function EditData(Request $request){
        try {
            $id = $request->id_edit;
            $DataEdit = DB::table('data_pengguna')->where('id', $id)->first();

            return view('EditPengguna')->with('DataEdit', $DataEdit);
        } catch (\Exception $e) {
            return view("Error");
            return $e;
        }
    }

    public function updateData(Request $request) {
        try {
            DB::table('data_pengguna')->where('id', $request->id_edit)->update([
                'name' => $request->name, 'email' => $request->email, 'password' => $request->pass]);
            return redirect('/');
        } catch (\Exception $e) {
            return view("Error");
            return $e;
        }
    }

    public function DeleteData(Request $request){
        try {
            DB::table('data_pengguna')->where('id', $request->id_hapus)->delete();
            return redirect('/');
        } catch (\Exception $e) {
            return view("Error");
            return $e;
        }
    }

    public function SearchData(Request $request){
        try {
            $DataSearch = DB::table('data_pengguna')->where('id', $request->id)->first();
            return view("SearchPengguna")->with('DataSearch', $DataSearch);
        } catch (\Exception $e){
            return view("Error");
            return $e;
        }
    }
}
