
<!DOCTYPE html>
<html>
    <head>
        <title>ADMIN LOGIN</title>
        <style>
        body{
            text-align:center;
        }
        </style>

    </head>
    
    <body style="background-color:LightGray">
    <h1> ADMIN REGISTRATION</h1>
    <form  method="post" action="<?php echo base_url("adminreg")?>">
    NAME: <input type="name" name="name"  pattern="[a-AZ-z]"required ><br><br>
    EMAIL: <input type="email" name="email" pattern=".+@globex\.com" required><br><br>
    PASSWORD:<input type="password" name="password"  required><br><br>
    CONFIRM PASSWORD: <input type="password" name="conpass" required><br><br>
    

    <input type="submit"  name="submit" value="Submit">






</form>
    
</body>
</html>
