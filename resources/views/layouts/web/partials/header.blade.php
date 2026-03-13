<header class="relative w-full z-50 ">
    {{-- Top bar --}}
    <div class="bg-[var(--primary-color)] text-[var(--white-text)] py-3 px-4 rounded-t-[20px]" data-aos="fade-down" data-aos-duration="1500" data-aos-delay="100">
        <p class="text-center text-[16px] md:text-[18px] font-medium style-inter">Welcome To Peak Peptides</p>
    </div>

    {{-- Main nav --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 md:h-20">
            {{-- Logo --}}
            <a href="{{ url('/') }}" class="flex items-center shrink-0">
                <img src="{{ asset('images/new-logo.png') }}" alt="Peak Peptides" class="w-full max-w-[120px]" data-aos="fade-down" data-aos-duration="1500" data-aos-delay="100">
            </a>

            {{-- Desktop menu (≥1024px) --}}
            <nav class="desktop-menu style-inter">
                <a href="/" class="desktop-menu-item" data-aos="fade-down" data-aos-duration="1500" data-aos-delay="100">Home</a>
                <a href="{{ url('/about') }}" class="desktop-menu-item" data-aos="fade-down" data-aos-duration="1500" data-aos-delay="200">About</a>
                <div class="relative group" data-aos="fade-down" data-aos-duration="1500" data-aos-delay="300">
                    <a href="{{ url('/peptides') }}" class="desktop-menu-item">
                    <button type="button" id="peptidesBtn" class="flex items-center gap-1 hover:text-primary transition">
                        Peptides
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    </a>
                    <div id="peptidesDropdown" class="desktop-menu-dropdown">
                        <a href="{{ url('/peptides') }}" class="desktop-menu-dropdown-item">All Peptides</a>
                        <a href="#" class="desktop-menu-dropdown-item">Research</a>
                    </div>
                </div>
                <a href="{{ url('#') }}" class="desktop-menu-item" data-aos="fade-down" data-aos-duration="1500" data-aos-delay="400">Provider</a>
                <a href="{{ url('/certificate-of-analysis') }}" class="desktop-menu-item" data-aos="fade-down" data-aos-duration="1500" data-aos-delay="400">Certificate of Analysis</a>
                <a href="{{ url('/contact') }}" class="desktop-menu-item" data-aos="fade-down" data-aos-duration="1500" data-aos-delay="500" data-aos-easing="ease-in-out">Contact</a>
            </nav>

            {{-- Hamburger (mobile) --}}
            <button id="menuBtn" type="button" class="lg:hidden text-2xl p-2 text-[var(--text-color)] hover:bg-gray-100 rounded-lg transition" aria-label="Toggle menu">☰</button>
        </div>
    </div>

    {{-- Mobile menu (<1024px) --}}
    <div id="mobileMenu" class="hidden lg:hidden border-t border-gray-200 bg-white style-inter">
        <nav class="mobile-menu">
            <a href="#" class="mobile-menu-item">Home</a>
            <a href="{{ url('/about') }}" class="mobile-menu-item">About</a>
            {{-- Peptides dropdown (mobile) --}}
            <div class="border-b border-gray-100">
              
                <button type="button" id="mobilePeptidesBtn" class="w-full flex items-center justify-between py-3 text-left hover:text-primary transition">
                    Peptides
                    <svg id="mobilePeptidesChevron" class="w-4 h-4 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
            
                <div id="mobilePeptidesDropdown" class="hidden pl-4 pb-2">
                    <a href="#" class="desktop-menu-dropdown-item">All Peptides</a>
                    <a href="#" class="desktop-menu-dropdown-item">Research</a>
                </div>
            </div>
            <a href="{{ url('#') }}" class="mobile-menu-item">Provider</a>
            <a href="{{ url('/certificate-of-analysis') }}" class="mobile-menu-item">Certificate of Analysis</a>
            <a href="{{ url('/contact') }}" class="mobile-menu-item">Contact</a>
        </nav>
    </div>
</header>





<script>
(function () {
  const menuBtn = document.getElementById("menuBtn");
  const mobileMenu = document.getElementById("mobileMenu");
  const mobilePeptidesBtn = document.getElementById("mobilePeptidesBtn");
  const mobilePeptidesDropdown = document.getElementById("mobilePeptidesDropdown");
  const mobilePeptidesChevron = document.getElementById("mobilePeptidesChevron");

  if (!menuBtn || !mobileMenu) return;

  menuBtn.addEventListener("click", function () {
    mobileMenu.classList.toggle("hidden");
    if (menuBtn.innerText === "☰") {
      menuBtn.innerText = "✕";
    } else {
      menuBtn.innerText = "☰";
    }
  });

  // Mobile Peptides dropdown toggle
  if (mobilePeptidesBtn && mobilePeptidesDropdown) {
    mobilePeptidesBtn.addEventListener("click", function () {
      mobilePeptidesDropdown.classList.toggle("hidden");
      if (mobilePeptidesChevron) {
        mobilePeptidesChevron.classList.toggle("rotate-180");
      }
    });
  }
})();
</script>
