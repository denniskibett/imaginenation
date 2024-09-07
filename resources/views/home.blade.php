@extends('layouts.master')
@section('title', 'ImagineNation Home')
@section('content')

<!DOCTYPE html>
<html lang="en" class="no-js" >
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IMagine-nation Agency Ltd</title>

    <script>
        document.documentElement.classList.remove('no-js');
        document.documentElement.classList.add('js');
    </script>

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/styles.css">

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">

</head>

<body id="top">


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader">
        </div>
    </div>


    <!-- page wrap
    ================================================== -->
    



        <!-- # site header 
        ================================================== -->
        


        <!-- # intro 
        ================================================== -->
        <section id="intro" class="s-intro target-section">

            <div class="row">
                <div class="column">
                    <div class="s-intro__top-block">
                        <span class="s-intro__bg"></span>

                        <h1 class="s-intro__text">
                            We're a creative group <br>
                            of people who design <br>
                            influential brands and <br>
                            digital experiences<span>.</span>
                        </h1>

                        <a href="#services" class="s-intro__scroll-down smoothscroll">
                            <span>Scroll Down</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:rotate(180deg);-ms-filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=2)"><path d="M21 11L6.414 11 11.707 5.707 10.293 4.293 2.586 12 10.293 19.707 11.707 18.293 6.414 13 21 13z"></path></svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row row-x-center s-intro__about-wrap">
                <div class="column s-intro__about">
                    <h2 class="s-intro__about-title">Hello, We Are IMagine-nation Agency Ltd.</h2>

                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do 
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut 
                    enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
                    pariatur. Excepteur sint occaecat.
                    </p>

                </div>
            </div>

            <div class="row about-stats stats block-lg-one-fourth block-md-one-half block-mob-whole" data-animate-block>
                
                <div class="column stats__item" data-animate-el>
                    <div class="stats__count" data-counter=30><span>30</span>+</div>
                    <h5>Happy Customers</h5>
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing 
                    elit, sed do eiusmod tempor incididunt ut labore et dolore 
                    magna aliqua. Ut enim ad minim veniam.
                    </p>
                </div>
                <div class="column stats__item" data-animate-el>
                    <div class="stats__count" data-counter=35><span>35</span>+</div>
                    <h5>Hours Work</h5>
                    <p>
                    Eleifend donec pretium vulputate sapien nec sagittis 
                    aliquam malesuada. Eu scelerisque felis imperdiet proin 
                    fermentum leo. Cursus turpis massa tincidunt.
                    </p>
                </div>
                <div class="column stats__item" data-animate-el>
                    <div class="stats__count" data-counter=41><span>41</span>+</div>
                    <h5>Coffee Drinks</h5>
                    <p>
                    Volutpat commodo sed egestas egestas fringilla phasellus 
                    faucibus scelerisque. Est velit egestas dui id ornare. 
                    Leo urna molestie at elementum.
                    </p>
                </div>
                <div class="column stats__item" data-animate-el>
                    <div class="stats__count" data-counter=38><span>38</span>+</div>
                    <h5>Completed Projects</h5> 
                    <p>
                    Nulla pharetra diam sit amet nisl suscipit adipiscing 
                    bibendum est. Quis risus sed vulputate odio ut. 
                    Lectus arcu bibendum at varius vel eu facilisis.
                    </p>
                </div>
    
            </div> <!-- end about-stats -->

        </section> <!-- end s-intro -->


        <!-- # services
        ================================================== -->
        <section id="services" class="s-services target-section">

            <div class="row section-header has-bottom-sep">
                <div class="column lg-12">
                    <h3 class="text-pretitle">What We Do</h3>
                    <h1 class="text-display-title">
                        We’ve got everything you <br>
                        need to launch and grow <br>
                        your business
                    </h1>
                </div>
            </div> <!-- end section-header -->
    
            <div class="row services-list block-lg-one-half block-tab-whole" data-animate-block>
    
                <div class="column service-item" data-animate-el>
                    <div class="service-icon-block">
                        <span class="service-icon service-icon--product-design"></span>
                    </div>
                    <div class="service-text">
                        <h3 class="h4">Product Design</h3>
                        <p>Nemo cupiditate ab quibusdam quaerat impedit magni. Earum suscipit ipsum laudantium. 
                        Quo delectus est. Maiores voluptas ab sit natus veritatis ut. Debitis nulla cumque veritatis.
                        Sunt suscipit voluptas ipsa in tempora esse soluta sint aliquam rhoncus elit.
                        </p>
                    </div>
                </div>
    
                <div class="column service-item" data-animate-el>
                    <div class="service-icon-block">
                        <span class="service-icon service-icon--branding"></span>
                    </div>
                    <div class="service-text">
                        <h3 class="h4">Branding</h3>
                        <p>Nulla pharetra diam sit amet nisl suscipit adipiscing bibendum est. Quis risus sed vulputate 
                        odio ut. Lectus arcu bibendum at varius vel. Lorem ipsum dolor sit amet consectetur adipiscing 
                        elit pellentesque. In nulla posuere sollicitudin aliquam ultrices.
                        </p>
                    </div>
                </div>
    
                <div class="column service-item" data-animate-el>
                    <div class="service-icon-block">
                        <span class="service-icon service-icon--frontend"></span>
                    </div>
                    <div class="service-text">
                        <h3 class="h4">Frontend Development</h3>
                        <p>Eleifend donec pretium vulputate sapien nec sagittis aliquam malesuada. Eu scelerisque felis 
                        imperdiet proin fermentum leo. Cursus turpis massa tincidunt dui. Quis commodo odio aenean sed 
                        adipiscing diam donec adipiscing. Congue mauris rhoncus elit.
                        </p>
                    </div>
                </div>
    
                <div class="column service-item" data-animate-el>
                    <div class="service-icon-block">
                        <span class="service-icon service-icon--research"></span>
                    </div>
                    <div class="service-text">
                        <h3 class="h4">UX Research</h3>
                        <p>Nemo cupiditate ab quibusdam quaerat impedit magni. Earum suscipit ipsum laudantium. 
                        Quo delectus est. Maiores voluptas ab sit natus veritatis ut. Debitis nulla cumque veritatis.
                        Sunt suscipit voluptas ipsa in tempora esse soluta sint donec adipiscing.
                        </p>
                    </div>
                </div>
    
                <div class="column service-item" data-animate-el>
                    <div class="service-icon-block">
                        <span class="service-icon service-icon--illustration"></span>
                    </div>
                    <div class="service-text">
                        <h3 class="h4">Illustration</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                        ut labore et dolore magna aliqua. Venenatis lectus magna fringilla urna. Lectus vestibulum 
                        mattis ullamcorper velit sed ullamcorper morbi. Sit amet aliquam.
                        </p>
                    </div>
                </div>
        
                <div class="column service-item" data-animate-el>
                    <div class="service-icon-block">
                        <span class="service-icon service-icon--ecommerce"></span>
                    </div>
                    <div class="service-text">
                        <h3 class="h4">E-Commerce</h3>
                        <p>Nullam eget felis eget nunc. Adipiscing commodo elit at imperdiet dui accumsan. Condimentum 
                        mattis pellentesque id nibh tortor id aliquet lectus proin. Orci eu lobortis elementum nibh 
                        tellus. Tortor vitae purus faucibus ornare suspendisse.
                        </p>
                    </div>
                </div>
    
            </div> <!-- end services-list -->

        </section> <!-- end s-services -->


        <!-- ## works
        ================================================== -->
        <section id="works" class="s-works target-section">

            <div class="row section-header section-header--dark has-bottom-sep">
                <div class="column lg-12">
                    <h3 class="text-pretitle">Recent Works</h3>
                    <h1 class="text-display-title">Here are some of our favorite projects we have done lately. Feel free to  check them out.</h1>
                </div>
            </div> <!-- end section-header -->

            <div class="row folio-list block-lg-one-third block-tab-one-half block-stack-on-550 collapse" data-animate-block>

                <div class="column">
                    <div class="folio-item" data-animate-el>
                        <div class="folio-item__thumb">
                            <a class="folio-item__thumb-link" href="images/portfolio/gallery/g-tulips.jpg" title="The Red Wheel" data-size="1050x700">
                                <img src="images/portfolio/tulips.jpg" 
                                     srcset="images/portfolio/tulips.jpg 1x, images/portfolio/tulips@2x.jpg 2x" alt="">
                            </a>
                        </div>
                        <div class="folio-item__info">
                            <div class="folio-item__cat">Branding</div>
                            <h4 class="folio-item__title">Coffee & Tulips</h4>
                        </div>
                        <a href="https://www.behance.net/" title="Project Link" class="folio-item__project-link">Project Link</a>
                        <div class="folio-item__caption">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </div>
                    </div>
                </div> <!-- end column -->
                <div class="column">
                    <div class="folio-item" data-animate-el>
                        <div class="folio-item__thumb">
                            <a class="folio-item__thumb-link" href="images/portfolio/gallery/g-minimalismo.jpg" title="Music Life" data-size="1050x700">
                                <img src="images/portfolio/minimalismo.jpg" 
                                     srcset="images/portfolio/minimalismo.jpg 1x, images/portfolio/minimalismo@2x.jpg 2x" alt="">
                            </a>
                        </div>
                        <div class="folio-item__info">
                            <div class="folio-item__cat">Frontend Design</div>
                            <h4 class="folio-item__title">Minimalismo</h4>
                        </div>
                        <a href="https://www.behance.net/" title="Project Link" class="folio-item__project-link">Project Link</a>
                        <div class="folio-item__caption">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </div>
                    </div>
                </div> <!-- end column -->
                <div class="column">
                    <div class="folio-item" data-animate-el>
                        <div class="folio-item__thumb">
                            <a class="folio-item__thumb-link" href="images/portfolio/gallery/g-skaterboy.jpg" Title="OI Logo" data-size="1050x700">
                                <img src="images/portfolio/skaterboy.jpg" 
                                     srcset="images/portfolio/skaterboy.jpg 1x, images/portfolio/skaterboy@2x.jpg 2x" alt="">
                            </a>
                        </div>
                        <div class="folio-item__info">
                            <div class="folio-item__cat">Product Design</div>
                            <h4 class="folio-item__title">Skaterboy</h4>
                        </div>
                        <a href="https://www.behance.net/" title="Project Link" class="folio-item__project-link">Project Link</a>
                        <div class="folio-item__caption">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </div>
                    </div>
                </div> <!-- end column -->
                <div class="column">
                    <div class="folio-item" data-animate-el>
                        <div class="folio-item__thumb">
                            <a class="folio-item__thumb-link" href="images/portfolio/gallery/g-rucksack.jpg" title="Corrugated Sheets" data-size="1050x700">
                                <img src="images/portfolio/rucksack.jpg" 
                                     srcset="images/portfolio/rucksack.jpg 1x, images/portfolio/rucksack@2x.jpg 2x" alt="">
                            </a>
                        </div>
                        <div class="folio-item__info">
                            <div class="folio-item__cat">Frontend Design</div>
                            <h4 class="folio-item__title">Rucksack</h4>
                        </div>
                        <a href="https://www.behance.net/" title="Project Link" class="folio-item__project-link">Project Link</a>
                        <div class="folio-item__caption">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </div>
                    </div>
                </div> <!-- end column -->
                <div class="column">
                    <div class="folio-item" data-animate-el>
                        <div class="folio-item__thumb">
                            <a class="folio-item__thumb-link" href="images/portfolio/gallery/g-woodcraft.jpg" title="Sand Dunes" data-size="1050x700">
                                <img src="images/portfolio/woodcraft.jpg" 
                                     srcset="images/portfolio/woodcraft.jpg 1x, images/portfolio/woodcraft@2x.jpg 2x" alt="">
                            </a>
                        </div>
                        <div class="folio-item__info">
                            <div class="folio-item__cat">E-Commerce</div>
                            <h4 class="folio-item__title">Wooocraft</h4>
                        </div>
                        <a href="https://www.behance.net/" title="Project Link" class="folio-item__project-link">
                            Project Link
                        </a>
                        <div class="folio-item__caption">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </div>
                    </div>
                </div> <!-- end column -->
                <div class="column">
                    <div class="folio-item" data-animate-el>
                        <div class="folio-item__thumb">
                            <a class="folio-item__thumb-link" href="images/portfolio/gallery/g-lamp.jpg" title="The Lamp" data-size="1050x700">
                                <img src="images/portfolio/lamp.jpg" 
                                     srcset="images/portfolio/lamp.jpg 1x, images/portfolio/lamp@2x.jpg 2x" alt="">
                            </a>
                        </div>
                        <div class="folio-item__info">
                            <div class="folio-item__cat">Product Design</div>
                            <h4 class="folio-item__title">The Lamp</h4>
                        </div>
                        <a href="https://www.behance.net/" title="Project Link" class="folio-item__project-link">Project Link</a>
                        <div class="folio-item__caption">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </div>
                    </div>
                </div> <!-- end column -->
                <div class="column">
                    <div class="folio-item" data-animate-el>
                        <div class="folio-item__thumb">
                            <a class="folio-item__thumb-link" href="images/portfolio/gallery/g-grayscale.jpg" title="The Lamp" data-size="1050x700">
                                <img src="images/portfolio/grayscale.jpg" 
                                     srcset="images/portfolio/grayscale.jpg 1x, images/portfolio/grayscale@2x.jpg 2x" alt="">
                            </a>
                        </div>
                        <div class="folio-item__info">
                            <div class="folio-item__cat">Frontend Design</div>
                            <h4 class="folio-item__title">Grayscale</h4>
                        </div>
                        <a href="https://www.behance.net/" title="Project Link" class="folio-item__project-link">Project Link</a>
                        <div class="folio-item__caption">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </div>
                    </div>
                </div> <!-- end column -->
                <div class="column">
                    <div class="folio-item" data-animate-el>
                        <div class="folio-item__thumb">
                            <a class="folio-item__thumb-link" href="images/portfolio/gallery/g-shutterbug.jpg" title="The Red Wheel" data-size="1050x700">
                                <img src="images/portfolio/shutterbug.jpg" 
                                     srcset="images/portfolio/shutterbug.jpg 1x, images/portfolio/shutterbug@2x.jpg 2x" alt="">
                            </a>
                        </div>
                        <div class="folio-item__info">
                            <div class="folio-item__cat">Branding</div>
                            <h4 class="folio-item__title">Lady Shutterbug</h4>
                        </div>
                        <a href="https://www.behance.net/" title="Project Link" class="folio-item__project-link">Project Link</a>
                        <div class="folio-item__caption">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </div>
                    </div>
                </div> <!-- end column -->
                <div class="column">
                    <div class="folio-item" data-animate-el>
                        <div class="folio-item__thumb">
                            <a class="folio-item__thumb-link" href="images/portfolio/gallery/g-fuji.jpg" title="The Lamp" data-size="1050x700">
                                <img src="images/portfolio/fuji.jpg" 
                                     srcset="images/portfolio/fuji.jpg 1x, images/portfolio/fuji@2x.jpg 2x" alt="">
                            </a>
                        </div>
                        <div class="folio-item__info">
                            <div class="folio-item__cat">Frontend Design</div>
                            <h4 class="folio-item__title">Retro Cam</h4>
                        </div>
                        <a href="https://www.behance.net/" title="Project Link" class="folio-item__project-link">Project Link</a>
                        <div class="folio-item__caption">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </div>
                    </div>
                </div> <!-- end column -->
    
            </div> <!-- folio-list -->

            <div class="row clients-outer" data-animate-block>
                <div class="column lg-12">

                    <h3 class="text-clients-title" data-animate-el>
                        We've had the priveledge with working with <br> 
                        some of the largest and most iconic brands
                    </h3>

                    <div class="swiper-container clients" data-animate-el>
                        <div class="swiper-wrapper clients__content">
                            <a href="#0" title="" class="swiper-slide clients__slide"><img src="images/icons/clients/dropbox.svg" /></a>
                            <a href="#0" title="" class="swiper-slide clients__slide"><img src="images/icons/clients/atom.svg" /></a>
                            <a href="#0" title="" class="swiper-slide clients__slide"><img src="images/icons/clients/github.svg" /></a>
                            <a href="#0" title="" class="swiper-slide clients__slide"><img src="images/icons/clients/redhat.svg" /></a>
                            <a href="#0" title="" class="swiper-slide clients__slide"><img src="images/icons/clients/medium.svg" /></a>
                            <a href="#0" title="" class="swiper-slide clients__slide"><img src="images/icons/clients/messenger.svg" /></a>
                            <a href="#0" title="" class="swiper-slide clients__slide"><img src="images/icons/clients/steam.svg" /></a>
                            <a href="#0" title="" class="swiper-slide clients__slide"><img src="images/icons/clients/spotify.svg" /></a>
                        </div>

                        <div class="swiper-pagination"></div>
                    </div> <!-- end clients -->

                </div> <!-- end column -->
            </div> <!-- end clients-outer -->

            <div class="video-block">
                <span class="video-block__bg-left"></span>
                <span class="video-block__bg-right"></span>

                <div class="video-block__content">
                    <a href="https://player.vimeo.com/video/14592941?color=00a650&title=0&byline=0&portrait=0" class="video-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M7 6L7 18 17 12z"></path></svg>
                    </a>

                    <p class="video-caption">
                        Watch Video
                    </p>
                </div>
            </div> <!-- end video-block -->

            <div class="row testimonials" data-animate-block>
                <div class="column lg-12">
    
                    <div class="swiper-container testimonial-slider" data-animate-el>
    
                        <div class="swiper-wrapper">

                            <div class="testimonial-slider__slide swiper-slide">
                                <div class="testimonial-slider__author">
                                    <img src="images/avatars/user-02.jpg" alt="Author image" class="testimonial-slider__avatar">
                                    <cite class="testimonial-slider__cite">
                                        <strong>Tim Cook</strong>
                                        <span>CEO, Apple</span>
                                    </cite>
                                </div>
                                <p>
                                Molestiae incidunt consequatur quis ipsa autem nam sit enim magni. Voluptas tempore rem. 
                                Explicabo a quaerat sint autem dolore ducimus ut consequatur neque. Nisi dolores quaerat fuga rem nihil nostrum.
                                Laudantium quia consequatur molestias.
                                </p>
                            </div> <!-- end testimonial-slider__slide -->
            
                            <div class="testimonial-slider__slide swiper-slide">
                                <div class="testimonial-slider__author">
                                    <img src="images/avatars/user-03.jpg" alt="Author image" class="testimonial-slider__avatar">
                                    <cite class="testimonial-slider__cite">
                                        <strong>Sundar Pichai</strong>
                                        <span>CEO, Google</span>
                                    </cite>
                                </div>
                                <p>
                                Excepturi nam cupiditate culpa doloremque deleniti repellat. Veniam quos repellat voluptas animi adipisci.
                                Nisi eaque consequatur. Voluptatem dignissimos ut ducimus accusantium perspiciatis.
                                Quasi voluptas eius distinctio. Atque eos maxime.
                                </p>
                            </div> <!-- end testimonial-slider__slide -->
            
                            <div class="testimonial-slider__slide swiper-slide">
                                <div class="testimonial-slider__author">
                                    <img src="images/avatars/user-01.jpg" alt="Author image" class="testimonial-slider__avatar">
                                    <cite class="testimonial-slider__cite">
                                        <strong>Satya Nadella</strong>
                                        <span>CEO, Microsoft</span>
                                    </cite>
                                </div>
                                <p>
                                Repellat dignissimos libero. Qui sed at corrupti expedita voluptas odit. Nihil ea quia nesciunt. Ducimus aut sed ipsam.  
                                Autem eaque officia cum exercitationem sunt voluptatum accusamus. Quasi voluptas eius distinctio.
                                Voluptatem dignissimos ut.
                                </p>
                            </div> <!-- end testimonial-slider__slide -->
    
                            <div class="testimonial-slider__slide swiper-slide">
                                <div class="testimonial-slider__author">
                                    <img src="images/avatars/user-06.jpg" alt="Author image" class="testimonial-slider__avatar">
                                    <cite class="testimonial-slider__cite">
                                        <strong>Jeff Bezos</strong>
                                        <span>CEO, Amazon</span>
                                    </cite>
                                </div>
                                <p>
                                Nunc interdum lacus sit amet orci. Vestibulum dapibus nunc ac augue. Fusce vel dui. In ac felis 
                                quis tortor malesuada pretium. Curabitur vestibulum aliquam leo. Qui sed at corrupti expedita voluptas odit. 
                                Nihil ea quia nesciunt. Ducimus aut sed ipsam.
                                </p>
                            </div> <!-- end testimonial-slider__slide -->
        
                        </div> <!-- end swiper-wrapper -->
    
                        <div class="swiper-pagination"></div>
    
                    </div> <!-- end swiper-container -->
    
                </div> <!-- end column -->
            </div> <!-- end row testimonials -->

        </section> <!-- end s-works -->


        <!-- ## contact
        ================================================== -->
        <section id="contact" class="s-contact target-section">

            <div class="row section-header section-header--dark"">
                <div class="column lg-12">
                    <h3 class="text-pretitle">Get In Touch</h3>
                    <h1 class="text-display-title">
                        Do you have an idea or an epic project in mind? Let’s work together.
                    </h1>
                </div>
            </div>

            <div class="row row-x-center text-center s-contact__content">
                <div class="column lg-12">
                    <p class="lead">
                    Nunc interdum lacus sit amet orci. Vestibulum dapibus nunc ac augue. Fusce vel dui. In ac felis 
                    quis tortor malesuada pretium. Curabitur vestibulum aliquam leo. Quasi sed at voluptas corrupti eius distinctio.
                    </p>
                    <div class="btn-wrap">
                        <a href="#0" class="btn btn--primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M20,4H4C2.897,4,2,4.897,2,6v12c0,1.103,0.897,2,2,2h16c1.103,0,2-0.897,2-2V6C22,4.897,21.103,4,20,4z M20,6v0.511 l-8,6.223L4,6.512V6H20z M4,18V9.044l7.386,5.745C11.566,14.93,11.783,15,12,15s0.434-0.07,0.614-0.211L20,9.044L20.002,18H4z"></path></svg>
                            Write An Email
                        </a>
                    </div>
                </div>
            </div>

            <footer class="s-footer">

                <div class="row s-footer__top">
                    <div class="column lg-5 md-8 stack-on-700 s-footer__block contact-address">
                        <h4 class="h6">Where to Find Us</h4>
        
                        <p>
                        1600 Amphitheatre Parkway <br>
                        Mountain View, California <br>
                        94043  US
                        </p>
                    </div>

                    <div class="column lg-3 md-4 stack-on-700 s-footer__block contact-social">
                        <h4 class="h6">Follow Us</h4>
        
                        <ul class="contact-list">
                            <li><a href="#0">Facebook</a></li>
                            <li><a href="#0">Twitter</a></li>
                            <li><a href="#0">Instagram</a></li>
                        </ul>
                    </div>
        
                    <div class="column lg-3 md-12 s-footer__block contact-number">
                        <h4 class="h6">Contact Us</h4>
        
                        <ul class="contact-list">
                            <li><a href="mailto:#0">info@IMagine-nation Agency Ltd.com</a></li>
                            <li><a href="tel:197-543-2345">+197 543 2345</a></li>
                            <li><a href="tel:197-123-9876">+197 123 9876</a></li>
                        </ul>
                    </div>
                </div> <!-- end s-footer__top -->

                <div class="row s-footer__bottom">
                    <div class="column ss-copyright">
                        <span>© Copyright IMagine-nation Agency Ltd 2021</span> 
                        <span>Design by <a href="https://www.styleshout.com/">StyleShout</a></span>
                    </div>

                    <div class="ss-go-top">
                        <a class="smoothscroll" title="Back to Top" href="#top">
                            <span class="ss-go-top__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:rotate(90deg);-ms-filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=1)"><path d="M6 4H18V6H6zM11 14L11 20 13 20 13 14 18 14 12 8 6 14z"></path></svg>
                            </span>
                            <span class="ss-go-top__text">Back to Top</span>
                        </a>
                    </div>
                </div> <!-- end s-footer__top -->

            </footer>

        </section> <!-- end s-contact -->

    </div> <!-- end -s-pagewrap -->


    @endsection



    <!-- Java Script
    ================================================== -->
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>
</html>
