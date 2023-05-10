<?php

namespace App\Http\Controllers;

use App\Models\ContactModel;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home(){
        return view('home');
    }
    public function about(){
        return view('about');
    }
    public function help(){
        return view('help');
    }
    public function review(){
        // return view('review');
        $reviews = new ContactModel();
        // dd($reviews->all());
        return view('review', ['reviews' => $reviews->all()]);

    }

    public function review_check(Request $request){
        $valid = $request->validate([
            'email' =>'required|min:4|max:100',
            'subject' =>'required|min:4|max:100',
            'message' =>'required|min:10|max:500'
        ]);
        $reviw = new ContactModel();
        $reviw->email= $request->input('email');
        $reviw->subject= $request->input('subject');
        $reviw->message= $request->input('message');
        $reviw->save();

        return redirect()->route('review');
    }
}
