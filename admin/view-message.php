<?php 
include 'includes/db-config.php';
include 'includes/head.php';
include 'includes/sidebar.php';
// include 'includes/topbar.php';
session_start();

if(isset($_SESSION['id'])){

    $id = $_SESSION['id'];
}
else{
    header("location:login.php");
}



?>











        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                  
                










 
 
 
 
 
 
 
 
 
 
 <!-- Topbar Navbar -->
  <ul class="navbar-nav ml-auto">

<!-- Nav Item - Search Dropdown (Visible Only XS) -->
<li class="nav-item dropdown no-arrow d-sm-none">
    <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-search fa-fw"></i>
    </a>
    <!-- Dropdown - Messages -->
    <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
        aria-labelledby="searchDropdown">
        <form class="form-inline mr-auto w-100 navbar-search">
            <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small"
                    placeholder="Search for..." aria-label="Search"
                    aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</li>





<div class="topbar-divider d-none d-sm-block"></div>

<!-- Nav Item - User Information -->
<li class="nav-item dropdown no-arrow">
    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="mr-2 d-none d-lg-inline text-gray-600 small">


        <!-- display admin here  -->

        <?php 
        
        $query = "SELECT * FROM Admin WHERE id = '$id'";

        // run the query

        $query_run = mysqli_query($connection,$query);

        if(mysqli_num_rows($query_run) > 0){  // if the admin row is not empty or it the database contains admin info it should then fetch all info 
            $fetchAdminName = mysqli_fetch_assoc($query_run);
        }
        // display admin here
        echo $fetchAdminName ['first_name'] .' '. $fetchAdminName['last_name'];
        
        
        
        
        
        
        ?>











        </span>
        <img class="img-profile rounded-circle"
            src="img/undraw_profile.svg">
    </a>
    <!-- Dropdown - User Information -->
    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
        aria-labelledby="userDropdown">
        <a class="dropdown-item" href="#">
            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
            Profile
        </a>
        <a class="dropdown-item" href="#">
            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
            Settings
        </a>
        <a class="dropdown-item" href="#">
            <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
            Activity Log
        </a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
            Logout
        </a>
    </div>
</li>

</ul>

</nav>
<!-- End of Topbar -->


 <!-- Begin Page Content -->
 <div class="container-fluid">



<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <center>
            <h6 class="m-0 font-weight-bold text-primary" style="font-size: 30px;">Messages</h6>
        </center>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Message</th>
                    </tr>
                </thead>
                <tbody>

                <!-- get the senders info here -->

                <?php
                
                // create a query to select all senders info 

                $query = "SELECT * FROM Contact";

                // run the query to get senders info

                $query_run = mysqli_query($connection,$query);

                // check if the database contains senders info

                if(mysqli_num_rows($query_run) !=0){  // if the database contains senders info or not equal to zero then fetch senders info

                   while($fetchSendersInfo = mysqli_fetch_assoc($query_run)){// get senders info on all row or every row

                    ?>
    
                        <tr>
                            <td><?php echo $fetchSendersInfo['id'] ?></td>
                            <td><?php echo $fetchSendersInfo['name'] ?></td>
                            <td><?php echo $fetchSendersInfo['email'] ?></td>
                            <td><?php echo $fetchSendersInfo['message'] ?></td>
                            
                            
                        </tr>

                        <?php

                } 
                }

                
                ?>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->


            


                    <?php 
            include 'includes/footer.php';
                    ?>