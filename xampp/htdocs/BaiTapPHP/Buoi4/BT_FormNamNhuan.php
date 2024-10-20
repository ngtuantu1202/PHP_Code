<!DOCTYPE html>
<html lang="vi">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form tìm năm nhuận</title>

    <style>
        body {
            font-family: Arial, sans-serif; /* Kiểu chữ */
            background-color: #f4f4f4; /* Màu nền trang */
            margin: 0; /* Loại bỏ khoảng cách mặc định */
            padding: 20px; /* Đặt khoảng cách bên trong */
        }

        h2 {
            text-align: center; /* Căn giữa tiêu đề */
            color: blueviolet; /* Màu chữ tiêu đề */
        }

        h1 {
            text-align: center; /* Căn giữa tiêu đề */
            color: white; /* Màu chữ tiêu đề */
            background-color: blue;
        }

        table {
            margin: 10px auto;
            border-collapse: collapse;
        }

        button {
            padding: 5px 10px;
            font-size: 18px;
            cursor: pointer;
            color: red;
            background-color: greenyellow;
        }

        .result {
            text-align: center; /* Căn giữa kết quả */
            color: darkgreen; /* Màu chữ kết quả */
            font-weight: bold; /* Đậm kết quả */
        }
    </style>
</head>

<body>
    <h2>Nhập vào năm lớn hơn năm 2000:</h2>

    <h1>TÌM NĂM NHUẬN</h1>

    <form name="form_nam_nhuan" method="POST" action="">
        <table>
            <tr>
                <td><label for="nam_nhuan">Năm:</label></td>
                <td><input type="number" id="nam_nhuan" name="nam_nhuan" 
                    value="<?php echo isset($_POST['nam_nhuan']) ? $_POST['nam_nhuan'] : ''; ?>" 
                    required></td>
            </tr>
        </table>

        <table>
            <tr>
                <td><button type="submit">Tìm năm nhuận</button></td>
            </tr>
        </table>
    </form>

    <?php
    
    function nam_nhuan($nam) {
        if ($nam % 400 == 0 || ($nam % 4 == 0 && $nam % 100 != 0)) {
            return 1; 
        }
        return 0; 
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nam = (int)$_POST["nam_nhuan"];
        $skq = ""; 
        foreach (range(2000, $nam) as $year) {
            if (nam_nhuan($year)) {
                $skq .= $year . " ";
            }
        }

        if ($skq != "") {
            $skq = "Các năm nhuận từ năm 2000 đến $nam là: " . $skq; 
        } else {
            $skq = "Không có năm nhuận"; 
        }

        echo "<div class='result'>$skq</div>";
    }
    ?>
</body>

