<?php
require("configs/db.php");

require("partials/header.php");

?>


<h2>PHP</h2>


<form action="/add_user.php" method="POST">
   <label>Name: <input type="text" name="name"></label>
   <br>
   <label>Email: <input type="text" name="email"></label>
   <br>
   <button>Save</button>
</form>

<?php 
$sql = "SELECT * FROM users";

$result = mysqli_query($conn,$sql);


?>

<table id="customers">
   <tr>
      <th>ID</th>
      <th>Username</th>
      <th>Email</th>
      <th>Option</th>
   </tr>

   <?php
   while($row = $result->fetch_assoc())
   {
   ?>
      <tr>
         <td><?php echo $row['id']; ?></td>
         <td><?php echo $row['username']; ?></td>
         <td><?php echo $row['email']; ?></td>
         <td>
            <a href="/edit_user.php?id="<?php echo $row['id']; ?>>Edit</a>
            <button class="btnDelete" data-id="<?php echo $row['id']; ?>">Delete</button>
         </td>
      </tr>
   
   <?php
   }
   ?>
</table> 


<?php
require("partials/footer.php");
?>