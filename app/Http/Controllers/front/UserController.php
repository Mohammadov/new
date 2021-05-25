<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
public function getLanding(){
    return view('landing');
}

    public function getMyNum(){
        return 'number';
    }
    public function getMyId(){
        return '90000000000000000';
    }
    public function getMySis(){
        return '7aywaaaaaaaaaanaat';
    }
}
