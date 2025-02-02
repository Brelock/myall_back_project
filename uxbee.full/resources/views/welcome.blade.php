<!DOCTYPE html>
<html lang="en">
<head>
  <title>UXBee</title>
  <!--  -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="">

  <meta name="apple-mobile-web-app-capable" content="yes">

  <!-- Microsoft Tiles -->
  <meta name="msapplication-config" content="browserconfig.xml">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
  <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

  <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('img/favicon.ico/apple-icon-57x57.png') }}">
  <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('img/favicon.ico/apple-icon-60x60.png') }}">
  <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/favicon.ico/apple-icon-72x72.png') }}">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/favicon.ico/apple-icon-76x76.png') }}">
  <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/favicon.ico/apple-icon-114x114.png') }}">
  <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('img/favicon.ico/apple-icon-120x120.png') }}">
  <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('img/favicon.ico/apple-icon-144x144.png') }}">
  <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('img/favicon.ico/apple-icon-152x152.png') }}">
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicon.ico/apple-icon-180x180.png') }}">
  <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('img/favicon.ico/android-icon-192x192.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon.ico/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('img/favicon.ico/favicon-96x96.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon.ico/favicon-16x16.png') }}">
  <link rel="manifest" href="{{ asset('manifest.json') }}">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <!-- Font Awesome -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->

  <!-- Fonts -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&amp;subset=cyrillic" rel="stylesheet"> -->
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('css/main.min.css') }}">

  <!--
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
  <!--  -->
</head>

