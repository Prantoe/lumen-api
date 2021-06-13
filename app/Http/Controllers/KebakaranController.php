<?php

namespace App\Http\Controllers;

use App\Models\Kebakaran;
use Illuminate\Http\Request;

class KebakaranController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    function index()
{
    $kebakaran = kebakaran::OrderBy("id", "DESC")->paginate(10);
    $output = [
        "message" => "controller home kebakaran",
        "result" => $kebakaran
    ];
    return response()->json($output, 200);
}   

public function add (Request $request){

    $input = $request->all();
    $kebakaran = kebakaran::create($input);

    return response()->json($kebakaran, 200);
}
   
}
