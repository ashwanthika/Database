<!--TEAM MEMBERS: ASHWANTHIKA UMASANKAR – 1001854976
                                 PRATHIBHA LAKKIDI- 1001962876-->

<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/darkly/bootstrap.min.css" >

    <title>DISPLAY DATA</title>
  </head>
<body>


    <div class="container">
        <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Enter Artist Name or Aritst City or Artist Commission</h4>
                    </div>
<form method="GET" action="">
    Select Your Option 
    <select name="options">
        <option value="" hidden selected="">--select--</option>
        <option value="name">Artist Name</option>
        <option value="city">Aritst City</option>
        <option value="commission">Artist Commission</option>
    </select>
    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" value="<?php if(isset($_GET) && isset($_GET['search'])){echo $_GET['search']; } ?>" required class="form-control" placeholder="Enter Artist Name or Aritst City or Artist Commission">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</form>
        <div class="row justify-content-center">
            <div class="col-md-12">

                <div class="card mt-5">
                    <div class="card-header">
                        <h4>ARTIST DETAILS</h4>
                    </div>
                    <div class="card-body">
                        
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>BirthDate</th>
                                    <th>DeathDate</th>
                                    <th>Commission</th>
                                    <th>Street</th>
                                    <th>City</th>
                                    <th>State Abbrevation</th>
                                    <th>Zipcode</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $con = mysqli_connect("localhost","root","","art gallery");
                                    if(!$con)
                                    {
                                        die("Connection failed");
                                    }
                                    else
                                    {
                                        if(isset($_GET["options"]) && $_GET["options"] != '') {
                                    $options=($_GET["options"]);
                                    $search=($_GET["search"]);
                                    $query = "SELECT aID,name,birthDate,deathDate,commission,street,city,stateAb,zipcode FROM artist 
                                    WHERE $options = '$search'";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $row)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $row['aID']; ?></td>
                                                <td><?= $row['name']; ?></td>
                                                <td><?= $row['birthDate']; ?></td>
                                                <td><?= $row['deathDate']; ?></td>
                                                <td><?= $row['commission']; ?></td>
                                                <td><?= $row['street']; ?></td>
                                                <td><?= $row['city']; ?></td>
                                                <td><?= $row['stateAb']; ?></td>
                                                <td><?= $row['zipcode']; ?></td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        ?>
                                            <tr>
                                                <td colspan="4">No Record Found</td>
                                            </tr>
                                        <?php
                                    }
                                    } else {
                                        ?>
                                            <tr>
                                                <td colspan="4">Please select an option</td>
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
    </div>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>