<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    function demoAction(): string
    {
        return "This is demo Controller";
    }

    function urlRequest(Request $request): string
    {
        $name = $request->name;
        $age = $request->age;
        return "My name is {$name} and age is {$age}";
    }

    function jsonRequest(Request $request)
    {
//        $name = $request->input('name');
//        $age = $request->input('age');
//        return "My name is {$name} and age is {$age}";
        return $request->input();
    }

    function headerRequest(Request $request): array|string|null
    {
        //return $request->header(); //for all header key value
        $name = $request->header('name');
        $age = $request->header('age');
        return "My name is {$name} and age is {$age}";
    }

    function queryRequest(Request $request): array|string|null
    {
        return $request->query(); //for all query key value
    }

    function headerbodyparamRequest(Request $request): array
    {
        $token = $request->header('token');
        $district = $request->input('district');
        //$location = $request->input('location');
        $city = $request->input('location.city');
        $postal_code = $request->input('location.postcode');
        $name = $request->name;
        $age = $request->age;

        return array(
            "token" => $token,
            "district" => $district,
            "city" => $city,
            "postcode" => $postal_code,
            "name" => $name,
            "age" => $age
        );
    }

    function formRequest(Request $request): array
    {
        return $request->input();
    }

    function fileRequest(Request $request): array
    {
        $photofile = $request->file('photo-file');
        $fileSize = filesize($photofile);
        $fileType = filetype($photofile);
        $fileOriginalName = $photofile->getClientOriginalName();
        $fileTempName = $photofile->getFilename();
        $fileExtension = $photofile->extension();

        return array(
            "fileSize" => $fileSize,
            "fileType" => $fileType,
            "fileOriginalName" => $fileOriginalName,
            "fileTempName" => $fileTempName,
            "fileExtension" =>$fileExtension
        );
    }

    function fileUploadRequest(Request $request): bool
    {
        $img = $request->file('photo');

        //store file in storage folder
        $img->storeAs('uploads', $img->getClientOriginalName());

        //store file in public folder
        $img->move('uploads/image', $img->getClientOriginalName());

        return true;
    }

    function ipRequest(Request $request): string
    {
        return $request->ip();
    }

    function acceptRequest(Request $request): array
    {
        //content negotiation
        // application/json or text/html or */*
//        if($request->accepts(['application/json'])){
//            return 1;
//        }
//        else{
//            return 0;
//        }
        return $request->getAcceptableContentTypes();
    }

    function cookieRequest(Request $request): array
    {
        //return $request->cookie('Cookie_1');
        return $request->cookie();
    }
}
