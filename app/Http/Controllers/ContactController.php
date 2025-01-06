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
        // dd($request->all());
        try {
            $contact = (new Contact())->storeContact($request);
            return redirect()->back();
        } catch (\Throwable $th) {
            return response()->json($th);
        }
    }

    final public function destroy(Contact $contact) {
        try {
            (new Contact())->deleteContact($contact);
            return redirect()->back();
        } catch (\Throwable $th) {
            return response()->json($th);
        }
    }
}
