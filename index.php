<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Highlands Coffee - Thanh toán</title>
    <style>
        body { font-family: Arial; text-align: center; background: #f4f4f4; }
        .card { width: 300px; margin: 50px auto; padding: 20px; background: white; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        button { background: #b22222; color: white; padding: 10px 20px; border: none; cursor: pointer; }
    </style>
</head>
<body>
    <div class="card">
        <img src="https://upload.wikimedia.org/wikipedia/vi/thumb/d/d1/Highlands_Coffee_logo.svg/1200px-Highlands_Coffee_logo.svg.png" width="100">
        <h2>Thanh toán Cafe</h2>
        <p>Giá tiền: 45.000 VNĐ</p>
        <form method="POST">
            <input type="text" name="customer" placeholder="Tên của bạn" required><br><br>
            <button type="submit" name="pay">Xác nhận Thanh toán</button>
        </form>

        <?php
        if(isset($_POST['pay'])){
            $name = $_POST['customer'];
            $sql = "INSERT INTO orders (customer_name, amount) VALUES ('$name', 45000)";
            if(mysqli_query($conn, $sql)) {
                echo "<p style='color:green;'>Thanh toán thành công!</p>";
            }
        }
        ?>
    </div>
</body>
</html>