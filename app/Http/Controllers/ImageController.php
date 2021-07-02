<?php

namespace App\Http\Controllers;

use App\image;
use App\cimg;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $editproduct = product::find($id);
        // return view('Product.edit',compact('editproduct'));
        // $imgid=image::find($id);
        // dd($id);

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\image  $image
     * @return \Illuminate\Http\Response
     */
    public function show($pd_id)
    {
        $img = image::where([ 'id' => $pd_id ])->first();
        // dd($img->id);
        $common_img=cimg::all();

       $x=array();
       $pushdata=array();
        foreach($common_img as $rec){
            if ($rec->common_id == $img->id){
                $pushdata['id']=$rec->id;
                $pushdata['common_id']=$rec->common_id;
                $pushdata['common_image']=$rec->common_image;
                array_push($x,$pushdata);
            }
        }   

        $show_img=array_column($x,'common_image');
        // dd(count($b));

        return view('pd',compact('show_img','img'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\image  $image
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
    }
}
