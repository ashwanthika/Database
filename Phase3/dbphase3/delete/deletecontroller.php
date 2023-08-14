<!--TEAM MEMBERS: ASHWANTHIKA UMASANKAR – 1001854976
                                 PRATHIBHA LAKKIDI- 1001962876-->
<?php
session_start();
$con = mysqli_connect("localhost","root","", "art gallery");

    if(isset($_POST['delete']))
    {
        $aID = $_POST['aID'];
    

        $query = "DELETE FROM artist WHERE aID=$aID ";
        $query_run = mysqli_query($con, $query);

        if($query_run)
        {
            $_SESSION['status'] = "Data deleted Successfully";
            header("Location: delete.php");
        }
        else
        {
            $_SESSION['status'] = "Data is not deleted, Please Try Again!";
            header("Location: delete.php");
        }
    }

?>