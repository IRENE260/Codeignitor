<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<body style ="background-color:burlywood">
	<h2>LOGIN</h2>
		
	</body>
	
<style>
        body{
            text-align:center;
        }
    </style>
</head>

<body>
<div>
			<form  method="post" action="<?php echo base_url("userlogin")?>">
			
				EMAIL: <input type="email"  name="email" required></input><br><br>

				    PASSWORD: <input type="password" name="password" required></input><br><br>
				
					<input type="submit" value="Login"  name='submit'>
					
					
				
		
	</div>
</body>


</html>
