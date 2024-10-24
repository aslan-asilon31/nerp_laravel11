@extends('layouts/layout_welcome_volti')

@section('content')

      <!-- 
        - #HERO
      -->

      <section class="section hero" aria-label="home">
        <div class="container">

          <div class="hero-content" data-reveal="left">

            <h1 class="h1 hero-title">
              Book Your <span class="span">New Eco-Friendly</span> Ride.
            </h1>

            <ul class="hero-list">

              <li>
                <div class="hero-card">
                  <ion-icon name="speedometer-outline" aria-hidden="true"></ion-icon>

                  <p class="card-subtitle">Top speed</p>

                  <p class="card-title">80 km/h</p>
                </div>
              </li>

              <li>
                <div class="hero-card">
                  <ion-icon name="stopwatch-outline" aria-hidden="true"></ion-icon>

                  <p class="card-subtitle">0-40 km/hr in</p>

                  <p class="card-title">3.3 sec</p>
                </div>
              </li>

              <li>
                <div class="hero-card">
                  <ion-icon name="speedometer-outline" aria-hidden="true"></ion-icon>

                  <p class="card-subtitle">Certified Range</p>

                  <p class="card-title">116 km</p>
                </div>
              </li>

            </ul>

            <a href="#" class="btn btn-primary">
              <span class="span">Book Now</span>

              <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
            </a>

          </div>

          <figure class="hero-banner" data-reveal="right">
            <img src="{{ asset('volti_htmlcss/assets/images/hero-banner.png') }}" width="1116" height="766" alt="Bike" class="w-100">
          </figure>

        </div>
      </section>





      <!-- 
        - #ABOUT
      -->

      <section class="section about" aria-labelledby="about-label">
        <div class="container">

          <figure class="about-banner" data-reveal="left">
            <img src="{{ asset('volti_htmlcss/assets/images/about-banner-1.jpg') }}" width="380" height="382" loading="lazy" alt="about banner"
              class="w-100 img-1">

            <img src="{{ asset('volti_htmlcss/assets/images/about-banner-2.jpg') }}" width="347" height="349" loading="lazy" alt="about banner"
              class="w-100 img-2">
          </figure>

          <div class="about-content" data-reveal="right">

            <p class="section-subtitle has-before" id="about-label">What We Do!</p>

            <h2 class="h2 section-title">
              Our mission is to put an electric vehicle charge
            </h2>

            <p class="section-text">
              Charge your electric vehicle at home using one of our smart home char ge solutions or gain access to over
              3,000 public charging.
            </p>

            <div class="about-wrapper">

              <div class="about-card">

                <div class="title-wrapper">
                  <ion-icon name="bonfire-outline" aria-hidden="true"></ion-icon>

                  <h3 class="card-title">Zero contact travel</h3>
                </div>

                <p class="card-text">
                  We love our customers and we love the way they come.
                </p>

              </div>

              <div class="about-card">

                <div class="title-wrapper">
                  <ion-icon name="document-text-outline" aria-hidden="true"></ion-icon>

                  <h3 class="card-title">No Driving License</h3>
                </div>

                <p class="card-text">
                  We love our customers and we love the way they come.
                </p>

              </div>

            </div>

            <ul class="about-list">

              <li class="about-item">
                <ion-icon name="checkmark-circle" aria-hidden="true"></ion-icon>

                <span class="span">Detachable battery, take home and charge in 3 hours.</span>
              </li>

              <li class="about-item">
                <ion-icon name="checkmark-circle" aria-hidden="true"></ion-icon>

                <span class="span">Enjoy a hassle-free ride by charging just for 3 hours.</span>
              </li>

            </ul>

            <a href="#" class="btn btn-primary">
              <span class="span">Read More</span>

              <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
            </a>

          </div>

        </div>
      </section>





      <!-- 
        - #STATS
      -->

      <section class="section stats" aria-label="statistics">
        <div class="container">

          <ul class="stats-list" data-reveal>

            <li class="stats-card">
              <h3 class="h3 card-title">650m</h3>

              <p class="card-text">
                Check charge status remotely through Ether app
              </p>
            </li>

            <li class="stats-card">
              <h3 class="h3 card-title">564+</h3>

              <p class="card-text">
                Check charge status remotely through Ether app
              </p>
            </li>

            <li class="stats-card">
              <h3 class="h3 card-title">125k</h3>

              <p class="card-text">
                Check charge status remotely through Ether app
              </p>
            </li>

          </ul>

          <div class="stats-banner" data-reveal>
            <img src="{{ asset('volti_htmlcss/assets/images/stats-banner.jpg') }}" width="1398" height="565" loading="lazy" alt="video banner"
              class="img-cover">

            <button class="play-btn" aria-label="play video">
              <ion-icon name="play" aria-hidden="true"></ion-icon>
            </button>
          </div>

        </div>
      </section>





      <!-- 
        - #SERVICE
      -->

      <section class="section service" aria-labelledby="service-label">
        <div class="container">

          <p class="section-subtitle has-before" id="service-label" data-reveal>What We Do!</p>

          <h2 class="h2 section-title" data-reveal>
            What Advantages Will You Get Using An Escooter?
          </h2>

          <div class="wrapper">

            <ul class="service-list" data-reveal="left">

              <li class="service-item">
                <div>
                  <h3 class="h5 card-title">Recoverable Energy</h3>

                  <p class="card-text">
                    Charge Your Electric Vehicle At Home Using One Of Our Smart.
                  </p>
                </div>

                <div class="card-icon">
                  <ion-icon name="car-outline" aria-hidden="true"></ion-icon>
                </div>
              </li>

              <li class="service-item">
                <div>
                  <h3 class="h5 card-title">Quick Installation</h3>

                  <p class="card-text">
                    Charge Your Electric Vehicle At Home Using One Of Our Smart.
                  </p>
                </div>

                <div class="card-icon">
                  <ion-icon name="compass-outline" aria-hidden="true"></ion-icon>
                </div>
              </li>

              <li class="service-item">
                <div>
                  <h3 class="h5 card-title">Zero Contact Travel</h3>

                  <p class="card-text">
                    Charge Your Electric Vehicle At Home Using One Of Our Smart.
                  </p>
                </div>

                <div class="card-icon">
                  <ion-icon name="bonfire-outline" aria-hidden="true"></ion-icon>
                </div>
              </li>

            </ul>

            <figure class="service-banner img-holder" style="--width: 805; --height: 510;">
              <img src="{{ asset('volti_htmlcss/assets/images/service-banner.png') }}" width="805" height="510" loading="lazy" alt="service banner"
                class="img-cover">
            </figure>

            <ul class="service-list" data-reveal="right">

              <li class="service-item">
                <div class="card-icon">
                  <ion-icon name="car-outline" aria-hidden="true"></ion-icon>
                </div>

                <div>
                  <h3 class="h5 card-title">Recoverable Energy</h3>

                  <p class="card-text">
                    Charge Your Electric Vehicle At Home Using One Of Our Smart.
                  </p>
                </div>
              </li>

              <li class="service-item">
                <div class="card-icon">
                  <ion-icon name="compass-outline" aria-hidden="true"></ion-icon>
                </div>

                <div>
                  <h3 class="h5 card-title">Quick Installation</h3>

                  <p class="card-text">
                    Charge Your Electric Vehicle At Home Using One Of Our Smart.
                  </p>
                </div>
              </li>

              <li class="service-item">
                <div class="card-icon">
                  <ion-icon name="bonfire-outline" aria-hidden="true"></ion-icon>
                </div>

                <div>
                  <h3 class="h5 card-title">Zero Contact Travel</h3>

                  <p class="card-text">
                    Charge Your Electric Vehicle At Home Using One Of Our Smart.
                  </p>
                </div>
              </li>

            </ul>

          </div>

        </div>
      </section>





      <!-- 
        - #CTA
      -->

      <section class="cta">
        <div class="container">

          <div class="cta-card" data-reveal="left">

            <div>
              <h2 class="h1 card-title">Designed for the our roads.</h2>

              <p class="card-text">
                Consectetur adipiscing elit sed do tempor labor dolore magna aliqua quis suspendisse.
              </p>
            </div>

            <a href="#" class="btn btn-primary">
              <span class="span">Book Now</span>

              <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
            </a>

          </div>

          <figure class="cta-banner" data-reveal="right">
            <img src="{{ asset('volti_htmlcss/assets/images/cta-banner.jpg') }}" width="330" height="206" loading="lazy" alt="cta banner"
              class="img-cover">
          </figure>

        </div>
      </section>





      <!-- 
        - #BLOG
      -->

      <section class="section blog" aria-labelledby="blog-label">
        <div class="container">

          <div class="title-wrapper" data-reveal>

            <div>
              <p class="section-subtitle has-before" id="blog-label">Fresh News</p>

              <h2 class="h2 section-title">Our recent article for the electric vehicle systems</h2>
            </div>

            <a href="#" class="btn btn-secondary">
              <span class="span">View More Blog</span>

              <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
            </a>

          </div>

          <ul class="blog-list" data-reveal>

            <li>
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 770; --height: 550;">
                  <img src="{{ asset('volti_htmlcss/assets/images/blog-1.jpg') }}" width="770" height="550" loading="lazy"
                    alt="Energy Star Certified Electric Vehicle Chargers" class="img-cover">
                </figure>

                <div class="card-content">

                  <time class="publish-date" datetime="2022-06-03">03 Jun 2022</time>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="person-outline" aria-hidden="true"></ion-icon>

                      <span class="span">Admin</span>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="chatbubble-outline" aria-hidden="true"></ion-icon>

                      <span class="span">2 Comments</span>
                    </li>

                  </ul>

                  <h3 class="h5">
                    <a href="#" class="card-title">
                      Energy Star Certified Electric Vehicle Chargers
                    </a>
                  </h3>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 770; --height: 550;">
                  <img src="{{ asset('volti_htmlcss/assets/images/blog-2.jpg') }}" width="770" height="550" loading="lazy"
                    alt="Charging Solution For Electric Car & Hybrid Car" class="img-cover">
                </figure>

                <div class="card-content">

                  <time class="publish-date" datetime="2022-06-03">03 Jun 2022</time>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="person-outline" aria-hidden="true"></ion-icon>

                      <span class="span">Admin</span>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="chatbubble-outline" aria-hidden="true"></ion-icon>

                      <span class="span">2 Comments</span>
                    </li>

                  </ul>

                  <h3 class="h5">
                    <a href="#" class="card-title">
                      Charging Solution For Electric Car & Hybrid Car
                    </a>
                  </h3>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 770; --height: 550;">
                  <img src="{{ asset('volti_htmlcss/assets/images/blog-3.jpg') }}" width="770" height="550" loading="lazy"
                    alt="Home Charging Station For A Electric Vehicless" class="img-cover">
                </figure>

                <div class="card-content">

                  <time class="publish-date" datetime="2022-06-03">03 Jun 2022</time>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="person-outline" aria-hidden="true"></ion-icon>

                      <span class="span">Admin</span>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="chatbubble-outline" aria-hidden="true"></ion-icon>

                      <span class="span">2 Comments</span>
                    </li>

                  </ul>

                  <h3 class="h5">
                    <a href="#" class="card-title">
                      Home Charging Station For A Electric Vehicless
                    </a>
                  </h3>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #CONTACT
      -->

      <section class="contact" aria-label="contact" data-reveal="right">
        <div class="container">

          <ul class="contact-list">

            <li>
              <div class="contact-card">
                <div class="card-icon">
                  <ion-icon name="call-outline" aria-hidden="true"></ion-icon>
                </div>

                <div>
                  <h3 class="h6">Hot Line</h3>

                  <a href="tel:+01123457890" class="card-subtitle">+(01) 1234-57-890</a>
                </div>
              </div>
            </li>

            <li>
              <div class="contact-card">
                <div class="card-icon">
                  <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>
                </div>

                <div>
                  <h3 class="h6">E-mail Address</h3>

                  <a href="mailto:voltiinfo@gmail.com" class="card-subtitle">voltiinfo@gmail.com</a>
                </div>
              </div>
            </li>

            <li>
              <div class="contact-card">
                <div class="card-icon">
                  <ion-icon name="compass-outline" aria-hidden="true"></ion-icon>
                </div>

                <div>
                  <h3 class="h6">Our Location</h3>

                  <address class="card-subtitle">101 Avenue, S.E. USA</address>
                </div>
              </div>
            </li>

          </ul>

        </div>
      </section>

@endsection