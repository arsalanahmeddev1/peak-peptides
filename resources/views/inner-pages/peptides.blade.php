@extends('layouts.web.master')

@section('content')
<main class="overflow-hidden">
    {{-- Inner page hero --}}
    <section class="inner-page-hero"
             style="background-image: linear-gradient(to right, rgba(12, 79, 159, 0.88), rgba(28, 84, 136, 0.78)), url('https://images.unsplash.com/photo-1532187863486-abf9dbad1b69?w=1200');">
        <h1 class="inner-page-hero-title"
            data-aos="fade-up"
            data-aos-duration="1500"
            data-aos-easing="ease-out">
            Our <span class="italic">Peptide Solutions</span>
        </h1>
    </section>

    {{-- Intro --}}
    <section class="w-full py-14 md:py-20 lg:py-24 px-4 sm:px-6 md:px-8">
        <div class="mx-auto container text-center">
            <p class="section-label"
               data-aos="fade-down"
               data-aos-duration="1500"
               data-aos-easing="ease-out">
                Peptides
            </p>
            <p class="section-text"
               data-aos="fade-up"
               data-aos-duration="1500"
               data-aos-delay="150"
               data-aos-easing="ease-out">
                Science-backed formulations designed to support energy, recovery, and overall well-being.
                <span class="text-[#C5C5C5]">Each product is developed with premium ingredients and tested for purity—so you can focus on reaching your peak.</span>
            </p>
        </div>
    </section>

    {{-- Peptide products grid --}}
    <div class="px-4 py-6">
        <section class="bg-[#F5F3F1] w-full py-10 md:py-20 px-4 sm:px-6 rounded-[22px]">
            <div class="mx-auto container">
                <h2 class="explore-title style-poppines"
                    data-aos="fade-down"
                    data-aos-duration="1500"
                    data-aos-easing="ease-out">
                    Explore our premium <br><span class="text-[var(--primary-color)] italic">peptide solutions</span>
                </h2>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8">
                    {{-- NAD+ --}}
                    <div class="explore-card-item bg-white rounded-[22px] p-4 sm:p-5 shadow-sm hover:shadow-md transition-shadow"
                         data-aos="fade-up"
                         data-aos-duration="1500"
                         data-aos-delay="100"
                         data-aos-easing="ease-out">
                        <div class="flex justify-center items-end mb-4 h-[180px] sm:h-[200px] overflow-hidden rounded-xl">
                            <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?w=400&h=300&fit=crop"
                                 alt="NAD+ Peak Peptides"
                                 class="w-full h-full object-cover"
                                 loading="lazy"
                            />
                        </div>
                        <h3 class="label-title style-poppines">NAD+</h3>
                        <p class="label-description style-inter">Supports energy & metabolism</p>
                        <p class="label-price style-inter mt-1">From $45</p>
                        <a href="#" class="primary-button mt-4 inline-block style-inter text-center text-sm py-2.5 px-5">View</a>
                    </div>

                    {{-- MIC+B12 --}}
                    <div class="explore-card-item bg-white rounded-[22px] p-4 sm:p-5 shadow-sm hover:shadow-md transition-shadow"
                         data-aos="fade-up"
                         data-aos-duration="1500"
                         data-aos-delay="200"
                         data-aos-easing="ease-out">
                        <div class="flex justify-center items-end mb-4 h-[180px] sm:h-[200px] overflow-hidden rounded-xl">
                            <img src="https://images.unsplash.com/photo-1559757148-5c350d0d3c56?w=400&h=300&fit=crop"
                                 alt="MIC+B12 Peak Peptides"
                                 class="w-full h-full object-cover"
                                 loading="lazy"
                            />
                        </div>
                        <h3 class="label-title style-poppines">MIC+B12</h3>
                        <p class="label-description style-inter">Support for fatigue, brain fog & metabolism</p>
                        <p class="label-price style-inter mt-1">From $65</p>
                        <a href="#" class="primary-button mt-4 inline-block style-inter text-center text-sm py-2.5 px-5">View</a>
                    </div>

                    {{-- Glutathione --}}
                    <div class="explore-card-item bg-white rounded-[22px] p-4 sm:p-5 shadow-sm hover:shadow-md transition-shadow"
                         data-aos="fade-up"
                         data-aos-duration="1500"
                         data-aos-delay="300"
                         data-aos-easing="ease-out">
                        <div class="flex justify-center items-end mb-4 h-[180px] sm:h-[200px] overflow-hidden rounded-xl">
                            <img src="https://images.unsplash.com/photo-1582719471384-894fbb16e074?w=400&h=300&fit=crop"
                                 alt="Glutathione Peak Peptides"
                                 class="w-full h-full object-cover"
                                 loading="lazy"
                            />
                        </div>
                        <h3 class="label-title style-poppines">Glutathione</h3>
                        <p class="label-description style-inter">Natural anti-oxidant support</p>
                        <p class="label-price style-inter mt-1">From $49</p>
                        <a href="#" class="primary-button mt-4 inline-block style-inter text-center text-sm py-2.5 px-5">View</a>
                    </div>

                    {{-- Sermorelin --}}
                    <div class="explore-card-item bg-white rounded-[22px] p-4 sm:p-5 shadow-sm hover:shadow-md transition-shadow"
                         data-aos="fade-up"
                         data-aos-duration="1500"
                         data-aos-delay="400"
                         data-aos-easing="ease-out">
                        <div class="flex justify-center items-end mb-4 h-[180px] sm:h-[200px] overflow-hidden rounded-xl">
                            <img src="https://activated.health/wp-content/uploads/Nourish-Blog-Images-5.png"
                                 alt="Sermorelin Peak Peptides"
                                 class="w-full h-full object-cover"
                                 loading="lazy"
                            />
                        </div>
                        <h3 class="label-title style-poppines">Sermorelin</h3>
                        <p class="label-description style-inter">Supports growth hormone activation</p>
                        <p class="label-price style-inter mt-1">From $35</p>
                        <a href="#" class="primary-button mt-4 inline-block style-inter text-center text-sm py-2.5 px-5">View</a>
                    </div>
                </div>

                <div class="text-center mt-10 md:mt-14"
                     data-aos="fade-up"
                     data-aos-duration="1500"
                     data-aos-delay="300"
                     data-aos-easing="ease-out">
                    <a href="{{ url('#') }}" class="primary-button style-inter">
                        View all
                    </a>
                </div>
            </div>
        </section>
    </div>

    {{-- Why peptides / benefits --}}
    <section class="w-full py-10 md:py-20 px-4 sm:px-6 md:px-8">
        <div class="mx-auto container">
            <h2 class="explore-title style-poppines mb-12 md:mb-16"
                data-aos="fade-down"
                data-aos-duration="1500"
                data-aos-easing="ease-out">
                Why <span class="text-[var(--primary-color)] italic">Peptides?</span>
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-10">
                <div class="text-center"
                     data-aos="fade-up"
                     data-aos-duration="1500"
                     data-aos-delay="100"
                     data-aos-easing="ease-out">
                    <div class="w-20 h-20 mx-auto mb-4 rounded-2xl overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1571019614242-c5c5dee9f50b?w=200&h=200&fit=crop" alt="Research" class="w-full h-full object-cover" loading="lazy">
                    </div>
                    <h3 class="choose-icon-title style-poppines">Research-Backed</h3>
                    <p class="choose-icon-description style-inter">Formulations supported by science for safety and effectiveness.</p>
                </div>
                <div class="text-center"
                     data-aos="fade-up"
                     data-aos-duration="1500"
                     data-aos-delay="200"
                     data-aos-easing="ease-out">
                    <div class="w-20 h-20 mx-auto mb-4 rounded-2xl overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1582719471384-894fbb16e074?w=200&h=200&fit=crop" alt="Quality" class="w-full h-full object-cover" loading="lazy">
                    </div>
                    <h3 class="choose-icon-title style-poppines">Premium Quality</h3>
                    <p class="choose-icon-description style-inter">Rigorous testing and COA for every product you trust.</p>
                </div>
                <div class="text-center"
                     data-aos="fade-up"
                     data-aos-duration="1500"
                     data-aos-delay="300"
                     data-aos-easing="ease-out">
                    <div class="w-20 h-20 mx-auto mb-4 rounded-2xl overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1559757148-5c350d0d3c56?w=200&h=200&fit=crop" alt="Wellness" class="w-full h-full object-cover" loading="lazy">
                    </div>
                    <h3 class="choose-icon-title style-poppines">Your Goals</h3>
                    <p class="choose-icon-description style-inter">Energy, recovery, and vitality—tailored to your journey.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA strip --}}
    <section class="px-4 py-6">
        <div class="relative rounded-[22px] overflow-hidden">
            <img src="https://images.unsplash.com/photo-1559757148-5c350d0d3c56?w=1200"
                 alt="Peak Health"
                 class="w-full h-[260px] sm:h-[320px] md:h-[400px] object-cover"
                 loading="lazy"
            />
            <div class="absolute inset-0 flex items-center justify-center" style="background: linear-gradient(90deg, rgba(11, 79, 159, 0.9) 0%, rgba(14, 48, 88, 0.7) 100%);">
                <div class="text-center px-6 max-w-2xl mx-auto">
                    <h2 class="text-white font-bold leading-tight text-[20px] sm:text-[28px] md:text-[36px] style-poppines"
                        data-aos="fade-down"
                        data-aos-duration="1500"
                        data-aos-easing="ease-out">
                        Ready for <span class="italic font-semibold">Peak Health</span>?
                    </h2>
                    <p class="text-white mt-2 text-[15px] style-inter"
                       data-aos="fade-up"
                       data-aos-duration="1500"
                       data-aos-delay="100"
                       data-aos-easing="ease-out">
                        Explore our full range and find the right fit for you.
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
