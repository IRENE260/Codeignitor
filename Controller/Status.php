<?php
 namespace App\Controllers;
 use \App\Models\requestModel;

 
 class checkuser extends BaseController
 {
     public function index()
     {
        $id=$_GET['id'];
        $reqmodel=new requestModel();
        $data= $reqmodel->where('userid',$id)->findAll();
        $session = session();
        $session->set('isLoggedIn', true);
        $session->set('data', $data);
        return view('checkuser',$data);
         
     }
}     
