@extends('layouts.app')
@section('content')
<div id="wrapper">

    <!-- Intro -->
        <section id="intro" class="wrapper style1 fullscreen fade-up">
            <div class="inner">
                <h1>ZOOMSTAR INNOVATIONS</h1>
                <p>We conduct experiments that may or may not break the universe <br />
                Unlocking India's potential.</p>
                <ul class="actions">
                    <li><a href="#four" class="button scrolly">Discover</a></li>
                </ul>
            </div>
        </section>

    <!-- Four -->
        <section id="four" class="wrapper style3 fullscreen fade-up">
            <div class="inner">
                <h2>NAAVIQ</h2>
                <p>Applying technology to transport and logistics in India and building an infrastructure to transfer information between systems for improved safety, productivity and a better environmental performance.</p>
                <div class="features">
                    <section>
                        <span class="icon major fa-code"></span>
                        <h3>Intelligent Transport Systems</h3>
                        <p>Phasellus convallis elit id ullam corper amet et pulvinar. Duis aliquam turpis mauris, sed ultricies erat dapibus.</p>
                    </section>
                    <section>
                        <span class="icon major fa-lock"></span>
                        <h3>Autonomous Vehicle Tracking</h3>
                        <p>Phasellus convallis elit id ullam corper amet et pulvinar. Duis aliquam turpis mauris, sed ultricies erat dapibus.</p>
                    </section>
                    <section>
                        <span class="icon major fa-cog"></span>
                        <h3>Invoice & Goods-Receipt Processing</h3>
                        <p>Phasellus convallis elit id ullam corper amet et pulvinar. Duis aliquam turpis mauris, sed ultricies erat dapibus.</p>
                    </section>
                    <section>
                        <span class="icon major fa-desktop"></span>
                        <h3>Technology-enabled Logistics</h3>
                        <p>Phasellus convallis elit id ullam corper amet et pulvinar. Duis aliquam turpis mauris, sed ultricies erat dapibus.</p>
                    </section>
                </div>
                <ul class="actions">
                    <li><a href="#" class="button">Go to naaviq.com</a></li>
                </ul>
            </div>
        </section>
        
    <!-- One -->
        <section id="one" class="wrapper style1 fullscreen spotlights">
            <section>
                <a href="#" class="image"><img src="{{ asset('images/pic01.jpg')}}" alt="" data-position="Left Center" /></a>
                <div class="content">
                    <div class="inner">
                        <h2>What We Do</h2>
                        <p>Applying technology to transport and logistics in India and building an infrastructure to transfer information between systems for improved safety, productivity and a better environmental performance.Applying technology to transport and logistics in India and building an infrastructure to transfer information between systems for improved safety, productivity and a better environmental performance.Applying technology to transport and logistics in India and building an infrastructure to transfer information between systems for improved safety, productivity and a better environmental performance.</p>
                    </div>
                </div>
            </section>
        </section>

    
    <!-- Two -->
        <section id="two" class="wrapper style2 fullscreen spotlights">
            <section>
                <a href="#" class="image"><img src="{{ asset('images/pic02.jpg')}}" alt="" data-position="Left Center" /></a>
                <div class="content">
                    <div class="inner">
                        <h2>Who We Are</h2>
                        <p>Applying technology to transport and logistics in India and building an infrastructure to transfer information between systems for improved safety, productivity and a better environmental performance.Applying technology to transport and logistics in India and building an infrastructure to transfer information between systems for improved safety, productivity and a better environmental performance.Applying technology to transport and logistics in India and building an infrastructure to transfer information between systems for improved safety, productivity and a better environmental performance.Applying technology to transport and logistics in India and building an infrastructure to transfer information between systems for improved safety, productivity and a better environmental performance.</p>
                    </div>
                </div>
            </section>
        </section>

    <!-- Three -->
        <section id="three" class="wrapper style1 fullscreen fade-up">
            <div class="inner">
                <h2>Give us a shout</h2>
                <p>Send us an email - We will get back with lightning speed, or an old-fashioned phone call works for us too.  </p>
                <div class="split style1">
                    <section>
                            <div id="app">
                                 <contact-form></contact-form>
                            </div>
                        {{-- <form method="post" action="#">
                            <div class="field half first">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" />
                            </div>
                            <div class="field half">
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email" />
                            </div>
                            <div class="field">
                                <label for="message">Message</label>
                                <textarea name="message" id="message" rows="4"></textarea>
                            </div>
                            <ul class="actions">
                                <li><a href="" class="button submit">Send Message</a></li>
                            </ul>
                        </form> --}}
                    </section>
                    <section>
                        <ul class="contact">
                            <li>
                                <h3>Address</h3>
                                <span>Unit-700, Tower -1<br />
                                Highway Towers, NOIDA <br />
                                UP 201301, INDIA</span>
                            </li>
                            <li>
                                <h3>Email</h3>
                                <a href="#">info@zoomstar.io</a>
                            </li>
                            <li>
                                <h3>Phone</h3>
                                <span>+91-9999999999</span>
                            </li>
                            <li>
                                <h3>Social</h3>
                                <ul class="icons">
                                    <li><a href="#" class="fa-twitter"><span class="label">Twitter</span></a></li>
                                    <li><a href="#" class="fa-facebook"><span class="label">Facebook</span></a></li>
                                    <li><a href="#" class="fa-github"><span class="label">GitHub</span></a></li>
                                    <li><a href="#" class="fa-instagram"><span class="label">Instagram</span></a></li>
                                    <li><a href="#" class="fa-linkedin"><span class="label">LinkedIn</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </section>
                </div>
            </div>
        </section>

</div>
@endsection