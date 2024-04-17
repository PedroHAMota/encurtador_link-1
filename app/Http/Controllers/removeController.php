<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class removeController extends Controller
{
    public function remove(){
        return View('site.remove');
    }
}
