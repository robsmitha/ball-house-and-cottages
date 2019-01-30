<?php
include_once ("classes.php");
$SecurityUserId = SessionManager::getSecurityUserId();
if($SecurityUserId == 0){
    header("location: login.php");
}

$page_list = Page::loadall();

?>
<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php include_once ("head.php")?>

<body>
<!-- Navigation -->
<?php include_once ("navbar.php")?>


<div class="container py-4">
    <h1 class="font-great-vibes text-center">Administrator Home</h1>
    <div class="row">
        <div class="col-md offset-md-10">
            <a href="create-page.php" class="btn btn-primary btn-lg btn-block">
                Create Page
            </a>
        </div>
        <!--<div class="col-md">
            <a href="create-contentgroup.php" class="btn btn-primary btn-lg btn-block">
                Create Group
            </a>
        </div>-->
    </div>
    <div class="row">
        <div class="col-md">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">File Name</th>
                        <th scope="col">Description</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                if(isset($page_list)){
                    foreach ($page_list as $page){
                        ?>
                        <tr>
                            <th scope="row"><?php echo $page->getId() ?></th>
                            <td><?php echo $page->getName() ?></td>
                            <td><?php echo $page->getFileName() ?></td>
                            <td><?php echo $page->getDescription() ?></td>
                            <td>
                                <a href="create-page.php?cmd=edit&id=<?php echo $page->getId() ?>">Edit Page</a>
                            </td>
                            <td>
                                <a href="create-contentgroup.php?pid=<?php echo $page->getId() ?>">Create Group</a>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>

                <?php
                }else{
                    echo "Nothing to display!";
                }
                ?>

                </tbody>
            </table>
        </div>

    </div>
</div>


<?php include_once ("footer.php")?>


</body>
</html>
