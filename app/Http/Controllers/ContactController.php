<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{

    public function store(Request $request) {
        Contact::insert($request->except(['_token']));
        $request->session()->flash('alert.message', 'Your inquiry was sent successfully!');

        return redirect()->back();
    } 
    
}
