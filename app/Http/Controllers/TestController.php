<?php

namespace App\Http\Controllers;

use App\Models\RecordsModel;
use Illuminate\Http\Request;

class TestController extends Controller {
    public function home() {
        return view('pages/home');
    }

    public function test() {
        return view('pages/test');
    }

    public function records() {
        return view('pages/records');
    }

    public function records_check(Request $request) {
        $valid = $request->validate([
            'email'=>'required|min:4|max:100',
            'name'=>'required|min:4|max:100',
            'message'=>'required|min:4|max:500',
        ]);

        // dd($request);
        // echo "$request->input()";

        $newRecord = new RecordsModel();
        $newRecord->email = $request->input('email');
        $newRecord->name = $request->input('name');
        $newRecord->message = $request->input('message');

        $newRecord->save();

        return redirect()->route('records');
    }
}
