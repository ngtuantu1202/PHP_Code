<title>Tính diện tích HCN</title>
<style>
    body { /* Căn giữa trang  */
            font-family: 'Times New Roman', serif, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form { /* Màu */
            background-color: yellowgreen;
            border: 2px solid purple;
            padding: 40px;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }
</style>


<div class="form">
    <h3>DIỆN TÍCH HÌNH CHỮ NHẬT</h3>

    <form method="POST" action="">
        <label for="length">Chiều dài:</label>
        <input type="number" id="length" name="length" required value="<?= 
        isset($_POST['length']) ? $_POST['length'] : '' ?>"><br><br>

        <label for="width">Chiều rộng:</label>
        <input type="number" id="width" name="width" required value="<?= 
        isset($_POST['width']) ? $_POST['width'] : '' ?>"><br><br>

        <label for="area">Diện tích:</label>
        <input type="number" id="area" name="area" disabled="disabled" readonly value="<?php 
            if (isset($_POST['length']) && isset($_POST['width'])) {
                echo $_POST['length'] * $_POST['width'];
            } else {
                echo 0;
            }
        ?>"><br><br>

        <button type="submit">Tính</button>
    </form>
</div>

