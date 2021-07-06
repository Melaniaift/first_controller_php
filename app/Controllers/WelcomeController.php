<?php
namespace App\Controllers;
use CodeIgniter\Controller;

class WelcomeController extends Controller{
    public function index() {
        echo "Welcome to my first controller!";
        //return view('welcome_view');
    }    
}

