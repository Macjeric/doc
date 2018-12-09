<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Filesystem\Filesystem;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redis;



class DownloadsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function likes()
    {
        $like = Redis::get("likes/count");
        $likes = Redis::incr("likes/count");

        return view('welcome')->with('likes', $likes);

    }


    public function index()
    {
        //
        // $file = $filesystem->append('/storage/mu-group.docx');

        // $file = Storage::get('mu-group.docx');
        // return $file;
        // return view ('/themes/download');

        $downloads = Redis::get("themes/download/1");
        Redis::incr("themes/download/1");

        // mu downloads for individual
        return Storage::download('mu-individual.docx');


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $downloads = Redis::get("themes/download/2");
        Redis::incr("themes/download/2");

        //mu downloads for individual reference
        return Storage::download('mu-individual-ref.docx');
        

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $downloads = Redis::get("themes/download/3");
        Redis::incr("themes/download/3");

        //
        return Storage::download('mu-group.docx');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $downloads = Redis::get("themes/download/4");
        Redis::incr("themes/download/4");
        //
        return Storage::download('mu-group-ref.docx');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $downloads = Redis::get("themes/download/5");
        Redis::incr("themes/download/5");
        //
        return Storage::download('individual-iaa.docx');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        $downloads = Redis::get("themes/download/6");
        Redis::incr("themes/download/6");
        //
        return Storage::download('iaa-ind-ref.docx');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        $downloads = Redis::get("themes/download/7");
        Redis::incr("themes/download/7");
        //
        return Storage::download('iaa-group.docx');

    }

    public function iaagroupref()
    {
        $downloads = Redis::get("themes/download/8");
        Redis::incr("themes/download/8");

        return Storage::download('iaa-group-ref.docx');

    }


}
