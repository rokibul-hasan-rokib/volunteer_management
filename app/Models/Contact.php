<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Contact extends Model
{
    use HasFactory;

    protected $guarded = [];

    final public function prepareData(Request $request) {
        return [
          "name" => $request->input('name'),
          "email" => $request->input('email'),
          "phone" => $request->input('phone'),
          "message" => $request->input('message'),
        ];
    }

    final public function storeContact(Request $request) {
        return self::query()->create($this->prepareData($request));
    }

    final public function deleteContact(Contact $contact) {
        return $contact->delete();
    }
}
