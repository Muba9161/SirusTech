@extends('frontend.layout.main')

@section('website-main-section')
    <section class="hero position-relative d-flex flex-column justify-content-center align-items-center min-vh-50 py-8">


        {{-- <img class="hero-blur-image w-100 position-absolute top-0" src="{{ asset('../images/hero blur img.png') }}"
            alt="Hero Blur Background"> --}}
        <img class="hero-icons-image parallax position-absolute w-80" data-speed="4"
            src="{{ asset('../images/hero icons img2.png') }}" alt="Hero Icons">

        <div class="hero-rings-image">
            <img src="{{ asset('../images/hero rings icon.png') }}" alt="Hero Rings">
        </div>

        <div class="hero-heading text-center mt-5 py-4 px-2 position-relative z-1">
            <h1 class="display-4 text-white">World's Best Student Training in Robotics, Coding & AI</h1>
            <div class="testimonial-controls button-box2 my-8">
                <button class="btn btn-outline-light px-3 py-3 fw-bold text-white">Get Started</button>
            </div>
        </div>

        <div class="col-md-2 d-flex justify-content-center z-1 my-4">
            <img src="{{ asset('images/magical-glob2.png') }}" alt="Rocket" class="rocket-img">
        </div>

        <!-- Wrapper -->
        <div class="slider-wrapper overflow-hidden py-2 my-4 z-1">
            <div class="slide-track d-flex">
                <!-- Repeat icons enough times to ensure seamless loop -->
                <div class="slide"><img src="{{ asset('../images/html.png') }}" alt="HTML" /></div>
                <div class="slide"><img src="{{ asset('../images/css.png') }}" alt="CSS" /></div>
                <div class="slide"><img src="{{ asset('../images/js.png') }}" alt="JS" /></div>
                <div class="slide"><img src="{{ asset('../images/python.png') }}" alt="Python" /></div>
                <div class="slide"><img src="{{ asset('../images/java.png') }}" alt="Java" /></div>

                <!-- Duplicate icons for smooth looping -->
                <div class="slide"><img src="{{ asset('../images/html.png') }}" alt="HTML" /></div>
                <div class="slide"><img src="{{ asset('../images/css.png') }}" alt="CSS" /></div>
                <div class="slide"><img src="{{ asset('../images/js.png') }}" alt="JS" /></div>
                <div class="slide"><img src="{{ asset('../images/python.png') }}" alt="Python" /></div>
                <div class="slide"><img src="{{ asset('../images/java.png') }}" alt="Java" /></div>
                <div class="slide"><img src="{{ asset('../images/html.png') }}" alt="HTML" /></div>
                <div class="slide"><img src="{{ asset('../images/css.png') }}" alt="CSS" /></div>
                <div class="slide"><img src="{{ asset('../images/js.png') }}" alt="JS" /></div>
                <div class="slide"><img src="{{ asset('../images/python.png') }}" alt="Python" /></div>
                <div class="slide"><img src="{{ asset('../images/java.png') }}" alt="Java" /></div>
            </div>
        </div>

        <div class="hero-gradient"></div>


    </section>


    <section class="generative-section position-relative" id="about">
        <div class="container text-center position-relative z-2">
            <h1 class="display-5 text-white mb-3 fw-bold">Why Choose SirusTech?</h1>
            <p class="lead text-white mb-5">
                We provide a future-forward platform for:
            </p>

            <div class="row justify-content-center align-items-center">
                <!-- Left Column -->
                <div class="col-md-5 text-start d-flex flex-column gap-3">
                    <div class="info-box">Learn Future-Ready Tech Skills That Today’s World Demands</div>
                    <div class="info-box">Build Real Projects That Showcase Your Talent and Creativity</div>
                    <div class="info-box">Achieve Career Goals-Be it Jobs, Freelancing, or Startups</div>
                </div>

                <!-- Center Rocket -->
                <div class="col-md-2 d-flex justify-content-center my-4 my-md-0">
                    <img src="{{ asset('images/rocket.png') }}" alt="Rocket" class="rocket-img">
                </div>

                <!-- Right Column -->
                <div class="col-md-5 text-start d-flex flex-column gap-3">
                    <div class="info-box">Enjoy a Personalized Learning Experience Designed for Students</div>
                    <div class="info-box">Get Mentored by Industry Experts with Real Experience</div>
                    <div class="info-box">Grow in Confidence with Communication & Leadership Skills</div>
                </div>
            </div>
        </div>

        <!-- Gradient Background Circle -->
        <div class="bg-gradient-center"></div>
    </section>



    <section class="features-section py-4" id="service">

        <div class="container text-center">
            <h1 class="text-white my-8 fw-bold">Services Provided by Sirus Tech</h1>

            <!-- Feature Cards Grid -->
            <div class="row g-4 my-4 justify-content-center">

                <!-- Card 1 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="features-card autoBlur">
                        <h2>Web <br> Designing</h2>
                        <p>We craft clean, responsive website designs that enhance user experience and reflect your brand.
                        </p>

                        <div class="explore-more">
                            <img src="{{ asset('../images/feature1.png') }}" alt="">
                            <a href="#">Explore More <i class="fas fa-link"></i></a>
                        </div>
                        <img class="features-back-img" src="{{ asset('../images/features back img.gif') }}" alt="">
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="features-card autoBlur">
                        <h2>Graphic <br> Designing</h2>
                        <p>Eye-catching visuals for digital and print, including logos, banners, and branding assets.</p>
                        <div class="explore-more">
                            <img src="{{ asset('../images/feature2.png') }}" alt="">
                            <a href="#">Explore More <i class="fas fa-link"></i></a>
                        </div>
                        <img class="features-back-img" src="{{ asset('../images/features back img.gif') }}" alt="">
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="features-card autoBlur">
                        <h2>Blockchain <br> Development</h2>
                        <p>Secure and scalable blockchain solutions, including smart contracts and App development.</p>
                        <div class="explore-more">
                            <img src="{{ asset('../images/feature3.png') }}" alt="">
                            <a href="#">Explore More <i class="fas fa-link"></i></a>
                        </div>
                        <img class="features-back-img" src="{{ asset('../images/features back img.gif') }}"
                            alt="">
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="features-card autoBlur">
                        <h2>UI/UX <br> Design</h2>
                        <p>User-focused designs that make digital products intuitive, engaging, and easy to navigate.</p>
                        <div class="explore-more">
                            <img src="{{ asset('../images/feature4.png') }}" alt="">
                            <a href="#">Explore More <i class="fas fa-link"></i></a>
                        </div>
                        <img class="features-back-img" src="{{ asset('../images/features back img.gif') }}"
                            alt="">
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="features-card autoBlur">
                        <h2>E-commerce <br> Development</h2>
                        <p>Custom online stores built for performance, sales, and seamless customer experience.</p>
                        <div class="explore-more">
                            <img src="{{ asset('../images/feature5.png') }}" alt="">
                            <a href="#">Explore More <i class="fas fa-link"></i></a>
                        </div>
                        <img class="features-back-img" src="{{ asset('../images/features back img.gif') }}"
                            alt="">
                    </div>
                </div>

                <!-- Card 6 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="features-card autoBlur">
                        <h2>Mobile App <br> Development</h2>
                        <p>High-quality mobile apps for iOS and Android with smooth performance and great design.</p>
                        <div class="explore-more">
                            <img src="{{ asset('../images/feature6.png') }}" alt="">
                            <a href="#">Explore More <i class="fas fa-link"></i></a>
                        </div>
                        <img class="features-back-img" src="{{ asset('../images/features back img.gif') }}"
                            alt="">
                    </div>
                </div>

            </div>
        </div>

    </section>


    <section class="roadmap-section py-5" id="training">

        <div class="container">
            <h1 class="text-center text-white mb-5 fw-bold">Trainings</h1>

            <!-- 1. Wid Blocks -->
            <div class="row align-items-center mb-5">
                <div class="col-md-6 text-center fadeInLeft">
                    <div class="tech-icons gap-4">
                        <i class="fas fa-robot fa-3x text-warning"></i>
                        <i class="fas fa-cogs fa-3x text-info"></i>
                        <i class="fas fa-microchip fa-3x text-success"></i>
                        <i class="fas fa-tools fa-3x text-light"></i>
                        <i class="fas fa-bolt fa-3x text-danger"></i>
                        <i class="fas fa-plug fa-3x text-primary"></i>
                        <i class="fas fa-microphone fa-3x text-warning"></i>
                        <i class="fas fa-code-branch fa-3x text-secondary"></i>
                    </div>
                </div>
                <div class="col-md-6 fadeInRight">
                    {{-- <h2 class="text-white fw-bold">Wid Blocks</h2> --}}
                    <h2 class="text-white fw-bold"><span class="typewriter">Wit Blocks</span></h2>
                    <p class="text-white">Boost critical thinking and logical reasoning through brain-stimulating challenges and real-life problem scenarios.</p>
                </div>
            </div>

            <!-- 2. IoT -->
            <div class="row align-items-center mb-5 flex-md-row-reverse">
                <div class="col-md-6 text-center fadeInLeft">
                    <div class="tech-icons gap-4">
                        <i class="fas fa-network-wired fa-3x text-info"></i>
                        <i class="fas fa-wifi fa-3x text-warning"></i>
                        <i class="fas fa-broadcast-tower fa-3x text-success"></i>
                        <i class="fas fa-microchip fa-3x text-light"></i>
                        <i class="fas fa-magic fa-3x text-primary"></i>
                        <i class="fas fa-plug fa-3x text-danger"></i>
                        <i class="fas fa-code-branch fa-3x text-secondary"></i>
                        <i class="fas fa-chart-line fa-3x text-info"></i>
                    </div>
                </div>
                <div class="col-md-6 fadeInRight">
                    <h2 class="text-white fw-bold">Internet Of Things (IoT)</h2>
                    <p class="text-white">Connect the digital with the physical world. Learn to build smart devices that communicate over the internet using sensors and cloud integrationAI.</p>
                </div>
            </div>

            <!-- 3. AI -->
            <div class="row align-items-center mb-5">
                <div class="col-md-6 text-center fadeInLeft">
                    <div class="tech-icons gap-4">
                        <i class="fas fa-brain fa-3x text-warning"></i>
                        <i class="fas fa-robot fa-3x text-info"></i>
                        <i class="fas fa-laptop-code fa-3x text-light"></i>
                        <i class="fas fa-cogs fa-3x text-success"></i>
                        <i class="fas fa-chart-pie fa-3x text-danger"></i>
                        <i class="fas fa-eye fa-3x text-primary"></i>
                        <i class="fas fa-database fa-3x text-secondary"></i>
                        <i class="fas fa-layer-group fa-3x text-info"></i>
                    </div>
                </div>
                <div class="col-md-6 fadeInRight">
                    <h2 class="text-white fw-bold">Artificial Intelligence (AI)</h2>
                    <p class="text-white">Step into the world of smart machines. Learn how AI works, explore machine learning, and develop models that adapt and learn.</p>
                </div>
            </div>

            <!-- 4. Arduino -->
            <div class="row align-items-center mb-5 flex-md-row-reverse">
                <div class="col-md-6 text-center fadeInLeft">
                    <div class="tech-icons gap-4">
                        <i class="fas fa-microchip fa-3x text-success"></i>
                        <i class="fas fa-tools fa-3x text-warning"></i>
                        <i class="fas fa-code fa-3x text-info"></i>
                        <i class="fas fa-bolt fa-3x text-danger"></i>
                        <i class="fas fa-cogs fa-3x text-light"></i>
                        <i class="fas fa-lightbulb fa-3x text-primary"></i>
                        <i class="fas fa-wrench fa-3x text-secondary"></i>
                        <i class="fas fa-terminal fa-3x text-info"></i>
                    </div>
                </div>
                <div class="col-md-6 fadeInRight">
                    <h2 class="text-white fw-bold">Arduino</h2>
                    <p class="text-white">Build your own interactive electronics! Master the basics of microcontroller programming and hardware interfacing with Arduino boards.</p>
                </div>
            </div>

            <!-- 5. Cyber Security -->
            <div class="row align-items-center mb-5">
                <div class="col-md-6 text-center fadeInLeft">
                    <div class="tech-icons gap-4">
                        <i class="fas fa-shield-alt fa-3x text-info"></i>
                        <i class="fas fa-lock fa-3x text-danger"></i>
                        <i class="fas fa-user-secret fa-3x text-warning"></i>
                        <i class="fas fa-bug fa-3x text-success"></i>
                        <i class="fas fa-key fa-3x text-light"></i>
                        <i class="fas fa-shield-virus fa-3x text-secondary"></i>
                        <i class="fas fa-eye-slash fa-3x text-primary"></i>
                        <i class="fas fa-hdd fa-3x text-info"></i>
                    </div>
                </div>
                <div class="col-md-6 fadeInRight">
                    <h2 class="text-white fw-bold">Cyber Security</h2>
                    <p class="text-white">Learn how to protect data, networks, and systems. Master ethical hacking, encryption, and digital security fundamentals.</p>
                </div>
            </div>

            <!-- 6. Raspberry Pi -->
            <div class="row align-items-center mb-5 flex-md-row-reverse">
                <div class="col-md-6 text-center fadeInLeft">
                    <div class="tech-icons gap-4">
                        <i class="fas fa-microchip fa-3x text-success"></i>
                        <i class="fas fa-server fa-3x text-info"></i>
                        <i class="fas fa-code fa-3x text-light"></i>
                        <i class="fas fa-cube fa-3x text-primary"></i>
                        <i class="fas fa-terminal fa-3x text-danger"></i>
                        <i class="fas fa-project-diagram fa-3x text-secondary"></i>
                        <i class="fas fa-toolbox fa-3x text-warning"></i>
                        <i class="fas fa-network-wired fa-3x text-info"></i>
                    </div>
                </div>
                <div class="col-md-6 fadeInRight">
                    <h2 class="text-white fw-bold">Raspberry Pi</h2>
                    <p class="text-white">Dive into computing with the powerful Raspberry Pi. Learn to build real-world applications from automation to media servers.
                    </p>
                </div>
            </div>

            <!-- 7. App Development -->
            <div class="row align-items-center mb-5">
                <div class="col-md-6 text-center fadeInLeft">
                    <div class="tech-icons gap-4">
                        <i class="fab fa-android fa-3x text-success"></i>
                        <i class="fab fa-apple fa-3x text-light"></i>
                        <i class="fas fa-code fa-3x text-warning"></i>
                        <i class="fas fa-mobile-alt fa-3x text-info"></i>
                        <i class="fas fa-tablet-alt fa-3x text-secondary"></i>
                        <i class="fas fa-database fa-3x text-primary"></i>
                        <i class="fas fa-tools fa-3x text-danger"></i>
                        <i class="fas fa-laptop-code fa-3x text-success"></i>
                    </div>
                </div>
                <div class="col-md-6 fadeInRight">
                    <h2 class="text-white fw-bold">IOS & Android Development</h2>
                    <p class="text-white">Design and develop fully functional mobile applications. From UI design to backend logic, become an app creator from scratch.</p>
                </div>
            </div>

            <!-- 8. Personality Development -->
            <div class="row align-items-center mb-5 flex-md-row-reverse">
                <div class="col-md-6 text-center fadeInLeft">
                    <div class="tech-icons gap-4">
                        <i class="fas fa-users fa-3x text-info"></i>
                        <i class="fas fa-comments fa-3x text-warning"></i>
                        <i class="fas fa-handshake fa-3x text-success"></i>
                        <i class="fas fa-microphone-alt fa-3x text-light"></i>
                        <i class="fas fa-user-check fa-3x text-primary"></i>
                        <i class="fas fa-star fa-3x text-danger"></i>
                        <i class="fas fa-user-tie fa-3x text-secondary"></i>
                        <i class="fas fa-brain fa-3x text-info"></i>
                    </div>
                </div>
                <div class="col-md-6 fadeInRight">
                    <h2 class="text-white fw-bold">Professional Communication</h2>
                    <p class="text-white">Unlock the leader in you! Enhance your communication, confidence, time management, public speaking, and interpersonal skills.</p>
                </div>
            </div>

            <!-- Call to Action -->
            <div class="d-flex justify-content-center mt-5">
                <div class="testimonial-controls button-box2">
                    <button class="btn btn-outline-light px-4 py-2 fw-bold text-white"
                        style="clip-path: polygon(0 0, 80% 0%, 100% 20%, 100% 80%, 100% 99%, 0 100%, 0% 80%, 0% 20%); background-color: rgb(14, 12, 21); border-radius: 10px;">Apply
                        Now</button>
                </div>
            </div>


            <div class="roadmap-gradient"></div>
        </div>
    </section>



    {{-- <section class="chatApp-section container-fluid py-5" id="choose">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6 order-1 order-lg-2 text-center mb-4 mb-lg-0 fadeInRight">
                    <h2 class="mb-4 text-center"
                        style="font-size: 1.5rem; color: white; max-width: 500px; margin: 0 auto;">
                        We blend skills with confidence and learning with real-life impact. <br>
                        Our trainers don’t lecture, they ignite transformation. <br>
                        Because you deserve more than just a course — you deserve a breakthrough.
                    </h2>
                    <img src="{{ asset('../images/tools group.png') }}" alt="Tools Group"
                        class="img-fluid mt-3 rotating-image" style="max-width: 100%;">
                </div>

                <div class="col-lg-6 order-2 order-lg-1">
                    <h1 class="mb-4 text-center text-lg-start fadeInLeft" style="font-size: 3rem;">Why Choose Us?</h1>

                    <ul class="list-unstyled fs-5">
                        <li class="d-flex align-items-center mb-3 fadeInLeft"><img
                                src="{{ asset('../images/Check circle.png') }}" alt=""
                                style="height: 30px; margin-right: 15px;">Easy Learning</li>
                        <li class="d-flex align-items-center mb-3 fadeInLeft"><img
                                src="{{ asset('../images/Check circle.png') }}" alt=""
                                style="height: 30px; margin-right: 15px;">Stunning Projects</li>
                        <li class="d-flex align-items-center mb-3 fadeInLeft"><img
                                src="{{ asset('../images/Check circle.png') }}" alt=""
                                style="height: 30px; margin-right: 15px;">Expert-Led Training</li>
                        <li class="d-flex align-items-center mb-3 fadeInLeft"><img
                                src="{{ asset('../images/Check circle.png') }}" alt=""
                                style="height: 30px; margin-right: 15px;">Practical, Real-World Learning
                        </li>
                        <li class="d-flex align-items-center mb-3 fadeInLeft"><img
                                src="{{ asset('../images/Check circle.png') }}" alt=""
                                style="height: 30px; margin-right: 15px;">Personalized Growth Journey</li>
                    </ul>

                    <div class="text-center text-lg-start mt-4 fadeInLeft">
                        <a href="tel:+919214274929" class="btn btn-outline-light px-4 py-2 fw-bold"
                            style="clip-path: polygon(0 0, 80% 0%, 100% 20%, 100% 80%, 100% 99%, 0 100%, 0% 80%, 0% 20%); background-color: rgb(14, 12, 21); border-radius: 10px;">Call
                            Now</a>
                    </div>
                </div>

            </div>
        </div>
    </section> --}}


    <section id="testimonials-section" class="container py-5">
        <h2 class="text-center mb-5">Testimonials</h2>
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
            <button id="prevTestimonial" class="btn text-white">Previous</button>
            <button id="nextTestimonial" class="btn text-white">Next</button>
        </div>
    </section>

    {{-- <section id="testimonials-section" class="container py-5">
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
</section> --}}

    <div class="slider-wrapper overflow-hidden py-4 my-4 slider-heading">
        <h1 class="text-center mb-5 fw-bold">Empowering  Education Globally</h1>
        <div class="slide-track d-flex">
            <!-- Repeat icons enough times to ensure seamless loop -->
            <div class="slide"><img src="{{ asset('../images/flags/india_flag.jpg') }}" alt="India" /></div>
            <div class="slide"><img src="{{ asset('../images/flags/us_flag.jpg') }}" alt="US" /></div>
            <div class="slide"><img src="{{ asset('../images/flags/spain_flag.jpg') }}" alt="Spain" /></div>
            <div class="slide"><img src="{{ asset('../images/flags/russia_flag.jpg') }}" alt="Russia" /></div>
            <div class="slide"><img src="{{ asset('../images/flags/turkey.jpg') }}" alt="Turkey" /></div>
            <div class="slide"><img src="{{ asset('../images/flags/malaysia.jpg') }}" alt="Malaysia" /></div>
            <div class="slide"><img src="{{ asset('../images/flags/canada.jpg') }}" alt="Canada" /></div>
            <div class="slide"><img src="{{ asset('../images/flags/italy_flag.jpg') }}" alt="Italy" /></div>

            <!-- Duplicate icons for smooth looping -->
            <div class="slide"><img src="{{ asset('../images/flags/india_flag.jpg') }}" alt="India" /></div>
            <div class="slide"><img src="{{ asset('../images/flags/us_flag.jpg') }}" alt="US" /></div>
            <div class="slide"><img src="{{ asset('../images/flags/spain_flag.jpg') }}" alt="Spain" /></div>
            <div class="slide"><img src="{{ asset('../images/flags/russia_flag.jpg') }}" alt="Russia" /></div>
            <div class="slide"><img src="{{ asset('../images/flags/turkey.jpg') }}" alt="Turkey" /></div>
            <div class="slide"><img src="{{ asset('../images/flags/malaysia.jpg') }}" alt="Malaysia" /></div>
            <div class="slide"><img src="{{ asset('../images/flags/canada.jpg') }}" alt="Canada" /></div>
            <div class="slide"><img src="{{ asset('../images/flags/italy_flag.jpg') }}" alt="Italy" /></div>
        </div>
    </div>


    <section class="contact-section my-4" id="contact">
        <!-- Gradient Background Circle -->
        <div class="bg-gradient-center"></div>
        <h1 class="contact-title fw-bold text-white">Contact SirusTech</h1>
        {{-- <p class="contact-subtitle">We're here to talk robots, AI, and innovation. Drop us a message.</p> --}}

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
                <input type="text" class="contact-input" id="phone" name="phone" required placeholder=" " />
                <label for="phone" class="contact-label">Your WhatsApp Number</label>
                @error('phone')
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
