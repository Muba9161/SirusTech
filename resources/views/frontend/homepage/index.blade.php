@extends('frontend.layout.main')

@section('website-main-section')
    <section
        class="hero position-relative d-flex flex-column justify-content-center align-items-center overflow-hidden min-vh-100 py-8">

        <img class="hero-blur-image w-100 position-absolute top-0" src="images/hero blur img.png" alt="Hero Blur Background">
        <img class="hero-icons-image parallax position-absolute w-100" data-speed="4" src="images/hero icons img2.png"
            alt="Hero Icons">

        <div class="hero-rings-image">
            <img src="images/hero rings icon.png" alt="Hero Rings">
        </div>

        <div class="text-center mt-5 px-3 position-relative z-1">
            <h1 class="display-4 text-white">Code. Learn. Evolve.</h1>
            <h3 class="text-white mt-3">Where tech meets talent,<br>learning levels you up.</h3>
            <button class="btn btn-light mt-4 custom-clip-button">Get Started</button>
        </div>

        <div class="hero-image-box mt-5 d-flex justify-content-center align-items-center mx-auto position-relative z-1">
            <div class="robot-box w-100 h-100 position-relative overflow-hidden rounded-4">
                <img src="images/robot3.png" class="img-fluid w-100 h-100 object-fit-cover" alt="Robot">
            </div>
        </div>

        <h4 class="text-white text-center mt-5 px-3 position-relative z-1">Your journey to tech excellence starts here!</h4>

        <!-- Wrapper -->
        <div class="slider-wrapper overflow-hidden py-4">
            <div class="slider d-flex align-items-center">
                <!-- Repeat the icons twice for smooth loop -->
                <div class="slide-track d-flex align-items-center">
                    <div class="slide"><img src="images/html.png" alt="HTML" /></div>
                    <div class="slide"><img src="images/css.png" alt="CSS" /></div>
                    <div class="slide"><img src="images/js.png" alt="JS" /></div>
                    <div class="slide"><img src="images/python.png" alt="Python" /></div>
                    <div class="slide"><img src="images/java.png" alt="Java" /></div>

                    <!-- Duplicate icons for seamless loop -->
                    <div class="slide"><img src="images/html.png" alt="HTML" /></div>
                    <div class="slide"><img src="images/css.png" alt="CSS" /></div>
                    <div class="slide"><img src="images/js.png" alt="JS" /></div>
                    <div class="slide"><img src="images/python.png" alt="Python" /></div>
                    <div class="slide"><img src="images/java.png" alt="Java" /></div>

                    <div class="slide"><img src="images/html.png" alt="HTML" /></div>
                    <div class="slide"><img src="images/css.png" alt="CSS" /></div>
                    <div class="slide"><img src="images/js.png" alt="JS" /></div>
                    <div class="slide"><img src="images/python.png" alt="Python" /></div>
                    <div class="slide"><img src="images/java.png" alt="Java" /></div>
                </div>
            </div>
        </div>


    </section>


    <section class="generative-section py-5" id="about">
        <div class="container text-center">
            <h1 class="display-4 text-white mb-3">About SirusTech</h1>
            <p class="lead text-secondary mb-5">
                We deliver smart digital solutions that drive business growth while equipping individuals with in-demand
                tech skills.
            </p>

            <div class="row g-4">

                <!-- Card 1: Full Width -->
                <!-- Card 1 -->
                <div class="col-12">
                    <div
                        class="card tall-card bg-dark position-relative overflow-hidden rounded-4 text-white d-flex flex-column flex-md-row align-items-center">
                        <div class="w-100 w-md-0 position-relative h-100">
                            <img src="images/service-21.png" alt=""
                                class="img-fluid h-100 w-100 object-fit-cover rounded-4">
                        </div>
                        <div class="w-100 w-md-50 text-center d-flex flex-column justify-content-center h-100 p-4">
                            <h2 class="h3 fw-bold">Code Together. Grow Together.</h2>
                            <p class="d-flex align-items-center justify-content-start fs-5 my-8">
                                <img src="images/Check circle.png" alt="" class="me-2" height="24">Direct
                                Mentorship. Focused Growth
                            </p>
                            <p class="d-flex align-items-center justify-content-start fs-5 my-8">
                                <img src="images/Check circle.png" alt="" class="me-2" height="24">Build Skills
                                by Working on Real-Time Projects
                            </p>
                            <p class="d-flex align-items-center justify-content-start fs-5 my-8">
                                <img src="images/Check circle.png" alt="" class="me-2" height="24">Turn
                                Curiosity into Creation with Our Robotics Kit
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Left (50%) -->
                <div class="col-12 col-md-6">
                    <div class="card border-0 bg-dark position-relative overflow-hidden h-100 rounded-4 p-4 text-white">
                        <img src="images/service-2.png" alt=""
                            class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover opacity-25">
                        <div class="position-relative z-1">
                            <h2 class="h4">Websites that Tell Your Story</h2>
                            <p class="text-white mt-3 fs-5">
                                SirusTech is a visionary tech company bridging the gap between powerful software development
                                and future-ready education.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 3: Right (50%) -->
                <div class="col-12 col-md-6">
                    <div class="card bg-dark border-0 position-relative h-100 rounded-4 p-4 text-white">
                        <div class="position-relative z-1">
                            <h2 class="h4">Learn Anywhere. Grow Everywhere</h2>
                            <p class="text-secondary">Flexible learning, powerful results. Join online, learn for life.</p>
                            <div class="d-flex flex-wrap gap-3 mt-4">
                                <div class="icon-box bg-gradient text-white p-3 rounded-3 fs-4"><i class="fas fa-video"></i>
                                </div>
                                <div class="icon-box bg-gradient text-white p-3 rounded-3 fs-4"><i
                                        class="fas fa-chart-line"></i>
                                </div>
                                <div class="icon-box bg-gradient text-white p-3 rounded-3 fs-4"><i
                                        class="fas fa-medal"></i>
                                </div>
                            </div>
                        </div>
                        <img src="images/service-3.png" alt="" class="img-fluid mt-auto pt-4">
                    </div>
                </div>

                <!-- Card 4: Full Width -->
                <div class="col-12">
                    <div
                        class="card tall-card bg-dark position-relative overflow-hidden rounded-4 text-white d-flex flex-column flex-md-row align-items-center">
                        <div class="w-100 w-md-50 position-relative h-100">
                            <img src="images/service-4.png" alt=""
                                class="img-fluid h-100 w-100 object-fit-cover rounded-4">
                        </div>
                        <div class="w-100 w-md-50 text-left d-flex flex-column justify-content-center h-100 p-4">
                            <h2 class="h3 fw-bold">Speak Smart. Think Sharp. Lead Strong</h2>
                            <p class="d-flex align-items-center justify-content-start fs-5 my-8">
                                <img src="images/Check circle.png" alt="" class="me-2" height="24">Speak
                                Smart: Speak with style, sway with substance
                            </p>
                            <p class="d-flex align-items-center justify-content-start fs-5 my-8">
                                <img src="images/Check circle.png" alt="" class="me-2" height="24">Think
                                Sharp: Quick mind, confident vibe
                            </p>
                            <p class="d-flex align-items-center justify-content-start fs-5 my-8">
                                <img src="images/Check circle.png" alt="" class="me-2" height="24">Lead
                                Strong: Stand tall. Lead loud. Shine bright
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="features-section py-5" id="service">
        <div class="container text-center">
            <h1 class="text-white mb-4 fw-bold">Services Provided by Sirus Tech</h1>

            <!-- Feature Cards Grid -->
            <div class="row g-4 justify-content-center">

                <!-- Card 1 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="features-card autoDisplay">
                        <h2>Web <br> Designing</h2>
                        <p>We craft clean, responsive website designs that enhance user experience and reflect your brand.
                        </p>

                        <div class="explore-more">
                            <img src="images/feature1.png" alt="">
                            <a href="#">Explore More <i class="fas fa-link"></i></a>
                        </div>
                        <img class="features-back-img" src="images/features back img.gif" alt="">
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="features-card autoDisplay">
                        <h2>Graphic <br> Designing</h2>
                        <p>Eye-catching visuals for digital and print, including logos, banners, and branding assets.</p>
                        <div class="explore-more">
                            <img src="images/feature1.png" alt="">
                            <a href="#">Explore More <i class="fas fa-link"></i></a>
                        </div>
                        <img class="features-back-img" src="images/features back img.gif" alt="">
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="features-card autoDisplay">
                        <h2>Blockchain <br> Development</h2>
                        <p>Secure and scalable blockchain solutions, including smart contracts and dApp development.</p>
                        <div class="explore-more">
                            <img src="images/feature2.png" alt="">
                            <a href="#">Explore More <i class="fas fa-link"></i></a>
                        </div>
                        <img class="features-back-img" src="images/features back img.gif" alt="">
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="features-card autoDisplay">
                        <h2>UI/UX <br> Design</h2>
                        <p>User-focused designs that make digital products intuitive, engaging, and easy to navigate.</p>
                        <div class="explore-more">
                            <img src="images/feature3.png" alt="">
                            <a href="#">Explore More <i class="fas fa-link"></i></a>
                        </div>
                        <img class="features-back-img" src="images/features back img.gif" alt="">
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="features-card autoDisplay">
                        <h2>E-commerce <br> Development</h2>
                        <p>Custom online stores built for performance, sales, and seamless customer experience.</p>
                        <div class="explore-more">
                            <img src="images/feature4.png" alt="">
                            <a href="#">Explore More <i class="fas fa-link"></i></a>
                        </div>
                        <img class="features-back-img" src="images/features back img.gif" alt="">
                    </div>
                </div>

                <!-- Card 6 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="features-card autoDisplay">
                        <h2>Mobile App <br> Development</h2>
                        <p>High-quality mobile apps for iOS and Android with smooth performance and great design.</p>
                        <div class="explore-more">
                            <img src="images/feature1.png" alt="">
                            <a href="#">Explore More <i class="fas fa-link"></i></a>
                        </div>
                        <img class="features-back-img" src="images/features back img.gif" alt="">
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="roadmap-section py-5" id="training">
        <div class="container">
            <h1 class="text-center text-white mb-5">Trainings</h1>

            <div class="row g-4 justify-content-center">
                <!-- Training Card -->
                <div class="col-12 col-md-6 col-lg-5">
                    <div class="roadmap-card autoBlur">
                        <img src="images/Widblock.jpg" alt="">
                        <h2>Wid blocks</h2>
                        <p>Hands-on robotics training using WitBlox kits. Includes pictures, project demos, and interactive
                            content.</p>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-5">
                    <div class="roadmap-card autoBlur">
                        <img src="images/IOT image.png" alt="">
                        <h2>IOT</h2>
                        <p>Learn IoT fundamentals through curated YouTube tutorials, real-world examples, and project ideas.
                        </p>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-5">
                    <div class="roadmap-card autoBlur">
                        <img src="images/AI image.png" alt="">
                        <h2>AI</h2>
                        <p>Intro to AI concepts with visual explanations and examples. Includes images and beginner-friendly
                            content.</p>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-5">
                    <div class="roadmap-card autoBlur">
                        <img src="images/arduino.png" alt="">
                        <h2>Arduino</h2>
                        <p>Basics of Arduino with YouTube-guided tutorials, example projects, and illustrated components.
                        </p>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-5">
                    <div class="roadmap-card autoBlur">
                        <img src="images/cyber security image.png" alt="">
                        <h2>Cyber Security</h2>
                        <p>Introduction to cyber threats, data protection, and safe practices online for all age groups.</p>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-5">
                    <div class="roadmap-card autoBlur">
                        <img src="images/raspberry.png" alt="">
                        <h2>Raspberry Pi</h2>
                        <p>Get started with Raspberry Pi using step-by-step YouTube resources and beginner projects.</p>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-5">
                    <div class="roadmap-card autoBlur">
                        <img src="images/ad.png" alt="">
                        <h2>App Development</h2>
                        <p>Hands-on training to help you learn mobile app development from scratch, covering Android and iOS
                            platforms.</p>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-5">
                    <div class="roadmap-card autoBlur">
                        <img src="images/pd.png" alt="">
                        <h2>Personality Development</h2>
                        <p>Soft skills training covering communication, confidence building, and personal growth.</p>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-center mt-5">
                <div class="button-box2">
                    <button>Call Now</button>
                </div>
            </div>

            <div class="roadmap-gradient"></div>
        </div>
    </section>


    <section class="chatApp-section container-fluid py-5" id="choose"
        style="background-color: #0c0a12; color: white;">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6 order-1 order-lg-2 text-center mb-4 mb-lg-0 fadeInRight">
                    <h2 class="mb-4 text-center"
                        style="font-size: 1.5rem; color: rgb(127, 109, 135); max-width: 500px; margin: 0 auto;">
                        We blend skills with confidence and learning with real-life impact. <br>
                        Our trainers don’t lecture, they ignite transformation. <br>
                        Because you deserve more than just a course — you deserve a breakthrough.
                    </h2>
                    <img src="images/tools group.png" alt="Tools Group" class="img-fluid mt-3 rotating-image"
                        style="max-width: 100%;">
                </div>

                <div class="col-lg-6 order-2 order-lg-1">
                    <h1 class="mb-4 text-center text-lg-start fadeInLeft" style="font-size: 3rem;">Why Choose Us?</h1>

                    <ul class="list-unstyled fs-5">
                        <li class="d-flex align-items-center mb-3 fadeInLeft"><img src="images/Check circle.png"
                                alt="" style="height: 30px; margin-right: 15px;">Easy Learning</li>
                        <li class="d-flex align-items-center mb-3 fadeInLeft"><img src="images/Check circle.png"
                                alt="" style="height: 30px; margin-right: 15px;">Stunning Projects</li>
                        <li class="d-flex align-items-center mb-3 fadeInLeft"><img src="images/Check circle.png"
                                alt="" style="height: 30px; margin-right: 15px;">Expert-Led Training</li>
                        <li class="d-flex align-items-center mb-3 fadeInLeft"><img src="images/Check circle.png"
                                alt="" style="height: 30px; margin-right: 15px;">Practical, Real-World Learning
                        </li>
                        <li class="d-flex align-items-center mb-3 fadeInLeft"><img src="images/Check circle.png"
                                alt="" style="height: 30px; margin-right: 15px;">Personalized Growth Journey</li>
                    </ul>

                    <div class="text-center text-lg-start mt-4 fadeInLeft">
                        <a href="tel:+919214274929" class="btn btn-outline-light px-4 py-2 fw-bold"
                            style="clip-path: polygon(0 0, 80% 0%, 100% 20%, 100% 80%, 100% 99%, 0 100%, 0% 80%, 0% 20%); background-color: rgb(14, 12, 21); border-radius: 10px;">Call
                            Now</a>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section id="testimonials-section" class="container py-5">
        <h2 class="text-center mb-5">Our Valued Client Testimonials</h2>
        <div class="testimonial-carousel">
            <div class="testimonial-wrapper d-flex">
                @forelse ($feedbacks as $feedback)
                    <div class="testimonial-card mx-2 {{ $loop->first ? 'active' : '' }}">
                        <p>"{{ $feedback->message }}"</p>
                        <div class="testimonial-author">- {{ $feedback->name }}</div>
                    </div>
                @empty
                    <div class="testimonial-card mx-2">
                        <p>No feedback available at the moment.</p>
                    </div>
                @endforelse
            </div>
        </div>
        <div class="testimonial-controls text-center mt-4">
            <button id="prevTestimonial" class="btn">Previous</button>
            <button id="nextTestimonial" class="btn">Next</button>
        </div>
    </section>


    {{-- <div class="testimonial-carousel">
        <div class="testimonial-wrapper">
            @foreach ($testimonials as $index => $testimonial)
            <div class="testimonial-card {{ $index === 0 ? 'active' : '' }}">
                <p>"{{ $testimonial->message }}"</p>
                <div class="testimonial-author">- {{ $testimonial->author }}</div>
            </div>
            @endforeach
        </div>
    </div> --}}





    <section class="pricing-section container-fluid py-5 d-flex flex-column justify-content-center align-items-center">
        <div class="pricing-img-box position-relative d-flex justify-content-center align-items-center w-100">
            <img src="images/pricing-parallax.png" alt="Pricing Background"
                class="img-fluid position-absolute top-0 start-0 w-100 h-100 object-fit-contain">
            <img src="images/magical-glob2.png" class="img-fluid" alt="Magical Glob"
                style="max-height: 400px; margin-top: 5%;">
        </div>
    </section>



    <section class="contact-section" id="contact">
        <h1 class="contact-title">Contact SirusTech</h1>
        <p class="contact-subtitle">We're here to talk robots, AI, and innovation. Drop us a message.</p>

        @if (session('success'))
            <p class="contact-status" style="color: #00ffc3;">{{ session('success') }}</p>
        @endif


        <form class="contact-form" id="contactForm" action="{{ route('contact.store') }}" method="POST">

            @csrf
            <div class="form-group">
                <input type="text" class="contact-input" id="name" name="name" required placeholder=" " />
                <label for="name" class="contact-label">Your Name</label>
                @error('name')
                    <small style="color: red;">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <input type="email" class="contact-input" id="email" name="email" required placeholder=" " />
                <label for="email" class="contact-label">Your Email</label>
                @error('email')
                    <small style="color: red;">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <textarea class="contact-textarea" id="message" name="message" rows="5" required placeholder=" "></textarea>
                <label for="message" class="contact-label">Your Message</label>
                @error('message')
                    <small style="color: red;">{{ $message }}</small>
                @enderror
            </div>
            <button type="submit" class="contact-button">Send Message</button>
        </form>
    </section>


    {{-- <section>
        <!-- Embedded Google Map -->
        <div class="map-container">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.0190812568366!2d-122.41941538468133!3d37.77492977975978!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80858064dfdb8d41%3A0x80b81c5c282c7d6a!2sSan+Francisco%2C+CA!5e0!3m2!1sen!2sus!4v1687555555555"
                width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy">
            </iframe>
        </div>
    </section> --}}
@endsection
