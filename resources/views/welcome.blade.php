@extends('layouts.web.master')

@section('content')
<main>
 <!-- Hero Section -->

<section
    class="hero-section"
    style="
        background-image: url('{{ asset('images/hero-bg-image.png') }}');
    "
>
    <!-- Content -->
    <div class="relative top-[-120px] z-10 px-[40px]">

        <h1 class="hero-title style-poppines">
            Unlock your <span class="italic">peak potential</span> with
            premium wellness solutions
        </h1>

        <a href="#"
           class="inline-block mt-[28px] secondary-button style-inter">
            Get started today
        </a>

    </div>

    <!-- Product Bottle (Right Bottom) -->
    <div class="absolute md:bottom-[-60px] bottom-[-40px] right-[10px] z-10 w-[220px] md:w-[260px] lg:w-[300px]">
        <img
            src="{{ asset('images/hero-left-side-bottom-image.png') }}"
            alt="Peak Peptides Glutathione"
            class="w-full h-auto object-contain drop-shadow-xl"
        />
    </div>

</section>

<!-- About Section -->
<section class="w-full py-14 md:py-20 lg:py-24 px-4 sm:px-6 md:px-8">
    <div class="mx-auto container text-center">
    <p class="inline-block text-[var(--primary-color)] bg-[var(--white-text)] px-4 py-1  font-bold text-[15px] tracking-wider mb-5 style-poppines">
    About us
</p>
        <p class="text-[var(--text-color)] leading-[1.5] max-w-[900px] mx-auto text-[20px] md:text-[24px] font-normal style-inter">
        At Peak Peptides, we offer the highest quality wellness products, carefully crafted with <span class="text-[#C5C5C5]">scientifically-backed peptidesto support your journey to peak performance, recovery, and overall well-being. Whether you're an athlete, fitness enthusiast, or simply someone committed to your health, our premium products are designed to help you achieve your goals.</span> </p>
        </p>
        <a href="#" class="primary-button mt-8 md:mt-10 style-inter">
            Discover our story
        </a>
    </div>
</section>
<!-- Explore Section - bg #F5F3F1, images group par koi card bg nahi -->
<div class="px-4 py-6">
<section class="bg-[#F5F3F1] w-full py-10 md:py-20 px-4  rounded-[22px]">
    <div class="mx-auto container">
        <h2 class="explore-title style-poppines ">
            Explore our premium <br><span class="text-[var(--primary-color)] italic">peptide solutions</span>
        </h2>

        <div class="explore-cards">
            <!-- Card 1 - NAD+ -->
            <div class="explore-card-item">
                <div class="flex justify-center items-end  mb-4">
                    <img src="{{ asset('images/explore-img-1.png') }}" alt="NAD+ Peak Peptides" class="w-full   h-auto object-contain" />
                </div>
                <h3 class="label-title style-poppines">NAD+</h3>
                <p class="label-description style-inter">Supports energy & metabolism</p>
                <p class="label-price style-inter">From $45</p>
            </div>

            <!-- Card 2 - MIC+B12 -->
            <div class="explore-card-item">
                <div class="flex justify-center items-end  mb-4">
                    <img src="{{ asset('images/explore-img-2.png') }}" alt="MIC+B12 Peak Peptides" class="w-full   h-auto object-contain" />
                </div>
                <h3 class="label-title style-poppines">MIC+B12</h3>
                <p class="label-description !whitespace-nowrap style-inter">Support for fatigue, brain fog, and metabolism</p>
                <p class="label-price style-inter">From $65</p>
            </div>

            <!-- Card 3 - Glutathione -->
            <div class="explore-card-item">
                <div class="flex justify-center items-end  mb-4">
                    <img src="{{ asset('images/explore-img-3.png') }}" alt="Glutathione Peak Peptides" class="w-full   h-auto object-contain" />
                </div>
                <h3 class="label-title style-poppines">Glutathione</h3>
                <p class="label-description style-inter">Natural anti-oxidant support</p>
                <p class="label-price style-inter">From $49</p>
            </div>

            <!-- Card 4 - Sermorelin -->
            <div class="explore-card-item">
                <div class="flex justify-center items-end  mb-4">
                    <img src="{{ asset('images/explore-img-4.png') }}" alt="Sermorelin Peak Peptides" class="w-full   h-auto object-contain" />
                </div>
                <h3 class="label-title style-poppines">Sermorelin</h3>
                <p class="label-description style-inter">Supports growth hormone activation</p>
                <p class="label-price style-inter">From $35</p>
            </div>
        </div>

        <div class="text-center mt-10 md:mt-14">
            <a href="#" class="primary-button style-inter">
                View all peptides
            </a>
        </div>
    </div>
