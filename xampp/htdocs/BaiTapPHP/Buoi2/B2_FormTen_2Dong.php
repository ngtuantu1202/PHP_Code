Bài 2: Tạo form nhập liệu với text field (dạng 2)
<br>
<html> 
<head>
<title>Input data</title>
</head>
<body>
	<form action="FB2_FormTen_2Dong.php" name="myform" method="post">
		Họ và tên đệm: <input type="text" name="Name[]" size=20 value="<?php if(isset($_POST['Name'])) 
        echo $_POST['Name'][0];?>"/><br>
		Tên: <input type="text" name="Name[]" size=20 value="<?php if(isset($_POST['Name'])) 
        echo $_POST['Name'][1];?>"/><br>
		<input type="submit" value="Submit">
	</form>
	<?php
		if (isset($_POST['Name'])){
			echo "Chào bạn " . $_POST['Name'][0] . " " . $_POST['Name'][1];
		}
	?>
</body>
</html>