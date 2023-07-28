<?php

// namespace App\Controllers; karena dalam folder admin sehhingga namspace yang benar adalah 
namespace App\Controllers\admin; 
use App\Controllers\BaseController;
// user  App\Controllers\BaseController digunakan agar BaseController yang sebagai parent dari user tidak mengalami eror 
class User extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        echo 'Ini controller user method index yang ada di folder Admin';
    }

  
    
}
