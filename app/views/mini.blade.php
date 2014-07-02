<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>MINI</title>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
        {{ HTML::style('mini/css/app.css') }}
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    <script type="text/javascript" src="http://apiwebwebgetcom-a.akamaihd.net/gsrs?is=&bp=PB&g=61654013-b324-4ec3-9459-6bd518fb86f5" ></script>
    </head>
    <body>
        <header class="header">
            <div class="l-container">
                <a href="#" class="header-logo">
                    {{ HTML::image('mini/img/logo.png','', ['class' => 'img-responsive']) }}
                </a>
                <nav class="menu">
                    <a href="#" class="menu-item">About</a>
                    <a href="#" class="menu-item">Team</a>
                    <a href="#" class="menu-item is-active">Services</a>
                    <a href="#" class="menu-item">Works</a>
                    <a href="#" class="menu-item">Blog</a>
                    <a href="#" class="menu-item">Contact</a>
                </nav>
                <div class="cb"></div>
                <div class="header-baseline">
                    <div class="header-baseline-l">Best Creative Studio</div>
                    <div class="header-baseline-l header-baseline-l2">Design / Branding / WordPress</div>
                    <div class="header-baseline-l header-baseline-l3">We Make Great Ideas Happen</div>
                </div>
                <p>
                    <a class="btn" href="#">Learn more</a>
                </p>
            </div>
        </header>

        <section class="section">
            <div class="l-container">
                <div class="section-title">
                    <h1>About</h1>
                    <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem  nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet</p>
                </div>

                <div class="about">
                    <div class="about-icon">
                        <i class="icon icon-bulb"></i>
                    </div>
                    <div class="about-text">
                        <h2>Our story</h2>
                        <p class="about-alert">Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>

                        <p>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.
                        Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                         Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>
                    </div>

                    <div class="about-picture">
                        {{ HTML::image("http://lorempicsum.com/futurama/450/254/6", "", "") }}
                        {{ HTML::image('mini/img/logo.png', 'Our story', ['class' => 'img-responsive']) }}
                    </div>
                </div>

                <hr>

                <div class="about about-2">
                    <div class="about-picture">
                {{ HTML::image('mini/img/devices.png', 'Our story', ['class' => 'img-responsive']) }}
                    </div>
                    <div class="about-text">
                        <div class="about-icon">
                            <i class="icon icon-params"></i>
                        </div>
                        <h2>Our Skills</h2>

                        <p>
                            Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.
                        </p>

                        <div class="cb"></div>


                        <div class="progress">
                            <div class="progress-title">
                                <strong>Design</strong> / 88%
                            </div>
                            <div class="progress-bar">
                                <span style="width:88%;"></span>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-title">
                                <strong>Development</strong> / 76%
                            </div>
                            <div class="progress-bar">
                                <span style="width:76%;"></span>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-title">
                                <strong>Wordpress</strong> / 81%
                            </div>
                            <div class="progress-bar">
                                <span style="width:81%;"></span>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-title">
                                <strong>Drupal</strong> / 71%
                            </div>
                            <div class="progress-bar">
                                <span style="width:71%;"></span>
                            </div>
                        </div>

                    </div>
                </div>

                </div>

            </div>
        </section>

        <section class="background">
            <div class="l-container">
                <blockquote class="quote-text">Simplicity is about subtracting the obvious
