<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index()
    {
        return view('backend.kegiatan.index');
    }

    public function create()
    {
        return view('backend.kegiatan.create');
    }
}
