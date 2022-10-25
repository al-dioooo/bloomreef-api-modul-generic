<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function index() {
        $application = Application::latest()->get();

        return $application;
    }
}
