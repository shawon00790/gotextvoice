
        
        
        // function updateCartUI() {
        //     const cartCount = document.getElementById('cart-count');
        //     const cartItems = document.getElementById('cart-items');
        //     const cartTotal = document.getElementById('cart-total');
            
        //     const totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);
        //     const totalPrice = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
            
        //     // Update badge
        //     if (totalItems > 0) {
        //         cartCount.textContent = totalItems;
        //         cartCount.classList.remove('hidden');
        //     } else {
        //         cartCount.classList.add('hidden');
        //     }
            
        //     // Update cart items
        //     if (cart.length === 0) {
        //         cartItems.innerHTML = `
        //             <div class="text-center py-8">
        //                 <svg class="w-16 h-16 text-slate-200 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        //                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
        //                 </svg>
        //                 <p class="text-slate-500">Your cart is empty</p>
        //             </div>
        //         `;
        //     } else {
        //         cartItems.innerHTML = cart.map(item => `
        //             <div class="flex items-start space-x-4 pb-4 border-b border-slate-100">
        //                 <div class="w-16 h-16 rounded-lg overflow-hidden flex-shrink-0 bg-slate-100">
        //                     <img src="${item.image}" alt="${item.name}" class="w-full h-full object-cover">
        //                 </div>
        //                 <div class="flex-1 min-w-0">
        //                     <h4 class="font-medium text-slate-900 text-sm truncate">${item.name}</h4>
        //                     <p class="text-slate-500 text-sm">$${item.price.toLocaleString()}</p>
        //                     <div class="flex items-center space-x-2 mt-2">
        //                         <button onclick="updateCartItemQuantity(${item.id}, -1)" class="w-6 h-6 border border-slate-200 rounded flex items-center justify-center hover:border-slate-300 transition-colors">
        //                             <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        //                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"/>
        //                             </svg>
        //                         </button>
        //                         <span class="text-sm font-medium">${item.quantity}</span>
        //                         <button onclick="updateCartItemQuantity(${item.id}, 1)" class="w-6 h-6 border border-slate-200 rounded flex items-center justify-center hover:border-slate-300 transition-colors">
        //                             <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        //                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
        //                             </svg>
        //                         </button>
        //                     </div>
        //                 </div>
        //                 <button onclick="removeFromCart(${item.id})" class="text-slate-400 hover:text-slate-600 transition-colors">
        //                     <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        //                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12"/>
        //                     </svg>
        //                 </button>
        //             </div>
        //         `).join('');
        //     }
            
        //     cartTotal.textContent = `$${totalPrice.toLocaleString()}`;
        // }

        // // ==================== PRODUCT RENDERING ====================
        // function renderCategories() {
        //     const container = document.getElementById('categories-grid');
        //     container.innerHTML = categories.map((cat, index) => `
        //         <div class="category-card aspect-[4/3] rounded-2xl overflow-hidden cursor-pointer group" onclick="filterByCategory('${cat.name}')">
        //             <img src="${cat.image}" alt="${cat.name}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
        //             <div class="absolute inset-0 flex items-end p-6">
        //                 <div>
        //                     <h3 class="text-white text-xl font-semibold mb-1">${cat.name}</h3>
        //                     <p class="text-white/70 text-sm">${products.filter(p => p.category === cat.name).length} products</p>
        //                 </div>
        //             </div>
        //         </div>
        //     `).join('');
        // }

        // function renderFeaturedProducts() {
        //     const container = document.getElementById('featured-products');
        //     const featured = products.filter(p => p.featured);
        //     container.innerHTML = featured.map(product => createProductCard(product)).join('');
        // }

        // function renderCategoryFilters() {
        //     const container = document.getElementById('category-filters');
        //     const allCategories = ['all', ...new Set(products.map(p => p.category))];
            
        //     container.innerHTML = allCategories.map(cat => `
        //         <label class="flex items-center cursor-pointer">
        //             <input type="radio" name="category" value="${cat}" class="filter-checkbox sr-only" ${cat === 'all' ? 'checked' : ''} onchange="filterProducts()">
        //             <span class="w-4 h-4 rounded-full border-2 border-slate-300 mr-3 flex items-center justify-center transition-colors">
        //                 <span class="w-2 h-2 rounded-full bg-indigo-600 scale-0 transition-transform"></span>
        //             </span>
        //             <span class="text-slate-600 text-sm">${cat === 'all' ? 'All Categories' : cat}</span>
        //         </label>
        //     `).join('');
            
        //     // Add visual feedback for radio buttons
        //     const radios = container.querySelectorAll('input[type="radio"]');
        //     radios.forEach(radio => {
        //         radio.addEventListener('change', function() {
        //             container.querySelectorAll('span:first-of-type').forEach(span => {
        //                 span.querySelector('span').classList.add('scale-0');
        //             });
        //             if (this.checked) {
        //                 this.nextElementSibling.querySelector('span').classList.remove('scale-0');
        //             }
        //         });
        //     });
        // }

        // function renderProducts() {
        //     const container = document.getElementById('products-grid');
        //     let filtered = [...products];
            
        //     // Apply category filter
        //     if (activeFilters.category !== 'all') {
        //         filtered = filtered.filter(p => p.category === activeFilters.category);
        //     }
            
        //     // Apply price filter
        //     if (activeFilters.price !== 'all') {
        //         const [min, max] = activeFilters.price.split('-').map(v => v === '+' ? Infinity : parseInt(v));
        //         filtered = filtered.filter(p => {
        //             if (max === undefined) return p.price >= min;
        //             return p.price >= min && p.price <= max;
        //         });
        //     }
            
        //     // Apply sort
        //     const sortValue = document.getElementById('sort-select')?.value || 'featured';
        //     switch (sortValue) {
        //         case 'price-asc':
        //             filtered.sort((a, b) => a.price - b.price);
        //             break;
        //         case 'price-desc':
        //             filtered.sort((a, b) => b.price - a.price);
        //             break;
        //         case 'name':
        //             filtered.sort((a, b) => a.name.localeCompare(b.name));
        //             break;
        //         default:
        //             filtered.sort((a, b) => (b.featured ? 1 : 0) - (a.featured ? 1 : 0));
        //     }
            
        //     document.getElementById('product-count').textContent = filtered.length;
        //     container.innerHTML = filtered.map(product => createProductCard(product)).join('');
        // }

        // function createProductCard(product) {
        //     return `
        //         <article class="product-card bg-white rounded-2xl overflow-hidden shadow-sm border border-slate-100 cursor-pointer group" onclick="viewProduct(${product.id})">
        //             <div class="aspect-square overflow-hidden bg-slate-100">
        //                 <img src="${product.images[0]}" alt="${product.name}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" loading="lazy">
        //             </div>
        //             <div class="p-4">
        //                 <p class="text-xs text-indigo-600 font-medium uppercase tracking-wide mb-1">${product.category}</p>
        //                 <h3 class="font-semibold text-slate-900 mb-1 truncate">${product.name}</h3>
        //                 <p class="text-slate-900 font-bold">$${product.price.toLocaleString()}</p>
        //             </div>
        //         </article>
        //     `;
        // }

        // function viewProduct(productId) {
        //     loadProduct(productId);
        //     navigateTo('product');
        // }

        // function loadProduct(productId) {
        //     currentProduct = products.find(p => p.id === productId);
        //     if (!currentProduct) return;
            
        //     document.getElementById('breadcrumb-product').textContent = currentProduct.name;
        //     document.getElementById('product-category').textContent = currentProduct.category;
        //     document.getElementById('product-title').textContent = currentProduct.name;
        //     document.getElementById('product-price').textContent = `$${currentProduct.price.toLocaleString()}`;
        //     document.getElementById('product-description').textContent = currentProduct.description;
        //     document.getElementById('product-main-image').src = currentProduct.images[0];
        //     document.getElementById('product-main-image').alt = currentProduct.name;
            
        //     // Render thumbnails
        //     const thumbContainer = document.getElementById('product-thumbnails');
        //     thumbContainer.innerHTML = currentProduct.images.map((img, index) => `
        //         <button class="gallery-thumb aspect-square rounded-xl overflow-hidden border-2 ${index === 0 ? 'border-indigo-600 active' : 'border-transparent'}" onclick="setMainImage('${img}', this)">
        //             <img src="${img}" alt="${currentProduct.name} view ${index + 1}" class="w-full h-full object-cover">
        //         </button>
        //     `).join('');
            
        //     // Render related products
        //     const related = products.filter(p => p.category === currentProduct.category && p.id !== currentProduct.id).slice(0, 4);
        //     const relatedContainer = document.getElementById('related-products');
        //     relatedContainer.innerHTML = related.map(product => createProductCard(product)).join('');
            
        //     productQuantity = 1;
        //     document.getElementById('product-quantity').textContent = '1';
        // }

        // function setMainImage(src, button) {
        //     document.getElementById('product-main-image').src = src;
        //     document.querySelectorAll('.gallery-thumb').forEach(thumb => {
        //         thumb.classList.remove('active', 'border-indigo-600');
        //         thumb.classList.add('border-transparent');
        //     });
        //     button.classList.add('active', 'border-indigo-600');
        //     button.classList.remove('border-transparent');
        // }

        // function updateQuantity(delta) {
        //     productQuantity = Math.max(1, Math.min(10, productQuantity + delta));
        //     document.getElementById('product-quantity').textContent = productQuantity;
        // }

        // // ==================== FILTERING & SORTING ====================
        // function filterProducts() {
        //     const categoryRadio = document.querySelector('input[name="category"]:checked');
        //     const priceRadio = document.querySelector('input[name="price"]:checked');
            
        //     activeFilters.category = categoryRadio ? categoryRadio.value : 'all';
        //     activeFilters.price = priceRadio ? priceRadio.value : 'all';
            
        //     renderProducts();
        // }

        // function filterByCategory(category) {
        //     activeFilters.category = category;
            
        //     // Update radio button
        //     const categoryRadio = document.querySelector(`input[name="category"][value="${category}"]`);
        //     if (categoryRadio) {
        //         categoryRadio.checked = true;
        //     }
            
        //     navigateTo('products');
        //     setTimeout(renderProducts, 100);
        // }

        // function sortProducts() {
        //     renderProducts();
        // }

        // function resetFilters() {
        //     activeFilters = { category: 'all', price: 'all' };
        //     document.querySelector('input[name="category"][value="all"]').checked = true;
        //     document.querySelector('input[name="price"][value="all"]').checked = true;
        //     renderProducts();
        // }

        // // ==================== CHECKOUT ====================
        // function updateCheckoutPage() {
        //     const checkoutItems = document.getElementById('checkout-items');
        //     const subtotal = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
        //     const shipping = subtotal >= 150 ? 0 : 15;
        //     const tax = Math.round(subtotal * 0.08);
        //     const total = subtotal + shipping + tax;
            
        //     if (cart.length === 0) {
        //         checkoutItems.innerHTML = '<p class="text-slate-500 text-center py-4">Your cart is empty</p>';
        //     } else {
        //         checkoutItems.innerHTML = cart.map(item => `
        //             <div class="flex items-center space-x-4">
        //                 <div class="w-16 h-16 rounded-lg overflow-hidden flex-shrink-0 bg-slate-100">
        //                     <img src="${item.image}" alt="${item.name}" class="w-full h-full object-cover">
        //                 </div>
        //                 <div class="flex-1 min-w-0">
        //                     <h4 class="font-medium text-slate-900 text-sm truncate">${item.name}</h4>
        //                     <p class="text-slate-500 text-sm">Qty: ${item.quantity}</p>
        //                 </div>
        //                 <p class="font-medium text-slate-900">$${(item.price * item.quantity).toLocaleString()}</p>
        //             </div>
        //         `).join('');
        //     }
            
        //     document.getElementById('checkout-subtotal').textContent = `$${subtotal.toLocaleString()}`;
        //     document.getElementById('checkout-shipping').textContent = shipping === 0 ? 'Free' : `$${shipping}`;
        //     document.getElementById('checkout-tax').textContent = `$${tax.toLocaleString()}`;
        //     document.getElementById('checkout-total').textContent = `$${total.toLocaleString()}`;
            
        //     // Update hidden form fields
        //     document.getElementById('checkout-cart-data').value = JSON.stringify(cart);
        //     document.getElementById('checkout-order-total').value = total;
        // }

        // function handleCheckout(event) {
        //     if (cart.length === 0) {
        //         showToast('Your cart is empty');
        //         event.preventDefault();
        //         return false;
        //     }
            
        //     // Form will submit to Formspree
        //     showToast('Processing your order...');
        //     return true;
        // }

        // // ==================== UI UTILITIES ====================
        // function toggleMobileMenu() {
        //     document.getElementById('mobile-menu').classList.add('open');
        //     document.getElementById('overlay').classList.add('open');
        //     document.body.style.overflow = 'hidden';
        // }

        // function toggleCart() {
        //     document.getElementById('cart-sidebar').classList.add('open');
        //     document.getElementById('overlay').classList.add('open');
        //     document.body.style.overflow = 'hidden';
        // }

        // function closeOverlays() {
        //     document.getElementById('mobile-menu').classList.remove('open');
        //     document.getElementById('cart-sidebar').classList.remove('open');
        //     document.getElementById('overlay').classList.remove('open');
        //     document.body.style.overflow = '';
        // }

        // function showToast(message) {
        //     const toast = document.getElementById('toast');
        //     document.getElementById('toast-message').textContent = message;
        //     toast.classList.remove('translate-y-20', 'opacity-0');
            
        //     setTimeout(() => {
        //         toast.classList.add('translate-y-20', 'opacity-0');
        //     }, 3000);
        // }

        // // Navbar scroll effect
        // let lastScroll = 0;
        // window.addEventListener('scroll', () => {
        //     const navbar = document.getElementById('navbar');
        //     const currentScroll = window.pageYOffset;
            
        //     if (currentScroll > 50) {
        //         navbar.classList.add('shadow-sm');
        //     } else {
        //         navbar.classList.remove('shadow-sm');
        //     }
            
        //     lastScroll = currentScroll;
        // });

        // // Keyboard navigation
        // document.addEventListener('keydown', (e) => {
        //     if (e.key === 'Escape') {
        //         closeOverlays();
        //     }
        // });