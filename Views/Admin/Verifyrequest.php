 <?php
    $con=mysqli_connect("localhost","root","","code4");
    $sql="SELECT * FROM  request";
    $result=mysqli_query($con,$sql);

?> 
<html>
<head>
     


<style>
table,th,td,tr{
    border-collapse:collapse;
    border :1px solid;
    text-align:center;
    }
</style>
</head>


<body style="background-color:LightGray">
<h1>VERIFY REQUEST </h1>


<table>

    <tr>
    
      
        <th>ID</th>
        <th>NAME</th>
        <th>BLOOD GROUP</th>
        <th>HOSPITAL</th>
        <th>UNITS</th>
        <th>DATE</th>
        <th>VERIFY/NOT</th>
        
        
</tr>
<?php  
while ($file=mysqli_fetch_array($result))
{
    
    ?>
    <tr>
         <td><?php echo $file["id"];?></td>
         <td><?php echo $file["name"];?></td>
         <td><?php echo $file["bloodgroup"];?></td>
         <td><?php echo $file["hospital"];?></td>
         <td><?php echo $file["units"];?></td>
         <td><?php echo $file["date"];?></td>
         
         
        
         <td><a href="verify ?id=<?php echo $file['id'];?>">VERIFY</a></td>
         
     </tr>  
     <?php  
}
?>
</table>
