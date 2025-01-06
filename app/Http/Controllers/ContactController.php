<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    final public function index()
    {
        $contacts = (new Contact())->getAllContacts();
        return view('admin.modules.contact.index', compact('contacts'));
    }

    final public function store(Request $request) {
        try {
            $contact = (new Contact())->storeContact($request);
            return response()->back();
        } catch (\Throwable $th) {
            return response()->json($th);
        }
    }111
}
