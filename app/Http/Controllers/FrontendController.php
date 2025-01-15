<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Project;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    final public function products()
    {
        $projects = (new Project())->getAllProjects();
        return view('frontend.pages.product.index', compact('projects'));
    }

    final public function events()
    {
        $events = (new Event())->getAllEvents();
        return view('frontend.pages.event.index', compact('events'));
    }
}
