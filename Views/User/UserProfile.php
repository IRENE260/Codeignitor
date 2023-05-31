
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
