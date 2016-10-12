<?php

$fileName = dirname(dirname(__FILE__)) . "../../db/bth_nav.sqlite";

if (isset($_GET['page'])) {
    $argument = $_GET['page'];
    $argument = "%" . $argument . "%";

    $db = new PDO("sqlite:$fileName");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

    $stmt = $db->prepare('SELECT * FROM bth_nav WHERE name LIKE (:nameOwner) OR owner LIKE (:nameOwner);');
    $stmt->execute(array($argument));
    $res = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (empty($res) || empty($_GET['page'])) {
        echo "Inga träffar";
        header("Location: " . "http://" . $_SERVER['$location'] . $location);
    }
    ?>

    <div class = "formObjectSearch">

        <?php foreach ($res as $val) { ?>
                <div class = "infoTab">
                    <h2><?= $val['name']; ?></h2>
                    <p>Guidance: <?= $val['info']; ?></p>
                    <p>Whos sitting here?: <?= $val['owner']; ?>
                </div>
                <img class = "buildingImage" src = "img/<?= $val['image']; ?>"
                    <?php
               }
}
                    ?>
                </div>
