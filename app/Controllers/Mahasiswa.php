<?php 
namespace App\Controllers;

class Mahasiswa extends BaseController{

    public function index(){
        echo "pabw";
    }

    public function ucapan(){
        $data["n"]=$this->request->getPost('nama');
        //return view("Hello");
        echo view("Hello",$data);
    }
}

?>