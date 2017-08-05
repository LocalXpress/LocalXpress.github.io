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
  padding: 0.7em;
  text-decoration: none;
  white-space: nowrap;
  color: black;
  font-weight: bold;
}

ul li a:hover { background:white; color:black;}

/* Display the dropdown */
li:hover > ul {
  display: block;
  position: absolute;
}

li:hover li { float: none; }

li:hover a { background:white;}

li:hover li a:hover { background:white;}

.main-navigation li ul li { 
    position:relative;
    border-top: 0;
    border-bottom:2px solid #009688;
    }

/* Displays second level dropdowns to the right of the first level dropdown */
ul ul ul {
  left: 100%;
  top: 0;
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
    border-left: 12px solid #009688;
    width: 250px;
    box-shadow: 5px 5px 5px #888888;
    float:left; 
    margin-left:44.2%;
}
.color_combo2
{
  background-color: yellow;
}
.color_combo3
{
  background-color: pink;
}
.button1:hover
{
    background-color: #f3fff4;
    font-size:15px;
    width:300px;
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
  margin-right:0px;
}
#left_nav_bar a:hover
{
  color:#009688;
  font-size: 15px;
}
marquee{
        font-size: 30px;
        font-style: italic;
        font-family: aria;
        padding: 5px;
        color:  #009688;
    }

@-webkit-keyframes blinker {
  from {opacity: 1.0;}
  to {opacity: 0.0;}
}
.blink{
  text-decoration: blink;
  -webkit-animation-name: blinker;
  -webkit-animation-duration: 0.6s;
  -webkit-animation-iteration-count:infinite;
  -webkit-animation-timing-function:ease-in-out;
  -webkit-animation-direction: alternate;
}
.strange_background
{
        color: red !important;
        font-size: 20px;
        font-weight: 25px;
        padding-left:50px;
        padding-right:50px;
        text-decoration: bold;
        background: -moz-linear-gradient( top ,
        rgba(255, 0, 0, 1) 0%,
        rgba(255, 255, 0, 1) 15%,
        rgba(0, 255, 0, 1) 30%,
        rgba(0, 255, 255, 1) 50%,
        rgba(0, 0, 255, 1) 65%,
        rgba(255, 0, 255, 1) 80%,
        rgba(255, 0, 0, 1) 100%);
        background-color: yellow;
        -moz-border-radius: 100px / 50px;
        -webkit-border-radius: 100px / 50px;
        border-radius: 100px / 50px;
        margin: 3px 3px 3px 3px;
    }
  #contact
  {
    height: 340px;
    width: 450px;
    background-color: white;
    z-index: 99;
    margin-left: 1250px;
    font-size: 30px;
    text-align: left;
    padding-left: 15px;
    padding-top: 20px;
    padding-right: 15px;
    border: 6px solid #009688;
  }
  #contact p
  {
    font-size: 18px;
  }
  #name
  {
    font-size: 15px;
    font-style: italic;
    font-weight: bold;
    color:#009688;
  }
  #main_name
  {
    color:#009688;
    text-align: center;
    text-transform: uppercase;
    padding-bottom: 4px;
  }
  #contact a
  {
    text-align: center;
    font-size: 15px;
    padding: 5px;
    border: 2px solid #009688;
  }
  #contact a:hover
  {
    color:#ffffff;
    background-color: #009688;
  }
