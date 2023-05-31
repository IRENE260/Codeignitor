<?php
namespace App\Controllers;
use \App\Models\userModel;
class register extends BaseController
{
    public function index()
    {
        
        return view('register');
    }
    public function output()

    {
        $name=$this->request->getpost('name');
        $email=$this->request->getpost('email');
        $password=$this->request->getpost('password');
        $conpass=$this->request->getpost('conpass');
        $gender=$this->request->getpost('gender');
        $phonenumber=$this->request->getpost('phonenumber');
         $filename = $_FILES["upload"]["name"];
         $tempname = $_FILES["upload"]["tmp_name"];
          $folder = "./image/" . $filename;
        $target_dir="image/";
        $target_file=$target_dir.basename($_FILES["upload"]["name"]); 
        move_uploaded_file($_FILES["upload"]["tmp_name"],$target_file);
        
        
         $userModel = new UserModel();
        
       
       $r=array(
            'name'=>$name,
            'email'=>$email,
            'password'=>$password,
             'conpass'=>$conpass,
            'phonenumber'=>$phonenumber,
             'gender'=>$gender,
             "filename"=>$target_file,
       );
       $insert = $userModel->insert($r);
       if ($insert){
       return redirect()->to('home');
       }
       else{
        echo fail;
       }

     }
}
