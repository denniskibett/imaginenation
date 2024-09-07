<!DOCTYPE html>
<html lang="en" class="no-js" >
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IMagine-nation Agency Ltd - Styles</title>

    <script>
        document.documentElement.classList.remove('no-js');
        document.documentElement.classList.add('js');
    </script>

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/styles.css">

    <style type="text/css" media="screen">
        .s-styles {
            padding-top: var(--vspace-5);
            padding-bottom: var(--vspace-4);
            position: relative;
        }
        .s-styles .intro h1 {
            margin-top: 0;
        }
    </style>

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
    <div class="s-pagewrap">


        <!-- # site header 
        ================================================== -->
        <header class="s-header">

            <div class="s-header__block">
                <div class="s-header__logo">
                    <a class="logo" href="index.html">
                        <img src="images/logo.svg" alt="Homepage">
                    </a>
                </div>

                <a class="s-header__menu-toggle" href="#0"><span>Menu</span></a>
            </div> <!-- end s-header__block -->

            <div class="row s-header__nav-wrap">
                <nav class="s-header__nav">
                    <ul>
                        <li class="current"><a href="index.html#intro">Intro</a></li>
                        <li><a href="index.html#services">What We Do</a></li>
                        <li><a href="index.html#works">Our Works</a></li>
                        <li><a href="#contact" class="smoothscroll">Get In Touch</a></li>
                    </ul>
                </nav>

                <ul class="s-header__social">
                    <li>
                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M20,3H4C3.447,3,3,3.448,3,4v16c0,0.552,0.447,1,1,1h8.615v-6.96h-2.338v-2.725h2.338v-2c0-2.325,1.42-3.592,3.5-3.592 c0.699-0.002,1.399,0.034,2.095,0.107v2.42h-1.435c-1.128,0-1.348,0.538-1.348,1.325v1.735h2.697l-0.35,2.725h-2.348V21H20 c0.553,0,1-0.448,1-1V4C21,3.448,20.553,3,20,3z"></path></svg>
                            <span class="screen-reader-text">Facebook</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M19.633,7.997c0.013,0.175,0.013,0.349,0.013,0.523c0,5.325-4.053,11.461-11.46,11.461c-2.282,0-4.402-0.661-6.186-1.809 c0.324,0.037,0.636,0.05,0.973,0.05c1.883,0,3.616-0.636,5.001-1.721c-1.771-0.037-3.255-1.197-3.767-2.793 c0.249,0.037,0.499,0.062,0.761,0.062c0.361,0,0.724-0.05,1.061-0.137c-1.847-0.374-3.23-1.995-3.23-3.953v-0.05 c0.537,0.299,1.16,0.486,1.82,0.511C3.534,9.419,2.823,8.184,2.823,6.787c0-0.748,0.199-1.434,0.548-2.032 c1.983,2.443,4.964,4.04,8.306,4.215c-0.062-0.3-0.1-0.611-0.1-0.923c0-2.22,1.796-4.028,4.028-4.028 c1.16,0,2.207,0.486,2.943,1.272c0.91-0.175,1.782-0.512,2.556-0.973c-0.299,0.935-0.936,1.721-1.771,2.22 c0.811-0.088,1.597-0.312,2.319-0.624C21.104,6.712,20.419,7.423,19.633,7.997z"></path></svg>
                            <span class="screen-reader-text">Twitter</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M11.999,7.377c-2.554,0-4.623,2.07-4.623,4.623c0,2.554,2.069,4.624,4.623,4.624c2.552,0,4.623-2.07,4.623-4.624 C16.622,9.447,14.551,7.377,11.999,7.377L11.999,7.377z M11.999,15.004c-1.659,0-3.004-1.345-3.004-3.003 c0-1.659,1.345-3.003,3.004-3.003s3.002,1.344,3.002,3.003C15.001,13.659,13.658,15.004,11.999,15.004L11.999,15.004z"></path><circle cx="16.806" cy="7.207" r="1.078"></circle><path d="M20.533,6.111c-0.469-1.209-1.424-2.165-2.633-2.632c-0.699-0.263-1.438-0.404-2.186-0.42 c-0.963-0.042-1.268-0.054-3.71-0.054s-2.755,0-3.71,0.054C7.548,3.074,6.809,3.215,6.11,3.479C4.9,3.946,3.945,4.902,3.477,6.111 c-0.263,0.7-0.404,1.438-0.419,2.186c-0.043,0.962-0.056,1.267-0.056,3.71c0,2.442,0,2.753,0.056,3.71 c0.015,0.748,0.156,1.486,0.419,2.187c0.469,1.208,1.424,2.164,2.634,2.632c0.696,0.272,1.435,0.426,2.185,0.45 c0.963,0.042,1.268,0.055,3.71,0.055s2.755,0,3.71-0.055c0.747-0.015,1.486-0.157,2.186-0.419c1.209-0.469,2.164-1.424,2.633-2.633 c0.263-0.7,0.404-1.438,0.419-2.186c0.043-0.962,0.056-1.267,0.056-3.71s0-2.753-0.056-3.71C20.941,7.57,20.801,6.819,20.533,6.111z M19.315,15.643c-0.007,0.576-0.111,1.147-0.311,1.688c-0.305,0.787-0.926,1.409-1.712,1.711c-0.535,0.199-1.099,0.303-1.67,0.311 c-0.95,0.044-1.218,0.055-3.654,0.055c-2.438,0-2.687,0-3.655-0.055c-0.569-0.007-1.135-0.112-1.669-0.311 c-0.789-0.301-1.414-0.923-1.719-1.711c-0.196-0.534-0.302-1.099-0.311-1.669c-0.043-0.95-0.053-1.218-0.053-3.654 c0-2.437,0-2.686,0.053-3.655c0.007-0.576,0.111-1.146,0.311-1.687c0.305-0.789,0.93-1.41,1.719-1.712 c0.534-0.198,1.1-0.303,1.669-0.311c0.951-0.043,1.218-0.055,3.655-0.055c2.437,0,2.687,0,3.654,0.055 c0.571,0.007,1.135,0.112,1.67,0.311c0.786,0.303,1.407,0.925,1.712,1.712c0.196,0.534,0.302,1.099,0.311,1.669 c0.043,0.951,0.054,1.218,0.054,3.655c0,2.436,0,2.698-0.043,3.654H19.315z"></path></svg>
                            <span class="screen-reader-text">Instagram</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M20.66,6.98c-0.894-1.533-2.107-2.747-3.641-3.64C15.486,2.447,13.813,2,12,2S8.514,2.447,6.98,3.34 C5.447,4.233,4.233,5.447,3.34,6.98S2,10.187,2,12s0.446,3.487,1.34,5.02c0.894,1.534,2.107,2.747,3.641,3.64 C8.514,21.553,10.187,22,12,22s3.486-0.447,5.02-1.34c1.533-0.893,2.747-2.106,3.641-3.64C21.554,15.487,22,13.813,22,12 S21.554,8.513,20.66,6.98z M12,3.66c2,0,3.772,0.64,5.32,1.919c-0.92,1.174-2.286,2.14-4.1,2.9c-1.002-1.813-2.088-3.327-3.261-4.54 C10.641,3.753,11.319,3.66,12,3.66z M5.51,6.8c0.754-0.947,1.656-1.686,2.711-2.22c1.212,1.201,2.325,2.7,3.34,4.5 c-2,0.6-4.114,0.9-6.341,0.9c-0.573,0-1.006-0.013-1.3-0.04C4.227,8.793,4.757,7.747,5.51,6.8z M3.66,12 c0-0.054,0.003-0.12,0.01-0.2c0.007-0.08,0.01-0.146,0.01-0.2c0.254,0.014,0.641,0.02,1.161,0.02c2.666,0,5.146-0.367,7.439-1.1 c0.187,0.373,0.381,0.793,0.58,1.26c-1.32,0.293-2.674,1.006-4.061,2.14S6.4,16.247,5.76,17.5C4.36,15.913,3.66,14.08,3.66,12z M12,20.34c-1.894,0-3.594-0.587-5.101-1.759C7.5,17.394,8.423,16.259,9.67,15.18c1.246-1.08,2.483-1.753,3.71-2.02 c0.772,2.133,1.293,4.339,1.56,6.62C13.966,20.153,12.986,20.34,12,20.34z M19.08,16.38c-0.666,1.066-1.526,1.94-2.58,2.621 c-0.24-2.08-0.7-4.107-1.379-6.081c0.932-0.066,1.765-0.1,2.5-0.1c0.799,0,1.686,0.034,2.659,0.1 C20.146,14.16,19.746,15.313,19.08,16.38z M17.84,11.38c-1.16,0-2.233,0.047-3.22,0.14c-0.254-0.653-0.48-1.193-0.68-1.62 c2.066-0.906,3.532-2.006,4.399-3.3c1.2,1.414,1.854,3.027,1.96,4.84C19.487,11.4,18.667,11.38,17.84,11.38z"></path></svg>
                            <span class="screen-reader-text">Dribbble</span>
                        </a>
                    </li>
                </ul>
            </div> <!-- end s-header__nav-wrap -->

        </header> <!-- end s-header -->


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

                        <a href="#styles" class="s-intro__scroll-down smoothscroll">
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


        <!-- # styles
        ================================================== -->
        <div id="styles" class="s-styles">

            <div class="row">

                <div class="column lg-12 intro">

                    <h1>Style Guide.</h1>

                    <p class="lead">Lorem ipsum Officia elit ad tempor dolore est ex incididunt incididunt occaecat culpa deserunt 
                    sunt labore in cillum ullamco magna in Excepteur consequat in reprehenderit proident mollit incididunt officia commodo.
                    Duis ea officia sed dolor pariatur enim dolore dolore quis incididunt nulla exercitation commodo veniam et ea incididunt.
                    </p>

                    <hr>
                </div>

            </div> <!-- end row -->

            <div class="row">

                <div class="column lg-6 tab-12">

                    <h3>Paragraph and Image</h3>

                    <p><a href="#"><img width="120" height="120" class="u-pull-left" alt="sample-image" src="images/sample-image.jpg"></a>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum.Cras id urna. Morbi 
                    tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu posuere nunc justo tempus leo. Donec mattis, 
                    purus nec placerat bibendum, dui pede condimentum odio, ac blandit ante orci ut diam. Cras fringilla magna. 
                    Phasellus suscipit, leo a pharetra condimentum, lorem tellus eleifend magna, eget fringilla velit magna id 
                    neque posuere nunc justo tempus leo. </p>

                    <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. Cras id urna. 
                    Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu posuere nunc justo tempus leo. 
                    Donec mattis, purus nec placerat bibendum, dui pede condimentumodio, ac blandit ante orci ut diam.	
                    </p>

                    <p>A <a href="#">link</a>,
                    <abbr title="this really isn't a very good description">abbrebation</abbr>,
                    <strong>strong text</strong>,
                    <em>em text</em>,
                    <del>deleted text</del>, and
                    <mark>this is a mark text.</mark>
                    <code>.code</code>
                    </p>

                </div>

                <div class="column lg-6 tab-12">

                    <h3>Drop Caps</h3>

                    <p class="drop-cap">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                    there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the
                    Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the 
                    necessary regelialia. Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, 
                    euposuere nunc justo tempus leo. Donec mattis, purus nec placerat bibendum, dui pede condimentum odio, 
                    ac blandit ante orci ut diam. Cras fringilla magna. Phasellus suscipit, leo a pharetra condimentum, 
                    lorem tellus eleifend magna, eget fringilla velit magna id neque.
                    </p>

                    <h3>Small Print</h3>

                    <p><small>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero.</small></p>

                </div>

            </div> <!-- end row -->

            <div class="row">

                <div class="column lg-6 tab-12">

                    <h3 class="u-add-bottom">Pull Quotes</h3>

                    <p>
                    Perspiciatis nemo unde et nobis modi consequatur officia amet. Ut enim 
                    tenetur provident maiores. Perspiciatis asperiores incidunt sequi 
                    quisquam. Enim aut. 
                    </p>

                    <figure class="pull-quote">
                        <blockquote>
                            <p>
                            When you look in the eyes of grace, when you meet grace, 
                            when you embrace grace, when you see the nail prints in 
                            grace’s hands and the fire in his eyes, when you feel his 
                            relentless love for you - it will not motivate you to sin. 
                            It will motivate you to righteousness.
                            </p>

                            <footer>
                                <cite>Judah Smith</cite>
                            </footer>
                        </blockquote>
                    </figure>


                </div>

                <div class="column lg-6 tab-12">

                    <h3 class="u-add-bottom">Block Quotes</h3>

                    <blockquote cite="http://where-i-got-my-info-from.com">
                        <p>
                        For God so loved the world, that he gave his only Son, that whoever believes in 
                        him should not perish but have eternal life. For God did not send his Son into 
                        the world to condemn the world, but in order that the world might be 
                        saved through him.
                        </p>

                        <footer>
                            <cite>
                                <a href="#0">John 3:16-17 ESV</a>
                            </cite>
                        </footer>

                    </blockquote>

                    <blockquote>
                        <p>There is a God-shaped vacuum in the heart of each man which cannot be satisfied 
                        by any created thing but only by God the Creator.</p>

                        <footer>
                            <cite>Blaise Pascal</cite>
                        </footer>

                    </blockquote>

                </div>

            </div> <!-- end row -->

            <div class="row u-add-half-bottom">

                <div class="column lg-6 tab-12">

                    <h3>Example Lists</h3>

                    <ol>
                        <li>Here is an example</li>
                        <li>of an ordered list.</li>
                        <li>A parent list item.
                            <ul>
                                <li>one</li>
                                <li>two</li>
                                <li>three</li>
                            </ul>
                            </li>
                            <li>A list item.</li>
                        </ol>

                    <ul class="disc">
                        <li>Here is an example</li>
                        <li>of an unordered list.</li>
                    </ul>

                    <h3>Definition Lists</h3>

                    <h5>a) Multi-line Definitions (default) </h5>

                    <dl class="dictionary-style">
                        <dt><strong>This is a term</strong></dt>
                            <dd>this is the definition of that term, which both live in a <code>dl</code>.</dd>
                        <dt><strong>Another Term</strong></dt>
                            <dd>And it gets a definition too, which is this line</dd>
                            <dd>This is a 2<sup>nd</sup> definition for a single term. A <code>dt</code> may be followed by multiple <code>dd</code>s.</dd>
                    </dl>

                    <h3 class="u-add-bottom">Skill Bars</h3>

                    <ul class="skill-bars">
                        <li>
                        <div class="progress percent90"><span>90%</span></div>
                        <strong>HTML</strong>
                        </li>
                        <li>
                        <div class="progress percent85"><span>85%</span></div>
                        <strong>CSS</strong>
                        </li>
                        <li>
                        <div class="progress percent70"><span>70%</span></div>
                        <strong>Javascript</strong>
                        </li>
                        <li>
                        <div class="progress percent95"><span>95%</span></div>
                        <strong>PHP</strong>
                        </li>
                        <li>
                        <div class="progress percent75"><span>75%</span></div>
                        <strong>Illustrator</strong>
                        </li>
                        <li>
                        <div class="progress percent90"><span>90%</span></div>
                        <strong>Figma</strong>
                        </li>
                    </ul>

                </div>

                <div class="column lg-6 tab-12">

                    <h3 class="u-add-bottom">Buttons</h3>

                    <p>
                        <a class="btn btn--primary u-fullwidth" href="#0">Primary Button</a>
                        <a class="btn u-fullwidth" href="#0">Default Button</a>
                        <a class="btn btn--stroke u-fullwidth" href="#0">Stroke Button</a>
                    </p>

                    <h3>Stats Tabs</h3>

                    <ul class="stats-tabs">
                        <li><a href="#0">1,234 <em>Peter</em></a></li>
                        <li><a href="#0">567 <em>James</em></a></li>
                        <li><a href="#0">23,456 <em>John</em></a></li>
                        <li><a href="#0">3,456 <em>Andrew</em></a></li>
                        <li><a href="#0">456 <em>Philip</em></a></li>
                        <li><a href="#0">26 <em>Matthew</em></a></li>
                    </ul>

                    <h3 class="u-add-bottom">Code</h3>

