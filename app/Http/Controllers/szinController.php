<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
//use DB;


class szinController extends Controller
{

    public function adatbazis(){
        
        $labdaszin = DB::select("SELECT * FROM labadszin");
        return view("szinadatbazis",["ladbaszin"=> $labdaszin]);

    }

    public function mentes(Request $req){

        $r = $req->r;
        $g = $req->g;
        $b = $req->b;
        
        $data['msg'] = "szinkod megkaptam";
        return response()->json($data);
    }
}
