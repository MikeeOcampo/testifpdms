<?php
session_start();
include('includes/header.php'); 

?>
<style>
.title{
  background-color: rgba(245, 245, 245, 1);
  opacity: .4;
}
</style>
<!DOCTYPE html>
<body class="main-bg" style="  background: url(img/systemlogo1.jpg);background-color: #ddd;background-position: center; background-position: no-repeat; background-size: fit;">
<div class="container">
<div class="card title"> <h1 style="color:#FF5733"><center>INDIVIDUAL FACULTY PORTFOLIO DATABANK AND MONITORING SYSTEM</center></h1> </div>
<!-- Outer Row -->
<div class="row justify-content-center">

  <div class="col-xl-6 col-lg-6 col-md-6" >

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div id="login-right">
        <div class="row">
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">LOG IN HERE</h1>
              </div>


                <form class="user" action="scripts.php" method="post">

                    <div class="form-group">
                    <input type="text" name="username" class="form-control form-control-user" placeholder="Enter Username">
                    </div>
                    <div class="form-group">
                    <input type="password" name="password" class="form-control form-control-user" placeholder="Password">
                    </div>
            
                    <button type="submit" name="login_btn" class="btn btn-primary btn-user btn-block"> Login </button>
                    <br>
                    <div class="text-center">
                      <a href="forgot.php" id="forgot">Forgot Password</a>
                    </div><br>
                    <hr>
                </form>


            </div>
          </div>
        </div>
      </div>
      </div>
    </div>

  </div>

</div>

</div>


</body>
</html>