<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <meta name="description"
          content="Fruit of Eden — a fine dining experience with an exotic twist.">

    <title>Fruit of Eden | Sinfully Good</title>


    <!-- Google Fonts -->
    <link rel="preconnect"
          href="https://fonts.googleapis.com">

    <link rel="preconnect"
          href="https://fonts.gstatic.com"
          crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&display=swap"
          rel="stylesheet">


    <!-- CSS -->
    <link rel="stylesheet"
          href="style.css">

</head>


<body>


<!-- =====================================================
     NAVIGATION
===================================================== -->

<header class="site-header">

    <!-- LOGO -->
    <a href="index.php" class="site-logo">
        <img
            src="assets/primarylogo.png"
            alt="Fruit of Eden"
        >
    </a>


    <!-- NAVIGATION -->
    <nav class="navbar">

        <button
            class="menu-toggle"
            aria-label="Open navigation"
        >
            <span></span>
            <span></span>
            <span></span>
        </button>


        <ul class="nav-links">

            <li>
                <a href="#home">Home</a>
            </li>

            <li>
                <a href="#menu">Menu</a>
            </li>

            <li>
                <a href="#story">About Us</a>
            </li>

            <li>
                <a href="#vip">VIP Diners</a>
            </li>

            <li>
                <a href="#contact">Contact</a>
            </li>

            <li>
                <a href="#">Join Our Team</a>
            </li>

        </ul>


        <!-- SAVE A SEAT -->
        <a
            href="reservations.php"
            class="nav-button"
        >
            Save a Seat
        </a>

    </nav>

</header>

<!-- =====================================================
     HERO
===================================================== -->

<main>

<section class="hero" id="home">

    <!-- HERO PATTERN -->
    <img
        class="hero-pattern"
        src="assets/hero-pattern.png"
        alt=""
        aria-hidden="true"
    >

    <!-- HERO IMAGE -->
    <div class="hero-image">

        <img
            src="assets/heroimage.png"
            alt="Fruit of Eden fine dining experience"
        >

    </div>


    <!-- HERO CONTENT -->
    <div class="hero-content">

        <p class="eyebrow">
            SINFULLY GOOD
            <span class="eyebrow-line"></span>
        <img src="assets/icons/sparkle.png" alt="" class="sparkle sparkle-eyebrow">
        </p>

        <h1>
            Indulge in Exotic
            <em>Temptation.</em>
        </h1>

        <p class="hero-description">
            A fine dining experience with an exotic twist,
            a curated menu from all over the globe
            guaranteed to surprise your tongue.
        </p>

        <a href="reservations.php" class="gold-button">
            Save a Seat
        </a>

    </div>


</section>

<!-- =====================================================
     BRAND INTRODUCTION
===================================================== -->

<section class="intro-section section-padding">

    <div class="section-heading centered">

        <div class="intro-star-pattern">
            <img
                src="assets/doublestar.png"
                alt=""
            >
        </div>

            <p class="eyebrow dark">
                WELCOME TO EDEN
            </p>

            <h2>
                Nourished by Nature,
                <em>Inspired by Eden.</em>
            </h2>

        </div>


        <div class="features">

            <!-- FEATURE 01 -->
            <div class="feature">

                <div class="feature-icon">
                    <img src="assets/globe icon.png" alt="Global Cuisine">
                </div>

                <h3>GLOBAL CUISINE</h3>

                <p>
                    Menu curated from all over 
                    the globe, offering an
                    unrivaled array of choices.
                </p>

            </div>


            <!-- FEATURE 02 -->
            <div class="feature">

                <div class="feature-icon">
                    <img src="assets/heart icon.png" alt="Naturally Fresh">
                </div>

                <h3>NATURALLY FRESH</h3>

                <p>
                    Ingredients are sourced from 
                    high quality farms, straight 
                    to your plate.
                </p>

            </div>


            <!-- FEATURE 03 -->
            <div class="feature">

                <div class="feature-icon">
                    <img src="assets/dine icon.png" alt="Fine Dining">
                </div>

                <h3>FINE DINING</h3>

                <p>
                    Elevated fine dining 
                    experience, especially
                    designed for sophistication.
                </p>

            </div>


            <!-- FEATURE 04 -->
            <div class="feature">

                <div class="feature-icon">
                    <img src="assets/exotic icon.png" alt="Exotic Menu">
                </div>

                <h3>EXOTIC MENU</h3>

                <p>
                    Unique and unfamiliar but 
                    undeniably delicious dishes 
                    for adventurous palates.
                </p>

            </div>

        </div>

        <div class="locate-area">

            <a href="#" class="locate-button">
                LOCATE EDEN NOW
            </a>

        </div>

    </div>

</section>



