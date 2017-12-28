<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;

class GalleryController extends Controller
{
    public function index()
    {
    	$images=Image::all();
    	return view('gallery/gallery', compact('images'));
    }

    public function upload()
    {
    	
    	$target_dir = $_SERVER['DOCUMENT_ROOT']. "/digital/uploads/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

		
	move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], 
		$target_file);
	

		        $image= new Image;
		        $image->image_name=basename($_FILES["fileToUpload"]["name"]);
		        $image->save(); 

		        return redirect('/admin');
		        
}
    
}