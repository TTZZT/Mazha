<?php

namespace App\Http\Controllers;

use App\Models\testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function testimonial(){
        return view('testimonial');
    }

    public function testimonialstore(Request $request){
        $db=new testimonial();

        $db->url=$request->get('url');

        if ($request->hasFile('video')) {
            $file = $request->file('video');
            if ($file->isValid()) {
                $fileName = time() . rand(0, 1000) . '.' . $file->getClientOriginalExtension();
                $file->move(public_path() . '/uploads', $fileName);
                $db->video = $fileName;
            }
        }

        $db->ownername=$request->get('ownername');
        $db->save();
        //return back();
        return redirect('testimonial')->with('success','submited successfully');
    }

    public function testimonialupdate(Request $request ,$id){
        $request->validate([
            'ownername' => 'required',
            'video' => 'required',
            'url' => 'required|url'
            
        ]);
        $testimonial= testimonial::find($id);
        
        $testimonial->ownername=$request->get('ownername');
   
    
    if ($request->hasFile('video')) {
        $file = $request->file('video');
        if ($file->isValid()) {
            $fileName = time() . rand(0, 1000) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path() . '/uploads', $fileName);
            $testimonial->video = $fileName;
            //$testimonial->file_path = '/uploads/' . $fileName;
        }
    }
    $testimonial->url=$request->get('url');
    
    $testimonial->save(); 
    return redirect('testimonial')->with('success',' updated successfully');   
    

    }

    public function testimonialtable(){
        $testimonial = testimonial::get();
        return view('testimonialtable',compact('testimonial'))->with('success','submited successfully');
    }

    public function testimonialDestroy($id)
    {
        testimonial::where('id',$id)->delete();
        return back()->with('success', 'testimonial has been deleted');
    }
    public function testimonialedit($id){
        $testimonial = testimonial::findOrfail($id);
        return view('testimonialedit',compact('testimonial'));
       
    }

}
