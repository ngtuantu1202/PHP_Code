<!-- Tạo form nhập vào 1 số tự nhiên n. Sử dụng hàm rand() (đưa ra số interger ngẫu nhiên) 
để phát sinh dữ liệu cho mảng có độ dài n. Sau đó viết hàm thực hiện các yêu cầu sau:
a- Hiển thị mảng phát sinh ngẫu nhiên có độ dài n.
b- Đếm xem có bao nhiêu thành phần trong mảng có giá trị là số chẵn.
c- Đếm xem có bao nhiêu thành phần trong mảng có giá trị là số nhỏ hơn 100.
d- Tính tổng của các thành phần trong mảng giá trị là số âm.
e- In ra vị trí của các thành phần trong mảng có chữ số kề cuối là 0.
f- Sắp xếp các số đó theo thứ tự tăng dần rồi lại in ra màn hình. -->
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xử lý mảng ngẫu nhiên</title>
</head>

<body>
    <?php
        if (isset($_POST['n'])) {
            $n = $_POST['n'];
        } else {
            $n = 0;
        }

        $ketqua = "";

        if (isset($_POST['hthi'])) {
            // Tạo mảng có n phần tử, các phần tử có giá trị [-100, 200]
            $arr = array();
            for ($i = 0; $i < $n; $i++) {
                $x = rand(-100, 200);
                $arr[$i] = $x;
            }

            // a- Hiển thị mảng phát sinh ngẫu nhiên
            $ketqua .= "Mảng phát sinh ngẫu nhiên là: " . implode(" ", $arr) . "&#13;&#10;";

            // b- Đếm số phần tử là số chẵn
            $dem_chan = 0;
            foreach ($arr as $v) {
                if ($v % 2 == 0) {
                    $dem_chan++;
                }
            }
            $ketqua .= "Có $dem_chan số chẵn trong mảng." . "&#13;&#10;";

            // c- Đếm số phần tử nhỏ hơn 100
            $dem_100 = 0;
            foreach ($arr as $v) {
                if ($v < 100) {
                    $dem_100++;
                }
            }
            $ketqua .= "Có $dem_100 số nhỏ hơn 100 trong mảng." . "&#13;&#10;";

            // d- Tính tổng các số âm trong mảng
            $tong_am = 0;
            foreach ($arr as $v) {
                if ($v < 0) {
                    $tong_am += $v;
                }
            }
            $ketqua .= "Tổng các số âm trong mảng là: $tong_am" . "&#13;&#10;";

            // e- In ra vị trí các số có chữ số kề cuối là 0
            $ketqua .= "Vị trí của các số có chữ số kề cuối là 0: ";
            $vitri = "";
            for ($i = 0; $i < count($arr); $i++) {
                if (abs($arr[$i]) >= 10) { // Chỉ xử lý nếu số có từ 2 chữ số trở lên
                    $soKeCuoi = abs($arr[$i] / 10 % 10);
                    if ($soKeCuoi == 0) {
                        $vitri .= "$i  ";
                    }
                }
            }            
            $ketqua .= $vitri . "&#13;&#10;";

            // f- Sắp xếp các số theo thứ tự tăng dần
            sort($arr);
            $ketqua .= "Mảng sau khi sắp xếp tăng dần: " . implode(" ", $arr) . "&#13;&#10;";
        }
    ?>

    <form action="" method="post">
        Nhập n: <input type="text" name="n" value="<?php echo $n ?>" />
        <input type="submit" name="hthi" value="Hiển thị" /><br>
        Kết quả: <br>
        <textarea cols="70" rows="10" name="ketqua"><?php echo $ketqua ?></textarea>
    </form>
</body>
</html>
