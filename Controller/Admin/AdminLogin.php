<?php

namespace App\Controllers;
use \App\Models\adminModel;

class adlogin extends BaseController
{
    public function index()
    {
        return view('adminlogin');
        
    }
    public function result()
    {
       $email=$this->request->getpost('email') ;
       $password=$this->request->getpost('password');
       $adminModel = new adminModel();
       
       $e =$adminModel->where('email', $email)->first();
      if(!$e){
         echo " EMAIL NOT FOUND !!";
         return view('adminregister');
       }
        if($password==$e['password'])
    {
      return view('adminhome');
   }   
    else{
     echo "INCORRECT PASSWORD !!";
     return view('adminregister');
    }
    


    
  }
} 
    
  
