<?php

namespace App\Http\Controllers;

use App\Models\Security;
use Illuminate\Http\Request;

class SecurityController extends Controller
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
    $security = Security::OrderBy("id", "DESC")->paginate(10);
    $output = [
        "message" => "controller home security",
        "result" => $security
    ];
    return response()->json($output, 200);
}   

public function add (Request $request){

    $input = $request->all();
    $security = Security::create($input);

    return response()->json($security, 200);
}
   
}
