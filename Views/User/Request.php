


<!DOCTYPE html>
<html>
    <head >
    <style>
        body{
            text-align:center;
        }
    </style>
        <title>requestblood</title>
    </head>

    <body style="background-color:burlywood" >
    <h2 >REQUEST FORM </h2>
    <form  method="post" action="<?php echo base_url("userrequest")?>" ><br><br>
    
    NAME: <input type="text" name="name" required pattern ="[a-AZ-z]"><br><br>
   
   
    HOSPITAL:<input type="text" name="hospital" pattern ="[a-AZ-z]" required><br><br>
    BLOOD GROUP:<select name="bloodgroup" >
    <option value="" name="bloodgroup">Select a blood group</option>
    <option value="A+"  name="bloodgroup">A+</option>
    <option value="A-" name="bloodgroup">A-</option>
    <option value="B+" name="bloodgroup">B+</option>
    <option value="B-" name="bloodgroup">B-</option>
    <option value="O+" name="bloodgroup">O+</option>
    <option value="O-" name="bloodgroup">O-</option>
    <option value="AB+" name="bloodgroup">AB+</option>
    <option value="AB-" name="bloodgroup">AB-</option>
    </select><br><br>
    UNITS <input type="number" name="units" min='0' required><br><br>
    DATE:<input type="date" name="date" min=<?php echo $today;?>required><br><br>
    <input type="submit" name="submit" value="Submit"  >
 <!-- input.submit {
    width: 20em;  height: 2em;
}


   <input type="submit"  id="submit" value="submit" name="submit"  class="submit"/>
    input.submit    
    {
        width: 20em;  height: 2em;
    } -->

</form>
        
    </body>
</html>

<!-- <input type="submit"   value="submit" name="submit" >
    { 
        width: 20em;  height: 2em;
    }<br> --> 
