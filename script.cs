// script.js
document.addEventListener('DOMContentLoaded', function() {
    var currentPage = window.location.pathname.split("/").pop();
    var menuItems = document.querySelectorAll('nav ul li a');

    menuItems.forEach(function(item) {
        if(item.href.includes(currentPage)) {
            item.style.color = 'yellow';  // Aktif sayfa menüsünü sarı renkle vurgula
        }
    });
});