<!-- =====================================================
     MENU
===================================================== -->

<section class="browsemenu-section">

    <div class="menu-image">
        <img src="assets/menuimage.png"
        alt = ""
        >

    </div>


    <div class="browsemenu-content">

        <p class="eyebrow">
            OUR MENU
        </p>

        <h2>
            Flavors straight
            <em>from Paradise.</em>
        </h2>

        <p>
            Curated from cuisines all over the globe,
            six continents, six flavors, all in one plate.
        </p>

        <a href="#contact"
           class="browsemenu-button">

            Browse Menu

            </a>

    </div>

</section>



<!-- =====================================================
     MENU
===================================================== -->

<section class="menu-section section-padding"
         id="menu">

    <div class="menu-heading">

        <div>

            <h2>
                Our <em>Menu</em>
            </h2>

        </div>

    </div>



    <!-- CATEGORY FILTER -->

    <div class="menu-controls">

        <div class="category-buttons">

            <button class="category-button active"
                    data-category="all">

                All

            </button>

            <button class="category-button"
                    data-category="asian">

                Asian

            </button>

            <button class="category-button"
                    data-category="african">

                African

            </button>

            <button class="category-button"
                    data-category="american">

                American

            </button>

            <button class="category-button"
                    data-category="european">

                European

            </button>

            <button class="category-button"
                    data-category="australian">

                Australian

            </button>

        </div>


        <div class="menu-search">

            <input type="search"
                   id="menuSearch"
                   placeholder="Search food...">

        </div>

    </div>

    <!-- =====================================================
        MENU CARDS
    ===================================================== -->

    <div class="menu-grid">

        <!-- =================================================
            DISH 01
        ================================================== -->

        <article class="menu-card"
                data-category="asian"
                data-name="Eden Garden Ramen">

            <div class="menu-image">

                <img
                    src="assets/ramen.jpg"
                    alt="Eden Garden Ramen"
                >

            </div>

            <div class="menu-card-content">

                <div class="menu-card-top">

                    <h3>
                        Eden Garden Ramen
                    </h3>

                    <span class="menu-price">
                        ₱1,200
                    </span>

                </div>

                <p>
                    A refined interpretation of Asian comfort
                    food with exotic seasonal ingredients.
                </p>

                <div class="menu-tag">

                    <img
                        src="assets/nonvegetarian.png"
                        alt=""
                    >

                    <span>Non Vegetarian</span>

                </div>

            </div>

        </article>



        <!-- =================================================
            DISH 02
        ================================================== -->

        <article class="menu-card"
                data-category="european"
                data-name="Eden Truffle Risotto">

            <div class="menu-image">

                <img
                    src="assets/parmesianrissoto.jpg"
                    alt="Eden Truffle Risotto"
                >

            </div>

            <div class="menu-card-content">

                <div class="menu-card-top">

                    <h3>
                        Eden Truffle Risotto
                    </h3>

                    <span class="menu-price">
                        ₱1,850
                    </span>

                </div>

                <p>
                    Creamy arborio rice layered with earthy
                    truffle and delicate herbs.
                </p>

                <div class="menu-tag">

                    <img
                        src="assets/nonvegetarian.png"
                        alt=""
                    >

                    <span>Non Vegetarian</span>

                </div>

            </div>

        </article>



        <!-- =================================================
            DISH 03
        ================================================== -->

        <article class="menu-card"
                data-category="american"
                data-name="Ember Glazed Short Rib">

            <div class="menu-image">

                <img
                    src="assets/boar steak.jpg"
                    alt="Ember Glazed Short Rib"
                >

            </div>

            <div class="menu-card-content">

                <div class="menu-card-top">

                    <h3>
                        Ember Glazed Short Rib
                    </h3>

                    <span class="menu-price">
                        ₱2,400
                    </span>

                </div>

                <p>
                    Slow-cooked beef short rib finished
                    with a rich, aromatic glaze.
                </p>

                <div class="menu-tag">

                    <img
                        src="assets/nonvegetarian.png"
                        alt=""
                    >

                    <span>Non Vegetarian</span>

                </div>

            </div>

        </article>



        <!-- =================================================
            DISH 04
        ================================================== -->

        <article class="menu-card"
                data-category="african"
                data-name="Spiced Garden Plate">

            <div class="menu-image">

                <img
                    src="assets/massala platter.jpg"
                    alt="Spiced Garden Plate"
                >

            </div>

            <div class="menu-card-content">

                <div class="menu-card-top">

                    <h3>
                        Spiced Garden Plate
                    </h3>

                    <span class="menu-price">
                        ₱1,650
                    </span>

                </div>

                <p>
                    A vibrant plate inspired by aromatic
                    African flavors.
                </p>

                <div class="menu-tag">

                    <img
                        src="assets/vegetarian.png"
                        alt=""
                    >

                    <span>Vegetarian</span>

                </div>

            </div>

        </article>



        <!-- =================================================
            DISH 05
        ================================================== -->

        <article class="menu-card"
                data-category="australian"
                data-name="Eden Coast Catch">

            <div class="menu-image">

                <img
                    src="assets/squid salad.jpg"
                    alt="Eden Coast Catch"
                >

            </div>

            <div class="menu-card-content">

                <div class="menu-card-top">

                    <h3>
                        Eden Coast Catch
                    </h3>

                    <span class="menu-price">
                        ₱2,100
                    </span>

                </div>

                <p>
                    Freshly prepared seafood inspired by
                    the flavors of the Australian coast.
                </p>

                <div class="menu-tag">

                    <img
                        src="assets/nonvegetarian.png"
                        alt=""
                    >

                    <span>Non Vegetarian</span>

                </div>

            </div>

        </article>



        <!-- =================================================
            DISH 06
        ================================================== -->

        <article class="menu-card"
                data-category="european"
                data-name="Paradise Pastry">

            <div class="menu-image">

                <img
                    src="assets/swiss cherry pastry.jpg"
                    alt="Paradise Pastry"
                >

            </div>

            <div class="menu-card-content">

                <div class="menu-card-top">

                    <h3>
                        Paradise Pastry
                    </h3>

                    <span class="menu-price">
                        ₱950
                    </span>

                </div>

                <p>
                    A decadent swiss creation inspired
                    by the temptation of Eden.
                </p>

                <div class="menu-tag">

                    <img
                        src="assets/vegetarian.png"
                        alt=""
                    >

                    <span>Vegetarian</span>

                </div>

            </div>

        </article>

    </div>

    <!-- =====================================================
    SEASONAL & CHEF'S SPECIALS
    ===================================================== -->

    <div class="menu-specials">

        <div class="menu-specials-image">
            <img src="assets/chef icon.png"
                alt="Seasonal and Chef's Specials">
        </div>

        <div class="menu-specials-title">
            <p>SEASONAL AND CHEF'S SPECIALS</p>
        </div>

        <div class="menu-specials-action">

            <p>
                Need the finest catering services for your
                most special occasions?
            </p>

            <a href="#contact" class="special-catering-button">
                AVAIL CATERING
            </a>

        </div>

    </div>