</style>
</head>
<body>
    <header class="irs-main-header ire-header-two">
        <div class="irs-header-nav">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                                <ul class="main-navigation">
  <li><a href="#">HOME</a></li>
  <li><a href="#">COMPETITIVE EXAMINATIONS</a>
     <ul>
        <li><a href="">Olympiads&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
          <ul>
            <li><a href="course_PDF.php?id=211" target="_blank">Science Olympiad</a></li>
            <li><a href="course_PDF.php?id=212" target="_blank">Maths Olympiad</a></li>
            <li><a href="course_PDF.php?id=213" target="_blank">Computer Olympiad</a></li>
            <li><a href="course_PDF.php?id=214" target="_blank">English Olympiad</a></li>          
          </ul>
        </li>
        <li><a href="course_PDF.php?id=22" target="_blank">NEET</a></li>
        <li><a href="course_PDF.php?id=23" target="_blank">JEE(Mains & Advanced)</a></li>
        <li><a href="course_PDF.php?id=24" target="_blank">WBJEE</a></li>   
        <li><a href="course_PDF.php?id=25" target="_blank">NTSE</a></li>
        <li><a href="course_PDF.php?id=26" target="_blank">KVPY</a></li>
        <li><a href="course_PDF.php?id=27" target="_blank">IISER</a></li>
        <li><a href="course_PDF.php?id=28" target="_blank">NEST</a></li>
        <li><a href="course_PDF.php?id=29" target="_blank">NET</a></li>
        <li><a href="course_PDF.php?id=201" target="_blank">IIT-JAM</a></li>
        <li><a href="course_PDF.php?id=202" target="_blank">JNU</a></li>
      </ul>
  </li>
  
  <li><a href="#">&nbsp;&nbsp;CBSE&nbsp;&nbsp;&nbsp;</a>
    <ul>
      <li><a href="#">Classes I-V</a>
          <ul>
              <li><a href="course_PDF.php?id=311" target="_blank">English</a></li>
              <li><a href="course_PDF.php?id=312" target="_blank">Science</a></li>
              <li><a href="course_PDF.php?id=313" target="_blank">Social Science</a></li>
              <li><a href="course_PDF.php?id=314" target="_blank">Mathematics</a></li>
              <li><a href="course_PDF.php?id=315" target="_blank">Computer</a></li>
          </ul>           
      </li>
      <li><a href="#">Class VI</a>
            <ul>
              <li><a href="course_PDF.php?id=321" target="_blank">English</a></li>
              <li><a href="#">Science</a>
                <ul>
                    <li><a href="course_PDF.php?id=3221" target="_blank">Physics</a></li>
                    <li><a href="course_PDF.php?id=3222" target="_blank">Chemistry</a></li>
                    <li><a href="course_PDF.php?id=3223" target="_blank">Biology</a></li>
                </ul>
              </li>
              <li><a href="#">Social Science</a>
                <ul>
                    <li><a href="course_PDF.php?id=3231" target="_blank">History</a></li>
                    <li><a href="course_PDF.php?id=3232" target="_blank">Geography</a></li>
                    <li><a href="course_PDF.php?id=3233" target="_blank">Economics</a></li>
                    <li><a href="course_PDF.php?id=3234" target="_blank">Political Science</a></li>
                </ul>
              </li>
              <li><a href="course_PDF.php?id=324" target="_blank">Mathematics</a></li>
              <li><a href="course_PDF.php?id=325" target="_blank">Computer</a></li>
            </ul>           
      </li>
      <li><a href="#">Class VII</a>
            <ul>
              <li><a href="course_PDF.php?id=331" target="_blank">English</a></li>
              <li><a href="#">Science</a>
                <ul>
                    <li><a href="course_PDF.php?id=3321" target="_blank">Physics</a></li>
                    <li><a href="course_PDF.php?id=3322" target="_blank">Chemistry</a></li>
                    <li><a href="course_PDF.php?id=3323" target="_blank">Biology</a></li>
                </ul>
              </li>
              <li><a href="#">Social Science</a>
                <ul>
                    <li><a href="course_PDF.php?id=3331" target="_blank">History</a></li>
                    <li><a href="course_PDF.php?id=3332" target="_blank">Geography</a></li>
                    <li><a href="course_PDF.php?id=3333" target="_blank">Economics</a></li>
                    <li><a href="course_PDF.php?id=3334" target="_blank">Political Science</a></li>
                </ul>
              </li>
              <li><a href="course_PDF.php?id=334" target="_blank">Mathematics</a></li>
              <li><a href="course_PDF.php?id=335" target="_blank">Computer</a></li>
            </ul>           
      </li>
      <li><a href="#">Class VIII</a>
            <ul>
              <li><a href="course_PDF.php?id=341" target="_blank">English</a></li>
              <li><a href="#">Science</a>
                <ul>
                    <li><a href="course_PDF.php?id=3421" target="_blank">Physics</a></li>
                    <li><a href="course_PDF.php?id=3422" target="_blank">Chemistry</a></li>
                    <li><a href="course_PDF.php?id=3423" target="_blank">Biology</a></li>
                </ul>
              </li>
              <li><a href="#">Social Science</a>
                <ul>
                    <li><a href="course_PDF.php?id=3431" target="_blank">History</a></li>
                    <li><a href="course_PDF.php?id=3432" target="_blank">Geography</a></li>
                    <li><a href="course_PDF.php?id=3433" target="_blank">Economics</a></li>
                    <li><a href="course_PDF.php?id=3434" target="_blank">Political Science</a></li>
                </ul>
              </li>
              <li><a href="course_PDF.php?id=344" target="_blank">Mathematics</a></li>
              <li><a href="course_PDF.php?id=345" target="_blank">Computer</a></li>
            </ul>
      </li>
      <li><a href="#">Class IX</a>
            <ul>
              <li><a href="course_PDF.php?id=351" target="_blank">English</a></li>
              <li><a href="#">Science</a>
                <ul>
                    <li><a href="course_PDF.php?id=3521" target="_blank">Physics</a></li>
                    <li><a href="course_PDF.php?id=3522" target="_blank">Chemistry</a></li>
                    <li><a href="course_PDF.php?id=3523" target="_blank">Biology</a></li>
                </ul>
              </li>
              <li><a href="#">Social Science</a>
                <ul>
                    <li><a href="course_PDF.php?id=3531" target="_blank">History</a></li>
                    <li><a href="course_PDF.php?id=3532" target="_blank">Geography</a></li>
                    <li><a href="course_PDF.php?id=3533" target="_blank">Economics</a></li>
                    <li><a href="course_PDF.php?id=3534" target="_blank">Political Science</a></li>
                </ul>
              </li>
              <li><a href="course_PDF.php?id=354" target="_blank">Mathematics</a></li>
              <li><a href="course_PDF.php?id=355" target="_blank">Computer</a></li>
            </ul>
      </li>
      <li><a href="#">Class X</a>
            <ul>
              <li><a href="course_PDF.php?id=361" target="_blank">English</a></li>
              <li><a href="#">Science</a>
                <ul>
                    <li><a href="course_PDF.php?id=3621" target="_blank">Physics</a></li>
                    <li><a href="course_PDF.php?id=3622" target="_blank">Chemistry</a></li>
                    <li><a href="course_PDF.php?id=3623" target="_blank">Biology</a></li>
                </ul>
              </li>
              <li><a href="#">Social Science</a>
                <ul>
                    <li><a href="course_PDF.php?id=3631" target="_blank">History</a></li>
                    <li><a href="course_PDF.php?id=3632" target="_blank">Geography</a></li>
                    <li><a href="course_PDF.php?id=3633" target="_blank">Economics</a></li>
                    <li><a href="course_PDF.php?id=3634" target="_blank">Political Science</a></li>
                </ul>
              </li>
              <li><a href="course_PDF.php?id=364" target="_blank">Mathematics</a></li>
              <li><a href="course_PDF.php?id=365" target="_blank">Computer</a></li>
            </ul>
      </li>
      <li><a href="#">Class XI</a>
            <ul>
                <li><a href="course_PDF.php?id=371" target="_blank">English</a></li>
                <li><a href="course_PDF.php?id=372" target="_blank">Physics</a></li>
                <li><a href="course_PDF.php?id=373" target="_blank">Chemistry</a></li>
                <li><a href="course_PDF.php?id=374" target="_blank">Mathematics</a></li>
                <li><a href="course_PDF.php?id=375" target="_blank">Biology</a></li>
                <li><a href="course_PDF.php?id=376" target="_blank">Computer Science</a></li>
                <li><a href="course_PDF.php?id=377" target="_blank">Biotechnology</a></li>
            </ul>
      </li>
      <li><a href="#">Class XII</a>
            <ul>
                <li><a href="course_PDF.php?id=381" target="_blank">English</a></li>
                <li><a href="course_PDF.php?id=382" target="_blank">Physics</a></li>
                <li><a href="course_PDF.php?id=383" target="_blank">Chemistry</a></li>
                <li><a href="course_PDF.php?id=384" target="_blank">Mathematics</a></li>
                <li><a href="course_PDF.php?id=385" target="_blank">Biology</a></li>
                <li><a href="course_PDF.php?id=386" target="_blank">Computer Science</a></li>
                <li><a href="course_PDF.php?id=387" target="_blank">Biotechnology</a></li>
            </ul>  
      </li>
    </ul>
  </li>
  <li><a href="#">&nbsp;&nbsp;ICSE/ISC</a>
    <ul>
      <li><a href="#">Classes I-V</a>
          <ul>
              <li><a href="course_PDF.php?id=411" target="_blank">English</a></li>
              <li><a href="course_PDF.php?id=412" target="_blank">Science</a></li>
              <li><a href="course_PDF.php?id=413" target="_blank">Social Science</a></li>
              <li><a href="course_PDF.php?id=414" target="_blank">Mathematics</a></li>
              <li><a href="course_PDF.php?id=415" target="_blank">Computer</a></li>
          </ul>           
      </li>
      <li><a href="#">Class VI</a>
            <ul>
              <li><a href="course_PDF.php?id=421" target="_blank">English</a></li>
              <li><a href="#">Science</a>
                <ul>
                    <li><a href="course_PDF.php?id=4221" target="_blank">Physics</a></li>
                    <li><a href="course_PDF.php?id=4222" target="_blank">Chemistry</a></li>
                    <li><a href="course_PDF.php?id=4223" target="_blank">Biology</a></li>
                </ul>
              </li>
              <li><a href="#">Social Science</a>
                <ul>
                    <li><a href="course_PDF.php?id=4231" target="_blank">History</a></li>
                    <li><a href="course_PDF.php?id=4232" target="_blank">Geography</a></li>
                    <li><a href="course_PDF.php?id=4233" target="_blank">Economics</a></li>
                    <li><a href="course_PDF.php?id=4234" target="_blank">Political Science</a></li>
                </ul>
              </li>
              <li><a href="course_PDF.php?id=424" target="_blank">Mathematics</a></li>
              <li><a href="course_PDF.php?id=425" target="_blank">Computer</a></li>
            </ul>           
      </li>
      <li><a href="#">Class VII</a>
            <ul>
              <li><a href="course_PDF.php?id=431" target="_blank">English</a></li>
              <li><a href="#">Science</a>
                <ul>
                    <li><a href="course_PDF.php?id=4321" target="_blank">Physics</a></li>
                    <li><a href="course_PDF.php?id=4322" target="_blank">Chemistry</a></li>
                    <li><a href="course_PDF.php?id=4323" target="_blank">Biology</a></li>
                </ul>
              </li>
              <li><a href="#">Social Science</a>
                <ul>
                    <li><a href="course_PDF.php?id=4331" target="_blank">History</a></li>
                    <li><a href="course_PDF.php?id=4332" target="_blank">Geography</a></li>
                    <li><a href="course_PDF.php?id=4333" target="_blank">Economics</a></li>
                    <li><a href="course_PDF.php?id=4334" target="_blank">Political Science</a></li>
                </ul>
              </li>
              <li><a href="course_PDF.php?id=434" target="_blank">Mathematics</a></li>
              <li><a href="course_PDF.php?id=435" target="_blank">Computer</a></li>
            </ul>           
      </li>
      <li><a href="#">Class VIII</a>
            <ul>
              <li><a href="course_PDF.php?id=441" target="_blank">English</a></li>
              <li><a href="#">Science</a>
                <ul>
                    <li><a href="course_PDF.php?id=4421" target="_blank">Physics</a></li>
                    <li><a href="course_PDF.php?id=4422" target="_blank">Chemistry</a></li>
                    <li><a href="course_PDF.php?id=4423" target="_blank">Biology</a></li>
                </ul>
              </li>
              <li><a href="#">Social Science</a>
                <ul>
                    <li><a href="course_PDF.php?id=4431" target="_blank">History</a></li>
                    <li><a href="course_PDF.php?id=4432" target="_blank">Geography</a></li>
                    <li><a href="course_PDF.php?id=4433" target="_blank">Economics</a></li>
                    <li><a href="course_PDF.php?id=4434" target="_blank">Political Science</a></li>
                </ul>
              </li>
              <li><a href="course_PDF.php?id=444" target="_blank">Mathematics</a></li>
              <li><a href="course_PDF.php?id=445" target="_blank">Computer</a></li>
            </ul>
      </li>
      <li><a href="#">Class IX</a>
            <ul>
              <li><a href="course_PDF.php?id=451" target="_blank">English</a></li>
              <li><a href="#">Science</a>
                <ul>
                    <li><a href="course_PDF.php?id=4521" target="_blank">Physics</a></li>
                    <li><a href="course_PDF.php?id=4522" target="_blank">Chemistry</a></li>
                    <li><a href="course_PDF.php?id=4523" target="_blank">Biology</a></li>
                </ul>
              </li>
              <li><a href="#">Social Science</a>
                <ul>
                    <li><a href="course_PDF.php?id=4531" target="_blank">History</a></li>
                    <li><a href="course_PDF.php?id=4532" target="_blank">Geography</a></li>
                    <li><a href="course_PDF.php?id=4533" target="_blank">Economics</a></li>
                    <li><a href="course_PDF.php?id=4534" target="_blank">Political Science</a></li>
                </ul>
              </li>
              <li><a href="course_PDF.php?id=454" target="_blank">Mathematics</a></li>
              <li><a href="course_PDF.php?id=455" target="_blank">Computer</a></li>
            </ul>
      </li>
      <li><a href="#">Class X</a>
            <ul>
              <li><a href="course_PDF.php?id=461" target="_blank">English</a></li>
              <li><a href="#">Science</a>
                <ul>
                    <li><a href="course_PDF.php?id=4621" target="_blank">Physics</a></li>
                    <li><a href="course_PDF.php?id=4622" target="_blank">Chemistry</a></li>
                    <li><a href="course_PDF.php?id=4623" target="_blank">Biology</a></li>
                </ul>
              </li>
              <li><a href="#">Social Science</a>
                <ul>
                    <li><a href="course_PDF.php?id=4631" target="_blank">History</a></li>
                    <li><a href="course_PDF.php?id=4632" target="_blank">Geography</a></li>
                    <li><a href="course_PDF.php?id=4633" target="_blank">Economics</a></li>
                    <li><a href="course_PDF.php?id=4634" target="_blank">Political Science</a></li>
                </ul>
              </li>
              <li><a href="course_PDF.php?id=464" target="_blank">Mathematics</a></li>
              <li><a href="course_PDF.php?id=465" target="_blank">Computer</a></li>
            </ul>
      </li>
      <li><a href="#">Class XI</a>
            <ul>
                <li><a href="course_PDF.php?id=471" target="_blank">English</a></li>
                <li><a href="course_PDF.php?id=472" target="_blank">Physics</a></li>
                <li><a href="course_PDF.php?id=473" target="_blank">Chemistry</a></li>
                <li><a href="course_PDF.php?id=474" target="_blank">Mathematics</a></li>
                <li><a href="course_PDF.php?id=475" target="_blank">Biology</a></li>
                <li><a href="course_PDF.php?id=476" target="_blank">Computer Science</a></li>
                <li><a href="course_PDF.php?id=477" target="_blank">Biotechnology</a></li>
            </ul>
      </li>
      <li><a href="#">Class XII</a>
            <ul>
                <li><a href="course_PDF.php?id=481" target="_blank">English</a></li>
                <li><a href="course_PDF.php?id=482" target="_blank">Physics</a></li>
                <li><a href="course_PDF.php?id=483" target="_blank">Chemistry</a></li>
                <li><a href="course_PDF.php?id=484" target="_blank">Mathematics</a></li>
                <li><a href="course_PDF.php?id=485" target="_blank">Biology</a></li>
                <li><a href="course_PDF.php?id=486" target="_blank">Computer Science</a></li>
                <li><a href="course_PDF.php?id=487" target="_blank">Biotechnology</a></li>
            </ul>  
      </li>
    </ul>
  </li>
  <li><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NCERT&nbsp;&nbsp;&nbsp;&nbsp;</a>
    <ul>
      <li><a href="course_PDF.php?id=51" target="_blank">Textbook</a>
      <li><a href="course_PDF.php?id=52" target="_blank">Textbook Solution</a>
      <li><a href="course_PDF.php?id=53" target="_blank">Exemplar</a>
      <li><a href="course_PDF.php?id=54" target="_blank">Exemplar Solution</a>
      <li><a href="course_PDF.php?id=55" target="_blank">Lab Manual</a>
    </ul>
  </li>

  <li><a href="#">&nbsp;&nbsp;&nbsp;MOCK TESTS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
    <ul>
      <li><a href="">Olympiads</a>
          <ul>
            <li><a href="course_PDF.php?id=611" target="_blank">Science Olympiad</a></li>
            <li><a href="course_PDF.php?id=612" target="_blank">Maths Olympiad</a></li>
            <li><a href="course_PDF.php?id=613" target="_blank">Computer Olympiad</a></li>
            <li><a href="course_PDF.php?id=614" target="_blank">English Olympiad</a></li>          
          </ul>
        </li>
        <li><a href="course_PDF.php?id=62" target="_blank">NEET</a></li>
        <li><a href="course_PDF.php?id=63" target="_blank">JEE(Mains & Advanced)</a></li>
        <li><a href="course_PDF.php?id=64" target="_blank">WBJEE</a></li>   
        <li><a href="course_PDF.php?id=65" target="_blank">NTSE</a></li>
        <li><a href="course_PDF.php?id=66" target="_blank">KVPY</a></li>
        <li><a href="course_PDF.php?id=67" target="_blank">IISER</a></li>
        <li><a href="course_PDF.php?id=68" target="_blank">NEST</a></li>
        <li><a href="course_PDF.php?id=69" target="_blank">NET</a></li>
        <li><a href="course_PDF.php?id=601" target="_blank">IIT-JAM</a></li>
        <li><a href="course_PDF.php?id=602" target="_blank">JNU</a></li>
    </ul>
  </li>
  
  <li><a href="#">STUDY MATERIALS</a>
    <ul>
      <li><a href="#">Class XII&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
        <ul>
          <li><a href="course_PDF.php?id=711" target="_blank">CBSE</a></li>
          <li><a href="course_PDF.php?id=712" target="_blank">ISC</a></li>
        </ul>
      </li>
      <li><a href="#">Class XI</a>
        <ul>
          <li><a href="course_PDF.php?id=721" target="_blank">CBSE</a></li>
          <li><a href="course_PDF.php?id=722" target="_blank">ISC</a></li>
        </ul>
      </li>
      <li><a href="#">Class X</a>
        <ul>
          <li><a href="course_PDF.php?id=731" target="_blank">CBSE</a></li>
          <li><a href="course_PDF.php?id=732" target="_blank">ICSE</a></li>
        </ul>
      </li>
      <li><a href="#">Class IX</a>
        <ul>
          <li><a href="course_PDF.php?id=741" target="_blank">CBSE</a></li>
          <li><a href="course_PDF.php?id=742" target="_blank">ICSE</a></li>
        </ul>
      </li>
      <li><a href="#">Class VIII</a>
        <ul>
          <li><a href="course_PDF.php?id=751" target="_blank">CBSE</a></li>
          <li><a href="course_PDF.php?id=752" target="_blank">ICSE</a></li>
        </ul>
      </li>
      <li><a href="#">Class VII</a>
        <ul>
          <li><a href="course_PDF.php?id=761" target="_blank">CBSE</a></li>
          <li><a href="course_PDF.php?id=762" target="_blank">ICSE</a></li>
        </ul>
      </li>
      <li><a href="#">Class VI</a>
        <ul>
          <li><a href="course_PDF.php?id=771" target="_blank">CBSE</a></li>
          <li><a href="course_PDF.php?id=772" target="_blank">ICSE</a></li>
        </ul>
      </li>
      <li><a href="#">Class I-V</a>
        <ul>
          <li><a href="course_PDF.php?id=781" target="_blank">CBSE</a></li>
          <li><a href="course_PDF.php?id=782" target="_blank">ICSE</a></li>
        </ul>
      </li>
    </ul>
  </li>
  <!--<li><a href="#contact_us">CONTACT US&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
      <ul>-->
      <!--</ul>
  </li>-->
 </ul>
