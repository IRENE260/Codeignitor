<?php
    $con=mysqli_connect("localhost","root","","code4");
    $sql="SELECT * FROM  donor";
    $result=mysqli_query($con,$sql);

?>
<html>
<head>
     


<style>
table,th,td{
    border-collapse:collapse;
    border :1px solid;
    text-align:center;
    width:30%;
}
</style>
</head>


<body style="background-color:LightGray">
<h1>DONOR FORM</h1>
<table>
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>BLOOD GROUP</th>
        <th>GENDER</th>
        <th>PHONENUMBER</th>
       
        
        
</tr>
<?php  
while ($file=mysqli_fetch_array($result))
{
    
    ?>
    <tr>
         <td><?php echo $file["id"];?></td>
         <td><?php echo $file["name"];?></td>
         <td><?php echo $file["bloodgroup"];?></td>
         <td><?php echo $file["gender"];?></td>
         <td><?php echo $file["phonenumber"];?></td>
         
         
        </tr>  
     <?php  
}
?>
</table>