<pre><code class="language-css">
    code {
    font-size: 1.4rem;
    margin: 0 .2rem;
    padding: .2rem .6rem;
    white-space: nowrap;
    background: #F1F1F1;
    border: 1px solid #E1E1E1;	
    border-radius: 3px;
    }
</code></pre>

                </div>

            </div> <!-- end row -->

            <div class="row u-add-half-bottom">

                <div class="column lg-6 tab-12">
                        
                    <h1>H1 Heading Doloremque dolor voluptas est sequi omnis.</h1>
                    <p>Doloremque dolor voluptas est sequi omnis. Pariatur ut aut. Sed enim tempora qui veniam qui cum vel. 
                    Voluptas odit at vitae minima. In assumenda ut. Voluptatem totam impedit accusantium reiciendis excepturi aut qui accusamus praesentium.</p>

                    <h2>H2 Heading Doloremque dolor voluptas est sequi omnis.</h2>
                    <p>Doloremque dolor voluptas est sequi omnis. Pariatur ut aut. Sed enim tempora qui veniam qui cum vel. 
                    Voluptas odit at vitae minima. In assumenda ut. Voluptatem totam impedit accusantium reiciendis excepturi aut qui accusamus praesentium.</p>

                    <h3>H3 Heading Doloremque dolor voluptas est sequi omnis.</h3>
                    <p>Doloremque dolor voluptas est sequi omnis. Pariatur ut aut. Sed enim tempora qui veniam qui cum vel. 
                    Voluptas odit at vitae minima. In assumenda ut. Voluptatem totam impedit accusantium reiciendis excepturi aut qui accusamus praesentium.</p>

                    
                </div>

                <div class="column lg-6 tab-12">
                    <h4>H4 Heading Doloremque dolor voluptas est sequi omnis.</h4>
                    <p>Doloremque dolor voluptas est sequi omnis. Pariatur ut aut. Sed enim tempora qui veniam qui cum vel. 
                    Voluptas odit at vitae minima. In assumenda ut. Voluptatem totam impedit accusantium reiciendis excepturi aut qui accusamus praesentium.</p>

                    <h5>H5 Heading Doloremque dolor voluptas est sequi omnis.</h5>
                    <p>Doloremque dolor voluptas est sequi omnis. Pariatur ut aut. Sed enim tempora qui veniam qui cum vel. 
                    Voluptas odit at vitae minima. In assumenda ut. Voluptatem totam impedit accusantium reiciendis excepturi aut qui accusamus praesentium.</p>

                    <h6>H6 Heading Doloremque dolor voluptas est sequi omnis.</h6>
                    <p>Doloremque dolor voluptas est sequi omnis. Pariatur ut aut. Sed enim tempora qui veniam qui cum vel. 
                    Voluptas odit at vitae minima. In assumenda ut. Voluptatem totam impedit accusantium reiciendis excepturi aut qui accusamus praesentium.</p>
        
                    
                </div>

            </div> <!-- end row -->

            <div class="row u-add-half-bottom">

                <div class="column lg-6 tab-12">

                    <h3 class="u-add-bottom">Responsive Image</h3>

                    <figure>
                        <img src="images/wheel-500.jpg" 
                        srcset="images/wheel-1000.jpg 1000w, 
                        images/wheel-500.jpg 500w" 
                        sizes="(max-width: 1000px) 100vw, 1000px" alt="">

                        <figcaption>
                            Here is some random picture.
                        </figcaption>
                    </figure>

                </div>

                <div class="column lg-6 tab-12">

                    <h3 class="u-add-bottom">Responsive video</h3>

                    <div class="video-container">
                    <iframe src="https://player.vimeo.com/video/14592941?color=00a650&title=0&byline=0&portrait=0" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> 
                    </div>

                </div>
                
            </div> <!-- end row -->

            <div class="row u-add-bottom">

                <div class="column lg-12">

                    <h3>Tables</h3>
                    <p>Be sure to use properly formed table markup with <code>&lt;thead&gt;</code> and <code>&lt;tbody&gt;</code> when building a <code>table</code>.</p>

                    <div class="table-responsive">

                        <table>
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Age</th>
                                    <th>Sex</th>
                                    <th>Location</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>William J. Seymour</td>
                                    <td>34</td>
                                    <td>Male</td>
                                    <td>Azusa Street</td>
                                </tr>
                                <tr>
                                    <td>Jennie Evans Moore</td>
                                    <td>30</td>
                                    <td>Female</td>
                                    <td>Azusa Street</td>
                                </tr>
                                </tbody>
                        </table>

                    </div>

                </div>
                
            </div> <!-- end row -->

            <div class="row">

                <div class="column lg-12">
                    <h3>Pagination</h3>

                    <nav class="pgn">
                        <ul>
                            <li>
                                <a class="pgn__prev" href="#0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12.707 17.293L8.414 13H18v-2H8.414l4.293-4.293-1.414-1.414L4.586 12l6.707 6.707z"/></svg>
                                </a>
                            </li>
                            <li><a class="pgn__num" href="#0">1</a></li>
                            <li><span class="pgn__num current">2</span></li>
                            <li><a class="pgn__num" href="#0">3</a></li>
                            <li><a class="pgn__num" href="#0">4</a></li>
                            <li><a class="pgn__num" href="#0">5</a></li>
                            <li><span class="pgn__num dots">…</span></li>
                            <li><a class="pgn__num" href="#0">8</a></li>
                            <li>
                                <a class="pgn__next" href="#0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M11.293 17.293l1.414 1.414L19.414 12l-6.707-6.707-1.414 1.414L15.586 11H6v2h9.586z"/></svg>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>

            </div> <!-- end row -->

            <div class="row">

                <div class="column lg-6 tab-12">

                    <h3 class="u-add-bottom">Form Styles</h3>

                    <form>
                        <div>
                            <label for="sampleInput">Your email</label>
                            <input class="u-fullwidth" type="email" placeholder="test@mailbox.com" id="sampleInput">
                        </div>
                        <div>
                            <label for="sampleRecipientInput">Reason for contacting</label>
                            <div class="ss-custom-select">
                                <select class="u-fullwidth" id="sampleRecipientInput">
                                    <option value="Option 1">Questions</option>
                                    <option value="Option 2">Report</option>
                                    <option value="Option 3">Others</option>
                                </select>
                            </div>
                        </div>
                        
                        <label for="exampleMessage">Message</label>
                        <textarea class="u-fullwidth" placeholder="Your message" id="exampleMessage"></textarea>

                        <label class="u-add-bottom">
                            <input type="checkbox">
                            <span class="label-text">Send a copy to yourself</span>
                        </label>
                    
                        <input class="btn--primary u-fullwidth" type="submit" value="Submit">
                    </form>

                </div>

                <div class="column lg-6 tab-12">

                    <h3>Alert Boxes</h3>

                    <br>
                    
                    <div class="alert-box alert-box--error">
                        <p>Error Message. Your Message Goes Here.</p>
                        <span class="alert-box__close"></span>
                    </div><!-- end error -->
                            
                    <div class="alert-box alert-box--success">
                        <p>Success Message. Your Message Goes Here.</p>
                        <span class="alert-box__close"></span>
                    </div><!-- end success -->
                            
                    <div class="alert-box alert-box--info">
                        <p>Info Message. Your Message Goes Here.</p>
                        <span class="alert-box__close"></span>
                    </div><!-- end info -->
                            
                    <div class="alert-box alert-box--notice">
                        <p>Notice Message. Your Message Goes Here.</p>
                        <span class="alert-box__close"></span>
                    </div><!-- end notice -->
                
                </div>

            </div> <!-- end row -->

            <div class="row">

                <div class="lg-12 column">
                    <h3>Grid Columns</h3>
                </div>
    
            </div> <!-- Row End-->
    
            <!--<h4>1/3 Columns</h4>  -->
    
            <div class="row">
    
                <div class="lg-4 mob-12 column">
                    <p>
                    Cras aliquet. Integer faucibus, eros ac molestie placerat, enim tellus varius lacus,
                    nec dictum nunc tortor id urna. Suspendisse dapibus ullamcorper pede. Vivamus ligula ipsum,
                    faucibus at, tincidunt eget, porttitor non, dolor. 
                    </p>
                </div>
    
                <div class="lg-4 mob-12 column">
                    <p>
                    Cras aliquet. Integer faucibus, eros ac molestie placerat, enim tellus varius lacus,
                    nec dictum nunc tortor id urna. Suspendisse dapibus ullamcorper pede. Vivamus ligula ipsum,
                    faucibus at, tincidunt eget, porttitor non, dolor. 
                    </p>
                </div>
    
                <div class="lg-4 mob-12 column">
                    <p>
                    Cras aliquet. Integer faucibus, eros ac molestie placerat, enim tellus varius lacus,
                    nec dictum nunc tortor id urna. Suspendisse dapibus ullamcorper pede. Vivamus ligula ipsum,
                    faucibus at, tincidunt eget, porttitor non, dolor. 
                    </p>
                </div>
    
            </div>
    
            <!--<h4>1/4 Columns</h4>  -->
    
            <div class="row">
    
                <div class="lg-3 tab-6 mob-12 column">
                    <p>
                    Cras aliquet. Integer faucibus, eros ac molestie placerat, enim tellus varius lacus,
                    nec dictum nunc tortor id urna. Suspendisse dapibus ullamcorper pede. Vivamus ligula ipsum,
                    faucibus at, tincidunt eget, porttitor non, dolor. 
                    </p>
                </div>
    
                <div class="lg-3 tab-6 mob-12 column">
                    <p>
                    Cras aliquet. Integer faucibus, eros ac molestie placerat, enim tellus varius lacus,
                    nec dictum nunc tortor id urna. Suspendisse dapibus ullamcorper pede. Vivamus ligula ipsum,
                    faucibus at, tincidunt eget, porttitor non, dolor. 
                    </p>
                </div>
    
                <div class="lg-3 tab-6 mob-12 column">
                    <p>
                    Cras aliquet. Integer faucibus, eros ac molestie placerat, enim tellus varius lacus,
                    nec dictum nunc tortor id urna. Suspendisse dapibus ullamcorper pede. Vivamus ligula ipsum,
                    faucibus at, tincidunt eget, porttitor non, dolor. 
                    </p>
                </div>
    
                <div class="lg-3 tab-6 mob-12 column">
                    <p>
                    Cras aliquet. Integer faucibus, eros ac molestie placerat, enim tellus varius lacus,
                    nec dictum nunc tortor id urna. Suspendisse dapibus ullamcorper pede. Vivamus ligula ipsum,
                    faucibus at, tincidunt eget, porttitor non, dolor. 
                    </p>
                </div>
    
            </div>
    
            <!--<h4>1/2 Columns</h4>  -->
    
            <div class="row">
    
                <div class="lg-6 mob-12 column">
                    <p>
                    Cras aliquet. Integer faucibus, eros ac molestie placerat, enim tellus varius lacus,
                    nec dictum nunc tortor id urna. Suspendisse dapibus ullamcorper pede. Vivamus ligula ipsum,
                    faucibus at, tincidunt eget, porttitor non, dolor. 
                    </p>
                </div>
    
                <div class="lg-6 mob-12 column">
                    <p>
                    Cras aliquet. Integer faucibus, eros ac molestie placerat, enim tellus varius lacus,
                    nec dictum nunc tortor id urna. Suspendisse dapibus ullamcorper pede. Vivamus ligula ipsum,
                    faucibus at, tincidunt eget, porttitor non, dolor. 
                    </p>
                </div>
    
            </div>
    
            <!--<h4>2/3 Columns</h4>  -->
    
            <div class="row">
    
                <div class="lg-8 tab-7 mob-12 column">
                    <p>
                    Cras aliquet. Integer faucibus, eros ac molestie placerat, enim tellus varius lacus,
                    nec dictum nunc tortor id urna. Suspendisse dapibus ullamcorper pede. Vivamus ligula ipsum,
                    faucibus at, tincidunt eget, porttitor non, dolor. Integer faucibus, eros ac molestie placerat, enim tellus varius lacus,
                    nec dictum nunc tortor id urna. Suspendisse dapibus ullamcorper pede. Vivamus ligula ipsum,
                    faucibus at, tincidunt eget, porttitor non, dolor.
                    </p>
                </div>
    
                <div class="lg-4 tab-5 mob-12 column">
                    <p>
                    Cras aliquet. Integer faucibus, eros ac molestie placerat, enim tellus varius lacus,
                    nec dictum nunc tortor id urna. Suspendisse dapibus ullamcorper pede. Vivamus ligula ipsum,
                    faucibus at, tincidunt eget, porttitor non, dolor. 
                    </p>
                </div>
    
            </div>
    
            <!--<h4>3/4 Columns</h4>  -->
    
            <div class="row">
    
                <div class="lg-3 tab-5 mob-12 column">
                    <p>
                    Cras aliquet. Integer faucibus, eros ac molestie placerat, enim tellus varius lacus,
                    nec dictum nunc tortor id urna. Suspendisse dapibus ullamcorper pede. Vivamus ligula ipsum,
                    faucibus at. 
                    </p>
                </div>
    
                <div class="lg-9 tab-7 mob-12 column">
                    <p>
                    Cras aliquet. Integer faucibus, eros ac molestie placerat, enim tellus varius lacus,
                    nec dictum nunc tortor id urna. Suspendisse dapibus ullamcorper pede. Vivamus ligula ipsum,
                    faucibus at, tincidunt eget, porttitor non, dolor.Integer faucibus, eros ac molestie placerat, enim tellus varius lacus,
                    nec dictum nunc tortor id urna. Suspendisse dapibus ullamcorper pede. Vivamus ligula ipsum,
                    faucibus at, tincidunt eget, porttitor non, dolor. Integer faucibus, eros ac molestie placerat, enim tellus varius lacus,
                    nec dictum nunc tortor id urna. Suspendisse dapibus ullamcorper pede. Vivamus ligula ipsum,
                    faucibus at, tincidunt eget, porttitor non, dolor.
                    </p>
                </div>
    
            </div>

        </div> <!-- end content-wrap -->


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


    <!-- Java Script
    ================================================== -->
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>
</html>