<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Framework</title>
</head>
<body>
<?php
include_once '../app/postsBase.php';
foreach ($posts as $key => $value) {
    echo "<h3>{$key}</h3><p>{$value}</p>";
}
?>
</body>
</html>
