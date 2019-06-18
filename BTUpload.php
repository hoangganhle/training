<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		img{
			height: 100px;
			width: 100px;
		}
		table{
			border: 1px solid black;
			width: 300px;
		}
	</style>
</head>
<body>
	<form method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td>Ma Sp</td>
				<td><input type="text" name="masp" id="masp"></td><br>
			</tr>
			<tr>
				<td>Hang Sp</td>
				<td><input type="text" name="hangsp" id="hangsp"></td><br>
			</tr>
			<tr>
				<td>Anh</td>
				<td><input type="file" name="image" id="image"></td><br>
			</tr>
			<tr>
				<td><br><input type="submit" name="submit" value="Send"></td>
			</tr>
		</table>
		<br><br><a href="deleteUpload.php">Xóa session</a>
	</form>
	<br>
	<table style = "width:100%; border:1px solid black">
		<tr>
			<th>STT</th>
			<th>MaSP</th>
			<th>HangSX</th>
			<th>Anh</th>
			<th>DuongDan</th>
		</tr>
		<?php
			session_start();
			if(!isset($_SESSION['STT']))	$_SESSION['STT']=1;
			if(!isset($_SESSION['html']))	$_SESSION['html']='';
			if(isset($_POST['submit'])){
				if($_FILES['image']['error']>0){
					echo "Upload error";
					echo $_SESSION['html'];
				}else{
					move_uploaded_file($_FILES['image']['tmp_name'], 'anh/'.$_FILES['image']['name']);
					$_html = "<tr>
					<th>".$_SESSION['STT']."</th>
					<th>".$_POST['masp']."</th>
					<th>".$_POST['hangsp']."</th>
					<th><img src=anh/".$_FILES['image']['name']."></th>
					<th>".$_FILES['image']['tmp_name']."</th></tr>";
					$_SESSION['html'].=$_html;
					$_SESSION['STT']++;
					echo $_SESSION['html'];
				}
			}
		?>
	</table>
</body>
</html>