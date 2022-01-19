<?php
include 'inc/db.php';

$res = mysqli_query($db, "SELECT * FROM `catalog` ORDER BY `id` DESC LIMIT 10");

$articles = array();
while($row = mysqli_fetch_assoc($res))
{
    $articles[] = $row;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset = "utf-8" />
	<title>Все статьи</title>

<script type="text/javascript" src="js/jquery-3.6.0.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>

</head>

<body>

<div style="width: 200px;" id="articles">

    <?php foreach ($articles as $article): ?>
        <p>Наименование: <b><?php echo $article['name']; ?></b><br />
        Стоимость: <?php echo $article['price']; ?>$<br />
		Количество: <?php echo $article['count']; ?>шт.</p>
    <?php endforeach; ?>

</div>

</body>
</html>