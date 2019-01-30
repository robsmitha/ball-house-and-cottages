<?php include "classes.php" ?>
<?php



if(SessionManager::getSecurityUserId() == 0){
    header("location: login.php");
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $returnVal = true;
    isset($_POST["name"]) && $_POST["name"] != "" ? $name = $_POST["name"] : $returnVal = false;
    isset($_POST["filename"]) && $_POST["filename"] != "" ? $filename = $_POST["filename"] : $returnVal = false;
    isset($_POST["description"]) && $_POST["description"] != "" ? $description = $_POST["description"] : $returnVal = false;

    if($returnVal){
        if(isset($_POST["btnEdit"]) && is_numeric($_POST["btnEdit"])) {
            //Editing the record
            $page = new Page($_POST["btnEdit"]);
            $page->setName($name);
            $page->setDescription($description);
            $page->setFileName($filename);
        }
        else{
            //Create new record
            $page = new Page(0,$name,$description,$filename);
        }

        $page->save();
        //call save to insert/update the db
        header("location: admin-home.php");
    }
    else{
        $validationMsg = "Please review your entries!";
    }
}
if($_SERVER["REQUEST_METHOD"] == "GET"){
    if(isset($_GET["id"])
        && is_numeric($_GET["id"])
        && $_GET["id"] > 0
        && isset($_GET["cmd"])
        && $_GET["cmd"] == "edit"){     //validate query string
        $page = new Page($_GET["id"]);
        if($page != null){
            //success, now use this obj to fill in the values for the form input fields in html below
        }
        else{   //null obj
            header("location: admin-home.php");
        }
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
        <div class="col-md-6 offset-md-3">
            <h1 class="font-great-vibes text-center"><?php if(isset($page)){ echo "Edit Page: ".$page->getName(); } else { echo "Create Page"; } ?> </h1>
            <form method="post">
                <div class="form-group">
                    <label class="font-oswald">Name <i class="fa fa-asterisk text-danger"></i></label>
                    <input class="form-control form-control-lg" id="name" name="name" type="text" placeholder="Page Name" value="<?php if(isset($page)) echo $page->getName() ?>">
                </div>
                <div class="form-group">
                    <label class="font-oswald">File Name <i class="fa fa-asterisk text-danger"></i></label>
                    <input class="form-control form-control-lg" id="filename" name="filename" type="text" placeholder="File Name" value="<?php if(isset($page)) echo $page->getFileName() ?>">
                </div>
                <div class="form-group">
                    <label class="font-oswald">Description <i class="fa fa-asterisk text-danger"></i></label>
                    <textarea class="form-control form-control-lg" id="description" name="description" rows="3" type="text" placeholder="Type page description"><?php if(isset($page)) echo $page->getDescription() ?></textarea>
                </div>
                <?php
                if(isset($page)){
                    ?>
                    <button type="submit" name="btnEdit" id="btnEdit" class="btn btn-primary btn-block btn-lg" value="<?php echo $page->getId() ?>">Edit Page</button>
                    <?php
                }
                else{
                    ?>
                    <button type="submit" class="btn btn-primary btn-block btn-lg">Create Page</button>
                    <?php
                }
                ?>

            </form>
            <div class="text-center">
                <a class="d-block small mt-3" href="admin-home.php">Cancel</a>
            </div>
        </div>
    </div>
</div>


<?php include_once ("footer.php")?>

</body>

</html>

