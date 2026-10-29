<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>My Wishlist | Ecom Demo</title>
<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>"><link rel="stylesheet" href="<?php echo e(asset('css/storefront.css')); ?>">
<script src="https://cdn.tailwindcss.com"></script>
<style>
body{font-family:'DM Sans',sans-serif!important;background:#fbfcfe;color:#425a8b}
.ecom-wish-header{background:#fff;border-bottom:1px solid #e2e8f0}
.ecom-wish-top{background:#243b65;color:#fff;padding:9px 4%;display:flex;justify-content:space-between;gap:12px;flex-wrap:wrap;font-size:12px}
.ecom-wish-nav{max-width:1440px;width:92%;margin:auto;min-height:78px;display:flex;align-items:center;justify-content:space-between;gap:20px}
.ecom-wish-logo{font-size:28px;font-weight:700;letter-spacing:-1px;color:#243b65;text-decoration:none}
.ecom-wish-navlinks{display:flex;align-items:center;gap:24px;flex-wrap:wrap}
.ecom-wish-navlinks a{color:#425a8b;text-decoration:none;font-size:14px;font-weight:700}
.ecom-wish-navlinks a:hover{color:#ff9b55}
@media(max-width:620px){.ecom-wish-nav{padding:16px 0;align-items:flex-start;flex-direction:column}.ecom-wish-navlinks{gap:14px}}
</style>
</head>
<body>
<header class="ecom-wish-header">
 <div class="ecom-wish-top"><span>Free shipping for all orders over <strong>$75.00</strong></span><span>Need help? Call Us: <strong>+1800 900</strong></span></div>
 <div class="ecom-wish-nav"><a class="ecom-wish-logo" href="/">ECOM<span style="color:#ff9b55">.</span></a><nav class="ecom-wish-navlinks" aria-label="Main navigation"><a href="/">Home</a><a href="<?php echo e(route('shop')); ?>">Shop</a><a href="<?php echo e(route('shop-grid')); ?>">Products</a><a href="<?php echo e(route('shop-compare')); ?>">Compare</a><a href="<?php echo e(route('shop-wishlist')); ?>">♡ Wishlist</a></nav></div>
</header>
<main class="ecom-wishlist-shell">
 <div class="ecom-wishlist-heading"><div><p style="font-size:13px;margin:0 0 5px;color:#ff9b55;font-weight:700;letter-spacing:1px">YOUR SAVED ITEMS</p><h1>My Wishlist</h1><p style="margin:5px 0 0;color:#64748b">Your favourite products, all in one place.</p></div><a class="ecom-wishlist-action" href="<?php echo e(route('shop-grid')); ?>" style="text-decoration:none">Continue Shopping</a></div>
 <div class="ecom-wishlist-layout">
  <aside class="ecom-category-sidebar"><h2>Categories</h2><a href="<?php echo e(route('shop-grid')); ?>">All Products</a><a href="<?php echo e(route('shop-grid')); ?>">Electronics</a><a href="<?php echo e(route('shop-grid')); ?>">Computers & Laptops</a><a href="<?php echo e(route('shop-grid')); ?>">Headphones & Audio</a><a href="<?php echo e(route('shop-grid')); ?>">Smart Watches</a><a href="<?php echo e(route('shop-grid')); ?>">Home Security</a><a href="<?php echo e(route('shop-compare')); ?>">Compare Products</a></aside>
  <section aria-label="Wishlist products">
   <div class="ecom-select-all-row" id="ecom-select-all-row" style="display:none"><label><input type="checkbox" id="ecom-select-all"> Select All</label><button class="ecom-remove-selected" id="ecom-remove-selected" disabled>Remove Selected</button><span style="color:#64748b;font-size:13px">Select products to remove them together.</span></div>
   <div class="ecom-wishlist-grid" id="ecom-wishlist-grid"><div class="ecom-wishlist-empty"><h2>Loading wishlist…</h2></div></div>
  </section>
 </div>
</main>
<script src="<?php echo e(asset('js/product-catalog.js')); ?>"></script><script src="<?php echo e(asset('js/storefront.js')); ?>"></script>
</body></html><?php /**PATH C:\wamp64\www\ecom-demo-updated\ecom-demo\resources\views/shop-wishlist.blade.php ENDPATH**/ ?>