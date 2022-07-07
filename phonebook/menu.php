<?php
require_once 'conn.php';

    $query = "SELECT contactId FROM contactDetails";
    $result = mysqli_query($DBconn, $query);
	 $row = @mysqli_num_rows($result);

?>

<h1 class="aboveMenu">Phone Book</h1>

<div class="menu">  
   <ul>
      <li><a href="addContact.php">Add new</a></li>
      <li><a href="index.php">Contacts</a></li>
   </ul>
</div>