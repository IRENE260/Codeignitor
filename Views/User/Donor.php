<!DOCTYPE html>
<html>
<head>
<title>donor</title>
<style>
    body
    {
        text-align:center;
    }
</style>
</head>
<body style="background-color: burlywood">
<h1> DONOR REGISTRATION FROM</h1>
    <form method="post"  action="<?php echo base_url('userdonor')?>">
    NAME:<input type="text" id="name" name="name"   pattern="[a-AZ-Z]" required><br><br>
    
    PHONENUMBER:<input type="text"  id="phonenumber" name="phonenumber"  required ><br><br>
    
   
    
   AGE:<input type='number' id='age' name='age'  required><br><br>
    
    
    GENDER:<input type="radio" name="gender" value="male" >
            MALE
            <input type="radio" name="gender" value="female" >
            FEMALE<br>
    <br>
    BLOOD GROUP :<select name='bloodgroup' required>  
                <option value="" name ='bloodgroup'>Select a blood group</option>  
                <option value="A+"   name='bloodgroup'>A+</option>  
                <option value="A-" name='bloodgroup'>A-</option>  
                <option value="B+"  name='bloodgroup'>B+</option>  
                <option value="B-" name='bloodgroup'>B-</option>
                <option value="O+" name='bloodgroup'>O+</option>  
                <option value="O-" name='bloodgroup'>O-</option>  
                <option value="AB+" name='bloodgroup'>AB+</option>  
                <option value="AB-" name='bloodgroup'>AB-</option>  
                
                  
               
                </select><br><br>
                <input type="submit"  name="submit" value="Submit"><br>
            </form>
            



</body>
</html>
