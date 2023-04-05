<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Services;
use App\Models\Newsletter;
use Illuminate\Http\Request;


class Homecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Services::all();
        return view('home.index',compact('services'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeMessage(Request $request)
    {
        $request->validate([
            'nom_complet'=>'required',
            'address_mail'=>'required',
            'sujet'=>'required',
            'projet'=>'required',

        ]);

        Contact::create($request->all());
        // Toastr::success('Data updated successfully :)','Success');
        return redirect()->back();
    }

    public function storeEmail(Request $request)
    {
        $request->validate([
            'adresse_mail'=>'required',
            

        ]);

        Newsletter::create($request->all());
        return redirect()->back();
    }


    public function show_service($id)
    {
        $service = Services::find($id);
        $services = Services::all();
        return view('home.serviceDetail',compact('service','services'));
    }


}
