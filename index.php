<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="images/apple-icon.png" rel="icon" type="image/png">
    <link href="images/favicon.png" rel="shortcut icon" type="image/png">
    <title>Asterix</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <style>
    ul 
    {
        list-style: none;
        padding: 0;
        margin: 0;
        background:white;
        color:black;
        font-family: 'Oxygen', sans-serif;
        font-size:16px;

    }

    ul li 
    {
        display: block;
        position: relative;
        float: left;
        background:white;
        color:black;
}

/* This hides the dropdowns */
li ul { display: none; }

ul li a {
  display: block;
  padding: 0.5em;
  text-decoration: none;
  white-space: nowrap;
  color: black;
}

ul li a:hover { background:white; color:black;}

/* Display the dropdown */


li:hover > ul {
  display: block;
  position: absolute;
}

li:hover li { float: none; }

li:hover a { background:white; }

li:hover li a:hover { background:white;}

.main-navigation li ul li { 
    position:relative;
    border-top: 0;
    border-bottom:2px solid #009688;
    }

/* Displays second level dropdowns to the right of the first level dropdown */
ul ul ul {
  left: 100%;
  top: 0%;
}
/* Simple clearfix */
ul:before,
ul:after {
  content: " "; /* 1 */
  display: table; /* 2 */
}

ul:after { clear: both; }
.irs-main-header
{
    background:white;
    border-bottom:6px solid #009688;
}
#subject_pane
{
    background:transparent;
}
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 10px 10px;
    text-align: center;
    text-decoration: none;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

.button1 
{
    background-color: white; 
    color: black; 
    border-left: 12px solid #4CAF50;
    width: 135px;
    box-shadow: 5px 5px 5px #888888;
    float:left; 
    margin-left:44.2%;
}
.button1:hover
{
    background-color: #f3fff4;
    font-size:15px;
    width:200px;
    height:50px;
}
a:link, a:visited
{
    color:black; !important;
    text-decoration:none;
}
#nav_login
{
    padding-top:15px;
    float:right;
}
#nav_login a
{
    text-align: center;
    color: #009688;
    padding: 10px 15px;
    margin-top: 30px;
    border: 2px solid #009688;
    
}
#nav_login a:hover
{
    color: #fff;
    background:#009688;
}
#left_nav_bar
{
  text-transform: uppercase;
  padding-top: 5px;
  padding-bottom: 5px;
  text-align:center;
}
#left_nav_bar a:hover
{
  color:#009688;
  font-size: 16px;
}
</style>

</head>
<body>
    <header class="irs-main-header ire-header-two">
        <div class="irs-header-nav">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-sm-12">
                        <!--<nav class="navbar navbar-default irs-navbar">
                            <div class="container-fluid">-->
                                <!-- Brand and toggle get grouped for better mobile display -->
