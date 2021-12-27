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
$Productid=$_GET['PID'];
    $msg=mysqli_query($con,"update products set P_name='$Pname',P_price='$Pprice',P_des='$Pdes',CID='$NOC' where PID='$Productid'");

if($msg)
{
    echo "<script>alert('Profile updated successfully');</script>";
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
        <title>Edit products | Registration and Login System</title>
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
$productid=$_GET['PID'];
$query=mysqli_query($con,"select * from products where PID='$productid'");
while($result=mysqli_fetch_array($query))
{?>
                        <h1 class="mt-4"><?php echo $result['P_name'];?>'s Profile</h1>
                        <div class="card mb-4">
                     <form method="post">
                            <div class="card-body">
                                <table class="table table-bordered">
                                   <tr>
                                    <th>Product Name</th>
                                       <td><input class="form-control" id="P_name" name="P_name" type="text" value="<?php echo $result['P_name'];?>" required /></td>
                                   </tr>
                                   <tr>
                                       <th>Product Price</th>
                                       <td><input class="form-control" id="P_price" name="P_price" type="text" value="<?php echo $result['P_price'];?>"  required /></td>
                                   </tr>
                                        
                                   <tr>
                                       <th>Product Description</th>
                                       <td><input class="form-control" id="P_des" name="P_des" type="text" value="<?php echo $result['P_des'];?>"  required /></td>
                                   </tr>
                                   <tr>
                                       <th>Number of Categories</th>
                                       <td><input class="form-control" id="CID" name="CID" type="text" value="<?php echo $result['CID'];?>"  required /></td>
                                   </tr>
                               
                                     
                                       
                                   <tr>
                                       <td colspan="4" style="text-align:center ;"><button type="submit" class="btn btn-primary btn-block" name="update">Update</button></td>

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
<?php } ?>
