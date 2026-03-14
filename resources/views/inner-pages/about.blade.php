@extends('layouts.web.master')

@section('content')
<main class="overflow-hidden">
    {{-- Inner page hero --}}
    <section class="inner-page-hero"
             style="background-image: linear-gradient(to right, rgba(12, 79, 159, 0.85), rgba(28, 84, 136, 0.75)), url('https://images.unsplash.com/photo-1576091160399-112ba8d25d1f?w=1200');">
        <h1 class="inner-page-hero-title"
            data-aos="fade-up"
            data-aos-duration="1500"
            data-aos-easing="ease-out">
            About <span class="italic">Peak Peptides</span>
        </h1>
    </section>

    {{-- Intro section --}}
    <section class="w-full py-14 md:py-20 lg:py-24 px-4 sm:px-6 md:px-8">
        <div class="mx-auto container text-center">
            <p class="section-label"
               data-aos="fade-down"
               data-aos-duration="1500"
               data-aos-easing="ease-out">
                About us
            </p>
            <p class="section-text"
               data-aos="fade-up"
               data-aos-duration="1500"
               data-aos-delay="150"
               data-aos-easing="ease-out">
                At Peak Peptides, we offer the highest quality wellness products, carefully crafted with
                <span class="text-[#C5C5C5]">scientifically-backed peptides to support your journey to peak performance, recovery, and overall well-being.</span>
                Whether you're an athlete, fitness enthusiast, or simply committed to your health, our premium products are designed to help you achieve your goals.
            </p>
        </div>
    </section>

    {{-- Our story: image + content --}}
    <section class="w-full py-10 md:py-20 px-4 sm:px-6 md:px-8">
        <div class="mx-auto container">
            <div class="flex flex-col-reverse lg:flex-row lg:items-stretch gap-8 lg:gap-10 xl:gap-12">
                <div class="w-full lg:w-[45%] xl:w-[48%] flex-shrink-0 rounded-[22px] overflow-hidden"
                     data-aos="fade-right"
                     data-aos-duration="1500"
                     data-aos-easing="ease-out">
                    <img
                        src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?w=800"
                        alt="Peak Peptides wellness and fitness"
                        class="w-full h-[280px] sm:h-[340px] md:h-[400px] object-cover"
                        loading="lazy"
                    />
                </div>
                <div class="w-full lg:flex-1 flex items-center">
                    <div class="p-0 sm:p-6 md:p-8 w-full">
                        <h2 class="section-heading"
                            data-aos="fade-down"
                            data-aos-duration="1500"
                            data-aos-easing="ease-out">
                            Our <span class="section-heading-accent">Story</span>
                        </h2>
                        <p class="choose-icon-description style-inter mb-4"
                           data-aos="fade-up"
                           data-aos-duration="1500"
                           data-aos-delay="100"
                           data-aos-easing="ease-out">
                            Founded with a mission to make research-backed peptide solutions accessible, Peak Peptides combines cutting-edge science with rigorous quality standards. Every product is developed to support your body’s natural potential.
                        </p>
                        <p class="choose-icon-description style-inter"
                           data-aos="fade-up"
                           data-aos-duration="1500"
                           data-aos-delay="200"
                           data-aos-easing="ease-out">
                            We partner with trusted facilities and provide full transparency through Certificates of Analysis (COA), so you can trust what you’re putting into your body. Your journey to peak health starts here.
                        </p>
                        <a href="{{ url('#') }}"
           class="primary-button mt-8 md:mt-10 inline-block style-inter"
           data-aos="fade-up"
           data-aos-duration="1500"
           data-aos-delay="300"
           data-aos-easing="ease-out">
                            Explore our peptides
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Why Choose (reuse welcome classes) --}}
    <section class="w-full py-10 md:py-20 px-4 sm:px-6 md:px-8 bg-[#F5F3F1] rounded-[22px] mx-4 md:mx-6">
        <div class="mx-auto container">
            <h2 class="explore-title style-poppines"
                data-aos="fade-down"
                data-aos-duration="1500"
                data-aos-easing="ease-out">
                Why Choose <span class="text-[var(--primary-color)] italic">Peak Peptides?</span>
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8 mt-10">
                <div class="flex gap-4 items-start"
                     data-aos="fade-up"
                     data-aos-duration="1500"
                     data-aos-delay="100"
                     data-aos-easing="ease-out">
                    <img src="https://images.unsplash.com/photo-1582719471384-894fbb16e074?w=160&h=160&fit=crop" alt="Premium quality" class="choose-icon-image rounded-lg object-cover w-20 h-20 flex-shrink-0">
                    <div>
                        <h3 class="choose-icon-title style-poppines">Premium Ingredients</h3>
                        <p class="choose-icon-description style-inter">We source only the highest quality ingredients to ensure the potency and purity of every product.</p>
                    </div>
                </div>
                <div class="flex gap-4 items-start"
                     data-aos="fade-up"
                     data-aos-duration="1500"
                     data-aos-delay="200"
                     data-aos-easing="ease-out">
                    <img src="https://images.unsplash.com/photo-1571019614242-c5c5dee9f50b?w=160&h=160&fit=crop" alt="Tailored for results" class="choose-icon-image rounded-lg object-cover w-20 h-20 flex-shrink-0">
                    <div>
                        <h3 class="choose-icon-title style-poppines">Tailored for Results</h3>
                        <p class="choose-icon-description style-inter">Our products are optimized for performance, recovery, and vitality—designed with you in mind.</p>
                    </div>
                </div>
                <div class="flex gap-4 items-start"
                     data-aos="fade-up"
                     data-aos-duration="1500"
                     data-aos-delay="300"
                     data-aos-easing="ease-out">
                    <img src="https://images.unsplash.com/photo-1532187863486-abf9dbad1b69?w=160&h=160&fit=crop" alt="Scientific formulations" class="choose-icon-image rounded-lg object-cover w-20 h-20 flex-shrink-0">
                    <div>
                        <h3 class="choose-icon-title style-poppines">Scientific Formulations</h3>
                        <p class="choose-icon-description style-inter">Each product is backed by research, delivering maximum effectiveness you can trust.</p>
                    </div>
                </div>
                <div class="flex gap-4 items-start"
                     data-aos="fade-up"
                     data-aos-duration="1500"
                     data-aos-delay="400"
                     data-aos-easing="ease-out">
                    <img src="https://images.unsplash.com/photo-1559757148-5c350d0d3c56?w=160&h=160&fit=crop" alt="Transparency" class="choose-icon-image rounded-lg object-cover w-20 h-20 flex-shrink-0">
                    <div>
                        <h3 class="choose-icon-title style-poppines">Transparency & Trust</h3>
                        <p class="choose-icon-description style-inter">Full transparency with Certificates of Analysis (COA) for all products.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA strip (welcome-style) --}}
    <section class="px-4 py-6">
        <div class="relative rounded-[22px] overflow-hidden">
            <img
                src="https://images.unsplash.com/photo-1559757148-5c350d0d3c56?w=1200"
                alt="Peak Health"
                class="w-full h-[260px] sm:h-[320px] md:h-[400px] object-cover"
                loading="lazy"
            />
            <div class="absolute inset-0 flex items-center" style="background: linear-gradient(90deg, rgba(11, 79, 159, 0.9) 0%, rgba(14, 48, 88, 0.7) 100%);">
                <div class="max-w-xl pl-6 sm:pl-10 md:pl-16 lg:pl-20">
                    <h2 class="text-white font-bold leading-tight text-[20px] sm:text-[28px] md:text-[36px] style-poppines"
                        data-aos="fade-down"
                        data-aos-duration="1500"
                        data-aos-easing="ease-out">
                        Start Your Journey to <span class="italic font-semibold">Peak Health</span> Today
                    </h2>
                    <p class="text-white mt-2 text-[15px] style-inter"
                       data-aos="fade-up"
                       data-aos-duration="1500"
                       data-aos-delay="100"
                       data-aos-easing="ease-out">
                        Unlock your potential with our peptides and wellness solutions.
                    </p>
                    <a href="{{ url('#') }}" class="secondary-button mt-6 inline-block style-inter"
                       data-aos="fade-up"
                       data-aos-duration="1500"
                       data-aos-delay="200"
                       data-aos-easing="ease-out">
                        Get started today
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