<ul class="main-navigation">
  <li><a href="#">Home</a></li>
  <li><a href="#">OLYMPIAD EXAMINNATIONS</a>
     <ul>
        <li><a href="">Science Olympiad&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
        <li><a href="course_PDF.php?id=1" target="_blank">Maths Olympiad</a></li>
        <li><a href="course_PDF.php?id=2">Computer Olympiad</a></li>
        <li><a href="#">English Olympiad</a></li>
        <li><a href="#">KVPY</a></li>
        <li><a href="#">NEST</a></li>
        <li><a href="#">IISER</a></li>
        <li><a href="#">JEE(Mains & Advanced)</a></li>
        <li><a href="#">NEET</a></li>
        <li><a href="#">WBJEE</a></li>   
    </ul>
  </li>
  
  <li><a href="#">CBSE</a>
    <ul>
      <li><a href="#">Classes I-VI</a>
          <ul>
              <li><a href="#">English</a></li>
              <li><a href="#">Science</a></li>
              <li><a href="#">Social Science</a></li>
              <li><a href="#">Mathematics</a></li>
              <li><a href="#">Computer</a></li>
          </ul>           
      </li>
      <li><a href="#">Class VII</a>
            <ul>
              <li><a href="#">English</a></li>
              <li><a href="#">Science</a>
                <ul>
                    <li><a href="#">Physics</a></li>
                    <li><a href="#">Chemistry</a></li>
                    <li><a href="#">Biology</a></li>
                </ul>
              </li>
              <li><a href="#">Social Science</a>
                <ul>
                    <li><a href="#">History</a></li>
                    <li><a href="#">Geography</a></li>
                    <li><a href="#">Economics</a></li>
                    <li><a href="#">Political Science</a></li>
                </ul>
              </li>
              <li><a href="#">Mathematics</a></li>
              <li><a href="#">Computer</a></li>
            </ul>           
      </li>
      <li><a href="#">Class VIII</a>
            <ul>
              <li><a href="#">English</a></li>
              <li><a href="#">Science</a>
                <ul>
                    <li><a href="#">Physics</a></li>
                    <li><a href="#">Chemistry</a></li>
                    <li><a href="#">Biology</a></li>
                </ul>
              </li>
              <li><a href="#">Social Science</a>
                <ul>
                    <li><a href="#">History</a></li>
                    <li><a href="#">Geography</a></li>
                    <li><a href="#">Economics</a></li>
                    <li><a href="#">Political Science</a></li>
                </ul>
              </li>
              <li><a href="#">Mathematics</a></li>
              <li><a href="#">Computer</a></li>
            </ul>
      </li>
      <li><a href="#">Class IX</a>
            <ul>
              <li><a href="#">English</a></li>
              <li><a href="#">Science</a>
                <ul>
                    <li><a href="#">Physics</a></li>
                    <li><a href="#">Chemistry</a></li>
                    <li><a href="#">Biology</a></li>
                </ul>
              </li>
              <li><a href="#">Social Science</a>
                <ul>
                    <li><a href="#">History</a></li>
                    <li><a href="#">Geography</a></li>
                    <li><a href="#">Economics</a></li>
                    <li><a href="#">Political Science</a></li>
                </ul>
              </li>
              <li><a href="#">Mathematics</a></li>
              <li><a href="#">Computer</a></li>
            </ul>
      </li>
      <li><a href="#">Class X</a>
            <ul>
              <li><a href="#">English</a></li>
              <li><a href="#">Science</a>
                <ul>
                    <li><a href="#">Physics</a></li>
                    <li><a href="#">Chemistry</a></li>
                    <li><a href="#">Biology</a></li>
                </ul>
              </li>
              <li><a href="#">Social Science</a>
                <ul>
                    <li><a href="#">History</a></li>
                    <li><a href="#">Geography</a></li>
                    <li><a href="#">Economics</a></li>
                    <li><a href="#">Political Science</a></li>
                </ul>
              </li>
              <li><a href="#">Mathematics</a></li>
              <li><a href="#">Computer</a></li>
            </ul>
      </li>
      <li><a href="#">Class XI</a>
            <ul>
                <li><a href="#">English</a></li>
                <li><a href="#">Physics</a></li>
                <li><a href="#">Chemistry</a></li>
                <li><a href="#">Mathematics</a></li>
                <li><a href="#">Biology</a></li>
                <li><a href="#">Computer Science</a></li>
                <li><a href="#">Biotechnology</a></li>
            </ul>
      </li>
      <li><a href="#">Class XII</a>
            <ul>
                <li><a href="#">English</a></li>
                <li><a href="#">Physics</a></li>
                <li><a href="#">Chemistry</a></li>
                <li><a href="#">Mathematics</a></li>
                <li><a href="#">Biology</a></li>
                <li><a href="#">Computer Science</a></li>
                <li><a href="#">Biotechnology</a></li>
            </ul>  
      </li>
    </ul>
  </li>
  <li><a href="#">ICSE/ISC</a>
    <ul>
      <li><a href="#">Classes I-VI</a>
          <ul>
              <li><a href="#">English</a></li>
              <li><a href="#">Science</a></li>
              <li><a href="#">Social Science</a></li>
              <li><a href="#">Mathematics</a></li>
              <li><a href="#">Computer</a></li>
          </ul>           
      </li>
      <li><a href="#">Class VII</a>
            <ul>
              <li><a href="#">English</a></li>
              <li><a href="#">Science</a>
                <ul>
                    <li><a href="#">Physics</a></li>
                    <li><a href="#">Chemistry</a></li>
                    <li><a href="#">Biology</a></li>
                </ul>
              </li>
              <li><a href="#">Social Science</a>
                <ul>
                    <li><a href="#">History</a></li>
                    <li><a href="#">Geography</a></li>
                    <li><a href="#">Economics</a></li>
                    <li><a href="#">Political Science</a></li>
                </ul>
              </li>
              <li><a href="#">Mathematics</a></li>
              <li><a href="#">Computer</a></li>
            </ul>           
      </li>
      <li><a href="#">Class VIII</a>
            <ul>
              <li><a href="#">English</a></li>
              <li><a href="#">Science</a>
                <ul>
                    <li><a href="#">Physics</a></li>
                    <li><a href="#">Chemistry</a></li>
                    <li><a href="#">Biology</a></li>
                </ul>
              </li>
              <li><a href="#">Social Science</a>
                <ul>
                    <li><a href="#">History</a></li>
                    <li><a href="#">Geography</a></li>
                    <li><a href="#">Economics</a></li>
                    <li><a href="#">Political Science</a></li>
                </ul>
              </li>
              <li><a href="#">Mathematics</a></li>
              <li><a href="#">Computer</a></li>
            </ul>
      </li>
      <li><a href="#">Class IX</a>
            <ul>
              <li><a href="#">English</a></li>
              <li><a href="#">Science</a>
                <ul>
                    <li><a href="#">Physics</a></li>
                    <li><a href="#">Chemistry</a></li>
                    <li><a href="#">Biology</a></li>
                </ul>
              </li>
              <li><a href="#">Social Science</a>
                <ul>
                    <li><a href="#">History</a></li>
                    <li><a href="#">Geography</a></li>
                    <li><a href="#">Economics</a></li>
                    <li><a href="#">Political Science</a></li>
                </ul>
              </li>
              <li><a href="#">Mathematics</a></li>
              <li><a href="#">Computer</a></li>
            </ul>
      </li>
      <li><a href="#">Class X</a>
            <ul>
              <li><a href="#">English</a></li>
              <li><a href="#">Science</a>
                <ul>
                    <li><a href="#">Physics</a></li>
                    <li><a href="#">Chemistry</a></li>
                    <li><a href="#">Biology</a></li>
                </ul>
              </li>
              <li><a href="#">Social Science</a>
                <ul>
                    <li><a href="#">History</a></li>
                    <li><a href="#">Geography</a></li>
                    <li><a href="#">Economics</a></li>
                    <li><a href="#">Political Science</a></li>
                </ul>
              </li>
              <li><a href="#">Mathematics</a></li>
              <li><a href="#">Computer</a></li>
            </ul>
      </li>
      <li><a href="#">Class XI</a>
            <ul>
                <li><a href="#">English</a></li>
                <li><a href="#">Physics</a></li>
                <li><a href="#">Chemistry</a></li>
                <li><a href="#">Mathematics</a></li>
                <li><a href="#">Biology</a></li>
                <li><a href="#">Computer Science</a></li>
                <li><a href="#">Biotechnology</a></li>
            </ul>
      </li>
      <li><a href="#">Class XII</a>
            <ul>
                <li><a href="#">English</a></li>
                <li><a href="#">Physics</a></li>
                <li><a href="#">Chemistry</a></li>
                <li><a href="#">Mathematics</a></li>
                <li><a href="#">Biology</a></li>
                <li><a href="#">Computer Science</a></li>
                <li><a href="#">Biotechnology</a></li>
            </ul>  
      </li>
    </ul>
  </li>
 </ul> 
