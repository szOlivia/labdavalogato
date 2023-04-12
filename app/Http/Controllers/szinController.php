<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
//use DB;


class szinController extends Controller
{
    public function mentes(Request $req){

        $labdaszin = DB::select("SELECT * FROM labadszin");
        return view("szinadatbazis",["ladbaszin"=> $labdaszin]);

        $r = $req->r;
        $g = $req->g;
        $b = $req->b;
        
        $data['msg'] = "szinkod megkaptam";
        return response()->json($data);
    }
}
