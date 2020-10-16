<?php

namespace App\Http\Controllers;
use App\Activity;
use Illuminate\Http\Request;
use Carbon\Carbon;
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
        $activitys = Activity::all();

        return view('backend.kegiatan.index', compact('activitys'));

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
        $momment = Activity::create($this->validateRequest());

       $this->storeImage($momment);

       return redirect()->back()->with(['success' => 'Momment berhasil di tambah']);
    }

    private function validateRequest()
    {
        return tap(request()->validate([
            'code_activity' => 'required',
            'name' => 'required',
            'date' => 'required',
            'information' => 'required',
            'status' => 'required',
            'price' => 'required',
            'capacity' => 'required',
            'images' => 'required|file|image|max:5000',
        ]), function(){
            if(request()->hasFile('images')){
                request()->validate([
                    'images' => 'required|file|image|max:5000',
                ]);

            }
        });
    }
    private function storeImage($activity){
        if (request()->has('images')){
            $activity->update([
                'images' => request()->images->store('uploads', 'public'),
            ]);

            $image = Image::make(public_path('storage/' . $activity->images))->fit(300, 300, null, 'top-left');
            $image->save();
        }
    }
}
