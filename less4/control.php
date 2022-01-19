<?php
include 'inc/db.php';

$startFrom = $_POST['startFromm'];

$sql = "SELECT * FROM catalog ORDER BY id DESC LIMIT $startFrom, 10";
$res = mysqli_query($db, $sql);

$articles = array();
while ($row = mysqli_fetch_assoc($res))
{
    $articles[] = $row;
}

echo json_encode($articles);
?>
