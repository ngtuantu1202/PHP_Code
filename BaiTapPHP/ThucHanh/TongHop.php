<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tổng hợp</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
            background-color: #f4f4f4;
        }

        h1 {
            color: #333;
        }

        .container {
            background-color: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: inline-block;
        }

        .result {
            text-align: left;
            margin-top: 20px;
        }

        .result p {
            background-color: #e7f4fc;
            padding: 10px;
            border-radius: 5px;
            margin: 5px 0;
            color: #333;
        }

        .highlight {
            font-weight: bold;
            color: #2a7ae2;
        }
    </style>
</head>

<body>
    <h1>Tổng hợp Bài tập PHP</h1>

    <div class="container">
        <?php
        echo "<div class='result'><p class='highlight'>
        a> Kiểm tra n là số dương, nếu không thì thay n thành số đối của nó:</p>";
        
        $n = rand(-50, 50);
        echo "<p>Giá trị nhận được là: <span class='highlight'>$n</span></p>";

        if ($n < 0) {
            $n = -$n;
            echo "<p>Giá trị âm đã được thay bằng số đối: <span class='highlight'>$n</span></p>";
        } else {
            echo "<p><span class='highlight'>$n</span> là số dương</p>";
        }

        echo "<p class='highlight'>
        b> Tạo mảng có $n phần tử, các phần tử là giá trị ngẫu nhiên từ -100 đến 100:</p>";

        $a = array();
        for ($i = 0; $i < $n; $i++) {  
            $a[$i] = rand(-100, 100);
        }

        echo "<p>Mảng được tạo là: <span class='highlight'>[" .  implode(", ", $a) . "]</span></p>";

        echo "<p class='highlight'>
        c> Tổng các phần tử ở vị trí lẻ:</p>";

        $sum = 0;
        for ($i = 0; $i < $n; $i++) {
            if (($i + 1) % 2 != 0) {
                $sum += $a[$i];
            }
        }
        echo "<p>Tổng các phần tử ở vị trí lẻ là: <span class='highlight'>$sum</span></p></div>";
        ?>
    </div>
</body>

</html>
