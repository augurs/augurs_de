<?php
$con = mysqli_connect("88.99.111.153","augurste_brahmak","brahmakumaris","augurste_brahmakumaris","3306");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }else{
	  echo "connected";
  }
?> 