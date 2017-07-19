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

    .tdElement
    {
        float:left;
        min-width:250px;
        min-height: 50px;
        background-color: #ffffff;
        box-shadow: 3px 3px 3px;
        text-align: center;
        margin: 5px;
        border-radius: 3px;
        padding: 10px;
        background-image: url("images/folder.png");
        background-size: 50px 50px;
        background-repeat: no-repeat;
    }
    .tdElement:hover
    {
        background-color: #f3fff4;
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
        //Science Olympiad study material
        var data_name=<?php echo json_encode(file_contents_of("./data/competitive exams/Olympiads/Science Olympiad/Study Materials"), JSON_PRETTY_PRINT);?>;
    }
    else if(ch==212)
    {
        //Maths Olympiad study material
        var data_name=<?php echo json_encode(file_contents_of("./data/competitive exams/Olympiads/Maths Olympiad/Study Materials"), JSON_PRETTY_PRINT);?>;
    }
    else if(ch==213)
    {
        //Computer Olympiad study material
        var data_name=<?php echo json_encode(file_contents_of("./data/competitive exams/Olympiads/Computer Olympiad/Study Materials"), JSON_PRETTY_PRINT);?>;
    }
    else if(ch==214)
    {
        //English Olympiad study material
        var data_name=<?php echo json_encode(file_contents_of("./data/competitive exams/Olympiads/English Olympiad/Study Materials"), JSON_PRETTY_PRINT);?>;
    }
    else if(ch==22)
    {
        //NEET study material 
        var data_name=<?php echo json_encode(file_contents_of("./data/competitive exams/NEET/Study Materials"), JSON_PRETTY_PRINT);?>;
    }
    else if(ch==23)
    {
        //JEE study material
        var data_name=<?php echo json_encode(file_contents_of("./data/competitive exams/JEE/Study Materials"), JSON_PRETTY_PRINT);?>;
    }
    else if(ch==24)
    {
        //WBJEE study material
        var data_name=<?php echo json_encode(file_contents_of("./data/competitive exams/WBJEE/Study Materials"), JSON_PRETTY_PRINT);?>;
    }
    else if(ch==25)
    {
        //NTSE study material
        var data_name=<?php echo json_encode(file_contents_of("./data/competitive exams/NTSE/Study Materials"), JSON_PRETTY_PRINT);?>;
    }
    else if(ch==26)
    {
        //KVPY study material
        var data_name=<?php echo json_encode(file_contents_of("./data/competitive exams/KVPY/Study Materials"), JSON_PRETTY_PRINT);?>;
    }
    else if(ch==27)
    {
        //IISER study material
        var data_name=<?php echo json_encode(file_contents_of("./data/competitive exams/IISER/Study Materials"), JSON_PRETTY_PRINT);?>;
    }
    else if(ch==28)
    {
        //NEST study material
        var data_name=<?php echo json_encode(file_contents_of("./data/competitive exams/NEST/Study Materials"), JSON_PRETTY_PRINT);?>;
    }
    else if(ch==29)
    {
        //NET study material
        var data_name=<?php echo json_encode(file_contents_of("./data/competitive exams/NET/Study Materials"), JSON_PRETTY_PRINT);?>;
    }
    else if(ch==201)
    {
        //IIT-JAM study material
        var data_name=<?php echo json_encode(file_contents_of("./data/competitive exams/IIT-JAM/Study Materials"), JSON_PRETTY_PRINT);?>;
    }
    else if(ch==202)
    {
        //JNU study material
        var data_name=<?php echo json_encode(file_contents_of("./data/competitive exams/JNU/Study Materials"), JSON_PRETTY_PRINT);?>;
    }
    else if(ch==311)
    {
        //cbse class 1to5 english
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/English/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/English/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/English/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/English/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/English/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/English/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==312)
    {
        //cbse class 1to5 science
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/Science/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/Science/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/Science/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/Science/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/Science/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/Science/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/Science/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==313)
    {
        //cbse class 1to5 social science
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/Social Science/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/Social Science/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/Social Science/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/Social Science/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/Social Science/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/Social Science/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/Social Science/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==314)
    {
        //cbse class 1to5 maths
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/Mathematics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/Mathematics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/Mathematics/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/Mathematics/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/Mathematics/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/Mathematics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/Mathematics/Worksheets"), JSON_PRETTY_PRINT);?>); 
    }
    else if(ch==315)
    {
        //cbse class 1to5 computer
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/Computer/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/Computer/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/Computer/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/Computer/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/Computer/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/Computer/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==321)
    {
        //cbse class 6 english
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/English/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/English/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/English/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/English/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/English/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/English/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==3221)
    {
        //cbse class 6 physics
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Science/Physics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Science/Physics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Science/Physics/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Science/Physics/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Science/Physics/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Science/Physics/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Science/Physics/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Science/Physics/NCERT/Lab Manuals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Science/Physics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Science/Physics/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==3222)
    {
        //cbse class 6 chemistry
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Science/Chemistry/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Science/Chemistry/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Science/Chemistry/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Science/Chemistry/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Science/Chemistry/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Science/Chemistry/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Science/Chemistry/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Science/Chemistry/NCERT/Lab Manuals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Science/Chemistry/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Science/Chemistry/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==3223)
    {
        //cbse class 6 biology
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Science/Biology/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Science/Biology/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Science/Biology/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Science/Biology/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Science/Biology/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Science/Biology/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Science/Biology/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Science/Biology/NCERT/Lab Manuals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Science/Biology/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Science/Biology/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==3231)
    {
        //cbse class 6 history
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/History/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/History/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/History/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/History/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/History/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/History/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/History/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/History/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/History/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==3232)
    {
        //cbse class 6 geography
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/Geography/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/Geography/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/Geography/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/Geography/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/Geography/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/Geography/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/Geography/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/Geography/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/Geography/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==3233)
    {
        //cbse class 6 economics
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/Economics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/Economics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/Economics/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/Economics/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/Economics/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/Economics/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/Economics/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/Economics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/Economics/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==3234)
    {
        //cbse class 6 pol science
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/Political Science/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/Political Science/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/Political Science/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/Political Science/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/Political Science/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/Political Science/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/Political Science/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/Political Science/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/Political Science/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==324)
    {
        //cbse class 6 maths
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Mathematics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Mathematics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Mathematics/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Mathematics/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Mathematics/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Mathematics/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Mathematics/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Mathematics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Mathematics/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==325)
    {
        //cbse class 6 computer
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Computer/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Computer/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Computer/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Computer/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Computer/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Computer/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==331)
    {
        //cbse class 7 english
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/English/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/English/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/English/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/English/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/English/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/English/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==3321)
    {
        //cbse class 7 physics
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Science/Physics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Science/Physics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Science/Physics/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Science/Physics/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Science/Physics/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Science/Physics/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Science/Physics/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Science/Physics/NCERT/Lab Manuals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Science/Physics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Science/Physics/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==3322)
    {
        //cbse class 7 chemistry
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Science/Chemistry/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Science/Chemistry/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Science/Chemistry/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Science/Chemistry/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Science/Chemistry/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Science/Chemistry/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Science/Chemistry/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Science/Chemistry/NCERT/Lab Manuals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Science/Chemistry/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Science/Chemistry/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==3323)
    {
        //cbse class 7 biology
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Science/Biology/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Science/Biology/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Science/Biology/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Science/Biology/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Science/Biology/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Science/Biology/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Science/Biology/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Science/Biology/NCERT/Lab Manuals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Science/Biology/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Science/Biology/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==3331)
    {
        //cbse class 7 history
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/History/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/History/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/History/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/History/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/History/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/History/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/History/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/History/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/History/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==3332)
    {
        //cbse class 7 geography
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/Geography/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/Geography/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/Geography/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/Geography/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/Geography/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/Geography/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/Geography/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/Geography/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/Geography/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==3333)
    {
        //cbse class 7 economics
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/Economics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/Economics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/Economics/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/Economics/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/Economics/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/Economics/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/Economics/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/Economics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/Economics/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==3334)
    {
        //cbse class 7 pol science
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/Political Science/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/Political Science/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/Political Science/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/Political Science/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/Political Science/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/Political Science/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/Political Science/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/Political Science/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/Political Science/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==334)
    {
        //cbse class 7 maths
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Mathematics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Mathematics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Mathematics/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Mathematics/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Mathematics/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Mathematics/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Mathematics/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Mathematics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Mathematics/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==335)
    {
        //cbse class 7 computer
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Computer/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Computer/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Computer/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Computer/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Computer/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Computer/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==341)
    {
        //cbse class 8 english
         var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/English/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/English/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/English/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/English/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/English/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/English/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==3421)
    {
        //cbse class 8 physics
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Science/Physics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Science/Physics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Science/Physics/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Science/Physics/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Science/Physics/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Science/Physics/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Science/Physics/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Science/Physics/NCERT/Lab Manuals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Science/Physics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Science/Physics/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==3422)
    {
        //cbse class 8 chemistry
         var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Science/Chemistry/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Science/Chemistry/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Science/Chemistry/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Science/Chemistry/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Science/Chemistry/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Science/Chemistry/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Science/Chemistry/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Science/Chemistry/NCERT/Lab Manuals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Science/Chemistry/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Science/Chemistry/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==3423)
    {
        //cbse class 8 biology
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Science/Biology/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Science/Biology/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Science/Biology/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Science/Biology/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Science/Biology/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Science/Biology/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Science/Biology/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Science/Biology/NCERT/Lab Manuals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Science/Biology/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Science/Biology/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==3431)
    {
        //cbse class 8 history
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/History/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/History/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/History/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/History/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/History/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/History/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/History/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/History/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/History/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==3432)
    {
        //cbse class 8 geography
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/Geography/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/Geography/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/Geography/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/Geography/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/Geography/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/Geography/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/Geography/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/Geography/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/Geography/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==3433)
    {
        //cbse class 8 economics
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/Economics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/Economics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/Economics/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/Economics/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/Economics/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/Economics/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/Economics/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/Economics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/Economics/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==3434)
    {
        //cbse class 8 pol science
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/Political Science/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/Political Science/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/Political Science/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/Political Science/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/Political Science/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/Political Science/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/Political Science/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/Political Science/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/Political Science/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==344)
    {
        //cbse class 8 maths
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Mathematics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Mathematics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Mathematics/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Mathematics/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Mathematics/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Mathematics/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Mathematics/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Mathematics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Mathematics/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==345)
    {
        //cbse class 8 computer
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Computer/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Computer/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Computer/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Computer/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Computer/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Computer/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==351)
    {
        //cbse class 9 english
         var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/English/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/English/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/English/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/English/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/English/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/English/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==3521)
    {
        //cbse class 9 physics
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Science/Physics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Science/Physics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Science/Physics/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Science/Physics/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Science/Physics/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Science/Physics/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Science/Physics/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Science/Physics/NCERT/Lab Manuals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Science/Physics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Science/Physics/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==3522)
    {
        //cbse class 9 chemistry
         var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Science/Chemistry/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Science/Chemistry/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Science/Chemistry/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Science/Chemistry/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Science/Chemistry/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Science/Chemistry/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Science/Chemistry/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Science/Chemistry/NCERT/Lab Manuals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Science/Chemistry/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Science/Chemistry/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==3523)
    {
        //cbse class 9 biology
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Science/Biology/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Science/Biology/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Science/Biology/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Science/Biology/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Science/Biology/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Science/Biology/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Science/Biology/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Science/Biology/NCERT/Lab Manuals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Science/Biology/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Science/Biology/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==3531)
    {
        //cbse class 9 history
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/History/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/History/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/History/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/History/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/History/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/History/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/History/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/History/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/History/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==3532)
    {
        //cbse class 9 geography
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/Geography/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/Geography/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/Geography/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/Geography/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/Geography/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/Geography/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/Geography/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/Geography/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/Geography/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==3533)
    {
        //cbse class 9 economics
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/Economics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/Economics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/Economics/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/Economics/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/Economics/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/Economics/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/Economics/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/Economics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/Economics/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==3534)
    {
        //cbse class 9 pol science
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/Political Science/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/Political Science/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/Political Science/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/Political Science/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/Political Science/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/Political Science/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/Political Science/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/Political Science/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/Political Science/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==354)
    {
        //cbse class 9 maths
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Mathematics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Mathematics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Mathematics/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Mathematics/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Mathematics/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Mathematics/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Mathematics/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Mathematics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Mathematics/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==355)
    {
        //cbse class 9 computer
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Computer/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Computer/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Computer/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Computer/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Computer/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Computer/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==361)
    {
        //cbse class 10 english
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/English/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/English/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/English/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/English/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/English/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/English/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/English/C.B.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/English/C.B.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==3621)
    {
        //cbse class 10 physics
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Physics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Physics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Physics/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Physics/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Physics/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Physics/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Physics/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Physics/NCERT/Lab Manuals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Physics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Physics/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Physics/C.B.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Physics/C.B.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==3622)
    {
        //cbse class 10 chemistry
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Chemistry/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Chemistry/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Chemistry/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Chemistry/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Chemistry/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Chemistry/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Chemistry/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Chemistry/NCERT/Lab Manuals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Chemistry/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Chemistry/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Chemistry/C.B.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Chemistry/C.B.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==3623)
    {
        //cbse class 10 biology
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Biology/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Biology/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Biology/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Biology/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Biology/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Biology/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Biology/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Biology/NCERT/Lab Manuals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Biology/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Biology/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Biology/C.B.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Biology/C.B.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==3631)
    {
        //cbse class 10 history
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/History/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/History/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/History/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/History/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/History/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/History/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/History/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/History/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/History/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/History/C.B.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/History/C.B.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==3632)
    {
        //cbse class 10 geography
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Geography/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Geography/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Geography/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Geography/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Geography/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Geography/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Geography/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Geography/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Geography/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Geography/C.B.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Geography/C.B.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==3633)
    {
        //cbse class 10 economics
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Economics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Economics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Economics/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Economics/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Economics/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Economics/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Economics/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Economics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Economics/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Economics/C.B.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Economics/C.B.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==3634)
    {
        //cbse class 10 pol science
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Political Science/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Political Science/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Political Science/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Political Science/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Political Science/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Political Science/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Political Science/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Political Science/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Political Science/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Political Science/C.B.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Political Science/C.B.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==364)
    {
        //cbse class 10 maths
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Mathematics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Mathematics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Mathematics/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Mathematics/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Mathematics/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Mathematics/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Mathematics/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Mathematics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Mathematics/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Mathematics/C.B.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Mathematics/C.B.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==365)
    {
        //cbse class 10 computer
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Computer/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Computer/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Computer/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Computer/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Computer/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Computer/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Computer/C.B.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Computer/C.B.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==371)
    {
        //cbse class 11 english
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/English/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/English/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/English/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/English/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/English/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/English/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/English/C.B.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/English/C.B.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==372)
    {
        //cbse class 11 physics
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Physics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Physics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Physics/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Physics/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Physics/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Physics/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Physics/NCERT/Lab Manuals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Physics/MCQs/JEE Mains & Advanced"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Physics/MCQs/NEET"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Physics/MCQs/WBJEE Engineering"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Physics/MCQs/WBJEE Medicals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Physics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Physics/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Physics/C.B.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Physics/C.B.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==373)
    {
        //cbse class 11 chemistry
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Chemistry/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Chemistry/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Chemistry/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Chemistry/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Chemistry/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Chemistry/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Chemistry/NCERT/Lab Manuals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Chemistry/MCQs/JEE Mains & Advanced"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Chemistry/MCQs/NEET"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Chemistry/MCQs/WBJEE Engineering"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Chemistry/MCQs/WBJEE Medicals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Chemistry/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Chemistry/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Chemistry/C.B.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Chemistry/C.B.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==374)
    {
        //cbse class 11 maths
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Mathematics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Mathematics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Mathematics/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Mathematics/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Mathematics/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Mathematics/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Mathematics/MCQs/JEE Mains & Advanced"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Mathematics/MCQs/WBJEE Engineering"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Mathematics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Mathematics/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Mathematics/C.B.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Mathematics/C.B.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==375)
    {
        //cbse class 11 biology
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Biology/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Biology/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Biology/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Biology/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Biology/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Biology/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Biology/NCERT/Lab Manuals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Biology/MCQs/NEET"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Biology/MCQs/WBJEE Medicals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Biology/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Biology/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Biology/C.B.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Biology/C.B.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==376)
    {
        //cbse class 11 computer
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Computer/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Computer/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);  
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Computer/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Computer/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Computer/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Computer/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Computer/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Computer/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Computer/C.B.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Computer/C.B.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==377)
    {
        //cbse class 11 biotech
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Biotechnology/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Biotechnology/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Biotechnology/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Biotechnology/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Biotechnology/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Biotechnology/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Biotechnology/NCERT/Lab Manuals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Biotechnology/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Biotechnology/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Biotechnology/C.B.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Biotechnology/C.B.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==381)
    {
        //cbse class 12 english
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/English/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/English/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/English/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/English/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/English/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/English/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/English/C.B.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/English/C.B.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==382)
    {
        //cbse class 12 physics
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Physics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Physics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Physics/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Physics/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Physics/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Physics/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Physics/NCERT/Lab Manuals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Physics/MCQs/JEE Mains & Advanced"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Physics/MCQs/NEET"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Physics/MCQs/WBJEE Engineering"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Physics/MCQs/WBJEE Medicals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Physics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Physics/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Physics/C.B.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Physics/C.B.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==383)
    {
        //cbse class 12 chemistry
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Chemistry/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Chemistry/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Chemistry/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Chemistry/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Chemistry/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Chemistry/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Chemistry/NCERT/Lab Manuals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Chemistry/MCQs/JEE Mains & Advanced"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Chemistry/MCQs/NEET"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Chemistry/MCQs/WBJEE Engineering"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Chemistry/MCQs/WBJEE Medicals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Chemistry/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Chemistry/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Chemistry/C.B.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Chemistry/C.B.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==384)
    {
        //cbse class 12 maths
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Mathematics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Mathematics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Mathematics/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Mathematics/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Mathematics/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Mathematics/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Mathematics/MCQs/JEE Mains & Advanced"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Mathematics/MCQs/WBJEE Engineering"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Mathematics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Mathematics/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Mathematics/C.B.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Mathematics/C.B.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==385)
    {
        //cbse class 12 biology
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Biology/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Biology/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Biology/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Biology/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Biology/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Biology/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Biology/NCERT/Lab Manuals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Biology/MCQs/NEET"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Biology/MCQs/WBJEE Medicals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Biology/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Biology/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Biology/C.B.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Biology/C.B.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==386)
    {
        //cbse class 12 computer
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Computer/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Computer/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);  
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Computer/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Computer/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Computer/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Computer/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Computer/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Computer/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Computer/C.B.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Computer/C.B.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==387)
    {
        //cbse class 12 biotech
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Biotechnology/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Biotechnology/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Biotechnology/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Biotechnology/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Biotechnology/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Biotechnology/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Biotechnology/NCERT/Lab Manuals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Biotechnology/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Biotechnology/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Biotechnology/C.B.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Biotechnology/C.B.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==411)
    {
        //icse class 1to5 english
        var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class I-V/English/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class I-V/English/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class I-V/English/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class I-V/English/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class I-V/English/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class I-V/English/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==412)
    {
        //icse class 1to5 science
        var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class I-V/Science/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class I-V/Science/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class I-V/Science/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class I-V/Science/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class I-V/Science/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class I-V/Science/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class I-V/Science/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==413)
    {
        //icse class 1to5 social science
        var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class I-V/Social Science/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class I-V/Social Science/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class I-V/Social Science/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class I-V/Social Science/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class I-V/Social Science/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class I-V/Social Science/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class I-V/Social Science/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==414)
    {
        //icse class 1to5 maths
        var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class I-V/Mathematics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class I-V/Mathematics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class I-V/Mathematics/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class I-V/Mathematics/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class I-V/Mathematics/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class I-V/Mathematics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class I-V/Mathematics/Worksheets"), JSON_PRETTY_PRINT);?>); 
    }
    else if(ch==415)
    {
        //icse class 1to5 computer
        var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class I-V/Computer/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class I-V/Computer/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class I-V/Computer/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class I-V/Computer/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class I-V/Computer/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class I-V/Computer/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==421)
    {
        //icse class 6 english
        var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/English/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/English/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/English/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/English/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/English/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/English/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==4221)
    {
        //icse class 6 physics
        var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Science/Physics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Science/Physics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Science/Physics/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Science/Physics/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Science/Physics/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Science/Physics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Science/Physics/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==4222)
    {
        //icse class 6 chemistry
        var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Science/Chemistry/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Science/Chemistry/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Science/Chemistry/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Science/Chemistry/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Science/Chemistry/Textbook Solution"), JSON_PRETTY_PRINT);?>);
       data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Science/Chemistry/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Science/Chemistry/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==4223)
    {
        //icse class 6 biology
        var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Science/Biology/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Science/Biology/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Science/Biology/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Science/Biology/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Science/Biology/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Science/Biology/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Science/Biology/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==4231)
    {
        //icse class 6 history
        var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Social Science/History/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Social Science/History/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Social Science/History/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Social Science/History/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Social Science/History/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Social Science/History/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Social Science/History/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==4232)
    {
        //icse class 6 geography
        var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Social Science/Geography/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Social Science/Geography/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Social Science/Geography/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Social Science/Geography/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Social Science/Geography/Textbook Solution"), JSON_PRETTY_PRINT);?>);
         data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Social Science/Geography/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Social Science/Geography/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==4233)
    {
        //icse class 6 economics
        var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Social Science/Economics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Social Science/Economics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Social Science/Economics/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Social Science/Economics/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Social Science/Economics/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Social Science/Economics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Social Science/Economics/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==4234)
    {
        //icse class 6 pol science
        var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Social Science/Political Science/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Social Science/Political Science/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Social Science/Political Science/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Social Science/Political Science/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Social Science/Political Science/Textbook Solution"), JSON_PRETTY_PRINT);?>);
         data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Social Science/Political Science/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Social Science/Political Science/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==424)
    {
        //icse class 6 maths
        var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Mathematics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Mathematics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Mathematics/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Mathematics/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Mathematics/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Mathematics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Mathematics/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==425)
    {
        //icse class 6 computer
        var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Computer/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Computer/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Computer/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Computer/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Computer/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Computer/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==431)
    {
        //icse class 7 english
        var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/English/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/English/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/English/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/English/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/English/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/English/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==4321)
    {
        //icse class 7 physics
        var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Science/Physics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Science/Physics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Science/Physics/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Science/Physics/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Science/Physics/Textbook Solution"), JSON_PRETTY_PRINT);?>);
       data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Science/Physics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Science/Physics/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==4322)
    {
        //icse class 7 chemistry
        var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Science/Chemistry/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Science/Chemistry/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Science/Chemistry/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Science/Chemistry/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Science/Chemistry/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Science/Chemistry/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Science/Chemistry/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==4323)
    {
        //icse class 7 biology
        var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Science/Biology/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Science/Biology/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Science/Biology/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Science/Biology/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Science/Biology/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Science/Biology/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Science/Biology/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==4331)
    {
        //icse class 7 history
        var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Social Science/History/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Social Science/History/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Social Science/History/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Social Science/History/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Social Science/History/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Social Science/History/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Social Science/History/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==4332)
    {
        //icse class 7 geography
        var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Social Science/Geography/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Social Science/Geography/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Social Science/Geography/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Social Science/Geography/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Social Science/Geography/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Social Science/Geography/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Social Science/Geography/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==4333)
    {
        //icse class 7 economics
        var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Social Science/Economics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Social Science/Economics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Social Science/Economics/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Social Science/Economics/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Social Science/Economics/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Social Science/Economics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Social Science/Economics/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==4334)
    {
        //icse class 7 pol science
        var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Social Science/Political Science/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Social Science/Political Science/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Social Science/Political Science/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Social Science/Political Science/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Social Science/Political Science/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Social Science/Political Science/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Social Science/Political Science/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==434)
    {
        //icse class 7 maths
        var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Mathematics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Mathematics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Mathematics/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Mathematics/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Mathematics/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Mathematics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Mathematics/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==435)
    {
        //icse class 7 computer
        var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Computer/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Computer/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Computer/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Computer/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Computer/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Computer/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==441)
    {
        //icse class 8 english
         var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/English/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/English/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/English/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/English/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/English/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/English/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==4421)
    {
        //icse class 8 physics
        var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Science/Physics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Science/Physics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Science/Physics/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Science/Physics/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Science/Physics/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Science/Physics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Science/Physics/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==4422)
    {
        //icse class 8 chemistry
         var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Science/Chemistry/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Science/Chemistry/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Science/Chemistry/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Science/Chemistry/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Science/Chemistry/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Science/Chemistry/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Science/Chemistry/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==4423)
    {
        //icse class 8 biology
        var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Science/Biology/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Science/Biology/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Science/Biology/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Science/Biology/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Science/Biology/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Science/Biology/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Science/Biology/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==4431)
    {
        //icse class 8 history
        var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Social Science/History/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Social Science/History/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Social Science/History/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Social Science/History/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Social Science/History/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Social Science/History/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Social Science/History/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==4432)
    {
        //icse class 8 geography
        var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Social Science/Geography/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Social Science/Geography/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Social Science/Geography/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Social Science/Geography/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Social Science/Geography/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Social Science/Geography/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Social Science/Geography/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==4433)
    {
        //icse class 8 economics
        var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Social Science/Economics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Social Science/Economics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Social Science/Economics/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Social Science/Economics/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Social Science/Economics/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Social Science/Economics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Social Science/Economics/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==4434)
    {
        //icse class 8 pol science
        var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Social Science/Political Science/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Social Science/Political Science/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Social Science/Political Science/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Social Science/Political Science/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Social Science/Political Science/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Social Science/Political Science/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Social Science/Political Science/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==444)
    {
        //icse class 8 maths
        var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Mathematics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Mathematics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Mathematics/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Mathematics/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Mathematics/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Mathematics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Mathematics/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==445)
    {
        //icse class 8 computer
        var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Computer/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Computer/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Computer/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Computer/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Computer/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Computer/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==451)
    {
        //icse class 9 english
        var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/English/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/English/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/English/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/English/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/English/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/English/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==4521)
    {
        //icse class 9 physics
        var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Science/Physics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Science/Physics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Science/Physics/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Science/Physics/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Science/Physics/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Science/Physics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Science/Physics/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==4522)
    {
        //icse class 9 chemistry
         var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Science/Chemistry/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Science/Chemistry/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Science/Chemistry/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Science/Chemistry/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Science/Chemistry/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Science/Chemistry/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Science/Chemistry/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==4523)
    {
        //icse class 9 biology
        var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Science/Biology/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Science/Biology/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Science/Biology/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Science/Biology/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Science/Biology/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Science/Biology/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Science/Biology/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==4531)
    {
        //icse class 9 history
        var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Social Science/History/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Social Science/History/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Social Science/History/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Social Science/History/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Social Science/History/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Social Science/History/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Social Science/History/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==4532)
    {
        //icse class 9 geography
        var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Social Science/Geography/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Social Science/Geography/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Social Science/Geography/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Social Science/Geography/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Social Science/Geography/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Social Science/Geography/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Social Science/Geography/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==4533)
    {
        //icse class 9 economics
        var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Social Science/Economics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Social Science/Economics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Social Science/Economics/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Social Science/Economics/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Social Science/Economics/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Social Science/Economics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Social Science/Economics/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==4534)
    {
        //icse class 9 pol science
        var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Social Science/Political Science/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Social Science/Political Science/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Social Science/Political Science/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Social Science/Political Science/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Social Science/Political Science/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Social Science/Political Science/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Social Science/Political Science/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==454)
    {
        //icse class 9 maths
        var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Mathematics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Mathematics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Mathematics/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Mathematics/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Mathematics/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Mathematics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Mathematics/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==455)
    {
        //icse class 9 computer
        var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Computer/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Computer/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Computer/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Computer/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Computer/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Computer/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==461)
    {
        //icse class 10 english
        var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/English/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/English/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/English/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/English/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/English/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/English/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/English/I.C.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/English/I.C.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==4621)
    {
        //icse class 10 physics
        var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Science/Physics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Science/Physics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Science/Physics/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Science/Physics/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Science/Physics/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Science/Physics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Science/Physics/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Science/Physics/I.C.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Science/Physics/I.C.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==4622)
    {
        //icse class 10 chemistry
        var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Science/Chemistry/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Science/Chemistry/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Science/Chemistry/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Science/Chemistry/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Science/Chemistry/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Science/Chemistry/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Science/Chemistry/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Science/Chemistry/I.C.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Science/Chemistry/I.C.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==4623)
    {
        //icse class 10 biology
        var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Science/Biology/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Science/Biology/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Science/Biology/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Science/Biology/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Science/Biology/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Science/Biology/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Science/Biology/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Science/Biology/I.C.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Science/Biology/I.C.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==4631)
    {
        //icse class 10 history
        var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Social Science/History/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Social Science/History/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Social Science/History/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Social Science/History/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Social Science/History/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Social Science/History/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Social Science/History/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Social Science/History/I.C.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Social Science/History/I.C.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==4632)
    {
        //icse class 10 geography
        var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Social Science/Geography/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Social Science/Geography/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Social Science/Geography/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Social Science/Geography/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Social Science/Geography/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Social Science/Geography/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Social Science/Geography/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Social Science/Geography/I.C.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Social Science/Geography/I.C.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==4633)
    {
        //icse class 10 economics
        var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Social Science/Economics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Social Science/Economics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Social Science/Economics/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Social Science/Economics/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Social Science/Economics/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Social Science/Economics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Social Science/Economics/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Social Science/Economics/I.C.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Social Science/Economics/I.C.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==4634)
    {
        //icse class 10 pol science
        var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Social Science/Political Science/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Social Science/Political Science/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Social Science/Political Science/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Social Science/Political Science/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Social Science/Political Science/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Social Science/Political Science/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Social Science/Political Science/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Social Science/Political Science/I.C.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Social Science/Political Science/I.C.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==464)
    {
        //icse class 10 maths
        var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Mathematics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Mathematics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Mathematics/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Mathematics/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Mathematics/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Mathematics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Mathematics/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Mathematics/I.C.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Mathematics/I.C.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==465)
    {
        //icse class 10 computer
        var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Computer/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Computer/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Computer/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Computer/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Computer/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Computer/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Computer/I.C.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Computer/I.C.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==471)
    {
        //icse class 11 english
        var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/English/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/English/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/English/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/English/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/English/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/English/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/English/I.C.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/English/I.C.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==472)
    {
        //icse class 11 physics
        var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Physics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Physics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Physics/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Physics/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Physics/MCQs/JEE Mains & Advanced"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Physics/MCQs/NEET"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Physics/MCQs/WBJEE Engineering"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Physics/MCQs/WBJEE Medicals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Physics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Physics/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Physics/I.C.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Physics/I.C.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==473)
    {
        //icse class 11 chemistry
        var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Chemistry/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Chemistry/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Chemistry/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Chemistry/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Chemistry/MCQs/JEE Mains & Advanced"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Chemistry/MCQs/NEET"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Chemistry/MCQs/WBJEE Engineering"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Chemistry/MCQs/WBJEE Medicals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Chemistry/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Chemistry/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Chemistry/I.C.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Chemistry/I.C.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==474)
    {
        //icse class 11 maths
        var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Mathematics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Mathematics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Mathematics/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Mathematics/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Mathematics/MCQs/JEE Mains & Advanced"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Mathematics/MCQs/WBJEE Engineering"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Mathematics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Mathematics/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Mathematics/I.C.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Mathematics/I.C.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==475)
    {
        //icse class 11 biology
        var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Biology/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Biology/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Biology/NCERT/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Biology/NCERT/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Biology/MCQs/NEET"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Biology/MCQs/WBJEE Medicals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Biology/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Biology/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Biology/I.C.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Biology/I.C.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==476)
    {
        //icse class 11 computer
        var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Computer/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Computer/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);  
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Computer/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Computer/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Computer/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Computer/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Computer/I.C.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Computer/I.C.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==477)
    {
        //icse class 11 biotech
        var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Biotechnology/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Biotechnology/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Biotechnology/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Biotechnology/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Biotechnology/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Biotechnology/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Biotechnology/I.C.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Biotechnology/I.C.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==481)
    {
        //icse class 12 english
        var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/English/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/English/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/English/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/English/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/English/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/English/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/English/I.C.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/English/I.C.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==482)
    {
        //icse class 12 physics
        var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Physics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Physics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Physics/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Physics/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Physics/MCQs/JEE Mains & Advanced"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Physics/MCQs/NEET"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Physics/MCQs/WBJEE Engineering"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Physics/MCQs/WBJEE Medicals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Physics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Physics/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Physics/I.C.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Physics/I.C.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==483)
    {
        //icse class 12 chemistry
        var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Chemistry/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Chemistry/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Chemistry/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Chemistry/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Chemistry/MCQs/JEE Mains & Advanced"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Chemistry/MCQs/NEET"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Chemistry/MCQs/WBJEE Engineering"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Chemistry/MCQs/WBJEE Medicals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Chemistry/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Chemistry/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Chemistry/I.C.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Chemistry/I.C.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==484)
    {
        //icse class 12 maths
        var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Mathematics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Mathematics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Mathematics/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Mathematics/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Mathematics/MCQs/JEE Mains & Advanced"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Mathematics/MCQs/WBJEE Engineering"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Mathematics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Mathematics/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Mathematics/I.C.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Mathematics/I.C.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==485)
    {
        //icse class 12 biology
        var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Biology/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Biology/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Biology/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Biology/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Biology/MCQs/NEET"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Biology/MCQs/WBJEE Medicals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Biology/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Biology/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Biology/I.C.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Biology/I.C.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==486)
    {
        //icse class 12 computer
        var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Computer/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Computer/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);  
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Computer/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Computer/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Computer/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Computer/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Computer/I.C.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Computer/I.C.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==487)
    {
        //cbse class 12 biotech
        var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Biotechnology/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Biotechnology/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Biotechnology/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Biotechnology/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Biotechnology/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Biotechnology/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Biotechnology/I.C.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Biotechnology/I.C.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==51)
    {
        //cbse each class each subject ncert book
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/English/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/Science/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/Social Science/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/Mathematics/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/Computer/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/English/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Science/Physics/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Science/Chemistry/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Science/Biology/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/History/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/Geography/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/Economics/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/Political Science/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Mathematics/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>); 
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Computer/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/English/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Science/Physics/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Science/Chemistry/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Science/Biology/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/History/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/Geography/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/Economics/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/Political Science/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Mathematics/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Computer/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/English/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Science/Physics/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Science/Chemistry/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Science/Biology/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/History/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/Geography/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/Economics/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/Political Science/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Mathematics/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Computer/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/English/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Science/Physics/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Science/Chemistry/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Science/Biology/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/History/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/Geography/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/Economics/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/Political Science/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Mathematics/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Computer/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/English/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Physics/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Chemistry/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Biology/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/History/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Geography/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Economics/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Political Science/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Mathematics/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Computer/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
                data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/English/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Physics/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Chemistry/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Mathematics/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Biology/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Computer/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Biotechnology/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/English/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Physics/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Chemistry/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Mathematics/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Biology/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Computer/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Biotechnology/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==52)
    {
        //cbse each class each subject ncert solution
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/English/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/Science/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/Social Science/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/Mathematics/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/Computer/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/English/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Science/Physics/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Science/Chemistry/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Science/Biology/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/History/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/Geography/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/Economics/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/Political Science/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Mathematics/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>); 
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Computer/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/English/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Science/Physics/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Science/Chemistry/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Science/Biology/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/History/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/Geography/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/Economics/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/Political Science/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Mathematics/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Computer/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/English/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Science/Physics/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Science/Chemistry/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Science/Biology/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/History/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/Geography/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/Economics/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/Political Science/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Mathematics/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Computer/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/English/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Science/Physics/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Science/Chemistry/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Science/Biology/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/History/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/Geography/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/Economics/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/Political Science/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Mathematics/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Computer/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/English/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Physics/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Chemistry/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Biology/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/History/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Geography/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Economics/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Political Science/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Mathematics/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Computer/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
                data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/English/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Physics/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Chemistry/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Mathematics/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Biology/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Computer/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Biotechnology/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/English/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Physics/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Chemistry/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Mathematics/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Biology/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Computer/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Biotechnology/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==53)
    {
        //cbse each class each subject ncert exemplar book
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/Science/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/Social Science/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/Mathematics/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Science/Physics/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Science/Chemistry/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Science/Biology/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/History/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/Geography/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/Economics/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/Political Science/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Mathematics/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>); 
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Science/Physics/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Science/Chemistry/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Science/Biology/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/History/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/Geography/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/Economics/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/Political Science/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Mathematics/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Science/Physics/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Science/Chemistry/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Science/Biology/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/History/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/Geography/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/Economics/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/Political Science/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Mathematics/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Science/Physics/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Science/Chemistry/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Science/Biology/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/History/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/Geography/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/Economics/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/Political Science/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Mathematics/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Physics/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Chemistry/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Biology/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/History/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Geography/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Economics/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Political Science/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Mathematics/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Physics/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Chemistry/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Mathematics/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Biology/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Computer/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Biotechnology/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Physics/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Chemistry/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Mathematics/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Biology/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Computer/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Biotechnology/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==54)
    {
        //cbse each class each subject ncert exemplar solution
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/Science/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/Social Science/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/Mathematics/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Science/Physics/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Science/Chemistry/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Science/Biology/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/History/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/Geography/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/Economics/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/Political Science/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Mathematics/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>); 
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Science/Physics/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Science/Chemistry/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Science/Biology/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/History/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/Geography/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/Economics/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/Political Science/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Mathematics/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Science/Physics/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Science/Chemistry/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Science/Biology/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/History/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/Geography/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/Economics/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/Political Science/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Mathematics/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Science/Physics/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Science/Chemistry/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Science/Biology/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/History/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/Geography/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/Economics/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/Political Science/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Mathematics/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Physics/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Chemistry/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Biology/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/History/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Geography/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Economics/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Political Science/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Mathematics/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Physics/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Chemistry/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Mathematics/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Biology/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Computer/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Biotechnology/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Physics/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Chemistry/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Mathematics/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Biology/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Computer/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Biotechnology/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==55)
    {
        //cbse each class each subject lab manual
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/Science/NCERT/Lab Manuals"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Science/Physics/NCERT/Lab Manuals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Science/Chemistry/NCERT/Lab Manuals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Science/Biology/NCERT/Lab Manuals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Science/Physics/NCERT/Lab Manuals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Science/Chemistry/NCERT/Lab Manuals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Science/Biology/NCERT/Lab Manuals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Science/Physics/NCERT/Lab Manuals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Science/Chemistry/NCERT/Lab Manuals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Science/Biology/NCERT/Lab Manuals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Science/Physics/NCERT/Lab Manuals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Science/Chemistry/NCERT/Lab Manuals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Science/Biology/NCERT/Lab Manuals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Physics/NCERT/Lab Manuals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Chemistry/NCERT/Lab Manuals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Biology/NCERT/Lab Manuals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Physics/NCERT/Lab Manuals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Chemistry/NCERT/Lab Manuals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Biology/NCERT/Lab Manuals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Biotechnology/NCERT/Lab Manuals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Physics/NCERT/Lab Manuals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Chemistry/NCERT/Lab Manuals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Biology/NCERT/Lab Manuals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Biotechnology/NCERT/Lab Manuals"), JSON_PRETTY_PRINT);?>);
    }    
    else if(ch==611)
    {
        //Science Olympiad mock test
        var data_name=<?php echo json_encode(file_contents_of("./data/competitive exams/Olympiads/Science Olympiad/Mock Tests"), JSON_PRETTY_PRINT);?>;
    }
    else if(ch==612)
    {
        //Maths Olympiad mock test
        var data_name=<?php echo json_encode(file_contents_of("./data/competitive exams/Olympiads/Maths Olympiad/Mock Tests"), JSON_PRETTY_PRINT);?>;
    }
    else if(ch==613)
    {
        //Computer Olympiad mock test
        var data_name=<?php echo json_encode(file_contents_of("./data/competitive exams/Olympiads/Computer Olympiad/Mock Tests"), JSON_PRETTY_PRINT);?>;
    }
    else if(ch==614)
    {
        //English Olympiad mock test

        var data_name=<?php echo json_encode(file_contents_of("./data/competitive exams/Olympiads/English Olympiad/Mock Tests"), JSON_PRETTY_PRINT);?>;
    }
    else if(ch==62)
    {
        //NEET mock test
        var data_name=<?php echo json_encode(file_contents_of("./data/competitive exams/NEET/Mock Tests"), JSON_PRETTY_PRINT);?>;
    }
    else if(ch==63)
    {
        //JEE mock test
        var data_name=<?php echo json_encode(file_contents_of("./data/competitive exams/JEE/Mock Tests"), JSON_PRETTY_PRINT);?>;
    }
    else if(ch==64)
    {
        //WBJEE mock test
        var data_name=<?php echo json_encode(file_contents_of("./data/competitive exams/WBJEE/Mock Tests"), JSON_PRETTY_PRINT);?>;
    }
    else if(ch==65)
    {
        //NTSE mock test
        var data_name=<?php echo json_encode(file_contents_of("./data/competitive exams/NTSE/Mock Tests"), JSON_PRETTY_PRINT);?>;
    }
    else if(ch==66)
    {
        //KVPY mock test
        var data_name=<?php echo json_encode(file_contents_of("./data/competitive exams/KVPY/Mock Tests"), JSON_PRETTY_PRINT);?>;
    }
    else if(ch==67)
    {
        //IISER mock test
        var data_name=<?php echo json_encode(file_contents_of("./data/competitive exams/IISER/Mock Tests"), JSON_PRETTY_PRINT);?>;
    }
    else if(ch==68)
    {
        //NEST mock test
        var data_name=<?php echo json_encode(file_contents_of("./data/competitive exams/NEST/Mock Tests"), JSON_PRETTY_PRINT);?>;
    }
    else if(ch==69)
    {
        //NET mock test
        var data_name=<?php echo json_encode(file_contents_of("./data/competitive exams/NET/Mock Tests"), JSON_PRETTY_PRINT);?>;
    }
    else if(ch==601)
    {
        //IIT-JAM mock test
        var data_name=<?php echo json_encode(file_contents_of("./data/competitive exams/IIT-JAM/Mock Tests"), JSON_PRETTY_PRINT);?>;
    }
    else if(ch==602)
    {
        //JNU mock test
        var data_name=<?php echo json_encode(file_contents_of("./data/competitive exams/JNU/Mock Tests"), JSON_PRETTY_PRINT);?>;
    }
    else if(ch==711)
    {
        //cbse class 12
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/English/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/English/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/English/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/English/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/English/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/English/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/English/C.B.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/English/C.B.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Physics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Physics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Physics/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Physics/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Physics/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Physics/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Physics/NCERT/Lab Manuals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Physics/MCQs/JEE Mains & Advanced"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Physics/MCQs/NEET"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Physics/MCQs/WBJEE Engineering"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Physics/MCQs/WBJEE Medicals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Physics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Physics/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Physics/C.B.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Physics/C.B.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Chemistry/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Chemistry/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Chemistry/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Chemistry/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Chemistry/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Chemistry/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Chemistry/NCERT/Lab Manuals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Chemistry/MCQs/JEE Mains & Advanced"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Chemistry/MCQs/NEET"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Chemistry/MCQs/WBJEE Engineering"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Chemistry/MCQs/WBJEE Medicals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Chemistry/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Chemistry/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Chemistry/C.B.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Chemistry/C.B.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Mathematics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Mathematics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Mathematics/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Mathematics/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Mathematics/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Mathematics/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Mathematics/MCQs/JEE Mains & Advanced"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Mathematics/MCQs/WBJEE Engineering"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Mathematics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Mathematics/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Mathematics/C.B.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Mathematics/C.B.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Biology/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Biology/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Biology/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Biology/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Biology/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Biology/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Biology/NCERT/Lab Manuals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Biology/MCQs/NEET"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Biology/MCQs/WBJEE Medicals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Biology/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Biology/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Biology/C.B.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Biology/C.B.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Computer/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Computer/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);  
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Computer/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Computer/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Computer/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Computer/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Computer/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Computer/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Computer/C.B.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Computer/C.B.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Biotechnology/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Biotechnology/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Biotechnology/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Biotechnology/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Biotechnology/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Biotechnology/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Biotechnology/NCERT/Lab Manuals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Biotechnology/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Biotechnology/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Biotechnology/C.B.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XII/Biotechnology/C.B.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==712)
    {
        //icse class 12
        var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/English/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/English/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/English/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/English/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/English/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/English/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/English/I.C.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/English/I.C.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Physics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Physics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Physics/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Physics/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Physics/MCQs/JEE Mains & Advanced"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Physics/MCQs/NEET"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Physics/MCQs/WBJEE Engineering"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Physics/MCQs/WBJEE Medicals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Physics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Physics/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Physics/I.C.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Physics/I.C.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Chemistry/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Chemistry/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Chemistry/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Chemistry/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Chemistry/MCQs/JEE Mains & Advanced"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Chemistry/MCQs/NEET"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Chemistry/MCQs/WBJEE Engineering"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Chemistry/MCQs/WBJEE Medicals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Chemistry/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Chemistry/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Chemistry/I.C.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Chemistry/I.C.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Mathematics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Mathematics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Mathematics/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Mathematics/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Mathematics/MCQs/JEE Mains & Advanced"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Mathematics/MCQs/WBJEE Engineering"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Mathematics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Mathematics/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Mathematics/I.C.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Mathematics/I.C.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Biology/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Biology/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Biology/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Biology/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Biology/MCQs/NEET"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Biology/MCQs/WBJEE Medicals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Biology/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Biology/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Biology/I.C.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Biology/I.C.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Computer/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Computer/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);  
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Computer/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Computer/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Computer/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Computer/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Computer/I.C.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Computer/I.C.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Biotechnology/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Biotechnology/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Biotechnology/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Biotechnology/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Biotechnology/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Biotechnology/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Biotechnology/I.C.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XII/Biotechnology/I.C.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==721)
    {
        //cbse class 11
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/English/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/English/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/English/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/English/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/English/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/English/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/English/C.B.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/English/C.B.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Physics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Physics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Physics/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Physics/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Physics/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Physics/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Physics/NCERT/Lab Manuals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Physics/MCQs/JEE Mains & Advanced"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Physics/MCQs/NEET"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Physics/MCQs/WBJEE Engineering"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Physics/MCQs/WBJEE Medicals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Physics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Physics/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Physics/C.B.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Physics/C.B.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Chemistry/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Chemistry/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Chemistry/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Chemistry/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Chemistry/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Chemistry/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Chemistry/NCERT/Lab Manuals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Chemistry/MCQs/JEE Mains & Advanced"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Chemistry/MCQs/NEET"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Chemistry/MCQs/WBJEE Engineering"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Chemistry/MCQs/WBJEE Medicals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Chemistry/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Chemistry/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Chemistry/C.B.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Chemistry/C.B.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Mathematics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Mathematics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Mathematics/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Mathematics/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Mathematics/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Mathematics/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Mathematics/MCQs/JEE Mains & Advanced"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Mathematics/MCQs/WBJEE Engineering"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Mathematics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Mathematics/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Mathematics/C.B.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Mathematics/C.B.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Biology/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Biology/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Biology/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Biology/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Biology/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Biology/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Biology/NCERT/Lab Manuals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Biology/MCQs/NEET"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Biology/MCQs/WBJEE Medicals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Biology/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Biology/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Biology/C.B.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Biology/C.B.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Computer/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Computer/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);  
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Computer/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Computer/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Computer/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Computer/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Computer/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Computer/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Computer/C.B.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Computer/C.B.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Biotechnology/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Biotechnology/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Biotechnology/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Biotechnology/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Biotechnology/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Biotechnology/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Biotechnology/NCERT/Lab Manuals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Biotechnology/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Biotechnology/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Biotechnology/C.B.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class XI/Biotechnology/C.B.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==722)
    {
        //icse class 11
        var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/English/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/English/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/English/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/English/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/English/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/English/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/English/I.C.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/English/I.C.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Physics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Physics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Physics/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Physics/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Physics/MCQs/JEE Mains & Advanced"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Physics/MCQs/NEET"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Physics/MCQs/WBJEE Engineering"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Physics/MCQs/WBJEE Medicals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Physics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Physics/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Physics/I.C.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Physics/I.C.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Chemistry/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Chemistry/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Chemistry/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Chemistry/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Chemistry/MCQs/JEE Mains & Advanced"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Chemistry/MCQs/NEET"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Chemistry/MCQs/WBJEE Engineering"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Chemistry/MCQs/WBJEE Medicals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Chemistry/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Chemistry/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Chemistry/I.C.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Chemistry/I.C.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Mathematics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Mathematics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Mathematics/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Mathematics/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Mathematics/MCQs/JEE Mains & Advanced"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Mathematics/MCQs/WBJEE Engineering"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Mathematics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Mathematics/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Mathematics/I.C.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Mathematics/I.C.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Biology/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Biology/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Biology/NCERT/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Biology/NCERT/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Biology/MCQs/NEET"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Biology/MCQs/WBJEE Medicals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Biology/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Biology/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Biology/I.C.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Biology/I.C.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Computer/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Computer/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);  
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Computer/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Computer/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Computer/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Computer/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Computer/I.C.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Computer/I.C.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Biotechnology/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Biotechnology/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Biotechnology/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Biotechnology/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Biotechnology/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Biotechnology/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Biotechnology/I.C.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class XI/Biotechnology/I.C.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==731)
    {
        //cbse class 10
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/English/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/English/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/English/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/English/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/English/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/English/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/English/C.B.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/English/C.B.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Physics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Physics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Physics/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Physics/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Physics/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Physics/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Physics/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Physics/NCERT/Lab Manuals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Physics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Physics/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Physics/C.B.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Physics/C.B.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Chemistry/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Chemistry/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Chemistry/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Chemistry/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Chemistry/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Chemistry/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Chemistry/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Chemistry/NCERT/Lab Manuals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Chemistry/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Chemistry/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Chemistry/C.B.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Chemistry/C.B.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Biology/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Biology/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Biology/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Biology/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Biology/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Biology/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Biology/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Biology/NCERT/Lab Manuals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Biology/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Biology/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Biology/C.B.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Science/Biology/C.B.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/History/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/History/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/History/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/History/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/History/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/History/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/History/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/History/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/History/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/History/C.B.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/History/C.B.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Geography/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Geography/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Geography/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Geography/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Geography/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Geography/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Geography/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Geography/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Geography/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Geography/C.B.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Geography/C.B.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Economics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Economics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Economics/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Economics/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Economics/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Economics/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Economics/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Economics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Economics/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Economics/C.B.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Economics/C.B.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Political Science/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Political Science/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Political Science/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Political Science/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Political Science/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Political Science/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Political Science/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Political Science/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Political Science/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Political Science/C.B.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Social Science/Political Science/C.B.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Mathematics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Mathematics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Mathematics/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Mathematics/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Mathematics/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Mathematics/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Mathematics/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Mathematics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Mathematics/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Mathematics/C.B.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Mathematics/C.B.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Computer/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Computer/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Computer/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Computer/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Computer/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Computer/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Computer/C.B.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/Computer/C.B.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==732)
    {
        //icse class 10
        var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/English/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/English/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/English/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/English/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/English/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/English/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/English/I.C.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class X/English/I.C.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Science/Physics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Science/Physics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Science/Physics/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Science/Physics/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Science/Physics/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Science/Physics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Science/Physics/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Science/Physics/I.C.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Science/Physics/I.C.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Science/Chemistry/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Science/Chemistry/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Science/Chemistry/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Science/Chemistry/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Science/Chemistry/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Science/Chemistry/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Science/Chemistry/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Science/Chemistry/I.C.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Science/Chemistry/I.C.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Science/Biology/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Science/Biology/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Science/Biology/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Science/Biology/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Science/Biology/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Science/Biology/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Science/Biology/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Science/Biology/I.C.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Science/Biology/I.C.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Social Science/History/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Social Science/History/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Social Science/History/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Social Science/History/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Social Science/History/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Social Science/History/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Social Science/History/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Social Science/History/I.C.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Social Science/History/I.C.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Social Science/Geography/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Social Science/Geography/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Social Science/Geography/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Social Science/Geography/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Social Science/Geography/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Social Science/Geography/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Social Science/Geography/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Social Science/Geography/I.C.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Social Science/Geography/I.C.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Social Science/Economics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Social Science/Economics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Social Science/Economics/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Social Science/Economics/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Social Science/Economics/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Social Science/Economics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Social Science/Economics/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Social Science/Economics/I.C.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Social Science/Economics/I.C.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Social Science/Political Science/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Social Science/Political Science/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Social Science/Political Science/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Social Science/Political Science/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Social Science/Political Science/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Social Science/Political Science/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Social Science/Political Science/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Social Science/Political Science/I.C.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Social Science/Political Science/I.C.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Mathematics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Mathematics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Mathematics/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Mathematics/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Mathematics/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Mathematics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Mathematics/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Mathematics/I.C.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Mathematics/I.C.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Computer/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Computer/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Computer/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Computer/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Computer/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Computer/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Computer/I.C.S.E. Boards Papers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class X/Computer/I.C.S.E. Boards Sample Papers"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==741)
    {
        //cbse class 9
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/English/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/English/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/English/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/English/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/English/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/English/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Science/Physics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Science/Physics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Science/Physics/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Science/Physics/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Science/Physics/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Science/Physics/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Science/Physics/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Science/Physics/NCERT/Lab Manuals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Science/Physics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Science/Physics/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Science/Chemistry/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Science/Chemistry/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Science/Chemistry/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Science/Chemistry/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Science/Chemistry/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Science/Chemistry/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Science/Chemistry/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Science/Chemistry/NCERT/Lab Manuals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Science/Chemistry/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Science/Chemistry/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Science/Biology/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Science/Biology/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Science/Biology/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Science/Biology/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Science/Biology/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Science/Biology/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Science/Biology/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Science/Biology/NCERT/Lab Manuals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Science/Biology/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Science/Biology/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/History/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/History/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/History/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/History/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/History/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/History/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/History/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/History/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/History/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/Geography/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/Geography/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/Geography/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/Geography/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/Geography/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/Geography/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/Geography/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/Geography/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/Geography/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/Economics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/Economics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/Economics/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/Economics/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/Economics/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/Economics/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/Economics/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/Economics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/Economics/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/Political Science/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/Political Science/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/Political Science/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/Political Science/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/Political Science/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/Political Science/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/Political Science/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/Political Science/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Social Science/Political Science/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Mathematics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Mathematics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Mathematics/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Mathematics/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Mathematics/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Mathematics/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Mathematics/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Mathematics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Mathematics/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Computer/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Computer/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Computer/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Computer/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Computer/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class IX/Computer/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==742)
    {
        //icse class 9
        var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/English/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/English/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/English/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/English/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/English/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/English/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Science/Physics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Science/Physics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Science/Physics/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Science/Physics/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Science/Physics/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Science/Physics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Science/Physics/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Science/Chemistry/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Science/Chemistry/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Science/Chemistry/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Science/Chemistry/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Science/Chemistry/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Science/Chemistry/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Science/Chemistry/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Science/Biology/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Science/Biology/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Science/Biology/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Science/Biology/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Science/Biology/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Science/Biology/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Science/Biology/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Social Science/History/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Social Science/History/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Social Science/History/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Social Science/History/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Social Science/History/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Social Science/History/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Social Science/History/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Social Science/Geography/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Social Science/Geography/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Social Science/Geography/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Social Science/Geography/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Social Science/Geography/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Social Science/Geography/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Social Science/Geography/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Social Science/Economics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Social Science/Economics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Social Science/Economics/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Social Science/Economics/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Social Science/Economics/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Social Science/Economics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Social Science/Economics/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Social Science/Political Science/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Social Science/Political Science/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Social Science/Political Science/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Social Science/Political Science/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Social Science/Political Science/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Social Science/Political Science/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Social Science/Political Science/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Mathematics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Mathematics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Mathematics/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Mathematics/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Mathematics/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Mathematics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Mathematics/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Computer/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Computer/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Computer/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Computer/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Computer/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class IX/Computer/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==751)
    {
        //cbse class 8
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/English/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/English/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/English/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/English/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/English/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/English/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Science/Physics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Science/Physics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Science/Physics/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Science/Physics/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Science/Physics/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Science/Physics/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Science/Physics/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Science/Physics/NCERT/Lab Manuals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Science/Physics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Science/Physics/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Science/Chemistry/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Science/Chemistry/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Science/Chemistry/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Science/Chemistry/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Science/Chemistry/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Science/Chemistry/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Science/Chemistry/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Science/Chemistry/NCERT/Lab Manuals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Science/Chemistry/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Science/Chemistry/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Science/Biology/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Science/Biology/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Science/Biology/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Science/Biology/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Science/Biology/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Science/Biology/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Science/Biology/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Science/Biology/NCERT/Lab Manuals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Science/Biology/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Science/Biology/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/History/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/History/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/History/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/History/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/History/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/History/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/History/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/History/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/History/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/Geography/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/Geography/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/Geography/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/Geography/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/Geography/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/Geography/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/Geography/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/Geography/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/Geography/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/Economics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/Economics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/Economics/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/Economics/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/Economics/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/Economics/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/Economics/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/Economics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/Economics/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/Political Science/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/Political Science/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/Political Science/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/Political Science/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/Political Science/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/Political Science/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/Political Science/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/Political Science/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Social Science/Political Science/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Mathematics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Mathematics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Mathematics/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Mathematics/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Mathematics/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Mathematics/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Mathematics/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Mathematics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Mathematics/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Computer/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Computer/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Computer/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Computer/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Computer/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VIII/Computer/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==752)
    {
        //icse class 8
        var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/English/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/English/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/English/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/English/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/English/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/English/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Science/Physics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Science/Physics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Science/Physics/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Science/Physics/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Science/Physics/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Science/Physics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Science/Physics/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Science/Chemistry/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Science/Chemistry/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Science/Chemistry/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Science/Chemistry/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Science/Chemistry/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Science/Chemistry/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Science/Chemistry/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Science/Biology/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Science/Biology/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Science/Biology/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Science/Biology/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Science/Biology/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Science/Biology/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Science/Biology/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Social Science/History/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Social Science/History/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Social Science/History/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Social Science/History/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Social Science/History/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Social Science/History/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Social Science/History/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Social Science/Geography/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Social Science/Geography/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Social Science/Geography/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Social Science/Geography/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Social Science/Geography/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Social Science/Geography/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Social Science/Geography/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Social Science/Economics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Social Science/Economics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Social Science/Economics/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Social Science/Economics/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Social Science/Economics/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Social Science/Economics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Social Science/Economics/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Social Science/Political Science/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Social Science/Political Science/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Social Science/Political Science/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Social Science/Political Science/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Social Science/Political Science/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Social Science/Political Science/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Social Science/Political Science/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Mathematics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Mathematics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Mathematics/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Mathematics/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Mathematics/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Mathematics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Mathematics/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Computer/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Computer/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Computer/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Computer/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Computer/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VIII/Computer/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==761)
    {
        //cbse class 7
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/English/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/English/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/English/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/English/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/English/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/English/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Science/Physics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Science/Physics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Science/Physics/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Science/Physics/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Science/Physics/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Science/Physics/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Science/Physics/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Science/Physics/NCERT/Lab Manuals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Science/Physics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Science/Physics/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Science/Chemistry/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Science/Chemistry/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Science/Chemistry/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Science/Chemistry/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Science/Chemistry/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Science/Chemistry/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Science/Chemistry/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Science/Chemistry/NCERT/Lab Manuals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Science/Chemistry/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Science/Chemistry/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Science/Biology/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Science/Biology/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Science/Biology/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Science/Biology/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Science/Biology/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Science/Biology/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Science/Biology/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Science/Biology/NCERT/Lab Manuals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Science/Biology/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Science/Biology/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/History/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/History/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/History/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/History/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/History/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/History/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/History/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/History/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/History/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/Geography/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/Geography/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/Geography/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/Geography/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/Geography/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/Geography/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/Geography/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/Geography/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/Geography/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/Economics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/Economics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/Economics/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/Economics/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/Economics/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/Economics/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/Economics/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/Economics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/Economics/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/Political Science/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/Political Science/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/Political Science/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/Political Science/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/Political Science/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/Political Science/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/Political Science/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/Political Science/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Social Science/Political Science/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Mathematics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Mathematics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Mathematics/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Mathematics/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Mathematics/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Mathematics/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Mathematics/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Mathematics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Mathematics/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Computer/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Computer/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Computer/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Computer/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Computer/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VII/Computer/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==762)
    {
        //icse class 7
        var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/English/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/English/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/English/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/English/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/English/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/English/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Science/Physics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Science/Physics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Science/Physics/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Science/Physics/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Science/Physics/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Science/Physics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Science/Physics/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Science/Chemistry/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Science/Chemistry/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Science/Chemistry/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Science/Chemistry/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Science/Chemistry/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Science/Chemistry/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Science/Chemistry/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Science/Biology/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Science/Biology/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Science/Biology/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Science/Biology/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Science/Biology/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Science/Biology/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Science/Biology/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Social Science/History/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Social Science/History/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Social Science/History/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Social Science/History/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Social Science/History/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Social Science/History/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Social Science/History/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Social Science/Geography/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Social Science/Geography/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Social Science/Geography/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Social Science/Geography/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Social Science/Geography/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Social Science/Geography/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Social Science/Geography/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Social Science/Economics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Social Science/Economics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Social Science/Economics/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Social Science/Economics/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Social Science/Economics/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Social Science/Economics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Social Science/Economics/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Social Science/Political Science/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Social Science/Political Science/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Social Science/Political Science/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Social Science/Political Science/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Social Science/Political Science/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Social Science/Political Science/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Social Science/Political Science/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Mathematics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Mathematics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Mathematics/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Mathematics/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Mathematics/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Mathematics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Mathematics/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Computer/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Computer/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Computer/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Computer/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Computer/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VII/Computer/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==771)
    {
        //cbse class 6
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/English/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/English/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/English/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/English/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/English/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/English/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Science/Physics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Science/Physics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Science/Physics/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Science/Physics/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Science/Physics/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Science/Physics/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Science/Physics/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Science/Physics/NCERT/Lab Manuals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Science/Physics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Science/Physics/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Science/Chemistry/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Science/Chemistry/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Science/Chemistry/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Science/Chemistry/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Science/Chemistry/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Science/Chemistry/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Science/Chemistry/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Science/Chemistry/NCERT/Lab Manuals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Science/Chemistry/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Science/Chemistry/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Science/Biology/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Science/Biology/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Science/Biology/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Science/Biology/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Science/Biology/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Science/Biology/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Science/Biology/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Science/Biology/NCERT/Lab Manuals"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Science/Biology/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Science/Biology/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/History/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/History/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/History/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/History/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/History/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/History/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/History/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/History/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/History/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/Geography/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/Geography/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/Geography/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/Geography/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/Geography/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/Geography/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/Geography/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/Geography/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/Geography/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/Economics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/Economics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/Economics/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/Economics/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/Economics/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/Economics/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/Economics/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/Economics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/Economics/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/Political Science/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/Political Science/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/Political Science/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/Political Science/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/Political Science/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/Political Science/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/Political Science/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/Political Science/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Social Science/Political Science/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Mathematics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Mathematics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Mathematics/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Mathematics/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Mathematics/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Mathematics/NCERT/NCERT Exemplar Book"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Mathematics/NCERT/NCERT Exemplar Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Mathematics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Mathematics/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Computer/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Computer/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Computer/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Computer/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Computer/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class VI/Computer/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==772)
    {
        //icse class 6
        var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/English/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/English/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/English/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/English/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/English/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/English/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Science/Physics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Science/Physics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Science/Physics/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Science/Physics/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Science/Physics/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Science/Physics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Science/Physics/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Science/Chemistry/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Science/Chemistry/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Science/Chemistry/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Science/Chemistry/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Science/Chemistry/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Science/Chemistry/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Science/Chemistry/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Science/Biology/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Science/Biology/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Science/Biology/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Science/Biology/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Science/Biology/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Science/Biology/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Science/Biology/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Social Science/History/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Social Science/History/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Social Science/History/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Social Science/History/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Social Science/History/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Social Science/History/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Social Science/History/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Social Science/Geography/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Social Science/Geography/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Social Science/Geography/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Social Science/Geography/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Social Science/Geography/Textbook Solution"), JSON_PRETTY_PRINT);?>);
         data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Social Science/Geography/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Social Science/Geography/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Social Science/Economics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Social Science/Economics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Social Science/Economics/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Social Science/Economics/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Social Science/Economics/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Social Science/Economics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Social Science/Economics/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Social Science/Political Science/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Social Science/Political Science/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Social Science/Political Science/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Social Science/Political Science/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Social Science/Political Science/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Social Science/Political Science/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Social Science/Political Science/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Mathematics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Mathematics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Mathematics/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Mathematics/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Mathematics/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Mathematics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Mathematics/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Computer/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Computer/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Computer/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Computer/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Computer/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class VI/Computer/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==781)
    {
        //cbse class 1to5
        var data_name=<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/English/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/English/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/English/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/English/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/English/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/English/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/Science/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/Science/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/Science/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/Science/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/Science/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/Science/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/Science/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/Social Science/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/Social Science/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/Social Science/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/Social Science/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/Social Science/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/Social Science/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/Social Science/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/Mathematics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/Mathematics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/Mathematics/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/Mathematics/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/Mathematics/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/Mathematics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/Mathematics/Worksheets"), JSON_PRETTY_PRINT);?>); 
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/Computer/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/Computer/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/Computer/NCERT/NCERT Books"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/Computer/NCERT/NCERT Solutions"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/Computer/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/C.B.S.E/Class I-V/Computer/Worksheets"), JSON_PRETTY_PRINT);?>);
    }
    else if(ch==782)
    {
        //icse class 1to5
        var data_name=<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class I-V/English/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>;
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class I-V/English/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class I-V/English/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class I-V/English/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class I-V/English/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class I-V/English/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class I-V/Science/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class I-V/Science/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class I-V/Science/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class I-V/Science/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class I-V/Science/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class I-V/Science/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class I-V/Science/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class I-V/Social Science/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class I-V/Social Science/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class I-V/Social Science/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class I-V/Social Science/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class I-V/Social Science/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class I-V/Social Science/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class I-V/Social Science/Worksheets"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class I-V/Mathematics/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class I-V/Mathematics/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class I-V/Mathematics/MCQs"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class I-V/Mathematics/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class I-V/Mathematics/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class I-V/Mathematics/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class I-V/Mathematics/Worksheets"), JSON_PRETTY_PRINT);?>); 
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class I-V/Computer/Conceptual Questions & Answers"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class I-V/Computer/HOTS Questions & Answers"), JSON_PRETTY_PRINT);?>);   
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class I-V/Computer/Textbook"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class I-V/Computer/Textbook Solution"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class I-V/Computer/Revision Notes"), JSON_PRETTY_PRINT);?>);
        data_name=data_name.concat(<?php echo json_encode(file_contents_of("./data/I.C.S.E/Class I-V/Computer/Worksheets"), JSON_PRETTY_PRINT);?>);
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
            if(file_name)
            {   
                copy.innerHTML="<div class='tdElement'><a href='try.html?id="+data_name[i]+"' target='_blank'>"+file_name+"</a></div>"; 
                node.appendChild(copy.cloneNode(true));
            }
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