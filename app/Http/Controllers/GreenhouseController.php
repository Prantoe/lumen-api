<?php

namespace App\Http\Controllers;

use App\Models\Greenhouse;
use Illuminate\Http\Request;

class GreenhouseController extends Controller
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
    $greenhouse = Greenhouse::OrderBy("id", "DESC")->paginate(10);
    $output = [
        "message" => "controller greenhouse",
        "result" => $greenhouse
    ];
    return response()->json($output, 200);
}   

public function add (Request $request){

    $input = $request->all();
    $greenhouse = greenhouse::create($input);

    return response()->json($greenhouse, 200);
}
   
}
