<!--TEAM MEMBERS: ASHWANTHIKA UMASANKAR – 1001854976
                                 PRATHIBHA LAKKIDI- 1001962876-->
<?php
session_start();
$con = mysqli_connect("localhost","root","","art gallery");

if(isset($_POST['update']))
{
    $aID = $_POST['aID'];
    $name = $_POST['name'];
    $query = "UPDATE artist SET name = '$name' where aID=$aID";
    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['status'] = "Data updated Successfully";
        header("Location: update.php");
    }
    else
    {
        $_SESSION['status'] = "Data is not updated, Please Try Again!";
        header("Location: update.php");
    }
}

?>