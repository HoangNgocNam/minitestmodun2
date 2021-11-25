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
<body class="container">
<form method="post">

<table class="table-striped table-hover">
    <h2>Thêm người vào danh sach</h2>
    <tr>
        <td>
            <input type="text" name="name" class="form-control" placeholder="Nhập tên">
        </td>
    </tr>
    <tr>
        <td>
            <input type="text" name="age" class="form-control" placeholder="Nhập tuổi">
        </td>
    </tr>
    <tr>
        <td>
            <button type="submit">Add</button>
        </td>
    </tr>
</table>
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $people->addData($_REQUEST);
    header("location: index.php");
}
?>