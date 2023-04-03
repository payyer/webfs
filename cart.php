<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Index</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />

        <link rel="stylesheet" href="css.css">
        <style>
            body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
			background-color: #efefef;
		}
		.container {
			max-width: 1024px;
			margin: 0 auto;
			padding: 20px;
		}
		h1 {
			font-size: 32px;
			color: #333;
			margin-top: 0;
			margin-bottom: 20px;
			text-align: center;
		}
		table {
			width: 100%;
			border-collapse: collapse;
			margin-bottom: 20px;
		}
		th, td {
			padding: 10px;
			text-align: center;
		}
		th {
			background-color: #333;
			color: #fff;
			font-weight: normal;
		}
		tr:nth-child(even) {
			background-color: #f2f2f2;
		}
		input[type="number"] {
			width: 50px;
			text-align: center;
		}
		button {
			background-color: #333;
			color: #fff;
			border: none;
			padding: 10px;
			cursor: pointer;
			transition: background-color .3s ease;
		}
		button:hover {
			background-color: #555;
		}
		button:active {
			background-color: #222;
		}
        </style>
    </head>
    <body onload="showCart()">          
<!--                    header-->
                        <section id="header">
                                <h2><i>pkarrr</i></h2>   
                                 <div>
                                    <ul id="daumenu">
                                        <li><a  href="index.php">Home</a></li>
                                        <li><a class="active" href="shop.php">Shop</a></li>
                                        <li><a href="blog.php">blog</a></li>
                                        <li><a href="contact.php">Contact</a></li>
                                        <li><a href="Login.php">Login</a></li>

                                    </ul>
                                </div> 
                                <a href="cart.php"><i class="fa-sharp fa-solid fa-bag-shopping "></i></a>
                            </section>
<!--            page header-->
        <section id='page-header'>
            <h2>Your Cart</h2>
        </section>
<!--body-->
            <div class="container">
                <form method="post" action="index.php">
                    <h1>Giỏ hàng của bạn</h1>
                    <table id="cart-table">
                    </table>
                    <button type="submit">Thanh toán</button>
                </form>
		
            </div>
            <script src="showcart.js"></script>

<!--        footer-->
        <section id="footer">
                        <div class="col">
                        
                        <h4>Contact With  </h4>
                            <h2><i>pkarrr</i></h2><br>
                            
                        <p><strong>Address:</strong>2 Truong Sa Quan Binh Thanh TP.HCM</p>
                        <p><strong>Phone:</strong>(+84)967016129</p> 
                        <p><strong>Hours:</strong>10AM - 9PM Weekday</p>
                        <div class="follow">
                            <h4>Follow us</h4>
                            <div class="icon">
                                <i class="fab fa-facebook-f"></i>
                                <i class="fab fa-twitter"></i>
                                <i class="fab fa-instagram"></i>
                                <i class="fab fa-youtube"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <h4>About</h4>
                        <a href="#">About us</a>
                        <a href="#">Delivery Information</a>
                        <a href="#">Privacy Policy</a>
                        <a href="#">Term & Conditions</a>
                        <a href="#">Contact us</a>
                    </div>

                    <div class="col">
                        <h4>My account</h4>
                        <a href="#">Sign In</a>
                        <a href="#">View cart</a>
                        <a href="#">My Wishlist</a>
                        <a href="#">Track My Order</a>
                        <a href="#">Help</a>
                    </div>

                    
                    
            
        </section>
        <script src="main.js"></script>
    </body>
</html>