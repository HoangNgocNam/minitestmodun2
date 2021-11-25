<?php
include_once "PeopleManage.php";
$people = new PeopleManage();
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
<body>
<form method="post">
    <a href="index.php">Quay lại trang chủ</a>
    <label><input type="text" name="name" class="form-control" placeholder="Nhập tên"></label>
    <button type="submit">Search</button>
</form>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $people->searchName($_REQUEST);
}
?>
