<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function getContact()
    {
        return view('contact');
    }

    public function saveContact(Request $request)
    {
        $data = $request->except('_token');
        Contact::insert($data);
        $data['create_at'] = $data['updated_at'] = Carbon::now();
        return  redirect()->back();
    }
}
