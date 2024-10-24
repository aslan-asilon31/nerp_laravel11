<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="{{asset('suktura_v2_htmlcss/assets/img/favicon.png')}}" type="image/x-icon">

    <!--=============== BOXICONS ===============-->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="{{asset('suktura_v2_htmlcss/assets/css/swiper-bundle.min.css')}}">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{asset('suktura_v2_htmlcss/assets/css/styles.css')}}">

    <title>Suktura</title>
</head>

<body>
    <!-- https://youtu.be/twRLgPsP1H0 -->
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav_logo">
                Suktura<i class='bx bxs-home-alt-2'></i>
            </a>

            <div class="nav_menu">
                <ul class="nav_list">
                    <li class="nav_item">
                        <a href="#home" class="nav_link active-link">
                            <i class='bx bx-home-alt-2'></i>
                            <span>Home</span>
                        </a>
                    </li>

                    <li class="nav_item">
                        <a href="#popular" class="nav_link">
                            <i class='bx bx-building-house'></i>
                            <span>Residences</span>
                        </a>
                    </li>

                    <li class="nav_item">
                        <a href="#value" class="nav_link">
                            <i class='bx bx-award'></i>
                            <span>Value</span>
                        </a>
                    </li>

                    <li class="nav_item">
                        <a href="#contact" class="nav_link">
                            <i class='bx bx-phone'></i>
                            <span>Contact</span>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Theme change button -->
            <i class='bx bx-moon change-theme' id="theme-button"></i>

            <a href="#" class="button nav_button">
                Subscribe
            </a>
        </nav>
    </header>

    <!--==================== MAIN ====================-->
    <main class="main">
        <!--==================== HOME ====================-->
        <section class="home section" id="home">
            <div class="home_container container grid">
                <div class="home_data">
                    <h1 class="home_title">
                        Discover <br> Most Suitable <br> Property
                    </h1>
                    <p class="home_description">
                        Find a variety of properties that suit you very easily,
                        forget all difficulties in finding a residence for you
                    </p>

                    <form action="" class="home_search">
                        <i class='bx bxs-map'></i>
                        <input type="search" placeholder="Search by location..." class="home_search-input">
                        <button class="button">Search</button>
                    </form>

                    <div class="home_value">
                        <div>
                            <h1 class="home_value-number">
                                9K <span>+</span>
                            </h1>
                            <span class="home_value-description">
                                Premium <br> Product
                            </span>
                        </div>
                        <div>
                            <h1 class="home_value-number">
                                2K <span>+</span>
                            </h1>
                            <span class="home_value-description">
                                Happy <br> Customer
                            </span>
                        </div>
                        <div>
                            <h1 class="home_value-number">
                                28K <span>+</span>
                            </h1>
                            <span class="home_value-description">
                                Awards <br> Winning
                            </span>
                        </div>
                    </div>
                </div>

                <div class="home_images">
                    <div class="home_orbe"></div>

                    <div class="home_img">
                        <img src="{{asset('suktura_v2_htmlcss/assets/img/home.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </section>

        <!--==================== LOGOS ====================-->
        <section class="logos section">
            <div class="logos_container container grid">
                <div class="logos_img">
                    <img src="{{asset('suktura_v2_htmlcss/assets/img/logo1.png')}}" alt="">
                </div>
                <div class="logos_img">
                    <img src="{{asset('suktura_v2_htmlcss/assets/img/logo2.png')}}" alt="">
                </div>
                <div class="logos_img">
                    <img src="{{asset('suktura_v2_htmlcss/assets/img/logo3.png')}}" alt="">
                </div>
                <div class="logos_img">
                    <img src="{{asset('suktura_v2_htmlcss/assets/img/logo4.png')}}" alt="">
                </div>
            </div>
        </section>

        <!--==================== POPULAR ====================-->
        <section class="popular section" id="popular">
            <div class="container">
                <span class="section_subtitle">Best Choise</span>
                <h2 class="section_title">
                    Popular Residences<span>.</span>
                </h2>

                <div class="popular_container swiper">
                    <div class="swiper-wrapper">
                        <article class="popular_card swiper-slide">
                            <img src="{{asset('suktura_v2_htmlcss/assets/img/popular1.jpg')}}" alt="" class="popular_img">

                            <div class="popular_data">
                                <div class="price-list">
                                    <h2 class="popular_price">
                                        <span>Rp 50 M
                                    </h2>
                                    <h2 class="popular_price_before">
                                        <span>Rp 85 M 
                                    </h2>
                                    <h2 class="popular_price_before_discount">
                                        <span>(41% OFF)</span>
                                    </h2>
                                </div>
                                <h3 class="popular_title">
                                    Garden City Assat
                                </h3>
                                <p class="popular_description">
                                    Street The Garden City Of Miraflores,
                                    Jakarta - Indonesia Av. Sol #9876
                                </p>
                            </div>
                        </article>

                        <article class="popular_card swiper-slide">
                            <img src="{{asset('suktura_v2_htmlcss/assets/img/popular2.jpg')}}" alt="" class="popular_img">

                            <div class="popular_data">
                                <div class="price-list">
                                    <h2 class="popular_price">
                                        <span>Rp 90 M
                                    </h2>
                                    <h2 class="popular_price_before">
                                        <span>Rp 123 M 
                                    </h2>
                                    <h2 class="popular_price_before_discount">
                                        <span>(26% OFF)</span>
                                    </h2>
                                </div>
                                <h3 class="popular_title">
                                    Gables Luxurious House
                                </h3>
                                <p class="popular_description">
                                    Street The Garden City Of Miraflores,
                                    Jakarta - Indonesia Av. Sol #9876
                                </p>
                            </div>
                        </article>

                        <article class="popular_card swiper-slide">
                            <img src="{{asset('suktura_v2_htmlcss/assets/img/popular3.jpg')}}" alt="" class="popular_img">

                            <div class="popular_data">
                                <div class="price-list">
                                    <h2 class="popular_price">
                                        <span>Rp 45 M
                                    </h2>
                                    <h2 class="popular_price_before">
                                        <span>Rp 75 M
                                    </h2>
                                    <h2 class="popular_price_before_discount">
                                        <span>(40% OFF)</span>
                                    </h2>
                                </div>
                                <h3 class="popular_title">
                                    Garden Orchard City
                                </h3>
                                <p class="popular_description">
                                    Street The Garden City Of Miraflores,
                                    Jakarta - Indonesia Av. Sol #9876
                                </p>
                            </div>
                        </article>

                        <article class="popular_card swiper-slide">
                            <img src="{{asset('suktura_v2_htmlcss/assets/img/popular4.jpg')}}" alt="" class="popular_img">

                            <div class="popular_data">
                                <div class="price-list">
                                    <h2 class="popular_price">
                                        <span>Rp 60 M
                                    </h2>
                                    <h2 class="popular_price_before">
                                        <span>Rp 85 M 
                                    </h2>
                                    <h2 class="popular_price_before_discount">
                                        <span>(29% OFF)</span>
                                    </h2>
                                </div>
                                <h3 class="popular_title">
                                    Luxurious City Garden
                                </h3>
                                <p class="popular_description">
                                    Street The Garden City Of Miraflores,
                                    Jakarta - Indonesia Av. Sol #9876
                                </p>
                            </div>
                        </article>

                        <article class="popular_card swiper-slide">
                            <img src="{{asset('suktura_v2_htmlcss/assets/img/popular5.jpg')}}" alt="" class="popular_img">

                            <div class="popular_data">
                                <div class="price-list">
                                    <h2 class="popular_price">
                                        <span>Rp 20 M </span>
                                    </h2>
                                    <h2 class="popular_price_before">
                                        <span>Rp 35 M </span>
                                    </h2>
                                    <h2 class="popular_price_before_discount">
                                        <span>(43% OFF)</span>
                                    </h2>
                                </div>
                                <h3 class="popular_title">
                                    Aliva Private Garden
                                </h3>
                                <p class="popular_description">
                                    Street The Garden City Of Miraflores,
                                    Jakarta - Indonesia Av. Sol #9876
                                </p>
                            </div>
                        </article>
                    </div>

                    <div class="swiper-button-next">
                        <i class='bx bx-chevron-right'></i>
                    </div>
                    <div class="swiper-button-prev">
                        <i class='bx bx-chevron-left'></i>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== VALUE ====================-->
        <section class="value section" id="value">
            <div class="value_container container grid">
                <div class="value_images">
                    <div class="value_orbe"></div>

                    <div class="value_img">
                        <img src="{{asset('suktura_v2_htmlcss/assets/img/value.jpg')}}" alt="">
                    </div>
                </div>

                <div class="value_content">
                    <div class="value_data">
                        <span class="section_subtitle">Our Value</span>
                        <h2 class="section_title">
                            Value We Give To You<span>.</span>
                        </h2>
                        <p class="value_description">
                            We always ready to help by providing the best service for you.
                            We believe a good place to live can make your life better.
                        </p>
                    </div>

                    <div class="value_accordion">
                        <div class="value_accordion-item">
                            <header class="value_accordion-header">
                                <i class='bx bxs-shield-x value_accordion-icon'></i>
                                <h3 class="value_accordion-title">
                                    Best interest rates on the market
                                </h3>
                                <div class="value_accordion-arrow">
                                    <i class='bx bxs-down-arrow'></i>
                                </div>
                            </header>

                            <div class="value_accordion-content">
                                <p class="value_accordion-description">
                                    Price we provides is the best for you,
                                    we guarantee no price changes on your property due
                                    to various unexpected costs that may come.
                                </p>
                            </div>
                        </div>

                        <div class="value_accordion-item">
                            <header class="value_accordion-header">
                                <i class='bx bxs-x-square value_accordion-icon'></i>
                                <h3 class="value_accordion-title">
                                    Prevent unstable prices
                                </h3>
                                <div class="value_accordion-arrow">
                                    <i class='bx bxs-down-arrow'></i>
                                </div>
                            </header>

                            <div class="value_accordion-content">
                                <p class="value_accordion-description">
                                    Price we provides is the best for you,
                                    we guarantee no price changes on your property due
                                    to various unexpected costs that may come.
                                </p>
                            </div>
                        </div>

                        <div class="value_accordion-item">
                            <header class="value_accordion-header">
                                <i class='bx bxs-bar-chart-square value_accordion-icon'></i>
                                <h3 class="value_accordion-title">
                                    Best prices on the market
                                </h3>
                                <div class="value_accordion-arrow">
                                    <i class='bx bxs-down-arrow'></i>
                                </div>
                            </header>

                            <div class="value_accordion-content">
                                <p class="value_accordion-description">
                                    Price we provides is the best for you,
                                    we guarantee no price changes on your property due
                                    to various unexpected costs that may come.
                                </p>
                            </div>
                        </div>

                        <div class="value_accordion-item">
                            <header class="value_accordion-header">
                                <i class='bx bxs-check-square value_accordion-icon'></i>
                                <h3 class="value_accordion-title">
                                    Security of your data
                                </h3>
                                <div class="value_accordion-arrow">
                                    <i class='bx bxs-down-arrow'></i>
                                </div>
                            </header>

                            <div class="value_accordion-content">
                                <p class="value_accordion-description">
                                    Price we provides is the best for you,
                                    we guarantee no price changes on your property due
                                    to various unexpected costs that may come.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== CONTACT ====================-->
        <section class="contact section" id="contact">
            <div class="contact_container container grid">
                <div class="contact_images">
                    <div class="contact_orbe"></div>

                    <div class="contact_img">
                        <img src="{{asset('suktura_v2_htmlcss/assets/img/contact.png')}}" alt="">
                    </div>
                </div>

                <div class="contact_content">
                    <div class="contact_data">
                        <span class="section_subtitle">Contact Us</span>
                        <h2 class="section_title">
                            Easy to Contact us<span>.</span>
                        </h2>
                        <p class="contact_description">
                            Is there a problem finding your dream home? Need a
                            guide in buying first home? or need a consultation
                            on residential issues? just contact us.
                        </p>
                    </div>

                    <div class="contact_card">
                        <div class="contact_card-box">
                            <div class="contact_card-info">
                                <i class='bx bxs-phone-call'></i>

                                <div>
                                    <h3 class="contact_card-title">
                                        Call
                                    </h3>
                                    <p class="contact_card-description">
                                        022.321.165.19
                                    </p>
                                </div>
                            </div>

                            <button class="button contact_card-button">
                                Call Now
                            </button>
                        </div>

                        <div class="contact_card-box">
                            <div class="contact_card-info">
                                <i class='bx bxs-message-rounded-dots'></i>

                                <div>
                                    <h3 class="contact_card-title">
                                        Chat
                                    </h3>
                                    <p class="contact_card-description">
                                        022.321.165.19
                                    </p>
                                </div>
                            </div>

                            <button class="button contact_card-button">
                                Chat Now
                            </button>
                        </div>

                        <div class="contact_card-box">
                            <div class="contact_card-info">
                                <i class='bx bxs-video'></i>

                                <div>
                                    <h3 class="contact_card-title">
                                        Video Call
                                    </h3>
                                    <p class="contact_card-description">
                                        022.321.165.19
                                    </p>
                                </div>
                            </div>

                            <button class="button contact_card-button">
                                Video Call Now
                            </button>
                        </div>

                        <div class="contact_card-box">
                            <div class="contact_card-info">
                                <i class='bx bxs-envelope'></i>

                                <div>
                                    <h3 class="contact_card-title">
                                        Message
                                    </h3>
                                    <p class="contact_card-description">
                                        022.321.165.19
                                    </p>
                                </div>
                            </div>

                            <button class="button contact_card-button">
                                Message Now
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== SUBSCRIBE ====================-->
        <section class="subscribe section">
            <div class="subscribe_container container">
                <h1 class="subscribe_title">
                    Get Started with Suktura
                </h1>
                <p class="subscribe_description">
                    Subscribe and find super attractive price
                    quotes from us, Find your residence soon
                </p>
                <a href="#" class="button subscribe_button">
                    Get Started
                </a>
            </div>
        </section>
    </main>

    <!--==================== FOOTER ====================-->
    <footer class="footer section">
        <div class="footer_container container grid">
            <div>
                <a href="#" class="footer_logo">
                    Suktura <i class='bx bxs-home-alt-2'></i>
                </a>
                <p class="footer_description">
                    Our vision is to make all people <br>
                    the best place to live for them.
                </p>
            </div>

            <div class="footer_content">
                <div>
                    <h3 class="footer_title">
                        About
                    </h3>

                    <ul class="footer_links">
                        <li>
                            <a href="#" class="footer_link">About Us</a>
                        </li>
                        <li>
                            <a href="#" class="footer_link">Features</a>
                        </li>
                        <li>
                            <a href="#" class="footer_link">News & Blog</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="footer_title">
                        Company
                    </h3>

                    <ul class="footer_links">
                        <li>
                            <a href="#" class="footer_link">How We Work?</a>
                        </li>
                        <li>
                            <a href="#" class="footer_link">Capital</a>
                        </li>
                        <li>
                            <a href="#" class="footer_link">Security</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="footer_title">
                        Support
                    </h3>

                    <ul class="footer_links">
                        <li>
                            <a href="#" class="footer_link">FAQs</a>
                        </li>
                        <li>
                            <a href="#" class="footer_link">Support center</a>
                        </li>
                        <li>
                            <a href="#" class="footer_link">Contact Us</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="footer_title">
                        Follow us
                    </h3>

                    <ul class="footer_social">
                        <a href="https://www.facebook.com/" target="_blank" class="footer_social-link">
                            <i class='bx bxl-facebook-circle'></i>
                        </a>
                        <a href="https://www.instagram.com/" target="_blank" class="footer_social-link">
                            <i class='bx bxl-instagram-alt'></i>
                        </a>
                        <a href="https://www.pinterest.com/" target="_blank" class="footer_social-link">
                            <i class='bx bxl-pinterest'></i>
                        </a>
                    </ul>
                </div>
            </div>
        </div>

        <div class="footer_info container">
            <span class="footer_copy">
                &#169; 2024. All rigths reserved
            </span>

            <div class="footer_privacy">
                <a href="#">Terms & Agreements</a>
                <a href="#">Privacy Policy</a>
            </div>
        </div>
    </footer>


    <!--========== SCROLL UP ==========-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class='bx bx-chevrons-up'></i>
    </a>

    <!--=============== SCROLLREVEAL ===============-->
    <script src="{{asset('suktura_v2_htmlcss/assets/js/scrollreveal.min.js')}}"></script>

    <!--=============== SWIPER JS ===============-->
    <script src="{{asset('suktura_v2_htmlcss/assets/js/swiper-bundle.min.js')}}"></script>

    <!--=============== MAIN JS ===============-->
    <script src="{{asset('suktura_v2_htmlcss/assets/js/main.js')}}"></script>
</body>

</html>