<div class=" py-6 px-4">
    <footer class="footer-container"
        style="background: linear-gradient(180deg,#0B4F9F 0%, #0E3058 100%);">

        <div class="flex flex-col items-center justify-center text-center gap-8">

            <!-- Logo -->
            <a href="{{ url('/') }}">
                <img src="{{ asset('images/footer-logo.png') }}"
                     alt="Peak Peptides"
                     class="md:h-16 h-10 w-auto object-contain mx-auto"/>
            </a>

          
            <nav class="footer-nav style-inter">
                <a href="{{ url('/') }}" class="footer-nav-item">
                    Home
                </a>

                <a href="#" class="footer-nav-item">
                    About
                </a>

                <div class="relative group">
                    <a href="#" class="flex items-center justify-center gap-1 footer-nav-item">
                        Peptides
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M19 9l-7 7-7-7"/>
                        </svg>
                    </a>

                    <!-- Dropdown -->
                    <div class="dropdown-menu">

                        <a href="#" class="footer-dropdown-nav-item">
                            All Peptides
                        </a>

                        <a href="#" class="footer-dropdown-nav-item">
                            Research
                        </a>
                    </div>
                </div>

                <a href="#" class="footer-nav-item">
                    Certificate of Analysis
                </a>

                <a href="#" class="footer-nav-item">
                    Contact
                </a>
            </nav>

        </div>
    </footer>
</div>