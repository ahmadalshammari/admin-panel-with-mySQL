<?php session_start();
include_once('config.php');
if (strlen($_SESSION['adminid']==0)) {
  header('location:logout.php');
  } else{
//Code for Updation 
if(isset($_POST['update']))
{
    $Pname=$_POST['P_name'];
    $Pprice=$_POST['P_price'];
    $Pdes=$_POST['P_des'];
    $NOC=$_POST['CID'];
    $add="insert into `products` (`PID`, `P_name`, `P_price`, `P_photo`, `P_des`, `CID`) VALUES (NULL, '$Pname', '$Pprice', NULL, '$Pdes', '$NOC');";
    $msg=mysqli_query($con,$add);

if($msg)
{
    echo "<script>alert('Profile Add successfully');</script>";
       echo "<script type='text/javascript'> document.location = 'manage-products.php'; </script>";
}
}


    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Edit Profile | Registration and Login System</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
      <?php include_once('includes/navbar.php');?>
        <div id="layoutSidenav">
          <?php include_once('includes/sidebar.php');?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        
<?php 

?>
                        <h1><?php echo "Add Profile"; ?></h1>
                        <div class="card mb-4">
                     <form method="post">
                            <div class="card-body">
                                <table class="table table-bordered">
                                   <tr>
                                    <th>Product Name</th>
                                       <td><input class="form-control" id="P_name" name="P_name" type="string" value="" required /></td>
                                   </tr>
                                   <tr>
                                       <th>Product price</th>
                                       <td><input class="form-control" id="P_price" name="P_price" type="text" value=""  required /></td>
                                   </tr>
                                   <th>Product Description</th>
                                       <td><input class="form-control" id="P_des" name="P_des" type="text" value="" required /></td>
                                   </tr>
                                        
                                   <tr>
                                       <th>Number Of Categories</th>
                                       <td><input class="form-control" id="CID" name="CID" type="text" value=""  required /></td>
                                   </tr>
                               
                                     
                                       
                                   <tr>
                                       <td colspan="4" style="text-align:center ;"><button type="submit" class="btn btn-primary btn-block" name="update">Add</button></td>

                                   </tr>
                                    </tbody>
                                </table>
                            </div>
                            </form>
                        </div>
<?php } ?>

                    </div>
                </main>
          <?php include('includes/footer.php');?>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
<?php  ?>
