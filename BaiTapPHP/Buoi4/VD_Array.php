<?php 
    /////////////////////////////////////////////////
    echo "<h3>Tạo mảng gán giá trị:</h3>";
    $y=array('nva', 3=>'abc', 'x'=>5);
    var_dump($y); 
    $y[]=10;//
    echo "<br>";
    var_dump($y);
    $y['m']=20;//
    echo "<br>";
    var_dump($y);
    $y[3]=100;//
    echo "<br>";
    var_dump($y);
    /////////////////////////////////////////////////
    echo "<h3>Chạy lấy giá trị ko lấy key:</h3>";
    foreach($y as $gtri)
    {
        echo "Giá trị: $gtri<br>";
    }
    echo "<h3>Chạy lấy giá trị và lấy key:</h3>";
    foreach($y as $khoa)
    {
        echo "$khoa: $gtri<br>";
    }
    /////////////////////////////////////////////////
    echo "<h3>Tạo mảng theo vòng lặp:</h3>";
    $number=range(1,10,2); //from-to-step
    print_r($number);
    $n=$number;
    echo "<br>";
    print_r($number);
    /////////////////////////////////////////////////
    echo "<h3>Mảng 2/3 chiều:</h3>";
    $list = array(
        "CNTT" => array(
            "KTPM" => array("Hằng, ", "Nữ, ", 1995),
            "HTTT" => array("Thuý, ", "Nữ, ", 1999),
            "MMT" => array("Cường, ", "Nam, ", 1987)
        ),
        "NN" => array(
            "PD" => array("Thu, ", "Nữ, ", 1996),
            "DL" => array("Khánh, ", "Nữ, ", 1989)
        ),
        "MKT" => array(
            "NM" => array("Tú, ", "Nam, ", 2003)
        )
    );
    foreach ($list as $khoa => $value) {
        // In ra tiêu đề cho từng khoa
        echo "<h4>$khoa</h4><ul>";
        // In thông tin giáo viên trong từng khoa
        foreach ($value as $gv => $info) {
            // In ra thông tin giáo viên từng phần tử trong mảng 3 chiều
            echo "<li>$gv - ";
            foreach ($info as $key => $detail) {
                echo $detail;
                // if ($key < count($info) - 1) {
                //     echo ", "; // Ngăn cách các phần tử
                // }
            }
            echo "</li>\n";
        }
        echo '</ul>';
    }
    /////////////////////////////////////////////////
    echo "<h3>Mảng STR:</h3>";
    $str="Sun-Mon-Tue-Wed-Thu-Fri-Sat";
    $arr=explode("-", $str);
    var_dump($arr);
    echo "<br>";
    $str=implode(",", $arr);
    var_dump($arr);
    /////////////////////////////////////////////////
?>