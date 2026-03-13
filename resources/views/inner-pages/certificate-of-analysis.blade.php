@extends('layouts.web.master')

@section('content')
<main class="overflow-hidden">
    {{-- Inner page hero --}}
    <section class="inner-page-hero"
             style="background-image: linear-gradient(to right, rgba(12, 79, 159, 0.88), rgba(28, 84, 136, 0.78)), url('https://images.unsplash.com/photo-1582719471384-894fbb16e074?w=1200');">
        <h1 class="inner-page-hero-title"
            data-aos="fade-up"
            data-aos-duration="1500"
            data-aos-easing="ease-out">
            Certificate of <span class="italic">Analysis</span>
        </h1>
    </section>

    {{-- Intro --}}
    <section class="w-full py-14 md:py-20 lg:py-24 px-4 sm:px-6 md:px-8">
        <div class="mx-auto container text-center">
            <p class="section-label"
               data-aos="fade-down"
               data-aos-duration="1500"
               data-aos-easing="ease-out">
                Transparency & trust
            </p>
            <p class="section-text"
               data-aos="fade-up"
               data-aos-duration="1500"
               data-aos-delay="150"
               data-aos-easing="ease-out">
                At Peak Peptides, every product comes with a Certificate of Analysis (COA).
                <span class="text-[#C5C5C5]">We believe you deserve to know exactly what you're putting into your body—purity, potency, and quality, verified by independent labs.</span>
            </p>
        </div>
    </section>

    {{-- What is a COA: image + content --}}
    <section class="w-full py-10 md:py-20 px-4 sm:px-6 md:px-8">
        <div class="mx-auto container">
            <div class="flex flex-col lg:flex-row lg:items-stretch gap-8 lg:gap-10 xl:gap-12">
                <div class="w-full lg:w-[45%] xl:w-[48%] flex-shrink-0 rounded-[22px] overflow-hidden"
                     data-aos="fade-right"
                     data-aos-duration="1500"
                     data-aos-easing="ease-out">
                    <img src="https://images.unsplash.com/photo-1532187863486-abf9dbad1b69?w=800"
                         alt="Lab testing and quality assurance"
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
                            What is a <span class="section-heading-accent">COA?</span>
                        </h2>
                        <p class="choose-icon-description style-inter mb-4"
                           data-aos="fade-up"
                           data-aos-duration="1500"
                           data-aos-delay="100"
                           data-aos-easing="ease-out">
                            A Certificate of Analysis is a document from an independent laboratory that confirms the identity, purity, and strength of a product. It shows test results for key compounds, contaminants, and heavy metals—so you can trust what's on the label.
                        </p>
                        <p class="choose-icon-description style-inter"
                           data-aos="fade-up"
                           data-aos-duration="1500"
                           data-aos-delay="200"
                           data-aos-easing="ease-out">
                            We work with accredited labs and provide COAs for all our peptide products. When you buy from Peak Peptides, you're not just getting a supplement—you're getting verified quality and full transparency.
                        </p>
                        <a href="{{ url('/peptides') }}" class="primary-button mt-8 md:mt-10 inline-block style-inter"
                           data-aos="fade-up"
                           data-aos-duration="1500"
                           data-aos-delay="300"
                           data-aos-easing="ease-out">
                            View our peptides
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Why COA matters --}}
    <section class="w-full py-10 md:py-20 px-4 sm:px-6 md:px-8 bg-[#F5F3F1] rounded-[22px] mx-4 md:mx-6">
        <div class="mx-auto container">
            <h2 class="explore-title style-poppines mb-12 md:mb-16"
                data-aos="fade-down"
                data-aos-duration="1500"
                data-aos-easing="ease-out">
                Why <span class="text-[var(--primary-color)] italic">COA</span> matters
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-10">
                <div class="flex gap-4 items-start"
                     data-aos="fade-up"
                     data-aos-duration="1500"
                     data-aos-delay="100"
                     data-aos-easing="ease-out">
                    <div class="w-14 h-14 flex-shrink-0 rounded-xl overflow-hidden bg-white shadow-sm">
                        <img src="https://images.unsplash.com/photo-1582719471384-894fbb16e074?w=150&h=150&fit=crop" alt="Purity" class="w-full h-full object-cover" loading="lazy">
                    </div>
                    <div>
                        <h3 class="choose-icon-title style-poppines">Verified purity</h3>
                        <p class="choose-icon-description style-inter">Know exactly what's in your product—no hidden ingredients or fillers.</p>
                    </div>
                </div>
                <div class="flex gap-4 items-start"
                     data-aos="fade-up"
                     data-aos-duration="1500"
                     data-aos-delay="200"
                     data-aos-easing="ease-out">
                    <div class="w-14 h-14 flex-shrink-0 rounded-xl overflow-hidden bg-white shadow-sm">
                        <img src="https://www.chicagobusiness.com/resizer/v2/2UZ2AYTQ4VNFFWFRSSDOZZ4ZOU.jpg?auth=d1e7c06bc2f37ece6d53593cada4122af7f030ef47d6f2049bb853579710d69a&width=300" alt="Potency" class="w-full h-full object-cover" loading="lazy">
                    </div>
                    <div>
                        <h3 class="choose-icon-title style-poppines">Confirmed potency</h3>
                        <p class="choose-icon-description style-inter">Lab results confirm the strength and dosage you expect.</p>
                    </div>
                </div>
                <div class="flex gap-4 items-start"
                     data-aos="fade-up"
                     data-aos-duration="1500"
                     data-aos-delay="300"
                     data-aos-easing="ease-out">
                    <div class="w-14 h-14 flex-shrink-0 rounded-xl overflow-hidden bg-white shadow-sm">
                        <img src="https://images.unsplash.com/photo-1559757148-5c350d0d3c56?w=150&h=150&fit=crop" alt="Trust" class="w-full h-full object-cover" loading="lazy">
                    </div>
                    <div>
                        <h3 class="choose-icon-title style-poppines">Peace of mind</h3>
                        <p class="choose-icon-description style-inter">Independent testing means unbiased, reliable information you can trust.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Request COA CTA --}}
    <section class="w-full py-14 md:py-20 px-4 sm:px-6 md:px-8">
        <div class="mx-auto container text-center max-w-2xl">
            <h2 class="section-heading"
                data-aos="fade-down"
                data-aos-duration="1500"
                data-aos-easing="ease-out">
                Need a <span class="section-heading-accent">COA</span> for your product?
            </h2>
            <p class="choose-icon-description style-inter mb-6"
               data-aos="fade-up"
               data-aos-duration="1500"
               data-aos-delay="100"
               data-aos-easing="ease-out">
                COAs are available for all Peak Peptides products. Contact us with your order or product details and we'll provide the corresponding Certificate of Analysis.
            </p>
            <a href="{{ url('/contact') }}" class="primary-button style-inter inline-block"
               data-aos="fade-up"
               data-aos-duration="1500"
               data-aos-delay="200"
               data-aos-easing="ease-out">
                Contact us
            </a>
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
                        Shop with <span class="italic font-semibold">confidence</span>
                    </h2>
                    <p class="text-white mt-2 text-[15px] style-inter"
                       data-aos="fade-up"
                       data-aos-duration="1500"
                       data-aos-delay="100"
                       data-aos-easing="ease-out">
                        Every product backed by a Certificate of Analysis.
                    </p>
                    <a href="{{ url('/peptides') }}" class="secondary-button mt-6 inline-block style-inter"
                       data-aos="fade-up"
                       data-aos-duration="1500"
                       data-aos-delay="200"
                       data-aos-easing="ease-out">
                        View peptides
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
