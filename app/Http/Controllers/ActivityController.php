<?php

namespace App\Http\Controllers;

use App\Activity;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ActivityController extends Controller
{
    public $activity;

    public function __construct()
    {
       $this->activity = new Activity;
    }
    public function index()
    {
        return view('backend.kegiatan.index');

    }

    public function create()
    {
        $getKode = $this->activity->generateCode();

        return view('backend.kegiatan.create',
                compact('getKode'));
    }
    public function edit()
    {
        return view('backend.kegiatan.edit');
    }

    public function store()
    {
       $activity = Activity::create($this->validateRequest());
       $this->storeImage($activity);

       return redirect()->back()->with(['success' => 'Activity berhasil dibuat']);
    }

    private function validateRequest()
    {
        return tap(request()->validate([
            'code_activity' => 'required',
            'name' => 'required',
            'date' => 'required',
            'infomation' => 'required',
            'status' => 'required',
            'price' => 'required',
            'images' => 'file|image|max:5000',
            'capacity' => 'required',
        ]), function(){
            if(request()->hasFile('images')){
                request()->validate([
                    'images'  => 'file|image|max:5000',
                ]);
            }
        });
    }
    private function storeImage($activity){
        if(request()->has('images')){
            $activity->update([
                'images' => request()->images->store('uploads','public'),
            ]);
            $image = Image::make(public_path('storage/'. $activity->images))->fit(300,300,null, 'top-left');

            $image->save();
        }
    }
}
