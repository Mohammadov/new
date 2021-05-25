<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminViewCotroller extends Controller
{
    public function getAdminView(){
        $data=['Mohamad','Saleh','awad'];

        $obj=new \stdClass();
        $obj->name='khaled';
        $obj->age=36;
        $obj->id=10;
        return view('admin',compact('obj'),compact('data'));
    }
}
