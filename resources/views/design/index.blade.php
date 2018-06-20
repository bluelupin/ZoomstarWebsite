@extends('layouts.app')
@section('content')
<div id="wrapper">

    <!-- Intro -->
        <section id="intro" class="wrapper style1 fullscreen fade-up">
            <div class="inner">
                <h1>Zoomstar Innovation</h1>
                <p>We conduct experiments that may or may not break the universe.<br />
                    Applying cutting-edge artificial-intelligence principles as well as emerging digital technologies for India’s Transport & Logistics sector.</p>
                <ul class="actions">
                    <li><a href="#four" class="button scrolly">Discover</a></li>
                </ul>
            </div>
        </section>

    <!-- Four -->
        <section id="four" class="wrapper style3 fullscreen fade-up">
            <div class="inner">
                {{-- <h2>NAAVIQ</h2> --}}
                <p>Applying technology to transport and logistics in India and building an infrastructure to transfer information between systems for improved safety, productivity and a better environmental performance.</p>
                <div class="features">
                    <section>
                        <span class="icon major fa-code"></span>
                        <h3>Intelligent Transport Systems</h3>
                        <p>Cloud based SaaS allows remote management of entire operations spread across a variety of operators with differential workflow.</p>
                    </section>
                    <section>
                        <span class="icon major fa-lock"></span>
                        <h3>Autonomous Vehicle Tracking</h3>
                        <p>Real-time fleet and workforce management with distributed workflows across your organization.</p>
                    </section>
                    <section>
                        <span class="icon major fa-cog"></span>
                        <h3>Invoice & Goods-Receipt Processing</h3>
                        <p>Process paperwork in seconds with custom mapping solutions, and print GR, Delivery Challan and E-Way Bill.</p>
                    </section>
                    <section>
                        <span class="icon major fa-desktop"></span>
                        <h3>Technology-enabled Logistics</h3>
                        <p>We are implementing state of the art hardware solutions for different industries, like cold chain, retail, 3PL and tankers.</p>
                    </section>
                </div>
                <ul class="actions">
                    {{-- <li><a href="\\naaviq.com" target="_blank" class="button">Go to naaviq.com</a></li> --}}
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
                        <p>We are developing an IOT that enables companies to control, predict and automate their supply chain and logistics processes. Due to outsourcing companies have little to no control over their supply chain and logistics. With the help of our artificial intelligence, companies as well their logistics service providers and suppliers, can better understand, plan and automate processes.</p>
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
                        <p>We’re a fast-moving team based in New Delhi and we are constantly solving the enormous challenge of automating the transportation of goods. We are focusing on digitization of processes and collaboration as one of the ways to improve operational efficiency. We realise the idea of the Physical Internet for logistics, the importance of data and analytics for data communication, and what potential value can these processes bring to the T&L industry in India.</p>
                    </div>
                </div>
            </section>
        </section>

    <!-- Three -->
        <section id="three" class="wrapper style1 fullscreen fade-up">
            <div class="inner">
                <h2>Give us a shout</h2>
                <p>Join us to solve this global challenge if you want to work with one of the most important and impactful paradigm shifts in our country. Send us an email - We will get back with lightning speed, or an old-fashioned phone call works for us too.</p>
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
                            {{-- <li>
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
                            </li> --}}
                        </ul>
                    </section>
                </div>
            </div>
        </section>

</div>
@endsection