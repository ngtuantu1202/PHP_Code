Bài 3: Tạo form nhập liệu với multipleline text (textarea)
<br>
<br>
<html> 
<head>
	<title>Input/Ouput data</title></head>
<body>
<form action="B3_multipleline_text.php" name="myform" method="post">
	Nhập bình luận: 
	<br>
	<textarea name="comment" rows="3" cols="40"><?php if(isset($_POST['comment'])) 
    echo $_POST['comment']; ?></textarea>
	<br>
	<input type="submit" value="Nhập">
</form>
<?php
	if (isset($_POST["comment"]))
		print "Bình luận của bạn: " . $_POST["comment"];
?>
</body>
</html>