<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ngày tháng năm hiện tại</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .date-display {
            text-align: center;
            font-size: 24px;
            color: #007BFF;
        }
    </style>
</head>

<body>
    <h1>Ngày Tháng Năm Hiện Tại</h1>
    <div class="date-display">
        <?php
        // Thiết lập múi giờ
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        //Danh sách timezone
        // $timezone = DateTimeZone::listIdentifiers() ;
        // foreach ($timezone as $item)
        // {
        //     echo $item . '<br/>';
        // }

        $ngay = date('d');
        $thang = date('m');
        $nam = date('Y');

        $thang_vietnam = [
            "01" => "Tháng 1",
            "02" => "Tháng 2",
            "03" => "Tháng 3",
            "04" => "Tháng 4",
            "05" => "Tháng 5",                
            "06" => "Tháng 6",
            "07" => "Tháng 7",
            "08" => "Tháng 8",
            "09" => "Tháng 9",
            "10" => "Tháng 10",               
            "11" => "Tháng 11",
            "12" => "Tháng 12"
        ];

        // Hiển thị ngày tháng năm hiện tại
        echo "Hôm nay là: $ngay " . $thang_vietnam[$thang] . " năm $nam";
        ?>
    </div>
</body>

</html>
