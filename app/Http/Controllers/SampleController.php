<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Info;

// use Illuminate\Support\Facades\Request;



class SampleController extends Controller
{
    //

    public function index()
    {
        //
        // $data = $request->themetype;
        // $dataa = $request->university;

        // return request()->all();

        // $university = $request->input('university');
        // $themetype = $request->input('themetype');

        // $website_info = Info::where([
        //     ['university', '=' ,$request->university],
        //     ['themetype', '=', $request->themetype],
        //     ['msoffice', '=', $request->msoffice]
        // ]);

        //     echo '$website_info->link';

        
        


        //  $count = count($data);
        //  if($count > 0){
        //      $post = find($data);
             return view('themes.download');
        //  else{
        //      return redirect('themes')->with('error','Nothing selected');
        //  }
        

    }

    public function four()
    {
        return view('download.four');
    }

}