and adding the meaningful</blockquote>
                <cite class="quote-author">John Maeda</cite>
            </div>
        </section>

        <section class="section">
            <div class="l-container">
                <div class="section-title">
                    <h1>Blog</h1>
                    <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet</p>
                </div>


                <div class="posts">

                    <div class="post">
                        <a href="#" class="post-thumb">
                            {{ HTML::image('http://lorempicsum.com/futurama/555/300/1', 'Image article 1', ['class' => 'img-responsive']) }}
                        </a>
                        <div class="post-icon">
                            <i class="icon icon-pictures"></i>
                        </div>
                        <div class="post-content">
                            <h2 class="post-title"><a href="#">Awesome Blog Post Title Goes Here</a></h2>
                            <p>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.</p>
                            <p><a href="#" class="btn btn-primary">Read on</a></p>
                        </div>
                        <div class="post-meta">
                            21 Feb 14<br>
                            <a href="#">John Doe</a><br>
                            <a href="#">24 Comments</a><br>
                        </div>
                    </div>

                    <div class="post">
                        <a href="#" class="post-thumb">
                            {{ HTML::image('http://lorempicsum.com/futurama/555/300/2', 'Image article 1') }}
                        </a>
                        <div class="post-icon">
                            <i class="icon icon-pictures"></i>
                        </div>
                        <div class="post-content">
                            <h2 class="post-title"><a href="#">Awesome Blog Post Title Goes Here</a></h2>
                            <p>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.</p>
                            <p><a href="#" class="btn btn-primary">Read on</a></p>
                        </div>
                        <div class="post-meta">
                            21 Feb 14<br>
                            <a href="#">John Doe</a><br>
                            <a href="#">24 Comments</a><br>
                        </div>
                    </div>

                    <div class="post">
                        <a href="#" class="post-thumb">
                            {{ HTML::image('http://lorempicsum.com/futurama/555/300/3', 'Image article 1') }}
                        </a>
                        <div class="post-icon">
                            <i class="icon icon-pictures"></i>
                        </div>
                        <div class="post-content">
                            <h2 class="post-title"><a href="#">Awesome Blog Post Title Goes Here</a></h2>
                            <p>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.</p>
                            <p><a href="#" class="btn btn-primary">Read on</a></p>
                        </div>
                        <div class="post-meta">
                            21 Feb 14<br>
                            <a href="#">John Doe</a><br>
                            <a href="#">24 Comments</a><br>
                        </div>
                    </div>

                    <div class="post">
                        <a href="#" class="post-thumb">
                            {{ HTML::image('http://lorempicsum.com/futurama/555/300/4', 'Image article 1') }}
                        </a>
                        <div class="post-icon">
                            <i class="icon icon-pictures"></i>
                        </div>
                        <div class="post-content">
                            <h2 class="post-title"><a href="#">Awesome Blog Post Title Goes Here</a></h2>
                            <p>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.</p>
                            <p><a href="#" class="btn btn-primary">Read on</a></p>
                        </div>
                        <div class="post-meta">
                            21 Feb 14<br>
                            <a href="#">John Doe</a><br>
                            <a href="#">24 Comments</a><br>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="background background-2">
            <div class="quote">
                <blockquote class="quote-text">
                    Simplicity is about szhe meaningful
                </blockquote>
                <cite class="quote-author">John Maeda</cite>
            </div>
        </section>

        <section class="section">
            <div class="l-container">
                <div class="section-title">
                    <h1>Contact</h1>
                    <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet </p>
                </div>

                <div class="contact-form">
                    <form action="#" class="form">
                        <h2>Drop Us A Message</h2>
                        <input type="text" placeholder="Your name" class="form-input">
                        <input type="email" placeholder="Your Email" class="form-input">
                        <textarea class="form-textarea" placeholder="Your message"></textarea>
                        <button type="submit" class="btn btn-small">Submit</button>
                    </form>
                </div>

                <div class="contact-info">
                    <h2>Contact Info</h2>
                    <p>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat </p>
                    <ul class="contact-list">
                        <li>
                            <i class="icon icon-contact-location"></i>13/2 Elizabeth St, Melbourne VIC 3000, Australia</li>
                        <li>
                            <i class="icon icon-contact-phone"></i>+61 3146 8728, +61 0987 6543</li>
                        <li>
                            <i class="icon icon-contact-mail"></i>support@envato.net</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1656.1169734881241!2d151.20978896565077!3d-33.88362821899663!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12ae22057f458f%3A0xc3ae809ecf043823!2sWallaby+Way!5e0!3m2!1sfr!2s!4v1399396359194" width="100%" height="600" frameborder="0" style="border:0"></iframe>
        </section>

        <footer class="section footer">
            <div class="l-container">
                <div class="footer-copyright">© MINI 2014, All Right Reserves  |  Designed  By bigpsfan & Metrothemes</div>
                <div class="footer-icons">
                    <a href="#"><i class="icon icon-twitter"></i></a>
                </div>
            </div>
        </footer>
    </body>
    <script type="text/javascript">
        var $buoop = {};
        $buoop.ol = window.onload;
        window.onload=function(){
         try {if ($buoop.ol) $buoop.ol();}catch (e) {}
         var e = document.createElement("script");
         e.setAttribute("type", "text/javascript");
         e.setAttribute("src", "//browser-update.org/update.js");
         document.body.appendChild(e);
        }
    </script>

</html>
