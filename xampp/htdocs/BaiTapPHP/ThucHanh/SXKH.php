<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết Quả Xổ Số Khánh Hòa</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #4CAF50;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #333;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        .result {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .number-box {
            border: 1px solid #333;
            padding: 5px;
            margin: 2px;
            flex: 1 0 30%; /* Responsive layout */
        }
        .highlight {
            background-color: red; /* Tô màu đỏ cho số */
            color: white; /* Chữ màu trắng */
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Kết Quả Xổ Số Khánh Hòa</h1>
    <p><strong>Ngày:</strong> <?php echo date('d/m/Y'); ?></p>

    <table>
        <tr>
            <th>Giải</th>
            <th>Kết Quả</th>
        </tr>
        <?php
        // Mảng giải thưởng với số lượng kết quả tương ứng
        $prizes = [
            "Giải Tám" => array(rand(10, 99)),
            "Giải Bảy" => array(rand(100, 999)),
            "Giải Sáu" => array(rand(1000, 9999), rand(1000, 9999), rand(1000, 9999)),
            "Giải Năm" => array(rand(1000, 9999)),
            "Giải Tư" => array(rand(10000, 99999), rand(10000, 99999), rand(10000, 99999), rand(10000, 99999), rand(10000, 99999), rand(10000, 99999), rand(10000, 99999)),
            "Giải Ba" => array(rand(10000, 99999), rand(10000, 99999)),
            "Giải Nhì" => array(rand(10000, 99999)),
            "Giải Nhất" => array(rand(10000, 99999)),
            "Giải Đặc Biệt" => array(rand(100000, 999999))
        ];

        // Hiển thị kết quả xổ số
        foreach ($prizes as $title => $numbers) {
            echo "<tr><td>$title</td><td class='result'>";
            foreach ($numbers as $number) {
                // Tô màu đỏ cho số trong Giải Tám và Giải Đặc Biệt
                $highlight = ($title === "Giải Tám" || $title === "Giải Đặc Biệt") ? "highlight" : "";
                echo "<div class='number-box $highlight'>$number</div>";
            }
            echo "</td></tr>";
        }
        ?>
    </table>
</div>

</body>
</html>