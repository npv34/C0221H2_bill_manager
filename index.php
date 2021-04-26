<?php


include_once "app/database/Database.php";
include_once "app/src/BillManager.php";
//require './vendor/autoload.php';
use App\BillManager;

$billManager = new BillManager();
$bills = $billManager->getAll();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="bill-list">
        <h2>Order Manager</h2>
        <form action="" method="get">
            Chon trang thai
            <select name="status" id="">
                <option value="Shipped">Shipped</option>
                <option value="Canceled">Canceled</option>
                <option value="In Process">In Process</option>
            </select>
            <button type="submit">Xem</button>
        </form>

        <table border="1" class="table-bill-list">
            <tr>
                <th>STT</th>
                <th>Oder number</th>
                <th>Customer number</th>
                <th>Oder date</th>
                <th>Oder status</th>
            </tr>
            <?php foreach ($bills as $key => $bill): ?>
            <tr>
                <td><?php echo $key + 1 ?></td>
                <td><?php echo $bill['MaDH'] ?></td>
                <td><?php echo $bill['TenKH'] ?></td>
                <td><?php echo $bill['NgayMua'] ?></td>
                <td><?php echo $bill['TrangThai'] ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>
</body>
</html>