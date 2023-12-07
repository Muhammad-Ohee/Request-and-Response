<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class DemoResponseController extends Controller
{
    function demoAction(): array|int|null|bool|string
    {
        return array(
            'a' => '1',
            'b' => '2',
            'c' => '3',
            'd' => '4'
        ); //coverts into a json array {....}
        //return array('a','b','c','d');
        //return 4;
        //return true;
        //return "O4S";

    }

    function jsonResponse():JsonResponse
    {
        $code = 444;
        $content = array(
            "o" => "os",
            "s" => "os"
        );
        //return response()->json($content, $code);
        return response()->json($content);
    }

    function redirectResponse1():string
    {
        return redirect('/response2');
    }

    function redirectResponse2():string
    {
        return "Hello OS";
    }

    function binaryFileResponse()
    {
        $filePath = "uploads/image/signature.png";
        return response()->file($filePath); //file view
    }

    function downloadFileResponse()
    {
        $filePath = "uploads/image/signature.png";
        return response()->download($filePath);
    }

    function cookieResponse()
    {
        $name = "token";
        $value = "1234";
        $minutes = 40;
        $path = "/";
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true;
        return response("cookie response")->cookie($name, $value, $minutes, $path, $domain, $secure, $httpOnly);
    }

    function headerResponse()
    {
        return response("header response")
            ->header('key1', 'value1')
            ->header('key2', 'value2')
            ->header('key3', 'value3');
    }

    function viewResponse()
    {
        //return view('pages.components.nested'); for nesting view directories.
        return view('Home');
    }
}
