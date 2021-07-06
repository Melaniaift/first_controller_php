<?php
namespace App\Controllers;
use CodeIgniter\Controller;

class HomeController extends Controller{
    public function index() {
        echo "Welcome to my home controller!";
        //return view('home_view');
    }    
    public function hview(){
        return view('home_view');
    }
}

