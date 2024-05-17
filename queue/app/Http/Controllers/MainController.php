<?php

namespace App\Http\Controllers;

use App\Models\ContactModel;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function form(){
        return view('form');
    }

    public function form_check(Request $request){
        $valid = $request -> validate([
            'name' => 'required',
            'levelOfEducation' => 'required',
            'whatHaveFinished' => 'required',
            //'formOfStudy' => 'required_if'(),
            'checkbox' => 'required'
        ]);

        $info = new ContactModel();

        $info -> name = $request->input('name');
        $info -> date = today();
        $info -> time = today();
        $info -> levelOfEducation = $request->input('levelOfEducation');
        $info -> whatHaveFinished = $request->input('whatHaveFinished');
        $info -> formOfStudy = $request->input('formOfStudy');
        $info -> uniqueNumber = 1;


        $info->save();

        return view('thank');
    }
}
