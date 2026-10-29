<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Wishlist | Ecom Demo</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/storefront.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'DM Sans', sans-serif !important;
            background: #fbfcfe;
            color: #425a8b
        }

        .ecom-wish-header {
            background: #fff;
            border-bottom: 1px solid #e2e8f0
        }

        .ecom-wish-top {
            background: #243b65;
            color: #fff;
            padding: 9px 4%;
            display: flex;
            justify-content: space-between;
            gap: 12px;
            flex-wrap: wrap;
            font-size: 12px
        }

        .ecom-wish-nav {
            max-width: 1440px;
            width: 92%;
            margin: auto;
            min-height: 78px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px
        }

        .ecom-wish-logo {
            font-size: 28px;
            font-weight: 700;
            letter-spacing: -1px;
            color: #243b65;
            text-decoration: none
        }

        .ecom-wish-navlinks {
            display: flex;
            align-items: center;
            gap: 24px;
            flex-wrap: wrap
        }

        .ecom-wish-navlinks a {
            color: #425a8b;
            text-decoration: none;
            font-size: 14px;
            font-weight: 700
        }

        .ecom-wish-navlinks a:hover {
            color: #ff9b55
        }

        @media(max-width:620px) {
            .ecom-wish-nav {
                padding: 16px 0;
                align-items: flex-start;
                flex-direction: column
            }

            .ecom-wish-navlinks {
                gap: 14px
            }
        }
    </style>
</head>

