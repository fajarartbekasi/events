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

        return view('backend.kegiatan.create');
    }
    public function edit($id)
    {
        $activity = Activity::findOrFail($id);
        return view('backend.kegiatan.edit',
        compact('activity'));
    }

    public function store()
    {
        $momment = Activity::create($this->validateRequest());

       $this->storeImage($momment);

       return redirect()->back()->with(['success' => 'Momment berhasil di tambah']);
    }

    public function update(Activity $activity)
    {
        $activity->update($this->validateRequest());

       $this->storeImage($activity);

       return redirect()->back()->with(['success' => 'Momment berhasil di tambah']);
    }
    public function destroy(Activity $activity)
    {
        $activity->delete();

        if(\File::exists(public_path('storage/'. $activity->images)))
        {
            \File::delete(public_path('storage/'. $activity->images));
        }

        return redirect()
               ->back()
               ->with(
                   ['success' =>
                   'Activity berhasil di hapus']);
    }
    private function validateRequest()
    {
        return tap(request()->validate([
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
