<!--TEAM MEMBERS: ASHWANTHIKA UMASANKAR – 1001854976
                                 PRATHIBHA LAKKIDI- 1001962876-->
<?php
session_start();
$con = mysqli_connect("localhost","root","","art gallery");

if(isset($_POST['insert_data']))
{
    
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $birthDate = mysqli_real_escape_string($con, $_POST['birthDate']);
    $sdeathDate = mysqli_real_escape_string($con, $_POST['deathDate']);
    $commission = mysqli_real_escape_string($con, $_POST['commission']);
    $street = mysqli_real_escape_string($con, $_POST['street']);
    $city = mysqli_real_escape_string($con, $_POST['city']);
    $stateAb = mysqli_real_escape_string($con, $_POST['stateAb']);
    $zipcode = mysqli_real_escape_string($con, $_POST['zipcode']);
    $result = mysqli_query($con, "SELECT COUNT(aID) FROM artist");
    $result = $result->fetch_array();
    $quantity = intval($result[0]) + 1;
    $query = "INSERT INTO artist(name,birthDate,deathDate,commission,street,city,stateAb,zipcode,aID)VALUES('$name','$birthDate','$deathDate','$commission','$street','$city','$stateAb','$zipcode',$quantity)";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Data Inserted Successfully";
        header("Location: insertdata.php");
    }
    else
    {
        $_SESSION['status'] = "Data is not Inserted, Please Try Again!";
        header("Location: insertdata.php");
    }
}

?>