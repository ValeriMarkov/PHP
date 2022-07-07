<?php
 ob_start();
  require_once 'conn.php';
  if(isset($_POST['updateThis']))
   {
    $getId = $_POST['contactId'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $firstQuery = ("UPDATE contactDetails SET contactName='$name', phoneNumber='$phone'
    WHERE contactId='$getId'");
    $queryLaunch =@mysqli_query($DBconn, $firstQuery);
      if($queryLaunch){
        header("Location:index.php");	
        }
      else{
        echo '<p class="errorMessage">There was an error while updating record</p>';  
      }
   }
   $getId = $_GET['editId'];
   $query = "SELECT * FROM contactDetails WHERE contactId='$getId'";
   $result = mysqli_query($DBconn, $query);
   $updateRow = @mysqli_fetch_assoc($result);
?>

<html>
<head>
<title>PhoneBook</title>
<link rel="stylesheet" href="css\style.css">
</head>
<body>

  <div id="main">
    <?php include_once 'menu.php';?>
  </div>
 <form class="addContact" action=" <?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <h1>Update contact</h1>
    <input type="hidden" name="contactId" value="<?php echo isset($updateRow['contactId']) ? $updateRow['contactId'] : ''; ?>"><br>
    <label>Name</label><input type="text" name="name" value="<?php echo isset($updateRow['contactName']) ? $updateRow['contactName'] : '';?>"><br>
    <label>Phone</label><input type="text" name="phone" value="<?php echo isset($updateRow['phone']) ? $updateRow['phone'] : '';?>"><br>
    <input type="submit" value="Update" name="updateThis">
</form>

</body>
</html>