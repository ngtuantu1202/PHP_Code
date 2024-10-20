<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma Trận</title>
    <style>
        body {
            font-family: Arial, sans-serif; 
            background-color: #f4f4f4; 
            margin: 0; 
            padding: 20px; 
        }

        h1 {
            text-align: center;
            color: black;
        }

        table {
            width: 50%;
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            background-color: white;
        }

        th, td {
            border: 1px solid #007BFF;
            padding: 15px;
            text-align: center;
            transition: background-color 0.3s;
        }

        th {
            background-color: #007BFF;
            color: white;
        }

        td {
            background-color: #e7f4fc;
        }

        td:hover {
            background-color: #d0e4f0;
        }
    </style>
</head>

<body>
    <h1>MA TRẬN</h1>
    <?php
        // Tạo kích thước ngẫu nhiên cho ma trận
        $m = rand(2, 5);
        $n = rand(2, 5);
        echo "<h2>Giá trị được tạo ra là: m = $m, n = $n<br></h2>";

        // Câu a: Tạo ma trận mxn với các giá trị từ -100 đến 100
        $a = []; // Mảng lưu trữ ma trận
        echo "<h3>a. Ma trận ban đầu</h3>";
        echo "<table>";
        for ($i = 0; $i < $m; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $n; $j++) {
                // Tạo giá trị ngẫu nhiên từ -100 đến 100
                $kq = rand(-100, 100);
                $a[$i][$j] = $kq; // Lưu giá trị vào ma trận
                echo "<td>$kq</td>";
            }
            echo "</tr>";
        }
        echo "</table>";

        // Câu b: Thay thế các phần tử âm thành 0
        echo "<h3>b. Ma trận sau khi thay thế giá trị âm thành 0</h3>";
        echo "<table>";
        for ($i = 0; $i < $m; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $n; $j++) {
                // Lấy giá trị từ ma trận đã tạo ở câu a
                $kq = $a[$i][$j];
                // Thay thế giá trị âm thành 0
                if ($kq < 0) {
                    $kq = 0;
                }
                echo "<td>$kq</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>

</html>
