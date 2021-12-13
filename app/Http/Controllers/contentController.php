<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class contentController extends Controller
{
     public  function  index()
     {
         $contents = Contact::all();
         return view('content.index' , compact('contents'));
     }
     public function  create()
     {
         return view('content.create');
     }
     public function store(Request $request)
     {
        $content = new Contact;
        $content ->first_name=$request->first_name;
        $content ->last_name =$request->last_name;
        $content ->email=$request->email;
        $content->save();
        return redirect()->back();
     }

     public  function  edit($id)
     {
         $contents = Contact::find($id);
         return view('content.edit', compact('contents'));
     }

     public  function  update(Request $request ,  $id)
     {

        $contents = Contact::find($id);
            $contents ->first_name=$request->first_name;
            $contents ->last_name =$request->last_name;
            $contents ->email=$request->email;
            $contents->save();
        return redirect()->route('index');
        /*
         $contents = Contact::findfall($id);
         $contents ->first_name=$request->first_name;
         $contents ->last_name =$request->last_name;
         $contents ->email=$request->email;
         $contents->save();*/

     }

     public  function destroe($id)
     {
        Contact::destroy($id);
         return redirect()->back();

     }
}
