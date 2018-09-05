 <?php 
    $conn=oci_connect("sz","sz","localhost");

    If (!$conn){
		
	echo 'Failed to connect to Oracle';
	}
    else
	{
	echo 'successfully connected';
	}

?>