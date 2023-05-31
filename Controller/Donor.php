<?php

namespace App\Controllers;
use \App\Models\donorModel;

class donoruser extends BaseController
{
    public function index()
    {
        return view('donor');
    }
    public function output()
    {
        $name=$this->request->getpost('name');
        $phonenumber=$this->request->getpost('phonenumber');
        $age=$this->request->getpost('age');
        $gender=$this->request->getpost('gender');
        $bloodgroup=$this->request->getpost('bloodgroup');
        $donorModel=new Donormodel();
        
        $a=array(
            'name'=>$name,
            'phonenumber'=>$phonenumber,
            'age'=>$age,
            'gender'=>$gender,
            'bloodgroup'=>$bloodgroup
        );
        $insert=$donorModel->insert($a);
        return redirect()->to('profileuser');
    }
 
}