<body>
<div class="mainWrapper">
  <div class="contentWrapper">
    <!--  -->
    <header class="mainHeader sticky_heade" id="sticky_header">
      <div class="header-wrap">
        <div class="mcontainer">
          <div class="header-block flex">
            <div class="header-logo">
              <a href="{{ route('home') }}">
                <img src="{{ asset('img/logo.svg') }}" alt="" class="logotype">
              </a>
            </div>
          </div>
        </div>
      </div>
    </header>



    <!--  -->
    <div id="homePage" class="homePage page">
      <div class="page-container">
        <div class="mcontainer">

          <div class="top-section-expertise">
            <div class="visibility--check visible-viewportchecker hidden">
              <div class="page-container__subtitle">UI/UX for web & mobile products</div>
              <h1 class="page-container__title">Smart design for <br><span class="span-text">successful business</span></h1>
            </div>

            <div class="video-section"> 
              <div class="page-container__banner-top modal-custom-open-btn visibility--check visible-viewportchecker hidden">
                <div class="page-container__banner-top-video-btn"></div>
                <div class="video-container-wrap">
                  <video autoplay muted="" playsinline="" crossorigin="" loop="" preload="auto"
                   class="video-banner" onloadedmetadata="this.muted = true" width="100%" height="100%" src="img/reel-min.mp4"></video>
                </div>
              </div>
              <div class="mobile-player iframe-container">
                <div id="player"></div>
              </div> 
            </div>

            <div class="page-container__expertise">
              <div class="page-container__expertise-title visibility--check visible-viewportchecker hidden">Expertise</div>
              <div class="page-container__expertise-contant flex visibility--check visible-viewportchecker hidden">
                <div class="expertise-contant__text">
                  <p> We create human-centered UI/UX solutions for B2B,
                    B2C and C2C products across all the platforms.</p>
                </div>
                <div class="expertise-contant__list">
                  <ul>
                    <li class="expertise-contant__item-prod">
                      <p class="expertise-contant__item-prod-title">Product strategy</p>
                      <div class="expertise-contant__drop-text">
                       <div> <p>We start each new digital product design partnership with an in‑depth discovery
                          phase to immerse ourselves in your business. Our UX designers interview stakeholders,
                          conduct user researc, analyze your competition, and consolidate content.The result
                          is an action plan on executing a holistic brand and user experience.</p></div>
                      </div>
                    </li>
                    <li class="expertise-contant__item-prod">
                      <p class="expertise-contant__item-prod-title">User experience design</p>
                      <div class="expertise-contant__drop-text">
                      <div>  <p>UI/UX design is a defining factor for any digital product these days.
                          We're a user experience and UI design agency focused on improving conversion
                          and increasing customer engagement. Our UI/UX design capabilities don't stop
                          at mobile apps, web applications, or multi‑platform digital experiences.As a
                          UX design agency, we create products and services that provide
                          outstanding usability while fully embracing your brand's personality.</p></div>
                      </div>
                    </li>
                    <li class="expertise-contant__item-prod">
                      <p class="expertise-contant__item-prod-title">User interface design</p>
                      <div class="expertise-contant__drop-text">
                        <div><p>Our full‑stack design and development agency based in San Francisco
                          provides front‑end and back‑end development services working closely
                          with our designers. As a UX UI and app development company, we build
                          native mobile apps for iOS and Android,
                          web applications, apps for wearables, and B2B/enterprise software.</p></div>
                      </div>
                    </li>
                    <li class="expertise-contant__item-prod">
                      <p class="expertise-contant__item-prod-title">Development</p>
                      <div class="expertise-contant__drop-text">
                      <div>  <p>We're a web design agency creating next‑level websites by
                          strategically blending user experienceand brand storytelling.
                          Our web designers and developers create responsive websites that
                          feel athome on any device. Product landing pages, marketing sites,
                          or UX UI for company intranet portals – we do it all.</p></div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

          </div>

          <div class="recent-work">
            <div class="recent-work__title visibility--check visible-viewportchecker hidden">Recent work</div>
            <div class="recent-work-wrap">

              <div class="recent-work__item mcol-xs-12 mcol-sm-6 visibility--check visible-viewportchecker hidden">
                <div class="recent-work__banner">
                  <img src="{{ asset('img/recent-work-banner1.png') }}" alt="">
                </div>
                <div class="recent-work__item-content">
                  <h3>Actioned - task manager</h3>
                  <p>Mobile app / web app</p>
                </div>
              </div>

              <div class="recent-work__item mcol-xs-12 mcol-sm-6 visibility--check visible-viewportchecker hidden">
                <div class="recent-work__banner">
                  <img src="{{ asset('img/recent-work-banner2.png') }}" alt="">
                </div>
                <div class="recent-work__item-content">
                  <h3>Muscle - e-commerce</h3>
                  <p>Web / responsive</p>
                </div>
              </div>

              <div class="recent-work__item mcol-xs-12 mcol-sm-6 visibility--check visible-viewportchecker hidden">
                <div class="recent-work__banner">
                  <img src="{{ asset('img/recent-work-banner3.png') }}" alt="">
                </div>
                <div class="recent-work__item-content">
                  <h3>SpiceX - dating</h3>
                  <p>Mobile app</p>
                </div>
              </div>

              <div class="recent-work__item mcol-xs-12 mcol-sm-6 visibility--check visible-viewportchecker hidden">
                <div class="recent-work__banner">
                  <img src="{{ asset('img/recent-work-banner4.png') }}" alt="">
                </div>
                <div class="recent-work__item-content">
                  <h3>View Retreats - travel agency</h3>
                  <p>Mobile app / web app</p>
                </div>
              </div>

              <div class="recent-work__item mcol-xs-12 mcol-sm-6 visibility--check visible-viewportchecker hidden">
                <div class="recent-work__banner">
                  <img src="{{ asset('img/recent-work-banner5.png') }}" alt="">
                </div>
                <div class="recent-work__item-content">
                  <h3>Amazeowl - online store</h3>
                  <p>Web app</p>
                </div>
              </div>

              <div class="recent-work__item mcol-xs-12 mcol-sm-6 visibility--check visible-viewportchecker hidden">
                <div class="recent-work__banner">
                  <img src="{{ asset('img/recent-work-banner6.png') }}" alt="">
                </div>
                <div class="recent-work__item-content">
                  <h3>Pikkop - delivery service</h3>
                  <p>Mobile app / web app</p>
                </div>
              </div>

            </div>
          </div>

          <div class="process-section">
            <div class="process-section__suptitle visibility--check visible-viewportchecker hidden">Process</div>
            <div class="process-section__title visibility--check visible-viewportchecker hidden">How we make it</div>

            <div class="process-section-wrap">

              <div class="process-section__item mcol-xs-12 mcol-sm-6 visibility--check visible-viewportchecker hidden">
                <div class="process-section__item-icon">
                  <img src="{{ asset('img/process-icon1.svg') }}" alt="">
                </div>
                <div class="process-section__item-title">1. Research & Discovery</div>
                <div class="process-section__item-text">We start with an in-depth
                  analysis of your business to discover business goals, user needs
                  and pain points, define key use cases, industry best practices and
                  possible UX solutions.</div>
              </div>

              <div class="process-section__item mcol-xs-12 mcol-sm-6 visibility--check visible-viewportchecker hidden">
                <div class="process-section__item-icon">
                  <img src="{{ asset('img/process-icon2.svg') }}" alt="">
                </div>
                <div class="process-section__item-title">2. Product architecture</div>
                <div class="process-section__item-text">Once we get a clear vision
                  of your future product, we build a detailed mind map to show the
                  entire product functional structure in a clear and simple way.</div>
              </div>

              <div class="process-section__item mcol-xs-12 mcol-sm-6 visibility--check visible-viewportchecker hidden">
                <div class="process-section__item-icon">
                  <img src="{{ asset('img/process-icon3.svg') }}" alt="">
                </div>
                <div class="process-section__item-title">3. Wireframing</div>
                <div class="process-section__item-text">According to the mind
                  map we create a wireframe to figure the information architecture
                  and get a primary vision of the key functional sections layout.</div>
              </div>

              <div class="process-section__item mcol-xs-12 mcol-sm-6 visibility--check visible-viewportchecker hidden">
                <div class="process-section__item-icon">
                  <img src="{{ asset('img/process-icon4.svg') }}" alt="">
                </div>
                <div class="process-section__item-title">4. UX Prototyping</div>
                <div class="process-section__item-text">We build a detailed
                  clickable prototype to test the real User experience before
                  even starting the graphic design.</div>
              </div>

              <div class="process-section__item mcol-xs-12 mcol-sm-6 visibility--check visible-viewportchecker hidden">
                <div class="process-section__item-icon">
                  <img src="{{ asset('img/process-icon5.svg') }}" alt="">
                </div>
                <div class="process-section__item-title">5. UI/UX Audit</div>
                <div class="process-section__item-text">Our UX engineers and
                  UI experts test and report the most impacting UI/UX issues
                  and provide solutions to build consistent user experience,
                  increase conversion and reduce maintenance.</div>
              </div>

              <div class="process-section__item mcol-xs-12 mcol-sm-6 visibility--check visible-viewportchecker hidden">
                <div class="process-section__item-icon">
                  <img src="{{ asset('img/process-icon6.svg') }}" alt="">
                </div>
                <div class="process-section__item-title">6. UI Graphic design</div>
                <div class="process-section__item-text">According to the prototype
                  we create the UI graphics. We work out the color scheme and
                  typography to create the hi end UI according to the latest
                  guidelines.</div>
              </div>

            </div>

          </div>

        </div>
      </div>
    </div>

    <!--  -->
  </div>
  <!--  -->

  <div class="modal-custom">
    <div class="modal-custom__content" tabindex="-1" role="dialog">

      <div class="modal-custom_content">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/7oEDgtjBiw8?autoplay=1" frameborder="0" 
        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="1"></iframe>
      </div>

      <div class="modal-custom__overlay">
        <div class="modal-btn-closses"></div>
      </div>
    </div>
  </div>
  <!--  -->
  <footer class="mainFooter">
    <div class="become-client-section">
      <div class="mcontainer">
        <div class="become-client-content">
          <div class="client-content__title visibility--check visible-viewportchecker hidden">Become a client</div>
          <div class="client-content__subtitle-mobile visibility--check visible-viewportchecker hidden">Got a project in 
				      mind? We are here to help. Just drop us a line and 
				      our PM will contact you within 24 hours.
		 	    </div>
          <div class="become-client-content-wrap visibility--check visible-viewportchecker hidden">
            <div class="become-client-content__left">
              <div class="client-content__subtitle-desctop">Got a project in
                mind? We are here to help. Just drop us a line and
                our PM will contact you within 24 hours.
              </div>

              <div class="client-content__contact">
                <div class="client-content__contact-phone"> <img src="./img/phone-alt-solid.svg" alt=""><a href="tel:+380667927474">+38 066 792 74 74</a></div>
					    	<div class="client-content__contact-adress"> <img src="./img/map-marker.svg" alt=""> <p>Estonia, Harju maakond, Tallinn, Lasnamäe linnaosa, Majaka tn 26, 11412</p> </div>
              </div>
            </div>
            <div class="become-client-content__right">
                  <div class="client-content__forms-wrap">
                     <form class="form-contact" action="{{ route('contactForm.send') }}" method="POST" id="form_id" autocomplete="off">
                       @csrf
                       <input type="text" name="name" maxlength="256" placeholder="Your name" class="input-client-form input" autocomplete="off">
                      <label for="email" class="email-valid">
                        <input type="email" id="email" name="email" maxlength="256" placeholder="Email" class="input-client-form input" autocomplete="off">
                      </label>
                       <textarea  id="textarea" name="question" type="text" maxlength="256" placeholder="Tell us about your project" class="input-client-form input" autocomplete="off"></textarea>
                       <!-- <input type="submit" value="Get in Touch" class="input-submit-client-form disabled_js" disabled>> -->
                       <button type="submit" class="input-submit-client-form disabled_js" disabled >Get in Touch</button>
                     </form>
                     <div class="success-message">
                        <p class="success-message__text">Thank you! We received the contact request from you.</p>
                     </div>
                     <div class="error-message">
                        <p class="error-message__text">Oops! Something went wrong while submitting the form.</p>
                     </div>
                  </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="bottom-footer">
		  <div class="mcontainer">
		  	<div class="bottom-footer__content-wrap">
		  		<div class="bottom-footer__content-privacy">Privacy Policy</div>
		  		<div class="bottom-footer__content-copirate">@2020 UXBee OÜ, <span>All rights reserved</span></div>
		  	</div>
		  </div>
	</div>
  </footer>


  <!--  -->
</div>

<!--  -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

<script>window.jQuery || document.write('<script src="{{ asset('js/vendor/jquery-3.2.1.min.js') }}"><\/script>')</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.13.4/jquery.mask.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-viewport-checker/1.8.8/jquery.viewportchecker.min.js"></script>
<script src="https://rawgit.com/jackmoore/autosize/master/dist/autosize.min.js"></script>
<!-- <script src="js/dropzone.min.js"></script> -->

<script type="text/javascript" src="{{ asset('js/index.min.js') }}"></script>

</body>
</html>