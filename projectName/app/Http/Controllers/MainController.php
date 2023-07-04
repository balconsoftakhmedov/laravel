<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }
    public function test(Request $request)
    {
        $id = 1; $name= 'rr'; $email = 'qqqqq';
        return view('example', ['id' => $id, 'name' => $name, 'email' => $email]);
    }
    public function testblade(Request $request)
    {
        $id = 1; $name= 'rr'; $email = 'qqqqq';
        return view('example', ['id' => $id, 'name' => $name, 'email' => $email]);
    }
}
