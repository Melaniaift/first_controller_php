<?php
namespace App\Controllers;
use CodeIgniter\Controller;

class TestController extends Controller{
    public function index() {
        //$data['nume']="Popescu Bogdan";
        $data=[
            "nume"=>"Popescu",
            "prenume"=>"Bogdan"
        ];
        return view('welcome_view',$data);
    }   
    public function index1() {
        //$data['nume']="Popescu Bogdan";
        $data['val']=array("Popescu","Bogdan","matematica");
        return view('welcome_view1',$data);
    }   
}

