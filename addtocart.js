// Function to add product to localStorage
		function addToCart(productId, quantity) {
			var cart = JSON.parse(localStorage.getItem('cart')) || {};
			cart[productId] = (cart[productId] || 0) + quantity;
			localStorage.setItem('cart', JSON.stringify(cart));
                        alert("Đã thêm sãn phẩm vào giỏ hàng");
		}