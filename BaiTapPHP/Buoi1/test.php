<?php
    echo "Hello Word!";
?>

<br>
<?php
    $a = 1; //pham vi toan cuc
    function Test()
    {
        $a = 10;
        echo $a; //pham vi cuc bo
    }
    Test();
    echo $a;
?>

<br>
<?php
    $a = 1; 
    $b = 2;
    function Sum()
    {
        // $b = $b + $a;
    }
    Sum();
    echo $b;
?>

<br>
<?php
    function Test_2()
    {
        static $a = 0; //khong mat di gia tri sau khi ra khoi ham
        echo $a;
        $a++;
    }
    Test_2();
    Test_2();
    Test_2();
?>

<br>
<?php
    $str1 = "Nguyen Tuan Tu";
    $str2 = &$str1;
    //$str2 = "CNTT-2";
    echo $str1;
    echo $str2;
?>

<br>
<?php
    define("PI", 3.14);
    $r = 5;
    $chuVi = 2*PI*$r;
    echo $chuVi;
?>

<br>
<?php
    $i = 1;
    do
    {
        echo "$i, <br>";
        $i++;
    } while ($i<=10);
?>