</section>
</div>
<!-- Why Choose Peak Peptides -->
<section class="w-full py-10 md:py-20 px-4 sm:px-6 md:px-8">
    <div class="mx-auto container">
    <div class="flex flex-col-reverse lg:flex-row lg:items-stretch gap-8 lg:gap-10 xl:gap-12">
            <!-- Left: Image -->
            <div class="w-full lg:w-[45%] xl:w-[48%] flex-shrink-0">
                <img
                    src="{{ asset('images/why-choice-left-img.png') }}"
                    alt="Peak Peptides wellness"
                    class="w-full h-auto object-cover"
                />
            </div>

            <!-- Right: Content card -->
            <div class="w-full lg:flex-1 flex items-center">
                <div class="p-6 sm:p-8 md:p-10 w-full">
                    <h2 class="text-[var(--text-color)] font-semibold text-[30px]  md:text-[40px] leading-[1.2] mb-6 style-poppines">
                        Why Choose<br>
                        <span class="text-[var(--primary-color)] italic font-bold">Peak Peptides?</span>
                    </h2>

                    <ul class="space-y-6 md:space-y-7">
                        <li class="flex gap-4 items-start">
                            <img src="{{ asset('images/choose-icon-1.png') }}" alt="Premium Ingredients" class="choose-icon-image" />
                            <div>
                                <h3 class="choose-icon-title style-poppines">Premium Ingredients</h3>
                                <p class="choose-icon-description style-inter">We source only the highest quality ingredients to ensure the potency and purity of every product.</p>
                            </div>
                        </li>
                        <li class="flex gap-4 items-start">
                            <img src="{{ asset('images/choose-icon-2.png') }}" alt="Exclusively Tailored for Results" class="choose-icon-image" />
                            <div>
                                <h3 class="choose-icon-title style-poppines">Exclusively Tailored for Results</h3>
                                <p class="choose-icon-description style-inter">Designed with athletes and health-conscious individuals in mind, our products are optimized for performance, recovery, and vitality.</p>
                            </div>
                        </li>
                        <li class="flex gap-4 items-start">
                            <img src="{{ asset('images/choose-icon-3.png') }}" alt="Scientific Formulations" class="choose-icon-image" />
                            <div>
                                <h3 class="choose-icon-title style-poppines">Scientific Formulations</h3>
                                <p class="choose-icon-description style-inter">Each product is backed by cutting-edge research, delivering maximum effectiveness.</p>
                            </div>
                        </li>
                        <li class="flex gap-4 items-start">
                            <img src="{{ asset('images/choose-icon-4.png') }}" alt="Transparency & Trust" class="choose-icon-image" />
                            <div>
                                <h3 class="choose-icon-title style-poppines">Transparency & Trust</h3>
                                <p class="choose-icon-description style-inter">We offer full transparency with Certificates of Analysis (COA) for all products, so you know exactly what you're putting into your body.</p>
                            </div>
                        </li>
                    </ul>

                    <a href="#" class="primary-button mt-8 md:mt-10 inline-block style-inter">
                        Learn more about us
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- What Our Customers Are Saying -->
<section class="py-16 px-4">
    <div class="container mx-auto px-0 md:px-6">

        <!-- Heading -->
        <div class="text-center mb-12">
            <h2 class="text-[30px] md:text-[40px]  text-[var(--text-color)] font-semibold style-poppines leading-[1]">
                What Our <span class="text-[var(--primary-color)]">Customers</span>
                <br> Are Saying
            </h2>
        </div>

        <!-- Cards -->
        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-4">

            <!-- Card 1 -->
            <div class="testimonial-card">

                <!-- Background -->
                <img src="{{ asset('images/customer-1-bg-image.png') }}"
                     class="absolute inset-0 w-full h-full object-cover">

            

                <!-- Content -->
                <div class="testimonial-content">

                    <!-- Stars -->
                    <div class="flex space-x-1">
                        <img src="{{ asset('images/start-icon.png') }}" class="w-6 h-6" alt="Star">
                        <img src="{{ asset('images/start-icon.png') }}" class="w-6 h-6" alt="Star">
                        <img src="{{ asset('images/start-icon.png') }}" class="w-6 h-6" alt="Star">
                        <img src="{{ asset('images/start-icon.png') }}" class="w-6 h-6" alt="Star">
                        <img src="{{ asset('images/start-icon.png') }}" class="w-6 h-6" alt="Star">
                    </div>

                    <!-- Testimonial Text -->
                    <p class="testimonial-text style-inter">
                        Since I started using Peak Peptides, my muscle recovery
                        time has decreased significantly, and I feel stronger
                        than ever.
                    </p>

                    <!-- Customer Name -->
                    <span class="font-semibold mb-4 style-inter">Jacob</span>

                </div>
            </div>


            <!-- Card 2 -->
            <div class="testimonial-card">

                <img src="{{ asset('images/customer-2-bg-image.png') }}"
                     class="absolute inset-0 w-full h-full object-cover">

          

                <div class="relative p-8 flex flex-col justify-between h-full text-[var(--white-text)] mx-auto">

                    <!-- Stars -->
                    <div class="flex space-x-1">
                        <img src="{{ asset('images/white-start.png') }}" class="w-6 h-6 " alt="Star">
                        <img src="{{ asset('images/white-start.png') }}" class="w-6 h-6 " alt="Star">
                        <img src="{{ asset('images/white-start.png') }}" class="w-6 h-6 " alt="Star">
                        <img src="{{ asset('images/white-start.png') }}" class="w-6 h-6 " alt="Star">
                        <img src="{{ asset('images/white-start.png') }}" class="w-6 h-6 " alt="Star">
                    </div>

                    <p class="testimonial-text style-inter">
                        After incorporating Peak Peptides into my routine,
                        I've noticed a remarkable increase in my workout
                        endurance and overall performance.
                    </p>

                    <span class="font-semibold mt-2 style-inter">Emily</span>

                </div>
            </div>


            <!-- Card 3 -->
            <div class="testimonial-card">

                <img src="{{ asset('images/customer-3-bg-image.png') }}"
                     class="absolute inset-0 w-full h-full object-cover">

         

                <div class="testimonial-content">

                    <!-- Stars -->
                    <div class="flex space-x-1">
                        <img src="{{ asset('images/start-icon.png') }}" class="w-6 h-6" alt="Star">
                        <img src="{{ asset('images/start-icon.png') }}" class="w-6 h-6" alt="Star">
                        <img src="{{ asset('images/start-icon.png') }}" class="w-6 h-6" alt="Star">
                        <img src="{{ asset('images/start-icon.png') }}" class="w-6 h-6" alt="Star">
                        <img src="{{ asset('images/start-icon.png') }}" class="w-6 h-6" alt="Star">
                    </div>

                    <p class="testimonial-text style-inter">
                        The benefits of Peak Peptides have been incredible;
                        I've experienced less fatigue and quicker gains
                        in muscle mass.
                    </p>

                    <span class="font-semibold mt-2 style-inter">Michael</span>

                </div>
            </div>

        </div>
    </div>
</section>

<!-- Peak Health Section -->
<section class="px-4 py-6">
    
    <div class="relative rounded-[22px] overflow-hidden">

        <!-- Background Image -->
        <img 
            src="{{ asset('images/peak-health-bg-img.png') }}" 
            alt="Peak Health"
            class="w-full h-[300px] sm:h-[380px] md:h-[460px] lg:h-[620px] object-cover"
        >

        <!-- Content -->
        <div class="absolute inset-0 flex items-center">
            
            <div class="max-w-xl pl-6 sm:pl-10 md:pl-16 lg:pl-20">

                <h2 class="text-white font-bold leading-tight
                           text-[20px] text-[30px] md:text-[40px] style-poppines">
                    Start Your Journey to
                    <span class="italic font-semibold">Peak Health</span> Today
                </h2>

                <p class="text-[var(--white-text)] mt-4 text-[15px] style-inter">
                    Unlock your potential with our peptides and wellness solutions.
                </p>

                <button class="mt-6 secondary-button style-inter">
                    Get started today
                </button>

            </div>

        </div>

    </div>

</section>

</main>
@endsection