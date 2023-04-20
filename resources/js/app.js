import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();



      // Get the header element
      const header = document.getElementById("header");

      // Listen for the scroll event on the window
      window.addEventListener("scroll", () => {
        // If the user has scrolled past the header, add the "sticky" class to it
        if (window.pageYOffset > header.offsetTop) {
          header.classList.add("sticky");
        } else {
          // Otherwise, remove the "sticky" class from it
          header.classList.remove("sticky");
        }
      });



      const currentYear = new Date().getFullYear();
      document.getElementById("currentYear").textContent = currentYear;