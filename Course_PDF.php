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
    var splitTest = function (str) {return (str.split('\\').pop().split('/').pop().split('.'))[0];}
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


        var data_name=<?php echo json_encode(file_contents_of("./images/blog"), JSON_PRETTY_PRINT)?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./images/bg"), JSON_PRETTY_PRINT)?>);
    }   
    else ;


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
<body onload="dir_info();">
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