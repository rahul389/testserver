<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadFileController extends Controller
{
	public function uploadform(){
		return view('fileupload');
	}

    public function fileupload(Request $request){
    	
    	$s3 = Storage::disk('s3');
    	$image = request()->file('file');
        $filename = $image->getClientOriginalName();
        $filePath = 'files/' . $filename;
        $s3->put($filePath, file_get_contents($image), 'public');
        dd("Done");
    }
}
