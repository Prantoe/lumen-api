<?php

namespace App\Http\Controllers;

use App\Models\Lampu;
use Illuminate\Http\Request;

class LampuController extends Controller
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
    $lampu = Lampu::OrderBy("id", "DESC")->paginate(10);
    $output = [
        "message" => "controller lampu",
        "result" => $lampu
    ];
    return response()->json($output, 200);
}   

public function add (Request $request){

    $input = $request->all();
    $lampu = Lampu::create($input);

    return response()->json($lampu, 200);
}
   
}
