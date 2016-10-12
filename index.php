<?php
$title = "Campus | Bth Nav";
include("incl/header.php");
?>

<?php
$pageId = "building";
$pageStyle = null;

$path = "incl/files";
$file = "search.php";
$pageTitle = "";
?>
<main>
    <article>
        <section>
            <div class = "objectContents">

                <form class = "search" name = "search" action = "building.php" method = "get">
                    <input class = "myInp" type = "text" placeholder="Search.."name = "page">
                    <input class = "mySub" type = "submit" value = "search">
                </form>


                <article class = "display" style = "width: 82%;">
                    <?php include("$path/$file"); ?>
                </article>

                <!-- The overlay -->
                <div id="myNav" class="overlay">

                 <!-- Button to close the overlay navigation -->
                 <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

                 <!-- Overlay content -->
                 <div class="overlay-content">
                     <h1>Basic Info:</h1>
                     <p>Welcome to Bth Nav.</p>
                     <p>This application was created for you to guide around the school alot easier.</p>
                     You can simply search for the room you are looking for or if it's a person you looking for, simply search for the person.</p>
                     The goal with this application is that after using this you wont get lost and get in time for classes or to meetings.</p>
                     <p>Happy searching</p>
                 </div>

                </div>

                <!-- Use any element to open/show the overlay navigation menu -->
                <button class ="infoBtn" onclick="openNav()">Info/Help</button>
                <div class = "backgroundImage">
                    <img class = "backgroundImg" src="img/background.png" alt="background">
                </div>
            </div>
        </section>
    </article>
</main>
<?php include("incl/footer.php");?>
