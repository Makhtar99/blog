    <meta charset="utf-8">
    <title>Styles - Typerite</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/vendor.css">
    <link rel="stylesheet" href="./css/main.css">
    <script src="./js/modernizr.js"></script>

    <style type="text/css" media="screen">
        .s-styles { 
            max-width: 1100px;
            padding-bottom: 12rem;
        }
        .container {
            margin-left:300px;
        }
    </style>
    <link rel="manifest" href="site.webmanifest">



<body class="ss-bg-white">
    <div id="preloader">
        <div id="loader" class="dots-fade">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <div id="top" class="s-wrap site-wrapper">
        <header class="s-header header">

            <div class="header__top">
                <div class="header__logo">
                    <a class="site-logo" href="index.html">
                        <img src="images/logo.svg" alt="Homepage">
                    </a>
                </div>
            </div> 

            <nav class="header__nav-wrap">

                <ul class="header__nav">
                    <li><a href="index.php" title="">Home</a></li>
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
                        <a href="#0" title="">Blog</a>
                        <ul class="sub-menu">
                        <li><a href="single-video.php">Video Post</a></li>
                        <li><a href="single-audio.php">Audio Post</a></li>
                        <li><a href="single-gallery.php">Gallery Post</a></li>
                        <li><a href="single-standard.php">Standard Post</a></li>
                        </ul>
                    </li>
                    <li class="current"><a href="Post.php" title="">Post</a></li>
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
                            <span class="screen-reader-text">Instagram</span>
                        </a>
                    </li>
                    <li class="ss-behance">
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

            <div class="mx-auto col-md-10">
    <h3 class="mx-4">Blog</h3>

    <form action="">

<div class="container col-md-8 offset-md-2 div-border py-2 mt-5">
    <div class="row justify-content-center">
      <h1>Add Post</h1>
    </div>
  
    <div class="row mt-3 pt-2 justify-content-center">
      <div class="col-md-10 mx-5">
        <label for="title">Title</label>
        <input class="form-control" type = "text" placeholder="Title" name="title">
      </div>
    </div>
  
    
  
    <div class="row mt-2 pt-2 justify-content-center">
      <div class="col-md-10 mx-5 ">
        <label for="category">Category</label>
        <input class="form-control" type="text" placeholder="Category" name="category">
      </div>
    </div>
  
  
    <div class="row mt-2 pt-2 justify-content-center">
      <div class="col-md-10 mx-5 ">
        <label for="image">Image</label>
        <input class="form-control-file" type="file" name="image">
      </div>
    </div>
  
  
    <div class="row mt-2 pt-2 justify-content-center">
      <div class="col-md-10 mx-5 ">
        <label for="tag">Tag</label>
        <input class="form-control" type="text" placeholder="Tag" name="tag">
      </div>
    </div>
  
  
    <div class="row mt-2 pt-2 justify-content-center">
      <div class="col-md-10 mx-5 ">
        <label for="description">Description</label>
        <textarea class="form-control" placeholder="Description" required></textarea>
      </div>
    </div>
  
  
    <div class="row my-2 pt-4 justify-content-center">
      <div class="col-md-10 mx-5 ">
        <input type="submit" class="btn btn-outline-secondary col-md-12 " name="save" value="Save Post">
      </div>
    </div>
</div>

</form>
</body>

        <footer class="s-footer footer">
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