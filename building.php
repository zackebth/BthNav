<?php

$title = "Building | BMO";
include("incl/header.php");
?>

<?php
$pageId = "building";
$pageStyle = null;

$path = "incl/files";
$file = "search.php";
$pageTitle = "";


?>

<div class = "objectContents">
    <form class = "search" name = "search" action = "building.php" method = "get">
        <input class = "myInp" type = "text" placeholder="Search.."name = "page">
        <input class = "mySub" type = "submit" value = "search">
    </form>

    <div style="float:left;" class = "backButton">
        <a href = "index.php">Back</a>
    </div>

    <div class = "display" style = "width: 82%;">
        <?php include("$path/$file"); ?>
    </div>
</div>
<?php include("incl/footer.php");?>
