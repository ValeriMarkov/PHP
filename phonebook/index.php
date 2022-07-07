<?php session_start(); ?>

<html>
<head>
<title>PhoneBook</title>
<link rel="stylesheet" href="css\style.css">
<script> function ConfirmDelete() { return confirm("Are you sure you want to delete contact ?"); } </script>
</head>
<body>

<div id="main">
  <?php include_once 'menu.php'; ?>

  <div class="totalContacts"><p>Number of contacts: <?php echo '<span>'. $row.'</span>'; ?></p></div>

  <table class="contactsTable">
    <th>
    <tr>
    <td><strong>ID</strong></td>
    <td><strong>Name</strong></td>
    <td><strong>Phone</strong></td>
    <td><strong>Action</strong></td>
    </tr>
    </th>

    <?php
    require_once 'conn.php';
    $count= 1;
    $query = "SELECT * FROM contactDetails ORDER BY contactName";
    $result = mysqli_query($DBconn, $query);
    while($row = @mysqli_fetch_assoc($result)){ 
    ?>
    
    <tr>
    <td id="od"> <?php echo $count; ?></td>
    <td class="ev"> <?php echo $row["contactName"]; ?></td>
    <td class="ev"> <?php echo $row["phoneNumber"]; ?></td>
    <td class="ev">
    <a href="delete.php?deleteId= <?php echo $row["contactId"]; ?> "id="del" Onclick="return ConfirmDelete()">Delete</a>
    <a href="edit.php?editId= <?php echo $row["contactId"]; ?> "id="edt">Edit</a>
    </td>
    </tr>
    
    <?php $count++;} ?>
	</table>  

</div>

</body>
</html>