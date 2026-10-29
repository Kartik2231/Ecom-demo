<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop | Ecom Demo</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <?php echo app('Illuminate\Foundation\Vite')(['resources/js/app.js']); ?>
    <style>
        body {
            font-family: 'DM Sans', sans-serif;
            background: #f7f9fc;
            color: #263653;
            margin: 0;
        }

        .shop-page {
            max-width: 1180px;
            margin: 48px auto;
            padding: 0 22px
        }

        .shop-heading {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            flex-wrap: wrap;
            margin-bottom: 28px
        }

        .shop-heading h1 {
            font-size: 34px;
            font-weight: 700;
            margin: 0 0 8px
        }

        .shop-heading p {
            margin: 0;
            color: #71809a
        }

        .shop-actions {
            display: flex;
            gap: 12px;
            align-items: center
        }

        .shop-btn {
            display: inline-block;
            border: 0;
            border-radius: 4px;
            padding: 12px 20px;
            background: #fd9636;
            color: white;
            text-decoration: none;
            font-weight: 700;
            cursor: pointer
        }

        .shop-btn.secondary {
            background: #425a8b
        }

        .shop-list {
            display: grid;
            gap: 14px
        }

        .shop-product {
            display: grid;
            grid-template-columns: 100px minmax(0, 1fr) auto;
            gap: 20px;
            align-items: center;
            background: #fff;
            border: 1px solid #e1e7ef;
            border-radius: 8px;
            padding: 16px
        }

        .shop-product img {
            width: 100px;
            height: 100px;
            object-fit: contain;
            background: #f8fafc;
            border-radius: 5px
        }

        .shop-product h2 {
            font-size: 17px;
            font-weight: 700;
            margin: 0 0 7px
        }

        .shop-product p {
            margin: 4px 0;
            color: #71809a;
            font-size: 14px
        }

        .shop-price {
            text-align: right;
            white-space: nowrap;
            font-weight: 700
        }

        .shop-price .shop-btn {
            white-space: normal
        }

        .shop-summary {
            margin-top: 22px;
            margin-left: auto;
            max-width: 360px;
            padding: 20px;
            background: white;
            border: 1px solid #e1e7ef;
            border-radius: 8px
        }

        .shop-summary div {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            margin-bottom: 12px
        }

        .shop-summary .total {
            border-top: 1px solid #e1e7ef;
            padding-top: 14px;
            font-size: 18px;
            font-weight: 700
        }

        .shop-empty {
            text-align: center;
            padding: 60px 20px;
            background: #fff;
            border: 1px dashed #cbd5e1;
            border-radius: 8px
        }

        .shop-empty h2 {
            font-size: 22px;
            margin: 0 0 8px
        }

        @media(max-width:600px) {
            .shop-product {
                grid-template-columns: 72px minmax(0, 1fr);
                gap: 12px;
                padding: 12px
            }

            .shop-product img {
                width: 72px;
                height: 72px
            }

            .shop-price {
                grid-column: 2;
                text-align: left
            }

            .shop-heading h1 {
                font-size: 28px
            }
        }
    </style>
</head>

