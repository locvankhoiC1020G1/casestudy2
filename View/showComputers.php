<?php
include_once "../src/Model/ComputerManager.php";

$dbconnect = new \src\Model\ComputerManager();
$computers = $dbconnect->getAllComputers();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    table,td,tr{
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>
<body>
<table>
    <tr>
        <td>STT</td>
        <td>name</td>
        <td>image</td>
        <td>des</td>
    </tr>

    <?php foreach ($computers as $computer){ ?>
        <td><?php echo $computer['id'] ?></td>
        <td><?php echo $computer['name'] ?></td>
    <td><?php echo $computer['image'] ?></td>
    <td> <?php echo $computer['des'] ?></td>
    <?php }?>
</table>
</body>
</html>
