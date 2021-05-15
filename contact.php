<?php  

include 'includes/db-config.php';
include 'contact_script.php';



// declare variables

$name = $_POST['name'];
$email = $_POST['email'];
 $message = $_POST['message'];


error_reporting(0);





    // if name field is empty then show error 
if($name == ""){

   $msg =  '<div class="alert alert-danger">Name cant be empty</div>';
    header("refresh:4;url=http://localhost/portfolio/index.php");
  
    
    
    
}
// if name length or characters are less than 5 show warning
else if(strlen($name)< 5){
    
 $msg= "<strong><div class='alert alert-warning alert-dismissible  fade show  text-center'style=color:black;margin-top:50px;>Name should be more than 5 Characters</div></strong>";
  
  header("refresh:4;url=http://localhost/portfolio/index.php");

}
// if email field is empty then show error
 else if($email == ""){
    $msg =  '<div class="alert alert-danger">Email cant be empty</div>';
    header("refresh:4;url=http://localhost/portfolio/index.php");
}
// if email length or characters are less than 6 then show warning
else if (strlen($email) < 8){
    $msg= "<strong><div class='alert alert-warning alert-dismissible  fade show  text-center'style=color:black;margin-top:50px;>Email should be more than 8 characters</div></strong>";
    header("refresh:4;url=http://localhost/portfolio/index.php");
}
    
// if message field is empty then show error
else if($message == ""){
    $msg =  '<div class="alert alert-danger">Message cant be empty</div>';
    header("refresh:4;url=http://localhost/portfolio/index.php");
    
   
} 
// if message length or characters are less than 2 then show warning
else if(strlen($message) <2){
   
    $msg= "<strong><div class='alert alert-warning alert-dismissible  fade show  text-center'style=color:black;margin-top:50px;>please make sure message characters are more than a single character</div></strong>";
    header("refresh:4;url=http://localhost/portfolio/index.php");
}
else{
//  if everything meets the requirement then insert senders data in the database

// create query
$query = "INSERT INTO Contact(name,email,message)VALUES('$name','$email','$message')";

// run the query to insert senders data in  the database

$query_run = mysqli_query($connection,$query);

// check if query run successfully
if($query_run){

    sleep(10);

    $msg = "<div class='alert alert-success'>Thanks for contacting me. I will go through your message and get back to you!</div>";
     header("refresh:6;url=http://localhost/portfolio/index.php");

   

    

}
else{
    $msg = "<div class='alert alert-warning'>Something went wrong.Please try again later!</div>";

}



}


















?>



<div class="jumbotron">
  <h1 id="yo" class="display-4 text-center">Hello Mr/Mrs <?php  echo $name ?> </h1>
  <center>
      <p class="lead"><?php echo $msg ?></p>
  </center>
  <hr class="my-4">
  <center><a class="btn btn-primary btn-lg" style="margin-top: 20px; " href="index.php" role="button">Go Back To Homepage</a></center>
</div> 


<script src="insert.js"></script>

