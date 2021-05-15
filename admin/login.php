<?php
 include 'includes/db-config.php';
 include 'login/header.php';
 session_start();

//  if the admin has already login then it should go straight to the home page for admin

 if(isset($_SESSION['id'])){
    header("location:index.php");
 }

?>




<?php

error_reporting(0);
$msg='';
# check if the button is clicked

if(isset($_POST['loginbtn'])){

    $email = $_POST['email'];
    $password = md5($_POST['password']);

    // create query

    $query = "SELECT * FROM Admin WHERE email = '$email' AND password='$password' ";

    // run the qeury

    $query_run = mysqli_query($connection,$query);


    if(mysqli_num_rows($query_run) >0){
        $msg = "<div class='alert alert-success'>Login Successful</div>";
        $row = mysqli_fetch_assoc($query_run);  // fetch all data on the row for the user
        
        $_SESSION['id'] = $row['id']; // set the session for the admin with the id on the row
      

        $email = $_POST['email']='';
    $password = $_POST['password']='';

    header("refresh:2;url=http://localhost/portfolio/admin/index.php");



    }
    else{
        $msg = "<div class='alert alert-warning'>Login Failed..Please try again later.</div>";
    }

}





?>

















<body class="bg-gradient-primary">

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <?php echo $msg; ?>
                                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                </div>
                                <form class="user" action="login.php" method="POST">
                                    <div class="form-group">
                                        <input type="email" name="email" value="<?php echo $_POST['email']; ?>" class="form-control form-control-user"
                                            id="exampleInputEmail" aria-describedby="emailHelp"
                                            placeholder="Enter Email Address...">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" value="<?php echo $_POST['password']; ?>" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password">
                                    </div>
                                    
                                    <button name="loginbtn" class="btn btn-primary btn-user btn-block">
                                        Login
                                    </button>
                                    
                                   
                                    
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="register.php">Create an Account!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

<?php

include 'login/script.php';
?>

</body>

</html>