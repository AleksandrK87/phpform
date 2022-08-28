<?php
require('partials/header.php');

if(!empty($_POST)) {
   echo $_POST['name'] . " - " . $_POST['email'];


$sql = "INSERT INTO `users` ( `username`, `email`, password) VALUES ('" . $_POST['name'] . "', '" . $_POST['email'] . "', '" . $_POST['password'] . "');";
if (mysqli_query($conn, $sql)) {
   echo "INSERT";
   header("location: /");
} else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>


<div class="container">
   <div class="row">
      <div class="col-md-12 min-vh-100 d-flex flex-column justify-content-center">
         <div class="row">
            <div class="col-lg-6 col-md-8 mx-auto">
               <!-- form card login -->
               <div class="card rounded shadow shadow-sm">
                  <div class="card-header">
                     <h3 class="mb-0">Sign in</h3>
                  </div>
                  <div class="card-body">
                     <form action="#"  method="POST">
                     <div class="form-floating">
                           <label for="floatingInput">Username</label>
                           <input type="text" class="form-control"  id="floatingName" name="name" placeholder="Username">
                        </div>
                        <div class="form-floating">
                           <label for="floatingInput">Email</label>
                           <input type="text" class="form-control"  id="floatingInput" name="email" placeholder="name@example.com">
                        </div>
                        <div class="form-floating">
                           <label for="floatingInput">Password</label>
                           <input type="password" class="form-control" id="floatingInput" name="pasword" placeholder="password" >
                        </div>
                        <div>
                           <label class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input">
                              <span class="custom-control-indicator"></span>
                              <span class="custom-control-description small text-dark">Remember me on this computer</span>
                           </label>
                        </div>
                        <button type="submit" class="btn btn-success btn-lg float-right" id="btnLogin">Sign in</button>
                     </form>
                  </div>
                  <!--/card-block-->
               </div>
               <!-- /form card login -->

            </div>


         </div>
         <!--/row-->

      </div>
      <!--/col-->
   </div>
   <!--/row-->
</div>
<!--/container-->

<?php
require('partials/footer.php');
?>