</nav>
                    </div>
                    <div class="col-md-2 col-sm-12">
                      <div id="left_nav_bar">
                      <a href="#contact_us">CONTACT US</a></p>
                      </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Header end -->
    <!-- main slider start -->
    <section class="irs-main-slider irs-main-slider-two">
        <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
            <div id="subject_pane">
            		<button class="button button1"><i class="fa fa-flask">
            		<a href="Course_PDF.html">Physics</a></i></button>
                    <button class="button button1"><a href="Course_PDF.html">Chemistry</a></button>
                    <button class="button button1"><a href="Course_PDF.html">Biology</a></button>
                    <button class="button button1"><a href="Course_PDF.html">Mathematics</a></button>
                    <button class="button button1"><a href="Course_PDF.html">Biotechnology</a></button>
            </div>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item slides active">
                    <div class="slide-1"></div>
                    <div class="hero">
                        <h1><strong>*asterix</strong></h1>
                        <a href="#" class="btn btn-default irs-big-btn" style="color:white;"role="button">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Main slider end -->
    <!-- Discription start -->
    <section id="about_us" class="irs-discription-field">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="irs-discription-col">
                        <h1>Know about <span>asterix</span></h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="irs-discription-col">
                        <p class="irs-topdiscription">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqs U enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irur dolor in reprehenderit in voluptate velit esse cillum dolore eu.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqs U enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.</p>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="row">
                        <div class="col-md-6">
                        <div class="try">
                            <div class="irs-discription-col">
                                    <p>Consectetur adipisicing elit, sed do</p>
                                    <p>Consectetur adipisicing elit, sed do</p>
                                    <p>Consectetur adipisicing elit, sed do</p>
                                    <p>Consectetur adipisicing elit, sed do</p>
                                    <p>Consectetur adipisicing elit, sed do</p>
                                    <p>Consectetur adipisicing elit, sed do</p>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="irs-discription-col">
                                <img src="images/about/3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Discription end  -->
    <!-- About start -->
    <!-- About end -->
    <!-- Divider end -->
    <!-- courses start -->
    <section id="courses" class="irs-courses-field">
        <div class="container">
            <div class="row">
                
                <div class="col-md-6 col-md-offset-3">
                    <div class="irs-section-title">
                        <h2>our <span>courses</span></h2>
                        <div class="irs-title-line">
                            <div class="irs-title-icon">
                                <i class="icofont icofont-education"></i>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam est dolorem quaerat harum sequi, nesciunt consequatur magni voluptatem similique </p>
                    </div>
                </div>
            </div>
            
            <div class="row animatedParent animateOnce">
                <div class="col-md-4 col-sm-6">
                    <div class="irs-courses-col animated fadeInLeftShort slow delay-250">
                        <div class="irs-courses-img">
                            <img src="images/courses/1.jpg" alt="">
                        </div>
                        <div class="irs-courses-content">
                            <h4><a href="Course-single-Master.html?id=1">CHEMISTRY</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam est dolorem quaerat harum sequi, nesciunt consequatur</p>
                        <a class="btn btn-default irs-btn-transparent-two" href="Course-single-Master.html?id=1" role="button">KNOW MORE</a>
                        </div>
                    </div>
                </div>
                 <div class="col-md-4 col-sm-6">
                    <div class="irs-courses-col animated fadeInLeftShort slow delay-250">
                        <div class="irs-courses-img">
                            <img src="images/courses/1.jpg" alt="">
                        </div>
                        <div class="irs-courses-content">
                            <h4><a href="course-single.html">CHEMISTRY</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam est dolorem quaerat harum sequi, nesciunt consequatur</p>
                        <a class="btn btn-default irs-btn-transparent-two" href="Course-single-Master.html?id=1" role="button">KNOW MORE</a>
                        </div>
                    </div>
                </div>
                <!--subject Areana-->
                 <div class="col-md-4 col-sm-6">
                    <div class="irs-courses-col animated fadeInLeftShort slow delay-250">
                        <div class="irs-courses-img">
                            <img src="images/courses/1.jpg" alt="">
                        </div>
                        <div class="irs-courses-content">
                            <h4><a href="course-single.html">CHEMISTRY</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam est dolorem quaerat harum sequi, nesciunt consequatur</p>
                        <a class="btn btn-default irs-btn-transparent-two" href="Course-single-Master.html?id=1" role="button">KNOW MORE</a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- courses end -->
    <!-- Gallery start -->
    <section id="gallery" class="irs-gallery-field">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="irs-section-title">
                        <h2>Awesome <span>gallery</span></h2>
                        <div class="irs-title-line">
                            <div class="irs-title-icon">
                                <i class="icofont icofont-education"></i>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam est dolorem quaerat harum sequi, nesciunt consequatur magni voluptatem similique </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-sm-6 irs-col-padd-less">
                    <div class="irs-img-hover">
                        <img src="images/gallery/1.jpg" alt="">
                        <div class="irs-layer">
                            <a class="lightbox-image" href="images/gallery/1.jpg" data-fancybox-group="gallery" title="Gallery Photos">
                                <i class="zmdi zmdi-loupe"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 irs-col-padd-less">
                    <div class="irs-img-hover">
                        <img src="images/gallery/2.jpg" alt="">
                        <div class="irs-layer">
                            <a class="lightbox-image" href="images/gallery/2.jpg" data-fancybox-group="gallery" title="Gallery Photos">
                                <i class="zmdi zmdi-loupe"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 irs-col-padd-less">
                    <div class="irs-img-hover">
                        <img src="images/gallery/3.jpg" alt="">
                        <div class="irs-layer">
                            <a class="lightbox-image" href="images/gallery/3.jpg" data-fancybox-group="gallery" title="Gallery Photos">
                                <i class="zmdi zmdi-loupe"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 irs-col-padd-less">
                    <div class="irs-img-hover">
                        <img src="images/gallery/4.jpg" alt="">
                        <div class="irs-layer">
                            <a class="lightbox-image" href="images/gallery/4.jpg" data-fancybox-group="gallery" title="Gallery Photos">
                                <i class="zmdi zmdi-loupe"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 irs-col-padd-less">
                    <div class="irs-img-hover">
                        <img src="images/gallery/5.jpg" alt="">
                        <div class="irs-layer">
                            <a class="lightbox-image" href="images/gallery/5.jpg" data-fancybox-group="gallery" title="Gallery Photos">
                                <i class="zmdi zmdi-loupe"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 irs-col-padd-less">
                    <div class="irs-img-hover">
                        <img src="images/gallery/6.jpg" alt="">
                        <div class="irs-layer">
                            <a class="lightbox-image" href="images/gallery/6.jpg" data-fancybox-group="gallery" title="Gallery Photos">
                                <i class="zmdi zmdi-loupe"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 irs-col-padd-less">
                    <div class="irs-img-hover">
                        <img src="images/gallery/7.jpg" alt="">
                        <div class="irs-layer">
                            <a class="lightbox-image" href="images/gallery/7.jpg" data-fancybox-group="gallery" title="Gallery Photos">
                                <i class="zmdi zmdi-loupe"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 irs-col-padd-less">
                    <div class="irs-img-hover">
                        <img src="images/gallery/8.jpg" alt="">
                        <div class="irs-layer">
                            <a class="lightbox-image" href="images/gallery/8.jpg" data-fancybox-group="gallery" title="Gallery Photos">
                                <i class="zmdi zmdi-loupe"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Gallery end -->
    <!-- Teachers start -->
    <!-- Teachers  end -->
    <!-- MAP -->
    <section id="contact_us" class="irs-contact-field">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3687.012222673103!2d88.38057931457097!3d22.46617498523766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a02719f84a793bd%3A0x8e2f33d0680dc86d!2sAsterix+Education+Centre!5e0!3m2!1sen!2sin!4v1497518936725" width="1140" height="520" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div><br><br>
    <!--contact form-->
            <div class="row">
                <div class="col-md-8 col-sm-6">
                    <div class="irs-contact-col">
                        <div class="row">
                            <form id="contact_form" name="contact_form" action="#" method="post" novalidate="novalidate">
                                <div class="col-md-6">
                                    <input id="form_name" name="form_name" class="form-control" placeholder="Name*" required="required" data-error="Name is required*" type="text">
                                </div>
                                <div class="col-md-6">
                                    <input id="form_email" name="form_email" class="form-control" placeholder="Email*" required="required" data-error="Email is required*" type="text">
                                </div>
                                <div class="col-md-8">
                                    <input id="form_name" name="form_name" class="form-control" placeholder="Address" required="required" data-error="Address" type="text">
                                </div>
                                <div class="col-md-4">
                                    <input id="form_name" name="form_name" class="form-control" placeholder="Phone Number*" required="required" data-error="Phone Number*" type="text">
                                </div>
                                <div class="col-md-12">
                                    <input id="form_subject" name="form_subject" class="form-control" placeholder="Subject*" required="required" data-error="Subject is required*" type="text">
                                </div>
                                <div class="col-md-12">
                                    <textarea id="form_message" name="form_message" class="form-control irs-textarea" rows="12" placeholder="Please Write Your Query*" required="required" data-error="Message is required."></textarea>
                                    <button class="btn btn-default irs-big-btn" type="submit">send</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="irs-address-col">
                        <i class="icofont icofont-telephone"></i>
                        <p>098743 10623</p>
                    </div>
                    <div class="irs-address-col">
                        <i class="icofont icofont-email"></i>
                        <p>asterixeducation@gmail.com</p>
                    </div>
                    <div class="irs-address-col">
                        <i class="icofont icofont-social-google-map"></i>
                    <p>23/8, Pranabananda Road, Near Kavi Nazrul Metro Station, Sreerampur, Garia, Kolkata, West Bengal 700084</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact us end -->

    <!-- Footer start -->
    <!-- Footer end -->

    <!-- script start from here -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-dropdownhover.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>
    <script type="text/javascript" src="js/jquery-scrolltofixed-min.js"></script>
    <script type="text/javascript" src="js/isotope.js"></script>
    <script type="text/javascript" src="js/stellar.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/jquery.masonry.min.js"></script>
    <script type="text/javascript" src="js/css3-animate-it.js"></script>
    <script type="text/javascript" src="js/bootstrap-slider.js"></script>
    <script type="text/javascript" src="js/jquery.scrollUp.js"></script>
    <script type="text/javascript" src="js/classie.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <!--Google maps-->
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyABqK-5ngi3F1hrEsk7-mCcBPsjHM5_Gj0"></script>
    <script src="js/jquery.googlemap.js"></script>

    <!-- Funfact START -->
    <!-- Google maps -->
    <script type="text/javascript">
        $(document).ready(function($) {
            $('.start-count').each(function() {
                var $this = $(this);
                $this.data('target', parseInt($this.html()));
                $this.data('counted', false);
                $this.html('0');
            });

            $(window).bind('scroll', function() {
                var speed = 3000;
                $('.start-count').each(function() {
                    var $this = $(this);
                    if (!$this.data('counted') && $(window).scrollTop() + $(window).height() >= $this.offset().top) {
                        $this.data('counted', true);
                        $this.animate({
                            dummy: 1
                        }, {
                            duration: speed,
                            step: function(now) {
                                var $this = $(this);
                                var val = Math.round($this.data('target') * now);
                                $this.html(val);
                                if (0 < $this.parent('.value').length) {
                                    $this.parent('.value').css('width', val + '%');
                                }
                            }
                        });
                    }
                });
            }).triggerHandler('scroll');
        });
    </script>
</body>
</html>
