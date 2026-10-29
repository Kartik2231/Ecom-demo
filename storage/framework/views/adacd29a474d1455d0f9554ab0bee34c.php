<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details | Ecom Demo</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @media (max-width: 640px) {
            main.container {
                width: 100% !important;
                max-width: 100% !important;
                padding-left: 16px;
                padding-right: 16px;
            }
        }
    </style>

    <style>
        .single-product-page {
            max-width: 1440px;
            width: 90%;
            margin: 30px auto 70px;
            color: #425a8b;
            font-family: 'DM Sans', sans-serif;
            line-height: 1.5
        }

        .sp-continue {
            display: inline-block;
            margin-bottom: 22px;
            color: #425a8b;
            text-decoration: none;
            font-size: 14px
        }

        .sp-product-layout {
            display: grid;
            grid-template-columns: minmax(0, 1fr) minmax(0, 1fr);
            gap: 46px;
            align-items: start
        }

        .sp-gallery {
            min-width: 0
        }

        .sp-main-image {
            height: 530px;
            position: relative;
            overflow: hidden;
            border: 1px solid #dbe3f0;
            background: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: zoom-in
        }

        .sp-main-image>img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            padding: 30px;
            transition: transform .18s ease;
            transform-origin: center center
        }

        .sp-main-image:hover>img {
            transform: scale(1.75)
        }

        .sp-zoom-trigger {
            position: absolute;
            right: 18px;
            top: 18px;
            width: 42px;
            height: 42px;
            border: 1px solid #dbe3f0;
            border-radius: 4px;
            background: #fff;
            color: #425a8b;
            font-size: 30px;
            line-height: 1;
            opacity: 0;
            transition: opacity .2s;
            cursor: zoom-in
        }

        .sp-main-image:hover .sp-zoom-trigger {
            opacity: 1
        }

        .sp-zoom-hint {
            position: absolute;
            left: 16px;
            bottom: 14px;
            background: #fff;
            padding: 6px 10px;
            font-size: 12px;
            opacity: 0;
            transition: opacity .2s
        }

        .sp-main-image:hover .sp-zoom-hint {
            opacity: .9
        }

        .sp-thumbnails {
            display: flex;
            gap: 12px;
            margin-top: 14px;
            flex-wrap: wrap
        }

        .sp-thumb {
            width: 76px;
            height: 76px;
            border: 1px solid #dbe3f0;
            background: #fff;
            padding: 6px;
            cursor: pointer
        }

        .sp-thumb.active,
        .sp-thumb:hover {
            border-color: #425a8b
        }

        .sp-thumb img {
            width: 100%;
            height: 100%;
            object-fit: contain
        }

        .sp-product-info {
            padding-top: 2px
        }

        .sp-eyebrow {
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: .12em;
            color: #8c9ec5;
            margin-bottom: 8px
        }

        .sp-product-info h1 {
            color: #425a8b;
            margin-bottom: 25px;
            font-size: 32px;
            line-height: 41px;
            font-weight: bold;
        }

        .sp-rating {
            display: flex;
            gap: 10px;
            align-items: center;
            font-size: 14px;
            color: #8c9ec5
        }

        .sp-rating span:first-child {
            color: #ff9b55;
            letter-spacing: 1px;
            font-size: 18px
        }

        .sp-price-line {
            display: flex;
            align-items: center;
            gap: 14px;
            margin: 23px 0 18px
        }

        .sp-price-line strong {
            font-size: 38px;
            line-height: 1.2;
            color: #425a8b
        }

        .sp-price-line del {
            font-size: 25px;
            color: #9aabcc
        }

        .sp-feature-list {
            list-style: none;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 5px 22px;
            margin: 0 0 20px;
            padding: 0;
            font-size: 15px
        }

        .sp-feature-list li:before {
            content: '•';
            margin-right: 9px
        }

        .sp-description {
            font-size: 14px;
            color: #6f82a7;
            margin: 16px 0
        }

        .sp-option-row {
            display: flex;
            gap: 5px;
            align-items: center;
            font-size: 14px;
            margin: 15px 0 10px
        }

        .sp-option-row strong {
            font-weight: 600
        }

        .sp-color-options {
            display: flex;
            gap: 9px;
            margin-bottom: 20px
        }

        .sp-color {
            width: 42px;
            height: 42px;
            border: 1px solid #dbe3f0;
            background: var(--swatch);
            cursor: pointer;
            outline: 2px solid transparent;
            outline-offset: 2px
        }

        .sp-color.active {
            outline-color: #fd9636;
            border-color: #fd9636
        }

        .sp-choices {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin: 16px 0 26px
        }

        .sp-button-options {
            display: flex;
            flex-wrap: wrap;
            gap: 7px
        }

        .sp-button-options button {
            padding: 8px 11px;
            border: 1px solid #9aabcc;
            background: #fff;
            color: #425a8b;
            cursor: pointer;
            font-size: 13px
        }

        .sp-button-options button.active,
        .sp-button-options button:hover {
            border-color: #fd9636;
            color: #fd9636;
            background: #fffaf4
        }

        .sp-buy-row>label {
            display: block;
            font-size: 14px;
            margin-bottom: 10px
        }

        .sp-purchase-controls {
            display: flex;
            gap: 12px;
            align-items: stretch;
            flex-wrap: wrap
        }

        .sp-quantity {
            display: flex;
            align-items: center;
            border-bottom: 2px solid #dbe3f0;
            min-width: 125px
        }

        .sp-quantity button {
            border: 0;
            background: white;
            color: #425a8b;
            font-size: 25px;
            width: 30px;
            cursor: pointer
        }

        .sp-quantity input {
            width: 55px;
            border: 0;
            text-align: center;
            font-size: 20px;
            color: #425a8b;
            appearance: textfield
        }

        .sp-quantity input::-webkit-inner-spin-button,
        .sp-quantity input::-webkit-outer-spin-button {
            -webkit-appearance: none
        }

        .sp-cart-btn,
        .sp-buy-btn {
            min-height: 46px;
            padding: 0 23px;
            border: 1px solid #8ca0cc;
            border-radius: 4px;
            background: white;
            color: #425a8b;
            font-weight: 700;
            cursor: pointer;
            flex: 1
        }

        .sp-buy-btn {
            background: #425a8b;
            color: white;
            border-color: #425a8b
        }

        .sp-cart-btn:hover {
            background: #425a8b;
            color: white
        }

        .sp-buy-btn:hover {
            background: #fd9636;
            border-color: #fd9636
        }

        .sp-extra-actions {
            display: flex;
            gap: 22px;
            margin-top: 20px
        }

        .sp-extra-actions button {
            border: 0;
            background: transparent;
            color: #425a8b;
            cursor: pointer;
            font-size: 14px
        }

        .sp-extra-actions button.active {
            color: #fd9636
        }

        .sp-feedback {
            min-height: 22px;
            margin-top: 12px;
            font-size: 13px
        }

        .sp-bought-together {
            border-top: 1px solid #dbe3f0;
            margin-top: 60px;
            padding-top: 25px
        }

        .sp-bought-together h2 {
            font-size: 28px;
            line-height: 1.25;
            margin-bottom: 25px;
            color: #425a8b
        }

        .sp-bought-top {
            display: grid;
            grid-template-columns: minmax(0, 1.5fr) minmax(230px, .8fr);
            gap: 35px;
            align-items: center
        }

        .sp-bought-products {
            display: flex;
            align-items: center;
            gap: 15px
        }

        .sp-bought-card {
            width: clamp(100px, 15vw, 210px);
            height: clamp(100px, 12vw, 180px);
            border: 5px solid #dbe3f0;
            border-radius: 4px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 12px
        }

        .sp-bought-card img {
            width: 100%;
            height: 100%;
            object-fit: contain
        }

        .sp-plus {
            font-size: 30px
        }

        .sp-bought-summary {
            display: flex;
            align-items: center;
            gap: 12px;
            flex-wrap: wrap
        }

        .sp-bought-summary strong {
            font-size: 36px
        }

        .sp-bought-summary span {
            font-size: 19px
        }

        .sp-bought-summary button {
            width: 100%;
            max-width: 270px;
            padding: 11px;
            border: 1px solid #8ca0cc;
            background: #fff;
            color: #425a8b;
            border-radius: 4px;
            font-weight: 700;
            cursor: pointer
        }

        .sp-bought-checks {
            display: grid;
            gap: 7px;
            margin-top: 32px
        }

        .sp-bought-checks label {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            font-size: 15px
        }

        .sp-bought-checks input {
            accent-color: #425a8b;
            margin-top: 5px;
            width: 17px;
            height: 17px;
            flex-shrink: 0
        }

        .sp-details {
            margin-top: 90px
        }

        .sp-tabs {
            display: flex;
            gap: 34px;
            align-items: center;
            flex-wrap: wrap;
            border-bottom: 1px solid #eef1f6;
            margin-bottom: 22px
        }

        .sp-tabs button {
            padding: 0 0 14px;
            border: 0;
            border-bottom: 3px solid transparent;
            background: transparent;
            color: #8c9ec5;
            font-size: clamp(17px, 2vw, 28px);
            font-weight: 700;
            cursor: pointer
        }

        .sp-tabs button.active {
            color: #425a8b;
            border-bottom-color: #425a8b
        }

        .sp-tab-content {
            font-size: 15px;
            line-height: 1.55
        }

        .sp-tab-content p {
            margin: 0 0 18px
        }

        .sp-more-wrap {
            text-align: center;
            margin-top: 28px
        }

        .sp-more-wrap button {
            min-width: 310px;
            padding: 12px 20px;
            border: 1px solid #b7c5df;
            background: #fff;
            color: #425a8b;
            border-radius: 10px;
            font-weight: 700;
            cursor: pointer
        }

        .sp-more-wrap button:hover {
            background: #425a8b;
            color: #fff
        }

        .sp-lightbox {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(10, 20, 40, .88);
            z-index: 99999;
            align-items: center;
            justify-content: center;
            padding: 5vh 5vw
        }

        .sp-lightbox.open {
            display: flex
        }

        .sp-lightbox img {
            max-width: 90vw;
            max-height: 88vh;
            object-fit: contain;
            background: #fff
        }

        .sp-lightbox button {
            position: absolute;
            right: 28px;
            top: 18px;
            border: 0;
            background: transparent;
            color: white;
            font-size: 44px;
            cursor: pointer
        }

        @media(max-width:900px) {
            .single-product-page {
                width: 94%
            }

            .sp-product-layout {
                gap: 25px
            }

            .sp-main-image {
                height: 430px
            }

            .sp-feature-list {
                grid-template-columns: 1fr
            }

            .sp-choices {
                grid-template-columns: 1fr
            }

            .sp-bought-top {
                grid-template-columns: 1fr
            }

            .sp-bought-summary {
                padding-bottom: 8px
            }
        }

        @media(max-width:600px) {
            .single-product-page {
                margin-top: 20px
            }

            .sp-product-layout {
                grid-template-columns: 1fr;
                gap: 25px
            }

            .sp-main-image {
                height: 360px
            }

            .sp-price-line strong {
                font-size: 31px
            }

            .sp-price-line del {
                font-size: 20px
            }

            .sp-purchase-controls {
                display: grid;
                grid-template-columns: 1fr 1fr
            }

            .sp-quantity {
                grid-column: 1/-1;
                width: 145px
            }

            .sp-bought-products {
                gap: 6px
            }

            .sp-bought-card {
                width: 28vw;
                height: 28vw;
                border-width: 3px;
                padding: 6px
            }

            .sp-plus {
                font-size: 22px
            }

            .sp-bought-summary strong {
                font-size: 29px
            }

            .sp-tabs {
                gap: 16px
            }

            .sp-tabs button {
                font-size: 17px
            }

            .sp-more-wrap button {
                min-width: 0;
                width: 100%
            }
        }
    </style>

