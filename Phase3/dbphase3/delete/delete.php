<!--TEAM MEMBERS: ASHWANTHIKA UMASANKAR – 1001854976
                                 PRATHIBHA LAKKIDI- 1001962876-->
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/darkly/bootstrap.min.css" >

    <title>DELETE DATA</title>
  </head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <?php 
                    if(isset($_SESSION['status']))
                    {
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <?php echo $_SESSION['status']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                         unset($_SESSION['status']);
                    }
                ?>

                <div class="card mt-4">
                    <div class="card-header">
                        <h4>PLEASE ENTER THE ID TO DELETE</h4>
                    </div>
                    <div class="card-body">
                        <form action="deletecontroller.php" method="POST">
                                    <div class="form-group mb-4">
                                        <label for="">ID</label>
                                        <input type="text" name="aID" placeholder= "Enter ID to delete" class="form-control"style= "background-color:#FCF5D8;" >
                                    </div>
                                    
                                    <div class="form-group mb-4">
                                        <button type="submit" name="delete" class="btn btn-primary">DELETE DATA</button>
                                    </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

  </body>
</html>