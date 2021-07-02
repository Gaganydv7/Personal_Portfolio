<?php

namespace App\Http\Controllers;

use App\contact;
use App\image;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function index()
    {
        $images=image::all();
        // dd($images);
        return view('welcome',compact('images'));
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
    public function store(Request $request)
    {
        $contact= new contact;
        $contact->name=$request->input('name');
        $contact->email=$request->input('email');
        $contact->subject=$request->input('subject');
        $contact->message=$request->input('message');
        $contact->save();
        // session()->Flash('message', 'Your message has been sent!'); 
        
        // return redirect()->route('gagan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(contact $contact)
    {
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(contact $contact)
    {
        //
    }
}
