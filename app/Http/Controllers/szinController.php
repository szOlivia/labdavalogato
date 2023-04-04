<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class szinController extends Controller
{
    public function mentes(Request $req){
        $r = $req->r;
        $g = $req->g;
        $b = $req->b;
        
        $data['msg'] = "szinkod megkaptam";
        return response()->json($data);
    }
}
