<?php
require ("configs/db.php");

if(!empty($_GET)) {

echo $_GET['user_id'];
/* $sql =  'DELETE FROM `users` WHERE `users`.`id` = ' . $_GET['user_id'];
if (mysqli_query($conn, $sql)) {
   echo "Deleted";
   header("location: /");
} else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn); */
}

?>