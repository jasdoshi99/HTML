<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dname="demo1";
	$conn = mysqli_connect($servername, $username, $password,$dname);
  if($conn)
  {
   	echo "<b>Server Connected</b><br>";
	
  if(isset($_POST['submit']))
  {
    $nm=strval($_POST['name']);
    $em=strval($_POST['email']);
    $mnum=strint($_POST['number']);
    $pwd=strval($_POST['pass']);
    
   
      
        $sql="INSERT INTO jas(name,email_id,contact no,password) VALUES('$nm','$em','$mnum','$pwd')";
        $reg=mysqli_query($conn,$sql);
        echo "value inserted in database";
        
      }
      else
      {
		echo "value not inserted";
      }
  }
  
  else
  {
   	die("Connection failed: " . mysqli_connect_error());
  }

  ?>