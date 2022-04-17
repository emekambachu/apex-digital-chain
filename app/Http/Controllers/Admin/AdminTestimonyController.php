<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimony;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Intervention\Image\ImageManagerStatic as InterventionImage;

class AdminTestimonyController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        $this->middleware('auth:admin');
    }

    public function index(){

        $testimonies = Testimony::all();
        return view('admin.testimonies.index', compact('testimonies'));
    }

    public function create(){

        return view('admin.testimonies.create');
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required|min:2|string|unique:testimonies,name',
            'occupation' => 'required|min:2|string',
            'image'  => 'nullable|image|mimes:jpg,jpeg,png|max:5048',
            'testimony' => 'required|max:100|min:2'
        ]);

        $input = $request->all();

        if($request->hasFile('image') && $file = $request->file('image')) {
            $converted_path = 'photos/testimonies';
            if (!File::exists($converted_path)){
                File::makeDirectory($converted_path, $mode = 0777, true, true);
            }
            $name = time() . $file->getClientOriginalName();

            // create canvas background to hold the image (Must install Image Intervention Package first)
            $background = InterventionImage::canvas(500, 500);
            // start image conversion (Must install Image Intervention Package first)
            $convert_image = InterventionImage::make($file->path());
            // resize image and save to converted path
            // resize and fit width
            $convert_image->resize(500, 500, static function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });

            // insert image to canvas
            $background->insert($convert_image, 'center');
            $background->save($converted_path . '/' . $name);
            $input['image'] = $name;
        }else{
            $input['image'] = null;
        }

        Testimony::create($input);

        Session::flash('success', 'Created');
        return redirect()->back();
    }

    public function getTestimonyId($id){
        return Testimony::findOrFail($id);
    }

    public function edit($id){

        $testimony = $this->getTestimonyId($id);
        return view('admin.testimonies.edit', compact('testimony'));
    }

    public function update(Request $request, $id){

        $testimony = $this->getTestimonyId($id);

        $request->validate([
            'name' => 'required|min:2|string|unique:testimonies,name,'.$id,
            'occupation' => 'required|min:2|string',
            'image'  => 'nullable|image|mimes:jpg,jpeg,png|max:5048',
            'testimony' => 'required|max:100|min:2'
        ]);

        $input = $request->all();

        if($request->hasFile('image') && $file = $request->file('image')) {
            $converted_path = 'photos/testimonies';
            if (!File::exists($converted_path)){
                File::makeDirectory($converted_path, $mode = 0777, true, true);
            }
            $name = time() . $file->getClientOriginalName();

            // create canvas background to hold the image (Must install Image Intervention Package first)
            $background = InterventionImage::canvas(500, 500);
            // start image conversion (Must install Image Intervention Package first)
            $convert_image = InterventionImage::make($file->path());
            // resize image and save to converted path
            // resize and fit width
            $convert_image->resize(500, 500, static function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });

            // insert image to canvas
            $background->insert($convert_image, 'center');
            $background->save($converted_path . '/' . $name);
            $input['image'] = $name;
        }else{
            $input['image'] = null;
        }

        $testimony->update($input);

        Session::flash('success', 'Updated');
        return redirect()->back();
    }

    public function delete($id){

        $testimony = $this->getTestimonyId($id);
        $testimony->delete();

        Session::flash('warning', 'Deleted');
        return redirect()->back();
    }

}
