<!DOCTYPE html>
<html lang="vi">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính lương thưởng</title>
</head>

<body>
    <h1>Quản lí nhân viên</h1>

    <?php
    abstract class NhanVien {
        protected $hoTen, $gioiTinh, $ngayVaoLam, $hsLuong, $soCon, $ngaySinh;
        const luongCanBan = 500000; 
        
        public function __construct($hoTen, $gioiTinh, $ngayVaoLam, $hsLuong, $soCon, $ngaySinh) 
        {
            $this->hoTen = $hoTen;
            $this->gioiTinh = $gioiTinh;
            $this->ngayVaoLam = $ngayVaoLam;
            $this->hsLuong = $hsLuong;
            $this->soCon = $soCon;
            $this->ngaySinh = $ngaySinh;
        }
        
        protected function soNamLamViec()
        {
            $namHienTai = date('Y');
            $namVaoLam = date('Y', strtotime($this->ngayVaoLam));
            return $namHienTai - $namVaoLam;
        }
        
        public function tinhTienThuong()
        {
            return $this->soNamLamViec() * 1000000;
        }

        abstract public function tinhTienLuong();
        abstract public function tinhTroCap();
    }
    
    class NhanVienVanPhong extends NhanVien
    {
        private $soNgayVang;
        const dinhMucVang = 3 ;
        const donGiaPhat = 50000;

        public function __construct($hoTen, $gioiTinh, $ngayVaoLam, $hsLuong, $soCon, $soNgayVang, $ngaySinh) 
        {
            parent::__construct($hoTen, $gioiTinh, $ngayVaoLam, $hsLuong, $soCon, $ngaySinh);
            $this->soNgayVang = $soNgayVang;
        }

        public function tinhTienPhat() 
        {
            if ($this->soNgayVang > self::dinhMucVang) {
                return ($this->soNgayVang - self::dinhMucVang) * self::donGiaPhat;
            }
            return 0;
        }

        public function tinhTroCap() 
        {
            if (strtolower($this->gioiTinh) == 'Nữ') {
                return 200000 * $this->soCon * 1.5;
            }
            return 200000 * $this->soCon;
        }

        public function tinhTienLuong() 
        {
            return self::luongCanBan * $this->hsLuong - $this->tinhTienPhat();
        }
    }

    class NhanVienSX extends NhanVien
    {
        private $soSP;
        const dinhMucSP = 5;
        const donGiaSP = 20000;

        public function __construct($hoTen, $gioiTinh, $ngayVaoLam, $hsLuong, $soCon, $soSP, $ngaySinh) 
        {
            parent::__construct($hoTen, $gioiTinh, $ngayVaoLam, $hsLuong, $soCon, $ngaySinh);
            $this->soSP = $soSP;
        }

        public function tinhTienThuong() 
        {
            if ($this->soSP > self::dinhMucSP) {
                return ($this->soSP - self::dinhMucSP) * self::donGiaSP - 120000;
            }
            return 0;
        }

        public function tinhTroCap() 
        {
            return $this->soCon * 120000;
        }

        public function tinhTienLuong() 
        {
            return self::donGiaSP * $this->soSP;
        }
    }

    // Xử lý form khi có dữ liệu
    $ngaySinh = ''; // Khởi tạo biến này để tránh lỗi nếu không có dữ liệu
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $hoTen = $_POST['hoTen'];
        $gioiTinh = $_POST['gioiTinh'];
        $ngayVaoLam = $_POST['ngayVaoLam'];
        $hsLuong = $_POST['hsLuong'];
        $soCon = $_POST['soCon'];
        $loaiNV = $_POST['loaiNV'];
        $ngaySinh = $_POST['ngaySinh']; // Đảm bảo biến này được khởi tạo

        if ($loaiNV == 'vanphong') {
            $soNgayVang = $_POST['soNgayVang'];
            $nv = new NhanVienVanPhong($hoTen, $gioiTinh, $ngayVaoLam, $hsLuong, $soCon, $soNgayVang, $ngaySinh);
            $tienLuong = $nv->tinhTienLuong();
            $troCap = $nv->tinhTroCap();
            $tienThuong = $nv->tinhTienThuong();
            $tienPhat = $nv->tinhTienPhat();
        } else {
            $soSP = $_POST['soSP'];
            $nv = new NhanVienSX($hoTen, $gioiTinh, $ngayVaoLam, $hsLuong, $soCon, $soSP, $ngaySinh);
            $tienLuong = $nv->tinhTienLuong();
            $troCap = $nv->tinhTroCap();
            $tienThuong = $nv->tinhTienThuong();
            $tienPhat = 0; // Nhân viên sản xuất không có tiền phạt
        }

        $tongCong = $tienLuong + $troCap + $tienThuong - $tienPhat;
    }
    ?>

    <form method="POST">
        <div id="col1">
            <label>Họ và tên:</label>
            <input type="text" name="hoTen" required value="<?php echo isset($hoTen) ? $hoTen : ''; ?>">

            <label>Số con:</label>
            <input type="number" name="soCon" min="0" required value="<?php echo isset($soCon) ? $soCon : ''; ?>">
        </div>

        <div id="col2">
            <label>Ngày sinh:</label>
            <input type="date" name="ngaySinh" required value="<?php echo isset($ngaySinh) ? $ngaySinh : ''; ?>">
            
            <label>Ngày vào làm:</label>
            <input type="date" name="ngayVaoLam" required value="<?php echo isset($ngayVaoLam) ? $ngayVaoLam : ''; ?>">
        </div>

        <div id="col3">
            <label>Giới tính:</label>
            <input type="radio" name="gioiTinh" value="Nam" <?php echo (isset($gioiTinh) && $gioiTinh == 'Nam') ? 'checked' : ''; ?>> Nam
            <input type="radio" name="gioiTinh" value="Nữ" <?php echo (isset($gioiTinh) && $gioiTinh == 'Nữ') ? 'checked' : ''; ?>> Nữ
        
            <label>Hệ số lương:</label>
            <input type="number" name="hsLuong" step="0.1" required value="<?php echo isset($hsLuong) ? $hsLuong : ''; ?>">
        </div>

        <div id="col4">
            <label>Loại nhân viên:</label>
            <input type="radio" name="loaiNV" value="vanphong" <?php echo (isset($loaiNV) && $loaiNV == 'vanphong') ? 'checked' : ''; ?>> Văn phòng
            <input type="radio" name="loaiNV" value="sanxuat" <?php echo (isset($loaiNV) && $loaiNV == 'sanxuat') ? 'checked' : ''; ?>> Sản xuất
        </div>

        <div id="col5">
            <label>Số ngày vắng:</label>
            <input type="number" name="soNgayVang" min="0" value="<?php echo isset($soNgayVang) ? $soNgayVang : ''; ?>">

            <label>Số sản phẩm:</label>
            <input type="number" name="soSP" min="0" value="<?php echo isset($soSP) ? $soSP : ''; ?>">
        </div>

        <button type="submit" class="btn-tinh">Tính lương</button>

        <div id="col6">
            <label>Tiền lương:</label>
            <input type="number" name="tienLuong" min="0" value="<?php echo isset($tienLuong) ? $tienLuong : ''; ?>" disabled>

            <label>Trợ cấp:</label>
            <input type="number" name="troCap" min="0" value="<?php echo isset($troCap) ? $troCap : ''; ?>" disabled>
        </div>

        <div id="col7">
            <label>Tiền thưởng:</label>
            <input type="number" name="tienThuong" min="0" value="<?php echo isset($tienThuong) ? $tienThuong : ''; ?>" disabled>

            <label>Tiền phạt:</label>
            <input type="number" name="tienPhat" min="0" value="<?php echo isset($tienPhat) ? $tienPhat : ''; ?>" disabled>
        </div>

        <div id="col8">
            <label>Thực lĩnh:</label>
            <input type="number" name="tongCong" min="0" value="<?php echo isset($tongCong) ? $tongCong : ''; ?>" disabled>
        </div>
    </form>
</body>
</html>
