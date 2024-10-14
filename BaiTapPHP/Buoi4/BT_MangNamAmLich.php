<!DOCTYPE html>
<html lang="vi">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chuyển đổi năm âm kịch</title>

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

        table {
            margin: 10px auto;
            border-collapse: collapse;
        }

        td {
            padding: 10px;
        }

        input[type="number"], input[type="text"] {
            padding: 5px;
            width: 200px;
            text-align: center;
        }

        input[type="text"] {
            background-color: #ffcc99;
            border: none;
            font-weight: bold;
            color: red;
        }

        button {
            padding: 5px 10px;
            font-size: 18px;
            cursor: pointer;
        }

        img {
            display: block;
            margin: 20px auto;
            width: 300px;
            border-radius: 10px;
        }

        .horizontal-layout {
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>

</head>

<body>
    <h1>TÍNH NĂM ÂM LỊCH</h1>

    <form name="form_am_lich" method="POST" action="">
        <table>
            <tr>
                <td><label for="nam_duong_lich">Năm dương lịch:</label></td>
                <td><input type="number" id="nam_duong_lich" name="nam_duong_lich" 
                value="<?php echo isset($_POST['nam_duong_lich']) ? $_POST['nam_duong_lich'] : ''; ?>" 
                required></td>
            </tr>
        </table>

        <table>
            <tr>
                <td><button type="submit">=></button></td>
            </tr>
        </table>

        <table>
            <tr>
                <td><label for="nam_am_lich">Năm âm lịch:</label></td>
                <td><input type="text" id="nam_am_lich" name="nam_am_lich" readonly 
                           value="<?php echo isset($nam_am_lich) ? $nam_am_lich : ''; ?>"></td>
            </tr>
        </table>
    </form>

    <div>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Lấy năm từ form
            $nam = (int)$_POST["nam_duong_lich"];

            // Mảng can, chi và hình ảnh
            $mang_can = ["Quý", "Giáp", "Át", "Bính", "Đinh", "Mậu", "Kỷ", "Canh", "Tân", "Nhâm"];
            $mang_chi = ["Hợi", "Tý", "Sửu", "Dần", "Mão", "Thìn", "Tỵ", "Ngọ", "Mùi", "Thân", "Dậu", "Tuất"];
            $mang_hinh = [
                "hoi.jpg", "ty.jpg", "suu.jpg", "dan.jpg", "mao.jpg", "thin.gif", 
                "ran.jpg", "ngo.jpg", "mui.jpg", "than.gif", "dau.jpg", "tuat.jpg"
            ];

            // Tính chỉ số của can, chi
            $snam = $nam - 3;
            $can = $snam % 10;
            $chi = $snam % 12;

            // Lấy tên can, chi và hình ảnh tương ứng
            $nam_am_lich = $mang_can[$can] . " " . $mang_chi[$chi];
            $hinh_anh = $mang_hinh[$chi];

            // Xuất kết quả ra textfield và hình ảnh
            echo "<script>document.getElementById('nam_am_lich').value = '$nam_am_lich';</script>";
            echo "<img src='images/$hinh_anh' alt='$nam_am_lich'>";
        }
        ?>
    </div>

</body>


    