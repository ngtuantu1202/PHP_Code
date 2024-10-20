<!DOCTYPE html>
<html lang="vi">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính lương thưởng</title>

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

        form {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 4px;
            border: 1px solid #ddd;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <h1>Tính lương, điểm thưởng</h1>

    <?php
    // Lớp Người (abstract)
    abstract class Nguoi {
        protected $hoTen, $diaChi, $gioiTinh;

        public function __construct($hoTen, $diaChi, $gioiTinh) {
            $this->hoTen = $hoTen;
            $this->diaChi = $diaChi;
            $this->gioiTinh = $gioiTinh;
        }

        public function getThongTin() {
            return "Họ tên: {$this->hoTen}, Địa chỉ: {$this->diaChi}, Giới tính: {$this->gioiTinh}";
        }

        abstract public function tinhDTorLuong(); // Abstract method
    }

    // Lớp SinhVien kế thừa từ Nguoi
    class SinhVien extends Nguoi 
    {
        private $nganhHoc;

        public function __construct($hoTen, $diaChi, $gioiTinh, $nganhHoc) {
            parent::__construct($hoTen, $diaChi, $gioiTinh);
            $this->nganhHoc = $nganhHoc;
        }

        public function tinhDTorLuong() {
            switch (strtolower($this->nganhHoc)) {
                case "cntt":
                    return 1;
                case "kinh te":
                    return 1.5;
                default:
                    return 0;
            }
        }

        public function getThongTin() {
            return parent::getThongTin() . ", Ngành học: {$this->nganhHoc}, Điểm thưởng: " . $this->tinhDTorLuong();
        }
    }

    // Lớp GiangVien kế thừa từ Nguoi
    class GiangVien extends Nguoi 
    {
        private $trinhDo;
        const LUONG_CO_BAN = 1500000;

        public function __construct($hoTen, $diaChi, $gioiTinh, $trinhDo) {
            parent::__construct($hoTen, $diaChi, $gioiTinh);
            $this->trinhDo = $trinhDo;
        }

        public function tinhDTorLuong() {
            switch (strtolower($this->trinhDo)) {
                case "cu nhan":
                    return self::LUONG_CO_BAN * 2.34;
                case "thac si":
                    return self::LUONG_CO_BAN * 3.67;
                case "tien si":
                    return self::LUONG_CO_BAN * 5.66;
                default:
                    return 0;
            }
        }

        public function getThongTin() {
            return parent::getThongTin() . ", Trình độ: {$this->trinhDo}, Lương: " . number_format($this->tinhDTorLuong()) . " VND";
        }
    }

    // Xử lý form
    if ($_SERVER['REQUEST_METHOD'] == 'POST') 
    {
        $loai = $_POST['loai'];
        $hoTen = $_POST['hoTen'];
        $diaChi = $_POST['diaChi'];
        $gioiTinh = $_POST['gioiTinh'];

        if ($loai == 'sinhvien') {
            $nganhHoc = $_POST['nganhHoc'];
            $sinhVien = new SinhVien($hoTen, $diaChi, $gioiTinh, $nganhHoc);
            echo "<p>" . $sinhVien->getThongTin() . "</p>";
        } elseif ($loai == 'giangvien') {
            $trinhDo = $_POST['trinhDo'];
            $giangVien = new GiangVien($hoTen, $diaChi, $gioiTinh, $trinhDo);
            echo "<p>" . $giangVien->getThongTin() . "</p>";
        }
    }
    ?>

    <form method="POST" action="">
        <label for="loai">Chọn loại:</label>
        <select name="loai" id="loai" required>
            <option value="sinhvien">Sinh viên</option>
            <option value="giangvien">Giảng viên</option>
        </select>

        <label for="hoTen">Họ tên:</label>
        <input type="text" id="hoTen" name="hoTen" required>

        <label for="diaChi">Địa chỉ:</label>
        <input type="text" id="diaChi" name="diaChi" required>

        <label for="gioiTinh">Giới tính:</label>
        <select name="gioiTinh" id="gioiTinh" required>
            <option value="Nam">Nam</option>
            <option value="Nữ">Nữ</option>
        </select>

        <div id="nganhHocField" style="display:none;">
            <label for="nganhHoc">Ngành học:</label>
            <input type="text" id="nganhHoc" name="nganhHoc">
        </div>

        <div id="trinhDoField" style="display:none;">
            <label for="trinhDo">Trình độ:</label>
            <select name="trinhDo" id="trinhDo">
                <option value="cu nhan">Cử nhân</option>
                <option value="thac si">Thạc sĩ</option>
                <option value="tien si">Tiến sĩ</option>
            </select>
        </div>

        <input type="submit" value="Tính">
    </form>

    <script>
        const loaiSelect = document.getElementById('loai');
        const nganhHocField = document.getElementById('nganhHocField');
        const trinhDoField = document.getElementById('trinhDoField');

        loaiSelect.addEventListener('change', function() {
            if (this.value === 'sinhvien') {
                nganhHocField.style.display = 'block';
                trinhDoField.style.display = 'none';
            } else {
                nganhHocField.style.display = 'none';
                trinhDoField.style.display = 'block';
            }
        });
    </script>
</body>
</html>
