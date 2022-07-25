<?php
	
	$username ="root";
	$password = "";
	$server = 'localhost';
	$db = 'contact';

	$con = mysqli_connect($server,$username,$password,$db);

	if ($con)
	{
		//echo "Connection Successful";
	?>
	
	<script>
		alert('Connection Successful');
	</script>
	
	<?php
	}
	else
	{
		echo "No Connection";
	}

?>
<?php


    if(isset($_post['submit']))
	{
    $name = $_post['name'];
    $email = $_post['email'];
    $mobile = $_post['mobile'];
    $message = $_post['message'];

    $insertquery = "INSERT INTO contact(`name`, `email`, `mobile`, `message`) VALUES ('$name','$email','$mobile','$message')";

    $res = mysqli_query($con,$insertquery);

    if($res)
	{
        ?>
        <script>
            alert("Data Insert Properly");
        </script>
        <?php
    }else{
        ?>
        <script>
            alert("Data Not Insert Properly");
        </script>
        <?php
    }
}
?>