<?php
namespace App\Controllers;
use \App\Models\adminmodel;

class adreg extends BaseController
{
    public function index()
    {
        return view('adminregister');
    }
    public function result()
    {
          $name=$this->request->getpost('name');
          $email=$this->request->getpost('email');
          $password=$this->request->getpost('password');
          $conpass=$this->request->getpost('conpass');
        //   $file = $_FILES["image"]["name"];
        //   $tempname = $_FILES["image"]["tmp_name"];
        //   $folder = "./imageadmin/" . $filename;
        // $target_dir="image/";
        // $target_file=$target_dir.basename($_FILES["image"]["name"]); 
        // move_uploaded_file($_FILES["image"]["tmp_name"],$target_file);
        
          $adminModel= new Adminmodel();
          $e= array(
            'name'=> $name,
            'email'=>$email,
            'password'=>$password,
            'conpass'=>$conpass,
            // 'file'=>$file,

          );
          $insert = $adminModel->insert($e);
       if ($insert){
       return redirect()->to('home');
       }
       else{
        
        echo fail;
       }
}
}
