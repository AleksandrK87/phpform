<?php
require( "configs/db.php");
require( "partials/header.php");

if (!empty($_POST)) {


   $sql = "UPDATE `users` SET `username` = '" . $_POST['name'] . "', `email` = '" . $_POST['email'] . "' WHERE `users`.`id` = '" . $_GET['id'] . "';";
   if (mysqli_query($conn, $sql)) {
      echo "UPDATE";
      header("location: /");
   } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }
   mysqli_close($conn);
}

$sql = "SELECT * FROM users WHERE id = " . $_GET['id'];
$result = mysqli_query($conn, $sql);
var_dump($result);
?>



<form action="/edit_user.php?id<?php echo $_GET['id']; ?>" method="POST">
   <label>Name: <input type="text" name="name"></label>
   <br />
   <label>Email: <input type="text" name="email"></label>
   <br />
   <button>Save</button>
</form>

<?php
require( "partials/footer.php");
?>