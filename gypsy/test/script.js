/*
 * Copyright (c) 2024. All rights reserved by Woliul Hasan. Fork me on https://github.com/woliul
 */

// Add your JavaScript code for the navigation menu interactivity or functionality here

// Function to toggle submenu visibility
function toggleSubmenu() {
    const submenu = this.nextElementSibling;
    submenu.style.display = submenu.style.display === 'block' ? 'none' : 'block';
}

// Add event listeners to navbar items with submenu
const navbarItems = document.querySelectorAll('.navbar-nav .nav-item');
navbarItems.forEach(item => {
    const submenuToggle = item.querySelector('.submenu-toggle');
    if (submenuToggle) {
        submenuToggle.addEventListener('click', toggleSubmenu);
    }
});

// Add your additional JavaScript code here
