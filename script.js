document.addEventListener("DOMContentLoaded", function () {

    /* =====================================================
       MOBILE NAVIGATION
    ===================================================== */

    const menuToggle = document.querySelector(".menu-toggle");
    const navLinks = document.querySelector(".nav-links");

    if (menuToggle && navLinks) {

        menuToggle.addEventListener("click", function () {

            navLinks.classList.toggle("active");

            menuToggle.classList.toggle("active");

        });


        // Close mobile menu when a link is clicked

        navLinks.querySelectorAll("a").forEach(function (link) {

            link.addEventListener("click", function () {

                navLinks.classList.remove("active");

                menuToggle.classList.remove("active");

            });

        });

    }
    /* =====================================================
        MENU CATEGORY FILTER
        ===================================================== */

        const categoryButtons =
            document.querySelectorAll(".category-button");

        const menuCards =
            document.querySelectorAll(".menu-card");


        categoryButtons.forEach(function (button) {

            button.addEventListener("click", function () {

                const selectedCategory =
                    button.getAttribute("data-category");


                /* Remove active state from all buttons */

                categoryButtons.forEach(function (item) {

                    item.classList.remove("active");

                });


                /* Activate clicked button */

                button.classList.add("active");


                /* Filter dishes */

                menuCards.forEach(function (card) {

                    const cardCategory =
                        card.getAttribute("data-category");


                    if (
                        selectedCategory === "all" ||
                        cardCategory === selectedCategory
                    ) {

                        card.classList.remove("hidden");

                    } else {

                        card.classList.add("hidden");

                    }

                });


                /* Re-apply search after category change */

                filterMenu();

            });

        });