</section>


<!-- =====================================================
     OUR STORY
===================================================== -->

<section class="story-section section-padding"
         id="story">

    <div class="story-content">

        <p class="eyebrow dark">
            OUR STORY
        </p>

        <h2>
            Each bite has a
            <em>creation story.</em>
        </h2>

        <p>
            Everything started in paradise.
            At Fruit of Eden, we bring you back
            to the flavors of creation:
            pure and sinfully good.
        </p>

        <a href="about.php"
           class="outline-button">

            About Us

        </a>

    </div>


    <div class="story-image image-placeholder">

        <span>STORY IMAGE</span>

    </div>

</section>



<!-- =====================================================
     VIP DINERS
===================================================== -->

<section class="vip-section"
         id="vip">

    <div class="vip-overlay"></div>


    <div class="vip-image image-placeholder">

        <span>VIP LOUNGE IMAGE</span>

    </div>


    <div class="vip-content">

        <p class="eyebrow">
            VIP DINERS
        </p>

        <h2>
            Own exclusive entry
            <em>to paradise.</em>
        </h2>

        <p>
            Enjoy lifetime VIP perks, unlimited access
            to state-of-the-art lounge areas and extra
            special dishes from top-rated chefs.
            Make every meal extra special.
        </p>

        <a href="vip.php"
           class="gold-button">

            Be a VIP

        </a>

    </div>

</section>



<!-- =====================================================
     TESTIMONIALS
===================================================== -->

<section class="testimonial-section section-padding">

    <div class="section-heading centered">

        <p class="eyebrow dark">
            TESTIMONIALS
        </p>

        <h2>
            Loved beyond
            <em>expectation.</em>
        </h2>

    </div>


    <div class="testimonial-grid">


        <article class="testimonial">

            <div class="quote-mark">
                “
            </div>

            <p>
                Absolutely delightful.
                Finest of all time.
                Everybody who can, must try.
            </p>

            <span>
                — Saransh Agrawal
            </span>

        </article>


        <article class="testimonial">

            <div class="quote-mark">
                “
            </div>

            <p>
                Absolutely delightful.
                Finest of all time.
                Everybody who can, must try.
            </p>

            <span>
                — Saransh Agrawal
            </span>

        </article>


        <article class="testimonial">

            <div class="quote-mark">
                “
            </div>

            <p>
                Absolutely delightful.
                Finest of all time.
                Everybody who can, must try.
            </p>

            <span>
                — Alan Becker
            </span>

        </article>

    </div>

