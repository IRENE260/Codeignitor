<?php

namespace App\Controllers;
use \App\Models\requestModel;

class request extends BaseController
{
    public function index()
    {
        return view('request');
    }
    public function output()
    {
        $name=$this->request->getpost('name');
        $hospital=$this->request->getpost('hospital');
        $units=$this-> request->getpost('units');
        $date=$this->request->getpost('date');
        $bloodgroup=$this->request->getpost('bloodgroup');
        $requestModel = new RequestModel();
         
        
    
    $w=array(
         'name'=>$name,
         'hospital'=>$hospital,
         'units'=>$units,
         'date'=>$date,
         'bloodgroup'=>$bloodgroup,
    );
    
    $insert=$requestModel->insert($w);
    return redirect()->to('profileuser');

}  

}  
