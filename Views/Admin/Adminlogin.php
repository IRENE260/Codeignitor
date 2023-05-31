


<!DOCTYPE html>
<html>
<head>
	<title>login</title>
    <body style="background-color:LightGray">
    <h2>LOGIN</h2>
        
    </body>
    
	
<style>
        body{
            text-align:center;
        }
    </style>
</head>



<body >

<form  method="post" action="<?php echo base_url("adminlog")?>" ><br><br>
			
			
				EMAIL: <input type="email"  name="email"  required></input><br><br>

				    PASSWORD: <input type="text" name="password"  required></input><br><br>
				
					<input type="submit" value="Login" onclick="validate()" name='submit'>
					
    </form>	
				
		
	
</body>


</html>




