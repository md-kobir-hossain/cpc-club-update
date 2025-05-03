<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-lg-12 text-lg-left text-center">
          <div class="copyright">
            &copy; Copyright <strong>CPC-KiU</strong>. All Rights Reserved. Developed by <strong>CPC-KiU</strong>
          </div>
          <div class="credits">
          <!--  <a href="https://bd.linkedin.com/in/saimon-islam?trk=public-profile-badge-profile-badge-view-profile-cta">Developer Info</a> -->
		 <a href="developer">Developer Info</a>
          </div>
        </div>
        
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js   "></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="   assets/js/main.js   "></script>
  <script>
    var nav = document.querySelector('header');
    window.addEventListener('scroll', function () {
        if (window.pageYOffset > 87) {
            nav.classList.remove('transparent-nav');
            nav.classList.add('scrolled-nav', 'shadow');
            document.getElementsByClassName("img-srolled")[0].src = "assets/img/temp_logo.png";
        }
        else {
            nav.classList.remove('scrolled-nav');
            nav.classList.add('transparent-nav');
            document.getElementsByClassName("img-srolled")[0].src = "assets/img/temp_logo.png";
        }
    });

    //============ preLoader=========
document.addEventListener("DOMContentLoaded", function () {
  var loader = document.getElementById("loader");

  window.addEventListener("load", function () {
    setTimeout(function () {
      if (loader) {
        loader.style.display = "none";
      }
    }, 1500);
  });
});

    
    //============ end preloader ======




    //============ load more events =========
 
document.addEventListener("DOMContentLoaded", function () {
    const loadMoreBtn = document.getElementById("loadMoreEvents");
    const container = document.querySelector(".portfolio-container");
    const allEvents = Array.from(document.querySelectorAll(".portfolio-item"));
    const filterButtons = document.querySelectorAll("#portfolio-flters li");

    const initialEventsToShow = 3;
    let showingAll = false;
    let selectedFilter = "*";
    let filteredEvents = [];

    function filterEvents(filter) {
        selectedFilter = filter;
        showingAll = false;

        if (filter === "*") {
            filteredEvents = [...allEvents];
        } else {
            filteredEvents = allEvents.filter(event =>
                event.classList.contains(filter.replace(".", ""))
            );
        }

        updateVisibleEvents();
    }

    function updateVisibleEvents() {
    container.innerHTML = "";

    const visibleCount = showingAll ? filteredEvents.length : initialEventsToShow;
    for (let i = 0; i < visibleCount && i < filteredEvents.length; i++) {
        const item = filteredEvents[i].cloneNode(true);
        container.appendChild(item);
    }

    // Always show button if filtered list has more than initial limit
    if (filteredEvents.length > initialEventsToShow) {
        loadMoreBtn.style.display = "block";
        loadMoreBtn.textContent = showingAll ? "Show Less" : "More Events";
        loadMoreBtn.style.marginTop = showingAll ? "670px" : "20px";
    } else {
        loadMoreBtn.style.marginTop = "0px";
        loadMoreBtn.style.display = "none";
    }
}


    function toggleMoreEvents() {
        showingAll = !showingAll;
        updateVisibleEvents();
    }

    // Filter buttons
    filterButtons.forEach(button => {
        button.addEventListener("click", function () {
            filterButtons.forEach(btn => btn.classList.remove("active"));
            this.classList.add("active");

            const filter = this.getAttribute("data-filter");
            filterEvents(filter);
        });
    });

    loadMoreBtn.addEventListener("click", toggleMoreEvents);

    // Initialize on page load
    filterEvents(selectedFilter);
});






//============ end load more events =========

    </script>

</body>

</html>
