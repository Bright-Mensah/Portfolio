<?php 
include 'includes/db-config.php';
include 'register/header.php';

session_start();
if(isset($_SESSION['id'])){
    header("location:index.php");
 }
error_reporting(0);

?>


<?php 

$msg="";
// check if the register button is clicked 

if(isset($_POST['registerbtn'])){

    // declare variabfirst_nameles

    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $confirmPassword = md5($_POST['confirmPassword']);

    

    if($password == $confirmPassword){

        // check if email exist

        $query = "SELECT first_name,email FROM Admin WHERE first_name = '$first_name' AND email ='$email' ";
        // run query
        $query_run = mysqli_query($connection,$query);

        if(mysqli_num_rows($query_run) > 0){
            $msg = "<div class= 'alert alert-danger'>Name Or Email Exist</div>";
        }
        else{
            // create query to insert admin data in the database
        $query = "INSERT INTO Admin(first_name,last_name,email,password)VALUES('$first_name','$last_name','$email','$password')";
        // run the query to insert data in the database
        $query_run = mysqli_query($connection,$query);

        // check if the query was successful
        if($query_run){
            $msg = "<div class='alert alert-success'>Registration was successful</div>";

                $first_name = $_POST['firstname']='';
                $last_name = $_POST['lastname']='';
                $email = $_POST['email']='';
                $password = $_POST['password']='';
                $confirmPassword = $_POST['confirmPassword']='';

                      
                header("refresh:3;url=http://localhost/portfolio/admin/login.php");
        }
        else{
            $msg = "<div class='alert alert-danger'>Something went wrong...Please try again later...</div>";

        }
        

            }

        
    }
    else{

        $msg = "<div class='alert alert-danger'>Password does not match...</div>";
    }
  
}



?>


<body class="bg-gradient-primary">

<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <?php echo $msg; ?>
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div>
                        <form class="user" action="register.php" method="POST">
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" name="firstname" class="form-control form-control-user" value="<?php echo $_POST['firstname']; ?>" id="exampleFirstName"
                                        placeholder="First Name">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" name="lastname" class="form-control form-control-user" value="<?php echo $_POST['lastname']; ?>"  id="exampleLastName"
                                        placeholder="Last Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control form-control-user" value="<?php echo $_POST['email']; ?>"  id="exampleInputEmail"
                                    placeholder="Email Address">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" name="password" class="form-control form-control-user"
                                        id="exampleInputPassword" value="<?php echo $_POST['password']; ?>"  placeholder="Password">
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" name="confirmPassword" class="form-control form-control-user"
                                        id="exampleRepeatPassword" value="<?php echo $_POST['confirmPassword']; ?>"  placeholder="Confirm Password">
                                </div>
                            </div>
                            <button name="registerbtn" class="btn btn-primary btn-user btn-block">
                                Register Account
                            </button>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="forgot-password.html">Forgot Password?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="login.php">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php 
    include 'register/script.php';
    
    ?>

</div>
</body>

</html>