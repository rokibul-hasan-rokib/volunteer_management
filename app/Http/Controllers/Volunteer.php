<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Volunteer extends Controller
{
    public function index()
    {
        $volunteers = (new User())->getVolenteer();
        return view('admin.modules.volunteer.index', compact('volunteers'));
    }
}
