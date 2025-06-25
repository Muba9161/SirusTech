@extends('frontend.layout.main')

@section('website-main-section')
    <section class="hero">
        <img class="hero-blur-image" src="images/hero blur img.png" alt="">
        <img class="hero-icons-image parallax" data-speed="4" src="images/hero icons img2.png" alt="">
        <img class="hero-rings-image" src="images/hero rings icon.png" alt="">

        <h1>Discover the concepts <br> of AI with SirusTech</h1>
        <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure porro, sunt tempore laboriosam sit labore facilis!
            Odio tempora illo animi iste eos iusto. Molestiae, illum.</h3>

        <button>Get Started</button>

        <div class="hero-image-box">
            <div class="robot-box">
                <div class="robot-header"></div>
                <img src="images/robot3.png" alt="">
            </div>

            <div class="element1">
                {{-- <img src="images/element1.png" alt=""> --}}
            </div>

            <div class="element2">
                <img src="images/element2.png" alt="">
            </div>
        </div>

        <h4>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio, assumenda!</h4>

        <div class="companies-list">
            <div class="company">
                <img src="images/company1.png" alt="">
                <p>Memic</p>
                <img src="images/company2.png" alt="">
                <p>Memic</p>
                <img src="images/company3.png" alt="">
                <p>Memic</p>
                <img src="images/company4.png" alt="">
                <p>Memic</p>
                <img src="images/company5.png" alt="">
                <p>Memic</p>
            </div>
        </div>
    </section>

    <section class="generative-section" id="about">
        <h1>About SirusTech</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, reiciendis.</p>

        <div class="grid-box">
            <div class="grid-card grid1 autoBlur">
                <img src="images/service-21.png" alt="" class="grid1-robot-img">
                <div class="info">
                    <h2>Smartest AI </h2>
                    <h4>Lorem ipsum dolor sit amet.</h4>
                    <p><img src="images/Check circle.png" alt="">Online Classes</p>
                    <p><img src="images/Check circle.png" alt="">Video Lessons</p>
                    <p><img src="images/Check circle.png" alt="">Hands on Learning</p>
                </div>
            </div>
            <div class="grid-card grid2 autoBlur">
                <img src="images/service-2.png" alt="">
                <div>
                    <h2>Hey SirusTech, Enhance my knowledg </h2>
                </div>

                <h1>Digital AI</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis quo modi in, enim corporis
                    eligendi.</p>
            </div>
            <div class="grid-card grid3 autoBlur">
                <div class="info">
                    <h2>Video Classes</h2>
                    <h4>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur, quidem!</h4>

                    <div class="info-icons">
                        <div class="icon">
                            <i class="bx bx-video"></i>
                        </div>
                        <div class="icon">
                            <i class="bx bx-video"></i>
                        </div>
                        <div class="icon">
                            <i class="bx bx-video"></i>
                        </div>
                        <div class="icon">
                            <i class="bx bx-video"></i>
                        </div>
                    </div>
                </div>

                <img src="images/service-3.png" alt="">
            </div>
            <div class="grid-card grid4 autoBlur">
                <img src="images/service-4.png" alt="" class="grid4-robot-img">
                <div class="info">
                    <h2>Smartest AI</h2>
                    <h4>Lorem ipsum dolor sit amet.</h4>
                    <p><img src="images/Check circle.png" alt="">Photo Generation</p>
                    <p><img src="images/Check circle.png" alt="">Photo Generation</p>
                    <p><img src="images/Check circle.png" alt="">Photo Generation</p>
                </div>
            </div>
        </div>
    </section>

    <section class="features-section" id="service">
        <h1>Services Provided by Sirus Tech</h1>

        <div class="features-gradient autoDisplay">

        </div>


        <div class="features-card-box">
            <div class="features-card autoDisplay">
                <h2>Web <br> Designing</h2>
                <p>We craft clean, responsive website designs that enhance user experience and reflect your brand.</p>

                <div class="explore-more">
                    <img src="images/feature1.png" alt="">
                    <a href="#">Explore More <i class='bx  bx-link'></i></a>
                </div>

                <img class="features-back-img" src="images/features back img.gif" alt="">
            </div>
            <div class="features-card autoDisplay">
                <h2>Graphic <br> Designing</h2>
                <p>Eye-catching visuals for digital and print, including logos, banners, and branding assets.</p>

                <div class="explore-more">
                    <img src="images/feature1.png" alt="">
                    <a href="#">Explore More <i class='bx bx-link'></i></a>
                </div>

                <img class="features-back-img" src="images/features back img.gif" alt="">
            </div>
            <div class="features-card autoDisplay">
                <h2>Blockchain Development</h2>
                <p>Secure and scalable blockchain solutions, including smart contracts and dApp development.</p>

                <div class="explore-more">
                    <img src="images/feature2.png" alt="">
                    <a href="#">Explore More <i class='bx  bx-link'></i></a>
                </div>

                <img class="features-back-img" src="images/features back img.gif" alt="">
            </div>
            <div class="features-card autoDisplay">
                <h2>UI/UX <br> Design</h2>
                <p>User-focused designs that make digital products intuitive, engaging, and easy to navigate.</p>

                <div class="explore-more">
                    <img src="images/feature3.png" alt="">
                    <a href="#">Explore More <i class='bx  bx-link'></i></a>
                </div>

                <img class="features-back-img" src="images/features back img.gif" alt="">
            </div>
            <div class="features-card autoDisplay">
                <h2>E-commerce <br> Development</h2>
                <p>Custom online stores built for performance, sales, and seamless customer experience.</p>

                <div class="explore-more">
                    <img src="images/feature4.png" alt="">
                    <a href="#">Explore More <i class='bx  bx-link'></i></a>
                </div>

                <img class="features-back-img" src="images/features back img.gif" alt="">
            </div>
            <div class="features-card autoDisplay">
                <h2>Mobile App <br> Development</h2>
                <p>High-quality mobile apps for iOS and Android with smooth performance and great design.</p>

                <div class="explore-more">
                    <img src="images/feature1.png" alt="">
                    <a href="#">Explore More <i class='bx bx-link'></i></a>
                </div>

                <img class="features-back-img" src="images/features back img.gif" alt="">
            </div>
        </div>
    </section>

    <section class="roadmap-section" id="training">
        <h1>Trainings</h1>

        <div class="roadmap-cards-box">
            <div class="roadmap-card autoBlur">
                <img src="images/roadmap-1.png" alt="">
                <h2>Wid blocks</h2>
                <p>Hands-on robotics training using WitBlox kits. Includes pictures, project demos, and interactive content.
                </p>
            </div>
            <div class="roadmap-card autoBlur">
                <img src="images/roadmap-2.png" alt="">
                <h2>IOT</h2>
                <p>Learn IoT fundamentals through curated YouTube tutorials, real-world examples, and project ideas.</p>
            </div>
            <div class="roadmap-card autoBlur">
                <img src="images/roadmap-3.png" alt="">
                <h2>AI</h2>
                <p>Intro to AI concepts with visual explanations and examples. Includes images and beginner-friendly
                    content.</p>
            </div>
            <div class="roadmap-card autoBlur">
                <img src="images/roadmap-4.png" alt="">
                <h2>Arduino</h2>
                <p>Basics of Arduino with YouTube-guided tutorials, example projects, and illustrated components.</p>
            </div>
            <div class="roadmap-card autoBlur">
                <img src="images/roadmap-3.png" alt="">
                <h2>Cyber Security</h2>
                <p>Introduction to cyber threats, data protection, and safe practices online for all age groups.</p>
            </div>
            <div class="roadmap-card autoBlur">
                <img src="images/roadmap-4.png" alt="">
                <h2>Raspberry Pi</h2>
                <p>Get started with Raspberry Pi using step-by-step YouTube resources and beginner projects.</p>
            </div>
            <div class="roadmap-card autoBlur">
                <img src="images/roadmap-3.png" alt="">
                <h2>App Development</h2>
                <p>Hands-on training to help you learn mobile app development from scratch, covering both Android and iOS
                    platforms with practical projects.</p>
            </div>
            <div class="roadmap-card autoBlur">
                <img src="images/roadmap-4.png" alt="">
                <h2>Personality Development</h2>
                <p>Soft skills training covering communication, confidence building, and personal growth.</p>
            </div>

        </div>

        <div class="button-box2">
            <button>Call Now</button>
        </div>

        <div class="roadmap-gradient">

        </div>
    </section>

    <section class="chatApp-section" id="choose">
        <div class="left-container">
            <h1 class="fadeInLeft">Why Choose Us?</h1>
            <p class="fadeInLeft"><img src="images/Check circle.png" alt="">Easy Learning</p>


            <p class="fadeInLeft"><img src="images/Check circle.png" alt="">Stuning Projects</p>

            <p class="fadeInLeft"><img src="images/Check circle.png" alt="">WorldWide Accuracy</p>

            <p class="fadeInLeft"><img src="images/Check circle.png" alt="">WorldWide Accuracy</p>

            <p class="fadeInLeft"><img src="images/Check circle.png" alt="">WorldWide Accuracy</p>


            <div class="button-box fadeInLeft">
                <button>Call Now</button>
            </div>
        </div>


        <div class="right-container">
            <h2 class="fadeInRight">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt eum molestiae maiores ex
                fugiat at ipsa optio ut similique amet.</h2>

            <img src="images/tools group.png" alt="" class="fadeInRight">
        </div>
    </section>

    <section id="testimonials-section">
        <h2>Our Valued Client Testimonials</h2>
        <div class="testimonial-carousel">
            <div class="testimonial-wrapper">
                <div class="testimonial-card active">
                    <p>"RoboTech's autonomous drones have revolutionized our warehouse operations. Incredible precision and
                        efficiency!"</p>
                    <div class="testimonial-author">- Alex M., Logistics Manager at OmniCorp</div>
                </div>
                <div class="testimonial-card">
                    <p>"The customer service is top-notch, and their industrial robots are built like tanks. Highly
                        recommended!"</p>
                    <div class="testimonial-author">- Sarah L., Production Lead at FutureForge</div>
                </div>
                <div class="testimonial-card">
                    <p>"We've seen a significant increase in productivity since integrating RoboTech's AI-powered assistants
                        into our workflow."</p>
                    <div class="testimonial-author">- David K., CEO of InnovateX</div>
                </div>
                <div class="testimonial-card">
                    <p>"Their security robots provide unparalleled surveillance and peace of mind. A game-changer for our
                        facilities."</p>
                    <div class="testimonial-author">- Emily R., Head of Security at SecureVault</div>
                </div>
                <div class="testimonial-card">
                    <p>"The custom robotics solution they developed for us exceeded all expectations. Truly experts in their
                        field."</p>
                    <div class="testimonial-author">- Mark S., Founder of NextGen Manufacturing</div>
                </div>
            </div>
        </div>
        <div class="testimonial-controls">
            <button id="prevTestimonial">Previous</button>
            <button id="nextTestimonial">Next</button>
        </div>
    </section>

    {{-- <div class="testimonial-carousel">
        <div class="testimonial-wrapper">
            @foreach($testimonials as $index => $testimonial)
            <div class="testimonial-card {{ $index === 0 ? 'active' : '' }}">
                <p>"{{ $testimonial->message }}"</p>
                <div class="testimonial-author">- {{ $testimonial->author }}</div>
            </div>
            @endforeach
        </div>
    </div> --}}
    {{-- <section id="feedback-section">
        <h2>Share Your Experience with Us</h2>

        @if(session('success'))
            <p style="color: green;">{{ session('success') }}</p>
        @endif

        <form class="feedback-form" method="POST" action="{{ route('feedback.store') }}">
            @csrf

            <label for="feedback-name">Your Name:</label>
            <input type="text" id="feedback-name" name="name" required>

            <label for="feedback-email">Your Email:</label>
            <input type="email" id="feedback-email" name="email" required>

            <label for="feedback-message">Your Feedback:</label>
            <textarea id="feedback-message" name="message" rows="5" required></textarea>

            <button type="submit">Submit Feedback</button>
        </form>
    </section> --}}





    <section class="pricing-section">
        <div class="pricing-img-box">
            <img src="images/pricing-parallax.png" alt="">
            <img src="images/magical-glob2.png" class="parallax" data-speed="6" alt="">
        </div>
    </section>



    <section class="contact-section" id="contact">
        <h1 class="contact-title">Contact SirusTech</h1>
        <p class="contact-subtitle">We're here to talk robots, AI, and innovation. Drop us a message.</p>

        @if(session('success'))
            <p class="contact-status" style="color: #00ffc3;">{{ session('success') }}</p>
        @endif


        <form class="contact-form" id="contactForm" action="{{ route('contact.store') }}" method="POST">

            @csrf
            <div class="form-group">
                <input type="text" class="contact-input" id="name" name="name" required placeholder=" " />
                <label for="name" class="contact-label">Your Name</label>
                @error('name') <small style="color: red;">{{ $message }}</small> @enderror
            </div>
            <div class="form-group">
                <input type="email" class="contact-input" id="email" name="email" required placeholder=" " />
                <label for="email" class="contact-label">Your Email</label>
                @error('email') <small style="color: red;">{{ $message }}</small> @enderror
            </div>
            <div class="form-group">
                <textarea class="contact-textarea" id="message" name="message" rows="5" required placeholder=" "></textarea>
                <label for="message" class="contact-label">Your Message</label>
                @error('message') <small style="color: red;">{{ $message }}</small> @enderror
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
