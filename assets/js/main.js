document.addEventListener('DOMContentLoaded', function () {
    // Menu mobile toggle
    const menuToggle = document.getElementById('menu-toggle');
    const mainNav = document.querySelector('.main-nav');

    if (menuToggle && mainNav) {
        menuToggle.addEventListener('click', function () {
            mainNav.classList.toggle('active');
        });
    }

    // Close mobile menu when a link is clicked
    const navLinks = document.querySelectorAll('.main-nav a');
    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            if (mainNav.classList.contains('active')) {
                mainNav.classList.remove('active');
            }
        });
    });

    // Image Gallery Modal
    const modal = document.getElementById('myModal');
    const modalImg = document.getElementById('img01');
    const galleryItems = document.querySelectorAll('.gallery-item img');
    const closeBtn = document.querySelector('.close');

    // Add click event to all gallery images
    if (galleryItems.length > 0) {
        galleryItems.forEach(img => {
            img.addEventListener('click', function () {
                modal.style.display = "block";
                // Allow display to take effect before adding opacity
                setTimeout(() => {
                    modal.style.opacity = "1";
                    modalImg.src = this.src;
                    modalImg.style.opacity = "1";
                    modalImg.style.transform = "scale(1)";
                }, 10);
            });
        });
    }

    // Close modal when clicking on X
    if (closeBtn) {
        closeBtn.addEventListener('click', function () {
            modalImg.style.opacity = "0";
            modalImg.style.transform = "scale(0.95)";
            modal.style.opacity = "0";
            setTimeout(() => {
                modal.style.display = "none";
            }, 300); 
        });
    }

    // Close modal when clicking outside the image
    window.addEventListener('click', function (event) {
        if (event.target === modal) {
            modalImg.style.opacity = "0";
            modalImg.style.transform = "scale(0.95)";
            modal.style.opacity = "0";
            setTimeout(() => {
                modal.style.display = "none";
            }, 300); 
        }
    });
});