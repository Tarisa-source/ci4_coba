<?php

namespace App\Controllers;

class Coba extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        echo 'Ini controller coba method index';
    }

    public function about($nama='', $umur=0){
        #parameter digunakan untuk menagkap segmen dari url 
        echo "Halo nama $nama umur saya $umur tahun";
    }
    
}
