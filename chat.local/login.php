<?php
require ('partials/header.php');

if(!empty($_POST)) {
	$sql = "SELECT * FROM `users` WHERE `email` = '" . $_POST['email'] . "' AND `password` = '" . $_POST['password'] . "'";

	$result = mysqli_query($conn, $sql);
	$user = $result->fetch_assoc();
	
	if($user) {
		if(isset($_POST['remember'])) {
			setcookie('user_id', $user['id'], time()+60+60+24+30, '/' ); 
		} else {
			$_SESSION["user_id"] = $user['id'];
		}
		$_SESSION["user_id"] = $user['id'];
		header("Location: /");
	} else {
		$_SESSION["user_id"] = null;
		setcookie('user_id', '', 0, '/');
	}
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
                     <form action="#" method="POST">
                     <div class="form-floating">
                           <label for="floatingInput">Email</label>
                           <input type="text" class="form-control"  id="floatingInput" name="email" placeholder="name@example.com">
                        </div>
                        <div class="form-floating">
                           <label for="floatingInput">Password</label>
                           <input type="password" class="form-control" id="floatingInput" name="password" placeholder="password" >
                        </div>
                        <div>
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