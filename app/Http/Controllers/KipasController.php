<?php

namespace App\Http\Controllers;

use App\Models\Kipas;
use Illuminate\Http\Request;

class KipasController extends Controller
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
    $kipas = Kipas::OrderBy("id", "DESC")->paginate(10);
    $output = [
        "message" => "controller home kipas",
        "result" => $kipas
    ];
    return response()->json($output, 200);
}   

public function add (Request $request){

    $input = $request->all();
    $kipas = Kipas::create($input);

    return response()->json($kipas, 200);
}
   
}
