<?php

namespace App\Http\Controllers;

use App\Models\company;
use Illuminate\Http\Request;
use App\Models\Image;

class FileUpload extends Controller
{
    public function createForm()
    {
        return view('image-upload');
    }


    public function fileUpload(Request $req)
    {
        
     $nom = request("nom");
        $email = request("email");

        $website= request("website");


            // 'email' => 'required',
            // 'imageFile' => 'required',
            // 'imageFile.*' => 'mimes:jpeg,jpg,png,gif,csv,txt,pdf|max:2048',
            // 'website' => 'required'

        ;

        if ($req->hasfile('imageFile')) {
            foreach ($req->file('imageFile') as $file) {
                $name = $file->getClientOriginalName();

                $file->move(public_path('images') . '/uploads/', $name);
                $imgData[] = $name;
                
            }

            $fileModal = new company();
            $fileModal->nom =$nom;
            $fileModal->email =$email ;

            $fileModal->name = $name;
            $fileModal->image_path = $name;
            $fileModal->website = $website;


            $fileModal->save();

            return back()->with('success', 'File has successfully uploaded!');
        }
    }
}
