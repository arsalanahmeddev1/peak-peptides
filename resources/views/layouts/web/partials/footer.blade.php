<div class=" py-6 px-4">
    <footer class="footer-container"
        style="background: linear-gradient(180deg,#0B4F9F 0%, #0E3058 100%);">

        <div class="flex flex-col items-center justify-center text-center gap-8">

            <!-- Logo -->
            <a href="{{ url('/') }}"
               data-aos="fade-down"
               data-aos-duration="1500"
               data-aos-delay="100"
               data-aos-easing="ease-out">
                <img src="{{ asset('images/new-footer-logo.png') }}"
                     alt="Peak Peptides"
                     class="w-full max-w-[250px]"/>
            </a>

          
            <nav class="footer-nav style-inter">
                <a href="{{ url('/') }}" class="footer-nav-item"
                   data-aos="fade-down"
                   data-aos-duration="1500"
                   data-aos-delay="200"
                   data-aos-easing="ease-out">
                    Home
                </a>

                <a href="{{ url('/about') }}" class="footer-nav-item"
                   data-aos="fade-down"
                   data-aos-duration="1500"
                   data-aos-delay="300"
                   data-aos-easing="ease-out">
                    About
                </a>

                <div class="relative group" id="footerPeptidesWrap"
                     data-aos="fade-down"
                     data-aos-duration="1500"
                     data-aos-delay="400"
                     data-aos-easing="ease-out">
                    <a href="{{ url('/peptides') }}" id="footerPeptidesToggle" class="inline-flex items-center justify-center gap-1 flex-nowrap footer-nav-item" aria-expanded="false" aria-haspopup="true">
                        Peptides
                        <svg class="w-4 h-4 flex-shrink-0 transition-transform duration-200" id="footerPeptidesChevron" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M19 9l-7 7-7-7"/>
                        </svg>
                    </a>

                    <!-- Dropdown -->
                    <div class="dropdown-menu footer-dropdown-menu" id="footerPeptidesDropdown">

                        <a href="{{ url('/peptides') }}" class="footer-dropdown-nav-item">
                            All Peptides
                        </a>

                        <a href="#" class="footer-dropdown-nav-item">
                            Research
                        </a>
                    </div>
                </div>

                <a href="{{ url('#') }}" class="footer-nav-item"
                   data-aos="fade-down"
                   data-aos-duration="1500"
                   data-aos-delay="500"
                   data-aos-easing="ease-out">
                    Provider
                </a>
                <a href="{{ url('/certificate-of-analysis') }}" class="footer-nav-item"
                   data-aos="fade-down"
                   data-aos-duration="1500"
                   data-aos-delay="500"
                   data-aos-easing="ease-out">
                    Certificate of Analysis
                </a>

                <a href="{{ url('/contact') }}" class="footer-nav-item"
                   data-aos="fade-down"
                   data-aos-duration="1500"
                   data-aos-delay="600"
                   data-aos-easing="ease-out">
                    Contact
                </a>
            </nav>

        </div>
    </footer>
</div>


<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    AOS.init({
      duration: 1500,
      once: false,
      offset: 0,
      easing: 'ease-out'
    });

    // Footer Peptides dropdown: click to toggle on mobile/tablet (no hover)
    var footerToggle = document.getElementById('footerPeptidesToggle');
    var footerDropdown = document.getElementById('footerPeptidesDropdown');
    var footerChevron = document.getElementById('footerPeptidesChevron');
    var footerWrap = document.getElementById('footerPeptidesWrap');

    if (footerToggle && footerDropdown) {
      footerToggle.addEventListener('click', function(e) {
        if (window.innerWidth < 1024) {
          e.preventDefault();
          footerDropdown.classList.toggle('open');
          footerWrap.classList.toggle('open');
          if (footerChevron) footerChevron.style.transform = footerDropdown.classList.contains('open') ? 'rotate(180deg)' : '';
          footerToggle.setAttribute('aria-expanded', footerDropdown.classList.contains('open'));
        }
      });
      document.addEventListener('click', function(e) {
        if (window.innerWidth < 1024 && footerWrap && !footerWrap.contains(e.target)) {
          footerDropdown.classList.remove('open');
          footerWrap.classList.remove('open');
          if (footerChevron) footerChevron.style.transform = '';
          footerToggle.setAttribute('aria-expanded', 'false');
        }
      });
    }
  });
</script>