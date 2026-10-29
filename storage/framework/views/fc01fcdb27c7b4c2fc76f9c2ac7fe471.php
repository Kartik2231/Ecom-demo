<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout | Ecom Demo</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <?php echo app('Illuminate\Foundation\Vite')(['resources/js/app.js']); ?>

    <!-- tailwind linked here -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-['DM_Sans']">
    <div class="top-header relative z-13">
        <nav>
            <ul>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">Open a shop</a></li>
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
                            <a href="#" class="hover:text-[#FD9636] duration-300 inline-block">Home
                                <img class="inline-block" src="<?php echo e(asset('assets/down.png')); ?>" alt="arrow">
                            </a>
                        </li>

                        <li class="relative group/shop">
                            <a href="<?php echo e(route('shop')); ?>" class="inline-flex items-center gap-1 text-[#425A8B] hover:text-[#FD9636] duration-300 transition-colors">
                                Shop
                                <img class="inline-block transition-transform duration-300 group-hover/shop:rotate-180" src="<?php echo e(asset('assets/down.png')); ?>" alt="arrow">
                            </a>
                            <ul data-shop-dropdown class="absolute left-0 top-full z-[99999] mt-0 w-[275px] max-w-[90vw] origin-top-left border border-solid border-[#D5DFE4] bg-white py-2 shadow-xl rounded-md opacity-0 invisible pointer-events-none translate-y-2 scale-95 transition-all duration-200 ease-out group-hover/shop:opacity-100 group-hover/shop:visible group-hover/shop:pointer-events-auto group-hover/shop:translate-y-0 group-hover/shop:scale-100 group-focus-within/shop:opacity-100 group-focus-within/shop:visible group-focus-within/shop:pointer-events-auto group-focus-within/shop:translate-y-0 group-focus-within/shop:scale-100">
                                <li><a href="<?php echo e(route('shop')); ?>" class="block px-6 py-2.5 text-[#425A8B] hover:text-[#FD9636] hover:bg-[#F8FAFC] transition-colors duration-200">Shop Grid 2</a></li>
                                <li><a href="<?php echo e(route('product')); ?>" class="block px-6 py-2.5 text-[#425A8B] hover:text-[#FD9636] hover:bg-[#F8FAFC] transition-colors duration-200">Single Product</a></li>
                                <li><a href="<?php echo e(route('checkout')); ?>" class="block px-6 py-2.5 text-[#425A8B] hover:text-[#FD9636] hover:bg-[#F8FAFC] transition-colors duration-200">Shop Checkout</a></li>
                                <li><a href="<?php echo e(url('/shop?view=compare')); ?>" class="block px-6 py-2.5 text-[#425A8B] hover:text-[#FD9636] hover:bg-[#F8FAFC] transition-colors duration-200">Shop Compare</a></li>
                                <li><a href="<?php echo e(url('/shop?view=wishlist')); ?>" class="block px-6 py-2.5 text-[#425A8B] hover:text-[#FD9636] hover:bg-[#F8FAFC] transition-colors duration-200">Shop Wishlist</a></li>
                                <li><a href="<?php echo e(route('shop')); ?>" class="block px-6 py-2.5 text-[#425A8B] hover:text-[#FD9636] hover:bg-[#F8FAFC] transition-colors duration-200">Shop Cart</a></li>
                                <li><a href="<?php echo e(route('shop')); ?>" class="block px-6 py-2.5 text-[#425A8B] hover:text-[#FD9636] hover:bg-[#F8FAFC] transition-colors duration-200">Shop Grid 2</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="hover:text-[#FD9636] duration-300 inline-block">
                                Vendors
                                <img class="inline-block" src="<?php echo e(asset('assets/down.png')); ?>" alt="arrow">
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-[#FD9636] duration-300 inline-block">
                                Pages
                                <img class="inline-block" src="<?php echo e(asset('assets/down.png')); ?>" alt="arrow">
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-[#FD9636] duration-300 inline-block">
                                Blog
                                <img class="inline-block" src="<?php echo e(asset('assets/down.png')); ?>" alt="arrow">
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-[#FD9636] duration-300 inline-block">
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
                <img class="h-11" src="<?php echo e(asset('assets/wishlist.png')); ?>" alt="wishlist">
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
                            <button type="button" id="cart-view-cart" class="cart-view-button">View cart</button>
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
    <div class="category-sidebar absolute top-12 h-[100vh]" id="category-sidebar">
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
                    <button type="button" class="category-icon-button" data-category="4" aria-label="Smart watches" title="Smart watches">
                        <img src="<?php echo e(asset('assets/clock.svg')); ?>" alt="" loading="lazy"></button>
                </li>
                <li>
                    <button type="button" class="category-icon-button" data-category="5" aria-label="Wired Headphone" title="Wired Headphone">
                        <img src="<?php echo e(asset('assets/airpods.svg')); ?>" alt="" loading="lazy"></button>
                </li>
                <li>
                    <button type="button" class="category-icon-button" data-category="6" aria-label="Mouse & Keyboard" title="Mouse & Keyboard">
                        <img src="<?php echo e(asset('assets/mouse.svg')); ?>" alt="" loading="lazy"></button>
                </li>
                <li>
                    <button type="button" class="category-icon-button" data-category="7" aria-label="Headphone" title="Headphone">
                        <img src="<?php echo e(asset('assets/music-play.svg')); ?>" alt="" loading="lazy"></button>
                </li>
                <li>
                    <button type="button" class="category-icon-button" data-category="8" aria-label="Bluetooth devices" title="Bluetooth devices">
                        <img src="<?php echo e(asset('assets/bluetooth.svg')); ?>" alt="" loading="lazy"></button>
                </li>
                <li>
                    <button type="button" class="category-icon-button" data-category="9" aria-label="Cloud Software" title="Cloud Software">
                        <img src="<?php echo e(asset('assets/clound.svg')); ?>" alt="" loading="lazy"></button>
                </li>
                <li>
                    <button type="button" class="category-icon-button" data-category="10" aria-label="Electric accessories" title="Electric accessories">
                        <img src="<?php echo e(asset('assets/electricity.svg')); ?>" alt="" loading="lazy"></button>
                </li>
                <li>
                    <button type="button" class="category-icon-button" data-category="11" aria-label="Mainboard & CPU" title="Mainboard & CPU">
                        <img src="<?php echo e(asset('assets/cpu.svg')); ?>" alt="" loading="lazy"></button>
                </li>
                <li>
                    <button type="button" class="category-icon-button" data-category="12" aria-label="Desktop PC" title="Desktop PC">
                        <img src="<?php echo e(asset('assets/devices.svg')); ?>" alt="" loading="lazy"></button>
                </li>
                <li>
                    <button type="button" class="category-icon-button" data-category="13" aria-label="Speaker" title="Speaker">
                        <img src="<?php echo e(asset('assets/driver.svg')); ?>" alt="" loading="lazy"></button>
                </li>
                <li>
                    <button type="button" class="category-icon-button" data-category="14" aria-label="Bluetooth Headphone" title="Bluetooth Headphone"><img src="<?php echo e(asset('assets/airpod.svg')); ?>" alt="" loading="lazy"></button>
                </li>
                <li>
                    <button type="button" class="category-icon-button" data-category="15" aria-label="Computer Decor" title="Computer Decor">
                        <img src="<?php echo e(asset('assets/lamp.svg')); ?>" alt="" loading="lazy"></button>
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

    <div class="container bg-[#F0F3F8] py-4 mb-[30px] max-[576px]:max-w-[1360px] max-[576px]:px-[20px]">
        <div class="max-w-[1360px] flex gap-3 mx-auto">
            <a href="#" class="text-[12px] text-[#0E224D] hover:text-[#0BA9ED] duration-300">Home ></a>
            <a href="#" class="text-[12px] text-[#8C9EC5] hover:text-[#0BA9ED] duration-300">Shop ></a>
            <a href="#" class="text-[12px] text-[#8C9EC5] hover:text-[#0BA9ED] duration-300">Checkout</a>
        </div>
    </div>

    <!--  -->
    <main class="mx-auto w-full max-w-[1360px] pb-16  font-['DM_Sans'] text-[#425A8B] max-md:px-4 max-md:pt-7">

        <form id="checkout-form" class="flex gap-6">

            <section class="w-[50%] max-[576px]:w-full">

                <!-- border-section -->
                <section class="rounded border border-solid border-[#DDE4F0] p-5">
                    <div class="flex gap-[10px]">
                        <a href="#" class="rounded w-[200px] py-[5px] px-[10px] border-solid border border-[#DDE4F0]">
                            <img class="h-[40px]" src="<?php echo e(asset('assets/images.png')); ?>" alt="" loading="lazy"></a>
                        <a href="#" class="w-[200px] rounded py-[5px] px-[10px] border-solid border border-[#DDE4F0]">
                            <img class="h-[40px] w-[140px]" src="<?php echo e(asset('assets/1edf2de8-2660-43a1-bad1-0f8491082f23.png')); ?>" alt="" loading="lazy">
                        </a>
                        <a href="#" class="w-[200px] rounded py-[5px] px-[10px] border-solid border border-[#DDE4F0]">
                            <img class="h-[40px] w-[140px]" src="<?php echo e(asset('assets/1edf2de8-2660-43a1-bad1-0f8491082f23.png')); ?>" alt="" loading="lazy">
                        </a>
                    </div>

                    <div class="mt-5 flex gap-1 items-center justify-center">
                        <hr class="w-[300px] bg-[#DDE4F0] h-1">
                        <p class="text-[#8C9EC5] leading-6">Or</p>
                        <hr class="w-[300px] bg-[#DDE4F0] h-1">
                    </div>

                    <div class="mt-2 flex justify-between">
                        <span class="leading-6 font-bold max-[576px]:w-[100%] max-[576px]:text-sm">Contact information</span>
                        <span class="text-sm leading-5">Already have an account?
                            <a href="#" class="text-[#0BA9ED] font-[500] max-[576px]:text-sm max-[576px]:w-[100%]">Login</a>
                        </span>
                    </div>

                    <div class="email mt-5">
                        <input class="py-1.5 rounded pl-[12px] block w-[100%] border border-solid border-[#DDE4F0] text-[#B2C2E1] text-sm" type="email" placeholder="Email*">
                        <input class="mt-4 max-[576px]:inline-block" type="checkbox" name="select" id="checkbox">
                        <p class="text-sm leading-6 font-[500] inline-block ml-2 max-[576px]:w-[100%] max-[576px]:inline-block">Keep me up to date on news and exclusive offers</p>
                    </div>

                    <p class="mt-[15px] mb-5 font-bold leading-6">Shipping address</p>

                    <div class="email name">
                        <input class="inline-block w-[300px] mr-5 py-1.5 rounded pl-[12px] border border-solid border-[#DDE4F0] text-[#B2C2E1] text-sm max-[576px]:w-[100%]" type="email" placeholder="First name*">
                        <input class="inline-block w-[300px] py-1.5 rounded pl-[12px] border border-solid border-[#DDE4F0] text-[#B2C2E1] text-sm max-[576px]:mt-4 max-[576px]:w-[100%]" type="email" placeholder="Last name*">
                        <input class="mt-4 block w-[100%] py-1.5 rounded pl-[12px] border border-solid border-[#DDE4F0] text-[#B2C2E1] text-sm" type="email" placeholder="Address 1*">
                        <input class="mt-4 block w-[100%] py-1.5 rounded pl-[12px] border border-solid border-[#DDE4F0] text-[#B2C2E1] text-sm" type="email" placeholder="Address 2*">

                        <select name="opt" id="" class="mt-4 mr-5 text-sm text-[#6B83B6] bg-transparent inline-block w-[300px] max-[576px]:w-[100%] py-1.5 rounded pl-[12px] border border-solid border-[#DDE4F0] text-[#B2C2E1] text-sm">
                            <option class="font-[DM_Sans]" value="opt1">
                                Select an option...
                            </option>
                            <option class="font-[DM_Sans]" value="opt2">
                                option1
                            </option>
                        </select>
                        <input class="inline-block w-[300px] max-[576px]:w-[100%] max-[576px]:mt-4 py-1.5 rounded pl-[12px] border border-solid border-[#DDE4F0] text-[#B2C2E1] text-sm" type="email" placeholder="Last name*">
                        <input class="mt-[15px] inline-block w-[100%] py-1.5 rounded pl-[12px] border border-solid border-[#DDE4F0] text-[#B2C2E1] text-sm" type="email" placeholder="PostCode / ZIP*">
                        <input class="inline-block mb-5 mr-5 w-[300px] max-[576px]:w-[100%] max-[576px]:mt-4 py-1.5 rounded pl-[12px] border border-solid border-[#DDE4F0] text-[#B2C2E1] text-sm" type="email" placeholder="Company name">
                        <input class="mt-[15px] mb-5 inline-block w-[300px] py-1.5 rounded pl-[12px] border border-solid border-[#DDE4F0] text-[#B2C2E1] text-sm max-[576px]:m-0 max-[576px]:mb-4 max-[576px]:w-[100%]" type="email" placeholder="Phone*">
                        <textarea rows="5" class="email py-1.5 rounded pl-[12px] border-solid border border-[#DDE4F0] text-[#B2C2E1] text-sm block w-[100%] text-left" name="messagebox" id="message" placeholder="Additional Information">
                    </textarea>
                    </div>
                </section>

                <a href="#" class="inline-block mt-4 text-sm capitalize font-bold text-[#0BA9ED] duration-300 hover:text-black">
                    <svg class="inline-block" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M19 12H5" />
                        <polyline points="12 19 5 12 12 5" />
                    </svg>
                    Return to cart</a>

                <a href="#" class="duration-300 hover:border hover:border-solid hover:border-black hover:text-[#425A8B] hover:bg-transparent mt-4 float-right text-end justify-end items-end ml-auto inline-block bg-[#425A8B] py-[7px] px-[22px] rounded text-sm leading-5 font-bold text-white border-solid border border-[#8C9EC5] max-[576px]:px-[20px] max-[576px]:text-sm max-[576px]:font-[500] max-[576px]:tracking-[1px]">Place an Order
                    <svg
                        class="inline-block"
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        style="transform: rotate(180deg);">
                        <path d="M19 12H5" />
                        <polyline points="12 19 5 12 12 5" />
                    </svg>
                </a>
            </section>
            <!-- section end here -->


            <aside class="min-w-0 w-[50%] max-[576px]:w-full rounded border border-[#DDE4F0] p-5 max-md:p-5">
                <p class="mb-5 leading-6 font-bold">Your Order</p>
                <div id="checkout-order-items" class="divide-y divide-[#EDF0F4]">
                    <p class="py-4 text-sm text-[#7184A6]">Loading your cart…</p>
                </div>
                <div class="checkout-coupon mt-5 flex gap-2">
                    <label for="checkout-coupon" class="sr-only">Coupon code
                    </label>
                    <input id="checkout-coupon" type="text" autocomplete="off" placeholder="Enter your coupon" class="capitalize min-w-0 flex-1 rounded-md border border-[#D5DFE4] px-4 py-3 text-sm outline-none focus:border-[#425A8B] focus:ring-2 focus:ring-[#425A8B]/10">
                    <button id="checkout-apply-coupon" type="button" class="shrink-0 rounded-md bg-[#425A8B] px-5 py-3 text-sm font-bold text-white transition hover:bg-[#344D7E]">Apply</button>
                </div>
                <p id="checkout-coupon-message" aria-live="polite" class="mt-2 text-xs leading-5 text-[#7184A6]">
                </p>
                <div class="mt-5 space-y-4 border-t border-[#E5EAF2] pt-5 text-sm">
                    <div class="flex items-center justify-between gap-4">
                        <span class="text-[#425A8B] font-bold text-[16px] leading-6 font-bold">Subtotal</span>
                        <strong id="checkout-subtotal" class="font-semibold text-[#253D69]">$0.00</strong>
                    </div>
                    <div class="flex items-center justify-between gap-4">
                        <span class="text-[#425A8B] font-bold text-[16px] leading-6 font-bold">Shipping</span>
                        <strong id="checkout-shipping" class="font-semibold text-[#253D69]">—
                        </strong>
                    </div>
                    <div class="flex items-center justify-between gap-4 border-t border-[#E5EAF2] pt-4 text-base">
                        <span class="font-bold text-[#253D69]">Total</span>
                        <strong id="checkout-total" class="text-xl font-bold text-[#253D69]">$0.00</strong>
                    </div>
                </div>
                <p id="checkout-feedback" aria-live="polite" class="mt-4 text-sm leading-5 text-[#7184A6]"></p>
                <button id="checkout-place-order" type="submit" class="mt-5 w-full rounded-md bg-[#5BC694] px-5 py-4 hidden text-sm font-bold text-white transition hover:bg-[#46B783] disabled:cursor-not-allowed disabled:opacity-50">Place an Order</button>
            </aside>
        </form>
    </main>
    <!-- main container end -->

    <!--  -->
    <section class="max-w-[1360px] mt-10 mb-5 mx-auto flex gap-[15px] max-[576px]:flex-wrap max-[576px]:px-[20px]">
        <div class="icon-box w-[20%] rounded duration-300 hover:bg-[#F4F7FC] border border-[#D5DFE4] border-solid hover:border-[#8C9EC5] flex items-center gap-3 p-[15px]">
            <div>
                <img src="<?php echo e(asset('assets/delivery.svg')); ?>" alt="Logo">
            </div>
            <div>
                <h2 class="text-[20px] leading-7 font-bold">Free Delivery</h2>
                <p class="text-sm text-[#8C9EC5] leading-5">From all orders over $10</p>
            </div>
        </div>

        <div class="icon-box w-[20%] rounded duration-300 hover:bg-[#F4F7FC] border border-[#D5DFE4] border-solid hover:border-[#8C9EC5] flex items-center gap-3 p-[15px]">
            <div>
                <img src="<?php echo e(asset('assets/support.svg')); ?>" alt="Logo">
            </div>
            <div>
                <h2 class="text-[20px] leading-7 font-bold">Support 24/7</h2>
                <p class="text-sm text-[#8C9EC5] leading-5">Shop with an expert</p>
            </div>
        </div>

        <div class="icon-box w-[20%] rounded duration-300 hover:bg-[#F4F7FC] border border-[#D5DFE4] border-solid hover:border-[#8C9EC5] flex items-center gap-3 p-[15px]">
            <div>
                <img src="<?php echo e(asset('assets/voucher.svg')); ?>" alt="Logo">
            </div>
            <div>
                <h2 class="text-[20px] leading-7 font-bold">Gift voucher</h2>
                <p class="text-sm text-[#8C9EC5] leading-5">Refer a friend</p>
            </div>
        </div>

        <div class="icon-box w-[20%] rounded duration-300 hover:bg-[#F4F7FC] border border-[#D5DFE4] border-solid hover:border-[#8C9EC5] flex items-center gap-3 p-[15px]">
            <div>
                <img src="<?php echo e(asset('assets/return.svg')); ?>" alt="Logo">
            </div>
            <div>
                <h2 class="text-[20px] leading-7 font-bold">Return & Refund</h2>
                <p class="text-sm text-[#8C9EC5] leading-5">Free return over $200</p>
            </div>
        </div>

        <div class="icon-box w-[20%] rounded duration-300 hover:bg-[#F4F7FC] border border-[#D5DFE4] border-solid hover:border-[#8C9EC5] flex items-center gap-3 p-[15px]">
            <div>
                <img src="<?php echo e(asset('assets/secure.svg')); ?>" alt="Logo">
            </div>
            <div>
                <h2 class="text-[20px] leading-7 font-bold">Secure payment</h2>
                <p class="text-sm text-[#8C9EC5] leading-5">100% Protected</p>
            </div>
        </div>
    </section>


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
        <div class="mx-auto max-w-[1800px] px-5 pb-0 pt-[62px] sm:px-10 lg:px-[65px]">

            <!-- Logo and navigation -->
            <div class="mb-[31px] flex flex-wrap items-end gap-x-[38px] gap-y-5">
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

                    <span class="relative text-[43px] font-bold leading-none tracking-[-2px] text-[#405a91]">
                        Ecom
                        <sup class="absolute -right-[16px] -top-[8px] text-[20px] font-normal tracking-normal">®</sup>
                    </span>
                </a>

                <nav class="flex flex-wrap items-center gap-x-[30px] gap-y-3 pb-[3px] text-xs leading-[18px] duration-300 text-[#0E224D] font-[DM_Sans]">
                    <a href="#" class="hover:text-[#0BA9ED]">EcomMarket.com</a>
                    <a href="#" class="hover:text-[#0BA9ED]">Ecom Partners</a>
                    <a href="#" class="hover:text-[#0BA9ED]">Ecom Business</a>
                    <a href="#" class="hover:text-[#0BA9ED]">Ecom Factory</a>
                </nav>
            </div>

            <!-- Electronic categories -->
            <div class="font-[DM_Sans] mb-[26px] flex items-start gap-[15px] text-[16px] leading-[18px]">
                <h3 class="shrink-0 font-bold text-[#0E224D]">Electronic:</h3>

                <div class="flex min-w-0 flex-1 flex-wrap items-center max-[576px]:flex-wrap">
                    <a href="#" class="text-[#425A8B] text-sm leading-4 border-r border-[#8ca4d2] pr-[18px] max-[576px]:w-[100%] max-[576px]:text-sm">Cell Phones</a>
                    <a href="#" class="text-[#425A8B] text-sm leading-4 border-r border-[#8ca4d2] px-[18px]">Headphones</a>
                    <a href="#" class="text-[#425A8B] text-sm leading-4 border-r border-[#8ca4d2] px-[18px]">Television &amp; Video</a>
                    <a href="#" class="text-[#425A8B] text-sm leading-4 border-r border-[#8ca4d2] px-[18px]">Game Controller</a>
                    <a href="#" class="text-[#425A8B] text-sm leading-4 border-r border-[#8ca4d2] px-[18px]">Apple Watch</a>
                    <a href="#" class="text-[#425A8B] text-sm leading-4 border-r border-[#8ca4d2] px-[18px]">HTC</a>
                    <a href="#" class="text-[#425A8B] text-sm leading-4 border-r border-[#8ca4d2] px-[18px]">Ipad</a>
                    <a href="#" class="text-[#425A8B] text-sm leading-4 border-r border-[#8ca4d2] px-[18px]">Keyboard</a>
                    <a href="#" class="text-[#425A8B] text-sm leading-4 border-r border-[#8ca4d2] px-[18px]">Samsung</a>
                    <a href="#" class="text-[#425A8B] text-sm leading-4 border-r border-[#8ca4d2] px-[18px]">Wireless Speaker</a>
                    <a href="#" class="text-[#425A8B] text-sm leading-4 border-r border-[#8ca4d2] px-[18px]">Samsung Galaxy</a>
                    <a href="#" class="text-[#425A8B] text-sm leading-4 border-r border-[#8ca4d2] px-[18px]">Gaming Mouse</a>
                    <a href="#" class="text-[#425A8B] text-sm leading-4 border-r border-[#8ca4d2] px-[18px]">eBook Readers</a>
                    <a href="#" class="text-[#425A8B] text-sm leading-4 border-r border-[#8ca4d2] px-[18px]">Service Plans</a>
                    <a href="#" class="text-[#425A8B] text-sm leading-4 border-r border-[#8ca4d2] px-[18px]">Home Audio</a>
                    <a href="#" class="text-[#425A8B] text-sm leading-4 border-r border-[#8ca4d2] px-[18px]">Office Electronics</a>
                    <a href="#" class="text-[#425A8B] text-sm leading-4 border-r border-[#8ca4d2] px-[18px]">Lenovo</a>
                    <a href="#" class="text-[#425A8B] text-sm leading-4 border-r border-[#8ca4d2] px-[18px]">Mackbook Pro M1</a>
                    <a href="#" class="px-[18px]">HD Videos Player</a>
                </div>
            </div>

            <!-- Furniture categories -->
            <div class="mb-[26px] flex items-start gap-[15px] text-[16px] leading-[18px]">
                <h3 class="shrink-0 font-bold text-[#0E224D]">Furniture:</h3>

                <div class="flex min-w-0 flex-1 flex-wrap items-center">
                    <a href="#" class="text-[#425A8B] text-sm leading-4 border-r border-[#8ca4d2] pr-[18px]">Sofa</a>
                    <a href="#" class="text-[#425A8B] text-sm leading-4 border-r border-[#8ca4d2] px-[18px]">Chair</a>
                    <a href="#" class="text-[#425A8B] text-sm leading-4 border-r border-[#8ca4d2] px-[18px]">Dining Table</a>
                    <a href="#" class="text-[#425A8B] text-sm leading-4 border-r border-[#8ca4d2] px-[18px]">Living Room</a>
                    <a href="#" class="text-[#425A8B] text-sm leading-4 border-r border-[#8ca4d2] px-[18px]">Table Lamp</a>
                    <a href="#" class="text-[#425A8B] text-sm leading-4 border-r border-[#8ca4d2] px-[18px]">Night Stand</a>
                    <a href="#" class="text-[#425A8B] text-sm leading-4 border-r border-[#8ca4d2] px-[18px]">Computer Desk</a>
                    <a href="#" class="text-[#425A8B] text-sm leading-4 border-r border-[#8ca4d2] px-[18px]">Bar Table</a>
                    <a href="#" class="text-[#425A8B] text-sm leading-4 border-r border-[#8ca4d2] px-[18px]">Pillow</a>
                    <a href="#" class="text-[#425A8B] text-sm leading-4 border-r border-[#8ca4d2] px-[18px]">Radio</a>
                    <a href="#" class="text-[#425A8B] text-sm leading-4 border-r border-[#8ca4d2] px-[18px]">Clock</a>
                    <a href="#" class="text-[#425A8B] text-sm leading-4 border-r border-[#8ca4d2] px-[18px]">Bad Room</a>
                    <a href="#" class="text-[#425A8B] text-sm leading-4 border-r border-[#8ca4d2] px-[18px]">Stool</a>
                    <a href="#" class="text-[#425A8B] text-sm leading-4 border-r border-[#8ca4d2] px-[18px]">Television</a>
                    <a href="#" class="text-[#425A8B] text-sm leading-4 border-r border-[#8ca4d2] px-[18px]">wardrobe</a>
                    <a href="#" class="text-[#425A8B] text-sm leading-4 border-r border-[#8ca4d2] px-[18px]">Living Room Tables</a>
                    <a href="#" class="text-[#425A8B] text-sm leading-4 border-r border-[#8ca4d2] px-[18px]">Dressers</a>
                    <a href="#" class="text-[#425A8B] text-sm leading-4 border-r border-[#8ca4d2] px-[18px]">Patio Sofas</a>
                    <a href="#" class="text-[#425A8B] text-sm leading-4 border-r border-[#8ca4d2] px-[18px]">Nursery</a>
                    <a href="#" class="text-[#425A8B] text-sm leading-4 border-r border-[#8ca4d2] px-[18px]">Kitchen</a>
                    <a href="#" class="text-[#425A8B] text-sm leading-4 border-r border-[#8ca4d2] px-[18px]">Accent Furniture</a>
                    <a href="#" class="px-[18px]">Replacement Parts</a>
                </div>
            </div>

            <!-- Divider -->
            <div class="h-px w-full bg-[#cbd8f0]"></div>

            <!-- Copyright and links -->
            <div class="flex min-h-[98px] flex-wrap items-center justify-between gap-x-8 gap-[15px] py-6 text-[17px]">
                <p class="m-0 text-sm leading-5 max-[576px]:text-sm">Copyright © 2022 Ecom Market. All rights reserved.</p>

                <nav class="flex flex-wrap items-center gap-x-[40px] gap-y-4">
                    <a href="#" class="text-sm hover:text-[#0BA9ED] duration-300">Conditions of Use</a>
                    <a href="#" class="text-sm hover:text-[#0BA9ED] duration-300">Privacy Notice</a>
                    <a href="#" class="text-sm hover:text-[#0BA9ED] duration-300">Interest-Based Ads</a>
                </nav>
            </div>

        </div>

        <!-- Back to top -->
        <button
            type="button"
            aria-label="Back to top"
            onclick="window.scrollTo({top: 0, behavior: 'smooth'})"
            class="fixed bottom-[36px] right-[34px] flex h-[54px] w-[54px] items-center justify-center rounded-full bg-[#405b91] text-[29px] text-white hover:bg-[#304777]">↑</button>
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

    <!--script code  -->

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
            /* Banner slider: transform-only animation prevents the fade/blank-screen bug. */
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

                    /* Put the incoming slide just outside the right edge before animating it. */
                    newSlide.classList.remove('active', 'slide-out-left', 'slide-entering');
                    newSlide.style.transition = 'none';
                    newSlide.style.transform = 'translateX(100%)';
                    newSlide.style.opacity = '1';
                    newSlide.style.visibility = 'visible';
                    newSlide.style.zIndex = '3';
                    void newSlide.offsetWidth;

                    /* Clear inline overrides so the CSS transform transition can run. */
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

            /* Mobile navigation drawer: clone existing links instead of duplicating site content. */
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
            const tabs = document.querySelectorAll('.product-tab');
            const cards = document.querySelectorAll('.best-product-card');
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

        (() => {
            const storageKey = 'ecom-demo-cart';
            const itemsNode = document.getElementById('checkout-order-items');
            const subtotalNode = document.getElementById('checkout-subtotal');
            const shippingNode = document.getElementById('checkout-shipping');
            const totalNode = document.getElementById('checkout-total');
            const feedbackNode = document.getElementById('checkout-feedback');
            const couponMessage = document.getElementById('checkout-coupon-message');
            const placeOrderButton = document.getElementById('checkout-place-order');
            const form = document.getElementById('checkout-form');
            let cart = [];
            let couponApplied = false;
            try {
                const saved = JSON.parse(localStorage.getItem(storageKey) || '[]');
                if (Array.isArray(saved)) cart = saved.filter(item => item && item.id && item.name && Number.isFinite(Number(item.price)) && Number(item.quantity) > 0);
            } catch (error) {
                cart = [];
            }
            const money = value => '$' + Number(value || 0).toLocaleString('en-US', {
                minimumFractionDigits: 2,
                maximumFractionDigits: 2
            });
            const subtotal = () => cart.reduce((sum, item) => sum + Number(item.price) * Number(item.quantity), 0);
            const shipping = () => !cart.length ? 0 : (subtotal() >= 75 ? 0 : 5.99);

            function renderOrder() {
                itemsNode.innerHTML = '';
                if (!cart.length) {
                    itemsNode.innerHTML = '<p class="py-4 text-sm leading-6 text-[#7184A6]">Your cart is empty. <a class="font-semibold text-[#425A8B] hover:text-[#FD9636]" href="<?php echo e(url(' / ')); ?>">Return to the shop</a> and add a product before checkout.</p>';
                    placeOrderButton.disabled = true;
                } else {
                    placeOrderButton.disabled = false;
                    cart.forEach(item => {
                        const row = document.createElement('article');
                        row.className = 'grid grid-cols-[64px_minmax(0,1fr)_auto] items-center gap-3 py-4 max-sm:grid-cols-[54px_minmax(0,1fr)_auto] max-sm:gap-2';
                        const image = document.createElement('img');
                        image.className = 'h-16 w-16 rounded-md border border-[#EDF0F4] bg-[#F8FAFD] object-contain p-1 max-sm:h-[54px] max-sm:w-[54px]';
                        image.src = item.image || '';
                        image.alt = item.name;
                        image.loading = 'lazy';
                        const info = document.createElement('div');
                        const name = document.createElement('h3');
                        name.className = 'text-sm font-semibold leading-5 text-[#253D69]';
                        name.textContent = item.name;
                        const qty = document.createElement('p');
                        qty.className = 'mt-1 text-xs leading-4 text-[#8C9EC5]';
                        qty.textContent = 'Qty: ' + Number(item.quantity);
                        info.append(name, qty);
                        const price = document.createElement('strong');
                        price.className = 'whitespace-nowrap text-sm font-bold text-[#253D69] max-sm:text-xs';
                        price.textContent = money(Number(item.price) * Number(item.quantity));
                        row.append(image, info, price);
                        itemsNode.appendChild(row);
                    });
                }
                const sub = subtotal();
                const ship = shipping();
                const discount = couponApplied ? sub * 0.10 : 0;
                subtotalNode.textContent = money(sub - discount);
                shippingNode.textContent = ship === 0 ? (cart.length ? 'Free' : '—') : money(ship);
                totalNode.textContent = money(Math.max(0, sub - discount) + ship);
            }
            document.getElementById('checkout-apply-coupon').addEventListener('click', () => {
                const code = document.getElementById('checkout-coupon').value.trim().toUpperCase();
                if (code === 'SAVE10' && cart.length) {
                    couponApplied = true;
                    couponMessage.textContent = 'Coupon applied: 10% off your subtotal.';
                } else {
                    couponApplied = false;
                    couponMessage.textContent = code ? 'Invalid coupon code. Try SAVE10.' : 'Enter a coupon code first.';
                }
                renderOrder();
            });
            form.addEventListener('submit', event => {
                event.preventDefault();
                if (!cart.length) {
                    feedbackNode.textContent = 'Your cart is empty. Add a product before placing an order.';
                    return;
                }
                if (!form.reportValidity()) return;
                feedbackNode.textContent = 'Checkout details validated. This demo does not submit a real order or process payment.';
            });
            renderOrder();
        })();
    </script>

<script>
(function () {
  document.querySelectorAll('li.group\/shop').forEach(function (item) {
    var menu = item.querySelector('[data-shop-dropdown]');
    var trigger = item.querySelector(':scope > a');
    if (!menu || !trigger) return;
    function openMenu() { menu.classList.remove('opacity-0','invisible','pointer-events-none','translate-y-2','scale-95'); menu.classList.add('opacity-100','visible','pointer-events-auto','translate-y-0','scale-100'); }
    function closeMenu() { menu.classList.add('opacity-0','invisible','pointer-events-none','translate-y-2','scale-95'); menu.classList.remove('opacity-100','visible','pointer-events-auto','translate-y-0','scale-100'); }
    item.addEventListener('mouseenter', openMenu);
    item.addEventListener('mouseleave', closeMenu);
    item.addEventListener('focusin', openMenu);
    item.addEventListener('focusout', function (e) { if (!item.contains(e.relatedTarget)) closeMenu(); });
    trigger.addEventListener('click', function (e) { if (window.matchMedia('(hover: none)').matches) { e.preventDefault(); if (menu.classList.contains('invisible')) openMenu(); else closeMenu(); } });
  });
})();
</script>

<script src="<?php echo e(asset('js/product-catalog.js')); ?>"></script>
<script src="<?php echo e(asset('js/storefront.js')); ?>"></script>
</body>

</html>


<!-- & "C:\wamp64\bin\php\php8.3.28\php.exe" artisan serve --><?php /**PATH C:\wamp64\www\ecom-demo-wishlist-loader-fixed\ecom-demo-updated\ecom-demo\resources\views/checkout.blade.php ENDPATH**/ ?>