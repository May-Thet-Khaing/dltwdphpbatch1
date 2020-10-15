<?php
$hour=22;

?>
<html>
<head>Greeting</head>
<body>
<?php
if($hour<12){
    echo "Good Morning";
}elseif($hour<18){
echo "Good Afternoon";
}elseif($hour<22){
    echo "Good Evening";
    }else{
        echo "Good Night";
        }
?>
<?php
echo"
<div id='top'><a href='#p1'>Paragraph1</a> <a href='#p2'>Paragraph2</a> 
<a href='#p3'>Paragraph3</a>  <a href='#p4'>Paragraph4</a></div>
<div>
<h3 id='#p1'>Paragraph 1</h3>
<p>
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
</p>
<h3 id='#p2'>Paragraph 2</h3>
<p>
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
</p>
<h3 id='#p3'>Paragraph 3</h3>
<p>
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
</p>
<h3 id='#p4'>Paragraph 4</h3>
<p>
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
</p>
<a href='#top'>Go Top</a>
</div>"
?>

</body>
<footer></footer></html>