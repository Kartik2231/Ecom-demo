<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecom Demo</title>

    <!-- google fonts linked here -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <?php echo app('Illuminate\Foundation\Vite')(['resources/js/app.js']); ?>

    <!-- tailwind css linked here -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- icon linked here -->
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/3.0.0/uicons-regular-rounded/css/uicons-regular-rounded.css">
</head>

<body class="font-['DM_Sans']">
    <div class="top-header relative z-13">
        <nav>
            <ul>
                <li><a href="<?php echo e(route('about-us')); ?>">About Us</a></li>
                <li><a href="<?php echo e(route('career')); ?>">Careers</a></li>
                <li><a href="<?php echo e(route('shop')); ?>">Open a shop</a></li>
            </ul>
        </nav>
        <p>Free shipping for all orders over <strong>$75.00</strong></p>

        <div class="flex gap-4">
            <p>Need help? Call Us: <span class="text-[#5BC694] font-bold text-sm">+1800 900</span></p>
            <div class="flex gap-4">
                <span class="flex items-center text-xs gap-2">
                    <svg width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <rect y="0.5" width="18" height="11" fill="url(#pattern0)" />
                        <defs>
                            <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                <use xlink:href="#image0_123_4733" transform="translate(-0.111111) scale(0.00244444 0.004)" />
                            </pattern>
                            <image id="image0_123_4733" width="500" height="250" xlink:href="data:image/png;base64,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QAIUOnOABEiABEiABBQgQKErEEQOgQRIgARIgAQodOYACZAACZAACShAgEJXIIgcAgmQAAmQAAlQ6MwBEiABEiABElCAAIWuQBA5BBIgARIgARKg0JkDJEACJEACJKAAAQpdgSByCCRAAiRAAiRAoTMHSIAESIAESEABAhS6AkHkEEiABEiABEiAQmcOkAAJkAAJkIACBCh0BYLIIZAACZAACZAAhc4cIAESIAESIAEFCFDoCgSRQyABEiABEiABCp05QAIkQAIkQAIKEKDQFQgih0ACJEACJEACFDpzgARIgARIgAQUIEChKxBEDoEESIAESIAEKHTmAAmQAAmQAAkoQIBCVyCIHAIJkAAJkAAJUOjMARIgARIgARJQgACFrkAQOQQSIAESIAESoNCZAyRAAiRAAiSgAAEKXYEgcggkQAIkQAIkQKEzB0iABEiABEhAAQIUugJB5BBIgARIgARIgEJnDpAACZAACZCAAgQodAWCyCGQAAmQAAmQAIXOHCABEiABEiABBQhQ6AoEkUMgARIgARIgAQqdOUACJEACJEACChCg0BUIIodAAiRAAiRAAhQ6c4AESIAESIAEFCBAoSsQRA6BBEiABEiABCh05gAJkAAJkAAJKECAQlcgiBwCCZAACZAACVDozAESIAESIAESUIAAha5AEDkEEiABEiABEqDQmQMkQAIkQAIkoAABCl2BIHIIJEACJEACJEChMwdIgARIgARIQAEC1dqeolPrAZQpMBgOgQQkIxAHNA1adrZk/e6ju/E44h0RAHEAmvzj4QhIQD4C1dqHo35OocsXOPZYEQLxSBQdB2uBuC5CSf/i8cQ/SrIrhyX+gcI/EiABNwho1Vo0GKLQ3WDPNkkAQPvX3+LTi69HLBSC5vdLySTeHkbeaafg1FdWQ8vNkXIM7DQJyE4gDlRr8XicQpc9kuy/tATC+7/HvvOukF/oI0fg9K3PAlly/qNE2gRix0ngCAEKndlAAm4SaP9qPz6eNEUJoY/csoErdDeTiW1nOgEKPdMzgON3lwCF7i5/tk4CChGg0BUKJociIQEKXcKgscsk4E0CFLo348JeZQoBCj1TIs1xkoDtBCh02xGzARIYgACFzvQgARKwiACFbhFIVkMChghQ6Iaw8SISIIGjCVDozAoScJMAhe4mfbZNAkoRoNCVCicHIx0BCl26kLHD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" />
                        </defs>
                    </svg>
                    English
                    <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.6">
                            <path d="M8.94579 0.453125H4.79245H1.05243C0.412433 0.453125 0.0924332 1.22646 0.545767 1.6798L3.99912 5.13313C4.55245 5.68646 5.45245 5.68646 6.00579 5.13313L7.31912 3.8198L9.45912 1.6798C9.90579 1.22646 9.58579 0.453125 8.94579 0.453125Z" fill="#425A8B" />
                        </g>
                    </svg>
                </span>
                <span class="flex items-center text-xs uppercase gap-2">Usd
                    <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.6">
                            <path d="M8.94579 0.453125H4.79245H1.05243C0.412433 0.453125 0.0924332 1.22646 0.545767 1.6798L3.99912 5.13313C4.55245 5.68646 5.45245 5.68646 6.00579 5.13313L7.31912 3.8198L9.45912 1.6798C9.90579 1.22646 9.58579 0.453125 8.94579 0.453125Z" fill="#425A8B" />
                        </g>
                    </svg>
                </span>
            </div>
        </div>
    </div>

    <header class="border border-solid border-[#D5DFE4]">
        <div class="container flex justify-between items-center max-w-[92%]">
            <div class="flex items-center gap-10 ">
                <div class="logo">
                    <img src="<?php echo e(asset('assets/logo.svg')); ?>" alt="Logo">
                </div>

                <div class="flex border border-solid border-[#D5DFE4] inline select rounded-lg">
                    <select name="" id="" class="leading-7 font-['DM_Sans'] text-sm bg-white">
                        <option value="op1">All categories</option>
                        <option value="op2">Computers Accessories</option>
                        <option value="op3">Cell Phones</option>
                        <option value="op4">Gaming Gatgets</option>
                        <option value="op5">Smart watches</option>
                        <option value="op6">Wired Headphone</option>
                        <option value="op7">Mouse Keyboard</option>
                        <option value="op8">Headphone</option>
                        <option value="op9">Bluetooth devices</option>
                        <option value="op10">Cloud Software</option>

                        <input type="text" placeholder="Search for items" class="text-sm">
                    </select>
                </div>

                <nav class="nav-links">
                    <ul class="flex gap-5">
                        <li>
                            <a href="<?php echo e(route('welcome')); ?>" class="hover:text-[#FD9636] duration-300 inline-block">Home
                            </a>
                        </li>

                        <li class="relative group/shop">
                            <a href="<?php echo e(route('shop')); ?>" class="inline-flex items-center gap-1 text-[#425A8B] hover:text-[#FD9636] duration-300 transition-colors">
                                Shop
                                <img class="inline-block transition-transform duration-300 group-hover/shop:rotate-180" src="<?php echo e(asset('assets/down.png')); ?>" alt="arrow">
                            </a>
                            <ul data-shop-dropdown class="absolute left-0 top-full z-[99999] mt-0 w-[275px] max-w-[90vw] origin-top-left border border-solid border-[#D5DFE4] bg-white py-2 shadow-xl rounded-md opacity-0 invisible pointer-events-none translate-y-2 scale-95 transition-all duration-200 ease-out group-hover/shop:opacity-100 group-hover/shop:visible group-hover/shop:pointer-events-auto group-hover/shop:translate-y-0 group-hover/shop:scale-100 group-focus-within/shop:opacity-100 group-focus-within/shop:visible group-focus-within/shop:pointer-events-auto group-focus-within/shop:translate-y-0 group-focus-within/shop:scale-100">

                                <li>
                                    <a href="<?php echo e(route('shop-grid')); ?>" class="block px-6 py-2.5 text-[#425A8B] hover:text-[#FD9636] hover:bg-[#F8FAFC] transition-colors duration-200">Shop Grid</a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('shop-grid-2')); ?>" class="block px-6 py-2.5 text-[#425A8B] hover:text-[#FD9636] hover:bg-[#F8FAFC] transition-colors duration-200">Shop Grid 2</a>
                                </li>

                                <li>
                                    <a href="<?php echo e(route('product')); ?>" class="block px-6 py-2.5 text-[#425A8B] hover:text-[#FD9636] hover:bg-[#F8FAFC] transition-colors duration-200">Single Product</a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('checkout')); ?>" class="block px-6 py-2.5 text-[#425A8B] hover:text-[#FD9636] hover:bg-[#F8FAFC] transition-colors duration-200">Shop Checkout</a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('shop-compare')); ?>" class="block px-6 py-2.5 text-[#425A8B] hover:text-[#FD9636] hover:bg-[#F8FAFC] transition-colors duration-200">Shop Compare</a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('shop-wishlist')); ?>" class="block px-6 py-2.5 text-[#425A8B] hover:text-[#FD9636] hover:bg-[#F8FAFC] transition-colors duration-200">Shop Wishlist</a>
                                </li>
                            </ul>

                        </li>
                        <li>

                            <a href="<?php echo e(route('shop-vendor')); ?>" class="hover:text-[#FD9636] duration-300 inline-block">
                                Vendors
                            </a>
                        </li>
                        <li class="relative group/pages">
                            <a href="#" class="inline-flex items-center gap-1 text-[#425A8B] hover:text-[#FD9636] duration-300 transition-colors">
                                Pages
                                <img class="inline-block transition-transform duration-300 group-hover/pages:rotate-180" src="<?php echo e(asset('assets/down.png')); ?>" alt="arrow">
                            </a>
                            <ul data-shop-dropdown class="absolute left-0 top-full z-[99999] mt-0 w-[275px] max-w-[90vw] origin-top-left border border-solid border-[#D5DFE4] bg-white py-2 shadow-xl rounded-md opacity-0 invisible pointer-events-none translate-y-2 scale-95 transition-all duration-200 ease-out group-hover/pages:opacity-100 group-hover/pages:visible group-hover/pages:pointer-events-auto group-hover/pages:translate-y-0 group-hover/pages:scale-100 group-focus-within/pages:opacity-100 group-focus-within/pages:visible group-focus-within/pages:pointer-events-auto group-focus-within/pages:translate-y-0 group-focus-within/pages:scale-100">
                                <li>
                                    <a href="<?php echo e(route('about-us')); ?>" class="block px-6 py-2.5 text-[#425A8B] hover:text-[#FD9636] hover:bg-[#F8FAFC] transition-colors duration-200">About Us</a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('contact-us')); ?>" class="block px-6 py-2.5 text-[#425A8B] hover:text-[#FD9636] hover:bg-[#F8FAFC] transition-colors duration-200">Contact Us</a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('career')); ?>" class="block px-6 py-2.5 text-[#425A8B] hover:text-[#FD9636] hover:bg-[#F8FAFC] transition-colors duration-200">Careers</a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('terms-conditions')); ?>" class="block px-6 py-2.5 text-[#425A8B] hover:text-[#FD9636] hover:bg-[#F8FAFC] transition-colors duration-200">Term and Condition</a>
                                </li>

                                <li>
                                    <a href="<?php echo e(route('404-page')); ?>" class="block px-6 py-2.5 text-[#425A8B] hover:text-[#FD9636] hover:bg-[#F8FAFC] transition-colors duration-200">404</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="<?php echo e(route('blogs')); ?>" class="hover:text-[#FD9636] duration-300 inline-block">
                                Blog
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('contact-us')); ?>" class="hover:text-[#FD9636] duration-300 inline-block">
                                Contact Us
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="shopping-icons items-center flex gap-3 justify-end">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.4" d="M12 12C14.7614 12 17 9.76142 17 7C17 4.23858 14.7614 2 12 2C9.23858 2 7 4.23858 7 7C7 9.76142 9.23858 12 12 12Z" fill="#425A8B" />
                    <path d="M11.9999 14.5C6.98991 14.5 2.90991 17.86 2.90991 22C2.90991 22.28 3.12991 22.5 3.40991 22.5H20.5899C20.8699 22.5 21.0899 22.28 21.0899 22C21.0899 17.86 17.0099 14.5 11.9999 14.5Z" fill="#425A8B" />
                </svg>
                <a href="<?php echo e(route('shop-wishlist')); ?>" class="header-wishlist-link" aria-label="Wishlist" style="position:relative;display:inline-flex;align-items:center"><img class="h-11" src="<?php echo e(asset('assets/wishlist.png')); ?>" alt="wishlist"><span data-ecom-wishlist-count class="header-wishlist-count" style="position:absolute;right:-3px;top:-3px;min-width:18px;height:18px;padding:0 4px;border-radius:999px;background:#ff9b55;color:#fff;font-size:11px;line-height:18px;text-align:center;font-weight:700">0</span></a>
                <button type="button" class="header-cart-toggle" id="header-cart-toggle" aria-label="Open shopping cart" aria-controls="header-cart-panel" aria-expanded="false">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M16.25 22.5C17.2165 22.5 18 21.7165 18 20.75C18 19.7835 17.2165 19 16.25 19C15.2835 19 14.5 19.7835 14.5 20.75C14.5 21.7165 15.2835 22.5 16.25 22.5Z" fill="#425A8B" />
                        <path d="M8.25 22.5C9.2165 22.5 10 21.7165 10 20.75C10 19.7835 9.2165 19 8.25 19C7.2835 19 6.5 19.7835 6.5 20.75C6.5 21.7165 7.2835 22.5 8.25 22.5Z" fill="#425A8B" />
                        <path opacity="0.4" d="M4.84 3.94L4.64 6.39C4.6 6.86 4.97 7.25 5.44 7.25H20.75C21.17 7.25 21.52 6.92999 21.55 6.50999C21.68 4.73999 20.33 3.3 18.56 3.3H6.28999C6.18999 2.86 5.98999 2.44 5.67999 2.09C5.18999 1.56 4.49 1.25 3.77 1.25H2C1.59 1.25 1.25 1.59 1.25 2C1.25 2.41 1.59 2.75 2 2.75H3.74001C4.05001 2.75 4.34 2.88001 4.55 3.10001C4.76 3.33001 4.86 3.63 4.84 3.94Z" fill="#425A8B" />
                        <path d="M20.5101 8.75H5.17006C4.75006 8.75 4.41005 9.07 4.37005 9.48L4.01005 13.83C3.87005 15.53 5.21006 17 6.92006 17H18.0401C19.5401 17 20.8601 15.77 20.9701 14.27L21.3001 9.60001C21.3401 9.14001 20.9801 8.75 20.5101 8.75Z" fill="#425A8B" />
                    </svg>
                    <span class="cart-count-badge" id="header-cart-count" aria-live="polite">0</span>
                </button>
                <div class="header-cart-panel" id="header-cart-panel" hidden>
                    <div class="header-cart-panel-heading">
                        <div>
                            <h2>Your Cart</h2>
                            <p><span id="cart-item-count">0</span> items in your cart</p>
                        </div>
                        <button type="button" class="cart-panel-close" id="cart-panel-close" aria-label="Close cart">&times;</button>
                    </div>
                    <div class="header-cart-items" id="header-cart-items">
                        <div class="cart-empty-state"><span class="cart-empty-mark">0</span>
                            <h3>Your cart is empty</h3>
                            <p>Add a product and it will appear here.</p>
                        </div>
                    </div>
                    <div class="header-cart-summary">
                        <div><span>Subtotal</span><strong id="cart-subtotal">$0.00</strong></div>
                        <div class="cart-summary-actions">
                            <a href="<?php echo e(url('/shop')); ?>" id="cart-view-cart" class="cart-view-button">View cart</a>
                            <button type="button" id="cart-checkout" class="cart-checkout-button">Checkout</button>
                        </div>
                        <button type="button" id="cart-continue-shopping" class="cart-continue-button">Continue shopping</button>
                    </div>
                </div>
                <img class="h-11" src="<?php echo e(asset('assets/restore.png')); ?>" alt="wishlist">
                <button type="button" id="mobile-menu-toggle" class="mobile-menu-toggle" aria-label="Open navigation menu" aria-controls="mobile-navigation-drawer" aria-expanded="false">
                    <span></span><span></span><span></span>
                </button>
            </div>
        </div>
    </header>

    <!-- Responsive navigation drawer; existing desktop navigation remains unchanged. -->
    <div id="mobile-menu-overlay" class="mobile-menu-overlay" aria-hidden="true"></div>
    <aside id="mobile-navigation-drawer" class="mobile-navigation-drawer" aria-label="Mobile navigation" aria-hidden="true" inert>
        <div class="mobile-drawer-header">
            <img src="<?php echo e(asset('assets/logo.svg')); ?>" alt="Logo" class="mobile-drawer-logo">
            <button type="button" id="mobile-menu-close" class="mobile-menu-close" aria-label="Close navigation menu">&times;</button>
        </div>
        <div id="mobile-drawer-content" class="mobile-drawer-content"></div>
    </aside>

    <!-- Category icon rail and interactive mega menu -->
    <div class="category-sidebar absolute top-12" id="category-sidebar">
        <nav aria-label="Product categories">
            <ul class="category-icon-list">
                <li>
                    <button type="button" class="category-icon-button" data-category="0" aria-label="All categories" title="All categories" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#C5CDDF" aria-hidden="true">
                            <circle cx="7" cy="7" r="4" />
                            <circle cx="17" cy="7" r="4" />
                            <circle cx="7" cy="17" r="4" />
                            <circle cx="17" cy="17" r="4" />
                        </svg></button>
                </li>
                <li>
                    <button type="button" class="category-icon-button" data-category="1" aria-label="Computers & Accessories" title="Computers & Accessories">
                        <img src="<?php echo e(asset('assets/monitor.svg')); ?>" alt="" loading="lazy">
                    </button>
                </li>
                <li>
                    <button type="button" class="category-icon-button" data-category="2" aria-label="Cell Phones" title="Cell Phones">
                        <img src="<?php echo e(asset('assets/mobile.svg')); ?>" alt="" loading="lazy">
                    </button>
                </li>
                <li>
                    <button type="button" class="category-icon-button" data-category="3" aria-label="Gaming Gadgets" title="Gaming Gadgets">
                        <img src="<?php echo e(asset('assets/game.svg')); ?>" alt="" loading="lazy">
                    </button>
                </li>
                <li>
                    <button type="button" class="category-icon-button" data-category="4" aria-label="Smart watches" title="Smart watches"><img src="<?php echo e(asset('assets/clock.svg')); ?>" alt="" loading="lazy">
                    </button>
                </li>
                <li>
                    <button type="button" class="category-icon-button" data-category="5" aria-label="Wired Headphone" title="Wired Headphone"><img src="<?php echo e(asset('assets/airpods.svg')); ?>" alt="" loading="lazy">
                    </button>
                </li>
                <li>
                    <button type="button" class="category-icon-button" data-category="6" aria-label="Mouse & Keyboard" title="Mouse & Keyboard"><img src="<?php echo e(asset('assets/mouse.svg')); ?>" alt="" loading="lazy">
                    </button>
                </li>
                <li>
                    <button type="button" class="category-icon-button" data-category="7" aria-label="Headphone" title="Headphone"><img src="<?php echo e(asset('assets/music-play.svg')); ?>" alt="" loading="lazy">
                    </button>
                </li>
                <li>
                    <button type="button" class="category-icon-button" data-category="8" aria-label="Bluetooth devices" title="Bluetooth devices"><img src="<?php echo e(asset('assets/bluetooth.svg')); ?>" alt="" loading="lazy"></button>
                </li>
                <li>
                    <button type="button" class="category-icon-button" data-category="9" aria-label="Cloud Software" title="Cloud Software"><img src="<?php echo e(asset('assets/clound.svg')); ?>" alt="" loading="lazy">
                    </button>
                </li>
                <li>
                    <button type="button" class="category-icon-button" data-category="10" aria-label="Electric accessories" title="Electric accessories"><img src="<?php echo e(asset('assets/electricity.svg')); ?>" alt="" loading="lazy">
                    </button>
                </li>
                <li>
                    <button type="button" class="category-icon-button" data-category="11" aria-label="Mainboard & CPU" title="Mainboard & CPU"><img src="<?php echo e(asset('assets/cpu.svg')); ?>" alt="" loading="lazy">
                    </button>
                </li>
                <li>
                    <button type="button" class="category-icon-button" data-category="12" aria-label="Desktop PC" title="Desktop PC"><img src="<?php echo e(asset('assets/devices.svg')); ?>" alt="" loading="lazy">
                    </button>
                </li>
                <li>
                    <button type="button" class="category-icon-button" data-category="13" aria-label="Speaker" title="Speaker"><img src="<?php echo e(asset('assets/driver.svg')); ?>" alt="" loading="lazy">
                    </button>
                </li>
                <li>
                    <button type="button" class="category-icon-button" data-category="14" aria-label="Bluetooth Headphone" title="Bluetooth Headphone"><img src="<?php echo e(asset('assets/airpod.svg')); ?>" alt="" loading="lazy">
                    </button>
                </li>
                <li>
                    <button type="button" class="category-icon-button" data-category="15" aria-label="Computer Decor" title="Computer Decor"><img src="<?php echo e(asset('assets/lamp.svg')); ?>" alt="" loading="lazy">
                    </button>
                </li>
            </ul>
        </nav>
        <section class="category-mega-menu" id="category-mega-menu" aria-label="Category menu" hidden>
            <div class="category-menu-top"><strong>Ecom®</strong><button type="button" id="category-menu-close" aria-label="Close categories">×</button></div>
            <div class="category-menu-body">
                <div class="category-menu-list" id="category-menu-list"></div>
                <div class="category-submenu" id="category-submenu"></div>
            </div>
        </section>
    </div>

    <!-- banner section -->
    <section class="max-w-[1360px] mx-auto relative px-4">
        <div class="banner container mt-5 flex gap-6 max-[576px]:flex-wrap">
            <div class="electronic-slider relative w-[850px]">

                <!-- Slide 1 -->
                <div class="electronic-bg w-[850px] relative rounded-lg bg-[#D4F7FF] pt-[60px] pb-[25px] px-[60px] bg-cover bg-center bg-no-repeat h-[500px]">
                    <p class="uppercase text-sm leading-5">hot right now</p>
                    <h2 class="text-[45px] leading-[58px] font-[600] mt-2">Sale Up to 50% Off</h2>
                    <h1 class="text-[64px] leading-[83px] font-bold capitalize">mobile devices</h1>
                    <p class="w-[300px] text-sm">Curabitur id lectus in felis hendrerit efficitur quis quis lectus. Donec sollicitudin elit eu ipsum maximus blandit. Curabitur blandit tempus consectetur.</p>

                    <div class="btn mt-9 gap-3">
                        <a href="#" class="bg-[#fd9636] hover:bg-[#425A8B] duration-300 rounded-[4px] text-white py-3 px-[22px] text-sm font-bold">Shop now</a>
                        <a href="#" class="ml-5">Learn more</a>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="electronic-bg trending-bg w-[850px] relative rounded-lg bg-[#DCF4E0] pt-[60px] pb-[25px] px-[60px] bg-cover bg-center bg-no-repeat h-[500px]">
                    <p class="uppercase text-sm leading-5">trending now</p>
                    <h2 class="text-[45px] leading-[58px] font-[600] mt-2">Big Sale 25%</h2>
                    <h1 class="text-[64px] leading-[83px] font-bold capitalize">laptop & pC</h1>
                    <p class="w-[300px] text-sm">Curabitur id lectus in felis hendrerit efficitur quis quis lectus. Donec sollicitudin elit eu ipsum maximus blandit. Curabitur blandit tempus consectetur.</p>

                    <div class="btn mt-9 gap-3">
                        <a href="#" class="bg-[#fd9636] hover:bg-[#425A8B] duration-300 rounded-[4px] text-white py-3 px-[22px] text-sm font-bold">Shop now</a>
                        <a href="#" class="ml-5">Learn more</a>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="electronic-bg hot-collection w-[850px] relative rounded-lg bg-[#F7E5D5] pt-[60px] pb-[25px] px-[60px] bg-cover bg-center bg-no-repeat h-[500px]">
                    <p class="uppercase text-sm leading-5">top sale this month</p>
                    <h2 class="text-[45px] leading-[58px] font-[600] mt-2">Hot Collection</h2>
                    <h1 class="text-[64px] leading-[83px] font-bold capitalize">Virtual glasses</h1>
                    <p class="w-[300px] text-sm">Curabitur id lectus in felis hendrerit efficitur quis quis lectus. Donec sollicitudin elit eu ipsum maximus blandit. Curabitur blandit tempus consectetur.</p>

                    <div class="btn mt-9 gap-3">
                        <a href="#" class="bg-[#fd9636] hover:bg-[#425A8B] duration-300 rounded-[4px] text-white py-3 px-[22px] text-sm font-bold">Shop now</a>
                        <a href="#" class="ml-5">Learn more</a>
                    </div>
                </div>

                <!-- Slider Dots -->
                <div class="absolute bottom-14 left-[60px] z-10 flex items-center gap-2">
                    <button type="button" class="slider-dot active bg-[#FD9636] rounded-full h-[12px] w-[12px]" aria-label="Slide 1"></button>
                    <button type="button" class="slider-dot bg-[#FD9636] opacity-[0.2] rounded-full h-[12px] w-[12px]" aria-label="Slide 2"></button>
                    <button type="button" class="slider-dot bg-[#FD9636] opacity-[0.2] rounded-full h-[12px] w-[12px]" aria-label="Slide 3"></button>
                </div>

            </div>

            <div class="images-container ">
                <div class="smart-watch-bg rounded-lg mb-[24px] bg-right bg-bottom bg-no-repeat bg-center h-[238px] bg-[#FFF4F6] w-[450px] p-5 bg-[length:60%_auto]">
                    <p class="uppercase text-sm leading-[32px]"><span class="text-[#F53658]">10%</span>sale off</p>
                    <h3 class="text-2xl font-bold leading-[31px]">Apple Watch Serial 7</h3>
                    <p class="text-[19px] leading-[27px] mt-2.5">Don't miss the last <br>opportunity.</p>
                    <a href="#" class="bg-[#425A8B] hover:bg-[#fd9636] duration-300 inline-flex gap-2 items-center mt-4 rounded text-white py-3 px-[22px] text-sm font-bold">Shop now <img class="h-[10px] rotate-[269deg] brightness-0 invert" src="<?php echo e(asset('assets/down.png')); ?>" alt="lamp"></a>
                </div>
                <div class="latest-collection-bg rounded-lg mb-[24px] bg-right bg-bottom bg-no-repeat bg-center h-[238px] bg-[#DCF4E0] w-[450px] p-5 bg-[length:60%_auto]">
                    <p class="uppercase text-sm leading-[32px] text-[#F53658]">LATEST COLLECTION</p>
                    <h3 class="text-2xl font-bold leading-[31px]">Apple Devices & Software</h3>
                    <p class="text-[19px] leading-[27px] mt-2.5">Don't miss the last<br> opportunity.</p>
                    <a href="#" class="bg-[#fd9636] hover:bg-[#425A8B] duration-300 inline-flex gap-2 items-center mt-4 rounded-[4px] text-white py-3 px-[22px] text-sm font-bold">Shop now <img class="h-[10px] rotate-[269deg] brightness-0 invert" src="<?php echo e(asset('assets/down.png')); ?>" alt="lamp"></a>
                </div>
            </div>
        </div>

        <!-- featured categories -->
        <div class="categories flex items-center justify-between">
            <div>
                <h2 class="text-[32px] leading-41] font-bold max-[576px]:mt-5">Featured Categories</h2>
                <p class="leading-6">Choose your necessary products from this feature categories.</p>
            </div>

            <div class="categories-items border rounded p-[16px] border-[#D5DFE4] border-solid flex-wrap flex gap-5 w-[50%]">
                <a href="#" class="opacity-[0.4] duration-700 hover:opacity-[100]">
                    <svg width="78" height="15" viewBox="0 0 78 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_209_4675)">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M75.522 0.139404C75.8322 0.141628 76.1368 0.222017 76.4077 0.373139C76.6914 0.524944 76.9249 0.755679 77.0802 1.03744C77.2375 1.31061 77.3202 1.62028 77.3202 1.93547C77.3202 2.25066 77.2375 2.56033 77.0802 2.8335C76.9267 3.1162 76.6945 3.34836 76.4118 3.5019C76.1398 3.65804 75.8315 3.74005 75.5179 3.73973C75.203 3.73963 74.8935 3.65767 74.6199 3.5019C74.3378 3.34887 74.1068 3.11648 73.9556 2.8335C73.7982 2.56179 73.7147 2.25357 73.7136 1.93957C73.7152 1.62304 73.7985 1.31228 73.9556 1.03744C74.1147 0.755807 74.3508 0.525373 74.6363 0.373139C74.907 0.221518 75.2117 0.141095 75.522 0.139404ZM74.7306 2.93601V1.00053H75.3949C75.5618 0.993568 75.7288 1.01013 75.891 1.04974C75.99 1.08471 76.0749 1.15091 76.133 1.23837C76.1915 1.32114 76.223 1.41995 76.2232 1.52131C76.2249 1.66025 76.1719 1.79429 76.0756 1.89446C75.9656 2.00217 75.8194 2.06504 75.6655 2.07079C75.7277 2.09368 75.7848 2.1285 75.8336 2.1733C75.9427 2.29031 76.0376 2.41968 76.1166 2.55876L76.3544 2.93601H75.9731L75.8008 2.62847C75.7211 2.45984 75.6098 2.3081 75.4728 2.1815C75.3992 2.13178 75.3114 2.10732 75.2226 2.11179H75.0381V2.93191L74.7306 2.93601Z" fill="#425A8B" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M40.7899 0.020503H40.8514V4.16211H36.6893V0.020503H40.7899ZM22.5996 8.77529L32.2729 9.37397C32.4662 9.37613 32.6508 9.45442 32.7867 9.59184C32.9226 9.72926 32.9988 9.91472 32.9988 10.108C32.9988 10.2038 32.9799 10.2987 32.9432 10.3873C32.9065 10.4759 32.8527 10.5563 32.785 10.6241C32.7172 10.6919 32.6367 10.7456 32.5482 10.7823C32.4596 10.819 32.3647 10.8379 32.2688 10.8379H18.4867V5.4497C18.8968 7.11454 20.3689 8.47594 22.5873 8.77529H22.5996ZM18.499 15H32.5887C33.5713 14.9976 34.5227 14.6547 35.2808 14.0296C36.039 13.4046 36.557 12.536 36.7467 11.5719C36.9135 12.5259 37.4093 13.3912 38.148 14.0175C38.8867 14.6438 39.8215 14.9915 40.7899 15H49.8112C50.7753 14.9963 51.7078 14.6563 52.4481 14.0388C53.1884 13.4212 53.6901 12.5648 53.8667 11.617V15H68.3049C69.4274 14.9968 70.5029 14.5494 71.2966 13.7557C72.0903 12.9621 72.5376 11.8865 72.5408 10.7641V10.1613C72.5376 9.03885 72.0903 7.96331 71.2966 7.16963C70.5029 6.37594 69.4274 5.92861 68.3049 5.92537L67.5135 5.88846C63.0028 5.69163 58.5414 5.4784 54.0553 5.23647C54.4039 6.99563 55.8883 8.45954 58.2174 8.77529L67.9974 9.37397C68.1913 9.37506 68.377 9.45287 68.5138 9.5904C68.6505 9.72794 68.7273 9.91402 68.7273 10.108C68.7273 10.3016 68.6504 10.4872 68.5135 10.6241C68.3766 10.761 68.191 10.8379 67.9974 10.8379H53.9118V5.22827L49.7292 5.01504V9.80864C49.7292 10.1349 49.5996 10.4478 49.3689 10.6785C49.1382 10.9092 48.8253 11.0388 48.499 11.0388H42.0816C41.7553 11.0388 41.4424 10.9092 41.2117 10.6785C40.981 10.4478 40.8514 10.1349 40.8514 9.80864V4.55577L36.6893 4.33844V9.09513C36.4426 8.1993 35.9068 7.41008 35.1652 6.8502C34.4236 6.29031 33.5178 5.99113 32.5887 5.99918L14.1606 4.7936V15H18.4867H18.499ZM36.0168 4.16211V0H22.5996C21.656 0.00609148 20.7411 0.325589 19.9989 0.90827C19.2566 1.49095 18.729 2.30377 18.499 3.21897V0.020503H10.4783L7.74725 4.16211H36.0168ZM12.3932 4.69109L5.77896 15H0.604004L7.57503 4.41225L12.385 4.69109H12.3932ZM72.5368 4.16211V0H58.2134C57.1032 0.00296199 56.0381 0.439992 55.2459 1.21771C54.4536 1.99543 53.9969 3.05216 53.9733 4.16211H72.5368ZM49.7456 4.16211V0.020503H53.9118V4.16211H49.7456Z" fill="#425A8B" />
                        </g>
                        <defs>
                            <clipPath id="clip0_209_4675">
                                <rect width="76.7181" height="15" fill="white" transform="translate(0.604004)" />
                            </clipPath>
                        </defs>
                    </svg>
                </a>

                <a href="#" class="opacity-[0.4] duration-700 hover:opacity-[100]">
                    <svg width="84" height="15" viewBox="0 0 84 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_209_4680)">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M56.7847 14.6825C56.7847 14.7268 56.8019 14.7693 56.8329 14.8011C56.8638 14.8328 56.9059 14.8512 56.9501 14.8524H61.0781C61.1002 14.8524 61.1221 14.848 61.1424 14.8394C61.1628 14.8308 61.1812 14.8182 61.1967 14.8024C61.2121 14.7865 61.2242 14.7678 61.2322 14.7472C61.2403 14.7266 61.2441 14.7046 61.2435 14.6825V0.362254C61.2441 0.340356 61.2403 0.318562 61.2322 0.298207C61.2241 0.277852 61.2119 0.259363 61.1964 0.243873C61.1809 0.228382 61.1625 0.216216 61.1421 0.208119C61.1217 0.200021 61.0999 0.196163 61.0781 0.19678H56.9501C56.9063 0.19678 56.8642 0.214214 56.8331 0.245246C56.8021 0.276279 56.7847 0.318368 56.7847 0.362254V14.6735V14.6825Z" fill="#425A8B" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M37.5181 14.508L31.4403 0.447223C31.4187 0.403368 31.3857 0.366118 31.3448 0.339369C31.3039 0.312619 31.2565 0.297353 31.2077 0.295166H25.0941C25.0452 0.296873 24.9976 0.311946 24.9566 0.33875C24.9156 0.365554 24.8828 0.403067 24.8616 0.447223L18.7837 14.508C18.7729 14.524 18.767 14.5429 18.7669 14.5622C18.7667 14.5815 18.7721 14.6004 18.7826 14.6166C18.7931 14.6328 18.8081 14.6456 18.8258 14.6533C18.8435 14.6611 18.8631 14.6634 18.8821 14.6601H23.1845C23.233 14.6567 23.2797 14.6404 23.3198 14.6129C23.3599 14.5854 23.3919 14.5476 23.4125 14.5036L24.307 12.33C24.3278 12.2865 24.36 12.2495 24.4002 12.2227C24.4403 12.1959 24.4869 12.1805 24.5351 12.178H31.7936C31.8414 12.1798 31.8877 12.195 31.9272 12.2219C31.9668 12.2488 31.9979 12.2863 32.0172 12.33L32.8446 14.5036C32.8636 14.5479 32.8946 14.586 32.9341 14.6136C32.9736 14.6413 33.02 14.6574 33.0682 14.6601H37.4152C37.4341 14.6625 37.4533 14.6596 37.4706 14.6518C37.4879 14.6439 37.5027 14.6315 37.5134 14.6157C37.5241 14.5999 37.5301 14.5815 37.531 14.5625C37.5318 14.5435 37.5273 14.5247 37.5181 14.508ZM25.4966 9.14132L27.5047 3.90876C27.7417 3.38551 27.9519 3.31395 28.1845 3.31395C28.417 3.31395 28.6764 3.52862 28.8195 3.9356L30.7963 9.14132H25.4966Z" fill="#425A8B" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M74.9644 0.107361H70.2551C64.5574 0.192334 63.6853 2.00808 63.6853 7.31219C63.6853 8.20665 63.6853 9.1011 63.7256 9.99555C63.8821 13.5331 65.8141 14.6288 69.0431 14.8703C70.0538 14.9374 72.4107 14.9821 72.5091 14.9777C72.5091 14.9777 75.1612 14.9374 76.1719 14.8703C79.4009 14.6288 81.3329 13.5286 81.4894 9.99555C81.5341 9.1011 81.5341 8.20665 81.5341 7.31219C81.5341 2.00808 80.6397 0.192334 74.9644 0.107361ZM77.0261 7.92936C77.0261 10.3444 76.874 11.2925 74.2175 11.3551C73.5243 11.3954 71.6951 11.3954 71.0019 11.3551C68.3409 11.2925 68.1889 10.3444 68.1889 7.92936V7.33455C68.1778 6.76277 68.2002 6.19084 68.256 5.62167C68.5198 3.60021 70.0449 3.71201 71.5297 3.66729C72.0753 3.66729 73.1397 3.66729 73.6898 3.66729C75.1835 3.71201 76.6996 3.60021 76.9635 5.62167C77.0155 6.19107 77.0364 6.76288 77.0261 7.33455V7.92936Z" fill="#425A8B" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.6317 9.19055C13.5065 10.6843 12.9877 11.3059 10.8545 11.3551C10.1613 11.3954 8.3321 11.3954 7.6389 11.3551C4.98237 11.2925 4.82584 10.3444 4.82584 7.92936V7.33455C4.81479 6.76277 4.83719 6.19084 4.89293 5.62167C5.15679 3.60021 6.68184 3.71201 8.16663 3.66729C8.71672 3.66729 9.78112 3.66729 10.3267 3.66729C11.7534 3.70754 13.1979 3.61362 13.5557 5.35781H18.113C17.8491 1.5519 16.5343 0.178917 11.6013 0.107361H6.89203C1.21672 0.192334 0.322266 2.00808 0.322266 7.31219C0.322266 8.20665 0.322266 9.1011 0.366988 9.99555C0.519046 13.5555 2.45554 14.6512 5.68899 14.8927C6.69973 14.9598 9.05214 15.0045 9.15053 15C9.15053 15 11.8026 14.9598 12.8133 14.8927C16.0423 14.6512 17.9788 13.551 18.1309 10.0179C18.1309 9.74063 18.1309 9.46783 18.1622 9.19055H13.6317Z" fill="#425A8B" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M43.3634 9.11896C44.3518 9.11896 45.3178 9.15474 46.3106 9.16368L47.5271 9.21288C48.5378 9.26655 50.0673 8.89982 50.0673 10.5546C50.0673 11.6279 49.0342 11.6503 48.2427 11.6905C47.0978 11.7263 47.2677 11.7442 46.1273 11.7352C45.4251 11.7352 45.367 11.7352 44.6425 11.7039C43.6541 11.6503 42.9967 11.4043 42.9385 10.3041L38.5647 10.2862C38.5647 11.212 38.5065 11.932 38.9851 12.7952C40.0226 14.5394 42.1156 14.8614 43.9046 14.8971L46.0244 14.9553C47.7149 14.9553 50.1255 14.9553 51.6863 14.5572C53.9895 13.9669 54.4368 12.4732 54.4368 10.2862C54.4953 9.31606 54.2276 8.35419 53.6765 7.55367C53.0235 6.69946 51.9859 6.2746 50.7069 6.21199C48.2695 6.08229 47.7194 6.03757 45.282 6.01968H44.4859C43.5199 6.01968 42.4198 5.70662 42.4287 4.51699C42.4376 3.32737 43.426 3.20662 44.4189 3.17531C44.9063 3.17531 45.4877 3.17531 46.4761 3.17531C47.1783 3.17531 46.9725 3.21556 47.6747 3.20662C48.8688 3.20662 49.9824 3.2737 49.9734 4.61538L54.3652 4.64669V3.98479C54.392 0.675313 52.2006 0.259392 49.7811 0.0894454C48.7927 0 47.782 0 46.7936 0C44.884 0 44.9019 0.0268336 42.9922 0.125224C39.6067 0.362254 38.019 1.01968 37.9922 4.5975C37.9654 8.39893 39.96 9.06977 43.3589 9.0966L43.3634 9.11896Z" fill="#425A8B" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M83.8418 13.1395C83.7457 12.9683 83.6051 12.8261 83.4348 12.7281C83.2646 12.6309 83.0718 12.58 82.8758 12.5805C82.6812 12.5802 82.49 12.6311 82.3213 12.7281C82.1487 12.8246 82.0063 12.967 81.9098 13.1395C81.8122 13.3096 81.7613 13.5025 81.7622 13.6986C81.7618 13.8957 81.8138 14.0895 81.9128 14.26C82.0118 14.4305 82.1543 14.5717 82.3257 14.6691C82.4938 14.7631 82.6832 14.8124 82.8758 14.8124C83.0684 14.8124 83.2578 14.7631 83.4259 14.6691C83.597 14.5708 83.7394 14.4296 83.839 14.2594C83.9386 14.0891 83.992 13.8958 83.9939 13.6986C83.9954 13.5018 83.9428 13.3084 83.8418 13.1395ZM83.6942 14.1771C83.6079 14.3159 83.4872 14.43 83.3438 14.5083C83.2004 14.5867 83.0392 14.6266 82.8758 14.6243C82.7116 14.6247 82.5499 14.5831 82.4062 14.5036C82.261 14.4208 82.1402 14.3011 82.0562 14.1565C81.9722 14.012 81.9278 13.8479 81.9277 13.6807C81.9284 13.5146 81.9715 13.3514 82.0529 13.2066C82.1359 13.0616 82.2557 12.9412 82.4002 12.8574C82.5447 12.7736 82.7088 12.7294 82.8758 12.7294C83.0429 12.7294 83.2069 12.7736 83.3514 12.8574C83.4959 12.9412 83.6157 13.0616 83.6987 13.2066C83.7801 13.3514 83.8233 13.5146 83.8239 13.6807C83.8239 13.8489 83.7791 14.014 83.6942 14.1592V14.1771Z" fill="#425A8B" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M83.1891 13.9669C83.1528 13.8913 83.101 13.8243 83.037 13.7701C83.1201 13.7379 83.1906 13.6799 83.2383 13.6046C83.2825 13.5385 83.3059 13.4606 83.3054 13.381C83.3065 13.3156 83.2911 13.251 83.2606 13.1932C83.2294 13.1383 83.1848 13.0921 83.1309 13.059C83.0538 13.0245 82.9694 13.0091 82.885 13.0143H82.4377V14.3918H82.6569V13.8104H82.8179C82.8403 13.8104 82.876 13.8551 82.9297 13.9445L82.9744 14.0295L83.1622 14.3918H83.4082L83.1801 13.9669H83.1891ZM82.8179 13.6449H82.6658V13.1977H82.8313C82.8855 13.1917 82.9401 13.2026 82.9878 13.229C83.0171 13.2486 83.0416 13.2745 83.0594 13.305C83.0742 13.3388 83.0818 13.3754 83.0818 13.4123C83.0824 13.4753 83.0619 13.5367 83.0236 13.5867C82.9973 13.6142 82.9652 13.6353 82.9295 13.6485C82.8939 13.6616 82.8557 13.6665 82.8179 13.6628V13.6449Z" fill="#425A8B" />
                        </g>
                        <defs>
                            <clipPath id="clip0_209_4680">
                                <rect width="83.6717" height="15" fill="white" transform="translate(0.322266)" />
                            </clipPath>
                        </defs>
                    </svg>
                </a>

                <a href="#" class="opacity-[0.4] duration-700 hover:opacity-[100]">
                    <svg width="50" height="15" viewBox="0 0 50 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_209_4690)">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0.993896 0.801644H6.83922L7.47899 0.827338L8.09307 0.881295L8.68146 1.02775L9.24158 1.16136L9.75546 1.37461L10.2359 1.58787L10.6907 1.84481L11.1172 2.13772L11.4898 2.45889L11.8649 2.80576L12.1861 3.17831L12.479 3.57914L12.7179 4.00565L12.9595 4.43217L13.1393 4.88181L13.2986 5.33659L21.5977 0L24.6141 2.02724L18.1547 6.19219L19.1979 6.88592L25.7087 2.74923L28.5119 4.62487L22.0884 8.86948L23.183 9.53494L29.7221 5.37256V0.801644H34.5268V9.90236H38.7971V14.1727H29.7118V9.80473L21.626 15L13.3783 9.42189L13.219 9.90236L13.0699 10.3571L12.813 10.8094L12.5715 11.2641L12.2837 11.665L11.9625 12.0761L11.6157 12.4512L11.2174 12.7698L10.8166 13.0781L10.3361 13.335L9.85566 13.574L9.32123 13.7898L8.76111 13.9491L8.17272 14.0545L7.55864 14.1367L6.89318 14.1624H0.993896V0.801644ZM5.58537 4.99229H6.83922L7.39934 5.04368L7.85412 5.20555L8.25494 5.4445L8.60181 5.76567L8.84076 6.13823L9.02833 6.53905L9.13367 6.99383L9.16193 7.45118L9.13367 7.90596L9.02833 8.35817L8.84076 8.75899L8.58382 9.13412L8.26522 9.45272L7.8644 9.69424L7.38393 9.85355L6.8495 9.9075H5.58537V4.99229ZM39.9893 0.801644H44.8197V9.90236H49.0643V14.1727H39.9893V0.811922V0.801644Z" fill="#425A8B" />
                        </g>
                        <defs>
                            <clipPath id="clip0_209_4690">
                                <rect width="48.0704" height="15" fill="white" transform="translate(0.993896)" />
                            </clipPath>
                        </defs>
                    </svg>
                </a>
                <a href="#" class="opacity-[0.4] duration-700 hover:opacity-[100]">
                    <svg width="102" height="15" viewBox="0 0 102 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_123_4694)">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M24.407 4.29813H28.1671L28.3349 5.53607C28.6241 4.54687 30.5215 3.84113 31.6785 3.84113C34.3684 3.84113 35.4386 5.49558 35.4386 8.38798V14.6298H31.2678V9.05324C31.2678 7.93677 31.0595 7.10954 29.943 7.10954C28.8266 7.10954 28.3754 8.22601 28.3754 9.00696V14.6298H24.407V4.29813Z" fill="#425A8B" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0.0644531 14.6702V0.0404663H7.04671C11.2233 0.0404663 13.1265 2.06515 13.1265 4.99804C13.1265 8.13919 11.3911 10.2911 7.04671 10.2911H4.6923V14.6702H0.0644531ZM6.55501 6.73927C7.67147 6.73927 8.86893 6.49052 8.86893 5.2063C8.86893 3.92207 7.5847 3.59812 6.55501 3.59812H4.6923V6.73927H6.55501Z" fill="#425A8B" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M70.3613 4.29813H74.1677L74.2892 5.53607C74.6189 4.54687 76.5221 3.84113 77.6791 3.84113C80.3228 3.84113 81.4392 5.49558 81.4392 8.38798V14.6703H77.2626V9.05324C77.2626 7.93677 77.0196 7.10954 75.9032 7.10954C74.9082 7.10954 74.3702 8.22601 74.3702 9.00696V14.6703H70.3613V4.29813Z" fill="#425A8B" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M51.1847 10.9506C51.1886 11.4056 51.3501 11.8451 51.6417 12.1944C51.9618 12.4446 52.3522 12.5882 52.7581 12.6051C53.4986 12.6051 54.0829 12.3968 54.0829 11.6969C54.1234 9.96142 47.8006 11.4886 47.8006 7.35825C47.8006 4.46585 50.0277 3.8006 52.3416 3.8006C54.6556 3.8006 57.843 4.2576 57.7157 7.39875H54.2043C54.1903 7.12545 54.0889 6.86389 53.9151 6.65251C53.7797 6.5031 53.6132 6.38525 53.4273 6.30729C53.2414 6.22932 53.0406 6.19313 52.8391 6.20129C52.1392 6.15501 51.4739 6.28228 51.4739 6.82027C51.5202 8.42844 58.005 7.35825 58.005 11.1589C58.005 13.8025 56.148 15 52.5499 15C50.2765 14.9595 47.4246 13.8025 47.4246 10.9506H51.1847Z" fill="#425A8B" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M93.9635 8.30699C93.9863 7.94694 93.868 7.59216 93.6337 7.31779C93.5098 7.1299 93.3451 6.97246 93.1517 6.85726C92.9584 6.74206 92.7415 6.67207 92.5173 6.65254C90.9438 6.65254 90.5331 8.18552 90.5331 9.42346C90.5331 10.8697 91.1926 12.0671 92.4305 12.0671C92.8837 12.0359 93.3067 11.8281 93.6084 11.4885C93.9102 11.1489 94.0667 10.7045 94.0445 10.2507H97.6831C97.7641 12.3969 96.2774 14.9595 92.2685 14.9595C91.5268 14.9941 90.786 14.8735 90.0934 14.6056C89.4009 14.3377 88.7718 13.9282 88.2465 13.4034C87.7211 12.8786 87.311 12.25 87.0424 11.5577C86.7737 10.8655 86.6524 10.1248 86.6862 9.38297C86.6862 5.3741 89.6654 3.84113 92.228 3.84113C95.6989 3.84113 97.6831 5.95258 97.6426 8.30699H93.9635Z" fill="#425A8B" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M19.9874 14.6703L19.5709 13.8025C18.7649 14.5156 17.713 14.887 16.638 14.838C15.3538 14.7975 12.8374 14.6298 12.8374 11.8589C12.8374 7.31778 19.6114 9.38296 19.6114 7.15002C19.6114 6.40378 18.7842 6.44427 18.333 6.44427C17.5057 6.44427 16.9678 6.61203 16.8463 7.84998H13.3696C13.3696 5.70382 14.0349 3.88739 18.5759 3.88739C22.9955 3.88739 23.4525 6.20131 23.4525 8.47474V13.1836C23.4193 13.4305 23.4427 13.6816 23.5208 13.9182C23.599 14.1547 23.7299 14.3703 23.9037 14.5488V14.6298L19.9816 14.6703H19.9874ZM19.6519 9.92094C18.2462 10.5804 16.4703 10.5399 16.4298 11.5696C16.4298 12.2349 16.8 12.5646 17.6272 12.5646C18.9924 12.5646 19.7387 11.1589 19.6519 9.92094ZM43.2944 14.6703L42.8721 13.8025C42.0633 14.5109 41.0134 14.8815 39.9392 14.838C38.6203 14.7975 36.0981 14.6298 36.0981 11.8589C36.0981 7.31778 42.8721 9.38296 42.9184 7.15002C42.9184 6.40378 42.0507 6.44427 41.6342 6.44427C40.7664 6.44427 40.2689 6.61203 40.1475 7.84998H36.6766C36.6766 5.70382 37.2956 3.88739 41.8829 3.88739C46.262 3.88739 46.719 6.20131 46.719 8.47474V13.1836C46.6858 13.4305 46.7092 13.6816 46.7873 13.9182C46.8655 14.1547 46.9964 14.3703 47.1702 14.5488V14.6298L43.2886 14.6703H43.2944ZM42.9647 9.92094C41.559 10.5804 39.7367 10.5399 39.7367 11.5696C39.7367 12.2349 40.0723 12.5646 40.94 12.5646C42.2589 12.5646 43.0457 11.1589 42.9647 9.92094Z" fill="#425A8B" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M86.0267 14.6703V4.29811H82.2087V14.6703H86.0267ZM82.2087 2.97339H86.0499V0H82.2087V2.97339Z" fill="#425A8B" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M64.1658 3.92786C67.5962 3.92786 69.7019 6.32277 69.7019 9.46392C69.7019 12.6051 67.5962 15 64.1658 15C60.7354 15 58.5835 12.6456 58.5835 9.46392C58.5835 6.28227 60.7354 3.92786 64.1658 3.92786ZM62.3436 9.46392C62.3436 10.7481 62.7601 12.3158 64.1658 12.3563C65.5715 12.3968 65.9418 10.7481 65.9418 9.46392C65.9418 8.17969 65.5715 6.61201 64.1658 6.61201C62.7601 6.61201 62.3841 8.22597 62.3436 9.46392Z" fill="#425A8B" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M100.142 12.6456C100.39 12.6456 100.761 12.6861 100.761 12.3564C100.761 12.0266 100.512 12.0266 100.309 12.0266H99.8119V12.6456H100.142ZM100.969 13.6406H100.72L100.223 12.8134H99.8119V13.6406H99.5632V11.8589H100.309C100.639 11.8589 100.934 11.963 100.934 12.3564C100.934 12.7497 100.72 12.8134 100.39 12.8134L100.928 13.6406H100.969ZM101.547 12.7902C101.552 12.5137 101.474 12.2421 101.323 12.0103C101.172 11.7785 100.956 11.597 100.701 11.489C100.446 11.3811 100.165 11.3517 99.894 11.4045C99.6225 11.4573 99.373 11.59 99.1775 11.7856C98.9819 11.9811 98.8493 12.2306 98.7964 12.5021C98.7436 12.7735 98.773 13.0545 98.881 13.3092C98.9889 13.5638 99.1704 13.7803 99.4022 13.9311C99.6341 14.0819 99.9057 14.16 100.182 14.1554C100.542 14.1495 100.886 14.0037 101.141 13.749C101.396 13.4942 101.541 13.1504 101.547 12.7902ZM98.5913 12.7902C98.5868 12.4771 98.6757 12.1697 98.8468 11.9075C99.018 11.6452 99.2635 11.4399 99.5519 11.318C99.8403 11.196 100.159 11.1629 100.466 11.2229C100.773 11.2829 101.056 11.4332 101.277 11.6546C101.499 11.8761 101.649 12.1586 101.709 12.4659C101.769 12.7733 101.736 13.0916 101.614 13.38C101.492 13.6684 101.287 13.9139 101.024 14.085C100.762 14.2562 100.455 14.3451 100.142 14.3406C99.7259 14.3406 99.3271 14.1754 99.0331 13.8814C98.7391 13.5874 98.574 13.1886 98.574 12.7729L98.5913 12.7902Z" fill="#425A8B" />
                        </g>
                        <defs>
                            <clipPath id="clip0_123_4694">
                                <rect width="101.668" height="15" fill="white" transform="translate(0.0644531)" />
                            </clipPath>
                        </defs>
                    </svg>
                </a>
                <a href="#" class="opacity-[0.4] duration-700 hover:opacity-[100]">
                    <svg width="66" height="15" viewBox="0 0 66 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_209_4706)">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M50.3311 7.50689C50.3311 8.98479 50.7693 10.4295 51.5904 11.6583C52.4115 12.8872 53.5785 13.8449 54.9439 14.4105C56.3093 14.9761 57.8117 15.124 59.2612 14.8357C60.7108 14.5474 62.0422 13.8357 63.0872 12.7907C64.1323 11.7456 64.844 10.4142 65.1323 8.96468C65.4206 7.51518 65.2726 6.01272 64.7071 4.64732C64.1415 3.28192 63.1837 2.11489 61.9549 1.29381C60.7261 0.472734 59.2814 0.0344849 57.8035 0.0344849C55.8222 0.0363117 53.9226 0.824167 52.5217 2.22512C51.1207 3.62607 50.3329 5.52564 50.3311 7.50689ZM53.1116 7.50689C53.1116 6.57893 53.3868 5.67182 53.9024 4.90025C54.4179 4.12869 55.1507 3.52733 56.008 3.17222C56.8653 2.8171 57.8087 2.72419 58.7188 2.90523C59.6289 3.08626 60.4649 3.53311 61.1211 4.18927C61.7772 4.84544 62.2241 5.68144 62.4051 6.59156C62.5861 7.50168 62.4932 8.44505 62.1381 9.30236C61.783 10.1597 61.1816 10.8924 60.4101 11.408C59.6385 11.9235 58.7314 12.1987 57.8035 12.1987C56.5594 12.1978 55.3665 11.7032 54.4868 10.8235C53.6072 9.9438 53.1126 8.75095 53.1116 7.50689Z" fill="#425A8B" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M43.2795 3.65685V15H46.0394V3.50506C46.0394 3.40501 46.0567 2.65639 46.5638 2.32176L45.0527 0C43.5451 0.99011 43.2312 2.75989 43.2795 3.65685Z" fill="#425A8B" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M18.8718 6.76175C17.278 9.52164 15.7669 12.1573 13.6039 12.1573C11.4408 12.1573 9.9332 9.53544 8.32212 6.76175C6.52129 3.59823 4.46172 0.0172729 0.732422 0.0172729V2.77716C2.85064 2.77716 4.34443 5.37836 5.92791 8.1279C7.75634 11.3121 9.83316 14.9207 13.6039 14.9207C17.3746 14.9207 19.4514 11.3294 21.2832 8.14515C22.8633 5.38526 24.3571 2.79441 26.4787 2.79441C28.6004 2.79441 30.0907 5.39561 31.6742 8.14515C33.5061 11.3294 35.576 14.9379 39.3502 14.9379V12.1573C37.1837 12.1573 35.6795 9.53544 34.0822 6.76175C32.2642 3.59823 30.2046 0.0172729 26.4787 0.0172729C22.7529 0.0172729 20.6899 3.59823 18.889 6.76175H18.8718Z" fill="#425A8B" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M28.5314 10.1081C28.5314 10.5175 28.41 10.9177 28.1826 11.2581C27.9551 11.5985 27.6319 11.8638 27.2536 12.0205C26.8754 12.1771 26.4592 12.2181 26.0577 12.1383C25.6562 12.0584 25.2873 11.8613 24.9979 11.5718C24.7084 11.2823 24.5112 10.9135 24.4314 10.5119C24.3515 10.1104 24.3925 9.69423 24.5492 9.316C24.7058 8.93777 24.9711 8.6145 25.3115 8.38705C25.6519 8.15961 26.0521 8.03821 26.4615 8.03821C27.0105 8.03821 27.537 8.25629 27.9252 8.64447C28.3134 9.03266 28.5314 9.55915 28.5314 10.1081Z" fill="#425A8B" />
                        </g>
                        <defs>
                            <clipPath id="clip0_209_4706">
                                <rect width="64.5435" height="15" fill="white" transform="translate(0.732422)" />
                            </clipPath>
                        </defs>
                    </svg>
                </a>
                <a href="#" class="opacity-[0.4] duration-700 hover:opacity-[100]">
                    <svg width="57" height="15" viewBox="0 0 57 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_209_4659)">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M44.4648 0.491841H49.0435L48.5019 3.15318C49.9026 0.974306 51.5057 0.333094 53.4822 0.199249C54.2383 0.193824 54.9933 0.25423 55.7389 0.379784L54.858 3.87532C54.1517 3.68682 53.4255 3.58234 52.6947 3.56405C49.9867 3.51736 47.9759 5.34451 47.2786 7.96227L45.6974 13.9635H40.9443C42.1178 9.47503 43.6742 4.57879 44.4648 0.494953V0.491841Z" fill="#425A8B" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M31.4382 6.47438C32.2288 6.09152 34.9804 6.13199 36.764 5.90788C38.8153 5.65886 41.682 4.52896 41.6136 2.81387C41.5015 0.98673 39.8767 0.572744 38.3639 0.775068C34.803 1.29489 32.4778 3.62939 31.4382 6.47438ZM30.9962 7.63853C30.8807 8.38693 30.84 9.14498 30.8748 9.90144C31.1674 12.1332 33.1253 13.1791 35.2326 13.2476C36.9819 13.288 39.111 12.2422 40.2689 10.9411C40.305 10.8906 40.3532 10.85 40.409 10.823C40.4649 10.796 40.5267 10.7835 40.5886 10.7866C40.6506 10.7897 40.7108 10.8083 40.7637 10.8408C40.8166 10.8732 40.8605 10.9184 40.8914 10.9722C40.9402 11.0645 40.9627 11.1684 40.9567 11.2727C40.9507 11.3769 40.9162 11.4775 40.8572 11.5636C39.0269 13.3845 37.1562 14.3899 34.5509 14.4117C31.5969 14.4335 27.896 13.3067 27.4446 10.2376C27.3796 9.8424 27.3712 9.43993 27.4197 9.04234C28.0143 3.35859 33.2 0.286377 38.3017 0.0155744C40.7389 -0.118271 44.2562 0.513603 44.0539 3.15315C43.8516 5.92966 39.6557 6.88837 36.9227 6.96619C34.6225 7.03467 31.7899 7.02533 31.0087 7.63853H30.9962Z" fill="#425A8B" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M28.453 10.8477L27.7029 13.7829C26.2231 14.11 24.7111 14.2687 23.1957 14.2561C18.6387 14.1658 15.2988 12.0772 15.5012 7.73499C15.7502 2.75471 20.6931 0.199197 25.4617 0.130718C27.0168 0.122196 28.567 0.304085 30.0778 0.672324L28.6584 3.49241C27.4155 3.11902 26.1153 2.9735 24.8205 3.06286C22.6416 3.22161 20.6246 4.39509 20.0363 6.69536C19.2706 9.58392 20.939 11.6165 23.896 11.6165C25.4447 11.5867 26.9803 11.3276 28.453 10.8477Z" fill="#425A8B" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.18253 0.174302C12.9987 0.174302 15.8686 1.05208 16.1425 4.22078C16.2483 5.43784 15.8063 6.52417 15.467 7.8097L13.8764 13.9853C10.8322 13.9853 8.34833 14.0537 5.59672 14.2779C3.04743 14.2779 -0.00610352 13.7362 -0.00610352 10.4866C0.0530374 5.17638 8.27985 5.65884 11.7785 5.65884C12.5224 3.536 10.7856 2.68001 8.35455 2.68001C6.14455 2.68001 4.32363 3.30254 2.54007 3.89707L3.1626 1.0334C5.11533 0.449131 7.14432 0.159575 9.18253 0.174302ZM11.2587 7.78169C9.33816 7.78169 3.90965 7.32724 3.90965 10.2718C3.90965 11.7379 5.4442 11.9558 6.72973 11.9558C10.1101 11.9558 10.6361 10.7761 11.2587 7.78791V7.78169Z" fill="#425A8B" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M54.1326 11.2305C53.8892 11.2295 53.648 11.2768 53.423 11.3698C53.1981 11.4628 52.9938 11.5995 52.8222 11.7722C52.4693 12.1356 52.2679 12.6197 52.2588 13.1262C52.2649 13.6162 52.4588 14.0852 52.8004 14.4366C52.9742 14.6135 53.1816 14.7541 53.4103 14.85C53.639 14.9459 53.8846 14.9953 54.1326 14.9953C54.3807 14.9953 54.6262 14.9459 54.8549 14.85C55.0837 14.7541 55.291 14.6135 55.4648 14.4366C55.6383 14.2658 55.7755 14.0616 55.868 13.8364C55.9606 13.6112 56.0066 13.3696 56.0033 13.1262C56.0104 12.8794 55.9663 12.6339 55.8736 12.4051C55.7809 12.1763 55.6417 11.9693 55.4648 11.7971C55.2909 11.6197 55.0837 11.4784 54.8551 11.3811C54.6265 11.2839 54.381 11.2328 54.1326 11.2305ZM55.8259 13.1262C55.8259 13.3452 55.7819 13.562 55.6963 13.7636C55.6107 13.9652 55.4854 14.1475 55.3279 14.2996C55.0095 14.6149 54.5807 14.7936 54.1326 14.7977C53.6878 14.7961 53.2613 14.6202 52.9447 14.3077C52.6281 13.9952 52.4467 13.571 52.4393 13.1262C52.4443 12.6719 52.6224 12.2366 52.9374 11.9091C53.0938 11.7512 53.2799 11.6259 53.4851 11.5404C53.6903 11.4549 53.9104 11.4109 54.1326 11.4111C54.357 11.41 54.5792 11.4556 54.785 11.5451C54.9908 11.6346 55.1757 11.766 55.3279 11.9309C55.4872 12.0862 55.6135 12.2722 55.6991 12.4776C55.7847 12.683 55.8278 12.9036 55.8259 13.1262ZM54.1762 11.9994H53.4105V14.1783H53.7031V13.1946H54.2447L54.7178 14.1658H55.0571L54.5622 13.1729C54.7061 13.1649 54.8416 13.102 54.9406 12.9972C55.0396 12.8924 55.0947 12.7536 55.0944 12.6095C55.0944 12.1799 54.8019 11.9869 54.1918 11.9869L54.1762 11.9994ZM54.1326 12.2017C54.5622 12.2017 54.7863 12.3138 54.7863 12.5846C54.7863 12.9238 54.584 13.0141 54.1326 13.0141H53.7031V12.2017H54.1326Z" fill="#425A8B" />
                        </g>
                        <defs>
                            <clipPath id="clip0_209_4659">
                                <rect width="56.0033" height="15" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </a>
                <a href="#" class="opacity-[0.4] duration-700 hover:opacity-[100]">
                    <svg width="78" height="15" viewBox="0 0 78 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_209_4675)">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M75.522 0.139404C75.8322 0.141628 76.1368 0.222017 76.4077 0.373139C76.6914 0.524944 76.9249 0.755679 77.0802 1.03744C77.2375 1.31061 77.3202 1.62028 77.3202 1.93547C77.3202 2.25066 77.2375 2.56033 77.0802 2.8335C76.9267 3.1162 76.6945 3.34836 76.4118 3.5019C76.1398 3.65804 75.8315 3.74005 75.5179 3.73973C75.203 3.73963 74.8935 3.65767 74.6199 3.5019C74.3378 3.34887 74.1068 3.11648 73.9556 2.8335C73.7982 2.56179 73.7147 2.25357 73.7136 1.93957C73.7152 1.62304 73.7985 1.31228 73.9556 1.03744C74.1147 0.755807 74.3508 0.525373 74.6363 0.373139C74.907 0.221518 75.2117 0.141095 75.522 0.139404ZM74.7306 2.93601V1.00053H75.3949C75.5618 0.993568 75.7288 1.01013 75.891 1.04974C75.99 1.08471 76.0749 1.15091 76.133 1.23837C76.1915 1.32114 76.223 1.41995 76.2232 1.52131C76.2249 1.66025 76.1719 1.79429 76.0756 1.89446C75.9656 2.00217 75.8194 2.06504 75.6655 2.07079C75.7277 2.09368 75.7848 2.1285 75.8336 2.1733C75.9427 2.29031 76.0376 2.41968 76.1166 2.55876L76.3544 2.93601H75.9731L75.8008 2.62847C75.7211 2.45984 75.6098 2.3081 75.4728 2.1815C75.3992 2.13178 75.3114 2.10732 75.2226 2.11179H75.0381V2.93191L74.7306 2.93601Z" fill="#425A8B" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M40.7899 0.020503H40.8514V4.16211H36.6893V0.020503H40.7899ZM22.5996 8.77529L32.2729 9.37397C32.4662 9.37613 32.6508 9.45442 32.7867 9.59184C32.9226 9.72926 32.9988 9.91472 32.9988 10.108C32.9988 10.2038 32.9799 10.2987 32.9432 10.3873C32.9065 10.4759 32.8527 10.5563 32.785 10.6241C32.7172 10.6919 32.6367 10.7456 32.5482 10.7823C32.4596 10.819 32.3647 10.8379 32.2688 10.8379H18.4867V5.4497C18.8968 7.11454 20.3689 8.47594 22.5873 8.77529H22.5996ZM18.499 15H32.5887C33.5713 14.9976 34.5227 14.6547 35.2808 14.0296C36.039 13.4046 36.557 12.536 36.7467 11.5719C36.9135 12.5259 37.4093 13.3912 38.148 14.0175C38.8867 14.6438 39.8215 14.9915 40.7899 15H49.8112C50.7753 14.9963 51.7078 14.6563 52.4481 14.0388C53.1884 13.4212 53.6901 12.5648 53.8667 11.617V15H68.3049C69.4274 14.9968 70.5029 14.5494 71.2966 13.7557C72.0903 12.9621 72.5376 11.8865 72.5408 10.7641V10.1613C72.5376 9.03885 72.0903 7.96331 71.2966 7.16963C70.5029 6.37594 69.4274 5.92861 68.3049 5.92537L67.5135 5.88846C63.0028 5.69163 58.5414 5.4784 54.0553 5.23647C54.4039 6.99563 55.8883 8.45954 58.2174 8.77529L67.9974 9.37397C68.1913 9.37506 68.377 9.45287 68.5138 9.5904C68.6505 9.72794 68.7273 9.91402 68.7273 10.108C68.7273 10.3016 68.6504 10.4872 68.5135 10.6241C68.3766 10.761 68.191 10.8379 67.9974 10.8379H53.9118V5.22827L49.7292 5.01504V9.80864C49.7292 10.1349 49.5996 10.4478 49.3689 10.6785C49.1382 10.9092 48.8253 11.0388 48.499 11.0388H42.0816C41.7553 11.0388 41.4424 10.9092 41.2117 10.6785C40.981 10.4478 40.8514 10.1349 40.8514 9.80864V4.55577L36.6893 4.33844V9.09513C36.4426 8.1993 35.9068 7.41008 35.1652 6.8502C34.4236 6.29031 33.5178 5.99113 32.5887 5.99918L14.1606 4.7936V15H18.4867H18.499ZM36.0168 4.16211V0H22.5996C21.656 0.00609148 20.7411 0.325589 19.9989 0.90827C19.2566 1.49095 18.729 2.30377 18.499 3.21897V0.020503H10.4783L7.74725 4.16211H36.0168ZM12.3932 4.69109L5.77896 15H0.604004L7.57503 4.41225L12.385 4.69109H12.3932ZM72.5368 4.16211V0H58.2134C57.1032 0.00296199 56.0381 0.439992 55.2459 1.21771C54.4536 1.99543 53.9969 3.05216 53.9733 4.16211H72.5368ZM49.7456 4.16211V0.020503H53.9118V4.16211H49.7456Z" fill="#425A8B" />
                        </g>
                        <defs>
                            <clipPath id="clip0_209_4675">
                                <rect width="76.7181" height="15" fill="white" transform="translate(0.604004)" />
                            </clipPath>
                        </defs>
                    </svg>
                </a>
            </div>
        </div>
        <!-- featured categories end -->


        <!-- product categories grid -->
        <div class="grid-container grid grid-rows-2 mt-[50px] grid-cols-4 gap-6">

            <div class="container border border-solid p-[15px] pb-[26px] relative border-[ #D5DFE4] hover:border-[#8C9EC5] transition-all duration-1000 ease-in-out cursor-pointer rounded relative">
                <div class="image-box flex gap-5">
                    <div class="img">
                        <img class="max-w-[90px]" src="<?php echo e(asset('assets/smartphone.png')); ?>" alt="smartphone">
                    </div>
                    <div class="content">
                        <strong class="capitalize">Smart Phone</strong>
                        <ul class="text-[#6B83B6] text-sm leading-6 pt-[15px] pb-[10px]">
                            <li><a href="#">> Phone Accessories</a></li>
                            <li><a href="#">> Phone Cases</a></li>
                            <li><a href="#">> Postpaid Phones</a></li>
                            <li><a href="#">> Refurbished Phones</a></li>
                        </ul>
                    </div>
                </div>
                <div class="view-all-btn absolute right-0">
                    <a href="<?php echo e(route('shop-grid')); ?>" class="bg-[#D5DFE4] text-sm leading-[18px] pt-1 pb-1 px-2.5">View all</a>
                </div>
            </div>

            <!-- cols 2 -->
            <div class="container border border-solid p-[15px] pb-[26px] relative border-[ #D5DFE4] hover:border-[#8C9EC5] transition-all duration-1000 ease-in-out cursor-pointer rounded relative">
                <div class="image-box flex gap-5">
                    <div class="img">
                        <img class="max-w-[90px]" src="<?php echo e(asset('assets/television.png')); ?>" alt="television">
                    </div>
                    <div class="content">
                        <strong class="capitalize">Television</strong>
                        <ul class="text-[#6B83B6] text-sm leading-6 pt-[15px] pb-[10px]">
                            <li><a href="#">> HD DVD Players</a></li>
                            <li><a href="#">> Projection Screens</a></li>
                            <li><a href="#">> Television Accessories</a></li>
                            <li><a href="#">> TV-DVD Combos</a></li>
                        </ul>
                    </div>
                </div>
                <div class="view-all-btn absolute right-0">
                    <div class="view-all-btn absolute right-0">
                        <a href="<?php echo e(route('shop-grid')); ?>" class="bg-[#D5DFE4] text-sm leading-[18px] pt-1 pb-1 px-2.5">View all</a>
                    </div>
                </div>
            </div>

            <!-- cols 3 -->
            <div class="container border border-solid p-[15px] pb-[26px] relative border-[ #D5DFE4] hover:border-[#8C9EC5] transition-all duration-1000 ease-in-out cursor-pointer rounded relative">
                <div class="image-box flex gap-5">
                    <div class="img">
                        <img class="max-w-[90px]" src="<?php echo e(asset('assets/computer.png')); ?>" alt="computers">
                    </div>
                    <div class="content">
                        <strong class="capitalize">Computers</strong>
                        <ul class="text-[#6B83B6] text-sm leading-6 pt-[15px] pb-[10px]">
                            <li><a href="#">> Computer Components</a></li>
                            <li><a href="#">> Computer Accessories</a></li>
                            <li><a href="#">> Desktops</a></li>
                            <li><a href="#">> Monitors</a></li>
                        </ul>
                    </div>
                </div>
                <div class="view-all-btn absolute right-0">
                    <a href="<?php echo e(route('shop-grid')); ?>" class="bg-[#D5DFE4] text-sm leading-[18px] pt-1 pb-1 px-2.5">View all</a>
                </div>
            </div>
            <!-- cols 3 end -->

            <!-- cols 4 -->
            <div class="container border border-solid p-[15px] pb-[26px] relative border-[ #D5DFE4] hover:border-[#8C9EC5] transition-all duration-1000 ease-in-out cursor-pointer rounded relative">
                <div class="image-box flex gap-5">
                    <div class="img">
                        <img class="max-w-[90px]" src="<?php echo e(asset('assets/electric.png')); ?>" alt="electronics">
                    </div>
                    <div class="content">
                        <strong class="capitalize">Electronics</strong>
                        <ul class="text-[#6B83B6] text-sm leading-6 pt-[15px] pb-[10px]">
                            <li><a href="#">> Office Electronics</a></li>
                            <li><a href="#">> Portable Audio & Video</a></li>
                            <li><a href="#">> Washing Machine</a></li>
                            <li><a href="#">> Accessories & Supplies</a></li>
                        </ul>
                    </div>
                </div>
                <div class="view-all-btn absolute right-0">
                    <a href="<?php echo e(route('shop-grid')); ?>" class="bg-[#D5DFE4] text-sm leading-[18px] pt-1 pb-1 px-2.5">View all</a>
                </div>
            </div>
            <!-- cols 4 end -->

            <!-- cols 5 -->
            <div class="container border border-solid p-[15px] pb-[26px] relative border-[ #D5DFE4] hover:border-[#8C9EC5] transition-all duration-1000 ease-in-out cursor-pointer rounded relative">
                <div class="image-box flex gap-5">
                    <div class="img">
                        <img class="max-w-[90px]" src="<?php echo e(asset('assets/laptop.png')); ?>" alt="laptop-tablet">
                    </div>
                    <div class="content">
                        <strong class="capitalize">Laptop & Tablet</strong>
                        <ul class="text-[#6B83B6] text-sm leading-6 pt-[15px] pb-[10px]">
                            <li><a href="#">> Office laptop</a></li>
                            <li><a href="#">> Gaming laptop</a></li>
                            <li><a href="#">> Laptop accessories</a></li>
                            <li><a href="#">> Tablet</a></li>
                        </ul>
                    </div>
                </div>
                <div class="view-all-btn absolute right-0">
                    <a href="<?php echo e(route('shop-grid')); ?>" class="bg-[#D5DFE4] text-sm leading-[18px] pt-1 pb-1 px-2.5">View all</a>
                </div>
            </div>
            <!-- cols 5 end -->

            <!-- cols 6 -->
            <div class="container border border-solid p-[15px] pb-[26px] relative border-[ #D5DFE4] hover:border-[#8C9EC5] transition-all duration-1000 ease-in-out cursor-pointer rounded relative">
                <div class="image-box flex gap-5">
                    <div class="img">
                        <img class="max-w-[90px]" src="<?php echo e(asset('assets/smartwatches.png')); ?>" alt="smartwatch">
                    </div>
                    <div class="content">
                        <strong class="capitalize">Smartwatches</strong>
                        <ul class="text-[#6B83B6] text-sm leading-6 pt-[15px] pb-[10px]">
                            <li><a href="#">> Sport Watches</a></li>
                            <li><a href="#">> Chronograph Watches</a></li>
                            <li><a href="#">> Kids Watches</a></li>
                            <li><a href="#">> Luxury Watches</a></li>
                        </ul>
                    </div>
                </div>
                <div class="view-all-btn absolute right-0">
                    <a href="<?php echo e(route('shop-grid')); ?>" class="bg-[#D5DFE4] text-sm leading-[18px] pt-1 pb-1 px-2.5">View all</a>
                </div>
            </div>
            <!-- cols 6 end -->

            <!-- cols 7 -->
            <div class="container border border-solid p-[15px] pb-[26px] relative border-[ #D5DFE4] hover:border-[#8C9EC5] transition-all duration-1000 ease-in-out cursor-pointer rounded relative">
                <div class="image-box flex gap-5">
                    <div class="img">
                        <img class="max-w-[90px]" src="<?php echo e(asset('assets/gaming.png')); ?>" alt="gaming">
                    </div>
                    <div class="content">
                        <strong class="capitalize">Gaming</strong>
                        <ul class="text-[#6B83B6] text-sm leading-6 pt-[15px] pb-[10px]">
                            <li><a href="#">> Game Controllers</a></li>
                            <li><a href="#">> Gaming Keyboards</a></li>
                            <li><a href="#">> PC Gaming Mice</a></li>
                            <li><a href="#">> PC Game Headsets</a></li>
                        </ul>
                    </div>
                </div>
                <div class="view-all-btn absolute right-0">
                    <a href="<?php echo e(route('shop-grid')); ?>" class="bg-[#D5DFE4] text-sm leading-[18px] pt-1 pb-1 px-2.5">View all</a>
                </div>
            </div>
            <!-- cols 7 end -->

            <!-- cols 8 -->
            <div class="container border border-solid p-[15px] pb-[26px] relative border-[ #D5DFE4] hover:border-[#8C9EC5] transition-all duration-1000 ease-in-out cursor-pointer rounded relative">
                <div class="image-box flex gap-5">
                    <div class="img">
                        <img class="max-w-[90px]" src="<?php echo e(asset('assets/outdoor.png')); ?>" alt="outdoor-camera">
                    </div>
                    <div class="content">
                        <strong class="capitalize">Outdoor Camera</strong>
                        <ul class="text-[#6B83B6] text-sm leading-6 pt-[15px] pb-[10px]">
                            <li><a href="#">> Security & Surveillance</a></li>
                            <li><a href="#">> Surveillance DVR Kits</a></li>
                            <li><a href="#">> Surveillance NVR Kits</a></li>
                            <li><a href="#">> Smart Outdoor Lighting</a></li>
                        </ul>
                    </div>
                </div>
                <div class="view-all-btn absolute right-0">
                    <a href="<?php echo e(route('shop-grid')); ?>" class="bg-[#D5DFE4] text-sm leading-[18px] pt-1 pb-1 px-2.5">View all</a>
                </div>
            </div>
            <!-- cols 8 end -->

        </div>
        <!-- product cstegories grid end -->

        <!-- featured categories  -->
        <div class="featured-container flex mt-[80px] gap-6 max-[576px]:flex-wrap">
            <div class="special-sale-bg w-[53%] bg-bottom-right bg-no-repeat bg-[length:auto_160px] bg-[#DBECE5] pt-[25px] pb-[25px] px-[35px] h-[250px] max-[576px]:w-full">
                <p class="text-sm leading-8">Starting from $899</p>
                <h2 class="leading-8 mb-2.5 text-[28px] font-bold">iPhone 12 Pro 128Gb</h2>
                <p>Special Sale</p>
                <a href="#" class="text-sm text-[#0BA9ED] pt-5 inline-block font-bold pr-[15px] uppercase">Learn More <svg class="inline-block ml-2" width="6" height="11" viewBox="0 0 6 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_94_2707)">
                            <path d="M0.452636 1.55494L0.452637 5.70828L0.452637 9.4483C0.452637 10.0883 1.22597 10.4083 1.67931 9.95497L5.13264 6.50161C5.68598 5.94828 5.68598 5.04828 5.13264 4.49495L3.81931 3.18161L1.67931 1.04161C1.22597 0.594945 0.452636 0.914946 0.452636 1.55494Z" fill="#36A2D0" />
                        </g>
                        <defs>
                            <clipPath id="clip0_94_2707">
                                <rect width="6" height="10" fill="white" transform="translate(0 0.5)" />
                            </clipPath>
                        </defs>
                    </svg>
                </a>
            </div>

            <div class="new-arrival-bg w-[70%] bg-bottom-right bg-no-repeat bg-[length:auto_160px] bg-[#FFF1F6] pt-[25px] pb-[200px] h-[250px] px-[35px] max-[576px]:w-full">
                <p class="leading-8">New Arrivals</p>
                <h2 class="leading-8 mb-2.5 text-[28px] font-bold">Samsung <br>2022 Led TV</h2>
                <p class="mb-5">Special Sale</p>
                <a href="#" class="text-sm bg-[#FD9636] hover:bg-[#425A8B] duration-300 rounded text-white pt-2.5 pb-2.5 px-[22px] inline-block font-bold">learn more <svg class="inline-block ml-2 brightness-0 invert" width="6" height="11" viewBox="0 0 6 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_94_2707)">
                            <path d="M0.452636 1.55494L0.452637 5.70828L0.452637 9.4483C0.452637 10.0883 1.22597 10.4083 1.67931 9.95497L5.13264 6.50161C5.68598 5.94828 5.68598 5.04828 5.13264 4.49495L3.81931 3.18161L1.67931 1.04161C1.22597 0.594945 0.452636 0.914946 0.452636 1.55494Z" fill="#36A2D0" />
                        </g>
                        <defs>
                            <clipPath id="clip0_94_2707">
                                <rect width="6" height="10" fill="white" transform="translate(0 0.5)" />
                            </clipPath>
                        </defs>
                    </svg>
                </a>
            </div>

            <div class="quadcopter-bg bg-right-bottom w-full bg-no-repeat bg-[length:auto_160px] bg-[#E8FCFF] pt-[25px] pb-[200px] h-[250px] px-[35px]">
                <h2 class="leading-8 mb-2.5 text-[28px] font-bold text-[rgb(14,34,77)]">Drone Quadcopter <br>UAV - DJI Air 2S</h2>
                <p class="text-[#0BA9ED] text-lg mt-5 mb-5">Gimbal Camera, 5.4K Video</p>
                <a href="#" class="text-sm bg-[#FD9636] hover:bg-[#425A8B] duration-300 rounded text-white pt-2.5 pb-2.5 px-[22px] inline-block font-bold">learn more <svg class="inline-block ml-2 brightness-0 invert" width="6" height="11" viewBox="0 0 6 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_94_2707)">
                            <path d="M0.452636 1.55494L0.452637 5.70828L0.452637 9.4483C0.452637 10.0883 1.22597 10.4083 1.67931 9.95497L5.13264 6.50161C5.68598 5.94828 5.68598 5.04828 5.13264 4.49495L3.81931 3.18161L1.67931 1.04161C1.22597 0.594945 0.452636 0.914946 0.452636 1.55494Z" fill="#36A2D0" />
                        </g>
                        <defs>
                            <clipPath id="clip0_94_2707">
                                <rect width="6" height="10" fill="white" transform="translate(0 0.5)" />
                            </clipPath>
                        </defs>
                    </svg>
                </a>
            </div>
        </div>

        <!-- products tabs -->
        <div class="container mt-[80px] best-sellers-section">
            <div class="best-sellers-heading flex items-end justify-between gap-6 max-[576px]:items-center max-[576px]:text-center">
                <div>
                    <h2 class="text-[32px] font-bold">Best Sellers</h2>
                    <p class="text-[#8C9EC5] leading-6">Special products in this month.</p>
                </div>
                <div class="product-tabs flex items-center flex-wrap gap-5 max-[576px]:flex-nowrap max-[576px]:gap-2" role="tablist" aria-label="Product categories">
                    <button class="product-tab border-0 bg-transparent py-2 px-3 is-active" role="tab" aria-selected="true" data-filter="all">
                        All
                    </button>
                    <button class="product-tab border-0 bg-transparent py-2 px-3" role="tab" aria-selected="false" data-filter="best">
                        Best seller
                    </button>
                    <button class="product-tab border-0 bg-transparent py-2 px-3" role="tab" aria-selected="false" data-filter="viewed">Most viewed</button>
                    <button class="product-tab border-0 bg-transparent py-2 px-3" role="tab" aria-selected="false" data-filter="brand">Top Brands</button>
                </div>
            </div>
            <hr class="mt-4">
            <div class="product-tabs-grid" id="best-seller-products">
                <article class="best-product-card border-solid border cursor-pointer border-[!#D5DFE4] rounded  p-[15px] relative duration-200 bg-white max-[576px]:grid-cols-1" data-category="best brand" data-name="Apple iMac">
                    <span class="product-discount absolute top-5 left-5 py-1 px-[10px] text-[12px] leading-3 bg-[#FD9636] text-white rounded-[30px]">−17%</span>
                    <div class="best-product-image">
                        <img class="max-h-full max-w-[95%]" src="<?php echo e(asset('assets/computer.png')); ?>" alt="Apple iMac computer" loading="lazy">
                    </div>
                    <div class="best-product-info">
                        <a class="best-product-brand text-[!##8C9EC5] text-[12px] leading-[18px]">Apple</a>
                        <p class="text-sm leading-5 font-bold">2022 Apple iMac with Retina 5K Display 8GB RAM, 256GB</p>
                        <p class="product-rating">
                            <span>★★★★★</span>
                            <small class="text-[#8C9EC5] text-[12px] leading-[18px]">(65)</small>
                        </p>
                        <p class="best-product-price mt-[10px] text-xl font-bold leading-7">$2856.3 <del class="ml-[10px] leading-6 text-[16px] text-[#8C9EC5] font-[400]">$3225.6</del>
                        </p>
                        <button class="mt-5 rounded best-add-cart border border-[#8C9EC5] hover:border-[#425A8B] border-solid hover:bg-[#425A8B] duration-300 py-[7px] px-[22px] !text-sm font-bold leading-5 w-full" type="button">Add To Cart
                        </button>
                        <ul class="pl-[15px] mt-5">
                            <li class="text-[10px] leading-[18px]">27-inch Retina 5K display</li>
                            <li class="text-[10px] leading-[18px]">3.1GHz 6-core 10th-generation Intel Core i5</li>
                            <li class="text-[10px] leading-[18px]">AMD Radeon Pro 5300 graphics</li>
                        </ul>
                    </div>
                </article>
                <article class="best-product-card border-solid border cursor-pointer border-[!#D5DFE4] rounded  p-[15px] relative duration-200 bg-white max-[576px]:grid-cols-1" data-category="best viewed" data-name="Philips Headphones">
                    <span class="product-discount absolute top-5 left-5 py-1 px-[10px] text-[12px] leading-3 bg-[#FD9636] text-white rounded-[30px]">−17%</span>
                    <div class="best-product-image">
                        <img class="max-h-full max-w-[95%]" src="<?php echo e(asset('assets/electric.png')); ?>" alt="Wireless headphones" loading="lazy">
                    </div>
                    <div class="best-product-info">
                        <a class="best-product-brand text-[!#8C9EC5] text-[12px] leading-[18px]">Philips</a>
                        <p class="text-sm leading-5 font-bold">Philips H4205 On-Ear Wireless Headphones with 32mm</p>
                        <p class="product-rating">
                            <span>★★★★★</span>
                            <small class="text-[#8C9EC5] text-[12px] leading-[18px]">(65)</small>
                        </p>
                        <p class="best-product-price mt-[10px] text-xl font-bold leading-7">$154.0.3 <del class="ml-[10px] leading-6 text-[16px] text-[#8C9EC5] font-[400]">$15
                                4.0.3</del>
                            <button class="mt-5 rounded best-add-cart border border-[#8C9EC5] hover:border-[#425A8B] border-solid hover:bg-[#425A8B] duration-300 py-[7px] px-[22px] !text-sm font-bold leading-5 w-full" type="button">Add To Cart
                            </button>
                        <ul class="mt-5 pl-[15px]">
                            <li class="text-[10px] leading-[18px]">7-inch (diagonal) Retina 5K display</li>
                            <li class="text-[10px] leading-[18px]">3.1GHz 6-core 10th-generation Intel Core i5</li>
                            <li class="text-[10px] leading-[18px]">AMD Radeon Pro 5300 graphics</li>
                        </ul>
                    </div>
                </article>
                <article class="best-product-card border-solid border cursor-pointer border-[!#D5DFE4] rounded  p-[15px] relative duration-200 bg-white max-[576px]:grid-cols-1" data-category="viewed brand" data-name="MacBook Air">
                    <span class="product-discount absolute top-5 left-5 py-1 px-[10px] text-[12px] leading-3 bg-[#FD9636] text-white rounded-[30px]">−17%</span>
                    <div class="best-product-image">
                        <img class="max-h-full max-w-[95%]" src="<?php echo e(asset('assets/laptop.png')); ?>" alt="Apple MacBook Air laptop" loading="lazy">
                    </div>
                    <div class="best-product-info">
                        <a class="best-product-brand text-[!##8C9EC5] text-[12px] leading-[18px]">Apple</a>
                        <p class="text-sm leading-5 font-bold">2020 Apple MacBook Air Laptop: Apple M1 Chip, 13”</p>
                        <p class="product-rating">
                            <span>★★★★★</span>
                            <small class="text-[#8C9EC5] text-[12px] leading-[18px]">(65)
                            </small>
                        </p>
                        <p class="best-product-price text-xl font-bold leading-7">$2325.3
                            <del class="ml-[10px] leading-6 text-[16px] text-[#8C9EC5] font-[400]">$2225.6</del>
                        </p>
                        <button class="mt-5 rounded best-add-cart border border-[#8C9EC5] hover:border-[#425A8B] border-solid hover:bg-[#425A8B] duration-300 py-[7px] px-[22px] !text-sm font-bold leading-5 w-full" type="button">Add To Cart
                        </button>
                        <ul class="mt-5 pl-[15px]">
                            <li class="text-[10px] leading-[18px]">7-inch (diagonal) Retina 5K display</li>
                            <li class="text-[10px] leading-[18px]">3.1GHz 6-core 10th-generation Intel Core i5</li>
                            <li class="text-[10px] leading-[18px]">AMD Radeon Pro 5300 graphics</li>
                        </ul>
                    </div>
                </article>
                <article class="best-product-card border-solid border cursor-pointer border-[!#D5DFE4] rounded  p-[15px] relative duration-200 bg-white max-[576px]:grid-cols-1" data-category="best brand" data-name="Apple Watch">
                    <span class="product-discount absolute top-5 left-5 py-1 px-[10px] text-[12px] leading-3 bg-[#FD9636] text-white rounded-[30px]">−17%</span>
                    <div class="best-product-image">
                        <a href="#">
                            <img class="max-h-full max-w-[95%] align-middle" src="<?php echo e(asset('assets/smartwatches.png')); ?>" alt="Smart watch" loading="lazy">
                        </a>
                    </div>
                    <div class="best-product-info">
                        <a class="best-product-brand text-[!##8C9EC5] text-[12px] leading-[18px]">Apple
                        </a>
                        <p class="text-sm leading-5 font-bold">
                            Apple Watch Series 8 [GPS 45mm] Smart Watch</p>
                        <p class="product-rating">
                            <span>★★★★★</span>
                            <small class="text-[#8C9EC5] text-[12px] leading-[18px]">
                                (65)
                            </small>
                        </p>
                        <p class="best-product-price text-xl font-bold leading-7">$530.3
                            <del class="ml-[10px] leading-6 text-[16px] text-[#8C9EC5] font-[400]">$560.6</del>
                        </p>
                        <button class="mt-5 rounded best-add-cart border border-[#8C9EC5] hover:border-[#425A8B] border-solid hover:bg-[#425A8B] duration-300 py-[7px] px-[22px] !text-sm font-bold leading-5 w-full" type="button">Add To Cart</button>
                        <ul class="mt-5 pl-[15px]">
                            <li class="text-[10px] leading-[18px]">7-inch (diagonal) Retina 5K display</li>
                            <li class="text-[10px] leading-[18px]">3.1GHz 6-core 10th-generation Intel Core i5</li>
                            <li class="text-[10px] leading-[18px]">AMD Radeon Pro 5300 graphics</li>
                        </ul>
                    </div>
                </article>
                <article class="best-product-card border-solid border cursor-pointer border-[!#D5DFE4] rounded  p-[15px] relative duration-200 bg-white max-[576px]:grid-cols-1" data-category="viewed" data-name="Security Camera">
                    <span class="product-discount absolute top-5 left-5 py-1 px-[10px] text-[12px] leading-3 bg-[#FD9636] text-white rounded-[30px]">−17%</span>
                    <div class="best-product-image">
                        <a href="#">
                            <img src="<?php echo e(asset('assets/outdoor.png')); ?>" alt="Home security camera" loading="lazy">
                        </a>
                    </div>
                    <div class="best-product-info">
                        <a class="best-product-brand text-[!##8C9EC5] text-[12px] leading-[18px]">Kami Tech</a>
                        <p class="text-sm leading-5 font-bold">Kami by YI 4pc 1080p Home Security Cameras</p>
                        <p class="product-rating">
                            <span>★★★★★</span>
                            <small class="text-[#8C9EC5] text-[12px] leading-[18px]">(65)</small>
                        </p>
                        <p class="best-product-price text-xl font-bold leading-7">$156.3
                            <del class="ml-[10px] leading-6 text-[16px] text-[#8C9EC5] font-[400]">$250.6</del>
                        </p>
                        <button class="mt-5 rounded best-add-cart border border-[#8C9EC5] hover:border-[#425A8B] border-solid hover:bg-[#425A8B] duration-300 py-[7px] px-[22px] !text-sm font-bold leading-5 w-full" type="button">Add To Cart</button>
                        <ul class="mt-5 pl-[15px]">
                            <li class="text-[10px] leading-[18px]">7-inch (diagonal) Retina 5K display</li>
                            <li class="text-[10px] leading-[18px]">3.1GHz 6-core 10th-generation Intel Core i5</li>
                            <li class="text-[10px] leading-[18px]">AMD Radeon Pro 5300 graphics</li>
                        </ul>
                    </div>
                </article>
            </div>
            <p class="cart-feedback" aria-live="polite"></p>
        </div>

        <!-- latest deals -->
        <section class="latest-deal max-w-[1360px] mx-auto">
            <div class="flex justify-between pb-4 max-[576px]:flex-wrap">
                <div class="max-[576px]:mx-auto">
                    <h2 class="text-[32px] leading-[41px] font-bold mb-[5px] max-[576px]:text-center">Latest Deals</h2>
                    <p class="text-[#8C9EC5] leading-6">Special products in this month.</p>
                </div>


                <div class="flex items-center gap-2 max-[576px]:flex-wrap max-[576px]:gap-x-3 max-[576px]:gap-y-3">
                    <div class="shrink-0 max-[576px]:w-full max-[576px]:mt-4 max-[576px]:text-center max-[576px]:mb-2">
                        <p class="leading-6 font-bold">Hurry up!</p>
                        <p class="inline-block text-sm leading-[18px] text-[#8C9EC5]">Offers end in:</p>
                    </div>

                    <div class="flex flex-wrap gap-3 items-center max-[576px]:gap-2">
                        <p class="font-bold text-[#425A8B]"><span class="bg-[#FD9636] py-[10px] rounded mb-[5px] inline-block h-10 w-10 text-center text-white font-bold">00 </span> : </p>
                        <p class="font-bold text-[#425A8B]"><span class="bg-[#FD9636] py-[10px] rounded mb-[5px] inline-block h-10 w-10 text-center text-white font-bold">00 </span> : </p>
                        <p class="font-bold text-[#425A8B]"><span class="bg-[#FD9636] py-[10px] rounded mb-[5px] inline-block h-10 w-10 text-center text-white font-bold">00 </span> : </p>
                        <p><span class="bg-[#FD9636] py-[10px] rounded mb-[5px] inline-block h-10 w-10 text-center text-white font-bold">00</span></p>

                        <a href="#" class="max-[576px]:ml-auto max-[576px]: py-[10px] px-[22px] rounded leading-6 font-bold duration-200 hover:text-[#F28B2B] max-[576px]:px-2 max-[576px]:py-2">
                            View All
                            <svg class="inline-block" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="transform: rotate(180deg);">
                                <path d="M19 12H5"></path>
                                <polyline points="12 19 5 12 12 5"></polyline>
                            </svg>
                        </a>
                    </div>
                </div>

            </div>
            <hr>
        </section>


        <!-- Additional product collections (built with Tailwind CSS) -->
        <section class="max-w-[1360px] mx-auto flex items-center gap-6 max-[576px]:flex-wrap">

            <div class="mt-7 px-[15px] relative inline-block w-fit max-w-full box-border border border-[#D5DFE4] border-solid rounded hover:border-[#8C9EC5] duration-200 max-[576px]:mt-10 max-[576px]:w-full max-[576px]:pb-5">

                <div class="absolute bg-ribbon">
                    <p class="rotate-[-45deg] text-xl text-white font-bold leading-7 absolute top-8">Hurry Up!</p>
                </div>

                <div class="w-[398px] max-w-full">
                    <img
                        class="block w-full h-auto"
                        src="<?php echo e(asset('assets/screen.png')); ?>"
                        alt="Apple iMac computer"
                        loading="lazy">
                </div>

                <div class="flex leading-0 justify-center gap-3">
                    <span class="inline-block h-[12px] w-[12px] bg-[#FD9636] rounded-[100px] cursor-pointer"></span>
                    <span class="inline-block h-[12px] w-[12px] bg-[#FD9636] rounded-[100px]"></span>
                    <span class="inline-block h-[12px] w-[12px] bg-[#FD9636] rounded-[100px]"></span>
                </div>

                <div class="mt-[50px]">
                    <h4 class="text-center text-2xl leading-[31px] font-bold">Special Offer</h4>
                    <p class="text-center text-[#8C9EC5] leading-6">Remains until the end of the offer</p>
                </div>

                <div class="flex gap-3 border-b border-solid border-[#D5DFE4] items-center justify-center mt-6 pb-5 max-[360px]:gap-2">
                    <div>
                        <p class="font-bold text-[#425A8B]"><span class="bg-[#FD9636] py-[10px] rounded mb-[5px] inline-block h-10 w-10 text-center text-white font-bold">00 </span> : </p>
                        <p class="text-[#8C9EC5] text-xs leading-[14px] text-center">Day</p>
                    </div>
                    <div>
                        <p class="font-bold text-[#425A8B]"><span class="bg-[#FD9636] py-[10px] rounded mb-[5px] inline-block h-10 w-10 text-center text-white font-bold">00 </span> : </p>
                        <p class="text-[#8C9EC5] text-xs leading-[14px] text-center">Hour</p>
                    </div>
                    <div>
                        <p class="font-bold text-[#425A8B]"><span class="bg-[#FD9636] py-[10px] rounded mb-[5px] inline-block h-10 w-10 text-center text-white font-bold">00 </span> : </p>
                        <p class="text-[#8C9EC5] text-xs leading-[14px] text-center">Min</p>
                    </div>
                    <div>
                        <p>
                            <span class="bg-[#FD9636] py-[10px] rounded mb-[5px] inline-block h-10 w-10 text-center text-white font-bold">00</span>
                        </p>
                        <p class="text-[#8C9EC5] text-xs leading-[14px] text-center">Sec</p>
                    </div>
                </div>

                <div class="mt-6 min-w-0 max-w-full">
                    <p class="text-[#8C9EC5] text-xs leading-[18px]">Apple</p>
                    <h2 class="text-xl font-bold leading-[26px] break-words">2022 Apple iMac Retina 5K Display</h2>

                    <svg class="inline-block" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_134_3383)">
                            <path d="M11.9687 4.60347C11.8902 4.36049 11.6746 4.18791 11.4197 4.16493L7.95614 3.85043L6.58656 0.644816C6.48558 0.409886 6.25559 0.257812 6.00006 0.257812C5.74453 0.257812 5.51454 0.409885 5.41356 0.645365L4.04399 3.85043L0.579908 4.16493C0.325385 4.18846 0.110414 4.36049 0.0314019 4.60347C-0.0476102 4.84646 0.0253592 5.11298 0.2179 5.28098L2.83592 7.577L2.06392 10.9776C2.00744 11.2277 2.10448 11.4861 2.31195 11.6361C2.42346 11.7167 2.55393 11.7577 2.68549 11.7577C2.79893 11.7577 2.91145 11.7271 3.01244 11.6667L6.00006 9.88107L8.98659 11.6667C9.20513 11.7981 9.48062 11.7862 9.68762 11.6361C9.89518 11.4857 9.99214 11.2271 9.93565 10.9776L9.16366 7.577L11.7817 5.28144C11.9742 5.11298 12.0477 4.84692 11.9687 4.60347Z" fill="#FFB067" />
                        </g>
                        <defs>
                            <clipPath id="clip0_134_3383">
                                <rect width="12" height="12" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>

                    <svg class="inline-block" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_134_3383)">
                            <path d="M11.9687 4.60347C11.8902 4.36049 11.6746 4.18791 11.4197 4.16493L7.95614 3.85043L6.58656 0.644816C6.48558 0.409886 6.25559 0.257812 6.00006 0.257812C5.74453 0.257812 5.51454 0.409885 5.41356 0.645365L4.04399 3.85043L0.579908 4.16493C0.325385 4.18846 0.110414 4.36049 0.0314019 4.60347C-0.0476102 4.84646 0.0253592 5.11298 0.2179 5.28098L2.83592 7.577L2.06392 10.9776C2.00744 11.2277 2.10448 11.4861 2.31195 11.6361C2.42346 11.7167 2.55393 11.7577 2.68549 11.7577C2.79893 11.7577 2.91145 11.7271 3.01244 11.6667L6.00006 9.88107L8.98659 11.6667C9.20513 11.7981 9.48062 11.7862 9.68762 11.6361C9.89518 11.4857 9.99214 11.2271 9.93565 10.9776L9.16366 7.577L11.7817 5.28144C11.9742 5.11298 12.0477 4.84692 11.9687 4.60347Z" fill="#FFB067" />
                        </g>
                        <defs>
                            <clipPath id="clip0_134_3383">
                                <rect width="12" height="12" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>

                    <svg class="inline-block" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_134_3383)">
                            <path d="M11.9687 4.60347C11.8902 4.36049 11.6746 4.18791 11.4197 4.16493L7.95614 3.85043L6.58656 0.644816C6.48558 0.409886 6.25559 0.257812 6.00006 0.257812C5.74453 0.257812 5.51454 0.409885 5.41356 0.645365L4.04399 3.85043L0.579908 4.16493C0.325385 4.18846 0.110414 4.36049 0.0314019 4.60347C-0.0476102 4.84646 0.0253592 5.11298 0.2179 5.28098L2.83592 7.577L2.06392 10.9776C2.00744 11.2277 2.10448 11.4861 2.31195 11.6361C2.42346 11.7167 2.55393 11.7577 2.68549 11.7577C2.79893 11.7577 2.91145 11.7271 3.01244 11.6667L6.00006 9.88107L8.98659 11.6667C9.20513 11.7981 9.48062 11.7862 9.68762 11.6361C9.89518 11.4857 9.99214 11.2271 9.93565 10.9776L9.16366 7.577L11.7817 5.28144C11.9742 5.11298 12.0477 4.84692 11.9687 4.60347Z" fill="#FFB067" />
                        </g>
                        <defs>
                            <clipPath id="clip0_134_3383">
                                <rect width="12" height="12" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>

                    <svg class="inline-block" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_134_3383)">
                            <path d="M11.9687 4.60347C11.8902 4.36049 11.6746 4.18791 11.4197 4.16493L7.95614 3.85043L6.58656 0.644816C6.48558 0.409886 6.25559 0.257812 6.00006 0.257812C5.74453 0.257812 5.51454 0.409885 5.41356 0.645365L4.04399 3.85043L0.579908 4.16493C0.325385 4.18846 0.110414 4.36049 0.0314019 4.60347C-0.0476102 4.84646 0.0253592 5.11298 0.2179 5.28098L2.83592 7.577L2.06392 10.9776C2.00744 11.2277 2.10448 11.4861 2.31195 11.6361C2.42346 11.7167 2.55393 11.7577 2.68549 11.7577C2.79893 11.7577 2.91145 11.7271 3.01244 11.6667L6.00006 9.88107L8.98659 11.6667C9.20513 11.7981 9.48062 11.7862 9.68762 11.6361C9.89518 11.4857 9.99214 11.2271 9.93565 10.9776L9.16366 7.577L11.7817 5.28144C11.9742 5.11298 12.0477 4.84692 11.9687 4.60347Z" fill="#FFB067" />
                        </g>
                        <defs>
                            <clipPath id="clip0_134_3383">
                                <rect width="12" height="12" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>

                    <svg class="inline-block" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_134_3383)">
                            <path d="M11.9687 4.60347C11.8902 4.36049 11.6746 4.18791 11.4197 4.16493L7.95614 3.85043L6.58656 0.644816C6.48558 0.409886 6.25559 0.257812 6.00006 0.257812C5.74453 0.257812 5.51454 0.409885 5.41356 0.645365L4.04399 3.85043L0.579908 4.16493C0.325385 4.18846 0.110414 4.36049 0.0314019 4.60347C-0.0476102 4.84646 0.0253592 5.11298 0.2179 5.28098L2.83592 7.577L2.06392 10.9776C2.00744 11.2277 2.10448 11.4861 2.31195 11.6361C2.42346 11.7167 2.55393 11.7577 2.68549 11.7577C2.79893 11.7577 2.91145 11.7271 3.01244 11.6667L6.00006 9.88107L8.98659 11.6667C9.20513 11.7981 9.48062 11.7862 9.68762 11.6361C9.89518 11.4857 9.99214 11.2271 9.93565 10.9776L9.16366 7.577L11.7817 5.28144C11.9742 5.11298 12.0477 4.84692 11.9687 4.60347Z" fill="#FFB067" />
                        </g>
                        <defs>
                            <clipPath id="clip0_134_3383">
                                <rect width="12" height="12" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>

                    <span class="text-[#8C9EC5] text-xs">(65)</span>

                    <div class="mt-4 mb-4">
                        <h2 class="text-[32px] leading-[41px] font-bold max-[400px]:text-[26px]">$2856.3 <del class="text-[#8C9EC5] text-[16px] leading-6 font-normal">$3225.6</del></h2>
                    </div>

                    <div class="m-0 pb-10 border-b border-solid border-[#D5DFE4]">
                        <input class="w-full max-w-full accent-[#FD9636]" type="range" name="price-range" id="range">
                        <div class="flex leading-0 gap-0 p-0 justify-between">
                            <p class="text-[#8C9EC5] text-xs leading-0 m-0">
                                Available:<span class="font-bold text-[#425A8B] leading-0">568</span>
                            </p>
                            <p class="text-[#8C9EC5] text-xs leading-0 m-0">
                                Sold:<span class="font-bold text-[#425A8B] leading-0">289</span>
                            </p>
                        </div>
                    </div>

                    <ul class="list-disc mt-[20px] pl-[15px] text-[10px] leading-[18px]">
                        <li><a href="#">27-inch (diagonal) Retina 5K display</a></li>
                        <li><a href="#">3.1GHz 6-core 10th-generation Intel Core i5</a></li>
                        <li><a href="#">AMD Radeon Pro 5300 graphics</a></li>
                    </ul>

                </div>
            </div>


            <div class="m-0 p-0">
                <div class="flex m-0 p-0 gap-6 mt-9 max-[576px]:flex-wrap">
                    <div class="inline-block relative image-box mb-[10px] border border-solid border-[#D5DFE4] rounded px-5 w-full pb-4">
                        <span class="bg-[#FD9636] leading-[12px] rounded-[30px] py-1 px-[10px] z-[2] text-xs absolute top-3 left-3 text-white">-17%</span>
                        <img
                            class="block mx-auto max-w-[95%] h-[165px] leading-[165px] "
                            src="<?php echo e(asset('assets/imgsp1.png')); ?>"
                            alt="imgsp1"
                            loading="lazy">

                        <p class="text-xs leading-[18px] text-[#8C9EC5]">Samsung</p>
                        <h4 class="text-sm leading-5 font-bold">Samsung 30-100 inches The <br>Freestyle FHD HDR Smart Projector</h4>

                        <svg class="inline-block" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_134_3383)">
                                <path d="M11.9687 4.60347C11.8902 4.36049 11.6746 4.18791 11.4197 4.16493L7.95614 3.85043L6.58656 0.644816C6.48558 0.409886 6.25559 0.257812 6.00006 0.257812C5.74453 0.257812 5.51454 0.409885 5.41356 0.645365L4.04399 3.85043L0.579908 4.16493C0.325385 4.18846 0.110414 4.36049 0.0314019 4.60347C-0.0476102 4.84646 0.0253592 5.11298 0.2179 5.28098L2.83592 7.577L2.06392 10.9776C2.00744 11.2277 2.10448 11.4861 2.31195 11.6361C2.42346 11.7167 2.55393 11.7577 2.68549 11.7577C2.79893 11.7577 2.91145 11.7271 3.01244 11.6667L6.00006 9.88107L8.98659 11.6667C9.20513 11.7981 9.48062 11.7862 9.68762 11.6361C9.89518 11.4857 9.99214 11.2271 9.93565 10.9776L9.16366 7.577L11.7817 5.28144C11.9742 5.11298 12.0477 4.84692 11.9687 4.60347Z" fill="#FFB067" />
                            </g>
                            <defs>
                                <clipPath id="clip0_134_3383">
                                    <rect width="12" height="12" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <svg class="inline-block" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_134_3383)">
                                <path d="M11.9687 4.60347C11.8902 4.36049 11.6746 4.18791 11.4197 4.16493L7.95614 3.85043L6.58656 0.644816C6.48558 0.409886 6.25559 0.257812 6.00006 0.257812C5.74453 0.257812 5.51454 0.409885 5.41356 0.645365L4.04399 3.85043L0.579908 4.16493C0.325385 4.18846 0.110414 4.36049 0.0314019 4.60347C-0.0476102 4.84646 0.0253592 5.11298 0.2179 5.28098L2.83592 7.577L2.06392 10.9776C2.00744 11.2277 2.10448 11.4861 2.31195 11.6361C2.42346 11.7167 2.55393 11.7577 2.68549 11.7577C2.79893 11.7577 2.91145 11.7271 3.01244 11.6667L6.00006 9.88107L8.98659 11.6667C9.20513 11.7981 9.48062 11.7862 9.68762 11.6361C9.89518 11.4857 9.99214 11.2271 9.93565 10.9776L9.16366 7.577L11.7817 5.28144C11.9742 5.11298 12.0477 4.84692 11.9687 4.60347Z" fill="#FFB067" />
                            </g>
                            <defs>
                                <clipPath id="clip0_134_3383">
                                    <rect width="12" height="12" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <svg class="inline-block" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_134_3383)">
                                <path d="M11.9687 4.60347C11.8902 4.36049 11.6746 4.18791 11.4197 4.16493L7.95614 3.85043L6.58656 0.644816C6.48558 0.409886 6.25559 0.257812 6.00006 0.257812C5.74453 0.257812 5.51454 0.409885 5.41356 0.645365L4.04399 3.85043L0.579908 4.16493C0.325385 4.18846 0.110414 4.36049 0.0314019 4.60347C-0.0476102 4.84646 0.0253592 5.11298 0.2179 5.28098L2.83592 7.577L2.06392 10.9776C2.00744 11.2277 2.10448 11.4861 2.31195 11.6361C2.42346 11.7167 2.55393 11.7577 2.68549 11.7577C2.79893 11.7577 2.91145 11.7271 3.01244 11.6667L6.00006 9.88107L8.98659 11.6667C9.20513 11.7981 9.48062 11.7862 9.68762 11.6361C9.89518 11.4857 9.99214 11.2271 9.93565 10.9776L9.16366 7.577L11.7817 5.28144C11.9742 5.11298 12.0477 4.84692 11.9687 4.60347Z" fill="#FFB067" />
                            </g>
                            <defs>
                                <clipPath id="clip0_134_3383">
                                    <rect width="12" height="12" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <svg class="inline-block" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_134_3383)">
                                <path d="M11.9687 4.60347C11.8902 4.36049 11.6746 4.18791 11.4197 4.16493L7.95614 3.85043L6.58656 0.644816C6.48558 0.409886 6.25559 0.257812 6.00006 0.257812C5.74453 0.257812 5.51454 0.409885 5.41356 0.645365L4.04399 3.85043L0.579908 4.16493C0.325385 4.18846 0.110414 4.36049 0.0314019 4.60347C-0.0476102 4.84646 0.0253592 5.11298 0.2179 5.28098L2.83592 7.577L2.06392 10.9776C2.00744 11.2277 2.10448 11.4861 2.31195 11.6361C2.42346 11.7167 2.55393 11.7577 2.68549 11.7577C2.79893 11.7577 2.91145 11.7271 3.01244 11.6667L6.00006 9.88107L8.98659 11.6667C9.20513 11.7981 9.48062 11.7862 9.68762 11.6361C9.89518 11.4857 9.99214 11.2271 9.93565 10.9776L9.16366 7.577L11.7817 5.28144C11.9742 5.11298 12.0477 4.84692 11.9687 4.60347Z" fill="#FFB067" />
                            </g>
                            <defs>
                                <clipPath id="clip0_134_3383">
                                    <rect width="12" height="12" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <svg class="inline-block" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_134_3383)">
                                <path d="M11.9687 4.60347C11.8902 4.36049 11.6746 4.18791 11.4197 4.16493L7.95614 3.85043L6.58656 0.644816C6.48558 0.409886 6.25559 0.257812 6.00006 0.257812C5.74453 0.257812 5.51454 0.409885 5.41356 0.645365L4.04399 3.85043L0.579908 4.16493C0.325385 4.18846 0.110414 4.36049 0.0314019 4.60347C-0.0476102 4.84646 0.0253592 5.11298 0.2179 5.28098L2.83592 7.577L2.06392 10.9776C2.00744 11.2277 2.10448 11.4861 2.31195 11.6361C2.42346 11.7167 2.55393 11.7577 2.68549 11.7577C2.79893 11.7577 2.91145 11.7271 3.01244 11.6667L6.00006 9.88107L8.98659 11.6667C9.20513 11.7981 9.48062 11.7862 9.68762 11.6361C9.89518 11.4857 9.99214 11.2271 9.93565 10.9776L9.16366 7.577L11.7817 5.28144C11.9742 5.11298 12.0477 4.84692 11.9687 4.60347Z" fill="#FFB067" />
                            </g>
                            <defs>
                                <clipPath id="clip0_134_3383">
                                    <rect width="12" height="12" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <span class="text-[#8C9EC5] text-xs leading-[18px]">(65)</span>

                        <div class="mt-4 mb-4">
                            <h2 class="text-xl leading-7 font-bold">$2856.3 <del class="text-[#8C9EC5] text-[16px] leading-6 font-normal">$3225.6</del></h2>
                        </div>

                        <button class="border rounded w-[100%] border-solid border-[#425A8B] hover:bg-[#425A8B] duration-300 text-sm leading-5 font-bold py-[7px] px-[22px] hover:text-white">Add to Cart</button>

                        <ul class="pl-[15px] list-disc mt-6">
                            <li class="text-[10px]"><a href="#">27-inch (diagonal) Retina 5K display</a></li>
                        </ul>
                    </div>

                    <div class="inline-block relative image-box mb-[10px] border border-solid border-[#D5DFE4] rounded px-5 w-full pb-4">
                        <span class="bg-[#FD9636] leading-[12px] rounded-[30px] py-1 px-[10px] z-[2] text-xs absolute top-3 left-3 text-white">-17%</span>
                        <img
                            class="block mx-auto max-w-[100%] h-[165px] leading-[165px]"
                            src="<?php echo e(asset('assets/smartwatches.png')); ?>"
                            alt="imgsp1"
                            loading="lazy">

                        <p class="text-xs leading-[18px] text-[#8C9EC5]">Samsung</p>
                        <h4 class="text-sm leading-5 font-bold">Lenovo Legion 5i 15.6" Laptop, Intel <br>Core i5-10500H</h4>

                        <svg class="inline-block" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_134_3383)">
                                <path d="M11.9687 4.60347C11.8902 4.36049 11.6746 4.18791 11.4197 4.16493L7.95614 3.85043L6.58656 0.644816C6.48558 0.409886 6.25559 0.257812 6.00006 0.257812C5.74453 0.257812 5.51454 0.409885 5.41356 0.645365L4.04399 3.85043L0.579908 4.16493C0.325385 4.18846 0.110414 4.36049 0.0314019 4.60347C-0.0476102 4.84646 0.0253592 5.11298 0.2179 5.28098L2.83592 7.577L2.06392 10.9776C2.00744 11.2277 2.10448 11.4861 2.31195 11.6361C2.42346 11.7167 2.55393 11.7577 2.68549 11.7577C2.79893 11.7577 2.91145 11.7271 3.01244 11.6667L6.00006 9.88107L8.98659 11.6667C9.20513 11.7981 9.48062 11.7862 9.68762 11.6361C9.89518 11.4857 9.99214 11.2271 9.93565 10.9776L9.16366 7.577L11.7817 5.28144C11.9742 5.11298 12.0477 4.84692 11.9687 4.60347Z" fill="#FFB067" />
                            </g>
                            <defs>
                                <clipPath id="clip0_134_3383">
                                    <rect width="12" height="12" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <svg class="inline-block" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_134_3383)">
                                <path d="M11.9687 4.60347C11.8902 4.36049 11.6746 4.18791 11.4197 4.16493L7.95614 3.85043L6.58656 0.644816C6.48558 0.409886 6.25559 0.257812 6.00006 0.257812C5.74453 0.257812 5.51454 0.409885 5.41356 0.645365L4.04399 3.85043L0.579908 4.16493C0.325385 4.18846 0.110414 4.36049 0.0314019 4.60347C-0.0476102 4.84646 0.0253592 5.11298 0.2179 5.28098L2.83592 7.577L2.06392 10.9776C2.00744 11.2277 2.10448 11.4861 2.31195 11.6361C2.42346 11.7167 2.55393 11.7577 2.68549 11.7577C2.79893 11.7577 2.91145 11.7271 3.01244 11.6667L6.00006 9.88107L8.98659 11.6667C9.20513 11.7981 9.48062 11.7862 9.68762 11.6361C9.89518 11.4857 9.99214 11.2271 9.93565 10.9776L9.16366 7.577L11.7817 5.28144C11.9742 5.11298 12.0477 4.84692 11.9687 4.60347Z" fill="#FFB067" />
                            </g>
                            <defs>
                                <clipPath id="clip0_134_3383">
                                    <rect width="12" height="12" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <svg class="inline-block" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_134_3383)">
                                <path d="M11.9687 4.60347C11.8902 4.36049 11.6746 4.18791 11.4197 4.16493L7.95614 3.85043L6.58656 0.644816C6.48558 0.409886 6.25559 0.257812 6.00006 0.257812C5.74453 0.257812 5.51454 0.409885 5.41356 0.645365L4.04399 3.85043L0.579908 4.16493C0.325385 4.18846 0.110414 4.36049 0.0314019 4.60347C-0.0476102 4.84646 0.0253592 5.11298 0.2179 5.28098L2.83592 7.577L2.06392 10.9776C2.00744 11.2277 2.10448 11.4861 2.31195 11.6361C2.42346 11.7167 2.55393 11.7577 2.68549 11.7577C2.79893 11.7577 2.91145 11.7271 3.01244 11.6667L6.00006 9.88107L8.98659 11.6667C9.20513 11.7981 9.48062 11.7862 9.68762 11.6361C9.89518 11.4857 9.99214 11.2271 9.93565 10.9776L9.16366 7.577L11.7817 5.28144C11.9742 5.11298 12.0477 4.84692 11.9687 4.60347Z" fill="#FFB067" />
                            </g>
                            <defs>
                                <clipPath id="clip0_134_3383">
                                    <rect width="12" height="12" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <svg class="inline-block" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_134_3383)">
                                <path d="M11.9687 4.60347C11.8902 4.36049 11.6746 4.18791 11.4197 4.16493L7.95614 3.85043L6.58656 0.644816C6.48558 0.409886 6.25559 0.257812 6.00006 0.257812C5.74453 0.257812 5.51454 0.409885 5.41356 0.645365L4.04399 3.85043L0.579908 4.16493C0.325385 4.18846 0.110414 4.36049 0.0314019 4.60347C-0.0476102 4.84646 0.0253592 5.11298 0.2179 5.28098L2.83592 7.577L2.06392 10.9776C2.00744 11.2277 2.10448 11.4861 2.31195 11.6361C2.42346 11.7167 2.55393 11.7577 2.68549 11.7577C2.79893 11.7577 2.91145 11.7271 3.01244 11.6667L6.00006 9.88107L8.98659 11.6667C9.20513 11.7981 9.48062 11.7862 9.68762 11.6361C9.89518 11.4857 9.99214 11.2271 9.93565 10.9776L9.16366 7.577L11.7817 5.28144C11.9742 5.11298 12.0477 4.84692 11.9687 4.60347Z" fill="#FFB067" />
                            </g>
                            <defs>
                                <clipPath id="clip0_134_3383">
                                    <rect width="12" height="12" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <svg class="inline-block" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_134_3383)">
                                <path d="M11.9687 4.60347C11.8902 4.36049 11.6746 4.18791 11.4197 4.16493L7.95614 3.85043L6.58656 0.644816C6.48558 0.409886 6.25559 0.257812 6.00006 0.257812C5.74453 0.257812 5.51454 0.409885 5.41356 0.645365L4.04399 3.85043L0.579908 4.16493C0.325385 4.18846 0.110414 4.36049 0.0314019 4.60347C-0.0476102 4.84646 0.0253592 5.11298 0.2179 5.28098L2.83592 7.577L2.06392 10.9776C2.00744 11.2277 2.10448 11.4861 2.31195 11.6361C2.42346 11.7167 2.55393 11.7577 2.68549 11.7577C2.79893 11.7577 2.91145 11.7271 3.01244 11.6667L6.00006 9.88107L8.98659 11.6667C9.20513 11.7981 9.48062 11.7862 9.68762 11.6361C9.89518 11.4857 9.99214 11.2271 9.93565 10.9776L9.16366 7.577L11.7817 5.28144C11.9742 5.11298 12.0477 4.84692 11.9687 4.60347Z" fill="#FFB067" />
                            </g>
                            <defs>
                                <clipPath id="clip0_134_3383">
                                    <rect width="12" height="12" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <span class="text-[#8C9EC5] text-xs leading-[18px]">(65)</span>

                        <div class="mt-4 mb-4">
                            <h2 class="text-xl leading-7 font-bold">$2856.3 <del class="text-[#8C9EC5] text-[16px] leading-6 font-normal">$3225.6</del></h2>
                        </div>

                        <button class="border rounded w-[100%] border-solid border-[#425A8B] hover:bg-[#425A8B] duration-300 text-sm leading-5 font-bold py-[7px] px-[22px] hover:text-white">Add to Cart</button>

                        <ul class="pl-[15px] list-disc mt-6">
                            <li class="text-[10px]"><a href="#">27-inch (diagonal) Retina 5K display</a></li>
                        </ul>
                    </div>

                    <div class="inline-block relative image-box mb-[10px] border border-solid border-[#D5DFE4] rounded px-5 w-full pb-4">
                        <span class="bg-[#FD9636] leading-[12px] rounded-[30px] py-1 px-[10px] z-[2] text-xs absolute top-3 left-3 text-white">-17%</span>
                        <img
                            class="block mx-auto max-w-[95%] h-[165px] leading-[165px]"
                            src="<?php echo e(asset('assets/computer.png')); ?>"
                            alt="imgsp1"
                            loading="lazy">

                        <p class="text-xs leading-[18px] text-[#8C9EC5]">Samsung</p>
                        <h4 class="text-sm leading-5 font-bold">Apple AirPods Pro with MagSafe<br>Charging Case</h4>

                        <svg class="inline-block" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_134_3383)">
                                <path d="M11.9687 4.60347C11.8902 4.36049 11.6746 4.18791 11.4197 4.16493L7.95614 3.85043L6.58656 0.644816C6.48558 0.409886 6.25559 0.257812 6.00006 0.257812C5.74453 0.257812 5.51454 0.409885 5.41356 0.645365L4.04399 3.85043L0.579908 4.16493C0.325385 4.18846 0.110414 4.36049 0.0314019 4.60347C-0.0476102 4.84646 0.0253592 5.11298 0.2179 5.28098L2.83592 7.577L2.06392 10.9776C2.00744 11.2277 2.10448 11.4861 2.31195 11.6361C2.42346 11.7167 2.55393 11.7577 2.68549 11.7577C2.79893 11.7577 2.91145 11.7271 3.01244 11.6667L6.00006 9.88107L8.98659 11.6667C9.20513 11.7981 9.48062 11.7862 9.68762 11.6361C9.89518 11.4857 9.99214 11.2271 9.93565 10.9776L9.16366 7.577L11.7817 5.28144C11.9742 5.11298 12.0477 4.84692 11.9687 4.60347Z" fill="#FFB067" />
                            </g>
                            <defs>
                                <clipPath id="clip0_134_3383">
                                    <rect width="12" height="12" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <svg class="inline-block" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_134_3383)">
                                <path d="M11.9687 4.60347C11.8902 4.36049 11.6746 4.18791 11.4197 4.16493L7.95614 3.85043L6.58656 0.644816C6.48558 0.409886 6.25559 0.257812 6.00006 0.257812C5.74453 0.257812 5.51454 0.409885 5.41356 0.645365L4.04399 3.85043L0.579908 4.16493C0.325385 4.18846 0.110414 4.36049 0.0314019 4.60347C-0.0476102 4.84646 0.0253592 5.11298 0.2179 5.28098L2.83592 7.577L2.06392 10.9776C2.00744 11.2277 2.10448 11.4861 2.31195 11.6361C2.42346 11.7167 2.55393 11.7577 2.68549 11.7577C2.79893 11.7577 2.91145 11.7271 3.01244 11.6667L6.00006 9.88107L8.98659 11.6667C9.20513 11.7981 9.48062 11.7862 9.68762 11.6361C9.89518 11.4857 9.99214 11.2271 9.93565 10.9776L9.16366 7.577L11.7817 5.28144C11.9742 5.11298 12.0477 4.84692 11.9687 4.60347Z" fill="#FFB067" />
                            </g>
                            <defs>
                                <clipPath id="clip0_134_3383">
                                    <rect width="12" height="12" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <svg class="inline-block" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_134_3383)">
                                <path d="M11.9687 4.60347C11.8902 4.36049 11.6746 4.18791 11.4197 4.16493L7.95614 3.85043L6.58656 0.644816C6.48558 0.409886 6.25559 0.257812 6.00006 0.257812C5.74453 0.257812 5.51454 0.409885 5.41356 0.645365L4.04399 3.85043L0.579908 4.16493C0.325385 4.18846 0.110414 4.36049 0.0314019 4.60347C-0.0476102 4.84646 0.0253592 5.11298 0.2179 5.28098L2.83592 7.577L2.06392 10.9776C2.00744 11.2277 2.10448 11.4861 2.31195 11.6361C2.42346 11.7167 2.55393 11.7577 2.68549 11.7577C2.79893 11.7577 2.91145 11.7271 3.01244 11.6667L6.00006 9.88107L8.98659 11.6667C9.20513 11.7981 9.48062 11.7862 9.68762 11.6361C9.89518 11.4857 9.99214 11.2271 9.93565 10.9776L9.16366 7.577L11.7817 5.28144C11.9742 5.11298 12.0477 4.84692 11.9687 4.60347Z" fill="#FFB067" />
                            </g>
                            <defs>
                                <clipPath id="clip0_134_3383">
                                    <rect width="12" height="12" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <svg class="inline-block" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_134_3383)">
                                <path d="M11.9687 4.60347C11.8902 4.36049 11.6746 4.18791 11.4197 4.16493L7.95614 3.85043L6.58656 0.644816C6.48558 0.409886 6.25559 0.257812 6.00006 0.257812C5.74453 0.257812 5.51454 0.409885 5.41356 0.645365L4.04399 3.85043L0.579908 4.16493C0.325385 4.18846 0.110414 4.36049 0.0314019 4.60347C-0.0476102 4.84646 0.0253592 5.11298 0.2179 5.28098L2.83592 7.577L2.06392 10.9776C2.00744 11.2277 2.10448 11.4861 2.31195 11.6361C2.42346 11.7167 2.55393 11.7577 2.68549 11.7577C2.79893 11.7577 2.91145 11.7271 3.01244 11.6667L6.00006 9.88107L8.98659 11.6667C9.20513 11.7981 9.48062 11.7862 9.68762 11.6361C9.89518 11.4857 9.99214 11.2271 9.93565 10.9776L9.16366 7.577L11.7817 5.28144C11.9742 5.11298 12.0477 4.84692 11.9687 4.60347Z" fill="#FFB067" />
                            </g>
                            <defs>
                                <clipPath id="clip0_134_3383">
                                    <rect width="12" height="12" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <svg class="inline-block" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_134_3383)">
                                <path d="M11.9687 4.60347C11.8902 4.36049 11.6746 4.18791 11.4197 4.16493L7.95614 3.85043L6.58656 0.644816C6.48558 0.409886 6.25559 0.257812 6.00006 0.257812C5.74453 0.257812 5.51454 0.409885 5.41356 0.645365L4.04399 3.85043L0.579908 4.16493C0.325385 4.18846 0.110414 4.36049 0.0314019 4.60347C-0.0476102 4.84646 0.0253592 5.11298 0.2179 5.28098L2.83592 7.577L2.06392 10.9776C2.00744 11.2277 2.10448 11.4861 2.31195 11.6361C2.42346 11.7167 2.55393 11.7577 2.68549 11.7577C2.79893 11.7577 2.91145 11.7271 3.01244 11.6667L6.00006 9.88107L8.98659 11.6667C9.20513 11.7981 9.48062 11.7862 9.68762 11.6361C9.89518 11.4857 9.99214 11.2271 9.93565 10.9776L9.16366 7.577L11.7817 5.28144C11.9742 5.11298 12.0477 4.84692 11.9687 4.60347Z" fill="#FFB067" />
                            </g>
                            <defs>
                                <clipPath id="clip0_134_3383">
                                    <rect width="12" height="12" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <span class="text-[#8C9EC5] text-xs leading-[18px]">(65)</span>

                        <div class="mt-4 mb-4">
                            <h2 class="text-xl leading-7 font-bold">$2856.3 <del class="text-[#8C9EC5] text-[16px] leading-6 font-normal">$3225.6</del></h2>
                        </div>

                        <button class="border rounded w-[100%] border-solid border-[#425A8B] hover:bg-[#425A8B] duration-300 text-sm leading-5 font-bold py-[7px] px-[22px] hover:text-white">Add to Cart</button>

                        <ul class="pl-[15px] list-disc mt-6">
                            <li class="text-[10px]"><a href="#">27-inch (diagonal) Retina 5K display</a></li>
                        </ul>
                    </div>
                </div>
                <div class="flex gap-6 mt-5 max-[576px]:flex-wrap">
                    <div class="inline-block relative image-box mb-[10px] border border-solid border-[#D5DFE4] rounded px-5 pb-4 max-[576px]:w-full w-full">
                        <span class="bg-[#FD9636] leading-[12px] rounded-[30px] py-1 px-[10px] z-[2] text-xs absolute top-3 left-3 text-white">-17%</span>
                        <img
                            class="align-middle block mx-auto max-w-[95%] mt-6 h-[165px] leading-[165px]"
                            src="<?php echo e(asset('assets/imgsp4.png')); ?>"
                            alt="imgsp1"
                            loading="lazy">

                        <p class="text-xs leading-[18px] text-[#8C9EC5]">Philips</p>
                        <h4 class="text-sm leading-5 font-bold">Razer Power Up Gaming Bundle V2 - <br>Cynosa Lite, Gigantus</h4>

                        <svg class="inline-block" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_134_3383)">
                                <path d="M11.9687 4.60347C11.8902 4.36049 11.6746 4.18791 11.4197 4.16493L7.95614 3.85043L6.58656 0.644816C6.48558 0.409886 6.25559 0.257812 6.00006 0.257812C5.74453 0.257812 5.51454 0.409885 5.41356 0.645365L4.04399 3.85043L0.579908 4.16493C0.325385 4.18846 0.110414 4.36049 0.0314019 4.60347C-0.0476102 4.84646 0.0253592 5.11298 0.2179 5.28098L2.83592 7.577L2.06392 10.9776C2.00744 11.2277 2.10448 11.4861 2.31195 11.6361C2.42346 11.7167 2.55393 11.7577 2.68549 11.7577C2.79893 11.7577 2.91145 11.7271 3.01244 11.6667L6.00006 9.88107L8.98659 11.6667C9.20513 11.7981 9.48062 11.7862 9.68762 11.6361C9.89518 11.4857 9.99214 11.2271 9.93565 10.9776L9.16366 7.577L11.7817 5.28144C11.9742 5.11298 12.0477 4.84692 11.9687 4.60347Z" fill="#FFB067" />
                            </g>
                            <defs>
                                <clipPath id="clip0_134_3383">
                                    <rect width="12" height="12" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <svg class="inline-block" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_134_3383)">
                                <path d="M11.9687 4.60347C11.8902 4.36049 11.6746 4.18791 11.4197 4.16493L7.95614 3.85043L6.58656 0.644816C6.48558 0.409886 6.25559 0.257812 6.00006 0.257812C5.74453 0.257812 5.51454 0.409885 5.41356 0.645365L4.04399 3.85043L0.579908 4.16493C0.325385 4.18846 0.110414 4.36049 0.0314019 4.60347C-0.0476102 4.84646 0.0253592 5.11298 0.2179 5.28098L2.83592 7.577L2.06392 10.9776C2.00744 11.2277 2.10448 11.4861 2.31195 11.6361C2.42346 11.7167 2.55393 11.7577 2.68549 11.7577C2.79893 11.7577 2.91145 11.7271 3.01244 11.6667L6.00006 9.88107L8.98659 11.6667C9.20513 11.7981 9.48062 11.7862 9.68762 11.6361C9.89518 11.4857 9.99214 11.2271 9.93565 10.9776L9.16366 7.577L11.7817 5.28144C11.9742 5.11298 12.0477 4.84692 11.9687 4.60347Z" fill="#FFB067" />
                            </g>
                            <defs>
                                <clipPath id="clip0_134_3383">
                                    <rect width="12" height="12" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <svg class="inline-block" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_134_3383)">
                                <path d="M11.9687 4.60347C11.8902 4.36049 11.6746 4.18791 11.4197 4.16493L7.95614 3.85043L6.58656 0.644816C6.48558 0.409886 6.25559 0.257812 6.00006 0.257812C5.74453 0.257812 5.51454 0.409885 5.41356 0.645365L4.04399 3.85043L0.579908 4.16493C0.325385 4.18846 0.110414 4.36049 0.0314019 4.60347C-0.0476102 4.84646 0.0253592 5.11298 0.2179 5.28098L2.83592 7.577L2.06392 10.9776C2.00744 11.2277 2.10448 11.4861 2.31195 11.6361C2.42346 11.7167 2.55393 11.7577 2.68549 11.7577C2.79893 11.7577 2.91145 11.7271 3.01244 11.6667L6.00006 9.88107L8.98659 11.6667C9.20513 11.7981 9.48062 11.7862 9.68762 11.6361C9.89518 11.4857 9.99214 11.2271 9.93565 10.9776L9.16366 7.577L11.7817 5.28144C11.9742 5.11298 12.0477 4.84692 11.9687 4.60347Z" fill="#FFB067" />
                            </g>
                            <defs>
                                <clipPath id="clip0_134_3383">
                                    <rect width="12" height="12" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <svg class="inline-block" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_134_3383)">
                                <path d="M11.9687 4.60347C11.8902 4.36049 11.6746 4.18791 11.4197 4.16493L7.95614 3.85043L6.58656 0.644816C6.48558 0.409886 6.25559 0.257812 6.00006 0.257812C5.74453 0.257812 5.51454 0.409885 5.41356 0.645365L4.04399 3.85043L0.579908 4.16493C0.325385 4.18846 0.110414 4.36049 0.0314019 4.60347C-0.0476102 4.84646 0.0253592 5.11298 0.2179 5.28098L2.83592 7.577L2.06392 10.9776C2.00744 11.2277 2.10448 11.4861 2.31195 11.6361C2.42346 11.7167 2.55393 11.7577 2.68549 11.7577C2.79893 11.7577 2.91145 11.7271 3.01244 11.6667L6.00006 9.88107L8.98659 11.6667C9.20513 11.7981 9.48062 11.7862 9.68762 11.6361C9.89518 11.4857 9.99214 11.2271 9.93565 10.9776L9.16366 7.577L11.7817 5.28144C11.9742 5.11298 12.0477 4.84692 11.9687 4.60347Z" fill="#FFB067" />
                            </g>
                            <defs>
                                <clipPath id="clip0_134_3383">
                                    <rect width="12" height="12" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <svg class="inline-block" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_134_3383)">
                                <path d="M11.9687 4.60347C11.8902 4.36049 11.6746 4.18791 11.4197 4.16493L7.95614 3.85043L6.58656 0.644816C6.48558 0.409886 6.25559 0.257812 6.00006 0.257812C5.74453 0.257812 5.51454 0.409885 5.41356 0.645365L4.04399 3.85043L0.579908 4.16493C0.325385 4.18846 0.110414 4.36049 0.0314019 4.60347C-0.0476102 4.84646 0.0253592 5.11298 0.2179 5.28098L2.83592 7.577L2.06392 10.9776C2.00744 11.2277 2.10448 11.4861 2.31195 11.6361C2.42346 11.7167 2.55393 11.7577 2.68549 11.7577C2.79893 11.7577 2.91145 11.7271 3.01244 11.6667L6.00006 9.88107L8.98659 11.6667C9.20513 11.7981 9.48062 11.7862 9.68762 11.6361C9.89518 11.4857 9.99214 11.2271 9.93565 10.9776L9.16366 7.577L11.7817 5.28144C11.9742 5.11298 12.0477 4.84692 11.9687 4.60347Z" fill="#FFB067" />
                            </g>
                            <defs>
                                <clipPath id="clip0_134_3383">
                                    <rect width="12" height="12" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <span class="text-[#8C9EC5] text-xs leading-[18px]">(65)</span>

                        <div class="mt-4 mb-4">
                            <h2 class="text-xl leading-7 font-bold">$2856.3 <del class="text-[#8C9EC5] text-[16px] leading-6 font-normal">$3225.6</del></h2>
                        </div>

                        <button class="border rounded w-[100%] border-solid border-[#425A8B] hover:bg-[#425A8B] duration-300 text-sm leading-5 font-bold py-[7px] px-[22px] hover:text-white">Add to Cart</button>

                        <ul class="pl-[15px] list-disc mt-6">
                            <li class="text-[10px]"><a href="#">27-inch (diagonal) Retina 5K display</a></li>
                        </ul>
                    </div>

                    <div class="inline-block max-[576px]:w-full relative image-box mb-[10px] border border-solid border-[#D5DFE4] rounded px-5 w-full">
                        <span class="bg-[#FD9636] leading-[12px] rounded-[30px] py-1 px-[10px] z-[2] text-xs absolute top-3 left-3 text-white">-17%</span>
                        <img
                            class="block mx-auto max-w-[95%] h-[165px] leading-[165px]"
                            src="<?php echo e(asset('assets/imgsp5.png')); ?>"
                            alt="imgsp1"
                            loading="lazy">

                        <p class="text-xs leading-[18px] text-[#8C9EC5]">Samsung</p>
                        <h4 class="text-sm leading-5 font-bold">ASUS ROG Strix GL10 Gaming<br>Desktop, AMD Ryzen 5-3600X</h4>

                        <svg class="inline-block" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_134_3383)">
                                <path d="M11.9687 4.60347C11.8902 4.36049 11.6746 4.18791 11.4197 4.16493L7.95614 3.85043L6.58656 0.644816C6.48558 0.409886 6.25559 0.257812 6.00006 0.257812C5.74453 0.257812 5.51454 0.409885 5.41356 0.645365L4.04399 3.85043L0.579908 4.16493C0.325385 4.18846 0.110414 4.36049 0.0314019 4.60347C-0.0476102 4.84646 0.0253592 5.11298 0.2179 5.28098L2.83592 7.577L2.06392 10.9776C2.00744 11.2277 2.10448 11.4861 2.31195 11.6361C2.42346 11.7167 2.55393 11.7577 2.68549 11.7577C2.79893 11.7577 2.91145 11.7271 3.01244 11.6667L6.00006 9.88107L8.98659 11.6667C9.20513 11.7981 9.48062 11.7862 9.68762 11.6361C9.89518 11.4857 9.99214 11.2271 9.93565 10.9776L9.16366 7.577L11.7817 5.28144C11.9742 5.11298 12.0477 4.84692 11.9687 4.60347Z" fill="#FFB067" />
                            </g>
                            <defs>
                                <clipPath id="clip0_134_3383">
                                    <rect width="12" height="12" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <svg class="inline-block" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_134_3383)">
                                <path d="M11.9687 4.60347C11.8902 4.36049 11.6746 4.18791 11.4197 4.16493L7.95614 3.85043L6.58656 0.644816C6.48558 0.409886 6.25559 0.257812 6.00006 0.257812C5.74453 0.257812 5.51454 0.409885 5.41356 0.645365L4.04399 3.85043L0.579908 4.16493C0.325385 4.18846 0.110414 4.36049 0.0314019 4.60347C-0.0476102 4.84646 0.0253592 5.11298 0.2179 5.28098L2.83592 7.577L2.06392 10.9776C2.00744 11.2277 2.10448 11.4861 2.31195 11.6361C2.42346 11.7167 2.55393 11.7577 2.68549 11.7577C2.79893 11.7577 2.91145 11.7271 3.01244 11.6667L6.00006 9.88107L8.98659 11.6667C9.20513 11.7981 9.48062 11.7862 9.68762 11.6361C9.89518 11.4857 9.99214 11.2271 9.93565 10.9776L9.16366 7.577L11.7817 5.28144C11.9742 5.11298 12.0477 4.84692 11.9687 4.60347Z" fill="#FFB067" />
                            </g>
                            <defs>
                                <clipPath id="clip0_134_3383">
                                    <rect width="12" height="12" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <svg class="inline-block" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_134_3383)">
                                <path d="M11.9687 4.60347C11.8902 4.36049 11.6746 4.18791 11.4197 4.16493L7.95614 3.85043L6.58656 0.644816C6.48558 0.409886 6.25559 0.257812 6.00006 0.257812C5.74453 0.257812 5.51454 0.409885 5.41356 0.645365L4.04399 3.85043L0.579908 4.16493C0.325385 4.18846 0.110414 4.36049 0.0314019 4.60347C-0.0476102 4.84646 0.0253592 5.11298 0.2179 5.28098L2.83592 7.577L2.06392 10.9776C2.00744 11.2277 2.10448 11.4861 2.31195 11.6361C2.42346 11.7167 2.55393 11.7577 2.68549 11.7577C2.79893 11.7577 2.91145 11.7271 3.01244 11.6667L6.00006 9.88107L8.98659 11.6667C9.20513 11.7981 9.48062 11.7862 9.68762 11.6361C9.89518 11.4857 9.99214 11.2271 9.93565 10.9776L9.16366 7.577L11.7817 5.28144C11.9742 5.11298 12.0477 4.84692 11.9687 4.60347Z" fill="#FFB067" />
                            </g>
                            <defs>
                                <clipPath id="clip0_134_3383">
                                    <rect width="12" height="12" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <svg class="inline-block" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_134_3383)">
                                <path d="M11.9687 4.60347C11.8902 4.36049 11.6746 4.18791 11.4197 4.16493L7.95614 3.85043L6.58656 0.644816C6.48558 0.409886 6.25559 0.257812 6.00006 0.257812C5.74453 0.257812 5.51454 0.409885 5.41356 0.645365L4.04399 3.85043L0.579908 4.16493C0.325385 4.18846 0.110414 4.36049 0.0314019 4.60347C-0.0476102 4.84646 0.0253592 5.11298 0.2179 5.28098L2.83592 7.577L2.06392 10.9776C2.00744 11.2277 2.10448 11.4861 2.31195 11.6361C2.42346 11.7167 2.55393 11.7577 2.68549 11.7577C2.79893 11.7577 2.91145 11.7271 3.01244 11.6667L6.00006 9.88107L8.98659 11.6667C9.20513 11.7981 9.48062 11.7862 9.68762 11.6361C9.89518 11.4857 9.99214 11.2271 9.93565 10.9776L9.16366 7.577L11.7817 5.28144C11.9742 5.11298 12.0477 4.84692 11.9687 4.60347Z" fill="#FFB067" />
                            </g>
                            <defs>
                                <clipPath id="clip0_134_3383">
                                    <rect width="12" height="12" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <svg class="inline-block" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_134_3383)">
                                <path d="M11.9687 4.60347C11.8902 4.36049 11.6746 4.18791 11.4197 4.16493L7.95614 3.85043L6.58656 0.644816C6.48558 0.409886 6.25559 0.257812 6.00006 0.257812C5.74453 0.257812 5.51454 0.409885 5.41356 0.645365L4.04399 3.85043L0.579908 4.16493C0.325385 4.18846 0.110414 4.36049 0.0314019 4.60347C-0.0476102 4.84646 0.0253592 5.11298 0.2179 5.28098L2.83592 7.577L2.06392 10.9776C2.00744 11.2277 2.10448 11.4861 2.31195 11.6361C2.42346 11.7167 2.55393 11.7577 2.68549 11.7577C2.79893 11.7577 2.91145 11.7271 3.01244 11.6667L6.00006 9.88107L8.98659 11.6667C9.20513 11.7981 9.48062 11.7862 9.68762 11.6361C9.89518 11.4857 9.99214 11.2271 9.93565 10.9776L9.16366 7.577L11.7817 5.28144C11.9742 5.11298 12.0477 4.84692 11.9687 4.60347Z" fill="#FFB067" />
                            </g>
                            <defs>
                                <clipPath id="clip0_134_3383">
                                    <rect width="12" height="12" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <span class="text-[#8C9EC5] text-xs leading-[18px]">(65)</span>

                        <div class="mt-4 mb-4">
                            <h2 class="text-xl leading-7 font-bold">$2856.3 <del class="text-[#8C9EC5] text-[16px] leading-6 font-normal">$3225.6</del></h2>
                        </div>

                        <button class="border rounded w-[100%] border-solid border-[#425A8B] hover:bg-[#425A8B] duration-300 text-sm leading-5 font-bold py-[7px] px-[22px] hover:text-white">Add to Cart</button>

                        <ul class="pl-[15px] list-disc mt-6">
                            <li class="text-[10px]"><a href="#">27-inch (diagonal) Retina 5K display</a></li>
                        </ul>
                    </div>

                    <div class="inline-block max-[576px]:w-full relative image-box mb-[10px] border border-solid border-[#D5DFE4] rounded px-5 w-full">
                        <span class="bg-[#FD9636] leading-[12px] rounded-[30px] py-1 px-[10px] z-[2] text-xs absolute top-3 left-3 text-white">-17%</span>
                        <img
                            class="block mx-auto max-w-[95%] h-[165px] leading-[165px]"
                            src="<?php echo e(asset('assets/smartwatches.png')); ?>"
                            alt="imgsp1"
                            loading="lazy">

                        <p class="text-xs leading-[18px] text-[#8C9EC5]">Samsung</p>
                        <h4 class="text-sm leading-5 font-bold">Fujifilm INSTAX Mini Link 2<br>Smartphone Printer Exclusive</h4>

                        <svg class="inline-block" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_134_3383)">
                                <path d="M11.9687 4.60347C11.8902 4.36049 11.6746 4.18791 11.4197 4.16493L7.95614 3.85043L6.58656 0.644816C6.48558 0.409886 6.25559 0.257812 6.00006 0.257812C5.74453 0.257812 5.51454 0.409885 5.41356 0.645365L4.04399 3.85043L0.579908 4.16493C0.325385 4.18846 0.110414 4.36049 0.0314019 4.60347C-0.0476102 4.84646 0.0253592 5.11298 0.2179 5.28098L2.83592 7.577L2.06392 10.9776C2.00744 11.2277 2.10448 11.4861 2.31195 11.6361C2.42346 11.7167 2.55393 11.7577 2.68549 11.7577C2.79893 11.7577 2.91145 11.7271 3.01244 11.6667L6.00006 9.88107L8.98659 11.6667C9.20513 11.7981 9.48062 11.7862 9.68762 11.6361C9.89518 11.4857 9.99214 11.2271 9.93565 10.9776L9.16366 7.577L11.7817 5.28144C11.9742 5.11298 12.0477 4.84692 11.9687 4.60347Z" fill="#FFB067" />
                            </g>
                            <defs>
                                <clipPath id="clip0_134_3383">
                                    <rect width="12" height="12" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <svg class="inline-block" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_134_3383)">
                                <path d="M11.9687 4.60347C11.8902 4.36049 11.6746 4.18791 11.4197 4.16493L7.95614 3.85043L6.58656 0.644816C6.48558 0.409886 6.25559 0.257812 6.00006 0.257812C5.74453 0.257812 5.51454 0.409885 5.41356 0.645365L4.04399 3.85043L0.579908 4.16493C0.325385 4.18846 0.110414 4.36049 0.0314019 4.60347C-0.0476102 4.84646 0.0253592 5.11298 0.2179 5.28098L2.83592 7.577L2.06392 10.9776C2.00744 11.2277 2.10448 11.4861 2.31195 11.6361C2.42346 11.7167 2.55393 11.7577 2.68549 11.7577C2.79893 11.7577 2.91145 11.7271 3.01244 11.6667L6.00006 9.88107L8.98659 11.6667C9.20513 11.7981 9.48062 11.7862 9.68762 11.6361C9.89518 11.4857 9.99214 11.2271 9.93565 10.9776L9.16366 7.577L11.7817 5.28144C11.9742 5.11298 12.0477 4.84692 11.9687 4.60347Z" fill="#FFB067" />
                            </g>
                            <defs>
                                <clipPath id="clip0_134_3383">
                                    <rect width="12" height="12" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <svg class="inline-block" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_134_3383)">
                                <path d="M11.9687 4.60347C11.8902 4.36049 11.6746 4.18791 11.4197 4.16493L7.95614 3.85043L6.58656 0.644816C6.48558 0.409886 6.25559 0.257812 6.00006 0.257812C5.74453 0.257812 5.51454 0.409885 5.41356 0.645365L4.04399 3.85043L0.579908 4.16493C0.325385 4.18846 0.110414 4.36049 0.0314019 4.60347C-0.0476102 4.84646 0.0253592 5.11298 0.2179 5.28098L2.83592 7.577L2.06392 10.9776C2.00744 11.2277 2.10448 11.4861 2.31195 11.6361C2.42346 11.7167 2.55393 11.7577 2.68549 11.7577C2.79893 11.7577 2.91145 11.7271 3.01244 11.6667L6.00006 9.88107L8.98659 11.6667C9.20513 11.7981 9.48062 11.7862 9.68762 11.6361C9.89518 11.4857 9.99214 11.2271 9.93565 10.9776L9.16366 7.577L11.7817 5.28144C11.9742 5.11298 12.0477 4.84692 11.9687 4.60347Z" fill="#FFB067" />
                            </g>
                            <defs>
                                <clipPath id="clip0_134_3383">
                                    <rect width="12" height="12" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <svg class="inline-block" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_134_3383)">
                                <path d="M11.9687 4.60347C11.8902 4.36049 11.6746 4.18791 11.4197 4.16493L7.95614 3.85043L6.58656 0.644816C6.48558 0.409886 6.25559 0.257812 6.00006 0.257812C5.74453 0.257812 5.51454 0.409885 5.41356 0.645365L4.04399 3.85043L0.579908 4.16493C0.325385 4.18846 0.110414 4.36049 0.0314019 4.60347C-0.0476102 4.84646 0.0253592 5.11298 0.2179 5.28098L2.83592 7.577L2.06392 10.9776C2.00744 11.2277 2.10448 11.4861 2.31195 11.6361C2.42346 11.7167 2.55393 11.7577 2.68549 11.7577C2.79893 11.7577 2.91145 11.7271 3.01244 11.6667L6.00006 9.88107L8.98659 11.6667C9.20513 11.7981 9.48062 11.7862 9.68762 11.6361C9.89518 11.4857 9.99214 11.2271 9.93565 10.9776L9.16366 7.577L11.7817 5.28144C11.9742 5.11298 12.0477 4.84692 11.9687 4.60347Z" fill="#FFB067" />
                            </g>
                            <defs>
                                <clipPath id="clip0_134_3383">
                                    <rect width="12" height="12" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <svg class="inline-block" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_134_3383)">
                                <path d="M11.9687 4.60347C11.8902 4.36049 11.6746 4.18791 11.4197 4.16493L7.95614 3.85043L6.58656 0.644816C6.48558 0.409886 6.25559 0.257812 6.00006 0.257812C5.74453 0.257812 5.51454 0.409885 5.41356 0.645365L4.04399 3.85043L0.579908 4.16493C0.325385 4.18846 0.110414 4.36049 0.0314019 4.60347C-0.0476102 4.84646 0.0253592 5.11298 0.2179 5.28098L2.83592 7.577L2.06392 10.9776C2.00744 11.2277 2.10448 11.4861 2.31195 11.6361C2.42346 11.7167 2.55393 11.7577 2.68549 11.7577C2.79893 11.7577 2.91145 11.7271 3.01244 11.6667L6.00006 9.88107L8.98659 11.6667C9.20513 11.7981 9.48062 11.7862 9.68762 11.6361C9.89518 11.4857 9.99214 11.2271 9.93565 10.9776L9.16366 7.577L11.7817 5.28144C11.9742 5.11298 12.0477 4.84692 11.9687 4.60347Z" fill="#FFB067" />
                            </g>
                            <defs>
                                <clipPath id="clip0_134_3383">
                                    <rect width="12" height="12" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <span class="text-[#8C9EC5] text-xs leading-[18px]">(65)</span>

                        <div class="mt-4 mb-4">
                            <h2 class="text-xl leading-7 font-bold">$2856.3 <del class="text-[#8C9EC5] text-[16px] leading-6 font-normal">$3225.6</del></h2>
                        </div>

                        <button class="border rounded w-[100%] border-solid border-[#425A8B] hover:bg-[#425A8B] duration-300 text-sm leading-5 font-bold py-[7px] px-[22px] hover:text-white">Add to Cart</button>

                        <ul class="pl-[15px] list-disc mt-6">
                            <li class="text-[10px]"><a href="#">27-inch (diagonal) Retina 5K display</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- products -->
        <div class="flex gap-5 mt-8 max-[576px]:flex-wrap">
            <div class="inline-block relative image-box mb-[10px] border border-solid border-[#D5DFE4] rounded px-5 w-full pb-4">
                <span class="bg-[#FD9636] leading-[12px] rounded-[30px] py-1 px-[10px] z-[2] text-xs absolute top-3 left-3 text-white">-17%</span>
                <img
                    class="block mx-auto max-w-[95%] h-[165px] leading-[165px]"
                    src="<?php echo e(asset('assets/computer.png')); ?>"
                    alt="imgsp1"
                    loading="lazy">

                <p class="text-xs leading-[18px] text-[#8C9EC5]">Samsung</p>
                <h4 class="text-sm leading-5 font-bold">Samsung 30-100 inches The <br>Freestyle FHD HDR Smart Projector</h4>

                <svg class="inline-block" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_134_3383)">
                        <path d="M11.9687 4.60347C11.8902 4.36049 11.6746 4.18791 11.4197 4.16493L7.95614 3.85043L6.58656 0.644816C6.48558 0.409886 6.25559 0.257812 6.00006 0.257812C5.74453 0.257812 5.51454 0.409885 5.41356 0.645365L4.04399 3.85043L0.579908 4.16493C0.325385 4.18846 0.110414 4.36049 0.0314019 4.60347C-0.0476102 4.84646 0.0253592 5.11298 0.2179 5.28098L2.83592 7.577L2.06392 10.9776C2.00744 11.2277 2.10448 11.4861 2.31195 11.6361C2.42346 11.7167 2.55393 11.7577 2.68549 11.7577C2.79893 11.7577 2.91145 11.7271 3.01244 11.6667L6.00006 9.88107L8.98659 11.6667C9.20513 11.7981 9.48062 11.7862 9.68762 11.6361C9.89518 11.4857 9.99214 11.2271 9.93565 10.9776L9.16366 7.577L11.7817 5.28144C11.9742 5.11298 12.0477 4.84692 11.9687 4.60347Z" fill="#FFB067" />
                    </g>
                    <defs>
                        <clipPath id="clip0_134_3383">
                            <rect width="12" height="12" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
                <svg class="inline-block" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_134_3383)">
                        <path d="M11.9687 4.60347C11.8902 4.36049 11.6746 4.18791 11.4197 4.16493L7.95614 3.85043L6.58656 0.644816C6.48558 0.409886 6.25559 0.257812 6.00006 0.257812C5.74453 0.257812 5.51454 0.409885 5.41356 0.645365L4.04399 3.85043L0.579908 4.16493C0.325385 4.18846 0.110414 4.36049 0.0314019 4.60347C-0.0476102 4.84646 0.0253592 5.11298 0.2179 5.28098L2.83592 7.577L2.06392 10.9776C2.00744 11.2277 2.10448 11.4861 2.31195 11.6361C2.42346 11.7167 2.55393 11.7577 2.68549 11.7577C2.79893 11.7577 2.91145 11.7271 3.01244 11.6667L6.00006 9.88107L8.98659 11.6667C9.20513 11.7981 9.48062 11.7862 9.68762 11.6361C9.89518 11.4857 9.99214 11.2271 9.93565 10.9776L9.16366 7.577L11.7817 5.28144C11.9742 5.11298 12.0477 4.84692 11.9687 4.60347Z" fill="#FFB067" />
                    </g>
                    <defs>
                        <clipPath id="clip0_134_3383">
                            <rect width="12" height="12" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
                <svg class="inline-block" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_134_3383)">
                        <path d="M11.9687 4.60347C11.8902 4.36049 11.6746 4.18791 11.4197 4.16493L7.95614 3.85043L6.58656 0.644816C6.48558 0.409886 6.25559 0.257812 6.00006 0.257812C5.74453 0.257812 5.51454 0.409885 5.41356 0.645365L4.04399 3.85043L0.579908 4.16493C0.325385 4.18846 0.110414 4.36049 0.0314019 4.60347C-0.0476102 4.84646 0.0253592 5.11298 0.2179 5.28098L2.83592 7.577L2.06392 10.9776C2.00744 11.2277 2.10448 11.4861 2.31195 11.6361C2.42346 11.7167 2.55393 11.7577 2.68549 11.7577C2.79893 11.7577 2.91145 11.7271 3.01244 11.6667L6.00006 9.88107L8.98659 11.6667C9.20513 11.7981 9.48062 11.7862 9.68762 11.6361C9.89518 11.4857 9.99214 11.2271 9.93565 10.9776L9.16366 7.577L11.7817 5.28144C11.9742 5.11298 12.0477 4.84692 11.9687 4.60347Z" fill="#FFB067" />
                    </g>
                    <defs>
                        <clipPath id="clip0_134_3383">
                            <rect width="12" height="12" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
                <svg class="inline-block" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_134_3383)">
                        <path d="M11.9687 4.60347C11.8902 4.36049 11.6746 4.18791 11.4197 4.16493L7.95614 3.85043L6.58656 0.644816C6.48558 0.409886 6.25559 0.257812 6.00006 0.257812C5.74453 0.257812 5.51454 0.409885 5.41356 0.645365L4.04399 3.85043L0.579908 4.16493C0.325385 4.18846 0.110414 4.36049 0.0314019 4.60347C-0.0476102 4.84646 0.0253592 5.11298 0.2179 5.28098L2.83592 7.577L2.06392 10.9776C2.00744 11.2277 2.10448 11.4861 2.31195 11.6361C2.42346 11.7167 2.55393 11.7577 2.68549 11.7577C2.79893 11.7577 2.91145 11.7271 3.01244 11.6667L6.00006 9.88107L8.98659 11.6667C9.20513 11.7981 9.48062 11.7862 9.68762 11.6361C9.89518 11.4857 9.99214 11.2271 9.93565 10.9776L9.16366 7.577L11.7817 5.28144C11.9742 5.11298 12.0477 4.84692 11.9687 4.60347Z" fill="#FFB067" />
                    </g>
                    <defs>
                        <clipPath id="clip0_134_3383">
                            <rect width="12" height="12" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
                <svg class="inline-block" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_134_3383)">
                        <path d="M11.9687 4.60347C11.8902 4.36049 11.6746 4.18791 11.4197 4.16493L7.95614 3.85043L6.58656 0.644816C6.48558 0.409886 6.25559 0.257812 6.00006 0.257812C5.74453 0.257812 5.51454 0.409885 5.41356 0.645365L4.04399 3.85043L0.579908 4.16493C0.325385 4.18846 0.110414 4.36049 0.0314019 4.60347C-0.0476102 4.84646 0.0253592 5.11298 0.2179 5.28098L2.83592 7.577L2.06392 10.9776C2.00744 11.2277 2.10448 11.4861 2.31195 11.6361C2.42346 11.7167 2.55393 11.7577 2.68549 11.7577C2.79893 11.7577 2.91145 11.7271 3.01244 11.6667L6.00006 9.88107L8.98659 11.6667C9.20513 11.7981 9.48062 11.7862 9.68762 11.6361C9.89518 11.4857 9.99214 11.2271 9.93565 10.9776L9.16366 7.577L11.7817 5.28144C11.9742 5.11298 12.0477 4.84692 11.9687 4.60347Z" fill="#FFB067" />
                    </g>
                    <defs>
                        <clipPath id="clip0_134_3383">
                            <rect width="12" height="12" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
                <span class="text-[#8C9EC5] text-xs leading-[18px]">(65)</span>

                <div class="mt-4 mb-4">
                    <h2 class="text-xl leading-7 font-bold">$2856.3 <del class="text-[#8C9EC5] text-[16px] leading-6 font-normal">$3225.6</del></h2>
                </div>

                <button class="border rounded w-[100%] border-solid border-[#425A8B] hover:bg-[#425A8B] duration-300 text-sm leading-5 font-bold py-[7px] px-[22px] hover:text-white">Add to Cart</button>

                <ul class="pl-[15px] list-disc mt-6">
                    <li class="text-[10px]"><a href="#">27-inch (diagonal) Retina 5K display</a></li>
                </ul>
            </div>
            <div class="inline-block relative image-box mb-[10px] border border-solid border-[#D5DFE4] rounded px-5 w-full pb-4">
                <span class="bg-[#FD9636] leading-[12px] rounded-[30px] py-1 px-[10px] z-[2] text-xs absolute top-3 left-3 text-white">-17%</span>
                <img
                    class="block mt-4 mx-auto max-w-[95%] h-[165px] leading-[165px]"
                    src="<?php echo e(asset('assets/imgsp4.png')); ?>"
                    alt="imgsp1"
                    loading="lazy">

                <p class="text-xs leading-[18px] text-[#8C9EC5]">Apple</p>
                <h4 class="text-sm leading-5 font-bold">Apple TV HD 32GB (2nd <br>Generation) (Latest Model)</h4>

                <svg class="inline-block" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_134_3383)">
                        <path d="M11.9687 4.60347C11.8902 4.36049 11.6746 4.18791 11.4197 4.16493L7.95614 3.85043L6.58656 0.644816C6.48558 0.409886 6.25559 0.257812 6.00006 0.257812C5.74453 0.257812 5.51454 0.409885 5.41356 0.645365L4.04399 3.85043L0.579908 4.16493C0.325385 4.18846 0.110414 4.36049 0.0314019 4.60347C-0.0476102 4.84646 0.0253592 5.11298 0.2179 5.28098L2.83592 7.577L2.06392 10.9776C2.00744 11.2277 2.10448 11.4861 2.31195 11.6361C2.42346 11.7167 2.55393 11.7577 2.68549 11.7577C2.79893 11.7577 2.91145 11.7271 3.01244 11.6667L6.00006 9.88107L8.98659 11.6667C9.20513 11.7981 9.48062 11.7862 9.68762 11.6361C9.89518 11.4857 9.99214 11.2271 9.93565 10.9776L9.16366 7.577L11.7817 5.28144C11.9742 5.11298 12.0477 4.84692 11.9687 4.60347Z" fill="#FFB067" />
                    </g>
                    <defs>
                        <clipPath id="clip0_134_3383">
                            <rect width="12" height="12" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
                <svg class="inline-block" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_134_3383)">
                        <path d="M11.9687 4.60347C11.8902 4.36049 11.6746 4.18791 11.4197 4.16493L7.95614 3.85043L6.58656 0.644816C6.48558 0.409886 6.25559 0.257812 6.00006 0.257812C5.74453 0.257812 5.51454 0.409885 5.41356 0.645365L4.04399 3.85043L0.579908 4.16493C0.325385 4.18846 0.110414 4.36049 0.0314019 4.60347C-0.0476102 4.84646 0.0253592 5.11298 0.2179 5.28098L2.83592 7.577L2.06392 10.9776C2.00744 11.2277 2.10448 11.4861 2.31195 11.6361C2.42346 11.7167 2.55393 11.7577 2.68549 11.7577C2.79893 11.7577 2.91145 11.7271 3.01244 11.6667L6.00006 9.88107L8.98659 11.6667C9.20513 11.7981 9.48062 11.7862 9.68762 11.6361C9.89518 11.4857 9.99214 11.2271 9.93565 10.9776L9.16366 7.577L11.7817 5.28144C11.9742 5.11298 12.0477 4.84692 11.9687 4.60347Z" fill="#FFB067" />
                    </g>
                    <defs>
                        <clipPath id="clip0_134_3383">
                            <rect width="12" height="12" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
                <svg class="inline-block" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_134_3383)">
                        <path d="M11.9687 4.60347C11.8902 4.36049 11.6746 4.18791 11.4197 4.16493L7.95614 3.85043L6.58656 0.644816C6.48558 0.409886 6.25559 0.257812 6.00006 0.257812C5.74453 0.257812 5.51454 0.409885 5.41356 0.645365L4.04399 3.85043L0.579908 4.16493C0.325385 4.18846 0.110414 4.36049 0.0314019 4.60347C-0.0476102 4.84646 0.0253592 5.11298 0.2179 5.28098L2.83592 7.577L2.06392 10.9776C2.00744 11.2277 2.10448 11.4861 2.31195 11.6361C2.42346 11.7167 2.55393 11.7577 2.68549 11.7577C2.79893 11.7577 2.91145 11.7271 3.01244 11.6667L6.00006 9.88107L8.98659 11.6667C9.20513 11.7981 9.48062 11.7862 9.68762 11.6361C9.89518 11.4857 9.99214 11.2271 9.93565 10.9776L9.16366 7.577L11.7817 5.28144C11.9742 5.11298 12.0477 4.84692 11.9687 4.60347Z" fill="#FFB067" />
                    </g>
                    <defs>
                        <clipPath id="clip0_134_3383">
                            <rect width="12" height="12" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
                <svg class="inline-block" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_134_3383)">
                        <path d="M11.9687 4.60347C11.8902 4.36049 11.6746 4.18791 11.4197 4.16493L7.95614 3.85043L6.58656 0.644816C6.48558 0.409886 6.25559 0.257812 6.00006 0.257812C5.74453 0.257812 5.51454 0.409885 5.41356 0.645365L4.04399 3.85043L0.579908 4.16493C0.325385 4.18846 0.110414 4.36049 0.0314019 4.60347C-0.0476102 4.84646 0.0253592 5.11298 0.2179 5.28098L2.83592 7.577L2.06392 10.9776C2.00744 11.2277 2.10448 11.4861 2.31195 11.6361C2.42346 11.7167 2.55393 11.7577 2.68549 11.7577C2.79893 11.7577 2.91145 11.7271 3.01244 11.6667L6.00006 9.88107L8.98659 11.6667C9.20513 11.7981 9.48062 11.7862 9.68762 11.6361C9.89518 11.4857 9.99214 11.2271 9.93565 10.9776L9.16366 7.577L11.7817 5.28144C11.9742 5.11298 12.0477 4.84692 11.9687 4.60347Z" fill="#FFB067" />
                    </g>
                    <defs>
                        <clipPath id="clip0_134_3383">
                            <rect width="12" height="12" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
                <svg class="inline-block" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_134_3383)">
                        <path d="M11.9687 4.60347C11.8902 4.36049 11.6746 4.18791 11.4197 4.16493L7.95614 3.85043L6.58656 0.644816C6.48558 0.409886 6.25559 0.257812 6.00006 0.257812C5.74453 0.257812 5.51454 0.409885 5.41356 0.645365L4.04399 3.85043L0.579908 4.16493C0.325385 4.18846 0.110414 4.36049 0.0314019 4.60347C-0.0476102 4.84646 0.0253592 5.11298 0.2179 5.28098L2.83592 7.577L2.06392 10.9776C2.00744 11.2277 2.10448 11.4861 2.31195 11.6361C2.42346 11.7167 2.55393 11.7577 2.68549 11.7577C2.79893 11.7577 2.91145 11.7271 3.01244 11.6667L6.00006 9.88107L8.98659 11.6667C9.20513 11.7981 9.48062 11.7862 9.68762 11.6361C9.89518 11.4857 9.99214 11.2271 9.93565 10.9776L9.16366 7.577L11.7817 5.28144C11.9742 5.11298 12.0477 4.84692 11.9687 4.60347Z" fill="#FFB067" />
                    </g>
                    <defs>
                        <clipPath id="clip0_134_3383">
                            <rect width="12" height="12" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
                <span class="text-[#8C9EC5] text-xs leading-[18px]">(65)</span>

                <div class="mt-4 mb-4">
                    <h2 class="text-xl leading-7 font-bold">$2856.3 <del class="text-[#8C9EC5] text-[16px] leading-6 font-normal">$3225.6</del></h2>
                </div>

                <button class="border rounded w-[100%] border-solid border-[#425A8B] hover:bg-[#425A8B] duration-300 text-sm leading-5 font-bold py-[7px] px-[22px] hover:text-white">Add to Cart</button>

                <ul class="pl-[15px] list-disc mt-6">
                    <li class="text-[10px]"><a href="#">27-inch (diagonal) Retina 5K display</a></li>
                </ul>
            </div>
            <div class="inline-block relative image-box mb-[10px] border border-solid border-[#D5DFE4] rounded px-5 w-full pb-4">
                <span class="bg-[#FD9636] leading-[12px] rounded-[30px] py-1 px-[10px] z-[2] text-xs absolute top-3 left-3 text-white">-17%</span>
                <img
                    class="block mx-auto max-w-[95%] h-[165px] leading-[165px]"
                    src="<?php echo e(asset('assets/imgsp5.png')); ?>"
                    alt="imgsp1"
                    loading="lazy">

                <p class="text-xs leading-[18px] text-[#8C9EC5]">Apple</p>
                <h4 class="text-sm leading-5 font-bold">Hisense 40" Class 2K FHD LED <br>LCD Roku Smart TV H4030F</h4>

                <svg class="inline-block" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_134_3383)">
                        <path d="M11.9687 4.60347C11.8902 4.36049 11.6746 4.18791 11.4197 4.16493L7.95614 3.85043L6.58656 0.644816C6.48558 0.409886 6.25559 0.257812 6.00006 0.257812C5.74453 0.257812 5.51454 0.409885 5.41356 0.645365L4.04399 3.85043L0.579908 4.16493C0.325385 4.18846 0.110414 4.36049 0.0314019 4.60347C-0.0476102 4.84646 0.0253592 5.11298 0.2179 5.28098L2.83592 7.577L2.06392 10.9776C2.00744 11.2277 2.10448 11.4861 2.31195 11.6361C2.42346 11.7167 2.55393 11.7577 2.68549 11.7577C2.79893 11.7577 2.91145 11.7271 3.01244 11.6667L6.00006 9.88107L8.98659 11.6667C9.20513 11.7981 9.48062 11.7862 9.68762 11.6361C9.89518 11.4857 9.99214 11.2271 9.93565 10.9776L9.16366 7.577L11.7817 5.28144C11.9742 5.11298 12.0477 4.84692 11.9687 4.60347Z" fill="#FFB067" />
                    </g>
                    <defs>
                        <clipPath id="clip0_134_3383">
                            <rect width="12" height="12" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
                <svg class="inline-block" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_134_3383)">
                        <path d="M11.9687 4.60347C11.8902 4.36049 11.6746 4.18791 11.4197 4.16493L7.95614 3.85043L6.58656 0.644816C6.48558 0.409886 6.25559 0.257812 6.00006 0.257812C5.74453 0.257812 5.51454 0.409885 5.41356 0.645365L4.04399 3.85043L0.579908 4.16493C0.325385 4.18846 0.110414 4.36049 0.0314019 4.60347C-0.0476102 4.84646 0.0253592 5.11298 0.2179 5.28098L2.83592 7.577L2.06392 10.9776C2.00744 11.2277 2.10448 11.4861 2.31195 11.6361C2.42346 11.7167 2.55393 11.7577 2.68549 11.7577C2.79893 11.7577 2.91145 11.7271 3.01244 11.6667L6.00006 9.88107L8.98659 11.6667C9.20513 11.7981 9.48062 11.7862 9.68762 11.6361C9.89518 11.4857 9.99214 11.2271 9.93565 10.9776L9.16366 7.577L11.7817 5.28144C11.9742 5.11298 12.0477 4.84692 11.9687 4.60347Z" fill="#FFB067" />
                    </g>
                    <defs>
                        <clipPath id="clip0_134_3383">
                            <rect width="12" height="12" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
                <svg class="inline-block" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_134_3383)">
                        <path d="M11.9687 4.60347C11.8902 4.36049 11.6746 4.18791 11.4197 4.16493L7.95614 3.85043L6.58656 0.644816C6.48558 0.409886 6.25559 0.257812 6.00006 0.257812C5.74453 0.257812 5.51454 0.409885 5.41356 0.645365L4.04399 3.85043L0.579908 4.16493C0.325385 4.18846 0.110414 4.36049 0.0314019 4.60347C-0.0476102 4.84646 0.0253592 5.11298 0.2179 5.28098L2.83592 7.577L2.06392 10.9776C2.00744 11.2277 2.10448 11.4861 2.31195 11.6361C2.42346 11.7167 2.55393 11.7577 2.68549 11.7577C2.79893 11.7577 2.91145 11.7271 3.01244 11.6667L6.00006 9.88107L8.98659 11.6667C9.20513 11.7981 9.48062 11.7862 9.68762 11.6361C9.89518 11.4857 9.99214 11.2271 9.93565 10.9776L9.16366 7.577L11.7817 5.28144C11.9742 5.11298 12.0477 4.84692 11.9687 4.60347Z" fill="#FFB067" />
                    </g>
                    <defs>
                        <clipPath id="clip0_134_3383">
                            <rect width="12" height="12" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
                <svg class="inline-block" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_134_3383)">
                        <path d="M11.9687 4.60347C11.8902 4.36049 11.6746 4.18791 11.4197 4.16493L7.95614 3.85043L6.58656 0.644816C6.48558 0.409886 6.25559 0.257812 6.00006 0.257812C5.74453 0.257812 5.51454 0.409885 5.41356 0.645365L4.04399 3.85043L0.579908 4.16493C0.325385 4.18846 0.110414 4.36049 0.0314019 4.60347C-0.0476102 4.84646 0.0253592 5.11298 0.2179 5.28098L2.83592 7.577L2.06392 10.9776C2.00744 11.2277 2.10448 11.4861 2.31195 11.6361C2.42346 11.7167 2.55393 11.7577 2.68549 11.7577C2.79893 11.7577 2.91145 11.7271 3.01244 11.6667L6.00006 9.88107L8.98659 11.6667C9.20513 11.7981 9.48062 11.7862 9.68762 11.6361C9.89518 11.4857 9.99214 11.2271 9.93565 10.9776L9.16366 7.577L11.7817 5.28144C11.9742 5.11298 12.0477 4.84692 11.9687 4.60347Z" fill="#FFB067" />
                    </g>
                    <defs>
                        <clipPath id="clip0_134_3383">
                            <rect width="12" height="12" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
                <svg class="inline-block" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_134_3383)">
                        <path d="M11.9687 4.60347C11.8902 4.36049 11.6746 4.18791 11.4197 4.16493L7.95614 3.85043L6.58656 0.644816C6.48558 0.409886 6.25559 0.257812 6.00006 0.257812C5.74453 0.257812 5.51454 0.409885 5.41356 0.645365L4.04399 3.85043L0.579908 4.16493C0.325385 4.18846 0.110414 4.36049 0.0314019 4.60347C-0.0476102 4.84646 0.0253592 5.11298 0.2179 5.28098L2.83592 7.577L2.06392 10.9776C2.00744 11.2277 2.10448 11.4861 2.31195 11.6361C2.42346 11.7167 2.55393 11.7577 2.68549 11.7577C2.79893 11.7577 2.91145 11.7271 3.01244 11.6667L6.00006 9.88107L8.98659 11.6667C9.20513 11.7981 9.48062 11.7862 9.68762 11.6361C9.89518 11.4857 9.99214 11.2271 9.93565 10.9776L9.16366 7.577L11.7817 5.28144C11.9742 5.11298 12.0477 4.84692 11.9687 4.60347Z" fill="#FFB067" />
                    </g>
                    <defs>
                        <clipPath id="clip0_134_3383">
                            <rect width="12" height="12" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
                <span class="text-[#8C9EC5] text-xs leading-[18px]">(65)</span>

                <div class="mt-4 mb-4">
                    <h2 class="text-xl leading-7 font-bold">$2856.3 <del class="text-[#8C9EC5] text-[16px] leading-6 font-normal">$3225.6</del></h2>
                </div>

                <button class="border rounded w-[100%] border-solid border-[#425A8B] hover:bg-[#425A8B] duration-300 text-sm leading-5 font-bold py-[7px] px-[22px] hover:text-white">Add to Cart</button>

                <ul class="pl-[15px] list-disc mt-6">
                    <li class="text-[10px]"><a href="#">27-inch (diagonal) Retina 5K display</a></li>
                </ul>
            </div>

            <div class="inline-block relative image-box mb-[10px] border border-solid border-[#D5DFE4] rounded px-5 w-full pb-4">
                <span class="bg-[#FD9636] leading-[12px] rounded-[30px] py-1 px-[10px] z-[2] text-xs absolute top-3 left-3 text-white">-17%</span>
                <img
                    class="block mx-auto max-w-[95%] h-[165px] leading-[165px]"
                    src="<?php echo e(asset('assets/smartwatches.png')); ?>"
                    alt="imgsp1"
                    loading="lazy">

                <p class="text-xs leading-[18px] text-[#8C9EC5]">Apple</p>
                <h4 class="text-sm leading-5 font-bold">2022 Apple 10.9-inch iPad Air<br>Wi-Fi 64GB - Space Gray</h4>

                <svg class="inline-block" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_134_3383)">
                        <path d="M11.9687 4.60347C11.8902 4.36049 11.6746 4.18791 11.4197 4.16493L7.95614 3.85043L6.58656 0.644816C6.48558 0.409886 6.25559 0.257812 6.00006 0.257812C5.74453 0.257812 5.51454 0.409885 5.41356 0.645365L4.04399 3.85043L0.579908 4.16493C0.325385 4.18846 0.110414 4.36049 0.0314019 4.60347C-0.0476102 4.84646 0.0253592 5.11298 0.2179 5.28098L2.83592 7.577L2.06392 10.9776C2.00744 11.2277 2.10448 11.4861 2.31195 11.6361C2.42346 11.7167 2.55393 11.7577 2.68549 11.7577C2.79893 11.7577 2.91145 11.7271 3.01244 11.6667L6.00006 9.88107L8.98659 11.6667C9.20513 11.7981 9.48062 11.7862 9.68762 11.6361C9.89518 11.4857 9.99214 11.2271 9.93565 10.9776L9.16366 7.577L11.7817 5.28144C11.9742 5.11298 12.0477 4.84692 11.9687 4.60347Z" fill="#FFB067" />
                    </g>
                    <defs>
                        <clipPath id="clip0_134_3383">
                            <rect width="12" height="12" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
                <svg class="inline-block" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_134_3383)">
                        <path d="M11.9687 4.60347C11.8902 4.36049 11.6746 4.18791 11.4197 4.16493L7.95614 3.85043L6.58656 0.644816C6.48558 0.409886 6.25559 0.257812 6.00006 0.257812C5.74453 0.257812 5.51454 0.409885 5.41356 0.645365L4.04399 3.85043L0.579908 4.16493C0.325385 4.18846 0.110414 4.36049 0.0314019 4.60347C-0.0476102 4.84646 0.0253592 5.11298 0.2179 5.28098L2.83592 7.577L2.06392 10.9776C2.00744 11.2277 2.10448 11.4861 2.31195 11.6361C2.42346 11.7167 2.55393 11.7577 2.68549 11.7577C2.79893 11.7577 2.91145 11.7271 3.01244 11.6667L6.00006 9.88107L8.98659 11.6667C9.20513 11.7981 9.48062 11.7862 9.68762 11.6361C9.89518 11.4857 9.99214 11.2271 9.93565 10.9776L9.16366 7.577L11.7817 5.28144C11.9742 5.11298 12.0477 4.84692 11.9687 4.60347Z" fill="#FFB067" />
                    </g>
                    <defs>
                        <clipPath id="clip0_134_3383">
                            <rect width="12" height="12" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
                <svg class="inline-block" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_134_3383)">
                        <path d="M11.9687 4.60347C11.8902 4.36049 11.6746 4.18791 11.4197 4.16493L7.95614 3.85043L6.58656 0.644816C6.48558 0.409886 6.25559 0.257812 6.00006 0.257812C5.74453 0.257812 5.51454 0.409885 5.41356 0.645365L4.04399 3.85043L0.579908 4.16493C0.325385 4.18846 0.110414 4.36049 0.0314019 4.60347C-0.0476102 4.84646 0.0253592 5.11298 0.2179 5.28098L2.83592 7.577L2.06392 10.9776C2.00744 11.2277 2.10448 11.4861 2.31195 11.6361C2.42346 11.7167 2.55393 11.7577 2.68549 11.7577C2.79893 11.7577 2.91145 11.7271 3.01244 11.6667L6.00006 9.88107L8.98659 11.6667C9.20513 11.7981 9.48062 11.7862 9.68762 11.6361C9.89518 11.4857 9.99214 11.2271 9.93565 10.9776L9.16366 7.577L11.7817 5.28144C11.9742 5.11298 12.0477 4.84692 11.9687 4.60347Z" fill="#FFB067" />
                    </g>
                    <defs>
                        <clipPath id="clip0_134_3383">
                            <rect width="12" height="12" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
                <svg class="inline-block" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_134_3383)">
                        <path d="M11.9687 4.60347C11.8902 4.36049 11.6746 4.18791 11.4197 4.16493L7.95614 3.85043L6.58656 0.644816C6.48558 0.409886 6.25559 0.257812 6.00006 0.257812C5.74453 0.257812 5.51454 0.409885 5.41356 0.645365L4.04399 3.85043L0.579908 4.16493C0.325385 4.18846 0.110414 4.36049 0.0314019 4.60347C-0.0476102 4.84646 0.0253592 5.11298 0.2179 5.28098L2.83592 7.577L2.06392 10.9776C2.00744 11.2277 2.10448 11.4861 2.31195 11.6361C2.42346 11.7167 2.55393 11.7577 2.68549 11.7577C2.79893 11.7577 2.91145 11.7271 3.01244 11.6667L6.00006 9.88107L8.98659 11.6667C9.20513 11.7981 9.48062 11.7862 9.68762 11.6361C9.89518 11.4857 9.99214 11.2271 9.93565 10.9776L9.16366 7.577L11.7817 5.28144C11.9742 5.11298 12.0477 4.84692 11.9687 4.60347Z" fill="#FFB067" />
                    </g>
                    <defs>
                        <clipPath id="clip0_134_3383">
                            <rect width="12" height="12" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
                <svg class="inline-block" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_134_3383)">
                        <path d="M11.9687 4.60347C11.8902 4.36049 11.6746 4.18791 11.4197 4.16493L7.95614 3.85043L6.58656 0.644816C6.48558 0.409886 6.25559 0.257812 6.00006 0.257812C5.74453 0.257812 5.51454 0.409885 5.41356 0.645365L4.04399 3.85043L0.579908 4.16493C0.325385 4.18846 0.110414 4.36049 0.0314019 4.60347C-0.0476102 4.84646 0.0253592 5.11298 0.2179 5.28098L2.83592 7.577L2.06392 10.9776C2.00744 11.2277 2.10448 11.4861 2.31195 11.6361C2.42346 11.7167 2.55393 11.7577 2.68549 11.7577C2.79893 11.7577 2.91145 11.7271 3.01244 11.6667L6.00006 9.88107L8.98659 11.6667C9.20513 11.7981 9.48062 11.7862 9.68762 11.6361C9.89518 11.4857 9.99214 11.2271 9.93565 10.9776L9.16366 7.577L11.7817 5.28144C11.9742 5.11298 12.0477 4.84692 11.9687 4.60347Z" fill="#FFB067" />
                    </g>
                    <defs>
                        <clipPath id="clip0_134_3383">
                            <rect width="12" height="12" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
                <span class="text-[#8C9EC5] text-xs leading-[18px]">(65)</span>

                <div class="mt-4 mb-4">
                    <h2 class="text-xl leading-7 font-bold">$2856.3 <del class="text-[#8C9EC5] text-[16px] leading-6 font-normal">$3225.6</del></h2>
                </div>

                <button class="border rounded w-[100%] border-solid border-[#425A8B] hover:bg-[#425A8B] duration-300 text-sm leading-5 font-bold py-[7px] px-[22px] hover:text-white">Add to Cart</button>

                <ul class="pl-[15px] list-disc mt-6">
                    <li class="text-[10px]">
                        <a href="#">27-inch (diagonal) Retina 5K display</a>
                    </li>
                </ul>
            </div>


            <div class="inline-block relative image-box mb-[10px] border border-solid border-[#D5DFE4] rounded px-5 w-full pb-4">
                <span class="bg-[#FD9636] leading-[12px] rounded-[30px] py-1 px-[10px] z-[2] text-xs absolute top-3 left-3 text-white">-17%</span>
                <img
                    class="block mx-auto max-w-[95%] h-[165px] leading-[165px]"
                    src="<?php echo e(asset('assets/outdoor.png')); ?>"
                    alt="imgsp1"
                    loading="lazy">

                <p class="text-xs leading-[18px] text-[#8C9EC5]">Apple</p>
                <h4 class="text-sm leading-5 font-bold">LeapFrog LeapPad Academy <br>Kids Tablet with LeapFrog</h4>

                <svg class="inline-block" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_134_3383)">
                        <path d="M11.9687 4.60347C11.8902 4.36049 11.6746 4.18791 11.4197 4.16493L7.95614 3.85043L6.58656 0.644816C6.48558 0.409886 6.25559 0.257812 6.00006 0.257812C5.74453 0.257812 5.51454 0.409885 5.41356 0.645365L4.04399 3.85043L0.579908 4.16493C0.325385 4.18846 0.110414 4.36049 0.0314019 4.60347C-0.0476102 4.84646 0.0253592 5.11298 0.2179 5.28098L2.83592 7.577L2.06392 10.9776C2.00744 11.2277 2.10448 11.4861 2.31195 11.6361C2.42346 11.7167 2.55393 11.7577 2.68549 11.7577C2.79893 11.7577 2.91145 11.7271 3.01244 11.6667L6.00006 9.88107L8.98659 11.6667C9.20513 11.7981 9.48062 11.7862 9.68762 11.6361C9.89518 11.4857 9.99214 11.2271 9.93565 10.9776L9.16366 7.577L11.7817 5.28144C11.9742 5.11298 12.0477 4.84692 11.9687 4.60347Z" fill="#FFB067" />
                    </g>
                    <defs>
                        <clipPath id="clip0_134_3383">
                            <rect width="12" height="12" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
                <svg class="inline-block" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_134_3383)">
                        <path d="M11.9687 4.60347C11.8902 4.36049 11.6746 4.18791 11.4197 4.16493L7.95614 3.85043L6.58656 0.644816C6.48558 0.409886 6.25559 0.257812 6.00006 0.257812C5.74453 0.257812 5.51454 0.409885 5.41356 0.645365L4.04399 3.85043L0.579908 4.16493C0.325385 4.18846 0.110414 4.36049 0.0314019 4.60347C-0.0476102 4.84646 0.0253592 5.11298 0.2179 5.28098L2.83592 7.577L2.06392 10.9776C2.00744 11.2277 2.10448 11.4861 2.31195 11.6361C2.42346 11.7167 2.55393 11.7577 2.68549 11.7577C2.79893 11.7577 2.91145 11.7271 3.01244 11.6667L6.00006 9.88107L8.98659 11.6667C9.20513 11.7981 9.48062 11.7862 9.68762 11.6361C9.89518 11.4857 9.99214 11.2271 9.93565 10.9776L9.16366 7.577L11.7817 5.28144C11.9742 5.11298 12.0477 4.84692 11.9687 4.60347Z" fill="#FFB067" />
                    </g>
                    <defs>
                        <clipPath id="clip0_134_3383">
                            <rect width="12" height="12" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
                <svg class="inline-block" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_134_3383)">
                        <path d="M11.9687 4.60347C11.8902 4.36049 11.6746 4.18791 11.4197 4.16493L7.95614 3.85043L6.58656 0.644816C6.48558 0.409886 6.25559 0.257812 6.00006 0.257812C5.74453 0.257812 5.51454 0.409885 5.41356 0.645365L4.04399 3.85043L0.579908 4.16493C0.325385 4.18846 0.110414 4.36049 0.0314019 4.60347C-0.0476102 4.84646 0.0253592 5.11298 0.2179 5.28098L2.83592 7.577L2.06392 10.9776C2.00744 11.2277 2.10448 11.4861 2.31195 11.6361C2.42346 11.7167 2.55393 11.7577 2.68549 11.7577C2.79893 11.7577 2.91145 11.7271 3.01244 11.6667L6.00006 9.88107L8.98659 11.6667C9.20513 11.7981 9.48062 11.7862 9.68762 11.6361C9.89518 11.4857 9.99214 11.2271 9.93565 10.9776L9.16366 7.577L11.7817 5.28144C11.9742 5.11298 12.0477 4.84692 11.9687 4.60347Z" fill="#FFB067" />
                    </g>
                    <defs>
                        <clipPath id="clip0_134_3383">
                            <rect width="12" height="12" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
                <svg class="inline-block" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_134_3383)">
                        <path d="M11.9687 4.60347C11.8902 4.36049 11.6746 4.18791 11.4197 4.16493L7.95614 3.85043L6.58656 0.644816C6.48558 0.409886 6.25559 0.257812 6.00006 0.257812C5.74453 0.257812 5.51454 0.409885 5.41356 0.645365L4.04399 3.85043L0.579908 4.16493C0.325385 4.18846 0.110414 4.36049 0.0314019 4.60347C-0.0476102 4.84646 0.0253592 5.11298 0.2179 5.28098L2.83592 7.577L2.06392 10.9776C2.00744 11.2277 2.10448 11.4861 2.31195 11.6361C2.42346 11.7167 2.55393 11.7577 2.68549 11.7577C2.79893 11.7577 2.91145 11.7271 3.01244 11.6667L6.00006 9.88107L8.98659 11.6667C9.20513 11.7981 9.48062 11.7862 9.68762 11.6361C9.89518 11.4857 9.99214 11.2271 9.93565 10.9776L9.16366 7.577L11.7817 5.28144C11.9742 5.11298 12.0477 4.84692 11.9687 4.60347Z" fill="#FFB067" />
                    </g>
                    <defs>
                        <clipPath id="clip0_134_3383">
                            <rect width="12" height="12" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
                <svg class="inline-block" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_134_3383)">
                        <path d="M11.9687 4.60347C11.8902 4.36049 11.6746 4.18791 11.4197 4.16493L7.95614 3.85043L6.58656 0.644816C6.48558 0.409886 6.25559 0.257812 6.00006 0.257812C5.74453 0.257812 5.51454 0.409885 5.41356 0.645365L4.04399 3.85043L0.579908 4.16493C0.325385 4.18846 0.110414 4.36049 0.0314019 4.60347C-0.0476102 4.84646 0.0253592 5.11298 0.2179 5.28098L2.83592 7.577L2.06392 10.9776C2.00744 11.2277 2.10448 11.4861 2.31195 11.6361C2.42346 11.7167 2.55393 11.7577 2.68549 11.7577C2.79893 11.7577 2.91145 11.7271 3.01244 11.6667L6.00006 9.88107L8.98659 11.6667C9.20513 11.7981 9.48062 11.7862 9.68762 11.6361C9.89518 11.4857 9.99214 11.2271 9.93565 10.9776L9.16366 7.577L11.7817 5.28144C11.9742 5.11298 12.0477 4.84692 11.9687 4.60347Z" fill="#FFB067" />
                    </g>
                    <defs>
                        <clipPath id="clip0_134_3383">
                            <rect width="12" height="12" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
                <span class="text-[#8C9EC5] text-xs leading-[18px]">(65)</span>

                <div class="mt-4 mb-4">
                    <h2 class="text-xl leading-7 font-bold">$2856.3 <del class="text-[#8C9EC5] text-[16px] leading-6 font-normal">$3225.6</del></h2>
                </div>

                <button class="border rounded w-[100%] border-solid border-[#425A8B] hover:bg-[#425A8B] duration-300 text-sm leading-5 font-bold py-[7px] px-[22px] hover:text-white">Add to Cart</button>

                <ul class="pl-[15px] list-disc mt-6">
                    <li class="text-[10px]"><a href="#">27-inch (diagonal) Retina 5K display</a></li>
                </ul>
            </div>
        </div>

        <!-- xbox series -->
        <div class="flex gap-6 mt-12 max-[576px]:flex-wrap">
            <div class="xbox w-[450px] rounded bg-right bg-bottom size-[260px] bg-[#DFE7FD] py-10 px-[30px] h-[470px] mb-[25px] bg-no-repeat">
                <p class="text-[#F53658] text-sm uppercase">Flat 20% off</p>
                <h2 class="text-[#0E224D] text-[30px] font-bold leading-[39px]">Microsoft</h2>
                <h1 class="text-[59px] leading-[64px] text-[#0E224D] font-bold max-[576px]:text-[32px] max-[576px]:leading-8">Xbox<br>
                    Series S</h1>
                <p class="leading-[23px] text-[#425A8B] max-[576px]:text-sm max-[576px]:mt-3">From $3500.00</p>
                <a href="#" class="inline-block rounded text-white mt-6 bg-[#FD9636] duration-300 hover:bg-[#425A8B] font-bold py-[10px] px-[22px] text-sm">Shop Now</a>
            </div>

            <div class="">
                <div class="flex gap-5 max-[576px]:flex-wrap">
                    <div class="controller rounded bg-no-repeat bg-[#D1ECFD] p-5 pl-[220px] h-[225px] w-[535px] bg-[url('/assets/controller.png')] bg-[position:left_10px_bottom] bg-[length:auto_80%] max-[576px]:controller rounded bg-no-repeat bg-[#D1ECFD] p-5 pl-[220px] h-[225px] w-[535px] bg-[url('/assets/controller.png')] bg-[position:left_10px_bottom] bg-[length:auto_80%] max-[576px]:w-full max-[576px]:bg-[length:130px_120px] max-[576px]:pl-[50px]">
                        <h2 class="text-[#0E224D] leading-[35px] font-bold text-[30px]">Xbox Core Wireless <br>Controller</h2>
                        <p class="mt-3 text-lg leading-[23px] text-[#0BA9ED]">Aqua Shift Special Edition</p>
                        <a href="#" class="inline-block rounded text-white mt-6 duration-300 bg-[#27B3D2] hover:bg-[#FD9636] font-bold py-[10px] px-[22px] text-sm">Shop Now</a>
                    </div>

                    <div class="metaverse bg-[url('/assets/metaverse.png')] bg-right-bottom bg-[length:auto_80%] rounded h-[225px] bg-[#FFF3EA] w-[310px] bg-no-repeat py-[50px] pb-0 px-[30px] max-[576px]:w-full">
                        <h2 class="text-[32px] text-[#0E224D] font-bold">Metaverse</h2>
                        <p class="text-[#425A8B] leading-[23px]">The Future of
                            <br>Creativity
                        </p>
                        <a href="#" class="inline-block mt-6 uppercase text-xs leading-8 font-bold text-[#FD9636]">learn more</a>
                    </div>
                </div>

                <div class="flex gap-5 mt-5 max-[576px]:flex-wrap">
                    <div class="electronic-bg bg-[#E8FCFF] h-[225px] bg-no-repeat w-[320px] text-center bg-[url('/assets/electronic.png')] bg-[position:center_bottom_5px] bg-[length:auto_45%] pt-[30px] px-[30px] max-[576px]:w-full rounded">
                        <h2 class="text-[32px] leading-[31px] font-bold text-[#0E224D]">Electronic</h2>
                        <p class="leading-[23px]">Hot devices, Latest trending</p>
                    </div>

                    <div class="bg-[url('/assets/phone.png')] bg-[position:bottom_right_10px] bg-no-repeat bg-[length:auto_75%] rounded h-[235px] bg-[#DDD3FA] p-[30px] pr-[200px] max-[576px]:pr-[30px]">
                        <h2 class="text-[32px] leading-[31px] font-bold text-[#0E224D]">Super discount for <br>your first purchase</h2>
                        <p class="leading-[23px] w-[100%] text-lg mt-4 text-[#0BA9ED]">Use discount code in checkout page.</p>
                        <a href="#" class="inline-block rounded text-white mt-6 bg-[#FD9636] duration-300 hover:bg-[#425A8B] font-bold py-[10px] px-[22px] text-sm">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- products tabs -->
        <div class="container rounded mt-[50px] py-[50px] px-[20px] bg-#F0F3F8 best-sellers-section bg-[#F0F3F8]">
            <div class="best-sellers-heading flex items-end justify-between gap-6">
                <div class="max-[576px]:mx-auto">
                    <h2 class="text-[32px] font-bold">Trending This Week</h2>
                    <p class="text-[#8C9EC5] leading-6">Special products in this month.</p>
                </div>
                <div class="product-tabs flex items-center flex-wrap gap-5 max-[576px]:gap-5 max-[576px]:flex-nowrap" role="tablist" aria-label="Product categories">
                    <button class="product-tab border-0 bg-transparent py-2 px-3 is-active" role="tab" aria-selected="true" data-filter="all">
                        All
                    </button>
                    <button class="product-tab border-0 bg-transparent py-2 px-3" role="tab" aria-selected="false" data-filter="best">
                        Best seller
                    </button>
                    <button class="product-tab border-0 bg-transparent py-2 px-3" role="tab" aria-selected="false" data-filter="viewed">Most viewed</button>
                    <button class="product-tab border-0 bg-transparent py-2 px-3" role="tab" aria-selected="false" data-filter="brand">Top Brands</button>
                </div>
            </div>
            <hr class="mt-4">
            <div class="product-tabs-grid" id="best-seller-products">
                <article class="best-product-card border-solid border cursor-pointer border-[!#D5DFE4] rounded  p-[15px] relative duration-200 bg-white max-[576px]:grid-cols-1 max-[576px]:gap-0" data-category="best brand" data-name="Apple iMac">
                    <span class="product-discount absolute top-5 left-5 py-1 px-[10px] text-[12px] leading-3 bg-[#FD9636] text-white rounded-[30px]">−17%</span>
                    <div class="best-product-image">
                        <img class="max-h-full max-w-[95%]" src="<?php echo e(asset('assets/computer.png')); ?>" alt="Apple iMac computer" loading="lazy">
                    </div>
                    <div class="best-product-info">
                        <a class="best-product-brand text-[!##8C9EC5] text-[12px] leading-[18px]">Apple</a>
                        <p class="text-sm leading-5 font-bold">2022 Apple iMac with Retina 5K Display 8GB RAM, 256GB</p>
                        <p class="product-rating">
                            <span>★★★★★</span>
                            <small class="text-[#8C9EC5] text-[12px] leading-[18px]">(65)</small>
                        </p>
                        <p class="best-product-price mt-[10px] text-xl font-bold leading-7">$2856.3 <del class="ml-[10px] leading-6 text-[16px] text-[#8C9EC5] font-[400]">$3225.6</del>
                        </p>
                        <button class="mt-5 rounded best-add-cart border border-[#8C9EC5] hover:border-[#425A8B] border-solid hover:bg-[#425A8B] duration-300 py-[7px] px-[22px] !text-sm font-bold leading-5 w-full" type="button">Add To Cart
                        </button>
                        <ul class="pl-[15px] mt-5">
                            <li class="text-[10px] leading-[18px]">27-inch Retina 5K display</li>
                            <li class="text-[10px] leading-[18px]">3.1GHz 6-core 10th-generation Intel Core i5</li>
                            <li class="text-[10px] leading-[18px]">AMD Radeon Pro 5300 graphics</li>
                        </ul>
                    </div>
                </article>
                <article class="best-product-card border-solid border cursor-pointer border-[!#D5DFE4] rounded p-[15px] relative duration-200 bg-white max-[576px]:grid-cols-1 max-[576px]:gap-0" data-category="best viewed" data-name="Philips Headphones">
                    <span class="product-discount absolute top-5 left-5 py-1 px-[10px] text-[12px] leading-3 bg-[#FD9636] text-white rounded-[30px]">−17%</span>
                    <div class="best-product-image">
                        <img class="max-h-full max-w-[95%]" src="<?php echo e(asset('assets/electric.png')); ?>" alt="Wireless headphones" loading="lazy">
                    </div>
                    <div class="best-product-info">
                        <a class="best-product-brand text-[!#8C9EC5] text-[12px] leading-[18px]">Philips</a>
                        <p class="text-sm leading-5 font-bold">Philips H4205 On-Ear Wireless Headphones with 32mm</p>
                        <p class="product-rating">
                            <span>★★★★★</span>
                            <small class="text-[#8C9EC5] text-[12px] leading-[18px]">(65)</small>
                        </p>
                        <p class="best-product-price mt-[10px] text-xl font-bold leading-7">$154.0.3 <del class="ml-[10px] leading-6 text-[16px] text-[#8C9EC5] font-[400]">$15
                                4.0.3</del>
                            <button class="mt-5 rounded best-add-cart border border-[#8C9EC5] hover:border-[#425A8B] border-solid hover:bg-[#425A8B] duration-300 py-[7px] px-[22px] !text-sm font-bold leading-5 w-full" type="button">Add To Cart
                            </button>
                        <ul class="mt-5 pl-[15px]">
                            <li class="text-[10px] leading-[18px]">7-inch (diagonal) Retina 5K display</li>
                            <li class="text-[10px] leading-[18px]">3.1GHz 6-core 10th-generation Intel Core i5</li>
                            <li class="text-[10px] leading-[18px]">AMD Radeon Pro 5300 graphics</li>
                        </ul>
                    </div>
                </article>
                <article class="best-product-card border-solid border cursor-pointer border-[!#D5DFE4] rounded  p-[15px] relative duration-200 bg-white max-[576px]:grid-cols-1 max-[576px]:gap-0" data-category="viewed brand" data-name="MacBook Air">
                    <span class="product-discount absolute top-5 left-5 py-1 px-[10px] text-[12px] leading-3 bg-[#FD9636] text-white rounded-[30px]">−17%</span>
                    <div class="best-product-image">
                        <img class="max-h-full max-w-[95%]" src="<?php echo e(asset('assets/laptop.png')); ?>" alt="Apple MacBook Air laptop" loading="lazy">
                    </div>
                    <div class="best-product-info">
                        <a class="best-product-brand text-[!##8C9EC5] text-[12px] leading-[18px]">Apple</a>
                        <p class="text-sm leading-5 font-bold">2020 Apple MacBook Air Laptop: Apple M1 Chip, 13”</p>
                        <p class="product-rating">
                            <span>★★★★★</span>
                            <small class="text-[#8C9EC5] text-[12px] leading-[18px]">(65)
                            </small>
                        </p>
                        <p class="best-product-price text-xl font-bold leading-7">$2325.3
                            <del class="ml-[10px] leading-6 text-[16px] text-[#8C9EC5] font-[400]">$2225.6</del>
                        </p>
                        <button class="mt-5 rounded best-add-cart border border-[#8C9EC5] hover:border-[#425A8B] border-solid hover:bg-[#425A8B] duration-300 py-[7px] px-[22px] !text-sm font-bold leading-5 w-full" type="button">Add To Cart
                        </button>
                        <ul class="mt-5 pl-[15px]">
                            <li class="text-[10px] leading-[18px]">7-inch (diagonal) Retina 5K display</li>
                            <li class="text-[10px] leading-[18px]">3.1GHz 6-core 10th-generation Intel Core i5</li>
                            <li class="text-[10px] leading-[18px]">AMD Radeon Pro 5300 graphics</li>
                        </ul>
                    </div>
                </article>
                <article class="best-product-card border-solid border cursor-pointer border-[!#D5DFE4] rounded  p-[15px] relative duration-200 bg-white max-[576px]:grid-cols-1 max-[576px]:gap-0" data-category="best brand" data-name="Apple Watch">
                    <span class="product-discount absolute top-5 left-5 py-1 px-[10px] text-[12px] leading-3 bg-[#FD9636] text-white rounded-[30px]">−17%</span>
                    <div class="best-product-image">
                        <a href="#">
                            <img class="max-h-full max-w-[95%] align-middle" src="<?php echo e(asset('assets/smartwatches.png')); ?>" alt="Smart watch" loading="lazy">
                        </a>
                    </div>
                    <div class="best-product-info">
                        <a class="best-product-brand text-[!##8C9EC5] text-[12px] leading-[18px]">Apple
                        </a>
                        <p class="text-sm leading-5 font-bold">
                            Apple Watch Series 8 [GPS 45mm] Smart Watch</p>
                        <p class="product-rating">
                            <span>★★★★★</span>
                            <small class="text-[#8C9EC5] text-[12px] leading-[18px]">
                                (65)
                            </small>
                        </p>
                        <p class="best-product-price text-xl font-bold leading-7">$530.3
                            <del class="ml-[10px] leading-6 text-[16px] text-[#8C9EC5] font-[400]">$560.6</del>
                        </p>
                        <button class="mt-5 rounded best-add-cart border border-[#8C9EC5] hover:border-[#425A8B] border-solid hover:bg-[#425A8B] duration-300 py-[7px] px-[22px] !text-sm font-bold leading-5 w-full" type="button">Add To Cart</button>
                        <ul class="mt-5 pl-[15px]">
                            <li class="text-[10px] leading-[18px]">7-inch (diagonal) Retina 5K display</li>
                            <li class="text-[10px] leading-[18px]">3.1GHz 6-core 10th-generation Intel Core i5</li>
                            <li class="text-[10px] leading-[18px]">AMD Radeon Pro 5300 graphics</li>
                        </ul>
                    </div>
                </article>
                <article class="best-product-card border-solid border cursor-pointer border-[!#D5DFE4] rounded  p-[15px] relative duration-200 bg-white max-[576px]:grid-cols-1 max-[576px]:gap-0" data-category="viewed" data-name="Security Camera">
                    <span class="product-discount absolute top-5 left-5 py-1 px-[10px] text-[12px] leading-3 bg-[#FD9636] text-white rounded-[30px]">−17%</span>
                    <div class="best-product-image">
                        <a href="#">
                            <img src="<?php echo e(asset('assets/outdoor.png')); ?>" alt="Home security camera" loading="lazy">
                        </a>
                    </div>
                    <div class="best-product-info">
                        <a class="best-product-brand text-[!##8C9EC5] text-[12px] leading-[18px]">Kami Tech</a>
                        <p class="text-sm leading-5 font-bold">Kami by YI 4pc 1080p Home Security Cameras</p>
                        <p class="product-rating">
                            <span>★★★★★</span>
                            <small class="text-[#8C9EC5] text-[12px] leading-[18px]">(65)</small>
                        </p>
                        <p class="best-product-price text-xl font-bold leading-7">$156.3
                            <del class="ml-[10px] leading-6 text-[16px] text-[#8C9EC5] font-[400]">$250.6</del>
                        </p>
                        <button class="mt-5 rounded best-add-cart border border-[#8C9EC5] hover:border-[#425A8B] border-solid hover:bg-[#425A8B] duration-300 py-[7px] px-[22px] !text-sm font-bold leading-5 w-full" type="button">Add To Cart</button>
                        <ul class="mt-5 pl-[15px]">
                            <li class="text-[10px] leading-[18px]">7-inch (diagonal) Retina 5K display</li>
                            <li class="text-[10px] leading-[18px]">3.1GHz 6-core 10th-generation Intel Core i5</li>
                            <li class="text-[10px] leading-[18px]">AMD Radeon Pro 5300 graphics</li>
                        </ul>
                    </div>
                </article>
            </div>
            <p class="cart-feedback" aria-live="polite"></p>
        </div>

        <!-- selling products -->
        <section class="grid grid-cols-1 gap-[30px] lg:grid-cols-[minmax(0,2fr)_minmax(300px,1fr)]">

            <!-- Left: Top Selling Products -->
            <div class="min-w-0 overflow-hidden">

                <!-- Heading -->
                <div class="flex items-center justify-between border-b border-[#d2dce8] pb-[25px]">
                    <div>
                        <h2 class="text-[32px] font-bold leading-[41px] text-[#3f6096] max-[576px]:text-[24px]">
                            Top Selling Products
                        </h2>
                        <p class="mt-2.5 text-lg text-[#8C9EC5] leading-6 max-[576px]:mt-0 max-[576px]:text-sm">
                            Special products in this month.
                        </p>
                    </div>

                    <div class="flex shrink-0 gap-[15px]">
                        <button id="products-prev"
                            class="flex size-[31px] items-center justify-center rounded-[12px] border-2 border-[#91a6d2] text-[#8199c8] transition hover:bg-[#079fe5] hover:text-white text-[22px] leading-8 text-[#425A8B]"
                            aria-label="Previous products">
                            <svg class="size-[31px]" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2">
                                <path d="m15 18-6-6 6-6" />
                            </svg>
                        </button>

                        <button id="products-next"
                            class="flex size-[31px] items-center justify-center rounded-[12px] border-2 border-[#91a6d2] text-[#8199c8] transition hover:bg-[#079fe5] hover:text-white"
                            aria-label="Next products">
                            <svg class="size-[31px]" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2">
                                <path d="m9 18 6-6-6-6" />
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Two slides -->
                <div id="products-viewport" class="mt-[44px] overflow-hidden">
                    <div id="products-track"
                        class="flex items-start transition-transform duration-700 ease-in-out">

                        <!-- Slide 1 -->
                        <div class="grid w-full shrink-0 grid-cols-1 gap-x-[30px] gap-y-[30px] md:grid-cols-2">

                            <!-- Product 1 -->
                            <article class="flex rounded-[5px] border border-[#d0dce8] p-[15px]">
                                <div class="flex h-[130px] w-[135px] shrink-0 items-center justify-center">
                                    <img src="/assets/imgsp1.png" alt="PlayStation 4"
                                        class="max-h-full max-w-full object-contain">
                                </div>
                                <div class="min-w-0">
                                    <p class="text-xs leading-[18px] text-[#8C9EC5]">Apple</p>
                                    <h3 class="text-sm font-bold leading-5 text-[#3f6096]">
                                        2022 Apple iMac with Retina 5K Display 8GB RAM, 256GB SSD
                                    </h3>
                                    <p class="whitespace-nowrap text-[16px] leading-5 text-[#ffa65e]">
                                        ★★★★★<span class="text-[14px] text-[#829bc7]">(65)</span>
                                    </p>
                                    <div class="mt-[10px] flex flex-wrap items-center gap-[12px]">
                                        <span class="text-[20px] leading-6 font-bold leading-none text-[#3f6096]">$2556.3</span>
                                        <del class="text-[16px] leading-6 text-[#8C9EC5] font-normal ">$3225.6</del>
                                    </div>
                                </div>
                            </article>

                            <!-- Product 2 -->
                            <article class="flex h-[166px] items-center min-w-0 items-center gap-[0px] rounded border border-[#d0dce8] p-[15px]">
                                <div class="flex h-[130px] w-[135px] shrink-0 items-center justify-center">
                                    <img src="/assets/smartwatches.png" alt="Wireless headphones"
                                        class="max-h-full max-w-full object-contain">
                                </div>
                                <div class="min-w-0">
                                    <p class="text-[14px] text-[#829bc7]">Philips</p>
                                    <h3 class="text-sm font-bold leading-5 text-[#3f6096]">
                                        Philips H4205 On-Ear Wireless <br> Headphones with 32mm
                                    </h3>
                                    <p class="whitespace-nowrap leading-5 text-[#ffa65e]">
                                        ★★★★★<span class="text-xs! text-[#829bc7]">(65)</span>
                                    </p>
                                    <div class="mt-[10px] flex flex-wrap items-center gap-[12px]">
                                        <span class="text-[] font-bold leading-none text-[20px] leading-7 text-[#3f6096]">$2556.3</span>
                                        <del class="text-[18px] text-[#829bc7]">$3225.6</del>
                                    </div>
                                </div>
                            </article>

                            <!-- Product 3 -->
                            <article class="flex h-[166px] min-w-0 items-center gap-[30px] rounded border border-[#d0dce8] p-5">
                                <div class="flex h-[160px] w-[135px] shrink-0 items-center justify-center">
                                    <img src="/assets/imgsp3.png" alt="Apple MacBook Air"
                                        class="max-h-full max-w-full">
                                </div>
                                <div class="min-w-0">
                                    <p class="text-xs text-[#829bc7]">Apple</p>
                                    <h3 class="text-sm font-bold leading-5 text-[#425A8B]">
                                        2020 Apple MacBook Air Laptop: Apple M1 Chip, 13”
                                    </h3>
                                    <p class="whitespace-nowrap text-[16px] leading-5 text-[#ffa65e]">
                                        ★★★★★<span class="text-xs text-[#829bc7]">(65)</span>
                                    </p>
                                    <div class="mt-[10px] flex flex-wrap items-center gap-[12px]">
                                        <span class="text-[20px] leading-7 font-bold text-[#3f6096]">$2556.3</span>
                                        <del class="text-[16px] leading-6 text-[#8C9EC5]">$3225.6</del>
                                    </div>
                                </div>
                            </article>

                            <!-- Product 4 -->
                            <article class="flex h-[166px] min-w-0 items-center gap-[0px] rounded border border-[#d0dce8] p-5">
                                <div class="flex h-[130px] w-[135px] shrink-0 items-center justify-center">
                                    <img src="/assets/imgsp4.png" alt="Apple Watch Series 8"
                                        class="max-h-full max-w-full">
                                </div>
                                <div class="min-w-0">
                                    <p class="text-xs leading-[18px] text-[#829bc7]">Apple</p>
                                    <h3 class="text-sm font-bold leading-5 text-[#425a8b]">
                                        Apple Watch Series 8 [GPS 45mm] Smart Watch
                                    </h3>
                                    <p class="whitespace-nowrap text-[16px] leading-5 text-[#ffa65e]">
                                        ★★★★★<span class="text-[14px] text-[#829bc7]">(65)</span>
                                    </p>
                                    <div class="mt-[10px] flex flex-wrap items-center gap-[12px]">
                                        <span class="text-[20px] leading-7 font-bold text-[#3f6096]">$2556.3</span>
                                        <del class="text-[16px] leading-6 text-[#8C9EC5]">$3225.6</del>
                                    </div>
                                </div>
                            </article>

                            <!-- Product 5 -->
                            <article class="flex h-[166px] min-w-0 items-center gap-[0px] rounded border border-[#d0dce8] p-5">
                                <div class="flex h-[130px] w-[135px] shrink-0 items-center justify-center">
                                    <img src="/assets/laptop.png" alt="Home security camera"
                                        class="max-h-full max-w-full object-contain">
                                </div>
                                <div class="min-w-0">
                                    <p class="text-xs leading-[18px] text-[#829bc7]">Kami Tech</p>
                                    <h3 class="text-sm font-bold leading-5 text-[#425a8b]">
                                        Kami by YI 4pc 1080p Home Security Cameras
                                    </h3>
                                    <p class="whitespace-nowrap text-[16px] leading-5 text-[#ffa65e]">
                                        ★★★★★<span class="text-[14px] text-[#829bc7]">(65)</span>
                                    </p>
                                    <div class="mt-[10px] flex flex-wrap items-center gap-[12px]">
                                        <span class="text-[20px] font-bold leading-7 text-[#3f6096]">$2556.3</span>
                                        <del class="text-[16px] text-[#829bc7]">$3225.6</del>
                                    </div>
                                </div>
                            </article>

                            <!-- Product 6 -->
                            <article class="flex h-[166px] min-w-0 items-center gap-[0px] rounded border border-[#d0dce8] p-5">
                                <div class="flex h-[130px] w-[135px] shrink-0 items-center justify-center">
                                    <img src="/assets/smartwatches.png" alt="Home security camera"
                                        class="max-h-full max-w-full object-contain">
                                </div>
                                <div class="min-w-0">
                                    <p class="text-xs leading-[18px] text-[#829bc7]">Kami Tech</p>
                                    <h3 class="text-sm font-bold leading-5 text-[#425A8B]">
                                        Kami by YI 4pc 1080p Home Security Cameras
                                    </h3>
                                    <p class="whitespace-nowrap text-[16px] leading-5 text-[#ffa65e]">
                                        ★★★★★<span class="text-[14px] text-[#829bc7]">(65)</span>
                                    </p>
                                    <div class="mt-[10px] flex flex-wrap items-center gap-[12px]">
                                        <span class="text-[20px] font-bold leading-7 text-[#3f6096]">$2556.3</span>
                                        <del class="text-[16px] text-[#829bc7]">$3225.6</del>
                                    </div>
                                </div>
                            </article>

                        </div>

                        <!-- Slide 2 -->
                        <div class="grid w-full shrink-0 grid-cols-1 gap-x-[30px] gap-y-[30px] md:grid-cols-2">

                            <article class="flex h-[166px] min-w-0 items-center gap-[0px] rounded border border-[#d0dce8] p-5">
                                <div class="flex h-[130px] w-[135px] shrink-0 items-center justify-center">
                                    <img src="/assets/smartwatches.png" alt="Home security camera"
                                        class="max-h-full max-w-full object-contain">
                                </div>
                                <div class="min-w-0">
                                    <p class="text-xs leading-[18px] text-[#829bc7]">Apple</p>
                                    <h3 class="text-sm font-bold leading-5 text-[#3f6096]">
                                        2022 Apple iMac with Retina 5K Display 8GB RAM, 256GB SSD
                                    </h3>
                                    <p class="whitespace-nowrap text-[16px] leading-5 text-[#ffa65e]">
                                        ★★★★★<span class="text-[14px] text-[#829bc7]">(65)</span>
                                    </p>
                                    <div class="mt-[10px] flex flex-wrap items-center gap-[12px]">
                                        <span class="text-[20px] font-bold leading-7 text-[#3f6096]">$2556.3</span>
                                        <del class="text-[16px] text-[#829bc7]">$3225.6</del>
                                    </div>
                                </div>
                            </article>

                            <article class="flex h-[166px] min-w-0 items-center gap-[0px] rounded border border-[#d0dce8] p-5">
                                <div class="flex h-[130px] w-[135px] shrink-0 items-center justify-center">
                                    <img src="/assets/imgsp1.png" alt="Home security camera"
                                        class="max-h-full max-w-full object-contain">
                                </div>
                                <div class="min-w-0">
                                    <p class="text-xs leading-[18px] text-[#829bc7]">Philips</p>
                                    <h3 class="text-sm font-bold leading-5 text-[#3f6096]">
                                        Philips H4205 On-Ear Wireless Headphones with 32mm
                                    </h3>
                                    <p class="whitespace-nowrap text-[16px] leading-5 text-[#ffa65e]">
                                        ★★★★★<span class="text-[14px] text-[#829bc7]">(65)</span>
                                    </p>
                                    <div class="mt-[10px] flex flex-wrap items-center gap-[12px]">
                                        <span class="text-[20px] font-bold leading-7 text-[#3f6096]">$2556.3</span>
                                        <del class="text-[16px] text-[#829bc7]">$3225.6</del>
                                    </div>
                                </div>
                            </article>

                            <article class="flex h-[166px] min-w-0 items-center gap-[0px] rounded border border-[#d0dce8] p-5">
                                <div class="flex h-[130px] w-[135px] shrink-0 items-center justify-center">
                                    <img src="/assets/outdoor.png" alt="Home security camera"
                                        class="max-h-full max-w-full object-contain">
                                </div>
                                <div class="min-w-0">
                                    <p class="text-xs leading-[18px] text-[#829bc7]">Apple</p>
                                    <h3 class="text-sm font-bold leading-5 text-[#3f6096]">
                                        2020 Apple MacBook Air Laptop: Apple M1 Chip, 13”
                                    </h3>
                                    <p class="whitespace-nowrap text-[16px] leading-5 text-[#ffa65e]">
                                        ★★★★★<span class="text-[14px] text-[#829bc7]">(65)</span>
                                    </p>
                                    <div class="mt-[10px] flex flex-wrap items-center gap-[12px]">
                                        <span class="text-[20px] font-bold leading-7 text-[#3f6096]">$2556.3</span>
                                        <del class="text-[16px] text-[#829bc7]">$3225.6</del>
                                    </div>
                                </div>
                            </article>

                            <article class="flex h-[166px] min-w-0 items-center gap-[0px] rounded border border-[#d0dce8] p-5">
                                <div class="flex h-[130px] w-[135px] shrink-0 items-center justify-center">
                                    <img src="/assets/imgsp5.png" alt="Home security camera"
                                        class="max-h-full max-w-full object-contain">
                                </div>
                                <div class="min-w-0">
                                    <p class="text-xs leading-[18px] text-[#829bc7]">Apple</p>
                                    <h3 class="text-sm font-bold leading-5 text-[#425A8B]">
                                        Apple Watch Series 8 [GPS 45mm] Smart Watch
                                    </h3>
                                    <p class="whitespace-nowrap text-[16px] leading-5 text-[#ffa65e]">
                                        ★★★★★<span class="text-[14px] text-[#829bc7]">(65)</span>
                                    </p>
                                    <div class="mt-[10px] flex flex-wrap items-center gap-[12px]">
                                        <span class="text-[20px] font-bold leading-7 text-[#3f6096]">$2556.3</span>
                                        <del class="text-[16px] text-[#829bc7]">$3225.6</del>
                                    </div>
                                </div>
                            </article>

                            <article class="flex h-[166px] min-w-0 items-center gap-[0px] rounded border border-[#d0dce8] p-5">
                                <div class="flex h-[130px] w-[135px] shrink-0 items-center justify-center">
                                    <img src="/assets/smartwatches.png" alt="Home security camera"
                                        class="max-h-full max-w-full object-contain">
                                </div>
                                <div class="min-w-0">
                                    <p class="text-xs leading-[18px] text-[#829bc7]">Kami Tech</p>
                                    <h3 class="text-sm font-bold leading-5 text-[#425a8b]">
                                        Kami by YI 4pc 1080p Home Security Cameras
                                    </h3>
                                    <p class="whitespace-nowrap text-[16px] leading-5 text-[#ffa65e]">
                                        ★★★★★<span class="text-sm text-[#829bc7]">(65)</span>
                                    </p>
                                    <div class="mt-[10px] flex flex-wrap items-center gap-[12px]">
                                        <span class="text-[20px] font-bold leading-7 text-[#3f6096]">$2556.3</span>
                                        <del class="text-[16px] text-[#829bc7]">$3225.6</del>
                                    </div>
                                </div>
                            </article>

                            <article class="flex h-[166px] min-w-0 items-center gap-[0px] rounded border border-[#d0dce8] p-5">
                                <div class="flex h-[130px] w-[135px] shrink-0 items-center justify-center">
                                    <img src="/assets/imgsp3.png" alt="Home security camera"
                                        class="max-h-full max-w-full object-contain">
                                </div>
                                <div class="min-w-0">
                                    <p class="text-xs leading-[18px] text-[#829bc7]">Kami Tech</p>
                                    <h3 class="text-sm font-bold leading-5 text-[#425a8b]">
                                        2022 Apple iMac with Retina 5K Display 8GB RAM, 256GB SSD
                                    </h3>
                                    <p class="whitespace-nowrap text-[16px] leading-5 text-[#ffa65e]">
                                        ★★★★★<span class="text-sm text-[#829bc7]">(65)</span>
                                    </p>
                                    <div class="mt-[10px] flex flex-wrap items-center gap-[12px]">
                                        <span class="text-[20px] font-bold leading-7 text-[#3f6096]">$2556.3</span>
                                        <del class="text-[16px] text-[#829bc7]">$3225.6</del>
                                    </div>
                                </div>
                            </article>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Right: Promotional banner -->
            <aside class="min-h-[670px] overflow-hidden w-full bg-[url('/assets/bg-topsell.png')] bg-no-repeat rounded py-[50px] px-[10px]  inline-block text-center">

                <span class="inline-block rounded-[13px] bg-[#0BA9ED] px-4 text-[16px] leading-[23px] text-white">
                    No.9
                </span>

                <h2 class="mt-5 text-[32px] font-bold leading-[31px] text-[#0E224D]">
                    Sensitive Touch <br>without fingerprint
                </h2>

                <p class="mt-[15px] text-[22px] leading-8 text-[#425A8B] max-[576px]:text-sm">
                    Smooth handle and accurate click
                </p>
            </aside>

        </section>

        <!-- latest news events -->
        <div class="mt-16">
            <div class="flex items-center justify-between border-b border-[#d2dce8] pb-[25px]">
                <div>
                    <h2 class="text-[32px] font-bold leading-[41px] text-[#3f6096] max-[576px]:text-[24px]">
                        Latest News & Events
                    </h2>
                    <p class="text-lg text-[#8C9EC5] leading-6 max-[576px]:mt-0 max-[576px]:text-sm">
                        From our blog, forum
                    </p>
                </div>

                <div class="flex shrink-0 gap-[15px]">
                    <!-- Inline click trigger (window.sliderAction.prev) add kiya hai -->
                    <button id="products-prev" onclick="window.sliderAction.prev()"
                        class="flex size-[31px] items-center justify-center rounded-[12px] border-2 border-[#91a6d2] text-[#8199c8] transition hover:bg-[#079fe5] hover:text-white text-[22px] leading-8 text-[#425A8B]"
                        aria-label="Previous products">
                        <svg class="size-[31px]" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2">
                            <path d="m15 18-6-6 6-6" />
                        </svg>
                    </button>

                    <!-- Inline click trigger (window.sliderAction.next) add kiya hai -->
                    <button id="products-next" onclick="window.sliderAction.next()"
                        class="flex size-[31px] items-center justify-center rounded-[12px] border-2 border-[#91a6d2] text-[#8199c8] transition hover:bg-[#079fe5] hover:text-white"
                        aria-label="Next products">
                        <svg class="size-[31px]" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2">
                            <path d="m9 18 6-6-6-6" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Extra cards hide karne ke liye overflow container -->
            <div class="overflow-hidden w-full">
                <div id="sliderContainer" class="slider mt-10 flex gap-4 transition-transform duration-500 ease-in-out">

                    <!-- Card 1 -->
                    <div class="flex-none w-[calc(25%-12px)] max-[576px]:w-full">
                        <div class="card-img">
                            <img class="rounded w-full" src="<?php echo e(asset('assets/blog-1.jpg')); ?>" alt="">
                        </div>
                        <ul class="mt-4 mb-2">
                            <li class="inline-block text-xs leading-[18px] capitalize font-normal p-[5px] rounded text-[#425A8B] bg-[#D5DFE4]">
                                <a href="#" class="list-disc block">technology</a>
                            </li>
                        </ul>
                        <a href="#" class="duration-300 hover:text-[#0BA9ED]">
                            <h2 class="text-2xl leading-[31px] font-bold">The latest technologies to <br> be used for VR in 2022</h2>
                        </a>
                        <div class="mt-4 flex gap-[30px] text-xs leading-[18px] text-[#8C9EC5]">
                            <span>August 15, 2022</span>
                            <span>7 Mins read</span>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="flex-none w-[calc(25%-12px)] max-[576px]:w-full">
                        <div class="card-img">
                            <img class="rounded w-full" src="<?php echo e(asset('assets/blog-2.jpg')); ?>" alt="">
                        </div>
                        <ul class="mt-4 mb-2">
                            <li class="inline-block text-xs leading-[18px] capitalize font-normal p-[5px] rounded text-[#425A8B] bg-[#D5DFE4]">
                                <a href="#" class="list-disc block">technology</a>
                            </li>
                        </ul>
                        <a href="#" class="duration-300 hover:text-[#0BA9ED]">
                            <h2 class="text-2xl leading-[31px] font-bold">How can Web 3.0 Bring <br> Changes to the Gaming?</h2>
                        </a>
                        <div class="mt-4 flex gap-[30px] text-xs leading-[18px] text-[#8C9EC5]">
                            <span>August 30, 2022</span>
                            <span>5 Mins read</span>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="flex-none w-[calc(25%-12px)] max-[576px]:w-full">
                        <div class="card-img">
                            <img class="rounded w-full" src="<?php echo e(asset('assets/blog-3.jpg')); ?>" alt="">
                        </div>
                        <ul class="mt-4 mb-2">
                            <li class="inline-block text-xs leading-[18px] capitalize font-normal p-[5px] rounded text-[#425A8B] bg-[#D5DFE4]">
                                <a href="#" class="list-disc block">Gaming</a>
                            </li>
                        </ul>
                        <a href="#" class="duration-300 hover:text-[#0BA9ED]">
                            <h2 class="text-2xl leading-[31px] font-bold">NFT Blockchain Games <br> That Might Take Off</h2>
                        </a>
                        <div class="mt-4 flex gap-[30px] text-xs leading-[18px] text-[#8C9EC5]">
                            <span>August 25, 2022</span>
                            <span>3 Mins read</span>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="flex-none w-[calc(25%-12px)] max-[576px]:w-full">
                        <div class="card-img">
                            <img class="rounded w-full" src="<?php echo e(asset('assets/blog-4.jpg')); ?>" alt="">
                        </div>
                        <ul class="mt-4 mb-2">
                            <li class="inline-block text-xs leading-[18px] capitalize font-normal p-[5px] rounded text-[#425A8B] bg-[#D5DFE4]">
                                <a href="#" class="list-disc block">Blockchain</a>
                            </li>
                        </ul>
                        <a href="#" class="duration-300 hover:text-[#0BA9ED]">
                            <h2 class="text-2xl leading-[31px] font-bold">Blockchain Gaming And Its <br> Three Challenges</h2>
                        </a>
                        <div class="mt-4 flex gap-[30px] text-xs leading-[18px] text-[#8C9EC5]">
                            <span>August 15, 2022</span>
                            <span>7 Mins read</span>
                        </div>
                    </div>

                    <!-- Card 5 -->
                    <div class="flex-none w-[calc(25%-12px)] max-[576px]:w-full">
                        <div class="card-img">
                            <img class="rounded w-full" src="<?php echo e(asset('assets/blog-5.jpg')); ?>" alt="">
                        </div>
                        <ul class="mt-4 mb-2">
                            <li class="inline-block text-xs leading-[18px] capitalize font-normal p-[5px] rounded text-[#425A8B] bg-[#D5DFE4]">
                                <a href="#" class="list-disc block">Development</a>
                            </li>
                        </ul>
                        <a href="#" class="duration-300 hover:text-[#0BA9ED]">
                            <h2 class="text-2xl leading-[31px] font-bold">HTML5 – The Future of <br> Mobile App Development</h2>
                        </a>
                        <div class="mt-4 flex gap-[30px] text-xs leading-[18px] text-[#8C9EC5]">
                            <span>August 15, 2022</span>
                            <span>7 Mins read</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!--  -->
        <section class="mt-20 mb-5 flex gap-[15px] max-[576px]:flex-wrap max-[576px]:w-full">
            <div class="icon-box w-[20%] rounded duration-300 hover:bg-[#F4F7FC] border border-[#D5DFE4] border-solid hover:border-[#8C9EC5] flex items-center gap-3 p-[15px] max-[576px]:w-full">
                <div>
                    <img src="<?php echo e(asset('assets/delivery.svg')); ?>" alt="Logo">
                </div>
                <div>
                    <h2 class="text-[20px] leading-7 font-bold">Free Delivery</h2>
                    <p class="text-sm text-[#8C9EC5] leading-5">From all orders over $10</p>
                </div>
            </div>

            <div class="icon-box w-[20%] rounded duration-300 hover:bg-[#F4F7FC] border border-[#D5DFE4] border-solid hover:border-[#8C9EC5] flex items-center gap-3 p-[15px] max-[576px]:w-full">
                <div>
                    <img src="<?php echo e(asset('assets/support.svg')); ?>" alt="Logo">
                </div>
                <div>
                    <h2 class="text-[20px] leading-7 font-bold">Support 24/7</h2>
                    <p class="text-sm text-[#8C9EC5] leading-5">Shop with an expert</p>
                </div>
            </div>

            <div class="icon-box w-[20%] rounded duration-300 hover:bg-[#F4F7FC] border border-[#D5DFE4] border-solid hover:border-[#8C9EC5] flex items-center gap-3 p-[15px] max-[576px]:w-full">
                <div>
                    <img src="<?php echo e(asset('assets/voucher.svg')); ?>" alt="Logo">
                </div>
                <div>
                    <h2 class="text-[20px] leading-7 font-bold">Gift voucher</h2>
                    <p class="text-sm text-[#8C9EC5] leading-5">Refer a friend</p>
                </div>
            </div>

            <div class="icon-box w-[20%] rounded duration-300 hover:bg-[#F4F7FC] border border-[#D5DFE4] border-solid hover:border-[#8C9EC5] flex items-center gap-3 p-[15px] max-[576px]:w-full">
                <div>
                    <img src="<?php echo e(asset('assets/return.svg')); ?>" alt="Logo">
                </div>
                <div>
                    <h2 class="text-[20px] leading-7 font-bold">Return & Refund</h2>
                    <p class="text-sm text-[#8C9EC5] leading-5">Free return over $200</p>
                </div>
            </div>

            <div class="icon-box w-[20%] rounded duration-300 hover:bg-[#F4F7FC] border border-[#D5DFE4] border-solid hover:border-[#8C9EC5] flex items-center gap-3 p-[15px] max-[576px]:w-full">
                <div>
                    <img src="<?php echo e(asset('assets/secure.svg')); ?>" alt="Logo">
                </div>
                <div>
                    <h2 class="text-[20px] leading-7 font-bold">Secure payment</h2>
                    <p class="text-sm text-[#8C9EC5] leading-5">100% Protected</p>
                </div>
            </div>
        </section>
    </section>
    <!-- banner section end -->

    <!-- section -->
    <section class="bg-[#0E224d] mt-14 py-[90px] max-[576px]:pb-[200px] px-0 text-white bg-img bg-no-repeat max-[576px]:px-[20px] max-[576px]:pt-[60px]">
        <div class="flex items-center gap-[100px] max-[576px]:flex-wrap max-[576px]:gap-[30px] max-w-[1360px] mx-auto">
            <div>
                <h2 class="text-[32px] max-[576px]:text-[32px] max-[576px]:leading-15 max-[576px]:font-[600] font-bold leading-[41px]">
                    Subscrible & Get <span class="text-[#FFB067]">10%</span> Discount
                </h2>
                <p class="text-xl leading-7 font-[400] max-[576px]:text-sm max-[576px]:mt-3">Get E-mail updates about our latest shop and special offers.</p>
            </div>

            <div class="flex max-[576px]:justify-center">
                <input type="email" class="text-[#9ca3af] focus:outline-none text-xs leading-[18px] block w-[350px] max-[576px]:w-[280px] h-[50px] py-[5px] px-5 rounded !rounded-r-none bg-white max-[576px]:py-[0px]" placeholder="Your email Address">
                <button href="#" class="bg-[#FD9636] duration-300 hover:bg-[#425A8B] font-bold cursor-pointer text-sm leading-5 py-[10px] px-[22px] rounded rounded-l-none max-[576px]:w-[30%] max-[576px]:font-[500] max-[576px]:text-sm" type="submit">Sign Up</button>
            </div>
        </div>
    </section>

    <!-- footer -->

    <footer class="footer-container bg-[#f0f3f8] mb-[50px] pt-[105px] pb-[75px]">
        <div class="main-footer flex justify-between max-w-[1360px] mx-auto max-[576px]:flex-wrap max-[576px]:px-[20px] max-[576px]:gap-10">
            <ul>
                <h3 class="text-[#0E224D] mb-[30px] text-2xl leading-[31px] font-bold max-[576px]:mb-5">Contact</h3>

                <li class="mb-5"><strong class="text-[16px] leading-6 font-bold">Address: </strong><a href="#">502 New Design Str, Melbourne,<br> San Francisco, CA 94110, United States</a></li>

                <li class="mb-5">
                    <strong class="text-[16px] leading-6 font-bold">Phone:</strong>
                    <a href="#">(+01) 123-456-789</a>
                </li>

                <li class="mb-5"><strong class="text-[16px] leading-6 font-bold">E-mail:</strong>
                    <a href="#">contact@ecom-market.com</a>
                </li>
                <li class="mb-5"><strong class="text-[16px] leading-6 font-bold">Hours:</strong><a href="#">8:00 - 17:00, Mon - Sat</a></li>

                <li class="social-icons flex gap-[10px]">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48" fill="#9DB0D4">
                        <path d="M12 2C6.477 2 2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.891h-2.33v6.988C18.343 21.129 22 16.99 22 12c0-5.523-4.477-10-10-10z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48">
                        <defs>
                            <linearGradient id="instaGrad" x1="0%" y1="100%" x2="100%" y2="0%">
                                <stop offset="0%" stop-color="#9DB0D4" />
                                <stop offset="25%" stop-color="#9DB0D4" />
                                <stop offset="50%" stop-color="#9DB0D4" />
                                <stop offset="75%" stop-color="#9DB0D4" />
                                <stop offset="100%" stop-color="#9DB0D4" />
                            </linearGradient>
                        </defs>
                        <circle cx="24" cy="24" r="24" fill="url(#instaGrad)" />
                        <rect x="12" y="12" width="24" height="24" rx="7" fill="none" stroke="#ffffff" stroke-width="2" />
                        <circle cx="24" cy="24" r="5" fill="none" stroke="#ffffff" stroke-width="2" />
                        <circle cx="30" cy="18" r="1.5" fill="#ffffff" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48">
                        <circle cx="24" cy="24" r="24" fill="#9DB0D4" />
                        <path d="M36 16.5c-1 .4-2 .7-3.1.8 1.1-.7 2-1.8 2.4-3.1-1 .6-2.2 1.1-3.5 1.3-1-1.1-2.4-1.8-4-1.8-3 0-5.5 2.5-5.5 5.5 0 .4 0 .9.1 1.3-4.6-.2-8.7-2.4-11.4-5.8-.5.8-.7 1.7-.7 2.8 0 1.9 1 3.6 2.4 4.6-.9 0-1.8-.3-2.5-.7v.1c0 2.7 1.9 4.9 4.4 5.4-.5.1-1 .2-1.5.2-.4 0-.7 0-1.1-.1.7 2.2 2.7 3.8 5.1 3.8-1.9 1.5-4.3 2.4-6.9 2.4-.4 0-.9 0-1.3-.1 2.4 1.6 5.3 2.5 8.4 2.5 10.1 0 15.6-8.4 15.6-15.6v-.7c1.1-.8 2-1.8 2.8-2.9z" fill="#ffffff" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48">
                        <circle cx="24" cy="24" r="24" fill="#9DB0D4" />
                        <path d="M19 35v-11h-3.6V35H19zM17.2 22.5c1.2 0 1.9-.8 1.9-1.8 0-1-.7-1.8-1.9-1.8-1.2 0-1.9.8-1.9 1.8 0 1 .7 1.8 1.9 1.8zM35 35v-6c0-3.2-1.7-4.7-4-4.7-1.8 0-2.7 1-3.2 1.8v-1.6h-3.6c.1 1 0 10.5 0 10.5h3.6v-5.9c0-.3 0-.6.1-.8.3-.8 1-1.6 2.2-1.6 1.6 0 2.2 1.2 2.2 3v5.3H35z" fill="#ffffff" />
                    </svg>
                </li>
            </ul>

            <ul>
                <h3 class="text-[#0E224D] mb-[30px] text-2xl leading-[31px] font-bold max-[576px]:mb-5">Make Money with Us</h3>

                <li class="flex items-center mb-2">
                    <svg class="h-[16px]" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="#8799BC">
                        <path d="M8 5.5a1 1 0 0 1 1.6-.8l8 6a1.6 1.6 0 0 1 0 2.6l-8 6A1 1 0 0 1 8 18.5z" />
                    </svg>
                    <a href="#">
                        Mission & Vision</a>
                </li>

                <li class="flex items-center mb-2">
                    <svg class="h-[16px]" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="#8799BC">
                        <path d="M8 5.5a1 1 0 0 1 1.6-.8l8 6a1.6 1.6 0 0 1 0 2.6l-8 6A1 1 0 0 1 8 18.5z" />
                    </svg>
                    <a href="#">
                        Our Team</a>
                </li>

                <li class="flex items-center mb-2">
                    <svg class="h-[16px]" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="#8799BC">
                        <path d="M8 5.5a1 1 0 0 1 1.6-.8l8 6a1.6 1.6 0 0 1 0 2.6l-8 6A1 1 0 0 1 8 18.5z" />
                    </svg>
                    <a href="#">
                        Careers</a>
                </li>

                <li class="flex items-center mb-2">
                    <svg class="h-[16px]" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="#8799BC">
                        <path d="M8 5.5a1 1 0 0 1 1.6-.8l8 6a1.6 1.6 0 0 1 0 2.6l-8 6A1 1 0 0 1 8 18.5z" />
                    </svg>
                    <a href="#">
                        Press & Media</a>
                </li>

                <li class="flex items-center mb-2">
                    <svg class="h-[16px]" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="#8799BC">
                        <path d="M8 5.5a1 1 0 0 1 1.6-.8l8 6a1.6 1.6 0 0 1 0 2.6l-8 6A1 1 0 0 1 8 18.5z" />
                    </svg>
                    <a href="#">
                        Advertising</a>
                </li>

                <li class="flex items-center">
                    <svg class="h-[16px]" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="#8799BC">
                        <path d="M8 5.5a1 1 0 0 1 1.6-.8l8 6a1.6 1.6 0 0 1 0 2.6l-8 6A1 1 0 0 1 8 18.5z" />
                    </svg>
                    <a href="#">
                        Testimonials</a>
                </li>
            </ul>

            <ul class="max-[576px]:w-[100%]">
                <h3 class="text-[#0E224D] mb-[30px] text-2xl leading-[31px] font-bold">Company</h3>

                <li class="flex items-center mb-2">
                    <svg class="h-[16px]" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="#8799BC">
                        <path d="M8 5.5a1 1 0 0 1 1.6-.8l8 6a1.6 1.6 0 0 1 0 2.6l-8 6A1 1 0 0 1 8 18.5z" />
                    </svg>
                    <a href="#">
                        Our Blog</a>
                </li>

                <li class="flex items-center mb-2">
                    <svg class="h-[16px]" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="#8799BC">
                        <path d="M8 5.5a1 1 0 0 1 1.6-.8l8 6a1.6 1.6 0 0 1 0 2.6l-8 6A1 1 0 0 1 8 18.5z" />
                    </svg>
                    <a href="#">
                        Plans & Pricing</a>
                </li>

                <li class="flex items-center mb-2">
                    <svg class="h-[16px]" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="#8799BC">
                        <path d="M8 5.5a1 1 0 0 1 1.6-.8l8 6a1.6 1.6 0 0 1 0 2.6l-8 6A1 1 0 0 1 8 18.5z" />
                    </svg>
                    <a href="#">
                        Knowledge Base</a>
                </li>

                <li class="flex items-center mb-2">
                    <svg class="h-[16px]" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="#8799BC">
                        <path d="M8 5.5a1 1 0 0 1 1.6-.8l8 6a1.6 1.6 0 0 1 0 2.6l-8 6A1 1 0 0 1 8 18.5z" />
                    </svg>
                    <a href="#">
                        Cookie Policy</a>
                </li>

                <li class="flex items-center mb-2">
                    <svg class="h-[16px]" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="#8799BC">
                        <path d="M8 5.5a1 1 0 0 1 1.6-.8l8 6a1.6 1.6 0 0 1 0 2.6l-8 6A1 1 0 0 1 8 18.5z" />
                    </svg>
                    <a href="#">
                        Office Center

                <li class="flex items-center">
                    <svg class="h-[16px]" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="#8799BC">
                        <path d="M8 5.5a1 1 0 0 1 1.6-.8l8 6a1.6 1.6 0 0 1 0 2.6l-8 6A1 1 0 0 1 8 18.5z" />
                    </svg>
                    <a href="#">
                        News & Events</a>
                </li>
            </ul>

            <ul>
                <h3 class="text-[#0E224D] mb-[30px] text-2xl leading-[31px] font-bold">My account</h3>

                <li class="flex items-center mb-2">
                    <svg class="h-[16px]" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="#8799BC">
                        <path d="M8 5.5a1 1 0 0 1 1.6-.8l8 6a1.6 1.6 0 0 1 0 2.6l-8 6A1 1 0 0 1 8 18.5z" />
                    </svg>
                    <a href="#">
                        FAQs</a>
                </li>

                <li class="flex items-center mb-2">
                    <svg class="h-[16px]" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="#8799BC">
                        <path d="M8 5.5a1 1 0 0 1 1.6-.8l8 6a1.6 1.6 0 0 1 0 2.6l-8 6A1 1 0 0 1 8 18.5z" />
                    </svg>
                    <a href="#">
                        Editor Help</a>
                </li>

                <li class="flex items-center mb-2">
                    <svg class="h-[16px]" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="#8799BC">
                        <path d="M8 5.5a1 1 0 0 1 1.6-.8l8 6a1.6 1.6 0 0 1 0 2.6l-8 6A1 1 0 0 1 8 18.5z" />
                    </svg>
                    <a href="#">
                        Community</a>
                </li>

                <li class="flex items-center mb-2">
                    <svg class="h-[16px]" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="#8799BC">
                        <path d="M8 5.5a1 1 0 0 1 1.6-.8l8 6a1.6 1.6 0 0 1 0 2.6l-8 6A1 1 0 0 1 8 18.5z" />
                    </svg>
                    <a href="#">
                        Live Chatting</a>
                </li>

                <li class="flex items-center mb-2">
                    <svg class="h-[16px]" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="#8799BC">
                        <path d="M8 5.5a1 1 0 0 1 1.6-.8l8 6a1.6 1.6 0 0 1 0 2.6l-8 6A1 1 0 0 1 8 18.5z" />
                    </svg>
                    <a href="#">
                        Contact Us

                <li class="flex items-center">
                    <svg class="h-[16px]" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="#8799BC">
                        <path d="M8 5.5a1 1 0 0 1 1.6-.8l8 6a1.6 1.6 0 0 1 0 2.6l-8 6A1 1 0 0 1 8 18.5z" />
                    </svg>
                    <a href="#">
                        Support Center</a>
                </li>
            </ul>

            <ul>
                <h3 class="text-[#0E224D] mb-[30px] text-2xl leading-[31px] font-bold">App & Payment</h3>

                <p class="leading-6 text-[#425A8B]">Download our Apps and get extra 15% <br>Discount on your first Order…!</p>

                <li class="flex gap-3  my-[20px] mb-[20px]">
                    <img src="<?php echo e(asset('assets/appstore.png')); ?>" alt="appstore">

                    <img src="<?php echo e(asset('assets/google-play.png')); ?>" alt="appstore">
                </li>
                <p>Secured Payment Gateways</p>

                <img class="mt-1" src="<?php echo e(asset('assets/payment-method.png')); ?>" alt="appstore">
            </ul>

        </div>
    </footer>
    <!-- footer end -->

    <footer class="w-full border-t-[3px] border-[#edf1f7] bg-white font-sans text-[#405c96]">
        <div class="mx-auto max-w-[1800px] px-4 pt-10 sm:px-8 sm:pt-12 lg:px-[65px] lg:pt-[62px]">

            <!-- Logo and navigation -->
            <div class="mb-8 flex flex-col items-start gap-5 md:flex-row md:items-end md:gap-x-[38px] lg:mb-[31px]">
                <a href="#" class="flex shrink-0 items-center gap-2 no-underline">
                    <div class="relative h-[55px] w-[65px]">
                        <span class="absolute left-[12px] top-[-1px] h-[9px] w-[9px] rounded-full bg-[#35bafa]"></span>
                        <span class="absolute right-[11px] top-[-1px] h-[9px] w-[9px] rounded-full bg-[#35bafa]"></span>
                        <span class="absolute left-[15px] top-[4px] h-[10px] w-[3px] rotate-[-25deg] bg-[#35bafa]"></span>
                        <span class="absolute right-[15px] top-[4px] h-[10px] w-[3px] rotate-[25deg] bg-[#35bafa]"></span>
                        <div class="absolute left-[5px] top-[9px] h-[39px] w-[55px] rounded-[22px] bg-[#35bafa]"></div>
                        <div class="absolute left-0 top-[26px] h-[12px] w-[10px] rounded-full bg-[#35bafa]"></div>
                        <div class="absolute right-0 top-[26px] h-[12px] w-[10px] rounded-full bg-[#35bafa]"></div>
                        <div class="absolute left-[10px] top-[26px] flex h-[14px] w-[45px] items-center justify-evenly rounded-full bg-[#f7a13b]">
                            <span class="h-[4px] w-[4px] rounded-full bg-[#405c96]"></span>
                            <span class="h-[4px] w-[4px] rounded-full bg-[#405c96]"></span>
                            <span class="h-[4px] w-[4px] rounded-full bg-[#405c96]"></span>
                        </div>
                        <div class="absolute bottom-[1px] left-[19px] h-[5px] w-[28px] rounded-full bg-[#f7a13b]"></div>
                    </div>

                    <span class="relative text-[34px] font-bold leading-none tracking-[-2px] text-[#405a91] sm:text-[43px]">
                        Ecom
                        <sup class="absolute -right-[14px] -top-[8px] text-[16px] font-normal tracking-normal sm:-right-[16px] sm:text-[20px]">®</sup>
                    </span>
                </a>

                <nav class="flex flex-wrap items-center gap-x-5 gap-y-2 text-xs leading-[18px] text-[#0E224D] font-[DM_Sans] sm:gap-x-[30px] md:pb-[3px]">
                    <a href="#" class="duration-300 hover:text-[#0BA9ED]">EcomMarket.com</a>
                    <a href="#" class="duration-300 hover:text-[#0BA9ED]">Ecom Partners</a>
                    <a href="#" class="duration-300 hover:text-[#0BA9ED]">Ecom Business</a>
                    <a href="#" class="duration-300 hover:text-[#0BA9ED]">Ecom Factory</a>
                </nav>
            </div>

            <!-- Electronic categories -->
            <div class="mb-6 flex flex-col gap-3 font-[DM_Sans] sm:flex-row sm:items-start sm:gap-[15px] lg:mb-[26px]">
                <h3 class="shrink-0 text-base font-bold leading-[18px] text-[#0E224D]">Electronic:</h3>

                <div class="flex min-w-0 flex-1 flex-wrap items-center gap-y-3
                [&>a]:border-r [&>a]:border-[#8ca4d2] [&>a]:px-3 [&>a]:text-sm [&>a]:leading-4 [&>a]:text-[#425A8B] [&>a]:transition-colors [&>a:hover]:text-[#0BA9ED]
                sm:[&>a]:px-[18px]
                [&>a:first-child]:pl-0 [&>a:last-child]:border-r-0 [&>a:last-child]:pr-0">
                    <a href="#">Cell Phones</a>
                    <a href="#">Headphones</a>
                    <a href="#">Television &amp; Video</a>
                    <a href="#">Game Controller</a>
                    <a href="#">Apple Watch</a>
                    <a href="#">HTC</a>
                    <a href="#">Ipad</a>
                    <a href="#">Keyboard</a>
                    <a href="#">Samsung</a>
                    <a href="#">Wireless Speaker</a>
                    <a href="#">Samsung Galaxy</a>
                    <a href="#">Gaming Mouse</a>
                    <a href="#">eBook Readers</a>
                    <a href="#">Service Plans</a>
                    <a href="#">Home Audio</a>
                    <a href="#">Office Electronics</a>
                    <a href="#">Lenovo</a>
                    <a href="#">Mackbook Pro M1</a>
                    <a href="#">HD Videos Player</a>
                </div>
            </div>

            <!-- Furniture categories -->
            <div class="mb-6 flex flex-col gap-3 font-[DM_Sans] sm:flex-row sm:items-start sm:gap-[15px] lg:mb-[26px]">
                <h3 class="shrink-0 text-base font-bold leading-[18px] text-[#0E224D]">Furniture:</h3>

                <div class="flex min-w-0 flex-1 flex-wrap items-center gap-y-3
                [&>a]:border-r [&>a]:border-[#8ca4d2] [&>a]:px-3 [&>a]:text-sm [&>a]:leading-4 [&>a]:text-[#425A8B] [&>a]:transition-colors [&>a:hover]:text-[#0BA9ED]
                sm:[&>a]:px-[18px]
                [&>a:first-child]:pl-0 [&>a:last-child]:border-r-0 [&>a:last-child]:pr-0">
                    <a href="#">Sofa</a>
                    <a href="#">Chair</a>
                    <a href="#">Dining Table</a>
                    <a href="#">Living Room</a>
                    <a href="#">Table Lamp</a>
                    <a href="#">Night Stand</a>
                    <a href="#">Computer Desk</a>
                    <a href="#">Bar Table</a>
                    <a href="#">Pillow</a>
                    <a href="#">Radio</a>
                    <a href="#">Clock</a>
                    <a href="#">Bad Room</a>
                    <a href="#">Stool</a>
                    <a href="#">Television</a>
                    <a href="#">wardrobe</a>
                    <a href="#">Living Room Tables</a>
                    <a href="#">Dressers</a>
                    <a href="#">Patio Sofas</a>
                    <a href="#">Nursery</a>
                    <a href="#">Kitchen</a>
                    <a href="#">Accent Furniture</a>
                    <a href="#">Replacement Parts</a>
                </div>
            </div>

            <!-- Divider -->
            <div class="h-px w-full bg-[#cbd8f0]"></div>

            <!-- Copyright and links -->
            <div class="flex flex-col items-center gap-4 py-6 text-center md:min-h-[98px] md:flex-row md:justify-between md:gap-x-8 md:text-left">
                <p class="m-0 text-sm leading-5">Copyright © 2022 Ecom Market. All rights reserved.</p>

                <nav class="flex flex-wrap items-center justify-center gap-x-6 gap-y-2 sm:gap-x-[40px]">
                    <a href="#" class="text-sm duration-300 hover:text-[#0BA9ED]">Conditions of Use</a>
                    <a href="#" class="text-sm duration-300 hover:text-[#0BA9ED]">Privacy Notice</a>
                    <a href="#" class="text-sm duration-300 hover:text-[#0BA9ED]">Interest-Based Ads</a>
                </nav>
            </div>
        </div>

        <!-- Back to top -->
        <button type="button" aria-label="Back to top" onclick="window.scrollTo({top: 0, behavior: 'smooth'})"
            class="fixed bottom-5 right-4 z-50 flex h-11 w-11 items-center justify-center rounded-full bg-[#405b91] text-[22px] text-white transition-colors hover:bg-[#304777] sm:bottom-[36px] sm:right-[34px] sm:h-[54px] sm:w-[54px] sm:text-[29px]">↑</button>
    </footer>


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

        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.electronic-slider').forEach(function(slider) {
                const slides = Array.from(slider.querySelectorAll(':scope > .electronic-bg'));
                const dots = Array.from(slider.querySelectorAll('.slider-dot'));
                if (!slides.length || dots.length !== slides.length) return;

                const duration = 600;
                const interval = 4000;
                let current = 0;
                let timer = null;
                let isAnimating = false;

                slides.forEach(function(slide, index) {
                    slide.classList.remove('active', 'slide-out-left', 'slide-entering');
                    slide.style.removeProperty('transform');
                    slide.style.removeProperty('opacity');
                    slide.style.removeProperty('visibility');
                    slide.style.removeProperty('transition');
                    slide.style.zIndex = index === 0 ? '2' : '0';
                });
                slides[0].classList.add('active');

                function updateDots(index) {
                    dots.forEach(function(dot, dotIndex) {
                        dot.classList.toggle('active', dotIndex === index);
                        dot.classList.toggle('opacity-[0.2]', dotIndex !== index);
                        dot.setAttribute('aria-current', dotIndex === index ? 'true' : 'false');
                    });
                }

                function goToSlide(next) {
                    if (next < 0 || next >= slides.length || next === current || isAnimating) return;
                    isAnimating = true;

                    const previous = current;
                    const oldSlide = slides[previous];
                    const newSlide = slides[next];


                    newSlide.classList.remove('active', 'slide-out-left', 'slide-entering');
                    newSlide.style.transition = 'none';
                    newSlide.style.transform = 'translateX(100%)';
                    newSlide.style.opacity = '1';
                    newSlide.style.visibility = 'visible';
                    newSlide.style.zIndex = '3';
                    void newSlide.offsetWidth;


                    newSlide.style.removeProperty('transition');
                    newSlide.style.removeProperty('transform');
                    newSlide.style.removeProperty('opacity');
                    newSlide.style.removeProperty('visibility');

                    oldSlide.classList.remove('active');
                    oldSlide.classList.add('slide-out-left');
                    oldSlide.style.zIndex = '2';
                    newSlide.classList.add('active');
                    newSlide.style.zIndex = '3';

                    current = next;
                    updateDots(current);

                    window.setTimeout(function() {
                        oldSlide.classList.remove('slide-out-left');
                        oldSlide.style.zIndex = '0';
                        newSlide.style.zIndex = '2';
                        isAnimating = false;
                    }, duration + 40);
                }

                function startAutoSlide() {
                    window.clearInterval(timer);
                    timer = window.setInterval(function() {
                        if (!document.hidden && !isAnimating) {
                            goToSlide((current + 1) % slides.length);
                        }
                    }, interval);
                }

                dots.forEach(function(dot, index) {
                    dot.addEventListener('click', function() {
                        if (index === current || isAnimating) return;
                        goToSlide(index);
                        startAutoSlide();
                    });
                });

                slider.addEventListener('mouseenter', function() {
                    window.clearInterval(timer);
                });
                slider.addEventListener('mouseleave', startAutoSlide);
                slider.addEventListener('focusin', function() {
                    window.clearInterval(timer);
                });
                slider.addEventListener('focusout', function(event) {
                    if (!slider.contains(event.relatedTarget)) startAutoSlide();
                });

                updateDots(0);
                startAutoSlide();
            });

            const menuToggle = document.getElementById('mobile-menu-toggle');
            const menuClose = document.getElementById('mobile-menu-close');
            const drawer = document.getElementById('mobile-navigation-drawer');
            const overlay = document.getElementById('mobile-menu-overlay');
            const drawerContent = document.getElementById('mobile-drawer-content');

            if (menuToggle && menuClose && drawer && overlay && drawerContent) {
                const desktopNav = document.querySelector('.nav-links ul');
                const sidebarNav = document.querySelector('.sidebar nav ul');

                if (desktopNav) {
                    const navSection = document.createElement('section');
                    navSection.className = 'mobile-drawer-section';
                    const navHeading = document.createElement('p');
                    navHeading.className = 'mobile-drawer-heading';
                    navHeading.textContent = 'Navigation';
                    const navList = desktopNav.cloneNode(true);
                    navList.className = 'mobile-drawer-nav';
                    navList.querySelectorAll('img').forEach(function(image) {
                        image.remove();
                    });
                    navSection.append(navHeading, navList);
                    drawerContent.appendChild(navSection);
                }

                if (sidebarNav) {
                    const categorySection = document.createElement('section');
                    categorySection.className = 'mobile-drawer-section';
                    const categoryHeading = document.createElement('p');
                    categoryHeading.className = 'mobile-drawer-heading';
                    categoryHeading.textContent = 'Categories';
                    const categoryList = sidebarNav.cloneNode(true);
                    categoryList.className = 'mobile-drawer-categories';
                    categoryList.querySelectorAll('a').forEach(function(link, index) {
                        const labels = ['All categories', 'Computers', 'Mobile devices', 'Gaming', 'Smart watches', 'Airpods', 'Mouse & keyboard', 'Music', 'Bluetooth', 'Cloud software', 'Electricity', 'CPU', 'Devices', 'Drivers', 'Audio', 'Lighting'];
                        const label = document.createElement('span');
                        label.textContent = labels[index] || 'Category';
                        link.appendChild(label);
                    });
                    categorySection.append(categoryHeading, categoryList);
                    drawerContent.appendChild(categorySection);
                }

                function openDrawer() {
                    drawer.classList.add('is-open');
                    overlay.classList.add('is-open');
                    drawer.removeAttribute('inert');
                    drawer.setAttribute('aria-hidden', 'false');
                    overlay.setAttribute('aria-hidden', 'false');
                    menuToggle.setAttribute('aria-expanded', 'true');
                    document.body.classList.add('mobile-drawer-open');
                    menuClose.focus();
                }

                function closeDrawer() {
                    drawer.classList.remove('is-open');
                    overlay.classList.remove('is-open');
                    drawer.setAttribute('inert', '');
                    drawer.setAttribute('aria-hidden', 'true');
                    overlay.setAttribute('aria-hidden', 'true');
                    menuToggle.setAttribute('aria-expanded', 'false');
                    document.body.classList.remove('mobile-drawer-open');
                }

                menuToggle.addEventListener('click', openDrawer);
                menuClose.addEventListener('click', closeDrawer);
                overlay.addEventListener('click', closeDrawer);
                drawer.addEventListener('click', function(event) {
                    if (event.target.closest('a')) closeDrawer();
                });
                document.addEventListener('keydown', function(event) {
                    if (event.key === 'Escape' && drawer.classList.contains('is-open')) {
                        closeDrawer();
                        menuToggle.focus();
                    }
                });
            }

            /* Interactive category rail: first icon toggles; other icons open on hover/focus. */
            const categorySidebar = document.getElementById('category-sidebar');
            const categoryMenu = document.getElementById('category-mega-menu');
            const categoryList = document.getElementById('category-menu-list');
            const categorySubmenu = document.getElementById('category-submenu');
            const categoryClose = document.getElementById('category-menu-close');
            if (categorySidebar && categoryMenu && categoryList && categorySubmenu) {
                const categories = [
                    ['All categories', 'Computers & Accessories', 'Cell Phones', 'Gaming Gadgets', 'Smart watches', 'Wired Headphone', 'Mouse & Keyboard', 'Headphone', 'Bluetooth devices', 'Cloud Software', 'Electric accessories', 'Mainboard & CPU', 'Desktop PC', 'Speaker', 'Bluetooth Headphone', 'Computer Decor'],
                    ['Computers & Accessories', 'Computer Cases', 'Laptop', 'HDD', 'RAM', 'Headphone'],
                    ['Phone Accessories', 'Phone Cases', 'Postpaid Phones', 'Unlocked Phones', 'Prepaid Phones', 'Prepaid Plans', 'Refurbished Phones', 'Straight Talk', 'iPhone', 'Samsung Galaxy', 'Samsung Galaxy', 'Samsung Galaxy', 'Samsung Galaxy', 'Samsung Galaxy'],
                    ['Wireless Routers', 'Cool New Gadgets', 'Tech and Gadgets', 'Geek Gifts and Gadgets', 'Xbox Accessories', 'PlayStation Accessories'],
                    ['Smart watches', 'Fashion Smart Watches', 'Smart Bracelets', 'Pocket Watches', 'Smart Rings', 'Other Watches'],
                    ['On-Ear Headphones', 'Earbud & in-Ear', 'DJ Headphones', 'Pc Accessories', 'Pc Game Headsets'],
                    ['Logitech', 'Redragon', 'Amazon Basics', 'Microsoft', 'MageGee'],
                    ['Car Audio Systems', 'Cellphones', 'Desktops', 'Gaming Consoles', 'Telephones'],
                    ['Play Accessories', 'Computer Accessories', 'Speakers & Audio', 'Computer Networking', 'Movies & Films'],
                    ['Android', 'Linux & Unix', 'Macintosh', 'Windows', 'iPhone & iOS'],
                    ['Antenna Toppers', 'Automotive Body Armor', 'Power Invertor', 'Gas Tank Doors', 'Hood Scoopes & Vents'],
                    ['Computer CPU Processors', 'Internal Fans & Cooling', 'Graphic Cards', 'Network IO/ Port Cards', 'Internal Memory Card'],
                    ['Graphic Pc', 'Office Pc', 'Gaming PC', 'Server'],
                    ['JBL', 'ANker', 'Pyle', 'Bose', 'Logitech'],
                    ['On-Ear Headphones', 'In-Ear Headphones', 'Earbud', 'Over Headphones', 'Other'],
                    ['Copyholders', 'Office Bookends', 'Business Card Holders', 'Lap Desks', 'Mouse Pads']
                ];
                const buttons = Array.from(categorySidebar.querySelectorAll('.category-icon-button'));

                function renderCategory(index) {
                    categoryMenu.classList.remove('has-submenu');
                    const items = categories[index] || categories[0];
                    categoryList.innerHTML = '';
                    items.forEach((name, i) => {
                        const button = document.createElement('button');
                        button.type = 'button';
                        button.className = 'category-menu-item';
                        button.innerHTML = '<span></span><span class="category-chevron">›</span>';
                        button.firstElementChild.textContent = name;
                        button.addEventListener('mouseenter', () => {
                            categoryList.querySelectorAll('.category-menu-item').forEach(item => item.classList.remove('is-current'));
                            button.classList.add('is-current');
                            renderSubmenu(name, index);
                        });
                        button.addEventListener('focus', () => {
                            categoryList.querySelectorAll('.category-menu-item').forEach(item => item.classList.remove('is-current'));
                            button.classList.add('is-current');
                            renderSubmenu(name, index);
                        });
                        button.addEventListener('click', () => {
                            categoryList.querySelectorAll('.category-menu-item').forEach(item => item.classList.remove('is-current'));
                            button.classList.add('is-current');
                            renderSubmenu(name, index);
                        });
                        categoryList.appendChild(button);
                    });
                    categorySubmenu.innerHTML = '';
                }

                function renderSubmenu(name, index) {
                    categoryMenu.classList.add('has-submenu');
                    const related = (categories[index] || categories[0]).filter(item => item !== name);
                    categorySubmenu.innerHTML = '<h3></h3><p class="category-submenu-note">Explore popular products and accessories</p><div class="category-submenu-grid"></div>';
                    categorySubmenu.querySelector('h3').textContent = name;
                    const grid = categorySubmenu.querySelector('.category-submenu-grid');
                    related.slice(0, 8).forEach(item => {
                        const link = document.createElement('a');
                        link.href = '#';
                        link.textContent = item;
                        link.addEventListener('click', event => event.preventDefault());
                        grid.appendChild(link);
                    });
                }

                function openMenu(index) {
                    categoryMenu.hidden = false;
                    categorySidebar.classList.add('menu-open');
                    buttons.forEach((button, i) => {
                        button.classList.toggle('is-active', i === index);
                        button.setAttribute('aria-expanded', String(i === index));
                    });
                    renderCategory(index);
                }

                function closeMenu() {
                    categoryMenu.hidden = true;
                    categorySidebar.classList.remove('menu-open');
                    buttons.forEach(button => {
                        button.classList.remove('is-active');
                        button.setAttribute('aria-expanded', 'false');
                    });
                }
                buttons.forEach((button, index) => {
                    button.addEventListener('click', () => {
                        if (index === 0 && !categoryMenu.hidden) closeMenu();
                        else openMenu(index);
                    });
                    if (index > 0) {
                        button.addEventListener('mouseenter', () => openMenu(index));
                        button.addEventListener('focus', () => openMenu(index));
                    }
                });
                categorySidebar.addEventListener('mouseleave', event => {
                    if (!categorySidebar.contains(event.relatedTarget)) closeMenu();
                });
                categorySidebar.addEventListener('focusout', event => {
                    if (!categorySidebar.contains(event.relatedTarget)) closeMenu();
                });
                if (categoryClose) categoryClose.addEventListener('click', closeMenu);
                document.addEventListener('keydown', event => {
                    if (event.key === 'Escape') closeMenu();
                });
            }
        });

        document.addEventListener("DOMContentLoaded", () => {
            const slider = document.querySelector(".categories-items");
            if (!slider || slider.dataset.sliderInit) return;
            slider.dataset.sliderInit = "true";

            const logos = Array.from(slider.children);
            if (logos.length < 2) return;

            const track = document.createElement("div");
            track.className = "categories-track";
            logos.forEach(logo => track.appendChild(logo));

            // Clone logos so the next logo is always ready as the previous one slides away.
            logos.forEach(logo => {
                const clone = logo.cloneNode(true);
                clone.setAttribute("aria-hidden", "true");
                clone.querySelectorAll("a").forEach(link => link.setAttribute("tabindex", "-1"));
                track.appendChild(clone);
            });
            slider.appendChild(track);

            let index = 0;
            let timer;
            const gap = () => parseFloat(getComputedStyle(track).columnGap || getComputedStyle(track).gap) || 0;
            const step = () => {
                const first = track.children[0];
                return first ? first.getBoundingClientRect().width + gap() : 0;
            };

            function nextSlide() {
                index += 1;
                track.style.transition = "transform 600ms ease-in-out";
                track.style.transform = `translate3d(${-index * step()}px, 0, 0)`;
                if (index >= logos.length) {
                    window.setTimeout(() => {
                        track.style.transition = "none";
                        index = 0;
                        track.style.transform = "translate3d(0, 0, 0)";
                    }, 620);
                }
            }

            function start() {
                stop();
                timer = window.setInterval(nextSlide, 2200);
            }

            function stop() {
                if (timer) window.clearInterval(timer);
            }
            slider.addEventListener("mouseenter", stop);
            slider.addEventListener("mouseleave", start);
            slider.addEventListener("focusin", stop);
            slider.addEventListener("focusout", start);
            window.addEventListener("resize", () => {
                track.style.transition = "none";
                track.style.transform = `translate3d(${-index * step()}px, 0, 0)`;
            });
            start();
        });

        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.best-sellers-section').forEach(function(section) {
                const tabs = section.querySelectorAll('.product-tab');
                const cards = section.querySelectorAll('.best-product-card');

                // Keep five products visible in each category tab.
                cards.forEach(function(card) {
                    card.dataset.category = 'best viewed brand';
                });

                tabs.forEach(function(tab) {
                    tab.addEventListener('click', function() {
                        const filter = tab.dataset.filter;
                        tabs.forEach(function(item) {
                            const active = item === tab;
                            item.classList.toggle('is-active', active);
                            item.setAttribute('aria-selected', active ? 'true' : 'false');
                        });
                        cards.forEach(function(card) {
                            card.hidden = filter !== 'all' && !card.dataset.category.split(' ').includes(filter);
                        });
                    });
                });
            });
            const feedback = document.querySelector('.cart-feedback');
            const cartToggle = document.getElementById('header-cart-toggle');
            const cartPanel = document.getElementById('header-cart-panel');
            const cartClose = document.getElementById('cart-panel-close');
            const cartItemsContainer = document.getElementById('header-cart-items');
            const cartCountBadge = document.getElementById('header-cart-count');
            const cartItemCount = document.getElementById('cart-item-count');
            const cartSubtotal = document.getElementById('cart-subtotal');
            const continueShopping = document.getElementById('cart-continue-shopping');
            const viewCartButton = document.getElementById('cart-view-cart');
            const checkoutButton = document.getElementById('cart-checkout');
            const cartStorageKey = 'ecom-demo-cart';
            let cart = [];

            try {
                const savedCart = JSON.parse(localStorage.getItem(cartStorageKey) || '[]');
                if (Array.isArray(savedCart)) cart = savedCart.filter(function(item) {
                    return item && item.id && item.name && Number.isFinite(Number(item.price)) && Number(item.quantity) > 0;
                });
            } catch (error) {
                cart = [];
            }

            function money(value) {
                return '$' + Number(value || 0).toLocaleString('en-US', {
                    minimumFractionDigits: 2,
                    maximumFractionDigits: 2
                });
            }

            function saveCart() {
                try {
                    localStorage.setItem(cartStorageKey, JSON.stringify(cart));
                } catch (error) {}
            }

            function renderCart() {
                const count = cart.reduce(function(total, item) {
                    return total + Number(item.quantity);
                }, 0);
                const subtotal = cart.reduce(function(total, item) {
                    return total + Number(item.price) * Number(item.quantity);
                }, 0);
                if (cartCountBadge) cartCountBadge.textContent = count;
                if (cartItemCount) cartItemCount.textContent = count;
                if (cartSubtotal) cartSubtotal.textContent = money(subtotal);
                if (!cartItemsContainer) return;

                if (!cart.length) {
                    cartItemsContainer.innerHTML = '<div class="cart-empty-state"><span class="cart-empty-mark">0</span><h3>Your cart is empty</h3><p>Add a product and it will appear here.</p></div>';
                    return;
                }

                cartItemsContainer.innerHTML = '';
                cart.forEach(function(item) {
                    const row = document.createElement('article');
                    row.className = 'header-cart-item';
                    const image = document.createElement('img');
                    image.className = 'header-cart-item-image';
                    image.src = item.image || '';
                    image.alt = item.name;
                    image.loading = 'lazy';
                    const details = document.createElement('div');
                    details.className = 'header-cart-item-details';
                    const title = document.createElement('h3');
                    title.textContent = item.name;
                    const price = document.createElement('p');
                    price.className = 'header-cart-item-price';
                    price.textContent = money(item.price);
                    const actions = document.createElement('div');
                    actions.className = 'header-cart-item-actions';
                    const quantity = document.createElement('div');
                    quantity.className = 'cart-quantity-control';
                    const minus = document.createElement('button');
                    minus.type = 'button';
                    minus.textContent = '−';
                    minus.setAttribute('aria-label', 'Decrease quantity');
                    minus.addEventListener('click', function() {
                        changeQuantity(item.id, -1);
                    });
                    const qty = document.createElement('span');
                    qty.textContent = item.quantity;
                    const plus = document.createElement('button');
                    plus.type = 'button';
                    plus.textContent = '+';
                    plus.setAttribute('aria-label', 'Increase quantity');
                    plus.addEventListener('click', function() {
                        changeQuantity(item.id, 1);
                    });
                    quantity.append(minus, qty, plus);
                    const remove = document.createElement('button');
                    remove.type = 'button';
                    remove.className = 'cart-remove-button';
                    remove.textContent = 'Remove';
                    remove.addEventListener('click', function() {
                        cart = cart.filter(function(product) {
                            return product.id !== item.id;
                        });
                        saveCart();
                        renderCart();
                    });
                    actions.append(quantity, remove);
                    details.append(title, price, actions);
                    row.append(image, details);
                    cartItemsContainer.appendChild(row);
                });
            }

            function changeQuantity(id, amount) {
                const item = cart.find(function(product) {
                    return product.id === id;
                });
                if (!item) return;
                item.quantity += amount;
                if (item.quantity <= 0) cart = cart.filter(function(product) {
                    return product.id !== id;
                });
                saveCart();
                renderCart();
            }

            function setCartOpen(open) {
                if (!cartPanel || !cartToggle) return;
                cartPanel.hidden = !open;
                cartToggle.setAttribute('aria-expanded', String(open));
            }

            if (cartToggle) cartToggle.addEventListener('click', function() {
                setCartOpen(cartPanel.hidden);
            });
            if (cartClose) cartClose.addEventListener('click', function() {
                setCartOpen(false);
            });
            if (continueShopping) continueShopping.addEventListener('click', function() {
                setCartOpen(false);
            });
            document.addEventListener('click', function(event) {
                if (cartPanel && cartToggle && !cartPanel.contains(event.target) && !cartToggle.contains(event.target)) setCartOpen(false);
            });
            document.addEventListener('keydown', function(event) {
                if (event.key === 'Escape') setCartOpen(false);
            });

            document.querySelectorAll('.best-add-cart').forEach(function(button) {
                button.addEventListener('click', function(event) {
                    event.stopPropagation();
                    const card = button.closest('.best-product-card');
                    if (!card) return;
                    const name = card.dataset.name || card.querySelector('.best-product-info p')?.textContent.trim() || 'Product';
                    const image = card.querySelector('.best-product-image img');
                    const priceElement = card.querySelector('.best-product-price');
                    const priceMatch = priceElement ? priceElement.textContent.match(/\$\s*([\d,]+(?:\.\d+)?)/) : null;
                    const price = priceMatch ? Number(priceMatch[1].replace(/,/g, '')) : 0;
                    const id = name.toLowerCase().replace(/[^a-z0-9]+/g, '-');
                    const existing = cart.find(function(item) {
                        return item.id === id;
                    });
                    if (existing) existing.quantity += 1;
                    else cart.push({
                        id: id,
                        name: name,
                        price: price,
                        image: image ? image.getAttribute('src') : '',
                        quantity: 1
                    });
                    saveCart();
                    renderCart();
                    if (feedback) feedback.textContent = name + ' added to cart.';
                    const oldText = button.textContent;
                    button.textContent = 'Added!';
                    window.setTimeout(function() {
                        button.textContent = oldText;
                    }, 1400);
                });
            });
            if (viewCartButton) viewCartButton.addEventListener('click', function() {
                if (!cartPanel) return;
                cartPanel.classList.toggle('cart-panel-expanded');
                viewCartButton.textContent = cartPanel.classList.contains('cart-panel-expanded') ? 'Close cart view' : 'View cart';
                cartPanel.scrollTop = 0;
                if (cartItemsContainer) cartItemsContainer.scrollTop = 0;
            });
            if (checkoutButton) checkoutButton.addEventListener('click', function() {
                window.location.href = <?php echo json_encode(route('checkout'), 15, 512) ?>;
            });
            renderCart();
        });


        document.addEventListener("DOMContentLoaded", () => {
            const viewport = document.getElementById("products-viewport");
            const track = document.getElementById("products-track");
            const prev = document.getElementById("products-prev");
            const next = document.getElementById("products-next");

            if (!viewport || !track || !prev || !next) return;

            const slides = Array.from(track.children);
            const total = slides.length;

            if (total < 2) return;

            let index = 0;
            let moving = false;
            let timer;

            const firstClone = slides[0].cloneNode(true);
            const lastClone = slides[total - 1].cloneNode(true);

            track.appendChild(firstClone);
            track.insertBefore(lastClone, slides[0]);

            track.style.display = "flex";
            track.style.transition = "transform 700ms ease-in-out";

            Array.from(track.children).forEach(slide => {
                slide.style.flex = "0 0 100%";
                slide.style.minWidth = "0";
            });

            index = 1;

            function render(animate = true) {
                track.style.transition = animate ?
                    "transform 700ms ease-in-out" :
                    "none";

                track.style.transform = `translateX(-${index * 100}%)`;
            }

            render(false);

            function move(amount) {
                if (moving) return;

                moving = true;
                index += amount;
                render();

                clearInterval(timer);
                startAuto();
            }

            track.addEventListener("transitionend", () => {
                if (index >= total + 1) {
                    index = 1;
                    render(false);
                } else if (index <= 0) {
                    index = total;
                    render(false);
                }

                moving = false;
            });

            prev.addEventListener("click", () => move(-1));
            next.addEventListener("click", () => move(1));

            function startAuto() {
                clearInterval(timer);

                timer = setInterval(() => {
                    move(1);
                }, 5000);
            }

            viewport.addEventListener("mouseenter", () => {
                clearInterval(timer);
            });

            viewport.addEventListener("mouseleave", startAuto);

            startAuto();
        });

        (() => {
            const container = document.getElementById('sliderContainer');
            let isMoving = false;

            // Slide Next
            const slideNext = () => {
                if (isMoving || !container.children.length) return;
                isMoving = true;

                const firstChild = container.firstElementChild;
                const cardWidth = firstChild.getBoundingClientRect().width + 16;

                container.style.transition = "transform 0.5s ease-in-out";
                container.style.transform = `translateX(-${cardWidth}px)`;

                container.addEventListener('transitionend', () => {
                    container.style.transition = "none";
                    container.style.transform = "translateX(0)";
                    container.appendChild(firstChild);
                    isMoving = false;
                }, {
                    once: true
                });
            };

            // Slide Prev
            const slidePrev = () => {
                if (isMoving || !container.children.length) return;
                isMoving = true;

                const lastChild = container.lastElementChild;
                const cardWidth = lastChild.getBoundingClientRect().width + 16;

                container.insertBefore(lastChild, container.firstElementChild);
                container.style.transition = "none";
                container.style.transform = `translateX(-${cardWidth}px)`;

                setTimeout(() => {
                    container.style.transition = "transform 0.5s ease-in-out";
                    container.style.transform = "translateX(0)";
                }, 10);

                container.addEventListener('transitionend', () => {
                    isMoving = false;
                }, {
                    once: true
                });
            };

            // Autoplay Timer Setup
            let autoplay = setInterval(slideNext, 3000);

            const resetAutoplay = () => {
                clearInterval(autoplay);
                autoplay = setInterval(slideNext, 3000);
            };

            // Expose functions globally to match HTML inline onclick triggers perfectly
            window.sliderAction = {
                next: () => {
                    slideNext();
                    resetAutoplay();
                },
                prev: () => {
                    slidePrev();
                    resetAutoplay();
                }
            };
        })();

        (function() {
            document.querySelectorAll('li.group\/shop').forEach(function(item) {
                var menu = item.querySelector('[data-shop-dropdown]');
                var trigger = item.querySelector(':scope > a');
                if (!menu || !trigger) return;

                function openMenu() {
                    menu.classList.remove('opacity-0', 'invisible', 'pointer-events-none', 'translate-y-2', 'scale-95');
                    menu.classList.add('opacity-100', 'visible', 'pointer-events-auto', 'translate-y-0', 'scale-100');
                }

                function closeMenu() {
                    menu.classList.add('opacity-0', 'invisible', 'pointer-events-none', 'translate-y-2', 'scale-95');
                    menu.classList.remove('opacity-100', 'visible', 'pointer-events-auto', 'translate-y-0', 'scale-100');
                }
                item.addEventListener('mouseenter', openMenu);
                item.addEventListener('mouseleave', closeMenu);
                item.addEventListener('focusin', openMenu);
                item.addEventListener('focusout', function(e) {
                    if (!item.contains(e.relatedTarget)) closeMenu();
                });
                trigger.addEventListener('click', function(e) {
                    if (window.matchMedia('(hover: none)').matches) {
                        e.preventDefault();
                        if (menu.classList.contains('invisible')) openMenu();
                        else closeMenu();
                    }
                });
            });
        })();

        document.addEventListener('DOMContentLoaded', function() {
            const siteHeader = document.querySelector('body > header');
            if (siteHeader) {
                siteHeader.classList.add('site-sticky-header');
                const updateHeader = () => siteHeader.classList.toggle('is-scrolled', window.scrollY > 20);
                updateHeader();
                window.addEventListener('scroll', updateHeader, {
                    passive: true
                });
            }
            document.querySelectorAll('.best-product-card').forEach(function(card) {
                card.addEventListener('click', function(event) {
                    if (event.target.closest('.best-add-cart')) return;
                    if (event.target.closest('a, input, select, textarea')) event.preventDefault();

                    const info = card.querySelector('.best-product-info');
                    const titleNode = info ? Array.from(info.querySelectorAll('p')).find(function(node) {
                        return !node.classList.contains('product-rating') && !node.classList.contains('best-product-price');
                    }) : null;
                    const priceNode = card.querySelector('.best-product-price');
                    const imageNode = card.querySelector('.best-product-image img');
                    const brandNode = card.querySelector('.best-product-brand');
                    const title = titleNode ? titleNode.textContent.trim() : (card.dataset.name || 'Product');
                    const name = card.dataset.name || title;
                    const priceMatch = priceNode ? priceNode.textContent.match(/\$\s*([\d,]+(?:\.\d+)?)/) : null;
                    const price = priceMatch ? Number(priceMatch[1].replace(/,/g, '')) : 0;
                    const id = name.toLowerCase().replace(/[^a-z0-9]+/g, '-');
                    const descriptionItems = info ? Array.from(info.querySelectorAll('ul li')).map(function(item) {
                        return item.textContent.trim();
                    }).filter(Boolean) : [];
                    const product = {
                        id: id,
                        name: name,
                        title: title,
                        brand: brandNode ? brandNode.textContent.trim() : '',
                        price: price,
                        image: imageNode ? imageNode.src : '',
                        description: descriptionItems.length ? descriptionItems.join(' • ') : 'Product details and specifications.'
                    };
                    try {
                        sessionStorage.setItem('ecom-demo-selected-product', JSON.stringify(product));
                        window.location.href = <?php echo json_encode(url('/product'), 15, 512) ?>;
                    } catch (error) {
                        window.location.href = <?php echo json_encode(url('/product'), 15, 512) ?>;
                    }
                });
            });
        });
    </script>
    <!-- script end -->

    <script src="<?php echo e(asset('js/product-catalog.js')); ?>"></script>
    <script src="<?php echo e(asset('js/storefront.js')); ?>"></script>
</body>

</html><?php /**PATH C:\wamp64\www\ecom-demo\resources\views/welcome.blade.php ENDPATH**/ ?>