<body>
    <main class="shop-page">
        <div class="shop-heading">
            <div>
                <h1>Your Shop Cart</h1>
                <p>This page shows the exact products and quantities currently in your cart.</p>
            </div>
            <div class="shop-actions"><a class="shop-btn secondary" href="<?php echo e(url('/')); ?>">Home</a><a class="shop-btn" href="<?php echo e(url('/checkout')); ?>">Checkout</a></div>
        </div>
        <section id="shop-products" class="shop-list" aria-live="polite"></section>
        <section id="shop-summary" class="shop-summary" hidden>
            <div><span>Products</span><strong id="shop-count">0</strong></div>
            <div class="total"><span>Subtotal</span><strong id="shop-subtotal">$0.00</strong></div>
        </section>
    </main>
    <script>
        (function() {
            const storageKey = 'ecom-demo-cart';
            const list = document.getElementById('shop-products');
            const summary = document.getElementById('shop-summary');
            const countNode = document.getElementById('shop-count');
            const subtotalNode = document.getElementById('shop-subtotal');
            const money = value => '$' + Number(value || 0).toLocaleString('en-US', {
                minimumFractionDigits: 2,
                maximumFractionDigits: 2
            });

            function render() {
                let cart = [];
                try {
                    const saved = JSON.parse(localStorage.getItem(storageKey) || '[]');
                    if (Array.isArray(saved)) cart = saved.filter(item => item && item.id && item.name && Number.isFinite(Number(item.price)) && Number(item.quantity) > 0);
                } catch (e) {
                    cart = [];
                }
                list.replaceChildren();
                if (!cart.length) {
                    summary.hidden = true;
                    const empty = document.createElement('div');
                    empty.className = 'shop-empty';
                    empty.innerHTML = '<h2>Your cart is empty</h2><p>Add products on the home page and they will appear here exactly as selected.</p>';
                    const link = document.createElement('a');
                    link.className = 'shop-btn';
                    link.href = '<?php echo e(url(' / ')); ?>';
                    link.textContent = 'Browse products';
                    empty.appendChild(link);
                    list.appendChild(empty);
                    return;
                }
                summary.hidden = false;
                let total = 0,
                    quantityTotal = 0;
                cart.forEach(item => {
                    const quantity = Number(item.quantity);
                    const price = Number(item.price);
                    total += price * quantity;
                    quantityTotal += quantity;
                    const row = document.createElement('article');
                    row.className = 'shop-product';
                    const img = document.createElement('img');
                    img.src = item.image || '';
                    img.alt = item.name;
                    const details = document.createElement('div');
                    const title = document.createElement('h2');
                    title.textContent = item.name;
                    const priceText = document.createElement('p');
                    priceText.textContent = 'Price: ' + money(price);
                    const qtyText = document.createElement('p');
                    qtyText.textContent = 'Quantity: ' + quantity;
                    details.append(title, priceText, qtyText);
                    const lineTotal = document.createElement('div');
                    lineTotal.className = 'shop-price';
                    const totalText = document.createElement('div');
                    totalText.textContent = money(price * quantity);
                    const buyButton = document.createElement('button');
                    buyButton.type = 'button';
                    buyButton.className = 'shop-btn';
                    buyButton.style.marginTop = '10px';
                    buyButton.textContent = 'Buy this item';
                    buyButton.addEventListener('click', function() {
                        try {
                            localStorage.setItem(storageKey, JSON.stringify([{
                                id: item.id,
                                name: item.name,
                                title: item.title || item.name,
                                brand: item.brand || '',
                                price: price,
                                image: item.image || '',
                                quantity: quantity
                            }]));
                        } catch (e) {}
                        window.location.href = "<?php echo e(url('/checkout')); ?>";
                    });
                    lineTotal.append(totalText, buyButton);
                    row.append(img, details, lineTotal);
                    list.appendChild(row);
                });
                countNode.textContent = quantityTotal;
                subtotalNode.textContent = money(total);
            }
            window.addEventListener('storage', render);
            render();
        })();
    </script>

    <!-- Page preloader -->
    <div id="preloader-active" class="site-preloader" role="status" aria-label="Loading page">
        <div class="preloader">
            <div class="preloader-inner">
                <div class="preloader-content">
                    <img src="<?php echo e(asset('assets/favicon.svg')); ?>" alt="Logo">
                    <div class="preloader-dots" aria-hidden="true">
                        <span class="preloader-dot preloader-dot-one"></span>
                        <span class="preloader-dot preloader-dot-two"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- script start -->
    <script>
        (() => {
            const preloader = document.getElementById('preloader-active');
            if (!preloader) return;

            const startedAt = Date.now();
            const minimumDisplayTime = 2000;
            let hidden = false;

            const hidePreloader = () => {
                if (hidden) return;
                hidden = true;

                const remaining = Math.max(
                    0,
                    minimumDisplayTime - (Date.now() - startedAt)
                );

                window.setTimeout(() => {
                    preloader.classList.add('preloader-hidden');

                    window.setTimeout(() => {
                        preloader.remove();
                    }, 450);
                }, remaining);
            };

            if (document.readyState === 'complete') {
                hidePreloader();
            } else {
                window.addEventListener('load', hidePreloader, {
                    once: true
                });
            }
        })();
    </script>

<script src="<?php echo e(asset('js/product-catalog.js')); ?>"></script>
<script src="<?php echo e(asset('js/storefront.js')); ?>"></script>
</body>

</html><?php /**PATH C:\wamp64\www\ecom-demo-wishlist-loader-fixed\ecom-demo-updated\ecom-demo\resources\views/shop.blade.php ENDPATH**/ ?>