<?php

namespace App\Http\Controllers;

use App\Models\Kebocoran;
use Illuminate\Http\Request;

class KebocoranController extends Controller
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
    $kebocoran = Kebocoran::OrderBy("id", "DESC")->paginate(10);
    $output = [
        "message" => "controller home kebocoran",
        "result" => $kebocoran
    ];
    return response()->json($output, 200);
}   

public function add (Request $request){

    $input = $request->all();
    $kebocoran = Kebocoran::create($input);

    return response()->json($kebocoran, 200);
}
   
}
