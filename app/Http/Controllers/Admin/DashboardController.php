<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Newsletter;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
    }

    public function messages(){
        $contacts = Contact::all();
        return view('admin.contacts', compact('contacts'));
    }


    public function newsletterSucribers(){
        $neslettersSuscribers = Newsletter::all();
        return view('admin.newsletterSuscriber',compact('neslettersSuscribers'));
    }
}