</head>

<body class="font-['DM_Sans']">
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
                            <image id="image0_123_4733" width="500" height="250" xlink:href="data:image/png;base64,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QAIUOnOABEiABEiABBQgQKErEEQOgQRIgARIgAQodOYACZAACZAACShAgEJXIIgcAgmQAAmQAAlQ6MwBEiABEiABElCAAIWuQBA5BBIgARIgARKg0JkDJEACJEACJKAAAQpdgSByCCRAAiRAAiRAoTMHSIAESIAESEABAhS6AkHkEEiABEiABEiAQmcOkAAJkAAJkIACBCh0BYLIIZAACZAACZAAhc4cIAESIAESIAEFCFDoCgSRQyABEiABEiABCp05QAIkQAIkQAIKEKDQFQgih0ACJEACJEACFDpzgARIgARIgAQUIEChKxBEDoEESIAESIAEKHTmAAmQAAmQAAkoQIBCVyCIHAIJkAAJkAAJUOjMARIgARIgARJQgACFrkAQOQQSIAESIAESoNCZAyRAAiRAAiSgAAEKXYEgcggkQAIkQAIkQKEzB0iABEiABEhAAQIUugJB5BBIgARIgARIgEJnDpAACZAACZCAAgQodAWCyCGQAAmQAAmQAIXOHCABEiABEiABBQhQ6AoEkUMgARIgARIgAQqdOUACJEACJEACChCg0BUIIodAAiRAAiRAAhQ6c4AESIAESIAEFCBAoSsQRA6BBEiABEiABCh05gAJkAAJkAAJKECAQlcgiBwCCZAACZAACVDozAESIAESIAESUIAAha5AEDkEEiABEiABEqDQmQMkQAIkQAIkoAABCl2BIHIIJEACJEACJEChMwdIgARIgARIQAEC1dqeolPrAZQpMBgOgQQkIxAHNA1adrZk/e6ju/E44h0RAHEAmvzj4QhIQD4C1dqHo35OocsXOPZYEQLxSBQdB2uBuC5CSf/i8cQ/SrIrhyX+gcI/EiABNwho1Vo0GKLQ3WDPNkkAQPvX3+LTi69HLBSC5vdLySTeHkbeaafg1FdWQ8vNkXIM7DQJyE4gDlRr8XicQpc9kuy/tATC+7/HvvOukF/oI0fg9K3PAlly/qNE2gRix0ngCAEKndlAAm4SaP9qPz6eNEUJoY/csoErdDeTiW1nOgEKPdMzgON3lwCF7i5/tk4CChGg0BUKJociIQEKXcKgscsk4E0CFLo348JeZQoBCj1TIs1xkoDtBCh02xGzARIYgACFzvQgARKwiACFbhFIVkMChghQ6Iaw8SISIIGjCVDozAoScJMAhe4mfbZNAkoRoNCVCicHIx0BCl26kLHDJOBVAhS6VyPDfmUGAQo9M+LMUZKAAwQodAcgswkS6JcAhc7kIAESsIgAhW4RSFZDAoYIUOiGsPEiEiCBowlQ6MwKEnCTAIXuJn22TQJKEaDQlQonByMdAQpdupCxwyTgVQIUulcjw35lBgEKPTPizFGSgAMEqrV1L3/Ez6c6QNrJJjoiUbSFOnD88SU4f+xw5GbL9UnLWEsQLdt2I9beDk3TbEKnIR6LIhYMwV9agiE/HQ9foMCmtvqvlkJ3HLnpBlvf/xgtO3ZD8/ngy88DYFOOxuOApiEwYQxyTx5uut8toTDe3PEVGhpCKAjkwO/zma6TFXiKQLWG4/4Xhe6pmBjtjAZEokAojOzKIsycOhbzpp+LM39cAZ/Pph8co13t5zpd5PWPb0DtkpVo++jT5O+kDUKPx2KItYXgzy9EyZWXoGLezMSPpubCt7wpdIuTyIHqoo1NaFz3AmoWL0dwz15o8MGXp4vd+r94LI7siqEou34KyufcbErskWgM2975Fn9Z+jbWPf8+0NwGFOQAfl3sces7zxqdJlCtYcTvKXSnsVvdXkLkHShOiHxMQuSnDC+zuhXb6usu8tYPPoYvJxtaXq7l7cWjnSvyIZ0inzsTBWPOMtVO5yLKcB0UumF0rl8Y7+hIin3RcoR27gX8fvj0vLX4H6HxSDJvsyuHWSJ2HdyeD3/APUvfxprn30e4h9hdx8oOGCagUeiG2XnhwkgssSIv6RL5RJw8vNQLPRPqg1MiRyyGqL61rov8iktQMXeGaZF/9W0j/rxkM6649ExcMmmE0Hj7KkShH6Gy5LGdOHCgCfNnnY+hJfmGmTp9YbwjgsZ1z/cUe2Ir3to/O8W++tn3EQm2J1fskuzoWUtXhdoodDmjSJGLxc0mkS9csQ1Va/ag6es6rF0zG9dceoZYf/ooRaEfgfIf//Ma/us/nsGJY0/AndPOxS3/eI68Yq/eC2T5O++xG06PPi+0Q+zV732XWLE/+cKHFLu14XKwNgrdQdgWNCW7yEOtaHjiadTctxx2bq3btSJPiHztHjQdaE6uZDoiWFc1HVMuPt1wcCn0I+j+uHAj/nD3i0BeFtAewYkjyuUUe7gDjWueQc3iFQjteZ9iNzw7eGF6BCj09Hi5VVoBkTfqIl/yCELvfgQtOzt5r9HqPztX5N1FntX5dHBrmELXH6dqDyNv5AiM3LIBWm6O4ah2Cb2oc7s6HJFb7O1hNK59lmI3nBG8MD0CFHp6vJwuTZGLEXda5KleUegJErYJPcWZYheaB9yKF8KkcCEK3ZvBpcjF4uKWyCn0HvGxXegUu9h86CxFsaeFS6HCFLq3gkmRi8XDbZFT6O4InWIXmx8Ue1qc1ClMoXsjlpKLXF+hNTy2HjVLVqh1j3yw7OCsIcphAAANi0lEQVSWuzNb7v3FgVvxg2VoMj42vMfOp+KF0DtciEJ3GHiv5mQXebeDNYLV76jzsJtoVlDo7gqdK3bRTKXY0yIla2EK3Z3IKSLyWv3oS/19W/2ELBsO0nDs9bPUU+vpZgOF7g2hU+xpZS5X7Gnhkqgwhe5ssCQXeSzUmngNp65qNfQVecaKPJU1FLq3hE6xp/V7RrGnhUuCwhS6M0FSQeSp98j36u+RZ2Xmirx3tlDo3hQ6xZ7W7xrFnhYuDxem0O0Njuwib2tH4+MbMu9hN9GsoNC9LXSKXTSTeY89LVJeLUyh2xMZyUUeb2tHw5PPJT4PqR9dqczJblZHm0KXQ+gUe1qZzxV7Wrg8VJhCtzYYioi8dvEKBHWR2/RxCc8/7CaaFRS6XEKn2EUzmyv2tEh5pTCFbk0kKHIxjl45EEast4OXotDlFLqqYtefbbHhGwlcsQ/+U+CNEhS6uThQ5GL8VBN5atQUutxCV0jsDfrX3e6rsvVgJ4pd7OfOvVIUujH2FLkYN1VFTqH3iL9jZ7mLZZ3xUpKfPBdr1T9P/Axq79e/avihbc++UOzGU8zeKyn09PhS5GK8VBc5ha6m0BVZsVPsYj9T6pWi0MViSpGLccoUkVPoagudYheb752luGJPC5eNhSn0geFGY0AojJKKIsycOgbzpk/EycNLbQyItVWnXj+T8an1b344hAVV21C1djeaDjQDBTmA0SNarcV6pDbeQ0+wUGbLvb884Va80Ayi2IUw2ViIQu8brr4ibw0jUBbAzVeNxr/NnkSR90UqtSIvKEDJlF+gYu4MFIw5y1TCfvvXJix6ZDseWr0LDT80eVPkXKFnxgq9dyZT7EJzm2IXwmRDIQq9J9TU1voxRbju8rMxf8ZEnDGi3Abw9lQZb29Hw9rn4MyKvDVx/GvxLy5E5V2zEDh3rKlBpUS+dPUu1CdEng1k+U3VafvFXKFnxgqdYjc0lSh2Q9hMXEShJ+HJfo883IHGdS+gZuHDCO62+UCYlhB8BfkJkVfMn4nCieeYSEBASpFzhZ6ZK3SK3dBcp9gNYTNwUaYLXRWR60e07nToM6aTL8Kw2TdmtsgpdAq9OwFuxQvJh2IXwmSiUKYKnSIXSxobnlqXekXemxq33DNzy72/2UOxC/2uUOxCmAwUyjShU+RiSUKRi3Gi0Cn0vjKFYheaP11irxiGodOuRvmc6cg58Tiha/srVP3ed7hn6dt48oUPEQm2Jx+q9Wmm6pTn4kwROkUulpMUuRgnbrlzy10kUyh2EUroEvuxFRh609Uonz2NYhci17uQ6kLX3yMPhlFUXogZ14zFr2edJ9frZ6mH3Zy8R37FJZa+fibVU+vpTiKu0LlCF8kZil2EEuKRCGLBVmRT7EK8ji6kqtC7ifzmq0dj/ozzcOpJQw1Ccv6yOEXuPHQjLVLoFHo6eUOxC9Gi2IUw9VFINaFT5GKZwK11MU6DlaLQKfTBcqSv/6+K2BevSH7dLTcbvtxcIyQGvIZiTxepKkKnyMUib4PID9S24P5VOxKnu0lzIIwYrcFLUegU+uBZ0n8J2cUeCqH+0fWofWAlWt//mGI3kwuWXCu70ClysTSwSeQPPFqNJY9V48A3DXKc7CZGS7wUhU6hi2eLumJvCaH+cYrdilQwV4esQpdd5JEIGp96HjWLHDwQxqKH3b470IyHV+86IvL8bCDb40e0mpsl/V9NoVPoVuaW7Ct2it3KbDBQl2xCl17kURx6+qWEyIPbdgF+f+I8dMv/bFiRdx0I88Ru1P9wCMjLYJGnAkahU+iWT14AFLsQVd5j741JFqGrJPLtuwFNS5yHbvmfnSKX6aMploPtp0IKnUK3M9codiG6FHsKk9eFrqLI8/MBqw8uosiFJr7lhSh0Ct3ypOqjQopdiDLF7lWhU+RCCQyKXIyTXaUodArdrtzqq16KXYh25orda0LXRR4Ko2hYIaQ8ECbS7R55amudK3KhSShlIQqdQncjcSl2IeqZJ3avCL1zRZ5fWoBZ147FXTMlO9mNIheaYMoVotApdDeTmmIXop85Yndb6L221m+/cTx+cmqlUJC8UEj/qEDXU+tckXshJM72gUKn0J3NuL5bo9iFoqC+2N0SOu+RCyUg75GLYXKtFIVOobuWfHx4zih6dcXutNApcrEc5MNuYpzcLkWhU+hu5yAfnjMcAfXE7pTQKXKxpKPIxTh5pRSFTqF7JRcpdsORUEfsdgtdcpHrGdL04hs48Kf7EeQ9csMTRtkLKXQKXYbkVuweuy83B1pujuXk5Re7XUKXXeSxGJpf2YSaxcvRvHEr9HvZPr5+ZvkEkr5CCp1ClymJVRD7Y+tQu3gFWvd9mvhkK8XePQGtFroCIj/07KuoWbQMLVt3JUWuH9GqWXy0G7fWZfoZ7L+vFDqFLmMmSy72aHMLGh59CrUPrKLYe+SfVUKX/EAYXdxdIn97ZwJR4qMpFLmMP1fO9ZlCp9CdyzbrW6LYhZjKsxVvVuidIi8cGsD0q8dIdyAMRS6UzyzUHwEKnUJXYXZQ7EJR9L7YjQq919b6vBkTcdpJw4SgeKKQ0yvyQAGKL78IlXfdioIxZ5lC0PUZU379zBRHSy6m0Cl0SxLJI5VQ7EKB8K7Y0xW6SvfIndha10U++SJUzJuJwLhRQsnSXyGK3BQ+ey6m0Cl0ezLL3VopdiH+3hO7qNApcqEAd53sRpGL8ZK9FIVOocuewwP1n2IXiq53xD6Y0DtFPqS8ENOvHo35M+T6aIrj98gpcqEJoEwhCp1CVyaZBxgIxS4UZffF3p/Qu63Ib5oyKvGw22kn8x75UVFNvX5GkQslvHKFKHQKXbmkptjNhtQ9sfcWuuyvn8XjOPTsK6i5bxlaeI/cbF7y+sEIUOgU+mA5ouL/54pdKKrOiz0l9GisDMEwisoL8Y+Xn41/mz0Jp540VKjTXinU9MLrCZEf3rQt0SVb3yPnitwrYXe3HxQ6he5uBrrbOsUuxN85sfuqNVT8pr6ovLDsZhnvketnradEvnm7/Se7UeRCCZwxhSh0Cj1jkp1b8WZDbbvYW9qqtfn/59n6edMnlkm7IrdV5HHEQqHE8a98/cxsOit4PYVOoSuY1oaHxBW7EDq7xH7fsm3VWjwerwdQJtQTDxRyakUeC7YmDv4vvuxCVP7L7XyP3AOx91wXKHQK3XNJ6YEOUexCQbBB7PII3SmRR4Mh+AMBFF30d6iYOwOFkyYIBae/QjwQxhQ+b19MoVPo3s5Qd3unjNhXovWjz+DL8/zX3bwvdGdF3nmy29yZCIznyW7u/hpI0DqFTqFLkKaud1F2sTcdRv0ja1D74KNo+/QLL3+21btCd0XkPKLV9bkvVQcodApdqoR1ubOyi/1QM+ofWYvahzwrdu8JvenFjahZ+DAO2/qwWwzJrXWete7yFJe7eQqdQpc7g93pPcUuxN3APXbvCF1fkesfrG9+4y0gGk08WW7b98gpcqGEYqFBCFDoFDoniXECFLsQuzTE7r7Qe2ytR2PwBShyoSizkPsEKHQK3f0slL8HFLtQDAXE7p7Qm19+EwcXLOXWulAoWciTBCh0Ct2TiSlppyh2ocANIHbnhd78yqbkEa0b30acW+tCAWQhjxKg0Cl0j6am1N2i2IXCd5TYb5/mnNBlFflfaw5jwbKtWLp6F+p/aAIKsoEsvxBwFlKcAIVOoSue4q4Oj2IXwq+LPXKoEaXXXGG/0KUVee1hPPjoTix5dAcO7G8ACnIocqH0yqBCFDqFnkHp7tpQKfZB0ceCIRRdfIF9QpdV5KmT3arW7kHtd41AXjaQzRX5oBmViQUodAo9E/PerTFT7P2STwj90r+3Xuiyi7xraz2fIndr3krTLoVOoUuTrAp1lGI/KpiWC735tS2ouXcpDm/cyofdFJo7HMoABCh0Cp0TxD0CFHsXe8uEnliRL16Ow2+8Df3mPA+EcS+/2bLDBCh0Ct3hlGNzfRCg2GFa6D221iNRHgjDmZZ5BCh0Cj3zst67I1ZN7PrX3XJyhHgbFroy98j5+plQorAQt9wHy4F4exh5I0dg5JYN0HLFfoD6qvOPCzfiD3e/CBTlDdYk/z8J9E9AAbHXrViDugdWou3zr+HLz4OWkz1gxNMWujMijyMaDPKjKZyschDgCp0rdDkyNTN7KbnYI/WNqNfFvvSxQcUuLHT9q2c19z6M5pc3Iq6ftW7TR1P0Dml5uSi54mJUzL8FgXH8HnlmzkKJRk2hU+gSpWvGdjUDxD6o0PWjWWsWVkF/ej3e0QFfoMD2r5+Vz74JheePM5V3qffIebKbKYy8WIQAhU6hi+QJy3iDgMJi71foLZu34+CCh9D8qnMir5g3kytyb6Q8e5EOAQqdQk8nX1jWGwQUFLu+6E4dLNMMYEjXivyNt6A/5GLLihxArCWY2LYvnnwRKHJv5Dd7YZAAhU6hG0wdXuYBAgqJPbTvI5Rc/ss92uHNOz4/cM8DpYdf2wJ0dECzY2tdj108nohg8aV/j4pf32p6RX6wrgX3PKx/NGUnP5rigbmRkV2wQOhtX+3HJ5N+hVioFZpfziOGu55y37wBWh6fcs/IuSDzoLuJfe70iZhzwzkYEpDnTQv94bna+1cg/Pk3e/4/JnelB8OeIUIAAAAASUVORK5CYII="></image>
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
                                <img class="inline-block" src="http://127.0.0.1:8000/assets/down.png" alt="arrow">
                            </a>
                        </li>

                        <li class="relative group/shop">
                            <a href="http://127.0.0.1:8000/shop" class="inline-flex items-center gap-1 text-[#425A8B] hover:text-[#FD9636] duration-300 transition-colors">
                                Shop
                                <img class="inline-block transition-transform duration-300 group-hover/shop:rotate-180" src="http://127.0.0.1:8000/assets/down.png" alt="arrow">
                            </a>
                            <ul data-shop-dropdown="" class="absolute left-0 top-full z-[99999] mt-0 w-[275px] max-w-[90vw] origin-top-left border border-solid border-[#D5DFE4] bg-white py-2 shadow-xl rounded-md opacity-0 invisible pointer-events-none translate-y-2 scale-95 transition-all duration-200 ease-out group-hover/shop:opacity-100 group-hover/shop:visible group-hover/shop:pointer-events-auto group-hover/shop:translate-y-0 group-hover/shop:scale-100 group-focus-within/shop:opacity-100 group-focus-within/shop:visible group-focus-within/shop:pointer-events-auto group-focus-within/shop:translate-y-0 group-focus-within/shop:scale-100">

                                <li><a href="http://127.0.0.1:8000/shop-grid" class="block px-6 py-2.5 text-[#425A8B] hover:text-[#FD9636] hover:bg-[#F8FAFC] transition-colors duration-200">Shop Grid</a></li>
                                <li><a href="http://127.0.0.1:8000/product" class="block px-6 py-2.5 text-[#425A8B] hover:text-[#FD9636] hover:bg-[#F8FAFC] transition-colors duration-200">Single Product</a></li>
                                <li><a href="http://127.0.0.1:8000/checkout" class="block px-6 py-2.5 text-[#425A8B] hover:text-[#FD9636] hover:bg-[#F8FAFC] transition-colors duration-200">Shop Checkout</a></li>
                                <li><a href="<?php echo e(route('shop-compare')); ?>" class="block px-6 py-2.5 text-[#425A8B] hover:text-[#FD9636] hover:bg-[#F8FAFC] transition-colors duration-200">Shop Compare</a></li>
                                <li><a href="<?php echo e(route('shop-wishlist')); ?>" class="block px-6 py-2.5 text-[#425A8B] hover:text-[#FD9636] hover:bg-[#F8FAFC] transition-colors duration-200">Shop Wishlist</a></li>
                            </ul>

                        </li>
                        <li>
                            <a href="#" class="hover:text-[#FD9636] duration-300 inline-block">
                                Vendors
                                <img class="inline-block" src="http://127.0.0.1:8000/assets/down.png" alt="arrow">
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-[#FD9636] duration-300 inline-block">
                                Pages
                                <img class="inline-block" src="http://127.0.0.1:8000/assets/down.png" alt="arrow">
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-[#FD9636] duration-300 inline-block">
                                Blog
                                <img class="inline-block" src="http://127.0.0.1:8000/assets/down.png" alt="arrow">
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
                    <path opacity="0.4" d="M12 12C14.7614 12 17 9.76142 17 7C17 4.23858 14.7614 2 12 2C9.23858 2 7 4.23858 7 7C7 9.76142 9.23858 12 12 12Z" fill="#425A8B"></path>
                    <path d="M11.9999 14.5C6.98991 14.5 2.90991 17.86 2.90991 22C2.90991 22.28 3.12991 22.5 3.40991 22.5H20.5899C20.8699 22.5 21.0899 22.28 21.0899 22C21.0899 17.86 17.0099 14.5 11.9999 14.5Z" fill="#425A8B"></path>
                </svg>
                <img class="h-11" src="http://127.0.0.1:8000/assets/wishlist.png" alt="wishlist">
                <button type="button" class="header-cart-toggle" id="header-cart-toggle" aria-label="Open shopping cart" aria-controls="header-cart-panel" aria-expanded="false">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M16.25 22.5C17.2165 22.5 18 21.7165 18 20.75C18 19.7835 17.2165 19 16.25 19C15.2835 19 14.5 19.7835 14.5 20.75C14.5 21.7165 15.2835 22.5 16.25 22.5Z" fill="#425A8B"></path>
                        <path d="M8.25 22.5C9.2165 22.5 10 21.7165 10 20.75C10 19.7835 9.2165 19 8.25 19C7.2835 19 6.5 19.7835 6.5 20.75C6.5 21.7165 7.2835 22.5 8.25 22.5Z" fill="#425A8B"></path>
                        <path opacity="0.4" d="M4.84 3.94L4.64 6.39C4.6 6.86 4.97 7.25 5.44 7.25H20.75C21.17 7.25 21.52 6.92999 21.55 6.50999C21.68 4.73999 20.33 3.3 18.56 3.3H6.28999C6.18999 2.86 5.98999 2.44 5.67999 2.09C5.18999 1.56 4.49 1.25 3.77 1.25H2C1.59 1.25 1.25 1.59 1.25 2C1.25 2.41 1.59 2.75 2 2.75H3.74001C4.05001 2.75 4.34 2.88001 4.55 3.10001C4.76 3.33001 4.86 3.63 4.84 3.94Z" fill="#425A8B"></path>
                        <path d="M20.5101 8.75H5.17006C4.75006 8.75 4.41005 9.07 4.37005 9.48L4.01005 13.83C3.87005 15.53 5.21006 17 6.92006 17H18.0401C19.5401 17 20.8601 15.77 20.9701 14.27L21.3001 9.60001C21.3401 9.14001 20.9801 8.75 20.5101 8.75Z" fill="#425A8B"></path>
                    </svg>
                    <span class="cart-count-badge" id="header-cart-count" aria-live="polite">6</span>
                </button>
                <div class="header-cart-panel" id="header-cart-panel" hidden="">
                    <div class="header-cart-panel-heading">
                        <div>
                            <h2>Your Cart</h2>
                            <p><span id="cart-item-count">6</span> items in your cart</p>
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
                        <article class="header-cart-item"><img class="header-cart-item-image" src="http://127.0.0.1:8000/assets/electric.png" alt="Philips Headphones" loading="lazy">
                            <div class="header-cart-item-details">
                                <h3>Philips Headphones</h3>
                                <p class="header-cart-item-price">$154.00</p>
                                <div class="header-cart-item-actions">
                                    <div class="cart-quantity-control"><button type="button" aria-label="Decrease quantity">−</button><span>2</span><button type="button" aria-label="Increase quantity">+</button></div><button type="button" class="cart-remove-button">Remove</button>
                                </div>
                            </div>
                        </article>
                        <article class="header-cart-item"><img class="header-cart-item-image" src="http://127.0.0.1:8000/assets/laptop.png" alt="MacBook Air" loading="lazy">
                            <div class="header-cart-item-details">
                                <h3>MacBook Air</h3>
                                <p class="header-cart-item-price">$2,325.30</p>
                                <div class="header-cart-item-actions">
                                    <div class="cart-quantity-control"><button type="button" aria-label="Decrease quantity">−</button><span>1</span><button type="button" aria-label="Increase quantity">+</button></div><button type="button" class="cart-remove-button">Remove</button>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="header-cart-summary">
                        <div><span>Subtotal</span><strong id="cart-subtotal">$11,202.20</strong></div>
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

    <!-- breadcrumb -->
    <div class="breadcrumb py-4 mb-[30px] bg-[#F0F3F8] text-xs">
        <div class="max-w-[1360px] mx-auto">
            <a href="#" class="leading-[18px] text-[#000] ml-4 hover:text-[#0BA9ED] duration-200">Home &gt;</a>
            <a href="#" class="leading-[18px] ml-4 hover:text-[#0BA9ED] duration-200">Electronics &gt;</a>
            <a href="#" class="leading-[18px] ml-4 hover:text-[#0BA9ED] duration-200">Cell phone &gt;</a>
            <a href="#" class="leading-[18px] ml-4 hover:text-[#0BA9ED] duration-200">Accessories</a>
        </div>
    </div>

    <!-- category sidebar -->
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
                    <button type="button" class="category-icon-button" data-category="1" aria-label="Computers &amp; Accessories" title="Computers &amp; Accessories">
                        <img src="http://127.0.0.1:8000/assets/monitor.svg" alt="" loading="lazy">
                    </button>
                </li>
                <li>
                    <button type="button" class="category-icon-button" data-category="2" aria-label="Cell Phones" title="Cell Phones">
                        <img src="http://127.0.0.1:8000/assets/mobile.svg" alt="" loading="lazy">
                    </button>
                </li>
                <li>
                    <button type="button" class="category-icon-button" data-category="3" aria-label="Gaming Gadgets" title="Gaming Gadgets">
                        <img src="http://127.0.0.1:8000/assets/game.svg" alt="" loading="lazy">
                    </button>
                </li>
                <li>
                    <button type="button" class="category-icon-button" data-category="4" aria-label="Smart watches" title="Smart watches"><img src="http://127.0.0.1:8000/assets/clock.svg" alt="" loading="lazy">
                    </button>
                </li>
                <li>
                    <button type="button" class="category-icon-button" data-category="5" aria-label="Wired Headphone" title="Wired Headphone"><img src="http://127.0.0.1:8000/assets/airpods.svg" alt="" loading="lazy">
                    </button>
                </li>
                <li>
                    <button type="button" class="category-icon-button" data-category="6" aria-label="Mouse &amp; Keyboard" title="Mouse &amp; Keyboard"><img src="http://127.0.0.1:8000/assets/mouse.svg" alt="" loading="lazy">
                    </button>
                </li>
                <li>
                    <button type="button" class="category-icon-button" data-category="7" aria-label="Headphone" title="Headphone"><img src="http://127.0.0.1:8000/assets/music-play.svg" alt="" loading="lazy">
                    </button>
                </li>
                <li>
                    <button type="button" class="category-icon-button" data-category="8" aria-label="Bluetooth devices" title="Bluetooth devices"><img src="http://127.0.0.1:8000/assets/bluetooth.svg" alt="" loading="lazy"></button>
                </li>
                <li>
                    <button type="button" class="category-icon-button" data-category="9" aria-label="Cloud Software" title="Cloud Software"><img src="http://127.0.0.1:8000/assets/clound.svg" alt="" loading="lazy">
                    </button>
                </li>
                <li>
                    <button type="button" class="category-icon-button" data-category="10" aria-label="Electric accessories" title="Electric accessories"><img src="http://127.0.0.1:8000/assets/electricity.svg" alt="" loading="lazy">
                    </button>
                </li>
                <li>
                    <button type="button" class="category-icon-button" data-category="11" aria-label="Mainboard &amp; CPU" title="Mainboard &amp; CPU"><img src="http://127.0.0.1:8000/assets/cpu.svg" alt="" loading="lazy">
                    </button>
                </li>
                <li>
                    <button type="button" class="category-icon-button" data-category="12" aria-label="Desktop PC" title="Desktop PC"><img src="http://127.0.0.1:8000/assets/devices.svg" alt="" loading="lazy">
                    </button>
                </li>
                <li>
                    <button type="button" class="category-icon-button" data-category="13" aria-label="Speaker" title="Speaker"><img src="http://127.0.0.1:8000/assets/driver.svg" alt="" loading="lazy">
                    </button>
                </li>
                <li>
                    <button type="button" class="category-icon-button" data-category="14" aria-label="Bluetooth Headphone" title="Bluetooth Headphone"><img src="http://127.0.0.1:8000/assets/airpod.svg" alt="" loading="lazy">
                    </button>
                </li>
                <li>
                    <button type="button" class="category-icon-button" data-category="15" aria-label="Computer Decor" title="Computer Decor"><img src="http://127.0.0.1:8000/assets/lamp.svg" alt="" loading="lazy">
                    </button>
                </li>
            </ul>
        </nav>
        <section class="category-mega-menu" id="category-mega-menu" aria-label="Category menu" hidden="">
            <div class="category-menu-top"><strong>Ecom®</strong><button type="button" id="category-menu-close" aria-label="Close categories">×</button></div>
            <div class="category-menu-body">
                <div class="category-menu-list" id="category-menu-list"></div>
                <div class="category-submenu" id="category-submenu"></div>
            </div>
        </section>
    </div>

    <main class="single-product-page">
        <a href="<?php echo e(url('/')); ?>" class="sp-continue">&larr; Continue shopping</a>
        <section class="sp-product-layout">
            <div class="sp-gallery">
                <div class="sp-main-image" id="sp-zoom-area" aria-label="Hover over product image to zoom">
                    <img id="single-product-image" src="<?php echo e(asset('assets/computer.png')); ?>" alt="Product image">
                    <button class="sp-zoom-trigger" id="sp-open-zoom" type="button" aria-label="Open zoom view">+</button>
                    <span class="sp-zoom-hint">Hover to zoom</span>
                </div>
                <div class="sp-thumbnails" id="sp-thumbnails">
                    <button class="sp-thumb active" type="button" data-image="<?php echo e(asset('assets/computer.png')); ?>"><img src="<?php echo e(asset('assets/computer.png')); ?>" alt="Product view 1"></button>
                    <button class="sp-thumb" type="button" data-image="<?php echo e(asset('assets/smartphone.png')); ?>"><img src="<?php echo e(asset('assets/smartphone.png')); ?>" alt="Product view 2"></button>
                    <button class="sp-thumb" type="button" data-image="<?php echo e(asset('assets/samsung.png')); ?>"><img src="<?php echo e(asset('assets/samsung.png')); ?>" alt="Product view 3"></button>
                    <button class="sp-thumb" type="button" data-image="<?php echo e(asset('assets/laptop.png')); ?>"><img src="<?php echo e(asset('assets/laptop.png')); ?>" alt="Product view 4"></button>
                </div>
            </div>
            <div class="sp-product-info">
                <h1 id="single-product-title">Product</h1>
                <div class="sp-rating"><span aria-label="5 out of 5 stars">★★★★★</span> <span>(65 reviews)</span></div>
                <div class="sp-price-line"><strong id="single-product-price">$2856.3</strong><del id="sp-old-price">$3,225.6</del></div>
                <ul class="sp-feature-list">
                    <li class="text-sm">8K super steady video</li>
                    <li class="text-sm">Adaptive color contrast</li>
                    <li class="text-sm">Nightography plus portrait mode</li>
                    <li class="text-sm">Premium design &amp; craftsmanship</li>
                    <li class="text-sm">50MP photo resolution plus bright display</li>
                    <li class="text-sm">Long lasting battery plus fast charging</li>
                </ul>
                <p class="sp-description" id="single-product-description">View product details and add this item to your cart.</p>
                <div class="sp-option-row"><strong>Color:</strong><span id="sp-color-value">Pink Gold</span></div>
                <div class="sp-color-options" aria-label="Choose color">
                    <button type="button" class="sp-color active" data-color="Pink Gold" style="--swatch:#e9cfc4" aria-label="Pink Gold"></button>
                    <button type="button" class="sp-color" data-color="Black" style="--swatch:#252525" aria-label="Black"></button>
                    <button type="button" class="sp-color" data-color="Silver" style="--swatch:#d9dde1" aria-label="Silver"></button>
                    <button type="button" class="sp-color" data-color="Green" style="--swatch:#a7b6aa" aria-label="Green"></button>
                    <button type="button" class="sp-color" data-color="White" style="--swatch:#f8f8f8" aria-label="White"></button>
                </div>
                <div class="sp-choices">
                    <div>
                        <div class="sp-option-row"><strong>Style:</strong><span id="sp-style-value">S22</span></div>
                        <div class="sp-button-options"><button type="button" data-style="S22 Ultra">S22 Ultra</button><button type="button" class="active" data-style="S22">S22</button><button type="button" data-style="S22 + Standing Cover">S22 + Standing Cover</button></div>
                    </div>
                    <div>
                        <div class="sp-option-row"><strong>Size:</strong><span id="sp-size-value">512GB</span></div>
                        <div class="sp-button-options"><button type="button" data-size="1GB">1GB</button><button type="button" class="active" data-size="512GB">512 GB</button><button type="button" data-size="256GB">256 GB</button><button type="button" data-size="128GB">128 GB</button><button type="button" data-size="64GB">64GB</button></div>
                    </div>
                </div>
                <div class="sp-buy-row"><label for="single-product-quantity">Quantity</label>
                    <div class="sp-purchase-controls">
                        <div class="sp-quantity"><button id="sp-qty-minus" type="button" aria-label="Decrease quantity">−</button><input id="single-product-quantity" type="number" min="1" max="99" value="1"><button id="sp-qty-plus" type="button" aria-label="Increase quantity">+</button></div><button id="single-add-to-cart" type="button" class="sp-cart-btn">Add to cart</button><button id="single-buy-now" type="button" class="sp-buy-btn">Buy now</button>
                    </div>
                </div>
                <div class="sp-extra-actions"><button type="button" id="sp-wishlist">♡ Add to Wish list</button><button type="button" id="sp-compare">⇄ Add to Compare</button></div>
                <p id="single-product-feedback" class="sp-feedback" role="status" aria-live="polite"></p>
            </div>
        </section>

        <section class="sp-bought-together">
            <h2>Frequently Bought Together</h2>
            <div class="sp-bought-top">
                <div class="sp-bought-products">
                    <div class="sp-bought-card"><img src="<?php echo e(asset('assets/headphones.png')); ?>" onerror="this.src='<?php echo e(asset('assets/airpods.svg')); ?>'" alt="Headphones"></div><span class="sp-plus">+</span>
                    <div class="sp-bought-card"><img src="<?php echo e(asset('assets/smartwatches.png')); ?>" alt="Smart watch"></div><span class="sp-plus">+</span>
                    <div class="sp-bought-card"><img src="<?php echo e(asset('assets/airpods.svg')); ?>" alt="Earbuds"></div>
                </div>
                <div class="sp-bought-summary"><strong id="sp-bundle-total">$2856.30</strong><span>(3 items)</span><button type="button" id="sp-bundle-cart">Add To Cart</button></div>
            </div>
            <div class="sp-bought-checks">
                <label><input type="checkbox" checked data-bundle-price="2856.30"> <span><b>This item:</b> <span id="sp-bundle-main-name">Product</span> - <span id="sp-bundle-main-price">$0.00</span></span></label>
                <label><input type="checkbox" checked data-bundle-price="197.00"> Apple AirPods Pro, Active Noise Cancellation, Custom Fit - $197.00</label>
                <label><input type="checkbox" checked data-bundle-price="1599.00"> Apple iMac 24&quot; All-In-One Computer, Apple M1, 8GB RAM, 512GB SSD, macOS Big Sur, Green - $1,599.00</label>
            </div>
        </section>

        <section class="sp-details">
            <div class="sp-tabs" role="tablist"><button class="active" type="button" data-tab="description">Description</button><button type="button" data-tab="specification">Specification</button><button type="button" data-tab="additional">Additional information</button><button type="button" data-tab="reviews">Reviews (2)</button><button type="button" data-tab="vendor">Vendor</button></div>
            <div class="sp-tab-content" id="sp-tab-content">
                <p>It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life. One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarks grove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rhetoric question ran over her cheek, then she continued her way.</p>
                <div class="sp-more-wrap"><button type="button" id="sp-more-details">More Details</button></div>
            </div>
        </section>
    </main>
    <div class="sp-lightbox" id="sp-lightbox" aria-hidden="true"><button type="button" id="sp-close-zoom" aria-label="Close zoom view">×</button><img id="sp-lightbox-image" src="<?php echo e(asset('assets/computer.png')); ?>" alt="Zoomed product image"></div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const storageKey = 'ecom-demo-cart';
            const productKey = 'ecom-demo-selected-product';
            let product = null;
            try {
                product = JSON.parse(sessionStorage.getItem(productKey) || 'null');
            } catch (error) {
                product = null;
            }

            const titleNode = document.getElementById('single-product-title');
            const brandNode = document.getElementById('single-product-brand');
            const imageNode = document.getElementById('single-product-image');
            const descriptionNode = document.getElementById('single-product-description');
            const priceNode = document.getElementById('single-product-price');
            const quantityNode = document.getElementById('single-product-quantity');
            const feedbackNode = document.getElementById('single-product-feedback');
            const money = value => '$' + Number(value || 0).toLocaleString('en-US', {
                minimumFractionDigits: 2,
                maximumFractionDigits: 2
            });
            const siteHeader = document.querySelector('.top-header');
            if (siteHeader) {
                siteHeader.classList.add('site-sticky-header');
                const updateHeader = () => siteHeader.classList.toggle('is-scrolled', window.scrollY > 20);
                updateHeader();
                window.addEventListener('scroll', updateHeader, {
                    passive: true
                });
            }

            if (!product || !product.id) {
                titleNode.textContent = 'Samsung Galaxy S22 Ultra, 8K Camera & Video, Brightest Display Screen, S Pen Pro';
                descriptionNode.textContent = '';
                document.getElementById('single-add-to-cart').disabled = true;
                document.getElementById('single-buy-now').disabled = true;
                return;
            }

            titleNode.textContent = product.title || product.name || 'Product';
            brandNode.textContent = product.brand || 'Product details';
            imageNode.src = product.image || imageNode.src;
            imageNode.alt = product.title || product.name || 'Product image';
            descriptionNode.textContent = product.description || 'Product details and specifications are shown here.';
            priceNode.textContent = money(product.price);

            function readCart() {
                try {
                    const saved = JSON.parse(localStorage.getItem(storageKey) || '[]');
                    return Array.isArray(saved) ? saved : [];
                } catch (error) {
                    return [];
                }
            }

            function saveCart(cart) {
                localStorage.setItem(storageKey, JSON.stringify(cart));
            }

            function getQuantity() {
                const value = Number.parseInt(quantityNode.value, 10);
                return Number.isFinite(value) ? Math.min(99, Math.max(1, value)) : 1;
            }

            document.getElementById('single-add-to-cart').addEventListener('click', function() {
                const cart = readCart();
                const quantity = getQuantity();
                const existing = cart.find(item => item.id === product.id);
                if (existing) existing.quantity = Number(existing.quantity || 0) + quantity;
                else cart.push({
                    id: product.id,
                    name: product.name,
                    title: product.title,
                    brand: product.brand,
                    price: Number(product.price) || 0,
                    image: product.image || '',
                    quantity: quantity
                });
                saveCart(cart);
                feedbackNode.textContent = (product.name || product.title || 'Product') + ' added to cart.';
            });

            document.getElementById('single-buy-now').addEventListener('click', function() {
                const quantity = getQuantity();
                saveCart([{
                    id: product.id,
                    name: product.name,
                    title: product.title,
                    brand: product.brand,
                    price: Number(product.price) || 0,
                    image: product.image || '',
                    quantity: quantity
                }]);
                window.location.href = "<?php echo e(route('checkout')); ?>";
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            const image = document.getElementById('single-product-image');
            const zoomArea = document.getElementById('sp-zoom-area');
            const lightbox = document.getElementById('sp-lightbox');
            const lightboxImage = document.getElementById('sp-lightbox-image');
            const title = document.getElementById('single-product-title');
            const price = document.getElementById('single-product-price');
            const money = value => '$' + Number(value || 0).toLocaleString('en-US', {
                minimumFractionDigits: 2,
                maximumFractionDigits: 2
            });

            document.querySelectorAll('.sp-thumb').forEach(function(thumb) {
                thumb.addEventListener('click', function() {
                    image.src = thumb.dataset.image;
                    document.querySelectorAll('.sp-thumb').forEach(t => t.classList.toggle('active', t === thumb));
                });
            });
            zoomArea.addEventListener('mousemove', function(event) {
                const rect = zoomArea.getBoundingClientRect();
                const x = ((event.clientX - rect.left) / rect.width) * 100;
                const y = ((event.clientY - rect.top) / rect.height) * 100;
                image.style.transformOrigin = x + '% ' + y + '%';
            });
            zoomArea.addEventListener('mouseleave', function() {
                image.style.transformOrigin = 'center center';
            });
            document.getElementById('sp-open-zoom').addEventListener('click', function() {
                lightboxImage.src = image.src;
                lightbox.classList.add('open');
                lightbox.setAttribute('aria-hidden', 'false');
            });

            function closeZoom() {
                lightbox.classList.remove('open');
                lightbox.setAttribute('aria-hidden', 'true');
            }
            document.getElementById('sp-close-zoom').addEventListener('click', closeZoom);
            lightbox.addEventListener('click', function(e) {
                if (e.target === lightbox) closeZoom();
            });
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') closeZoom();
            });

            document.getElementById('sp-qty-minus').addEventListener('click', function() {
                const q = document.getElementById('single-product-quantity');
                q.value = Math.max(1, (parseInt(q.value, 10) || 1) - 1);
            });
            document.getElementById('sp-qty-plus').addEventListener('click', function() {
                const q = document.getElementById('single-product-quantity');
                q.value = Math.min(99, (parseInt(q.value, 10) || 1) + 1);
            });
            document.querySelectorAll('.sp-color').forEach(btn => btn.addEventListener('click', function() {
                document.querySelectorAll('.sp-color').forEach(b => b.classList.toggle('active', b === btn));
                document.getElementById('sp-color-value').textContent = btn.dataset.color;
            }));
            document.querySelectorAll('[data-style]').forEach(btn => btn.addEventListener('click', function() {
                document.querySelectorAll('[data-style]').forEach(b => b.classList.toggle('active', b === btn));
                document.getElementById('sp-style-value').textContent = btn.dataset.style;
            }));
            document.querySelectorAll('[data-size]').forEach(btn => btn.addEventListener('click', function() {
                document.querySelectorAll('[data-size]').forEach(b => b.classList.toggle('active', b === btn));
                document.getElementById('sp-size-value').textContent = btn.dataset.size;
            }));
            ['sp-wishlist', 'sp-compare'].forEach(id => document.getElementById(id).addEventListener('click', function() {
                this.classList.toggle('active');
                this.setAttribute('aria-pressed', this.classList.contains('active') ? 'true' : 'false');
                const original = id === 'sp-wishlist' ? '♡ Add to Wish list' : '⇄ Add to Compare';
                this.textContent = this.classList.contains('active') ? (id === 'sp-wishlist' ? '♥ Added to Wish list' : '✓ Added to Compare') : original;
            }));

            function updateBundle() {
                const checked = [...document.querySelectorAll('.sp-bought-checks input:checked')];
                const total = checked.reduce((sum, input) => sum + Number(input.dataset.bundlePrice || 0), 0);
                document.getElementById('sp-bundle-total').textContent = money(total);
                document.querySelector('.sp-bought-summary span').textContent = '(' + checked.length + ' items)';
            }
            document.querySelectorAll('.sp-bought-checks input').forEach(input => input.addEventListener('change', updateBundle));
            document.getElementById('sp-bundle-cart').addEventListener('click', function() {
                const feedback = document.getElementById('single-product-feedback');
                feedback.textContent = 'Selected bundle updated. Use Add to cart above to add the current product.';
            });

            const productName = title.textContent;
            document.getElementById('sp-bundle-main-name').textContent = productName;
            document.getElementById('sp-bundle-main-price').textContent = price.textContent;
            const tabCopy = {
                description: '<p>It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life. One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p><p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarks grove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rhetoric question ran over her cheek, then she continued her way.</p>',
                specification: '<p><strong>Product:</strong> ' + escapeHtml(productName) + '</p><p><strong>Color:</strong> ' + escapeHtml(document.getElementById('sp-color-value').textContent) + ' &nbsp; <strong>Storage:</strong> ' + escapeHtml(document.getElementById('sp-size-value').textContent) + '</p><p>Premium build, high-resolution display and long-lasting battery.</p>',
                additional: '<p>Color, style and storage options can be selected above. Availability and included accessories may vary by selected option.</p>',
                reviews: '<p><strong>Customer reviews (2)</strong></p><p>★★★★★ — Great quality and premium design.</p><p>★★★★☆ — Works well and feels well made.</p>',
                vendor: '<p><strong>Vendor:</strong> Ecom Tech</p><p>Product support and order assistance available through the store.</p>'
            };

            function escapeHtml(value) {
                return String(value).replace(/[&<>"']/g, c => ({
                    '&': '&amp;',
                    '<': '&lt;',
                    '>': '&gt;',
                    '"': '&quot;',
                    "'": '&#39;'
                } [c]));
            }
            document.querySelectorAll('[data-tab]').forEach(btn => btn.addEventListener('click', function() {
                document.querySelectorAll('[data-tab]').forEach(b => b.classList.toggle('active', b === btn));
                const content = document.getElementById('sp-tab-content');
                content.innerHTML = tabCopy[btn.dataset.tab] || tabCopy.description;
                if (btn.dataset.tab === 'description') {
                    content.innerHTML += '<div class="sp-more-wrap"><button type="button" id="sp-more-details">More Details</button></div>';
                    attachMoreDetails();
                }
            }));

            function attachMoreDetails() {
                const button = document.getElementById('sp-more-details');
                if (button) button.addEventListener('click', function() {
                    const details = document.createElement('p');
                    details.textContent = 'More product details: selected color, style and storage options are shown above. Please review your selection before adding the product to your cart.';
                    button.parentElement.replaceWith(details);
                });
            }
            attachMoreDetails();
        });
    </script>
    <div class="sp-lightbox" id="sp-lightbox" aria-hidden="true"><button type="button" id="sp-close-zoom" aria-label="Close zoom view">×</button><img id="sp-lightbox-image" src="<?php echo e(asset('assets/computer.png')); ?>" alt="Zoomed product image"></div>


<script src="<?php echo e(asset('js/product-catalog.js')); ?>"></script>
<script src="<?php echo e(asset('js/storefront.js')); ?>"></script>
</body>

</html><?php /**PATH C:\wamp64\www\ecom-demo-updated\ecom-demo\resources\views/single-product.blade.php ENDPATH**/ ?>