</div>
</header>
    <!-- Main Header end -->
    <!-- main slider start -->
    <section class="irs-main-slider irs-main-slider-two">
        <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
            <div id="subject_pane">
                    <button class="button button1 color_combo3"><i class="fa fa-quote-left">
                    <a href="course_PDF.php">English</a></i></button>
                    <button class="button button1 color_combo2"><i class="fa fa-rocket">
                    <a href="course_PDF.php">Physics</a></i></button>
                    <button class="button button1 color_combo3"><i class="fa fa-flask">
                    <a href="course_PDF.php">Chemistry</a></i></button>
                    <button class="button button1 color_combo2"><i class="fa fa-heartbeat">
                    <a href="course_PDF.php">Biology</a></i></button>
                    <button class="button button1 color_combo3"><i class="fa fa-percent">
                    <a href="course_PDF.php">Mathematics</a></i></button>
                    <button class="button button1 color_combo2"><i class="fa fa-laptop">
                    <a href="course_PDF.php">Computer Science</a></i></button>
                    <button class="button button1 color_combo3"><i class="fa fa-venus-double">
                    <a href="course_PDF.php">Biotechnology</a></i></button>
            </div>
                    <div id="contact">
                            <div id="main_name">supriyo mondol</div>
                            <div id="name">You can call us at: </div>
                            <p>098743 10623 / 089814 35795</p>
                            <div id="name">You can mail us at: </div>
                            <p>asterixeducation@gmail.com</p>
                            <div id="name">You can reach us at: </div>
                            <p>23/8, Pranabananda Road,</p> 
                            <p>Near Kavi Nazrul Metro Station,</p> 
                            <p>Sreerampur, Garia, Kolkata, 
                            <p>West Bengal 700084</p>
                            <center><a href="#contact_us">KNOW MORE</a></center>
                    </div>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item slides active">
                    <div class="slide-1"></div>
                    <div class="hero">
                        <span class="blink"><h1><strong>*asterix</strong></h1></span>
                        <a href="#" class="btn btn-default irs-big-btn" style="color:white;"role="button">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Main slider end -->
    <!-- Discription start -->
    <marquee>
                    NCERT BOOKS<span class="blink strange_background">FREE</span>
                    NCERT SOLUTIONS<span class="blink strange_background">FREE</span>
                    NCERT EXAMPLER<span class="blink strange_background">FREE</span>
                    NCERT EXAMPLER SOLUTIONS<span class="blink strange_background">FREE</span>
                    PREVIOUS YEAR QUESTION PAPER<span class="blink strange_background">FREE</span>
                    STUDY MATERIALS,<span class="blink strange_background">FREE</span>
                    MOCK TESTS <span class="blink strange_background">FREE</span>
    </marquee>
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
                        <i class="fa fa-mobile"></i>
                        <p>098743 10623 / 089814 35795</p>
                    </div>
                    <div class="irs-address-col">
                        <i class="fa fa-envelope"></i>
                        <p>asterixeducation@gmail.com</p>
                    </div>
                    <div class="irs-address-col">
                        <i class="fa fa-map-marker"></i>
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
