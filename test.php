<?php include 'php/functions.php';?>

<script>
function on_load()
{
    var ch=arguments[0];

    //get the name of the directory
    if(ch==1)
        var data_name=<?php echo json_encode(file_contents_of("./images/blog"), JSON_PRETTY_PRINT)?>;
    else if(ch==2)
        var data_name=<?php echo json_encode(file_contents_of("./images/bg"), JSON_PRETTY_PRINT)?>;
    else if(ch==3)
        var data_name=<?php echo json_encode(file_contents_of("./images/courses"), JSON_PRETTY_PRINT)?>;
    else
        var data_name=<?php echo json_encode(file_contents_of("./images/slider"), JSON_PRETTY_PRINT)?>;

    if(data_name.length==0)
        alert("Empty Directory");
    else
    {   
        node=document.querySelector('#test');
        copy=node.cloneNode(true);
        for(i=2;i<data_name.length;i++)
        {
            copy.innerHTML="<a href='"+data_name[i]+"' target='_blank'>"+data_name[i]+"</a>";   
            node.appendChild(copy.cloneNode(true));
        }
    }
}
</script>
<body>
<input type="button" onclick="on_load(1)" value="click1"><br><br>
<input type="button" onclick="on_load(2)" value="click2"><br><br>
<input type="button" onclick="on_load(3)" value="click3"><br><br>
<input type="button" onclick="on_load(4)" value="click4"><br><br>
<div id="test"></div>
</body>