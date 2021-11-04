<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
class AboutPageController extends Controller{
   public function show(){
       return view('about');
	}
	
}