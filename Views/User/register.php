  






<DOCTYPE html>
<html>
    <head>
    <title>register</title>
    
    <style>
        body{
            text-align:center;
        }
    </style>

    </head>
    <body style="background-color:burlywood">
    
        <h1>REGISTRATION FORM</h1>
        <form method="post" enctype="multipart/form-data" action="<?php echo base_url("userregister");?>">

        NAME:<input type="text" id="name" name="name"   pattern="[a-AZ-Z]" required><br><br>
        EMAIL :    <input type="email"   name="email"  required><br><br>
       PHONE NUMBER :<input type="number" id="phonenumber" name="phonenumber" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required><br><br>
       GENDER :    <input type="radio" name="gender"  value="male">
            MALE
            <input type="radio" name="gender" value="female"  >
            FEMALE<br><br>
            
                PASSWORD :   <input type="password"  name='password' min ='0-8' required><br><br>
                 CONFIRM PASSWORD :   <input type="password"  name='conpass' required><br><br> 
                SELECT IMAGE TO UPLOAD :<input type="file" name="upload" id="filename"><br><br>

                <input type="submit" name="submit" value="Submit"><br>
            </form>
            

                </select><br><br>
        </form>
    </body>

    

</html>
