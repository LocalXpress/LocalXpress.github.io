<?php include 'php/functions.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="images/apple-icon.png" rel="icon" type="image/png">
    <link href="images/favicon.png" rel="shortcut icon" type="image/png">
    <title>NOTES</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <style>
    #con
    {
        padding-top:70px;
    }
    #first
    {
        background-color:black;
    }
    #heading
    {
        text-transform:uppercase;
        text-align:center;
        border: 2px solid #009688;
        width: 200px;
        height: 100px;
        position: absolute;
        left: 0;
        right: 0;
        margin: auto;
    }
    #subject_header
    {
        padding:10px;
        font-size:20px;
    }
    #sub
    {
        width:20%;
        padding:10px;
        font-size:30px;
        border-left:6px solid #009688;
        margin-bottom:10px;
        background: #f3fff4;
    }
    #test
    {
        font-size:20px;
        color:black;
    }
    a
    {
        color:black;
    }
    </style>
    <script>
    window.onload =dir_info;
   
    function splitTest(str) {return (str.split('\\').pop().split('/').pop().split('.'))[0];}
    function dir_info()
    {
        var ch=<?php echo json_encode($_GET['id']);?>;

    /*CH VARIABLE GETS THE DIRECTORY ID FROM THE URL AND ACCORDING PARSES THE DIRECTORY FOR REQUIRED CONTENTS*/

/*===============================================================================================================================                                        CHANGES TO BE MADE AFTER THIS POINT
===============================================================================================================================*/
    if(ch==2)
    {   
        var class_name="XII";
        var sub_name="Biology"
        sub.innerHTML=class_name+" "+sub_name;
        subject_header.innerHTML=class_name+"  "+sub_name;

        var data_name=<?php echo json_encode(file_contents_of("./images/blog"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./images/bg"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==211)
    {
        //Science Olympiad
    }
    else if(ch==212)
    {
        //Maths Olympiad
    }
    else if(ch==213)
    {
        //Computer Olympiad
    }
    else if(ch==214)
    {
        //English Olympiad
    }
    else if(ch==22)
    {
        //NEET
    }
    else if(ch==23)
    {
        //JEE
    }
    else if(ch==24)
    {
        //WBJEE
    }
    else if(ch==25)
    {
        //NTSE
    }
    else if(ch==26)
    {
        //KVPY
    }
    else if(ch==27)
    {
        //IISER
    }
    else if(ch==28)
    {
        //NEST
    }
    else if(ch==29)
    {
        //NET
    }
    else if(ch==2a)
    {
        //IIT-JAM
    }
    else if(ch==2b)
    {
        //JNU
    }
    else if(ch==311)
    {
        //cbse class 1to5 english
    }
    else if(ch==312)
    {
        //cbse class 1to5 science
    }
    else if(ch==313)
    {
        //cbse class 1to5 social science
    }
    else if(ch==314)
    {
        //cbse class 1to5 maths
    }
    else if(ch==315)
    {
        //cbse class 1to5 computer
    }
    else if(ch==321)
    {
        //cbse class 6 english
    }
    else if(ch==3221)
    {
        //cbse class 6 physics
    }
    else if(ch==3222)
    {
        //cbse class 6 chemistry
    }
    else if(ch==3223)
    {
        //cbse class 6 biology
    }
    else if(ch==3231)
    {
        //cbse class 6 history
    }
    else if(ch==3232)
    {
        //cbse class 6 geography
    }
    else if(ch==3233)
    {
        //cbse class 6 economics
    }
    else if(ch==3234)
    {
        //cbse class 6 pol science
    }
    else if(ch==324)
    {
        //cbse class 6 maths
    }
    else if(ch==325)
    {
        //cbse class 6 computer
    }
    else if(ch==331)
    {
        //cbse class 7 english
    }
    else if(ch==3321)
    {
        //cbse class 7 physics
    }
    else if(ch==3322)
    {
        //cbse class 7 chemistry
    }
    else if(ch==3323)
    {
        //cbse class 7 biology
    }
    else if(ch==3331)
    {
        //cbse class 7 history
    }
    else if(ch==3332)
    {
        //cbse class 7 geography
    }
    else if(ch==3333)
    {
        //cbse class 7 economics
    }
    else if(ch==3334)
    {
        //cbse class 7 pol science
    }
    else if(ch==334)
    {
        //cbse class 7 maths
    }
    else if(ch==335)
    {
        //cbse class 7 computer
    }
    else if(ch==341)
    {
        //cbse class 8 english
    }
    else if(ch==3421)
    {
        //cbse class 8 physics
    }
    else if(ch==3422)
    {
        //cbse class 8 chemistry
    }
    else if(ch==3423)
    {
        //cbse class 8 biology
    }
    else if(ch==3431)
    {
        //cbse class 8 history
    }
    else if(ch==3432)
    {
        //cbse class 8 geography
    }
    else if(ch==3433)
    {
        //cbse class 8 economics
    }
    else if(ch==3434)
    {
        //cbse class 8 pol science
    }
    else if(ch==344)
    {
        //cbse class 8 maths
    }
    else if(ch==345)
    {
        //cbse class 8 computer
    }
    else if(ch==351)
    {
        //cbse class 9 english
    }
    else if(ch==3521)
    {
        //cbse class 9 physics
    }
    else if(ch==3522)
    {
        //cbse class 9 chemistry
    }
    else if(ch==3523)
    {
        //cbse class 9 biology
    }
    else if(ch==3531)
    {
        //cbse class 9 history
    }
    else if(ch==3532)
    {
        //cbse class 9 geography
    }
    else if(ch==3533)
    {
        //cbse class 9 economics
    }
    else if(ch==3534)
    {
        //cbse class 9 pol science
    }
    else if(ch==354)
    {
        //cbse class 9 maths
    }
    else if(ch==355)
    {
        //cbse class 9 computer
    }
    else if(ch==361)
    {
        //cbse class 10 english
    }
    else if(ch==3621)
    {
        //cbse class 10 physics
    }
    else if(ch==3622)
    {
        //cbse class 10 chemistry
    }
    else if(ch==3623)
    {
        //cbse class 10 biology
    }
    else if(ch==3631)
    {
        //cbse class 10 history
    }
    else if(ch==3632)
    {
        //cbse class 10 geography
    }
    else if(ch==3633)
    {
        //cbse class 10 economics
    }
    else if(ch==3634)
    {
        //cbse class 10 pol science
    }
    else if(ch==364)
    {
        //cbse class 10 maths
    }
    else if(ch==365)
    {
        //cbse class 10 computer
    }
    else if(ch==371)
    {
        //cbse class 11 english
    }
    else if(ch==372)
    {
        //cbse class 11 physics
    }
    else if(ch==373)
    {
        //cbse class 11 chemistry
    }
    else if(ch==374)
    {
        //cbse class 11 maths
    }
    else if(ch==375)
    {
        //cbse class 11 biology
    }
    else if(ch==376)
    {
        //cbse class 11 computer
    }
    else if(ch==377)
    {
        //cbse class 11 biotech
    }
    else if(ch==381)
    {
        //cbse class 12 english
    }
    else if(ch==382)
    {
        //cbse class 12 physics
    }
    else if(ch==383)
    {
        //cbse class 12 chemistry
    }
    else if(ch==384)
    {
        //cbse class 12 maths
    }
    else if(ch==385)
    {
        //cbse class 12 biology
    }
    else if(ch==386)
    {
        //cbse class 12 computer
    }
    else if(ch==387)
    {
        //cbse class 12 biotech
    }
    else if(ch==411)
    {
        //icse class 1to5 english
    }
    else if(ch==412)
    {
        //icse class 1to5 science
    }
    else if(ch==413)
    {
        //icse class 1to5 social science
    }
    else if(ch==414)
    {
        //icse class 1to5 maths
    }
    else if(ch==415)
    {
        //icse class 1to5 computer
    }
    else if(ch==421)
    {
        //icse class 6 english
    }
    else if(ch==4221)
    {
        //icse class 6 physics
    }
    else if(ch==4222)
    {
        //icse class 6 chemistry
    }
    else if(ch==4223)
    {
        //icse class 6 biology
    }
    else if(ch==4231)
    {
        //icse class 6 history
    }
    else if(ch==4232)
    {
        //icse class 6 geography
    }
    else if(ch==4233)
    {
        //icse class 6 economics
    }
    else if(ch==4234)
    {
        //icse class 6 pol science
    }
    else if(ch==424)
    {
        //icse class 6 maths
    }
    else if(ch==425)
    {
        //icse class 6 computer
    }
    else if(ch==431)
    {
        //icse class 7 english
    }
    else if(ch==4321)
    {
        //icse class 7 physics
    }
    else if(ch==4322)
    {
        //icse class 7 chemistry
    }
    else if(ch==4323)
    {
        //icse class 7 biology
    }
    else if(ch==4331)
    {
        //icse class 7 history
    }
    else if(ch==4332)
    {
        //icse class 7 geography
    }
    else if(ch==4333)
    {
        //icse class 7 economics
    }
    else if(ch==4334)
    {
        //icse class 7 pol science
    }
    else if(ch==434)
    {
        //icse class 7 maths
    }
    else if(ch==435)
    {
        //icse class 7 computer
    }
    else if(ch==441)
    {
        //icse class 8 english
    }
    else if(ch==4421)
    {
        //icse class 8 physics
    }
    else if(ch==4422)
    {
        //icse class 8 chemistry
    }
    else if(ch==4423)
    {
        //icse class 8 biology
    }
    else if(ch==4431)
    {
        //icse class 8 history
    }
    else if(ch==4432)
    {
        //icse class 8 geography
    }
    else if(ch==4433)
    {
        //icse class 8 economics
    }
    else if(ch==4434)
    {
        //icse class 8 pol science
    }
    else if(ch==444)
    {
        //icse class 8 maths
    }
    else if(ch==445)
    {
        //icse class 8 computer
    }
    else if(ch==451)
    {
        //icse class 9 english
    }
    else if(ch==4521)
    {
        //icse class 9 physics
    }
    else if(ch==4522)
    {
        //icse class 9 chemistry
    }
    else if(ch==4523)
    {
        //icse class 9 biology
    }
    else if(ch==4531)
    {
        //icse class 9 history
    }
    else if(ch==4532)
    {
        //icse class 9 geography
    }
    else if(ch==4533)
    {
        //icse class 9 economics
    }
    else if(ch==4534)
    {
        //icse class 9 pol science
    }
    else if(ch==454)
    {
        //icse class 9 maths
    }
    else if(ch==455)
    {
        //icse class 9 computer
    }
    else if(ch==461)
    {
        //icse class 10 english
    }
    else if(ch==4621)
    {
        //icse class 10 physics
    }
    else if(ch==4622)
    {
        //icse class 10 chemistry
    }
    else if(ch==4623)
    {
        //icse class 10 biology
    }
    else if(ch==4631)
    {
        //icse class 10 history
    }
    else if(ch==4632)
    {
        //icse class 10 geography
    }
    else if(ch==4633)
    {
        //icse class 10 economics
    }
    else if(ch==4634)
    {
        //icse class 10 pol science
    }
    else if(ch==464)
    {
        //icse class 10 maths
    }
    else if(ch==465)
    {
        //icse class 10 computer
    }
    else if(ch==471)
    {
        //icse class 11 english
    }
    else if(ch==472)
    {
        //icse class 11 physics
    }
    else if(ch==473)
    {
        //icse class 11 chemistry
    }
    else if(ch==474)
    {
        //icse class 11 maths
    }
    else if(ch==475)
    {
        //icse class 11 biology
    }
    else if(ch==476)
    {
        //icse class 11 computer
    }
    else if(ch==477)
    {
        //icse class 11 biotech
    }
    else if(ch==481)
    {
        //icse class 12 english
    }
    else if(ch==482)
    {
        //icse class 12 physics
    }
    else if(ch==483)
    {
        //icse class 12 chemistry
    }
    else if(ch==484)
    {
        //icse class 12 maths
    }
    else if(ch==485)
    {
        //icse class 12 biology
    }
    else if(ch==486)
    {
        //icse class 12 computer
    }
    else if(ch==487)
    {
        //icse class 12 biotech
    }
    else if(ch==51||ch==52||ch==53||ch==54||ch==55)
    {
        //ncert book
        //ncert solution
        //ncert exemplar
        //ncert exemplar solution
        //ncert lab manual
    }
    else if(ch==611)
    {
        //Science Olympiad
    }
    else if(ch==612)
    {
        //Maths Olympiad
    }
    else if(ch==613)
    {
        //Computer Olympiad
    }
    else if(ch==614)
    {
        //English Olympiad
    }
    else if(ch==62)
    {
        //NEET
    }
    else if(ch==63)
    {
        //JEE
    }
    else if(ch==64)
    {
        //WBJEE
    }
    else if(ch==65)
    {
        //NTSE
    }
    else if(ch==66)
    {
        //KVPY
    }
    else if(ch==67)
    {
        //IISER
    }
    else if(ch==68)
    {
        //NEST
    }
    else if(ch==69)
    {
        //NET
    }
    else if(ch==6a)
    {
        //IIT-JAM
    }
    else if(ch==6b)
    {
        //JNU
    }
   


/*===============================================================================================================================                                          NO CHANGES TO BE MADE AFTER THIS POINT
===============================================================================================================================*/
    if(data_name.length==0)
        alert("Empty Directory");
    else
    {   /*CREATES LINKS FOR GETTING THE DOCUMENTS*/
        node=document.querySelector('#test');
        copy=node.cloneNode(true);
        for(i=2;i<data_name.length;i++)
        {   
                file_name=splitTest(data_name[i]);
                copy.innerHTML="  <a href='try.html?id="+data_name[i]+"' target='_blank'>"+file_name+"</a>"; 
                node.appendChild(copy.cloneNode(true));
        }
    }
    }
    </script>
</head>
<body>
    <header class="irs-main-header">
        <div class="irs-header-top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-sm-4">
                        <div class="irs-header-top-col irs-center-2">
                            <p><i class="fa fa-star" aria-hidden="true"></i> ASTERIX</p>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </header>
    <br>



    <div id="heading">
    <p><div id="subject_header"></div>NOTES</p>
    </div>
    <div id="con">
        <div class="container">
            <div class="row">
                <div id="sub"></div>
                <div id="test"></div>
            </div>
            <br><br><br>
    </div>
</div>




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
</body>
</html>