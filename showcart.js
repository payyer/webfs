// Function to update cart in localStorage
		function updateCart(cart) {
			localStorage.setItem('cart', JSON.stringify(cart));
			showCart();
		}

		// Function to remove item from cart
		function removeItem(productId) {
			var cart = JSON.parse(localStorage.getItem('cart'));
			delete cart[productId];
			updateCart(cart);
		}

		// Function to show cart items in HTML
		function showCart() {
			var cart = JSON.parse(localStorage.getItem('cart')) || {};
			var cartTable = document.getElementById('cart-table');
			var html = '<thead><tr><th></th><th>Tên sản phẩm</th><th>Đơn giá</th><th>Số lượng</th><th>Tổng giá</th><th></th></tr></thead><tbody>';
			var total = 0;
			for (var productId in cart) {
				var name = '';
				var price = '';
                                var hinhanh =''
				var qty = cart[productId];
				// Get product info based on productId
				switch (productId) {
					case '1':
						name = 'Red Red';
						price = 150;
                                                hinhanh = "<img src='img/p1.jpg' style='height: 50px; width: 70px'>";
						break;
					case '2':
						name = 'Black 3 Lo';
						price = 150;
                                                hinhanh = "<img src='img/k1.jpg' style='height: 50px; width: 70px'>";
						break;
                                        case '3':
						name = 'Black Coat';
						price = 80;
                                                hinhanh = "<img src='img/p4.jpg' style='height: 50px; width: 70px'>";
						break;
                                        case '4':
						name = 'Camisole Black';
						price = 114;
                                                hinhanh = "<img src='img/k5.jpg' style='height: 50px; width: 70px'>";
						break;
                                        case '5':
						name = 'Camisole Orange';
						price = 245;
                                                hinhanh = "<img src='img/k6.jpg' style='height: 50px; width: 70px'>";
						break;
                                        case '6':
						name = 'T-Shirt Colorful';
						price = 100;
                                                hinhanh = "<img src='img/k2.jpg' style='height: 50px; width: 70px'>";
						break;
                                        case '7':
						name = 'Jean Coat';
						price = 564;
                                                hinhanh = "<img src='img/k8.jpg' style='height: 50px; width: 70px'>";
						break;
                                        case '8':
						name = 'Long Hand';
						price = 200;
                                                hinhanh = "<img src='img/k3.jpg' style='height: 50px; width: 70px'>";
						break;
                                        case '9':
						name = 'Off The Shoulder';
						price = 450;
                                                hinhanh = "<img src='img/k7.jpg' style='height: 50px; width: 70px'>";
						break;
                                        case '10':
						name = 'White T-Shirt';
						price = 100;
                                                hinhanh = "<img src='img/p2.jpg' style='height: 50px; width: 70px'>";
						break;
                                        case '11':
						name = 'Valkyrie Suit';
						price = 700;
                                                hinhanh = "<img src='img/k10.jpg' style='height: 50px; width: 70px'>";
						break;
                                        case '12':
						name = 'White Dress';
						price = 500;
                                                hinhanh = "<img src='img/k9.jpg' style='height: 50px; width: 70px'>";
						break;
                                        
				}
				var subTotal = qty * price;
				html += '<tr>';
				html += '<td>' + hinhanh + '</td>';
				html += '<td>' + name + '</td>';
				html += '<td>$' + price + '</td>';
				html += '<td><input type="number" value="' + qty + '" min="1" onchange="updateQty(' + productId + ', this.value)"></td>';
				html += '<td>$' + subTotal + '</td>';
				html += '<td><button onclick="removeItem(' + productId + ')">Xóa sản phẩm</button></td>';
				html += '</tr>';
				total += subTotal;
			}
			html += '</tbody><tfoot><tr><td colspan="4">Tổng giá</td><td>$' + total + '</td><td></td></tr></tfoot>';
			cartTable.innerHTML = html;
		}

		// Function to update the quantity of an item in cart
		function updateQty(productId, quantity) {
			var cart = JSON.parse(localStorage.getItem('cart'));
			cart[productId] = quantity;
			updateCart(cart);
		}