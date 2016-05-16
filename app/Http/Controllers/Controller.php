<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;
} 

class PagesController extends Controller {
    
    public function getIndex() {
        return view('pages.welcome') ; 
    }
    public function getAbout() {
         return view('pages.about') ;
    }
    public function getContact(){
        return view('pages.contact');
    }
}

