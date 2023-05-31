<?php if (session()->has('data')) :
     $result = session()->get('data');
    // print_r($result);die;
   endif;
?>

<!DOCTYPE html>
<html>
    <head>
        <h1>STATUS</h1>
        <title>checkstatus</title>
        <style>
table,th,td{
    border-collapse:collapse;
    border :1px solid;
    text-align:center;
    width:30%;
}
</style>
        <body >
            <?php $id=$_GET['id']; ?>
        
            <table>
                <tr>
                    <th>NAME</th>
                    <th>BLOOD GROUP</th>
                    <th>UNITS</th>
                    <th>STATUS</th>
                    
                 </tr>
                 <?php foreach($result as $d){?>
                    <tr>
                        <td><?php echo $d["name"];?></td>
                        <td><?php echo $d["bloodgroup"];?></td>
                        <td><?php echo $d["units"];?></td>
                        <td><?php echo $d["status"];?></td>
                    </tr>
                <?php } ?>


                 
                
                
                           
                              
            </table>
        </body>
    </head>
</html> 
