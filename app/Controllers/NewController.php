<?php
namespace App\Controllers;
use CodeIgniter\Controller;

class NewController extends Controller{
    public function index() {
        //echo "Welcome to my first controller!";
        return redirect()->route('welcome');
    } 
    public function welcome() {
        echo "Welcome!";
       // return view("new_view");
    } 
}

