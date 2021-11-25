<?php
include_once "People.php";
include_once "PeopleManage.php";
$people = new PeopleManage();
$people = $people->loadData();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="container">
<table class="table table-striped table-hover">
    <h2> Hiển thị danh sách</h2>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Age</th>
        <th>
            <a href="add.php">Add</a>
            <a href="search.php">Search</a>
        </th>
    </tr>
    <?php foreach ($peoples as $key => $people):?>
        <tr>
            <td><?php  echo $key + 1 ?></td>
            <td><?php  echo $people->getName() ?></td>
            <td><?php  echo $people->getAge() ?></td>
        </tr>
    <?php endforeach; ?>

</table>
</body>
</html>
