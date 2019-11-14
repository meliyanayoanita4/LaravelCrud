<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Helper\DataCrud;



class DataControler extends Controller
{
    public function __construct(){
        $this->DataCrud = new DataCrud();
    }

    public function index(Request $request){
        return view('InputPengguna');
    }


    public function addData(Request $request){
        $this->DataCrud->addData($request);
        return redirect('/');
    }

    public function GetData(Request $request){
        $GetData = $this->DataCrud->GetData($request);
        return view('DataPengguna')->with('GetData',$GetData);
    }

    public function EditData(Request $request){
        $EditData = $this->DataCrud->EditData($request->id_edit);
        return view('EditPengguna')->with('EditData',$EditData);
    }

    public function updateData(Request $request){
        $this->DataCrud->updateData($request);
        return redirect('/');
    }

    public function DeleteData(Request $request){
        $this->DataCrud->DeleteData($request);
        return redirect('/');
    }

    public function SearchData(Request $request){
        $SearchData = $this->DataCrud->SearchData($request);
        return view('SearchPengguna')->with('SearchData',$SearchData);
    }



}
