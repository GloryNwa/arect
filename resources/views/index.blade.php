@include('includes/header')


        <section id="home" class="home">
            <!-- Carousel -->
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <!-- Carousel-inner -->
                <div class="carousel-inner" role="listbox">

                    <div class="item active">
                        <img src="images/slider_img.jpg" alt="Construction">
                        <div class="overlay">
                            <div class="carousel-caption">
                                <h3>We are Certified Engineers</h3>
                                <h1></h1>
                                <h1 class="second_heading">Creative & Professional</h1>
                                <p>
                                We are a leading engineering construction company with over 15 years working experience in delivering value-added civil and infrastructural projects. With projects executed successfully in over 20 states, we have played a key role in developing Nigeria’s infrastructure.</p>
                                <a href="{{route('contactus')}}" class="btn know_btn" >Contact Us</a>
                                <a href="{{route('portfolio')}}" class="btn know_btn">view project</a>
                            </div>					
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/slider_img3.jpg" alt="Construction">
                        <div class="overlay">
                            <div class="carousel-caption">
                                <h3>We are Arects Builders Limited</h3>
                                <h1></h1>
                                <h1 class="second_heading">A Nigerian Based Company</h1>
                                <p>We have worked with the biggest brands all over Nigeria to bring to life, across various sectors, commercial developmental projects.</p>
                                <a href="{{route('contactus')}}" class="btn know_btn" >Contact Us</a>
                                <a href="{{route('portfolio')}}" class="btn know_btn">view project</a>
                            </div>					
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/SIBA.jpg" alt="Construction">
                        <div class="overlay">
                            <div class="carousel-caption">
                                <h3>Building Value With a Vision</h3>
                                <h1></h1>
                                <h1 class="second_heading">Compentency & Reliability</h1>
                                <p>We Designed, Construct and Refurbish Outstanding Buildings. We are Arects, we build to modern standards</p>
                                <a href="{{route('contactus')}}" class="btn know_btn" >Contact Us</a>
                                <a href="{{route('portfolio')}}" class="btn know_btn">view project</a>
                            </div>					
                        </div>
                    </div>
                </div><!-- Carousel-inner end -->



                <!-- Controls -->
                <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
                    <span class="fa fa-angle-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
                    <span class="fa fa-angle-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div><!-- Carousel end-->

        </section>


        <!-- About -->
        <section id="about">
            <div class="container about_bg">
                <div class="row">
                    <div class="col-lg-7 col-md-6">
                        <div class="about_content">
                            <h2>Welcome to Arects</h2>
                            <h3>HIGHEST DEGREE OF SAFETY AND QUALITY</h3>
                            <p>Arects Builders Limited (Arects) is a leading construction company offering integrated solutions and related services. Arects specializes in executing complex works that require the highest level of technical expertise and Nigeria-specific knowhow.

Since its pioneer project in 2013 – the construction of Ceflix Scepter Data Center in Ikeja, Lagos – Arects has played a pivotal role in the development of Nigeria’s industrial and civil infrastructure. The company utilizes state-of-the-art construction methods and technologies to ensure that quality and innovation are prioritized for the benefit of clients. Core competencies cover all project phases, including planning, design, engineering, construction, maintenance and operation, for infrastructure, industry and building projects. </p><a href="{{route('about')}}" class="btn know_btn">know more</a>
                        </div>
                     </div>
                    <div class="col-lg-3 col-md-6 col-lg-offset-1">
                        <div class="about_banner">
                            <img src="images/man.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- About end -->

        <!-- Why us -->
        <section id="why_us">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="head_title">
                            <h2>WHY CHOOSE US?</h2>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,</p>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="why_us_item">
                            <span class="fa fa-leaf"></span>
                            <h4>We deliver quality</h4>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="why_us_item">
                            <span class="fa fa-futbol-o"></span>
                            <h4>Always on time</h4>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="why_us_item">
                            <span class="fa fa-group"></span>
                            <h4>Competency & Reliability</h4>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="why_us_item">
                            <span class="fa fa-line-chart"></span>
                            <h4>Creative & Professional</h4>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni</p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- Why us end -->

        <!-- Services -->
       <!-- Services end -->

        <!-- Portfolio -->
        <section id="testimonial">
            <div class="container text-center testimonial_area">
                <h2>Customer Reviews</h2>
                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,</p>
<!-- 
                <div id="filters">
                    <button class="button is-checked" data-filter="*">Show All</button>
                    <button class="button" data-filter=".buildings">Buildings</button>
                    <button class="button" data-filter=".interior">Interior Design</button>
                    <button class="button" data-filter=".isolation">Isolation</button>
                    <button class="button" data-filter=".plumbing">Plumbing</button>
                </div> -->
                <!-- Portfolio grid -->		
                <div class="grid">
                    <div class="col-md-4">
                        <div class="testimonial_item">
                            <div class="testimonial_content text-left">
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,</p>
                            </div>
                            <!-- <img src="images/testimonial_img1.png" alt="Testimonial" /> -->
                            <p class="worker_name">CEO, Ceflix Scepter Mr Ediohn David</p> 
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="testimonial_item">
                            <div class="testimonial_content">
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,</p>
                            </div>
                            <!-- <img src="images/testimonial_img2.png" alt="Testimonial" /> -->
                            <p class="worker_name">CEO, Petal International, john smith</p> 
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="testimonial_item">
                            <div class="testimonial_content">
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,</p>
                            </div>
                            <!-- <img src="images/testimonial_img1.png" alt="Testimonial" />-->
                             <p class="worker_name">CEO, Ceflix Scepter Mr Ediohn David</p> 
                        </div>
                    </div><!-- Portfolio grid end -->
            </div>
        </section><!-- Portfolio end -->

        

        <!-- Testimonial -->
       <!-- <section>
            <div class="container text-center testimonial_area">
               

                <div class="row">
                    
                </div>
            </div>
        </section> -->
        <!-- Testimonial end -->

        <!-- Contact form -->
        <!-- <section id="contact_form">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                     <h2 style="text-align:center">Our Clients</h2>
                        <h2>Do you have any questions?</h2>
                        <h2 class="second_heading">Feel free to contact us!</h2>
                        
                    </div>
                   			
                </div>
            </div>
        </section> -->
        <!-- Contact form end -->

@include('includes/footer')