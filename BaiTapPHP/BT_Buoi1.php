BT1: Viết CT nhận 1 giá trị ngẫu nhiên n giá trị từ 1 đến 100, in ra số chẵn từ 1->N
<?php

    $n = rand(1,100);
    echo "Giá trị n được tạo ra là $n";
    echo "<br> Các số chẵn từ 1 đến $n là: ";
    for($i=1; $i<=$n; $i++)
    {
        if($i%2==0)
            echo "$i  ";
    }
?>

<br>
<br>
BT2: Viết CT nhận 1 giá trị ngẫu nhiên n nhận giá trị từ 1 đến N, in ra bảng cửu chương N
<?php

    $n = rand(2, 9);  
    echo "<br>Giá trị n được tạo ra là $n";  
    echo "<br>Bảng cửu chương của số $n là: <br>";  
 
    for($i = 1; $i <= 9; $i++) {  
         $result = $n * $i;  
         echo "$n x $i = $result<br>";  
     }  
?>

<br>
<br>
BT2: Viết CT in bảng cửu chương từ 1 đến 10
<?php  
    echo "<br>Bảng cửu chương từ 1 đến 10:";  
    for ($n = 1; $n <= 10; $n++) {  
        echo "Bảng cửu chương của $n:";   
        for ($i = 1; $i <= 10; $i++) {  
            $kq = $n * $i; 
            echo "$n x $i = $kq<br>"; 
        }  
        echo "<br>";  
    }  
?>  
<br>
<br>
BT3: Viết CT nhận 1 giá trị ngẫu nhiên n nhận giá trị từ 1 đến 100000.
Kiểm tra n là số nguyên tố hay không
Tính tổng các số lẻ có 2 chữ số nhỏ hơn n
Cho biết n có bao nhiêu chữ số
<?php
    $n = rand(1, 10000);  
    echo "<br>Giá trị n được tạo ra là $n"; 
    //Kiểm tra SNT
    function kiemTra($n)
    {   if ($n <= 1) return false;
        for($i=2; $i<=sqrt($n); $i++)
        {
            if($n % $i == 0 ) return false;
        } return true;
    } 
    if (kiemTra($n)) {  
        echo "$n là số nguyên tố<br>";  
    } else {  
        echo "$n không phải là số nguyên tố<br>";  
    } 
    //Tong số lẻ có 2 chữ số nhỏ hơn N
    $tong = 0;
    for ($i = 11; $i < 100; $i = $i+=2) {  
        if ($i < $n) {  
            $tong += $i;  
        }  
    }  echo "Tính tổng các số lẻ có 2 chữ số nhỏ hơn $n là: $tong <br>";
    //Chu số
    $dem = 0;  
    $tam = $n;
    while($tam!=0)
    {
        $sodu = $tam%10;
        $dem++;
        $tam=$tam/10;
    } echo "Số $n có $dem chữ số";
?>
