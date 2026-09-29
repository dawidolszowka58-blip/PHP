<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Owoce</title>
</head>
<body>

<?php
$owoce = ["banan", "arbuz", "jabłko", "truskawka"];
?>

<ol>
    <?php foreach ($owoce as $owoc): ?>
        <li><?php echo $owoc; ?></li>
    <?php endforeach; ?>
</ol>

</body>
</html>