<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function admin()
    {
        $contacts = Contact::all();
        return view('admin', ['contacts' => $contacts]);
    }

    public function default()
    {
        return view('default');
    }

    public function create(Request $request)
    {
        $form = $request->all();
        Contact::create($form);
        return redirect('/');
    }

}
