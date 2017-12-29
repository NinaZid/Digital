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
     
    	$total = count($_FILES['fileToUpload']['name']);
    	for($i=0; $i<$total; $i++)
    	{
    		$tmpFilePath = $_FILES['fileToUpload']['tmp_name'][$i];

    		if($tmpFilePath != "")
    		{
    			$target_dir = $_SERVER['DOCUMENT_ROOT']. "/digital/uploads/". $_FILES['fileToUpload']['name'][$i];
    			if(move_uploaded_file($tmpFilePath, $target_dir))
    			{

				    $image= new Image;
				    $image->image_name=basename($_FILES["fileToUpload"]["name"][$i]);
				    $image->save(); 

    			}
    		}
       	}

            return redirect('/admin');
	}
    
}