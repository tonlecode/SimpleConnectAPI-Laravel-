<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class APIController extends Controller
{
    public function getuser(){
        $user = DB::table('users')->get();
        return response()->json($user);
    }
}
