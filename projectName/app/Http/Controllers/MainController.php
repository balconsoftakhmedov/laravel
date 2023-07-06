<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

class MainController extends Controller {
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke( Request $request ) {
        //
    }

    public function test( Request $request ) {
        $id    = 1;
        $name  = 'rr';
        $email = 'qqqqq';

        return view( 'example', [ 'id' => $id, 'name' => $name, 'email' => $email ] );
    }

    public function testblade( Request $request ) {
        $id    = 1;
        $name  = 'rr';
        $email = 'qqqqq';

        return view( 'example', [ 'id' => $id, 'name' => $name, 'email' => $email ] );
    }

    public function testview( Request $request ) {
        $id    = 1;
        $name  = 'rr';
        $email = 'qqqqq';

        return view( 'sub.testview', [ 'id' => $id, 'name' => $name, 'email' => $email ] );
    }

    public function contacts( Request $request ) {
        $id       = 1;
        $name     = 'rr';
        $email    = 'qqqqq';
        $ip       = $request->ip();
        $dateTime = now();
        $url      = $request->fullUrl();
        Log::channel( 'daily' )->notice( "$ip, $dateTime, $url");

        return view( 'sub.contacts', [ 'id' => $id, 'name' => $name, 'email' => $email ] );
    }
    public function clients( Request $request ) {
        $id       = 1;
        $name     = 'rr';
        $email    = 'qqqqq';
        $ip       = $request->ip();
        $dateTime = now();
        $url      = $request->fullUrl();
        Log::channel( 'daily' )->notice( "$ip, $dateTime, $url");

        return view( 'sub.contacts', [ 'id' => $id, 'name' => $name, 'email' => $email ] );
    }

    public function testUrl(){
        echo url()->temporarySignedRoute('activate', now()->addMinutes(1), ['id'=>1]);
    }

    public function activate(Request  $request){
        if($request->hasValidSignature()){
            return 'successful signed';
        }
        abort('403');
    }
}