<body>
     <div class="top-header relative z-13">
        <nav>
            <ul>
                <li><a href="{{route('about-us')}}">About Us</a></li>
                <li><a href="{{route('career')}}">Careers</a></li>
                <li><a href="{{ route('shop') }}">Open a shop</a></li>
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
                            <image id="image0_123_4733" width="500" height="250" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAfQAAAD6CAYAAABXq7VOAAAAAXNSR0IArs4c6QAAIABJREFUeF7tnXl0VFW+77+nKnOFTJBEW8Wr0oraehkERJtrX287tI3aqHidkEFFFLDv1Pf16vt6ve51Xfet9brvtRFBVAwgqAgKOM8ioAxhEEecBxwaMpKQqiSVGt46VamQhAy7zrx3ffOn7rOHz++368Pe55x9tM9+Oe3zyn+5vXTIhedDpr/Pv2nAnx/YglUb9iLYEAQKcgC/T6YhsK+yE2gNY13VdEy5+HTDI2n7aj8+mfQrxEKt0Px+w/W4eWG8PYy8kSMwcvMGaHk5hrvyx4Ub8Ye7XwSK8gzXwQtJIG0CHVGgtQPHnFiK22+cgPnTz8XQkoK0q+l+QcuWHTjwl4fQ8sbbgD6vNVPV9XtxvLUdiEZRMGE0ht1y3Xva7vyTm7Us/5Cin09CxbxZkE3sH31ei3urtlLs9uQLax2IgAVCb/9qPz6eNAWxUEh+oW/ZAC2XQuekkYRAl8jLcPsN43H7jeNxbHmhqc7rIq+5rwpNL72JeEcHfAFz/zDorzOx1jYgGkNg/ChUzJ2BkimXQcvO2q29M+zMesTjZbFgCFp2NoZcMBGV/zybYjcVVl6cEQQo9ESYu1boFHpGpL30g7Rb5OFwUuSa9cvyo0R+1WXQsrJSIalOCh0oS87MeHLrLysLsq/YV27YixC34qWfe54eAIVOoXs6Qdm5HgSkF3kUgfGjkyvyniLvR+ip/6yLPRgCsrJQeuWlKJ8zDYU/HS9Vdry77wD+7+JNeG7jJwjWtfAeu1TRk6SzFDqFLkmqZnQ3dZG3deCY4WWY+suf4Ld3XIAfVQwxhSS0613ULHkEjWuePbK1bteKPBZDwaifYOiMazFs1nXdV+S9x9Brhd77f3eKXd+Kl33FzofnTOUvL+6LAIVOoXNmeJfAUSvycTi23JzIg9t34+DCKjS9+AbirW3wFRQAPge21pP3yAdjPYjQe63YKfbBePL/ZxQBCp1Cz6iEl2SwNmytd4n8hdcRa22HP5AP+Kx/q2qQe+SDBUBQ6CqLPZBry7+wBiPP/68AAQqdQlcgjZUZQiQGhMI45kTrnlp3TORt7UBEv0fe+dR63/fIBwtVmkLvS+z/8FNU/uYOFJ43brDGPPX/9dfd/ueht7Bs7W7EWjuA/Gy+x+6pCEnQGQqdQpcgTZXvYuc98iHlhfjnWedjzk0TTL9+Ftr7IQ78v0WJrXW7V+T6620FZ5+BY35zR38Pu4mG0KDQe4ldf0R/yIU/RcWcm6V73W3X+z9g6eqdWLWeB9SIZg3LdRKg0Cl0Tgb3CPTYWh+Hm64ajRHDky9sGf3TV+Q19z+C5lfeRKShCf5C/R65jVvrE0ahfPY0FE/+OfxF5u7vAzAp9BS1WCz5uptKD8/l5wBZ1gfSaKLxOg8SoNApdA+mpfJdsvNht8Q9cv1ht3xbDnoyeY98sNBaJPS+tuIlP3nu8WffQ3PtYYBiHyyJMvf/U+gUeuZmv/Mjz9yH3URZV2vvDD2jHppmbp+id3MKvO72xTcNWPTIdixbuweHapr5HrtoSmVSOQqdQs+kfHdrrBS5KPlqbU/xafXxcLhM32Kw/Kg6BcTOj8CI5lIGlqPQKfQMTHvHhkyRp4u6Wmt6ZVN9zX1VZc36V2Gi0cS9A9vF/utbE2fGy/THj8DIFC2H+kqhU+gOpVpGNUORGw13tRaPxxNnuTe/ujnxlZjDG7ciHonYK/acHBRd8jNUzp+FwkkTjHbelesodlewe7NRCp1C92ZmytkrO0S+cy9qFlbh0LOvJh528+iBMFbF64jQUzXqQj/4lweRWLHHYkmxW/2X2orPzUHRxYqInQfUWJ0l3q+PQqfQvZ+l3u+hHQfC6CK/bxmannsV0WAIfv3rZ3a8fmbNgTBWxehooadq1lfsB/60GPr3XfUteFu34nWxX3QBKv/pVhSeL9dHYHhAjVW5KGE9FDqFLmHaeqbLNhwI0/rBJ8kDYZ5/zV6Rt7YlPspi0YEwVoWkf6HrLcQ7Imh+bTPqHnoUTa9uSnxQ3S6xR1uC8AcCKLrkAlTcMV26rXgeUGNVTkpUD4VOoUuUrp7pqh0Hwuzci9olj6DppTcRqWuQ7UAYq0IzsNC7t5K6x27rw3OxGKLBVvjyFNqKL8jhkbJWpavX6qHQKXSv5aSX+2PHgTDdt9ZbQvAFpDwQxqqoiQu9+1a8/vCcrWJX8R47xW5V0nqnHgqdQvdONnq3J50irzihFHfcNAG33zje9FnrQafukbe2JXamTX40xanYpC90ij292PCp+PR4SVWaQqfQpUpYhzvbKfLy40sw+/pxCZkfd0yRqU5Q5APiMy70HmJftAyHN76NeDiS2PKw7T12lZ6K54rd1MT2xMUUOoXuiUT0WCd6iVz/+tnxFLkTQarW/vefX62fc9P4suMqzf3Lqfn1LahZsBTNG7faf0ANxe5EcrCNwQhQ6BT6YDmSSf+fInct2vs+r8XiVTuqNVT8pr78+JKyxJbItAkwLfbOA2p4j33g2HIr3rXct65hCp1Cty6b5K2JInctdrrIFyzbipXr9yJUH6zWMOL39eiIlqG1A/q9jlnXjsX8GRMpdodCRLE7BNqOZih0Ct2OvJKlThtEHtr9Hg7e+7D9B8LI9bDbURnRQ+QNwc6Ph/k7hQ4kv7bW+yEGq1bsC/Wn4t86cvKcplmbsnwq3lqerE2MAIVOoYtlilql7BD5Ox8kTnY79PRLSJ5JYtPJbkqK3NeZX1ovoafSLhWwE0pxy7Vjcee0CTjh2GJTSdn04kbU3PcwDm/aTrEPQJIrdlNp5uzFFDqF7mzGudsaRe4a/75X5CmRp7rVn9B7iD2MYceX4naL7rFT7GI5QbGLcXK1FIVOobuagA41TpE7BProZsRELir03iv21PuEFmzFOyr2nBwUX3YhKu66FYUTx7oWHCMNU+xGqDl0DYVOoTuUaq40Q5G7gl1vND2Rpyt0VcSel4viy/4BFfNmUeyupapCDVPoFLpC6dw1FIrctagaE7lRofcl9hvGY86N400fHND00kbU3r8CzRvfBiJRez4CE4shFmyFlk+xu5axKjVMoVPoKuUzRe5aNM2J3KzQu4u9rQNlxxYnjvabN/1c86+7vbwJBxc8hMObbXx4jmJ3LXGVaphCp9BVSGiK3LUoWiNyq4SeqicSBULJ99itOqDGkXvsFLtriaxEwxQ6hS5zIlPkrkXPWpFbLfR+77HrK/YhpqB1if3NbYkz4n35eabq6/NihcS+csNehPSDBgK5gM/i9/2tJy93jRQ6hS5jBkdjQDDctQCz4qz1kFPvkbe3Ax0RBMaPRsXcGSi56jJoWVnSRGHfF7VYUNV5slvXgTC9Xz8zOpzBXlszWm/qc3nDS/HbOy7ArKljUDzEnIgbnngaBxcsRes7HwA+X1LsVh9QkxJ7Xi5Kf3UpKu66BQVjzjJKwZXr3t13AP+5cCPWv/IRYsEwkJ/N77HbFQkKnUK3K7fsqFf/XW7rQKAsgGlTRuF3c3+GE35k7nyR9s+/Rs3i5ahfsQbRYMjWA2HikQjyRv4YFXdOx7BZ10kl8u8PNGPRyh2JY1oTCy5bPs5ll9B73WM/6ceVuOHKs02fFR9vb0fTy5tQ+8BKHN60zb4DamKxZHIOKUTRRRegYr58T8Xvev8HLF29E6vW70XQtgSy41dHojopdApdhnTtvrV+3ThMu2Y0TjtpmKmet763L/EQ86HnX0PHwVr4CwOJhZbVf7HUyW4TRqF89jQUT/45/EXmdn2t7uNA9elb6/cu34anXvoQtd812iRyu7bc+xtZOAK0RaS8x66LXd8N4OtuTk4DSdqi0Cl0L6eqDffIdZHXLF6GxnUvItrUDF9BAbQsv+UUukQ+fpScW+vdP5qiL6jysoFs6zn1BG/3Cr13mG04K54Pz4nNJR5QI8YprVIUOoWeVsI4VNh2kR+GL1AAzW/jilwVkduytd5fHjkt9O5b8Z1fd+NT8Q5N8s5mKHYLeVPoFLqF6WS6KorcNEKjFdjz1Hq6vXFL6EeJvTTxuttt15+DE48rSXcUPcpzxS6Gj2IX4zRgKQqdQrcgjUxXQZGbRmi0Am+IPNV7t4XeS+wlxxQlTp2z4oAail0sRSl2MU59lqLQKXQT6WP6UorcNEKjFXhL5F4Teqo/kRgQOvJ+5B2yfARGoffYV23gU/HCk5xCp9CFk8XCghS5hTDTq8qbIveq0I/aipf75LnKX9+aOABBpj+u2NOIFoVOoaeRLqaLUuSmERqtwNsi97rQFRB7NNgKfyAfxZMvQsW8mQiMG2U0l1y5jmIXwE6hU+gCaWK6CEVuGqHRCuQQuSxCV0LsydOTKHajU8rD11HoFLqd6UmR20l3wLrlErlsQqfYXUvsVMNdK/an9yJYHwTyc4As699DdX2g6XSAQqfQ08kX0bJ2iPyDj1GzsAqN6/UDYfgeeX+hkFPksgqdYhf9SbCt3Mdf1OHBx6qxbO0eHDrYnDzKMFPFTqFT6FbONBtE3vbRp6hZvAKNTz6HSGMTD4TpJ15yi1x2oTsh9s07gGgUvoJ8Wz4Ck/qQgaxb8V/ub8R9K7YlxV7TKXYbTo6y8vfS8roodArdiqSyXeSHOkVu/dGjyh3R6ujJblYkT/c6vPIeutlx2XCkbPPrW1CzaDkOv7YF+ld+KPa+g6SLXf/4gP4hmIz7CAyFTqGb+e2iyM3QM3WtGivy3ghUEbqNK/bm19/Cwf9egsObt9v/dTc+PGdqkjp+MYVOoRtJOorcCDVLrlFT5KpsufcXYhtW7E6dPCf7VnxGve5GoVPo6WhGcpHHo1EExpyNirtuQenVl0n1PXK1Ra660G1csVPsYr9gGSF2Cp1CF5kOSoj8LJTfOQNlUydDy8kRGbUnymSGyDNF6BS765NKabFT6BT6QDOMInft9yezRJ5pQqfYXZtYqYaVFDuFTqH3NbMoctd+bzJT5JkqdIrdtYmmpNgpdAq9+4yiyF37fclskWe60Cl21yaeUmKn0Cl0nQBF7trvCUXeHb1qr60ZTSs+FW+UnOnrpN6Kp9AzW+h2iPzTL1G7aBkanngGkUZ7D4RJPrXOh91M/4h5pgIKvWcoUhP0hFLcfNVozJ02ASedUGoqXE4/FV9y5aWomD8LBaN/YqrfTl8spdgp9MwUul0iv38FGtY8g0hdg60nu1HkTv+6OdUehd436c4JW1xZhNuuPwf/NOs8HFdZZCoqjop9SCFKrrwEFXNnUuymojbIxRR6ZgmdIrdzNg1YN7fWRdBT6ANTisSA1jDKjyvB7OvH4Y5pEyh2kbyyoIwUK3YKPTOETpFbMKONVUGRp8ONQhejJfs9dq7YxeKcbikKXW2hU+TpzgjLylPkRlBS6OlRo9jT42VhaU+u2Cl0NYVOkVs4c9OriiJPj1fP0hS6MXoUuzFuFlzlKbFT6GoJnSK3YIYaq4IiN8aNQreCW6oOit1KmmnV5QmxU+hqCJ0iT2vuWVmYIreSJlfo1tCk2K3haKAWV8VOocstdIrcwIyz5hKK3BqOXKHbwZErdjupCtXtitgpdDmFTpELzSk7ClHkdlBN1ckVuj10uWK3h6tArY6KnUKXS+g2iLz9s69Qs3g5D4QZZG5S5AI/XqaLUOimEQ5YAcVuL98BandE7BS6HEK3Q+RffoPaJStR/9h6RGrreLJbP3ORInfyJ5BCd4b2UWI/F8dVDjHVdtfJc29uAzQNvvw8U/X1eXEshmgwBL8C77Gv3LAXoYYgEMgFfJo1rCh0bws9GgOCYZQfnzwYas5NE3D8MeZOfGzvFHnD4+vRUVMHX0EBtCy/NfnUrZZ4exixcBiBsWej/M4ZKJs6GVpOjuXt2FXhvi9qsaBqK1au75x3BTmA32dXc6w3QYBCdzYROsVeMbwUv73jAsyaOgbFQ8yJuOGJp3FwwVKE9nyQ+GGxVeyFAQy96RoMm30j8s841Vl2Jlt7d98B/OfCjVj38keIh8KA/gNjVuwUujeFros8FEagLIBpU0bhd3N/hhN+VGwqgyI1daitWp34cErHwc4VuV0ib29H3qkno3zOzSi/7UapRP79gWYsWrkDC5ZtTf4DmiI3lXfpXUyhp8fLqtK62Ns6cNJplZg/faJpscfb29Gw9jnULl6B4J73ofl9SbFrFq1EU+PWV+wtQWSVlqD0ml8mVg6yiX3bO9/ivx96Kyn2oC72bOMrBwrdW0Lv/AdzYGhS5L+edR5GnlJuatbqIq9bthp1VU+g/av98AXyoWVlmaqzr4tjbe2Ih8PIO/UUDLvtBgybNhX+UnP/CLG8kwNUqIv8/lU78ODqXaj9rpEidxJ+V1sUuivYuxptjwDhCE467RjMv3kCrp18lqmz4uNt7Wh48jnUL38CLTveAaJR+AryLRe7/rWmWDDUKfbJiR+ggr89012Wabaui11fRTz3xicI1rUY+wGi0L0h9K5bWqW45hdn4q6ZE02LXJd34xPPoG75E2j/cn/iH8haTnaaWTZ48VhrW2Ke5v/tGSi7YQqGTpuKLIlE/smXdVi5bi8eXL0Ttd82AvnZQLb1tyAGJ8kS3HL3Sg6EI0B7RLqPwCTF3gp/UWFixV5x50zknzXSK1SF+mHq4TkK3V2h2/iwW9c9cl3k2faIvPtnTEuvmQxfrkT3yD+vTfyDeNWGvQjWB4E8ilzoB8fWQlyh24o37colfSo+Hosh1hKCv2QISq+6LHPETqG7I3QnRG7Tw276ipzfI0/7l5EXCBGg0IUwOV5IVrFHY4mt+IwRO4XurNApcsd/ilIN8vUz19Cn0TCFngYsF4pS7C5ATzYptBVPoTsjdIrctXlAkbuG3kDDFLoBaC5cQrG7AF1A7BS6vUKnyF3Le4rcNfQmGqbQTcBz4VKK3QXoA4g9HMG6qumYcvHphvulP0398aQpiIVC0PxyPh2sH4KSN3IERm7ZAM3Eg11/XLgRf7j7xeST0q0dlh4IE/7mO9QueQR1K59KnuzGe+R95ixFbngqe+BCCt0DQTDQBYrdADRrLumxFf9dI55cMxtXX3qG4cop9CPofn/P67j7dxtQfsaxlp3slhD5g6tQv+opdPy1JnlEqw0HwvBhN8NTgBdaRoBCtwylKxVR7K5g1xvVxf6nxZsw9YqzcdnPjJ+aR6EfCeGC5dvw9df1+Nc5f2f6iNajRW7TgTB8at21OciGexOg0NXIiW5iv+36cbhz2gRTB9ToULrOit+0HYjFbD2gxl9S1Pm62wzkn2V8+9qNYMZicfhMHCFLoR+JmlmWek1HibwgH1q2DSe7KSDyv+jvkfOsdTd+NmxqUxf6sf9eD6DMphZYrSMEOo94TYg9jLzjSxNblrrYTz15GMwcANtd7PFwh/nzz/viEY0iGgkhK68IJfp77HNnIDButC0/xI6EI41GKPQ0YPVXNB5H677PUPfAStSvWoeOhoPwZRUk8ycet6CBI1XotenzqWDMWdJ9NCUai2P3B99jQdU2PLZ+L9DjrHVrOVkKnZWJEqjWqp7cQ6GL4pKkXEdHFG2tYZz8N8NwyaQRyM4y/5Wj5lfeRNtnX9ty/zGFtfuRssWXX4TsSnPncMsQLgrdfJT0h/KaX9uC8Lffd94jt35F3pWjsSj8RUUovuQCqT6aove/JRTGCxs/xYHawygoyIGfXz8zn3weqkHTUK3F43EK3UNBYVcyiwCFnlnx5mhJwEYCFLqNcFk1CQxKgEIfFBELkAAJiBGg0MU4sRQJ2EOAQreHK2slgQwkQKFnYNA5ZA8RoNA9FAx2hQTkJkChyx0/9l52AhS67BFk/0nAMwQodM+Egh3JSAIUekaGnYMmATsIUOh2UGWdJCBKgEIXJcVyJEACgxCg0JkiJOAmAQrdTfpsmwSUIkChKxVODkY6AhS6dCFjh0nAqwQodK9Ghv3KDAIUembEmaMkAQcIUOgOQGYTJNAvAQqdyUECJGARAQrdIpCshgQMEaDQDWHjRSRAAkcToNCZFSTgJgEK3U36bJsElCJAoSsVTg5GOgIUunQhY4dJwKsEKHSvRob9ygwC4e/+in3nTkYsFILm90s5aP3zpXmn/xinb38O0PSvhfOPBEjABQLVWvu3P/DzqS6QZ5MkoLuvff8P+OKa2xBrbZVX6OEO5J7yNzjlyYeg5WYDccaWBEjABQLV2rvDz6HQXSDPJkkgsZqNxRBrbZMfhqbBl58H6At0Cl3+eHIEMhKo1vaUjKTQZQwd+6wGAQ3Srsx7ByAejVLmamQlRyElAa1ae2fYmRS6lMFjp0mABEiABEigiwCFzmQgARIgARIgAQUIUOgKBJFDIAESIAESIAEKnTlAAiRAAiRAAgoQoNAVCCKHQAIkQAIkQAIUOnOABEiABEiABBQgQKErEEQOgQRIgARIgAQodOYACZAACZAACShAgEJXIIgcAgmQAAmQAAlQ6MwBEiABEiABElCAAIWuQBA5BBIgARIgARKg0JkDJEACJEACJKAAAQpdgSByCCRAAiRAAiRAoTMHSIAESIAESEABAhS6AkHkEEiABEiABEiAQmcOkAAJkAAJkIACBCh0BYLIIZAACZAACZAAhc4cIAESIAESIAEFCFDoCgSRQyABEiABEiABCp05QAIkQAIkQAIKEKDQFQgih0ACJEACJEACFDpzgARIgARIgAQUIEChKxBEDoEESIAESIAEKHTmAAmQAAmQAAkoQIBCVyCIHAIJkAAJkAAJUOjMARIgARIgARJQgACFrkAQOQQSIAESIAESoNCZAyRAAiRAAiSgAAEKXYEgcggkQAIkQAIkQKEzB0iABEiABEhAAQIUugJB5BBIgARIgARIgEJnDpAACZAACZCAAgQodAWCyCGQAAmQAAmQAIXOHCABEiABEiABBQhQ6AoEkUMgARIgARIgAQqdOUACJEACJEACChCg0BUIIodAAiRAAiRAAhQ6c4AESIAESIAEFCBAoSsQRA6BBEiABEiABCh05gAJkAAJkAAJKECAQlcgiBwCCZAACZAACVDozAESIAESIAESUIAAha5AEDkEEiABEiABEqDQmQMkQAIkQAIkoAABCl2BIHIIJEACJEACJEChMwdIgARIgARIQAEC1dqeolPrAZQpMBgOgQQkIxAHNA1adrZk/e6ju/E44h0RAHEAmvzj4QhIQD4C1dqHo35OocsXOPZYEQLxSBQdB2uBuC5CSf/i8cQ/SrIrhyX+gcI/EiABNwho1Vo0GKLQ3WDPNkkAQPvX3+LTi69HLBSC5vdLySTeHkbeaafg1FdWQ8vNkXIM7DQJyE4gDlRr8XicQpc9kuy/tATC+7/HvvOukF/oI0fg9K3PAlly/qNE2gRix0ngCAEKndlAAm4SaP9qPz6eNEUJoY/csoErdDeTiW1nOgEKPdMzgON3lwCF7i5/tk4CChGg0BUKJociIQEKXcKgscsk4E0CFLo348JeZQoBCj1TIs1xkoDtBCh02xGzARIYgACFzvQgARKwiACFbhFIVkMChghQ6Iaw8SISIIGjCVDozAoScJMAhe4mfbZNAkoRoNCVCicHIx0BCl26kLHD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" />
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
                <a href="http://127.0.0.1:8000/shop-wishlist" class="header-wishlist-link" aria-label="Wishlist" style="position:relative;display:inline-flex;align-items:center"><img class="h-11" src="http://127.0.0.1:8000/assets/wishlist.png" alt="wishlist"><span data-ecom-wishlist-count="" class="header-wishlist-count" style="position:absolute;right:-3px;top:-3px;min-width:18px;height:18px;padding:0 4px;border-radius:999px;background:#ff9b55;color:#fff;font-size:11px;line-height:18px;text-align:center;font-weight:700">0</span></a>
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


    <div class="breadcrumb py-4 mb-[30px] bg-[#F0F3F8] text-xs">
        <div class="max-w-[1360px] mx-auto">
            <a href="#" class="leading-[18px] text-[#000] ml-4 hover:text-[#0BA9ED] duration-200">Home &gt;</a>
            <a href="#" class="leading-[18px] ml-4 hover:text-[#0BA9ED] duration-200">Shop&gt;</a>
            <a href="#" class="leading-[18px] ml-4 hover:text-[#0BA9ED] duration-200">Wishlist</a>
        </div>
    </div>

    <main class="ecom-wishlist-shell">
        <div class="ecom-wishlist-heading">
            <div>
                <p style="font-size:13px;margin:0 0 5px;color:#ff9b55;font-weight:700;letter-spacing:1px">YOUR SAVED ITEMS</p>
                <h1>My Wishlist</h1>
                <p style="margin:5px 0 0;color:#64748b">Your favourite products, all in one place.</p>
            </div><a class="ecom-wishlist-action" href="{{ route('shop-grid') }}" style="text-decoration:none">Continue Shopping</a>
        </div>
        <div class="ecom-wishlist-layout">
            <aside class="ecom-category-sidebar">
                <h2>Categories</h2><a href="{{ route('shop-grid') }}">All Products</a><a href="{{ route('shop-grid') }}">Electronics</a><a href="{{ route('shop-grid') }}">Computers & Laptops</a><a href="{{ route('shop-grid') }}">Headphones & Audio</a><a href="{{ route('shop-grid') }}">Smart Watches</a><a href="{{ route('shop-grid') }}">Home Security</a><a href="{{ route('shop-compare') }}">Compare Products</a>
            </aside>
            <section aria-label="Wishlist products">
                <div class="ecom-select-all-row" id="ecom-select-all-row" style="display:none"><label><input type="checkbox" id="ecom-select-all"> Select All</label><button class="ecom-remove-selected" id="ecom-remove-selected" disabled>Remove Selected</button><span style="color:#64748b;font-size:13px">Select products to remove them together.</span></div>
                <div class="ecom-wishlist-grid" id="ecom-wishlist-grid">
                    <div class="ecom-wishlist-empty">
                        <h2>Loading wishlist…</h2>
                    </div>
                </div>
            </section>
        </div>
    </main>
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
    </script>

    <script src="{{ asset('js/product-catalog.js') }}"></script>
    <script src="{{ asset('js/storefront.js') }}"></script>
</body>

</html>