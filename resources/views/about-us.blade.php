<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- google fonts linked here -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @vite(['resources/js/app.js'])

    <!-- tailwind css linked here -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- icon linked here -->
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/3.0.0/uicons-regular-rounded/css/uicons-regular-rounded.css">

    <style>
        body {
            font-family: 'DM Sans', sans-serif;
        }
    </style>
</head>

<body>
    <div class="top-header relative z-13">
        <nav>
            <ul>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="http://127.0.0.1:8000/shop">Open a shop</a></li>
            </ul>
        </nav>
        <p>Free shipping for all orders over <strong>$75.00</strong></p>

        <div class="flex gap-4">
            <p>Need help? Call Us: <span class="text-[#5BC694] font-bold text-sm">+1800 900</span></p>
            <div class="flex gap-4">
                <span class="flex items-center text-xs gap-2">
                    <svg width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <rect y="0.5" width="18" height="11" fill="url(#pattern0)"></rect>
                        <defs>
                            <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                <use xlink:href="#image0_123_4733" transform="translate(-0.111111) scale(0.00244444 0.004)"></use>
                            </pattern>
                            <image id="image0_123_4733" width="500" height="250" xlink:href="data:image/png;base64,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QAIUOnOABEiABEiABBQgQKErEEQOgQRIgARIgAQodOYACZAACZAACShAgEJXIIgcAgmQAAmQAAlQ6MwBEiABEiABElCAAIWuQBA5BBIgARIgARKg0JkDJEACJEACJKAAAQpdgSByCCRAAiRAAiRAoTMHSIAESIAESEABAhS6AkHkEEiABEiABEiAQmcOkAAJkAAJkIACBCh0BYLIIZAACZAACZAAhc4cIAESIAESIAEFCFDoCgSRQyABEiABEiABCp05QAIkQAIkQAIKEKDQFQgih0ACJEACJEACFDpzgARIgARIgAQUIEChKxBEDoEESIAESIAEKHTmAAmQAAmQAAkoQIBCVyCIHAIJkAAJkAAJUOjMARIgARIgARJQgACFrkAQOQQSIAESIAESoNCZAyRAAiRAAiSgAAEKXYEgcggkQAIkQAIkQKEzB0iABEiABEhAAQIUugJB5BBIgARIgARIgEJnDpAACZAACZCAAgQodAWCyCGQAAmQAAmQAIXOHCABEiABEiABBQhQ6AoEkUMgARIgARIgAQqdOUACJEACJEACChCg0BUIIodAAiRAAiRAAhQ6c4AESIAESIAEFCBAoSsQRA6BBEiABEiABCh05gAJkAAJkAAJKECAQlcgiBwCCZAACZAACVDozAESIAESIAESUIAAha5AEDkEEiABEiABEqDQmQMkQAIkQAIkoAABCl2BIHIIJEACJEACJEChMwdIgARIgARIQAEC1dqeolPrAZQpMBgOgQQkIxAHNA1adrZk/e6ju/E44h0RAHEAmvzj4QhIQD4C1dqHo35OocsXOPZYEQLxSBQdB2uBuC5CSf/i8cQ/SrIrhyX+gcI/EiABNwho1Vo0GKLQ3WDPNkkAQPvX3+LTi69HLBSC5vdLySTeHkbeaafg1FdWQ8vNkXIM7DQJyE4gDlRr8XicQpc9kuy/tATC+7/HvvOukF/oI0fg9K3PAlly/qNE2gRix0ngCAEKndlAAm4SaP9qPz6eNEUJoY/csoErdDeTiW1nOgEKPdMzgON3lwCF7i5/tk4CChGg0BUKJociIQEKXcKgscsk4E0CFLo348JeZQoBCj1TIs1xkoDtBCh02xGzARIYgACFzvQgARKwiACFbhFIVkMChghQ6Iaw8SISIIGjCVDozAoScJMAhe4mfbZNAkoRoNCVCicHIx0BCl26kLHD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"></image>
                        </defs>
                    </svg>
                    English
                    <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.6">
                            <path d="M8.94579 0.453125H4.79245H1.05243C0.412433 0.453125 0.0924332 1.22646 0.545767 1.6798L3.99912 5.13313C4.55245 5.68646 5.45245 5.68646 6.00579 5.13313L7.31912 3.8198L9.45912 1.6798C9.90579 1.22646 9.58579 0.453125 8.94579 0.453125Z" fill="#425A8B"></path>
                        </g>
                    </svg>
                </span>
                <span class="flex items-center text-xs uppercase gap-2">Usd
                    <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.6">
                            <path d="M8.94579 0.453125H4.79245H1.05243C0.412433 0.453125 0.0924332 1.22646 0.545767 1.6798L3.99912 5.13313C4.55245 5.68646 5.45245 5.68646 6.00579 5.13313L7.31912 3.8198L9.45912 1.6798C9.90579 1.22646 9.58579 0.453125 8.94579 0.453125Z" fill="#425A8B"></path>
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
                    <img src="http://127.0.0.1:8000/assets/logo.svg" alt="Logo">
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

                    </select><input type="text" placeholder="Search for items" class="text-sm">

                </div>

                <nav class="nav-links">
                    <ul class="flex gap-5">
                        <li>
                            <a href="#" class="hover:text-[#FD9636] duration-300 inline-block">Home
                            </a>
                        </li>

                        <li class="relative group/shop">
                            <a href="{{ route('shop') }}" class="inline-flex items-center gap-1 text-[#425A8B] hover:text-[#FD9636] duration-300 transition-colors">
                                Shop
                                <img class="inline-block transition-transform duration-300 group-hover/shop:rotate-180" src="{{ asset('assets/down.png') }}" alt="arrow">
                            </a>
                            <ul data-shop-dropdown class="absolute left-0 top-full z-[99999] mt-0 w-[275px] max-w-[90vw] origin-top-left border border-solid border-[#D5DFE4] bg-white py-2 shadow-xl rounded-md opacity-0 invisible pointer-events-none translate-y-2 scale-95 transition-all duration-200 ease-out group-hover/shop:opacity-100 group-hover/shop:visible group-hover/shop:pointer-events-auto group-hover/shop:translate-y-0 group-hover/shop:scale-100 group-focus-within/shop:opacity-100 group-focus-within/shop:visible group-focus-within/shop:pointer-events-auto group-focus-within/shop:translate-y-0 group-focus-within/shop:scale-100">

                                <li>
                                    <a href="{{ route('shop-grid') }}" class="block px-6 py-2.5 text-[#425A8B] hover:text-[#FD9636] hover:bg-[#F8FAFC] transition-colors duration-200">Shop Grid</a>
                                </li>
                                <li>
                                    <a href="{{ route('shop-grid-2') }}" class="block px-6 py-2.5 text-[#425A8B] hover:text-[#FD9636] hover:bg-[#F8FAFC] transition-colors duration-200">Shop Grid 2</a>
                                </li>

                                <li>
                                    <a href="{{ route('product') }}" class="block px-6 py-2.5 text-[#425A8B] hover:text-[#FD9636] hover:bg-[#F8FAFC] transition-colors duration-200">Single Product</a>
                                </li>
                                <li>
                                    <a href="{{ route('checkout') }}" class="block px-6 py-2.5 text-[#425A8B] hover:text-[#FD9636] hover:bg-[#F8FAFC] transition-colors duration-200">Shop Checkout</a>
                                </li>
                                <li>
                                    <a href="{{ route('shop-compare') }}" class="block px-6 py-2.5 text-[#425A8B] hover:text-[#FD9636] hover:bg-[#F8FAFC] transition-colors duration-200">Shop Compare</a>
                                </li>
                                <li>
                                    <a href="{{ route('shop-wishlist') }}" class="block px-6 py-2.5 text-[#425A8B] hover:text-[#FD9636] hover:bg-[#F8FAFC] transition-colors duration-200">Shop Wishlist</a>
                                </li>
                            </ul>

                        </li>
                        <li>

                            <a href="{{route('shop-vendor')}}" class="hover:text-[#FD9636] duration-300 inline-block">
                                Vendors
                            </a>
                        </li>
                        <li class="relative group/pages">
                            <a href="#" class="inline-flex items-center gap-1 text-[#425A8B] hover:text-[#FD9636] duration-300 transition-colors">
                                Pages
                                <img class="inline-block transition-transform duration-300 group-hover/pages:rotate-180" src="{{ asset('assets/down.png') }}" alt="arrow">
                            </a>
                            <ul data-shop-dropdown class="absolute left-0 top-full z-[99999] mt-0 w-[275px] max-w-[90vw] origin-top-left border border-solid border-[#D5DFE4] bg-white py-2 shadow-xl rounded-md opacity-0 invisible pointer-events-none translate-y-2 scale-95 transition-all duration-200 ease-out group-hover/pages:opacity-100 group-hover/pages:visible group-hover/pages:pointer-events-auto group-hover/pages:translate-y-0 group-hover/pages:scale-100 group-focus-within/pages:opacity-100 group-focus-within/pages:visible group-focus-within/pages:pointer-events-auto group-focus-within/pages:translate-y-0 group-focus-within/pages:scale-100">
                                <li>
                                    <a href="{{ route('about-us') }}" class="block px-6 py-2.5 text-[#425A8B] hover:text-[#FD9636] hover:bg-[#F8FAFC] transition-colors duration-200">About Us</a>
                                </li>
                                <li>
                                    <a href="{{ route('contact-us') }}" class="block px-6 py-2.5 text-[#425A8B] hover:text-[#FD9636] hover:bg-[#F8FAFC] transition-colors duration-200">Contact Us</a>
                                </li>
                                <li>
                                    <a href="{{ route('career') }}" class="block px-6 py-2.5 text-[#425A8B] hover:text-[#FD9636] hover:bg-[#F8FAFC] transition-colors duration-200">Careers</a>
                                </li>
                                <li>
                                    <a href="{{ route('terms-conditions') }}" class="block px-6 py-2.5 text-[#425A8B] hover:text-[#FD9636] hover:bg-[#F8FAFC] transition-colors duration-200">Term and Condition</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="{{route('blogs')}}" class="hover:text-[#FD9636] duration-300 inline-block">
                                Blog
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('contact-us') }}" class="hover:text-[#FD9636] duration-300 inline-block">
                                Contact Us
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="shopping-icons items-center flex gap-3 justify-end">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.4" d="M12 12C14.7614 12 17 9.76142 17 7C17 4.23858 14.7614 2 12 2C9.23858 2 7 4.23858 7 7C7 9.76142 9.23858 12 12 12Z" fill="#425A8B"></path>
                    <path d="M11.9999 14.5C6.98991 14.5 2.90991 17.86 2.90991 22C2.90991 22.28 3.12991 22.5 3.40991 22.5H20.5899C20.8699 22.5 21.0899 22.28 21.0899 22C21.0899 17.86 17.0099 14.5 11.9999 14.5Z" fill="#425A8B"></path>
                </svg>
                <a href="http://127.0.0.1:8000/shop-wishlist" class="header-wishlist-link" aria-label="Wishlist" style="position:relative;display:inline-flex;align-items:center"><img class="h-11" src="http://127.0.0.1:8000/assets/wishlist.png" alt="wishlist"><span data-ecom-wishlist-count="" class="header-wishlist-count" style="position:absolute;right:-3px;top:-3px;min-width:18px;height:18px;padding:0 4px;border-radius:999px;background:#ff9b55;color:#fff;font-size:11px;line-height:18px;text-align:center;font-weight:700">3</span></a>
                <button type="button" class="header-cart-toggle" id="header-cart-toggle" aria-label="Open shopping cart" aria-controls="header-cart-panel" aria-expanded="false">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M16.25 22.5C17.2165 22.5 18 21.7165 18 20.75C18 19.7835 17.2165 19 16.25 19C15.2835 19 14.5 19.7835 14.5 20.75C14.5 21.7165 15.2835 22.5 16.25 22.5Z" fill="#425A8B"></path>
                        <path d="M8.25 22.5C9.2165 22.5 10 21.7165 10 20.75C10 19.7835 9.2165 19 8.25 19C7.2835 19 6.5 19.7835 6.5 20.75C6.5 21.7165 7.2835 22.5 8.25 22.5Z" fill="#425A8B"></path>
                        <path opacity="0.4" d="M4.84 3.94L4.64 6.39C4.6 6.86 4.97 7.25 5.44 7.25H20.75C21.17 7.25 21.52 6.92999 21.55 6.50999C21.68 4.73999 20.33 3.3 18.56 3.3H6.28999C6.18999 2.86 5.98999 2.44 5.67999 2.09C5.18999 1.56 4.49 1.25 3.77 1.25H2C1.59 1.25 1.25 1.59 1.25 2C1.25 2.41 1.59 2.75 2 2.75H3.74001C4.05001 2.75 4.34 2.88001 4.55 3.10001C4.76 3.33001 4.86 3.63 4.84 3.94Z" fill="#425A8B"></path>
                        <path d="M20.5101 8.75H5.17006C4.75006 8.75 4.41005 9.07 4.37005 9.48L4.01005 13.83C3.87005 15.53 5.21006 17 6.92006 17H18.0401C19.5401 17 20.8601 15.77 20.9701 14.27L21.3001 9.60001C21.3401 9.14001 20.9801 8.75 20.5101 8.75Z" fill="#425A8B"></path>
                    </svg>
                    <span class="cart-count-badge" id="header-cart-count" aria-live="polite">4</span>
                </button>
                <div class="header-cart-panel" id="header-cart-panel" hidden="">
                    <div class="header-cart-panel-heading">
                        <div>
                            <h2>Your Cart</h2>
                            <p><span id="cart-item-count">4</span> items in your cart</p>
                        </div>
                        <button type="button" class="cart-panel-close" id="cart-panel-close" aria-label="Close cart">×</button>
                    </div>
                    <div class="header-cart-items" id="header-cart-items">
                        <article class="header-cart-item"><img class="header-cart-item-image" src="http://127.0.0.1:8000/assets/computer.png" alt="Apple iMac" loading="lazy">
                            <div class="header-cart-item-details">
                                <h3>Apple iMac</h3>
                                <p class="header-cart-item-price">$2,856.30</p>
                                <div class="header-cart-item-actions">
                                    <div class="cart-quantity-control"><button type="button" aria-label="Decrease quantity">−</button><span>3</span><button type="button" aria-label="Increase quantity">+</button></div><button type="button" class="cart-remove-button">Remove</button>
                                </div>
                            </div>
                        </article>
                        <article class="header-cart-item"><img class="header-cart-item-image" src="http://127.0.0.1:8000/assets/smartwatches.png" alt="Apple Watch" loading="lazy">
                            <div class="header-cart-item-details">
                                <h3>Apple Watch</h3>
                                <p class="header-cart-item-price">$530.30</p>
                                <div class="header-cart-item-actions">
                                    <div class="cart-quantity-control"><button type="button" aria-label="Decrease quantity">−</button><span>1</span><button type="button" aria-label="Increase quantity">+</button></div><button type="button" class="cart-remove-button">Remove</button>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="header-cart-summary">
                        <div><span>Subtotal</span><strong id="cart-subtotal">$9,099.20</strong></div>
                        <div class="cart-summary-actions">
                            <a href="http://127.0.0.1:8000/shop" id="cart-view-cart" class="cart-view-button">View cart</a>
                            <button type="button" id="cart-checkout" class="cart-checkout-button">Checkout</button>
                        </div>
                        <button type="button" id="cart-continue-shopping" class="cart-continue-button">Continue shopping</button>
                    </div>
                </div>
                <img class="h-11" src="http://127.0.0.1:8000/assets/restore.png" alt="wishlist">
                <button type="button" id="mobile-menu-toggle" class="mobile-menu-toggle" aria-label="Open navigation menu" aria-controls="mobile-navigation-drawer" aria-expanded="false">
                    <span></span><span></span><span></span>
                </button>
            </div>
        </div>
    </header>


    <div class="breadcrumb py-4 mb-[30px] bg-[#F0F3F8] text-xs">
        <div class="max-w-[1360px] mx-auto">
            <a href="#" class="leading-[18px] text-[#000] ml-4 hover:text-[#0BA9ED] duration-200">Home &gt;</a>
            <a href="#" class="leading-[18px] ml-4 hover:text-[#0BA9ED] duration-200">Pages &gt;</a>
            <a href="#" class="leading-[18px] ml-4 hover:text-[#0BA9ED] duration-200">About Us</a>
        </div>
    </div>

    <div class="category-sidebar absolute top-12" id="category-sidebar">
        <nav aria-label="Product categories">
            <ul class="category-icon-list">
                <li><button type="button" class="category-icon-button" data-category="0" aria-label="All categories" title="All categories" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#C5CDDF" aria-hidden="true">
                            <circle cx="7" cy="7" r="4"></circle>
                            <circle cx="17" cy="7" r="4"></circle>
                            <circle cx="7" cy="17" r="4"></circle>
                            <circle cx="17" cy="17" r="4"></circle>
                        </svg></button></li>
                <li>
                    <button type="button" class="category-icon-button" data-category="1" aria-label="Computers &amp; Accessories" title="Computers &amp; Accessories" aria-expanded="false">
                        <img src="http://127.0.0.1:8000/assets/monitor.svg" alt="" loading="lazy">
                    </button>
                </li>
                <li>
                    <button type="button" class="category-icon-button" data-category="2" aria-label="Cell Phones" title="Cell Phones" aria-expanded="false">
                        <img src="http://127.0.0.1:8000/assets/mobile.svg" alt="" loading="lazy">
                    </button>
                </li>
                <li>
                    <button type="button" class="category-icon-button" data-category="3" aria-label="Gaming Gadgets" title="Gaming Gadgets" aria-expanded="false">
                        <img src="http://127.0.0.1:8000/assets/game.svg" alt="" loading="lazy">
                    </button>
                </li>
                <li>
                    <button type="button" class="category-icon-button" data-category="4" aria-label="Smart watches" title="Smart watches" aria-expanded="false"><img src="http://127.0.0.1:8000/assets/clock.svg" alt="" loading="lazy">
                    </button>
                </li>
                <li>
                    <button type="button" class="category-icon-button" data-category="5" aria-label="Wired Headphone" title="Wired Headphone" aria-expanded="false"><img src="http://127.0.0.1:8000/assets/airpods.svg" alt="" loading="lazy">
                    </button>
                </li>
                <li>
                    <button type="button" class="category-icon-button" data-category="6" aria-label="Mouse &amp; Keyboard" title="Mouse &amp; Keyboard" aria-expanded="false"><img src="http://127.0.0.1:8000/assets/mouse.svg" alt="" loading="lazy">
                    </button>
                </li>
                <li>
                    <button type="button" class="category-icon-button" data-category="7" aria-label="Headphone" title="Headphone" aria-expanded="false"><img src="http://127.0.0.1:8000/assets/music-play.svg" alt="" loading="lazy">
                    </button>
                </li>
                <li>
                    <button type="button" class="category-icon-button" data-category="8" aria-label="Bluetooth devices" title="Bluetooth devices" aria-expanded="false"><img src="http://127.0.0.1:8000/assets/bluetooth.svg" alt="" loading="lazy"></button>
                </li>
                <li>
                    <button type="button" class="category-icon-button" data-category="9" aria-label="Cloud Software" title="Cloud Software" aria-expanded="false"><img src="http://127.0.0.1:8000/assets/clound.svg" alt="" loading="lazy">
                    </button>
                </li>
                <li>
                    <button type="button" class="category-icon-button" data-category="10" aria-label="Electric accessories" title="Electric accessories" aria-expanded="false"><img src="http://127.0.0.1:8000/assets/electricity.svg" alt="" loading="lazy">
                    </button>
                </li>
                <li>
                    <button type="button" class="category-icon-button" data-category="11" aria-label="Mainboard &amp; CPU" title="Mainboard &amp; CPU" aria-expanded="false"><img src="http://127.0.0.1:8000/assets/cpu.svg" alt="" loading="lazy">
                    </button>
                </li>
                <li>
                    <button type="button" class="category-icon-button" data-category="12" aria-label="Desktop PC" title="Desktop PC" aria-expanded="false"><img src="http://127.0.0.1:8000/assets/devices.svg" alt="" loading="lazy">
                    </button>
                </li>
                <li>
                    <button type="button" class="category-icon-button" data-category="13" aria-label="Speaker" title="Speaker" aria-expanded="false"><img src="http://127.0.0.1:8000/assets/driver.svg" alt="" loading="lazy">
                    </button>
                </li>
                <li>
                    <button type="button" class="category-icon-button" data-category="14" aria-label="Bluetooth Headphone" title="Bluetooth Headphone" aria-expanded="false"><img src="http://127.0.0.1:8000/assets/airpod.svg" alt="" loading="lazy">
                    </button>
                </li>
                <li>
                    <button type="button" class="category-icon-button" data-category="15" aria-label="Computer Decor" title="Computer Decor" aria-expanded="false"><img src="http://127.0.0.1:8000/assets/lamp.svg" alt="" loading="lazy">
                    </button>
                </li>
            </ul>
        </nav>
        <section class="category-mega-menu" id="category-mega-menu" aria-label="Category menu" hidden="">
            <div class="category-menu-top"><strong>Ecom®</strong><button type="button" id="category-menu-close" aria-label="Close categories">×</button></div>
            <div class="category-menu-body">
                <div class="category-menu-list" id="category-menu-list"><button type="button" class="category-menu-item"><span>Wireless Routers</span><span class="category-chevron">›</span></button><button type="button" class="category-menu-item"><span>Cool New Gadgets</span><span class="category-chevron">›</span></button><button type="button" class="category-menu-item"><span>Tech and Gadgets</span><span class="category-chevron">›</span></button><button type="button" class="category-menu-item"><span>Geek Gifts and Gadgets</span><span class="category-chevron">›</span></button><button type="button" class="category-menu-item"><span>Xbox Accessories</span><span class="category-chevron">›</span></button><button type="button" class="category-menu-item"><span>PlayStation Accessories</span><span class="category-chevron">›</span></button></div>
                <div class="category-submenu" id="category-submenu"></div>
            </div>
        </section>
    </div>

    <!-- about banner -->
    <section class="about-hero mt-16 max-w-[1100px] mx-auto max-[576px]:px-4">
        <h4 class="text-xl leading-[26px] font-bold text-[#8C9EC5]">About us</h4>
        <h2 class="text-[45px] leading-14.5 font-bold tracking-wide w-full max-[576px]:text-[32px] max-[576px]:leading-10 max-[576px]:mt-3">Global Leading Online Shop</h2>
        <div class="container flex m-0 gap-0 mt-5  max-[576px]:flex-wrap">
            <div>
                <p class="text-[#6B83B6] font-medium mb-[15px] mt-2 text-sm leading-5 max-w-[600px]">Ecom expands global footprint, delivering entertaining experiences customised to each user. Branches are expanding both in size and number.</p>
                <p class="text-[#6B83B6] font-medium mb-[15px] text-sm leading-5 max-w-[550px]">Nunc vel risus commodo viverra maecenas accumsan lacus vel facilisis. Lacus vel facilisis volutpat est velit. Urna neque viverra justo nec. Suspendisse faucibus interdum posuere lorem ipsum dolor. Ut aliquam purus sit amet luctus venenatis lectus magna fringilla. Tortor vitae purus faucibus ornare.</p>
                <p class="text-[#6B83B6] font-medium mb-[15px] text-sm leading-5 max-w-[550px]">Tempus iaculis urna id volutpat lacus laoreet. Id neque aliquam vestibulum morbi blandit. Lacinia quis vel eros donec ac odio tempor orci. Lectus sit amet est placerat in egestas erat imperdiet. Nunc congue nisi vitae suscipit. Sed adipiscing diam donec adipiscing tristique risus.</p>

                <div class="icon-box-container flex gap-12 mt-5 max-[576px]:flex-wrap max-[576px]:gap-4">
                    <div class="icon-box">
                        <div class="flex gap-3 max-[576px]:gap-2">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="20" height="20" rx="4" fill="#425A8B" />
                                <path d="M15.7251 6.23151C15.6457 6.15815 15.5513 6.09993 15.4472 6.06019C15.3432 6.02046 15.2316 6 15.1189 6C15.0062 6 14.8946 6.02046 14.7905 6.06019C14.6865 6.09993 14.592 6.15815 14.5126 6.23151L8.15139 12.0701L5.47882 9.61259C5.3964 9.53961 5.29911 9.48223 5.1925 9.44372C5.08589 9.40521 4.97205 9.38633 4.85748 9.38814C4.74291 9.38996 4.62985 9.41244 4.52476 9.45431C4.41967 9.49618 4.3246 9.55661 4.24499 9.63215C4.16538 9.7077 4.10278 9.79687 4.06077 9.89459C4.01875 9.99231 3.99815 10.0967 4.00013 10.2017C4.00211 10.3067 4.02664 10.4103 4.07232 10.5066C4.11799 10.603 4.18392 10.6901 4.26634 10.7631L7.54515 13.7685C7.62453 13.8418 7.71897 13.9001 7.82302 13.9398C7.92707 13.9795 8.03867 14 8.15139 14C8.26411 14 8.37572 13.9795 8.47977 13.9398C8.58382 13.9001 8.67826 13.8418 8.75763 13.7685L15.7251 7.38201C15.8118 7.30872 15.881 7.21977 15.9283 7.12077C15.9756 7.02176 16 6.91485 16 6.80676C16 6.69867 15.9756 6.59176 15.9283 6.49275C15.881 6.39375 15.8118 6.3048 15.7251 6.23151Z" fill="white" />
                            </svg>
                            <p class="text-sm leading-[22px] font-bold">We provide qualified & expert</p>
                        </div>

                        <div class="icon-box flex gap-3 mt-4 max-[576px]:gap-2">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="20" height="20" rx="4" fill="#425A8B" />
                                <path d="M15.7251 6.23151C15.6457 6.15815 15.5513 6.09993 15.4472 6.06019C15.3432 6.02046 15.2316 6 15.1189 6C15.0062 6 14.8946 6.02046 14.7905 6.06019C14.6865 6.09993 14.592 6.15815 14.5126 6.23151L8.15139 12.0701L5.47882 9.61259C5.3964 9.53961 5.29911 9.48223 5.1925 9.44372C5.08589 9.40521 4.97205 9.38633 4.85748 9.38814C4.74291 9.38996 4.62985 9.41244 4.52476 9.45431C4.41967 9.49618 4.3246 9.55661 4.24499 9.63215C4.16538 9.7077 4.10278 9.79687 4.06077 9.89459C4.01875 9.99231 3.99815 10.0967 4.00013 10.2017C4.00211 10.3067 4.02664 10.4103 4.07232 10.5066C4.11799 10.603 4.18392 10.6901 4.26634 10.7631L7.54515 13.7685C7.62453 13.8418 7.71897 13.9001 7.82302 13.9398C7.92707 13.9795 8.03867 14 8.15139 14C8.26411 14 8.37572 13.9795 8.47977 13.9398C8.58382 13.9001 8.67826 13.8418 8.75763 13.7685L15.7251 7.38201C15.8118 7.30872 15.881 7.21977 15.9283 7.12077C15.9756 7.02176 16 6.91485 16 6.80676C16 6.69867 15.9756 6.59176 15.9283 6.49275C15.881 6.39375 15.8118 6.3048 15.7251 6.23151Z" fill="white" />
                            </svg>
                            <p class="text-sm leading-[22px] font-bold">Neat & cleaning top Services</p>
                        </div>
                    </div>

                    <div class="icon-box">
                        <div class="flex gap-3 max-[576px]:gap-2">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="20" height="20" rx="4" fill="#425A8B" />
                                <path d="M15.7251 6.23151C15.6457 6.15815 15.5513 6.09993 15.4472 6.06019C15.3432 6.02046 15.2316 6 15.1189 6C15.0062 6 14.8946 6.02046 14.7905 6.06019C14.6865 6.09993 14.592 6.15815 14.5126 6.23151L8.15139 12.0701L5.47882 9.61259C5.3964 9.53961 5.29911 9.48223 5.1925 9.44372C5.08589 9.40521 4.97205 9.38633 4.85748 9.38814C4.74291 9.38996 4.62985 9.41244 4.52476 9.45431C4.41967 9.49618 4.3246 9.55661 4.24499 9.63215C4.16538 9.7077 4.10278 9.79687 4.06077 9.89459C4.01875 9.99231 3.99815 10.0967 4.00013 10.2017C4.00211 10.3067 4.02664 10.4103 4.07232 10.5066C4.11799 10.603 4.18392 10.6901 4.26634 10.7631L7.54515 13.7685C7.62453 13.8418 7.71897 13.9001 7.82302 13.9398C7.92707 13.9795 8.03867 14 8.15139 14C8.26411 14 8.37572 13.9795 8.47977 13.9398C8.58382 13.9001 8.67826 13.8418 8.75763 13.7685L15.7251 7.38201C15.8118 7.30872 15.881 7.21977 15.9283 7.12077C15.9756 7.02176 16 6.91485 16 6.80676C16 6.69867 15.9756 6.59176 15.9283 6.49275C15.881 6.39375 15.8118 6.3048 15.7251 6.23151Z" fill="white" />
                            </svg>
                            <p class="text-sm leading-[22px] font-bold">Modern tools & technology use</p>
                        </div>

                        <div class="flex gap-3 mt-4 max-[576px]:gap-2">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="20" height="20" rx="4" fill="#425A8B" />
                                <path d="M15.7251 6.23151C15.6457 6.15815 15.5513 6.09993 15.4472 6.06019C15.3432 6.02046 15.2316 6 15.1189 6C15.0062 6 14.8946 6.02046 14.7905 6.06019C14.6865 6.09993 14.592 6.15815 14.5126 6.23151L8.15139 12.0701L5.47882 9.61259C5.3964 9.53961 5.29911 9.48223 5.1925 9.44372C5.08589 9.40521 4.97205 9.38633 4.85748 9.38814C4.74291 9.38996 4.62985 9.41244 4.52476 9.45431C4.41967 9.49618 4.3246 9.55661 4.24499 9.63215C4.16538 9.7077 4.10278 9.79687 4.06077 9.89459C4.01875 9.99231 3.99815 10.0967 4.00013 10.2017C4.00211 10.3067 4.02664 10.4103 4.07232 10.5066C4.11799 10.603 4.18392 10.6901 4.26634 10.7631L7.54515 13.7685C7.62453 13.8418 7.71897 13.9001 7.82302 13.9398C7.92707 13.9795 8.03867 14 8.15139 14C8.26411 14 8.37572 13.9795 8.47977 13.9398C8.58382 13.9001 8.67826 13.8418 8.75763 13.7685L15.7251 7.38201C15.8118 7.30872 15.881 7.21977 15.9283 7.12077C15.9756 7.02176 16 6.91485 16 6.80676C16 6.69867 15.9756 6.59176 15.9283 6.49275C15.881 6.39375 15.8118 6.3048 15.7251 6.23151Z" fill="white" />
                            </svg>
                            <p class="text-sm leading-[22px] font-bold"> We Develop Digital Future</p>
                        </div>


                    </div>
                </div>
            </div>

            <div class="w-1/2 max-[576px]:w-full max-[576px]:mt-10">
                <img class="max-w-full max-[576px]:rounded" src="{{ asset('assets/img.png') }}" alt="arrow">
            </div>
        </div>

        <div class="counter-section flex gap-10 bg-[#F0F3F8] mt-[50px] pt-20 pb-20 px-[50px] mb-[90px] max-[576px]:flex-wrap max-[576px]:px-5 max-[576px]:py-[50px] max-[576px]:mb-[50px]">
            <div>
                <h2 class="mb-[5px] text-2xl leading-[31px] font-bold">12 Years</h2>
                <p class="text-[#6B83B6] leading-6 max-[576px]:text-sm">We’ve more than 12 years working experience.</p>
            </div>

            <div>
                <h2 class="mb-[5px] text-2xl leading-[31px] font-bold">2000+ Employee</h2>
                <p class="text-[#6B83B6] leading-6 max-[576px]:text-sm">We’ve more than 2000 employees working near you.</p>
            </div>

            <div>
                <h2 class="mb-[5px] text-2xl leading-[31px] font-bold">68 Branches</h2>
                <p class="text-[#6B83B6] leading-6 max-[576px]:text-sm">We have 68 branches across the country and are expanding</p>
            </div>

            <div>
                <h2 class="mb-[5px] text-2xl leading-[31px] font-bold">15 Countries</h2>
                <p class="text-[#6B83B6] leading-6 max-[576px]:text-sm">We are present in 15 countries around the world</p>
            </div>
        </div>

        <div class="our-team">
            <p class="text-[#8C9EC5] text-xl leading-[26px] font-bold mb-2.5">Behind The Brands</p>
            <h2 class="text-[45px] leading-[58px] font-bold mb-10 max-[576px]:text-[28px] max-[576px]:leading-9 ">The people who work at Ecom share the vision and values of our community.</h2>

            <!-- Grid container with 4 columns (25% width each) and gap between cards -->
            <div class="imagebox-container grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 max-w-[1100px] mx-auto gap-[35px]">

                <!-- Member 1 -->
                <div class="image-box">
                    <img class="w-full object-contain mb-3" src="{{ asset('assets/staft1.png') }}" alt="Ronald Richards">
                    <h3 class="text-xl leading-[26px] font-bold mt-5">Ronald Richards</h3>
                    <p class="leading-6 font-normal text-[#8C9EC5]">Chief Executive Officer</p>
                </div>

                <!-- Member 2 -->
                <div class="image-box">
                    <img class="w-full object-contain mb-3" src="{{ asset('assets/staft2.png') }}" alt="Ronald Richards">
                    <h3 class="text-xl leading-[26px] font-bold mt-5">Jenny Wilson</h3>
                    <p class="leading-6 font-normal text-[#8C9EC5]">Chief Financial Officer</p>
                </div>

                <!-- Member 3 -->
                <div class="image-box">
                    <img class="w-full object-contain mb-3" src="{{ asset('assets/staft3.png') }}" alt="Ronald Richards">
                    <h3 class="text-xl leading-[26px] font-bold mt-5">Cody Fisher</h3>
                    <p class="leading-6 font-normal text-[#8C9EC5]">Chief Operating Officer</p>
                </div>

                <!-- Member 4 -->
                <div class="image-box">
                    <img class="w-full object-contain mb-3" src="{{ asset('assets/staft4.png') }}" alt="Ronald Richards">
                    <h3 class="text-xl leading-[26px] font-bold mt-5">Jacob Jones</h3>
                    <p class="leading-6 font-normal text-[#8C9EC5]">Chief Technology Officer</p>
                </div>

                <!-- Member 5 -->
                <div class="image-box">
                    <img class="w-full object-contain mb-3" src="{{ asset('assets/staft5.png') }}" alt="Ronald Richards">
                    <h3 class="text-xl leading-[26px] font-bold mt-5">Leslie Alexander</h3>
                    <p class="leading-6 font-normal text-[#8C9EC5]">Chief Marketing Officer</p>
                </div>

                <!-- Member 6 -->
                <div class="image-box">
                    <img class="w-full object-contain mb-3" src="{{ asset('assets/staft6.png') }}" alt="Ronald Richards">
                    <h3 class="text-xl leading-[26px] font-bold mt-5">Ralph Edwards</h3>
                    <p class="leading-6 font-normal text-[#8C9EC5]">Chief Human Resources Officer</p>
                </div>

                <!-- Member 7 -->
                <div class="image-box">
                    <img class="w-full object-contain mb-3" src="{{ asset('assets/staft7.png') }}" alt="Ronald Richards">
                    <h3 class="text-xl leading-[26px] font-bold mt-5">Eleanor Pena</h3>
                    <p class="leading-6 font-normal text-[#8C9EC5]">Chief Legal Officer</p>
                </div>

                <!-- Member 8 -->
                <div class="image-box">
                    <img class="w-full object-contain mb-3" src="{{ asset('assets/staft8.png') }}" alt="Ronald Richards">
                    <h3 class="text-xl leading-[26px] font-bold mt-5">Theresa Webb</h3>
                    <p class="leading-6 font-normal text-[#8C9EC5]">Chief Product Officer</p>
                </div>

            </div>

        </div>

        <div class="our-partners mt-20">
            <p class="text-xl leading-[26px] font-bold text-[#8C9EC5]">Our Partners</p>
            <h2 class="text-[45px] leading-14.5 font-bold tracking-wide w-full max-[576px]:text-[32px] max-[576px]:leading-9 max-[576px]:mt-3">Trusted by 18.000+ Vendors</h2>

            <div id="logo-slider" class="relative mb-10 mt-10 max-[576px]:overflow-hidden">
                <div id="logo-track" class="flex gap-[30px] max-[576px]:w-full max-[576px]:gap-4">

                    <div class="flex shrink-0 items-center justify-center max-[576px]:w-1/3">
                        <svg width="214" class="max-[576px]:h-[25px] max-[576px]:w-full max-[576px]:max-w-full" height="28" viewBox="0 0 214 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.3" clip-path="url(#clip0_633_51663)">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.139648 33.654L7.57552 0.578125H20.8556L21.4631 19.0603L30.4056 0.578125H43.71L36.2376 33.654H26.6026L30.5878 15.8679L21.621 33.654H14.6955L14.3431 15.8679L9.87189 33.654H0.139648Z" fill="#425A8B" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M44.8652 5.96676H53.832L55.047 0.578125H46.0438L44.8652 5.96676Z" fill="#425A8B" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M47.61 33.6901L38.5703 33.6541L44.0986 9.15918H53.1261L47.61 33.6901Z" fill="#425A8B" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M81.8255 9.15947H89.9053L89.2006 12.1838C90.2802 10.8769 91.7254 9.91272 93.3559 9.4115C94.7142 8.95944 96.1388 8.73235 97.572 8.73942L95.4944 16.7204C94.9841 16.7204 88.7268 15.5202 86.7827 24.9533L84.7658 33.6904H76.2607L81.8255 9.15947Z" fill="#425A8B" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M77.0993 24.58C77.0993 24.7721 74.2684 34.6132 61.7781 34.3612C45.0959 34.0372 49.3971 7.55004 68.3877 8.48615C79.177 9.02622 78.6424 17.8833 78.5452 18.2673H69.2261C69.3476 17.9193 69.6635 14.2588 66.6988 14.3308C61.1705 14.4869 57.2461 28.0125 63.3211 28.1805C66.1278 28.2765 67.44 25.0601 67.6952 24.6521L77.0993 24.58Z" fill="#425A8B" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M157.192 34.4688C139.028 33.7127 144.495 7.29756 163.134 8.17366C180.654 9.02576 175.685 35.2008 157.192 34.4688ZM162.526 13.9463C156.451 12.7462 151.992 27.0639 157.739 28.228C164.13 29.5602 168.407 15.1105 162.526 13.9463V13.9463Z" fill="#425A8B" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M191.225 5.53573C188.734 5.53573 188.26 6.47184 187.847 8.33206L187.677 9.16016H192.95L194.263 3.23146H202.5L201.213 9.16016H205.477L204.262 14.8008H200.022L197.689 25.6021C197.498 26.1834 197.464 26.8042 197.592 27.4023C197.944 28.3744 201.492 27.9664 201.492 27.9664L200.119 33.583C200.119 33.583 192.902 34.3991 190.472 32.7309C189.39 31.9988 188.212 30.4867 188.941 27.2343L191.723 14.8848H186.778L182.599 33.739H173.717L177.872 14.8848H173.304L174.579 9.24417H179.014C179.816 6.0878 180.521 3.93955 182.501 2.30735C185.211 0.123096 192.221 0.975197 192.221 0.975197L191.225 5.61974V5.53573Z" fill="#425A8B" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M111.545 25.2642H128.409C128.409 25.2642 126.963 28.9486 132.261 28.9846C135.906 28.9846 137.376 24.8441 132.431 23.992C130.159 23.584 121.386 22.1318 122.37 15.447C123.197 9.96239 128.98 8.04216 135.298 8.13817C148.226 8.29419 145.796 15.7951 145.966 16.2991H137.339C137.339 16.2991 138.263 13.1548 134.375 13.1548C130.827 13.1548 129.964 16.2991 134.059 17.1512C139.028 18.2314 144.751 18.4834 145.067 24.8201C145.164 26.5843 144.107 34.8413 131.082 34.5893C119.151 34.3373 118.312 28.7926 118.64 26.1883C117.241 28.8376 115.093 31.0289 112.457 32.4966C109.822 33.9644 106.812 34.6454 103.793 34.4573C85.5677 33.8812 91.1446 7.31008 109.759 8.22218C118.264 8.63023 121.447 14.967 120.426 21.2077C120.268 22.3118 120.171 22.4679 119.843 22.5639L111.545 25.2762V25.2642ZM109.115 13.9109C103.125 12.7467 98.6533 26.9804 104.364 28.1805C110.682 29.4647 114.934 15.063 109.09 13.8868L109.115 13.9109Z" fill="#425A8B" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M210.446 9.12305C211.297 9.12305 212.113 9.45686 212.714 10.051C213.316 10.6452 213.654 11.4511 213.654 12.2914C213.654 13.1317 213.316 13.9376 212.714 14.5318C212.113 15.126 211.297 15.4598 210.446 15.4598C209.595 15.4598 208.779 15.126 208.178 14.5318C207.576 13.9376 207.238 13.1317 207.238 12.2914C207.238 11.4511 207.576 10.6452 208.178 10.051C208.779 9.45686 209.595 9.12305 210.446 9.12305V9.12305ZM210.446 9.68711C210.087 9.66295 209.727 9.71191 209.388 9.83095C209.049 9.94998 208.739 10.1366 208.476 10.3791C208.213 10.6216 208.004 10.9149 207.86 11.2408C207.717 11.5667 207.643 11.9181 207.643 12.2734C207.643 12.6287 207.717 12.9802 207.86 13.3061C208.004 13.6319 208.213 13.9252 208.476 14.1678C208.739 14.4103 209.049 14.5969 209.388 14.7159C209.727 14.8349 210.087 14.8839 210.446 14.8597C210.805 14.8839 211.165 14.8349 211.504 14.7159C211.843 14.5969 212.153 14.4103 212.416 14.1678C212.679 13.9252 212.888 13.6319 213.032 13.3061C213.175 12.9802 213.249 12.6287 213.249 12.2734C213.249 11.9181 213.175 11.5667 213.032 11.2408C212.888 10.9149 212.679 10.6216 212.416 10.3791C212.153 10.1366 211.843 9.94998 211.504 9.83095C211.165 9.71191 210.805 9.66295 210.446 9.68711V9.68711ZM211.017 12.6515L211.661 13.8516H210.895L210.385 12.6515H209.936L209.741 14.0076H209.122L209.656 10.6352H211.224C211.457 10.6946 211.663 10.8301 211.808 11.0196C211.954 11.2091 212.03 11.4415 212.025 11.6793C212.029 11.8059 212.006 11.9317 211.959 12.0496C211.913 12.1674 211.842 12.2747 211.753 12.3653C211.664 12.4559 211.557 12.5279 211.439 12.5771C211.321 12.6262 211.194 12.6515 211.066 12.6515H211.017ZM210.859 11.0793H210.215L210.057 12.1834H210.701C210.784 12.1989 210.869 12.1968 210.951 12.1773C211.033 12.1578 211.11 12.1213 211.177 12.0702C211.243 12.0191 211.298 11.9547 211.338 11.8811C211.377 11.8075 211.4 11.7265 211.406 11.6433C211.409 11.5704 211.397 11.4976 211.371 11.4293C211.345 11.361 211.306 11.2986 211.254 11.2458C211.203 11.1931 211.142 11.1512 211.074 11.1226C211.006 11.0939 210.933 11.0792 210.859 11.0793V11.0793Z" fill="#425A8B" />
                            </g>
                            <defs>
                                <clipPath id="clip0_633_51663">
                                    <rect width="213.538" height="34" fill="white" transform="translate(0.139648 0.578125)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>

                    <div class="flex shrink-0 items-center justify-center max-[576px]:w-1/3">
                        <svg width="199" class="max-[576px]:h-[25px] max-[576px]:w-full max-[576px]:max-w-full" height="28" viewBox="0 0 199 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.3" clip-path="url(#clip0_633_51664)">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M195.032 28.0342C194.437 28.0342 193.855 28.2086 193.36 28.5354C192.866 28.8622 192.48 29.3266 192.253 29.8698C192.026 30.4131 191.967 31.0107 192.084 31.587C192.201 32.1634 192.488 32.6925 192.91 33.1074C193.331 33.5223 193.868 33.8043 194.452 33.9177C195.036 34.0311 195.641 33.9708 196.19 33.7444C196.739 33.5181 197.208 33.1358 197.537 32.6461C197.866 32.1564 198.04 31.5812 198.038 30.9934C198.035 30.2076 197.718 29.455 197.154 28.9003C196.59 28.3456 195.827 28.0342 195.032 28.0342V28.0342ZM195.032 33.6192C194.508 33.6213 193.996 33.4699 193.559 33.1842C193.122 32.8986 192.781 32.4914 192.579 32.0143C192.377 31.5372 192.322 31.0116 192.422 30.5038C192.522 29.9961 192.773 29.5291 193.142 29.1619C193.51 28.7947 193.981 28.5437 194.494 28.4408C195.008 28.3378 195.54 28.3875 196.025 28.5836C196.509 28.7796 196.924 29.1132 197.217 29.5422C197.51 29.9711 197.667 30.4762 197.669 30.9934C197.67 31.3369 197.603 31.6772 197.472 31.9951C197.34 32.3129 197.146 32.602 196.901 32.8458C196.656 33.0897 196.365 33.2835 196.044 33.4162C195.724 33.5489 195.38 33.6179 195.032 33.6192V33.6192Z" fill="#425A8B" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M196.583 30.2231C196.589 30.0809 196.557 29.9397 196.49 29.8135C196.424 29.6873 196.325 29.5806 196.203 29.5041C195.949 29.3764 195.665 29.3188 195.38 29.3374H193.914V32.6614H194.325V31.1296H195.085L196.045 32.6614H196.53L195.475 31.1296C196.077 31.1296 196.53 30.8691 196.53 30.2231H196.583ZM194.958 30.8066H194.325V29.6396H195.285C195.707 29.6396 196.161 29.7021 196.161 30.2127C196.161 30.89 195.433 30.8066 194.958 30.8066V30.8066Z" fill="#425A8B" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M177.405 14.1232L183.555 7.63166C183.831 7.34334 184.015 6.9808 184.083 6.58968C184.083 6.11036 183.671 5.92281 182.374 5.92281H180.813V1.81738H197.617V5.91239H195.402C192.859 5.91239 192.385 6.29792 188.83 10.7264L179.093 21.1462V27.4711C179.093 29.0966 179.926 29.6697 182.258 29.6697H185.929V33.6188H162.405V29.628H166.076C168.449 29.628 169.24 29.0549 169.24 27.4294V21.1045L157.858 8.57987C155.97 6.3917 156.233 5.91239 150.959 5.91239V1.81738H172.236V5.91239H170.717C169.177 5.91239 168.523 6.20414 168.523 6.76682C168.523 7.32949 168.998 7.63166 169.293 8.00678L175.095 14.2587C175.231 14.4391 175.409 14.5841 175.614 14.6814C175.819 14.7786 176.045 14.8252 176.272 14.817C176.5 14.8088 176.722 14.7461 176.919 14.6343C177.116 14.5225 177.283 14.365 177.405 14.1753V14.1232Z" fill="#425A8B" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M34.6559 1.81867H39.7933V13.2805H35.0463C34.6243 10.9881 33.1791 10.1025 31.8816 8.90417C29.4975 6.74726 24.3496 4.94462 20.014 4.94462C14.3914 4.91336 9.66545 6.63264 9.66545 9.15425C9.66545 16.146 41.6816 10.5818 41.6816 23.815C41.6816 30.7234 34.8247 34.5787 22.5035 34.5787C17.4856 34.4837 12.5424 33.3588 7.98817 31.2756C6.79613 30.5879 6.28978 31.9112 6.06825 33.5784H0.793773V21.7727H5.5619C6.60625 24.7632 8.06201 25.3884 9.39118 26.6283C11.6909 28.7123 17.1869 30.244 22.2293 30.2024C29.8245 30.1294 32.4407 28.4831 32.4407 26.1074C32.4407 23.7316 29.8562 23.1585 21.533 21.8665L14.4652 20.7307C6.47966 19.4803 0.677734 17.7194 0.677734 11.4362C0.677734 4.91336 8.06201 0.818359 19.6659 0.818359C24.5289 0.818359 28.6325 1.46439 32.5567 3.70466C33.6116 4.40279 34.6665 4.48615 34.6665 1.86035L34.6559 1.81867Z" fill="#425A8B" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M134.806 20.9488L134.912 8.24701C134.912 6.57984 134.036 6.00674 131.526 6.00674H128.583V2.05762H147.307V6.00674H144.881C142.37 6.00674 141.494 6.57984 141.494 8.24701V33.8173L134.11 33.7548L110.386 11.5397V27.6696C110.386 29.2951 111.261 29.9099 113.772 29.9099H117.031V33.8173H97.5791V29.9099H100.807C103.307 29.9099 104.193 29.2951 104.193 27.6696V8.24701C104.193 6.57984 103.307 6.00674 100.807 6.00674H97.5791V2.05762H114.457L134.849 20.9488H134.806Z" fill="#425A8B" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M72.0204 0.578125C57.0831 0.578125 47.7578 7.10096 47.7578 17.5729C47.7578 27.8573 56.9882 34.3385 71.5985 34.3385C87.116 34.3385 96.1459 27.9511 96.1459 17.0519C96.1143 7.24684 86.3776 0.578125 72.0204 0.578125ZM71.6829 30.1914C63.4125 30.1914 58.6971 25.4816 58.6971 17.3333C58.6971 9.38291 63.6234 4.67313 72.0943 4.67313C80.2275 4.67313 84.9851 9.4871 84.9851 17.6667C84.9851 25.6691 80.1537 30.1705 71.6829 30.1705V30.1914Z" fill="#425A8B" />
                            </g>
                            <defs>
                                <clipPath id="clip0_633_51664">
                                    <rect width="197.361" height="34" fill="white" transform="translate(0.677734 0.578125)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>

                    <div class="flex shrink-0 items-center justify-center max-[576px]:w-1/3">
                        <svg width="129" class="max-[576px]:h-[25px] max-[576px]:w-full max-[576px]:max-w-full" height="28" viewBox="0 0 129 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.3" clip-path="url(#clip0_633_51665)">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M102.075 1.69229H112.582L111.339 7.72466C114.553 2.78588 118.232 1.33246 122.767 1.02908C124.502 1.01678 126.235 1.15371 127.946 1.43829L125.925 9.36151C124.304 8.93424 122.637 8.69742 120.96 8.65597C114.746 8.55014 110.132 12.6917 108.532 18.6253L104.903 32.2281H93.9961C96.6889 22.0542 100.26 10.956 102.075 1.69934V1.69229Z" fill="#425A8B" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M72.1813 15.2532C73.9956 14.3854 80.3099 14.4771 84.4027 13.9691C89.1098 13.4047 95.6884 10.8436 95.5312 6.95607C95.2741 2.81455 91.5455 1.87618 88.0741 2.33478C79.9027 3.51304 74.567 8.80459 72.1813 15.2532ZM71.1671 17.892C70.902 19.5883 70.8087 21.3066 70.8885 23.0212C71.5599 28.08 76.0528 30.4506 80.8884 30.6058C84.9027 30.6975 89.7884 28.3269 92.4455 25.3777C92.5284 25.2633 92.639 25.1713 92.7672 25.1102C92.8954 25.049 93.0371 25.0206 93.1793 25.0277C93.3215 25.0347 93.4597 25.0769 93.5811 25.1504C93.7025 25.2239 93.8032 25.3263 93.8741 25.4483C93.9859 25.6576 94.0377 25.8931 94.0239 26.1294C94.0101 26.3656 93.9311 26.5937 93.7955 26.7888C89.5955 30.9162 85.3027 33.1951 79.3242 33.2445C72.5456 33.2939 64.0528 30.7398 63.0171 23.7832C62.8678 22.8874 62.8486 21.9751 62.9599 21.0739C64.3242 8.19077 76.2242 1.22708 87.9313 0.613264C93.5241 0.309882 101.595 1.74213 101.131 7.72511C100.667 14.0185 91.0384 16.1916 84.767 16.368C79.4884 16.5232 72.9885 16.502 71.1956 17.892H71.1671Z" fill="#425A8B" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M65.3331 25.1655L63.6117 31.8187C60.216 32.56 56.7464 32.9197 53.2689 32.8911C42.8118 32.6865 35.1475 27.9523 35.6118 18.1101C36.1832 6.8214 47.526 1.02891 58.4689 0.873695C62.0373 0.854379 65.5947 1.26666 69.0617 2.10134L65.8045 8.49353C62.9523 7.64718 59.9685 7.31732 56.9974 7.51989C51.9974 7.87971 47.3689 10.5396 46.0189 15.7535C44.2618 22.301 48.0903 26.9081 54.876 26.9081C58.4297 26.8405 61.9537 26.2533 65.3331 25.1655Z" fill="#425A8B" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M21.111 0.972892C29.8681 0.972892 36.4538 2.96252 37.0824 10.1449C37.3252 12.9036 36.3109 15.3659 35.5324 18.2798L31.8824 32.2777C24.8967 32.2777 19.1967 32.4329 12.8825 32.9409C7.0325 32.9409 0.0253906 31.7133 0.0253906 24.3475C0.161104 12.3109 19.0396 13.4045 27.0681 13.4045C28.7753 8.59273 24.7896 6.65249 19.211 6.65249C14.1396 6.65249 9.96106 8.06358 5.86822 9.41116L7.29679 2.92018C11.7778 1.59584 16.4338 0.939512 21.111 0.972892ZM25.8753 18.2163C21.4681 18.2163 9.01106 17.1862 9.01106 23.8606C9.01106 27.1837 12.5325 27.6776 15.4825 27.6776C23.2396 27.6776 24.4467 25.0036 25.8753 18.2304V18.2163Z" fill="#425A8B" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M124.26 26.0352C123.701 26.0328 123.148 26.14 122.632 26.3508C122.115 26.5615 121.647 26.8716 121.253 27.2628C120.443 28.0867 119.981 29.1839 119.96 30.3319C119.974 31.4427 120.419 32.5058 121.203 33.3023C121.602 33.7033 122.077 34.0219 122.602 34.2393C123.127 34.4568 123.691 34.5687 124.26 34.5687C124.829 34.5687 125.393 34.4568 125.918 34.2393C126.442 34.0219 126.918 33.7033 127.317 33.3023C127.715 32.9151 128.03 32.4523 128.242 31.9418C128.455 31.4314 128.56 30.8838 128.553 30.3319C128.569 29.7726 128.468 29.2161 128.255 28.6975C128.042 28.179 127.723 27.7096 127.317 27.3193C126.918 26.9172 126.443 26.5969 125.918 26.3766C125.393 26.1562 124.83 26.0402 124.26 26.0352ZM128.146 30.3319C128.146 30.8284 128.045 31.3197 127.848 31.7767C127.652 32.2337 127.364 32.647 127.003 32.9918C126.272 33.7064 125.288 34.1114 124.26 34.1207C123.239 34.1171 122.26 33.7184 121.534 33.01C120.807 32.3016 120.391 31.3401 120.374 30.3319C120.386 29.3022 120.794 28.3155 121.517 27.5733C121.876 27.2153 122.303 26.9312 122.774 26.7375C123.245 26.5437 123.75 26.4441 124.26 26.4444C124.775 26.4419 125.285 26.5453 125.757 26.7482C126.229 26.951 126.654 27.2489 127.003 27.6227C127.368 27.9748 127.658 28.3963 127.855 28.8619C128.051 29.3275 128.15 29.8276 128.146 30.3319ZM124.36 27.7779H122.603V32.7167H123.274V30.4872H124.517L125.603 32.6884H126.381L125.246 30.4378C125.576 30.4197 125.887 30.2772 126.114 30.0397C126.341 29.8021 126.468 29.4876 126.467 29.1607C126.467 28.1871 125.796 27.7497 124.396 27.7497L124.36 27.7779ZM124.26 28.2365C125.246 28.2365 125.76 28.4905 125.76 29.1043C125.76 29.8733 125.296 30.0779 124.26 30.0779H123.274V28.2365H124.26Z" fill="#425A8B" />
                            </g>
                            <defs>
                                <clipPath id="clip0_633_51665">
                                    <rect width="128.514" height="34" fill="white" transform="translate(0.0380859 0.578125)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>

                    <div class="flex shrink-0 items-center justify-center max-[576px]:w-1/3">
                        <svg width="211" class="max-[576px]:h-[25px] max-[576px]:w-full max-[576px]:max-w-full" height="28" viewBox="0 0 211 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.3" clip-path="url(#clip0_633_51666)">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M38.2572 25.9544L38.303 1.05344L48.1213 1.01953L48.1671 34.1944H31.0709L10.5532 9.15783L10.5074 34.104L0.643304 34.1944L0.551758 1.05344L0.689077 1.01953H17.7853L38.2572 25.9544Z" fill="#425A8B" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M158.401 1.054L158.469 34.195H147.987V1.09921L148.079 1.00879C151.512 1.00879 154.945 1.00879 158.378 1.00879L158.401 1.054Z" fill="#425A8B" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M111.438 17.0354L111.484 17.0807L112.754 16.0408L129.553 1.05273H143.491L124.289 17.1259L124.335 17.2954L145.951 34.1033L130.732 34.1937L111.53 17.205L111.438 17.3406V34.1937H100.968V1.05273H111.438V17.0354Z" fill="#425A8B" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M84.6031 0.668551C88.9515 0.838098 93.6432 1.14328 95.9662 5.38198C96.4985 6.59613 96.7412 7.91485 96.6757 9.23637V27.2537C96.549 28.4555 96.1219 29.6074 95.4328 30.6057C94.7436 31.604 93.8141 32.4176 92.7278 32.9731C88.1505 34.9285 82.6463 34.4425 77.3366 34.5781C71.0657 34.4877 64.6232 34.8833 58.7871 33.8434C57.4181 33.617 56.1351 33.0334 55.0708 32.1531C54.0066 31.2728 53.1997 30.1276 52.7336 28.8361L52.3789 26.7563L52.4704 7.65392C52.5506 5.22374 54.7591 3.13265 56.7617 2.00233C60.1374 0.578125 64.2227 0.747673 68.1248 0.578125L84.6031 0.668551ZM64.0052 8.85206C63.1356 9.02161 62.037 9.37201 61.8997 10.3667C61.8997 15.3062 61.7738 20.3248 61.9912 25.2191C62.3002 26.0442 63.2157 25.9651 63.8794 26.1685H82.8179C84.4429 26.0442 86.3653 26.4285 87.2465 24.8348V10.8414L87.1091 9.7111C86.8459 9.06682 86.1937 8.9764 85.6215 8.80685H63.9595L64.0052 8.85206Z" fill="#425A8B" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M210.752 34.0581V34.1937H199.172C198.13 32.2835 197.077 30.4636 196.105 28.5421L195.887 28.463H175.29L172.131 34.1146L160.425 34.205L178.917 1.05273H192.466L210.775 34.0581H210.752ZM185.577 9.37188L179.18 21.195H192.077C189.925 17.2502 187.774 13.2828 185.623 9.37188H185.577Z" fill="#425A8B" />
                            </g>
                            <defs>
                                <clipPath id="clip0_633_51666">
                                    <rect width="210.201" height="34" fill="white" transform="translate(0.551758 0.578125)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>

                    <div class="flex shrink-0 items-center justify-center max-[576px]:w-1/3">
                        <svg width="177" class="max-[576px]:h-[25px] max-[576px]:w-full max-[576px]:max-w-full" height="28" viewBox="0 0 177 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.3" clip-path="url(#clip0_633_51667)">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M172.67 0.894531C173.382 0.899572 174.081 1.08179 174.703 1.42433C175.354 1.76842 175.89 2.29142 176.246 2.93007C176.607 3.54926 176.797 4.25117 176.797 4.96561C176.797 5.68004 176.607 6.38196 176.246 7.00115C175.894 7.64193 175.361 8.16815 174.712 8.51618C174.088 8.87011 173.381 9.05601 172.661 9.05527C171.938 9.05504 171.228 8.86927 170.6 8.51618C169.953 8.16933 169.423 7.64257 169.076 7.00115C168.715 6.38528 168.523 5.68664 168.521 4.9749C168.524 4.25743 168.715 3.55305 169.076 2.93007C169.441 2.29171 169.983 1.76939 170.638 1.42433C171.259 1.08066 171.958 0.898364 172.67 0.894531ZM170.854 7.23351V2.84642H172.379C172.762 2.83064 173.145 2.86818 173.517 2.95795C173.744 3.03722 173.939 3.18728 174.072 3.38551C174.207 3.57313 174.279 3.79711 174.279 4.02684C174.283 4.34179 174.162 4.64561 173.941 4.87266C173.688 5.11681 173.353 5.2593 173 5.27233C173.142 5.32422 173.273 5.40315 173.385 5.5047C173.636 5.76992 173.853 6.06315 174.035 6.3784L174.58 7.23351H173.705L173.31 6.53641C173.127 6.15419 172.872 5.81024 172.557 5.52329C172.388 5.41059 172.187 5.35514 171.983 5.36528H171.56V7.22422L170.854 7.23351Z" fill="#425A8B" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M92.9696 0.624598H93.1107V10.0122H83.5597V0.624598H92.9696ZM51.2274 20.4688L73.4253 21.8258C73.8687 21.8307 74.2923 22.0081 74.6042 22.3196C74.916 22.6311 75.0909 23.0515 75.0908 23.4895C75.0908 23.7068 75.0475 23.922 74.9633 24.1227C74.8791 24.3234 74.7558 24.5058 74.6002 24.6594C74.4447 24.8131 74.2601 24.9349 74.0568 25.0181C73.8536 25.1012 73.6358 25.144 73.4159 25.144H41.7893V12.9308C42.7303 16.7044 46.1085 19.7903 51.1992 20.4688H51.2274ZM41.8176 34.5781H74.1498C76.4046 34.5727 78.5878 33.7954 80.3276 32.3786C82.0674 30.9618 83.2561 28.9931 83.6914 26.8078C84.0742 28.9701 85.212 30.9316 86.9071 32.3512C88.6022 33.7708 90.7473 34.5588 92.9696 34.5781H113.671C115.884 34.5697 118.024 33.7991 119.722 32.3993C121.421 30.9996 122.572 29.0582 122.978 26.91V34.5781H156.11C158.685 34.5708 161.154 33.5568 162.975 31.7578C164.796 29.9588 165.823 27.5209 165.83 24.9767V23.6104C165.823 21.0662 164.796 18.6283 162.975 16.8293C161.154 15.0303 158.685 14.0163 156.11 14.009L154.294 13.9253C143.943 13.4792 133.705 12.9958 123.41 12.4475C124.21 16.4349 127.617 19.7531 132.961 20.4688L155.404 21.8258C155.849 21.8283 156.275 22.0046 156.589 22.3164C156.903 22.6281 157.079 23.0499 157.079 23.4895C157.079 23.9283 156.902 24.3492 156.588 24.6594C156.274 24.9697 155.848 25.144 155.404 25.144H123.081V12.4289L113.483 11.9455V22.811C113.483 23.5506 113.186 24.2598 112.656 24.7827C112.127 25.3057 111.409 25.5994 110.66 25.5994H95.9337C95.185 25.5994 94.4669 25.3057 93.9375 24.7827C93.4081 24.2598 93.1107 23.5506 93.1107 22.811V10.9045L83.5597 10.4119V21.1938C82.9935 19.1632 81.764 17.3743 80.0623 16.1052C78.3606 14.8362 76.282 14.158 74.1498 14.1763L31.8619 11.4436V34.5781H41.7893H41.8176ZM82.0165 10.0122V0.578125H51.2274C49.062 0.591932 46.9627 1.31613 45.2593 2.63687C43.556 3.95761 42.3453 5.80001 41.8176 7.87446V0.624598H23.4119L17.1449 10.0122H82.0165ZM27.8063 11.2113L12.6282 34.5781H0.75293L16.7497 10.5792L27.7875 11.2113H27.8063ZM165.821 10.0122V0.578125H132.952C130.404 0.584839 127.96 1.57544 126.142 3.33827C124.324 5.1011 123.276 7.49635 123.222 10.0122H165.821ZM113.521 10.0122V0.624598H123.081V10.0122H113.521Z" fill="#425A8B" />
                            </g>
                            <defs>
                                <clipPath id="clip0_633_51667">
                                    <rect width="176.049" height="34" fill="white" transform="translate(0.75293 0.578125)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>

                    <div class="flex shrink-0 items-center justify-center max-[576px]:w-1/3">
                        <svg width="193" class="max-[576px]:h-[25px] max-[576px]:w-full max-[576px]:max-w-full" height="28" viewBox="0 0 193 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.3" clip-path="url(#clip0_633_51668)">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M130.37 33.8588C130.37 33.9592 130.41 34.0557 130.481 34.1276C130.552 34.1996 130.648 34.2414 130.75 34.244H140.222C140.273 34.244 140.323 34.234 140.37 34.2145C140.417 34.195 140.459 34.1665 140.495 34.1306C140.53 34.0947 140.558 34.0521 140.576 34.0054C140.595 33.9588 140.603 33.9089 140.602 33.8588V1.39963C140.603 1.35 140.595 1.3006 140.576 1.25446C140.557 1.20832 140.53 1.16641 140.494 1.1313C140.458 1.09619 140.416 1.06861 140.369 1.05026C140.323 1.03191 140.273 1.02316 140.222 1.02456H130.75C130.649 1.02456 130.553 1.06408 130.481 1.13442C130.41 1.20476 130.37 1.30016 130.37 1.39963V33.8385V33.8588Z" fill="#425A8B" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M86.1564 33.4639L72.2093 1.59271C72.1598 1.49331 72.0841 1.40887 71.9902 1.34824C71.8963 1.28761 71.7877 1.253 71.6756 1.24805H57.6465C57.5341 1.25192 57.425 1.28608 57.331 1.34684C57.2369 1.40759 57.1614 1.49262 57.1128 1.59271L43.1657 33.4639C43.1409 33.5002 43.1274 33.5428 43.127 33.5866C43.1265 33.6304 43.1391 33.6733 43.1632 33.71C43.1872 33.7468 43.2217 33.7757 43.2623 33.7932C43.3029 33.8108 43.3479 33.8161 43.3915 33.8086H53.2643C53.3756 33.8009 53.4828 33.7639 53.5749 33.7016C53.6669 33.6392 53.7404 33.5536 53.7877 33.4538L55.8402 28.5271C55.888 28.4285 55.9619 28.3444 56.054 28.2838C56.1461 28.2231 56.2531 28.1881 56.3636 28.1825H73.0201C73.1297 28.1866 73.236 28.2211 73.3267 28.282C73.4174 28.343 73.489 28.4279 73.5332 28.5271L75.4318 33.4538C75.4755 33.5542 75.5467 33.6406 75.6373 33.7032C75.728 33.7659 75.8345 33.8024 75.9449 33.8086H85.9203C85.9636 33.814 86.0076 33.8075 86.0474 33.7897C86.0872 33.7719 86.1212 33.7436 86.1456 33.7079C86.1701 33.6722 86.184 33.6305 86.1859 33.5874C86.1878 33.5443 86.1776 33.5016 86.1564 33.4639ZM58.5701 21.2993L63.1781 9.43886C63.722 8.25282 64.2044 8.09062 64.738 8.09062C65.2717 8.09062 65.8669 8.57721 66.1953 9.49969L70.7315 21.2993H58.5701Z" fill="#425A8B" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M172.088 0.822266H161.281C148.206 1.01487 146.205 5.13056 146.205 17.1532C146.205 19.1806 146.205 21.2081 146.297 23.2355C146.657 31.254 151.09 33.7376 158.5 34.285C160.819 34.437 166.228 34.5384 166.453 34.5283C166.453 34.5283 172.539 34.437 174.859 34.285C182.268 33.7376 186.702 31.2439 187.061 23.2355C187.164 21.2081 187.164 19.1806 187.164 17.1532C187.164 5.13056 185.111 1.01487 172.088 0.822266ZM176.819 18.5521C176.819 24.0262 176.47 26.1753 170.374 26.3172C168.783 26.4084 164.586 26.4084 162.995 26.3172C156.889 26.1753 156.54 24.0262 156.54 18.5521V17.2039C156.514 15.9079 156.566 14.6115 156.694 13.3214C157.299 8.73938 160.799 8.99281 164.206 8.89144C165.458 8.89144 167.901 8.89144 169.163 8.89144C172.591 8.99281 176.07 8.73938 176.675 13.3214C176.795 14.612 176.843 15.9081 176.819 17.2039V18.5521Z" fill="#425A8B" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M31.3437 21.4108C31.0563 24.7966 29.8659 26.2057 24.9705 26.3172C23.3798 26.4084 19.1823 26.4084 17.5916 26.3172C11.4955 26.1753 11.1363 24.0262 11.1363 18.5521V17.2039C11.111 15.9079 11.1624 14.6115 11.2903 13.3214C11.8958 8.73938 15.3954 8.99281 18.8026 8.89144C20.0649 8.89144 22.5075 8.89144 23.7595 8.89144C27.0333 8.98267 30.3482 8.76979 31.1692 12.7233H41.627C41.0215 4.09656 38.0042 0.98446 26.6844 0.822266H15.8777C2.85431 1.01487 0.801758 5.13056 0.801758 17.1532C0.801758 19.1806 0.801758 21.2081 0.904385 23.2355C1.25332 31.3047 5.69709 33.7883 13.1171 34.3357C15.4364 34.4877 20.8346 34.5891 21.0604 34.579C21.0604 34.579 27.1462 34.4877 29.4656 34.3357C36.8753 33.7883 41.3191 31.2945 41.668 23.2862C41.668 22.6577 41.668 22.0393 41.7399 21.4108H31.3437Z" fill="#425A8B" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M99.5713 21.2478C101.839 21.2478 104.056 21.3289 106.334 21.3491L109.126 21.4607C111.445 21.5823 114.955 20.7511 114.955 24.5018C114.955 26.9347 112.584 26.9854 110.768 27.0766C108.141 27.1577 108.531 27.1983 105.914 27.178C104.302 27.178 104.169 27.178 102.506 27.107C100.238 26.9854 98.7297 26.4279 98.5963 23.9341L88.5594 23.8936C88.5594 25.992 88.4259 27.624 89.5241 29.5805C91.905 33.534 96.708 34.2639 100.813 34.345L105.678 34.4768C109.557 34.4768 115.089 34.4768 118.67 33.5745C123.956 32.2364 124.982 28.8506 124.982 23.8936C125.116 21.6945 124.502 19.5143 123.237 17.6998C121.739 15.7636 119.358 14.8005 116.423 14.6586C110.83 14.3646 109.567 14.2633 103.974 14.2227H102.147C99.9305 14.2227 97.4059 13.5131 97.4264 10.8166C97.4469 8.12017 99.715 7.84646 101.993 7.7755C103.112 7.7755 104.446 7.7755 106.714 7.7755C108.325 7.7755 107.853 7.86674 109.465 7.84646C112.205 7.84646 114.76 7.99852 114.74 11.0397L124.818 11.1106V9.61033C124.879 2.10883 119.85 1.16608 114.298 0.780868C112.03 0.578125 109.711 0.578125 107.443 0.578125C103.061 0.578125 103.102 0.638948 98.7195 0.861965C90.9506 1.39923 87.3073 2.88939 87.2457 10.9991C87.1842 19.6157 91.7613 21.1363 99.561 21.1971L99.5713 21.2478Z" fill="#425A8B" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M192.46 30.3619C192.239 29.9736 191.916 29.6514 191.526 29.4293C191.135 29.209 190.693 29.0937 190.243 29.0947C189.796 29.094 189.358 29.2094 188.97 29.4293C188.574 29.6479 188.248 29.9707 188.026 30.3619C187.802 30.7474 187.686 31.1846 187.688 31.629C187.687 32.0759 187.806 32.5151 188.033 32.9016C188.26 33.288 188.587 33.608 188.981 33.8288C189.366 34.0419 189.801 34.1537 190.243 34.1537C190.685 34.1537 191.12 34.0419 191.505 33.8288C191.898 33.6061 192.225 33.286 192.453 32.9002C192.682 32.5143 192.804 32.0761 192.809 31.629C192.812 31.183 192.691 30.7447 192.46 30.3619ZM192.121 32.7137C191.923 33.0282 191.646 33.2868 191.317 33.4644C190.988 33.642 190.618 33.7326 190.243 33.7274C189.866 33.7282 189.495 33.6339 189.165 33.4537C188.832 33.266 188.555 32.9947 188.362 32.6671C188.169 32.3395 188.068 31.9674 188.067 31.5885C188.069 31.212 188.168 30.8421 188.355 30.5139C188.545 30.1853 188.82 29.9122 189.152 29.7223C189.483 29.5323 189.86 29.4323 190.243 29.4323C190.626 29.4323 191.003 29.5323 191.334 29.7223C191.666 29.9122 191.941 30.1853 192.131 30.5139C192.318 30.8421 192.417 31.212 192.419 31.5885C192.419 31.9697 192.316 32.3441 192.121 32.6731V32.7137Z" fill="#425A8B" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M190.959 32.2376C190.876 32.0663 190.757 31.9143 190.611 31.7916C190.801 31.7186 190.963 31.5872 191.072 31.4165C191.174 31.2666 191.227 31.09 191.226 30.9097C191.229 30.7615 191.194 30.615 191.124 30.4839C191.052 30.3594 190.95 30.2548 190.826 30.1798C190.649 30.1014 190.455 30.0666 190.262 30.0784H189.235V33.2006H189.738V31.8828H190.108C190.159 31.8828 190.241 31.9842 190.364 32.1869L190.467 32.3795L190.898 33.2006H191.462L190.939 32.2376H190.959ZM190.108 31.5077H189.759V30.494H190.138C190.263 30.4805 190.388 30.5053 190.498 30.565C190.565 30.6094 190.621 30.6683 190.662 30.7373C190.696 30.8141 190.713 30.8969 190.713 30.9806C190.715 31.1234 190.668 31.2626 190.58 31.376C190.519 31.4382 190.446 31.486 190.364 31.5159C190.282 31.5457 190.194 31.5568 190.108 31.5483V31.5077Z" fill="#425A8B" />
                            </g>
                            <defs>
                                <clipPath id="clip0_633_51668">
                                    <rect width="192.006" height="34" fill="white" transform="translate(0.801758 0.578125)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>

                </div>
            </div>

            <div class="flex gap-[30px]">
                <svg width="108" class="max-[576px]:h-[25px]" height="28" viewBox="0 0 108 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g opacity="0.3" clip-path="url(#clip0_633_51669)">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 1.81706H13.0239L14.4494 1.8753L15.8176 1.9976L17.1286 2.32956L18.3766 2.63241L19.5215 3.11579L20.592 3.59918L21.6053 4.18157L22.5556 4.84549L23.3857 5.57348L24.2216 6.35971L24.9372 7.20418L25.5898 8.11271L26.1222 9.07948L26.6603 10.0462L27.0611 11.0654L27.416 12.0963L45.907 0L52.6279 4.59507L38.2358 14.0356L40.5601 15.6081L55.0667 6.23159L61.3124 10.483L47.0005 20.1041L49.4392 21.6125L64.0088 12.1778V1.81706H74.7141V22.4454H84.2287V32.1247H63.9859V22.224L45.97 34L27.5935 21.3563L27.2385 22.4454L26.9065 23.4762L26.334 24.5012L25.7959 25.532L25.1547 26.4406L24.4391 27.3724L23.6663 28.2227L22.7789 28.9448L21.8858 29.6437L20.8153 30.2261L19.7448 30.7677L18.554 31.2569L17.306 31.618L15.995 31.8568L14.6268 32.0432L13.1441 32.1014H0V1.81706ZM10.2302 11.3159H13.0239L14.2719 11.4323L15.2852 11.7992L16.1782 12.3409L16.9511 13.0689L17.4835 13.9133L17.9014 14.8219L18.1361 15.8527L18.1991 16.8893L18.1361 17.9202L17.9014 18.9452L17.4835 19.8537L16.911 20.704L16.2011 21.4262L15.3081 21.9736L14.2375 22.3347L13.0468 22.457H10.2302V11.3159ZM86.885 1.81706H97.6476V22.4454H107.105V32.1247H86.885V1.84036V1.81706Z" fill="#425A8B" />
                    </g>
                    <defs>
                        <clipPath id="clip0_633_51669">
                            <rect width="107.105" height="34" fill="white" />
                        </clipPath>
                    </defs>
                </svg>

                <svg width="227" class="max-[576px]:h-[25px]" height="28" viewBox="0 0 227 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g opacity="0.3" clip-path="url(#clip0_633_51670)">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M54.3428 9.74192H62.7206L63.0944 12.5479C63.7389 10.3057 67.9665 8.70605 70.5443 8.70605C76.5377 8.70605 78.9222 12.4562 78.9222 19.0123V33.1604H69.6292V20.5202C69.6292 17.9895 69.1652 16.1145 66.6776 16.1145C64.19 16.1145 63.1847 18.6451 63.1847 20.4153V33.1604H54.3428V9.74192Z" fill="#425A8B" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.105469 33.2526V0.0917969H15.6625C24.9684 0.0917969 29.2089 4.68108 29.2089 11.329C29.2089 18.4489 25.3422 23.3267 15.6625 23.3267H10.4167V33.2526H0.105469ZM14.567 15.2758C17.0546 15.2758 19.7226 14.7119 19.7226 11.801C19.7226 8.8901 16.8612 8.15582 14.567 8.15582H10.4167V15.2758H14.567Z" fill="#425A8B" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M156.733 9.74192H165.214L165.485 12.5479C166.22 10.3057 170.46 8.70605 173.038 8.70605C178.928 8.70605 181.416 12.4562 181.416 19.0123V33.2521H172.11V20.5202C172.11 17.9895 171.569 16.1145 169.081 16.1145C166.864 16.1145 165.666 18.6451 165.666 20.4153V33.2521H156.733V9.74192Z" fill="#425A8B" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M114.006 24.821C114.014 25.8522 114.374 26.8485 115.024 27.6401C115.737 28.2073 116.607 28.5329 117.512 28.5711C119.161 28.5711 120.463 28.099 120.463 26.5124C120.553 22.5788 106.466 26.0404 106.466 16.6783C106.466 10.1222 111.428 8.61426 116.584 8.61426C121.739 8.61426 128.841 9.65012 128.558 16.7701H120.734C120.703 16.1506 120.477 15.5577 120.089 15.0786C119.788 14.7399 119.417 14.4728 119.003 14.2961C118.588 14.1194 118.141 14.0373 117.692 14.0558C116.133 13.9509 114.65 14.2394 114.65 15.4588C114.753 19.104 129.202 16.6783 129.202 25.293C129.202 31.2853 125.065 33.9995 117.048 33.9995C111.982 33.9077 105.628 31.2853 105.628 24.821H114.006Z" fill="#425A8B" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M209.32 18.8287C209.371 18.0126 209.108 17.2084 208.586 16.5865C208.31 16.1606 207.943 15.8038 207.512 15.5426C207.081 15.2815 206.598 15.1229 206.098 15.0786C202.592 15.0786 201.677 18.5533 201.677 21.3594C201.677 24.6374 203.147 27.3516 205.905 27.3516C206.915 27.2808 207.857 26.8099 208.529 26.0401C209.202 25.2703 209.551 24.2629 209.501 23.2344H217.608C217.789 28.099 214.476 33.9078 205.544 33.9078C203.891 33.9861 202.241 33.7129 200.698 33.1055C199.155 32.4982 197.753 31.5701 196.583 30.3805C195.412 29.191 194.498 27.7661 193.9 26.197C193.301 24.6279 193.031 22.949 193.106 21.2676C193.106 12.1808 199.744 8.70605 205.454 8.70605C213.187 8.70605 217.608 13.492 217.518 18.8287H209.32Z" fill="#425A8B" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M44.4943 33.2537L43.5663 31.2869C41.7705 32.9031 39.4268 33.7449 37.0316 33.6339C34.1702 33.5422 28.5635 33.1619 28.5635 26.8811C28.5635 16.5881 43.6565 21.2691 43.6565 16.2078C43.6565 14.5163 41.8134 14.6081 40.8081 14.6081C38.9649 14.6081 37.7663 14.9884 37.4956 17.7944H29.7493C29.7493 12.9297 31.2315 8.8125 41.3494 8.8125C51.1966 8.8125 52.2149 14.0574 52.2149 19.2105V29.8838C52.1409 30.4434 52.1929 31.0128 52.3671 31.5489C52.5413 32.085 52.833 32.5738 53.2202 32.9783V33.1619L44.4814 33.2537H44.4943ZM43.7468 22.4886C40.6147 23.9833 36.6578 23.8916 36.5676 26.2255C36.5676 27.7334 37.3925 28.4808 39.2356 28.4808C42.2774 28.4808 43.9401 25.2946 43.7468 22.4886ZM96.4243 33.2537L95.4834 31.2869C93.6814 32.8924 91.3421 33.7326 88.9486 33.6339C86.0099 33.5422 80.3903 33.1619 80.3903 26.8811C80.3903 16.5881 95.4834 21.2691 95.5865 16.2078C95.5865 14.5163 93.6531 14.6081 92.7251 14.6081C90.7918 14.6081 89.6833 14.9884 89.4126 17.7944H81.6792C81.6792 12.9297 83.0583 8.8125 93.2794 8.8125C103.036 8.8125 104.055 14.0574 104.055 19.2105V29.8838C103.981 30.4434 104.033 31.0128 104.207 31.5489C104.381 32.085 104.673 32.5738 105.06 32.9783V33.1619L96.4114 33.2537H96.4243ZM95.6896 22.4886C92.5576 23.9833 88.4975 23.8916 88.4975 26.2255C88.4975 27.7334 89.2451 28.4808 91.1784 28.4808C94.1171 28.4808 95.8701 25.2946 95.6896 22.4886Z" fill="#425A8B" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M191.638 33.2526V9.74238H183.131V33.2526H191.638ZM183.131 6.73968H191.689V0H183.131V6.73968Z" fill="#425A8B" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M142.93 8.90332C150.573 8.90332 155.265 14.3318 155.265 21.4517C155.265 28.5717 150.573 34.0001 142.93 34.0001C135.287 34.0001 130.492 28.6634 130.492 21.4517C130.492 14.24 135.287 8.90332 142.93 8.90332ZM138.87 21.4517C138.87 24.3626 139.798 27.916 142.93 28.0078C146.062 28.0996 146.887 24.3626 146.887 21.4517C146.887 18.5408 146.062 14.9874 142.93 14.9874C139.798 14.9874 138.96 18.6457 138.87 21.4517Z" fill="#425A8B" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M223.087 28.6638C223.641 28.6638 224.466 28.7556 224.466 28.0082C224.466 27.2608 223.912 27.2608 223.46 27.2608H222.352V28.6638H223.087ZM224.93 30.9191H224.376L223.267 29.0441H222.352V30.9191H221.798V26.8806H223.46C224.195 26.8806 224.852 27.1166 224.852 28.0082C224.852 28.8999 224.376 29.0441 223.641 29.0441L224.84 30.9191H224.93ZM226.219 28.9916C226.229 28.3649 226.055 27.7493 225.719 27.2239C225.383 26.6984 224.9 26.2869 224.333 26.0423C223.766 25.7976 223.14 25.7309 222.535 25.8506C221.93 25.9704 221.374 26.2712 220.938 26.7144C220.503 27.1576 220.207 27.7232 220.089 28.3384C219.972 28.9537 220.037 29.5908 220.278 30.1679C220.518 30.745 220.923 31.2359 221.439 31.5777C221.956 31.9194 222.561 32.0965 223.177 32.0861C223.98 32.0726 224.746 31.7423 225.313 31.1648C225.881 30.5874 226.205 29.8081 226.219 28.9916ZM219.632 28.9916C219.622 28.2819 219.82 27.5852 220.202 26.9907C220.583 26.3962 221.13 25.931 221.773 25.6546C222.415 25.3782 223.124 25.3031 223.809 25.4391C224.494 25.575 225.123 25.9157 225.617 26.4177C226.11 26.9196 226.445 27.5599 226.579 28.2566C226.712 28.9532 226.639 29.6746 226.367 30.3284C226.095 30.9822 225.638 31.5387 225.054 31.9265C224.469 32.3144 223.784 32.5161 223.087 32.5057C222.16 32.5057 221.272 32.1313 220.617 31.4649C219.962 30.7986 219.594 29.8947 219.594 28.9523L219.632 28.9916Z" fill="#425A8B" />
                    </g>
                    <defs>
                        <clipPath id="clip0_633_51670">
                            <rect width="226.525" height="34" fill="white" transform="translate(0.105469)" />
                        </clipPath>
                    </defs>
                </svg>

                <svg width="145" class="max-[576px]:h-[25px]" height="28" viewBox="0 0 145 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g opacity="0.3" clip-path="url(#clip0_633_51671)">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M111.14 17.0156C111.14 20.3655 112.116 23.6402 113.946 26.4255C115.775 29.2109 118.375 31.3818 121.417 32.6637C124.46 33.9457 127.807 34.2811 131.037 33.6276C134.267 32.974 137.233 31.3609 139.562 28.9921C141.89 26.6234 143.476 23.6054 144.118 20.3199C144.76 17.0344 144.431 13.6288 143.171 10.5339C141.91 7.43898 139.777 4.79371 137.039 2.9326C134.301 1.07149 131.082 0.078125 127.789 0.078125C123.374 0.0822659 119.142 1.86807 116.021 5.04356C112.899 8.21905 111.144 12.5247 111.14 17.0156ZM117.335 17.0156C117.335 14.9122 117.948 12.8561 119.097 11.1072C120.245 9.35832 121.878 7.99524 123.788 7.19032C125.698 6.3854 127.8 6.17479 129.828 6.58514C131.856 6.99548 133.719 8.00835 135.181 9.49565C136.643 10.9829 137.638 12.8779 138.042 14.9408C138.445 17.0038 138.238 19.1421 137.447 21.0853C136.656 23.0286 135.316 24.6895 133.597 25.8581C131.877 27.0266 129.856 27.6503 127.789 27.6503C125.017 27.6483 122.359 26.5272 120.399 24.5332C118.439 22.5392 117.337 19.8354 117.335 17.0156Z" fill="#425A8B" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M95.4292 8.28887V34H101.578V7.9448C101.578 7.71803 101.617 6.02116 102.747 5.26265L99.3801 0C96.0211 2.24425 95.3216 6.25575 95.4292 8.28887Z" fill="#425A8B" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M41.046 15.3266C37.4948 21.5823 34.128 27.5565 29.3085 27.5565C24.4891 27.5565 21.13 21.6136 17.5404 15.3266C13.528 8.1559 8.93909 0.0390625 0.629883 0.0390625V6.29481C5.34945 6.29481 8.67774 12.1909 12.2059 18.4231C16.2798 25.6407 20.9071 33.8201 29.3085 33.8201C37.71 33.8201 42.3373 25.6798 46.4189 18.4622C49.9393 12.2065 53.2676 6.33391 57.9949 6.33391C62.7221 6.33391 66.0427 12.23 69.5709 18.4622C73.6525 25.6798 78.2644 33.8592 86.6736 33.8592V27.5565C81.8464 27.5565 78.495 21.6136 74.9361 15.3266C70.8853 8.1559 66.2964 0.0390625 57.9949 0.0390625C49.6934 0.0390625 45.0968 8.1559 41.0844 15.3266H41.046Z" fill="#425A8B" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M62.5686 22.9125C62.5686 23.8405 62.2981 24.7476 61.7914 25.5191C61.2846 26.2907 60.5643 26.8921 59.7216 27.2472C58.8789 27.6023 57.9516 27.6952 57.0569 27.5142C56.1623 27.3331 55.3405 26.8863 54.6955 26.2301C54.0505 25.574 53.6113 24.738 53.4333 23.8278C53.2554 22.9177 53.3467 21.9744 53.6958 21.117C54.0449 20.2597 54.636 19.527 55.3944 19.0114C56.1529 18.4959 57.0445 18.2207 57.9567 18.2207C59.1798 18.2207 60.3529 18.715 61.2178 19.5949C62.0827 20.4748 62.5686 21.6682 62.5686 22.9125Z" fill="#425A8B" />
                    </g>
                    <defs>
                        <clipPath id="clip0_633_51671">
                            <rect width="143.808" height="34" fill="white" transform="translate(0.629883)" />
                        </clipPath>
                    </defs>
                </svg>

                <svg width="225" height="28" viewBox="0 0 225 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g opacity="0.3" clip-path="url(#clip0_633_51672)">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M221.211 27.6925C220.652 27.6874 220.104 27.8515 219.636 28.1641C219.169 28.4766 218.804 28.9235 218.587 29.4478C218.37 29.9722 218.311 30.5503 218.418 31.1087C218.525 31.667 218.793 32.1805 219.187 32.5836C219.582 32.9868 220.085 33.2615 220.634 33.3728C221.182 33.4841 221.751 33.427 222.267 33.2087C222.783 32.9905 223.224 32.6209 223.534 32.147C223.843 31.6731 224.007 31.1163 224.004 30.5475C224.004 29.7925 223.711 29.0683 223.187 28.5333C222.663 27.9982 221.953 27.6959 221.211 27.6925ZM221.211 33.065C220.721 33.0676 220.241 32.9221 219.832 32.6471C219.424 32.372 219.105 31.9797 218.915 31.5199C218.726 31.0601 218.675 30.5535 218.769 30.0643C218.863 29.5751 219.098 29.1253 219.444 28.7719C219.789 28.4185 220.23 28.1775 220.711 28.0793C221.191 27.9811 221.689 28.0302 222.142 28.2203C222.595 28.4105 222.982 28.7332 223.255 29.1474C223.527 29.5617 223.673 30.049 223.673 30.5475C223.674 30.8775 223.612 31.2045 223.489 31.5099C223.366 31.8153 223.185 32.0929 222.956 32.3269C222.727 32.5608 222.455 32.7465 222.156 32.8731C221.856 32.9998 221.535 33.065 221.211 33.065Z" fill="#425A8B" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M222.652 29.8481C222.658 29.7114 222.628 29.5756 222.565 29.4546C222.502 29.3336 222.409 29.232 222.294 29.1603C222.058 29.0371 221.793 28.9832 221.529 29.0046H220.164V32.1969H220.547V30.6656H221.248L222.154 32.145H222.601L221.657 30.6656C222.218 30.6656 222.652 30.4191 222.652 29.7962V29.8481ZM221.121 30.3672H220.534V29.2382H221.427C221.822 29.2382 222.243 29.2382 222.243 29.7832C222.243 30.3282 221.567 30.3672 221.121 30.3672Z" fill="#425A8B" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M202.573 0.271992C196.346 0.341207 190.128 0.774492 183.949 1.5697V32.7407H193.733V21.4506C197.285 22.0987 200.88 22.4718 204.487 22.5666C206.961 22.5666 224.629 21.801 224.629 11.1468C224.629 -0.286024 205.813 0.271992 202.573 0.271992ZM203.122 17.1422C199.944 17.2277 196.773 16.7894 193.733 15.8445V6.26741C197.024 5.98191 202.229 5.77428 203.734 5.77428C205.239 5.77428 213.059 6.12466 213.123 11.2895C213.186 16.6491 206.273 17.1292 203.122 17.1292V17.1422Z" fill="#425A8B" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M34.3445 14.0672C31.6912 13.4702 21.7414 11.8481 19.1391 11.4718C15.7077 11.0565 13.7305 10.4206 13.7305 8.47405C13.7305 5.87863 18.8329 6.28092 22.9022 6.44962C28.0047 6.65725 37.4953 9.8626 40.2251 11.0565L43.4524 3.89313C38.1714 1.29771 28.0429 0 21.601 0C16.945 0.0648855 1.38244 1.18092 1.19109 9.61603C1.05077 15.5725 6.21704 17.7786 12.761 19.4656C18.3865 20.6466 24.6115 21.2046 28.8593 22.0611C34.3062 23.216 34.268 27.1481 29.9564 27.5634C22.5067 28.1214 9.89083 24.358 4.13778 21.4382L0.438477 29.1206C8.44938 33.0916 20.8484 34.0519 25.0962 34C30.5687 33.9351 45.0852 33.3771 45.0852 24.5267C45.0852 18.7 40.1486 15.4427 34.3317 14.0672H34.3445Z" fill="#425A8B" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M77.7783 13.6528H57.5087V1.53223H47.0996V32.7421H57.5087V19.9338H77.7783V32.7421H88.2001V1.53223H77.7783V13.6528Z" fill="#425A8B" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M120.27 1.53223H107.514L89.4512 32.7421H97.5386L101.71 25.6437H122.031L126.227 32.7421H138.767L120.27 1.59711V1.53223ZM105.269 19.3757L111.647 8.15055L118.267 19.3757H105.269Z" fill="#425A8B" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M180.914 10.6543C180.837 -0.765549 161.779 0.272619 158.514 0.272619C152.286 0.342605 146.068 0.775886 139.89 1.57033V32.7413H149.827V6.26804C153.386 5.98254 158.45 5.77491 159.955 5.77491C161.46 5.77491 169.203 5.50239 169.267 11.1474C169.331 16.507 162.085 16.5848 158.935 16.5848C157.126 16.5293 155.33 16.2459 153.59 15.7413L151.74 18.9467L167.048 32.7413H181.768L168.438 20.7635C174.115 19.5955 180.952 16.8703 180.914 10.6154V10.6543Z" fill="#425A8B" />
                    </g>
                    <defs>
                        <clipPath id="clip0_633_51672">
                            <rect width="224.191" height="34" fill="white" transform="translate(0.438477)" />
                        </clipPath>
                    </defs>
                </svg>
            </div>

            <!-- visit store -->
            <div class="store mt-20 border-solid border-t pt-16 max-[576px]:mt-[50px] max-[576px]:pt-7">
                <h2 class="text-[45px] leading-14.5 font-bold tracking-wide w-full max-[576px]:text-[32px]">Visit our stores</h2>
                <p class="text-[#6B83B6] text-sm leading-5 font-medium">Find us at these locations</p>

                <div class="flex mt-[30px] gap-[120px] max-[576px]:flex-wrap max-[576px]:gap-5">
                    <div>
                        <div>
                            <h3 class="text-2xl leading-[31px] font-bold">Melbourne</h3>
                            <p class="text-[#6B83B6] font-medium text-sm leading-5">205 North Michigan Avenue, Suite 810 <br>
                                Chicago, 60601, USA</p>
                        </div>

                        <div class="mt-6">
                            <h3 class="text-2xl leading-[31px] font-bold">San Francisco</h3>
                            <p class="text-[#6B83B6] font-medium text-sm leading-5">205 North Michigan Avenue, Suite 810 <br>
                                Chicago, 60601, USA</p>
                        </div>

                        <div class="mt-6">
                            <h3 class="text-2xl leading-[31px] font-bold">Byron Bay</h3>
                            <p class="text-[#6B83B6] font-medium text-sm leading-5">205 North Michigan Avenue, Suite 810 <br>
                                Chicago, 60601, USA</p>
                        </div>
                    </div>

                    <div>
                        <div>
                            <h3 class="text-2xl leading-[31px] font-bold">Sydney</h3>
                            <p class="text-[#6B83B6] font-medium text-sm leading-5">205 North Michigan Avenue, Suite 810 <br>
                                Chicago, 60601, USA</p>
                        </div>

                        <div class="mt-6">
                            <h3 class="text-2xl leading-[31px] font-bold">Sweden</h3>
                            <p class="text-[#6B83B6] font-medium text-sm leading-5">205 North Michigan Avenue, Suite 810 <br>
                                Chicago, 60601, USA</p>
                        </div>

                        <div class="mt-6">
                            <h3 class="text-2xl leading-[31px] font-bold">Ha Noi</h3>
                            <p class="text-[#6B83B6] font-medium text-sm leading-5">205 North Michigan Avenue, Suite 810 <br>
                                Chicago, 60601, USA</p>
                        </div>
                    </div>

                    <div>
                        <div>
                            <h3 class="text-2xl leading-[31px] font-bold">Bangkok</h3>
                            <p class="text-[#6B83B6] font-medium text-sm leading-5">205 North Michigan Avenue, Suite 810 <br>
                                Chicago, 60601, USA</p>
                        </div>

                        <div class="mt-6">
                            <h3 class="text-2xl leading-[31px] font-bold">Seoul</h3>
                            <p class="text-[#6B83B6] font-medium text-sm leading-5">205 North Michigan Avenue, Suite 810 <br>
                                Chicago, 60601, USA</p>
                        </div>

                        <div class="mt-6">
                            <h3 class="text-2xl leading-[31px] font-bold">Paris</h3>
                            <p class="text-[#6B83B6] font-medium text-sm leading-5">205 North Michigan Avenue, Suite 810 <br>
                                Chicago, 60601, USA</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="contact-info bg-[#F0F3F8] mt-20 py-20 max-[576px]:py-[50px]">
        <div class="flex items-start max-w-[1100px] mx-auto w-full gap-20 max-[576px]:flex-wrap px-5">
            <div class="max-w-[280px] max-[576px]:w-full max-[576px]:max-w-full">
                <h2 class="text-[32px] leading-[41px] font-bold max-[576px]:leading-8 max-[448px]:text-[28px]">We’d love to <br class="max-[576px]:hidden">
                    hear from you</h2>
                <p class="text-[#6B83B6] text-sm leading-5 font-medium mt-2">Chat with our friendly team</p>
            </div>

            <div class="flex justify-between flex-1 max-w-[760px] gap-8 max-[576px]:flex-col">

                <div class="flex flex-col flex-1 max-[576px]:w-full">

                    <!-- block 1 -->
                    <div class="flex flex-col items-center text-center max-[576px]:hidden">
                        <div class="mb-3">
                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M40.7751 6.41959C41.4725 6.41959 42.1412 6.6966 42.6343 7.1897C43.1274 7.68279 43.4044 8.35156 43.4044 9.0489V30.0833C43.4044 30.7807 43.1274 31.4495 42.6343 31.9425C42.1412 32.4356 41.4725 32.7127 40.7751 32.7127H15.5706C14.176 32.7129 12.8387 33.2672 11.8528 34.2534L6.59415 39.512V9.0489C6.59415 8.35156 6.87117 7.68279 7.36426 7.1897C7.85735 6.6966 8.52612 6.41959 9.22346 6.41959H40.7751ZM9.22346 3.79028C7.82879 3.79028 6.49124 4.34431 5.50506 5.3305C4.51887 6.31668 3.96484 7.65423 3.96484 9.0489L3.96484 42.6856C3.9649 42.9457 4.04213 43.2 4.18675 43.4162C4.33137 43.6325 4.53689 43.8009 4.7773 43.9003C5.0177 43.9997 5.28218 44.0255 5.53726 43.9745C5.79235 43.9235 6.02656 43.7979 6.21027 43.6138L13.7117 36.1123C14.2047 35.6192 14.8733 35.3421 15.5706 35.342H40.7751C42.1698 35.342 43.5074 34.7879 44.4935 33.8017C45.4797 32.8156 46.0337 31.478 46.0337 30.0833V9.0489C46.0337 7.65423 45.4797 6.31668 44.4935 5.3305C43.5074 4.34431 42.1698 3.79028 40.7751 3.79028H9.22346Z" fill="#425A8B" />
                                <path d="M11.8516 12.9929C11.8516 12.6442 11.9901 12.3098 12.2366 12.0633C12.4832 11.8167 12.8175 11.6782 13.1662 11.6782H36.83C37.1786 11.6782 37.513 11.8167 37.7596 12.0633C38.0061 12.3098 38.1446 12.6442 38.1446 12.9929C38.1446 13.3415 38.0061 13.6759 37.7596 13.9225C37.513 14.169 37.1786 14.3075 36.83 14.3075H13.1662C12.8175 14.3075 12.4832 14.169 12.2366 13.9225C11.9901 13.6759 11.8516 13.3415 11.8516 12.9929ZM11.8516 19.5661C11.8516 19.2175 11.9901 18.8831 12.2366 18.6365C12.4832 18.39 12.8175 18.2515 13.1662 18.2515H36.83C37.1786 18.2515 37.513 18.39 37.7596 18.6365C38.0061 18.8831 38.1446 19.2175 38.1446 19.5661C38.1446 19.9148 38.0061 20.2492 37.7596 20.4957C37.513 20.7423 37.1786 20.8808 36.83 20.8808H13.1662C12.8175 20.8808 12.4832 20.7423 12.2366 20.4957C11.9901 20.2492 11.8516 19.9148 11.8516 19.5661ZM11.8516 26.1394C11.8516 25.7907 11.9901 25.4564 12.2366 25.2098C12.4832 24.9633 12.8175 24.8248 13.1662 24.8248H26.3127C26.6614 24.8248 26.9958 24.9633 27.2423 25.2098C27.4889 25.4564 27.6274 25.7907 27.6274 26.1394C27.6274 26.4881 27.4889 26.8225 27.2423 27.069C26.9958 27.3156 26.6614 27.4541 26.3127 27.4541H13.1662C12.8175 27.4541 12.4832 27.3156 12.2366 27.069C11.9901 26.8225 11.8516 26.4881 11.8516 26.1394Z" fill="#425A8B" />
                            </svg>
                        </div>
                        <h3 class="text-2xl leading-[31px] font-bold">Chat to sales</h3>
                        <p class="text-[#6B83B6] text-sm leading-5 font-medium mt-1">Speak to our team.</p>
                        <a href="mailto:sales@ecom.com" class="text-sm leading-5 font-medium text-[#2B3E66] hover:text-[#0BA9ED] duration-300 mt-1">sales@ecom.com</a>
                    </div>

                    <div class="hidden max-[576px]:flex flex-col items-start text-left gap-3 px-4">
                        <div class="flex items-center gap-3 w-full">
                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.1414 4.72322L17.1057 3.83037C18.4551 3.42327 19.9065 3.52114 21.189 4.10571C22.4715 4.69028 23.4975 5.7216 24.0754 7.00715L25.92 11.1107C26.4171 12.2162 26.5555 13.4495 26.316 14.6377C26.0764 15.8259 25.4709 16.9092 24.5843 17.7357L21.3611 20.7411C21.3212 20.7783 21.2886 20.8225 21.2646 20.8714C20.9271 21.5607 21.4396 23.4018 23.045 26.1839C24.8557 29.3197 26.2539 30.5589 26.9021 30.3679L31.1325 29.0732C32.291 28.7194 33.5312 28.737 34.6793 29.1236C35.8273 29.5101 36.8256 30.2461 37.5343 31.2286L40.1557 34.8589C40.9787 35.9988 41.36 37.3987 41.2286 38.7985C41.0972 40.1983 40.4622 41.5028 39.4414 42.4697L37.1861 44.6036C36.4018 45.3465 35.4494 45.8886 34.4102 46.1837C33.371 46.4788 32.2759 46.5181 31.2182 46.2982C24.9379 44.9911 19.3111 39.9339 14.2896 31.2375C9.26643 22.5357 7.70036 15.125 9.71822 9.03037C10.056 8.01002 10.6344 7.08596 11.4046 6.33629C12.1748 5.58661 13.1141 5.03334 14.1432 4.72322H14.1414ZM14.9164 7.28751C14.2989 7.47349 13.7353 7.80538 13.2731 8.25513C12.811 8.70487 12.4638 9.25925 12.2611 9.87144C10.5218 15.1232 11.9307 21.7947 16.6093 29.8982C21.2843 37.9964 26.3521 42.55 31.7629 43.675C32.3978 43.807 33.0552 43.7834 33.679 43.6061C34.3028 43.4289 34.8744 43.1033 35.345 42.6572L37.5986 40.525C38.1484 40.0045 38.4906 39.3022 38.5615 38.5484C38.6325 37.7946 38.4273 37.0407 37.9843 36.4268L35.3629 32.7947C34.9813 32.2658 34.4439 31.8695 33.8259 31.6613C33.2078 31.4532 32.5402 31.4436 31.9164 31.6339L27.6754 32.9321C25.3289 33.6304 23.1218 31.675 20.7254 27.5214C18.695 24.0072 17.9914 21.4679 18.8593 19.6947C19.0271 19.3518 19.2557 19.0429 19.5343 18.7822L22.7575 15.7768C23.2351 15.3318 23.5613 14.7483 23.6904 14.1084C23.8194 13.4685 23.7449 12.8043 23.4771 12.2089L21.6325 8.10715C21.3214 7.41476 20.7688 6.85929 20.0781 6.54448C19.3873 6.22968 18.6056 6.17705 17.8789 6.39644L14.9146 7.28929L14.9164 7.28751Z" fill="#425A8B" />
                            </svg>
                            <h3 class="text-xl font-bold">Chat to sales</h3>
                        </div>

                        <p class="text-[#6B83B6] text-sm leading-5 font-medium pl-1">Speak to our team.</p>
                        <a href="mailto:sales@ecom.com" class="text-sm leading-5 font-semibold text-[#2B3E66] hover:text-[#0BA9ED] duration-300 pl-1">sales@ecom.com</a>
                    </div>

                </div>


                <!-- Block 2: Call us -->
                <div class="flex flex-col flex-1 max-[576px]:w-full">
                    <div class="flex flex-col items-center text-center max-[576px]:hidden">
                        <div class="mb-3">
                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.1414 4.72322L17.1057 3.83037C18.4551 3.42327 19.9065 3.52114 21.189 4.10571C22.4715 4.69028 23.4975 5.7216 24.0754 7.00715L25.92 11.1107C26.4171 12.2162 26.5555 13.4495 26.316 14.6377C26.0764 15.8259 25.4709 16.9092 24.5843 17.7357L21.3611 20.7411C21.3212 20.7783 21.2886 20.8225 21.2646 20.8714C20.9271 21.5607 21.4396 23.4018 23.045 26.1839C24.8557 29.3197 26.2539 30.5589 26.9021 30.3679L31.1325 29.0732C32.291 28.7194 33.5312 28.737 34.6793 29.1236C35.8273 29.5101 36.8256 30.2461 37.5343 31.2286L40.1557 34.8589C40.9787 35.9988 41.36 37.3987 41.2286 38.7985C41.0972 40.1983 40.4622 41.5028 39.4414 42.4697L37.1861 44.6036C36.4018 45.3465 35.4494 45.8886 34.4102 46.1837C33.371 46.4788 32.2759 46.5181 31.2182 46.2982C24.9379 44.9911 19.3111 39.9339 14.2896 31.2375C9.26643 22.5357 7.70036 15.125 9.71822 9.03037C10.056 8.01002 10.6344 7.08596 11.4046 6.33629C12.1748 5.58661 13.1141 5.03334 14.1432 4.72322H14.1414ZM14.9164 7.28751C14.2989 7.47349 13.7353 7.80538 13.2731 8.25513C12.811 8.70487 12.4638 9.25925 12.2611 9.87144C10.5218 15.1232 11.9307 21.7947 16.6093 29.8982C21.2843 37.9964 26.3521 42.55 31.7629 43.675C32.3978 43.807 33.0552 43.7834 33.679 43.6061C34.3028 43.4289 34.8744 43.1033 35.345 42.6572L37.5986 40.525C38.1484 40.0045 38.4906 39.3022 38.5615 38.5484C38.6325 37.7946 38.4273 37.0407 37.9843 36.4268L35.3629 32.7947C34.9813 32.2658 34.4439 31.8695 33.8259 31.6613C33.2078 31.4532 32.5402 31.4436 31.9164 31.6339L27.6754 32.9321C25.3289 33.6304 23.1218 31.675 20.7254 27.5214C18.695 24.0072 17.9914 21.4679 18.8593 19.6947C19.0271 19.3518 19.2557 19.0429 19.5343 18.7822L22.7575 15.7768C23.2351 15.3318 23.5613 14.7483 23.6904 14.1084C23.8194 13.4685 23.7449 12.8043 23.4771 12.2089L21.6325 8.10715C21.3214 7.41476 20.7688 6.85929 20.0781 6.54448C19.3873 6.22968 18.6056 6.17705 17.8789 6.39644L14.9146 7.28929L14.9164 7.28751Z" fill="#425A8B" />
                            </svg>
                        </div>
                        <h3 class="text-2xl leading-[31px] font-bold">Call us</h3>
                        <p class="text-[#6B83B6] text-sm leading-5 font-medium mt-1">Mon-Fri from 8am to 5pm</p>
                        <a href="mailto:sales@ecom.com" class="text-sm leading-5 font-medium hover:text-[#0BA9ED] duration-300 mt-1">+1(555)000-0000</a>
                    </div>

                    <div class="hidden max-[576px]:flex flex-col items-start text-left gap-3 px-4">
                        <div class="flex items-center gap-3 w-full">
                            <svg width="40" height="40" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0">
                                <path d="M40.7751 6.41959C41.4725 6.41959 42.1412 6.6966 42.6343 7.1897C43.1274 7.68279 43.4044 8.35156 43.4044 9.0489V30.0833C43.4044 30.7807 43.1274 31.4495 42.6343 31.9425C42.1412 32.4356 41.4725 32.7127 40.7751 32.7127H15.5706C14.176 32.7129 12.8387 33.2672 11.8528 34.2534L6.59415 39.512V9.0489C6.59415 8.35156 6.87117 7.68279 7.36426 7.1897C7.85735 6.6966 8.52612 6.41959 9.22346 6.41959H40.7751ZM9.22346 3.79028C7.82879 3.79028 6.49124 4.34431 5.50506 5.3305C4.51887 6.31668 3.96484 7.65423 3.96484 9.0489L3.96484 42.6856C3.9649 42.9457 4.04213 43.2 4.18675 43.4162C4.33137 43.6325 4.53689 43.8009 4.7773 43.9003C5.0177 43.9997 5.28218 44.0255 5.53726 43.9745C5.79235 43.9235 6.02656 43.7979 6.21027 43.6138L13.7117 36.1123C14.2047 35.6192 14.8733 35.3421 15.5706 35.342H40.7751C42.1698 35.342 43.5074 34.7879 44.4935 33.8017C45.4797 32.8156 46.0337 31.478 46.0337 30.0833V9.0489C46.0337 7.65423 45.4797 6.31668 44.4935 5.3305C43.5074 4.34431 42.1698 3.79028 40.7751 3.79028H9.22346Z" fill="#425A8B" />
                                <path d="M11.8516 12.9929C11.8516 12.6442 11.9901 12.3098 12.2366 12.0633C12.4832 11.8167 12.8175 11.6782 13.1662 11.6782H36.83C37.1786 11.6782 37.513 11.8167 37.7596 12.0633C38.0061 12.3098 38.1446 12.6442 38.1446 12.9929C38.1446 13.3415 38.0061 13.6759 37.7596 13.9225C37.513 14.169 37.1786 14.3075 36.83 14.3075H13.1662C12.8175 14.3075 12.4832 14.169 12.2366 13.9225C11.9901 13.6759 11.8516 13.3415 11.8516 12.9929ZM11.8516 19.5661C11.8516 19.2175 11.9901 18.8831 12.2366 18.6365C12.4832 18.39 12.8175 18.2515 13.1662 18.2515H36.83C37.1786 18.2515 37.513 18.39 37.7596 18.6365C38.0061 18.8831 38.1446 19.2175 38.1446 19.5661C38.1446 19.9148 38.0061 20.2492 37.7596 20.4957C37.513 20.7423 37.1786 20.8808 36.83 20.8808H13.1662C12.8175 20.8808 12.4832 20.7423 12.2366 20.4957C11.9901 20.2492 11.8516 19.9148 11.8516 19.5661ZM11.8516 26.1394C11.8516 25.7907 11.9901 25.4564 12.2366 25.2098C12.4832 24.9633 12.8175 24.8248 13.1662 24.8248H26.3127C26.6614 24.8248 26.9958 24.9633 27.2423 25.2098C27.4889 25.4564 27.6274 25.7907 27.6274 26.1394C27.6274 26.4881 27.4889 26.8225 27.2423 27.069C26.9958 27.3156 26.6614 27.4541 26.3127 27.4541H13.1662C12.8175 27.4541 12.4832 27.3156 12.2366 27.069C11.9901 26.8225 11.8516 26.4881 11.8516 26.1394Z" fill="#425A8B" />
                            </svg>
                            <h3 class="text-xl font-bold">Call us</h3>
                        </div>

                        <p class="text-[#6B83B6] text-sm leading-5 font-medium pl-1">Mon-Fri from 8am to 5pm</p>
                        <a href="mailto:sales@ecom.com" class="text-sm leading-5 font-semibold hover:text-[#0BA9ED] duration-300 pl-1">+1(555)000-0000</a>
                    </div>

                </div>

                <!-- Block 3: Visit us -->
                <div class="flex flex-col flex-1 max-[576px]:w-full">

                    <!-- block 1 -->
                    <div class="flex flex-col items-center text-center max-[576px]:hidden">
                        <div class="mb-3">
                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M43.5387 11.1569L31.1333 7.68689L18.6917 11.1916L7.12158 7.90939C6.87366 7.83905 6.6128 7.82716 6.3595 7.87465C6.1062 7.92215 5.86737 8.02774 5.66177 8.18312C5.45617 8.33851 5.2894 8.53946 5.17458 8.77017C5.05975 9.00089 4.99999 9.25509 5 9.51281V37.8961C5.00126 38.3311 5.14372 38.7538 5.40596 39.1008C5.66819 39.4478 6.03601 39.7003 6.45408 39.8202L18.6888 43.2911L31.1359 39.7849L42.8845 43.0712C43.1322 43.1405 43.3926 43.1515 43.6453 43.1033C43.8979 43.0552 44.136 42.9493 44.3409 42.7938C44.5458 42.6383 44.7119 42.4375 44.8262 42.2071C44.9406 41.9767 45.0001 41.7229 45 41.4657V13.083C44.9989 12.6467 44.8557 12.2227 44.592 11.8752C44.3283 11.5276 43.9586 11.2755 43.5387 11.1569ZM17.25 40.1106L7.66667 37.3919V10.8359L17.25 13.5546V40.1106ZM29.8013 37.39L19.9167 40.1743V13.6169L29.8013 10.8326V37.39ZM42.3333 40.1476L32.4679 37.3884V10.8291L42.3333 13.5884V40.1476Z" fill="#425A8B" />
                            </svg>
                        </div>
                        <h3 class="text-2xl leading-[31px] font-bold">Visit us</h3>
                        <p class="text-[#6B83B6] text-sm leading-5 font-medium mt-1">Visit our office</p>
                        <a href="mailto:sales@ecom.com" class="text-sm leading-5 font-medium hover:text-[#0BA9ED] duration-300 mt-1">205 North Michigan Avenue, Suite 810
                            Chicago, 60601, USA</a>
                    </div>

                    <div class="hidden max-[576px]:flex flex-col items-start text-left gap-3 px-4">
                        <div class="flex items-center gap-3 w-full">
                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M43.5387 11.1569L31.1333 7.68689L18.6917 11.1916L7.12158 7.90939C6.87366 7.83905 6.6128 7.82716 6.3595 7.87465C6.1062 7.92215 5.86737 8.02774 5.66177 8.18312C5.45617 8.33851 5.2894 8.53946 5.17458 8.77017C5.05975 9.00089 4.99999 9.25509 5 9.51281V37.8961C5.00126 38.3311 5.14372 38.7538 5.40596 39.1008C5.66819 39.4478 6.03601 39.7003 6.45408 39.8202L18.6888 43.2911L31.1359 39.7849L42.8845 43.0712C43.1322 43.1405 43.3926 43.1515 43.6453 43.1033C43.8979 43.0552 44.136 42.9493 44.3409 42.7938C44.5458 42.6383 44.7119 42.4375 44.8262 42.2071C44.9406 41.9767 45.0001 41.7229 45 41.4657V13.083C44.9989 12.6467 44.8557 12.2227 44.592 11.8752C44.3283 11.5276 43.9586 11.2755 43.5387 11.1569ZM17.25 40.1106L7.66667 37.3919V10.8359L17.25 13.5546V40.1106ZM29.8013 37.39L19.9167 40.1743V13.6169L29.8013 10.8326V37.39ZM42.3333 40.1476L32.4679 37.3884V10.8291L42.3333 13.5884V40.1476Z" fill="#425A8B" />
                            </svg>
                            <h3 class="text-xl font-bold text-[#2B3E66]">Visit us</h3>
                        </div>

                        <p class="text-[#6B83B6] text-sm leading-5 font-medium pl-1">Visit our office</p>
                        <a href="mailto:sales@ecom.com" class="text-sm leading-5 font-semibold text-[#2B3E66] hover:text-[#0BA9ED] duration-300 pl-1">205 North Michigan Avenue, Suite 810
                            Chicago, 60601, USA</a>
                    </div>

                </div>

            </div>
        </div>


    </div>

    <section class="mt-20 mb-5 flex gap-[15px] max-w-[1360px] mx-auto max-[576px]:flex-wrap max-[576px]:w-full max-[576px]:px-5">
        <div class="icon-box w-[20%] rounded duration-300 hover:bg-[#F4F7FC] border border-[#D5DFE4] border-solid hover:border-[#8C9EC5] flex items-center gap-3 p-[15px] max-[576px]:w-full">
            <div>
                <img src="http://127.0.0.1:8000/assets/delivery.svg" alt="Logo">
            </div>
            <div>
                <h2 class="text-[20px] leading-7 font-bold">Free Delivery</h2>
                <p class="text-sm text-[#8C9EC5] leading-5">From all orders over $10</p>
            </div>
        </div>

        <div class="icon-box w-[20%] rounded duration-300 hover:bg-[#F4F7FC] border border-[#D5DFE4] border-solid hover:border-[#8C9EC5] flex items-center gap-3 p-[15px] max-[576px]:w-full">
            <div>
                <img src="http://127.0.0.1:8000/assets/support.svg" alt="Logo">
            </div>
            <div>
                <h2 class="text-[20px] leading-7 font-bold">Support 24/7</h2>
                <p class="text-sm text-[#8C9EC5] leading-5">Shop with an expert</p>
            </div>
        </div>

        <div class="icon-box w-[20%] rounded duration-300 hover:bg-[#F4F7FC] border border-[#D5DFE4] border-solid hover:border-[#8C9EC5] flex items-center gap-3 p-[15px] max-[576px]:w-full">
            <div>
                <img src="http://127.0.0.1:8000/assets/voucher.svg" alt="Logo">
            </div>
            <div>
                <h2 class="text-[20px] leading-7 font-bold">Gift voucher</h2>
                <p class="text-sm text-[#8C9EC5] leading-5">Refer a friend</p>
            </div>
        </div>

        <div class="icon-box w-[20%] rounded duration-300 hover:bg-[#F4F7FC] border border-[#D5DFE4] border-solid hover:border-[#8C9EC5] flex items-center gap-3 p-[15px] max-[576px]:w-full">
            <div>
                <img src="http://127.0.0.1:8000/assets/return.svg" alt="Logo">
            </div>
            <div>
                <h2 class="text-[20px] leading-7 font-bold">Return &amp; Refund</h2>
                <p class="text-sm text-[#8C9EC5] leading-5">Free return over $200</p>
            </div>
        </div>

        <div class="icon-box w-[20%] rounded duration-300 hover:bg-[#F4F7FC] border border-[#D5DFE4] border-solid hover:border-[#8C9EC5] flex items-center gap-3 p-[15px] max-[576px]:w-full">
            <div>
                <img src="http://127.0.0.1:8000/assets/secure.svg" alt="Logo">
            </div>
            <div>
                <h2 class="text-[20px] leading-7 font-bold">Secure payment</h2>
                <p class="text-sm text-[#8C9EC5] leading-5">100% Protected</p>
            </div>
        </div>
    </section>

    <section class="bg-[#0E224d] mt-14 py-[90px] max-[576px]:pb-[200px] px-0 text-white bg-img bg-no-repeat max-[576px]:px-[20px] max-[576px]:pt-[60px]">
        <div class="flex items-center gap-[100px] max-[576px]:flex-wrap max-[576px]:gap-[30px] max-w-[1360px] mx-auto">
            <div>
                <h2 class="text-[32px] max-[576px]:text-[32px] max-[576px]:leading-15 max-[576px]:font-[600] font-bold leading-[41px]">
                    Subscrible &amp; Get <span class="text-[#FFB067]">10%</span> Discount
                </h2>
                <p class="text-xl leading-7 font-[400] max-[576px]:text-sm max-[576px]:mt-3">Get E-mail updates about our latest shop and special offers.</p>
            </div>

            <div class="flex max-[576px]:justify-center">
                <input type="email" class="text-[#9ca3af] focus:outline-none text-xs leading-[18px] block w-[350px] max-[576px]:w-[280px] h-[50px] py-[5px] px-5 rounded !rounded-r-none bg-white max-[576px]:py-[0px]" placeholder="Your email Address">
                <button href="#" class="bg-[#FD9636] duration-300 hover:bg-[#425A8B] font-bold cursor-pointer text-sm leading-5 py-[10px] px-[22px] rounded rounded-l-none max-[576px]:w-[30%] max-[576px]:font-[500] max-[576px]:text-sm" type="submit">Sign Up</button>
            </div>
        </div>
    </section>

    <!-- Page preloader -->
    <div id="preloader-active" class="site-preloader" role="status" aria-label="Loading page">
        <div class="preloader">
            <div class="preloader-inner">
                <div class="preloader-content">
                    <img src="{{ asset('assets/favicon.svg') }}" alt="Logo">
                    <div class="preloader-dots" aria-hidden="true">
                        <span class="preloader-dot preloader-dot-one"></span>
                        <span class="preloader-dot preloader-dot-two"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
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
                        <path d="M12 2C6.477 2 2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.891h-2.33v6.988C18.343 21.129 22 16.99 22 12c0-5.523-4.477-10-10-10z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48">
                        <defs>
                            <linearGradient id="instaGrad" x1="0%" y1="100%" x2="100%" y2="0%">
                                <stop offset="0%" stop-color="#9DB0D4"></stop>
                                <stop offset="25%" stop-color="#9DB0D4"></stop>
                                <stop offset="50%" stop-color="#9DB0D4"></stop>
                                <stop offset="75%" stop-color="#9DB0D4"></stop>
                                <stop offset="100%" stop-color="#9DB0D4"></stop>
                            </linearGradient>
                        </defs>
                        <circle cx="24" cy="24" r="24" fill="url(#instaGrad)"></circle>
                        <rect x="12" y="12" width="24" height="24" rx="7" fill="none" stroke="#ffffff" stroke-width="2"></rect>
                        <circle cx="24" cy="24" r="5" fill="none" stroke="#ffffff" stroke-width="2"></circle>
                        <circle cx="30" cy="18" r="1.5" fill="#ffffff"></circle>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48">
                        <circle cx="24" cy="24" r="24" fill="#9DB0D4"></circle>
                        <path d="M36 16.5c-1 .4-2 .7-3.1.8 1.1-.7 2-1.8 2.4-3.1-1 .6-2.2 1.1-3.5 1.3-1-1.1-2.4-1.8-4-1.8-3 0-5.5 2.5-5.5 5.5 0 .4 0 .9.1 1.3-4.6-.2-8.7-2.4-11.4-5.8-.5.8-.7 1.7-.7 2.8 0 1.9 1 3.6 2.4 4.6-.9 0-1.8-.3-2.5-.7v.1c0 2.7 1.9 4.9 4.4 5.4-.5.1-1 .2-1.5.2-.4 0-.7 0-1.1-.1.7 2.2 2.7 3.8 5.1 3.8-1.9 1.5-4.3 2.4-6.9 2.4-.4 0-.9 0-1.3-.1 2.4 1.6 5.3 2.5 8.4 2.5 10.1 0 15.6-8.4 15.6-15.6v-.7c1.1-.8 2-1.8 2.8-2.9z" fill="#ffffff"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48">
                        <circle cx="24" cy="24" r="24" fill="#9DB0D4"></circle>
                        <path d="M19 35v-11h-3.6V35H19zM17.2 22.5c1.2 0 1.9-.8 1.9-1.8 0-1-.7-1.8-1.9-1.8-1.2 0-1.9.8-1.9 1.8 0 1 .7 1.8 1.9 1.8zM35 35v-6c0-3.2-1.7-4.7-4-4.7-1.8 0-2.7 1-3.2 1.8v-1.6h-3.6c.1 1 0 10.5 0 10.5h3.6v-5.9c0-.3 0-.6.1-.8.3-.8 1-1.6 2.2-1.6 1.6 0 2.2 1.2 2.2 3v5.3H35z" fill="#ffffff"></path>
                    </svg>
                </li>
            </ul>

            <ul>
                <h3 class="text-[#0E224D] mb-[30px] text-2xl leading-[31px] font-bold max-[576px]:mb-5">Make Money with Us</h3>

                <li class="flex items-center mb-2">
                    <svg class="h-[16px]" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="#8799BC">
                        <path d="M8 5.5a1 1 0 0 1 1.6-.8l8 6a1.6 1.6 0 0 1 0 2.6l-8 6A1 1 0 0 1 8 18.5z"></path>
                    </svg>
                    <a href="#">
                        Mission &amp; Vision</a>
                </li>

                <li class="flex items-center mb-2">
                    <svg class="h-[16px]" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="#8799BC">
                        <path d="M8 5.5a1 1 0 0 1 1.6-.8l8 6a1.6 1.6 0 0 1 0 2.6l-8 6A1 1 0 0 1 8 18.5z"></path>
                    </svg>
                    <a href="#">
                        Our Team</a>
                </li>

                <li class="flex items-center mb-2">
                    <svg class="h-[16px]" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="#8799BC">
                        <path d="M8 5.5a1 1 0 0 1 1.6-.8l8 6a1.6 1.6 0 0 1 0 2.6l-8 6A1 1 0 0 1 8 18.5z"></path>
                    </svg>
                    <a href="#">
                        Careers</a>
                </li>

                <li class="flex items-center mb-2">
                    <svg class="h-[16px]" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="#8799BC">
                        <path d="M8 5.5a1 1 0 0 1 1.6-.8l8 6a1.6 1.6 0 0 1 0 2.6l-8 6A1 1 0 0 1 8 18.5z"></path>
                    </svg>
                    <a href="#">
                        Press &amp; Media</a>
                </li>

                <li class="flex items-center mb-2">
                    <svg class="h-[16px]" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="#8799BC">
                        <path d="M8 5.5a1 1 0 0 1 1.6-.8l8 6a1.6 1.6 0 0 1 0 2.6l-8 6A1 1 0 0 1 8 18.5z"></path>
                    </svg>
                    <a href="#">
                        Advertising</a>
                </li>

                <li class="flex items-center">
                    <svg class="h-[16px]" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="#8799BC">
                        <path d="M8 5.5a1 1 0 0 1 1.6-.8l8 6a1.6 1.6 0 0 1 0 2.6l-8 6A1 1 0 0 1 8 18.5z"></path>
                    </svg>
                    <a href="#">
                        Testimonials</a>
                </li>
            </ul>

            <ul class="max-[576px]:w-[100%]">
                <h3 class="text-[#0E224D] mb-[30px] text-2xl leading-[31px] font-bold">Company</h3>

                <li class="flex items-center mb-2">
                    <svg class="h-[16px]" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="#8799BC">
                        <path d="M8 5.5a1 1 0 0 1 1.6-.8l8 6a1.6 1.6 0 0 1 0 2.6l-8 6A1 1 0 0 1 8 18.5z"></path>
                    </svg>
                    <a href="#">
                        Our Blog</a>
                </li>

                <li class="flex items-center mb-2">
                    <svg class="h-[16px]" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="#8799BC">
                        <path d="M8 5.5a1 1 0 0 1 1.6-.8l8 6a1.6 1.6 0 0 1 0 2.6l-8 6A1 1 0 0 1 8 18.5z"></path>
                    </svg>
                    <a href="#">
                        Plans &amp; Pricing</a>
                </li>

                <li class="flex items-center mb-2">
                    <svg class="h-[16px]" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="#8799BC">
                        <path d="M8 5.5a1 1 0 0 1 1.6-.8l8 6a1.6 1.6 0 0 1 0 2.6l-8 6A1 1 0 0 1 8 18.5z"></path>
                    </svg>
                    <a href="#">
                        Knowledge Base</a>
                </li>

                <li class="flex items-center mb-2">
                    <svg class="h-[16px]" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="#8799BC">
                        <path d="M8 5.5a1 1 0 0 1 1.6-.8l8 6a1.6 1.6 0 0 1 0 2.6l-8 6A1 1 0 0 1 8 18.5z"></path>
                    </svg>
                    <a href="#">
                        Cookie Policy</a>
                </li>

                <li class="flex items-center mb-2">
                    <svg class="h-[16px]" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="#8799BC">
                        <path d="M8 5.5a1 1 0 0 1 1.6-.8l8 6a1.6 1.6 0 0 1 0 2.6l-8 6A1 1 0 0 1 8 18.5z"></path>
                    </svg>
                    <a href="#">
                        Office Center

                    </a>
                </li>
                <li class="flex items-center"><a href="#">
                        <svg class="h-[16px]" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="#8799BC">
                            <path d="M8 5.5a1 1 0 0 1 1.6-.8l8 6a1.6 1.6 0 0 1 0 2.6l-8 6A1 1 0 0 1 8 18.5z"></path>
                        </svg>
                    </a><a href="#">
                        News &amp; Events</a>
                </li>
            </ul>

            <ul>
                <h3 class="text-[#0E224D] mb-[30px] text-2xl leading-[31px] font-bold">My account</h3>

                <li class="flex items-center mb-2">
                    <svg class="h-[16px]" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="#8799BC">
                        <path d="M8 5.5a1 1 0 0 1 1.6-.8l8 6a1.6 1.6 0 0 1 0 2.6l-8 6A1 1 0 0 1 8 18.5z"></path>
                    </svg>
                    <a href="#">
                        FAQs</a>
                </li>

                <li class="flex items-center mb-2">
                    <svg class="h-[16px]" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="#8799BC">
                        <path d="M8 5.5a1 1 0 0 1 1.6-.8l8 6a1.6 1.6 0 0 1 0 2.6l-8 6A1 1 0 0 1 8 18.5z"></path>
                    </svg>
                    <a href="#">
                        Editor Help</a>
                </li>

                <li class="flex items-center mb-2">
                    <svg class="h-[16px]" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="#8799BC">
                        <path d="M8 5.5a1 1 0 0 1 1.6-.8l8 6a1.6 1.6 0 0 1 0 2.6l-8 6A1 1 0 0 1 8 18.5z"></path>
                    </svg>
                    <a href="#">
                        Community</a>
                </li>

                <li class="flex items-center mb-2">
                    <svg class="h-[16px]" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="#8799BC">
                        <path d="M8 5.5a1 1 0 0 1 1.6-.8l8 6a1.6 1.6 0 0 1 0 2.6l-8 6A1 1 0 0 1 8 18.5z"></path>
                    </svg>
                    <a href="#">
                        Live Chatting</a>
                </li>

                <li class="flex items-center mb-2">
                    <svg class="h-[16px]" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="#8799BC">
                        <path d="M8 5.5a1 1 0 0 1 1.6-.8l8 6a1.6 1.6 0 0 1 0 2.6l-8 6A1 1 0 0 1 8 18.5z"></path>
                    </svg>
                    <a href="#">
                        Contact Us

                    </a>
                </li>
                <li class="flex items-center"><a href="#">
                        <svg class="h-[16px]" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="#8799BC">
                            <path d="M8 5.5a1 1 0 0 1 1.6-.8l8 6a1.6 1.6 0 0 1 0 2.6l-8 6A1 1 0 0 1 8 18.5z"></path>
                        </svg>
                    </a><a href="#">
                        Support Center</a>
                </li>
            </ul>

            <ul>
                <h3 class="text-[#0E224D] mb-[30px] text-2xl leading-[31px] font-bold">App &amp; Payment</h3>

                <p class="leading-6 text-[#425A8B]">Download our Apps and get extra 15% <br>Discount on your first Order…!</p>

                <li class="flex gap-3  my-[20px] mb-[20px]">
                    <img src="http://127.0.0.1:8000/assets/appstore.png" alt="appstore">

                    <img src="http://127.0.0.1:8000/assets/google-play.png" alt="appstore">
                </li>
                <p>Secured Payment Gateways</p>

                <img class="mt-1" src="http://127.0.0.1:8000/assets/payment-method.png" alt="appstore">
            </ul>
        </div>
    </footer>

    <!-- ecom-footer -->
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
        <button type="button" aria-label="Back to top" onclick="window.scrollTo({top: 0, behavior: 'smooth'})" class="fixed bottom-[36px] right-[34px] flex h-[54px] w-[54px] items-center justify-center rounded-full bg-[#405b91] text-[29px] text-white hover:bg-[#304777]">↑</button>
    </footer>

    <script>
        (() => {
            const slider = document.getElementById("logo-slider");
            const track = document.getElementById("logo-track");

            if (!slider || !track) return;

            const mobileQuery = window.matchMedia("(max-width: 576px)");
            const logos = Array.from(track.children);
            const visibleCount = 3;

            let currentIndex = 0;
            let startX = 0;
            let startY = 0;
            let dragX = 0;
            let isDragging = false;
            let autoSlide = null;

            function maxIndex() {
                return Math.max(0, logos.length - visibleCount);
            }

            function updateSlider(animate = true) {
                if (!mobileQuery.matches) {
                    track.style.transform = "";
                    track.style.transition = "";
                    return;
                }

                track.style.transition = animate ? "transform 400ms ease" : "none";

                const slideWidth = slider.clientWidth / visibleCount;

                track.style.transform =
                    `translateX(-${currentIndex * slideWidth}px)`;
            }

            function stopAutoSlide() {
                if (autoSlide !== null) {
                    window.clearInterval(autoSlide);
                    autoSlide = null;
                }
            }

            function startAutoSlide() {
                stopAutoSlide();

                if (!mobileQuery.matches || maxIndex() === 0) return;

                autoSlide = window.setInterval(() => {
                    currentIndex =
                        currentIndex >= maxIndex() ? 0 : currentIndex + 1;

                    updateSlider();
                }, 2500);
            }

            function configureSlider() {
                stopAutoSlide();

                if (mobileQuery.matches) {
                    currentIndex = Math.min(currentIndex, maxIndex());

                    track.style.flexWrap = "nowrap";

                    logos.forEach((logo) => {
                        logo.style.flex = "0 0 33.333333%";
                        logo.style.width = "33.333333%";
                        logo.style.boxSizing = "border-box";
                    });

                    updateSlider(false);
                    startAutoSlide();
                } else {
                    currentIndex = 0;

                    track.style.flexWrap = "";
                    track.style.transform = "";
                    track.style.transition = "";

                    logos.forEach((logo) => {
                        logo.style.flex = "";
                        logo.style.width = "";
                        logo.style.boxSizing = "";
                    });
                }
            }

            slider.addEventListener("pointerdown", (event) => {
                if (!mobileQuery.matches) return;

                isDragging = true;
                startX = event.clientX;
                startY = event.clientY;
                dragX = 0;

                stopAutoSlide();
                track.style.transition = "none";

                slider.setPointerCapture?.(event.pointerId);
            });

            slider.addEventListener("pointermove", (event) => {
                if (!isDragging || !mobileQuery.matches) return;

                dragX = event.clientX - startX;

                const dragY = event.clientY - startY;

                if (Math.abs(dragX) > Math.abs(dragY)) {
                    event.preventDefault();

                    const slideWidth = slider.clientWidth / visibleCount;

                    track.style.transform =
                        `translateX(${-currentIndex * slideWidth + dragX}px)`;
                }
            });

            function finishDrag() {
                if (!isDragging) return;

                isDragging = false;

                if (mobileQuery.matches) {
                    const threshold =
                        slider.clientWidth / visibleCount / 4;

                    if (dragX < -threshold) {
                        currentIndex = Math.min(maxIndex(), currentIndex + 1);
                    } else if (dragX > threshold) {
                        currentIndex = Math.max(0, currentIndex - 1);
                    }

                    updateSlider();
                    startAutoSlide();
                }
            }

            slider.addEventListener("pointerup", finishDrag);
            slider.addEventListener("pointercancel", finishDrag);
            slider.addEventListener("lostpointercapture", finishDrag);

            window.addEventListener("resize", configureSlider);

            if (mobileQuery.addEventListener) {
                mobileQuery.addEventListener("change", configureSlider);
            } else {
                mobileQuery.addListener(configureSlider);
            }

            configureSlider();
        })();

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
                window.location.href = @json(route('checkout'));
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

        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.best-sellers-section').forEach(function(section) {
                const tabs = section.querySelectorAll('.product-tab');
                const cards = section.querySelectorAll('.best-product-card');

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
                window.location.href = "{{ route('checkout') }}";
            });
            renderCart();
        });

        document.addEventListener("DOMContentLoaded", function() {
            const seeMoreButton = document.getElementById("seeMoreCategories");
            const extraCategories = document.getElementById("extraCategories");
            const seeMoreText = document.getElementById("seeMoreText");
            const seeMoreArrow = document.getElementById("seeMoreArrow");

            if (!seeMoreButton || !extraCategories) return;

            seeMoreButton.addEventListener("click", function(event) {
                event.preventDefault();

                const isExpanded = seeMoreButton.getAttribute("aria-expanded") === "true";

                if (isExpanded) {
                    extraCategories.classList.remove("max-h-[500px]", "opacity-100", "mt-2");
                    extraCategories.classList.add("max-h-0", "opacity-0");

                    seeMoreButton.setAttribute("aria-expanded", "false");
                    seeMoreText.textContent = "See More";

                    if (seeMoreArrow) {
                        seeMoreArrow.classList.remove("rotate-180");
                    }
                } else {
                    extraCategories.classList.remove("max-h-0", "opacity-0");
                    extraCategories.classList.add("max-h-[500px]", "opacity-100", "mt-2");

                    seeMoreButton.setAttribute("aria-expanded", "true");
                    seeMoreText.textContent = "See Less";

                    if (seeMoreArrow) {
                        seeMoreArrow.classList.add("rotate-180");
                    }
                }
            });
        });

        function toggleFilter(element) {
            const box = element.querySelector('.filter-box');
            const label = element.querySelector('.filter-label');
            const checked = element.classList.toggle('filter-selected');

            if (checked) {
                box.classList.remove('border-[#425A8B]');
                box.classList.add('bg-[#FF8A32]', 'border-[#FF8A32]');

                box.innerHTML = `
                <svg class="w-[15px] h-[15px] text-white"
                     viewBox="0 0 16 16" fill="none">
                    <path d="M3 8L6.5 11.5L13 4.5"
                          stroke="currentColor"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"/>
                </svg>
            `;

                label.classList.remove('text-[#8C9EC5]');
                label.classList.add('text-black');
            } else {
                box.classList.remove('bg-[#FF8A32]', 'border-[#FF8A32]');
                box.classList.add('border-[#425A8B]');
                box.innerHTML = '';

                label.classList.remove('text-black');
                label.classList.add('text-[#8C9EC5]');
            }
        }

        document.addEventListener("DOMContentLoaded", () => {
            const colorPickerContainer = document.querySelector(".colors-picker");
            if (!colorPickerContainer) return;

            const colorButtons = colorPickerContainer.querySelectorAll("ul button");

            colorButtons.forEach((button) => {
                button.addEventListener("click", () => {
                    colorButtons.forEach((btn) => {
                        const svg = btn.querySelector("svg");
                        if (svg) {
                            svg.classList.remove("scale-100", "opacity-100");
                            svg.classList.add("scale-0", "opacity-0");
                        }
                    });

                    const currentSvg = button.querySelector("svg");
                    if (currentSvg) {
                        currentSvg.classList.remove("scale-0", "opacity-0");
                        currentSvg.classList.add("scale-100", "opacity-100");
                    }
                });
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            const openBtn = document.getElementById('moreFiltersBtn');
            const closeBtn = document.getElementById('closeAdvanceFilters');
            const dropdown = document.getElementById('advanceFiltersDropdown');
            const applyBtn = document.getElementById('applyAdvanceFilters');
            const resetBtn = document.getElementById('resetAdvanceFilters');

            if (!openBtn || !closeBtn || !dropdown) return;

            // Open dropdown
            openBtn.addEventListener('click', function() {
                dropdown.classList.remove('hidden');
                dropdown.classList.add('flex');
                document.body.classList.add('overflow-hidden');
            });

            // Close using X button
            closeBtn.addEventListener('click', closeDropdown);

            // Close when clicking outside the modal
            dropdown.addEventListener('click', function(event) {
                if (event.target === dropdown) {
                    closeDropdown();
                }
            });

            // Close using Escape key
            document.addEventListener('keydown', function(event) {
                if (event.key === 'Escape' && !dropdown.classList.contains('hidden')) {
                    closeDropdown();
                }
            });

            function closeDropdown() {
                dropdown.classList.add('hidden');
                dropdown.classList.remove('flex');
                document.body.classList.remove('overflow-hidden');
            }

            // Reset all checkboxes and rating
            if (resetBtn) {
                resetBtn.addEventListener('click', function() {
                    dropdown.querySelectorAll('input[type="checkbox"], input[type="radio"]')
                        .forEach(function(input) {
                            input.checked = false;
                        });

                    // Deselect product tags
                    dropdown.querySelectorAll('button').forEach(function(button) {
                        if (
                            button.id !== 'closeAdvanceFilters' &&
                            button.id !== 'applyAdvanceFilters' &&
                            button.id !== 'resetAdvanceFilters'
                        ) {
                            button.classList.remove('bg-[#EEF2F6]');
                        }
                    });
                });
            }

            // Apply Filter closes the dropdown
            if (applyBtn) {
                applyBtn.addEventListener('click', function() {
                    closeDropdown();
                });
            }
        });
    </script>
</body>

</html>