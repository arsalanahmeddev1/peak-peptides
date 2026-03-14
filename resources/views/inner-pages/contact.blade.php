@extends('layouts.web.master')

@section('content')
<main class="overflow-hidden">
    {{-- Inner page hero --}}
    <section class="inner-page-hero"
             style="background-image: linear-gradient(to right, rgba(12, 79, 159, 0.88), rgba(28, 84, 136, 0.78)), url('https://images.unsplash.com/photo-1423666639041-f56000c27a9a?w=1200');">
        <h1 class="inner-page-hero-title"
            data-aos="fade-up"
            data-aos-duration="1500"
            data-aos-easing="ease-out">
            Get in <span class="italic">touch</span>
        </h1>
    </section>

    {{-- Intro --}}
    <section class="w-full py-10 md:py-16 px-4 sm:px-6 md:px-8">
        <div class="mx-auto container text-center">
            <p class="section-label"
               data-aos="fade-down"
               data-aos-duration="1500"
               data-aos-easing="ease-out">
                Contact us
            </p>
            <p class="section-text"
               data-aos="fade-up"
               data-aos-duration="1500"
               data-aos-delay="150"
               data-aos-easing="ease-out">
                Have a question about our peptides, need a COA, or want to place an order?
                <span class="text-[#C5C5C5]">We're here to help. Send us a message and we'll get back to you as soon as we can.</span>
            </p>
        </div>
    </section>

    {{-- Contact form + info --}}
    <section class="w-full py-6 md:py-14 px-4 sm:px-6 md:px-8">
        <div class="mx-auto container max-w-6xl">
            <div class="grid grid-cols-1 lg:grid-cols-5 gap-8 lg:gap-12">
                {{-- Form --}}
                <div class="lg:col-span-3">
                    <div class="bg-white rounded-[22px] shadow-lg border border-gray-100 p-6 sm:p-8"
                         data-aos="fade-right"
                         data-aos-duration="1500"
                         data-aos-easing="ease-out">
                        <h2 class="section-heading mb-6"
                            data-aos="fade-down"
                            data-aos-duration="1500"
                            data-aos-easing="ease-out">
                            Send a <span class="section-heading-accent">message</span>
                        </h2>
                        <form action="#" method="POST" class="space-y-4">
                            @csrf
                            <div>
                                <label for="name" class="form-label">Name</label>
                                <input type="text" id="name" name="name" class="form-input" placeholder="Your name" required>
                            </div>
                            <div>
                                <label for="email" class="form-label">Email</label>
                                <input type="email" id="email" name="email" class="form-input" placeholder="your@email.com" required>
                            </div>
                            <div>
                                <label for="subject" class="form-label">Subject</label>
                                <input type="text" id="subject" name="subject" class="form-input" placeholder="How can we help?">
                            </div>
                            <div>
                                <label for="message" class="form-label">Message</label>
                                <textarea id="message" name="message" rows="5" class="form-input resize-y min-h-[120px]" placeholder="Your message..." required></textarea>
                            </div>
                            <button type="submit" class="primary-button style-inter w-full sm:w-auto">
                                Send message
                            </button>
                        </form>
                    </div>
                </div>

                {{-- Contact info + image --}}
                <div class="lg:col-span-2 space-y-6">
                    <div class="rounded-[22px] overflow-hidden h-[220px] sm:h-[280px] lg:h-[320px]"
                         data-aos="fade-left"
                         data-aos-duration="1500"
                         data-aos-easing="ease-out">
                        <img src="https://images.unsplash.com/photo-1557804506-669a67965ba0?w=600&h=400&fit=crop"
                             alt="Contact Peak Peptides"
                             class="w-full h-full object-cover"
                             loading="lazy"
                        />
                    </div>
                    <div class="bg-[#F5F3F1] rounded-[22px] p-6"
                         data-aos="fade-left"
                         data-aos-duration="1500"
                         data-aos-delay="150"
                         data-aos-easing="ease-out">
                        <h3 class="choose-icon-title style-poppines mb-4">Contact info</h3>
                        <ul class="space-y-3 choose-icon-description style-inter">
                            <li class="flex items-start gap-3">
                                <span class="text-[var(--primary-color)] font-semibold min-w-[80px]">Email</span>
                                <a href="mailto:info@peakpeptides.com" class="form-link">info@peakpeptides.com</a>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-[var(--primary-color)] font-semibold min-w-[80px]">Support</span>
                                <span class="text-[var(--text-color)]">For orders & COA requests</span>
                            </li>
                        </ul>
                        <p class="choose-icon-description style-inter mt-4 text-[#777777]">
                            We typically respond within 24–48 hours. For urgent inquiries, please include your order number if applicable.
                        </p>
                    </div>
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
                        Explore our <span class="italic font-semibold">peptides</span>
                    </h2>
                    <p class="text-white mt-2 text-[15px] style-inter"
                       data-aos="fade-up"
                       data-aos-duration="1500"
                       data-aos-delay="100"
                       data-aos-easing="ease-out">
                        Premium quality, COA-backed, for your peak performance.
                    </p>
                    <a href="{{ url('/peptides') }}" class="secondary-button mt-6 inline-block style-inter"
                       data-aos="fade-up"
                       data-aos-duration="1500"
                       data-aos-delay="200"
                       data-aos-easing="ease-out">
                        View products
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
