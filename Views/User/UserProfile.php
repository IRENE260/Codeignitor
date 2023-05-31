<?php
$con=mysqli_connect("localhost","root","","code4");
 if (session()->has('data')) : 
    $value = session()->get('data'); 
    //print_r($result);die;
  endif;

if(isset($_GET['id']))
{
    $Id=$_GET['id'];
    $sql="select * from request where id='".$Id."'";
    $result1=mysqli_query($con,$sql);
    $sql1="select * from donor where id='".$Id."'";
    $result=mysqli_query($con,$sql1);
    $value=mysqli_fetch_assoc($result);
    // $sql2="select * from donor where id='".$Id."'";
    // $result3=mysqli_query($con,$sql2);
}
if(isset($_POST['request']))
{
    header("location: request?id='".$_GET['id']."'");
    exit();
}   
if(isset($_POST['donor'])) 
 {
    mysqli_query($con,"update admin set Donor='Yes' where id='$Id'");
     header("location: donorbld.php?id=".$value['id']);
    exit();
}
 if(isset ($_POST['check']))
 {
     header("location: checkbld.php?id=".$value['id']);
     exit();
 }

 ?>
<!DOCTYPE html>

<head>
<style>
        body{
            text-align:center;
        }
    </style>

<body style="background-color: burlywood">
  <br>
  <h2>HELLO </h2>
  <img height="250px" width="150px" src="<?php echo $value['filename']; ?>" >
  <form method="post"  action="<?php echo base_url('profileuser')?>"></form>
  <button type="nav"  name="request" value="request"><a  href ="request?id=<?php echo $value['id'];?>"> REQUEST FOR BLOOD </a></button><br><br> 
        
<button class="nav"  name="donor" value="donor"><a href='donor?id=<?php echo $value['id'];?>'> BE A DONOR</button><br><br>
<button class="nav"  name="check" value="check"><a href ='checkuser?id=<?php echo $value['id'];?>'>CHECK STATUS FOR BLOOD YOU REQUESTED</button> <br><br>
       <input type="hidden" name="id" id="id" value=<?php echo $value['id'];?>>
            
                
       
                
</html>
