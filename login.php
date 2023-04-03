<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="./style.css">
        <style>
            body {
	background: #1690A7;
	display: flex;
	justify-content: center;
	align-items: center;
	height: 100vh;
	flex-direction: column;
}

*{
	font-family: sans-serif;
	box-sizing: border-box;
}

form {
	width: 500px;
	border: 2px solid #ccc;
	padding: 30px;
	background: #fff;
	border-radius: 15px;
}

h2 {
	text-align: center;
	margin-bottom: 40px;
}

input {
	display: block;
	border: 2px solid #ccc;
	width: 95%;
	padding: 10px;
	margin: 10px auto;
	border-radius: 5px;
}
label {
	color: #888;
	font-size: 18px;
	padding: 10px;
}

button {
	float: right;
	background: #555;
	padding: 10px 15px;
	color: #fff;
	border-radius: 5px;
	margin-right: 10px;
	border: none;
}
button:hover{
	opacity: .7;
}
.error {
   background: #F2DEDE;
   color: #A94442;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}

h1 {
	text-align: center;
	color: #fff;
}

a {
	float: right;
	background: #555;
	padding: 10px 15px;
	color: #fff;
	border-radius: 5px;
	margin-right: 10px;
	border: none;
	text-decoration: none;
}
a:hover{
	opacity: .7;
}
        </style>
</head>
<body>
     <form action="login.php" method="post">
     	<h2>ĐĂNG NHẬP THÀNH VIÊN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Đăng nhập</button>
        <button type="button" onclick="document.location = 'register.php'">Đăng ký</button>
     </form>
</body>
</html>

<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "shopbanquanao";
    
    $conn = mysqli_connect($server, $username, $password, $dbname);
    if (!$conn)
    {
        die("Falied to conected"). mysqli_error($conn);
    }
    else
    {
        echo "Connected succesfully";
    }
session_start(); 


if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
	//	header("Location: login.php?error=User Name is required");
	echo "Bạn phải nhập tên tài khoản";
	    exit();
	}else if(empty($pass)){
    //    header("Location: login.php?error=Password is required");
	echo "Bạn phải nhập mật khẩu";
	    exit();
	}else{
		$sql = "SELECT `email`, `matkhau` FROM `taikhoan`
		WHERE email = '$uname' and matkhau = '$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['email'] === $uname && $row['matkhau'] === $pass) {
            	$_SESSION['email'] = $row['email'];
            	$_SESSION['matkhau'] = $row['matkhau'];
            	
        //    	header("Location: home.php");
		header("Location: home.php?error=Đăng nhập thành công!");
		
		        exit();
            }else{
				header("Location: login.php?error=Sai thông tin");
		
		        exit();
			}
		}else{
			header("Location: login.php?error=Sai thông tin");
		
	        exit();
		}
	}
	
}else{
//	header("Location: index.php");
	
	exit();
}
?>