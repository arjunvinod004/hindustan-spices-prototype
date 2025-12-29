

document.addEventListener("DOMContentLoaded", function () {

//header sticky on scroll
 // Sticky Navbar Scroll Effect
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('mainNav');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Mobile Search Toggle
        const mobileSearchToggle = document.getElementById('mobileSearchToggle');
        const mobileSearchBar = document.getElementById('mobileSearchBar');

        if (mobileSearchToggle && mobileSearchBar) {
            mobileSearchToggle.addEventListener('click', function() {
                mobileSearchBar.classList.toggle('active');
            });

            // Close search bar when clicking outside
            document.addEventListener('click', function(event) {
                if (!mobileSearchToggle.contains(event.target) && !mobileSearchBar.contains(event.target)) {
                    mobileSearchBar.classList.remove('active');
                }
            });
        }

        // Cart Badge Update Demo (you can integrate with actual cart)
        function updateCartBadge(count) {
            const badges = document.querySelectorAll('.badge-count');
            badges.forEach(badge => {
                if (badge.closest('.icon-wrapper').querySelector('.fa-shopping-cart')) {
                    badge.textContent = count;
                }
            });
        }

        // Wishlist Badge Update Demo
        function updateWishlistBadge(count) {
            const badges = document.querySelectorAll('.badge-count');
            badges.forEach(badge => {
                if (badge.closest('.icon-wrapper').querySelector('.fa-heart')) {
                    badge.textContent = count;
                }
            });
        }

        // Example: Update cart count after 3 seconds (demo)
        setTimeout(() => {
            updateCartBadge(7);
        }, 3000);
        // Example: Update wishlist count after 5 seconds (demo)

        

//MARK: add to cart clicked increment and dcrement
document.addEventListener("click", function (e) {

    // ADD TO CART click
    if (e.target.classList.contains("btn-add-cart"))
    {
        let btn = e.target;
        let qtyBox = btn.nextElementSibling;

        btn.classList.add("d-none");
        qtyBox.classList.remove("d-none");
    }

    // PLUS
    if (e.target.classList.contains("plus")) {
        let qtyEl = e.target.previousElementSibling;
        qtyEl.innerText = parseInt(qtyEl.innerText) + 1;
    }

    // MINUS
    if (e.target.classList.contains("minus")) {
         let qtyBox = e.target.closest(".qty-wrapper");
        let qtyEl = qtyBox.querySelector(".qty");
        let qty = parseInt(qtyEl.innerText);

        if (qty > 1) {
            qtyEl.innerText = qty - 1;
        } else {
            // qty is 1 → remove item
            qtyBox.classList.add("d-none");
            qtyEl.innerText = 1;

            // show Add to Cart again
            qtyBox.previousElementSibling.classList.remove("d-none");
        }
    }

});

//MARK: Category Slider
 new Swiper('.category-slider', {
            loop: true,
            spaceBetween: 20,
            grabCursor: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: '.category-next',
                prevEl: '.category-prev',
            },
            breakpoints: {
                0: {
                    slidesPerView: 2,
                    spaceBetween: 10
                },
                576: {
                    slidesPerView: 3,
                    spaceBetween: 15
                },
                768: {
                    slidesPerView: 4
                },
                992: {
                    slidesPerView: 5
                }
            }
        });


// client slider

 new Swiper('.client-slider', {
            loop: true,
            spaceBetween: 20,
            grabCursor: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: '.client-next',
                prevEl: '.client-prev',
            },
            breakpoints: {
                0: {
                    slidesPerView: 2,
                    spaceBetween: 10
                },
                576: {
                    slidesPerView: 3,
                    spaceBetween: 15
                },
                768: {
                    slidesPerView: 4
                },
                992: {
                    slidesPerView: 5
                }
            }
        });

//MARK: Hero Slider

new Swiper('.hero-slider', {
    loop: true,
    effect: 'fade',
    autoplay: {
        delay: 4000,
        disableOnInteraction: false,
    },
    pagination: {
        el: '.hero-slider .swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.hero-next',
        prevEl: '.hero-prev',
    },
});



});