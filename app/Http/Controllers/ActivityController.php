<?php

namespace App\Http\Controllers;

use App\Activity;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public $activity;

    public function __construct()
    {
       $this->activity = new Activity;
    }
    public function index()
    {

        dd($this->activity->generateCode());

    }

    public function create()
    {
        return view('backend.kegiatan.create');
    }
    public function edit()
    {
        return view('backend.kegiatan.edit');
    }
}
