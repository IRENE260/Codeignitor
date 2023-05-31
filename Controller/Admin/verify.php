<?php

namespace App\Controllers;

class verify extends BaseController
{
    public function index()
    {
        
         return view('verify');
        
    }
    public function request()
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
    $session = session();
    $session->set('isLoggedIn', true);
    $session->set('data', $e);


    }
 
}
