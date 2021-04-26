<?php
namespace App;

class BillManager
{
    protected \PDO $conn;

    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->connect();
    }

    function getAll(): array
    {
        $sql = "SELECT ord.orderNumber as 'MaDH', ord.orderDate 'NgayMua', ord.status as 'TrangThai', c.customerName as 'TenKH'  FROM `orders` ord
INNER JOIN customers c ON ord.customerNumber = c.customerNumber WHERE ord.status = 'In Process' LIMIT 1,15";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll();
    }
}