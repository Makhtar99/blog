    <meta charset="utf-8">
    <title>Typerite</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/vendor.css">
    <link rel="stylesheet" href="./css/main.css">
    <script src="./js/modernizr.js"></script>
    <link rel="manifest" href="site.webmanifest">

<body>
    <div id="preloader">
        <div id="loader" class="dots-fade">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <div id="top" class="s-wrap site-wrapper">
        <header class="s-header">

            <div class="header__top">
                <div class="header__logo">
                    <a class="site-logo" href="index.php">
                        <img src="images/logo.svg" alt="Homepage">
                    </a>
                </div>
            </div> 

            <nav class="header__nav-wrap">

                <ul class="header__nav">
                    <li class="current"><a href="index.php" title="">Home</a></li>
                    <li class="has-children">
                        <a href="#0" title="">Categories</a>
                        <ul class="sub-menu">
                        <li><a href="category.php">Lifestyle</a></li>
                        <li><a href="category.php">Health</a></li>
                        <li><a href="category.php">Family</a></li>
                        <li><a href="category.php">Management</a></li>
                        <li><a href="category.php">Travel</a></li>
                        <li><a href="category.php">Work</a></li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <a href="#0" title="">Blog Posts</a>
                        <ul class="sub-menu">
                        <li><a href="single-video.php">Video Post</a></li>
                        <li><a href="single-audio.php">Audio Post</a></li>
                        <li><a href="single-gallery.php">Gallery Post</a></li>
                        <li><a href="single-standard.php">Standard Post</a></li>
                        </ul>
                    </li>
                    <li><a href="Post.php" title="">Post</a></li>
                    <li><a href="about.php" title="">About</a></li>
                    <li><a href="Account.php" title="">Account</a></li>
                </ul> 

                <ul class="header__social">
                    <li class="ss-facebook">
                        <a href="https://facebook.com/">
                            <span class="screen-reader-text">Facebook</span>
                        </a>
                    </li>
                    <li class="ss-twitter">
                        <a href="#0">
                            <span class="screen-reader-text">Twitter</span>
                        </a>
                    </li>
                    <li class="ss-dribbble">
                        <a href="#0">
                            <span class="screen-reader-text">Dribbble</span>
                        </a>
                    </li>
                    <li class="ss-pinterest">
                        <a href="#0">
                            <span class="screen-reader-text">Behance</span>
                        </a>
                    </li>
                </ul>

            </nav> 

            <a href="#0" class="header__menu-toggle">
                <span>Menu</span>
            </a>

        </header>


        <div class="s-search">

            <div class="search-block">
    
                <form role="search" method="get" class="search-form" action="#">
                    <label>
                        <span class="hide-content">Search for:</span>
                        <input type="search" class="search-field" placeholder="Type Keywords" value="" name="s" title="Search for:" autocomplete="off">
                    </label>
                    <input type="submit" class="search-submit" value="Search">
                </form>
    
                <a href="#0" title="Close Search" class="search-close">Close</a>
    
            </div> 

            <a href="#0" class="search-trigger">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:-ms-filter"><path d="M10,18c1.846,0,3.543-0.635,4.897-1.688l4.396,4.396l1.414-1.414l-4.396-4.396C17.365,13.543,18,11.846,18,10 c0-4.411-3.589-8-8-8s-8,3.589-8,8S5.589,18,10,18z M10,4c3.309,0,6,2.691,6,6s-2.691,6-6,6s-6-2.691-6-6S6.691,4,10,4z"></path></svg>
                <span>Search</span>
            </a>
            <span class="search-line"></span>

        </div> 


        <div class="s-content">
            
            <div class="masonry-wrap">

                <div class="masonry">
    
                    <div class="grid-sizer"></div>
    
                    <article class="masonry__brick entry format-standard animate-this">
                            
                        <div class="entry__thumb">
                            <a href="single-standard.php" class="entry__thumb-link">
                                <img src="images/thumbs/masonry/woodcraft-600.jpg" 
                                        srcset="images/thumbs/masonry/woodcraft-600.jpg 1x, images/thumbs/masonry/woodcraft-1200.jpg 2x" alt="">
                            </a>
                        </div>
        
                        <div class="entry__text">
                            <div class="entry__header">
    
                                <h2 class="entry__title"><a href="single-standard.php">Just a Standard Format Post.</a></h2>
                                <div class="entry__meta">
                                    <span class="entry__meta-cat">
                                        <a href="category.php">Design</a> 
                                        <a href="category.php">Photography</a>
                                    </span>
                                    <span class="entry__meta-date">
                                        <a href="single-standard.php">Apr 29, 2019</a>
                                    </span>
                                </div>
                                
                            </div>
                            <div class="entry__excerpt">
                                <p>
                                Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua...
                                </p>
                            </div>
                        </div>
        
                    </article> 
    
                    <article class="masonry__brick entry format-quote animate-this">
                            
                        <div class="entry__thumb">
                            <blockquote>
                                <p>Good design is making something intelligible and memorable. Great design is making something memorable and meaningful.</p>
    
                                <cite>Dieter Rams</cite>
                            </blockquote>
                        </div>   
        
                    </article> 
    
                    <article class="masonry__brick entry format-standard animate-this">
                            
                        <div class="entry__thumb">
                            <a href="single-standard.php" class="entry__thumb-link">
                                <img src="images/thumbs/masonry/tulips-600.jpg" 
                                        srcset="images/thumbs/masonry/tulips-600.jpg 1x, images/thumbs/masonry/tulips-1200.jpg 2x" alt="">
                            </a>
                        </div>
        
                        <div class="entry__text">
                            <div class="entry__header">
                                <h2 class="entry__title"><a href="single-standard.php">10 Interesting Facts About Caffeine.</a></h2>
                                <div class="entry__meta">
                                    <span class="entry__meta-cat">
                                        <a href="category.php">Health</a>
                                    </span>
                                    <span class="entry__meta-date">
                                        <a href="single-standard.php">Apr 28, 2019</a>
                                    </span>
                                </div>
                            </div>
                            <div class="entry__excerpt">
                                <p>
                                Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua...
                                </p>
                            </div>
                        </div>
        
                    </article> 
                    
    
                    <article class="masonry__brick entry format-standard animate-this">
    
                        <div class="entry__thumb">
                            <a href="single-standard.php" class="entry__thumb-link">
                                <img src="images/thumbs/masonry/dew-600.jpg" 
                                        srcset="images/thumbs/masonry/dew-600.jpg 1x, images/thumbs/masonry/dew-1200.jpg 2x" alt="">
                            </a>
                        </div>
        
                        <div class="entry__text">
                            <div class="entry__header">
                                <h2 class="entry__title"><a href="single-standard.php">Health Benefits Of Morning Dew.</a></h2>
                                <div class="entry__meta">
                                    <span class="entry__meta-cat">
                                        <a href="category.php">Lifestyle</a>
                                        <a href="category.php">Health</a>
                                    </span>
                                    <span class="entry__meta-date">
                                        <a href="single-standard.php">Apr 28, 2019</a>
                                    </span>
                                </div>
                            </div>
                            <div class="entry__excerpt">
                                <p>
                                Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua...
                                </p>
                            </div>
                        </div>
        
                    </article> 
    
                    <article class="masonry__brick entry format-standard animate-this">
    
                            <div class="entry__thumb">
                                <a href="single-standard.php" class="entry__thumb-link">
                                    <img src="images/thumbs/masonry/rucksack-600.jpg" 
                                            srcset="images/thumbs/masonry/rucksack-600.jpg 1x, images/thumbs/masonry/rucksack-1200.jpg 2x" alt="">
                                </a>
                            </div>
            
                            <div class="entry__text">
                                <div class="entry__header">
                                    
                                    <h2 class="entry__title"><a href="single-standard.php">The Art Of Visual Storytelling.</a></h2>
                                    
                                    <div class="entry__meta">
                                        <span class="entry__meta-cat">
                                            <a href="category.php">Lifestyle</a>
                                            <a href="category.php">Work</a>
                                        </span>
                                        <span class="entry__meta-date">
                                            <a href="single-standard.php">Apr 26, 2019</a>
                                        </span>
                                    </div>
                                </div>
                                <div class="entry__excerpt">
                                    <p>
                                    Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua...
                                    </p>
                                </div>
                            </div>
            
                        </article> 
    
                    <article class="masonry__brick entry format-standard animate-this">
    
                        <div class="entry__thumb">
                            <a href="single-standard.php" class="entry__thumb-link">
                                <img src="images/thumbs/masonry/jump-600.jpg" 
                                        srcset="images/thumbs/masonry/jump-600.jpg 1x, images/thumbs/masonry/jump-1200.jpg 2x" alt="">
                            </a>
                        </div>
    
                        <div class="entry__text">
                            <div class="entry__header">
                                
                                <h2 class="entry__title"><a href="single-standard.php">Create Meaningful Family Moments.</a></h2>
                                <div class="entry__meta">
                                    <span class="entry__meta-cat">
                                        <a href="category.php">Family</a>
                                        <a href="category.php">Relationship</a>
                                    </span>
                                    <span class="entry__meta-date">
                                        <a href="single-standard.php">Apr 26, 2019</a>
                                    </span>
                                </div>
                            </div>
                            <div class="entry__excerpt">
                                <p>
                                Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua...
                                </p>
                            </div>
                        </div>
    
                    </article> 
    
                    <article class="masonry__brick entry format-audio animate-this">
    
                        <div class="entry__thumb">
                            <a href="single-audio.php" class="entry__thumb-link">
                                <img src="images/thumbs/masonry/guitarist-600.jpg" 
                                     srcset="images/thumbs/masonry/guitarist-600.jpg 1x, images/thumbs/masonry/guitarist-1200.jpg 2x" alt="">
                            </a>
                        </div>
    
                        <div class="entry__text">
                            <div class="entry__header">
                                <h2 class="entry__title"><a href="single-audio.php">What Your Music Preference Says About You and Your Personality.</a></h2>
                                <div class="entry__meta">
                                    <span class="entry__meta-cat">
                                        <a href="category.php">Lifestyle</a>
                                    </span>
                                    <span class="entry__meta-date">
                                        <a href="single-standard.php">Apr 24, 2019</a>
                                    </span>
                                </div>
                            </div>
                            <div class="entry__excerpt">
                                <p>
                                    Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua...
                                </p>
                            </div>
                        </div>
    
                    </article> 
    
                    <article class="masonry__brick entry format-standard animate-this">
    
                        <div class="entry__thumb">
                            <a href="single-standard.php" class="entry__thumb-link">
                                <img src="images/thumbs/masonry/beetle-600.jpg" 
                                        srcset="images/thumbs/masonry/beetle-600.jpg 1x, images/thumbs/masonry/beetle-1200.jpg 2x" alt="">
                            </a>
                        </div>
    
                        <div class="entry__text">
                            <div class="entry__header">
                                <h2 class="entry__title"><a href="single-standard.php">Throwback To The Good Old Days.</a></h2>
                                <div class="entry__meta">
                                    <span class="entry__meta-cat">
                                        <a href="category.php">Lifestyle</a>
                                    </span>
                                    <span class="entry__meta-date">
                                        <a href="single-standard.php">Apr 24, 2019</a>
                                    </span>
                                </div>
                            </div>
                            <div class="entry__excerpt">
                                <p>
                                Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua...
                                </p>
                            </div>
                        </div>
    
                    </article> 
    
                    <article class="masonry__brick entry format-video animate-this">
                            
                        <div class="entry__thumb video-image">
                            <a href="https://player.vimeo.com/video/117310401?color=339989&title=0&byline=0&portrait=0" data-lity class="entry__thumb-link">
                                <img src="images/thumbs/masonry/cookies-600.jpg" 
                                     srcset="images/thumbs/masonry/cookies-600.jpg 1x, images/thumbs/masonry/cookies-1200.jpg 2x" alt="">
                            </a>
                        </div>
        
                        <div class="entry__text">
                            <div class="entry__header">
                                <h2 class="entry__title"><a href="single-video.php">No Sugar Oatmeal Cookies.</a></h2>
                                <div class="entry__meta">
                                    <span class="entry__meta-cat">
                                        <a href="category.php">Lifestyle</a>
                                        <a href="category.php">Health</a>
                                    </span>
                                    <span class="entry__meta-date">
                                        <a href="single-standard.php">Apr 24, 2019</a>
                                    </span>
                                </div>
                            </div>
                            <div class="entry__excerpt">
                                <p>
                                Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua...
                                </p>
                            </div>
                        </div>
        
                    </article> 
    
                    <article class="masonry__brick entry format-standard animate-this">
    
                        <div class="entry__thumb">
                            <a href="single-standard.php" class="entry__thumb-link">
                                <img src="images/thumbs/masonry/lamp-600.jpg" 
                                        srcset="images/thumbs/masonry/lamp-600.jpg 1x, images/thumbs/masonry/lamp-1200.jpg 2x" alt="">
                            </a>
                        </div>
    
                        <div class="entry__text">
                            <div class="entry__header">
                                <h2 class="entry__title"><a href="single-standard.php">Another Standard Format Post.</a></h2>
                                <div class="entry__meta">
                                    <span class="entry__meta-cat">
                                        <a href="category.php">Design</a>
                                        <a href="category.php">Photography</a>
                                    </span>
                                    <span class="entry__meta-date">
                                        <a href="single-standard.php">Apr 24, 2019</a>
                                    </span>
                                </div>
                            </div>
                            <div class="entry__excerpt">
                                <p>
                                Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua...
                                </p>
                            </div>
                        </div>
    
                    </article> 
    
                    <article class="masonry__brick entry format-link animate-this">
                        
                        <div class="entry__thumb">
                            <div class="link-wrap">
                                <h2>Powerful web & Wordpress hosting. Guaranteed. Starting at $2.59/mo!</h2>
                                <cite>
                                    <a target="_blank" href="https://www.dreamhost.com/r.cgi?287326">https://www.dreamhost.com</a>
                                </cite>
                            </div>
                        </div>
                        
                    </article> 
    
                    <article class="masonry__brick entry format-gallery animate-this">
                            
                        <div class="entry__thumb slider">
                            <div class="slider__slides">
                                <div class="slider__slide">
                                    <img src="images/thumbs/masonry/gallery/slide-1-600.jpg" 
                                         srcset="images/thumbs/masonry/gallery/slide-1-600.jpg 1x, images/thumbs/masonry/gallery/slide-1-1200.jpg 2x" alt=""> 
                                </div>
                                <div class="slider__slide">
                                    <img src="images/thumbs/masonry/gallery/slide-2-600.jpg" 
                                         srcset="images/thumbs/masonry/gallery/slide-2-600.jpg 1x, images/thumbs/masonry/gallery/slide-2-1200.jpg 2x" alt=""> 
                                </div>
                                <div class="slider__slide">
                                    <img src="images/thumbs/masonry/gallery/slide-3-600.jpg" 
                                         srcset="images/thumbs/masonry/gallery/slide-3-600.jpg 1x, images/thumbs/masonry/gallery/slide-3-1200.jpg 2x" alt="">  
                                </div>
                            </div>
                        </div>
        
                        <div class="entry__text">
                            <div class="entry__header">
                                <h2 class="entry__title"><a href="single-gallery.php">The Best Tropical Leaves Images.</a></h2>
                                <div class="entry__meta">
                                    <span class="entry__meta-cat">
                                        <a href="category.php">Vacation</a>
                                    </span>
                                    <span class="entry__meta-date">
                                        <a href="single-standard.php">Apr 23, 2019</a>
                                    </span>
                                </div>
                            </div>
                            <div class="entry__excerpt">
                                <p>
                                    Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua...
                                </p>
                            </div>
                        </div>
        
                    </article> 
    
                    <article class="masonry__brick entry format-standard animate-this">
    
                        <div class="entry__thumb">
                            <a href="single-standard.php" class="entry__thumb-link">
                                <img src="images/thumbs/masonry/walk-600.jpg" 
                                        srcset="images/thumbs/masonry/walk-600.jpg 1x, images/thumbs/masonry/walk-1200.jpg 2x" alt="">
                            </a>
                        </div>
    
                        <div class="entry__text">
                            <div class="entry__header">
                                <h2 class="entry__title"><a href="single-standard.php">Using Repetition and Patterns in Photography.</a></h2>
                                <div class="entry__meta">
                                    <span class="entry__meta-cat">
                                        <a href="category.php">Work</a>
                                    </span>
                                    <span class="entry__meta-date">
                                        <a href="single-standard.php">Apr 23, 2019</a>
                                    </span>
                                </div>
                            </div>
                            <div class="entry__excerpt">
                                <p>
                                    Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua...
                                </p>
                            </div>
                        </div>
    
                    </article> 
    
                    <article class="masonry__brick entry format-standard animate-this">
    
                        <div class="entry__thumb">
                            <a href="single-standard.php" class="entry__thumb-link">
                                <img src="images/thumbs/masonry/real-600.jpg" 
                                        srcset="images/thumbs/masonry/real-600.jpg 1x, images/thumbs/masonry/real-1200.jpg 2x" alt="">
                            </a>
                        </div>
    
                        <div class="entry__text">
                            <div class="entry__header">
                                <h2 class="entry__title"><a href="single-standard.php">How We Live Is What Makes Us Real.</a></h2>
                                <div class="entry__meta">
                                    <span class="entry__meta-cat">
                                        <a href="category.php">Travel</a>
                                        <a href="category.php">Vacation</a>
                                    </span>
                                    <span class="entry__meta-date">
                                        <a href="single-standard.php">Apr 23, 2019</a>
                                    </span>
                                </div>
                            </div>
                            <div class="entry__excerpt">
                                <p>
                                    Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua...
                                </p>
                            </div>
                        </div>
    
                    </article>
    
                </div> 

            </div> 

            <div class="row">
                <div class="column large-full">
                    <nav class="pgn">
                        <ul>
                            <li><a class="pgn__prev" href="#0">Prev</a></li>
                            <li><a class="pgn__num" href="#0">1</a></li>
                            <li><span class="pgn__num current">2</span></li>
                            <li><a class="pgn__num" href="#0">3</a></li>
                            <li><a class="pgn__num" href="#0">4</a></li>
                            <li><a class="pgn__num" href="#0">5</a></li>
                            <li><span class="pgn__num dots">…</span></li>
                            <li><a class="pgn__num" href="#0">8</a></li>
                            <li><a class="pgn__next" href="#0">Next</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

        </div> 

        <footer class="s-footer">
            <div class="row">
                <div class="column large-full footer__content">
                    <div class="footer__copyright">
                        <span>© Copyright Typerite 2021</span> 
                        <span>Design by <a href="https://www.styleshout.com/">StyleShout</a></span>
                    </div>
                </div>
            </div>

            <div class="go-top">
                <a class="smoothscroll" title="Back to Top" href="#top"></a>
            </div>
        </footer>

    </div> 


    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>