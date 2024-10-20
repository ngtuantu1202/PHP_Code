Bài 1: Tạo form nhập liệu với text field (dạng 1)
<br>
<html>
<head>
    <title>Input/Ouput data</title>
</head>
<body>
    <form action="B1_FormTen_Input_XuLy.php" name="myform" method="post">
        Tên của bạn: <input type="test" name="Name" size=20 value="<?php if (isset($_POST['Name'])) 
        echo $_POST['Name']; ?>" />
        <br>
        <input type="submit" value="Submit">
    </form>
    <?php
    if (isset($_POST["Name"]))
        print "Hello " . $_POST["Name"];
    ?>
</body> 
</html>


