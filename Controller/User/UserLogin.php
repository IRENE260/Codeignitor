<?php

namespace App\Controllers;
use \App\Models\userModel;

class login extends BaseController
{
    public function index()
    {
        return view('login');
    }
    public function output()
    {
       $email=$this->request->getpost('email') ;
       $password=$this->request->getVar('password');
       $userModel = new userModel();
    

    $e =$userModel->where('email', $email)->first();

    if(!$e)
    {    

        echo('EMAIL NOT FOUND');
        return view('register');
       
    }
   if($password==$e['password'])
   {  
    $session = session();
    $session->set('isLoggedIn', true);
    $session->set('data', $e);
      return view('userprofile');
   }   
   else{
    echo "INCORRECT PASSWORD ";
    return view('register') ;  
}

   }
}
   
        
        
  

