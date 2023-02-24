<?php

namespace App\Http\Controllers;
use App\Models\clients;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function client(){
        return view('client');
    }
    public function clientstore(Request $request){
        $db=new clients();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            if ($file->isValid()) {
                $fileName = time() . rand(0, 1000) . '.' . $file->getClientOriginalExtension();
                $file->move(public_path() . '/uploads', $fileName);
                $db->image = $fileName;
            }
        }


        $db->save();
        //return back();
        return redirect('client')->with('success','submited successfully');
    }
    public function clienttable(){
        $clients = clients::get();
        return view('clienttable',compact('clients'))->with('success','submited successfully');
    }
    public function clientDestroy($id)
    {
        clients::where('id',$id)->delete();
        
        return back()->with('success', 'clents has been deleted');
    }
    public function clientupdate(Request $request,$id){
        $request->validate([
            'image' => 'required',
            
        ]);
        $clients=clients::find($id);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            if ($file->isValid()) {
                $fileName = time() . rand(0, 1000) . '.' . $file->getClientOriginalExtension();
                $file->move(public_path() . '/uploads', $fileName);
                $clients->image = $fileName;
                //$clients->file_path = '/uploads/' . $fileName;
            }
        }
        
        
        $clients->save(); 
        return redirect('client')->with('success',' updated successfully');   
        
    
    }
    public function clientedit($id){
        $clients = clients::findOrfail($id);
        return view('clientedit',compact('clients'));
       
    }

    
}
