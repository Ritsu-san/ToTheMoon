<?php

namespace App\Http\Controllers;

use App\Models\destination;
use Illuminate\Http\Request;
use Response;
use Illuminate\Support\Facades\Auth;

class destinationcontroller extends Controller
{
     public function index()
    {$data['destination'] = destination::orderBy('id')->paginate(5);
        return view('admindshbrd',$data);
    }
     public function customRegisterAdventure(Request $Request)
    {
    $destination = new destination([

            'destination' => $Request->post('destination'),
            'video' => $Request->post('video'),
            'price' => $Request->post('price'), 
            'description' => $Request->post('description'),
            'fooddescription' => $Request->post('fooddescription'),
            'tourspots' => $Request->post('tourspots')
            
        ]);
            $file= $Request->file('tourspots1');
            $filename= $file->getClientOriginalName();
            $file->move(public_path('public/uploads'), $filename);
            $destination['tourspots1']= $filename;
            $file= $Request->file('tourspots2');
            $filename= $file->getClientOriginalName();
            $file->move(public_path('public/uploads'), $filename);
            $destination['tourspots2']= $filename;
            $file= $Request->file('tourspots3');
            $filename= $file->getClientOriginalName();
            $file->move(public_path('public/uploads'), $filename);
            $destination['tourspots3']= $filename;
               $file= $Request->file('foodimg1');
            $filename= $file->getClientOriginalName();
            $file->move(public_path('public/uploads'), $filename);
            $destination['foodimg1']= $filename;
            $file= $Request->file('foodimg2');
            $filename= $file->getClientOriginalName();
            $file->move(public_path('public/uploads'), $filename);
            $destination['foodimg2']= $filename;
            $file= $Request->file('foodimg3');
            $filename= $file->getClientOriginalName();
            $file->move(public_path('public/uploads'), $filename);
            $destination['foodimg3']= $filename;
            $file= $Request->file('mainimg');
            $filename= $file->getClientOriginalName();
            $file->move(public_path('public/uploads'), $filename);
            $destination['mainimg']= $filename;
            
        $destination->save();
        return Redirect('adminindex');
    }
    public function destroy($id)
    {
        $destination = destination::where('id',$id)->delete();
        return Response::json($destination);    }
}
