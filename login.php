<?php
include_once ("classes.php");

$errorMessage = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    isset($_POST["username"]) && $_POST["username"] != "" ? $username = $_POST["username"] : $returnVal = false;
    isset($_POST["password"]) && $_POST["password"] != "" ? $password = $_POST["password"] : $returnVal = false;
    $success = Authentication::authLogin($username,$password);
    if ($success)
    {
        header("location: admin-home.php");
    }
    else
    {
        $validationMsg = "Incorrect username or password. Try again.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php include_once ("head.php")?>

<body>
<!-- Navigation -->
<?php include_once ("navbar.php")?>


<div class="container py-4">
    <?php if(isset($validationMsg)) { ?>
        <div class="alert alert-danger alert-dismissible fade show mx-auto mt-5" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <h4> <?php  echo $validationMsg; ?> </h4>
        </div>
    <?php } ?>
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <h1 class="font-great-vibes">Site Administrator Login</h1>
            <form method="post">
                <div class="form-group">
                    <label class="font-oswald" for="exampleInputEmail1">Username</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fa fa-user"></i>
                            </span>
                        </div>
                        <input class="form-control form-control-lg" id="username" name="username" aria-describedby="emailHelp" placeholder="Username">
                    </div>


                </div>
                <div class="form-group">
                    <label class="font-oswald" for="exampleInputPassword1">Password</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fa fa-lock"></i>
                            </span>
                        </div>
                        <input class="form-control form-control-lg" id="password" name="password" type="password" placeholder="Password">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
            </form>
        </div>
    </div>
</div>


<?php include_once ("footer.php")?>

</body>
</html>
