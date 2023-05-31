<?php

namespace  App\Controllers;
use \App\Models\requestModel;


class verifyrequest extends BaseController
{
    public function index()
    {
        
        $reqmodel=new requestModel();
        $data= $reqmodel->where('Status','Unsold')->findAll();
        $session = session();
        $session->set('isLoggedIn', true);
        $session->set('data', $data);
        return view('verifyrequest',$data);
     
    }
}