</section>


<!-- =====================================================
     CONTACT SECTION
===================================================== -->

<section class="contact-section" id="contact">

    <div class="contact-container">

        <!-- CONTACT HEADING -->
        <div class="contact-heading">

            <h2>
                Need our <em>service?</em>
            </h2>

            <div class="contact-socials">

                <a href="#" aria-label="Facebook">
                    <img
                        src="assets/facebookiconred.png"
                        alt=""
                    >
                </a>

                <a href="#" aria-label="X">
                    <img
                        src="assets/xiconred.png"
                        alt=""
                    >
                </a>

                <a href="#" aria-label="Whatsapp">
                    <img
                        src="assets/whatsappiconred.png"
                        alt=""
                    >
                </a>

                <a href="#" aria-label="Instagram">
                    <img
                        src="assets/instaiconred.png"
                        alt=""
                    >
                </a>

            </div>

        </div>


        <!-- CONTACT CONTENT -->

        <div class="contact-content">

            <!-- FORM -->

            <div class="contact-form">

                <form id="newsletterForm">

                    <div class="contact-field">

                        <label for="name">Name</label>

                        <input
                            type="text"
                            id="name"
                            name="name"
                        >

                    </div>


                    <div class="contact-field">

                        <label for="email">Email</label>

                        <input
                            type="email"
                            id="email"
                            name="email"
                        >

                    </div>


                    <label class="newsletter-option">

                        <input
                            type="checkbox"
                            name="newsletter"
                        >

                        <span>
                            Subscribe to our Newsletter to receive
                            the freshest deals.
                        </span>

                    </label>


                    <button
                        type="submit"
                        class="contact-button">

                        Submit

                    </button>

                </form>

            </div>


            <!-- TELEPHONE -->

            <div class="telephone-area">

                <img
                src="assets/redphone.png"
                alt="Telephone"
                class="telephone-image">

            </div>

        </div>

    </div>

</section>



<!-- =====================================================
     PROMO + FOOTER
===================================================== -->

<section class="footer-section">

    <!-- PROMO -->

    <div class="promo-area">

        <h3>
            Got <em>special codes?</em>
        </h3>

        <p>
            Enter code to get limited perks and discounts.
        </p>


        <div class="promo-form">

            <input
                type="text"
                placeholder="ENTER CODE"
            >
            <button type="button">
                →
            </button>

        </div>

    </div>


    <!-- FOOTER CONTENT -->

    <div class="footer-main">

        <!-- LOGO -->

    <div class="footer-brand">

        <img
            src="assets/secondarylogo.png"
            alt="Fruit of Eden"
            class="footer-logo"
        >

    </div>

        <!-- FIND US -->

        <div class="footer-column">

            <h4>Find Us Here</h4>

            <p>
                Anywhere 123, Nowhere Street<br>
                Highway Road, 1234
            </p>

            <p>
                Anywhere 123, Nowhere Street<br>
                Highway Road, 1234
            </p>

            <p>
                Anywhere 123, Nowhere Street<br>
                Highway Road, 1234
            </p>

        </div>


        <!-- SERVICES -->

        <div class="footer-column">

            <h4>Services</h4>

            <a href="#">Catering</a>
            <a href="#">Special Orders</a>
            <a href="#">Special Orders</a>
            <a href="#">Special Orders</a>

        </div>


        <!-- CUSTOMER SERVICE -->

        <div class="footer-column">

            <h4>Customer Service</h4>

            <p>
                Tel.: 122-345-634
            </p>

            <p>
                Email: fruitofeden@email.com
            </p>


            <div class="footer-socials">

                <a href="#" aria-label="Facebook">
                    <img
                        src="assets/facebookicon.png"
                        alt="Facebook"
                    >
                </a>

                <a href="#" aria-label="X">
                    <img
                        src="assets/xicon.png"
                        alt="X"
                    >
                </a>

                <a href="#" aria-label="Whatsapp">
                    <img
                        src="assets/whatsappicon.png"
                        alt="TikTok"
                    >
                </a>

                <a href="#" aria-label="Instagram">
                    <img
                        src="assets/instaicon.png"
                        alt="Instagram"
                    >
                </a>

            </div>

        </div>

    </div>


    <!-- COPYRIGHT -->

    <div class="footer-bottom">

        <span>
            © 2026 FRUIT OF EDEN
        </span>

        <span>
            SINFULLY GOOD
        </span>

    </div>

</section>


</main>


<!-- =====================================================
     JAVASCRIPT
===================================================== -->

<script src="script.js"></script>

</body>

</html>