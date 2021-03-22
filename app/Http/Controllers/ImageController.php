<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function index()
    {
        $images = Image::all();
        return view('admin.image', compact('images'));
    }

    public function create (Request $request) {
        $this->validate($request, [
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $input['image'] = time().'.'.$request->image->getClientOriginalExtension();

        $request->image->move(public_path('uploads'), $input['image']);


        $input['title'] = $request->title;

        Image::create($input);


    	return back()->with('success','Image Uploaded successfully.');
    }

    public function destroy(Image $image, $id) {
        $image = Image::findOrFail($id);
        $image->delete();

    //   return redirect()->route('image.get')->with('success','Image removed successfully with id : .');
        return redirect()->route('getImage');
    }
}
