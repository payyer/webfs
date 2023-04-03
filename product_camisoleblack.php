<!--chitietsp.html-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Shop</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />

        <link rel="stylesheet" href="css.css">
    </head>
    <body>
                            <section id="header">
                                <h2><i>pkarrr</i></h2>   
                                 <div>
                                    <ul id="daumenu">
                                        <li><a  href="index.php">Home</a></li>
                                        <li><a class="active" href="shop.php">Shop</a></li>
                                        <li><a href="blog.php">blog</a></li>
                                        <li><a href="login.php">Login</a></li>

                                    </ul>
                                </div> 
                                <a href="cart.php"><i class="fa-sharp fa-solid fa-bag-shopping "></i></a>
                            </section>
        
        
        
        
        
        <section id="prodetails" class="section-p1">
            <div class="single-pro-image">
                <img src="img/k5.jpg" width="100%" id="MainImg" alt="">
                <div class="small-img-group">
                    <div class="small-img-col">
                        <img src="img/k1.jpg" width="100%" class="small-img" alt="">
                    </div>

                    <div class="small-img-col">
                        <img src="img/k2.jpg" width="100%" class="small-img" alt="">
                    </div>

                    <div class="small-img-col">
                        <img src="img/k3.jpg" width="100%" class="small-img" alt="">
                    </div>

                    <div class="small-img-col">
                        <img src="img/p5.jpg" width="100%" class="small-img" alt="">
                    </div>
                </div>
            </div>
            
            
            
            
            
            <div class="single-pro-details">
                <h6>Shop</h6>
                <h4>Camisole Black</h4>
                <h2>$114</h2>
                <select>
                    <option>Select Size</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                    <option>XXL</option>
                </select>
                <button onclick="addToCart(4, 1)">Add to cart   </button>
                <script src="addtocart.js"></script>
                <h4>Product details</h4>
                <span>
                    Chiec ao dam do quyen ru ,mang lai cam giac yo mot ,phu hop di quay tiec 
                </span>
            </div>
        </section>
        
        <section id='spham' class='section-p1'>
             <h2> OURS PRODUCTS</h2>
            <div class="pro-container">
                
                <div class="pro" onclick="window.location.href='product_camisoleorange.php'">
                    <img src="img/k6.jpg" alt="">
                    <div class="des">
                        <h5>Camisole Oranges</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>   
                        </div>
                        <h4>245$</h4>
                    </div >
                    <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
                </div>
                <div class="pro" onclick="window.location.href='product_offtheshoulder.php'">
                    <img src="img/k7.jpg" alt="">
                    <div class="des">
                        <h5>Off the shoulder</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>   
                        </div>
                        <h4>450$</h4>
                    </div >
                    <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
                </div>
                <div class="pro" onclick="window.location.href='product_jeancoat.php'">
                    <img src="img/k8.jpg" alt="">
                    <div class="des" >
                        <h5>Jean Coat</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>   
                        </div>
                        <h4>564$</h4>
                    </div >
                    <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
                </div>
                <div class="pro" onclick="window.location.href='product_whitedress.php'">
                    <img src="img/k9.jpg" alt="">
                    <div class="des">
                        <h5>White dress</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>   
                        </div>
                        <h4>500$</h4>
                    </div >
                    <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
                </div>
                <div class="pro" onclick="document.location='product_valkyriesuit.php'">
                    <img src="img/k10.jpg" alt="">
                    <div class="des">
                        <h5>Valkyrie suit</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>   
                        </div>
                        <h4>700$</h4>
                    </div >
                    <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
                </div>
                <div class="pro" onclick="document.location='product_camisoleblack.php'">
                    <img src="img/k5.jpg" alt="">
                    <div class="des">
                        <h5>Camisole black</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>   
                        </div>
                        <h4>114$</h4>
                    </div >
                    <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
                </div>
                <div class="pro" onclick="window.location.href='product_tshirt.php'">
                    <img src="img/p2.jpg" alt="">
                    <div class="des">
                        <h5>White T-shirt</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>   
                        </div>
                        <h4>80$</h4>
                    </div >
                    <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
                </div>
                <div class="pro" onclick="window.location.href='product_longhand.php'">
                    <img src="img/p3.jpg" alt="">
                    <div class="des">
                        <h5>Long Hand</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>   
                        </div>
                        <h4>80$</h4>
                    </div >
                    <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
                </div>
                
            </div>
            
        </section>
            
<!--            footer-->
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
                        <a href="#">Contact us</a>
                    </div>

                    <div class="col">
                        <h4>My account</h4>
                        <a href="#">Sign In</a>
                        <a href="#">View cart</a>
                        <a href="#">Help</a>
                    </div>

                    
                    
            
        </section>
        
        
        
        
        <script LANGUAGE="Javascript" >
            var MainImg = document.getElementById("MainImg");
            var smalling = document.getElementsByClassName("small-img");
            
            smalling[0].onclick = function(){
               MainImg.src = smalling[0].src; 
            }
            
            smalling[1].onclick = function(){
               MainImg.src = smalling[1].src; 
            }
            
            smalling[2].onclick = function(){
               MainImg.src = smalling[2].src; 
            }
            
            smalling[3].onclick = function(){
               MainImg.src = smalling[3].src; 
            }

        </script>
    </body>
</html>
 