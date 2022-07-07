<?php
require_once 'conn.php';
if(isset($_POST['submit']))
{
  $name = $_POST['name'];
	$phone = $_POST['phoneNumber'];
	if($name == ''  || $phone ==''){
		echo '<p class="requiredError">* - required to fill</p>';
	} else{
		$sql = "INSERT INTO contactDetails(contactName, phoneNumber) VALUES ('$name', '$phone')";

    $result = mysqli_query($DBconn,$sql);
    if($result){
      echo '<p class="addedMessage">Contact has been added!</p><br> ';
    } else{
	  echo '<p class="errorMessage">A error occured, while trying to add contact.</p>';  
	}	
      }
}
?>

<html>
<head>
<title>PhoneBook</title>
<link rel="stylesheet" href="css\style.css">
</head>
<body>

   <div id="main">
     <?php include_once 'menu.php'; ?>
   </div>
  <form class="addContact" action =" <?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <h1>Add Contact</h1>
    <label>Name<span style="color:red;">*</span></label><input type="text" name="name"><br>
    <label>Phone<span style="color:red;">*</span></label><input type="text" name="phoneNumber"><br>
    <input type="submit" value="Add" name="submit">
  </form>

</body>
</html>