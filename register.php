<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
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
        <form method="post" action="#">
            <table>
                <tr>
                    <td>Email: </td>
                    <td><input type="email" name="LoginEmail" id="LoginEmail"></td>
                </tr>
                <tr>
                    <td>Password: </td>
                    <td><input type="passwrod" name="LoginMatKhau" id="LoginMatKhau"></td>
                </tr>
                <tr>
                    <td>SĐT: </td>
                    <td><input type="number" id="SDT" name="SDT"></td>
                </tr>
            </table>
            <button type="submit" name="register">Đăng Ký</button><br>
        </form>
        <button type="button" onclick="document.location='login.php'">Quay lại trang đăng nhập</button>
        <?php
            $server = "localhost";
            $username = "root";
            $password = "";
            $dbname= "shopbanquanao";

            $conn = mysqli_connect($server, $username, $password, $dbname);

            if (!$conn)
            {
                die ("Connection failed: ". mysql_connect_error());
            }
            else
            {
                echo 'conect Succesfull';
            }
            
            if(isset($_POST['register']))
            {
                $Email = $_POST['LoginEmail'];
                $MatKhau = $_POST['LoginMatKhau'];
                $SDT = $_POST['SDT'];
                
                $sql= "INSERT INTO taikhoan (email, matkhau, sdttaikhoan) VALUES ('$Email','$MatKhau', '$SDT')";
                if (mysqli_query($conn, $sql))
                {
                    echo "Đăng ký thành công";
                }
                else
                {
                    echo "Lỗi: " .$sql . "<br>". mysqli_errno($conn);
                }  
            }
        ?>
    </body>
</html>