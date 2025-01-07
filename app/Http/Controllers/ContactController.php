<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
            DB::beginTransaction();
            $contact = (new Contact())->storeContact($request);
            alert_success(__('Information Send Successfully'));
            DB::commit();
            return redirect()->route('home')->with('success','Contact Information Send Successfully');
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->route('home');
        }
    }

    final public function destroy(Contact $contact) {
        try {
            (new Contact())->deleteContact($contact);
            return redirect()->back();
        } catch (\Throwable $th) {
            return redirect()->back();
        }
    }
}
