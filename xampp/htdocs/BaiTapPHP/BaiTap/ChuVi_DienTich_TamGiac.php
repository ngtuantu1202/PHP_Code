<title>Tính chu vi, diện tích tam giác</title>
<style>
    body { /* Căn giữa trang  */
            font-family: 'Times New Roman', serif, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
</style>
<div class="form">
    <h3>Chu vi và diện tích hình tam giác</h3>
    <form method="POST" action="">
        <!-- Nhập 3 cạnh -->
        <label for="canh_a">Cạnh a:</label>
        <input type="number" id="canh_a" name="canh_a" required value="<?= isset($_POST['canh_a']) ? 
        $_POST['canh_a'] : '' ?>"><br><br>

        <label for="canh_b">Cạnh b:</label>
        <input type="number" id="canh_b" name="canh_b" required value="<?= isset($_POST['canh_b']) ? 
        $_POST['canh_b'] : '' ?>"><br><br>

        <label for="canh_c">Cạnh c:</label>
        <input type="number" id="canh_c" name="canh_c" required value="<?= isset($_POST['canh_c']) ? 
        $_POST['canh_c'] : '' ?>"><br><br>

        <!-- Chu vi -->
        <label for="chu_vi">Chu vi:</label>
        <input type="text" id="chu_vi" disabled="disabled" name="chu_vi" readonly value="<?php 
            if (isset($_POST['canh_a']) && isset($_POST['canh_b']) && isset($_POST['canh_c'])) {
                $a = (float)$_POST['canh_a'];
                $b = (float)$_POST['canh_b'];
                $c = (float)$_POST['canh_c'];
                // Kiểm tra đk
                if ($a > 0 && $b > 0 && $c > 0 && ($a + $b > $c) && ($a + $c > $b) && ($b + $c > $a)) {
                    // Tính chu vi
                    echo $a + $b + $c;
                } else {
                    echo "Tam giác không hợp lệ";
                }
            }
        ?>"><br><br>

        <!-- Diện tích -->
        <label for="dien_tich">Diện tích:</label>
        <input type="text" id="dien_tich" disabled="disabled" name="dien_tich" readonly value="<?php 
            if (isset($_POST['canh_a']) && isset($_POST['canh_b']) && isset($_POST['canh_c'])) {
                $a = (float)$_POST['canh_a'];
                $b = (float)$_POST['canh_b'];
                $c = (float)$_POST['canh_c'];
                // Kiểm tra đk
                if ($a > 0 && $b > 0 && $c > 0 && ($a + $b > $c) && ($a + $c > $b) && ($b + $c > $a)) {
                    $p = ($a + $b + $c) / 2;
                    $dien_tich = sqrt($p * ($p - $a) * ($p - $b) * ($p - $c));
                    $kq = round($dien_tich *100)/ 100; //Làm tròn 2 số sau dấu 
                    echo $kq;
                } else {
                    echo "Tam giác không hợp lệ";
                }
            }
        ?>"><br><br>

        <button type="submit">Tính</button>
    </form>
</div>

